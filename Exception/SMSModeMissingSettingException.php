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
 * sMsmode missing setting exception.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Exception
 * @final
 */
final class SMSModeMissingSettingException extends AbstractSMSModeException {

	/**
	 * Constructor.
	 *
	 * @param string $setting The setting.
	 */
	public function __construct($setting) {
		parent::__construct("The setting \"" . $setting . "\" is missing");
	}

}
