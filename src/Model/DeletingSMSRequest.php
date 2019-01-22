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

use WBW\Library\Core\Exception\Pointer\NullPointerException;

/**
 * Deleting SMS request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class DeletingSMSRequest extends AbstractRequest {

    /**
     * Numero.
     *
     * @var string
     */
    private $numero;

    /**
     * SMS ID.
     *
     * @var string
     */
    private $smsID;

    /**
     * Get the numero.
     *
     * @return string Returns the numero.
     */
    public function getNumero() {
        return $this->numero;
    }

    /**
     * Get the sms ID.
     *
     * @return string Returns the sms ID.
     */
    public function getSmsID() {
        return $this->smsID;
    }

    /**
     * Set the numero.
     *
     * @param string $numero The numero.
     * @return DeletingSMSRequest Returns this deleting SMS request.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the sms ID.
     *
     * @param string $smsID The sms ID.
     * @return DeletingSMSRequest Returns this deleting SMS request.
     */
    public function setSmsID($smsID) {
        $this->smsID = $smsID;
        return $this;
    }

    /**
     *  {@inhertidoc}
     */
    public function toArray() {

        // Initialize the output.
        $output = [];

        // Check the mandatory parameters "smsID" and "numero".
        if (null === $this->smsID && null === $this->numero) {
            throw new NullPointerException("The mandatory parameter \"smsID\" or \"numero\" is missing");
        }

        // Add the mandatory parameter.
        if (null !== $this->smsID) {
            $output["smsID"] = $this->smsID;
        } else {
            $output["numero"] = $this->numero;
        }

        // Return the output.
        return $output;
    }
}