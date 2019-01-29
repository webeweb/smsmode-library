<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Normalizer;

use DateTime;
use InvalidArgumentException;
use ReflectionException;
use Symfony\Component\Yaml\Yaml;
use WBW\Library\Core\Argument\ArrayHelper;
use WBW\Library\Core\Argument\ObjectHelper;

/**
 * Request normalizer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Normalizer
 */
class RequestNormalizer {

    /**
     * Normalize date/time format.
     *
     * @var string
     */
    const NORMALIZE_DATETIME_FORMAT = "dmY-H:i";

    /**
     * Normalize date format.
     *
     * @var string
     */
    const NORMALIZE_DATE_FORMAT = "dmY";

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

        $directory = ObjectHelper::getDirectory($this);
        $filename  = $directory . "/../Resources/config/request-normalizer.yml";

        $this->setConfiguration(Yaml::parseFile(realpath($filename)));
    }

    /**
     * Checks a complement value.
     *
     * @param object $object The object.
     * @param array $configuration The configuration.
     * @param string $attribute The attribute.
     * @return void
     * @throws InvalidArgumentException Throws an invalid argument exception if the complement value is missing.
     */
    protected function checkComplementValue($object, array $configuration, $attribute) {

        $complement = ArrayHelper::get($configuration[$attribute], "complement");

        if (null !== $complement && true === $this->nullObjectValue($object, $configuration[$complement]["method"])) {
            throw new InvalidArgumentException(sprintf("The optional parameter \"%s\" is required when \"%s\" is provided", $complement, $attribute));
        }
    }

    /**
     * Checks a mandatory value.
     *
     * @param object $object The object.
     * @param array $configuration The configuration.
     * @param string $attribute The attribute.
     * @return void
     * @throws InvalidArgumentException Throws an invalid argument exception if the mandatory parameter is missing.
     */
    protected function checkMandatoryValue($object, array $configuration, $attribute) {

        $mandatory = $configuration["mandatory"];
        $value     = $this->getObjectValue($object, $configuration["method"]);

        if (true === $mandatory && $this->isNullValue($value)) {
            throw new InvalidArgumentException(sprintf("The mandatory parameter \"%s\" is missing", $attribute));
        }
    }

    /**
     * Format an array.
     *
     * @param array $value The array.
     * @return string Returns the formatted array.
     */
    protected function formatArray(array $value) {
        return implode(",", $value);
    }

    /**
     * Format a date.
     *
     * @param DateTime $value The date.
     * @return string Returns the formatted date.
     */
    protected function formatDate(DateTime $value) {
        return $value->format(self::NORMALIZE_DATE_FORMAT);
    }

    /**
     * Format a date/time.
     *
     * @param DateTime $value The date/time.
     * @return string Returns the formatted date/time.
     */
    protected function formatDateTime(DateTime $value) {
        return $value->format(self::NORMALIZE_DATETIME_FORMAT);
    }

    /**
     * Format a message.
     *
     * @param string $value The value.
     * @return string Returns the formatted message.
     */
    protected function formatMessage($value) {
        $iconv = iconv("UTF-8", "ISO-8859-15", $value);
        return urlencode($iconv);
    }

    /**
     * Format a value.
     *
     * @param mixed $object The object.
     * @param array $configuration The configuration.
     * @return string Returns the formatted value.
     */
    protected function formatValue($object, array $configuration) {

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
    public function getConfiguration() {
        return $this->configuration;
    }

    /**
     * Get an object value.
     *
     * @param object $object The object.
     * @param string $getter The getter method.
     * @return mixed Returns the object value.
     */
    protected function getObjectValue($object, $getter) {
        return $object->$getter();
    }

    /**
     * Determines if the value break.
     *
     * @param array $configuration The configuration.
     * @return bool Returns true in case of success, false otherwise.
     */
    protected function isBreakValue(array $configuration) {
        return false === ArrayHelper::get($configuration, "continue");
    }

    /**
     * Determines if a value is mandatory.
     *
     * @param object $object The object.
     * @param array $configuration The configuration.
     * @param string $attribute The attribute.
     * @return bool Returns true in case of success, false otherwise.
     */
    protected function isMandatoryValue($object, array $configuration, $attribute) {

        $mandatory = $configuration[$attribute]["mandatory"];
        $excludeIf = ArrayHelper::get($configuration[$attribute], "excludeIf");

        if (true === $mandatory && null !== $excludeIf && false === $this->nullObjectValue($object, $configuration[$excludeIf]["method"])) {
            return false;
        }

        return true;
    }

    /**
     * Determines if a value is null.
     *
     * @param mixed $value The value.
     * @return bool Returns true in case of success, false otherwise.
     */
    protected function isNullValue($value) {
        if (null === $value) {
            return true;
        }
        if (true === is_array($value) && 0 === count($value)) {
            return true;
        }
        return false;
    }

    /**
     * Normalize an object.
     *
     * @param object $object The object.
     * @return array Returns the normalized parameters.
     * @throws InvalidArgumentException Throws an invalid argument exception if a mandatory parameter is missing.
     * @throws ReflectionException Throws a reflection exception.
     */
    public function normalize($object) {

        // Get and check the object classname.
        $classname = ObjectHelper::getName($object);
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
     * Determines if an object value is null.
     *
     * @param object $object The object.
     * @param string $getter The getter.
     * @return bool Returns true in case of success, false otherwise.
     */
    protected function nullObjectValue($object, $getter) {
        $value = $this->getObjectValue($object, $getter);
        return $this->isNullValue($value);
    }

    /**
     * Set the configuration.
     *
     * @param array $configuration The configuration.
     * @return RequestNormalizer Returns this object normalizer.
     */
    protected function setConfiguration(array $configuration) {
        $this->configuration = $configuration;
        return $this;
    }
}
