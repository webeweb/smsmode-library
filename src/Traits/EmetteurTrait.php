<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Traits;

/**
 * Emetteur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Traits
 */
trait EmetteurTrait {

    /**
     * Emetteur.
     *
     * @var string
     */
    private $emetteur;

    /**
     * Get the emetteur.
     *
     * @return string Returns the emetteur.
     */
    public function getEmetteur() {
        return $this->emetteur;
    }

    /**
     * Set the emetteur.
     *
     * @param string $emetteur The emetteur.
     */
    public function setEmetteur($emetteur) {
        $this->emetteur = $emetteur;
        return $this;
    }
}
