<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Model\Request;

use InvalidArgumentException;
use UnexpectedValueException;
use WBW\Library\SMSMode\API\SendingSMSMessageInterface;
use WBW\Library\SMSMode\Model\Attribute\DateTimeDateEnvoiTrait;
use WBW\Library\SMSMode\Model\Attribute\IntegerClasseMsgTrait;
use WBW\Library\SMSMode\Model\Attribute\IntegerNbrMsgTrait;
use WBW\Library\SMSMode\Model\Attribute\StringEmetteurTrait;
use WBW\Library\SMSMode\Model\Attribute\StringMessageTrait;
use WBW\Library\SMSMode\Model\Attribute\StringNotificationUrlTrait;
use WBW\Library\SMSMode\Model\Attribute\StringRefClientTrait;
use WBW\Library\SMSMode\Model\AbstractRequest;
use WBW\Library\SMSMode\Serializer\NumeroSerializer;

/**
 * Sending SMS message request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model\Request
 */
class SendingSMSMessageRequest extends AbstractRequest implements SendingSMSMessageInterface {

    use DateTimeDateEnvoiTrait;
    use IntegerClasseMsgTrait;
    use IntegerNbrMsgTrait;
    use StringEmetteurTrait;
    use StringMessageTrait;
    use StringNotificationUrlTrait;
    use StringRefClientTrait;

    /**
     * Sending SMS message resource path.
     *
     * @var string
     */
    const SENDING_SMS_MESSAGE_RESOURCE_PATH = "/http/1.6/sendSMS.do";

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
    private $notificationUrlReponse;

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
        NumeroSerializer::checkNumero($numero);
        $this->numero[] = $numero;
        return $this;
    }

    /**
     * Enumerates the stop.
     *
     * @return array Returns the stop enumeration.
     */
    public function enumStop() {
        return [
            self::STOP_ALWAYS,
            self::STOP_ONLY,
        ];
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
    public function getNotificationUrlReponse() {
        return $this->notificationUrlReponse;
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
     * @param string $notificationUrlReponse The notification URL reponse.
     * @return SendingSMSMessageRequest Returns this sending SMS message request.
     */
    public function setNotificationUrlReponse($notificationUrlReponse) {
        $this->notificationUrlReponse = $notificationUrlReponse;
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
     * @throws InvalidArgumentException Throws an invalid argument exception if the classe msg is invalid.
     */
    public function setStop($stop) {
        if (null !== $stop && false === in_array($stop, $this->enumStop())) {
            throw new InvalidArgumentException(sprintf("The stop \"%s\" is invalid", $stop));
        }
        $this->stop = $stop;
        return $this;
    }
}
