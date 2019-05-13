<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Provider;

use Exception;
use InvalidArgumentException;
use WBW\Library\Core\Network\CURL\Factory\CURLFactory;
use WBW\Library\Core\Network\HTTP\HTTPInterface;
use WBW\Library\SMSMode\Exception\APIException;
use WBW\Library\SMSMode\Model\AbstractRequest;
use WBW\Library\SMSMode\Model\Authentication;
use WBW\Library\SMSMode\Normalizer\RequestNormalizer;

/**
 * Abstract provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Provider
 * @abstract
 */
abstract class AbstractProvider {

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

            throw new APIException("Call sMsmode API failed", $ex);
        }
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
     * @return APIProvider Returns this provider.
     */
    public function setDebug($debug) {
        $this->debug = $debug;
        return $this;
    }

    /**
     * Set the request normalizer.
     *
     * @param RequestNormalizer $requestNormalizer
     * @return APIProvider Returns this provider.
     */
    protected function setRequestNormalizer(RequestNormalizer $requestNormalizer) {
        $this->requestNormalizer = $requestNormalizer;
        return $this;
    }
}