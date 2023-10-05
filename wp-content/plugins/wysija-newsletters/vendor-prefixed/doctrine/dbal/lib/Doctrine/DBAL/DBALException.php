<?php
 namespace MailPoetVendor\Doctrine\DBAL; if (!defined('ABSPATH')) exit; use MailPoetVendor\Doctrine\DBAL\Driver\DriverException; use MailPoetVendor\Doctrine\DBAL\Driver\ExceptionConverterDriver; class DBALException extends \Exception { public static function notSupported($method) { return new self("Operation '{$method}' is not supported by platform."); } public static function invalidPlatformSpecified() { return new self("Invalid 'platform' option specified, need to give an instance of " . "\\Doctrine\\DBAL\\Platforms\\AbstractPlatform."); } public static function invalidPlatformVersionSpecified($version, $expectedFormat) { return new self(\sprintf('Invalid platform version "%s" specified. ' . 'The platform version has to be specified in the format: "%s".', $version, $expectedFormat)); } public static function invalidPdoInstance() { return new self("The 'pdo' option was used in DriverManager::getConnection() but no " . "instance of PDO was given."); } public static function driverRequired($url = null) { if ($url) { return new self(\sprintf("The options 'driver' or 'driverClass' are mandatory if a connection URL without scheme " . "is given to DriverManager::getConnection(). Given URL: %s", $url)); } return new self("The options 'driver' or 'driverClass' are mandatory if no PDO " . "instance is given to DriverManager::getConnection()."); } public static function unknownDriver($unknownDriverName, array $knownDrivers) { return new self("The given 'driver' " . $unknownDriverName . " is unknown, " . "Doctrine currently supports only the following drivers: " . \implode(", ", $knownDrivers)); } public static function driverExceptionDuringQuery(\MailPoetVendor\Doctrine\DBAL\Driver $driver, \Exception $driverEx, $sql, array $params = array()) { $msg = "An exception occurred while executing '" . $sql . "'"; if ($params) { $msg .= " with params " . self::formatParameters($params); } $msg .= ":\n\n" . $driverEx->getMessage(); if ($driver instanceof \MailPoetVendor\Doctrine\DBAL\Driver\ExceptionConverterDriver && $driverEx instanceof \MailPoetVendor\Doctrine\DBAL\Driver\DriverException) { return $driver->convertException($msg, $driverEx); } return new self($msg, 0, $driverEx); } public static function driverException(\MailPoetVendor\Doctrine\DBAL\Driver $driver, \Exception $driverEx) { $msg = "An exception occured in driver: " . $driverEx->getMessage(); if ($driver instanceof \MailPoetVendor\Doctrine\DBAL\Driver\ExceptionConverterDriver && $driverEx instanceof \MailPoetVendor\Doctrine\DBAL\Driver\DriverException) { return $driver->convertException($msg, $driverEx); } return new self($msg, 0, $driverEx); } private static function formatParameters(array $params) { return '[' . \implode(', ', \array_map(function ($param) { $json = @\json_encode($param); if (!\is_string($json) || $json == 'null' && \is_string($param)) { return '"\\x' . \implode('\\x', \str_split(\bin2hex($param), 2)) . '"'; } return $json; }, $params)) . ']'; } public static function invalidWrapperClass($wrapperClass) { return new self("The given 'wrapperClass' " . $wrapperClass . " has to be a " . "subtype of \\Doctrine\\DBAL\\Connection."); } public static function invalidDriverClass($driverClass) { return new self("The given 'driverClass' " . $driverClass . " has to implement the " . "\\Doctrine\\DBAL\\Driver interface."); } public static function invalidTableName($tableName) { return new self("Invalid table name specified: " . $tableName); } public static function noColumnsSpecifiedForTable($tableName) { return new self("No columns specified for table " . $tableName); } public static function limitOffsetInvalid() { return new self("Invalid Offset in Limit Query, it has to be larger or equal to 0."); } public static function typeExists($name) { return new self('Type ' . $name . ' already exists.'); } public static function unknownColumnType($name) { return new self('Unknown column type "' . $name . '" requested. Any Doctrine type that you use has ' . 'to be registered with \\Doctrine\\DBAL\\Types\\Type::addType(). You can get a list of all the ' . 'known types with \\Doctrine\\DBAL\\Types\\Type::getTypesMap(). If this error occurs during database ' . 'introspection then you might have forgot to register all database types for a Doctrine Type. Use ' . 'AbstractPlatform#registerDoctrineTypeMapping() or have your custom types implement ' . 'Type#getMappedDatabaseTypes(). If the type name is empty you might ' . 'have a problem with the cache or forgot some mapping information.'); } public static function typeNotFound($name) { return new self('Type to be overwritten ' . $name . ' does not exist.'); } } 