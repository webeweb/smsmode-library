<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Request;

use Exception;
use InvalidArgumentException;
use WBW\Library\SMSMode\API\SendingTextToSpeechSMSInterface;
use WBW\Library\SMSMode\Request\SendingTextToSpeechSMSRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Sending text-to-speech SMS request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SMSMode\Tests\Request
 */
class SendingTextToSpeechSMSRequestTest extends AbstractTestCase {

    /**
     * Tests addNumero()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testAddNumero(): void {

        $obj = new SendingTextToSpeechSMSRequest();

        $obj->addNumero("33600000000");
        $this->assertEquals(["33600000000"], $obj->getNumero());
    }

    /**
     * Tests enumLanguage()
     *
     * @return void
     */
    public function testEnumLanguage(): void {

        $obj = new SendingTextToSpeechSMSRequest();

        $res = $obj->enumLanguage();
        $this->assertCount(4, $res);

        $this->assertContains(SendingTextToSpeechSMSInterface::LANGUAGE_DE, $res);
        $this->assertContains(SendingTextToSpeechSMSInterface::LANGUAGE_EN, $res);
        $this->assertContains(SendingTextToSpeechSMSInterface::LANGUAGE_ES, $res);
        $this->assertContains(SendingTextToSpeechSMSInterface::LANGUAGE_FR, $res);
    }

    /**
     * Tests setLanguage()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetLanguage(): void {

        $obj = new SendingTextToSpeechSMSRequest();

        $obj->setLanguage(SendingTextToSpeechSMSInterface::LANGUAGE_FR);
        $this->assertEquals(SendingTextToSpeechSMSInterface::LANGUAGE_FR, $obj->getLanguage());

        $obj->setLanguage(null);
        $this->assertNull($obj->getLanguage());
    }

    /**
     * Tests setLanguage()
     *
     * @return void
     */
    public function testSetLanguageWithInvalidArgumentException(): void {

        $obj = new SendingTextToSpeechSMSRequest();

        try {

            $obj->setLanguage("language");
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The language "language" is invalid', $ex->getMessage());
        }
    }

    /**
     * Tests setTitle()
     *
     * @return void
     */
    public function testSetTitle(): void {

        $obj = new SendingTextToSpeechSMSRequest();

        $obj->setTitle("title");
        $this->assertEquals("title", $obj->getTitle());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/http/1.6/sendVoiceMessage.do", SendingTextToSpeechSMSRequest::SENDING_TEXT_TO_SPEECH_SMS_RESOURCE_PATH);

        $obj = new SendingTextToSpeechSMSRequest();

        $this->assertNull($obj->getDateEnvoi());
        $this->assertNull($obj->getLanguage());
        $this->assertNull($obj->getMessage());
        $this->assertEquals([], $obj->getNumero());
        $this->assertEquals(SendingTextToSpeechSMSRequest::SENDING_TEXT_TO_SPEECH_SMS_RESOURCE_PATH, $obj->getResourcePath());
        $this->assertNull($obj->getTitle());
    }
}
