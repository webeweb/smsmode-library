<?php

/**
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Response;

use DateTime;
use WBW\Library\SMSMode\Request\SMSModeRequestInterface;

/**
 * SMSModeGetResponsesResponse
 *
 * cf. 13 Récupération des SMS réponses
 * 	<https://www.smsmode.com/pdf/fiche-api-http.pdf>
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Response
 * @final
 */
final class SMSModeGetResponsesResponse extends AbstractSMSModeResponse implements SMSModeGetResponsesResponseInterface {

	/**
	 * From.
	 *
	 * @var string
	 */
	private $from;

	/**
	 * Message id.
	 *
	 * @var string
	 */
	private $messageID;

	/**
	 * Reception date.
	 *
	 * @var DateTime
	 */
	private $receptionDate;

	/**
	 * Response ID.
	 *
	 * @var string
	 */
	private $responseID;

	/**
	 * Text.
	 *
	 * @var string
	 */
	private $text;

	/**
	 * To.
	 *
	 * @var string
	 */
	private $to;

	/**
	 * Get the from.
	 *
	 * @return string Returns the from.
	 */
	public function getFrom() {
		return $this->from;
	}

	/**
	 * Get the message id.
	 *
	 * @return string Returns the message id.
	 */
	public function getMessageID() {
		return $this->messageID;
	}

	/**
	 * Get the reception date.
	 *
	 * @return DateTime Returns the reception date.
	 */
	public function getReceptionDate() {
		return $this->receptionDate;
	}

	/**
	 * Get the response id.
	 *
	 * @return string Returns the response id.
	 */
	public function getResponseID() {
		return $this->responseID;
	}

	/**
	 * Get the text.
	 *
	 * @return string.
	 */
	public function getText() {
		return $this->text;
	}

	/**
	 * Get the to.
	 *
	 * @return string Returns the to.
	 */
	public function getTo() {
		return $this->to;
	}

	/**
	 * {@inheritdoc}
	 */
	protected function parse($rawResponse) {

		// Determines the response.
		if (1 === preg_match("/^(32|35)\ \|/", $rawResponse)) {

			// Set the code and description.
			parent::parse($rawResponse);
			return;
		}

		// Explode the response.
		$response = explode(self::RESPONSE_DELIMITER, $rawResponse);
		if (6 !== count($response)) {
			return;
		}

		//
		$this->setResponseID(trim($response[0]));
		$this->setReceptionDate(DateTime::createFromFormat(SMSModeRequestInterface::DATE_FORMAT, trim($response[1])));
		$this->setFrom(trim($response[2]));
		$this->setText(trim($response[3]));
		$this->setTo(trim($response[4]));
		$this->setMessageID(trim($response[5]));
	}

	/**
	 * Set the from.
	 *
	 * @param string $from The from.
	 * @return SMSModeGetResponsesResponse Returns the sMsmode get responses.
	 */
	protected function setFrom($from) {
		$this->from = $from;
		return $this;
	}

	/**
	 * Set the message id.
	 *
	 * @param string $messageID The message id.
	 * @return SMSModeGetResponsesResponse Returns the sMsmode get responses.
	 */
	protected function setMessageID($messageID) {
		$this->messageID = $messageID;
		return $this;
	}

	/**
	 * Set the reception date.
	 *
	 * @param DateTime $receptionDate The reception date.
	 * @return SMSModeGetResponsesResponse Returns the sMsmode get responses.
	 */
	protected function setReceptionDate(DateTime $receptionDate) {
		$this->receptionDate = $receptionDate;
		return $this;
	}

	/**
	 * Set the response id.
	 *
	 * @param string $responseID The response id.
	 * @return SMSModeGetResponsesResponse Returns the sMsmode get responses.
	 */
	protected function setResponseID($responseID) {
		$this->responseID = $responseID;
		return $this;
	}

	/**
	 * Set the text.
	 *
	 * @param string $text The text.
	 * @return SMSModeGetResponsesResponse Returns the sMsmode get responses.
	 */
	protected function setText($text) {
		$this->text = $text;
		return $this;
	}

	/**
	 * Set the to.
	 *
	 * @param string $to The to.
	 * @return SMSModeGetResponsesResponse Returns the sMsmode get responses.
	 */
	protected function setTo($to) {
		$this->to = $to;
		return $this;
	}

}
