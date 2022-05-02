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
 * SMS reply callback interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Api
 */
interface SmsReplyCallbackInterface {

    /**
     * Parameter "date reception".
     *
     * @var string
     */
    const PARAMETER_DATE_RECEPTION = "date_reception";

    /**
     * Parameter "emetteur".
     *
     * @var string
     */
    const PARAMETER_EMETTEUR = "emetteur";

    /**
     * Parameter "message".
     *
     * @var string
     */
    const PARAMETER_MESSAGE = "message";

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
     * Parameter "response ID".
     *
     * @var string
     */
    const PARAMETER_RESPONSE_ID = "responseID";

    /**
     * Parameter "SMS ID".
     *
     * @var string
     */
    const PARAMETER_SMS_ID = "smsID";
}
