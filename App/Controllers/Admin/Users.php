<?php
namespace App\Controllers\Admin;

use Core\View;

class Users extends \Core\Controller{

  protected function before(){
    //check admin
      echo '(before) ';
      //    if ( ! isset($_SESSION["user_id"])) {
      //      return false;
      //    }
      //   return false; //if admin isn't logged in return false
    }


  public function indexAction(){
//    View::renderTemplate('login.html');
  }

}