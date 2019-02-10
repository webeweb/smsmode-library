<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Model\Response;

use WBW\Library\SMSMode\Model\AbstractResponse;
use WBW\Library\SMSMode\Model\SentSMSMessage;

/**
 * Sent SMS message list response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model\Response
 */
class SentSMSMessageListResponse extends AbstractResponse {

    /**
     * Sent SMS messages.
     *
     * @var SentSMSMessage[]
     */
    private $sentSMSMessages;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->setSentSMSMessages([]);
    }

    /**
     * Add a sent SMS message.
     *
     * @param SentSMSMessage $sentSMSMessage The sent SMS message.
     * @return SentSMSMessageListResponse Returns this sent SMS message list response.
     */
    public function addSentSMSMessage(SentSMSMessage $sentSMSMessage) {
        $this->sentSMSMessages[] = $sentSMSMessage;
        return $this;
    }

    /**
     * Get the sent SMS messages.
     *
     * @return SentSMSMessage[] Returns the sent SMS messages.
     */
    public function getSentSMSMessages() {
        return $this->sentSMSMessages;
    }

    /**
     * Determines if this sent SMS message list has a sent SMS message.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasSentSMSMessage() {
        return 0 < count($this->sentSMSMessages);
    }

    /**
     * Set the sent SMS messages.
     *
     * @param SentSMSMessage[] $sentSMSMessages The sent SMS messages.
     * @return SentSMSMessageListResponse Returns this sent SMS message list response.
     */
    protected function setSentSMSMessages($sentSMSMessages) {
        $this->sentSMSMessages = $sentSMSMessages;
        return $this;
    }

}
