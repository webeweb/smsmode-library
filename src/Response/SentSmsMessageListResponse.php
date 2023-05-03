<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Response;

use WBW\Library\SmsMode\Model\SentSmsMessage;

/**
 * Sent SMS message list response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Response
 */
class SentSmsMessageListResponse extends AbstractResponse {

    /**
     * Sent SMS messages.
     *
     * @var SentSmsMessage[]
     */
    private $sentSmsMessages;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();

        $this->setSentSmsMessages([]);
    }

    /**
     * Add a sent SMS message.
     *
     * @param SentSmsMessage $sentSmsMessage The sent SMS message.
     * @return SentSmsMessageListResponse Returns this sent SMS message list response.
     */
    public function addSentSmsMessage(SentSmsMessage $sentSmsMessage): SentSmsMessageListResponse {
        $this->sentSmsMessages[] = $sentSmsMessage;
        return $this;
    }

    /**
     * Get the sent SMS messages.
     *
     * @return SentSmsMessage[] Returns the sent SMS messages.
     */
    public function getSentSmsMessages(): array {
        return $this->sentSmsMessages;
    }

    /**
     * Determine if this sent SMS message list has a sent SMS message.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasSentSmsMessage(): bool {
        return 0 < count($this->sentSmsMessages);
    }

    /**
     * Set the sent SMS messages.
     *
     * @param SentSmsMessage[] $sentSmsMessages The sent SMS messages.
     * @return SentSmsMessageListResponse Returns this sent SMS message list response.
     */
    protected function setSentSmsMessages(array $sentSmsMessages): SentSmsMessageListResponse {
        $this->sentSmsMessages = $sentSmsMessages;
        return $this;
    }
}
