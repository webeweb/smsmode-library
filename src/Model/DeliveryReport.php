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

/**
 * Delivery report.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class DeliveryReport extends AbstractResponse {

    /**
     * Numero.
     *
     * @var string
     */
    private $numero;

    /**
     * Get the numero.
     *
     * @return string Returns the numero.
     */
    public function getNumero() {
        return $this->numero;
    }

    /**
     * Set the numero.
     *
     * @param string $numero The numero.
     * @return DeliveryReport Returns this delivery report.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }
}
