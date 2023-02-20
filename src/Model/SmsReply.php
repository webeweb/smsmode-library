<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Model;

use DateTime;
use WBW\Library\SmsMode\Response\AbstractResponse;
use WBW\Library\SmsMode\Traits\Strings\StringResponseIDTrait;
use WBW\Library\Traits\Strings\StringFromTrait;
use WBW\Library\Traits\Strings\StringTextTrait;
use WBW\Library\Traits\Strings\StringToTrait;

/**
 * SMS reply.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Model
 */
class SmsReply extends AbstractResponse {

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
     * @return SmsReply Returns this retrieving SMS reply.
     */
    public function setMessageID(?string $messageID): SmsReply {
        $this->messageID = $messageID;
        return $this;
    }

    /**
     * Set the reception date.
     *
     * @param DateTime|null $receptionDate The reception date.
     * @return SmsReply Returns this retrieving SMS reply.
     */
    public function setReceptionDate(?DateTime $receptionDate): SmsReply {
        $this->receptionDate = $receptionDate;
        return $this;
    }
}
