<?php

namespace Core\Validator\Rules;

use Core\Validator\ValInterface;

class Email implements ValInterface {
  protected $value, $name;

  public function __construct($value, $name){
    $this->value = $value;
    $this->name = $name;
  }

  public function validate(){
    if(!filter_var($this->value, FILTER_VALIDATE_EMAIL)){
      return "$this->name filed is not a valid email";
    }
    return '';
  }
}