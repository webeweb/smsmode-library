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
 * String mobile trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model\Attribute
 */
trait StringMobileTrait {

    /**
     * Mobile.
     *
     * @var string
     */
    private $mobile;

    /**
     * Get the mobile.
     *
     * @return string Returns the mobile.
     */
    public function getMobile() {
        return $this->mobile;
    }

    /**
     * Set the mobile.
     *
     * @param string $mobile The mobile.
     */
    public function setMobile($mobile) {
        $this->mobile = $mobile;
        return $this;
    }
}
