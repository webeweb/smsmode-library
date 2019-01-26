<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Tests\Fixtures\Normalizer;

use WBW\Library\SMSMode\Model\AbstractResponse;
use WBW\Library\SMSMode\Normalizer\ResponseNormalizer;

/**
 * Test response normalizer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Tests\Fixtures\Normalizer
 */
class TestResponseNormalizer extends ResponseNormalizer {

    /**
     * {@inheritdoc}
     */
    public static function denormalizeDeliveryReport($rawResponse) {
        return parent::denormalizeDeliveryReport($rawResponse);
    }

    /**
     * {@inheritdoc}
     */
    public static function denormalizeResponse(AbstractResponse $model, $rawResponse) {
        return parent::denormalizeResponse($model, $rawResponse);
    }

    /**
     * {@inheritdoc}
     */
    public static function denormalizeSMSReply($rawResponse) {
        return parent::denormalizeSMSReply($rawResponse);
    }

    /**
     * {@inheritdoc}
     */
    public static function denormalizeSentSMSMessage($rawResponse) {
        return parent::denormalizeSentSMSMessage($rawResponse);
    }
}
