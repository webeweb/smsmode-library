<?php

/**
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Utility;

/**
 * Number utility.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Utility
 * @final
 */
final class NumberUtility {

    /**
     * Decode a number.
     *
     * @param string $number The number.
     * @return string Returns the decoded number.
     */
    public static function decodeNumber($number) {
        $result = preg_replace("/^336/", "06", $number, 1);
        $output = preg_replace("/^337/", "07", $result, 1);
        return $output;
    }

    /**
     * Encode a number.
     *
     * @param string $number The number.
     * @return string Returns the encoded number.
     */
    public static function encodeNumber($number) {
        $result = preg_replace("/^06/", "336", $number, 1);
        $output = preg_replace("/^07/", "337", $result, 1);
        return $output;
    }

}
