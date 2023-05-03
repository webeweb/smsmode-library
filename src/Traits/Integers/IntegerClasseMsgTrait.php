<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Traits\Integers;

use InvalidArgumentException;
use WBW\Library\SmsMode\Api\SendingSmsBatchInterface;

/**
 * Integer classe msg trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Traits\Integers
 */
trait IntegerClasseMsgTrait {

    /**
     * Classe msg.
     *
     * @var int|null
     */
    private $classeMsg;

    /**
     * Enumerate the classe msg.
     *
     * @return int[] Returns the classe msg enumeration.
     */
    public function enumClasseMsg(): array {

        return [
            SendingSmsBatchInterface::CLASSE_MSG_SMS,
            SendingSmsBatchInterface::CLASSE_MSG_SMS_PRO,
        ];
    }

    /**
     * Get the classe msg.
     *
     * @return int|null Returns the classe msg.
     */
    public function getClasseMsg(): ?int {
        return $this->classeMsg;
    }

    /**
     * Set the classe msg.
     *
     * @param int|null $classeMsg The classe msg.
     * @return self Returns this instance.
     * @throws InvalidArgumentException Throws an invalid argument exception exception if the classe msg is invalid.
     */
    public function setClasseMsg(?int $classeMsg): self {
        if (null !== $classeMsg && false === in_array($classeMsg, $this->enumClasseMsg())) {
            throw new InvalidArgumentException(sprintf('The classe msg "%s" is invalid', $classeMsg));
        }
        $this->classeMsg = $classeMsg;
        return $this;
    }
}
