<?php
global $db;
$dsn = "mysql:host=localhost;dbname=mydb;";
$u = "oi";
try{
  $db = new PDO($dsn,$u);
}catch(Exception $e){
  echo "db connection failed.";
}
?>
