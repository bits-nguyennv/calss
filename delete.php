<?php
    session_start();
    include "dbconn.php";
    $id = $_SESSION['id'];
    $db5 = new dbconnect();
    $db5->connect();
    $where = "id = $id";
    $table = 'user';
    $delete = $db5->delete($table,$where);
    if($delete == true) {
        unset($_SESSION['id']);
        header("location:login.php");
    }else {
        header("location:delete.php");
    }
?>
