<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Model;

/**
 * Checking SMS message status request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class CheckingSMSMessageStatusRequest extends AbstractRequest {

    /**
     * Checking SMS message status resource path.
     *
     * @var string
     */
    const CHECKING_SMS_MESSAGE_STATUS_RESOURCE_PATH = "/http/1.6/smsStatus.do";

    /**
     * SMS ID.
     *
     * @var string
     */
    private $smsID;

    /**
     * {@inheritdoc}
     */
    public function getResourcePath() {
        return self::CHECKING_SMS_MESSAGE_STATUS_RESOURCE_PATH;
    }

    /**
     * Get the sms ID.
     *
     * @return string Returns the sms ID.
     */
    public function getSmsID() {
        return $this->smsID;
    }

    /**
     * Set the sms ID.
     *
     * @param string $smsID The sms ID.
     * @return CheckingSMSMessageStatusRequest Returns this checking SMS message status request.
     */
    public function setSmsID($smsID) {
        $this->smsID = $smsID;
        return $this;
    }
}
