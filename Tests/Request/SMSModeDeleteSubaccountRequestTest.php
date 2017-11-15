<?php

/*
 * This file is part of the smsmode-library package.
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
use WBW\Library\SMSMode\Request\SMSModeDeleteSubaccountRequest;
use WBW\Library\SMSMode\Response\SMSModeDeleteSubaccountResponse;

/**
 * sMsmode delete subaccount request test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Request
 * @final
 */
final class SMSModeDeleteSubaccountRequestTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj = new SMSModeDeleteSubaccountRequest();

		$this->assertEquals("deleteSubAccount.do", $obj->getResourcePath());

		$this->assertEquals(null, $obj->getUsername());
	}

	/**
	 * Tests the parseResponse() method.
	 *
	 * @return void
	 */
	public function testParseResponse() {

		$obj = new SMSModeDeleteSubaccountRequest();

		$res = $obj->parseResponse("exception");
		$this->assertInstanceOf(SMSModeDeleteSubaccountResponse::class, $res);
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new SMSModeDeleteSubaccountRequest();

		try {
			$obj->toArray();
		} catch (Exception $ex) {
			$this->assertInstanceOf(NullPointerException::class, $ex);
			$this->assertEquals("The parameter \"username\" is missing", $ex->getMessage());
		}

		$obj->setUsername("username");
		$res1 = ["pseudoToDelete" => "username"];
		$this->assertEquals($res1, $obj->toArray());
	}

}
