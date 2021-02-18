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
    };
  }
}