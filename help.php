<?php
session_start();
include ("connect.php");
error_reporting(E_ERROR | E_PARSE);
$name = $_GET['name'];
$email = $_GET['email'];
$message = $_GET['message'];
if(isset($_GET['submit'])){
	$sql ="INSERT INTO `help`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";
	$result = mysqli_query($con,$sql);
	if($result)
	{
		echo "<script>alert('We will approach you soon!')</script>";
		header("refresh:0;url=index.php");
	}
	else{
		echo "<script>alert('We could not reach you')</script>";
		header("refresh:0;url=help.php");
	}
}
?>




<!DOCTYPE HTML>
<html>
	<head>
		<title>House Rental</title>
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
							<li><a href="new_user.php">New user</a></li>
							<li><a href="help.html">Help</a></li>
							<li><a href="feedback_form.php">Feedback</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<!-- <div id="main">
						<div class="inner">
							<h1>About us</h1>
							<span class="image main"><img src="images/pic13.jpg" alt="" /></span>
							<p>Welcome, to our house rental website. We help you connect with people renting their houses across the city. It is our previlege to connect to more users.</p>
							<p>We aspire to help users to easily access our website ,look for their dream houses and book them with no brokerage. Social community requires helpful websites for real world issues.</p>
							<p>We hope to establish a network with the owners and tenants. Our website being a medium to connect and help the commmunity.</p>
						</div>
					</div> -->

				<!-- Footer -->
					<!-- <footer id="footer"> -->
						<div class="inner">
							<section>
								<h2>Get in touch</h2>
								<form method="" action="">
									<div class="fields">
										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Name" required />
										</div>
										<div class="field half">
											<input type="email" name="email" id="email" placeholder="Email" required/>
										</div>
										<div class="field">
											<input type="text" name="message" id="message" placeholder="Message"required/>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" name="submit" value="Send" class="primary" /></li>
									</ul>
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
					<!-- </footer> -->

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>