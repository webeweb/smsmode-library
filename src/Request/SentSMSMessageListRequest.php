<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Request;

use WBW\Library\Core\Argument\ArrayHelper;
use WBW\Library\SMSMode\API\Request\SentSMSMessageListRequestInterface;

/**
 * Sent SMS message list request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Request
 */
class SentSMSMessageListRequest extends AbstractRequest implements SentSMSMessageListRequestInterface {

    /**
     * Offset.
     *
     * @var int
     */
    private $offset;

    /**
     * {@inheritdoc}
     */
    public function getOffset() {
        return $this->offset;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath() {
        return self::SENT_SMS_MESSAGE_LIST_RESOURCE_PATH;
    }

    /**
     * {@inheritdoc}
     */
    public function setOffset($offset) {
        $this->offset = $offset;
        return $this;
    }

    /**
     *  {@inhertidoc}
     */
    public function toArray() {

        // Initialize the output.
        $output = [];

        // Check and add the optional parameters.
        ArrayHelper::set($output, "offset", $this->offset, [null]);

        // Return the output.
        return $output;
    }
}
