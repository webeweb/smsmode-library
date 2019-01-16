<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\API\Request;

use WBW\Library\SMSMode\API\RequestInterface;

/**
 * Sent SMS message list request interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\API\Request
 */
interface SentSMSMessageListRequestInterface extends RequestInterface {

    /**
     * Sent SMS message list resource path.
     *
     * @var string
     */
    const SENT_SMS_MESSAGE_LIST_RESOURCE_PATH = "/1.6/smsList.do";

    /**
     * Get the offset.
     *
     * @return int Returns the offset.
     */
    public function getOffset();

    /**
     * Set the offset.
     *
     * @param int $offset The offset.
     * @return SentSMSMessageListRequestInterface Returns this sent SMS message list request.
     */
    public function setOffset($offset);
}
