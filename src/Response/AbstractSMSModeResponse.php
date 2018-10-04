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

use WBW\Library\SMSMode\API\SMSModeResponseInterface;

/**
 * Abstract sMsmode response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Response
 * @abstract
 */
abstract class AbstractSMSModeResponse implements SMSModeResponseInterface {

    /**
     * Code.
     *
     * @var int
     */
    private $code;

    /**
     * Description.
     *
     * @var string
     */
    private $description;

    /**
     * Constructor.
     *
     * @param string $rawResponse The raw response.
     */
    final public function __construct($rawResponse) {
        $this->parse($rawResponse);
    }

    /**
     * {@inheritdoc}
     */
    final public function getCode() {
        return $this->code;
    }

    /**
     * {@inheritdoc}.
     */
    final public function getDescription() {
        return $this->description;
    }

    /**
     * Parse the response.
     *
     * @param string $rawResponse The raw response.
     */
    protected function parse($rawResponse) {

        // Explode the response.
        $response = explode(self::RESPONSE_DELIMITER, $rawResponse);
        if (count($response) < 2) {
            return;
        }

        // Set the code and description.
        $this->setCode(intval(trim($response[0])));
        $this->setDescription(trim($response[1]));
    }

    /**
     * Set the code.
     *
     * @param int $code Returns the code.
     * @return AbstractSMSModeResponse Returns this response.
     */
    final protected function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string $description The description.
     * @return AbstractSMSModeResponse Returns this response.
     */
    final protected function setDescription($description) {
        $this->description = $description;
        return $this;
    }

}
