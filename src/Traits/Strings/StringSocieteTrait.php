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
 * String societe trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Traits\Strings
 */
trait StringSocieteTrait {

    /**
     * Societe.
     *
     * @var string|null
     */
    private $societe;

    /**
     * Get the societe.
     *
     * @return string|null Returns the societe.
     */
    public function getSociete(): ?string {
        return $this->societe;
    }

    /**
     * Set the societe.
     *
     * @param string|null $societe The societe.
     * @return self Returns this instance.
     */
    public function setSociete(?string $societe): self {
        $this->societe = $societe;
        return $this;
    }
}
