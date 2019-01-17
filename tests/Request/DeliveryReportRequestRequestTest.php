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

use Exception;
use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\SMSMode\API\Request\DeliveryReportRequestInterface;
use WBW\Library\SMSMode\Request\DeliveryReportRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Delivery report request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Request
 */
class DeliveryReportRequestRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DeliveryReportRequest();

        $this->assertEquals(DeliveryReportRequestInterface::DELIVERY_REPORT_RESOURCE_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getSmsID());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     * @throws NullPointerException Throws a null pointer exception.
     */
    public function testToArray() {

        $obj = new DeliveryReportRequest();

        $obj->setSmsID("smsID");

        $res = [
            "smsID" => "smsID",
        ];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArrayWithoutArguments() {

        $obj = new DeliveryReportRequest();

        try {

            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The mandatory parameter \"smsID\" is missing", $ex->getMessage());
        }
    }
}
