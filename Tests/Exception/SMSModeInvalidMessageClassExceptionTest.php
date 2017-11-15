<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Exception;

use PHPUnit_Framework_TestCase;
use WBW\Library\SMSMode\Exception\SMSModeInvalidMessageClassException;

/**
 * sMsmode invalid message class exception.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Exception
 * @final
 */
final class SMSModeInvalidMessageClassExceptionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void.
	 */
	public function testConstruct() {

		$ex = new SMSModeInvalidMessageClassException("exception");

		$res = "The message class \"exception\" is invalid";
		$this->assertEquals($res, $ex->getMessage());
	}

}
