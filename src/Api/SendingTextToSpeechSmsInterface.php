<?php

declare(strict_types = 1);

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
    public const LANGUAGE_DE = "de-DE";

    /**
     * Language "en-GB".
     *
     * @var string
     */
    public const LANGUAGE_EN = "en-GB";

    /**
     * Language "es-ES".
     *
     * @var string
     */
    public const LANGUAGE_ES = "es-ES";

    /**
     * Language "fr-FR".
     *
     * @var string
     */
    public const LANGUAGE_FR = "fr-FR";
}
