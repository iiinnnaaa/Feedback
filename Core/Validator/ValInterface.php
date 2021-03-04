<?php

namespace Core\Validator;

interface ValInterface {

  public function __construct($value, $name);

  public function validate();

}