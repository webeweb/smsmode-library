<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Entity;

/**
 * Delivery report interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Entity
 */
interface DeliveryReportInterface extends SmsModeEntityInterface {

    /**
     * Get the SMS ID.
     *
     * @return string|null Returns the SMS ID.
     */
    public function getSmsModeSmsID(): ?string;
}
