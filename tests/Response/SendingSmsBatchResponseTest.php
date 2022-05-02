<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Tests\Response;

use WBW\Library\SmsMode\Response\SendingSmsBatchResponse;
use WBW\Library\SmsMode\Tests\AbstractTestCase;

/**
 * Sending SMS Batch response test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Response
 */
class SendingSmsBatchResponseTest extends AbstractTestCase {

    /**
     * Tests setCampagneID()
     *
     * @return void
     */
    public function testSetCampagneID(): void {

        $obj = new SendingSmsBatchResponse();

        $obj->setCampagneID("campagneID");
        $this->assertEquals("campagneID", $obj->getCampagneID());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SendingSmsBatchResponse();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());

        $this->assertNull($obj->getCampagneID());
    }
}
