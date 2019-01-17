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

use DateTime;
use Exception;
use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\SMSMode\API\Request\SendingTextToSpeechSMSRequestInterface;
use WBW\Library\SMSMode\Request\SendingTextToSpeechSMSRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Sending text-to-speech SMS request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Request
 */
class SendingTextToSpeechSMSRequestTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SendingTextToSpeechSMSRequest();

        $this->assertEquals(SendingTextToSpeechSMSRequestInterface::SENDING_TEXT_TO_SPEECH_SMS_RESOURCE_PATH, $obj->getResourcePath());

        $this->assertNull($obj->getDateEnvoi());
        $this->assertNull($obj->getLanguage());
        $this->assertNull($obj->getMessage());
        $this->assertEquals([], $obj->getNumero());
        $this->assertNull($obj->getTitle());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     * @throws NullPointerException Throws a null pointer exception.
     * @throws IllegalArgumentException Throws an illegal argument exception.
     */
    public function testToArray() {

        $obj = new SendingTextToSpeechSMSRequest();

        $obj->setMessage("message");
        $obj->setNumero(["numero1", "numero2"]);

        $obj->setTitle("title");
        $obj->setDateEnvoi(new DateTime("2019-01-17 19:00:00"));
        $obj->setLanguage("language");

        $res = [
            "message"    => "message",
            "numero"     => "numero1,numero2",
            "title"      => "title",
            "date_envoi" => "17012019-19:00",
            "language"   => "language",
        ];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArrayWithoutArguments() {

        $obj = new SendingTextToSpeechSMSRequest();

        try {

            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The mandatory parameter \"message\" is missing", $ex->getMessage());
        }

        try {

            $obj->setMessage("message");
            $obj->toArray();
        } catch (Exception $ex) {

            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The mandatory parameter \"numero\" is missing", $ex->getMessage());
        }
    }
}
