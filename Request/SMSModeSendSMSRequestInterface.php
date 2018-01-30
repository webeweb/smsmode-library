<?php

/**
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Request;

/**
 * sMsmode send SMS request interface.
 *
 * cf. 2 Envoi de SMS
 * 	<https://www.smsmode.com/pdf/fiche-api-http.pdf>
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Request
 */
interface SMSModeSendSMSRequestInterface {

    /**
     * Message class "SMS Pro".
     *
     * @var integer
     */
    const MESSAGE_CLASS_SMS_PRO = 2;

    /**
     * Message class "SMS with authorized response".
     *
     * @var integer
     */
    const MESSAGE_CLASS_SMS_RESPONSE = 4;

    /**
     * Message length.
     *
     * @var integer
     */
    const MESSAGE_LENGTH = 160;

    /**
     * STOP always.
     *
     * @var integer
     */
    const STOP_ALWAYS = 2;

    /**
     * STOP only.
     *
     * @var integer
     */
    const STOP_ONLY = 1;

}
