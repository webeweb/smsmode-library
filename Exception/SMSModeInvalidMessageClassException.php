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
 * sMsmode invalid message class exception.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Exception
 * @final
 */
final class SMSModeInvalidMessageClassException extends AbstractSMSModeException {

	/**
	 * Constructor.
	 *
	 * @param integer $messageClass The message class.
	 */
	public function __construct($messageClass) {
		parent::__construct("The message class \"" . $messageClass . "\" is invalid");
	}

}
