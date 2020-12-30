<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Model\Attribute;

/**
 * String access token trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model\Attribute
 */
trait StringAccessTokenTrait {

    /**
     * Access token.
     *
     * @var string|null
     */
    private $accessToken;

    /**
     * Get the access token.
     *
     * @return string|null Returns the access token.
     */
    public function getAccessToken(): ?string {
        return $this->accessToken;
    }

    /**
     * Set the access token.
     *
     * @param string|null $accessToken The access token.
     */
    public function setAccessToken(?string $accessToken): self {
        $this->accessToken = $accessToken;
        return $this;
    }
}
