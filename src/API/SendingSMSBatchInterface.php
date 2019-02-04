<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace WBW\Library\SMSMode\API;

/**
 * Sending SMS batch interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\API
 */
interface SendingSMSBatchInterface {

    /**
     * Classe msg "SMS".
     *
     * @var int
     */
    const CLASSE_MSG_SMS = 4;

    /**
     * Classe msg "SMS Pro".
     *
     * @var int
     */
    const CLASSE_MSG_SMS_PRO = 2;
}
