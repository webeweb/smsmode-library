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
 * String SMS ID trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Traits\Strings
 */
trait StringSmsIDTrait {

    /**
     * SMS ID.
     *
     * @var string|null
     */
    private $smsID;

    /**
     * Get the SMS ID.
     *
     * @return string|null Returns the SMS ID.
     */
    public function getSmsID(): ?string {
        return $this->smsID;
    }

    /**
     * Set the SMS ID.
     *
     * @param string|null $smsID The SMS ID.
     * @return self Returns this instance.
     */
    public function setSmsID(?string $smsID): self {
        $this->smsID = $smsID;
        return $this;
    }
}
