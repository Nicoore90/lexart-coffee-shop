<?php
namespace MailPoetVendor\Symfony\Component\Validator\Constraints;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Symfony\Component\Validator\Constraint;
class Callback extends Constraint
{
 public $callback;
 public function __construct($options = null)
 {
 // Invocation through annotations with an array parameter only
 if (\is_array($options) && 1 === \count($options) && isset($options['value'])) {
 $options = $options['value'];
 }
 if (\is_array($options) && !isset($options['callback']) && !isset($options['groups']) && !isset($options['payload'])) {
 $options = ['callback' => $options];
 }
 parent::__construct($options);
 }
 public function getDefaultOption()
 {
 return 'callback';
 }
 public function getTargets()
 {
 return [self::CLASS_CONSTRAINT, self::PROPERTY_CONSTRAINT];
 }
}
