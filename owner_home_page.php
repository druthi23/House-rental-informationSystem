<?php
session_start();
include ("connect.php");
error_reporting(E_ERROR | E_PARSE);
$name = $_SESSION['name'];
$aadhar =$_SESSION['aadhar'];
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Owner Home Page</title>
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
						<li><a href="notification.php">Notifications</a></li>
						       <li><a href="book_owner.php">Bookings</a></li>
							<li><a href="generic.html">About us</a></li>
							<li><a href="help.html">Help</a></li>
							<li><a href="feedback_form.php">Feedback</a></li>
							<li><a href="owner_login.php">Logout</a></li>
							
							
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>Welcome <?php echo "$name"?></h1><br><br>
								<h1>Owner page<br> </h1>
								
								
							</header>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<a href="add_house.php">
										<h3>Add House</h3>
										<div class="content">
											<p>Upload your house.</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<a href="edit_house.php">
										<h3>Edit House Details</h3>
										<div class="content">
											<p>View existing houses.</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/pic03.jpg" alt="" />
									</span>
									<a href="remove_house.php">
										<h3>Remove House</h3>
										<div class="content">
											<p>House already rented? Remove house.</p>
										</div>
									</a>
								</article>
								
								
							</section>
							<br>
								<br>
								<br>
							<section>
								<div class= "lo">
							<ul class="actions">
							
										<li><a href="index.php" class="button primary" value="logout">Logout</a></li>
							</div>
							</section>
					</ul>
						</div>
					</div>
					

				

			</div>
            <script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

		

	</body>
</html>