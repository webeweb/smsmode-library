<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Response;

use DateTime;
use WBW\Library\SmsMode\Traits\Strings\StringAccessTokenTrait;
use WBW\Library\Traits\Strings\StringIdTrait;

/**
 * Creating API key response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Response
 */
class CreatingApiKeyResponse extends AbstractResponse {

    use StringAccessTokenTrait;
    use StringIdTrait;

    /**
     * Account.
     *
     * @var string|null
     */
    private $account;

    /**
     * Creation date.
     *
     * @var DateTime|null
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
     * @var DateTime|null
     */
    private $expiration;

    /**
     * State.
     *
     * @var string|null
     */
    private $state;

    /**
     * Get the account.
     *
     * @return string|null Returns the account.
     */
    public function getAccount(): ?string {
        return $this->account;
    }

    /**
     * Get the creation date.
     *
     * @return DateTime|null Returns the creation date.
     */
    public function getCreationDate(): ?DateTime {
        return $this->creationDate;
    }

    /**
     * Get the exception.
     *
     * @return array|null Returns the exception.
     */
    public function getException(): ?array {
        return $this->exception;
    }

    /**
     * Get the expiration.
     *
     * @return DateTime|null Returns the expiration.
     */
    public function getExpiration(): ?DateTime {
        return $this->expiration;
    }

    /**
     * Get the state.
     *
     * @return string|null Returns the state.
     */
    public function getState(): ?string {
        return $this->state;
    }

    /**
     * Set the account.
     *
     * @param string|null $account The account.
     * @return CreatingApiKeyResponse Returns this creating API key response.
     */
    public function setAccount(?string $account): CreatingApiKeyResponse {
        $this->account = $account;
        return $this;
    }

    /**
     * Set the creation date.
     *
     * @param DateTime|null $creationDate The creation date.
     * @return CreatingApiKeyResponse Returns this creating API key response.
     */
    public function setCreationDate(?DateTime $creationDate): CreatingApiKeyResponse {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * Set the exception.
     *
     * @param array $exception The exception.
     * @return CreatingApiKeyResponse Returns this creating API key.
     */
    public function setException(array $exception): CreatingApiKeyResponse {
        $this->exception = $exception;
        return $this;
    }

    /**
     * Set the expiration.
     *
     * @param DateTime|null $expiration The expiration.
     * @return CreatingApiKeyResponse Returns this creating API key response.
     */
    public function setExpiration(?DateTime $expiration): CreatingApiKeyResponse {
        $this->expiration = $expiration;
        return $this;
    }

    /**
     * Set the state.
     *
     * @param string|null $state The state.
     * @return CreatingApiKeyResponse Returns this creating API key response.
     */
    public function setState(?string $state): CreatingApiKeyResponse {
        $this->state = $state;
        return $this;
    }
}
