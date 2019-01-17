<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Request;

use DateTime;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\SMSMode\API\Request\RetrievingSMSReplyRequestInterface;

/**
 * Retrieving SMS reply request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Request
 */
class RetrievingSMSReplyRequest extends AbstractRequest implements RetrievingSMSReplyRequestInterface {

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
     * {@inheritdoc}
     */
    public function getEndDate() {
        return $this->endDate;
    }

    /**
     * {@inheritdoc}
     */
    public function getOffset() {
        return $this->offset;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath() {
        return self::RETRIEVING_SMS_REPLY_RESOURCE_PATH;
    }

    /**
     * {@inheritdoc}
     */
    public function getStart() {
        return $this->start;
    }

    /**
     * {@inheritdoc}
     */
    public function getStartDate() {
        return $this->startDate;
    }

    /**
     * {@inheritdoc}
     */
    public function setEndDate(DateTime $endDate = null) {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setOffset($offset) {
        $this->offset = $offset;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setStart($start) {
        $this->start = $start;
        return $this;
    }

    /**
     * {@inheritdoc}
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
