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
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\Core\Exception\Pointer\NullPointerException;

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

    /**
     *  {@inhertidoc}
     */
    public function toArray() {

        // Initialize the output.
        $output = [];

        // Check the optional parameters "start" and "offset".
        if (null !== $this->start && null === $this->offset) {
            throw new NullPointerException("The optional parameter \"offset\" is missing");
        }
        if (null === $this->start && null !== $this->offset) {
            throw new NullPointerException("The optional parameter \"start\" is missing");
        }
        if (null !== $this->start) {
            if ($this->offset <= $this->start) {
                throw new IllegalArgumentException("The \"offset\" must be greater than \"start\"");
            }
            $output["start"]  = $this->start;
            $output["offset"] = $this->offset;
            return $output;
        }

        // Check the optional parameters "startDate" and "endDate".
        if (null !== $this->startDate && null === $this->endDate) {
            throw new NullPointerException("The optional parameter \"endDate\" is missing");
        }
        if (null === $this->startDate && null !== $this->endDate) {
            throw new NullPointerException("The optional parameter \"startDate\" is missing");
        }
        if (null !== $this->startDate) {
            if ($this->endDate <= $this->startDate) {
                throw new IllegalArgumentException("The \"endDate\" must be greater than \"startDate\"");
            }
            $output["startDate"] = $this->startDate->format(self::REQUEST_DATETIME_FORMAT);
            $output["endDate"]   = $this->endDate->format(self::REQUEST_DATETIME_FORMAT);
            return $output;
        }

        // Return the output.
        return $output;
    }
}
