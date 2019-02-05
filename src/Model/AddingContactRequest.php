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

use UnexpectedValueException;
use WBW\Library\SMSMode\Traits\DateTrait;
use WBW\Library\SMSMode\Traits\MobileTrait;
use WBW\Library\SMSMode\Traits\NomTrait;
use WBW\Library\SMSMode\Traits\PrenomTrait;
use WBW\Library\SMSMode\Traits\SocieteTrait;

/**
 * Adding contact request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class AddingContactRequest extends AbstractRequest {

    use DateTrait;
    use MobileTrait;
    use NomTrait;
    use PrenomTrait;
    use SocieteTrait;

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
     * @var string
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
    public function addGroupe($groupe) {
        $this->groupes[] = $groupe;
        return $this;
    }

    /**
     * Get the groupes.
     *
     * @return string[] Returns the groupes.
     */
    public function getGroupes() {
        return $this->groupes;
    }

    /**
     * Get the other.
     *
     * @return string Returns the other.
     */
    public function getOther() {
        return $this->other;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath() {
        return self::ADDING_CONTACT_RESOURCE_PATH;
    }

    /**
     * Set the groupes.
     *
     * @param string[] $groupes The groupes.
     * @return AddingContactRequest Returns this adding contact request.
     */
    public function setGroupes(array $groupes = []) {
        $this->groupes = $groupes;
        return $this;
    }

    /**
     * Set the mobile.
     *
     * @param string $mobile The mobile.
     * @return AddingContactRequest Returns this adding contact request.
     * @throws UnexpectedValueException Throws an unexpected value exception if the numero is invalid.
     */
    public function setMobile($mobile) {
        static::checkNumero($mobile);
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * Set the other.
     *
     * @param string $other The other.
     * @return AddingContactRequest Returns this adding contact request.
     */
    public function setOther($other) {
        $this->other = $other;
        return $this;
    }
}
