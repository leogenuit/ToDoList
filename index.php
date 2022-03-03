<?php
require_once('db.php');
$data = [];

if (isset($_POST['add'])) {
  $addContent = $db->prepare("INSERT INTO to_do(title) VALUE(:title)");
  $addContent->execute(['title' => $_POST['title']]);
}
if (isset($_POST['delete'])) {
// $deleteContent = $db->prepare("DELETE FROM "to_do" WHERE ")
}
$req_all_to_do = $db->prepare("SELECT * FROM to_do");
$req_all_to_do->execute();

$all_to_do = $req_all_to_do->fetchAll();


foreach ($all_to_do as $all_to) {
  $data[] = $all_to["title"];
}
require_once('app.php');
