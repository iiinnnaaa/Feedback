<?php
namespace App\Models;

use PDO;

class Admin extends \Core\Model {

  public static function getUser() {

    try {

      $db = static::getDB();

      $stmt = $db->query('SELECT id, email, password FROM users ORDER BY id');

      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $result;

    } catch (\PDOException $e){
      echo $e->getMessage();
    }
  }
 }