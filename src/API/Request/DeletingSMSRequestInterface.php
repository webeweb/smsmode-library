<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\API\Request;

use WBW\Library\SMSMode\API\RequestInterface;

/**
 * Deleting SMS request interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\API\Request
 */
interface DeletingSMSRequestInterface extends RequestInterface {

    /**
     * Deleting SMS resource path.
     *
     * @var string
     */
    const DELETING_SMS_RESOURCE_PATH = "/1.6/deleteSMS.do";

    /**
     * Get the numero.
     *
     * @return string Returns the numero.
     */
    public function getNumero();

    /**
     * Get the sms ID.
     *
     * @return string Returns the sms ID.
     */
    public function getSmsID();

    /**
     * Set the numero.
     *
     * @param string $numero The numero.
     * @return DeletingSMSRequestInterface Returns this deleting SMS request.
     */
    public function setNumero($numero);

    /**
     * Set the sms ID.
     *
     * @param string $smsID The sms ID.
     * @return DeletingSMSRequestInterface Returns this deleting SMS request.
     */
    public function setSmsID($smsID);
}
