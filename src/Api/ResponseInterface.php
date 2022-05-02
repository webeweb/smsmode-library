<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Api;

/**
 * Response interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Api
 */
interface ResponseInterface {

    /**
     * Response code "0".
     *
     * @var string
     */
    const RESPONSE_CODE_0 = 0;

    /**
     * Response code "1".
     *
     * @var string
     */
    const RESPONSE_CODE_1 = 1;

    /**
     * Response code "10".
     *
     * @var string
     */
    const RESPONSE_CODE_10 = 10;

    /**
     * Response code "100".
     *
     * @var string
     */
    const RESPONSE_CODE_100 = 100;

    /**
     * Response code "101".
     *
     * @var string
     */
    const RESPONSE_CODE_101 = 101;

    /**
     * Response code "11".
     *
     * @var string
     */
    const RESPONSE_CODE_11 = 11;

    /**
     * Response code "12".
     *
     * @var string
     */
    const RESPONSE_CODE_12 = 12;

    /**
     * Response code "13".
     *
     * @var string
     */
    const RESPONSE_CODE_13 = 13;

    /**
     * Response code "14".
     *
     * @var string
     */
    const RESPONSE_CODE_14 = 14;

    /**
     * Response code "15".
     *
     * @var string
     */
    const RESPONSE_CODE_15 = 15;

    /**
     * Response code "16".
     *
     * @var string
     */
    const RESPONSE_CODE_16 = 16;

    /**
     * Response code "2".
     *
     * @var string
     */
    const RESPONSE_CODE_2 = 2;

    /**
     * Response code "21".
     *
     * @var string
     */
    const RESPONSE_CODE_21 = 21;

    /**
     * Response code "22".
     *
     * @var string
     */
    const RESPONSE_CODE_22 = 22;

    /**
     * Response code "33".
     *
     * @var string
     */
    const RESPONSE_CODE_33 = 33;

    /**
     * Response code "34".
     *
     * @var string
     */
    const RESPONSE_CODE_34 = 34;

    /**
     * Response code "35".
     *
     * @var string
     */
    const RESPONSE_CODE_35 = 35;

    /**
     * Response code "3501".
     *
     * @var string
     */
    const RESPONSE_CODE_3501 = 3501;

    /**
     * Response code "3502".
     *
     * @var string
     */
    const RESPONSE_CODE_3502 = 3502;

    /**
     * Response code "3503".
     *
     * @var string
     */
    const RESPONSE_CODE_3503 = 3503;

    /**
     * Response code "3504".
     *
     * @var string
     */
    const RESPONSE_CODE_3504 = 3504;

    /**
     * Response code "3521".
     *
     * @var string
     */
    const RESPONSE_CODE_3521 = 3521;

    /**
     * Response code "3522".
     *
     * @var string
     */
    const RESPONSE_CODE_3522 = 3522;

    /**
     * Response code "3523".
     *
     * @var string
     */
    const RESPONSE_CODE_3523 = 3523;

    /**
     * Response code "3524".
     *
     * @var string
     */
    const RESPONSE_CODE_3524 = 3524;

    /**
     * Response code "3525".
     *
     * @var string
     */
    const RESPONSE_CODE_3525 = 3525;

    /**
     * Response code "3526".
     *
     * @var string
     */
    const RESPONSE_CODE_3526 = 3526;

    /**
     * Response code "3527".
     *
     * @var string
     */
    const RESPONSE_CODE_3527 = 3527;

    /**
     * Response code "3560".
     *
     * @var string
     */
    const RESPONSE_CODE_3560 = 3560;

    /**
     * Response code "3599".
     *
     * @var string
     */
    const RESPONSE_CODE_3599 = 3599;

    /**
     * Response code "36".
     *
     * @var string
     */
    const RESPONSE_CODE_36 = 36;

    /**
     * Response code "37".
     *
     * @var string
     */
    const RESPONSE_CODE_37 = 37;

    /**
     * Response code "38".
     *
     * @var string
     */
    const RESPONSE_CODE_38 = 38;

    /**
     * Response code "3998".
     *
     * @var string
     */
    const RESPONSE_CODE_3998 = 3998;

    /**
     * Response code "3999".
     *
     * @var string
     */
    const RESPONSE_CODE_3999 = 3999;

    /**
     * Response code "40".
     *
     * @var string
     */
    const RESPONSE_CODE_40 = 40;

    /**
     * Response code "50".
     *
     * @var string
     */
    const RESPONSE_CODE_50 = 50;

    /**
     * Response code "999".
     *
     * @var string
     */
    const RESPONSE_CODE_999 = 999;

    /**
     * Response date/time format.
     *
     * @var string
     */
    const RESPONSE_DATETIME_FORMAT = RequestInterface::REQUEST_DATETIME_FORMAT;

    /**
     * Response date format.
     *
     * @var string
     */
    const RESPONSE_DATE_FORMAT = RequestInterface::REQUEST_DATE_FORMAT;

    /**
     * Response delimiter.
     *
     * @var string
     */
    const RESPONSE_DELIMITER = "|";

    /**
     * Response description "0".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_0 = "Sent";

    /**
     * Response description "1".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_1 = "In progress";

    /**
     * Response description "10".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_10 = "Programmed";

    /**
     * Response description "100".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_100 = "Read";

    /**
     * Response description "101".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_101 = "Not read";

    /**
     * Response description "11".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_11 = "Received";

    /**
     * Response description "12".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_12 = "Partially delivered";

    /**
     * Response description "13".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_13 = "Issued operator (temporary status)";

    /**
     * Response description "14".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_14 = "Issued";

    /**
     * Response description "15".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_15 = "Partially received";

    /**
     * Response description "16".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_16 = "Listened";

    /**
     * Response description "2".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_2 = "Internal error";

    /**
     * Response description "21".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_21 = "Not deliverable";

    /**
     * Response description "22".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_22 = "Rejected";

    /**
     * Response description "33".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_33 = "Not sent - insufficient credit";

    /**
     * Response description "34".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_34 = "Routing error";

    /**
     * Response description "35".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_35 = "Reception error";

    /**
     * Response description "3501".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_3501 = "Temporary operator error";

    /**
     * Response description "3502".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_3502 = "Temporary absence error";

    /**
     * Response description "3503".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_3503 = "Temporary phone error";

    /**
     * Response description "3504".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_3504 = "Temporary portability error";

    /**
     * Response description "3521".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_3521 = "Permanent operator error";

    /**
     * Response description "3522".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_3522 = "Permanent absence error";

    /**
     * Response description "3523".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_3523 = "Permanent phone error";

    /**
     * Response description "3524".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_3524 = "Permanent anti-spam error";

    /**
     * Response description "3525".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_3525 = "Permanent content error";

    /**
     * Response description "3526".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_3526 = "Permanent portability error";

    /**
     * Response description "3527".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_3527 = "Permanent roaming error";

    /**
     * Response description "3560".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_3560 = "Non-routable error";

    /**
     * Response description "3599".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_3599 = "Other error";

    /**
     * Response description "36".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_36 = "Message error";

    /**
     * Response description "37".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_37 = "Expired message";

    /**
     * Response description "38".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_38 = "Message too long";

    /**
     * Response description "3998".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_3998 = "Invalid recipient";

    /**
     * Response description "3999".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_3999 = "Blacklisted recipient";

    /**
     * Response description "40".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_40 = "Model";

    /**
     * Response description "50".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_50 = "Not delivered";

    /**
     * Response description "999".
     *
     * @var string
     */
    const RESPONSE_DESCRIPTION_999 = "Undefined";
}
