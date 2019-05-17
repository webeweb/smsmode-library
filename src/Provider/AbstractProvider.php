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
use GuzzleHttp\Client;
use InvalidArgumentException;
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

            $client = new Client([
                "base_uri"    => self::ENDPOINT_PATH . "/",
                "debug"       => $this->getDebug(),
                "headers"     => [
                    "Accept"     => "text/html",
                    "User-Agent" => "webeweb/smsmode-library",
                ],
                "synchronous" => true,
            ]);

            $method  = 0 === count($postData) ? "GET" : "POST";
            $uri     = substr($request->getResourcePath(), 1);
            $options = [
                "query"       => array_merge($this->getRequestNormalizer()->normalize($this->getAuthentication()), $queryData),
                "form_params" => $postData,
            ];

            $response = $client->request($method, $uri, $options);

            return utf8_encode($response->getBody()->getContents());
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
