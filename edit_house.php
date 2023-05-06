<?php
session_start();
include ("connect.php");
error_reporting(E_ERROR | E_PARSE);
$name = $_SESSION['name'];
$hid = $_GET['hid'];
$room = $_GET['no_of_rooms'];
$add = $_GET['address'];
$amt = $_GET['amount'];
$pin = $_GET['pincode'];
$sqli = "SELECT * FROM `house` where `hid`='$hid'";
$res = mysqli_query($con,$sqli);
$check = mysqli_num_rows($res);
     if(isset($_GET['edit'])){	
		if($check > 0){
			$sql="UPDATE `house` SET `no_of_rooms`='$room',`address`='$add',`amount`='$amt',`pincode`='$pin' WHERE `hid`='$hid'";
			$result = mysqli_query($con,$sql);

	
	if ($result)
	{
	 echo "<script>alert('Successfully Modified!')</script>";
	 header("refresh:0;url=owner_home_page.php");
	}}
	else{
		echo "<script>alert('Invalid House Id')</script>";
	}
 }
 else{
 	echo "<script>alert('Are you sure wanna edit ?')</script>";
 }
?>

<div class="inner">
<!DOCTYPE HTML>
<html>
	<head><br><br>
		<title>Edit house details</title>
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
							<!-- Main -->
					<div id="main">
						<!-- <div class="inner"> -->
							<header><br>
								<h1>Edit your house details<br />
								
								
							</header>
							
						</div>
					

							<!-- Logo -->
								<a href="owner_home_page.php" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">House Rental</span>
								</a>


					</nav>

</body>
</html>
  <br>
  <table border="10" bgcolor="black" id="">
    <tr>
      <th>House ID</th>
      <th>Owner name</th>
      <th>No of rooms</th>
      <th>Address</th>
      <th>Rate for rent</th>
	  <th>Pincode</th>
    </tr>
<?php
include("connect.php");
$query="SELECT * FROM `house` where `owner_name`='$name' " ;
$data=mysqli_query($con,$query);
while($result=mysqli_fetch_assoc($data))
{
	echo "<tr><td>".$result['hid']."</td><td>".$result['owner_name']."</td><td>".$result['no_of_rooms']."</td><td> ".$result['address']."</td><td>".$result['amount']."</td><td>".$result['pincode']."</td><td>";
	echo "</td></tr>";
echo "</td></tr>";
}
echo "</table>";
?>
</div>
</div>
</body>
</html>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Edit house details</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					

							<!-- Logo -->
								<!-- <a href="owner_home_page.php" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">House Rental</span>
								</a>

							<!-- Nav -->
								<!-- <nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div> -->
					
					<header id="header">
						<div class="inner">
                        </div>
						</header> 
				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
						<li><a href="owner_home_page.php">Home</a></li>
							<li><a href="generic.html">About us</a></li>
							<li><a href="help.html">Help</a></li>
							<li><a href="feedback_form.php">Feedback</a></li>
							
						</ul>
					</nav>

				<!-- Main -->
					<!-- <div id="main">
						<div class="inner">
							<header>
								<h1>Edit your house details<br />
								
								
							</header>
							
						</div>
					</div> -->

				<!-- Footer -->
					
						<div class="inner">
							<section>
								<form method="" action="">
									<div class="fields">
										<div class="field half">
											<input type="text" name="hid" id="name" placeholder="Hid" />
										</div>
                                        <div class="field half">
											<input type="text" name="no_of_rooms" id="no_of_rooms" placeholder="Number of rooms" required >
										</div>
                                        <div class="field half">
											<input type="text" name="address" id="address" placeholder="Address" required >
										</div>
										<div class="field half">
											<input type="text" name="amount" id="amount" placeholder="Rate of rent" required >
										</div>
                                        <div class="field half">
											<input type="text" name="pincode" id="pincode" placeholder="Pincode"  required>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" name="edit" value="edit" class="primary" /></li>
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