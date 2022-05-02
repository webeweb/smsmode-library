<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Response;

/**
 * Sending SMS batch response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Response
 */
class SendingSmsBatchResponse extends AbstractResponse {

    /**
     * Campagne ID.
     *
     * @var string|null
     */
    private $campagneID;

    /**
     * Get the campagne ID.
     *
     * @return string|null Returns the campagne ID.
     */
    public function getCampagneID(): ?string {
        return $this->campagneID;
    }

    /**
     * Set the campagne ID.
     *
     * @param string|null $campagneID The campagne ID.
     * @return SendingSmsBatchResponse Returns this sending SMS batch response.
     */
    public function setCampagneID(?string $campagneID): SendingSmsBatchResponse {
        $this->campagneID = $campagneID;
        return $this;
    }
}
