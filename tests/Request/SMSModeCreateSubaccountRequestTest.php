<?php

/**
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Request;

use DateTime;
use Exception;
use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\SMSMode\Request\SMSModeCreateSubaccountRequest;
use WBW\Library\SMSMode\Response\SMSModeCreateSubaccountResponse;
use WBW\Library\SMSMode\Tests\AbstractFrameworkTestCase;

/**
 * sMsmode create subaccount request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Request
 * @final
 */
final class SMSModeCreateSubaccountRequestTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SMSModeCreateSubaccountRequest();

        $this->assertEquals("createSubAccount.do", $obj->getResourcePath());

        $this->assertNull($obj->getAddress());
        $this->assertNull($obj->getBirthdate());
        $this->assertNull($obj->getCity());
        $this->assertNull($obj->getCompany());
        $this->assertNull($obj->getEmail());
        $this->assertNull($obj->getFax());
        $this->assertNull($obj->getFirstname());
        $this->assertNull($obj->getLastname());
        $this->assertNull($obj->getMobilePhone());
        $this->assertNull($obj->getPassword());
        $this->assertNull($obj->getPhone());
        $this->assertNull($obj->getPostalCode());
        $this->assertNull($obj->getReference());
        $this->assertNull($obj->getUsername());
    }

    /**
     * Tests the parseResponse() method.
     *
     * @return void
     */
    public function testParseResponse() {

        $obj = new SMSModeCreateSubaccountRequest();

        $res = $obj->parseResponse("exception");
        $this->assertInstanceOf(SMSModeCreateSubaccountResponse::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new SMSModeCreateSubaccountRequest();

        // ===
        try {

            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The attribute \"username\" is missing", $ex->getMessage());
        }

        // ===
        try {

            $obj->setUsername("username");
            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The attribute \"password\" is missing", $ex->getMessage());
        }

        // ===
        $obj->setPassword("password");
        $res01 = ["newPseudo" => "username", "newPass" => "password"];
        $this->assertEquals($res01, $obj->toArray());

        // ===
        $obj->setReference("reference");
        $res02 = ["newPseudo" => "username", "newPass" => "password", "reference" => "reference"];
        $this->assertEquals($res02, $obj->toArray());

        // ===
        $obj->setReference(null);
        $obj->setLastname("lastname");
        $res03 = ["newPseudo" => "username", "newPass" => "password", "nom" => "lastname"];
        $this->assertEquals($res03, $obj->toArray());

        // ===
        $obj->setLastname(null);
        $obj->setFirstname("firstname");
        $res04 = ["newPseudo" => "username", "newPass" => "password", "prenom" => "firstname"];
        $this->assertEquals($res04, $obj->toArray());

        // ===
        $obj->setFirstname(null);
        $obj->setCompany("company");
        $res05 = ["newPseudo" => "username", "newPass" => "password", "societe" => "company"];
        $this->assertEquals($res05, $obj->toArray());

        // ===
        $obj->setCompany(null);
        $obj->setAddress("address");
        $res06 = ["newPseudo" => "username", "newPass" => "password", "adresse" => "address"];
        $this->assertEquals($res06, $obj->toArray());

        // ===
        $obj->setAddress(null);
        $obj->setCity("city");
        $res07 = ["newPseudo" => "username", "newPass" => "password", "ville" => "city"];
        $this->assertEquals($res07, $obj->toArray());

        // ===
        $obj->setCity(null);
        $obj->setPostalCode("postalCode");
        $res08 = ["newPseudo" => "username", "newPass" => "password", "codePostal" => "postalCode"];
        $this->assertEquals($res08, $obj->toArray());

        // ===
        $obj->setPostalCode(null);
        $obj->setMobilePhone("mobilePhone");
        $res09 = ["newPseudo" => "username", "newPass" => "password", "mobile" => "mobilePhone"];
        $this->assertEquals($res09, $obj->toArray());

        // ===
        $obj->setMobilePhone(null);
        $obj->setPhone("phone");
        $res10 = ["newPseudo" => "username", "newPass" => "password", "telephone" => "phone"];
        $this->assertEquals($res10, $obj->toArray());

        // ===
        $obj->setPhone(null);
        $obj->setFax("fax");
        $res11 = ["newPseudo" => "username", "newPass" => "password", "fax" => "fax"];
        $this->assertEquals($res11, $obj->toArray());

        // ===
        $obj->setFax(null);
        $obj->setEmail("email");
        $res12 = ["newPseudo" => "username", "newPass" => "password", "email" => "email"];
        $this->assertEquals($res12, $obj->toArray());

        // ===
        $obj->setEmail(null);
        $obj->setBirthdate(new DateTime("2017-09-12 11:00:00"));
        $res13 = ["newPseudo" => "username", "newPass" => "password", "date" => "12092017"];
        $this->assertEquals($res13, $obj->toArray());
    }

}
