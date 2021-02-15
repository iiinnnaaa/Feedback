<?php

class Router{

  /**
   * Associative array of routes
   * @var array
   */
  protected $routes = [];

  /**
   * Parameters from the matched route
   */
  protected $params = [];

  /**
   * Add a route to the routing table
   * @param $route // the route URL
   * @param $params  // Parameters (controller, action, etc.)
   */
  public function add($route, $params){
    //Covert the route to a regular expression
    $route = preg_replace('/\//','\\/',$route);

    //Convert variables e. g. {controller}
    $route = preg_replace('/\{([a-z]+)\}/','(?P<\1>[a-z-]+)', $route);

    //Covert variable with custom regular expressions e.g. {id:\d+}
    $route = preg_replace('/\{([a-z]+):([^\}]+)\}/','(?P<\1>\2)', $route);

    //Add start and end delimiters, and case insensitive flag
    $route = '/^' .$route .'$/i';

    $this->routes[$route]=$params;
  }
/*
 * Get all the routes from the routing table // return array
 */
  public function getRoutes(){
    return $this->routes;
  }

  public function match($url){
    foreach ($this->routes as $route=> $params){
      if($url == $route){
        $this->params = $params;
        return true;
      }
    }
    return false;
  }

  /*
   * Get the currently matched parameters
   */
  public function getParams(){
    return $this->params;
  }
}