<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SmsMode\Serializer;

use DateTime;
use InvalidArgumentException;
use Symfony\Component\Yaml\Yaml;
use WBW\Library\SmsMode\Api\RequestInterface;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Request serializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SmsMode\Serializer
 */
class RequestSerializer {

    /**
     * Configuration.
     *
     * @var array
     */
    private $configuration;

    /**
     * Constructor.
     */
    public function __construct() {

        $filename = __DIR__ . "/../Resources/config/request_serializer.yml";
        $content  = file_get_contents(realpath($filename));

        $this->setConfiguration(Yaml::parse($content));
    }

    /**
     * Check a complement value.
     *
     * @param object $object The object.
     * @param array $configuration The configuration.
     * @param string $attribute The attribute.
     * @return void
     * @throws InvalidArgumentException Throws an invalid argument exception if the complement value is missing.
     */
    protected function checkComplementValue($object, array $configuration, string $attribute): void {

        $complement = ArrayHelper::get($configuration[$attribute], "complement");

        if (null !== $complement && true === $this->nullObjectValue($object, $configuration[$complement]["method"])) {
            throw new InvalidArgumentException(sprintf('The optional parameter "%s" is required when "%s" is provided', $complement, $attribute));
        }
    }

    /**
     * Check a mandatory value.
     *
     * @param object $object The object.
     * @param array $configuration The configuration.
     * @param string $attribute The attribute.
     * @return void
     * @throws InvalidArgumentException Throws an invalid argument exception if the mandatory parameter is missing.
     */
    protected function checkMandatoryValue($object, array $configuration, string $attribute): void {

        $mandatory = $configuration["mandatory"];
        $value     = $this->getObjectValue($object, $configuration["method"]);

        if (true === $mandatory && $this->isNullValue($value)) {
            throw new InvalidArgumentException(sprintf('The mandatory parameter "%s" is missing', $attribute));
        }
    }

    /**
     * Format an array.
     *
     * @param array $value The array.
     * @return string Returns the formatted array.
     */
    protected function formatArray(array $value): string {
        return implode(",", $value);
    }

    /**
     * Format a date.
     *
     * @param DateTime $value The date.
     * @return string Returns the formatted date.
     */
    protected function formatDate(DateTime $value): string {
        return $value->format(RequestInterface::REQUEST_DATE_FORMAT);
    }

    /**
     * Format a date/time.
     *
     * @param DateTime $value The date/time.
     * @return string Returns the formatted date/time.
     */
    protected function formatDateTime(DateTime $value): string {
        return $value->format(RequestInterface::REQUEST_DATETIME_FORMAT);
    }

    /**
     * Format an ISO 8859-15 message.
     *
     * @param string $value The value.
     * @return string Returns the formatted message.
     */
    protected function formatMessageISO8859(string $value): string {
        $iconv = iconv("UTF-8", "ISO-8859-15", $value);
        return $this->formatMessageUnicode($iconv);
    }

    /**
     * Format an unicode message.
     *
     * @param string $value The value.
     * @return string Returns the formatted message.
     */
    protected function formatMessageUnicode(string $value): string {
        return $value; // return urlencode($value);
    }

    /**
     * Format a value.
     *
     * @param mixed $object The object.
     * @param array $configuration The configuration.
     * @return string Returns the formatted value.
     */
    protected function formatValue($object, array $configuration): string {

        $formatter = ArrayHelper::get($configuration, "formatter");
        $value     = $this->getObjectValue($object, $configuration["method"]);

        if (null === $formatter) {
            return $value;
        }

        return $this->$formatter($value);
    }

    /**
     * Get the configuration.
     *
     * @return array Returns the configuration.
     */
    public function getConfiguration(): array {
        return $this->configuration;
    }

    /**
     * Get an object value.
     *
     * @param object $object The object.
     * @param string $getter The getter method.
     * @return mixed Returns the object value.
     */
    protected function getObjectValue($object, string $getter) {
        return $object->$getter();
    }

    /**
     * Determine if the value break.
     *
     * @param array $configuration The configuration.
     * @return bool Returns true in case of success, false otherwise.
     */
    protected function isBreakValue(array $configuration): bool {
        return false === ArrayHelper::get($configuration, "continue");
    }

    /**
     * Determine if a value is mandatory.
     *
     * @param object $object The object.
     * @param array $configuration The configuration.
     * @param string $attribute The attribute.
     * @return bool Returns true in case of success, false otherwise.
     */
    protected function isMandatoryValue($object, array $configuration, string $attribute): bool {

        $mandatory = $configuration[$attribute]["mandatory"];
        $excludeIf = ArrayHelper::get($configuration[$attribute], "excludeIf");

        if (true === $mandatory && null !== $excludeIf && false === $this->nullObjectValue($object, $configuration[$excludeIf]["method"])) {
            return false;
        }

        return true;
    }

    /**
     * Determine if a value is null.
     *
     * @param mixed $value The value.
     * @return bool Returns true in case of success, false otherwise.
     */
    protected function isNullValue($value): bool {
        if (null === $value) {
            return true;
        }
        if (true === is_array($value) && 0 === count($value)) {
            return true;
        }
        return false;
    }

    /**
     * Determine if an object value is null.
     *
     * @param object $object The object.
     * @param string $getter The getter.
     * @return bool Returns true in case of success, false otherwise.
     */
    protected function nullObjectValue($object, string $getter): bool {
        $value = $this->getObjectValue($object, $getter);
        return $this->isNullValue($value);
    }

    /**
     * Serialize an object.
     *
     * @param object $object The object.
     * @return array Returns the serialized parameters.
     * @throws InvalidArgumentException Throws an invalid argument exception if a mandatory parameter is missing.
     */
    public function serialize($object): array {

        // Get and check the object classname.
        $classname = get_class($object);
        if (false === array_key_exists($classname, $this->getConfiguration())) {
            return [];
        }

        $parameters = [];

        // Get and handle the object configuration.
        $objectCfg = $this->getConfiguration()[$classname];
        foreach ($objectCfg as $k => $v) {

            if (false === $this->isMandatoryValue($object, $objectCfg, $k)) {
                continue;
            }

            $this->checkMandatoryValue($object, $v, $k);

            if (true === $this->nullObjectValue($object, $v["method"])) {
                continue;
            }

            $parameters[$k] = $this->formatValue($object, $v);

            $this->checkComplementValue($object, $objectCfg, $k);

            if (true === $this->isBreakValue($v)) {
                break;
            }
        }

        return $parameters;
    }

    /**
     * Set the configuration.
     *
     * @param array $configuration The configuration.
     * @return RequestSerializer Returns this object serializer.
     */
    protected function setConfiguration(array $configuration): RequestSerializer {
        $this->configuration = $configuration;
        return $this;
    }
}
