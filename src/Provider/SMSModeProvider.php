<?php

/**
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Provider;

use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\Core\Network\CURL\Configuration\CURLConfiguration;
use WBW\Library\Core\Network\CURL\Request\CURLGetRequest;
use WBW\Library\SMSMode\API\SMSModeRequestInterface;
use WBW\Library\SMSMode\API\SMSModeResponseInterface;
use WBW\Library\SMSMode\Authentication\SMSModeAuthentication;

/**
 * sMsmode provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Provider
 */
class SMSModeProvider {

    /**
     * Authentication.
     *
     * @var SMSModeAuthentication
     */
    private $authentication;

    /**
     * Debug.
     *
     * @var bool
     */
    private $debug = false;

    /**
     * Request.
     *
     * @var SMSModeRequestInterface
     */
    private $request;

    /**
     * Constructor.
     *
     * @param SMSModeAuthentication $authentication The authentication.
     * @param SMSModeRequestInterface $request The request.
     */
    public function __construct(SMSModeAuthentication $authentication, SMSModeRequestInterface $request) {
        $this->setAuthentication($authentication);
        $this->setRequest($request);
    }

    /**
     * Call the API.
     *
     * @return SMSModeResponseInterface Returns the response.
     * @throws NullPointerException Throws a null pointer exception if a setting is missing.
     * @throws IllegalArgumentException Throws an illegal argument exception if a setting is invalid.
     */
    public function callAPI() {

        // Prepare the CURL request.
        $cURLRequest = new CURLGetRequest(new CURLConfiguration(), $this->request->getResourcePath());
        $cURLRequest->getConfiguration()->setDebug($this->debug);
        $cURLRequest->getConfiguration()->setHost(SMSModeRequestInterface::HOST);
        $cURLRequest->getConfiguration()->setUserAgent("webeweb/smsmode-library");

        // Add each query data.
        foreach ($this->authentication->toArray() as $key => $value) {
            $cURLRequest->addQueryData($key, $value);
        }
        foreach ($this->request->toArray() as $key => $value) {
            $cURLRequest->addQueryData($key, $value);
        }

        // Call the request.
        $cURLResponse = $cURLRequest->call();

        // Return the parsed response.
        return $this->request->parseResponse(utf8_encode($cURLResponse->getResponseBody()));
    }

    /**
     * Get the authentication.
     *
     * @return SMSModeAuthentication Returns the authentication.
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
     * Get the request.
     *
     * @return SMSModeRequestInterface Returns the request.
     */
    public function getRequest() {
        return $this->request;
    }

    /**
     * Set the authentication.
     *
     * @param SMSModeAuthentication $authentication The authentication.
     * @return SMSModeProvider Returns this provider.
     */
    protected function setAuthentication(SMSModeAuthentication $authentication) {
        $this->authentication = $authentication;
        return $this;
    }

    /**
     * Set the debug.
     *
     * @param bool $debug The debug.
     * @return SMSModeProvider Returns this provider.
     */
    public function setDebug($debug) {
        $this->debug = $debug;
        return $this;
    }

    /**
     * Set the request.
     *
     * @param SMSModeRequestInterface $request The request.
     * @return SMSModeProvider Returns this provider.
     */
    protected function setRequest(SMSModeRequestInterface $request) {
        $this->request = $request;
        return $this;
    }

}
