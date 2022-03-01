<?php
require_once('config/config.php');
try {

  $db = new PDO("mysql:host=localhost;dbname=$dbname" ,"$pseudo" ,"$pwd");
} catch (Exception $e) {
  die('Erreur : ' . $e->getMessage());
}
  ?>
