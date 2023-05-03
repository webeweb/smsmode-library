<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Tests\Serializer;

use WBW\Library\SmsMode\Model\DeliveryReport;
use WBW\Library\SmsMode\Model\SentSmsMessage;
use WBW\Library\SmsMode\Model\SmsReply;
use WBW\Library\SmsMode\Response\AccountBalanceResponse;
use WBW\Library\SmsMode\Response\AddingContactResponse;
use WBW\Library\SmsMode\Response\CheckingSmsMessageStatusResponse;
use WBW\Library\SmsMode\Response\CreatingApiKeyResponse;
use WBW\Library\SmsMode\Response\CreatingSubAccountResponse;
use WBW\Library\SmsMode\Response\DeletingSmsResponse;
use WBW\Library\SmsMode\Response\DeletingSubAccountResponse;
use WBW\Library\SmsMode\Response\DeliveryReportResponse;
use WBW\Library\SmsMode\Response\RetrievingSmsReplyResponse;
use WBW\Library\SmsMode\Response\SendingSmsBatchResponse;
use WBW\Library\SmsMode\Response\SendingSmsMessageResponse;
use WBW\Library\SmsMode\Response\SendingTextToSpeechSmsResponse;
use WBW\Library\SmsMode\Response\SendingUnicodeSmsResponse;
use WBW\Library\SmsMode\Response\SentSmsMessageListResponse;
use WBW\Library\SmsMode\Response\TransferringCreditsResponse;
use WBW\Library\SmsMode\Serializer\ResponseDeserializer;
use WBW\Library\SmsMode\Tests\AbstractTestCase;
use WBW\Library\SmsMode\Tests\Fixtures\Serializer\TestResponseDeserializer;

/**
 * Object deserializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Serializer
 */
class ResponseDeserializerTest extends AbstractTestCase {

    /**
     * Test deserializeAccountBalanceResponse()
     *
     * @return void
     */
    public function testDeserializeAccountBalanceResponse(): void {

        // Initialize a Raw response mock.
        $rawResponse = "212.5";

        $obj = ResponseDeserializer::deserializeAccountBalanceResponse($rawResponse);
        $this->assertInstanceOf(AccountBalanceResponse::class, $obj);

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());
        $this->assertEquals($rawResponse, $obj->getRawResponse());

        $this->assertEquals(212.5, $obj->getAccountBalance());
    }

    /**
     * Test deserializeAccountBalanceResponse()
     *
     * @return void
     */
    public function testDeserializeAccountBalanceResponseWithNegative(): void {

        // Initialize a Raw response mock.
        $rawResponse = "-212.5";

        $obj = ResponseDeserializer::deserializeAccountBalanceResponse($rawResponse);
        $this->assertInstanceOf(AccountBalanceResponse::class, $obj);

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());
        $this->assertEquals($rawResponse, $obj->getRawResponse());

        $this->assertEquals(-212.5, $obj->getAccountBalance());
    }

    /**
     * Test deserializeAddingContactResponse()
     *
     * @return void
     */
    public function testDeserializeAddingContactResponse(): void {

        // Initialize a Raw response mock.
        $rawResponse = "0 | Contact added";

        $obj = ResponseDeserializer::deserializeAddingContactResponse($rawResponse);
        $this->assertInstanceOf(AddingContactResponse::class, $obj);

        $this->assertEquals(0, $obj->getCode());
        $this->assertEquals("Contact added", $obj->getDescription());
        $this->assertEquals($rawResponse, $obj->getRawResponse());
    }

    /**
     * Test deserializeCheckingSmsMessageStatusResponse()
     *
     * @return void
     */
    public function testDeserializeCheckingSmsMessageStatusResponse(): void {

        // Initialize a Raw response mock.
        $rawResponse = "0 | Sent";

        $obj = ResponseDeserializer::deserializeCheckingSmsMessageStatusResponse($rawResponse);
        $this->assertInstanceOf(CheckingSmsMessageStatusResponse::class, $obj);

        $this->assertEquals(0, $obj->getCode());
        $this->assertEquals("Sent", $obj->getDescription());
        $this->assertEquals($rawResponse, $obj->getRawResponse());
    }

    /**
     * Test deserializeCreatingApiKeyResponse()
     *
     * @return void
     */
    public function testDeserializeCreatingApiKeyResponse(): void {

        // Initialize a Raw response mock.
        $rawResponse = <<< EOT
{
    "id":"id",
    "accessToken":"accessToken",
    "creationDate":"21012019",
    "state":"state",
    "expiration":"22012019",
    "account":"account"
}
EOT;

        $obj = ResponseDeserializer::deserializeCreatingApiKeyResponse($rawResponse);
        $this->assertInstanceOf(CreatingApiKeyResponse::class, $obj);

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());
        $this->assertEquals($rawResponse, $obj->getRawResponse());

        $this->assertEquals("id", $obj->getId());
        $this->assertEquals("accessToken", $obj->getAccessToken());
        $this->assertEquals("2019-01-21", $obj->getCreationDate()->format("Y-m-d"));
        $this->assertEquals("state", $obj->getState());
        $this->assertEquals("2019-01-22", $obj->getExpiration()->format("Y-m-d"));
        $this->assertEquals("account", $obj->getAccount());
    }

    /**
     * Test deserializeCreatingSubAccountResponse()
     *
     * @return void
     */
    public function testDeserializeCreatingSubAccountResponse(): void {

        // Initialize a Raw response mock.
        $rawResponse = "0 | Sub-account created";

        $obj = ResponseDeserializer::deserializeCreatingSubAccountResponse($rawResponse);
        $this->assertInstanceOf(CreatingSubAccountResponse::class, $obj);

        $this->assertEquals(0, $obj->getCode());
        $this->assertEquals("Sub-account created", $obj->getDescription());
        $this->assertEquals($rawResponse, $obj->getRawResponse());
    }

    /**
     * Test deserializeDeletingSmsResponse()
     *
     * @return void
     */
    public function testDeserializeDeletingSmsResponse(): void {

        // Initialize a Raw response mock.
        $rawResponse = "0 | SMS message deleted";

        $obj = ResponseDeserializer::deserializeDeletingSmsResponse($rawResponse);
        $this->assertInstanceOf(DeletingSmsResponse::class, $obj);

        $this->assertEquals(0, $obj->getCode());
        $this->assertEquals("SMS message deleted", $obj->getDescription());
        $this->assertEquals($rawResponse, $obj->getRawResponse());
    }

    /**
     * Test deserializeDeletingSubAccountResponse()
     *
     * @return void
     */
    public function testDeserializeDeletingSubAccountResponse(): void {

        // Initialize a Raw response mock.
        $rawResponse = "0 | Sub-account deleted";

        $obj = ResponseDeserializer::deserializeDeletingSubAccountResponse($rawResponse);
        $this->assertInstanceOf(DeletingSubAccountResponse::class, $obj);

        $this->assertEquals(0, $obj->getCode());
        $this->assertEquals("Sub-account deleted", $obj->getDescription());
        $this->assertEquals($rawResponse, $obj->getRawResponse());
    }

    /**
     * Test deserializeDeliveryReport()
     *
     * @return void
     */
    public function testDeserializeDeliveryReport(): void {

        // Initialize a Raw response mock.
        // $rawResponse = "33600000000 0"; /* A well formed raw response */
        $rawResponse = "  33600000000  0  "; /* A bad formed raw response */

        $obj = TestResponseDeserializer::deserializeDeliveryReport($rawResponse);
        $this->assertInstanceOf(DeliveryReport::class, $obj);

        $this->assertEquals(0, $obj->getCode());
        $this->assertNull($obj->getDescription());
        $this->assertEquals($rawResponse, $obj->getRawResponse());

        $this->assertEquals("33600000000", $obj->getNumero());
    }

    /**
     * Test deserializeDeliveryReport()
     *
     * @return void
     */
    public function testDeserializeDeliveryReportResponse(): void {

        // Initialize a Raw response mock.
        // $rawResponse = "33600000001 0 | 33600000002 2 | 33600000003 11"; /* A well formed delivery report. */
        $rawResponse = "  33600000001  0  |  33600000002  2  |  33600000003  11  "; /* A bad formed delivery report */

        $obj = ResponseDeserializer::deserializeDeliveryReportResponse($rawResponse);
        $this->assertInstanceOf(DeliveryReportResponse::class, $obj);

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());
        $this->assertEquals($rawResponse, $obj->getRawResponse());

        $this->assertCount(3, $obj->getDeliveryReports());

        $this->assertEquals(0, $obj->getDeliveryReports()[0]->getCode());
        $this->assertEquals("33600000001", $obj->getDeliveryReports()[0]->getNumero());

        $this->assertEquals(2, $obj->getDeliveryReports()[1]->getCode());
        $this->assertEquals("33600000002", $obj->getDeliveryReports()[1]->getNumero());

        $this->assertEquals(11, $obj->getDeliveryReports()[2]->getCode());
        $this->assertEquals("33600000003", $obj->getDeliveryReports()[2]->getNumero());
    }

    /**
     * Test deserializeDeliveryReport()
     *
     * @return void
     */
    public function testDeserializeDeliveryReportResponseWithException(): void {

        // Initialize a Raw response mock.
        $rawResponse = "31 | Internal error";

        $obj = ResponseDeserializer::deserializeDeliveryReportResponse($rawResponse);
        $this->assertInstanceOf(DeliveryReportResponse::class, $obj);

        $this->assertEquals(31, $obj->getCode());
        $this->assertEquals("Internal error", $obj->getDescription());
        $this->assertEquals($rawResponse, $obj->getRawResponse());

        $this->assertCount(0, $obj->getDeliveryReports());
    }

    /**
     * Test deserializeDeliveryReport()
     *
     * @return void
     */
    public function testDeserializeDeliveryReportWithoutArguments(): void {

        // Initialize a Raw response mock.
        // $rawResponse = "33600000000 0"; /* A well formed raw response */
        $rawResponse = "33600000000"; /* A bad formed raw response */

        $obj = TestResponseDeserializer::deserializeDeliveryReport($rawResponse);
        $this->assertInstanceOf(DeliveryReport::class, $obj);

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());
        $this->assertEquals($rawResponse, $obj->getRawResponse());

        $this->assertNull($obj->getNumero());
    }

    /**
     * Test deserializeResponse()
     *
     * @return void
     */
    public function testDeserializeResponse(): void {

        // Set a Sent SMS message response mock.
        $obj = new SendingSmsMessageResponse();

        // Initialize a Raw response mock.
        // $rawResponse = "0 | Sent"; /* A well formed raw response */
        $rawResponse = "0"; /* A bad formed raw response */

        TestResponseDeserializer::deserializeResponse($obj, $rawResponse);

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());
        $this->assertEquals($rawResponse, $obj->getRawResponse());
    }

    /**
     * Test deserializeRetrievingSmsReplyResponse()
     *
     * @return void
     */
    public function testDeserializeRetrievingSmsReplyResponse(): void {

        // Initialize a Raw response mock.
        $rawResponse = <<< EOT
responseID1 | 23012019-18:00 | 33600000001 | text1 | to1 | messageID1
responseID2 | 23012019-19:00 | 33600000002 | text2 | to2 | messageID2
responseID3 | 23012019-20:00 | 33600000003 | text3 | to3 | messageID3
EOT;

        $obj = ResponseDeserializer::deserializeRetrievingSmsReplyResponse($rawResponse);
        $this->assertInstanceOf(RetrievingSmsReplyResponse::class, $obj);

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());
        $this->assertEquals($rawResponse, $obj->getRawResponse());

        $this->assertCount(3, $obj->getSmsReplies());

        $this->assertEquals("responseID1", $obj->getSmsReplies()[0]->getResponseID());
        $this->assertEquals("2019-01-23 18:00", $obj->getSmsReplies()[0]->getReceptionDate()->format("Y-m-d H:i"));
        $this->assertEquals("33600000001", $obj->getSmsReplies()[0]->getFrom());
        $this->assertEquals("text1", $obj->getSmsReplies()[0]->getText());
        $this->assertEquals("to1", $obj->getSmsReplies()[0]->getTo());
        $this->assertEquals("messageID1", $obj->getSmsReplies()[0]->getMessageID());

        $this->assertEquals("responseID2", $obj->getSmsReplies()[1]->getResponseID());
        $this->assertEquals("2019-01-23 19:00", $obj->getSmsReplies()[1]->getReceptionDate()->format("Y-m-d H:i"));
        $this->assertEquals("33600000002", $obj->getSmsReplies()[1]->getFrom());
        $this->assertEquals("text2", $obj->getSmsReplies()[1]->getText());
        $this->assertEquals("to2", $obj->getSmsReplies()[1]->getTo());
        $this->assertEquals("messageID2", $obj->getSmsReplies()[1]->getMessageID());

        $this->assertEquals("responseID3", $obj->getSmsReplies()[2]->getResponseID());
        $this->assertEquals("2019-01-23 20:00", $obj->getSmsReplies()[2]->getReceptionDate()->format("Y-m-d H:i"));
        $this->assertEquals("33600000003", $obj->getSmsReplies()[2]->getFrom());
        $this->assertEquals("text3", $obj->getSmsReplies()[2]->getText());
        $this->assertEquals("to3", $obj->getSmsReplies()[2]->getTo());
        $this->assertEquals("messageID3", $obj->getSmsReplies()[2]->getMessageID());
    }

    /**
     * Test deserializeRetrievingSmsReplyResponse()
     *
     * @return void
     */
    public function testDeserializeRetrievingSmsReplyResponseWithException(): void {

        // Initialize a Raw response mock.
        $rawResponse = "32 | Authentication error";

        $obj = ResponseDeserializer::deserializeRetrievingSmsReplyResponse($rawResponse);
        $this->assertInstanceOf(RetrievingSmsReplyResponse::class, $obj);

        $this->assertEquals(32, $obj->getCode());
        $this->assertEquals("Authentication error", $obj->getDescription());
        $this->assertEquals($rawResponse, $obj->getRawResponse());

        $this->assertCount(0, $obj->getSmsReplies());
    }

    /**
     * Test deserializeSendingSmsBatchResponse()
     *
     * @return void
     */
    public function testDeserializeSendingSmsBatchResponse(): void {

        // Initialize a Raw response mock.
        $rawResponse = "0 | Accepted | campagneID";

        $obj = ResponseDeserializer::deserializeSendingSmsBatchResponse($rawResponse);
        $this->assertInstanceOf(SendingSmsBatchResponse::class, $obj);

        $this->assertEquals(0, $obj->getCode());
        $this->assertEquals("Accepted", $obj->getDescription());
        $this->assertEquals($rawResponse, $obj->getRawResponse());

        $this->assertEquals("campagneID", $obj->getCampagneID());
    }

    /**
     * Test deserializeSendingSmsMessageResponse()
     *
     * @return void
     */
    public function testDeserializeSendingSmsMessageResponse(): void {

        // Initialize a Raw response mock.
        $rawResponse = "0 | Accepted | smsID";

        $obj = ResponseDeserializer::deserializeSendingSmsMessageResponse($rawResponse);
        $this->assertInstanceOf(SendingSmsMessageResponse::class, $obj);

        $this->assertEquals(0, $obj->getCode());
        $this->assertEquals("Accepted", $obj->getDescription());
        $this->assertEquals($rawResponse, $obj->getRawResponse());

        $this->assertEquals("smsID", $obj->getSmsID());
    }

    /**
     * Test deserializeSendingTextToSpeechSmsResponse()
     *
     * @return void
     */
    public function testDeserializeSendingTextToSpeechSmsResponse(): void {

        // Initialize a Raw response mock.
        $rawResponse = "0 | Accepted | smsID";

        $obj = ResponseDeserializer::deserializeSendingTextToSpeechSmsResponse($rawResponse);
        $this->assertInstanceOf(SendingTextToSpeechSmsResponse::class, $obj);

        $this->assertEquals(0, $obj->getCode());
        $this->assertEquals("Accepted", $obj->getDescription());
        $this->assertEquals($rawResponse, $obj->getRawResponse());

        $this->assertEquals("smsID", $obj->getSmsID());
    }

    /**
     * Test deserializeSendingUnicodeSmsResponse()
     *
     * @return void
     */
    public function testDeserializeSendingUnicodeSmsResponse(): void {

        // Initialize a Raw response mock.
        $rawResponse = "0 | Accepted | smsID";

        $obj = ResponseDeserializer::deserializeSendingUnicodeSmsResponse($rawResponse);
        $this->assertInstanceOf(SendingUnicodeSmsResponse::class, $obj);

        $this->assertEquals(0, $obj->getCode());
        $this->assertEquals("Accepted", $obj->getDescription());
        $this->assertEquals($rawResponse, $obj->getRawResponse());

        $this->assertEquals("smsID", $obj->getSmsID());
    }

    /**
     * Test deserializeSentSmsMessage()
     *
     * @return void
     */
    public function testDeserializeSentSmsMessage(): void {

        // Initialize a Raw response mock.
        // $rawResponse = "smsID | 23012019-18:00 | message | 33600000000 | 0.1 | 1"; /* A well formed raw response */
        $rawResponse = "  smsID  |  23/01/2019 18:00  |  message  | 33600000000  |  0.1  |  1  "; /* A bad formed raw response */

        $obj = TestResponseDeserializer::deserializeSentSmsMessage($rawResponse);
        $this->assertInstanceOf(SentSmsMessage::class, $obj);

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());
        $this->assertEquals($rawResponse, $obj->getRawResponse());

        $this->assertEquals("smsID", $obj->getSmsID());
        $this->assertEquals("2019-01-23 18:00", $obj->getSendDate()->format("Y-m-d H:i"));
        $this->assertEquals("message", $obj->getMessage());
        $this->assertEquals("33600000000", $obj->getNumero());
        $this->assertEquals(0.1, $obj->getCostCredits());
        $this->assertEquals(1, $obj->getRecipientCount());
    }

    /**
     * Test deserializeSentSmsMessageListResponse()
     *
     * @return void
     */
    public function testDeserializeSentSmsMessageListResponse(): void {

        // Initialize a Raw response mock.
        $rawResponse = <<< EOT
smsID1 | 23/01/2019 18:00 | message1 | 33600000001 | 0.1 | 1

smsID2 | 23/01/2019 19:00 | message2 | 33600000002 | 0.2 | 2

smsID3 | 23/01/2019 20:00 | message3 | 33600000003 | 0.3 | 3
EOT;

        $obj = ResponseDeserializer::deserializeSentSmsMessageListResponse($rawResponse);
        $this->assertInstanceOf(SentSmsMessageListResponse::class, $obj);

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());
        $this->assertEquals($rawResponse, $obj->getRawResponse());

        $this->assertCount(3, $obj->getSentSmsMessages());

        $this->assertEquals("smsID1", $obj->getSentSmsMessages()[0]->getSmsID());
        $this->assertEquals("2019-01-23 18:00", $obj->getSentSmsMessages()[0]->getSendDate()->format("Y-m-d H:i"));
        $this->assertEquals("message1", $obj->getSentSmsMessages()[0]->getMessage());
        $this->assertEquals("33600000001", $obj->getSentSmsMessages()[0]->getNumero());
        $this->assertEquals(0.1, $obj->getSentSmsMessages()[0]->getCostCredits());
        $this->assertEquals(1, $obj->getSentSmsMessages()[0]->getRecipientCount());

        $this->assertEquals("smsID2", $obj->getSentSmsMessages()[1]->getSmsID());
        $this->assertEquals("2019-01-23 19:00", $obj->getSentSmsMessages()[1]->getSendDate()->format("Y-m-d H:i"));
        $this->assertEquals("message2", $obj->getSentSmsMessages()[1]->getMessage());
        $this->assertEquals("33600000002", $obj->getSentSmsMessages()[1]->getNumero());
        $this->assertEquals(0.2, $obj->getSentSmsMessages()[1]->getCostCredits());
        $this->assertEquals(2, $obj->getSentSmsMessages()[1]->getRecipientCount());

        $this->assertEquals("smsID3", $obj->getSentSmsMessages()[2]->getSmsID());
        $this->assertEquals("2019-01-23 20:00", $obj->getSentSmsMessages()[2]->getSendDate()->format("Y-m-d H:i"));
        $this->assertEquals("message3", $obj->getSentSmsMessages()[2]->getMessage());
        $this->assertEquals("33600000003", $obj->getSentSmsMessages()[2]->getNumero());
        $this->assertEquals(0.3, $obj->getSentSmsMessages()[2]->getCostCredits());
        $this->assertEquals(3, $obj->getSentSmsMessages()[2]->getRecipientCount());
    }

    /**
     * Test deserializeSentSmsMessageListResponse()
     *
     * @return void
     */
    public function testDeserializeSentSmsMessageListResponseWithException(): void {

        // Initialize a Raw response mock.
        $rawResponse = "32 | Authentication error";

        $obj = ResponseDeserializer::deserializeSentSmsMessageListResponse($rawResponse);
        $this->assertInstanceOf(SentSmsMessageListResponse::class, $obj);

        $this->assertEquals(32, $obj->getCode());
        $this->assertEquals("Authentication error", $obj->getDescription());
        $this->assertEquals($rawResponse, $obj->getRawResponse());

        $this->assertCount(0, $obj->getSentSmsMessages());
    }

    /**
     * Test deserializeSentSmsMessage()
     *
     * @return void
     */
    public function testDeserializeSentSmsMessageWithoutArguments(): void {

        // Initialize a Raw response mock.
        // $rawResponse = "smsID | 23012019-18:00 | message | 33600000000 | 0.1 | 1"; /* A well formed raw response */
        $rawResponse = "smsID | 23012019-18:00 | message | 33600000000 | 0.1"; /* A bad formed raw response */

        $obj = TestResponseDeserializer::deserializeSentSmsMessage($rawResponse);
        $this->assertInstanceOf(SentSmsMessage::class, $obj);

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());
        $this->assertEquals($rawResponse, $obj->getRawResponse());

        $this->assertNull($obj->getSmsID());
        $this->assertNull($obj->getSendDate());
        $this->assertNull($obj->getMessage());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getCostCredits());
        $this->assertNull($obj->getRecipientCount());
    }

    /**
     * Test deserializeSmsReply()
     *
     * @return void
     */
    public function testDeserializeSmsReply(): void {

        // Initialize a Raw response mock.
        // $rawResponse = "responseID | 23012019-18:00 | 33600000000 | text | to | messageID"; /* A well formed raw response */
        $rawResponse = "  responseID  |  23012019-18:00  |  33600000000  |  text  |  to  |  messageID  "; /* A bad formed raw response */

        $obj = TestResponseDeserializer::deserializeSmsReply($rawResponse);
        $this->assertInstanceOf(SmsReply::class, $obj);

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());
        $this->assertEquals($rawResponse, $obj->getRawResponse());

        $this->assertEquals("responseID", $obj->getResponseID());
        $this->assertEquals("2019-01-23 18:00", $obj->getReceptionDate()->format("Y-m-d H:i"));
        $this->assertEquals("33600000000", $obj->getFrom());
        $this->assertEquals("text", $obj->getText());
        $this->assertEquals("to", $obj->getTo());
        $this->assertEquals("messageID", $obj->getMessageID());
    }

    /**
     * Test deserializeSmsReply()
     *
     * @return void
     */
    public function testDeserializeSmsReplyWithoutArguments(): void {

        // Initialize a Raw response mock.
        // $rawResponse = "responseID | 23012019-18:00 | 33600000000 | text | to | messageID"; /* A well formed raw response */
        $rawResponse = "responseID | 23012019-18:00 | 33600000000 | text | to"; /* A bad formed raw response */

        $obj = TestResponseDeserializer::deserializeSmsReply($rawResponse);
        $this->assertInstanceOf(SmsReply::class, $obj);

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDescription());
        $this->assertEquals($rawResponse, $obj->getRawResponse());

        $this->assertNull($obj->getResponseID());
        $this->assertNull($obj->getReceptionDate());
        $this->assertNull($obj->getFrom());
        $this->assertNull($obj->getText());
        $this->assertNull($obj->getTo());
        $this->assertNull($obj->getMessageID());
    }

    /**
     * Test deserializeTransferringCreditsResponse()
     *
     * @return void
     */
    public function testDeserializeTransferringCreditsResponse(): void {

        // Initialize a Raw response mock.
        $rawResponse = "0 | Transfer done";

        $obj = ResponseDeserializer::deserializeTransferringCreditsResponse($rawResponse);
        $this->assertInstanceOf(TransferringCreditsResponse::class, $obj);

        $this->assertEquals(0, $obj->getCode());
        $this->assertEquals("Transfer done", $obj->getDescription());
        $this->assertEquals($rawResponse, $obj->getRawResponse());
    }
}
