<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Model\Request;

use UnexpectedValueException;
use WBW\Library\SMSMode\API\SendingSMSBatchInterface;
use WBW\Library\SMSMode\Model\AbstractRequest;
use WBW\Library\SMSMode\Traits\ClasseMsgTrait;
use WBW\Library\SMSMode\Traits\DateEnvoiTrait;
use WBW\Library\SMSMode\Traits\EmetteurTrait;
use WBW\Library\SMSMode\Traits\NbrMsgTrait;
use WBW\Library\SMSMode\Traits\NotificationUrlTrait;
use WBW\Library\SMSMode\Traits\RefClientTrait;

/**
 * Sending SMS batch request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model\Request
 */
class SendingSMSBatchRequest extends AbstractRequest implements SendingSMSBatchInterface {

    use ClasseMsgTrait;
    use DateEnvoiTrait;
    use EmetteurTrait;
    use NbrMsgTrait;
    use NotificationUrlTrait;
    use RefClientTrait;

    /**
     * Sending SMS batch resource path.
     *
     * @var string
     */
    const SENDING_SMS_BATCH_RESOURCE_PATH = "/http/1.6/sendSMSBatch.do";

    /**
     * Fichier.
     *
     * @var string
     */
    private $fichier;

    /**
     * Get the fichier.
     *
     * @return string Returns the fichier.
     */
    public function getFichier() {
        return $this->fichier;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath() {
        return self::SENDING_SMS_BATCH_RESOURCE_PATH;
    }

    /**
     * Set the fichier.
     *
     * @param string $fichier The fichier.
     * @return SendingSMSBatchRequest Returns this sending SMS batch request.
     * @throws UnexpectedValueException Throws an unexpected value exception if the file does not exist.
     */
    public function setFichier($fichier) {
        if (false === realpath($fichier)) {
            throw new UnexpectedValueException(sprintf("File \"%s\" could not be found.", $fichier));
        }
        $this->fichier = $fichier;
        return $this;
    }
}
