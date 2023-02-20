<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Traits\Strings;

/**
 * String ref client trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Traits\Strings
 */
trait StringRefClientTrait {

    /**
     * RefClient.
     *
     * @var string|null
     */
    private $refClient;

    /**
     * Get the refClient.
     *
     * @return string|null Returns the refClient.
     */
    public function getRefClient(): ?string {
        return $this->refClient;
    }

    /**
     * Set the refClient.
     *
     * @param string|null $refClient The refClient.
     * @return self Returns this instance.
     */
    public function setRefClient(?string $refClient): self {
        $this->refClient = $refClient;
        return $this;
    }
}
