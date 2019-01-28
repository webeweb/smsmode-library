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

use DateTime;

/**
 * SMS reply.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class SMSReply extends AbstractResponse {

    /**
     * From.
     *
     * @var string
     */
    private $from;

    /**
     * Message id.
     *
     * @var string
     */
    private $messageID;

    /**
     * Reception date.
     *
     * @var DateTime
     */
    private $receptionDate;

    /**
     * Response ID.
     *
     * @var string
     */
    private $responseID;

    /**
     * Text.
     *
     * @var string
     */
    private $text;

    /**
     * To.
     *
     * @var string
     */
    private $to;

    /**
     * Get the from.
     *
     * @return string Returns the from.
     */
    public function getFrom() {
        return $this->from;
    }

    /**
     * Get the message id.
     *
     * @return string Returns the message id.
     */
    public function getMessageID() {
        return $this->messageID;
    }

    /**
     * Get the reception date.
     *
     * @return DateTime Returns the reception date.
     */
    public function getReceptionDate() {
        return $this->receptionDate;
    }

    /**
     * Get the response id.
     *
     * @return string Returns the response id.
     */
    public function getResponseID() {
        return $this->responseID;
    }

    /**
     * Get the text.
     *
     * @return string Returns the text.
     */
    public function getText() {
        return $this->text;
    }

    /**
     * Get the to.
     *
     * @return string Returns the to.
     */
    public function getTo() {
        return $this->to;
    }

    /**
     * Set the from.
     *
     * @param string $from The from.
     * @return SMSReply Returns this retrieving SMS reply.
     */
    public function setFrom($from) {
        $this->from = $from;
        return $this;
    }

    /**
     * Set the message id.
     *
     * @param string $messageID The message id.
     * @return SMSReply Returns this retrieving SMS reply.
     */
    public function setMessageID($messageID) {
        $this->messageID = $messageID;
        return $this;
    }

    /**
     * Set the reception date.
     *
     * @param DateTime|null $receptionDate The reception date.
     * @return SMSReply Returns this retrieving SMS reply.
     */
    public function setReceptionDate(DateTime $receptionDate = null) {
        $this->receptionDate = $receptionDate;
        return $this;
    }

    /**
     * Set the response id.
     *
     * @param string $responseID The response id.
     * @return SMSReply Returns this retrieving SMS reply.
     */
    public function setResponseID($responseID) {
        $this->responseID = $responseID;
        return $this;
    }

    /**
     * Set the text.
     *
     * @param string $text The text.
     * @return SMSReply Returns this retrieving SMS reply.
     */
    public function setText($text) {
        $this->text = $text;
        return $this;
    }

    /**
     * Set the to.
     *
     * @param string $to The to.
     * @return SMSReply Returns this retrieving SMS reply.
     */
    public function setTo($to) {
        $this->to = $to;
        return $this;
    }
}
