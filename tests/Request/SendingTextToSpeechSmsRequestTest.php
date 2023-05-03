<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Tests\Request;

use InvalidArgumentException;
use Throwable;
use WBW\Library\SmsMode\Api\SendingTextToSpeechSmsInterface;
use WBW\Library\SmsMode\Request\SendingTextToSpeechSmsRequest;
use WBW\Library\SmsMode\Tests\AbstractTestCase;

/**
 * Sending text-to-speech SMS request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Request
 */
class SendingTextToSpeechSmsRequestTest extends AbstractTestCase {

    /**
     * Test addNumero()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testAddNumero(): void {

        $obj = new SendingTextToSpeechSmsRequest();

        $obj->addNumero("33600000000");
        $this->assertEquals(["33600000000"], $obj->getNumero());
    }

    /**
     * Test enumLanguage()
     *
     * @return void
     */
    public function testEnumLanguage(): void {

        $obj = new SendingTextToSpeechSmsRequest();

        $res = $obj->enumLanguage();
        $this->assertCount(4, $res);

        $this->assertContains(SendingTextToSpeechSmsInterface::LANGUAGE_DE, $res);
        $this->assertContains(SendingTextToSpeechSmsInterface::LANGUAGE_EN, $res);
        $this->assertContains(SendingTextToSpeechSmsInterface::LANGUAGE_ES, $res);
        $this->assertContains(SendingTextToSpeechSmsInterface::LANGUAGE_FR, $res);
    }

    /**
     * Test setLanguage()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetLanguage(): void {

        $obj = new SendingTextToSpeechSmsRequest();

        $obj->setLanguage(SendingTextToSpeechSmsInterface::LANGUAGE_FR);
        $this->assertEquals(SendingTextToSpeechSmsInterface::LANGUAGE_FR, $obj->getLanguage());

        $obj->setLanguage(null);
        $this->assertNull($obj->getLanguage());
    }

    /**
     * Test setLanguage()
     *
     * @return void
     */
    public function testSetLanguageWithInvalidArgumentException(): void {

        $obj = new SendingTextToSpeechSmsRequest();

        try {

            $obj->setLanguage("language");
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The language "language" is invalid', $ex->getMessage());
        }
    }

    /**
     * Test setTitle()
     *
     * @return void
     */
    public function testSetTitle(): void {

        $obj = new SendingTextToSpeechSmsRequest();

        $obj->setTitle("title");
        $this->assertEquals("title", $obj->getTitle());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/http/1.6/sendVoiceMessage.do", SendingTextToSpeechSmsRequest::SENDING_TEXT_TO_SPEECH_SMS_RESOURCE_PATH);

        $obj = new SendingTextToSpeechSmsRequest();

        $this->assertNull($obj->getDateEnvoi());
        $this->assertNull($obj->getLanguage());
        $this->assertNull($obj->getMessage());
        $this->assertEquals([], $obj->getNumero());
        $this->assertEquals(SendingTextToSpeechSmsRequest::SENDING_TEXT_TO_SPEECH_SMS_RESOURCE_PATH, $obj->getResourcePath());
        $this->assertNull($obj->getTitle());
    }
}
