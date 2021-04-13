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

/**
 * Account balance request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Request
 */
class AccountBalanceRequest extends AbstractRequest {

    /**
     * Account balance resource path.
     *
     * @var string
     */
    const ACCOUNT_BALANCE_RESOURCE_PATH = "/http/1.6/credit.do";

    /**
     * {@inheritdoc}
     */
    public function getResourcePath(): string {
        return self::ACCOUNT_BALANCE_RESOURCE_PATH;
    }
}
