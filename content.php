<?php
    session_start();
    include "dbconn.php";
    $username = $_POST['name'];
    $pass = $_POST['password'];
    if($username == "" || $pass == "") { 
        echo "không thành công";
    }else {
        $db1 = new dbconnect();
        $db1->connect();
        $table = 'user';
        $where = "name ='$username' && password ='$pass'";
        $rows = $db1->select($table,$where);
        echo "<pre>";
        
    }
    if(empty($rows)) {
        header("location:login.php");
    }else {
        $_SESSION['id'] = $rows['id'];
        header("location:index.php");
       
    } 
?>


