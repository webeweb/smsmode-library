<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\SmsMode\Api;

/**
 * Sending SMS batch interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Api
 */
interface SendingSmsBatchInterface {

    /**
     * Classe msg "SMS".
     *
     * @var int
     */
    public const CLASSE_MSG_SMS = 4;

    /**
     * Classe msg "SMS Pro".
     *
     * @var int
     */
    public const CLASSE_MSG_SMS_PRO = 2;
}
