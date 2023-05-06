<?php
session_start();
include ("connect.php");
error_reporting(E_ERROR | E_PARSE);	
$name =$_SESSION['name'];
$aadhar =$_SESSION['aadhar'];
$hid = $_GET['hid'];
$address = $_GET['address'];
$pincode = $_GET['pincode'];
$sqli = "SELECT * FROM `house` where `hid`='$hid'";
$res = mysqli_query($con,$sqli);
$check = mysqli_num_rows($res);   //to check hid exist or not
$sql="SELECT `tid` FROM `tenant` WHERE `aadhar`='$aadhar'";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$tid = $row["tid"].'';    //fetching tenant id
$_SESSION['tid']=$_GET['tid'];
//to avoid duplicate bookings
$dup = "SELECT `hid` FROM `booking` where `hid`='$hid'";
$xtra=mysqli_query($con,$dup);
$rsa=mysqli_fetch_assoc($xtra);
//to fetch correct house details
$sq ="SELECT * FROM `house` WHERE `hid`='$hid'";
$new=mysqli_query($con,$sq);
$rs=mysqli_fetch_array($new);
$address=$rs["address"].'';
$pincode=$rs["pincode"].'';
//when book button is clicked
if (isset($_GET['book'])) {
	if($check > 0){
   if($rsa!=0){
		echo "<script>alert('House already booked')</script>";
		header("refresh:0;url=book_house.php");
	}
	if($rsa==0){
	$sql  ="INSERT INTO `booking`(`tid`,`tenant_name`,`tenant_aadhar`,`hid`,`address`, `pincode`) VALUES ( '$tid','$name','$aadhar','$hid','$address','$pincode')";
    $result = mysqli_query($con,$sql);
	
	if($result){
		echo "<script>alert('Congrats $name Successfully booked house $hid')</script>";
		header("refresh:0;url=tenant_home_page.php");
		}
	else{
		echo "<script>alert('Not booked')</script>";
	}
	}
}
else{
	echo "<script>alert('No such house exist $name')</script>";
	header("refresh:0;url=tenant_home_page.php");
}
}
?>


<!DOCTYPE HTML>

<html>
	<head>
		<title>Rent your dream house!...</title>
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
								<a href="tenant_home_page.php" class="logo">
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
						<li><a href="tenant_home_page.php">Home</a></li>
							<li><a href="generic.html">About us</a></li>
							<li><a href="help.php">Help</a></li>
							<li><a href="feedback_form.php">Feedback</a></li>
							
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>Book your house<br />
								
								
							</header>
							
						</div>
					</div>

				<!-- Footer -->
					
						<div class="inner">
							<section>
								<h2>Get in touch</h2>
								<form method="" action="">
									<div class="fields">
										<!-- <div class="field half">
											<input type="text" name="name" id="name" placeholder="Tenant name" />
										</div> -->
										<div class="field half">
											<input type="text" name="hid" id="hid" placeholder="house id" required>
										</div>
										<div class="field half">
											<input type="text" name="address" id="address" placeholder="Address" >
										</div>
										<div class="field half">
										<input type="text" name="pincode" id="pincode" placeholder="Pincode" >
									    </div>
                                        <!-- <div class="field half">
											<input type="date" name="date" id="date" placeholder="Booking date" required>
										</div> -->
									</div>
									<ul class="actions">
										<li><input type="submit" name="book" value="book" class="primary" /></li>
									</ul>
									
								</form>
								<form action="view_house.php">
								<ul class="actions">
										<li><input type="submit" name="view house" value="view house" class="primary" /></li>
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
					

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>