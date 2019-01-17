<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Request;

use DateTime;
use WBW\Library\Core\Argument\ArrayHelper;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\SMSMode\API\Request\SendingSMSMessageRequestInterface;

/**
 * Sending SMS message request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Request
 */
class SendingSMSMessageRequest extends AbstractRequest implements SendingSMSMessageRequestInterface {

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
     * {@inheritdoc}
     */
    public function getClasseMsg() {
        return $this->classeMsg;
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
    public function getEmetteur() {
        return $this->emetteur;
    }

    /**
     * {@inheritdoc}
     */
    public function getGroupe() {
        return $this->groupe;
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
    public function getNbrMsg() {
        return $this->nbrMsg;
    }

    /**
     * {@inheritdoc}
     */
    public function getNotificationURL() {
        return $this->notificationURL;
    }

    /**
     * {@inheritdoc}
     */
    public function getNotificationURLReponse() {
        return $this->notificationURLReponse;
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
    public function getRefClient() {
        return $this->refClient;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath() {
        return self::SENDING_SMS_MESSAGE_RESOURCE_PATH;
    }

    /**
     * {@inheritdoc}
     */
    public function getStop() {
        return $this->stop;
    }

    /**
     * {@inheritdoc}
     */
    public function setClasseMsg($classeMsg) {
        if (false === in_array($classeMsg, [self::CLASSE_MSG_SMS, self::CLASSE_MSG_SMS_PRO])) {
            throw new IllegalArgumentException("The class msg \"" . $classeMsg . "\" is invalid");
        }
        $this->classeMsg = $classeMsg;
        return $this;
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
    public function setEmetteur($emetteur) {
        $this->emetteur = $emetteur;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setGroupe($groupe) {
        $this->groupe = $groupe;
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
    public function setNbrMsg($nbrMsg) {
        $this->nbrMsg = $nbrMsg;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setNotificationURL($notificationURL) {
        $this->notificationURL = $notificationURL;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setNotificationURLReponse($notificationURLReponse) {
        $this->notificationURLReponse = $notificationURLReponse;
        return $this;
    }

    /**
     *{@inheritdoc}
     */
    public function setNumero(array $numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setRefClient($refClient) {
        $this->refClient = $refClient;
        return $this;
    }

    /**
     * {@inheritdoc}
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
