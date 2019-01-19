<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\API\Request;

use WBW\Library\SMSMode\API\RequestInterface;

/**
 * Authentication request interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\API\Request
 */
interface AuthenticationRequestInterface extends RequestInterface {

    /**
     * Authentication resource path.
     *
     * @var string
     */
    const AUTHENTICATION_RESOURCE_PATH = "/2.0/createAuthorisation.do";

    /**
     * Get the access token.
     *
     * @return string Returns the access token.
     */
    public function getAccessToken();

    /**
     * Set the access token.
     *
     * @param string $accessToken The access token.
     * @return AuthenticationRequestInterface Returns this authentication request.
     */
    public function setAccessToken($accessToken);
}
