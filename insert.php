<?php
    include "dbconn.php";
    $name = $_POST['name'];
    $name1 = $_POST['name1'];
    $pass = $_POST['password'];
    $addess = $_POST['addess'];
    $profile = $_POST['profile'];
    $img = $_POST['img'];
    $db3 = new dbconnect();
    $db3->connect();
    $table = 'user';
    $colum = 'name,name1,password,addess,profile,img';
    $values =  "('$name'),('$name1'),('$pass'),('$addess'),('$profile'),('$img')";
    $insert= $db3->insert($table,$colum,$values);
    if(empty($insert)) {
        header("location:insert.php");
    }else {
        header("location:login.php");
    }
?>
