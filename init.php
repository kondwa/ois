<?php
include "oi.php";
try{
  $db->exec("CREATE TABLE mydb.au(id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(64),lastname VARCHAR(64),email VARCHAR(64),password(128));");
}catch(Exception $e){
 $e->getMessage();
}
?>
