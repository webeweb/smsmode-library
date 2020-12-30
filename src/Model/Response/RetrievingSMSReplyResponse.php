<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Model\Response;

use WBW\Library\SMSMode\Model\AbstractResponse;
use WBW\Library\SMSMode\Model\SMSReply;

/**
 * Retrieving SMS reply response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model\Response
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
     * Add a SMS reply.
     *
     * @param SMSReply $smsReply The SMS reply.
     * @return RetrievingSMSReplyResponse Returns this retrieving SMS reply response.
     */
    public function addSMSReply(SMSReply $smsReply): RetrievingSMSReplyResponse {
        $this->smsReplies[] = $smsReply;
        return $this;
    }

    /**
     * Get the SMS replies.
     *
     * @return SMSReply[] Returns the SMS replies.
     */
    public function getSMSReplies(): array {
        return $this->smsReplies;
    }

    /**
     * Determines if this retrieving SMS reply response has a SMS reply.
     *
     * @return bool Returns true in cas of success, false otherwise.
     */
    public function hasSMSReply(): bool {
        return 0 < count($this->smsReplies);
    }

    /**
     * Set the SMS replies.
     *
     * @param SMSReply[] $smsReplies The SMS replies.
     * @return RetrievingSMSReplyResponse Returns this retrieving SMS reply response.
     */
    protected function setSMSReplies(array $smsReplies): RetrievingSMSReplyResponse {
        $this->smsReplies = $smsReplies;
        return $this;
    }
}
