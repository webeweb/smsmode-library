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

/**
 * Delivery report request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class DeliveryReportRequest extends AbstractRequest {

    /**
     * Delivery report resource path.
     *
     * @var string
     */
    const DELIVERY_REPORT_RESOURCE_PATH = "/http/1.6/compteRendu.do";

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
}
