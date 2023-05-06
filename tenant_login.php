
<?php
session_start();
include ("connect.php");
error_reporting(E_ERROR | E_PARSE);
  
//$signupas=$_GET['login'];
// $_SESSION['ltype']=$signupas;	
$name =$_GET['name'];
$aadhar=$_GET['aadhar'];
$email=$_GET['email'];
$pas=$_GET['password'];
$_SESSION['name'] = $_GET['name'];
$_SESSION['aadhar'] = $_GET['aadhar'];
$sql="SELECT `tid` FROM `tenant` WHERE `aadhar`='$aadhar'";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
echo "$row";
if (isset($_GET['login'])) {
    $sql  ="SELECT `name`,`aadhar`, `email`, `password` FROM `tenant` WHERE `name`='$name' and `aadhar`='$aadhar'and `email`='$email' and `password`='$pas' ";
    $result = mysqli_query($con,$sql);
    $check = mysqli_num_rows($result);
    echo "$check"; 

    if($check == 1){
		echo "<script>alert('Welcome $name')</script>";
		
		header("refresh:0;url=tenant_home_page.php");
		}
	else{
		echo "<script>alert('Invalid Details')</script>";
	}
}

?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>Tenant Login</title>
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
								<h1>Login as Tenant<br />
								
								
							</header>
							
						</div>
					</div>

					<section>
						<h2>Login</h2>
						<form method="" action="">
							<div class="row gtr-uniform">
								<div class="col-6 col-12-xsmall">
									<input type="text" name="name" id="name" value="" placeholder="Name" required>
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="text" name="aadhar" id="aadhar" value="" placeholder="Aadhar" required>
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="email" name="email" id="email" value="" placeholder="Email" required>
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="password" name="password" id="password" value="" placeholder="Password" required>
								</div>
								
								<div class="col-12">
									<ul class="actions">
										<li><input type="submit" name="login" value="login" class="primary" /></li>
										<li><input class="primary" type="reset" value="Reset" /></li>
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