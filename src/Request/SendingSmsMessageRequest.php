<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Request;

use InvalidArgumentException;
use UnexpectedValueException;
use WBW\Library\SmsMode\Api\SendingSmsMessageInterface;
use WBW\Library\SmsMode\Serializer\NumeroSerializer;
use WBW\Library\SmsMode\Traits\DateTimes\DateTimeDateEnvoiTrait;
use WBW\Library\SmsMode\Traits\Integers\IntegerClasseMsgTrait;
use WBW\Library\SmsMode\Traits\Integers\IntegerNbrMsgTrait;
use WBW\Library\SmsMode\Traits\Strings\StringEmetteurTrait;
use WBW\Library\SmsMode\Traits\Strings\StringNotificationUrlTrait;
use WBW\Library\SmsMode\Traits\Strings\StringRefClientTrait;
use WBW\Library\Traits\Strings\StringMessageTrait;

/**
 * Sending SMS message request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Request
 */
class SendingSmsMessageRequest extends AbstractRequest implements SendingSmsMessageInterface {

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
     * @return SendingSmsMessageRequest Returns this sending SMS message request.
     * @throws UnexpectedValueException Throws an unexpected value exception if the numero is invalid.
     */
    public function addNumero(string $numero): ?SendingSmsMessageRequest {
        NumeroSerializer::checkNumero($numero);
        $this->numero[] = $numero;
        return $this;
    }

    /**
     * Enumerate the stop.
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
     * @return SendingSmsMessageRequest Returns this sending SMS message request.
     */
    public function setGroupe(?string $groupe): SendingSmsMessageRequest {
        $this->groupe = $groupe;
        return $this;
    }

    /**
     * Set the notification URL reponse.
     *
     * @param string|null $notificationUrlReponse The notification URL reponse.
     * @return SendingSmsMessageRequest Returns this sending SMS message request.
     */
    public function setNotificationUrlReponse(?string $notificationUrlReponse): SendingSmsMessageRequest {
        $this->notificationUrlReponse = $notificationUrlReponse;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string[] $numero The numero.
     * @return SendingSmsMessageRequest Returns this sending SMS message request.
     */
    protected function setNumero(array $numero): SendingSmsMessageRequest {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the stop.
     *
     * @param int|null $stop The stop.
     * @return SendingSmsMessageRequest Returns this sending SMS message request.
     * @throws InvalidArgumentException Throws an invalid argument exception if the stop is invalid.
     */
    public function setStop(?int $stop): SendingSmsMessageRequest {
        if (null !== $stop && false === in_array($stop, $this->enumStop())) {
            throw new InvalidArgumentException(sprintf('The stop "%s" is invalid', $stop));
        }
        $this->stop = $stop;
        return $this;
    }
}
