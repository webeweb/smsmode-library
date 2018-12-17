<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\API;

use WBW\Library\Core\Exception\Pointer\NullPointerException;

/**
 * sMsmode request interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\API
 */
interface SMSModeRequestInterface {

    /**
     * Date/time format
     *
     * @var string
     */
    const DATE_FORMAT = "dmY";

    /**
     * Date/time format
     *
     * @var string
     */
    const DATETIME_FORMAT = "dmY-H:i";

    /**
     * Host.
     *
     * @var string
     */
    const HOST = "https://api.smsmode.com/http/1.6";

    /**
     * Get the resource path.
     *
     * @return string Returns the resource path.
     */
    public function getResourcePath();

    /**
     * Parse the response.
     *
     * @param string $rawResponse The raw response.
     * @return SMSModeResponseInterface Returns the response.
     */
    public function parseResponse($rawResponse);

    /**
     * Convert into an array representing this instance.
     *
     * @return array Returns the array representing this instance.
     * @throws NullPointerException Throws a null pointer exception if a parameter is missing.
     */
    public function toArray();
}
