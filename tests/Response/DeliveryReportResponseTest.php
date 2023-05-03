<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Tests\Response;

use WBW\Library\SmsMode\Model\DeliveryReport;
use WBW\Library\SmsMode\Response\DeliveryReportResponse;
use WBW\Library\SmsMode\Tests\AbstractTestCase;

/**
 * Delivery report response test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Response
 */
class DeliveryReportResponseTest extends AbstractTestCase {

    /**
     * Test addDeliveryReport()
     *
     * @return void
     */
    public function testAddDeliveryReports(): void {

        // Set a Delivery report mock.
        $deliveryReport = new DeliveryReport();

        $obj = new DeliveryReportResponse();

        $obj->addDeliveryReport($deliveryReport);
        $this->assertEquals([$deliveryReport], $obj->getDeliveryReports());
    }

    /**
     * Test hasDeliveryReport()
     *
     * @return void
     */
    public function testHasDeliveryReport(): void {

        // Set a Delivery report mock.
        $deliveryReport = new DeliveryReport();

        $obj = new DeliveryReportResponse();

        $obj->addDeliveryReport($deliveryReport);
        $this->assertTrue($obj->hasDeliveryReport());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DeliveryReportResponse();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());

        $this->assertEquals([], $obj->getDeliveryReports());
        $this->assertFalse($obj->hasDeliveryReport());
    }
}
