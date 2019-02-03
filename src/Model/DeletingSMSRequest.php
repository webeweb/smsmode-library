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
use WBW\Library\SMSMode\Traits\NumeroTrait;
use WBW\Library\SMSMode\Traits\SmsIDTrait;

/**
 * Deleting SMS request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class DeletingSMSRequest extends AbstractRequest {

    use NumeroTrait;
    use SmsIDTrait;

    /**
     * Deleting SMS resource path.
     *
     * @var string
     */
    const DELETING_SMS_RESOURCE_PATH = "/http/1.6/deleteSMS.do";

    /**
     * {@inheritdoc}
     */
    public function getResourcePath() {
        return self::DELETING_SMS_RESOURCE_PATH;
    }

    /**
     * Set the numero.
     *
     * @param string $numero The numero.
     * @return DeletingSMSRequest Returns this deleting SMS request.
     * @throws UnexpectedValueException Throws an unexpected value exception if the numero is invalid.
     */
    public function setNumero($numero) {
        static::checkNumero($numero);
        $this->numero = $numero;
        return $this;
    }
}
