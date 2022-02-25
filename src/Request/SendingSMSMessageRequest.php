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

use InvalidArgumentException;
use UnexpectedValueException;
use WBW\Library\SMSMode\API\SendingSMSMessageInterface;
use WBW\Library\SMSMode\Model\Attribute\DateTimeDateEnvoiTrait;
use WBW\Library\SMSMode\Model\Attribute\IntegerClasseMsgTrait;
use WBW\Library\SMSMode\Model\Attribute\IntegerNbrMsgTrait;
use WBW\Library\SMSMode\Model\Attribute\StringEmetteurTrait;
use WBW\Library\SMSMode\Model\Attribute\StringNotificationUrlTrait;
use WBW\Library\SMSMode\Model\Attribute\StringRefClientTrait;
use WBW\Library\SMSMode\Serializer\NumeroSerializer;
use WBW\Library\Traits\Strings\StringMessageTrait;

/**
 * Sending SMS message request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SMSMode\Request
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
     * @var string|null
     */
    private $groupe;

    /**
     * Notification URL reponse.
     *
     * @var string|null
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
     * @var int|null
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
    public function addNumero(string $numero): ?SendingSMSMessageRequest {
        NumeroSerializer::checkNumero($numero);
        $this->numero[] = $numero;
        return $this;
    }

    /**
     * Enumerates the stop.
     *
     * @return int[] Returns the stop enumeration.
     */
    public function enumStop(): array {
        return [
            self::STOP_ALWAYS,
            self::STOP_ONLY,
        ];
    }

    /**
     * Get the groupe.
     *
     * @return string|null Returns the groupe.
     */
    public function getGroupe(): ?string {
        return $this->groupe;
    }

    /**
     * Get the notification URL reponse.
     *
     * @return string|null Returns the notification URL reponse.
     */
    public function getNotificationUrlReponse(): ?string {
        return $this->notificationUrlReponse;
    }

    /**
     * Get the numero.
     *
     * @return string[] Returns the numero.
     */
    public function getNumero(): array {
        return $this->numero;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath(): string {
        return self::SENDING_SMS_MESSAGE_RESOURCE_PATH;
    }

    /**
     * Get the stop.
     *
     * @return int|null Returns the stop.
     */
    public function getStop(): ?int {
        return $this->stop;
    }

    /**
     * Set the groupe.
     *
     * @param string|null $groupe The groupe.
     * @return SendingSMSMessageRequest Returns this sending SMS message request.
     */
    public function setGroupe(?string $groupe): SendingSMSMessageRequest {
        $this->groupe = $groupe;
        return $this;
    }

    /**
     * Set the notification URL reponse.
     *
     * @param string|null $notificationUrlReponse The notification URL reponse.
     * @return SendingSMSMessageRequest Returns this sending SMS message request.
     */
    public function setNotificationUrlReponse(?string $notificationUrlReponse): SendingSMSMessageRequest {
        $this->notificationUrlReponse = $notificationUrlReponse;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string[] $numero The numero.
     * @return SendingSMSMessageRequest Returns this sending SMS message request.
     */
    protected function setNumero(array $numero): SendingSMSMessageRequest {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the stop.
     *
     * @param int|null $stop The stop.
     * @return SendingSMSMessageRequest Returns this sending SMS message request.
     * @throws InvalidArgumentException Throws an invalid argument exception if the stop is invalid.
     */
    public function setStop(?int $stop): SendingSMSMessageRequest {
        if (null !== $stop && false === in_array($stop, $this->enumStop())) {
            throw new InvalidArgumentException(sprintf('The stop "%s" is invalid', $stop));
        }
        $this->stop = $stop;
        return $this;
    }
}
