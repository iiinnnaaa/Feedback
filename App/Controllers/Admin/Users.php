<?php
namespace App\Controllers\Admin;

use \Core\View;
use App\Models\Admin;
use App\Models\Message;
use Core\Model;

class Users extends \Core\Controller{

public function loginAction(){

    $messages = Message::getAll();

    if(isset($_POST ['login'])){

      $email = $_POST['admin'];
      $admin = Admin::getAdmin($email);

      $login = $_POST['admin'];
      $password = $_POST['password'];

      if ($login == $admin['email'] && password_verify($password, $admin['password'])) {

          $_SESSION['email'] = $login;
          $_SESSION['password'] = $password;

          View::renderTemplate('Messages/index.html', ['messages' => $messages]);

      } else {
          echo "wrong login or password try again";
        }

      } else {
        echo "error.something went wrong";
      }

  }

  public function logoutAction(){
    if(isset($_POST['logout'])){
      session_unset();
      session_destroy();

      View::renderTemplate('Home/index.html');
    }
    else {
      echo "error";
    }
  }

}



