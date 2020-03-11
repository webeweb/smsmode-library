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

use InvalidArgumentException;

/**
 * Integer offset trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model\Attribute
 */
trait IntegerOffsetTrait {

    /**
     * Offset.
     *
     * @var int
     */
    private $offset;

    /**
     * Get the offset.
     *
     * @return int Returns the offset.
     */
    public function getOffset() {
        return $this->offset;
    }

    /**
     * Set the offset.
     *
     * @param int $offset The offset.
     * @throws InvalidArgumentException Throws an invalid argument exception if the offset is less than 1.
     */
    public function setOffset($offset) {
        if (null !== $offset && $offset < 1) {
            throw new InvalidArgumentException("The \"offset\" must be greater than 0");
        }
        $this->offset = $offset;
        return $this;
    }
}
