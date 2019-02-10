<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Model\Response;

use WBW\Library\SMSMode\Model\AbstractResponse;
use WBW\Library\SMSMode\Model\DeliveryReport;

/**
 * Delivery report response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model\Response
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
     * Add a delivery report.
     *
     * @param DeliveryReport $deliveryReport The delivery report.
     * @return DeliveryReportResponse Returns this delivery report response.
     */
    public function addDeliveryReport(DeliveryReport $deliveryReport) {
        $this->deliveryReports[] = $deliveryReport;
        return $this;
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
     * Determines if this delivery report response has a delivery report.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasDeliveryReport() {
        return 0 < count($this->deliveryReports);
    }

    /**
     * Set the delivery reports.
     *
     * @param DeliveryReport[] $deliveryReports The delivery reports.
     * @return DeliveryReportResponse Returns this delivery report response.
     */
    protected function setDeliveryReports($deliveryReports) {
        $this->deliveryReports = $deliveryReports;
        return $this;
    }

}
