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
use WBW\Library\Core\Model\Attribute\StringFromTrait;
use WBW\Library\Core\Model\Attribute\StringTextTrait;
use WBW\Library\Core\Model\Attribute\StringToTrait;

/**
 * SMS reply.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class SMSReply extends AbstractResponse {

    use StringFromTrait;
    use StringTextTrait;
    use StringToTrait;

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
}
