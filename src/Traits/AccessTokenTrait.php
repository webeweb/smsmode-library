<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Traits;

/**
 * Access token trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Traits
 */
trait AccessTokenTrait {

    /**
     * Access token.
     *
     * @var string
     */
    private $accessToken;

    /**
     * Get the access token.
     *
     * @return string Returns the access token.
     */
    public function getAccessToken() {
        return $this->accessToken;
    }

    /**
     * Set the access token.
     *
     * @param string $accessToken The access token.
     */
    public function setAccessToken($accessToken) {
        $this->accessToken = $accessToken;
        return $this;
    }
}
