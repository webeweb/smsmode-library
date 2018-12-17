<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Exception;

/**
 * sMsmode max limit number reached exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Exception
 */
class SMSModeMaxLimitNumberReachedException extends AbstractSMSModeException {

    /**
     * Constructor.
     *
     * @param int $limit The limit.
     */
    public function __construct($limit) {
        parent::__construct(sprintf("The max limit of numbers reached: %d allowed", $limit));
    }

}
