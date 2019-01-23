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
 * Sending text-to-speech SMS response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class SendingTextToSpeechSMSResponse extends AbstractResponse {

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
     * @return SendingTextToSpeechSMSResponse Returns this sending text-to-speech SMS response.
     */
    public function setSmsID($smsID) {
        $this->smsID = $smsID;
        return $this;
    }
}
