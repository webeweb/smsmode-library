<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Request;

use InvalidArgumentException;
use WBW\Library\SMSMode\API\SendingSMSBatchInterface;
use WBW\Library\SMSMode\Model\Attribute\DateTimeDateEnvoiTrait;
use WBW\Library\SMSMode\Model\Attribute\IntegerClasseMsgTrait;
use WBW\Library\SMSMode\Model\Attribute\IntegerNbrMsgTrait;
use WBW\Library\SMSMode\Model\Attribute\StringEmetteurTrait;
use WBW\Library\SMSMode\Model\Attribute\StringNotificationUrlTrait;
use WBW\Library\SMSMode\Model\Attribute\StringRefClientTrait;

/**
 * Sending SMS batch request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Request
 */
class SendingSMSBatchRequest extends AbstractRequest implements SendingSMSBatchInterface {

    use DateTimeDateEnvoiTrait;
    use IntegerClasseMsgTrait;
    use IntegerNbrMsgTrait;
    use StringEmetteurTrait;
    use StringNotificationUrlTrait;
    use StringRefClientTrait;

    /**
     * Sending SMS batch resource path.
     *
     * @var string
     */
    const SENDING_SMS_BATCH_RESOURCE_PATH = "/http/1.6/sendSMSBatch.do";

    /**
     * Fichier.
     *
     * @var string|null
     */
    private $fichier;

    /**
     * Get the fichier.
     *
     * @return string|null Returns the fichier.
     */
    public function getFichier(): ?string {
        return $this->fichier;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath(): string {
        return self::SENDING_SMS_BATCH_RESOURCE_PATH;
    }

    /**
     * Set the fichier.
     *
     * @param string|null $fichier The fichier.
     * @return SendingSMSBatchRequest Returns this sending SMS batch request.
     * @throws InvalidArgumentException Throws an invalid argument exception if the file does not exist.
     */
    public function setFichier(?string $fichier): SendingSMSBatchRequest {
        if (false === realpath($fichier)) {
            throw new InvalidArgumentException(sprintf('File "%s" could not be found.', $fichier));
        }
        $this->fichier = $fichier;
        return $this;
    }
}
