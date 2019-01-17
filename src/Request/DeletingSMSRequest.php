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

use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\SMSMode\API\Request\DeletingSMSRequestInterface;

/**
 * Deleting SMS request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Request
 */
class DeletingSMSRequest extends AbstractRequest implements DeletingSMSRequestInterface {

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
     * {@inheritdoc}
     */
    public function getNumero() {
        return $this->numero;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath() {
        return self::DELETING_SMS_RESOURCE_PATH;
    }

    /**
     * {@inheritdoc}
     */
    public function getSmsID() {
        return $this->smsID;
    }

    /**
     * {@inheritdoc}
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * {@inheritdoc}
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
