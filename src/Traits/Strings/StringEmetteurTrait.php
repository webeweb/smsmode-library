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
 * String emetteur trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Traits\Strings
 */
trait StringEmetteurTrait {

    /**
     * Emetteur.
     *
     * @var string|null
     */
    private $emetteur;

    /**
     * Get the emetteur.
     *
     * @return string|null Returns the emetteur.
     */
    public function getEmetteur(): ?string {
        return $this->emetteur;
    }

    /**
     * Set the emetteur.
     *
     * @param string|null $emetteur The emetteur.
     * @return self Returns this instance.
     */
    public function setEmetteur(?string $emetteur): self {
        $this->emetteur = $emetteur;
        return $this;
    }
}
