<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Exception;

use Exception;
use WBW\Library\Core\Exception\AbstractWBWException;

/**
 * Abstract sMsmode exception.
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Exception
 * @abstract
 */
abstract class AbstractSMSModeException extends AbstractWBWException {

	/**
	 * Constructor.
	 *
	 * @param string $message The message.
	 * @param Exception $previous The previous exception.
	 */
	public function __construct($message, Exception $previous = null) {
		parent::__construct($message, $previous);
	}

}
