<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Model;

use WBW\Library\SMSMode\Model\DeliveryReport;
use WBW\Library\SMSMode\Model\DeliveryReportResponse;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Delivery report response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model
 */
class DeliveryReportResponseTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DeliveryReportResponse();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());

        $this->assertEquals([], $obj->getDeliveryReports());
    }

    /**
     * Tests the setDeliveryReports() method.
     *
     * @return void
     */
    public function testSetDeliveryReports() {

        // Set a Delivery report mock.
        $deliveryReport = new DeliveryReport();

        $obj = new DeliveryReportResponse();

        $obj->setDeliveryReports([$deliveryReport]);
        $this->assertEquals([$deliveryReport], $obj->getDeliveryReports());
    }
}
