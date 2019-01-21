<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Response;

use DateTime;
use WBW\Library\SMSMode\API\Response\AuthenticationResponseInterface;

/**
 * Authentication response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Response
 */
class AuthenticationResponse extends AbstractResponse implements AuthenticationResponseInterface {

    /**
     * Access token.
     *
     * @var string;
     */
    private $accessToken;

    /**
     * Account.
     *
     * @var string
     */
    private $account;

    /**
     * Creation date.
     *
     * @var DateTime
     */
    private $creationDate;

    /**
     * Expiration.
     *
     * @var DateTime
     */
    private $expiration;

    /**
     * Id.
     *
     * @var string
     */
    private $id;

    /**
     * State.
     *
     * @var string
     */
    private $state;

    /**
     * {@inheritdoc}
     */
    public function getAccessToken() {
        return $this->accessToken;
    }

    /**
     * {@inheritdoc}
     */
    public function getAccount() {
        return $this->account;
    }

    /**
     * {@inheritdoc}
     */
    public function getCreationDate() {
        return $this->creationDate;
    }

    /**
     * {@inheritdoc}
     */
    public function getExpiration() {
        return $this->expiration;
    }

    /**
     * {@inheritdoc}
     */
    public function getId() {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getState() {
        return $this->state;
    }

    /**
     * {@inheritdoc}
     */
    public function setAccessToken($accessToken) {
        $this->accessToken = $accessToken;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setAccount($account) {
        $this->account = $account;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setCreationDate(DateTime $creationDate = null) {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setExpiration(DateTime $expiration = null) {
        $this->expiration = $expiration;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setState($state) {
        $this->state = $state;
        return $this;
    }
}
