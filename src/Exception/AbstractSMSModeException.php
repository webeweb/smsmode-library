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

use Exception;
use WBW\Library\Core\Exception\AbstractCoreException;

/**
 * Abstract sMsmode exception.
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Exception
 * @abstract
 */
abstract class AbstractSMSModeException extends AbstractCoreException {

    /**
     * Constructor.
     *
     * @param string $message The message.
     * @param Exception $previous The previous exception.
     */
    public function __construct($message, Exception $previous = null) {
        parent::__construct($message, 500, $previous);
    }
}
