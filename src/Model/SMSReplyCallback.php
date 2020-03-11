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

use WBW\Library\SMSMode\API\SMSReplyCallbackInterface;
use WBW\Library\SMSMode\Model\Attribute\DateTimeDateReceptionTrait;
use WBW\Library\SMSMode\Model\Attribute\StringEmetteurTrait;
use WBW\Library\SMSMode\Model\Attribute\StringMessageTrait;
use WBW\Library\SMSMode\Model\Attribute\StringNumeroTrait;
use WBW\Library\SMSMode\Model\Attribute\StringRefClientTrait;
use WBW\Library\SMSMode\Model\Attribute\StringSmsIDTrait;

/**
 * SMS reply callback.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class SMSReplyCallback extends AbstractResponse implements SMSReplyCallbackInterface {

    use DateTimeDateReceptionTrait;
    use StringEmetteurTrait;
    use StringMessageTrait;
    use StringNumeroTrait;
    use StringRefClientTrait;
    use StringSmsIDTrait;

    /**
     * Response ID.
     *
     * @var string
     */
    private $responseID;

    /**
     * Get the response ID.
     *
     * @return string Returns the response ID.
     */
    public function getResponseID() {
        return $this->responseID;
    }

    /**
     * Set the response ID.
     *
     * @param string $responseID The response ID.
     * @return SMSReplyCallback Returns this SMS reply callback.
     */
    public function setResponseID($responseID) {
        $this->responseID = $responseID;
        return $this;
    }
}
