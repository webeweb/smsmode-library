<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Api;

/**
 * Sending text-to-speech SMS interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Api
 */
interface SendingTextToSpeechSmsInterface {

    /**
     * Language "de-DE".
     *
     * @var string
     */
    const LANGUAGE_DE = "de-DE";

    /**
     * Language "en-GB".
     *
     * @var string
     */
    const LANGUAGE_EN = "en-GB";

    /**
     * Language "es-ES".
     *
     * @var string
     */
    const LANGUAGE_ES = "es-ES";

    /**
     * Language "fr-FR".
     *
     * @var string
     */
    const LANGUAGE_FR = "fr-FR";
}
