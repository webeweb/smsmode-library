<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Tests\Api;

use WBW\Library\SmsMode\Api\SendingTextToSpeechSmsInterface;
use WBW\Library\SmsMode\Tests\AbstractTestCase;

/**
 * Sending text-to-speech SMS interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Api
 */
class SendingTextToSpeechSmsInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("de-DE", SendingTextToSpeechSmsInterface::LANGUAGE_DE);
        $this->assertEquals("en-GB", SendingTextToSpeechSmsInterface::LANGUAGE_EN);
        $this->assertEquals("es-ES", SendingTextToSpeechSmsInterface::LANGUAGE_ES);
        $this->assertEquals("fr-FR", SendingTextToSpeechSmsInterface::LANGUAGE_FR);
    }
}
