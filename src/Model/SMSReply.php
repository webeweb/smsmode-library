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
use WBW\Library\SMSMode\Model\Attribute\StringResponseIDTrait;
use WBW\Library\SMSMode\Response\AbstractResponse;
use WBW\Library\Traits\Strings\StringFromTrait;
use WBW\Library\Traits\Strings\StringTextTrait;
use WBW\Library\Traits\Strings\StringToTrait;

/**
 * SMS reply.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SMSMode\Model
 */
class SMSReply extends AbstractResponse {

    use StringFromTrait;
    use StringResponseIDTrait;
    use StringTextTrait;
    use StringToTrait;

    /**
     * Message id.
     *
     * @var string|null
     */
    private $messageID;

    /**
     * Reception date.
     *
     * @var DateTime|null
     */
    private $receptionDate;

    /**
     * Get the message id.
     *
     * @return string|null Returns the message id.
     */
    public function getMessageID(): ?string {
        return $this->messageID;
    }

    /**
     * Get the reception date.
     *
     * @return DateTime|null Returns the reception date.
     */
    public function getReceptionDate(): ?DateTime {
        return $this->receptionDate;
    }

    /**
     * Set the message id.
     *
     * @param string|null $messageID The message id.
     * @return SMSReply Returns this retrieving SMS reply.
     */
    public function setMessageID(?string $messageID): SMSReply {
        $this->messageID = $messageID;
        return $this;
    }

    /**
     * Set the reception date.
     *
     * @param DateTime|null $receptionDate The reception date.
     * @return SMSReply Returns this retrieving SMS reply.
     */
    public function setReceptionDate(?DateTime $receptionDate): SMSReply {
        $this->receptionDate = $receptionDate;
        return $this;
    }
}
