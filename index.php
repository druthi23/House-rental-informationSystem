<?php
session_start();
include ("connect.php");	
error_reporting(E_ERROR | E_PARSE);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Rent your dream house!...</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css"/>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>

  <!-- Tab links -->
  <div class="tab">
  <button  class="tablinks" onclick = "window.location.href='generic.html';" >About us</button>
  <button class="tablinks" onclick= "window.location.href='owner_login.php';">Owner</button>
  <button class="tablinks" onclick= "window.location.href='tenant_login.php';">Tenant</button>
  <button  class="tablinks" onclick = "window.location.href='new_user.php';" >New user</button>
  <button class="tablinks" onclick= "window.location.href='help.php';">Help</button>
</div>
	</header>
		<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tabs</title>
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css" />

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
						
  </head>


				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="generic.html">About us</a></li>
							<li><a href="owner_login.php">Owner</a></li>
							<li><a href="tenant_login.php">Tenant</a></li>
							<li><a href="new_user.php">New user</a></li>
							<li><a href="help.php">Help</a></li>
							<li><a href="feedback_form.php">Feedback</a></li>
							
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h2><marquee direction="right" scrollamount="13">This is House Rental , a free, fully responsive site</marquee><br />
								
								
							</header>
						</div>
					</div>
					<br><br><br><br><br><br><br><br> 
					
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
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/script.js"></script>

	</body>
</html>