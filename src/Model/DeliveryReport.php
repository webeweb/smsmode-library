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

use WBW\Library\SMSMode\Model\Attribute\StringNumeroTrait;
use WBW\Library\SMSMode\Response\AbstractResponse;

/**
 * Delivery report.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SMSMode\Model
 */
class DeliveryReport extends AbstractResponse {

    use StringNumeroTrait;
}
