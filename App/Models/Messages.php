<?php
namespace App\Models;

use PDO;

class Message {

  public static function getAll() {
    $host = 'localhost';
    $dbname = 'feedback';
    $username = 'root';
    $password = 'root';

    try {
      $db = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8",
            $username, $password);
      $stmt = $db->query('SELECT id, firstname, lastname, message, sent_at FROM messages ORDER BY id');
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $result;
    } catch (\PDOException $e){
      echo $e->getMessage();
    };
  }
}