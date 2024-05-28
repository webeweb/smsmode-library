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
 * Sending SMS message interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Api
 */
interface SendingSmsMessageInterface extends SendingSmsBatchInterface {

    /**
     * STOP "always".
     *
     * @var int
     */
    public const STOP_ALWAYS = 2;

    /**
     * STOP "only".
     *
     * @var int
     */
    public const STOP_ONLY = 1;
}
