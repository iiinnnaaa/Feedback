<?php

namespace Core;

use Exception;

class Controller {

  //parameters from the matched routes
  protected $route_params = [];

  //class constructor
  public function __construct($route_params) {
    $this->route_params = $route_params;
  }

  public function __call($name, $args) {
    $method = $name . 'Action';

    if (method_exists($this, $method)) {
      if ($this->before() !== FALSE) {
        call_user_func_array([$this, $method], $args);
        $this->after();
      }
    }
    else {
      throw new Exception("Method $method not found in controller" . get_class($this));
    }
  }

  protected function before() {
  }

  protected function after() {
  }

}