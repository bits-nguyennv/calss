<?php
session_start();
include "human.php";
include "dbconn.php";
$nguyen = new human();
$db2 = new dbconnect();
$db2->connect();
$table1 = 'user';
$where1 ="id = " .$_SESSION['id'];
$name = $db2->select1($table1,$where1);
$name =  mysqli_fetch_assoc($name);
$nguyen->set_name($name);
?>
<html>
    <form action=" update.php" method = "POST">
        name:<br>
        <input type="text" name="name" value="<?php echo ''.$nguyen->get_name()['name']; ?>"><br>
        name1:<br>
        <input type="text" name="name1" value="<?php echo ''.$nguyen->get_name()['name1']; ?>"><br>
        password:<br>
        <input type="password" name="password" value="<?php echo ''.$nguyen->get_name()['password']; ?>"><br>
        address:<br>
        <input type="text" name="addess" value="<?php echo ''.$nguyen->get_name()['addess']; ?>"><br>
        profile:<br>
        <input type="text" name="profile" value="<?php echo ''.$nguyen->get_name()['profile']; ?>"><br>
        img:<br>
        <input type="text" name="img" value="<?php echo ''.$nguyen->get_name()['img']; ?>"><br>       
        id:<br>
        <input type="text" name="id" value="<?php echo ''.$nguyen->get_name()['id']; ?>"><br>      
        <input type="submit" value="Submit">
    </form> 
</html>
