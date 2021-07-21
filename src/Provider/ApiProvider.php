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
use GuzzleHttp\Exception\GuzzleException;
use InvalidArgumentException;
use WBW\Library\Provider\Exception\ApiException;
use WBW\Library\SMSMode\Request\AccountBalanceRequest;
use WBW\Library\SMSMode\Request\AddingContactRequest;
use WBW\Library\SMSMode\Request\CheckingSMSMessageStatusRequest;
use WBW\Library\SMSMode\Request\CreatingAPIKeyRequest;
use WBW\Library\SMSMode\Request\CreatingSubAccountRequest;
use WBW\Library\SMSMode\Request\DeletingSMSRequest;
use WBW\Library\SMSMode\Request\DeletingSubAccountRequest;
use WBW\Library\SMSMode\Request\DeliveryReportRequest;
use WBW\Library\SMSMode\Request\RetrievingSMSReplyRequest;
use WBW\Library\SMSMode\Request\SendingSMSBatchRequest;
use WBW\Library\SMSMode\Request\SendingSMSMessageRequest;
use WBW\Library\SMSMode\Request\SendingTextToSpeechSMSRequest;
use WBW\Library\SMSMode\Request\SendingUnicodeSMSRequest;
use WBW\Library\SMSMode\Request\SentSMSMessageListRequest;
use WBW\Library\SMSMode\Request\TransferringCreditsRequest;
use WBW\Library\SMSMode\Response\AccountBalanceResponse;
use WBW\Library\SMSMode\Response\AddingContactResponse;
use WBW\Library\SMSMode\Response\CheckingSMSMessageStatusResponse;
use WBW\Library\SMSMode\Response\CreatingAPIKeyResponse;
use WBW\Library\SMSMode\Response\CreatingSubAccountResponse;
use WBW\Library\SMSMode\Response\DeletingSMSResponse;
use WBW\Library\SMSMode\Response\DeletingSubAccountResponse;
use WBW\Library\SMSMode\Response\DeliveryReportResponse;
use WBW\Library\SMSMode\Response\RetrievingSMSReplyResponse;
use WBW\Library\SMSMode\Response\SendingSMSBatchResponse;
use WBW\Library\SMSMode\Response\SendingSMSMessageResponse;
use WBW\Library\SMSMode\Response\SendingTextToSpeechSMSResponse;
use WBW\Library\SMSMode\Response\SendingUnicodeSMSResponse;
use WBW\Library\SMSMode\Response\SentSMSMessageListResponse;
use WBW\Library\SMSMode\Response\TransferringCreditsResponse;
use WBW\Library\SMSMode\Serializer\ResponseDeserializer;

/**
 * API provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Provider
 */
class ApiProvider extends AbstractProvider {

    /**
     * Account balance.
     *
     * @param AccountBalanceRequest $request The account balance request.
     * @return AccountBalanceResponse Returns the account balance response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function accountBalance(AccountBalanceRequest $request): AccountBalanceResponse {

        $queryData = $this->getRequestSerializer()->serialize($request);

        $rawResponse = $this->callApi($request, $queryData);

        return ResponseDeserializer::deserializeAccountBalanceResponse($rawResponse);
    }

    /**
     * Adding contact.
     *
     * @param AddingContactRequest $request The adding contact request.
     * @return AddingContactResponse Returns the adding contact response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function addingContact(AddingContactRequest $request): AddingContactResponse {

        $queryData = $this->getRequestSerializer()->serialize($request);

        $rawResponse = $this->callApi($request, $queryData);

        return ResponseDeserializer::deserializeAddingContactResponse($rawResponse);
    }

    /**
     * Checking SMS message status.
     *
     * @param CheckingSMSMessageStatusRequest $request The checking SMS message status request.
     * @return CheckingSMSMessageStatusResponse Returns the checking SMS message status response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function checkingSMSMessageStatus(CheckingSMSMessageStatusRequest $request): CheckingSMSMessageStatusResponse {

        $queryData = $this->getRequestSerializer()->serialize($request);

        $rawResponse = $this->callApi($request, $queryData);

        return ResponseDeserializer::deserializeCheckingSMSMessageStatusResponse($rawResponse);
    }

    /**
     * Creating API key.
     *
     * @param CreatingAPIKeyRequest $request The creating API key request.
     * @return CreatingAPIKeyResponse Returns the creating API key response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function creatingAPIKey(CreatingAPIKeyRequest $request): CreatingAPIKeyResponse {

        $queryData = $this->getRequestSerializer()->serialize($request);

        try {

            $rawResponse = $this->callApi($request, $queryData);
        } catch (ApiException $ex) {

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
     * @param CreatingSubAccountRequest $request The creating sub-account request.
     * @return CreatingSubAccountResponse Returns the creating sub-account response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function creatingSubAccount(CreatingSubAccountRequest $request): CreatingSubAccountResponse {

        $queryData = $this->getRequestSerializer()->serialize($request);

        $rawResponse = $this->callApi($request, $queryData);

        return ResponseDeserializer::deserializeCreatingSubAccountResponse($rawResponse);
    }

    /**
     * Deleting SMS.
     *
     * @param DeletingSMSRequest $request The deleting SMS request.
     * @return DeletingSMSResponse Returns the delivery SMS message response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function deletingSMS(DeletingSMSRequest $request): DeletingSMSResponse {

        $queryData = $this->getRequestSerializer()->serialize($request);

        $rawResponse = $this->callApi($request, $queryData);

        return ResponseDeserializer::deserializeDeletingSMSResponse($rawResponse);
    }

    /**
     * Deleting sub-account.
     *
     * @param DeletingSubAccountRequest $request The deleting sub-account request.
     * @return DeletingSubAccountResponse Returns the delivery sub-account response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function deletingSubAccount(DeletingSubAccountRequest $request): DeletingSubAccountResponse {

        $queryData = $this->getRequestSerializer()->serialize($request);

        $rawResponse = $this->callApi($request, $queryData);

        return ResponseDeserializer::deserializeDeletingSubAccountResponse($rawResponse);
    }

    /**
     * Delivery report.
     *
     * @param DeliveryReportRequest $request The delivery report request.
     * @return DeliveryReportResponse Returns the delivery report response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function deliveryReport(DeliveryReportRequest $request): DeliveryReportResponse {

        $queryData = $this->getRequestSerializer()->serialize($request);

        $rawResponse = $this->callApi($request, $queryData);

        return ResponseDeserializer::deserializeDeliveryReportResponse($rawResponse);
    }

    /**
     * Retrieving SMS reply.
     *
     * @param RetrievingSMSReplyRequest $request The retrieving SMS reply request.
     * @return RetrievingSMSReplyResponse Returns the retrieving SMS reply response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function retrievingSMSReply(RetrievingSMSReplyRequest $request): RetrievingSMSReplyResponse {

        $queryData = $this->getRequestSerializer()->serialize($request);

        $rawResponse = $this->callApi($request, $queryData);

        return ResponseDeserializer::deserializeRetrievingSMSReplyResponse($rawResponse);
    }

    /**
     * Sending SMS batch.
     *
     * @param SendingSMSBatchRequest $request The sending SMS batch request.
     * @return SendingSMSBatchResponse Returns the sending SMS message response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function sendingSMSBatch(SendingSMSBatchRequest $request): SendingSMSBatchResponse {

        $queryData = $this->getRequestSerializer()->serialize($request);

        $filename = realpath($queryData["fichier"]);
        $postData = [
            [
                "name"     => "fichier",
                "contents" => fopen($filename, "r"),
                "filename" => basename($filename),
            ],
        ];

        unset($queryData["fichier"]);

        $rawResponse = $this->callApi($request, $queryData, $postData);

        return ResponseDeserializer::deserializeSendingSMSBatchResponse($rawResponse);
    }

    /**
     * Sending SMS message.
     *
     * @param SendingSMSMessageRequest $request The sending SMS message request.
     * @return SendingSMSMessageResponse Returns the sending SMS message response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function sendingSMSMessage(SendingSMSMessageRequest $request): SendingSMSMessageResponse {

        $queryData = $this->getRequestSerializer()->serialize($request);

        $postData = [];
        if (true === array_key_exists("numero", $queryData)) {
            $postData["numero"] = $queryData["numero"];
            unset($queryData["numero"]);
        }

        $rawResponse = $this->callApi($request, $queryData, $postData);

        return ResponseDeserializer::deserializeSendingSMSMessageResponse($rawResponse);
    }

    /**
     * Sending text-to-speech SMS request.
     *
     * @param SendingTextToSpeechSMSRequest $request The sending text-to-speech SMS request.
     * @return SendingTextToSpeechSMSResponse Returns the sending text-to-speech response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function sendingTextToSpeechSMS(SendingTextToSpeechSMSRequest $request): SendingTextToSpeechSMSResponse {

        $queryData = $this->getRequestSerializer()->serialize($request);

        $postData = [];
        if (true === array_key_exists("numero", $queryData)) {
            $postData["numero"] = $queryData["numero"];
            unset($queryData["numero"]);
        }

        $rawResponse = $this->callApi($request, $queryData, $postData);

        return ResponseDeserializer::deserializeSendingTextToSpeechSMSResponse($rawResponse);
    }

    /**
     * Sending unicode SMS request.
     *
     * @param SendingUnicodeSMSRequest $request The sending unicode SMS request.
     * @return SendingUnicodeSMSResponse Returns the sending unicode response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function sendingUnicodeSMS(SendingUnicodeSMSRequest $request): SendingUnicodeSMSResponse {

        $queryData = $this->getRequestSerializer()->serialize($request);

        $postData = [];
        if (true === array_key_exists("numero", $queryData)) {
            $postData["numero"] = $queryData["numero"];
            unset($queryData["numero"]);
        }

        $rawResponse = $this->callApi($request, $queryData, $postData);

        return ResponseDeserializer::deserializeSendingUnicodeSMSResponse($rawResponse);
    }

    /**
     * Sent SMS message list.
     *
     * @param SentSMSMessageListRequest $request The sent SMS message list request.
     * @return SentSMSMessageListResponse Returns the sent SMS message list response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function sentSMSMessageList(SentSMSMessageListRequest $request): SentSMSMessageListResponse {

        $queryData = $this->getRequestSerializer()->serialize($request);

        $rawResponse = $this->callApi($request, $queryData);

        return ResponseDeserializer::deserializeSentSMSMessageListResponse($rawResponse);
    }

    /**
     * Transferring credits.
     *
     * @param TransferringCreditsRequest $request The transferring credits request.
     * @return TransferringCreditsResponse Returns the transferring credits response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function transferringCredits(TransferringCreditsRequest $request): TransferringCreditsResponse {

        $queryData = $this->getRequestSerializer()->serialize($request);

        $rawResponse = $this->callApi($request, $queryData);

        return ResponseDeserializer::deserializeTransferringCreditsResponse($rawResponse);
    }
}
