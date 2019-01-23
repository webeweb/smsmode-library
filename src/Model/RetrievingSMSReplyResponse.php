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

/**
 * Retrieving SMS reply response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class RetrievingSMSReplyResponse extends AbstractResponse {

    /**
     * SMS replies.
     *
     * @var SMSReply[]
     */
    private $smsReplies;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->setSMSReplies([]);
    }

    /**
     * Get the SMS replies.
     *
     * @return SMSReply[] Returns the SMS replies.
     */
    public function getSMSReplies() {
        return $this->smsReplies;
    }

    /**
     * Set the SMS replies.
     *
     * @param SMSReply[] $smsReplies The SMS replies.
     * @return RetrievingSMSReplyResponse Returns this retrieving SMS reply response.
     */
    public function setSMSReplies($smsReplies) {
        $this->smsReplies = $smsReplies;
        return $this;
    }
}
