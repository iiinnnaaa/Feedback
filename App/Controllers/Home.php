<?php

namespace App\Controllers;

use App\Models\Message;
use \Core\View;

class Home extends \Core\Controller {

  public function indexAction(){
    View::renderTemplate('Home/index.html');
  }


  public function loginAction(){
    if(isset($_SESSION['email'])){
      $messages = Message::getAll();
      View::renderTemplate('Messages/index.html', ['messages'=> $messages]);
    }
    else{
      View::renderTemplate('Home/login.html');
    }

  }
}