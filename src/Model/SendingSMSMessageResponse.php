<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Model;

/**
 * Sending SMS message response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class SendingSMSMessageResponse extends AbstractResponse {

    /**
     * SMS id.
     *
     * @var string
     */
    private $smsID;

    /**
     * Get the SMS ID.
     *
     * @return string Returns the SMS ID.
     */
    public function getSmsID() {
        return $this->smsID;
    }

    /**
     * Set the SMS ID.
     *
     * @param string $smsID The SMS ID.
     * @return SendingSMSMessageResponse Returns this sending SMS message response.
     */
    public function setSmsID($smsID) {
        $this->smsID = $smsID;
        return $this;
    }
}
