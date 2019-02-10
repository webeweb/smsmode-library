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

/**
 * Sending SMS batch response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model\Response
 */
class SendingSMSBatchResponse extends AbstractResponse {

    /**
     * Campagne ID.
     *
     * @var string
     */
    private $campagneID;

    /**
     * Get the campagne ID.
     *
     * @return string Returns the campagne ID.
     */
    public function getCampagneID() {
        return $this->campagneID;
    }

    /**
     * Set the campagne ID.
     *
     * @param string $campagneID The campagne ID.
     * @return SendingSMSBatchResponse Returns this sending SMS batch response.
     */
    public function setCampagneID($campagneID) {
        $this->campagneID = $campagneID;
        return $this;
    }
}
