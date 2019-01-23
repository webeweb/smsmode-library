<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Model;

use DateTime;

/**
 * Retrieving SMS reply request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class RetrievingSMSReplyRequest extends AbstractRequest {

    /**
     * End date.
     *
     * @var DateTime
     */
    private $endDate;

    /**
     * Offset.
     *
     * @var int
     */
    private $offset;

    /**
     * Start
     *
     * @var int
     */
    private $start;

    /**
     * Start date.
     *
     * @var DateTime
     */
    private $startDate;

    /**
     * Get the end date.
     *
     * @return DateTime Returns the end date.
     */
    public function getEndDate() {
        return $this->endDate;
    }

    /**
     * Get the offset.
     *
     * @return int Returns the offset.
     */
    public function getOffset() {
        return $this->offset;
    }

    /**
     * Get the start.
     *
     * @return int Returns the start.
     */
    public function getStart() {
        return $this->start;
    }

    /**
     * Get the start date.
     *
     * @return DateTime Returns the start date.
     */
    public function getStartDate() {
        return $this->startDate;
    }

    /**
     * Set the end date.
     *
     * @param DateTime|null $endDate The end date.
     * @return RetrievingSMSReplyRequest Returns this retrieving SMS reply request.
     */
    public function setEndDate(DateTime $endDate = null) {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Set the offset.
     *
     * @param int $offset The offset.
     * @return RetrievingSMSReplyRequest Returns this retrieving SMS reply request.
     */
    public function setOffset($offset) {
        $this->offset = $offset;
        return $this;
    }

    /**
     * Set the start.
     *
     * @param int $start The start.
     * @return RetrievingSMSReplyRequest Returns this retrieving SMS reply request.
     */
    public function setStart($start) {
        $this->start = $start;
        return $this;
    }

    /**
     * Set the start date.
     *
     * @param DateTime|null $startDate The start date.
     * @return RetrievingSMSReplyRequest Returns this retrieving SMS reply request.
     */
    public function setStartDate(DateTime $startDate = null) {
        $this->startDate = $startDate;
        return $this;
    }
}
