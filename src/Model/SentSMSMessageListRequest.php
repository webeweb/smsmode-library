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
 * Sent SMS message list request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class SentSMSMessageListRequest extends AbstractRequest {

    /**
     * Sent SMS message list resource path.
     *
     * @var string
     */
    const SENT_SMS_MESSAGE_LIST_RESOURCE_PATH = "/http/1.6/smsList.do";

    /**
     * Offset.
     *
     * @var int
     */
    private $offset;

    /**
     * Get the offset.
     *
     * @return int Returns the offset.
     */
    public function getOffset() {
        return $this->offset;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath() {
        return self::SENT_SMS_MESSAGE_LIST_RESOURCE_PATH;
    }

    /**
     * Set the offset.
     *
     * @param int $offset The offset.
     * @return SentSMSMessageListRequest Returns this sent SMS message list request.
     */
    public function setOffset($offset) {
        $this->offset = $offset;
        return $this;
    }
}
