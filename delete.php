<?php
    session_start();
    include "dbconn.php";
    $name = $_POST['name'];
    $id = $_POST['id'];
    $db5 = new dbconnect();
    $db5->connect();
    $where = "id = $id";
    $table = 'user';
    $db5->delete($table,$where);
?>
