<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Api;

/**
 * Request interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Api
 */
interface RequestInterface {

    /**
     * Request date/time format.
     *
     * @var string
     */
    const REQUEST_DATETIME_FORMAT = "dmY-H:i";

    /**
     * Request date format.
     *
     * @var string
     */
    const REQUEST_DATE_FORMAT = "dmY";
}
