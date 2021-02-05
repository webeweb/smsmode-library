<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Model\Request;

use WBW\Library\SMSMode\Model\AbstractRequest;

/**
 * Creating API key request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model\Request
 */
class CreatingAPIKeyRequest extends AbstractRequest {

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
        return static::CREATING_API_KEY_RESOURCE_PATH;
    }
}
