<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Fixtures\Serializer;

use WBW\Library\SMSMode\Model\DeliveryReport;
use WBW\Library\SMSMode\Model\SentSMSMessage;
use WBW\Library\SMSMode\Model\SMSReply;
use WBW\Library\SMSMode\Response\AbstractResponse;
use WBW\Library\SMSMode\Serializer\ResponseDeserializer;

/**
 * Test response deserializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SMSMode\Tests\Fixtures\Serializer
 */
class TestResponseDeserializer extends ResponseDeserializer {

    /**
     * {@inheritdoc}
     */
    public static function deserializeDeliveryReport(string $rawResponse): DeliveryReport {
        return parent::deserializeDeliveryReport($rawResponse);
    }

    /**
     * {@inheritdoc}
     */
    public static function deserializeResponse(AbstractResponse $model, string $rawResponse): void {
        parent::deserializeResponse($model, $rawResponse);
    }

    /**
     * {@inheritdoc}
     */
    public static function deserializeSMSReply(string $rawResponse): SMSReply {
        return parent::deserializeSMSReply($rawResponse);
    }

    /**
     * {@inheritdoc}
     */
    public static function deserializeSentSMSMessage(string $rawResponse): SentSMSMessage {
        return parent::deserializeSentSMSMessage($rawResponse);
    }
}
