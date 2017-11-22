<?php

/**
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Exception;

/**
 * sMsmode max limit number reached exception.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Exception
 * @final
 */
final class SMSModeMaxLimitNumberReachedException extends AbstractSMSModeException {

	/**
	 * Constructor.
	 *
	 * @param integer $limit The limit.
	 */
	public function __construct($limit) {
		parent::__construct("The max limit of numbers reached: " . $limit . " allowed");
	}

}
