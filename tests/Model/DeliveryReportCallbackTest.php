<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Tests\Model;

use WBW\Library\SmsMode\Model\DeliveryReportCallback;
use WBW\Library\SmsMode\Tests\AbstractTestCase;

/**
 * Delivery report callback test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Model
 */
class DeliveryReportCallbackTest extends AbstractTestCase {

    /**
     * Test setMccMnc()
     *
     * @return void
     */
    public function testSetMccMnc(): void {

        $obj = new DeliveryReportCallback();

        $obj->setMccMnc(0);
        $this->assertEquals(0, $obj->getMccMnc());
    }

    /**
     * Test setStatus()
     *
     * @return void
     */
    public function testSetStatus(): void {

        $obj = new DeliveryReportCallback();

        $obj->setStatus(20801);
        $this->assertEquals(20801, $obj->getStatus());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
}
