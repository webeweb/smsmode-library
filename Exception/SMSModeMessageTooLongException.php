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
 * sMsmode message too long exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Exception
 * @final
 */
final class SMSModeMessageTooLongException extends AbstractSMSModeException {

    /**
     * Constructor.
     *
     * @param $message The message.
     * @param $limit The limit.
     */
    public function __construct($message, $limit) {
        parent::__construct("The message \"" . $message . "\" exceeds the limit of " . $limit . " characters");
    }

}
