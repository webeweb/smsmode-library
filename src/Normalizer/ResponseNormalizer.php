<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Normalizer;

use DateTime;
use WBW\Library\Core\Argument\ArrayHelper;
use WBW\Library\SMSMode\API\StatusInterface;
use WBW\Library\SMSMode\Model\AbstractResponse;
use WBW\Library\SMSMode\Model\AccountBalanceResponse;
use WBW\Library\SMSMode\Model\AddingContactResponse;
use WBW\Library\SMSMode\Model\CheckingSMSMessageStatusResponse;
use WBW\Library\SMSMode\Model\CreatingAPIKeyResponse;
use WBW\Library\SMSMode\Model\CreatingSubAccountResponse;
use WBW\Library\SMSMode\Model\DeletingSMSResponse;
use WBW\Library\SMSMode\Model\DeletingSubAccountResponse;
use WBW\Library\SMSMode\Model\DeliveryReport;
use WBW\Library\SMSMode\Model\DeliveryReportResponse;
use WBW\Library\SMSMode\Model\RetrievingSMSReplyResponse;
use WBW\Library\SMSMode\Model\SendingSMSMessageResponse;
use WBW\Library\SMSMode\Model\SendingTextToSpeechSMSResponse;
use WBW\Library\SMSMode\Model\SentSMSMessage;
use WBW\Library\SMSMode\Model\SentSMSMessageListResponse;
use WBW\Library\SMSMode\Model\SMSReply;
use WBW\Library\SMSMode\Model\TransferringCreditsResponse;

/**
 * Response normalizer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Normalizer
 */
class ResponseNormalizer {

    /**
     * Denormalize date/time format.
     *
     * @var string
     */
    const DENORMALIZE_DATETIME_FORMAT = RequestNormalizer::NORMALIZE_DATETIME_FORMAT;

    /**
     * Denormalize date format.
     *
     * @var string
     */
    const DENORMALIZE_DATE_FORMAT = RequestNormalizer::NORMALIZE_DATE_FORMAT;

    /**
     * Denormalize delimiter.
     *
     * @var string
     */
    const DENORMALIZE_DELIMITER = "|";

    /**
     * Denormalize an account balance response.
     *
     * @param string $rawResponse The response.
     * @return AccountBalanceResponse Returns the account balance response.
     */
    public static function denormalizeAccountBalanceResponse($rawResponse) {

        $model = new AccountBalanceResponse();
        if (1 === preg_match("/^[0-9]{1,}\.[0-9]{1,}$/", trim($rawResponse))) {
            $model->setAccountBalance(floatval(trim($rawResponse)));
        }

        return $model;
    }

    /**
     * Denormalize an adding contact response.
     *
     * @param string $rawResponse The raw response.
     * @return AddingContactResponse Returns the adding contact response.
     */
    public static function denormalizeAddingContactResponse($rawResponse) {

        $model = new AddingContactResponse();
        static::denormalizeResponse($model, $rawResponse);

        return $model;
    }

    /**
     * Denormalize a checking SMS message status response.
     *
     * @param string $rawResponse The raw response.
     * @return CheckingSMSMessageStatusResponse Returns the checking SMS message status response.
     */
    public static function denormalizeCheckingSMSMessageStatusResponse($rawResponse) {

        $model = new CheckingSMSMessageStatusResponse();
        static::denormalizeResponse($model, $rawResponse);

        return $model;
    }

    /**
     * Denormalize a creating API key response.
     *
     * @param string $rawResponse The raw response.
     * @return CreatingAPIKeyResponse Returns the creating API key response.
     */
    public static function denormalizeCreatingAPIKeyResponse($rawResponse) {

        $decodedResponse = json_decode(trim($rawResponse), true);

        $creationDate = DateTime::createFromFormat(self::DENORMALIZE_DATE_FORMAT, ArrayHelper::get($decodedResponse, "creationDate"));
        $expiration   = DateTime::createFromFormat(self::DENORMALIZE_DATE_FORMAT, ArrayHelper::get($decodedResponse, "expiration"));

        $model = new CreatingAPIKeyResponse();
        $model->setId(ArrayHelper::get($decodedResponse, "id"));
        $model->setAccessToken(ArrayHelper::get($decodedResponse, "accessToken"));
        $model->setAccount(ArrayHelper::get($decodedResponse, "account"));
        $model->setCreationDate(false !== $creationDate ? $creationDate : null);
        $model->setState(ArrayHelper::get($decodedResponse, "state"));
        $model->setExpiration(false !== $expiration ? $expiration : null);
        $model->setState(ArrayHelper::get($decodedResponse, "state"));

        return $model;
    }

    /**
     * Denormalize a creating sub-account response.
     *
     * @param string $rawResponse The raw response.
     * @return CreatingSubAccountResponse Returns the creating sub-account response.
     */
    public static function denormalizeCreatingSubAccountResponse($rawResponse) {

        $model = new CreatingSubAccountResponse();
        static::denormalizeResponse($model, $rawResponse);

        return $model;
    }

    /**
     * Denormalize a deleting SMS response.
     *
     * @param string $rawResponse The raw response.
     * @return DeletingSMSResponse Returns the deleting SMS response.
     */
    public static function denormalizeDeletingSMSResponse($rawResponse) {

        $model = new DeletingSMSResponse();
        static::denormalizeResponse($model, $rawResponse);

        return $model;
    }

    /**
     * Denormalize a deleting su-account response.
     *
     * @param string $rawResponse The raw response.
     * @return DeletingSubAccountResponse Returns the deleting sub-account response.
     */
    public static function denormalizeDeletingSubAccountResponse($rawResponse) {

        $model = new DeletingSubAccountResponse();
        static::denormalizeResponse($model, $rawResponse);

        return $model;
    }

    /**
     * Denormalize a delivery report.
     *
     * @param string $rawResponse The raw response.
     * @return DeliveryReport Returns the delivery report.
     */
    protected static function denormalizeDeliveryReport($rawResponse) {

        $model = new DeliveryReport();

        $responses = explode(" ", preg_replace("/\ {1,}/", " ", trim($rawResponse)));
        if (count($responses) < 2) {
            return $model;
        }

        $model->setCode(intval(trim($responses[1])));
        $model->setNumero(trim($responses[0]));

        return $model;
    }

    /**
     * Denormalize a delivery report response.
     *
     * @param string $rawResponse The raw response.
     * @return DeliveryReportResponse Returns the delivery report response.
     */
    public static function denormalizeDeliveryReportResponse($rawResponse) {

        $model = new DeliveryReportResponse();
        if (1 === preg_match("/^(31|35|61)\ \|/", trim($rawResponse))) {
            static::denormalizeResponse($model, $rawResponse);
            return $model;
        }

        $models = [];

        $responses = explode(self::DENORMALIZE_DELIMITER, trim($rawResponse));
        foreach ($responses as $current) {
            $models[] = static::denormalizeDeliveryReport($current);
        }

        $model->setDeliveryReports($models);

        return $model;
    }

    /**
     * Denormalize a response.
     *
     * @param AbstractResponse $model The response.
     * @param string $rawResponse The raw response.
     * @return void
     */
    protected static function denormalizeResponse(AbstractResponse $model, $rawResponse) {

        $responses = explode(self::DENORMALIZE_DELIMITER, trim($rawResponse));
        if (count($responses) < 2) {
            return;
        }

        $model->setCode(intval(trim($responses[0])));
        $model->setDescription(trim($responses[1]));
    }

    /**
     * Denormalize a retrieving SMS reply response.
     *
     * @param string $rawResponse The raw response.
     * @return RetrievingSMSReplyResponse Returns the retrieving SMS reply response.
     */
    public static function denormalizeRetrievingSMSReplyResponse($rawResponse) {

        $model = new RetrievingSMSReplyResponse();
        if (1 === preg_match("/^(32|35)\ \|/", trim($rawResponse))) {
            static::denormalizeResponse($model, $rawResponse);
            return $model;
        }

        $models = [];

        $responses = explode("\n", trim($rawResponse));
        foreach ($responses as $current) {
            $models[] = static::denormalizeSMSReply($current);
        }

        $model->setSMSReplies($models);

        return $model;
    }

    /**
     * Denormalize a SMS reply.
     *
     * @param string $rawResponse The raw response.
     * @return SMSReply Returns the SMS reply.
     */
    protected static function denormalizeSMSReply($rawResponse) {

        $model = new SMSReply();

        $responses = explode(self::DENORMALIZE_DELIMITER, trim($rawResponse));
        if (count($responses) < 6) {
            return $model;
        }

        $receptionDate = DateTime::createFromFormat(self::DENORMALIZE_DATETIME_FORMAT, trim($responses[1]));

        $model->setResponseID(trim($responses[0]));
        if (false !== $receptionDate) {
            $model->setReceptionDate($receptionDate);
        }
        $model->setFrom(trim($responses[2]));
        $model->setText(trim($responses[3]));
        $model->setTo(trim($responses[4]));
        $model->setMessageID(trim($responses[5]));

        return $model;
    }

    /**
     * Denormalize a sending SMS message response.
     *
     * @param string $rawResponse The raw response.
     * @return SendingSMSMessageResponse Returns the sending SMS message response.
     */
    public static function denormalizeSendingSMSMessageResponse($rawResponse) {

        $model = new SendingSMSMessageResponse();
        static::denormalizeResponse($model, $rawResponse);

        $responses = explode(self::DENORMALIZE_DELIMITER, trim($rawResponse));
        if (StatusInterface::STATUS_CODE_0 === $model->getCode() && 3 === count($responses)) {
            $model->setSmsID(trim($responses[2]));
        }

        return $model;
    }

    /**
     * Denormalize a sending text-to-speech SMS response.
     *
     * @param string $rawResponse The raw response.
     * @return SendingTextToSpeechSMSResponse Returns the sending text-to-speech SMS response.
     */
    public static function denormalizeSendingTextToSpeechSMSResponse($rawResponse) {

        $model = new SendingTextToSpeechSMSResponse();
        static::denormalizeResponse($model, $rawResponse);

        $responses = explode(self::DENORMALIZE_DELIMITER, trim($rawResponse));
        if (StatusInterface::STATUS_CODE_0 === $model->getCode() && 3 === count($responses)) {
            $model->setSmsID(trim($responses[2]));
        }

        return $model;
    }

    /**
     * Denormalize a sent SMS message.
     *
     * @param string $rawResponse The raw response.
     * @return SentSMSMessage Returns the sent SMS message.
     */
    protected static function denormalizeSentSMSMessage($rawResponse) {

        $model = new SentSMSMessage();

        $responses = explode(self::DENORMALIZE_DELIMITER, trim($rawResponse));
        if (count($responses) < 6) {
            return $model;
        }

        $sendDate = DateTime::createFromFormat(self::DENORMALIZE_DATETIME_FORMAT, trim($responses[1]));

        $model->setSmsID(trim($responses[0]));
        if (false !== $sendDate) {
            $model->setSendDate($sendDate);
        }
        $model->setMessage(trim($responses[2]));
        $model->setNumero(trim($responses[3]));
        $model->setCostCredits(floatval(trim($responses[4])));
        $model->setRecipientCount(intval(trim($responses[5])));

        return $model;
    }

    /**
     * Denormalize a sent SMS message list response.
     *
     * @param string $rawResponse The raw response.
     * @return SentSMSMessageListResponse Returns the sent SMS message list response.
     */
    public static function denormalizeSentSMSMessageListResponse($rawResponse) {

        $model = new SentSMSMessageListResponse();
        if (1 === preg_match("/^(31|32|35)\ \|/", trim($rawResponse))) {
            static::denormalizeResponse($model, $rawResponse);
            return $model;
        }

        $models = [];

        $responses = explode("\n", trim($rawResponse));
        foreach ($responses as $current) {
            $models[] = static::denormalizeSentSMSMessage($current);
        }

        $model->setSentSMSMessages($models);

        return $model;
    }

    /**
     * Denormalize a transferring credits response.
     *
     * @param string $rawResponse The raw response.
     * @return TransferringCreditsResponse Returns the transferring credits response.
     */
    public static function denormalizeTransferringCreditsResponse($rawResponse) {

        $model = new TransferringCreditsResponse();
        static::denormalizeResponse($model, $rawResponse);

        return $model;
    }
}
