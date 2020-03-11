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

use WBW\Library\SMSMode\Model\Attribute\StringSmsIDTrait;
use WBW\Library\SMSMode\Model\AbstractResponse;

/**
 * Sending text-to-speech SMS response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model\Response
 */
class SendingTextToSpeechSMSResponse extends AbstractResponse {

    use StringSmsIDTrait;
}
