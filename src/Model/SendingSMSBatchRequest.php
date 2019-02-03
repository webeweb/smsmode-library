<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Model;

use WBW\Library\SMSMode\Traits\ClasseMsgTrait;
use WBW\Library\SMSMode\Traits\DateEnvoiTrait;
use WBW\Library\SMSMode\Traits\EmetteurTrait;
use WBW\Library\SMSMode\Traits\NbrMsgTrait;
use WBW\Library\SMSMode\Traits\NotificationUrlTrait;
use WBW\Library\SMSMode\Traits\RefClientTrait;

/**
 * Sending SMS batch request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class SendingSMSBatchRequest extends AbstractRequest {

    use ClasseMsgTrait;
    use DateEnvoiTrait;
    use EmetteurTrait;
    use NbrMsgTrait;
    use NotificationUrlTrait;
    use RefClientTrait;

    /**
     * Classe msg "SMS".
     *
     * @var int
     */
    const CLASSE_MSG_SMS = SendingSMSMessageRequest::CLASSE_MSG_SMS;

    /**
     * Classe msg "SMS Pro".
     *
     * @var int
     */
    const CLASSE_MSG_SMS_PRO = SendingSMSMessageRequest::CLASSE_MSG_SMS_PRO;

    /**
     * Sending SMS batch resource path.
     *
     * @var string
     */
    const SENDING_SMS_BATCH_RESOURCE_PATH = "/http/1.6/sendSMSBatch.do";

    /**
     * {@inheritdoc}
     */
    public function getResourcePath() {
        return self::SENDING_SMS_BATCH_RESOURCE_PATH;
    }
}
