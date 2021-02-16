<?php

namespace Core;

class Router{

  /**
   * Associative array of routes (the routing table)
   */
  protected $routes = [];

  /**
   * Parameters from the matched route
   */
  protected $params = [];

  /**
   * Add a route to the routing table
   *
   * $route  The route URL
   * $params Parameters (controller, action, etc.)
   */
  public function add($route, $params = [])
  {
    // Convert the route to a regular expression: escape forward slashes
    $route = preg_replace('/\//', '\\/', $route);

    // Convert variables e.g. {controller}
    $route = preg_replace('/\{([a-z]+)\}/', '(?P<\1>[a-z-]+)', $route);

    // Convert variables with custom regular expressions e.g. {id:\d+}
    $route = preg_replace('/\{([a-z]+):([^\}]+)\}/', '(?P<\1>\2)', $route);

    // Add start and end delimiters, and case insensitive flag
    $route = '/^' . $route . '$/i';

    $this->routes[$route] = $params;
  }

  /**
   * Get all the routes from the routing table
   */
  public function getRoutes()
  {
    return $this->routes;
  }

  /**
   * Match the route to the routes in the routing table, setting the $params
   * property if a route is found.
   * $url The route URL
   * return boolean  true if a match found, false otherwise
   */

  public function match($url){
    foreach ($this->routes as $route => $params) {
      if (preg_match($route, $url, $matches)) {
        foreach ($matches as $key => $match) {
          if (is_string($key)) {
            $params[$key] = $match;
          }
        }

        $this->params = $params;
        return true;
      }
    }

    return false;
  }

  /**
   * Get the currently matched parameters
   */
  public function getParams()
  {
    return $this->params;
  }

  public function dispatch($url){

    $url = $this->removeQueryStringVariable($url);

    if ($this->match($url)){
      $controller = $this->params['controller'];
      $controller = $this->convertToStudlyCaps($controller);
//      $controller = "App\Controllers\\$controller";
      $controller = $this->getNamespace() .$controller;


      if (class_exists($controller)){
          $controller_object = new $controller($this->params);

          $action = $this->params['action'];
          $action = $this->convertToCamelCase($action);

          if (is_callable([$controller_object, $action])){
            $controller_object->$action();
          } else {
            echo "error";
          }
        }else{
          echo "error";
        }
    }else{
      echo "error";
    }
  }

  protected function convertToStudlyCaps($string){
    return str_replace(' ', '', ucwords(str_replace('-', '', $string)));
  }

  protected function convertToCamelCase($string){
    return lcfirst($this->convertToStudlyCaps($string));
  }

  protected function removeQueryStringVariable($url){
    if($url != ''){
      $parts = explode('&', $url, 2);

      if(strpos($parts[0], '=')=== false){
        $url = $parts[0];
      } else{
        $url = '';
      }
    }
    return $url;
  }

  protected function getNamespace(){
    $namespace = 'App\Controllers\\';

    if(array_key_exists('namespace', $this->params)){
      $namespace .= $this->params['namespace'] .'\\';
    }
    return $namespace;
  }
}
