<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
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
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Response
 */
class SMSModeAccountBalanceResponse extends AbstractSMSModeResponse {

    /**
     * Account balance.
     *
     * @var float
     */
    private $accountBalance;

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

        // Set the code and description.
        parent::parse($rawResponse);

        // Check the raw response.
        if (1 === preg_match("/^[0-9]{1,}\.[0-9]{1,}$/", $rawResponse)) {
            $this->setAccountBalance(floatval(trim($rawResponse)));
        }
    }

    /**
     * Set the account balance.
     *
     * @param float $accountBalance The account balance.
     * @return SMSModeAccountBalanceResponse Returns this account balance response.
     */
    protected function setAccountBalance($accountBalance) {
        $this->accountBalance = $accountBalance;
        return $this;
    }
}
