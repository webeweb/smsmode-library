<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Response;

use WBW\Library\SmsMode\Model\SmsReply;

/**
 * Retrieving SMS reply response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Response
 */
class RetrievingSmsReplyResponse extends AbstractResponse {

    /**
     * SMS replies.
     *
     * @var SmsReply[]
     */
    private $smsReplies;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();

        $this->setSmsReplies([]);
    }

    /**
     * Add a SMS reply.
     *
     * @param SmsReply $smsReply The SMS reply.
     * @return RetrievingSmsReplyResponse Returns this retrieving SMS reply response.
     */
    public function addSmsReply(SmsReply $smsReply): RetrievingSmsReplyResponse {
        $this->smsReplies[] = $smsReply;
        return $this;
    }

    /**
     * Get the SMS replies.
     *
     * @return SmsReply[] Returns the SMS replies.
     */
    public function getSmsReplies(): array {
        return $this->smsReplies;
    }

    /**
     * Determine if this retrieving SMS reply response has a SMS reply.
     *
     * @return bool Returns true in cas of success, false otherwise.
     */
    public function hasSmsReply(): bool {
        return 0 < count($this->smsReplies);
    }

    /**
     * Set the SMS replies.
     *
     * @param SmsReply[] $smsReplies The SMS replies.
     * @return RetrievingSmsReplyResponse Returns this retrieving SMS reply response.
     */
    protected function setSmsReplies(array $smsReplies): RetrievingSmsReplyResponse {
        $this->smsReplies = $smsReplies;
        return $this;
    }
}
