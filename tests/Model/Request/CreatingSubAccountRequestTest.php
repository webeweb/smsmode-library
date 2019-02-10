<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Model\Request;

use Exception;
use WBW\Library\SMSMode\Model\Request\CreatingSubAccountRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Creating sub-account request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model\Request
 */
class CreatingSubAccountRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("/http/1.6/createSubAccount.do", CreatingSubAccountRequest::CREATING_SUB_ACCOUNT_RESOURCE_PATH);

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
        $this->assertEquals(CreatingSubAccountRequest::CREATING_SUB_ACCOUNT_RESOURCE_PATH, $obj->getResourcePath());
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
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFax() {

        $obj = new CreatingSubAccountRequest();

        $obj->setFax("33100000000");
        $this->assertEquals("33100000000", $obj->getFax());
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
     * Tests the setTelephone() method.
     *
     * @return void
     */
    public function testSetTelephone() {

        $obj = new CreatingSubAccountRequest();

        $obj->setTelephone("33100000000");
        $this->assertEquals("33100000000", $obj->getTelephone());
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
