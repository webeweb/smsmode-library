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
use WBW\Library\Core\Argument\ArrayHelper;
use WBW\Library\Core\Exception\Pointer\NullPointerException;

/**
 * Sending text-to-speech SMS request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class SendingTextToSpeechSMSRequest extends AbstractRequest {

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
     */
    public function setLanguage($language) {
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
    public function setNumero(array $numero) {
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

    /**
     *  {@inhertidoc}
     */
    public function toArray() {

        // Initialize the output.
        $output = [];

        // Check the mandatory parameter "message".
        if (null === $this->message) {
            throw new NullPointerException("The mandatory parameter \"message\" is missing");
        }

        // Check the mandatory parameter "number".
        if (0 === count($this->numero)) {
            throw new NullPointerException("The mandatory parameter \"numero\" is missing");
        }

        // Add the rmandatory parameters.
        $output["message"] = utf8_decode($this->message);
        $output["numero"]  = implode(",", $this->numero);

        // Check and add the optional parameters.
        ArrayHelper::set($output, "title", $this->title, [null]);
        if (null !== $this->dateEnvoi) {
            $output["date_envoi"] = $this->dateEnvoi->format(self::REQUEST_DATETIME_FORMAT);
        }
        ArrayHelper::set($output, "language", $this->language, [null]);

        // Return the output.
        return $output;
    }
}
