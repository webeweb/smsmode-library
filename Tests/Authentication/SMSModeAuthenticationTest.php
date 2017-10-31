<?php

/*
 * This file is part of the WBWSMSModeLibrary package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Authentication;

use Exception;
use PHPUnit_Framework_TestCase;
use WBW\Library\SMSMode\Authentication\SMSModeAuthentication;
use WBW\Library\SMSMode\Exception\SMSModeMissingSettingException;

/**
 * sMsmode authentication test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Authentication
 * @final
 */
final class SMSModeAuthenticationTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new SMSModeAuthentication();

		$this->assertEquals(null, $obj->getToken(), "The method getToken() does not return the expecetd value");
		$this->assertEquals(null, $obj->getUsername(), "The method getToken() does not return the expecetd value");
		$this->assertEquals(null, $obj->getPassword(), "The method getToken() does not return the expecetd value");
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void.
	 */
	public function testToArray() {

		$obj = new SMSModeAuthentication();

		try {
			$obj->toArray();
		} catch (Exception $ex) {
			$this->assertInstanceOf(SMSModeMissingSettingException::class, $ex, "The method toArray() does not throw the expected exception");
			$this->assertEquals("The setting \"username\" is missing", $ex->getMessage(), "The exception does not return the expected message");
		}

		$obj->setToken("token");
		$res1 = ["accessToken" => "token"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with token");

		$obj->setToken(null);
		$obj->setUsername("username");
		try {
			$obj->toArray();
		} catch (Exception $ex) {
			$this->assertInstanceOf(SMSModeMissingSettingException::class, $ex, "The method toArray() does not throw the expected exception with username");
			$this->assertEquals("The setting \"password\" is missing", $ex->getMessage(), "The exception does not return the expected message with username");
		}

		$obj->setPassword('password');
		$res2 = ["pseudo" => "username", "pass" => "password"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with username and password");
	}

}
