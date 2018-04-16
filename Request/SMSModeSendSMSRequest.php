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
use WBW\Library\Core\Utility\Argument\ArrayUtility;
use WBW\Library\SMSMode\API\SMSModeMessageInterface;
use WBW\Library\SMSMode\API\SMSModeRequestInterface;
use WBW\Library\SMSMode\Exception\SMSModeInvalidNumberException;
use WBW\Library\SMSMode\Exception\SMSModeMaxLimitNumberReachedException;
use WBW\Library\SMSMode\Response\SMSModeSendSMSResponse;

/**
 * sMsmode send SMS request.
 *
 * cf. 2 Envoi de SMS
 * 	<https://www.smsmode.com/pdf/fiche-api-http.pdf>
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Request
 * @final
 */
final class SMSModeSendSMSRequest implements SMSModeRequestInterface, SMSModeMessageInterface {

    /**
     * Customer reference.
     *
     * @var string
     */
    private $customerReference;

    /**
     * Group.
     *
     * @var string
     */
    private $group;

    /**
     * Message.
     *
     * @var string
     */
    private $message;

    /**
     * Maximum messgae number.
     *
     * @var integer
     */
    private $maxMessageNumber = 5;

    /**
     * Message class.
     *
     * @var integer
     */
    private $messageClass = self::MESSAGE_CLASS_SMS_PRO;

    /**
     * Numbers.
     *
     * @var array
     */
    private $numbers = [];

    /**
     * Notification URL.
     *
     * @var string
     */
    private $notificationURL;

    /**
     * Response notification URL.
     *
     * @var string
     */
    private $responseNotificationURL;

    /**
     * Send date.
     *
     * @var DateTime
     */
    private $sendDate;

    /**
     * Sender.
     *
     * @var string
     */
    private $sender;

    /**
     * STOP.
     *
     * @var integer
     */
    private $stop;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING DTO DO.
    }

    /**
     * Add a number.
     *
     * @param string $number The number.
     * @return SMSModeSendSMSRequest Returns the sMsmode send SMS request.
     * @throws SMSModeMaxLimitNumberReachedException Throws a SMSMode max limit of numbers reached exception if the next add exceeds 300 numbers.
     * @throws SMSModeInvalidNumberException Throws a SMSMode invalid number exception if the number is not valid.
     */
    public function addNumber($number) {
        if (300 === count($this->numbers)) {
            throw new SMSModeMaxLimitNumberReachedException(300);
        }
        if (0 === preg_match("/^[0-9]*$/", $number)) {
            throw new SMSModeInvalidNumberException($number);
        }
        if (false === in_array($number, $this->numbers)) {
            $this->numbers[] = $number;
        }
        return $this;
    }

    /**
     * Decode a number.
     *
     * @param string $number The number.
     * @return string Returns the decoded number.
     */
    public function decodeNumber($number) {
        $result = preg_replace("/^336/", "06", $number, 1);
        $output = preg_replace("/^337/", "07", $result, 1);
        return $output;
    }

    /**
     * Encode a number.
     *
     * @param string $number The number.
     * @return string Returns the encoded number.
     */
    public function encodeNumber($number) {
        $result = preg_replace("/^06/", "336", $number, 1);
        $output = preg_replace("/^07/", "337", $result, 1);
        return $output;
    }

    /**
     * Get the customer reference.
     *
     * @return string Returns the customer reference.
     */
    public function getCustomerReference() {
        return $this->customerReference;
    }

    /**
     * Get the maximum message number.
     *
     * @return integer Returns the maxuimum message number.
     */
    public function getMaxMessageNumber() {
        return $this->maxMessageNumber;
    }

    /**
     * Get the group.
     *
     * @return string Returns the group.
     */
    public function getGroup() {
        return $this->group;
    }

    /**
     * Get the message.
     *
     * @return string Returns the message.
     */
    public function getMessage() {
        return $this->message;
    }

    /**
     * Get the message class.
     *
     * @return integer Returns the message class.
     */
    public function getMessageClass() {
        return $this->messageClass;
    }

    /**
     * Get the notification URL.
     *
     * @return string Returns the notification URL.
     */
    public function getNotificationURL() {
        return $this->notificationURL;
    }

    /**
     * Get the numbers.
     *
     * @return array Returns the numbers.
     */
    public function getNumbers() {
        return $this->numbers;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath() {
        return "sendSMS.do";
    }

    /**
     * Get the response notification URL.
     *
     * @return string Returns the response notification URL.
     */
    public function getResponseNotificationURL() {
        return $this->responseNotificationURL;
    }

    /**
     * Get the send date.
     *
     * @return DateTime Returns the send date.
     */
    public function getSendDate() {
        return $this->sendDate;
    }

    /**
     * Get the sender.
     *
     * @return string Returns the sender.
     */
    public function getSender() {
        return $this->sender;
    }

    /**
     * Get the STOP.
     *
     * @return integer Returns the STOP.
     */
    public function getStop() {
        return $this->stop;
    }

    /**
     * {@inheritdoc}
     */
    public function parseResponse($rawResponse) {
        return new SMSModeSendSMSResponse($rawResponse);
    }

    /**
     * Remove a number.
     *
     * @param string $number The number.
     * @return SMSModeSendSMSRequest Returns the sMsmode send SMS request.
     */
    public function removeNumber($number) {
        $pos = array_search($number, $this->numbers);
        if (false !== $pos) {
            unset($this->numbers[$pos]);
        }
        return $this;
    }

    /**
     * Set the customer reference.
     *
     * @param string $customerReference The customer reference.
     * @return SMSModeSendSMSRequest Returns the sMsmode send SMS request.
     */
    public function setCustomerReference($customerReference) {
        $this->customerReference = $customerReference;
        return $this;
    }

    /**
     * Set the group.
     *
     * @param string $group The group.
     * @return SMSModeSendSMSRequest Returns the sMsmode send SMS request.
     */
    public function setGroup($group) {
        $this->group = $group;
        return $this;
    }

    /**
     * Set the maximum message number.
     *
     * @param integer $maxMessageNumber The maximum message number.
     * @return SMSModeSendSMSRequest Returns the sMsmode send SMS request.
     */
    public function setMaxMessageNumber($maxMessageNumber) {
        $this->maxMessageNumber = $maxMessageNumber;
        return $this;
    }

    /**
     * Set the message.
     *
     * @param string $message The message.
     * @return SMSModeSendSMSRequest Returns the sMsmode send SMS request.
     */
    public function setMessage($message) {
        $this->message = $message;
        return $this;
    }

    /**
     * Set the message class.
     *
     * @param integer $messageClass The message class.
     * @return SMSModeSendSMSRequest Returns the sMsmode send SMS request.
     * @throws IllegalArgumentException Throws an illegal argument exception if the message class is invalid.
     */
    public function setMessageClass($messageClass) {
        switch ($messageClass) {
            case self::MESSAGE_CLASS_SMS_PRO:
            case self::MESSAGE_CLASS_SMS_RESPONSE:
                $this->messageClass = $messageClass;
                break;
            default:
                throw new IllegalArgumentException("The message class \"" . $messageClass . "\" is invalid");
        }
        return $this;
    }

    /**
     * Set the notification URL.
     *
     * @param string $notificationURL The notification URL.
     * @return SMSModeSendSMSRequest Returns the sMsmode send SMS request.
     */
    public function setNotificationURL($notificationURL) {
        $this->notificationURL = $notificationURL;
        return $this;
    }

    /**
     * Set the response notification URL.
     *
     * @param string $responseNotificationURL The response notification URL.
     * @return SMSModeSendSMSRequest Returns the sMsmode send SMS request.
     */
    public function setResponseNotificationURL($responseNotificationURL) {
        $this->responseNotificationURL = $responseNotificationURL;
        return $this;
    }

    /**
     * Set the send date.
     *
     * @param DateTime $sendDate The send date.
     * @return SMSModeSendSMSRequest Returns the sMsmode send SMS request.
     */
    public function setSendDate(DateTime $sendDate = null) {
        $this->sendDate = $sendDate;
        return $this;
    }

    /**
     * Set the sender.
     *
     * @param string $sender The sender.
     * @return SMSModeSendSMSRequest Returns the sMsmode send SMS request.
     */
    public function setSender($sender) {
        $this->sender = $sender;
        return $this;
    }

    /**
     * Set the STOP.
     *
     * @param integer|null $stop The STOP.
     * @return SMSModeSendSMSRequest Returns the sMsmode send SMS request.
     */
    public function setStop($stop) {
        switch ($stop) {
            case self::STOP_ALWAYS:
            case self::STOP_ONLY:
                $this->stop = $stop;
                break;
            default:
                $this->stop = null;
                break;
        }
        return $this;
    }

    /**
     *  {@inhertidoc}
     */
    public function toArray() {

        // Initialize the output.
        $output = [];

        // Check the required attribute "message".
        if (null === $this->message) {
            throw new NullPointerException("The attribute \"message\" is missing");
        }

        // Check the required attributes "number" and "group".
        if (0 === count($this->numbers) && null === $this->group) {
            throw new NullPointerException("The attribute \"number\" or \"group\" is missing");
        }

        // Add the required attributes.
        $output["message"] = $this->message;
        if (0 < count($this->numbers)) {
            $output["numero"] = implode(",", $this->numbers);
        } else {
            $output["groupe"] = $this->group;
        }

        // Check and add the optional attributes.
        ArrayUtility::set($output, "classe_msg", $this->messageClass, [null]);
        if (null !== $this->sendDate) {
            $output["date_envoi"] = $this->sendDate->format(self::DATETIME_FORMAT);
        }
        ArrayUtility::set($output, "refClient", $this->customerReference, [null]);
        ArrayUtility::set($output, "emetteur", $this->sender, [null]);
        ArrayUtility::set($output, "nbr_msg", $this->maxMessageNumber, [null]);
        ArrayUtility::set($output, "notification_url", $this->notificationURL, [null]);
        ArrayUtility::set($output, "notification_url", $this->notificationURL, [null]);
        ArrayUtility::set($output, "notification_url_reponse", $this->responseNotificationURL, [null]);
        ArrayUtility::set($output, "stop", $this->stop, [null]);

        // Return the output.
        return $output;
    }

}
