<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Request;

use DateTime;
use WBW\Library\SmsMode\Traits\Integers\IntegerOffsetTrait;

/**
 * Retrieving SMS reply request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Request
 */
class RetrievingSmsReplyRequest extends AbstractRequest {

    use IntegerOffsetTrait;

    /**
     * Retrieving SMS reply resource path.
     *
     * @var string
     */
    const RETRIEVING_SMS_REPLY_RESOURCE_PATH = "/http/1.6/responseList.do";

    /**
     * End date.
     *
     * @var DateTime|null
     */
    private $endDate;

    /**
     * Start
     *
     * @var int|null
     */
    private $start;

    /**
     * Start date.
     *
     * @var DateTime|null
     */
    private $startDate;

    /**
     * Get the end date.
     *
     * @return DateTime|null Returns the end date.
     */
    public function getEndDate(): ?DateTime {
        return $this->endDate;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath(): string {
        return self::RETRIEVING_SMS_REPLY_RESOURCE_PATH;
    }

    /**
     * Get the start.
     *
     * @return int|null Returns the start.
     */
    public function getStart(): ?int {
        return $this->start;
    }

    /**
     * Get the start date.
     *
     * @return DateTime|null Returns the start date.
     */
    public function getStartDate(): ?DateTime {
        return $this->startDate;
    }

    /**
     * Set the end date.
     *
     * @param DateTime|null $endDate The end date.
     * @return RetrievingSmsReplyRequest Returns this retrieving SMS reply request.
     */
    public function setEndDate(?DateTime $endDate): RetrievingSmsReplyRequest {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Set the start.
     *
     * @param int|null $start The start.
     * @return RetrievingSmsReplyRequest Returns this retrieving SMS reply request.
     */
    public function setStart(?int $start): RetrievingSmsReplyRequest {
        $this->start = $start;
        return $this;
    }

    /**
     * Set the start date.
     *
     * @param DateTime|null $startDate The start date.
     * @return RetrievingSmsReplyRequest Returns this retrieving SMS reply request.
     */
    public function setStartDate(?DateTime $startDate): RetrievingSmsReplyRequest {
        $this->startDate = $startDate;
        return $this;
    }
}
