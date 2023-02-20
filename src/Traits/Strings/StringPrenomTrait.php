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
 * String prenom trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Traits\Strings
 */
trait StringPrenomTrait {

    /**
     * Prenom.
     *
     * @var string|null
     */
    private $prenom;

    /**
     * Get the prenom.
     *
     * @return string|null Returns the prenom.
     */
    public function getPrenom(): ?string {
        return $this->prenom;
    }

    /**
     * Set the prenom.
     *
     * @param string|null $prenom The prenom.
     * @return self Returns this instance.
     */
    public function setPrenom(string $prenom): self {
        $this->prenom = $prenom;
        return $this;
    }
}
