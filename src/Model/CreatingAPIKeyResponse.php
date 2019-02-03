<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Model;

use DateTime;
use WBW\Library\SMSMode\Traits\AccessTokenTrait;

/**
 * Creating API key response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class CreatingAPIKeyResponse extends AbstractResponse {

    use AccessTokenTrait;

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
     * Exception.
     *
     * @var array
     */
    private $exception;

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
     * Get the account.
     *
     * @return string Returns the account.
     */
    public function getAccount() {
        return $this->account;
    }

    /**
     * Get the creation date.
     *
     * @return DateTime Returns the creation date.
     */
    public function getCreationDate() {
        return $this->creationDate;
    }

    /**
     * Get the exception.
     *
     * @return array Returns the exception.
     */
    public function getException() {
        return $this->exception;
    }

    /**
     * Get the expiration.
     *
     * @return DateTime Returns the expiration.
     */
    public function getExpiration() {
        return $this->expiration;
    }

    /**
     * Get the id.
     *
     * @return string Returns the id.
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get the state.
     *
     * @return string Returns the state.
     */
    public function getState() {
        return $this->state;
    }

    /**
     * Set the account.
     *
     * @param string $account The account.
     * @return CreatingAPIKeyResponse Returns this creating API key response.
     */
    public function setAccount($account) {
        $this->account = $account;
        return $this;
    }

    /**
     * Set the creation date.
     *
     * @param DateTime|null $creationDate The creation date.
     * @return CreatingAPIKeyResponse Returns this creating API key response.
     */
    public function setCreationDate(DateTime $creationDate = null) {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * Set the exception.
     *
     * @param array $exception The exception.
     * @return CreatingAPIKeyResponse Returns this creating API key.
     */
    public function setException(array $exception) {
        $this->exception = $exception;
        return $this;
    }

    /**
     * Set the expiration.
     *
     * @param DateTime|null $expiration The expiration.
     * @return CreatingAPIKeyResponse Returns this creating API key response.
     */
    public function setExpiration(DateTime $expiration = null) {
        $this->expiration = $expiration;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param string $id The id.
     * @return CreatingAPIKeyResponse Returns this creating API key response.
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the state.
     *
     * @param string $state The state.
     * @return CreatingAPIKeyResponse Returns this creating API key response.
     */
    public function setState($state) {
        $this->state = $state;
        return $this;
    }
}
