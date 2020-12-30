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

use WBW\Library\Core\Model\Attribute\StringMessageTrait;
use WBW\Library\SMSMode\API\SMSReplyCallbackInterface;
use WBW\Library\SMSMode\Model\Attribute\DateTimeDateReceptionTrait;
use WBW\Library\SMSMode\Model\Attribute\StringEmetteurTrait;
use WBW\Library\SMSMode\Model\Attribute\StringNumeroTrait;
use WBW\Library\SMSMode\Model\Attribute\StringRefClientTrait;
use WBW\Library\SMSMode\Model\Attribute\StringResponseIDTrait;
use WBW\Library\SMSMode\Model\Attribute\StringSmsIDTrait;

/**
 * SMS reply callback.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class SMSReplyCallback extends AbstractResponse implements SMSReplyCallbackInterface {

    use DateTimeDateReceptionTrait;
    use StringEmetteurTrait;
    use StringMessageTrait;
    use StringNumeroTrait;
    use StringRefClientTrait;
    use StringResponseIDTrait;
    use StringSmsIDTrait;
}
