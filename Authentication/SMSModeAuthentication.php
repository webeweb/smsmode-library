<?php

/**
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Authentication;

use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\Core\Security\PasswordAuthentication;

/**
 * sMsmode authentication.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Authentication
 */
class SMSModeAuthentication extends PasswordAuthentication {

    /**
     * Token.
     *
     * @var string
     */
    private $token;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct(null, null);
    }

    /**
     * Get the token.
     *
     * @return string Returns the token.
     */
    public function getToken() {
        return $this->token;
    }

    /**
     * Set the token.
     *
     * @param string $token The token.
     * @return SMSModeAuthentication Returns this sMsmode authentication.
     */
    public function setToken($token) {
        $this->token = $token;
        return $this;
    }

    /**
     * Convert into an array representing this instance.
     *
     * @return array Returns an array representing this instance.
     * @throws NullPointerException Throws a sMsmode missing setting exception if a setting is missing.
     */
    public function toArray() {

        // Initialize the output.
        $output = [];

        // Check the priority attribute "token".
        if (null !== $this->token) {
            return ["accessToken" => $this->token];
        }

        // Check the required attribute "username".
        if (null === $this->getUsername()) {
            throw new NullPointerException("The attribute \"username\" is missing");
        }
        $output["pseudo"] = $this->getUsername();

        // Check the required attribute "password".
        if (null === $this->getPassword()) {
            throw new NullPointerException("The attribute \"password\" is missing");
        }
        $output["pass"] = $this->getPassword();

        // Return the output.
        return $output;
    }

}
