<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Helper;

use WBW\Library\SMSMode\API\StatusInterface;

/**
 * Status helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Helper
 */
class StatusHelper {

    /**
     * Get the statuses.
     *
     * @return array Returns the statuses.
     */
    public static function getStatuses() {
        return [
            StatusInterface::STATUS_CODE_0    => StatusInterface::STATUS_DESCRIPTION_0,
            StatusInterface::STATUS_CODE_1    => StatusInterface::STATUS_DESCRIPTION_1,
            StatusInterface::STATUS_CODE_2    => StatusInterface::STATUS_DESCRIPTION_2,
            StatusInterface::STATUS_CODE_10   => StatusInterface::STATUS_DESCRIPTION_10,
            StatusInterface::STATUS_CODE_11   => StatusInterface::STATUS_DESCRIPTION_11,
            StatusInterface::STATUS_CODE_12   => StatusInterface::STATUS_DESCRIPTION_12,
            StatusInterface::STATUS_CODE_13   => StatusInterface::STATUS_DESCRIPTION_13,
            StatusInterface::STATUS_CODE_14   => StatusInterface::STATUS_DESCRIPTION_14,
            StatusInterface::STATUS_CODE_15   => StatusInterface::STATUS_DESCRIPTION_15,
            StatusInterface::STATUS_CODE_16   => StatusInterface::STATUS_DESCRIPTION_16,
            StatusInterface::STATUS_CODE_21   => StatusInterface::STATUS_DESCRIPTION_21,
            StatusInterface::STATUS_CODE_22   => StatusInterface::STATUS_DESCRIPTION_22,
            StatusInterface::STATUS_CODE_33   => StatusInterface::STATUS_DESCRIPTION_33,
            StatusInterface::STATUS_CODE_34   => StatusInterface::STATUS_DESCRIPTION_34,
            StatusInterface::STATUS_CODE_35   => StatusInterface::STATUS_DESCRIPTION_35,
            StatusInterface::STATUS_CODE_36   => StatusInterface::STATUS_DESCRIPTION_36,
            StatusInterface::STATUS_CODE_37   => StatusInterface::STATUS_DESCRIPTION_37,
            StatusInterface::STATUS_CODE_38   => StatusInterface::STATUS_DESCRIPTION_38,
            StatusInterface::STATUS_CODE_50   => StatusInterface::STATUS_DESCRIPTION_50,
            StatusInterface::STATUS_CODE_40   => StatusInterface::STATUS_DESCRIPTION_40,
            StatusInterface::STATUS_CODE_100  => StatusInterface::STATUS_DESCRIPTION_100,
            StatusInterface::STATUS_CODE_101  => StatusInterface::STATUS_DESCRIPTION_101,
            StatusInterface::STATUS_CODE_999  => StatusInterface::STATUS_DESCRIPTION_999,
            StatusInterface::STATUS_CODE_3501 => StatusInterface::STATUS_DESCRIPTION_3501,
            StatusInterface::STATUS_CODE_3502 => StatusInterface::STATUS_DESCRIPTION_3502,
            StatusInterface::STATUS_CODE_3503 => StatusInterface::STATUS_DESCRIPTION_3503,
            StatusInterface::STATUS_CODE_3504 => StatusInterface::STATUS_DESCRIPTION_3504,
            StatusInterface::STATUS_CODE_3521 => StatusInterface::STATUS_DESCRIPTION_3521,
            StatusInterface::STATUS_CODE_3522 => StatusInterface::STATUS_DESCRIPTION_3522,
            StatusInterface::STATUS_CODE_3523 => StatusInterface::STATUS_DESCRIPTION_3523,
            StatusInterface::STATUS_CODE_3524 => StatusInterface::STATUS_DESCRIPTION_3524,
            StatusInterface::STATUS_CODE_3525 => StatusInterface::STATUS_DESCRIPTION_3525,
            StatusInterface::STATUS_CODE_3526 => StatusInterface::STATUS_DESCRIPTION_3526,
            StatusInterface::STATUS_CODE_3527 => StatusInterface::STATUS_DESCRIPTION_3527,
            StatusInterface::STATUS_CODE_3560 => StatusInterface::STATUS_DESCRIPTION_3560,
            StatusInterface::STATUS_CODE_3599 => StatusInterface::STATUS_DESCRIPTION_3599,
            StatusInterface::STATUS_CODE_3998 => StatusInterface::STATUS_DESCRIPTION_3998,
            StatusInterface::STATUS_CODE_3999 => StatusInterface::STATUS_DESCRIPTION_3999,
        ];
    }
}
