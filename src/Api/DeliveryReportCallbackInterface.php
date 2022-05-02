<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Api;

/**
 * Delivery report callback interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Api
 */
interface DeliveryReportCallbackInterface {

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
}
