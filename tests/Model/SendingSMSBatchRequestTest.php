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

use DateTime;
use Exception;
use UnexpectedValueException;
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

    /**
     * Tests the setClasseMsg() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetClasseMsg() {

        $obj = new SendingSMSBatchRequest();

        $obj->setClasseMsg(SendingSMSBatchRequest::CLASSE_MSG_SMS);
        $this->assertEquals(SendingSMSBatchRequest::CLASSE_MSG_SMS, $obj->getClasseMsg());
    }

    /**
     * Tests the setClasseMsg() method.
     *
     * @return void
     */
    public function testSetClasseMsgWithUnexpectedValueException() {

        $obj = new SendingSMSBatchRequest();

        try {

            $obj->setClasseMsg(-1);
        } catch (Exception $ex) {

            $this->assertInstanceOf(UnexpectedValueException::class, $ex);
            $this->assertEquals("The classe msg \"-1\" is invalid", $ex->getMessage());
        }
    }

    /**
     * Tests the setDateEnvoi() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEnvoi() {

        // Set a End date mock.
        $endDate = new DateTime();

        $obj = new SendingSMSBatchRequest();

        $obj->setDateEnvoi($endDate);
        $this->assertSame($endDate, $obj->getDateEnvoi());
    }

    /**
     * Tests the setEmetteur() method.
     *
     * @return void
     */
    public function testSetEmetteur() {

        $obj = new SendingSMSBatchRequest();

        $obj->setEmetteur("emetteur");
        $this->assertEquals("emetteur", $obj->getEmetteur());
    }

    /**
     * Tests the setNbrMsg() method.
     *
     * @return void
     */
    public function testSetNbrMsg() {

        $obj = new SendingSMSBatchRequest();

        $obj->setNbrMsg(1);
        $this->assertEquals(1, $obj->getNbrMsg());
    }

    /**
     * Tests the setNotificationURL() method.
     *
     * @return void
     */
    public function testSetNotificationURL() {

        $obj = new SendingSMSBatchRequest();

        $obj->setNotificationURL("notificationURL");
        $this->assertEquals("notificationURL", $obj->getNotificationURL());
    }

    /**
     * Tests the setRefClient() method.
     *
     * @return void
     */
    public function testSetRefClient() {

        $obj = new SendingSMSBatchRequest();

        $obj->setRefClient("refClient");
        $this->assertEquals("refClient", $obj->getRefClient());
    }
}
