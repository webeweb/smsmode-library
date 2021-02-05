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

use WBW\Library\Core\Model\Attribute\IntegerCodeTrait;
use WBW\Library\Core\Model\Attribute\StringDescriptionTrait;
use WBW\Library\Core\Model\Attribute\StringRawResponseTrait;
use WBW\Library\SMSMode\API\ResponseInterface;

/**
 * Abstract response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 * @abstract
 */
abstract class AbstractResponse implements ResponseInterface {

    use IntegerCodeTrait;
    use StringDescriptionTrait;
    use StringRawResponseTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Enumerates the responses.
     *
     * @return array Returns the responses enumeration.
     */
    public static function enumResponses(): array {
        return [
            static::RESPONSE_CODE_0    => static::RESPONSE_DESCRIPTION_0,
            static::RESPONSE_CODE_1    => static::RESPONSE_DESCRIPTION_1,
            static::RESPONSE_CODE_2    => static::RESPONSE_DESCRIPTION_2,
            static::RESPONSE_CODE_10   => static::RESPONSE_DESCRIPTION_10,
            static::RESPONSE_CODE_11   => static::RESPONSE_DESCRIPTION_11,
            static::RESPONSE_CODE_12   => static::RESPONSE_DESCRIPTION_12,
            static::RESPONSE_CODE_13   => static::RESPONSE_DESCRIPTION_13,
            static::RESPONSE_CODE_14   => static::RESPONSE_DESCRIPTION_14,
            static::RESPONSE_CODE_15   => static::RESPONSE_DESCRIPTION_15,
            static::RESPONSE_CODE_16   => static::RESPONSE_DESCRIPTION_16,
            static::RESPONSE_CODE_21   => static::RESPONSE_DESCRIPTION_21,
            static::RESPONSE_CODE_22   => static::RESPONSE_DESCRIPTION_22,
            static::RESPONSE_CODE_33   => static::RESPONSE_DESCRIPTION_33,
            static::RESPONSE_CODE_34   => static::RESPONSE_DESCRIPTION_34,
            static::RESPONSE_CODE_35   => static::RESPONSE_DESCRIPTION_35,
            static::RESPONSE_CODE_36   => static::RESPONSE_DESCRIPTION_36,
            static::RESPONSE_CODE_37   => static::RESPONSE_DESCRIPTION_37,
            static::RESPONSE_CODE_38   => static::RESPONSE_DESCRIPTION_38,
            static::RESPONSE_CODE_50   => static::RESPONSE_DESCRIPTION_50,
            static::RESPONSE_CODE_40   => static::RESPONSE_DESCRIPTION_40,
            static::RESPONSE_CODE_100  => static::RESPONSE_DESCRIPTION_100,
            static::RESPONSE_CODE_101  => static::RESPONSE_DESCRIPTION_101,
            static::RESPONSE_CODE_999  => static::RESPONSE_DESCRIPTION_999,
            static::RESPONSE_CODE_3501 => static::RESPONSE_DESCRIPTION_3501,
            static::RESPONSE_CODE_3502 => static::RESPONSE_DESCRIPTION_3502,
            static::RESPONSE_CODE_3503 => static::RESPONSE_DESCRIPTION_3503,
            static::RESPONSE_CODE_3504 => static::RESPONSE_DESCRIPTION_3504,
            static::RESPONSE_CODE_3521 => static::RESPONSE_DESCRIPTION_3521,
            static::RESPONSE_CODE_3522 => static::RESPONSE_DESCRIPTION_3522,
            static::RESPONSE_CODE_3523 => static::RESPONSE_DESCRIPTION_3523,
            static::RESPONSE_CODE_3524 => static::RESPONSE_DESCRIPTION_3524,
            static::RESPONSE_CODE_3525 => static::RESPONSE_DESCRIPTION_3525,
            static::RESPONSE_CODE_3526 => static::RESPONSE_DESCRIPTION_3526,
            static::RESPONSE_CODE_3527 => static::RESPONSE_DESCRIPTION_3527,
            static::RESPONSE_CODE_3560 => static::RESPONSE_DESCRIPTION_3560,
            static::RESPONSE_CODE_3599 => static::RESPONSE_DESCRIPTION_3599,
            static::RESPONSE_CODE_3998 => static::RESPONSE_DESCRIPTION_3998,
            static::RESPONSE_CODE_3999 => static::RESPONSE_DESCRIPTION_3999,
        ];
    }
}
