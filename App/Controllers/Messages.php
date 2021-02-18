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

    if(isset($_POST['submit'])){
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




  public function viewAction(){
//view messages

  }

  public function deleteAction(){
    $database = Model::getDB();

    if(isset($_POST['submit'])){

//      $delete = $database->query("DELETE FROM `messages` WHERE `id` =  ");

      if($delete){
//                echo 'data deleted successfully';
      } else {
        echo "error.something went wrong";
      }
    }
  }
}