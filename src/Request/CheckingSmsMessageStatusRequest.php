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

use WBW\Library\SmsMode\Traits\Strings\StringSmsIDTrait;

/**
 * Checking SMS message status request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Request
 */
class CheckingSmsMessageStatusRequest extends AbstractRequest {

    use StringSmsIDTrait;

    /**
     * Checking SMS message status resource path.
     *
     * @var string
     */
    const CHECKING_SMS_MESSAGE_STATUS_RESOURCE_PATH = "/http/1.6/smsStatus.do";

    /**
     * {@inheritdoc}
     */
    public function getResourcePath(): string {
        return self::CHECKING_SMS_MESSAGE_STATUS_RESOURCE_PATH;
    }
}
