<?php
 namespace MailPoetVendor\Doctrine\ORM\Query\Expr; if (!defined('ABSPATH')) exit; class OrderBy { protected $preSeparator = ''; protected $separator = ', '; protected $postSeparator = ''; protected $allowedClasses = array(); protected $parts = array(); public function __construct($sort = null, $order = null) { if ($sort) { $this->add($sort, $order); } } public function add($sort, $order = null) { $order = !$order ? 'ASC' : $order; $this->parts[] = $sort . ' ' . $order; } public function count() { return \count($this->parts); } public function getParts() { return $this->parts; } public function __tostring() { return $this->preSeparator . \implode($this->separator, $this->parts) . $this->postSeparator; } } 