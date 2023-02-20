<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Traits\Strings;

/**
 * String notification URL trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Traits\Strings
 */
trait StringNotificationUrlTrait {

    /**
     * Notification URL.
     *
     * @var string|null
     */
    private $notificationUrl;

    /**
     * Get the notification URL.
     *
     * @return string|null Returns the notification URL.
     */
    public function getNotificationUrl(): ?string {
        return $this->notificationUrl;
    }

    /**
     * Set the notification URL.
     *
     * @param string|null $notificationUrl The notification URL.
     * @return self Returns this instance.
     */
    public function setNotificationUrl(?string $notificationUrl): self {
        $this->notificationUrl = $notificationUrl;
        return $this;
    }
}
