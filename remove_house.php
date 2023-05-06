<?php
session_start();
include ("connect.php");
error_reporting(E_ERROR | E_PARSE);
$name = $_SESSION['name'];
$hid = $_GET['hid'];
$reason=$_GET['reason'];
$sqli = "SELECT * FROM `house` where `hid`='$hid'";
$res = mysqli_query($con,$sqli);
$check = mysqli_num_rows($res);
if (isset($_GET['remove'])) {
	if($check > 0){
	
     $sql="DELETE FROM `house` WHERE `hid` = '$hid'";
	$result = mysqli_query($con,$sql);

	if ($result){
	 echo "<script>alert('Removed House $hid')</script>";
	 header("refresh:0;url=owner_home_page.php");
	}
	else{
		echo "<script>alert('invalid details')</script>";
	}
	}
	else{
		echo "<script>alert('Invalid House Id ')</script>";
	}
}
  else{
	
		 echo "<script>alert('Are you sure ?')</script>";
	}
	
?>
<html>
	<!-- <head>
		<title>remove house...</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head> -->
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">


				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>Are you sure....?<br />
								
								
							</header>
							
						</div>
						
							<!-- Logo -->
							<a href="owner_home_page.php" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">House Rental</span>
							</a>
					</div>
</div>
</body>
</html>
<div class="inner">
  <table border="5" id=""> <table border="5"
   bgcolor="black" width="80%" height ="12%">
    <tr>
      <th>House ID</th>
      <th>Owner name</th>
      <th>No of rooms</th>
      <th>Address</th>
      <th>Rate for rent</th>
	  <th>Pinode</th>
    </tr>
<?php
$query="SELECT * FROM `house` where `owner_name`='$name' " ;
$data=mysqli_query($con,$query);
while($result=mysqli_fetch_assoc($data))
{
 echo "<tr><td>".$result['hid']."</td><td>".$result['owner_name']."</td><td>".$result['no_of_rooms']."</td><td> ".$result['address']."</td><td>".$result['amount']."</td><td>".$result['pincode']."</td><td>";
echo "</td></tr>";
}
echo "</table>";
?>


<!DOCTYPE HTML>

<html>
	<head>
		<title>remove house...</title>
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
							<!-- <a href="owner_home_page.php" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">House Rental</span>
							</a> -->

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
						<li><a href="owner_home_page.php">Home</a></li>
							<li><a href="generic.html">About us</a></li>
							<li><a href="help.php">Help</a></li>
							<li><a href="feedback_form.php">Feedback</a></li>
							
						</ul>
					</nav>

				<!-- Main -->
					<!-- <div id="main">
						<div class="inner">
							<header>
								<h1>Are you sure....?<br />
								
								
							</header>
							
						</div>
					</div> -->
</div>
</body>
</html>



						<div class="inner">
							<section>
								<form method="" action="#">
									<div class="row gtr-uniform">
									<div class="col-6 col-12-xsmall">
											<input type="text" name="hid" id="hid" placeholder="House id">
										</div>
										<div class="col-6 col-12-xsmall">
											<input type="text" name="reason" id="reason" placeholder="Reason to Remove">
										</div>
										
									</div>
									<br>
									<ul class="actions">	
										<li><input type="submit" name="remove"value="Remove" class="primary" /></li>
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