<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
include ("connect.php");
$signupas=$_GET["user"];
$_SESSION['ltype']=$signupas;	
$name =$_GET['name'];
$aadhar=$_GET['aadhar'];
$gender=$_GET["gender"];
if($gender=='1'){
	$gen='male';
}
if($gender=='2')
{
	$gen='female';
}
if($gender=='3'){
	$gen='others';
}
$gen =$_GET['gender'];
$age=$_GET['age'];
$email =$_GET['email'];
$password=$_GET['password'];
$phone =$_GET['phone'];
		
if(isset($_GET['register'])){	
	if($age<'18'){
		echo '<script>alert("Age must be greater than 18")</script>';
			header("refresh:0;new_user.php");
	}

	//$name= htmlentities(mysqli_real_escape_string($con,$_POST['name']));
	//$oid= htmlentities(mysqli_real_escape_string($con,$_POST['oid']));
   
	// if($gender=='1'){
	// 	$gen='male';
	// }
	// if($gender=='2')
	// {
	// 	$gen='female';
	// }
	// if($gender=='3'){
	// 	$gen='others';
	// }
	// $gen= htmlentities(mysqli_real_escape_string($con,$_POST['gender']));
	// $email= htmlentities(mysqli_real_escape_string($con,$_POST['email']));
	// $password= htmlentities(mysqli_real_escape_string($con,$_POST['password']));
	// $phone= htmlentities(mysqli_real_escape_string($con,$_POST['phone']));
	if($age>'18'){


	if($signupas=='tenant')
 {
	echo "tenant";
	$sql ="INSERT INTO `tenant` (`name` ,`aadhar`,`gender`,`age`, `email`, `password`, `phone`) VALUES ('$name','$aadhar','$gen','$age', '$email', '$password', '$phone')";
	$result1=mysqli_query($con,$sql);
//header('Location: tenantsignup.html');
 }
if($signupas=='owner')
{
	
	echo "owner";
$sql ="INSERT INTO `owner` (`name`,`aadhar`,`gender`,`age`, `email`, `password`, `phone`) VALUES ('$name','$aadhar','$gen', '$age','$email', '$password', '$phone')";
$result=mysqli_query($con,$sql);
//header('Location: ownersignup.html');
}
if ($result1)
	{
		echo '<script>alert("Registered successfully as Tenant")</script>';
		header("refresh:0;index.php");

	}
	else{
		echo '<script>alert("Registered successfully as Owner")</script>';
		header("refresh:0;index.php");



	}
}}
?>
	
	


<!DOCTYPE HTML>

<html>
	<head>
		<title> Register</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.php" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">House Rental</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
						<li><a href="index.php">Home</a></li>
							<li><a href="generic.html">About us</a></li>
							<li><a href="owner_login.php">Owner</a></li>
							<li><a href="tenant_login.php">Tenant</a></li>
							<li><a href="help.html">Help</a></li>
							<li><a href="feedback_form.php">Feedback</a></li>
							
							
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>Register<br />
								
								
							</header>
							
						</div>
					</div>

				<!-- Footer -->
					
				<section>
					<h2>Register</h2>
					<form method="" action="">
						<div class="row gtr-uniform">
							
							<div class="col-6 col-12-xsmall">
								<input type="text" name="name" id="name"  placeholder="Name" required>
							</div>
							
							<div class="col-6 col-12-xsmall">
								<input type="text" name="aadhar" id="aadhar" placeholder="Aadhar" required>
							</div>
							<div class="col-6 col-12-xsmall">
								<select name="gender" id="gender" required>
									<option value="">- Gender -</option>
									<option value="male">Male</option>
									<option value="female">Female</option>
									<option value="others">Others</option>
								</select>
							</div>
							<div class="col-6 col-12-xsmall">
								<input type="text" name="age" id="age"  placeholder="Age" required>
							</div>
							<div class="col-6 col-12-xsmall">
								<input type="email" name="email" id="email"  placeholder="Email" required>
							</div>
							<div class="col-6 col-12-xsmall">
								<input type="password" name="password" id="password" placeholder="Password" required>
							</div>
							<div class="col-6 col-12-xsmall">
								<input type="text" name="phone" id="phone"  placeholder="Phone" required>
							</div>
							<div class="col-6 col-12-xsmall">
								<select name="user" id="user" required>
									<option value="">-Type ofUser -</option>
									<option value="owner">Owner</option>
									<option value="tenant">Tenant</option>
									
							</div>	
								</select>
							</div>
							
							<div class="col-12">
								<ul class="actions">
									<li><input type="submit" name="register" value="register" class="primary" /></li>
									<li><input type="reset" value="Reset" class="primary" /></li>
								</ul>
							</div>
						</div>
					</form>
				</section>
					

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>