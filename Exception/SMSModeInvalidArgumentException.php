<?php

/*
 * This file is part of the WBWSMSModeLibrary package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Exception;

/**
 * sMsmode invalid argument exception.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
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
