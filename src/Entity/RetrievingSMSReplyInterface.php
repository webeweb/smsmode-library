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

use DateTime;

/**
 * Retrieving SMS reply interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Entity
 */
interface RetrievingSMSReplyInterface extends SMSModeEntityInterface {

    /**
     * Get the end date.
     *
     * @return DateTime Returns the end date.
     */
    public function getSMSModeEndDate();

    /**
     * Get the offset.
     *
     * @return int Returns the offset.
     */
    public function getSMSModeOffset();

    /**
     * Get the start.
     *
     * @return int Returns the start.
     */
    public function getSMSModeStart();

    /**
     * Get the start date.
     *
     * @return DateTime Returns the start date.
     */
    public function getSMSModeStartDate();
}
