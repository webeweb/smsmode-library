<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Traits\Strings;

/**
 * String response ID trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Traits\Strings
 */
trait StringResponseIDTrait {

    /**
     * Response ID.
     *
     * @var string|null
     */
    private $responseID;

    /**
     * Get the response ID.
     *
     * @return string|null Returns the response ID.
     */
    public function getResponseID(): ?string {
        return $this->responseID;
    }

    /**
     * Set the response ID.
     *
     * @param string|null $responseID The response ID.
     * @return self Returns this instance.
     */
    public function setResponseID(?string $responseID): self {
        $this->responseID = $responseID;
        return $this;
    }
}
