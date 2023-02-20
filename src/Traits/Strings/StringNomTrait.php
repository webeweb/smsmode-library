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
 * String nom trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Traits\Strings
 */
trait StringNomTrait {

    /**
     * Nom.
     *
     * @var string|null
     */
    private $nom;

    /**
     * Get the nom.
     *
     * @return string|null Returns the nom.
     */
    public function getNom(): ?string {
        return $this->nom;
    }

    /**
     * Set the nom.
     *
     * @param string|null $nom The nom.
     * @return self Returns this instance.
     */
    public function setNom(?string $nom): self {
        $this->nom = $nom;
        return $this;
    }
}
