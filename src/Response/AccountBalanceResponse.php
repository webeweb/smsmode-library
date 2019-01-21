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

use WBW\Library\SMSMode\API\Response\AccountBalanceResponseInterface;

/**
 * Account balance response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Response
 */
class AccountBalanceResponse extends AbstractResponse implements AccountBalanceResponseInterface {

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
     * Set the account balance.
     *
     * @param float $accountBalance The account balance.
     * @return AccountBalanceResponse Returns this account balance response.
     */
    public function setAccountBalance($accountBalance) {
        $this->accountBalance = $accountBalance;
        return $this;
    }
}
