<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Response;

use WBW\Library\SMSMode\Response\SendingSMSBatchResponse;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Sending SMS Batch response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Response
 */
class SendingSMSBatchResponseTest extends AbstractTestCase {

    /**
     Tests setCampagneID()
     *
     * @return void
     */
    public function testSetCampagneID(): void {

        $obj = new SendingSMSBatchResponse();

        $obj->setCampagneID("campagneID");
        $this->assertEquals("campagneID", $obj->getCampagneID());
    }

    /**
     Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SendingSMSBatchResponse();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());

        $this->assertNull($obj->getCampagneID());
    }
}
