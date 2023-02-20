<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Model;

use DateTime;
use WBW\Library\SmsMode\Response\AbstractResponse;
use WBW\Library\SmsMode\Traits\Strings\StringNumeroTrait;
use WBW\Library\SmsMode\Traits\Strings\StringSmsIDTrait;
use WBW\Library\Traits\Strings\StringMessageTrait;

/**
 * Sent SMS message.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Model
 */
class SentSmsMessage extends AbstractResponse {

    use StringMessageTrait;
    use StringNumeroTrait;
    use StringSmsIDTrait;

    /**
     * Cost in credits.
     *
     * @var float|null
     */
    private $costCredits;

    /**
     * Recipient count.
     *
     * @var int|null
     */
    private $recipientCount;

    /**
     * Date envoi.
     *
     * @var DateTime|null
     */
    private $sendDate;

    /**
     * Get the cost in credits.
     *
     * @return float|null Returns the cost in credits.
     */
    public function getCostCredits(): ?float {
        return $this->costCredits;
    }

    /**
     * Get the recipient count.
     *
     * @return int|null Returns the recipient count.
     */
    public function getRecipientCount(): ?int {
        return $this->recipientCount;
    }

    /**
     * Get the send date.
     *
     * @return DateTime|null Returns the send date.
     */
    public function getSendDate(): ?DateTime {
        return $this->sendDate;
    }

    /**
     * Set the cost in credits.
     *
     * @param float|null $costCredits The cost in credits.
     * @return SentSmsMessage Returns this sent SMS message list.
     */
    public function setCostCredits(?float $costCredits): SentSmsMessage {
        $this->costCredits = $costCredits;
        return $this;
    }

    /**
     * Set the recipient count.
     *
     * @param int|null $recipientCount The recipient count.
     * @return SentSmsMessage Returns this sent SMS message list.
     */
    public function setRecipientCount(?int $recipientCount): SentSmsMessage {
        $this->recipientCount = $recipientCount;
        return $this;
    }

    /**
     * Set the send date.
     *
     * @param DateTime|null $sendDate The send date.
     * @return SentSmsMessage Returns this sent SMS message list.
     */
    public function setSendDate(?DateTime $sendDate): SentSmsMessage {
        $this->sendDate = $sendDate;
        return $this;
    }
}
