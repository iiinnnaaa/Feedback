<?php

namespace Core\Validator\Rules;

use Core\Validator\ValInterface;
use Exception;

class Required implements ValInterface {

  protected $value, $name;

  public function __construct($value, $name) {
    $this->value = $value;
    $this->name = $name;
  }

  public function validate() {
    if (strlen($this->value) === 0) {
      throw new Exception("$this->name field is required.", 400);
    }
    return '';
  }

}