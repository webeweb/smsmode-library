<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\API\Request;

use DateTime;
use WBW\Library\SMSMode\API\RequestInterface;

/**
 * Sending text-to-speech SMS request interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\API\Request
 */
interface SendingTextToSpeechSMSRequestInterface extends RequestInterface {

    /**
     * Sending text-to-speech SMS request.
     *
     * @var string
     */
    const SENDING_TEXT_TO_SPEECH_SMS_RESOURCE_PATH = "/1.6/sendVoiceMessage.do";

    /**
     * Get the date envoi.
     *
     * @return DateTime Returns the date envoi.
     */
    public function getDateEnvoi();

    /**
     * Get the language.
     *
     * @return string Returns the language.
     */
    public function getLanguage();

    /**
     * Get the message.
     *
     * @return string Returns the message.
     */
    public function getMessage();

    /**
     * Get the numero.
     *
     * @return string[] Returns the numero.
     */
    public function getNumero();

    /**
     * Get the title.
     *
     * @return string Returns the title.
     */
    public function getTitle();

    /**
     * Set the date envoi.
     *
     * @param DateTime|null $dateEnvoi The date envoi.
     * @return SendingTextToSpeechSMSRequestInterface Returns this sending text-to-speech request.
     */
    public function setDateEnvoi(DateTime $dateEnvoi = null);

    /**
     * Set the language.
     *
     * @param string $language The language.
     * @return SendingTextToSpeechSMSRequestInterface Returns this sending text-to-speech request.
     */
    public function setLanguage($language);

    /**
     * Set the message.
     *
     * @param string $message The message.
     * @return SendingTextToSpeechSMSRequestInterface Returns this sending text-to-speech request.
     */
    public function setMessage($message);

    /**
     * Set the numero.
     *
     * @param string[] $numero The numero.
     * @return SendingTextToSpeechSMSRequestInterface Returns this sending text-to-speech request.
     */
    public function setNumero(array $numero);

    /**
     * Set the title.
     *
     * @param string $title The title.
     * @return SendingTextToSpeechSMSRequestInterface Returns this sending text-to-speech request.
     */
    public function setTitle($title);
}
