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

use DateTime;
use WBW\Library\SMSMode\Traits\MessageTrait;
use WBW\Library\SMSMode\Traits\NumeroTrait;
use WBW\Library\SMSMode\Traits\SmsIDTrait;

/**
 * Sent SMS message.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class SentSMSMessage extends AbstractResponse {

    use MessageTrait;
    use NumeroTrait;
    use SmsIDTrait;

    /**
     * Cost in credits.
     *
     * @var float
     */
    private $costCredits;

    /**
     * Recipient count.
     *
     * @var int
     */
    private $recipientCount;

    /**
     * Date envoi.
     *
     * @var DateTime
     */
    private $sendDate;

    /**
     * Get the cost in credits.
     *
     * @return float Returns the cost in credits.
     */
    public function getCostCredits() {
        return $this->costCredits;
    }

    /**
     * @return int
     */
    public function getRecipientCount() {
        return $this->recipientCount;
    }

    /**
     * Get the send date.
     *
     * @return DateTime Returns the send date.
     */
    public function getSendDate() {
        return $this->sendDate;
    }

    /**
     * Set the cost in credits.
     *
     * @param float $costCredits The cost in credits.
     * @return SentSMSMessage Returns this sent SMS message list.
     */
    public function setCostCredits($costCredits) {
        $this->costCredits = $costCredits;
        return $this;
    }

    /**
     * Set the recipient count.
     *
     * @param int $recipientCount The recipient count.
     * @return SentSMSMessage Returns this sent SMS message list.
     */
    public function setRecipientCount($recipientCount) {
        $this->recipientCount = $recipientCount;
        return $this;
    }

    /**
     * Set the send date.
     *
     * @param DateTime|null $sendDate The send date.
     * @return SentSMSMessage Returns this sent SMS message list.
     */
    public function setSendDate(DateTime $sendDate = null) {
        $this->sendDate = $sendDate;
        return $this;
    }
}
