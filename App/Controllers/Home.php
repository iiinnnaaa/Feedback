<?php

namespace App\Controllers;

use \Core\View;

class Home extends \Core\Controller {

  //Show messages
  public function indexAction(){
    View::renderTemplate('Home/index.html',[
      'name' => 'Lucy',
       'colors' => ['red', 'green', 'blue']
    ]);
  }
}