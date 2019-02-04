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

use WBW\Library\SMSMode\Model\DeliveryReportCallback;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Delivery report callback test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model
 */
class DeliveryReportCallbackTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DeliveryReportCallback();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getNumero());

        $this->assertNull($obj->getDateReception());
        $this->assertNull($obj->getMccMnc());
        $this->assertNull($obj->getRefClient());
        $this->assertNull($obj->getStatus());
        $this->assertNull($obj->getSmsID());
    }

    /**
     * Tests the setMccMnc() method.
     *
     * @return void
     */
    public function testSetMccMnc() {

        $obj = new DeliveryReportCallback();

        $obj->setMccMnc("mccMnc");
        $this->assertEquals("mccMnc", $obj->getMccMnc());
    }

    /**
     * Tests the setStatus() method.
     *
     * @return void
     */
    public function testSetStatus() {

        $obj = new DeliveryReportCallback();

        $obj->setStatus(20801);
        $this->assertEquals(20801, $obj->getStatus());
    }
}
