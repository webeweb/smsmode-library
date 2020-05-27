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
use Psr\Log\LoggerInterface;
use WBW\Library\Core\Argument\Helper\ArrayHelper;
use WBW\Library\Core\Exception\ApiException;
use WBW\Library\Core\Provider\AbstractProvider as BaseProvider;
use WBW\Library\SMSMode\Model\AbstractRequest;
use WBW\Library\SMSMode\Model\Authentication;
use WBW\Library\SMSMode\Serializer\RequestSerializer;

/**
 * Abstract provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Provider
 * @abstract
 */
abstract class AbstractProvider extends BaseProvider {

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
     * Request serializer.
     *
     * @var RequestSerializer
     */
    private $requestSerializer;

    /**
     * Constructor.
     *
     * @param Authentication $authentication The authentication.
     * @param LoggerInterface|null $logger The logger.
     */
    public function __construct(Authentication $authentication, LoggerInterface $logger = null) {
        parent::__construct($logger);
        $this->setAuthentication($authentication);
        $this->setDebug(false);
        $this->setLogger($logger);
        $this->setRequestSerializer(new RequestSerializer());
    }

    /**
     * Build the configuration.
     *
     * @return array Returns the configuration.
     */
    private function buildConfiguration() {
        return [
            "base_uri"    => self::ENDPOINT_PATH . "/",
            "debug"       => $this->getDebug(),
            "headers"     => [
                "Accept"     => "text/html",
                "User-Agent" => "webeweb/smsmode-library",
            ],
            "synchronous" => true,
        ];
    }

    /**
     * Call API.
     *
     * @param AbstractRequest $request The request.
     * @param array $queryData The query data.
     * @param array $postData The post data.
     * @return string Returns the raw response.
     * @throws ApiException Throws an API exception if an error occurs.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     */
    protected function callAPI(AbstractRequest $request, array $queryData, array $postData = []) {

        try {

            $config = $this->buildConfiguration();

            $client = new Client($config);

            $body = true === ArrayHelper::isObject($postData) ? "form_params" : "multipart";

            $method  = 0 === count($postData) ? "GET" : "POST";
            $uri     = substr($request->getResourcePath(), 1);
            $options = [
                "query" => array_merge($this->getRequestSerializer()->serialize($this->getAuthentication()), $queryData),
                $body   => $postData,
            ];

            $this->logInfo(sprintf("Call sMsmode API %s %s", $method, $uri), ["config" => $config, "options" => $options]);

            $response = $client->request($method, $uri, $options);

            return utf8_encode($response->getBody()->getContents());
        } catch (InvalidArgumentException $ex) {

            throw $ex;
        } catch (Exception $ex) {

            throw new ApiException("Call sMsmode API failed", 500, $ex);
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
     * Get the request serializer.
     *
     * @return RequestSerializer The request serializer.
     */
    public function getRequestSerializer() {
        return $this->requestSerializer;
    }

    /**
     * Set the authentication.
     *
     * @param Authentication $authentication The authentication.
     * @return AbstractProvider Returns this provider.
     */
    protected function setAuthentication(Authentication $authentication) {
        $this->authentication = $authentication;
        return $this;
    }

    /**
     * Set the request serializer.
     *
     * @param RequestSerializer $requestSerializer
     * @return AbstractProvider Returns this provider.
     */
    protected function setRequestSerializer(RequestSerializer $requestSerializer) {
        $this->requestSerializer = $requestSerializer;
        return $this;
    }
}
