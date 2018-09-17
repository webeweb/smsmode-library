<?php

/**
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
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
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Response
 */
class SMSModeReceptionReportResponse extends AbstractSMSModeResponse {

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
     * @return SMSModeReceptionReportResponse Returns this reception report response.
     */
    protected function addReport(array $report) {
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
        if (false === array_key_exists($number, $this->reports)) {
            return null;
        }

        // Switch on the code.
        switch ($this->reports[$number]) {

            case self::RESPONSE_CODE_SMS_SEND:
                return self::RESPONSE_DESC_SMS_SEND;

            case self::RESPONSE_CODE_INTERNAL_ERROR_SENDING_SMS;
                return self::RESPONSE_DESC_INTERNAL_ERROR_SENDING_SMS;

            case self::RESPONSE_CODE_SMS_RECEIVED:
                return self::RESPONSE_DESC_SMS_RECEIVED;

            case self::RESPONSE_CODE_OPERATOR_DELIVERED:
                return self::RESPONSE_DESC_OPERATOR_DELIVERED;

            case self::RESPONSE_CODE_ROUTING_ERROR:
                return self::RESPONSE_DESC_ROUTING_ERROR;

            case self::RESPONSE_CODE_RECEPTION_ERROR:
                return self::RESPONSE_DESC_RECEPTION_ERROR;
        }
    }

    /**
     * Get the reports.
     *
     * @return array Returns the reports.
     */
    public function getReports() {
        return $this->reports;
    }

    /**
     * {@inheritdoc}
     */
    protected function parse($rawResponse) {

        // Determines the response.
        if (1 === preg_match("/^(31|35|61)\ \|/", $rawResponse)) {

            // Set the code and description.
            parent::parse($rawResponse);
            return;
        }

        // Explode the response.
        $responses = explode(self::RESPONSE_DELIMITER, $rawResponse);

        // Handle each report.
        foreach ($responses as $current) {
            $response = explode(" ", trim($current), 2);
            if ("" === trim($current) || 2 !== count($response)) {
                continue;
            }
            $this->addReport([trim($response[0]), intval(trim($response[1]))]);
        }
    }

}
