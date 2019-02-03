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
 * Classe msg trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Traits
 */
trait ClasseMsgTrait {

    /**
     * Classe msg.
     *
     * @var int
     */
    private $classeMsg;

    /**
     * Enumerates the classe msg.
     *
     * @return array Returns the classe msg enumeration.
     */
    public function enumClasseMsg() {
        return [
            ClasseMsgInterface::CLASSE_MSG_SMS,
            ClasseMsgInterface::CLASSE_MSG_SMS_PRO,
        ];
    }

    /**
     * Get the classe msg.
     *
     * @return int Returns the classe msg.
     */
    public function getClasseMsg() {
        return $this->classeMsg;
    }

    /**
     * Set the classe msg.
     *
     * @param int $classeMsg The classe msg.
     * @throws UnexpectedValueException Throws an unexpected value exception exception if the classe msg is invalid.
     */
    public function setClasseMsg($classeMsg) {
        if (false === in_array($classeMsg, $this->enumClasseMsg())) {
            throw new UnexpectedValueException(sprintf("The classe msg \"%s\" is invalid", $classeMsg));
        }
        $this->classeMsg = $classeMsg;
        return $this;
    }
}
