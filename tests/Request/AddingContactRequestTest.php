<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Request;

use DateTime;
use Exception;
use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\SMSMode\API\Request\AddingContactRequestInterface;
use WBW\Library\SMSMode\Request\AddingContactRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Adding contact request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Request
 */
class AddingContactRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AddingContactRequest();

        $this->assertEquals(AddingContactRequestInterface::ADDING_CONTACT_RESOURCE_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getDate());
        $this->assertEquals([], $obj->getGroupes());
        $this->assertNull($obj->getMobile());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getOther());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getSociete());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     * @throws NullPointerException Throws a null pointer exception.
     */
    public function testToArray() {

        $obj = new AddingContactRequest();

        $obj->setNom("nom");
        $obj->setMobile("mobile");

        $obj->setPrenom("prenom");
        $obj->setGroupes(["groupe1", "groupe2"]);
        $obj->setSociete("societe");
        $obj->setOther("other");
        $obj->setDate(new DateTime("2017-09-12 11:00:00"));

        $res = [
            "nom"     => "nom",
            "mobile"  => "mobile",
            "prenom"  => "prenom",
            "groupes" => "groupe1,groupe2",
            "societe" => "societe",
            "other"   => "other",
            "date"    => "12092017",
        ];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArrayWithoutArguments() {

        $obj = new AddingContactRequest();

        try {

            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The mandatory parameter \"nom\" is missing", $ex->getMessage());
        }

        try {

            $obj->setNom("nom");
            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The mandatory parameter \"mobile\" is missing", $ex->getMessage());
        }
    }
}
