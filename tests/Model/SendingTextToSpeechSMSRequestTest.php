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
use WBW\Library\SMSMode\Model\SendingTextToSpeechSMSRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Sending text-to-speech SMS request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Model
 */
class SendingTextToSpeechSMSRequestTest extends AbstractTestCase {

    /**
     * Tests the addNumero() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testAddNumero() {

        $obj = new SendingTextToSpeechSMSRequest();

        $obj->addNumero("33600000000");
        $this->assertEquals(["33600000000"], $obj->getNumero());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SendingTextToSpeechSMSRequest();

        $this->assertNull($obj->getDateEnvoi());
        $this->assertNull($obj->getLanguage());
        $this->assertNull($obj->getMessage());
        $this->assertEquals([], $obj->getNumero());
        $this->assertNull($obj->getTitle());
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

        $obj = new SendingTextToSpeechSMSRequest();

        $obj->setDateEnvoi($endDate);
        $this->assertSame($endDate, $obj->getDateEnvoi());
    }

    /**
     * Tests the setLanguage() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetLanguage() {

        $obj = new SendingTextToSpeechSMSRequest();

        $obj->setLanguage("fr-FR");
        $this->assertEquals("fr-FR", $obj->getLanguage());
    }

    /**
     * Tests the setLanguage() method.
     *
     * @return void
     */
    public function testSetLanguageWithUnexpectedValueException() {

        $obj = new SendingTextToSpeechSMSRequest();

        try {

            $obj->setLanguage("language");
        } catch (Exception $ex) {

            $this->assertInstanceOf(UnexpectedValueException::class, $ex);
            $this->assertEquals("The language \"language\" is invalid", $ex->getMessage());
        }
    }

    /**
     * Tests the setMessage() method.
     *
     * @return void
     */
    public function testSetMessage() {

        $obj = new SendingTextToSpeechSMSRequest();

        $obj->setMessage("message");
        $this->assertEquals("message", $obj->getMessage());
    }

    /**
     * Tests the setTitle() method.
     *
     * @return void
     */
    public function testSetTitle() {

        $obj = new SendingTextToSpeechSMSRequest();

        $obj->setTitle("title");
        $this->assertEquals("title", $obj->getTitle());
    }
}
