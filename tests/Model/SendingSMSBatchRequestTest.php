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

use WBW\Library\SMSMode\Model\SendingSMSBatchRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Sending SMS batch request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model
 */
class SendingSMSBatchRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("/http/1.6/sendSMSBatch.do", SendingSMSBatchRequest::SENDING_SMS_BATCH_RESOURCE_PATH);

        $this->assertEquals(4, SendingSMSBatchRequest::CLASSE_MSG_SMS);
        $this->assertEquals(2, SendingSMSBatchRequest::CLASSE_MSG_SMS_PRO);

        $obj = new SendingSMSBatchRequest();

        $this->assertNull($obj->getClasseMsg());
        $this->assertNull($obj->getDateEnvoi());
        $this->assertNull($obj->getEmetteur());
        $this->assertNull($obj->getNbrMsg());
        $this->assertNull($obj->getNotificationURL());
        $this->assertNull($obj->getRefClient());
        $this->assertEquals(SendingSMSBatchRequest::SENDING_SMS_BATCH_RESOURCE_PATH, $obj->getResourcePath());
    }
}
