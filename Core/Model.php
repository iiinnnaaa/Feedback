<?php

namespace Core;

use PDO;

class Model {

  public static function getDB() {

    $host = 'localhost';
    $dbname = 'feedback';
    $username = 'root';
    $password = '';

    static $db = NULL;

    if ($db === NULL) {
      $dsn = "mysql:host=$host; dbname=$dbname; charset=utf8";
      $db = new PDO($dsn, $username, $password);

      //Throw an exception when error occurs
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    return $db;
  }

}