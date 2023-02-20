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

use WBW\Library\SmsMode\Traits\Strings\StringSmsIDTrait;

/**
 * Sending text-to-speech SMS response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Response
 */
class SendingTextToSpeechSmsResponse extends AbstractResponse {

    use StringSmsIDTrait;
}
