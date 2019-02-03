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

use UnexpectedValueException;
use WBW\Library\SMSMode\Exception\InvalidNumeroException;
use WBW\Library\SMSMode\Traits\ClasseMsgTrait;
use WBW\Library\SMSMode\Traits\DateEnvoiTrait;
use WBW\Library\SMSMode\Traits\EmetteurTrait;
use WBW\Library\SMSMode\Traits\MessageTrait;
use WBW\Library\SMSMode\Traits\NbrMsgTrait;
use WBW\Library\SMSMode\Traits\NotificationUrlTrait;
use WBW\Library\SMSMode\Traits\RefClientTrait;

/**
 * Sending SMS message request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class SendingSMSMessageRequest extends AbstractRequest {

    use ClasseMsgTrait;
    use DateEnvoiTrait;
    use EmetteurTrait;
    use MessageTrait;
    use NbrMsgTrait;
    use NotificationUrlTrait;
    use RefClientTrait;

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
    const SENDING_SMS_MESSAGE_RESOURCE_PATH = "/http/1.6/sendSMS.do";

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
     * Groupe.
     *
     * @var string
     */
    private $groupe;

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
        $this->setNumero([]);
    }

    /**
     * Add a numero.
     *
     * @param string $numero The numero.
     * @return SendingSMSMessageRequest Returns this sending SMS message request.
     * @throws UnexpectedValueException Throws an unexpected value exception if the numero is invalid.
     */
    public function addNumero($numero) {
        static::checkNumero($numero);
        $this->numero[] = $numero;
        return $this;
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
     * {@inheritdoc}
     */
    public function getResourcePath() {
        return self::SENDING_SMS_MESSAGE_RESOURCE_PATH;
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
    protected function setNumero(array $numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the stop.
     *
     * @param int|null $stop The stop.
     * @return SendingSMSMessageRequest Returns this sending SMS message request.
     * @throws \UnexpectedValueException Throws an unexpected value exception if the classe msg is invalid.
     */
    public function setStop($stop) {
        if (false === in_array($stop, [self::STOP_ALWAYS, self::STOP_ONLY])) {
            throw new UnexpectedValueException(sprintf("The stop \"%s\" is invalid", $stop));
        }
        $this->stop = $stop;
        return $this;
    }
}
