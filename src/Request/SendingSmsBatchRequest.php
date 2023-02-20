<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Request;

use InvalidArgumentException;
use WBW\Library\SmsMode\Api\SendingSmsBatchInterface;
use WBW\Library\SmsMode\Traits\DateTimes\DateTimeDateEnvoiTrait;
use WBW\Library\SmsMode\Traits\Integers\IntegerClasseMsgTrait;
use WBW\Library\SmsMode\Traits\Integers\IntegerNbrMsgTrait;
use WBW\Library\SmsMode\Traits\Strings\StringEmetteurTrait;
use WBW\Library\SmsMode\Traits\Strings\StringNotificationUrlTrait;
use WBW\Library\SmsMode\Traits\Strings\StringRefClientTrait;

/**
 * Sending SMS batch request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Request
 */
class SendingSmsBatchRequest extends AbstractRequest implements SendingSmsBatchInterface {

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
     * @return SendingSmsBatchRequest Returns this sending SMS batch request.
     * @throws InvalidArgumentException Throws an invalid argument exception if the file does not exist.
     */
    public function setFichier(?string $fichier): SendingSmsBatchRequest {
        if (false === realpath($fichier)) {
            throw new InvalidArgumentException(sprintf('File "%s" could not be found.', $fichier));
        }
        $this->fichier = $fichier;
        return $this;
    }
}
