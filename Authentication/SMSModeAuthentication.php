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

use WBW\Library\SMSMode\Exception\SMSModeMissingSettingException;

/**
 * sMsmode authentication.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Authentication
 * @final
 */
final class SMSModeAuthentication {

    /**
     * Password.
     *
     * @var string
     */
    private $password;

    /**
     * Token.
     *
     * @var string
     */
    private $token;

    /**
     * Username.
     *
     * @var string
     */
    private $username;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * Get the password.
     *
     * @return string Returns the password.
     */
    public function getPassword() {
        return $this->password;
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
     * Get the username.
     *
     * @return string Returns the username.
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Set the password.
     *
     * @param string $password The password.
     * @return SMSModeAuthentication Returns the sMsmode authentication.
     */
    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    /**
     * Set the token.
     *
     * @param string $token The token.
     * @return SMSModeAuthentication Returns the sMsmode authentication.
     */
    public function setToken($token) {
        $this->token = $token;
        return $this;
    }

    /**
     * Set the username.
     *
     * @param string $username The username.
     * @return SMSModeAuthentication Returns the sMsmode authentication.
     */
    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }

    /**
     * Convert into an array representing this instance.
     *
     * @return array Returns an array representing this instance.
     * @throws SMSModeMissingSettingException Throws a sMsmode missing setting exception if a setting is missing.
     */
    public function toArray() {

        // Initialize the output.
        $output = [];

        // Check the priority attribute "token".
        if (null !== $this->token) {
            return ["accessToken" => $this->token];
        }

        // Check the required attribute "username".
        if (null === $this->username) {
            throw new SMSModeMissingSettingException("username");
        }
        $output["pseudo"] = $this->username;

        // Check the required attribute "password".
        if (null === $this->password) {
            throw new SMSModeMissingSettingException("password");
        }
        $output["pass"] = $this->password;

        // Return the output.
        return $output;
    }

}
