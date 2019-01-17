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

use WBW\Library\Core\Argument\ArrayHelper;
use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\SMSMode\API\Request\TransferringCreditsRequestInterface;

/**
 * Transferring credits request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Request
 */
class TransferringCreditsRequest implements TransferringCreditsRequestInterface {

    /**
     * Credit amount.
     *
     * @var int
     */
    private $creditAmount;

    /**
     * Reference.
     *
     * @var string
     */
    private $reference;

    /**
     * Target pseudo.
     *
     * @var string
     */
    private $targetPseudo;

    /**
     * {@inheritdoc}
     */
    public function getCreditAmount() {
        return $this->creditAmount;
    }

    /**
     * {@inheritdoc}
     */
    public function getReference() {
        return $this->reference;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourcePath() {
        return self::TRANSFERRING_CREDITS_RESOURCE_PATH;
    }

    /**
     * {@inheritdoc}
     */
    public function getTargetPseudo() {
        return $this->targetPseudo;
    }

    /**
     * {@inheritdoc}
     */
    public function setCreditAmount($creditAmount) {
        $this->creditAmount = $creditAmount;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setReference($reference) {
        $this->reference = $reference;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setTargetPseudo($targetPseudo) {
        $this->targetPseudo = $targetPseudo;
        return $this;
    }

    /**
     *  {@inhertidoc}
     */
    public function toArray() {

        // Initialize the output.
        $output = [];

        // Check the mandatory parameters "username".
        if (null === $this->targetPseudo) {
            throw new NullPointerException("The mandatory parameter \"targetPseudo\" is missing");
        }

        // Check the required attribute "credit".
        if (null === $this->creditAmount) {
            throw new NullPointerException("The mandatory parameter \"creditAmount\" is missing");
        }

        // Add the mandatory parameters.
        $output["targetPseudo"] = $this->targetPseudo;
        $output["creditAmount"] = $this->creditAmount;

        // Check and add the optional parameters.
        ArrayHelper::set($output, "reference", $this->reference, [null]);

        // Return the output.
        return $output;
    }
}
