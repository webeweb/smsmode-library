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

use DateTime;
use Exception;
use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\SMSMode\Exception\SMSModeMissingSettingException;
use WBW\Library\SMSMode\Request\SMSModeGetResponsesRequest;
use WBW\Library\SMSMode\Response\SMSModeGetResponsesResponse;

/**
 * sMsmode get responses request test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Request
 * @final
 */
final class SMSModeGetResponsesRequestTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj = new SMSModeGetResponsesRequest();

		$this->assertEquals("responseList.do", $obj->getResourcePath(), "The method getResourcePath() does not return the expected value");

		$this->assertEquals(null, $obj->getEndDate(), "The method getEndDate() does not return the expected value");
		$this->assertEquals(null, $obj->getOffset(), "The method getOffset() does not return the expected value");
		$this->assertEquals(null, $obj->getStart(), "The method getStart() does not return the expected value");
		$this->assertEquals(null, $obj->getStartDate(), "The method getStartDate() does not return the expected value");
	}

	/**
	 * Tests the parseResponse() method.
	 *
	 * @return void
	 */
	public function testParseResponse() {

		$obj = new SMSModeGetResponsesRequest();

		$res = $obj->parseResponse("exception");
		$this->assertInstanceOf(SMSModeGetResponsesResponse::class, $res, "The method parseResponse() does not return the expected class");
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new SMSModeGetResponsesRequest();

		$res1 = [];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setStart(0);
		try {
			$obj->toArray();
		} catch (Exception $ex) {
			$this->assertInstanceOf(SMSModeMissingSettingException::class, $ex, "The method toArray() does not throw the expected exception");
			$this->assertEquals("The setting \"offset\" is missing", $ex->getMessage(), "The exception does not return the expected message");
		}

		$obj->setStart(null);
		$obj->setOffset(0);
		try {
			$obj->toArray();
		} catch (Exception $ex) {
			$this->assertInstanceOf(SMSModeMissingSettingException::class, $ex, "The method toArray() does not throw the expected exception");
			$this->assertEquals("The setting \"start\" is missing", $ex->getMessage(), "The exception does not return the expected message");
		}

		$obj->setStart(0);
		try {
			$obj->toArray();
		} catch (Exception $ex) {
			$this->assertInstanceOf(IllegalArgumentException::class, $ex, "The method toArray() does not throw the expected exception");
			$this->assertEquals("The offset must be greater than start", $ex->getMessage(), "The exception does not return the expected message");
		}

		$obj->setOffset(10);
		$res2 = ["start" => 0, "offset" => 10];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with start and offset");

		$obj->setStart(null);
		$obj->setOffset(null);
		$obj->setStartDate(new DateTime("2017-09-14 12:00:00"));
		try {
			$obj->toArray();
		} catch (Exception $ex) {
			$this->assertInstanceOf(SMSModeMissingSettingException::class, $ex, "The method toArray() does not throw the expected exception");
			$this->assertEquals("The setting \"endDate\" is missing", $ex->getMessage(), "The exception does not return the expected message");
		}

		$obj->setEndDate(new DateTime("2017-09-14 12:00:00"));
		try {
			$obj->toArray();
		} catch (Exception $ex) {
			$this->assertInstanceOf(IllegalArgumentException::class, $ex, "The method toArray() does not throw the expected exception");
			$this->assertEquals("The end date must be greater than start date", $ex->getMessage(), "The exception does not return the expected message");
		}

		$obj->setStartDate(null);
		try {
			$obj->toArray();
		} catch (Exception $ex) {
			$this->assertInstanceOf(SMSModeMissingSettingException::class, $ex, "The method toArray() does not throw the expected exception");
			$this->assertEquals("The setting \"startDate\" is missing", $ex->getMessage(), "The exception does not return the expected message");
		}

		$obj->setStartDate(new DateTime("2017-09-14 12:00:00"));
		$obj->setEndDate(new DateTime("2017-09-14 14:00:00"));
		$res3 = ["startDate" => "14092017-12:00", "endDate" => "14092017-14:00"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with message, group and send date");
	}

}
