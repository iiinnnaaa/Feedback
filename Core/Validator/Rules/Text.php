<?php

namespace Core\Validator\Rules;

use Core\Validator\ValInterface;
use Exception;

class Text implements ValInterface {

  protected $value, $name;

  public function __construct($value, $name) {
    $this->value = $value;
    $this->name = $name;
  }

  public function validate() {
    if ( preg_match('/[^A-Za-z.#\\-$]/',$this->value)) {
      throw new Exception("$this->name filed is not valid string", 400);
    }
    return '';
  }
}