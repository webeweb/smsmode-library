<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

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
    public const PARAMETER_DATE_RECEPTION = "date_reception";

    /**
     * Parameter "MCC MNC".
     *
     * @var string
     */
    public const PARAMETER_MCC_MNC = "mcc_mnc";

    /**
     * Parameter "numero".
     *
     * @var string
     */
    public const PARAMETER_NUMERO = "numero";

    /**
     * Parameter "ref client".
     *
     * @var string
     */
    public const PARAMETER_REF_CLIENT = "refClient";

    /**
     * Parameter "smsID".
     *
     * @var string
     */
    public const PARAMETER_SMS_ID = "smsID";

    /**
     * Parameter "statut".
     *
     * @var string
     */
    public const PARAMETER_STATUT = "statut";
}
