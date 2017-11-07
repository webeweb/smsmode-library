<?php

/*
 * This file is part of the WBWSMSModeLibrary package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Response;

/**
 * sMsmode reception report response.
 *
 * cf. 3 Compte-rendu de réception
 * 	<https://www.smsmode.com/pdf/fiche-api-http.pdf>
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Response
 */
final class SMSModeReceptionReportResponse extends AbstractSMSModeResponse implements SMSModeReceptionReportResponseInterface {

	/**
	 * Reports.
	 *
	 * @var array
	 */
	private $reports = [];

	/**
	 * Add a report.
	 *
	 * @param array $report The report.
	 * @return SMSModeReceptionReportResponse Returns the sMsmode reception report response.
	 */
	protected function addReport($report) {
		$this->reports[$report[0]] = $report[1];
		return $this;
	}

	/**
	 * Get the report description.
	 *
	 * @param string $number The number.
	 * @return string Returns the report description.
	 */
	public function getReportDescription($number) {

		// Check if the number exists.
		if (in_array($number, array_keys($this->reports))) {

			// Switch on the code.
			switch ($this->reports[$number]) {

				case self::CODE_SMS_SEND:
					return self::DESC_SMS_SEND;

				case self::CODE_INTERNAL_ERROR_SENDING_SMS;
					return self::DESC_INTERNAL_ERROR_SENDING_SMS;

				case self::CODE_SMS_RECEIVED:
					return self::DESC_SMS_RECEIVED;

				case self::CODE_OPERATOR_DELIVERED:
					return self::DESC_OPERATOR_DELIVERED;

				case self::CODE_ROUTING_ERROR:
					return self::DESC_ROUTING_ERROR;

				case self::CODE_RECEPTION_ERROR:
					return self::DESC_RECEPTION_ERROR;
			}
		}

		// Return.
		return null;
	}

	/**
	 * Get the reports.
	 *
	 * @return arrray Returns the reports.
	 */
	public function getReports() {
		return $this->reports;
	}

	/**
	 * {@inheritdoc}
	 */
	protected function parse($rawResponse) {

		// Determines the response.
		if (preg_match("/^(31|35|61)\ \|/", $rawResponse)) {

			// Set the code and description.
			parent::parse($rawResponse);
		} else {

			// Explode the response.
			$parts = explode(self::RESPONSE_DELIMITER, $rawResponse);

			// Handle each report.
			foreach ($parts as $current) {
				if (trim($current) === "") {
					continue;
				}
				$buffer = explode(" ", trim($current), 2);
				$this->addReport([trim($buffer[0]), intval(trim($buffer[1]))]);
			}
		}
	}

}
