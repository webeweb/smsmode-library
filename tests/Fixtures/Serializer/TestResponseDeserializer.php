<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\SmsMode\Tests\Fixtures\Serializer;

use WBW\Library\SmsMode\Model\DeliveryReport;
use WBW\Library\SmsMode\Model\SentSmsMessage;
use WBW\Library\SmsMode\Model\SmsReply;
use WBW\Library\SmsMode\Response\AbstractResponse;
use WBW\Library\SmsMode\Serializer\ResponseDeserializer;

/**
 * Test response deserializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Tests\Fixtures\Serializer
 */
class TestResponseDeserializer extends ResponseDeserializer {

    /**
     * {@inheritDoc}
     */
    public static function deserializeDeliveryReport(string $rawResponse): DeliveryReport {
        return parent::deserializeDeliveryReport($rawResponse);
    }

    /**
     * {@inheritDoc}
     */
    public static function deserializeResponse(AbstractResponse $model, string $rawResponse): void {
        parent::deserializeResponse($model, $rawResponse);
    }

    /**
     * {@inheritDoc}
     */
    public static function deserializeSentSmsMessage(string $rawResponse): SentSmsMessage {
        return parent::deserializeSentSmsMessage($rawResponse);
    }

    /**
     * {@inheritDoc}
     */
    public static function deserializeSmsReply(string $rawResponse): SmsReply {
        return parent::deserializeSmsReply($rawResponse);
    }
}
