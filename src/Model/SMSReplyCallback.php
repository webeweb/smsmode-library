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

/**
 * SMS reply callback.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class SMSReplyCallback extends AbstractResponse {

    /**
     * Parameter "date reception".
     *
     * @var string
     */
    const PARAMETER_DATE_RECEPTION = "date_reception";

    /**
     * Parameter "emetteur".
     *
     * @var string
     */
    const PARAMETER_EMETTEUR = "emetteur";

    /**
     * Parameter "message".
     *
     * @var string
     */
    const PARAMETER_MESSAGE = "message";

    /**
     * Parameter "numero".
     *
     * @var string
     */
    const PARAMETER_NUMERO = "numero";

    /**
     * Parameter "ref client".
     *
     * @var string
     */
    const PARAMETER_REF_CLIENT = "refClient";

    /**
     * Parameter "response ID".
     *
     * @var string
     */
    const PARAMETER_RESPONSE_ID = "responseID";

    /**
     * Parameter "SMS ID".
     *
     * @var string
     */
    const PARAMETER_SMS_ID = "smsID";

    /**
     * Date reception.
     *
     * @var DateTime
     */
    private $dateReception;

    /**
     * Emetteur.
     *
     * @var string
     */
    private $emetteur;

    /**
     * Message.
     *
     * @var string
     */
    private $message;

    /**
     * Numero.
     *
     * @var string
     */
    private $numero;

    /**
     * Ref client.
     *
     * @var string
     */
    private $refClient;

    /**
     * Response ID.
     *
     * @var string
     */
    private $responseID;

    /**
     * SMS ID.
     *
     * @var string
     */
    private $smsID;

    /**
     * Get the date reception.
     *
     * @return DateTime Returns the date reception.
     */
    public function getDateReception() {
        return $this->dateReception;
    }

    /**
     * Get the emetteur.
     *
     * @return string Returns the emetteur.
     */
    public function getEmetteur() {
        return $this->emetteur;
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
     * @return string Returns the numero.
     */
    public function getNumero() {
        return $this->numero;
    }

    /**
     * Get the ref client.
     *
     * @return string Returns the ref client.
     */
    public function getRefClient() {
        return $this->refClient;
    }

    /**
     * Get the response ID.
     *
     * @return string Returns the response ID.
     */
    public function getResponseID() {
        return $this->responseID;
    }

    /**
     * Get the SMS ID.
     *
     * @return string Returns the SMS ID.
     */
    public function getSmsID() {
        return $this->smsID;
    }

    /**
     * Set the date reception.
     *
     * @param DateTime $dateReception The date reception.
     * @return SMSReplyCallback Returns this SMS reply callback.
     */
    public function setDateReception(DateTime $dateReception = null) {
        $this->dateReception = $dateReception;
        return $this;
    }

    /**
     * Set the emetteur.
     *
     * @param string $emetteur The emetteur.
     * @return SMSReplyCallback Returns this SMS reply callback.
     */
    public function setEmetteur($emetteur) {
        $this->emetteur = $emetteur;
        return $this;
    }

    /**
     * Set the message.
     *
     * @param string $message The message.
     * @return SMSReplyCallback Returns this SMS reply callback.
     */
    public function setMessage($message) {
        $this->message = $message;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string $numero The numero.
     * @return SMSReplyCallback Returns this SMS reply callback.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the ref client.
     *
     * @param string $refClient The ref client.
     * @return SMSReplyCallback Returns this SMS reply callback.
     */
    public function setRefClient($refClient) {
        $this->refClient = $refClient;
        return $this;
    }

    /**
     * Set the response ID.
     *
     * @param string $responseID The response ID.
     * @return SMSReplyCallback Returns this SMS reply callback.
     */
    public function setResponseID($responseID) {
        $this->responseID = $responseID;
        return $this;
    }

    /**
     * Set the SMS ID.
     *
     * @param string $smsID The SMS ID.
     * @return SMSReplyCallback Returns this SMS reply callback.
     */
    public function setSmsID($smsID) {
        $this->smsID = $smsID;
        return $this;
    }
}
