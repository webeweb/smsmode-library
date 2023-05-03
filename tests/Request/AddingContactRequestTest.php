<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Tests\Request;

use WBW\Library\SmsMode\Request\AddingContactRequest;
use WBW\Library\SmsMode\Tests\AbstractTestCase;

/**
 * Adding contact request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Request
 */
class AddingContactRequestTest extends AbstractTestCase {

    /**
     * Test addGroupe()
     *
     * @return void
     */
    public function testAddGroupe(): void {

        $obj = new AddingContactRequest();

        $obj->addGroupe("groupe");
        $this->assertEquals(["groupe"], $obj->getGroupes());
    }

    /**
     * Test setGroupes()
     *
     * @return void
     */
    public function testSetGroupes(): void {

        $obj = new AddingContactRequest();

        $obj->setGroupes(["groupe"]);
        $this->assertEquals(["groupe"], $obj->getGroupes());
    }

    /**
     * Test setOther()
     *
     * @return void
     */
    public function testSetOther(): void {

        $obj = new AddingContactRequest();

        $obj->setOther("other");
        $this->assertEquals("other", $obj->getOther());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/http/1.6/addContact.do", AddingContactRequest::ADDING_CONTACT_RESOURCE_PATH);

        $obj = new AddingContactRequest();

        $this->assertNull($obj->getDate());
        $this->assertEquals([], $obj->getGroupes());
        $this->assertNull($obj->getMobile());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getOther());
        $this->assertNull($obj->getPrenom());
        $this->assertEquals(AddingContactRequest::ADDING_CONTACT_RESOURCE_PATH, $obj->getResourcePath());
        $this->assertNull($obj->getSociete());
    }
}
