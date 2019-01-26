<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Normalizer;

/**
 * Numero normalizer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Normalizer
 */
class NumeroNormalizer {

    /**
     * Denormalize a numero.
     *
     * @param string $numero The numero.
     * @return string Returns the denormalized numero.
     */
    public static function denormalizeNumero($numero) {
        $output = preg_replace("/^336/", "06", $numero, 1);
        $result = preg_replace("/^337/", "07", $output, 1);
        return $result;
    }

    /**
     * Normalize a numero.
     *
     * @param string $numero The numero.
     * @return string Returns the normalized numero.
     */
    public static function normalizeNumero($numero) {
        $output = preg_replace("/^06/", "336", $numero, 1);
        $result = preg_replace("/^07/", "337", $output, 1);
        return $result;
    }
}
