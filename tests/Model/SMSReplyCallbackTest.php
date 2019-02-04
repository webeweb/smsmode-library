<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Model;

use WBW\Library\SMSMode\Model\SMSReplyCallback;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

class SMSReplyCallbackTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SMSReplyCallback();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());

        $this->assertNull($obj->getDateReception());
        $this->assertNull($obj->getEmetteur());
        $this->assertNull($obj->getMessage());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getRefClient());
        $this->assertNull($obj->getResponseID());
        $this->assertNull($obj->getSmsID());
    }

    /**
     * Tests the setResponseID() method.
     *
     * @return void
     */
    public function testSetResponseID() {

        $obj = new SMSReplyCallback();

        $obj->setResponseID("responseID");
        $this->assertEquals("responseID", $obj->getResponseID());
    }
}
