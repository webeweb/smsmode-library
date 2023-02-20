<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Traits\DateTimes;

use DateTime;

/**
 * Date/time Date reception trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Traits\DateTimes
 */
trait DateTimeDateReceptionTrait {

    /**
     * Date reception.
     *
     * @var DateTime|null
     */
    private $dateReception;

    /**
     * Get the date reception.
     *
     * @return DateTime|null Returns the date reception.
     */
    public function getDateReception(): ?DateTime {
        return $this->dateReception;
    }

    /**
     * Set the date reception.
     *
     * @param DateTime|null $dateReception The date reception.
     * @return self Returns this instance.
     */
    public function setDateReception(?DateTime $dateReception): self {
        $this->dateReception = $dateReception;
        return $this;
    }
}
