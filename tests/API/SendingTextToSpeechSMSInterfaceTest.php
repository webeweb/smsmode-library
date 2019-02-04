<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\API;

use WBW\Library\SMSMode\API\SendingTextToSpeechSMSInterface;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Sending text-to-speech SMS interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\API
 */
class SendingTextToSpeechSMSInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("de-DE", SendingTextToSpeechSMSInterface::LANGUAGE_DE);
        $this->assertEquals("en-GB", SendingTextToSpeechSMSInterface::LANGUAGE_EN);
        $this->assertEquals("es-ES", SendingTextToSpeechSMSInterface::LANGUAGE_ES);
        $this->assertEquals("fr-FR", SendingTextToSpeechSMSInterface::LANGUAGE_FR);
    }
}
