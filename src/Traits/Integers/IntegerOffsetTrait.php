<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Traits\Integers;

use InvalidArgumentException;

/**
 * Integer offset trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Traits\Integers
 */
trait IntegerOffsetTrait {

    /**
     * Offset.
     *
     * @var int|null
     */
    private $offset;

    /**
     * Get the offset.
     *
     * @return int|null Returns the offset.
     */
    public function getOffset(): ?int {
        return $this->offset;
    }

    /**
     * Set the offset.
     *
     * @param int|null $offset The offset.
     * @return self Returns this instance.
     * @throws InvalidArgumentException Throws an invalid argument exception if the offset is less than 1.
     */
    public function setOffset(?int $offset): self {
        if (null !== $offset && $offset < 1) {
            throw new InvalidArgumentException('The "offset" must be greater than 0');
        }
        $this->offset = $offset;
        return $this;
    }
}
