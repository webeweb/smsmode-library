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
use WBW\Library\Core\Model\Attribute\StringIdTrait;
use WBW\Library\SMSMode\Model\Attribute\StringAccessTokenTrait;

/**
 * Creating API key response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Response
 */
class CreatingAPIKeyResponse extends AbstractResponse {

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
     * @return CreatingAPIKeyResponse Returns this creating API key response.
     */
    public function setAccount(?string $account): CreatingAPIKeyResponse {
        $this->account = $account;
        return $this;
    }

    /**
     * Set the creation date.
     *
     * @param DateTime|null $creationDate The creation date.
     * @return CreatingAPIKeyResponse Returns this creating API key response.
     */
    public function setCreationDate(?DateTime $creationDate): CreatingAPIKeyResponse {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * Set the exception.
     *
     * @param array $exception The exception.
     * @return CreatingAPIKeyResponse Returns this creating API key.
     */
    public function setException(array $exception): CreatingAPIKeyResponse {
        $this->exception = $exception;
        return $this;
    }

    /**
     * Set the expiration.
     *
     * @param DateTime|null $expiration The expiration.
     * @return CreatingAPIKeyResponse Returns this creating API key response.
     */
    public function setExpiration(?DateTime $expiration): CreatingAPIKeyResponse {
        $this->expiration = $expiration;
        return $this;
    }

    /**
     * Set the state.
     *
     * @param string|null $state The state.
     * @return CreatingAPIKeyResponse Returns this creating API key response.
     */
    public function setState(?string $state): CreatingAPIKeyResponse {
        $this->state = $state;
        return $this;
    }
}
