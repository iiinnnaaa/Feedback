<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Message;

class Messages extends \Core\Controller{

  //Show the index page
  //fill user data
  public function indexAction(){
//    echo "messages controller index action";
//    echo '<p>Query string parameters: <pre>' .htmlspecialchars(print_r($_GET, true)) .'</pre></p>';
  $messages = Message::getAll();

  View::renderTemplate('Messages/index.html', [
    'messages'=> $messages]);
  }

  //Show the add new page
  public function addNewAction(){
    echo "add new action messages controller";
    //+validate
  }

  //edit messages
  public function editAction(){
//    echo "edit action";
    echo '<p>Query string parameters: <pre>' .htmlspecialchars(print_r($this->route_params, true)) .'</pre></p>';

  }

  public function deleteAction(){
    //    echo "delete action";
  //echo '<p>Query string parameters: <pre>' .htmlspecialchars(print_r($this->route_params, true)) .'</pre></p>';

  }
}