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

use WBW\Library\SMSMode\Response\SMSModeAccountBalanceResponse;

/**
 * sMsmode account balance request.
 *
 * cf. 4 Solde du compte
 * 	<https://www.smsmode.com/pdf/fiche-api-http.pdf>
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Request
 * @final
 */
final class SMSModeAccountBalanceRequest implements SMSModeRequestInterface {

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING DTO DO.
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath() {
        return "credit.do";
    }

    /**
     * {@inheritdoc}
     */
    public function parseResponse($rawResponse) {
        return new SMSModeAccountBalanceResponse($rawResponse);
    }

    /**
     *  {@inhertidoc}
     */
    public function toArray() {
        return [];
    }

}
