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

use DateTime;

/**
 * Date/time date envoi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model\Attribute
 */
trait DateTimeDateEnvoiTrait {

    /**
     * Date envoi.
     *
     * @var DateTime
     */
    private $dateEnvoi;

    /**
     * Get the date envoi.
     *
     * @return DateTime Returns the date envoi.
     */
    public function getDateEnvoi() {
        return $this->dateEnvoi;
    }

    /**
     * Set the date envoi.
     *
     * @param DateTime|null $dateEnvoi The date envoi.
     */
    public function setDateEnvoi(DateTime $dateEnvoi = null) {
        $this->dateEnvoi = $dateEnvoi;
        return $this;
    }
}
