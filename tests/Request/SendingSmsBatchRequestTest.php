<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Tests\Request;

use InvalidArgumentException;
use Throwable;
use WBW\Library\SmsMode\Request\SendingSmsBatchRequest;
use WBW\Library\SmsMode\Tests\AbstractTestCase;

/**
 * Sending SMS batch request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Request
 */
class SendingSmsBatchRequestTest extends AbstractTestCase {

    /**
     * Test setFichier()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetFichier(): void {

        $obj = new SendingSmsBatchRequest();

        $obj->setFichier($this->fichier);
        $this->assertEquals($this->fichier, $obj->getFichier());
    }

    /**
     * Test setFichier()
     *
     * @return void
     */
    public function testSetFichierWithInvalidArgumentException(): void {

        $obj = new SendingSmsBatchRequest();

        try {

            $obj->setFichier("fichier");
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('File "fichier" could not be found.', $ex->getMessage());
        }
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/http/1.6/sendSMSBatch.do", SendingSmsBatchRequest::SENDING_SMS_BATCH_RESOURCE_PATH);

        $obj = new SendingSmsBatchRequest();

        $this->assertNull($obj->getClasseMsg());
        $this->assertNull($obj->getDateEnvoi());
        $this->assertNull($obj->getEmetteur());
        $this->assertNull($obj->getFichier());
        $this->assertNull($obj->getNbrMsg());
        $this->assertNull($obj->getNotificationUrl());
        $this->assertNull($obj->getRefClient());
        $this->assertEquals(SendingSmsBatchRequest::SENDING_SMS_BATCH_RESOURCE_PATH, $obj->getResourcePath());
    }
}
