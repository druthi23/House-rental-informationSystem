<?php
session_start();
include ("connect.php");
$name = $_SESSION['name'];    //fetching owner name
$aadhar =$_SESSION['aadhar']; //fetching owner aadhar
$sql="SELECT `oid` FROM `owner` WHERE `aadhar`='$aadhar'";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$oid = $row["oid"].'<br>';

//when upload button is clicked
if (isset($_POST['upload'])) {
	$rooms= htmlentities(mysqli_real_escape_string($con,$_POST['no_of_rooms']));
	$address= htmlentities(mysqli_real_escape_string($con,$_POST['address']));
	$amount= htmlentities(mysqli_real_escape_string($con,$_POST['amount']));
	$pincode= htmlentities(mysqli_real_escape_string($con,$_POST['pincode']));
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
 	$folder = "./photos/" . $filename; // uploaded image is stored in folder photos
	$avail = "Available";
  //query to upload values into  table house
    $sql  ="INSERT INTO `house`(`oid`,`owner_name`,`owner_aadhar`,`no_of_rooms`, `address`, `amount`, `pincode`,`filename`,`availability`) VALUES ('$oid','$name','$aadhar','$rooms','$address','$amount','$pincode','$filename','$avail')";
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
	$result = mysqli_query($con,$sql);	
	if ($result)
	{
	 echo "<script>
	 alert('Successfully Added $name')
	 </script>";
	 header("refresh:0;url=owner_home_page.php");
	}
	else{
		echo "<script>alert('Not added Pls check')</script>";
	}
}
?>




<!DOCTYPE HTML>
<html>
	<head>
		<title>Add house...</title>
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
							<a href="owner_home_page.php" class="logo">
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
						<ul>
						<h2>Menu</h2>
						<li><a href="owner_home_page.php">Home</a></li>
							<li><a href="generic.html">About us</a></li>
							<li><a href="help.php">Help</a></li>
							<li><a href="feedback_form.php">Feedback</a></li>
							
							
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>Add your house<br />
								
								
							</header>
							
						</div>
					</div>

				<!-- Footer -->
					
						<div class="inner">
							<section>
								<h2>Add house</h2>
							<div id="content">
								<form method="POST" action="" enctype="multipart/form-data">
									<div class="row gtr-uniform">
									<!-- <div class="field half">
											<textarea name="name"  id="Owner name" placeholder="Owner Name"></textarea>
										</div> -->
									<div class="col-6 col-12-xsmall">
											<input type="text" name="no_of_rooms" id="no_of_rooms" placeholder="Number of rooms" required>
										</div>
										<div class="col-6 col-12-xsmall">
											<input type="text" name="address" id="address" placeholder="Address" required>
										</div>
										
										<div class="col-6 col-12-xsmall">
											<input type="text" name="amount" id="amount" placeholder="Amount" required>
										</div>
                                        
                                        <div class="col-6 col-12-xsmall">
											<input type="text" name="pincode" id="pincode" placeholder="pincode" required>
										</div>		
		                               <div class="col-12">
		   		                       <input class="btn btn-primary" type="file" name="uploadfile" value="" />
		                            </div>
			                      <div class="col-6 col-12-xsmall">
		                    		<button class="primary" type="submit" name="upload">UPLOAD</button>
		                        </div>
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