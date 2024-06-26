<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\SmsMode\Request;

/**
 * Account balance request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Request
 */
class AccountBalanceRequest extends AbstractRequest {

    /**
     * Account balance resource path.
     *
     * @var string
     */
    public const ACCOUNT_BALANCE_RESOURCE_PATH = "/http/1.6/credit.do";

    /**
     * {@inheritDoc}
     */
    public function getResourcePath(): string {
        return self::ACCOUNT_BALANCE_RESOURCE_PATH;
    }
}
