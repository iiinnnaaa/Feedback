<?php

namespace Core;

use Exception;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class View {

  //render a view file
  public static function render($view, $args = []) {

    extract($args, EXTR_SKIP);

    $file = "../App/Views/$view";

    if (is_readable($file)) {
      require $file;
    }
    else {
      throw new Exception("$file not found");
    }
  }

  //render a view template using twig
  public static function renderTemplate($template, $args = []) {
    static $twig = NULL;

    if ($twig === NULL) {
      $loader = new FilesystemLoader('../App/Views');
      $twig = new Environment($loader);
    }
    $twig->addGlobal("session", $_SESSION);

    echo $twig->render($template, $args);
  }

}