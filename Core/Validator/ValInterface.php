<?php

namespace Core\Validator;

Interface ValInterface{
  public function __construct($value, $name);
  public function validate();
}