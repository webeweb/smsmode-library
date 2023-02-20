<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Request;

use WBW\Library\SmsMode\Traits\Integers\IntegerOffsetTrait;

/**
 * Sent SMS message list request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Request
 */
class SentSmsMessageListRequest extends AbstractRequest {

    use IntegerOffsetTrait;

    /**
     * Sent SMS message list resource path.
     *
     * @var string
     */
    const SENT_SMS_MESSAGE_LIST_RESOURCE_PATH = "/http/1.6/smsList.do";

    /**
     * {@inheritdoc}
     */
    public function getResourcePath(): string {
        return self::SENT_SMS_MESSAGE_LIST_RESOURCE_PATH;
    }
}
