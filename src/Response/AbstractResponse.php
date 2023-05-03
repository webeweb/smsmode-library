<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Response;

use WBW\Library\Provider\Response\AbstractResponse as BaseResponse;
use WBW\Library\SmsMode\Api\ResponseInterface;
use WBW\Library\Traits\Integers\IntegerCodeTrait;
use WBW\Library\Traits\Strings\StringDescriptionTrait;

/**
 * Abstract response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Response
 * @abstract
 */
abstract class AbstractResponse extends BaseResponse implements ResponseInterface {

    use IntegerCodeTrait;
    use StringDescriptionTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Enumerate the responses.
     *
     * @return array Returns the responses enumeration.
     */
    public static function enumResponses(): array {

        return [
            self::RESPONSE_CODE_0    => self::RESPONSE_DESCRIPTION_0,
            self::RESPONSE_CODE_1    => self::RESPONSE_DESCRIPTION_1,
            self::RESPONSE_CODE_2    => self::RESPONSE_DESCRIPTION_2,
            self::RESPONSE_CODE_10   => self::RESPONSE_DESCRIPTION_10,
            self::RESPONSE_CODE_11   => self::RESPONSE_DESCRIPTION_11,
            self::RESPONSE_CODE_12   => self::RESPONSE_DESCRIPTION_12,
            self::RESPONSE_CODE_13   => self::RESPONSE_DESCRIPTION_13,
            self::RESPONSE_CODE_14   => self::RESPONSE_DESCRIPTION_14,
            self::RESPONSE_CODE_15   => self::RESPONSE_DESCRIPTION_15,
            self::RESPONSE_CODE_16   => self::RESPONSE_DESCRIPTION_16,
            self::RESPONSE_CODE_21   => self::RESPONSE_DESCRIPTION_21,
            self::RESPONSE_CODE_22   => self::RESPONSE_DESCRIPTION_22,
            self::RESPONSE_CODE_33   => self::RESPONSE_DESCRIPTION_33,
            self::RESPONSE_CODE_34   => self::RESPONSE_DESCRIPTION_34,
            self::RESPONSE_CODE_35   => self::RESPONSE_DESCRIPTION_35,
            self::RESPONSE_CODE_36   => self::RESPONSE_DESCRIPTION_36,
            self::RESPONSE_CODE_37   => self::RESPONSE_DESCRIPTION_37,
            self::RESPONSE_CODE_38   => self::RESPONSE_DESCRIPTION_38,
            self::RESPONSE_CODE_50   => self::RESPONSE_DESCRIPTION_50,
            self::RESPONSE_CODE_40   => self::RESPONSE_DESCRIPTION_40,
            self::RESPONSE_CODE_100  => self::RESPONSE_DESCRIPTION_100,
            self::RESPONSE_CODE_101  => self::RESPONSE_DESCRIPTION_101,
            self::RESPONSE_CODE_999  => self::RESPONSE_DESCRIPTION_999,
            self::RESPONSE_CODE_3501 => self::RESPONSE_DESCRIPTION_3501,
            self::RESPONSE_CODE_3502 => self::RESPONSE_DESCRIPTION_3502,
            self::RESPONSE_CODE_3503 => self::RESPONSE_DESCRIPTION_3503,
            self::RESPONSE_CODE_3504 => self::RESPONSE_DESCRIPTION_3504,
            self::RESPONSE_CODE_3521 => self::RESPONSE_DESCRIPTION_3521,
            self::RESPONSE_CODE_3522 => self::RESPONSE_DESCRIPTION_3522,
            self::RESPONSE_CODE_3523 => self::RESPONSE_DESCRIPTION_3523,
            self::RESPONSE_CODE_3524 => self::RESPONSE_DESCRIPTION_3524,
            self::RESPONSE_CODE_3525 => self::RESPONSE_DESCRIPTION_3525,
            self::RESPONSE_CODE_3526 => self::RESPONSE_DESCRIPTION_3526,
            self::RESPONSE_CODE_3527 => self::RESPONSE_DESCRIPTION_3527,
            self::RESPONSE_CODE_3560 => self::RESPONSE_DESCRIPTION_3560,
            self::RESPONSE_CODE_3599 => self::RESPONSE_DESCRIPTION_3599,
            self::RESPONSE_CODE_3998 => self::RESPONSE_DESCRIPTION_3998,
            self::RESPONSE_CODE_3999 => self::RESPONSE_DESCRIPTION_3999,
        ];
    }
}
