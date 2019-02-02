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
 * Societe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Traits
 */
trait SocieteTrait {

    /**
     * Societe.
     *
     * @var string
     */
    private $societe;

    /**
     * Get the societe.
     *
     * @return string Returns the societe.
     */
    public function getSociete() {
        return $this->societe;
    }

    /**
     * Set the societe.
     *
     * @param string $societe The societe.
     */
    public function setSociete($societe) {
        $this->societe = $societe;
        return $this;
    }
}
