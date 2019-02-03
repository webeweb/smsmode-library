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

use UnexpectedValueException;

/**
 * Offset trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Traits
 */
trait OffsetTrait {

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
     * @throws UnexpectedValueException Throws an illegal argument exception if the offset is less than 1.
     */
    public function setOffset($offset) {
        if (null !== $offset && $offset <= 0) {
            throw new UnexpectedValueException("The \"offset\" must be greater than 0");
        }
        $this->offset = $offset;
        return $this;
    }
}
