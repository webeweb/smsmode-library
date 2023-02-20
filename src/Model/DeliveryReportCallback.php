<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Model;

use WBW\Library\SmsMode\Api\DeliveryReportCallbackInterface;
use WBW\Library\SmsMode\Traits\DateTimes\DateTimeDateReceptionTrait;
use WBW\Library\SmsMode\Traits\Strings\StringRefClientTrait;
use WBW\Library\SmsMode\Traits\Strings\StringSmsIDTrait;

/**
 * Delivery report callback.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Model
 */
class DeliveryReportCallback extends DeliveryReport implements DeliveryReportCallbackInterface {

    use DateTimeDateReceptionTrait;
    use StringRefClientTrait;
    use StringSmsIDTrait;

    /**
     * MCC MNC.
     *
     * @var int|null
     */
    private $mccMnc;

    /**
     * Get the MCC MNC.
     *
     * @return int|null Returns the MCC MNC.
     */
    public function getMccMnc(): ?int {
        return $this->mccMnc;
    }

    /**
     * Get the status.
     *
     * @return int|null Returns the status.
     */
    public function getStatus(): ?int {
        return parent::getCode();
    }

    /**
     * Set the MCC MNC.
     *
     * @param int|null $mccMnc The MCC MNC.
     * @return DeliveryReportCallback Returns this delivery report callback.
     */
    public function setMccMnc(?int $mccMnc): DeliveryReportCallback {
        $this->mccMnc = $mccMnc;
        return $this;
    }

    /**
     * Set the status.
     *
     * @param int|null $status The status.
     * @return DeliveryReportCallback Returns this delivery report callback.
     */
    public function setStatus(?int $status): DeliveryReportCallback {
        return parent::setCode($status);
    }
}
