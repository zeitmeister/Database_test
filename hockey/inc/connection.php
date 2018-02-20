<?php

$username = "root";
$password = "";
  try{
    $db = new PDO('mysql:host=localhost;dbname=Hockey', $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->query("SET NAMES 'utf8'");
  } catch(PDOException $e) {
    echo "Connection failed " . $e->getMessage();
  }



  ?>
