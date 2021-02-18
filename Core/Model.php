<?php

namespace Core;

use PDO;
//use App\Config;

class Model{
  public static function getDB(){

    $host = 'localhost';
    $dbname = 'feedback';
    $username = 'root';
    $password = 'root';

    static $db = null;

      if ($db === null) {
//        $dsn = "mysql:host=" . Config::DB_HOST . "; dbname=" . Config::DB_NAME . "; charset=utf8";
//        $db = new PDO($dsn, Config::DB_USER, Config::DB_PASSWORD);

        $dsn = "mysql:host=$host; dbname=$dbname; charset=utf8";
        $db = new PDO($dsn, $username, $password);

          //Throw an exception when error occurs
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      }
    return $db;
  }
}