<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Model;

use DateTime;
use WBW\Library\SMSMode\Model\CreatingSubAccountRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Creating sub-account request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model
 */
class CreatingSubAccountRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CreatingSubAccountRequest();

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
     * Tests the setAdresse() method.
     *
     * @return void
     */
    public function testSetAdresse() {

        $obj = new CreatingSubAccountRequest();

        $obj->setAdresse("adresse");
        $this->assertEquals("adresse", $obj->getAdresse());
    }

    /**
     * Tests the setCodePostal() method.
     *
     * @return void
     */
    public function testSetCodePostal() {

        $obj = new CreatingSubAccountRequest();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests the setDate() method.
     *
     * @return void
     */
    public function testSetDate() {

        // Set a Date mock.
        $date = new DateTime();

        $obj = new CreatingSubAccountRequest();

        $obj->setDate($date);
        $this->assertSame($date, $obj->getDate());
    }

    /**
     * Tests the setEmail() method.
     *
     * @return void
     */
    public function testSetEmail() {

        $obj = new CreatingSubAccountRequest();

        $obj->setEmail("email");
        $this->assertEquals("email", $obj->getEmail());
    }

    /**
     * Tests the setFax() method.
     *
     * @return void
     */
    public function testSetFax() {

        $obj = new CreatingSubAccountRequest();

        $obj->setFax("fax");
        $this->assertEquals("fax", $obj->getFax());
    }

    /**
     * Tests the setMobile() method.
     *
     * @return void
     */
    public function testSetMobile() {

        $obj = new CreatingSubAccountRequest();

        $obj->setMobile("mobile");
        $this->assertEquals("mobile", $obj->getMobile());
    }

    /**
     * Tests the setNewPass() method.
     *
     * @return void
     */
    public function testSetNewPass() {

        $obj = new CreatingSubAccountRequest();

        $obj->setNewPass("newPass");
        $this->assertEquals("newPass", $obj->getNewPass());
    }

    /**
     * Tests the setNewPseudo() method.
     *
     * @return void
     */
    public function testSetNewPseudo() {

        $obj = new CreatingSubAccountRequest();

        $obj->setNewPseudo("newPseudo");
        $this->assertEquals("newPseudo", $obj->getNewPseudo());
    }

    /**
     * Tests the setNom() method.
     *
     * @return void
     */
    public function testSetNom() {

        $obj = new CreatingSubAccountRequest();

        $obj->setNom("nom");
        $this->assertEquals("nom", $obj->getNom());
    }

    /**
     * Tests the setPrenom() method.
     *
     * @return void
     */
    public function testSetPrenom() {

        $obj = new CreatingSubAccountRequest();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Tests the setReference() method.
     *
     * @return void
     */
    public function testSetReference() {

        $obj = new CreatingSubAccountRequest();

        $obj->setReference("reference");
        $this->assertEquals("reference", $obj->getReference());
    }

    /**
     * Tests the setSociete() method.
     *
     * @return void
     */
    public function testSetSociete() {

        $obj = new CreatingSubAccountRequest();

        $obj->setSociete("societe");
        $this->assertEquals("societe", $obj->getSociete());
    }

    /**
     * Tests the setTelephone() method.
     *
     * @return void
     */
    public function testSetTelephone() {

        $obj = new CreatingSubAccountRequest();

        $obj->setTelephone("telephone");
        $this->assertEquals("telephone", $obj->getTelephone());
    }

    /**
     * Tests the setVille() method.
     *
     * @return void
     */
    public function testSetVille() {

        $obj = new CreatingSubAccountRequest();

        $obj->setVille("ville");
        $this->assertEquals("ville", $obj->getVille());
    }
}
