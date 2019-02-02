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

use DateTime;

/**
 * Date reception trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Traits
 */
trait DateReceptionTrait {

    /**
     * Date reception.
     *
     * @var DateTime
     */
    private $dateReception;

    /**
     * Get the date reception.
     *
     * @return DateTime Returns the date reception.
     */
    public function getDateReception() {
        return $this->dateReception;
    }

    /**
     * Set the date reception.
     *
     * @param DateTime|null $dateReception The date reception.
     */
    public function setDateReception(DateTime $dateReception = null) {
        $this->dateReception = $dateReception;
        return $this;
    }
}
