<!-- <html>
<link rel="stylesheet" type="text/css" href="style2.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


    <form action=" insert.php" method = "POST">
        First name:<br>
        <input type="text" placeholder="name" name="name"><br>
        name1:<br>
        <input type="text" placeholder="name" name="name1"><br>
        password:<br>
        <input type="password" placeholder="password" name="password"><br>
        addes:<br>
        <input type="text" placeholder="addess" name="addess"><br>
        profile:<br>
        <input type="text" placeholder="profile" name="profile"><br>
        img:<br>
        <input type="text" placeholder="img" name="img"><br>
        <input type="submit" value="Submit">
    </form> 
</html> -->
<link rel="stylesheet" type="text/css" href="style2.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!DOCTYPE html>
<html lang="en">

	<title>Sign up facundo farm & resort</title>

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
				<h2 class="text-center" id="title">Đăng ký tài khoản</h2>
				<div class="row">
					<div class="col-md-5">
						<form action=" insert.php" method = "POST">
							<fieldset>							
								<p class="text-uppercase pull-center"> SIGN UP.</p>	
								<div class="form-group">
									<input type="text" name="name" class="form-control input-lg" placeholder="name">
								</div>
								<div class="form-group">
									<input type="text" name="name1" class="form-control input-lg" placeholder="name1">
								</div>
								<div class="form-group">
									<input type="password" name="password" class="form-control input-lg" placeholder="Password">
								</div>
								<div class="form-group">
									<input type="text" name="addess"  class="form-control input-lg" placeholder="addess">
								</div>
								<div class="form-group">
									<input type="text" name="profile"  class="form-control input-lg" placeholder="profile">
								</div>
								<div class="form-group">
									<input type="text" name="img"  class="form-control input-lg" placeholder="img">
								</div>
								<div>
									<input type="submit" class="btn btn-lg btn-primary" value="Register">
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