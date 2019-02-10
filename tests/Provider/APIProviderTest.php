<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Provider;

use Exception;
use InvalidArgumentException;
use WBW\Library\SMSMode\Model\Authentication;
use WBW\Library\SMSMode\Model\Request\AccountBalanceRequest;
use WBW\Library\SMSMode\Model\Request\AddingContactRequest;
use WBW\Library\SMSMode\Model\Request\CheckingSMSMessageStatusRequest;
use WBW\Library\SMSMode\Model\Request\CreatingAPIKeyRequest;
use WBW\Library\SMSMode\Model\Request\CreatingSubAccountRequest;
use WBW\Library\SMSMode\Model\Request\DeletingSMSRequest;
use WBW\Library\SMSMode\Model\Request\DeletingSubAccountRequest;
use WBW\Library\SMSMode\Model\Request\DeliveryReportRequest;
use WBW\Library\SMSMode\Model\Request\RetrievingSMSReplyRequest;
use WBW\Library\SMSMode\Model\Request\SendingSMSBatchRequest;
use WBW\Library\SMSMode\Model\Request\SendingSMSMessageRequest;
use WBW\Library\SMSMode\Model\Request\SendingTextToSpeechSMSRequest;
use WBW\Library\SMSMode\Model\Request\SendingUnicodeSMSRequest;
use WBW\Library\SMSMode\Model\Request\SentSMSMessageListRequest;
use WBW\Library\SMSMode\Model\Request\TransferringCreditsRequest;
use WBW\Library\SMSMode\Model\Response\AccountBalanceResponse;
use WBW\Library\SMSMode\Model\Response\AddingContactResponse;
use WBW\Library\SMSMode\Model\Response\CheckingSMSMessageStatusResponse;
use WBW\Library\SMSMode\Model\Response\CreatingSubAccountResponse;
use WBW\Library\SMSMode\Model\Response\DeletingSMSResponse;
use WBW\Library\SMSMode\Model\Response\DeletingSubAccountResponse;
use WBW\Library\SMSMode\Model\Response\DeliveryReportResponse;
use WBW\Library\SMSMode\Model\Response\RetrievingSMSReplyResponse;
use WBW\Library\SMSMode\Model\Response\SendingSMSBatchResponse;
use WBW\Library\SMSMode\Model\Response\SendingSMSMessageResponse;
use WBW\Library\SMSMode\Model\Response\SendingTextToSpeechSMSResponse;
use WBW\Library\SMSMode\Model\Response\SendingUnicodeSMSResponse;
use WBW\Library\SMSMode\Model\Response\SentSMSMessageListResponse;
use WBW\Library\SMSMode\Model\Response\TransferringCreditsResponse;
use WBW\Library\SMSMode\Provider\APIProvider;
use WBW\Library\SMSMode\Tests\AbstractTestCase;

/**
 * API provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Provider
 */
class APIProviderTest extends AbstractTestCase {

    /**
     * Authentication.
     *
     * @var Authentication
     */
    private $authentication;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set an Authentication mock.
        $this->authentication = new Authentication();
        $this->authentication->setPseudo("pseudo");
        $this->authentication->setPass("pass");
    }

    /**
     * Tests the accountBalance() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testAccountBalance() {

        // Set an Account balance request mock.
        $arg = new AccountBalanceRequest();

        $obj = new APIProvider($this->authentication);

        $res = $obj->accountBalance($arg);
        $this->assertInstanceOf(AccountBalanceResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     * Tests the addingContact() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testAddingContact() {

        // Set an Adding contact request mock.
        $arg = new AddingContactRequest();

        $arg->setNom("nom");
        $arg->setMobile("33600000000");

        $obj = new APIProvider($this->authentication);

        $res = $obj->addingContact($arg);
        $this->assertInstanceOf(AddingContactResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     * Tests the checkingSMSMessageStatus() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCheckingSMSMessageStatus() {

        // Set a Checking SMS message status request mock.
        $arg = new CheckingSMSMessageStatusRequest();
        $arg->setSmsID("smsID");

        $obj = new APIProvider($this->authentication);

        $res = $obj->checkingSMSMessageStatus($arg);
        $this->assertInstanceOf(CheckingSMSMessageStatusResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("https://api.smsmode.com", APIProvider::ENDPOINT_PATH);

        $obj = new APIProvider($this->authentication);

        $this->assertSame($this->authentication, $obj->getAuthentication());
        $this->assertFalse($obj->getDebug());
        $this->assertNotNull($obj->getRequestNormalizer());
    }

    /**
     * Tests the creatingAPIKey() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCreatingAPIKey() {

        // Set a Creating API key request mock.
        $arg = new CreatingAPIKeyRequest();

        $obj = new APIProvider($this->authentication);

        $res = $obj->creatingAPIKey($arg);

        $this->assertNull($res->getCode());
        $this->assertNull($res->getDescription());

        $this->assertNull($res->getAccessToken());
        $this->assertNull($res->getAccount());
        $this->assertNull($res->getCreationDate());
        $this->assertNull($res->getExpiration());
        $this->assertNull($res->getId());
        $this->assertNull($res->getState());

        $this->assertNotEquals([], $res->getException());
    }

    /**
     * Tests the creatingAPIKey() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCreatingAPIKeyWithInvalidArgumentException() {

        // Set a Creating API key request mock.
        $arg = new CreatingAPIKeyRequest();

        $obj = new APIProvider(new Authentication());

        try {

            $obj->creatingAPIKey($arg);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The mandatory parameter \"pseudo\" is missing", $ex->getMessage());
        }
    }

    /**
     * Tests the creatingSubAccount() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testCreatingSubAccount() {

        // Set a Creating sub-account request mock.
        $arg = new CreatingSubAccountRequest();
        $arg->setNewPseudo("newPseudo");
        $arg->setNewPass("newPass");

        $obj = new APIProvider($this->authentication);

        $res = $obj->creatingSubAccount($arg);
        $this->assertInstanceOf(CreatingSubAccountResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     * Tests the deletingSMS() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testDeletingSMS() {

        // Set a Deleting SMS request mock.
        $arg = new DeletingSMSRequest();
        $arg->setSmsID("smsID");

        $obj = new APIProvider($this->authentication);

        $res = $obj->deletingSMS($arg);
        $this->assertInstanceOf(DeletingSMSResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     * Tests the deletingSubAccount() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testDeletingSubAccount() {

        // Set a Deleting sub-account request mock.
        $arg = new DeletingSubAccountRequest();
        $arg->setPseudoToDelete("pseudoToDelete");

        $obj = new APIProvider($this->authentication);

        $res = $obj->deletingSubAccount($arg);
        $this->assertInstanceOf(DeletingSubAccountResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     * Tests the deliveryReport() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testDeliveryReport() {

        // Set a Delivery report request mock.
        $arg = new DeliveryReportRequest();
        $arg->setSmsID("smsID");

        $obj = new APIProvider($this->authentication);

        $res = $obj->deliveryReport($arg);
        $this->assertInstanceOf(DeliveryReportResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     * Tests the retrievingSMSReply() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testRetrievingSMSReply() {

        // Set a Retrieving SMS reply request mock.
        $arg = new RetrievingSMSReplyRequest();

        $obj = new APIProvider($this->authentication);

        $res = $obj->retrievingSMSReply($arg);
        $this->assertInstanceOf(RetrievingSMSReplyResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     * Tests the sendingSMSBatch() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSendingSMSBatch() {

        // Set a Fichier mock.
        $fichier = getcwd() . "/tests/Fixtures/Model/Request/SendingSMSBatchRequest.csv";

        // Set a Sending SMS message batch mock.
        $arg = new SendingSMSBatchRequest();
        $arg->setFichier($fichier);

        $obj = new APIProvider($this->authentication);

        $res = $obj->sendingSMSBatch($arg);
        $this->assertInstanceOf(SendingSMSBatchResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     * Tests the sendingSMSMessage() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSendingSMSMessage() {

        // Set a Sending SMS message request mock.
        $arg = new SendingSMSMessageRequest();
        $arg->setMessage("message");
        $arg->addNumero("33600000000");

        $obj = new APIProvider($this->authentication);

        $res = $obj->sendingSMSMessage($arg);
        $this->assertInstanceOf(SendingSMSMessageResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     * Tests the sendingTextToSpeechSMS() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSendingTextToSpeechSMS() {

        // Set a Sending text-to-speech SMS request mock.
        $arg = new SendingTextToSpeechSMSRequest();
        $arg->setMessage("message");
        $arg->addNumero("33600000000");

        $obj = new APIProvider($this->authentication);

        $res = $obj->sendingTextToSpeechSMS($arg);
        $this->assertInstanceOf(SendingTextToSpeechSMSResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     * Tests the sendingUnicodeSMS() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSendingUnicodeSMS() {

        // Set a Sending unicode SMS request mock.
        $arg = new SendingUnicodeSMSRequest();
        $arg->setMessage("message");
        $arg->addNumero("33600000000");

        $obj = new APIProvider($this->authentication);

        $res = $obj->sendingUnicodeSMS($arg);
        $this->assertInstanceOf(SendingUnicodeSMSResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     * Tests the sentSMSMessageList() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSentSMSMessageList() {

        // Set a Sent SMS message list request mock.
        $arg = new SentSMSMessageListRequest();

        $obj = new APIProvider($this->authentication);

        $res = $obj->sentSMSMessageList($arg);
        $this->assertInstanceOf(SentSMSMessageListResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }

    /**
     * Tests the setDebug() method.
     *
     * @return void
     */
    public function testSetDebug() {

        $obj = new APIProvider($this->authentication);

        $obj->setDebug(true);
        $this->assertTrue($obj->getDebug());
    }

    /**
     * Tests the transferringCredits() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testTransferringCredits() {

        // Set a Transferring credits request mock.
        $arg = new TransferringCreditsRequest();
        $arg->setCreditAmount(212);
        $arg->setTargetPseudo("targetPseudo");

        $obj = new APIProvider($this->authentication);

        $res = $obj->transferringCredits($arg);
        $this->assertInstanceOf(TransferringCreditsResponse::class, $res);

        $this->assertEquals(32, $res->getCode());
        $this->assertRegExp("/.*/", $res->getDescription());
    }
}
