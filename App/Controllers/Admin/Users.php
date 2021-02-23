<?php
namespace App\Controllers\Admin;

use \Core\View;
use App\Models\Admin;
use App\Models\Message;
use Core\Model;
class Users extends \Core\Controller{

public function loginAction(){
    
    $messages = Message::getAll();
    $data = Admin::getUser();
    
    if(isset($_POST ['login'])){

      $admin = Admin::getUser();
      $admin = $admin[0];

      $login = $_POST['admin'];
      $password = $_POST['password'];
      
        if ($login == $admin['email'] && $password == $admin['password']) {
          View::renderTemplate('Messages/index.html', ['messages'=> $messages]);
        } else {
          echo "wrong login or password";
        }

      } else {
        echo "error.something went wrong";
      }
      
  }

}



