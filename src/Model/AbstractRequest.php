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

use UnexpectedValueException;

/**
 * Abstract request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Request
 */
abstract class AbstractRequest {

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * Checks a numero.
     *
     * @param string $numero The numero.
     * @return void
     * @throws UnexpectedValueException Throws an unexpected value exception if the numero is invalid.
     */
    public static function checkNumero($numero) {
        if (0 === preg_match("/^[0-9]{1,}$/", $numero)) {
            throw new UnexpectedValueException(sprintf("The numero \"%s\" is invalid", $numero));
        }
    }
}
