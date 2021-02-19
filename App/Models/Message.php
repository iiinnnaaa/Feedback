<?php
namespace App\Models;

use PDO;

class Message extends \Core\Model {

  public static function getAll() {

    try {

      $db = static::getDB();

      $stmt = $db->query('SELECT id, firstname, lastname, email, message, sent_at FROM messages ORDER BY id');

      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $result;

    } catch (\PDOException $e){
      echo $e->getMessage();
    }
  }

  public static function getItem($id){
    $db = static::getDB();

    $item = $db->query("SELECT `id`, `firstname`, `lastname`, `email`, `message`, `sent_at` FROM `messages` WHERE `id` = $id");

    $res = $item->fetchAll(PDO::FETCH_ASSOC);

    return $res;
  }
}