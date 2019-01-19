<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Request;

use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\SMSMode\API\Request\AuthenticationRequestInterface;

/**
 * Authentication request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Request
 */
class AuthenticationRequest implements AuthenticationRequestInterface {

    /**
     * Access token.
     *
     * @var string
     */
    private $accessToken;

    /**
     * {@inheritdoc}
     */
    public function getAccessToken() {
        return $this->accessToken;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath() {
        return self::AUTHENTICATION_RESOURCE_PATH;
    }

    /**
     * {@inheritdoc}
     */
    public function setAccessToken($accessToken) {
        $this->accessToken = $accessToken;
        return $this;
    }

    /**
     *  {@inhertidoc}
     */
    public function toArray() {

        // Initialize the output.
        $output = [];

        // Check the mandatory parameter "smsID".
        if (null === $this->accessToken) {
            throw new NullPointerException("The mandatory parameter \"accessToken\" is missing");
        }

        // Add the mandatory parameter.
        $output["accessToken"] = $this->accessToken;

        // Return the output.
        return $output;
    }
}
