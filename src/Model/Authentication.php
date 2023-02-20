<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Model;

use WBW\Library\SmsMode\Traits\Strings\StringAccessTokenTrait;

/**
 * Authentication.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Model
 */
class Authentication {

    use StringAccessTokenTrait;

    /**
     * Pass.
     *
     * @var string|null
     */
    private $pass;

    /**
     * Pseudo.
     *
     * @var string|null
     */
    private $pseudo;

    /**
     * Constructor.
     *
     * @param string|null $pseudo The pseudo.
     * @param string|null $pass The pass.
     */
    public function __construct(string $pseudo = null, string $pass = null) {
        $this->setPass($pass);
        $this->setPseudo($pseudo);
    }

    /**
     * Get the pass.
     *
     * @return string|null Returns the pass.
     */
    public function getPass(): ?string {
        return $this->pass;
    }

    /**
     * Get the pseudo.
     *
     * @return string|null Returns the pseudo.
     */
    public function getPseudo(): ?string {
        return $this->pseudo;
    }

    /**
     * Set the pass.
     *
     * @param string|null $pass The pass.
     * @return Authentication Returns this authentication.
     */
    public function setPass(?string $pass): Authentication {
        $this->pass = $pass;
        return $this;
    }

    /**
     * Set the pseudo.
     *
     * @param string|null $pseudo The pseudo.
     * @return Authentication Returns this authentication.
     */
    public function setPseudo(?string $pseudo): Authentication {
        $this->pseudo = $pseudo;
        return $this;
    }
}
