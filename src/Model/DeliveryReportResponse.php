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
 * Delivery report response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class DeliveryReportResponse extends AbstractResponse {

    /**
     * Delivery reports.
     *
     * @var DeliveryReport[]
     */
    private $deliveryReports;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->setDeliveryReports([]);
    }

    /**
     * Get the delivery reports.
     *
     * @return DeliveryReport[] Returns the delivery reports.
     */
    public function getDeliveryReports() {
        return $this->deliveryReports;
    }

    /**
     * Set the delivery reports.
     *
     * @param DeliveryReport[] $deliveryReports The delivery reports.
     * @return DeliveryReportResponse Returns this delivery report response.
     */
    public function setDeliveryReports($deliveryReports) {
        $this->deliveryReports = $deliveryReports;
        return $this;
    }



}
