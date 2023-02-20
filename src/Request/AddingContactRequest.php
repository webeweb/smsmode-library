<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Request;

use UnexpectedValueException;
use WBW\Library\SmsMode\Serializer\NumeroSerializer;
use WBW\Library\SmsMode\Traits\Strings\StringMobileTrait;
use WBW\Library\SmsMode\Traits\Strings\StringNomTrait;
use WBW\Library\SmsMode\Traits\Strings\StringPrenomTrait;
use WBW\Library\SmsMode\Traits\Strings\StringSocieteTrait;
use WBW\Library\Traits\DateTimes\DateTimeDateTrait;

/**
 * Adding contact request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Request
 */
class AddingContactRequest extends AbstractRequest {

    use DateTimeDateTrait;
    use StringMobileTrait;
    use StringNomTrait;
    use StringPrenomTrait;
    use StringSocieteTrait;

    /**
     * Adding contact resource path.
     *
     * @var string
     */
    const ADDING_CONTACT_RESOURCE_PATH = "/http/1.6/addContact.do";

    /**
     * Groupes.
     *
     * @var string[]
     */
    private $groupes;

    /**
     * Other.
     *
     * @var string|null
     */
    private $other;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();

        $this->setGroupes([]);
    }

    /**
     * Add a groupe.
     *
     * @param string $groupe The groupe.
     * @return AddingContactRequest Returns this adding contact request.
     */
    public function addGroupe(string $groupe): AddingContactRequest {
        $this->groupes[] = $groupe;
        return $this;
    }

    /**
     * Get the groupes.
     *
     * @return string[] Returns the groupes.
     */
    public function getGroupes(): array {
        return $this->groupes;
    }

    /**
     * Get the other.
     *
     * @return string|null Returns the other.
     */
    public function getOther(): ?string {
        return $this->other;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath(): string {
        return self::ADDING_CONTACT_RESOURCE_PATH;
    }

    /**
     * Set the groupes.
     *
     * @param string[] $groupes The groupes.
     * @return AddingContactRequest Returns this adding contact request.
     */
    public function setGroupes(array $groupes = []): AddingContactRequest {
        $this->groupes = $groupes;
        return $this;
    }

    /**
     * Set the mobile.
     *
     * @param string|null $mobile The mobile.
     * @return AddingContactRequest Returns this adding contact request.
     * @throws UnexpectedValueException Throws an unexpected value exception if the numero is invalid.
     */
    public function setMobile(?string $mobile): AddingContactRequest {
        NumeroSerializer::checkNumero($mobile);
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * Set the other.
     *
     * @param string|null $other The other.
     * @return AddingContactRequest Returns this adding contact request.
     */
    public function setOther(?string $other): AddingContactRequest {
        $this->other = $other;
        return $this;
    }
}
