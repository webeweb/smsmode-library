<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Model\Request;

use WBW\Library\SMSMode\Model\Request\AddingContactRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Adding contact request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model\Request
 */
class AddingContactRequestTest extends AbstractTestCase {

    /**
     * Tests the addGroupe() method.
     *
     * @return void
     */
    public function testAddGroupe() {

        $obj = new AddingContactRequest();

        $obj->addGroupe("groupe");
        $this->assertEquals(["groupe"], $obj->getGroupes());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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

    /**
     * Tests the setGroupes() method.
     *
     * @return void
     */
    public function testSetGroupes() {

        $obj = new AddingContactRequest();

        $obj->setGroupes(["groupe"]);
        $this->assertEquals(["groupe"], $obj->getGroupes());
    }

    /**
     * Tests the setOther() method.
     *
     * @return void
     */
    public function testSetOther() {

        $obj = new AddingContactRequest();

        $obj->setOther("other");
        $this->assertEquals("other", $obj->getOther());
    }
}
