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
 * Status interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\API
 */
interface StatusInterface {

    /**
     * Status code 0.
     *
     * @var string
     */
    const STATUS_CODE_0 = 0;

    /**
     * Status code 1.
     *
     * @var string
     */
    const STATUS_CODE_1 = 1;

    /**
     * Status code 10.
     *
     * @var string
     */
    const STATUS_CODE_10 = 10;

    /**
     * Status code 100.
     *
     * @var string
     */
    const STATUS_CODE_100 = 100;

    /**
     * Status code 101.
     *
     * @var string
     */
    const STATUS_CODE_101 = 101;

    /**
     * Status code 11.
     *
     * @var string
     */
    const STATUS_CODE_11 = 11;

    /**
     * Status code 12.
     *
     * @var string
     */
    const STATUS_CODE_12 = 12;

    /**
     * Status code 13.
     *
     * @var string
     */
    const STATUS_CODE_13 = 13;

    /**
     * Status code 14.
     *
     * @var string
     */
    const STATUS_CODE_14 = 14;

    /**
     * Status code 15.
     *
     * @var string
     */
    const STATUS_CODE_15 = 15;

    /**
     * Status code 16.
     *
     * @var string
     */
    const STATUS_CODE_16 = 16;

    /**
     * Status code 2.
     *
     * @var string
     */
    const STATUS_CODE_2 = 2;

    /**
     * Status code 21.
     *
     * @var string
     */
    const STATUS_CODE_21 = 21;

    /**
     * Status code 22.
     *
     * @var string
     */
    const STATUS_CODE_22 = 22;

    /**
     * Status code 33.
     *
     * @var string
     */
    const STATUS_CODE_33 = 33;

    /**
     * Status code 34.
     *
     * @var string
     */
    const STATUS_CODE_34 = 34;

    /**
     * Status code 35.
     *
     * @var string
     */
    const STATUS_CODE_35 = 35;

    /**
     * Status code 3501.
     *
     * @var string
     */
    const STATUS_CODE_3501 = 3501;

    /**
     * Status code 3502.
     *
     * @var string
     */
    const STATUS_CODE_3502 = 3502;

    /**
     * Status code 3503.
     *
     * @var string
     */
    const STATUS_CODE_3503 = 3503;

    /**
     * Status code 3504.
     *
     * @var string
     */
    const STATUS_CODE_3504 = 3504;

    /**
     * Status code 3521.
     *
     * @var string
     */
    const STATUS_CODE_3521 = 3521;

    /**
     * Status code 3522.
     *
     * @var string
     */
    const STATUS_CODE_3522 = 3522;

    /**
     * Status code 3523.
     *
     * @var string
     */
    const STATUS_CODE_3523 = 3523;

    /**
     * Status code 3524.
     *
     * @var string
     */
    const STATUS_CODE_3524 = 3524;

    /**
     * Status code 3525.
     *
     * @var string
     */
    const STATUS_CODE_3525 = 3525;

    /**
     * Status code 3526.
     *
     * @var string
     */
    const STATUS_CODE_3526 = 3526;

    /**
     * Status code 3527.
     *
     * @var string
     */
    const STATUS_CODE_3527 = 3527;

    /**
     * Status code 3560.
     *
     * @var string
     */
    const STATUS_CODE_3560 = 3560;

    /**
     * Status code 3599.
     *
     * @var string
     */
    const STATUS_CODE_3599 = 3599;

    /**
     * Status code 36.
     *
     * @var string
     */
    const STATUS_CODE_36 = 36;

    /**
     * Status code 37.
     *
     * @var string
     */
    const STATUS_CODE_37 = 37;

    /**
     * Status code 38.
     *
     * @var string
     */
    const STATUS_CODE_38 = 38;

    /**
     * Status code 3998.
     *
     * @var string
     */
    const STATUS_CODE_3998 = 3998;

    /**
     * Status code 3999.
     *
     * @var string
     */
    const STATUS_CODE_3999 = 3999;

    /**
     * Status code 40.
     *
     * @var string
     */
    const STATUS_CODE_40 = 40;

    /**
     * Status code 50.
     *
     * @var string
     */
    const STATUS_CODE_50 = 50;

    /**
     * Status code 999.
     *
     * @var string
     */
    const STATUS_CODE_999 = 999;

    /**
     * Status description 0.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_0 = "Sent";

    /**
     * Status description 1.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_1 = "In progress";

    /**
     * Status description 10.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_10 = "Programmed";

    /**
     * Status description 100.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_100 = "Read";

    /**
     * Status description 101.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_101 = "Not read";

    /**
     * Status description 11.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_11 = "Received";

    /**
     * Status description 12.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_12 = "Partially delivered";

    /**
     * Status description 13.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_13 = "Issued operator (temporary status)";

    /**
     * Status description 14.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_14 = "Issued";

    /**
     * Status description 15.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_15 = "Partially received";

    /**
     * Status description 16.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_16 = "Listened";

    /**
     * Status description 2.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_2 = "Internal error";

    /**
     * Status description 21.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_21 = "Not deliverable";

    /**
     * Status description 22.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_22 = "Rejected";

    /**
     * Status description 33.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_33 = "Not sent - insufficient credit";

    /**
     * Status description 34.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_34 = "Routing error";

    /**
     * Status description 35.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_35 = "Reception error";

    /**
     * Status description 3501.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_3501 = "Temporary operator error";

    /**
     * Status description 3502.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_3502 = "Temporary absence error";

    /**
     * Status description 3503.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_3503 = "Temporary phone error";

    /**
     * Status description 3504.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_3504 = "Temporary portability error";

    /**
     * Status description 3521.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_3521 = "Permanent operator error";

    /**
     * Status description 3522.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_3522 = "Permanent absence error";

    /**
     * Status description 3523.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_3523 = "Permanent phone error";

    /**
     * Status description 3524.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_3524 = "Permanent anti-spam error";

    /**
     * Status description 3525.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_3525 = "Permanent content error";

    /**
     * Status description 3526.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_3526 = "Permanent portability error";

    /**
     * Status description 3527.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_3527 = "Permanent roaming error";

    /**
     * Status description 3560.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_3560 = "Non-routable error";

    /**
     * Status description 3599.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_3599 = "Other error";

    /**
     * Status description 36.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_36 = "Message error";

    /**
     * Status description 37.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_37 = "Expired message";

    /**
     * Status description 38.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_38 = "Message too long";

    /**
     * Status description 3998.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_3998 = "Invalid recipient";

    /**
     * Status description 3999.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_3999 = "Blacklisted recipient";

    /**
     * Status description 40.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_40 = "Model";

    /**
     * Status description 50.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_50 = "Not delivered";

    /**
     * Status description 999.
     *
     * @var string
     */
    const STATUS_DESCRIPTION_999 = "Undefined";
}
