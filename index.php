<?php
require_once('db.php');
$data = [];

if (isset($_POST['add'])) {
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

$req_all_to_do = $db->prepare("SELECT * FROM to_do");
$req_all_to_do->execute();

$all_to_do = $req_all_to_do->fetchAll();


foreach($all_to_do as $all_to) {
  $data[]= $all_to["title"];

}
require_once('app.php');
