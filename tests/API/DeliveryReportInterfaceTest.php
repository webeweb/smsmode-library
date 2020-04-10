<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\API;

use WBW\Library\SMSMode\API\DeliveryReportCallbackInterface;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Delivery report interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\API
 */
class DeliveryReportInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $this->assertEquals("date_reception", DeliveryReportCallbackInterface::PARAMETER_DATE_RECEPTION);
        $this->assertEquals("mcc_mnc", DeliveryReportCallbackInterface::PARAMETER_MCC_MNC);
        $this->assertEquals("numero", DeliveryReportCallbackInterface::PARAMETER_NUMERO);
        $this->assertEquals("refClient", DeliveryReportCallbackInterface::PARAMETER_REF_CLIENT);
        $this->assertEquals("smsID", DeliveryReportCallbackInterface::PARAMETER_SMS_ID);
        $this->assertEquals("statut", DeliveryReportCallbackInterface::PARAMETER_STATUT);
    }
}
