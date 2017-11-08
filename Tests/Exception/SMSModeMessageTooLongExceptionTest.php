<?php

/*
 * This file is part of the smsmode-library.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Exception;

use PHPUnit_Framework_TestCase;
use WBW\Library\SMSMode\Exception\SMSModeMessageTooLongException;

/**
 * sMsmode message too long exception test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Exception
 * @final
 */
final class SMSModeMessageTooLongExceptionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void.
	 */
	public function testConstruct() {

		$ex = new SMSModeMessageTooLongException("exception", 8);

		$res = "The message \"exception\" exceeds the limit of 8 characters";
		$this->assertEquals($res, $ex->getMessage(), "The method getMessage() does not return the expected string");
	}

}
