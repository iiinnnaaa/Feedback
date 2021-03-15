<?php

namespace App\Controllers;

use Core\Controller;
use \Core\View;
use App\Models\Message;
use Core\Model;
use Core\Validator\Validator;
use Exception;

class Messages extends Controller {

  public function indexAction() {
    $messages = Message::getAll();

    View::renderTemplate('Messages/index.html', ['messages' => $messages]);
  }

  public function addAction() {
    $database = Model::getDB();

    if (isset($_POST['add'])) {
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $message = $_POST['feedback'];

      $request = [
        [
          "name" => "firstname",
          "value" => $firstname,
          "rules" => "text|required",
        ],
        [
          "name" => "lastname",
          "value" => $lastname,
          "rules" => "text|required",
        ],
        [
          "name" => "email",
          "value" => $email,
          "rules" => "email|required",
        ],
        [
          "name" => "message",
          "value" => $message,
          "rules" => "required",
        ],
      ];

      $errors = Validator::validate($request);


      if (!$errors) {
        $insert = $database->query("INSERT INTO `messages`( `firstname`, `lastname`, `email`, `message`)
                                       VALUES ('$firstname', '$lastname', '$email', '$message')");

        if ($insert) {
          View::renderTemplate('Messages/add.html');
        }
        else {
          throw new Exception("Error. Try again");
        }
      }
      else {
        throw new Exception("Please fill required fields", 400);
      }
    }

    else{
      throw new Exception("Please fill required fields", 500);
    }
  }


  public function deleteAction() {

    $database = Model::getDB();
    $messages = Message::getAll();

    $id = $_POST['id'];

    $delete = $database->query("DELETE FROM `messages` WHERE `id` = '$id'");

    if ($delete) {
      View::renderTemplate('Messages/delete.html', ['messages' => $messages]);
    }
    else {
      throw new Exception("Deleted Failed. Try again.", 500);
    }

  }

  public function viewAction() {
    $database = Model::getDB();
    $messages = Message::getAll();

    if (isset($_POST['view'])) {
      $id = $_POST['id'];
      $item = Message::getItem($id);
      $item = $item[0];
      View::renderTemplate('Messages/view.html', ['item' => $item]);

    }
    else {
      throw new Exception("Error. Something went wrong. Please try again.", 500);
    }
  }

}

