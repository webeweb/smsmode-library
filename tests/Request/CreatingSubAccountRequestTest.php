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

use Exception;
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
     * Tests setAdresse()
     *
     * @return void
     */
    public function testSetAdresse(): void {

        $obj = new CreatingSubAccountRequest();

        $obj->setAdresse("adresse");
        $this->assertEquals("adresse", $obj->getAdresse());
    }

    /**
     * Tests setCodePostal()
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new CreatingSubAccountRequest();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests setEmail()
     *
     * @return void
     */
    public function testSetEmail(): void {

        $obj = new CreatingSubAccountRequest();

        $obj->setEmail("email");
        $this->assertEquals("email", $obj->getEmail());
    }

    /**
     * Tests setFax()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFax(): void {

        $obj = new CreatingSubAccountRequest();

        $obj->setFax("33100000000");
        $this->assertEquals("33100000000", $obj->getFax());
    }

    /**
     * Tests setNewPass()
     *
     * @return void
     */
    public function testSetNewPass(): void {

        $obj = new CreatingSubAccountRequest();

        $obj->setNewPass("newPass");
        $this->assertEquals("newPass", $obj->getNewPass());
    }

    /**
     * Tests setNewPseudo()
     *
     * @return void
     */
    public function testSetNewPseudo(): void {

        $obj = new CreatingSubAccountRequest();

        $obj->setNewPseudo("newPseudo");
        $this->assertEquals("newPseudo", $obj->getNewPseudo());
    }

    /**
     * Tests setTelephone()
     *
     * @return void
     */
    public function testSetTelephone(): void {

        $obj = new CreatingSubAccountRequest();

        $obj->setTelephone("33100000000");
        $this->assertEquals("33100000000", $obj->getTelephone());
    }

    /**
     * Tests setVille()
     *
     * @return void
     */
    public function testSetVille(): void {

        $obj = new CreatingSubAccountRequest();

        $obj->setVille("ville");
        $this->assertEquals("ville", $obj->getVille());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
}
