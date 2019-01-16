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
 * Delivery report request interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\API\Request
 */
interface DeliveryReportRequestInterface extends RequestInterface {

    /**
     * Delivery report resource path.
     *
     * @var string
     */
    const DELIVERY_REPORT_RESOURCE_PATH = "/1.6/compteRendu.do";

    /**
     * Get the sms ID.
     *
     * @return string Returns the sms ID.
     */
    public function getSmsID();

    /**
     * Set the sms ID.
     *
     * @param string $smsID The sms ID.
     * @return DeliveryReportRequestInterface Returns this delivery report request.
     */
    public function setSmsID($smsID);
}
