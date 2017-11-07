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
use WBW\Library\SMSMode\Request\SMSModeCreditTransferRequest;
use WBW\Library\SMSMode\Response\SMSModeCreditTransferResponse;

/**
 * sMsmode credit transfer request test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Request
 * @final
 */
final class SMSModeCreditTransferRequestTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj = new SMSModeCreditTransferRequest();

		$this->assertEquals("creditTransfert.do", $obj->getResourcePath(), "The method getResourcePath() does not return the expected value");

		$this->assertEquals(null, $obj->getCredit(), "The method getCredit() does not return the expected value");
		$this->assertEquals(null, $obj->getReference(), "The method getReference() does not return the expected value");
		$this->assertEquals(null, $obj->getUsername(), "The method getUsername() does not return the expected value");
	}

	/**
	 * Tests the parseResponse() method.
	 *
	 * @return void
	 */
	public function testParseResponse() {

		$obj = new SMSModeCreditTransferRequest();

		$res = $obj->parseResponse("exception");
		$this->assertInstanceOf(SMSModeCreditTransferResponse::class, $res, "The method parseResponse() does not return the expected class");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new SMSModeCreditTransferRequest();

		try {
			$obj->toArray();
		} catch (Exception $ex) {
			$this->assertInstanceOf(SMSModeMissingSettingException::class, $ex, "The method toArray() does not throw the expected exception");
			$this->assertEquals("The setting \"username\" is missing", $ex->getMessage(), "The exception does not return the expected message");
		}

		$obj->setUsername("username");

		try {
			$obj->toArray();
		} catch (Exception $ex) {
			$this->assertInstanceOf(SMSModeMissingSettingException::class, $ex, "The method toArray() does not throw the expected exception");
			$this->assertEquals("The setting \"credit\" is missing", $ex->getMessage(), "The exception does not return the expected message");
		}

		$obj->setCredit(212);
		$res1 = ["targetPseudo" => "username", "creditAmount" => 212];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with username, and credit");

		$obj->setReference("reference");
		$res2 = ["targetPseudo" => "username", "creditAmount" => 212, "reference" => "reference"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with username, credit and reference");
	}

}
