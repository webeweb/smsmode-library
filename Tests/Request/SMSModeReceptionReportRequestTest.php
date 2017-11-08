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
use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\SMSMode\Request\SMSModeReceptionReportRequest;
use WBW\Library\SMSMode\Response\SMSModeReceptionReportResponse;

/**
 * sMsmode reception report request test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Request
 * @final
 */
final class SMSModeReceptionReportRequestTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj = new SMSModeReceptionReportRequest();

		$this->assertEquals("compteRendu.do", $obj->getResourcePath(), "The method getResourcePath() does not return the expected value");

		$this->assertEquals(null, $obj->getSmsID(), "The method getSmsID() does not return the expected value");
	}

	/**
	 * Tests the parseResponse() method.
	 *
	 * @return void
	 */
	public function testParseResponse() {

		$obj = new SMSModeReceptionReportRequest();

		$res = $obj->parseResponse("exception");
		$this->assertInstanceOf(SMSModeReceptionReportResponse::class, $res, "The method parseResponse() does not return the expected class");
	}

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
			$this->assertInstanceOf(NullPointerException::class, $ex, "The method toArray() does not throw the expected exception");
			$this->assertEquals("The parameter \"smsID\" is missing", $ex->getMessage(), "The exception does not return the expected message");
		}

		$obj->setSmsID("smsID");
		$res1 = ["smsID" => "smsID"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with message and number");
	}

}
