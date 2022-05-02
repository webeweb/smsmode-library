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

/**
 * Sent SMS message list interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Entity
 */
interface SentSmsMessageListInterface extends SmsModeEntityInterface {

    /**
     * Get the offset.
     *
     * @return int|null Returns the offset.
     */
    public function getSmsModeOffset(): ?int;
}
