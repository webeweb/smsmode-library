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

use UnexpectedValueException;
use WBW\Library\SmsMode\Serializer\NumeroSerializer;
use WBW\Library\SmsMode\Traits\Strings\StringNumeroTrait;
use WBW\Library\SmsMode\Traits\Strings\StringSmsIDTrait;

/**
 * Deleting SMS request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Request
 */
class DeletingSmsRequest extends AbstractRequest {

    use StringNumeroTrait;
    use StringSmsIDTrait;

    /**
     * Deleting SMS resource path.
     *
     * @var string
     */
    const DELETING_SMS_RESOURCE_PATH = "/http/1.6/deleteSMS.do";

    /**
     * {@inheritdoc}
     */
    public function getResourcePath(): string {
        return self::DELETING_SMS_RESOURCE_PATH;
    }

    /**
     * Set the numero.
     *
     * @param string|null $numero The numero.
     * @return DeletingSmsRequest Returns this deleting SMS request.
     * @throws UnexpectedValueException Throws an unexpected value exception if the numero is invalid.
     */
    public function setNumero(?string $numero): DeletingSmsRequest {
        NumeroSerializer::checkNumero($numero);
        $this->numero = $numero;
        return $this;
    }
}
