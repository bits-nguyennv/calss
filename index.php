<?php
	session_start();
	if(!$_SESSION['id']){
	header("location:login.php");
	}
  include "human.php";
  include "dbconn.php";
  $nguyen = new human();
  $db2 = new dbconnect();
  $db2->connect();
  $table1 = 'experience';
  $where1 = "user_id = " . $_SESSION['id'];
  $experience = $db2->select1($table1,$where1);
  $nguyen->set_experience($experience);
  
  $table1 = 'education';
  $education = $db2->select1($table1,$where1);
  $nguyen->set_education($education);
  $table1 = 'skills';
  $skill = $db2->select1($table1,$where1);
  $nguyen->set_skill($skill);

  $table1 = 'awards1';
  $contace = $db2->select1($table1,$where1);
  $nguyen->set_contace($contace);

  $table1 = 'awards';
  $awards = $db2->select1($table1,$where1);
  $nguyen->set_awards($awards);

  $table1 = 'referen';
  $references = $db2->select1($table1,$where1);
  $nguyen->set_references($references);
  
  $table1 = 'user';
  $where1 ="id = " .$_SESSION['id'];
  $name = $db2->select1($table1,$where1);
  $name =  mysqli_fetch_assoc($name);
  $nguyen->set_name($name);
?>
<html>
    <head>
		<title>CV công việc</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	</head>
    <body>
	    <div class="q-100">
			<div class="header">
			<div class="d-flex flex-row-reverse ">
				<div class="p-2 ">
					<form action="logout.php" method="POST">
						<input type="submit" value ="logout">
					</form>
				</div>
				<div class="p-2 ">
					<form action="delete.php" method="POST">
						<input type="submit" value ="delete">
					</form>
				</div>
				<div class="p-2 ">
					<form action="from_update.php" method="POST">
						<input type="submit" value ="update">
					</form>
				</div>
			</div>
				<div class="framer-1">
					<img src=<?php echo "".$nguyen->get_name()['img'] ?> class="rounded-circle float-left border-img " alt="Cinque Terre" width="200" height="200" >
					<div class="word">
						<h2>
							<?php
							echo "" . $nguyen->get_name()['name1'];
							?>
						</h2>
						<div class="container">
							<h3 class="font-weight-light"><?php echo "".$nguyen->get_name()['addess'] ?></h3>
						</div>
					</div>
				</div>
				<div class="framer-2">				    
					<?php while($value = mysqli_fetch_assoc($contace)){
					?>
					<p><div class="icon-bar"><i class="fas fa-phone"></i></div>
						<?php echo $value ['phone'];?></p>
						<?php echo $value ['phone1'];?>
					<p><div class="icon-bar"><i class="far fa-envelope" ></i></div>
						<?php echo $value ['email'];?></p>
					<p><div class="icon-bar"><i class="fas fa-map-marker-alt"></i></div>
						<?php echo $value ['addess'];?></p>
					<?php  } ?>
				</div>
			</div>
			<div class="content">
				<div class="right">
					<div class="right-0">
						<div class="right-1">
							<div class="border-1"> <h2>EXPERIENCE</h2></div>
						</div>
						<div class="right-2">
							<?php
								while($value = mysqli_fetch_assoc($experience)){
							?>
							<div class="right-22">
								<div class="word-1"> <P>
									<?php
									echo '' . $value['time'];
									?>
									</P>
								</div>
							</div>
								<div class="right-222">
									<h4><?php
									echo ''.$value['name'];
									?>
									</h4>
									<h5>Developer</h5>
									<p><?php
									echo ''.$value['conten'];
									?>
									</p>
							</div>
							<?php  } ?>
						</div>
						<div class="right-3"> </div></div>
							<div class="right-00">
							<div class="right-5">
							<div class="border-1"><h2>EDUCATION</h2></div></div>
							<div class="right-6">
							<?php
								while($value = mysqli_fetch_assoc($education)){
								?>
								<div class="right-66">
									<div class="word-1"> <P>
										<?php
										echo ''.$value['time'];
										?>
								    </P></div>
								</div>
								<div class="right-666">
									<h4>
									<?php
									 echo ''.$value['school'];
									?>
									</h4>
									<h5>Developer</h5>
									<p>
									<?php
									 echo ''.$value['conten'];
									?>
									</p>
								</div>
							<?php  } ?>
						</div>
						<div class="right-7"></div>
					</div>
				</div>
				<div class="left">
					<div class="left-1">
								<div class="border-3"> <h2>PROFILE</h2></div>
								<p>
								<?php
								echo "" . $nguyen->get_name()['profile'];
								?></p>
					</div>
					<div class="left-2">
						<div class="border-2"><h2>SKILLS</h2></div>
							<div class="container">
								<?php
								//   foreach ( $skill as $key => $value )
								while($value = mysqli_fetch_assoc($skill)) {
								?>
									<P>
									<?php
									echo $value['title'];
									?>
									</P>
									<div class="progress">
									<div class="progress-bar bg-warning " style =width:<?php
									echo $value['width'];
									?>
									></div>
									</div><br>
								<?php } ?>
								</div>
							</div>
						</div>
				    </div>
			</div>
				<div class="footer">
					<div class="footer-1">
						<div class="footer-11">
							<div class="border-1"> <h2>AWARDS </h2></div>
						</div>
						<div class="footer-12">
							<div class="word-1"><h4>
								<?php
								while($value = mysqli_fetch_assoc($awards)) {
								echo $value['employee'];
								?> </h4>				
									<p>
									<?php
									echo $value['award'];
									?>
									</p>
									<p>
									<?php
									echo $value ['award1'];
									?>				
							</p></div>
						</div>
						<div class="footer-13">
							<div class="word-1"> <h4>				
							<?php } ?>

							</p></div>
						</div>
					</div>
					<div class="footer-2">
						<div class="footer-21">
							<div class="border-1"> <h2>REFERENCES</h2></div></div>
							<div class="footer-22">
								<?php while($value = mysqli_fetch_assoc($references)){
								?>
									<div class="word-1"><h4>
										<?php
										echo ''.$value['name'];
										?>
										</h4>
										<p>
										<?php
										echo ''.$value['phone'];
										?>
										</p>
										<p>
										<?php
										echo ''.$value['email'];
										?>
										</p></div>
								</div>
								<div class="footer-23">
							 <?php  } ?>
						</div>
			        </div>
			        <div class="footer-3">
							<div class="footer-31">
								<div class="border-2"> <h2>INTEREST </h2></div>
							</div>
							<div class="footer-32">
								<img src="5.jpg"  class="rounded-circle" alt="Cinque Terre" width="150" height="150">
							</div>
					</div>
			    </div>
		</div>
    </body>
</html>
