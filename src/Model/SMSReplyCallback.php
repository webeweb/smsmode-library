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
use WBW\Library\SMSMode\Traits\DateReceptionTrait;
use WBW\Library\SMSMode\Traits\EmetteurTrait;
use WBW\Library\SMSMode\Traits\MessageTrait;
use WBW\Library\SMSMode\Traits\NumeroTrait;
use WBW\Library\SMSMode\Traits\RefClientTrait;
use WBW\Library\SMSMode\Traits\SmsIDTrait;

/**
 * SMS reply callback.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class SMSReplyCallback extends AbstractResponse implements SMSReplyCallbackInterface {

    use DateReceptionTrait;
    use EmetteurTrait;
    use MessageTrait;
    use NumeroTrait;
    use RefClientTrait;
    use SmsIDTrait;

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
