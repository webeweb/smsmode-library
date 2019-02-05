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

use Exception;
use UnexpectedValueException;
use WBW\Library\SMSMode\API\SendingTextToSpeechSMSInterface;
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

        $this->assertEquals("/http/1.6/sendVoiceMessage.do", SendingTextToSpeechSMSRequest::SENDING_TEXT_TO_SPEECH_SMS_RESOURCE_PATH);

        $obj = new SendingTextToSpeechSMSRequest();

        $this->assertNull($obj->getDateEnvoi());
        $this->assertNull($obj->getLanguage());
        $this->assertNull($obj->getMessage());
        $this->assertEquals([], $obj->getNumero());
        $this->assertEquals(SendingTextToSpeechSMSRequest::SENDING_TEXT_TO_SPEECH_SMS_RESOURCE_PATH, $obj->getResourcePath());
        $this->assertNull($obj->getTitle());
    }

    /**
     * Tests the enumLanguage() method.
     *
     * @return void
     */
    public function testEnumLanguage() {

        $obj = new SendingTextToSpeechSMSRequest();

        $res = $obj->enumLanguage();
        $this->assertCount(4, $res);

        $this->assertContains(SendingTextToSpeechSMSInterface::LANGUAGE_DE, $res);
        $this->assertContains(SendingTextToSpeechSMSInterface::LANGUAGE_EN, $res);
        $this->assertContains(SendingTextToSpeechSMSInterface::LANGUAGE_ES, $res);
        $this->assertContains(SendingTextToSpeechSMSInterface::LANGUAGE_FR, $res);
    }

    /**
     * Tests the setLanguage() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetLanguage() {

        $obj = new SendingTextToSpeechSMSRequest();

        $obj->setLanguage(SendingTextToSpeechSMSInterface::LANGUAGE_FR);
        $this->assertEquals(SendingTextToSpeechSMSInterface::LANGUAGE_FR, $obj->getLanguage());

        $obj->setLanguage(null);
        $this->assertNull($obj->getLanguage());
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
