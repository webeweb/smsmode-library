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

use WBW\Library\SMSMode\Model\SendingSMSBatchResponse;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Sending SMS Batch response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model
 */
class SendingSMSBatchResponseTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SendingSMSBatchResponse();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());

        $this->assertNull($obj->getCampagneID());
    }

    /**
     * Tests the setCampagneID() method.
     *
     * @return void
     */
    public function testSetCampagneID() {

        $obj = new SendingSMSBatchResponse();

        $obj->setCampagneID("campagneID");
        $this->assertEquals("campagneID", $obj->getCampagneID());
    }
}
