<?php

/*
 * This file is part of the WBWSMSModeLibrary package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Request;

use Exception;
use PHPUnit_Framework_TestCase;
use WBW\Library\SMSMode\Exception\SMSModeMissingSettingException;
use WBW\Library\SMSMode\Request\SMSModeReceptionReportRequest;

/**
 * sMsmode reception report request test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Request
 * @final
 */
final class SMSModeReceptionReportRequestTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new SMSModeReceptionReportRequest();

		try {
			$obj->toArray();
		} catch (Exception $ex) {
			$this->assertInstanceOf(SMSModeMissingSettingException::class, $ex, "The method toArray() does not throw the expected exception");
			$this->assertEquals("The setting \"smsID\" is missing", $ex->getMessage(), "The exception does not return the expected message");
		}

		$obj->setSmsID("smsID");
		$res1 = ["smsID" => "smsID"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with message and number");
	}

}
