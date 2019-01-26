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

use DateTime;
use Exception;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\SMSMode\Model\SendingSMSMessageRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Sending SMS message request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model
 */
class SendingSMSMessageRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SendingSMSMessageRequest();

        $this->assertEquals(SendingSMSMessageRequest::CLASSE_MSG_SMS_PRO, $obj->getClasseMsg());
        $this->assertNull($obj->getDateEnvoi());
        $this->assertNull($obj->getEmetteur());
        $this->assertNull($obj->getGroupe());
        $this->assertNull($obj->getMessage());
        $this->assertEquals(5, $obj->getNbrMsg());
        $this->assertNull($obj->getNotificationURL());
        $this->assertNull($obj->getNotificationURLReponse());
        $this->assertEquals([], $obj->getNumero());
        $this->assertNull($obj->getRefClient());
        $this->assertNull($obj->getStop());
    }

    /**
     * Tests the setClasseMsg() method.
     *
     * @return void
     */
    public function testSetClasseMsg() {

        $obj = new SendingSMSMessageRequest();

        $obj->setClasseMsg(SendingSMSMessageRequest::CLASSE_MSG_SMS);
        $this->assertEquals(SendingSMSMessageRequest::CLASSE_MSG_SMS, $obj->getClasseMsg());
    }

    /**
     * Tests the setClasseMsg() method.
     *
     * @return void
     */
    public function testSetClasseMsgWithIllegalArgumentExcpetion() {

        $obj = new SendingSMSMessageRequest();

        try {

            $obj->setClasseMsg(-1);
        } catch (Exception $ex) {

            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertEquals("The classe msg \"-1\" is invalid", $ex->getMessage());
        }
    }

    /**
     * Tests the setDateEnvoi() method.
     *
     * @return void
     */
    public function testSetDateEnvoi() {

        // Set a End date mock.
        $endDate = new DateTime();

        $obj = new SendingSMSMessageRequest();

        $obj->setDateEnvoi($endDate);
        $this->assertSame($endDate, $obj->getDateEnvoi());
    }

    /**
     * Tests the setEmetteur() method.
     *
     * @return void
     */
    public function testSetEmetteur() {

        $obj = new SendingSMSMessageRequest();

        $obj->setEmetteur("emetteur");
        $this->assertEquals("emetteur", $obj->getEmetteur());
    }

    /**
     * Tests the setGroupe() method.
     *
     * @return void
     */
    public function testSetGroupe() {

        $obj = new SendingSMSMessageRequest();

        $obj->setGroupe("groupe");
        $this->assertEquals("groupe", $obj->getGroupe());
    }

    /**
     * Tests the setMessage() method.
     *
     * @return void
     */
    public function testSetMessage() {

        $obj = new SendingSMSMessageRequest();

        $obj->setMessage("message");
        $this->assertEquals("message", $obj->getMessage());
    }

    /**
     * Tests the setNbrMsg() method.
     *
     * @return void
     */
    public function testSetNbrMsg() {

        $obj = new SendingSMSMessageRequest();

        $obj->setNbrMsg(1);
        $this->assertEquals(1, $obj->getNbrMsg());
    }

    /**
     * Tests the setNotificationURL() method.
     *
     * @return void
     */
    public function testSetNotificationURL() {

        $obj = new SendingSMSMessageRequest();

        $obj->setNotificationURL("notificationURL");
        $this->assertEquals("notificationURL", $obj->getNotificationURL());
    }

    /**
     * Tests the setNotificationURLReponse() method.
     *
     * @return void
     */
    public function testSetNotificationURLReponse() {

        $obj = new SendingSMSMessageRequest();

        $obj->setNotificationURLReponse("notificationURLReponse");
        $this->assertEquals("notificationURLReponse", $obj->getNotificationURLReponse());
    }

    /**
     * Tests the setRefClient() method.
     *
     * @return void
     */
    public function testSetRefClient() {

        $obj = new SendingSMSMessageRequest();

        $obj->setRefClient("refClient");
        $this->assertEquals("refClient", $obj->getRefClient());
    }

    /**
     * Tests the setStop() method.
     *
     * @return void
     */
    public function testSetStop() {

        $obj = new SendingSMSMessageRequest();

        $obj->setStop(SendingSMSMessageRequest::STOP_ALWAYS);
        $this->assertEquals(SendingSMSMessageRequest::STOP_ALWAYS, $obj->getStop());
    }

    /**
     * Tests the setStop() method.
     *
     * @return void
     */
    public function testSetStopWithIllegalArgumentExcpetion() {

        $obj = new SendingSMSMessageRequest();

        try {

            $obj->setStop(-1);
        } catch (Exception $ex) {

            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertEquals("The stop \"-1\" is invalid", $ex->getMessage());
        }
    }
}
