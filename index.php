<?php
require_once('db.php');
var_dump($_POST["title"]);

$data = [];

if (isset($_POST['add'])) {
  // array_unshift($data, $_POST['title']);
  $addContent = $db->prepare("INSERT INTO to_do(title) VALUE(:title)");
  $addContent->execute(['title' => $_POST['title']]);
}
var_dump($data);

require_once('app.php');
