<?php

namespace Core\Validator;

use Core\Validator\Rules\Email;
use Core\Validator\Rules\Required;
use Core\Validator\ValStrategy;


class Validator{

  public static function validate($request){

    $errors = [];

    foreach ($request as $field) {
      $rules = explode('|', $field['rules']);

        foreach ($rules as $rule){
          $error = '';

          if ($rule === 'email'){
            $error = (
              new ValStrategy(new Email($field['value'], $field['name'])))->validate();
          }

          if($rule === 'required'){
            $error = (
            new ValStrategy(new Required($field['value'], $field['name'])))->validate();
          }

          if($error){
            $errors[$field['name']]['errors'][] = $error;
          }

        }
    }
    return $errors;
  }
}