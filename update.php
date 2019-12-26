<?php
    include "dbconn.php";
    $name = $_POST['name'];
    $id = $_POST['id'];
    $db4 = new dbconnect();
    $db4->connect();
    $where = "id = $id";
    $table = 'user';
    $colum = 'name';
    $values = $name;
    $db4->update($table,$colum,$values,$where);
?>
