<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\API\Response;

use WBW\Library\SMSMode\API\ResponseInterface;

/**
 * Sending text-to-speech SMS request interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\API\Response
 */
interface SendingTextToSpeechSMSResponseInterface extends ResponseInterface {

    /**
     * Get the SMS ID.
     *
     * @return string Returns the SMS ID.
     */
    public function getSmsID();

    /**
     * Set the SMS ID.
     *
     * @param string $smsID The SMS ID.
     * @return SendingSMSMessageResponseInterface Returns this sending SMS message response.
     */
    public function setSmsID($smsID);
}
