<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Model;

use DateTime;
use UnexpectedValueException;
use WBW\Library\SMSMode\API\SendingTextToSpeechSMSInterface;
use WBW\Library\SMSMode\Exception\InvalidNumeroException;

/**
 * Sending text-to-speech SMS request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class SendingTextToSpeechSMSRequest extends AbstractRequest implements SendingTextToSpeechSMSInterface {

    /**
     * Date envoi.
     *
     * @var DateTime
     */
    private $dateEnvoi;

    /**
     * Lnaguage.
     *
     * @var string
     */
    private $language;

    /**
     * Message.
     *
     * @var string
     */
    private $message;

    /**
     * Numero.
     *
     * @var string[]
     */
    private $numero;

    /**
     * Title.
     *
     * @var string
     */
    private $title;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->setNumero([]);
    }

    /**
     * Add a numero.
     *
     * @param string $numero The numero.
     * @return SendingTextToSpeechSMSRequest Returns this sending text-to-speech SMS request.
     * @throws UnexpectedValueException Throws an unexpected value exception if the numero is invalid.
     */
    public function addNumero($numero) {
        static::checkNumero($numero);
        $this->numero[] = $numero;
        return $this;
    }

    /**
     * Get the date envoi.
     *
     * @return DateTime Returns the date envoi.
     */
    public function getDateEnvoi() {
        return $this->dateEnvoi;
    }

    /**
     * Get the language.
     *
     * @return string Returns the language.
     */
    public function getLanguage() {
        return $this->language;
    }

    /**
     * Get the message.
     *
     * @return string Returns the message.
     */
    public function getMessage() {
        return $this->message;
    }

    /**
     * Get the numero.
     *
     * @return string[] Returns the numero.
     */
    public function getNumero() {
        return $this->numero;
    }

    /**
     * Get the title.
     *
     * @return string Returns the title.
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set the date envoi.
     *
     * @param DateTime|null $dateEnvoi The date envoi.
     * @return SendingTextToSpeechSMSRequest Returns this sending text-to-speech request.
     */
    public function setDateEnvoi(DateTime $dateEnvoi = null) {
        $this->dateEnvoi = $dateEnvoi;
        return $this;
    }

    /**
     * Set the language.
     *
     * @param string $language The language.
     * @return SendingTextToSpeechSMSRequest Returns this sending text-to-speech request.
     * @throws UnexpectedValueException Throws an unexpected value exception if the language is invalid.
     */
    public function setLanguage($language) {
        if (false === in_array($language, [self::LANGUAGE_FR, self::LANGUAGE_EN, self::LANGUAGE_DE, self::LANGUAGE_ES])) {
            throw new UnexpectedValueException(sprintf("The language \"%s\" is invalid", $language));
        }
        $this->language = $language;
        return $this;
    }

    /**
     * Set the message.
     *
     * @param string $message The message.
     * @return SendingTextToSpeechSMSRequest Returns this sending text-to-speech request.
     */
    public function setMessage($message) {
        $this->message = $message;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string[] $numero The numero.
     * @return SendingTextToSpeechSMSRequest Returns this sending text-to-speech request.
     */
    protected function setNumero(array $numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the title.
     *
     * @param string $title The title.
     * @return SendingTextToSpeechSMSRequest Returns this sending text-to-speech request.
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }
}
