<?php
session_start();
include ("connect.php");
error_reporting(E_ERROR | E_PARSE);
$name =$_GET['name'];
$aadhar=$_GET['aadhar'];
$email=$_GET['email'];
$pas=$_GET['password'];
$_SESSION['name'] = $_GET['name'];
$_SESSION['aadhar'] = $_GET['aadhar'];
$_SESSION['email'] = $_GET['email'];



if (isset($_GET['login'])) {
    $sql  ="SELECT `name`,`aadhar`, `email`, `password` FROM `owner` WHERE `name`='$name' and `aadhar`='$aadhar'and `email`='$email' and `password`='$pas' ";
    $result = mysqli_query($con,$sql);
    $check = mysqli_num_rows($result);
    echo "$check"; 

    if($check == 1){
		echo "<script>alert('Welcome $name')</script>";
		
		header("refresh:0;url=owner_home_page.php");
		}
	else{
		echo "<script>alert('Invalid details')</script>";
	}
}

?>



<!DOCTYPE HTML>

<html>
	<head>
		<title>Owner Login</title>
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
								<h1>Login as Owner<br />
								
								
							</header>
							
						</div>
					</div>

				<!-- Footer -->
					
				<section>
					<h2>Login</h2>
					<form method="" action="" >
						<div class="row gtr-uniform">
							<div class="col-6 col-12-small">
								<input type="text" name="name" id="name"  placeholder="Name" required>
								<br>
							</div>
							<div class="col-6 col-12-small">
								<input type="text" name="aadhar" id="aadhar" placeholder="Aadhar" required>
								<br>
							</div>
							<div class="col-6 col-12-xsmall">
								<input type="email" name="email" id="email" placeholder="Email" required>
							</div>
							<div class="col-6 col-12-xsmall">
								<input type="password" name="password" id="password"  placeholder="Password" required>
							</div>
							
							<div class="col-12">
								<ul class="actions">
									<li><input type="submit" name="login" value="login" class="primary" /></li>
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