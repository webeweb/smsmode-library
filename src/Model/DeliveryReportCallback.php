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

use DateTime;

/**
 * Delivery report callback.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class DeliveryReportCallback extends DeliveryReport {

    /**
     * Parameter "date reception".
     *
     * @var string
     */
    const PARAMETER_DATE_RECEPTION = "date_reception";

    /**
     * Parameter "MCC MNC".
     *
     * @var string
     */
    const PARAMETER_MCC_MNC = "mcc_mnc";

    /**
     * Parameter "numero".
     *
     * @var string
     */
    const PARAMETER_NUMERO = "numero";

    /**
     * Parameter "ref client".
     *
     * @var string
     */
    const PARAMETER_REF_CLIENT = "refClient";

    /**
     * Parameter "smsID".
     *
     * @var string
     */
    const PARAMETER_SMS_ID = "smsID";

    /**
     * Parameter "statut".
     *
     * @var string
     */
    const PARAMETER_STATUT = "statut";

    /**
     * Date reception.
     *
     * @var DateTime
     */
    private $dateReception;

    /**
     * MCC MNC.
     *
     * @var int
     */
    private $mccMnc;

    /**
     * Ref client.
     *
     * @var string
     */
    private $refClient;

    /**
     * SMS ID.
     *
     * @var string
     */
    private $smsID;

    /**
     * Get the date reception.
     *
     * @return DateTime Returns the date reception.
     */
    public function getDateReception() {
        return $this->dateReception;
    }

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
     * Get the sms ID.
     *
     * @return string Returns the sms ID.
     */
    public function getSmsID() {
        return $this->smsID;
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
     * Set the date reception.
     *
     * @param DateTime|null $dateReception The date reception.
     * @return DeliveryReportCallback Returns this delivery report callback.
     */
    public function setDateReception(DateTime $dateReception = null) {
        $this->dateReception = $dateReception;
        return $this;
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
     * Set the ref client.
     *
     * @param string $refClient The ref client.
     * @return DeliveryReportCallback Returns this delivery report callback.
     */
    public function setRefClient($refClient) {
        $this->refClient = $refClient;
        return $this;
    }

    /**
     * Set the sms ID.
     *
     * @param string $smsID The sms ID.
     * @return DeliveryReportCallback Returns this delivery report callback.
     */
    public function setSmsID($smsID) {
        $this->smsID = $smsID;
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
