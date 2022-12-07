<?php

function db_conn(){
  try { 
    $db_name = "phpkiso";
    $db_id = "root";
    $db_pw = "";
    $db_host = "localhost"; 
    $db_port = "8080";
    $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);

  return $pdo;
  } catch (PDOException $e){
    exit('DB Connection Error:' . $e->getMessage());
  }
}

?>