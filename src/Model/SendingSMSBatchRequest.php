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

use UnexpectedValueException;
use WBW\Library\SMSMode\Traits\DateEnvoiTrait;
use WBW\Library\SMSMode\Traits\EmetteurTrait;
use WBW\Library\SMSMode\Traits\RefClientTrait;

/**
 * Sending SMS batch request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class SendingSMSBatchRequest extends AbstractRequest {

    use DateEnvoiTrait;
    use EmetteurTrait;
    use RefClientTrait;

    /**
     * Classe msg "SMS".
     *
     * @var int
     */
    const CLASSE_MSG_SMS = SendingSMSMessageRequest::CLASSE_MSG_SMS;

    /**
     * Classe msg "SMS Pro".
     *
     * @var int
     */
    const CLASSE_MSG_SMS_PRO = SendingSMSMessageRequest::CLASSE_MSG_SMS_PRO;

    /**
     * Sending SMS batch resource path.
     *
     * @var string
     */
    const SENDING_SMS_BATCH_RESOURCE_PATH = "/http/1.6/sendSMSBatch.do";

    /**
     * Classe msg.
     *
     * @var int
     */
    private $classeMsg;

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
     * Get the classe msg.
     *
     * @return int Returns the classe msg.
     */
    public function getClasseMsg() {
        return $this->classeMsg;
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
     * {@inheritdoc}
     */
    public function getResourcePath() {
        return self::SENDING_SMS_BATCH_RESOURCE_PATH;
    }

    /**
     * Set the classe msg.
     *
     * @param int $classeMsg The classe msg.
     * @return SendingSMSBatchRequest Returns this sending SMS batch request.
     * @throws UnexpectedValueException Throws an unexpected value exception exception if the classe msg is invalid.
     */
    public function setClasseMsg($classeMsg) {
        if (false === in_array($classeMsg, [self::CLASSE_MSG_SMS, self::CLASSE_MSG_SMS_PRO])) {
            throw new UnexpectedValueException(sprintf("The classe msg \"%s\" is invalid", $classeMsg));
        }
        $this->classeMsg = $classeMsg;
        return $this;
    }

    /**
     * Set the nbr msg.
     *
     * @param int $nbrMsg The nbr msg.
     * @return SendingSMSBatchRequest Returns this sending SMS batch request.
     */
    public function setNbrMsg($nbrMsg) {
        $this->nbrMsg = $nbrMsg;
        return $this;
    }

    /**
     * Set the notification URL.
     *
     * @param string $notificationURL The notification URL.
     * @return SendingSMSBatchRequest Returns this sending SMS batch request.
     */
    public function setNotificationURL($notificationURL) {
        $this->notificationURL = $notificationURL;
        return $this;
    }
}
