<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Model;

use WBW\Library\Core\Exception\Pointer\NullPointerException;

/**
 * Delivery report request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class DeliveryReportRequest extends AbstractRequest {

    /**
     * SMS ID.
     *
     * @var string
     */
    private $smsID;

    /**
     * Get the sms ID.
     *
     * @return string Returns the sms ID.
     */
    public function getSmsID() {
        return $this->smsID;
    }

    /**
     * Set the sms ID.
     *
     * @param string $smsID The sms ID.
     * @return DeliveryReportRequest Returns this delivery report request.
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

        // Check the mandatory parameter "smsID".
        if (null === $this->smsID) {
            throw new NullPointerException("The mandatory parameter \"smsID\" is missing");
        }

        // Add the mandatory parameter.
        $output["smsID"] = $this->smsID;

        // Return the output.
        return $output;
    }
}
