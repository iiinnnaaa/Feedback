<?php

namespace Core\Validator;

use Core\Validator\ValInterface;

class ValStrategy{
  protected $validation;

  public function __construct(ValInterface $validation){
      $this->validation = $validation;
  }

  public function validate(){
    return $this->validation->validate();
  }
}