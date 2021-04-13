<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Request;

use Exception;
use InvalidArgumentException;
use WBW\Library\SMSMode\Request\SendingSMSBatchRequest;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * Sending SMS batch request test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Request
 */
class SendingSMSBatchRequestTest extends AbstractTestCase {

    /**
     * Tests the setFichier() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFichier(): void {

        $obj = new SendingSMSBatchRequest();

        $obj->setFichier($this->fichier);
        $this->assertEquals($this->fichier, $obj->getFichier());
    }

    /**
     * Tests the setFichier() method.
     *
     * @return void
     */
    public function testSetFichierWithInvalidArgumentException(): void {

        $obj = new SendingSMSBatchRequest();

        try {

            $obj->setFichier("fichier");
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('File "fichier" could not be found.', $ex->getMessage());
        }
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/http/1.6/sendSMSBatch.do", SendingSMSBatchRequest::SENDING_SMS_BATCH_RESOURCE_PATH);

        $obj = new SendingSMSBatchRequest();

        $this->assertNull($obj->getClasseMsg());
        $this->assertNull($obj->getDateEnvoi());
        $this->assertNull($obj->getEmetteur());
        $this->assertNull($obj->getFichier());
        $this->assertNull($obj->getNbrMsg());
        $this->assertNull($obj->getNotificationUrl());
        $this->assertNull($obj->getRefClient());
        $this->assertEquals(SendingSMSBatchRequest::SENDING_SMS_BATCH_RESOURCE_PATH, $obj->getResourcePath());
    }
}
