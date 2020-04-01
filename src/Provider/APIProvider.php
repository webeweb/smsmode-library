<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Provider;

use GuzzleHttp\Exception\ClientException;
use InvalidArgumentException;
use WBW\Library\SMSMode\Exception\APIException;
use WBW\Library\SMSMode\Model\Request\AccountBalanceRequest;
use WBW\Library\SMSMode\Model\Request\AddingContactRequest;
use WBW\Library\SMSMode\Model\Request\CheckingSMSMessageStatusRequest;
use WBW\Library\SMSMode\Model\Request\CreatingAPIKeyRequest;
use WBW\Library\SMSMode\Model\Request\CreatingSubAccountRequest;
use WBW\Library\SMSMode\Model\Request\DeletingSMSRequest;
use WBW\Library\SMSMode\Model\Request\DeletingSubAccountRequest;
use WBW\Library\SMSMode\Model\Request\DeliveryReportRequest;
use WBW\Library\SMSMode\Model\Request\RetrievingSMSReplyRequest;
use WBW\Library\SMSMode\Model\Request\SendingSMSBatchRequest;
use WBW\Library\SMSMode\Model\Request\SendingSMSMessageRequest;
use WBW\Library\SMSMode\Model\Request\SendingTextToSpeechSMSRequest;
use WBW\Library\SMSMode\Model\Request\SendingUnicodeSMSRequest;
use WBW\Library\SMSMode\Model\Request\SentSMSMessageListRequest;
use WBW\Library\SMSMode\Model\Request\TransferringCreditsRequest;
use WBW\Library\SMSMode\Model\Response\AccountBalanceResponse;
use WBW\Library\SMSMode\Model\Response\AddingContactResponse;
use WBW\Library\SMSMode\Model\Response\CheckingSMSMessageStatusResponse;
use WBW\Library\SMSMode\Model\Response\CreatingAPIKeyResponse;
use WBW\Library\SMSMode\Model\Response\CreatingSubAccountResponse;
use WBW\Library\SMSMode\Model\Response\DeletingSMSResponse;
use WBW\Library\SMSMode\Model\Response\DeletingSubAccountResponse;
use WBW\Library\SMSMode\Model\Response\DeliveryReportResponse;
use WBW\Library\SMSMode\Model\Response\RetrievingSMSReplyResponse;
use WBW\Library\SMSMode\Model\Response\SendingSMSBatchResponse;
use WBW\Library\SMSMode\Model\Response\SendingSMSMessageResponse;
use WBW\Library\SMSMode\Model\Response\SendingTextToSpeechSMSResponse;
use WBW\Library\SMSMode\Model\Response\SendingUnicodeSMSResponse;
use WBW\Library\SMSMode\Model\Response\SentSMSMessageListResponse;
use WBW\Library\SMSMode\Model\Response\TransferringCreditsResponse;
use WBW\Library\SMSMode\Serializer\ResponseDeserializer;

/**
 * API provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Provider
 */
class APIProvider extends AbstractProvider {

    /**
     * Account balance.
     *
     * @param AccountBalanceRequest $accountBalanceRequest The account balance request.
     * @return AccountBalanceResponse Returns the account balance response.
     * @throws APIException Throws an API exception if an error occurs.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     */
    public function accountBalance(AccountBalanceRequest $accountBalanceRequest) {

        $queryData = $this->getRequestSerializer()->serialize($accountBalanceRequest);

        $rawResponse = $this->callAPI($accountBalanceRequest, $queryData);

        return ResponseDeserializer::deserializeAccountBalanceResponse($rawResponse);
    }

    /**
     * Adding contact.
     *
     * @param AddingContactRequest $addingContactRequest The adding contact request.
     * @return AddingContactResponse Returns the adding contact response.
     * @throws APIException Throws an API exception if an error occurs.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     */
    public function addingContact(AddingContactRequest $addingContactRequest) {

        $queryData = $this->getRequestSerializer()->serialize($addingContactRequest);

        $rawResponse = $this->callAPI($addingContactRequest, $queryData);

        return ResponseDeserializer::deserializeAddingContactResponse($rawResponse);
    }

    /**
     * Checking SMS message status.
     *
     * @param CheckingSMSMessageStatusRequest $checkingSMSMessageStatusRequest The checking SMS message status request.
     * @return CheckingSMSMessageStatusResponse Returns the checking SMS message status response.
     * @throws APIException Throws an API exception if an error occurs.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     */
    public function checkingSMSMessageStatus(CheckingSMSMessageStatusRequest $checkingSMSMessageStatusRequest) {

        $queryData = $this->getRequestSerializer()->serialize($checkingSMSMessageStatusRequest);

        $rawResponse = $this->callAPI($checkingSMSMessageStatusRequest, $queryData);

        return ResponseDeserializer::deserializeCheckingSMSMessageStatusResponse($rawResponse);
    }

    /**
     * Creating API key.
     *
     * @param CreatingAPIKeyRequest $creatingAPIKeyRequest The creating API key request.
     * @return CreatingAPIKeyResponse Returns the creating API key response.
     * @throws APIException Throws an API exception if an error occurs.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     */
    public function creatingAPIKey(CreatingAPIKeyRequest $creatingAPIKeyRequest) {

        $queryData = $this->getRequestSerializer()->serialize($creatingAPIKeyRequest);

        try {

            $rawResponse = $this->callAPI($creatingAPIKeyRequest, $queryData);
        } catch (APIException $ex) {

            $previous = $ex->getPrevious();
            if (false === ($previous instanceof ClientException)) {
                throw $ex;
            }

            $rawResponse = $previous->getResponse()->getBody()->getContents();
        }

        return ResponseDeserializer::deserializeCreatingAPIKeyResponse($rawResponse);
    }

    /**
     * Creating sub-account.
     *
     * @param CreatingSubAccountRequest $creatingSubAccountRequest The creating sub-account request.
     * @return CreatingSubAccountResponse Returns the creating sub-account response.
     * @throws APIException Throws an API exception if an error occurs.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     */
    public function creatingSubAccount(CreatingSubAccountRequest $creatingSubAccountRequest) {

        $queryData = $this->getRequestSerializer()->serialize($creatingSubAccountRequest);

        $rawResponse = $this->callAPI($creatingSubAccountRequest, $queryData);

        return ResponseDeserializer::deserializeCreatingSubAccountResponse($rawResponse);
    }

    /**
     * Deleting SMS.
     *
     * @param DeletingSMSRequest $deletingSMSRequest The deleting SMS request.
     * @return DeletingSMSResponse Returns the delivery SMS message response.
     * @throws APIException Throws an API exception if an error occurs.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     */
    public function deletingSMS(DeletingSMSRequest $deletingSMSRequest) {

        $queryData = $this->getRequestSerializer()->serialize($deletingSMSRequest);

        $rawResponse = $this->callAPI($deletingSMSRequest, $queryData);

        return ResponseDeserializer::deserializeDeletingSMSResponse($rawResponse);
    }

    /**
     * Deleting sub-account.
     *
     * @param DeletingSubAccountRequest $deletingSubAccountRequest The deleting sub-account request.
     * @return DeletingSubAccountResponse Returns the delivery sub-account response.
     * @throws APIException Throws an API exception if an error occurs.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     */
    public function deletingSubAccount(DeletingSubAccountRequest $deletingSubAccountRequest) {

        $queryData = $this->getRequestSerializer()->serialize($deletingSubAccountRequest);

        $rawResponse = $this->callAPI($deletingSubAccountRequest, $queryData);

        return ResponseDeserializer::deserializeDeletingSubAccountResponse($rawResponse);
    }

    /**
     * Delivery report.
     *
     * @param DeliveryReportRequest $deliveryReportRequest The delivery report request.
     * @return DeliveryReportResponse Returns the delivery report response.
     * @throws APIException Throws an API exception if an error occurs.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     */
    public function deliveryReport(DeliveryReportRequest $deliveryReportRequest) {

        $queryData = $this->getRequestSerializer()->serialize($deliveryReportRequest);

        $rawResponse = $this->callAPI($deliveryReportRequest, $queryData);

        return ResponseDeserializer::deserializeDeliveryReportResponse($rawResponse);
    }

    /**
     * Retrieving SMS reply.
     *
     * @param RetrievingSMSReplyRequest $retrievingSMSReplyRequest The retrieving SMS reply request.
     * @return RetrievingSMSReplyResponse Returns the retrieving SMS reply response.
     * @throws APIException Throws an API exception if an error occurs.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     */
    public function retrievingSMSReply(RetrievingSMSReplyRequest $retrievingSMSReplyRequest) {

        $queryData = $this->getRequestSerializer()->serialize($retrievingSMSReplyRequest);

        $rawResponse = $this->callAPI($retrievingSMSReplyRequest, $queryData);

        return ResponseDeserializer::deserializeRetrievingSMSReplyResponse($rawResponse);
    }

    /**
     * Sending SMS batch.
     *
     * @param SendingSMSBatchRequest $sendingSMSBatchRequest The sending SMS batch request.
     * @return SendingSMSBatchResponse Returns the sending SMS message response.
     * @throws APIException Throws an API exception if an error occurs.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     */
    public function sendingSMSBatch(SendingSMSBatchRequest $sendingSMSBatchRequest) {

        $queryData = $this->getRequestSerializer()->serialize($sendingSMSBatchRequest);

        $postData = [];

        $buffer   = [];
        $buffer[] = "@" . realpath($queryData["fichier"]);
        $buffer[] = "filename=" . basename($queryData["fichier"]);
        $buffer[] = "type=text/csv";

        $postData["fichier"] = implode(";", $buffer);
        unset($queryData["fichier"]);

        $rawResponse = $this->callAPI($sendingSMSBatchRequest, $queryData, $postData, "multipart/form-data");

        return ResponseDeserializer::deserializeSendingSMSBatchResponse($rawResponse);
    }

    /**
     * Sending SMS message.
     *
     * @param SendingSMSMessageRequest $sendingSMSMessageRequest The sending SMS message request.
     * @return SendingSMSMessageResponse Returns the sending SMS message response.
     * @throws APIException Throws an API exception if an error occurs.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     */
    public function sendingSMSMessage(SendingSMSMessageRequest $sendingSMSMessageRequest) {

        $queryData = $this->getRequestSerializer()->serialize($sendingSMSMessageRequest);

        $postData = [];
        if (true === array_key_exists("numero", $queryData)) {
            $postData["numero"] = $queryData["numero"];
            unset($queryData["numero"]);
        }

        $rawResponse = $this->callAPI($sendingSMSMessageRequest, $queryData, $postData);

        return ResponseDeserializer::deserializeSendingSMSMessageResponse($rawResponse);
    }

    /**
     * Sending text-to-speech SMS request.
     *
     * @param SendingTextToSpeechSMSRequest $sendingTextToSpeechSMSRequest The sending text-to-speech SMS request.
     * @return SendingTextToSpeechSMSResponse Returns the sending text-to-speech response.
     * @throws APIException Throws an API exception if an error occurs.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     */
    public function sendingTextToSpeechSMS(SendingTextToSpeechSMSRequest $sendingTextToSpeechSMSRequest) {

        $queryData = $this->getRequestSerializer()->serialize($sendingTextToSpeechSMSRequest);

        $postData = [];
        if (true === array_key_exists("numero", $queryData)) {
            $postData["numero"] = $queryData["numero"];
            unset($queryData["numero"]);
        }

        $rawResponse = $this->callAPI($sendingTextToSpeechSMSRequest, $queryData, $postData);

        return ResponseDeserializer::deserializeSendingTextToSpeechSMSResponse($rawResponse);
    }

    /**
     * Sending unicode SMS request.
     *
     * @param SendingUnicodeSMSRequest $sendingUnicodeSMSRequest The sending unicode SMS request.
     * @return SendingUnicodeSMSResponse Returns the sending unicode response.
     * @throws APIException Throws an API exception if an error occurs.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     */
    public function sendingUnicodeSMS(SendingUnicodeSMSRequest $sendingUnicodeSMSRequest) {

        $queryData = $this->getRequestSerializer()->serialize($sendingUnicodeSMSRequest);

        $postData = [];
        if (true === array_key_exists("numero", $queryData)) {
            $postData["numero"] = $queryData["numero"];
            unset($queryData["numero"]);
        }

        $rawResponse = $this->callAPI($sendingUnicodeSMSRequest, $queryData, $postData);

        return ResponseDeserializer::deserializeSendingUnicodeSMSResponse($rawResponse);
    }

    /**
     * Sent SMS message list.
     *
     * @param SentSMSMessageListRequest $sentSMSMessageListRequest The sent SMS message list request.
     * @return SentSMSMessageListResponse Returns the sent SMS message list response.
     * @throws APIException Throws an API exception if an error occurs.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     */
    public function sentSMSMessageList(SentSMSMessageListRequest $sentSMSMessageListRequest) {

        $queryData = $this->getRequestSerializer()->serialize($sentSMSMessageListRequest);

        $rawResponse = $this->callAPI($sentSMSMessageListRequest, $queryData);

        return ResponseDeserializer::deserializeSentSMSMessageListResponse($rawResponse);
    }

    /**
     * Transferring credits.
     *
     * @param TransferringCreditsRequest $transferringCreditsRequest The transferring credits request.
     * @return TransferringCreditsResponse Returns the transferring credits response.
     * @throws APIException Throws an API exception if an error occurs.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     */
    public function transferringCredits(TransferringCreditsRequest $transferringCreditsRequest) {

        $queryData = $this->getRequestSerializer()->serialize($transferringCreditsRequest);

        $rawResponse = $this->callAPI($transferringCreditsRequest, $queryData);

        return ResponseDeserializer::deserializeTransferringCreditsResponse($rawResponse);
    }
}
