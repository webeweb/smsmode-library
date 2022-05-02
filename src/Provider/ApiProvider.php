<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Provider;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use InvalidArgumentException;
use WBW\Library\Provider\Exception\ApiException;
use WBW\Library\SmsMode\Request\AccountBalanceRequest;
use WBW\Library\SmsMode\Request\AddingContactRequest;
use WBW\Library\SmsMode\Request\CheckingSmsMessageStatusRequest;
use WBW\Library\SmsMode\Request\CreatingApiKeyRequest;
use WBW\Library\SmsMode\Request\CreatingSubAccountRequest;
use WBW\Library\SmsMode\Request\DeletingSmsRequest;
use WBW\Library\SmsMode\Request\DeletingSubAccountRequest;
use WBW\Library\SmsMode\Request\DeliveryReportRequest;
use WBW\Library\SmsMode\Request\RetrievingSmsReplyRequest;
use WBW\Library\SmsMode\Request\SendingSmsBatchRequest;
use WBW\Library\SmsMode\Request\SendingSmsMessageRequest;
use WBW\Library\SmsMode\Request\SendingTextToSpeechSmsRequest;
use WBW\Library\SmsMode\Request\SendingUnicodeSmsRequest;
use WBW\Library\SmsMode\Request\SentSmsMessageListRequest;
use WBW\Library\SmsMode\Request\TransferringCreditsRequest;
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
use WBW\Library\SmsMode\Serializer\ResponseDeserializer;

/**
 * API provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Provider
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
     * @param CheckingSmsMessageStatusRequest $request The checking SMS message status request.
     * @return CheckingSmsMessageStatusResponse Returns the checking SMS message status response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function checkingSmsMessageStatus(CheckingSmsMessageStatusRequest $request): CheckingSmsMessageStatusResponse {

        $queryData = $this->getRequestSerializer()->serialize($request);

        $rawResponse = $this->callApi($request, $queryData);

        return ResponseDeserializer::deserializeCheckingSmsMessageStatusResponse($rawResponse);
    }

    /**
     * Creating API key.
     *
     * @param CreatingApiKeyRequest $request The creating API key request.
     * @return CreatingApiKeyResponse Returns the creating API key response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function creatingApiKey(CreatingApiKeyRequest $request): CreatingApiKeyResponse {

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

        return ResponseDeserializer::deserializeCreatingApiKeyResponse($rawResponse);
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
     * @param DeletingSmsRequest $request The deleting SMS request.
     * @return DeletingSmsResponse Returns the delivery SMS message response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function deletingSms(DeletingSmsRequest $request): DeletingSmsResponse {

        $queryData = $this->getRequestSerializer()->serialize($request);

        $rawResponse = $this->callApi($request, $queryData);

        return ResponseDeserializer::deserializeDeletingSmsResponse($rawResponse);
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
     * @param RetrievingSmsReplyRequest $request The retrieving SMS reply request.
     * @return RetrievingSmsReplyResponse Returns the retrieving SMS reply response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function retrievingSmsReply(RetrievingSmsReplyRequest $request): RetrievingSmsReplyResponse {

        $queryData = $this->getRequestSerializer()->serialize($request);

        $rawResponse = $this->callApi($request, $queryData);

        return ResponseDeserializer::deserializeRetrievingSmsReplyResponse($rawResponse);
    }

    /**
     * Sending SMS batch.
     *
     * @param SendingSmsBatchRequest $request The sending SMS batch request.
     * @return SendingSmsBatchResponse Returns the sending SMS message response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function sendingSmsBatch(SendingSmsBatchRequest $request): SendingSmsBatchResponse {

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

        return ResponseDeserializer::deserializeSendingSmsBatchResponse($rawResponse);
    }

    /**
     * Sending SMS message.
     *
     * @param SendingSmsMessageRequest $request The sending SMS message request.
     * @return SendingSmsMessageResponse Returns the sending SMS message response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function sendingSmsMessage(SendingSmsMessageRequest $request): SendingSmsMessageResponse {

        $queryData = $this->getRequestSerializer()->serialize($request);

        $postData = [];
        if (true === array_key_exists("numero", $queryData)) {
            $postData["numero"] = $queryData["numero"];
            unset($queryData["numero"]);
        }

        $rawResponse = $this->callApi($request, $queryData, $postData);

        return ResponseDeserializer::deserializeSendingSmsMessageResponse($rawResponse);
    }

    /**
     * Sending text-to-speech SMS request.
     *
     * @param SendingTextToSpeechSmsRequest $request The sending text-to-speech SMS request.
     * @return SendingTextToSpeechSmsResponse Returns the sending text-to-speech response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function sendingTextToSpeechSms(SendingTextToSpeechSmsRequest $request): SendingTextToSpeechSmsResponse {

        $queryData = $this->getRequestSerializer()->serialize($request);

        $postData = [];
        if (true === array_key_exists("numero", $queryData)) {
            $postData["numero"] = $queryData["numero"];
            unset($queryData["numero"]);
        }

        $rawResponse = $this->callApi($request, $queryData, $postData);

        return ResponseDeserializer::deserializeSendingTextToSpeechSmsResponse($rawResponse);
    }

    /**
     * Sending unicode SMS request.
     *
     * @param SendingUnicodeSmsRequest $request The sending unicode SMS request.
     * @return SendingUnicodeSmsResponse Returns the sending unicode response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function sendingUnicodeSms(SendingUnicodeSmsRequest $request): SendingUnicodeSmsResponse {

        $queryData = $this->getRequestSerializer()->serialize($request);

        $postData = [];
        if (true === array_key_exists("numero", $queryData)) {
            $postData["numero"] = $queryData["numero"];
            unset($queryData["numero"]);
        }

        $rawResponse = $this->callApi($request, $queryData, $postData);

        return ResponseDeserializer::deserializeSendingUnicodeSmsResponse($rawResponse);
    }

    /**
     * Sent SMS message list.
     *
     * @param SentSmsMessageListRequest $request The sent SMS message list request.
     * @return SentSmsMessageListResponse Returns the sent SMS message list response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function sentSmsMessageList(SentSmsMessageListRequest $request): SentSmsMessageListResponse {

        $queryData = $this->getRequestSerializer()->serialize($request);

        $rawResponse = $this->callApi($request, $queryData);

        return ResponseDeserializer::deserializeSentSmsMessageListResponse($rawResponse);
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
