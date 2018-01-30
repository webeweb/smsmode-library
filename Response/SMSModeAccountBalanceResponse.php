<?php

/**
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Response;

/**
 * sMsmode account balance response.
 *
 * cf. 4 Solde du compte
 * 	<https://www.smsmode.com/pdf/fiche-api-http.pdf>
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Response
 * @final
 */
final class SMSModeAccountBalanceResponse extends AbstractSMSModeResponse {

    /**
     * Account balance.
     *
     * @var float
     */
    private $accountBalance = 0.00;

    /**
     * Get the account balance.
     *
     * @return float Returns the account balance.
     */
    public function getAccountBalance() {
        return $this->accountBalance;
    }

    /**
     * {@inheritdoc}
     */
    protected function parse($rawResponse) {
        $this->setAccountBalance(floatval(trim($rawResponse)));
    }

    /**
     * Set the account balance.
     *
     * @param float $accountBalance The account balance.
     * @return SMSModeAccountBalanceResponse Returns the sMsmode account balance response.
     */
    protected function setAccountBalance($accountBalance = 0.00) {
        $this->accountBalance = $accountBalance;
        return $this;
    }

}
