<?php
    include "dbconn.php";
    $name = $_POST['name'];
    $name1 = $_POST['name1'];
    $pass = $_POST['password'];
    $addess = $_POST['addess'];
    $profile = $_POST['profile'];
    if($name == "" || $name1 == "" || $pass == "" || $addess == "" || $profile == "" ) {
        echo "không đăng nhập đươc";
    }else{
    $db3 = new dbconnect();
    $db3->connect();
    $table = 'user';
    $colum = 'name,name1,password,addess,profile';
    $values =  "('$name'),('$name1'),('$pass'),('$addess'),('$profile')";
    $db3->insert($table,$colum,$values);
    }
?>