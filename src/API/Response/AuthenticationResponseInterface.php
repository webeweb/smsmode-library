<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\API\Response;

use DateTime;
use WBW\Library\SMSMode\API\ResponseInterface;

/**
 * Authentication response interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\API\Response
 */
interface AuthenticationResponseInterface extends ResponseInterface {

    /**
     * Get the access token.
     *
     * @return string Returns the access token.
     */
    public function getAccessToken();

    /**
     * Get the account.
     *
     * @return string Returns the account.
     */
    public function getAccount();

    /**
     * Get the creation date.
     *
     * @return DateTime Returns the creation date.
     */
    public function getCreationDate();

    /**
     * Get the expiration.
     *
     * @return DateTime Returns the expiration.
     */
    public function getExpiration();

    /**
     * Get the id.
     *
     * @return string Returns the id.
     */
    public function getId();

    /**
     * Get the state.
     *
     * @return string Returns the state.
     */
    public function getState();

    /**
     * Set the access token.
     *
     * @param string $accessToken The access token.
     * @return AuthenticationResponseInterface Returns this authentication response.
     */
    public function setAccessToken($accessToken);

    /**
     * Set the account.
     *
     * @param string $account The account.
     * @return AuthenticationResponseInterface Returns this authentication response.
     */
    public function setAccount($account);

    /**
     * Set the creation date.
     *
     * @param DateTime|null $creationDate The creation date.
     * @return AuthenticationResponseInterface Returns this authentication response.
     */
    public function setCreationDate(DateTime $creationDate = null);

    /**
     * Set the expiration.
     *
     * @param DateTime|null $expiration The expiration.
     * @return AuthenticationResponseInterface Returns this authentication response.
     */
    public function setExpiration(DateTime $expiration = null);

    /**
     * Set the id.
     *
     * @param string $id The id.
     * @return AuthenticationResponseInterface Returns this authentication response.
     */
    public function setId($id);

    /**
     * Set the state.
     *
     * @param string $state The state.
     * @return AuthenticationResponseInterface Returns this authentication response.
     */
    public function setState($state);
}
