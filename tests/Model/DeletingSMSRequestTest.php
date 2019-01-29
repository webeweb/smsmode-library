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

use Exception;
use WBW\Library\SMSMode\Model\DeletingSMSRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Deleting SMS request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model
 */
class DeletingSMSRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DeletingSMSRequest();

        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getSmsID());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetNumero() {

        $obj = new DeletingSMSRequest();

        $obj->setNumero("33600000000");
        $this->assertEquals("33600000000", $obj->getNumero());
    }

    /**
     * Tests the setSmsID() method.
     *
     * @return void
     */
    public function testSetSmsID() {

        $obj = new DeletingSMSRequest();

        $obj->setSmsID("smsID");
        $this->assertEquals("smsID", $obj->getSmsID());
    }
}
