<?php
session_start();
    $id = $_SESSION['id'];
    include "dbconn.php";
    $name = $_POST['name'];
    // $id = $_POST['id'];
    $pass = $_POST['password'];
    $addess = $_POST['addess'];
    $profile = $_POST['profile'];
    $name1 = $_POST['name1'];
    $img = $_POST['img'];
    $phone = $_POST['phone'];
    $db4 = new dbconnect();
    $db4->connect();
    $where = "id = $id";
    $table = 'user';
    $colum2 = 'name';
    $colum3 = 'name1';
    $colum4 = 'password';
    $colum5 = 'addess';
    $colum6 = 'profile';
    $colum7 = 'img';
    $colum8 = 'phone';
    $array = [
        $colum2 => $name,
        $colum3 => $name1,
        $colum4 => $pass,
        $colum5 => $addess,
        $colum6 => $profile,
        $colum7 => $img,
        $colum8 => $phone
    ];
    $update = $db4->update($table,$array,$where);
    if(empty($update)) {
    header("location:update.php");
    }else {
    header("location:index.php");
    }
?>
