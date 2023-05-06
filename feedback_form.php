<?php
session_start();
include ("connect.php");
error_reporting(E_ERROR | E_PARSE);
$name =$_GET['name'];
$email=$_GET['email'];
$feedback=$_GET['feedback'];
if(isset($_GET['submit'])){
     $sql="INSERT INTO `feedback`(`name`, `email`, `feedback`) VALUES ('$name','$email','$feedback')";
	 $result=mysqli_query($con,$sql);
	 if ($result)
	{
	 echo "<script>alert('Thank for your feedback! $name')</script>";

	 header("refresh:0;index.php");
	}
	else{
		echo "<script>alert('Invalid Details')</script>";
	}
}
?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>Feedback</title>
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
								<a href="index.html" class="logo">
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
							<li><a href="help.php">Help</a></li>
							<li><a href="feedback_form.php">Feedback</a></li>
							
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								
								<h1>Welcome give feedback<br />
								</header>
							
						</div>
					</div>

					<section>
						<h2>Feedback</h2>
						<form method="" action="">
							<div class="row gtr-uniform">
								<div class="col-6 col-12-xsmall">
									<input type="text" name="name" id="name" value="" placeholder="Name" required>
								</div>
								
								
								<div class="col-6 col-12-large">
									<input type="email" name="email" id="email" value="" placeholder="Email" required>
								
								</div>
								
								<div class="col-6 col-12-xlarge">
									<input type="text" name="feedback" id="feedback" value="" placeholder="Feedback" required>
								</div>
								</div>
								<br><br><br>
								<div class="col-12">
									<ul class="actions">
										<li><input type="submit" name="submit" value="submit" class="primary" /></li>
									</ul>
								</div>
							</div>
						</form>
					</section>
					

					
						
							<section>
								<h2>Follow</h2>
								<ul class="icons">
									<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="#" class="icon brands style2 fa-500px"><span class="label">500px</span></a></li>
									<li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</section>
							
						</div>
					

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>