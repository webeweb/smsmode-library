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

use WBW\Library\SMSMode\API\DeliveryReportCallbackInterface;
use WBW\Library\SMSMode\Traits\DateReceptionTrait;
use WBW\Library\SMSMode\Traits\RefClientTrait;
use WBW\Library\SMSMode\Traits\SmsIDTrait;

/**
 * Delivery report callback.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class DeliveryReportCallback extends DeliveryReport implements DeliveryReportCallbackInterface {

    use DateReceptionTrait;
    use RefClientTrait;
    use SmsIDTrait;

    /**
     * MCC MNC.
     *
     * @var int
     */
    private $mccMnc;

    /**
     * Get the MCC MNC.
     *
     * @return int Returns the MCC MNC.
     */
    public function getMccMnc() {
        return $this->mccMnc;
    }

    /**
     * Get the ref client.
     *
     * @return string Returns the ref client.
     */
    public function getRefClient() {
        return $this->refClient;
    }

    /**
     * Get the status.
     *
     * @return int Returns the status.
     */
    public function getStatus() {
        return parent::getCode();
    }

    /**
     * Set the MCC MNC.
     *
     * @param int $mccMnc The MCC MNC.
     * @return DeliveryReportCallback Returns this delivery report callback.
     */
    public function setMccMnc($mccMnc) {
        $this->mccMnc = $mccMnc;
        return $this;
    }

    /**
     * Set the status.
     *
     * @param int $status The status.
     * @return DeliveryReportCallback Returns this delivery report callback.
     */
    public function setStatus($status) {
        return parent::setCode($status);
    }
}
