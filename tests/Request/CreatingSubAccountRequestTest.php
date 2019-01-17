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
     * @throws NullPointerException Throws a null pointer exception.
     */
    public function testToArray() {

        $obj = new CreatingSubAccountRequest();

        $obj->setNewPseudo("newPseudo");
        $obj->setNewPass("newPass");

        $obj->setReference("reference");
        $obj->setNom("nom");
        $obj->setPrenom("prenom");
        $obj->setSociete("societe");
        $obj->setAdresse("adresse");
        $obj->setVille("ville");
        $obj->setCodePostal("codePostal");
        $obj->setMobile("mobile");
        $obj->setTelephone("telephone");
        $obj->setFax("fax");
        $obj->setEmail("email");
        $obj->setDate(new DateTime("2017-09-12 11:00:00"));

        $res = [
            "newPseudo"  => "newPseudo",
            "newPass"    => "newPass",
            "reference"  => "reference",
            "nom"        => "nom",
            "prenom"     => "prenom",
            "societe"    => "societe",
            "adresse"    => "adresse",
            "ville"      => "ville",
            "codePostal" => "codePostal",
            "mobile"     => "mobile",
            "telephone"  => "telephone",
            "fax"        => "fax",
            "email"      => "email",
            "date"       => "12092017",
        ];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArrayWithoutArguments() {

        $obj = new CreatingSubAccountRequest();

        try {

            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The mandatory parameter \"newPseudo\" is missing", $ex->getMessage());
        }

        try {

            $obj->setNewPseudo("newPseudo");
            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The mandatory parameter \"newPass\" is missing", $ex->getMessage());
        }
    }
}
