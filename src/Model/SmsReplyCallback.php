<?php

declare(strict_types = 1);

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Model;

use WBW\Library\Common\Traits\Strings\StringMessageTrait;
use WBW\Library\SmsMode\Api\SmsReplyCallbackInterface;
use WBW\Library\SmsMode\Response\AbstractResponse;
use WBW\Library\SmsMode\Traits\DateTimes\DateTimeDateReceptionTrait;
use WBW\Library\SmsMode\Traits\Strings\StringEmetteurTrait;
use WBW\Library\SmsMode\Traits\Strings\StringNumeroTrait;
use WBW\Library\SmsMode\Traits\Strings\StringRefClientTrait;
use WBW\Library\SmsMode\Traits\Strings\StringResponseIDTrait;
use WBW\Library\SmsMode\Traits\Strings\StringSmsIDTrait;

/**
 * SMS reply callback.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Model
 */
class SmsReplyCallback extends AbstractResponse implements SmsReplyCallbackInterface {

    use DateTimeDateReceptionTrait;
    use StringEmetteurTrait;
    use StringMessageTrait;
    use StringNumeroTrait;
    use StringRefClientTrait;
    use StringResponseIDTrait;
    use StringSmsIDTrait;
}
