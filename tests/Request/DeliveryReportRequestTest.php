<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Request;

use WBW\Library\SMSMode\Request\DeliveryReportRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Delivery report request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Request
 */
class DeliveryReportRequestTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/http/1.6/compteRendu.do", DeliveryReportRequest::DELIVERY_REPORT_RESOURCE_PATH);

        $obj = new DeliveryReportRequest();

        $this->assertEquals(DeliveryReportRequest::DELIVERY_REPORT_RESOURCE_PATH, $obj->getResourcePath());
        $this->assertNull($obj->getSmsID());
    }
}
