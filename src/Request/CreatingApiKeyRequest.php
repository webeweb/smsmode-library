<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Request;

/**
 * Creating API key request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Request
 */
class CreatingApiKeyRequest extends AbstractRequest {

    /**
     * Creating API key resource path.
     *
     * @var string
     */
    const CREATING_API_KEY_RESOURCE_PATH = "/http/2.0/createAuthorisation.do";

    /**
     * {@inheritdoc}
     */
    public function getResourcePath(): string {
        return self::CREATING_API_KEY_RESOURCE_PATH;
    }
}
