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
 * Sending SMS request interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\API\Request
 */
interface SendingSMSMessageRequestInterface extends RequestInterface {

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
     * Sending SMS message resource path.
     *
     * @var string
     */
    const SENDING_SMS_MESSAGE_RESOURCE_PATH = "/1.6/sendSMS.do";

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
     * Get the classe msg.
     *
     * @return int Returns the classe msg.
     */
    public function getClasseMsg();

    /**
     * Get the date envoi.
     *
     * @return DateTime Returns the date envoi.
     */
    public function getDateEnvoi();

    /**
     * Get the emetteur.
     *
     * @return string Returns the emetteur.
     */
    public function getEmetteur();

    /**
     * Get the groupe.
     *
     * @return string Returns the groupe.
     */
    public function getGroupe();

    /**
     * Get the message.
     *
     * @return string Returns the message.
     */
    public function getMessage();

    /**
     * Get the nbr msg.
     *
     * @return int Returns the nbr msg.
     */
    public function getNbrMsg();

    /**
     * Get the notification URL.
     *
     * @return string Returns the notification URL.
     */
    public function getNotificationURL();

    /**
     * Get the notification URL reponse.
     *
     * @return string Returns the notification URL reponse.
     */
    public function getNotificationURLReponse();

    /**
     * Get the numero.
     *
     * @return string[] Returns the numero.
     */
    public function getNumero();

    /**
     * Get the ref client.
     *
     * @return int Returns the ref client.
     */
    public function getRefClient();

    /**
     * Get the stop.
     *
     * @return int Returns the stop.
     */
    public function getStop();

    /**
     * Set the classe msg.
     *
     * @param int $classeMsg The classe msg.
     * @return SendingSMSMessageRequestInterface Returns this sending SMS message request.
     */
    public function setClasseMsg($classeMsg);

    /**
     * Set the date envoi.
     *
     * @param DateTime|null $dateEnvoi The date envoi.
     * @return SendingSMSMessageRequestInterface Returns this sending SMS message request.
     */
    public function setDateEnvoi(DateTime $dateEnvoi = null);

    /**
     * Set the emetteur.
     *
     * @param string $emetteur The emetteur.
     * @return SendingSMSMessageRequestInterface Returns this sending SMS message request.
     */
    public function setEmetteur($emetteur);

    /**
     * Set the groupe.
     *
     * @param string $groupe The groupe.
     * @return SendingSMSMessageRequestInterface Returns this sending SMS message request.
     */
    public function setGroupe($groupe);

    /**
     * Set the message.
     *
     * @param string $message The message.
     * @return SendingSMSMessageRequestInterface Returns this sending SMS message request.
     */
    public function setMessage($message);

    /**
     * Set the nbr msg.
     *
     * @param int $nbrMsg The nbr msg.
     * @return SendingSMSMessageRequestInterface Returns this sending SMS message request.
     */
    public function setNbrMsg($nbrMsg);

    /**
     * Set the notification URL.
     *
     * @param string $notificationURL The notification URL.
     * @return SendingSMSMessageRequestInterface Returns this sending SMS message request.
     */
    public function setNotificationURL($notificationURL);

    /**
     * Set the notification URL reponse.
     *
     * @param string $notificationURLReponse The notification URL reponse.
     * @return SendingSMSMessageRequestInterface Returns this sending SMS message request.
     */
    public function setNotificationURLReponse($notificationURLReponse);

    /**
     * Set the numero.
     *
     * @param string[] $numero The numero.
     * @return SendingSMSMessageRequestInterface Returns this sending SMS message request.
     */
    public function setNumero(array $numero);

    /**
     * Set the ref client.
     *
     * @param string $refClient The ref client.
     * @return SendingSMSMessageRequestInterface Returns this sending SMS message request.
     */
    public function setRefClient($refClient);

    /**
     * Set the stop.
     *
     * @param int|null $stop The stop.
     * @return SendingSMSMessageRequestInterface Returns this sending SMS message request.
     */
    public function setStop($stop);
}
