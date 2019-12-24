<?php
include "dbconn.php";
// $name = $_POST['name'];
// $id = $_POST['id'];
$db4 = new dbconnect();
$db4->connect();
$table2 = 'user';
$where2 = 'id';
$rows = $db4->select2($table2,$where2);
?>