<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Entity;

use DateTime;

/**
 * Sending text-to-speech SMS interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Entity
 */
interface SendingTextToSpeechSmsInterface extends SmsModeEntityInterface {

    /**
     * Get the date envoi.
     *
     * @return DateTime|null Returns the date envoi.
     */
    public function getSmsModeDateEnvoi(): ?DateTime;

    /**
     * Get the language.
     *
     * @return string|null Returns the language.
     */
    public function getSmsModeLanguage(): ?string;

    /**
     * Get the message.
     *
     * @return string|null Returns the message.
     */
    public function getSmsModeMessage(): ?string;

    /**
     * Get the numero.
     *
     * @return string[] Returns the numero.
     */
    public function getSmsModeNumero(): array;

    /**
     * Get the title.
     *
     * @return string|null Returns the title.
     */
    public function getSmsModeTitle(): ?string;
}
