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
use WBW\Library\SMSMode\Normalizer\ResponseNormalizer;

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

        $queryData = $this->getRequestNormalizer()->normalize($accountBalanceRequest);

        $rawResponse = $this->callAPI($accountBalanceRequest, $queryData);

        return ResponseNormalizer::denormalizeAccountBalanceResponse($rawResponse);
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

        $queryData = $this->getRequestNormalizer()->normalize($addingContactRequest);

        $rawResponse = $this->callAPI($addingContactRequest, $queryData);

        return ResponseNormalizer::denormalizeAddingContactResponse($rawResponse);
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

        $queryData = $this->getRequestNormalizer()->normalize($checkingSMSMessageStatusRequest);

        $rawResponse = $this->callAPI($checkingSMSMessageStatusRequest, $queryData);

        return ResponseNormalizer::denormalizeCheckingSMSMessageStatusResponse($rawResponse);
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

        $queryData = $this->getRequestNormalizer()->normalize($creatingAPIKeyRequest);

        try {

            $rawResponse = $this->callAPI($creatingAPIKeyRequest, $queryData);
        } catch (APIException $ex) {

            $previous = $ex->getPrevious();
            if (false === ($previous instanceof ClientException)) {
                throw $ex;
            }

            $rawResponse = $previous->getResponse()->getBody()->getContents();
        }

        return ResponseNormalizer::denormalizeCreatingAPIKeyResponse($rawResponse);
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

        $queryData = $this->getRequestNormalizer()->normalize($creatingSubAccountRequest);

        $rawResponse = $this->callAPI($creatingSubAccountRequest, $queryData);

        return ResponseNormalizer::denormalizeCreatingSubAccountResponse($rawResponse);
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

        $queryData = $this->getRequestNormalizer()->normalize($deletingSMSRequest);

        $rawResponse = $this->callAPI($deletingSMSRequest, $queryData);

        return ResponseNormalizer::denormalizeDeletingSMSResponse($rawResponse);
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

        $queryData = $this->getRequestNormalizer()->normalize($deletingSubAccountRequest);

        $rawResponse = $this->callAPI($deletingSubAccountRequest, $queryData);

        return ResponseNormalizer::denormalizeDeletingSubAccountResponse($rawResponse);
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

        $queryData = $this->getRequestNormalizer()->normalize($deliveryReportRequest);

        $rawResponse = $this->callAPI($deliveryReportRequest, $queryData);

        return ResponseNormalizer::denormalizeDeliveryReportResponse($rawResponse);
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

        $queryData = $this->getRequestNormalizer()->normalize($retrievingSMSReplyRequest);

        $rawResponse = $this->callAPI($retrievingSMSReplyRequest, $queryData);

        return ResponseNormalizer::denormalizeRetrievingSMSReplyResponse($rawResponse);
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

        $queryData = $this->getRequestNormalizer()->normalize($sendingSMSBatchRequest);

        $postData = [];

        $buffer   = [];
        $buffer[] = "@" . $queryData["fichier"];
        $buffer[] = "filename=" . basename($queryData["fichier"]);
        $buffer[] = "type=text/csv";

        $postData["fichier"] = implode(";", $buffer);
        unset($queryData["fichier"]);

        $rawResponse = $this->callAPI($sendingSMSBatchRequest, $queryData, $postData);

        return ResponseNormalizer::denormalizeSendingSMSBatchResponse($rawResponse);
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

        $queryData = $this->getRequestNormalizer()->normalize($sendingSMSMessageRequest);

        $postData = [];
        if (true === array_key_exists("numero", $queryData)) {
            $postData["numero"] = $queryData["numero"];
            unset($queryData["numero"]);
        }

        $rawResponse = $this->callAPI($sendingSMSMessageRequest, $queryData, $postData);

        return ResponseNormalizer::denormalizeSendingSMSMessageResponse($rawResponse);
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

        $queryData = $this->getRequestNormalizer()->normalize($sendingTextToSpeechSMSRequest);

        $postData = [];
        if (true === array_key_exists("numero", $queryData)) {
            $postData["numero"] = $queryData["numero"];
            unset($queryData["numero"]);
        }

        $rawResponse = $this->callAPI($sendingTextToSpeechSMSRequest, $queryData, $postData);

        return ResponseNormalizer::denormalizeSendingTextToSpeechSMSResponse($rawResponse);
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

        $queryData = $this->getRequestNormalizer()->normalize($sendingUnicodeSMSRequest);

        $postData = [];
        if (true === array_key_exists("numero", $queryData)) {
            $postData["numero"] = $queryData["numero"];
            unset($queryData["numero"]);
        }

        $rawResponse = $this->callAPI($sendingUnicodeSMSRequest, $queryData, $postData);

        return ResponseNormalizer::denormalizeSendingUnicodeSMSResponse($rawResponse);
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

        $queryData = $this->getRequestNormalizer()->normalize($sentSMSMessageListRequest);

        $rawResponse = $this->callAPI($sentSMSMessageListRequest, $queryData);

        return ResponseNormalizer::denormalizeSentSMSMessageListResponse($rawResponse);
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

        $queryData = $this->getRequestNormalizer()->normalize($transferringCreditsRequest);

        $rawResponse = $this->callAPI($transferringCreditsRequest, $queryData);

        return ResponseNormalizer::denormalizeTransferringCreditsResponse($rawResponse);
    }
}
