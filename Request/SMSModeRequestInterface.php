<?php

/**
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Request;

use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\SMSMode\Response\AbstractSMSModeResponse;

/**
 * sMsmode request interface.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Request
 */
interface SMSModeRequestInterface {

    /**
     * Date format
     *
     * @var string
     */
    const DATE_FORMAT = "dmY-H:i";

    /**
     * Host.
     *
     * @var string
     */
    const HOST = "https://api.smsmode.com/http/1.6";

    /**
     * Get the resource path.
     *
     * @return string Returns resource path.
     */
    public function getResourcePath();

    /**
     * Parse the response.
     *
     * @param string $rawResponse The raw response.
     * @return AbstractSMSModeResponse Returns the response.
     */
    public function parseResponse($rawResponse);

    /**
     * Convert into an array representing this instance.
     *
     * @return array Returns an array representing this instance.
     * @throws NullPointerException Throws a null pointer exception if a parameter is missing.
     */
    public function toArray();
}
