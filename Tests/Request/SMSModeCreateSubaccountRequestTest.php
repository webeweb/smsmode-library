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
use WBW\Library\SMSMode\Exception\SMSModeMissingSettingException;
use WBW\Library\SMSMode\Request\SMSModeCreateSubaccountRequest;
use WBW\Library\SMSMode\Response\SMSModeCreateSubaccountResponse;

/**
 * sMsmode create subaccount request test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Request
 * @final
 */
final class SMSModeCreateSubaccountRequestTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj = new SMSModeCreateSubaccountRequest();

		$this->assertEquals("createSubAccount.do", $obj->getResourcePath(), "The method getResourcePath() does not return the expected value");

		$this->assertEquals(null, $obj->getAddress(), "The method getAddress() does not return the expected value");
		$this->assertEquals(null, $obj->getBirthdate(), "The method getBirthdate() does not return the expected value");
		$this->assertEquals(null, $obj->getCity(), "The method getCity() does not return the expected value");
		$this->assertEquals(null, $obj->getCompany(), "The method getCompany() does not return the expected value");
		$this->assertEquals(null, $obj->getEmail(), "The method getEmail() does not return the expected value");
		$this->assertEquals(null, $obj->getFax(), "The method getFax() does not return the expected value");
		$this->assertEquals(null, $obj->getFirstname(), "The method getFirstname() does not return the expected value");
		$this->assertEquals(null, $obj->getLastname(), "The method getLastname() does not return the expected value");
		$this->assertEquals(null, $obj->getMobilePhone(), "The method getMobilePhone() does not return the expected value");
		$this->assertEquals(null, $obj->getPassword(), "The method getPassword() does not return the expected value");
		$this->assertEquals(null, $obj->getPhone(), "The method getPhone() does not return the expected value");
		$this->assertEquals(null, $obj->getPostalCode(), "The method getPostalCode() does not return the expected value");
		$this->assertEquals(null, $obj->getReference(), "The method getReference() does not return the expected value");
		$this->assertEquals(null, $obj->getUsername(), "The method getUsername() does not return the expected value");
	}

	/**
	 * Tests the parseResponse() method.
	 *
	 * @return void
	 */
	public function testParseResponse() {

		$obj = new SMSModeCreateSubaccountRequest();

		$res = $obj->parseResponse("exception");
		$this->assertInstanceOf(SMSModeCreateSubaccountResponse::class, $res, "The method parseResponse() does not return the expected class");
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new SMSModeCreateSubaccountRequest();

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
			$this->assertEquals("The setting \"password\" is missing", $ex->getMessage(), "The exception does not return the expected message");
		}

		$obj->setPassword("password");
		$res1 = ["newPseudo" => "username", "newPass" => "password"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with username and password");

		$obj->setReference("reference");
		$res2 = ["newPseudo" => "username", "newPass" => "password", "reference" => "reference"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with username, password and reference");

		$obj->setReference(null);
		$obj->setLastname("lastname");
		$res3 = ["newPseudo" => "username", "newPass" => "password", "nom" => "lastname"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with username, password and lastname");

		$obj->setLastname(null);
		$obj->setFirstname("firstname");
		$res4 = ["newPseudo" => "username", "newPass" => "password", "prenom" => "firstname"];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with username, password and firstname");

		$obj->setFirstname(null);
		$obj->setCompany("company");
		$res5 = ["newPseudo" => "username", "newPass" => "password", "societe" => "company"];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with username, password and company");

		$obj->setCompany(null);
		$obj->setAddress("address");
		$res6 = ["newPseudo" => "username", "newPass" => "password", "adresse" => "address"];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with username, password and address");

		$obj->setAddress(null);
		$obj->setCity("city");
		$res7 = ["newPseudo" => "username", "newPass" => "password", "ville" => "city"];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with username, password and city");

		$obj->setCity(null);
		$obj->setPostalCode("postalCode");
		$res8 = ["newPseudo" => "username", "newPass" => "password", "codePostal" => "postalCode"];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with username, password and postal code");

		$obj->setPostalCode(null);
		$obj->setMobilePhone("mobilePhone");
		$res9 = ["newPseudo" => "username", "newPass" => "password", "mobile" => "mobilePhone"];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with username, password and mobile phone");

		$obj->setMobilePhone(null);
		$obj->setPhone("phone");
		$res10 = ["newPseudo" => "username", "newPass" => "password", "telephone" => "phone"];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with username, password and phone");

		$obj->setPhone(null);
		$obj->setFax("fax");
		$res11 = ["newPseudo" => "username", "newPass" => "password", "fax" => "fax"];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with username, password and fax");

		$obj->setFax(null);
		$obj->setEmail("email");
		$res12 = ["newPseudo" => "username", "newPass" => "password", "email" => "email"];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with username, password and email");

		$obj->setEmail(null);
		$obj->setBirthdate(new DateTime("2017-09-12 11:00:00"));
		$res13 = ["newPseudo" => "username", "newPass" => "password", "date" => "12092017"];
		$this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with username, password and birthdatelle");
	}

}
