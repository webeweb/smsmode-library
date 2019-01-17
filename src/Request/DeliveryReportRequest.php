<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Request;

use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\SMSMode\API\Request\DeliveryReportRequestInterface;

/**
 * Delivery report request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Request
 */
class DeliveryReportRequest extends AbstractRequest implements DeliveryReportRequestInterface {

    /**
     * SMS ID.
     *
     * @var string
     */
    private $smsID;

    /**
     * {@inheritdoc}
     */
    public function getResourcePath() {
        return self::DELIVERY_REPORT_RESOURCE_PATH;
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
