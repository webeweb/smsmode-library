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

use WBW\Library\SMSMode\Model\AbstractResponse;
use WBW\Library\SMSMode\Serializer\ResponseDeserializer;

/**
 * Test response deserializer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Fixtures\Serializer
 */
class TestResponseDeserializer extends ResponseDeserializer {

    /**
     * {@inheritdoc}
     */
    public static function deserializeDeliveryReport($rawResponse) {
        return parent::deserializeDeliveryReport($rawResponse);
    }

    /**
     * {@inheritdoc}
     */
    public static function deserializeResponse(AbstractResponse $model, $rawResponse) {
        return parent::deserializeResponse($model, $rawResponse);
    }

    /**
     * {@inheritdoc}
     */
    public static function deserializeSMSReply($rawResponse) {
        return parent::deserializeSMSReply($rawResponse);
    }

    /**
     * {@inheritdoc}
     */
    public static function deserializeSentSMSMessage($rawResponse) {
        return parent::deserializeSentSMSMessage($rawResponse);
    }
}
