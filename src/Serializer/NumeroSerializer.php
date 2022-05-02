<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Serializer;

use InvalidArgumentException;

/**
 * Numero serializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Serializer
 */
class NumeroSerializer {

    /**
     * Check a numero.
     *
     * @param string $numero The numero.
     * @return void
     * @throws InvalidArgumentException Throws an invalid argument exception if the numero is invalid.
     */
    public static function checkNumero(string $numero): void {
        if (0 === preg_match("/^\d+$/", $numero)) {
            throw new InvalidArgumentException(sprintf('The numero "%s" is invalid', $numero));
        }
    }

    /**
     * Deserialize a numero.
     *
     * @param string $numero The numero.
     * @return string Returns the deserialized numero.
     */
    public static function deserializeNumero(string $numero): string {
        $output = preg_replace("/^336/", "06", $numero, 1);
        return preg_replace("/^337/", "07", $output, 1);
    }

    /**
     * Serialize a numero.
     *
     * @param string $numero The numero.
     * @return string Returns the serialized numero.
     */
    public static function serializeNumero(string $numero): string {
        $output = preg_replace("/^06/", "336", $numero, 1);
        return preg_replace("/^07/", "337", $output, 1);
    }
}
