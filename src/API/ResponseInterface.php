<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\API;

/**
 * Response interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\API
 */
interface ResponseInterface {

    /**
     * Get the code.
     *
     * @return int Returns the code.
     */
    public function getCode();

    /**
     * Get the description.
     *
     * @return string Returns the description.
     */
    public function getDescription();

    /**
     * Set the code.
     *
     * @param int $code The code.
     * @return ResponseInterface Returns this response.
     */
    public function setCode($code);

    /**
     * Set the description.
     *
     * @param string $description The description.
     * @return ResponseInterface Returns this response.
     */
    public function setDescription($description);
}
