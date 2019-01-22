<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Model;

/**
 * Abstract response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 * @abstract
 */
abstract class AbstractResponse {

    /**
     * Code.
     *
     * @var int
     */
    private $code;

    /**
     * Description.
     *
     * @var string
     */
    private $description;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * Get the code.
     *
     * @return int Returns the code.
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Get the description.
     *
     * @return string Returns the description.
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set the code.
     *
     * @param int $code The code.
     * @return AbstractResponse Returns this response.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string $description The description.
     * @return AbstractResponse Returns this response.
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }
}
