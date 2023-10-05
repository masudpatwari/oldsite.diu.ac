<?php
 namespace MailPoetVendor\Doctrine\DBAL\Types; if (!defined('ABSPATH')) exit; use MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform; use MailPoetVendor\Doctrine\DBAL\DBALException; abstract class Type { const TARRAY = 'array'; const SIMPLE_ARRAY = 'simple_array'; const JSON_ARRAY = 'json_array'; const BIGINT = 'bigint'; const BOOLEAN = 'boolean'; const DATETIME = 'datetime'; const DATETIMETZ = 'datetimetz'; const DATE = 'date'; const TIME = 'time'; const DECIMAL = 'decimal'; const INTEGER = 'integer'; const OBJECT = 'object'; const SMALLINT = 'smallint'; const STRING = 'string'; const TEXT = 'text'; const BINARY = 'binary'; const BLOB = 'blob'; const FLOAT = 'float'; const GUID = 'guid'; private static $_typeObjects = array(); private static $_typesMap = array(self::TARRAY => 'MailPoetVendor\\Doctrine\\DBAL\\Types\\ArrayType', self::SIMPLE_ARRAY => 'MailPoetVendor\\Doctrine\\DBAL\\Types\\SimpleArrayType', self::JSON_ARRAY => 'MailPoetVendor\\Doctrine\\DBAL\\Types\\JsonArrayType', self::OBJECT => 'MailPoetVendor\\Doctrine\\DBAL\\Types\\ObjectType', self::BOOLEAN => 'MailPoetVendor\\Doctrine\\DBAL\\Types\\BooleanType', self::INTEGER => 'MailPoetVendor\\Doctrine\\DBAL\\Types\\IntegerType', self::SMALLINT => 'MailPoetVendor\\Doctrine\\DBAL\\Types\\SmallIntType', self::BIGINT => 'MailPoetVendor\\Doctrine\\DBAL\\Types\\BigIntType', self::STRING => 'MailPoetVendor\\Doctrine\\DBAL\\Types\\StringType', self::TEXT => 'MailPoetVendor\\Doctrine\\DBAL\\Types\\TextType', self::DATETIME => 'MailPoetVendor\\Doctrine\\DBAL\\Types\\DateTimeType', self::DATETIMETZ => 'MailPoetVendor\\Doctrine\\DBAL\\Types\\DateTimeTzType', self::DATE => 'MailPoetVendor\\Doctrine\\DBAL\\Types\\DateType', self::TIME => 'MailPoetVendor\\Doctrine\\DBAL\\Types\\TimeType', self::DECIMAL => 'MailPoetVendor\\Doctrine\\DBAL\\Types\\DecimalType', self::FLOAT => 'MailPoetVendor\\Doctrine\\DBAL\\Types\\FloatType', self::BINARY => 'MailPoetVendor\\Doctrine\\DBAL\\Types\\BinaryType', self::BLOB => 'MailPoetVendor\\Doctrine\\DBAL\\Types\\BlobType', self::GUID => 'MailPoetVendor\\Doctrine\\DBAL\\Types\\GuidType'); private final function __construct() { } public function convertToDatabaseValue($value, \MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform $platform) { return $value; } public function convertToPHPValue($value, \MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform $platform) { return $value; } public function getDefaultLength(\MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform $platform) { return null; } public abstract function getSQLDeclaration(array $fieldDeclaration, \MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform $platform); public abstract function getName(); public static function getType($name) { if (!isset(self::$_typeObjects[$name])) { if (!isset(self::$_typesMap[$name])) { throw \MailPoetVendor\Doctrine\DBAL\DBALException::unknownColumnType($name); } self::$_typeObjects[$name] = new self::$_typesMap[$name](); } return self::$_typeObjects[$name]; } public static function addType($name, $className) { if (isset(self::$_typesMap[$name])) { throw \MailPoetVendor\Doctrine\DBAL\DBALException::typeExists($name); } self::$_typesMap[$name] = $className; } public static function hasType($name) { return isset(self::$_typesMap[$name]); } public static function overrideType($name, $className) { if (!isset(self::$_typesMap[$name])) { throw \MailPoetVendor\Doctrine\DBAL\DBALException::typeNotFound($name); } if (isset(self::$_typeObjects[$name])) { unset(self::$_typeObjects[$name]); } self::$_typesMap[$name] = $className; } public function getBindingType() { return \PDO::PARAM_STR; } public static function getTypesMap() { return self::$_typesMap; } public function __toString() { $e = \explode('\\', \get_class($this)); return \str_replace('Type', '', \end($e)); } public function canRequireSQLConversion() { return \false; } public function convertToDatabaseValueSQL($sqlExpr, \MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform $platform) { return $sqlExpr; } public function convertToPHPValueSQL($sqlExpr, $platform) { return $sqlExpr; } public function getMappedDatabaseTypes(\MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform $platform) { return array(); } public function requiresSQLCommentHint(\MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform $platform) { return \false; } } 