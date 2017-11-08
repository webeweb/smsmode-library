<?php

/*
 * This file is part of the smsmode-library.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Request;

use PHPUnit_Framework_TestCase;
use WBW\Library\SMSMode\Request\SMSModeAccountBalanceRequest;
use WBW\Library\SMSMode\Response\SMSModeAccountBalanceResponse;

/**
 * sMsmode account balance request test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Request
 * @final
 */
final class SMSModeAccountBalanceRequestTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj = new SMSModeAccountBalanceRequest();

		$this->assertEquals("credit.do", $obj->getResourcePath(), "The method getResourcePath() does not return the expected value");
	}

	/**
	 * Tests the parseResponse() method.
	 *
	 * @return void
	 */
	public function testParseResponse() {

		$obj = new SMSModeAccountBalanceRequest();

		$res = $obj->parseResponse("exception");
		$this->assertInstanceOf(SMSModeAccountBalanceResponse::class, $res, "The method parseResponse() does not return the expected class");
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new SMSModeAccountBalanceRequest();

		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected class");
	}

}
