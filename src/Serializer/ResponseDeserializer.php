<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Serializer;

use DateTime;
use WBW\Library\SmsMode\Api\ResponseInterface;
use WBW\Library\SmsMode\Model\DeliveryReport;
use WBW\Library\SmsMode\Model\SentSmsMessage;
use WBW\Library\SmsMode\Model\SmsReply;
use WBW\Library\SmsMode\Response\AbstractResponse;
use WBW\Library\SmsMode\Response\AccountBalanceResponse;
use WBW\Library\SmsMode\Response\AddingContactResponse;
use WBW\Library\SmsMode\Response\CheckingSmsMessageStatusResponse;
use WBW\Library\SmsMode\Response\CreatingApiKeyResponse;
use WBW\Library\SmsMode\Response\CreatingSubAccountResponse;
use WBW\Library\SmsMode\Response\DeletingSmsResponse;
use WBW\Library\SmsMode\Response\DeletingSubAccountResponse;
use WBW\Library\SmsMode\Response\DeliveryReportResponse;
use WBW\Library\SmsMode\Response\RetrievingSmsReplyResponse;
use WBW\Library\SmsMode\Response\SendingSmsBatchResponse;
use WBW\Library\SmsMode\Response\SendingSmsMessageResponse;
use WBW\Library\SmsMode\Response\SendingTextToSpeechSmsResponse;
use WBW\Library\SmsMode\Response\SendingUnicodeSmsResponse;
use WBW\Library\SmsMode\Response\SentSmsMessageListResponse;
use WBW\Library\SmsMode\Response\TransferringCreditsResponse;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Response deserializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Serializer
 */
class ResponseDeserializer {

    /**
     * Deserialize an account balance response.
     *
     * @param string $rawResponse The response.
     * @return AccountBalanceResponse Returns the account balance response.
     */
    public static function deserializeAccountBalanceResponse(string $rawResponse): AccountBalanceResponse {

        $model = new AccountBalanceResponse();
        if (1 === preg_match("/^\d{2,4} \|/", trim($rawResponse))) {
            static::deserializeResponse($model, $rawResponse);
            return $model;
        }

        $model->setRawResponse($rawResponse);
        if (1 === preg_match("/^-?\d+\.\d+$/", trim($rawResponse))) {
            $model->setAccountBalance(floatval(trim($rawResponse)));
        }

        return $model;
    }

    /**
     * Deserialize an adding contact response.
     *
     * @param string $rawResponse The raw response.
     * @return AddingContactResponse Returns the adding contact response.
     */
    public static function deserializeAddingContactResponse(string $rawResponse): AddingContactResponse {

        $model = new AddingContactResponse();
        static::deserializeResponse($model, $rawResponse);

        return $model;
    }

    /**
     * Deserialize a checking SMS message status response.
     *
     * @param string $rawResponse The raw response.
     * @return CheckingSmsMessageStatusResponse Returns the checking SMS message status response.
     */
    public static function deserializeCheckingSmsMessageStatusResponse(string $rawResponse): CheckingSmsMessageStatusResponse {

        $model = new CheckingSmsMessageStatusResponse();
        static::deserializeResponse($model, $rawResponse);

        return $model;
    }

    /**
     * Deserialize a creating API key response.
     *
     * @param string $rawResponse The raw response.
     * @return CreatingApiKeyResponse Returns the creating API key response.
     */
    public static function deserializeCreatingApiKeyResponse(string $rawResponse): CreatingApiKeyResponse {

        $decodedResponse = json_decode(trim($rawResponse), true);

        $model = new CreatingApiKeyResponse();
        $model->setRawResponse($rawResponse);

        if (false === array_key_exists("accessToken", $decodedResponse)) {
            $model->setException($decodedResponse);
        }

        $creationDate = DateTime::createFromFormat(ResponseInterface::RESPONSE_DATE_FORMAT, ArrayHelper::get($decodedResponse, "creationDate"));
        $expiration   = DateTime::createFromFormat(ResponseInterface::RESPONSE_DATE_FORMAT, ArrayHelper::get($decodedResponse, "expiration"));

        $model->setId(ArrayHelper::get($decodedResponse, "id"));
        $model->setAccessToken(ArrayHelper::get($decodedResponse, "accessToken"));
        $model->setCreationDate(false !== $creationDate ? $creationDate : null);
        $model->setState(ArrayHelper::get($decodedResponse, "state"));
        $model->setExpiration(false !== $expiration ? $expiration : null);
        $model->setAccount(ArrayHelper::get($decodedResponse, "account"));

        return $model;
    }

    /**
     * Deserialize a creating sub-account response.
     *
     * @param string $rawResponse The raw response.
     * @return CreatingSubAccountResponse Returns the creating sub-account response.
     */
    public static function deserializeCreatingSubAccountResponse(string $rawResponse): CreatingSubAccountResponse {

        $model = new CreatingSubAccountResponse();
        static::deserializeResponse($model, $rawResponse);

        return $model;
    }

    /**
     * Deserialize a deleting SMS response.
     *
     * @param string $rawResponse The raw response.
     * @return DeletingSmsResponse Returns the deleting SMS response.
     */
    public static function deserializeDeletingSmsResponse(string $rawResponse): DeletingSmsResponse {

        $model = new DeletingSmsResponse();
        static::deserializeResponse($model, $rawResponse);

        return $model;
    }

    /**
     * Deserialize a deleting su-account response.
     *
     * @param string $rawResponse The raw response.
     * @return DeletingSubAccountResponse Returns the deleting sub-account response.
     */
    public static function deserializeDeletingSubAccountResponse(string $rawResponse): DeletingSubAccountResponse {

        $model = new DeletingSubAccountResponse();
        static::deserializeResponse($model, $rawResponse);

        return $model;
    }

    /**
     * Deserialize a delivery report.
     *
     * @param string $rawResponse The raw response.
     * @return DeliveryReport Returns the delivery report.
     */
    protected static function deserializeDeliveryReport(string $rawResponse): DeliveryReport {

        $model = new DeliveryReport();
        $model->setRawResponse($rawResponse);

        $responses = explode(" ", preg_replace("/ +/", " ", trim($rawResponse)));
        if (count($responses) < 2) {
            return $model;
        }

        $model->setCode(intval(trim($responses[1])));
        $model->setNumero(trim($responses[0]));

        return $model;
    }

    /**
     * Deserialize a delivery report response.
     *
     * @param string $rawResponse The raw response.
     * @return DeliveryReportResponse Returns the delivery report response.
     */
    public static function deserializeDeliveryReportResponse(string $rawResponse): DeliveryReportResponse {

        $model = new DeliveryReportResponse();
        if (1 === preg_match("/^\d{2,4} \|/", trim($rawResponse))) {
            static::deserializeResponse($model, $rawResponse);
            return $model;
        }

        $model->setRawResponse($rawResponse);

        $responses = explode(ResponseInterface::RESPONSE_DELIMITER, trim($rawResponse));
        foreach ($responses as $current) {
            $model->addDeliveryReport(static::deserializeDeliveryReport($current));
        }

        return $model;
    }

    /**
     * Deserialize a response.
     *
     * @param AbstractResponse $model The response.
     * @param string $rawResponse The raw response.
     * @return void
     */
    protected static function deserializeResponse(AbstractResponse $model, string $rawResponse): void {

        $model->setRawResponse($rawResponse);

        $responses = explode(ResponseInterface::RESPONSE_DELIMITER, trim($rawResponse));
        if (count($responses) < 2) {
            return;
        }

        $model->setCode(intval(trim($responses[0])));
        $model->setDescription(trim($responses[1]));
    }

    /**
     * Deserialize a retrieving SMS reply response.
     *
     * @param string $rawResponse The raw response.
     * @return RetrievingSmsReplyResponse Returns the retrieving SMS reply response.
     */
    public static function deserializeRetrievingSmsReplyResponse(string $rawResponse): RetrievingSmsReplyResponse {

        $model = new RetrievingSmsReplyResponse();
        if (1 === preg_match("/^\d{2,4} \|/", trim($rawResponse))) {
            static::deserializeResponse($model, $rawResponse);
            return $model;
        }

        $model->setRawResponse($rawResponse);

        $responses = explode("\n", trim($rawResponse));
        foreach ($responses as $current) {
            $model->addSmsReply(static::deserializeSmsReply($current));
        }

        return $model;
    }

    /**
     * Deserialize a sending SMS batch response.
     *
     * @param string $rawResponse The raw response.
     * @return SendingSmsBatchResponse Returns the sending SMS batch response.
     */
    public static function deserializeSendingSmsBatchResponse(string $rawResponse): SendingSmsBatchResponse {

        $model = new SendingSmsBatchResponse();
        static::deserializeResponse($model, $rawResponse);

        $responses = explode(ResponseInterface::RESPONSE_DELIMITER, trim($rawResponse));
        if (ResponseInterface::RESPONSE_CODE_0 === $model->getCode() && 3 === count($responses)) {
            $model->setCampagneID(trim($responses[2]));
        }

        return $model;
    }

    /**
     * Deserialize a sending SMS message response.
     *
     * @param string $rawResponse The raw response.
     * @return SendingSmsMessageResponse Returns the sending SMS message response.
     */
    public static function deserializeSendingSmsMessageResponse(string $rawResponse): SendingSmsMessageResponse {

        $model = new SendingSmsMessageResponse();
        static::deserializeResponse($model, $rawResponse);

        $responses = explode(ResponseInterface::RESPONSE_DELIMITER, trim($rawResponse));
        if (ResponseInterface::RESPONSE_CODE_0 === $model->getCode() && 3 === count($responses)) {
            $model->setSmsID(trim($responses[2]));
        }

        return $model;
    }

    /**
     * Deserialize a sending text-to-speech SMS response.
     *
     * @param string $rawResponse The raw response.
     * @return SendingTextToSpeechSmsResponse Returns the sending text-to-speech SMS response.
     */
    public static function deserializeSendingTextToSpeechSmsResponse(string $rawResponse): SendingTextToSpeechSmsResponse {

        $model = new SendingTextToSpeechSmsResponse();
        static::deserializeResponse($model, $rawResponse);

        $responses = explode(ResponseInterface::RESPONSE_DELIMITER, trim($rawResponse));
        if (ResponseInterface::RESPONSE_CODE_0 === $model->getCode() && 3 === count($responses)) {
            $model->setSmsID(trim($responses[2]));
        }

        return $model;
    }

    /**
     * Deserialize a sending unicode SMS response.
     *
     * @param string $rawResponse The raw response.
     * @return SendingUnicodeSmsResponse Returns the sending unicode SMS response.
     */
    public static function deserializeSendingUnicodeSmsResponse(string $rawResponse): SendingUnicodeSmsResponse {

        $model = new SendingUnicodeSmsResponse();
        static::deserializeResponse($model, $rawResponse);

        $responses = explode(ResponseInterface::RESPONSE_DELIMITER, trim($rawResponse));
        if (ResponseInterface::RESPONSE_CODE_0 === $model->getCode() && 3 === count($responses)) {
            $model->setSmsID(trim($responses[2]));
        }

        return $model;
    }

    /**
     * Deserialize a sent SMS message.
     *
     * @param string $rawResponse The raw response.
     * @return SentSmsMessage Returns the sent SMS message.
     */
    protected static function deserializeSentSmsMessage(string $rawResponse): SentSmsMessage {

        $model = new SentSmsMessage();
        $model->setRawResponse($rawResponse);

        $responses = explode(ResponseInterface::RESPONSE_DELIMITER, trim($rawResponse));
        if (count($responses) < 6) {
            return $model;
        }

        $sendDate = DateTime::createFromFormat("d/m/Y H:i", trim($responses[1]));

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
     * Deserialize a sent SMS message list response.
     *
     * @param string $rawResponse The raw response.
     * @return SentSmsMessageListResponse Returns the sent SMS message list response.
     */
    public static function deserializeSentSmsMessageListResponse(string $rawResponse): SentSmsMessageListResponse {

        $model = new SentSmsMessageListResponse();
        if (1 === preg_match("/^\d{2,4} \|/", trim($rawResponse))) {
            static::deserializeResponse($model, $rawResponse);
            return $model;
        }

        $model->setRawResponse($rawResponse);

        $responses = explode("\n\n", trim($rawResponse));
        foreach ($responses as $current) {
            $model->addSentSmsMessage(static::deserializeSentSmsMessage($current));
        }

        return $model;
    }

    /**
     * Deserialize a SMS reply.
     *
     * @param string $rawResponse The raw response.
     * @return SmsReply Returns the SMS reply.
     */
    protected static function deserializeSmsReply(string $rawResponse): SmsReply {

        $model = new SmsReply();
        $model->setRawResponse($rawResponse);

        $responses = explode(ResponseInterface::RESPONSE_DELIMITER, trim($rawResponse));
        if (count($responses) < 6) {
            return $model;
        }

        $receptionDate = DateTime::createFromFormat(ResponseInterface::RESPONSE_DATETIME_FORMAT, trim($responses[1]));

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
     * Deserialize a transferring credits response.
     *
     * @param string $rawResponse The raw response.
     * @return TransferringCreditsResponse Returns the transferring credits response.
     */
    public static function deserializeTransferringCreditsResponse(string $rawResponse): TransferringCreditsResponse {

        $model = new TransferringCreditsResponse();
        static::deserializeResponse($model, $rawResponse);

        return $model;
    }
}
