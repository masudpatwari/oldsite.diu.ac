<?php
 namespace MailPoetVendor\Psr\Log; if (!defined('ABSPATH')) exit; abstract class AbstractLogger implements \MailPoetVendor\Psr\Log\LoggerInterface { public function emergency($message, array $context = array()) { $this->log(\MailPoetVendor\Psr\Log\LogLevel::EMERGENCY, $message, $context); } public function alert($message, array $context = array()) { $this->log(\MailPoetVendor\Psr\Log\LogLevel::ALERT, $message, $context); } public function critical($message, array $context = array()) { $this->log(\MailPoetVendor\Psr\Log\LogLevel::CRITICAL, $message, $context); } public function error($message, array $context = array()) { $this->log(\MailPoetVendor\Psr\Log\LogLevel::ERROR, $message, $context); } public function warning($message, array $context = array()) { $this->log(\MailPoetVendor\Psr\Log\LogLevel::WARNING, $message, $context); } public function notice($message, array $context = array()) { $this->log(\MailPoetVendor\Psr\Log\LogLevel::NOTICE, $message, $context); } public function info($message, array $context = array()) { $this->log(\MailPoetVendor\Psr\Log\LogLevel::INFO, $message, $context); } public function debug($message, array $context = array()) { $this->log(\MailPoetVendor\Psr\Log\LogLevel::DEBUG, $message, $context); } } 