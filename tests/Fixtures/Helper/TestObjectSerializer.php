<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Fixtures\Helper;

use WBW\Library\SMSMode\Helper\ObjectSerializer;
use WBW\Library\SMSMode\Model\AbstractResponse;

/**
 * Test object serializer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Fixtures\Helper
 */
class TestObjectSerializer extends ObjectSerializer {

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
