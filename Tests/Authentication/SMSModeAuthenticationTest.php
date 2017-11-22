<?php

/**
 * This file is part of the smsmode-library package.
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

		$this->assertEquals(null, $obj->getPassword());
		$this->assertEquals(null, $obj->getToken());
		$this->assertEquals(null, $obj->getUsername());
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
			$this->assertInstanceOf(SMSModeMissingSettingException::class, $ex);
			$this->assertEquals("The setting \"username\" is missing", $ex->getMessage());
		}

		$obj->setToken("token");
		$res1 = ["accessToken" => "token"];
		$this->assertEquals($res1, $obj->toArray());

		$obj->setToken(null);
		$obj->setUsername("username");
		try {
			$obj->toArray();
		} catch (Exception $ex) {
			$this->assertInstanceOf(SMSModeMissingSettingException::class, $ex);
			$this->assertEquals("The setting \"password\" is missing", $ex->getMessage());
		}

		$obj->setPassword("password");
		$res2 = ["pseudo" => "username", "pass" => "password"];
		$this->assertEquals($res2, $obj->toArray());
	}

}
