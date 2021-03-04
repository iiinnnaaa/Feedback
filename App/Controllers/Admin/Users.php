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

      if ($login == $admin['email'] && password_verify($password, $admin['password'])) {

        $_SESSION['email'] = $login;
        $_SESSION['password'] = $password;

        header("Location: /messages/index");
      }
      else {
        throw new Exception("Wrong login or password, please try again");
      }
    }
    else {
      throw new Exception("ERROR. Something went wrong");
    }
  }

  public function logoutAction() {
    if (isset($_POST['logout'])) {
      session_unset();
      session_destroy();

      header("Location: /");
    }
    else {
      throw new Exception("Logout failed. Try again.");
    }
  }

}



