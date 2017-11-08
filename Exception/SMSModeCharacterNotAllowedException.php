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

/**
 * sMsmode character not allowed exception.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Exception
 * @final
 */
final class SMSModeCharacterNotAllowedException extends AbstractSMSModeException {

	/**
	 * Constructor.
	 *
	 * @param string $character The character.
	 */
	public function __construct($character) {
		parent::__construct("The character \"" . $character . "\" is not allowed");
	}

}
