<?php

/**
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Exception;

/**
 * sMsmode invalid argument exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Exception
 * @final
 */
final class SMSModeInvalidArgumentException extends AbstractSMSModeException {

    /**
     * Constructor.
     *
     * @param string $message The message.
     */
    public function __construct($message) {
        parent::__construct($message);
    }

}
