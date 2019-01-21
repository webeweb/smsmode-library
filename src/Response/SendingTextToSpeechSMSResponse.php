<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Response;

use WBW\Library\SMSMode\API\Response\SendingTextToSpeechSMSResponseInterface;

/**
 * Sending text-to-speech SMS response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Response
 */
class SendingTextToSpeechSMSResponse extends AbstractResponse implements SendingTextToSpeechSMSResponseInterface {

    /**
     * SMS id.
     *
     * @var string
     */
    private $smsID;

    /**
     * {@inheritdoc}
     */
    public function getSmsID() {
        return $this->smsID;
    }

    /**
     * {@inheritdoc}
     */
    public function setSmsID($smsID) {
        $this->smsID = $smsID;
        return $this;
    }
}
