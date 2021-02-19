<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Message;
use Core\Model;


class Messages extends \Core\Controller {

  //Show the index page
  //fill user data
  public function indexAction(){
  $messages = Message::getAll();

  View::renderTemplate('Messages/index.html', [
    'messages'=> $messages]);
  }

  //Show the add new page
  public function addNewAction(){
    echo "add new action messages controller";
    //+validate
  }

  public function addAction(){
    $database = Model::getDB();

    if(isset($_POST['add'])){
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $message = $_POST['feedback'];

      $insert = $database->query("INSERT INTO `messages`( `firstname`, `lastname`, `email`, `message`)
                                       VALUES ('$firstname', '$lastname', '$email', '$message')");

      if($insert){
//        echo 'data added successfully';
        View::renderTemplate('Messages/add.html');

      } else {
        echo "error.something went wrong";
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
//    $messages = Message::getAll();
//
//    if(isset($_POST['view'])){
//
//      View::renderTemplate('Messages/view.html', [
//        'messages'=> $messages]);
//    }

    $database = Model::getDB();


    if(isset($_POST['view'])){
      $id = $_POST['id'];
//      $firstname = $_POST['firstname'];
//      $lastname = $_POST['lastname'];
//      $email = $_POST['email'];
//      $message = $_POST['feedback'];

//      View::renderTemplate('Messages/view.html', [
////        'id'=> $id, 'firstname'=> $firstname, 'lastname'=> $lastname, 'email'=>$email, 'message'=>$message, 'sent_at'=>$sent_at]);
//             'id'=>$id]);
//      echo $id;

      $item = Message::getItem($id);
//      var_dump($item);
      $item = $item[0];
      View::renderTemplate('Messages/view.html', ['item'=>$item]);

      } else {
        echo "error.something went wrong";
      }

  }
}

