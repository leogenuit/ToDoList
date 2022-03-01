<?php
try {

  $db = new PDO('mysql:host=localhost;dbname=ToDoListrReal', "root", "root");
} catch (Exception $e) {
  die('Erreur : ' . $e->getMessage());
}
  ?>
