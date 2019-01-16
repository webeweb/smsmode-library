<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\API\Request;

use WBW\Library\SMSMode\API\RequestInterface;

/**
 * Account balance request interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\API\Request
 */
interface AccountBalanceRequestInterface extends RequestInterface {

    /**
     * Account balance resource path.
     *
     * @var string
     */
    const ACCOUNT_BALANCE_RESOURCE_PATH = "/1.6/credit.do";
}
