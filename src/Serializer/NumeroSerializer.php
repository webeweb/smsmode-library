<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Serializer;

use InvalidArgumentException;

/**
 * Numero serializer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Serializer
 */
class NumeroSerializer {

    /**
     * Check a numero.
     *
     * @param string $numero The numero.
     * @return void
     * @throws InvalidArgumentException Throws an invalid argument exception if the numero is invalid.
     */
    public static function checkNumero($numero) {
        if (0 === preg_match("/^[0-9]{1,}$/", $numero)) {
            throw new InvalidArgumentException(sprintf("The numero \"%s\" is invalid", $numero));
        }
    }

    /**
     * Deserialize a numero.
     *
     * @param string $numero The numero.
     * @return string Returns the deserialized numero.
     */
    public static function deserializeNumero($numero) {
        $output = preg_replace("/^336/", "06", $numero, 1);
        $result = preg_replace("/^337/", "07", $output, 1);
        return $result;
    }

    /**
     * Serialize a numero.
     *
     * @param string $numero The numero.
     * @return string Returns the serialized numero.
     */
    public static function serializeNumero($numero) {
        $output = preg_replace("/^06/", "336", $numero, 1);
        $result = preg_replace("/^07/", "337", $output, 1);
        return $result;
    }
}
