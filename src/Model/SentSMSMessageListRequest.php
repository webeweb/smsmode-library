<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Model;

use WBW\Library\Core\Argument\ArrayHelper;

/**
 * Sent SMS message list request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class SentSMSMessageListRequest extends AbstractRequest {

    /**
     * Offset.
     *
     * @var int
     */
    private $offset;

    /**
     * Get the offset.
     *
     * @return int Returns the offset.
     */
    public function getOffset() {
        return $this->offset;
    }

    /**
     * Set the offset.
     *
     * @param int $offset The offset.
     * @return SentSMSMessageListRequest Returns this sent SMS message list request.
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
