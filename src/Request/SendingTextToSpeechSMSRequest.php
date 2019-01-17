<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Request;

use DateTime;
use WBW\Library\Core\Argument\ArrayHelper;
use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\SMSMode\API\Request\SendingTextToSpeechSMSRequestInterface;

/**
 * Sending text-to-speech SMS request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Request
 */
class SendingTextToSpeechSMSRequest extends AbstractRequest implements SendingTextToSpeechSMSRequestInterface {

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
     * {@inheritdoc}
     */
    public function getDateEnvoi() {
        return $this->dateEnvoi;
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguage() {
        return $this->language;
    }

    /**
     * {@inheritdoc}
     */
    public function getMessage() {
        return $this->message;
    }

    /**
     * {@inheritdoc}
     */
    public function getNumero() {
        return $this->numero;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath() {
        return self::SENDING_TEXT_TO_SPEECH_SMS_RESOURCE_PATH;
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * {@inheritdoc}
     */
    public function setDateEnvoi(DateTime $dateEnvoi = null) {
        $this->dateEnvoi = $dateEnvoi;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setLanguage($language) {
        $this->language = $language;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setMessage($message) {
        $this->message = $message;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setNumero(array $numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * {@inheritdoc}
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
