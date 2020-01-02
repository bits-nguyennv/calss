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
<link rel="stylesheet" type="text/css" href="style3.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!DOCTYPE html>
<html lang="en">

	<title>Update</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<head>
		<script src="jquery/jquery.min.js"></script>		
		<link rel="stylesheet" href="css/bootstrap.min.css">		
		<script src="js/bootstrap.min.js"></script>		
		<link rel="icon" href="images/icon.png" type="image/x-icon" />		
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	</head>
	<body>
        <div class="container-fluid">
            <div class="container">
                <h2 class="text-center" id="title">Update Tài Khoản</h2>
                <div class="row">
                    <div class="col-md-5">
                        <form action=" update.php" method = "POST">
                            <fieldset>							
                                <p class="text-uppercase pull-center">Update</p>	
                                <div class="form-group">
                                    name:<br> 
                                    <input type="text" name="name" class="form-control input-lg" placeholder="name" value="<?php echo ''.$nguyen->get_name()['name']; ?>">
                                </div>
                                <div class="form-group">
                                    name1:<br>
                                    <input type="text" name="name1" class="form-control input-lg" placeholder="name1" value="<?php echo ''.$nguyen->get_name()['name1']; ?>">
                                </div>
                                <div class="form-group">
                                    password:<br>
                                    <input type="password" name="password" class="form-control input-lg" placeholder="Password" value="<?php echo ''.$nguyen->get_name()['password']; ?>">
                                </div>
                                <div class="form-group">
                                    address:<br>
                                    <input type="text" name="addess" class="form-control input-lg" placeholder="addess" value="<?php echo ''.$nguyen->get_name()['addess']; ?>">
                                </div>
                                <div class="form-group">
                                    profile:<br>
                                    <input type="text" name="profile" class="form-control input-lg" placeholder="profile" value="<?php echo ''.$nguyen->get_name()['profile']; ?>">
                                </div>
                                <div class="form-group">
                                    img:<br>
                                    <input type="text" name="img" class="form-control input-lg" placeholder="img" value="<?php echo ''.$nguyen->get_name()['img']; ?>">
                                </div>
                                <div class="form-group">
                                    phone:<br>
                                    <input type="text" name="phone" class="form-control input-lg" placeholder="phone" value="<?php echo ''.$nguyen->get_name()['phone']; ?>">
                                </div>
                                <div>
                                    <input type="submit" class="btn btn-lg btn-primary" value="Update">
                                </div>
                            </fieldset>
                        </form>
                    </div>				
                    <div class="col-md-2">
                    </div>				
                </div>
            </div>
        </div>
	</body>
</html>
