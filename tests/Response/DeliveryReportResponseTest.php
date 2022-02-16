<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Response;

use WBW\Library\SMSMode\Model\DeliveryReport;
use WBW\Library\SMSMode\Response\DeliveryReportResponse;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Delivery report response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Response
 */
class DeliveryReportResponseTest extends AbstractTestCase {

    /**
     * Tests addDeliveryReport()
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
     * Tests hasDeliveryReport()
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
     * Tests __construct()
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
