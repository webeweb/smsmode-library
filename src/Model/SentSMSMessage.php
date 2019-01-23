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

/**
 * Sent SMS message.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class SentSMSMessage extends AbstractResponse {

    /**
     * Cost in credits.
     *
     * @var float
     */
    private $costCredits;

    /**
     * Message.
     *
     * @var string
     */
    private $message;

    /**
     * Numero.
     *
     * @var string
     */
    private $numero;

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
     * SMS ID.
     *
     * @var string
     */
    private $smsID;

    /**
     * Get the cost in credits.
     *
     * @return float Returns the cost in credits.
     */
    public function getCostCredits() {
        return $this->costCredits;
    }

    /**
     * Get the message.
     *
     * @return string Returns the message.
     */
    public function getMessage() {
        return $this->message;
    }

    /**
     * Get the numero.
     *
     * @return string Returns the numero.
     */
    public function getNumero() {
        return $this->numero;
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
     * Get the sms ID.
     *
     * @return string Returns the sms ID.
     */
    public function getSmsID() {
        return $this->smsID;
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
     * Set the message.
     *
     * @param string $message The message.
     * @return SentSMSMessage Returns this sent SMS message list.
     */
    public function setMessage($message) {
        $this->message = $message;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string $numero The numero.
     * @return SentSMSMessage Returns this sent SMS message list.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
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

    /**
     * Set the sms ID.
     *
     * @param string $smsID The sms ID.
     * @return SentSMSMessage Returns this sent SMS message list.
     */
    public function setSmsID($smsID) {
        $this->smsID = $smsID;
        return $this;
    }
}
