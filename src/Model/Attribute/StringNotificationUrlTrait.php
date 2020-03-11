<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Model\Attribute;

/**
 * String notification URL trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model\Attribute
 */
trait StringNotificationUrlTrait {

    /**
     * Notification URL.
     *
     * @var string
     */
    private $notificationUrl;

    /**
     * Get the notification URL.
     *
     * @return string Returns the notification URL.
     */
    public function getNotificationUrl() {
        return $this->notificationUrl;
    }

    /**
     * Set the notification URL.
     *
     * @param string $notificationUrl The notification URL.
     */
    public function setNotificationUrl($notificationUrl) {
        $this->notificationUrl = $notificationUrl;
        return $this;
    }
}
