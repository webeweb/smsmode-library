<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Entity;

use DateTime;

/**
 * Retrieving SMS reply interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Entity
 */
interface RetrievingSmsReplyInterface extends SmsModeEntityInterface {

    /**
     * Get the end date.
     *
     * @return DateTime|null Returns the end date.
     */
    public function getSmsModeEndDate(): ?DateTime;

    /**
     * Get the offset.
     *
     * @return int|null Returns the offset.
     */
    public function getSmsModeOffset(): ?int;

    /**
     * Get the start.
     *
     * @return int|null Returns the start.
     */
    public function getSmsModeStart(): ?int;

    /**
     * Get the start date.
     *
     * @return DateTime|null Returns the start date.
     */
    public function getSmsModeStartDate(): ?DateTime;
}
