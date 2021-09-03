<?php
include "oi/oi.php";
try{
  $db->exec("CREATE TABLE IF NOT EXISTS mydb.ua(id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(64),lastname VARCHAR(64),email VARCHAR(64),password VARCHAR(300));");
  $db->exec("CREATE TABLE IF NOT EXISTS mydb.cash(
    id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    amount DECIMAL(13,2),
    balance DECIMAL(13,2),
    transaction VARCHAR(256)
    );"
  );
  echo "database initiated.";
}catch(Exception $e){
 $e->getMessage();
}
?>
