<?php
    session_start();
    include "9.php";
    $username = $_POST['name'];
    $pass = $_POST['password'];

    if($username == "" || $pass == ""){ 
        echo "hjdgjkgd";
    }else{
        $db1 = new dbconnect();
        $db1->connect();
        $table = 'user';
        $where = "name ='$username' && password ='$pass'";
        $rows = $db1->select($table,$where);
        echo "<pre>";
    }
    if(empty($rows)){
        header("location:from.php");
    }else{
        $_SESSION['id'] = $rows['id'];
        header("location:index.php");
    }
    
?>