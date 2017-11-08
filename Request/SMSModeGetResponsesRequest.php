<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Request;

use DateTime;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\SMSMode\Response\SMSModeGetResponsesResponse;

/**
 * sMsmode get responses request.
 *
 * cf. 13 Récupération des SMS réponses
 * 	<https://www.smsmode.com/pdf/fiche-api-http.pdf>
 *
 * @author NdC/WBW <https://github.com/webeweb/>
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
	 * @return SMSModeGetResponsesRequest Returns the sMsmode get responses request.
	 */
	public function setEndDate(DateTime $endDate = null) {
		$this->endDate = $endDate;
		return $this;
	}

	/**
	 * Set the offset.
	 *
	 * @param integer $offset The offset.
	 * @return SMSModeGetResponsesRequest Returns the sMsmode get responses request.
	 */
	public function setOffset($offset) {
		$this->offset = $offset;
		return $this;
	}

	/**
	 * Set the start.
	 *
	 * @param integer $start The start.
	 * @return SMSModeGetResponsesRequest Returns the sMsmode get responses request.
	 */
	public function setStart($start) {
		$this->start = $start;
		return $this;
	}

	/**
	 * Set the start date.
	 *
	 * @param DateTime $startDate The start date.
	 * @return SMSModeGetResponsesRequest Returns the sMsmode get responses request.
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

		// Check the optional setting start and offset.
		if (!is_null($this->start) && is_null($this->offset)) {
			throw new NullPointerException("The parameter \"offset\" is missing");
		}
		if (is_null($this->start) && !is_null($this->offset)) {
			throw new NullPointerException("The parameter \"start\" is missing");
		}

		//
		if (!is_null($this->start)) {
			if ($this->offset <= $this->start) {
				throw new IllegalArgumentException("The offset must be greater than start");
			}
			$output["start"]	 = $this->start;
			$output["offset"]	 = $this->offset;
			return $output;
		}

		// Check the optional setting start date and end date.
		if (!is_null($this->startDate) && is_null($this->endDate)) {
			throw new NullPointerException("The parameter \"endDate\" is missing");
		}
		if (is_null($this->startDate) && !is_null($this->endDate)) {
			throw new NullPointerException("The parameter \"startDate\" is missing");
		}

		//
		if (!is_null($this->startDate)) {
			if ($this->endDate <= $this->startDate) {
				throw new IllegalArgumentException("The end date must be greater than start date");
			}
			$output["startDate"] = $this->startDate->format(self::DATE_FORMAT);
			$output["endDate"]	 = $this->endDate->format(self::DATE_FORMAT);
			return $output;
		}

		// Return the output.
		return $output;
	}

}
