<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Helper;

use DateTime;
use WBW\Library\Core\Argument\ArrayHelper;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\SMSMode\API\StatusInterface;
use WBW\Library\SMSMode\Model\AbstractResponse;
use WBW\Library\SMSMode\Model\AccountBalanceRequest;
use WBW\Library\SMSMode\Model\AccountBalanceResponse;
use WBW\Library\SMSMode\Model\AddingContactRequest;
use WBW\Library\SMSMode\Model\AddingContactResponse;
use WBW\Library\SMSMode\Model\Authentication;
use WBW\Library\SMSMode\Model\CheckingSMSMessageStatusRequest;
use WBW\Library\SMSMode\Model\CheckingSMSMessageStatusResponse;
use WBW\Library\SMSMode\Model\CreatingAPIKeyRequest;
use WBW\Library\SMSMode\Model\CreatingAPIKeyResponse;
use WBW\Library\SMSMode\Model\CreatingSubAccountRequest;
use WBW\Library\SMSMode\Model\CreatingSubAccountResponse;
use WBW\Library\SMSMode\Model\DeletingSMSRequest;
use WBW\Library\SMSMode\Model\DeletingSMSResponse;
use WBW\Library\SMSMode\Model\DeletingSubAccountRequest;
use WBW\Library\SMSMode\Model\DeletingSubAccountResponse;
use WBW\Library\SMSMode\Model\DeliveryReport;
use WBW\Library\SMSMode\Model\DeliveryReportRequest;
use WBW\Library\SMSMode\Model\DeliveryReportResponse;
use WBW\Library\SMSMode\Model\RetrievingSMSReplyRequest;
use WBW\Library\SMSMode\Model\RetrievingSMSReplyResponse;
use WBW\Library\SMSMode\Model\SendingSMSMessageRequest;
use WBW\Library\SMSMode\Model\SendingSMSMessageResponse;
use WBW\Library\SMSMode\Model\SendingTextToSpeechSMSRequest;
use WBW\Library\SMSMode\Model\SendingTextToSpeechSMSResponse;
use WBW\Library\SMSMode\Model\SentSMSMessage;
use WBW\Library\SMSMode\Model\SentSMSMessageListRequest;
use WBW\Library\SMSMode\Model\SentSMSMessageListResponse;
use WBW\Library\SMSMode\Model\SMSReply;
use WBW\Library\SMSMode\Model\TransferringCreditsRequest;
use WBW\Library\SMSMode\Model\TransferringCreditsResponse;

/**
 * Object serializer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Helper
 */
class ObjectSerializer {

    /**
     * Deserialize date/time format.
     *
     * @var string
     */
    const DESERIALIZE_DATETIME_FORMAT = self::SERIALIZE_DATETIME_FORMAT;

    /**
     * Deserialize date format.
     *
     * @var string
     */
    const DESERIALIZE_DATE_FORMAT = self::SERIALIZE_DATE_FORMAT;

    /**
     * Deserialize delimiter.
     *
     * @var string
     */
    const DESERIALIZE_DELIMITER = "|";

    /**
     * Serialize date/time format.
     *
     * @var string
     */
    const SERIALIZE_DATETIME_FORMAT = "dmY-H:i";

    /**
     * Serialize date format.
     *
     * @var string
     */
    const SERIALIZE_DATE_FORMAT = "dmY";

    /**
     * Deserialize an account balance response.
     *
     * @param string $rawResponse The response.
     * @return AccountBalanceResponse Returns the account balance response.
     */
    public static function deserializeAccountBalanceResponse($rawResponse) {

        $model = new AccountBalanceResponse();
        if (1 === preg_match("/^[0-9]{1,}\.[0-9]{1,}$/", trim($rawResponse))) {
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
    public static function deserializeAddingContactResponse($rawResponse) {

        $model = new AddingContactResponse();
        static::deserializeResponse($model, $rawResponse);

        return $model;
    }

    /**
     * Deserialize a checking SMS message status response.
     *
     * @param string $rawResponse The raw response.
     * @return CheckingSMSMessageStatusResponse Returns the checking SMS message status response.
     */
    public static function deserializeCheckingSMSMessageStatusResponse($rawResponse) {

        $model = new CheckingSMSMessageStatusResponse();
        static::deserializeResponse($model, $rawResponse);

        return $model;
    }

    /**
     * Deserialize a creating API key response.
     *
     * @param string $rawResponse The raw response.
     * @return CreatingAPIKeyResponse Returns the creating API key response.
     */
    public static function deserializeCreatingAPIKeyResponse($rawResponse) {

        $decodedResponse = json_decode(trim($rawResponse), true);

        $creationDate = DateTime::createFromFormat(self::DESERIALIZE_DATE_FORMAT, ArrayHelper::get($decodedResponse, "creationDate"));
        $expiration   = DateTime::createFromFormat(self::DESERIALIZE_DATE_FORMAT, ArrayHelper::get($decodedResponse, "expiration"));

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
     * Deserialize a creating sub-account response.
     *
     * @param string $rawResponse The raw response.
     * @return CreatingSubAccountResponse Returns the creating sub-account response.
     */
    public static function deserializeCreatingSubAccountResponse($rawResponse) {

        $model = new CreatingSubAccountResponse();
        static::deserializeResponse($model, $rawResponse);

        return $model;
    }

    /**
     * Deserialize a deleting SMS response.
     *
     * @param string $rawResponse The raw response.
     * @return DeletingSMSResponse Returns the deleting SMS response.
     */
    public static function deserializeDeletingSMSResponse($rawResponse) {

        $model = new DeletingSMSResponse();
        static::deserializeResponse($model, $rawResponse);

        return $model;
    }

    /**
     * Deserialize a deleting su-account response.
     *
     * @param string $rawResponse The raw response.
     * @return DeletingSubAccountResponse Returns the deleting sub-account response.
     */
    public static function deserializeDeletingSubAccountResponse($rawResponse) {

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
    protected static function deserializeDeliveryReport($rawResponse) {

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
     * Deserialize a delivery report response.
     *
     * @param string $rawResponse The raw response.
     * @return DeliveryReportResponse Returns the delivery report response.
     */
    public static function deserializeDeliveryReportResponse($rawResponse) {

        $model = new DeliveryReportResponse();
        if (1 === preg_match("/^(31|35|61)\ \|/", trim($rawResponse))) {
            static::deserializeResponse($model, $rawResponse);
            return $model;
        }

        $models = [];

        $responses = explode(self::DESERIALIZE_DELIMITER, trim($rawResponse));
        foreach ($responses as $current) {
            $models[] = static::deserializeDeliveryReport($current);
        }

        $model->setDeliveryReports($models);

        return $model;
    }

    /**
     * Deserialize a response.
     *
     * @param AbstractResponse $model The response.
     * @param string $rawResponse The raw response.
     * @return void
     */
    protected static function deserializeResponse(AbstractResponse $model, $rawResponse) {

        $responses = explode(self::DESERIALIZE_DELIMITER, trim($rawResponse));
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
     * @return RetrievingSMSReplyResponse Returns the retrieving SMS reply response.
     */
    public static function deserializeRetrievingSMSReplyResponse($rawResponse) {

        $model = new RetrievingSMSReplyResponse();
        if (1 === preg_match("/^(32|35)\ \|/", trim($rawResponse))) {
            static::deserializeResponse($model, $rawResponse);
            return $model;
        }

        $models = [];

        $responses = explode("\n", trim($rawResponse));
        foreach ($responses as $current) {
            $models[] = static::deserializeSMSReply($current);
        }

        $model->setSMSReplies($models);

        return $model;
    }

    /**
     * Deserialize a SMS reply.
     *
     * @param string $rawResponse The raw response.
     * @return SMSReply Returns the SMS reply.
     */
    protected static function deserializeSMSReply($rawResponse) {

        $model = new SMSReply();

        $responses = explode(self::DESERIALIZE_DELIMITER, trim($rawResponse));
        if (count($responses) < 6) {
            return $model;
        }

        $receptionDate = DateTime::createFromFormat(self::DESERIALIZE_DATETIME_FORMAT, trim($responses[1]));

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
     * Deserialize a sending SMS message response.
     *
     * @param string $rawResponse The raw response.
     * @return SendingSMSMessageResponse Returns the sending SMS message response.
     */
    public static function deserializeSendingSMSMessageResponse($rawResponse) {

        $model = new SendingSMSMessageResponse();
        static::deserializeResponse($model, $rawResponse);

        $responses = explode(self::DESERIALIZE_DELIMITER, trim($rawResponse));
        if (StatusInterface::STATUS_CODE_0 === $model->getCode() && 3 === count($responses)) {
            $model->setSmsID(trim($responses[2]));
        }

        return $model;
    }

    /**
     * Deserialize a sending text-to-speech SMS response.
     *
     * @param string $rawResponse The raw response.
     * @return SendingTextToSpeechSMSResponse Returns the sending text-to-speech SMS response.
     */
    public static function deserializeSendingTextToSpeechSMSResponse($rawResponse) {

        $model = new SendingTextToSpeechSMSResponse();
        static::deserializeResponse($model, $rawResponse);

        $responses = explode(self::DESERIALIZE_DELIMITER, trim($rawResponse));
        if (StatusInterface::STATUS_CODE_0 === $model->getCode() && 3 === count($responses)) {
            $model->setSmsID(trim($responses[2]));
        }

        return $model;
    }

    /**
     * Deserialize a sent SMS message.
     *
     * @param string $rawResponse The raw response.
     * @return SentSMSMessage Returns the sent SMS message.
     */
    protected static function deserializeSentSMSMessage($rawResponse) {

        $model = new SentSMSMessage();

        $responses = explode(self::DESERIALIZE_DELIMITER, trim($rawResponse));
        if (count($responses) < 6) {
            return $model;
        }

        $sendDate = DateTime::createFromFormat(self::DESERIALIZE_DATETIME_FORMAT, trim($responses[1]));

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
     * @return SentSMSMessageListResponse Returns the sent SMS message list response.
     */
    public static function deserializeSentSMSMessageListResponse($rawResponse) {

        $model = new SentSMSMessageListResponse();
        if (1 === preg_match("/^(31|32|35)\ \|/", trim($rawResponse))) {
            static::deserializeResponse($model, $rawResponse);
            return $model;
        }

        $models = [];

        $responses = explode("\n", trim($rawResponse));
        foreach ($responses as $current) {
            $models[] = static::deserializeSentSMSMessage($current);
        }

        $model->setSentSMSMessages($models);

        return $model;
    }

    /**
     * Deserialize a transferring credits response.
     *
     * @param string $rawResponse The raw response.
     * @return TransferringCreditsResponse Returns the transferring credits response.
     */
    public static function deserializeTransferringCreditsResponse($rawResponse) {

        $model = new TransferringCreditsResponse();
        static::deserializeResponse($model, $rawResponse);

        return $model;
    }

    /**
     * Serialize an account balance request.
     *
     * @param AccountBalanceRequest $accountBalanceRequest The account balance request.
     * @return array Returns the serialized parameters.
     */
    public static function serializeAccountBalanceRequest(AccountBalanceRequest $accountBalanceRequest) {
        return [];
    }

    /**
     * Serialize an adding contact request.
     *
     * @param AddingContactRequest $addingContactRequest The ading contact request.
     * @return array Returns the serialized parameters.
     * @throws NullPointerException Throws a null pointer exception if a mandatory parameter is missing.
     */
    public static function serializeAddingContactRequest(AddingContactRequest $addingContactRequest) {

        $parameters = [];

        // Check the mandatory parameters.
        if (null === $addingContactRequest->getNom()) {
            throw new NullPointerException("The mandatory parameter \"nom\" is missing");
        }
        if (null === $addingContactRequest->getMobile()) {
            throw new NullPointerException("The mandatory parameter \"mobile\" is missing");
        }

        // Add the mandatory parameters.
        $parameters["nom"]    = $addingContactRequest->getNom();
        $parameters["mobile"] = $addingContactRequest->getMobile();

        // Check and add the optional parameters.
        ArrayHelper::set($parameters, "prenom", $addingContactRequest->getPrenom(), [null]);
        if (0 < count($addingContactRequest->getGroupes())) {
            $parameters["groupes"] = implode(",", $addingContactRequest->getGroupes());
        }
        ArrayHelper::set($parameters, "societe", $addingContactRequest->getSociete(), [null]);
        ArrayHelper::set($parameters, "other", $addingContactRequest->getOther(), [null]);
        if (null !== $addingContactRequest->getDate()) {
            ArrayHelper::set($parameters, "date", $addingContactRequest->getDate()->format(self::SERIALIZE_DATE_FORMAT), [null]);
        }

        return $parameters;
    }

    /**
     * Serialize an authentication.
     *
     * @param Authentication $authentication The authentication.
     * @return array Returns the serialized parameters.
     * @throws NullPointerException Throws a null pointer exception if a mandatory parameter is missing.
     */
    public static function serializeAuthentication(Authentication $authentication) {

        $parameters = [];

        if (null !== $authentication->getAccessToken()) {
            return ["accessToken" => $authentication->getAccessToken()];
        }

        // Check the mandatory parameter.
        if (null === $authentication->getPseudo()) {
            throw new NullPointerException("The mandatory parameter \"pseudo\" is missing");
        }
        $parameters["pseudo"] = $authentication->getPseudo();

        // Check the mandatory parameter.
        if (null === $authentication->getPass()) {
            throw new NullPointerException("The mandatory parameter \"pass\" is missing");
        }
        $parameters["pass"] = $authentication->getPass();

        return $parameters;
    }

    /**
     * Serialize a checking SMS message status request.
     *
     * @param CheckingSMSMessageStatusRequest $checkingSMSMessageStatusRequest The checking SMS message status request.
     * @return array Returns the serialized parameters.
     * @throws NullPointerException Throws a null pointer exception if a mandatory parameter is missing.
     */
    public static function serializeCheckingSMSMessageStatusRequest(CheckingSMSMessageStatusRequest $checkingSMSMessageStatusRequest) {

        $parameters = [];

        // Check the mandatory parameter.
        if (null === $checkingSMSMessageStatusRequest->getSmsID()) {
            throw new NullPointerException("The mandatory parameter \"smsID\" is missing");
        }

        // Add the mandatory parameter.
        $parameters["smsID"] = $checkingSMSMessageStatusRequest->getSmsID();

        return $parameters;
    }

    /**
     * Serialize a creating API key request.
     *
     * @param CreatingAPIKeyRequest $creatingAPIKeyRequest The creating API key request.
     * @return array Returns the serialized parameters.
     * @throws NullPointerException Throws a null pointer exception if a mandatory parameter is missing.
     */
    public static function serializeCreatingAPIKeyRequest(CreatingAPIKeyRequest $creatingAPIKeyRequest) {

        $parameters = [];

        // Check the mandatory parameter.
        if (null === $creatingAPIKeyRequest->getAccessToken()) {
            throw new NullPointerException("The mandatory parameter \"accessToken\" is missing");
        }

        // Add the mandatory parameter.
        $parameters["accessToken"] = $creatingAPIKeyRequest->getAccessToken();

        return $parameters;
    }

    /**
     * Serialize a creating sub-account request.
     *
     * @param CreatingSubAccountRequest $creatingSubAccountRequest The creating sub-account request.
     * @return array Returns the serialized parameters.
     * @throws NullPointerException Throws a null pointer exception if a mandatory parameter is missing.
     */
    public static function serializeCreatingSubAccountRequest(CreatingSubAccountRequest $creatingSubAccountRequest) {

        $parameters = [];

        // Check the mandatory parameters.
        if (null === $creatingSubAccountRequest->getNewPseudo()) {
            throw new NullPointerException("The mandatory parameter \"newPseudo\" is missing");
        }
        if (null === $creatingSubAccountRequest->getNewPass()) {
            throw new NullPointerException("The mandatory parameter \"newPass\" is missing");
        }

        // Add the mandatory parameters.
        $parameters["newPseudo"] = $creatingSubAccountRequest->getNewPseudo();
        $parameters["newPass"]   = $creatingSubAccountRequest->getNewPass();

        // Check and add the optional parameters.
        ArrayHelper::set($parameters, "reference", $creatingSubAccountRequest->getReference(), [null]);
        ArrayHelper::set($parameters, "nom", $creatingSubAccountRequest->getNom(), [null]);
        ArrayHelper::set($parameters, "prenom", $creatingSubAccountRequest->getPrenom(), [null]);
        ArrayHelper::set($parameters, "societe", $creatingSubAccountRequest->getSociete(), [null]);
        ArrayHelper::set($parameters, "adresse", $creatingSubAccountRequest->getAdresse(), [null]);
        ArrayHelper::set($parameters, "ville", $creatingSubAccountRequest->getVille(), [null]);
        ArrayHelper::set($parameters, "codePostal", $creatingSubAccountRequest->getCodePostal(), [null]);
        ArrayHelper::set($parameters, "mobile", $creatingSubAccountRequest->getMobile(), [null]);
        ArrayHelper::set($parameters, "telephone", $creatingSubAccountRequest->getTelephone(), [null]);
        ArrayHelper::set($parameters, "fax", $creatingSubAccountRequest->getFax(), [null]);
        ArrayHelper::set($parameters, "email", $creatingSubAccountRequest->getEmail(), [null]);
        if (null !== $creatingSubAccountRequest->getDate()) {
            ArrayHelper::set($parameters, "date", $creatingSubAccountRequest->getDate()->format(self::SERIALIZE_DATE_FORMAT), [null]);
        }

        return $parameters;
    }

    /**
     * Serialize a deleting SMS request.
     *
     * @param DeletingSMSRequest $deletingSMSRequest The deleting SMS request.
     * @return array Returns the serialized parameters.
     * @throws NullPointerException Throws a null pointer exception if a mandatory parameter is missing.
     */
    public static function serializeDeletingSMSRequest(DeletingSMSRequest $deletingSMSRequest) {

        $parameters = [];

        // Check the mandatory parameters.
        if (null === $deletingSMSRequest->getSmsID() && null === $deletingSMSRequest->getNumero()) {
            throw new NullPointerException("The mandatory parameter \"smsID\" or \"numero\" is missing");
        }

        // Add the mandatory parameter.
        if (null !== $deletingSMSRequest->getSmsID()) {
            $parameters["smsID"] = $deletingSMSRequest->getSmsID();
        } else {
            $parameters["numero"] = $deletingSMSRequest->getNumero();
        }

        return $parameters;
    }

    /**
     * Serialize a deleting sub-account request.
     *
     * @param DeletingSubAccountRequest $deletingSubAccountRequest The deleting sub-account request.
     * @return array Returns the serialized parameters.
     * @throws NullPointerException Throws a null pointer exception if a mandatory parameter is missing.
     */
    public static function serializeDeletingSubAccountRequest(DeletingSubAccountRequest $deletingSubAccountRequest) {

        $parameters = [];

        // Check the mandatory parameter.
        if (null === $deletingSubAccountRequest->getPseudoToDelete()) {
            throw new NullPointerException("The mandatory parameter \"pseudoToDelete\" is missing");
        }

        // Add the mandatory parameter.
        $parameters["pseudoToDelete"] = $deletingSubAccountRequest->getPseudoToDelete();

        return $parameters;
    }

    /**
     * Serialize a delivery report request.
     *
     * @param DeliveryReportRequest $deliveryReportRequest The delivery report request.
     * @return array Returns the serialized parameters.
     * @throws NullPointerException Throws a null pointer exception if a mandatory parameter is missing.
     */
    public static function serializeDeliveryReportRequest(DeliveryReportRequest $deliveryReportRequest) {

        $parameters = [];

        // Check the mandatory parameter.
        if (null === $deliveryReportRequest->getSmsID()) {
            throw new NullPointerException("The mandatory parameter \"smsID\" is missing");
        }

        // Add the mandatory parameter.
        $parameters["smsID"] = $deliveryReportRequest->getSmsID();

        return $parameters;
    }

    /**
     * Serialize a retrieving SMS reply request.
     *
     * @param RetrievingSMSReplyRequest $retrievingSMSReplyRequest The retrieving SMS reply request.
     * @return array Returns the serialized parameters.
     * @throws NullPointerException Throws a null pointer exception if a optional parameter is missing.
     * @throws IllegalArgumentException Throws an illegal argument exception if an optional parameter is less than an other optional parameter.
     */
    public static function serializeRetrievingSMSReplyRequest(RetrievingSMSReplyRequest $retrievingSMSReplyRequest) {

        $parameters = [];

        // Check the optional parameters.
        if (null !== $retrievingSMSReplyRequest->getStart() && null === $retrievingSMSReplyRequest->getOffset()) {
            throw new NullPointerException("The optional parameter \"offset\" is missing");
        }
        if (null === $retrievingSMSReplyRequest->getStart() && null !== $retrievingSMSReplyRequest->getOffset()) {
            throw new NullPointerException("The optional parameter \"start\" is missing");
        }
        if (null !== $retrievingSMSReplyRequest->getStart()) {
            if ($retrievingSMSReplyRequest->getOffset() <= $retrievingSMSReplyRequest->getStart()) {
                throw new IllegalArgumentException("The \"offset\" must be greater than \"start\"");
            }
            $parameters["start"]  = $retrievingSMSReplyRequest->getStart();
            $parameters["offset"] = $retrievingSMSReplyRequest->getOffset();
            return $parameters;
        }

        // Check the optional parameters.
        if (null !== $retrievingSMSReplyRequest->getStartDate() && null === $retrievingSMSReplyRequest->getEndDate()) {
            throw new NullPointerException("The optional parameter \"endDate\" is missing");
        }
        if (null === $retrievingSMSReplyRequest->getStartDate() && null !== $retrievingSMSReplyRequest->getEndDate()) {
            throw new NullPointerException("The optional parameter \"startDate\" is missing");
        }
        if (null !== $retrievingSMSReplyRequest->getStartDate()) {
            if ($retrievingSMSReplyRequest->getEndDate() <= $retrievingSMSReplyRequest->getStartDate()) {
                throw new IllegalArgumentException("The \"endDate\" must be greater than \"startDate\"");
            }
            $parameters["startDate"] = $retrievingSMSReplyRequest->getStartDate()->format(self::SERIALIZE_DATETIME_FORMAT);
            $parameters["endDate"]   = $retrievingSMSReplyRequest->getEndDate()->format(self::SERIALIZE_DATETIME_FORMAT);
            return $parameters;
        }

        return $parameters;
    }

    /**
     * Serialize a sending SMS message request.
     *
     * @param SendingSMSMessageRequest $sendingSMSMessageRequest The sending SMS request.
     * @return array Returns the serialized parameters.
     * @throws NullPointerException Throws a null pointer exception if a mandatory parameter is missing.
     */
    public static function serializeSendingSMSMessageRequest(SendingSMSMessageRequest $sendingSMSMessageRequest) {

        $parameters = [];

        // Check the mandatory parameter.
        if (null === $sendingSMSMessageRequest->getMessage()) {
            throw new NullPointerException("The mandatory parameter \"message\" is missing");
        }

        // Check the mandatory parameters.
        if (0 === count($sendingSMSMessageRequest->getNumero()) && null === $sendingSMSMessageRequest->getGroupe()) {
            throw new NullPointerException("The mandatory parameter \"number\" or \"group\" is missing");
        }

        // Add the mandatory parameters.
        $parameters["message"] = utf8_decode($sendingSMSMessageRequest->getMessage());
        if (0 < count($sendingSMSMessageRequest->getNumero())) {
            $parameters["numero"] = implode(",", $sendingSMSMessageRequest->getNumero());
        } else {
            $parameters["groupe"] = $sendingSMSMessageRequest->getGroupe();
        }

        // Check and add the optional parameters.
        ArrayHelper::set($parameters, "classe_msg", $sendingSMSMessageRequest->getClasseMsg(), [null]);
        if (null !== $sendingSMSMessageRequest->getDateEnvoi()) {
            $parameters["date_envoi"] = $sendingSMSMessageRequest->getDateEnvoi()->format(self::SERIALIZE_DATETIME_FORMAT);
        }
        ArrayHelper::set($parameters, "refClient", $sendingSMSMessageRequest->getRefClient(), [null]);
        ArrayHelper::set($parameters, "emetteur", $sendingSMSMessageRequest->getEmetteur(), [null]);
        ArrayHelper::set($parameters, "nbr_msg", $sendingSMSMessageRequest->getNbrMsg(), [null]);
        ArrayHelper::set($parameters, "notification_url", $sendingSMSMessageRequest->getNotificationURL(), [null]);
        ArrayHelper::set($parameters, "notification_url_reponse", $sendingSMSMessageRequest->getNotificationURLReponse(), [null]);
        ArrayHelper::set($parameters, "stop", $sendingSMSMessageRequest->getStop(), [null]);

        return $parameters;
    }

    /**
     * Serialize a sending text-to-speech SMS request.
     *
     * @param SendingTextToSpeechSMSRequest $sendingTextToSpeechSMSRequest The sending text-to-speech SMS request.
     * @return array Returns the serialized parameters.
     * @throws NullPointerException Throws a null pointer exception if a mandatory parameter is missing.
     */
    public static function serializeSendingTextToSpeechRequest(SendingTextToSpeechSMSRequest $sendingTextToSpeechSMSRequest) {

        $parameters = [];

        // Check the mandatory parameter.
        if (null === $sendingTextToSpeechSMSRequest->getMessage()) {
            throw new NullPointerException("The mandatory parameter \"message\" is missing");
        }

        // Check the mandatory parameter.
        if (0 === count($sendingTextToSpeechSMSRequest->getNumero())) {
            throw new NullPointerException("The mandatory parameter \"numero\" is missing");
        }

        // Add the mandatory parameters.
        $parameters["message"] = utf8_decode($sendingTextToSpeechSMSRequest->getMessage());
        $parameters["numero"]  = implode(",", $sendingTextToSpeechSMSRequest->getNumero());

        // Check and add the optional parameters.
        ArrayHelper::set($parameters, "title", $sendingTextToSpeechSMSRequest->getTitle(), [null]);
        if (null !== $sendingTextToSpeechSMSRequest->getDateEnvoi()) {
            $parameters["date_envoi"] = $sendingTextToSpeechSMSRequest->getDateEnvoi()->format(self::SERIALIZE_DATE_FORMAT);
        }
        ArrayHelper::set($parameters, "language", $sendingTextToSpeechSMSRequest->getLanguage(), [null]);

        return $parameters;
    }

    /**
     * Serialize a sent SMS message list request.
     *
     * @param SentSMSMessageListRequest $sentSMSMessageListRequest The sent SMS message list request.
     * @return array Returns the serialized parameters.
     */
    public static function serializeSentSMSMessageRequest(SentSMSMessageListRequest $sentSMSMessageListRequest) {

        $parameters = [];

        // Check and add the optional parameters.
        ArrayHelper::set($parameters, "offset", $sentSMSMessageListRequest->getOffset(), [null]);

        return $parameters;
    }

    /**
     * Serialize a transferring credits request.
     *
     * @param TransferringCreditsRequest $transferringCreditsRequest The transferring credits request.
     * @return array Returns the serialized parameters.
     * @throws NullPointerException Throws a null pointer exception if a mandatory parameter is missing.
     */
    public static function serializeTransferringCreditsRequest(TransferringCreditsRequest $transferringCreditsRequest) {

        $parameters = [];

        // Check the mandatory parameters.
        if (null === $transferringCreditsRequest->getTargetPseudo()) {
            throw new NullPointerException("The mandatory parameter \"targetPseudo\" is missing");
        }

        // Check the required attribute .
        if (null === $transferringCreditsRequest->getCreditAmount()) {
            throw new NullPointerException("The mandatory parameter \"creditAmount\" is missing");
        }

        // Add the mandatory parameters.
        $parameters["targetPseudo"] = $transferringCreditsRequest->getTargetPseudo();
        $parameters["creditAmount"] = $transferringCreditsRequest->getCreditAmount();

        // Check and add the optional parameters.
        ArrayHelper::set($parameters, "reference", $transferringCreditsRequest->getReference(), [null]);

        return $parameters;
    }
}
