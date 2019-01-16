<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Request;

use WBW\Library\SMSMode\API\Request\AccountBalanceRequestInterface;

/**
 * Account balance request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Request
 */
class AccountBalanceRequest extends AbstractRequest implements AccountBalanceRequestInterface {

    /**
     * {@inheritdoc}
     */
    public function getResourcePath() {
        return self::ACCOUNT_BALANCE_RESOURCE_PATH;
    }
}
