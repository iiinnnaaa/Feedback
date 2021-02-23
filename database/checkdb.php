<?php

$host = "localhost";
$dbname = "feedback";
$user = "root";
$password = "";

$connection = new mysqli($host, $user, $password, $dbname);

if($connection->connect_error){
  echo "Connection failed " .$connection->connect_error;
} else{
  echo  "Database connected successfully";
}
