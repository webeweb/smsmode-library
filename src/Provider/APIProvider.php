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

use Exception;
use InvalidArgumentException;
use ReflectionException;
use WBW\Library\Core\Exception\Network\CURLRequestCallException;
use WBW\Library\Core\Network\CURL\Factory\CURLFactory;
use WBW\Library\Core\Network\HTTP\HTTPInterface;
use WBW\Library\SMSMode\API\APIProviderInterface;
use WBW\Library\SMSMode\Exception\APIException;
use WBW\Library\SMSMode\Model\AbstractRequest;
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
use WBW\Library\SMSMode\Model\DeliveryReportRequest;
use WBW\Library\SMSMode\Model\DeliveryReportResponse;
use WBW\Library\SMSMode\Model\RetrievingSMSReplyRequest;
use WBW\Library\SMSMode\Model\RetrievingSMSReplyResponse;
use WBW\Library\SMSMode\Model\SendingSMSMessageRequest;
use WBW\Library\SMSMode\Model\SendingSMSMessageResponse;
use WBW\Library\SMSMode\Model\SendingTextToSpeechSMSRequest;
use WBW\Library\SMSMode\Model\SendingTextToSpeechSMSResponse;
use WBW\Library\SMSMode\Model\SendingUnicodeSMSRequest;
use WBW\Library\SMSMode\Model\SendingUnicodeSMSResponse;
use WBW\Library\SMSMode\Model\SentSMSMessageListRequest;
use WBW\Library\SMSMode\Model\SentSMSMessageListResponse;
use WBW\Library\SMSMode\Model\TransferringCreditsRequest;
use WBW\Library\SMSMode\Model\TransferringCreditsResponse;
use WBW\Library\SMSMode\Normalizer\RequestNormalizer;
use WBW\Library\SMSMode\Normalizer\ResponseNormalizer;

/**
 * API provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Provider
 */
class APIProvider {

    /**
     * Endpoint path.
     *
     * @var string
     */
    const ENDPOINT_PATH = "https://api.smsmode.com";

    /**
     * Authentication.
     *
     * @var Authentication
     */
    private $authentication;

    /**
     * Debug.
     *
     * @var bool
     */
    private $debug;

    /**
     * Request normalizer.
     *
     * @var RequestNormalizer
     */
    private $requestNormalizer;

    /**
     * Constructor.
     *
     * @param Authentication $authentication The authentication.
     */
    public function __construct(Authentication $authentication) {
        $this->setAuthentication($authentication);
        $this->setDebug(false);
        $this->setRequestNormalizer(new RequestNormalizer());
    }

    /**
     * Account balance.
     *
     * @param AccountBalanceRequest $accountBalanceRequest The account balance request.
     * @return AccountBalanceResponse Returns the account balance response.
     * @throws APIException Throws an API exception if an error occurs.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws ReflectionException Throws a reflection exception.
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
     * @throws ReflectionException Throws a reflection exception.
     */
    public function addingContact(AddingContactRequest $addingContactRequest) {

        $queryData = $this->getRequestNormalizer()->normalize($addingContactRequest);

        $rawResponse = $this->callAPI($addingContactRequest, $queryData);

        return ResponseNormalizer::denormalizeAddingContactResponse($rawResponse);
    }

    /**
     * Call API.
     *
     * @param AbstractRequest $request The request.
     * @param array $queryData The query data.
     * @param array $postData The post data.
     * @return string Returns the raw response.
     * @throws APIException Throws an API exception if an error occurs.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     */
    protected function callAPI(AbstractRequest $request, array $queryData, array $postData = []) {

        try {

            $cURLRequest = CURLFactory::getInstance(0 === count($postData) ? HTTPInterface::HTTP_METHOD_GET : HTTPInterface::HTTP_METHOD_POST);
            $cURLRequest->getConfiguration()->addHeader("Accept", "text/html");
            $cURLRequest->getConfiguration()->setDebug($this->getDebug());
            $cURLRequest->getConfiguration()->setHost(self::ENDPOINT_PATH);
            $cURLRequest->getConfiguration()->setUserAgent("webeweb/smsmode-library");
            $cURLRequest->setResourcePath($request->getResourcePath());

            $authenticationData = $this->getRequestNormalizer()->normalize($this->getAuthentication());

            // Handle each authentication data.
            foreach ($authenticationData as $name => $value) {
                $cURLRequest->addQueryData($name, $value);
            }

            // Handle each query data.
            foreach ($queryData as $name => $value) {
                $cURLRequest->addQueryData($name, $value);
            }

            // Handle each post data.
            foreach ($postData as $name => $value) {
                $cURLRequest->addPostData($name, $value);
            }

            $cURLResponse = $cURLRequest->call();

            return utf8_encode($cURLResponse->getResponseBody());
        } catch (InvalidArgumentException $ex) {

            throw $ex;
        } catch (Exception $ex) {

            throw new APIException("Failed to call sMsmode API", $ex);
        }
    }

    /**
     * Checking SMS message status.
     *
     * @param CheckingSMSMessageStatusRequest $checkingSMSMessageStatusRequest The checking SMS message status request.
     * @return CheckingSMSMessageStatusResponse Returns the checking SMS message status response.
     * @throws APIException Throws an API exception if an error occurs.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws ReflectionException Throws a reflection exception.
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
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws ReflectionException Throws a reflection exception.
     */
    public function creatingAPIKey(CreatingAPIKeyRequest $creatingAPIKeyRequest) {

        $queryData = $this->getRequestNormalizer()->normalize($creatingAPIKeyRequest);

        try {

            $rawResponse = $this->callAPI($creatingAPIKeyRequest, $queryData);
        } catch (Exception $ex) {

            $previous = $ex->getPrevious();
            if (false === ($previous instanceof CURLRequestCallException)) {
                throw $ex;
            }

            $rawResponse = $previous->getResponse()->getResponseBody();
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
     * @throws ReflectionException Throws a reflection exception.
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
     * @throws ReflectionException Throws a reflection exception.
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
     * @throws ReflectionException Throws a reflection exception.
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
     * @throws ReflectionException Throws a reflection exception.
     */
    public function deliveryReport(DeliveryReportRequest $deliveryReportRequest) {

        $queryData = $this->getRequestNormalizer()->normalize($deliveryReportRequest);

        $rawResponse = $this->callAPI($deliveryReportRequest, $queryData);

        return ResponseNormalizer::denormalizeDeliveryReportResponse($rawResponse);
    }

    /**
     * Get the authentication.
     *
     * @return Authentication Returns the authentication.
     */
    public function getAuthentication() {
        return $this->authentication;
    }

    /**
     * Get the debug.
     *
     * @return bool Returns the debug.
     */
    public function getDebug() {
        return $this->debug;
    }

    /**
     * Get the request normalizer.
     *
     * @return RequestNormalizer The request normalizer.
     */
    public function getRequestNormalizer() {
        return $this->requestNormalizer;
    }

    /**
     * Retrieving SMS reply.
     *
     * @param RetrievingSMSReplyRequest $retrievingSMSReplyRequest The retrieving SMS reply request.
     * @return RetrievingSMSReplyResponse Returns the retrieving SMS reply response.
     * @throws APIException Throws an API exception if an error occurs.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws ReflectionException Throws a reflection exception.
     */
    public function retrievingSMSReply(RetrievingSMSReplyRequest $retrievingSMSReplyRequest) {

        $queryData = $this->getRequestNormalizer()->normalize($retrievingSMSReplyRequest);

        $rawResponse = $this->callAPI($retrievingSMSReplyRequest, $queryData);

        return ResponseNormalizer::denormalizeRetrievingSMSReplyResponse($rawResponse);
    }

    /**
     * Sending SMS message.
     *
     * @param SendingSMSMessageRequest $sendingSMSMessageRequest The sending SMS message request.
     * @return SendingSMSMessageResponse Returns the sending SMS message response.
     * @throws APIException Throws an API exception if an error occurs.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws ReflectionException Throws a reflection exception.
     */
    public function sendingSMSMessage(SendingSMSMessageRequest $sendingSMSMessageRequest) {

        $queryData = $this->getRequestNormalizer()->normalize($sendingSMSMessageRequest);
        $postData  = [];
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
     * @throws ReflectionException Throws a reflection exception.
     */
    public function sendingTextToSpeechSMS(SendingTextToSpeechSMSRequest $sendingTextToSpeechSMSRequest) {

        $queryData = $this->getRequestNormalizer()->normalize($sendingTextToSpeechSMSRequest);
        $postData  = [];
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
     * @throws ReflectionException Throws a reflection exception.
     */
    public function sendingUnicodeSMS(SendingUnicodeSMSRequest $sendingUnicodeSMSRequest) {

        $queryData = $this->getRequestNormalizer()->normalize($sendingUnicodeSMSRequest);
        $postData  = [];
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
     * @throws ReflectionException Throws a reflection exception.
     */
    public function sentSMSMessageList(SentSMSMessageListRequest $sentSMSMessageListRequest) {

        $queryData = $this->getRequestNormalizer()->normalize($sentSMSMessageListRequest);

        $rawResponse = $this->callAPI($sentSMSMessageListRequest, $queryData);

        return ResponseNormalizer::denormalizeSentSMSMessageListResponse($rawResponse);
    }

    /**
     * Set the authentication.
     *
     * @param Authentication $authentication The authentication.
     * @return APIProvider Returns this provider.
     */
    protected function setAuthentication(Authentication $authentication) {
        $this->authentication = $authentication;
        return $this;
    }

    /**
     * Set the debug.
     *
     * @param bool $debug The debug.
     * @return APIProvider Returns this API provider.
     */
    public function setDebug($debug) {
        $this->debug = $debug;
        return $this;
    }

    /**
     * Set the request normalizer.
     *
     * @param RequestNormalizer $requestNormalizer
     * @return APIProvider Returns this API provider.
     */
    protected function setRequestNormalizer(RequestNormalizer $requestNormalizer) {
        $this->requestNormalizer = $requestNormalizer;
        return $this;
    }

    /**
     * Transferring credits.
     *
     * @param TransferringCreditsRequest $transferringCreditsRequest The transferring credits request.
     * @return TransferringCreditsResponse Returns the transferring credits response.
     * @throws APIException Throws an API exception if an error occurs.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws ReflectionException Throws a reflection exception.
     */
    public function transferringCredits(TransferringCreditsRequest $transferringCreditsRequest) {

        $queryData = $this->getRequestNormalizer()->normalize($transferringCreditsRequest);

        $rawResponse = $this->callAPI($transferringCreditsRequest, $queryData);

        return ResponseNormalizer::denormalizeTransferringCreditsResponse($rawResponse);
    }

}
