<?php

namespace Core\Validator\Rules;

use Core\Validator\ValInterface;

class Required implements ValInterface {

  protected $value, $name;

  public function __construct($value, $name) {
    $this->value = $value;
    $this->name = $name;
  }

  public function validate() {
    if (strlen($this->value) === 0) {
      return "$this->name field is required.";
    }
    return '';
  }

}