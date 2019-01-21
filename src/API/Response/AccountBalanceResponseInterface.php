<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\API\Response;

use WBW\Library\SMSMode\API\ResponseInterface;

/**
 * Account balance response interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\API\Response
 */
interface AccountBalanceResponseInterface extends ResponseInterface {

    /**
     * Get the account balance.
     *
     * @return float Returns the account balance.
     */
    public function getAccountBalance();

    /**
     * Set the account balance.
     *
     * @param float $accountBalance The account balance.
     * @return AccountBalanceResponseInterface Returns this account balance response.
     */
    public function setAccountBalance($accountBalance);
}
