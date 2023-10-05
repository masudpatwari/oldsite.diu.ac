<?php
 namespace MailPoetVendor\Symfony\Component\Validator\Mapping\Loader; if (!defined('ABSPATH')) exit; use MailPoetVendor\Symfony\Component\Validator\Exception\MappingException; abstract class FileLoader extends \MailPoetVendor\Symfony\Component\Validator\Mapping\Loader\AbstractLoader { protected $file; public function __construct($file) { if (!\is_file($file)) { throw new \MailPoetVendor\Symfony\Component\Validator\Exception\MappingException(\sprintf('The mapping file "%s" does not exist', $file)); } if (!\is_readable($file)) { throw new \MailPoetVendor\Symfony\Component\Validator\Exception\MappingException(\sprintf('The mapping file "%s" is not readable', $file)); } if (!\stream_is_local($this->file)) { throw new \MailPoetVendor\Symfony\Component\Validator\Exception\MappingException(\sprintf('The mapping file "%s" is not a local file', $file)); } $this->file = $file; } } 