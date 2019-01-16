<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Exception;

/**
 * Invalid numero exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Exception
 */
class InvalidNumeroException extends AbstractException {

    /**
     * Constructor.
     *
     * @param string $numero The numero.
     */
    public function __construct($numero) {
        parent::__construct(sprintf("The numero \"%s\" is invalid", $numero));
    }
}
