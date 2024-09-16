<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\SmsMode\Provider;

use GuzzleHttp\Client;
use InvalidArgumentException;
use Psr\Log\LoggerInterface;
use Throwable;
use WBW\Library\Common\Helper\ArrayHelper;
use WBW\Library\Common\Provider\AbstractProvider as BaseProvider;
use WBW\Library\Common\Provider\ProviderException;
use WBW\Library\SmsMode\Model\Authentication;
use WBW\Library\SmsMode\Request\AbstractRequest;
use WBW\Library\SmsMode\Serializer\RequestSerializer;

/**
 * Abstract provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Provider
 * @abstract
 */
abstract class AbstractProvider extends BaseProvider {

    /**
     * Endpoint path.
     *
     * @var string
     */
    public const ENDPOINT_PATH = "https://api.smsmode.com";

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
     * verifyCA: Guzzle verify parameter
     * https://docs.guzzlephp.org/en/stable/request-options.html#verify
     * @var string|bool
     */
    private $verifyCA = true;

    /**
     * Constructor.
     *
     * @param Authentication $authentication The authentication.
     * @param LoggerInterface|null $logger The logger.
     */
    public function __construct(Authentication $authentication, LoggerInterface $logger = null) {
        parent::__construct($logger);

        $this->setAuthentication($authentication);
        $this->setRequestSerializer(new RequestSerializer());
    }

    /**
     * Build the configuration.
     *
     * @return array<string,mixed> Returns the configuration.
     */
    private function buildConfiguration(): array {

        return [
            "base_uri"    => self::ENDPOINT_PATH . "/",
            "debug"       => $this->getDebug(),
            "headers"     => [
                "Accept"     => "text/html",
                "User-Agent" => "webeweb/smsmode-library",
            ],
            "synchronous" => true,
            "verify" => $this->getVerifyCA(),
        ];
    }

    /**
     * Call API.
     *
     * @param AbstractRequest $request The request.
     * @param array<string,mixed> $queryData The query data.
     * @param mixed[] $postData The post data.
     * @return string Returns the raw response.
     * @throws InvalidArgumentException Throws an invalid argument exception if a parameter is missing.
     * @throws ProviderException Throws a provider exception if an error occurs.
     */
    protected function callApi(AbstractRequest $request, array $queryData, array $postData = []): string {

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
        } catch (Throwable $ex) {
            throw new ProviderException("Call sMsmode API failed", 500, $ex);
        }
    }

    /**
     * Get the authentication.
     *
     * @return Authentication Returns the authentication.
     */
    public function getAuthentication(): Authentication {
        return $this->authentication;
    }

    /**
     * Get the request serializer.
     *
     * @return RequestSerializer The request serializer.
     */
    public function getRequestSerializer(): RequestSerializer {
        return $this->requestSerializer;
    }

    /**
     * Get the "verify" Guzzle parameter. 
     *
     * @return string|bool Ca verify
     */
    public function getVerifyCA(): string|bool {
        return $this->verifyCA;
    }

    /**
     * Set the authentication.
     *
     * @param Authentication $authentication The authentication.
     * @return AbstractProvider Returns this provider.
     */
    protected function setAuthentication(Authentication $authentication): AbstractProvider {
        $this->authentication = $authentication;
        return $this;
    }

    /**
     * Set the request serializer.
     *
     * @param RequestSerializer $requestSerializer
     * @return AbstractProvider Returns this provider.
     */
    protected function setRequestSerializer(RequestSerializer $requestSerializer): AbstractProvider {
        $this->requestSerializer = $requestSerializer;
        return $this;
    }

	/**
	 * Set the "verify" Guzzle parameter. 
     * https://docs.guzzlephp.org/en/stable/request-options.html#verify
	 *
	 * @param string|bool $verifyCA 
	 * @return AbstractProvider Returns this provider.
	 */
	public function setVerifyCA( string|bool $verifyCA ): AbstractProvider {
		$this->verifyCA = $verifyCA;
		return $this;
	}
}
