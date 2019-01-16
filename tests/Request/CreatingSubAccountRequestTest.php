<?php

/*
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
use WBW\Library\SMSMode\API\Request\CreatingSubAccountRequestInterface;
use WBW\Library\SMSMode\Request\CreatingSubAccountRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Creating sub-account request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Request
 */
class CreatingSubAccountRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CreatingSubAccountRequest();

        $this->assertEquals(CreatingSubAccountRequestInterface::CREATING_SUB_ACCOUNT_RESOURCE_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getAdresse());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getEmail());
        $this->assertNull($obj->getFax());
        $this->assertNull($obj->getMobile());
        $this->assertNull($obj->getNewPass());
        $this->assertNull($obj->getNewPseudo());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getReference());
        $this->assertNull($obj->getSociete());
        $this->assertNull($obj->getTelephone());
        $this->assertNull($obj->getVille());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new CreatingSubAccountRequest();
        $obj->setNewPseudo("newPseudo");
        $obj->setNewPass("newPass");

        $obj->setNewPass("newPass");
        $res = ["newPseudo" => "newPseudo", "newPass" => "newPass"];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArrayWithAdresse() {

        $obj = new CreatingSubAccountRequest();
        $obj->setNewPseudo("newPseudo");
        $obj->setNewPass("newPass");

        $obj->setAdresse("adresse");
        $res = ["newPseudo" => "newPseudo", "newPass" => "newPass", "adresse" => "adresse"];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArrayWithCodePostal() {

        $obj = new CreatingSubAccountRequest();
        $obj->setNewPseudo("newPseudo");
        $obj->setNewPass("newPass");

        $obj->setCodePostal("codePostal");
        $res = ["newPseudo" => "newPseudo", "newPass" => "newPass", "codePostal" => "codePostal"];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArrayWithDate() {

        $obj = new CreatingSubAccountRequest();
        $obj->setNewPseudo("newPseudo");
        $obj->setNewPass("newPass");

        $obj->setDate(new DateTime("2017-09-12 11:00:00"));
        $res = ["newPseudo" => "newPseudo", "newPass" => "newPass", "date" => "12092017"];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArrayWithEmail() {

        $obj = new CreatingSubAccountRequest();
        $obj->setNewPseudo("newPseudo");
        $obj->setNewPass("newPass");

        $obj->setEmail("email");
        $res = ["newPseudo" => "newPseudo", "newPass" => "newPass", "email" => "email"];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArrayWithFax() {

        $obj = new CreatingSubAccountRequest();
        $obj->setNewPseudo("newPseudo");
        $obj->setNewPass("newPass");

        $obj->setFax("fax");
        $res = ["newPseudo" => "newPseudo", "newPass" => "newPass", "fax" => "fax"];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArrayWithMobile() {

        $obj = new CreatingSubAccountRequest();
        $obj->setNewPseudo("newPseudo");
        $obj->setNewPass("newPass");

        $obj->setMobile("mobile");
        $res = ["newPseudo" => "newPseudo", "newPass" => "newPass", "mobile" => "mobile"];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArrayWithNom() {

        $obj = new CreatingSubAccountRequest();
        $obj->setNewPseudo("newPseudo");
        $obj->setNewPass("newPass");

        $obj->setNom("nom");
        $res = ["newPseudo" => "newPseudo", "newPass" => "newPass", "nom" => "nom"];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArrayWithPrenom() {

        $obj = new CreatingSubAccountRequest();
        $obj->setNewPseudo("newPseudo");
        $obj->setNewPass("newPass");

        $obj->setPrenom("prenom");
        $res = ["newPseudo" => "newPseudo", "newPass" => "newPass", "prenom" => "prenom"];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArrayWithReference() {

        $obj = new CreatingSubAccountRequest();
        $obj->setNewPseudo("newPseudo");
        $obj->setNewPass("newPass");

        // ===
        $obj->setReference("reference");
        $res = ["newPseudo" => "newPseudo", "newPass" => "newPass", "reference" => "reference"];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArrayWithSociete() {

        $obj = new CreatingSubAccountRequest();
        $obj->setNewPseudo("newPseudo");
        $obj->setNewPass("newPass");

        $obj->setSociete("societe");
        $res = ["newPseudo" => "newPseudo", "newPass" => "newPass", "societe" => "societe"];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArrayWithTelephone() {

        $obj = new CreatingSubAccountRequest();
        $obj->setNewPseudo("newPseudo");
        $obj->setNewPass("newPass");

        $obj->setTelephone("telephone");
        $res = ["newPseudo" => "newPseudo", "newPass" => "newPass", "telephone" => "telephone"];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArrayWithVille() {

        $obj = new CreatingSubAccountRequest();
        $obj->setNewPseudo("newPseudo");
        $obj->setNewPass("newPass");

        $obj->setVille("ville");
        $res = ["newPseudo" => "newPseudo", "newPass" => "newPass", "ville" => "ville"];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArrayWithoutNewPass() {

        $obj = new CreatingSubAccountRequest();

        try {

            $obj->setNewPseudo("newPseudo");
            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The mandatory parameter \"newPass\" is missing", $ex->getMessage());
        }
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArrayWithoutNewPseudo() {

        $obj = new CreatingSubAccountRequest();

        try {

            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The mandatory parameter \"newPseudo\" is missing", $ex->getMessage());
        }
    }
}
