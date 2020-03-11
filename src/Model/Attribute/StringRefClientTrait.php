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

/**
 * String ref client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model\Attribute
 */
trait StringRefClientTrait {

    /**
     * RefClient.
     *
     * @var string
     */
    private $refClient;

    /**
     * Get the refClient.
     *
     * @return string Returns the refClient.
     */
    public function getRefClient() {
        return $this->refClient;
    }

    /**
     * Set the refClient.
     *
     * @param string $refClient The refClient.
     */
    public function setRefClient($refClient) {
        $this->refClient = $refClient;
        return $this;
    }
}
