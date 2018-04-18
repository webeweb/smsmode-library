<?php

/**
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
use WBW\Library\SMSMode\API\SMSModeRequestInterface;
use WBW\Library\SMSMode\Response\SMSModeGetResponsesResponse;

/**
 * sMsmode get responses request.
 *
 * cf. 13 Récupération des SMS réponses
 * 	<https://www.smsmode.com/pdf/fiche-api-http.pdf>
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Request
 * @final
 */
final class SMSModeGetResponsesRequest implements SMSModeRequestInterface {

    /**
     * End date.
     *
     * @var DateTime
     */
    private $endDate;

    /**
     * Offset.
     *
     * @var integer
     */
    private $offset;

    /**
     * Start
     *
     * @var integer
     */
    private $start;

    /**
     * Start date.
     *
     * @var DateTime
     */
    private $startDate;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING DTO DO.
    }

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
     * @return integer Returns the offset.
     */
    public function getOffset() {
        return $this->offset;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath() {
        return "responseList.do";
    }

    /**
     * Get the start.
     *
     * @return integer Returns the start.
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
     * {@inheritdoc}
     */
    public function parseResponse($rawResponse) {
        return new SMSModeGetResponsesResponse($rawResponse);
    }

    /**
     * Set the end date.
     *
     * @param DateTime $endDate	The end date.
     * @return SMSModeGetResponsesRequest Returns this sMsmode get responses request.
     */
    public function setEndDate(DateTime $endDate = null) {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Set the offset.
     *
     * @param integer $offset The offset.
     * @return SMSModeGetResponsesRequest Returns this sMsmode get responses request.
     */
    public function setOffset($offset) {
        $this->offset = $offset;
        return $this;
    }

    /**
     * Set the start.
     *
     * @param integer $start The start.
     * @return SMSModeGetResponsesRequest Returns this sMsmode get responses request.
     */
    public function setStart($start) {
        $this->start = $start;
        return $this;
    }

    /**
     * Set the start date.
     *
     * @param DateTime $startDate The start date.
     * @return SMSModeGetResponsesRequest Returns this sMsmode get responses request.
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

        // Check the optional attributes "start" and "offset".
        if (null !== $this->start && null === $this->offset) {
            throw new NullPointerException("The attribute \"offset\" is missing");
        }
        if (null === $this->start && null !== $this->offset) {
            throw new NullPointerException("The attribute \"start\" is missing");
        }
        if (null !== $this->start) {
            if ($this->offset <= $this->start) {
                throw new IllegalArgumentException("The offset must be greater than start");
            }
            $output["start"]  = $this->start;
            $output["offset"] = $this->offset;
            return $output;
        }

        // Check the optional attributes "startDate" and "endDate".
        if (null !== $this->startDate && null === $this->endDate) {
            throw new NullPointerException("The attribute \"endDate\" is missing");
        }
        if (null === $this->startDate && null !== $this->endDate) {
            throw new NullPointerException("The attribute \"startDate\" is missing");
        }
        if (null !== $this->startDate) {
            if ($this->endDate <= $this->startDate) {
                throw new IllegalArgumentException("The endDate must be greater than startDate");
            }
            $output["startDate"] = $this->startDate->format(self::DATETIME_FORMAT);
            $output["endDate"]   = $this->endDate->format(self::DATETIME_FORMAT);
            return $output;
        }

        // Return the output.
        return $output;
    }

}
