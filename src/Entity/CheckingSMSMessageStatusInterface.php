<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Entity;

/**
 * Checking SMS message status interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Entity
 */
interface CheckingSMSMessageStatusInterface extends SMSModeEntityInterface {

    /**
     * Get the SMS ID.
     *
     * @return string|null Returns the SMS ID.
     */
    public function getSMSModeSmsID(): ?string;
}
