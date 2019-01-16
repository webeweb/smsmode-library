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
 * Checking SMS message status request interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\API\Request
 */
interface CheckingSMSMessageStatusRequestInterface extends RequestInterface {

    /**
     * Checking SMS message status resource path.
     *
     * @var string
     */
    const CHECKING_SMS_MESSAGE_STATUS_RESOURCE_PATH = "/1.6/smsStatus.do";

    /**
     * Get the sms ID.
     *
     * @return string Returns the sms ID.
     */
    public function getSmsID();

    /**
     * Set the sms ID.
     *
     * @param string $smsID The sms ID.
     * @return CheckingSMSMessageStatusRequestInterface Returns this checking SMS message status request.
     */
    public function setSmsID($smsID);
}
