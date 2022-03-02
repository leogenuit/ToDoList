<?php
require_once('db.php');
var_dump($_POST["title"]);

$data = [];

if (isset($_POST['add'])) {
  // array_unshift($data, $_POST['title']);
  $checkbox;
  if($_POST['fait'] === 'on') {
    $checkbox = 1;
  } else {
    $checkbox = 0;
  }
    $addContent = $db->prepare("INSERT INTO to_do(title, fait) VALUE(:title, :fait)");
    $addContent->execute([
      'title' => $_POST['title'],
      'fait' => $checkbox
    ]);
}
var_dump($data);
// lalalalal
require_once('app.php');
