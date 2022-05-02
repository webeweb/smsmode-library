<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Response;

/**
 * Account balance response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Response
 */
class AccountBalanceResponse extends AbstractResponse {

    /**
     * Account balance.
     *
     * @var float|null
     */
    private $accountBalance;

    /**
     * Get the account balance.
     *
     * @return float|null Returns the account balance.
     */
    public function getAccountBalance(): ?float {
        return $this->accountBalance;
    }

    /**
     * Set the account balance.
     *
     * @param float|null $accountBalance The account balance.
     * @return AccountBalanceResponse Returns this account balance response.
     */
    public function setAccountBalance(?float $accountBalance): AccountBalanceResponse {
        $this->accountBalance = $accountBalance;
        return $this;
    }
}
