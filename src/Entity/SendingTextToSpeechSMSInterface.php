<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Entity;

use DateTime;

/**
 * Sending text-to-speech SMS interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SMSMode\Entity
 */
interface SendingTextToSpeechSMSInterface extends SMSModeEntityInterface {

    /**
     * Get the date envoi.
     *
     * @return DateTime|null Returns the date envoi.
     */
    public function getSMSModeDateEnvoi(): ?DateTime;

    /**
     * Get the language.
     *
     * @return string|null Returns the language.
     */
    public function getSMSModeLanguage(): ?string;

    /**
     * Get the message.
     *
     * @return string|null Returns the message.
     */
    public function getSMSModeMessage(): ?string;

    /**
     * Get the numero.
     *
     * @return string[] Returns the numero.
     */
    public function getSMSModeNumero(): array;

    /**
     * Get the title.
     *
     * @return string|null Returns the title.
     */
    public function getSMSModeTitle(): ?string;
}
