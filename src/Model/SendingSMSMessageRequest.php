<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Model;

use DateTime;
use WBW\Library\Core\Argument\ArrayHelper;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\Core\Exception\Pointer\NullPointerException;

/**
 * Sending SMS message request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class SendingSMSMessageRequest extends AbstractRequest {

    /**
     * Classe msg "SMS".
     *
     * @var int
     */
    const CLASSE_MSG_SMS = 4;

    /**
     * Classe msg "SMS Pro".
     *
     * @var int
     */
    const CLASSE_MSG_SMS_PRO = 2;

    /**
     * STOP "always".
     *
     * @var int
     */
    const STOP_ALWAYS = 2;

    /**
     * STOP "only".
     *
     * @var int
     */
    const STOP_ONLY = 1;

    /**
     * Classe msg.
     *
     * @var int
     */
    private $classeMsg;

    /**
     * Date envoi.
     *
     * @var DateTime
     */
    private $dateEnvoi;

    /**
     * Emetteur.
     *
     * @var string
     */
    private $emetteur;

    /**
     * Groupe.
     *
     * @var string
     */
    private $groupe;

    /**
     * Message.
     *
     * @var string
     */
    private $message;

    /**
     * Nbr msg.
     *
     * @var int
     */
    private $nbrMsg;

    /**
     * Notification URL.
     *
     * @var string
     */
    private $notificationURL;

    /**
     * Notification URL reponse.
     *
     * @var string
     */
    private $notificationURLReponse;

    /**
     * Numero.
     *
     * @var array
     */
    private $numero;

    /**
     * Ref client.
     *
     * @var string
     */
    private $refClient;

    /**
     * STOP.
     *
     * @var int
     */
    private $stop;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->setClasseMsg(self::CLASSE_MSG_SMS_PRO);
        $this->setNbrMsg(5);
        $this->setNumero([]);
    }

    /**
     * Get the classe msg.
     *
     * @return int Returns the classe msg.
     */
    public function getClasseMsg() {
        return $this->classeMsg;
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
     * Get the emetteur.
     *
     * @return string Returns the emetteur.
     */
    public function getEmetteur() {
        return $this->emetteur;
    }

    /**
     * Get the groupe.
     *
     * @return string Returns the groupe.
     */
    public function getGroupe() {
        return $this->groupe;
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
     * Get the nbr msg.
     *
     * @return int Returns the nbr msg.
     */
    public function getNbrMsg() {
        return $this->nbrMsg;
    }

    /**
     * Get the notification URL.
     *
     * @return string Returns the notification URL.
     */
    public function getNotificationURL() {
        return $this->notificationURL;
    }

    /**
     * Get the notification URL reponse.
     *
     * @return string Returns the notification URL reponse.
     */
    public function getNotificationURLReponse() {
        return $this->notificationURLReponse;
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
     * Get the ref client.
     *
     * @return string Returns the ref client.
     */
    public function getRefClient() {
        return $this->refClient;
    }

    /**
     * Get the stop.
     *
     * @return int Returns the stop.
     */
    public function getStop() {
        return $this->stop;
    }

    /**
     * Set the classe msg.
     *
     * @param int $classeMsg The classe msg.
     * @return SendingSMSMessageRequest Returns this sending SMS message request.
     */
    public function setClasseMsg($classeMsg) {
        if (false === in_array($classeMsg, [self::CLASSE_MSG_SMS, self::CLASSE_MSG_SMS_PRO])) {
            throw new IllegalArgumentException("The class msg \"" . $classeMsg . "\" is invalid");
        }
        $this->classeMsg = $classeMsg;
        return $this;
    }

    /**
     * Set the date envoi.
     *
     * @param DateTime|null $dateEnvoi The date envoi.
     * @return SendingSMSMessageRequest Returns this sending SMS message request.
     */
    public function setDateEnvoi(DateTime $dateEnvoi = null) {
        $this->dateEnvoi = $dateEnvoi;
        return $this;
    }

    /**
     * Set the emetteur.
     *
     * @param string $emetteur The emetteur.
     * @return SendingSMSMessageRequest Returns this sending SMS message request.
     */
    public function setEmetteur($emetteur) {
        $this->emetteur = $emetteur;
        return $this;
    }

    /**
     * Set the groupe.
     *
     * @param string $groupe The groupe.
     * @return SendingSMSMessageRequest Returns this sending SMS message request.
     */
    public function setGroupe($groupe) {
        $this->groupe = $groupe;
        return $this;
    }

    /**
     * Set the message.
     *
     * @param string $message The message.
     * @return SendingSMSMessageRequest Returns this sending SMS message request.
     */
    public function setMessage($message) {
        $this->message = $message;
        return $this;
    }

    /**
     * Set the nbr msg.
     *
     * @param int $nbrMsg The nbr msg.
     * @return SendingSMSMessageRequest Returns this sending SMS message request.
     */
    public function setNbrMsg($nbrMsg) {
        $this->nbrMsg = $nbrMsg;
        return $this;
    }

    /**
     * Set the notification URL.
     *
     * @param string $notificationURL The notification URL.
     * @return SendingSMSMessageRequest Returns this sending SMS message request.
     */
    public function setNotificationURL($notificationURL) {
        $this->notificationURL = $notificationURL;
        return $this;
    }

    /**
     * Set the notification URL reponse.
     *
     * @param string $notificationURLReponse The notification URL reponse.
     * @return SendingSMSMessageRequest Returns this sending SMS message request.
     */
    public function setNotificationURLReponse($notificationURLReponse) {
        $this->notificationURLReponse = $notificationURLReponse;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string[] $numero The numero.
     * @return SendingSMSMessageRequest Returns this sending SMS message request.
     */
    public function setNumero(array $numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the ref client.
     *
     * @param string $refClient The ref client.
     * @return SendingSMSMessageRequest Returns this sending SMS message request.
     */
    public function setRefClient($refClient) {
        $this->refClient = $refClient;
        return $this;
    }

    /**
     * Set the stop.
     *
     * @param int|null $stop The stop.
     * @return SendingSMSMessageRequest Returns this sending SMS message request.
     */
    public function setStop($stop) {
        if (false === in_array($stop, [self::STOP_ALWAYS, self::STOP_ONLY])) {
            $stop = null;
        }
        $this->stop = $stop;
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

        // Check the mandatory parameters "number" and "group".
        if (0 === count($this->numero) && null === $this->groupe) {
            throw new NullPointerException("The mandatory parameter \"number\" or \"group\" is missing");
        }

        // Add the mandatory parameters.
        $output["message"] = utf8_decode($this->message);
        if (0 < count($this->numero)) {
            $output["numero"] = implode(",", $this->numero);
        } else {
            $output["groupe"] = $this->groupe;
        }

        // Check and add the optional parameters.
        ArrayHelper::set($output, "classe_msg", $this->classeMsg, [null]);
        if (null !== $this->dateEnvoi) {
            $output["date_envoi"] = $this->dateEnvoi->format(self::REQUEST_DATETIME_FORMAT);
        }
        ArrayHelper::set($output, "refClient", $this->refClient, [null]);
        ArrayHelper::set($output, "emetteur", $this->emetteur, [null]);
        ArrayHelper::set($output, "nbr_msg", $this->nbrMsg, [null]);
        ArrayHelper::set($output, "notification_url", $this->notificationURL, [null]);
        ArrayHelper::set($output, "notification_url", $this->notificationURL, [null]);
        ArrayHelper::set($output, "notification_url_reponse", $this->notificationURLReponse, [null]);
        ArrayHelper::set($output, "stop", $this->stop, [null]);

        // Return the output.
        return $output;
    }
}
