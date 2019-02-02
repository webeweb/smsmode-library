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
use WBW\Library\SMSMode\Model\SMSReplyCallback;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

class SMSReplyCallbackTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("date_reception", SMSReplyCallback::PARAMETER_DATE_RECEPTION);
        $this->assertEquals("emetteur", SMSReplyCallback::PARAMETER_EMETTEUR);
        $this->assertEquals("message", SMSReplyCallback::PARAMETER_MESSAGE);
        $this->assertEquals("numero", SMSReplyCallback::PARAMETER_NUMERO);
        $this->assertEquals("refClient", SMSReplyCallback::PARAMETER_REF_CLIENT);
        $this->assertEquals("responseID", SMSReplyCallback::PARAMETER_RESPONSE_ID);
        $this->assertEquals("smsID", SMSReplyCallback::PARAMETER_SMS_ID);

        $obj = new SMSReplyCallback();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());

        $this->assertNull($obj->getDateReception());
        $this->assertNull($obj->getEmetteur());
        $this->assertNull($obj->getMessage());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getRefClient());
        $this->assertNull($obj->getResponseID());
        $this->assertNull($obj->getSmsID());
    }

    /**
     * Tests the setDateReception() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateReception() {

        // Set a Date/time mock.
        $dateReception = new DateTime();

        $obj = new SMSReplyCallback();

        $obj->setDateReception($dateReception);
        $this->assertSame($dateReception, $obj->getDateReception());
    }

    /**
     * Tests the setEmetteur() method.
     *
     * @return void
     */
    public function testSetEmetteur() {

        $obj = new SMSReplyCallback();

        $obj->setEmetteur("emetteur");
        $this->assertEquals("emetteur", $obj->getEmetteur());
    }

    /**
     * Tests the setMessage() method.
     *
     * @return void
     */
    public function testSetMessage() {

        $obj = new SMSReplyCallback();

        $obj->setMessage("message");
        $this->assertEquals("message", $obj->getMessage());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero() {

        $obj = new SMSReplyCallback();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Tests the setRefClient() method.
     *
     * @return void
     */
    public function testSetRefClient() {

        $obj = new SMSReplyCallback();

        $obj->setRefClient("refClient");
        $this->assertEquals("refClient", $obj->getRefClient());
    }

    /**
     * Tests the setResponseID() method.
     *
     * @return void
     */
    public function testSetResponseID() {

        $obj = new SMSReplyCallback();

        $obj->setResponseID("responseID");
        $this->assertEquals("responseID", $obj->getResponseID());
    }

    /**
     * Tests the setSmsID() method.
     *
     * @return void
     */
    public function testSetSmsID() {

        $obj = new SMSReplyCallback();

        $obj->setSmsID("smsID");
        $this->assertEquals("smsID", $obj->getSmsID());
    }
}
