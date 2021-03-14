<?php

namespace App\Controllers\Admin;

use App\Models\Admin;
use App\Models\Message;
use Core\Controller;
use Exception;

class Users extends Controller {

  public function loginAction() {

    $messages = Message::getAll();

    if (isset($_POST ['login'])) {

      $email = $_POST['admin'];
      $admin = Admin::getAdmin($email);

      $login = $_POST['admin'];
      $password = $_POST['password'];

      if(!$admin){
        throw new Exception("Wrong login, please try again", 401);
      }
      else{
        if ($login == $admin['email'] && password_verify($password, $admin['password'])) {
          $_SESSION['email'] = $login;
          header("Location: /messages/index");
        }
        else {
          throw new Exception("Wrong password, please try again", 401);
        }
      }

    }
    else {
      throw new Exception("ERROR. Something went wrong", 401);
    }
  }

  public function logoutAction() {
    if (isset($_POST['logout'])) {
      session_unset();
      session_destroy();

      header("Location: /");
    }
    else {
      throw new Exception("Logout failed. Try again.", 401);
    }
  }

}



