<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\API;

/**
 * Request interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\API
 */
interface RequestInterface {

    /**
     * Request endpoint.
     *
     * @var string
     */
    const REQUEST_ENDPOINT = "https://api.smsmode.com/http";

    /**
     * Get the resource path.
     *
     * @return string Returns the resource path.
     */
    public function getResourcePath();
}
