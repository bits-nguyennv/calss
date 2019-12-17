<?php
    session_start();
    if(isset($_SESSION['use']) && $_SESSION['pass'] != NULL){

        unset($_SESSION['use']);
        unset($_SESSION['pass']);
        var_dump($_SESSION);
        header("location:from.php");
    }
?>

