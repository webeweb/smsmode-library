<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Model;

use WBW\Library\SMSMode\Traits\SmsIDTrait;

/**
 * Sending SMS message response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class SendingSMSMessageResponse extends AbstractResponse {

    use SmsIDTrait;
}
