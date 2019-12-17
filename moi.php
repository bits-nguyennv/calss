<?php
session_start();
?>
<?php
if(isset($_SESSION['use']) && $_SESSION['pass'] != null){
  var_dump($_SESSION);
?>
<p><a href="logout.php">Logout</a><p>
<?php
}
?>
