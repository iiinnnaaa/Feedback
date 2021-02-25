<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Message;
use Core\Model;
use Core\Validator\Validator;

class Messages extends \Core\Controller {

  public function indexAction(){
    $messages = Message::getAll();

    View::renderTemplate('Messages/index.html', ['messages'=> $messages]);
  }

  public function addAction(){
    $database = Model::getDB();

    if(isset($_POST['add'])){
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $message = $_POST['feedback'];

      $request = [
        [
          "name" => "firstname",
          "value" => $firstname,
          "rules" => "required"
        ],
        [
          "name" => "lastname",
          "value" => $lastname,
          "rules" => "required"
        ],
        [
          "name" => "email",
          "value" => $email,
          "rules" => "email|required"
        ],
        [
          "name" => "message",
          "value" => $message,
          "rules" => "required"
        ]
      ];

      $errors = Validator::validate($request);

      if(!$errors){
        $insert = $database->query("INSERT INTO `messages`( `firstname`, `lastname`, `email`, `message`)
                                       VALUES ('$firstname', '$lastname', '$email', '$message')");

        if($insert){
          View::renderTemplate('Messages/add.html');
        } else {
          echo "error.something went wrong";

        }
      } else {
//        $errors = array_column($errors, 'errors');
        echo "<pre>";
        print_r($errors);
        echo "</pre>";
      }
    }
  }

  public function deleteAction(){
    $database = Model::getDB();

    if(isset($_POST['delete'])){

        $id = $_POST['id'];

      $delete = $database->query("DELETE FROM `messages` WHERE `id` = '$id'");

      if($delete){
        View::renderTemplate('Messages/delete.html');

      } else {
        echo "error.something went wrong";
      }
    }
  }

  public function viewAction(){
    $database = Model::getDB();
    
    if(isset($_POST['view'])){
      $id = $_POST['id'];
      $item = Message::getItem($id);
      $item = $item[0];
      View::renderTemplate('Messages/view.html', ['item'=>$item]);

      } else {
        echo "error.something went wrong";
      }

  }
}

