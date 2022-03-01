<?php
require_once('db.php');
var_dump($_POST["title"]);

$data = [];

if(isset($_POST['add'])) {
  array_unshift($data, $_POST['title']);
}
var_dump($data);

require_once('app.php');
