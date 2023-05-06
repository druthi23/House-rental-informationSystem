<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
include ("connect.php");
$name=$_SESSION['name'];
$email=$_GET['email'];
$aadhar =$_SESSION['aadhar'];
$issue=$_GET['issue'];
$sql="SELECT `tid` FROM `tenant` WHERE `aadhar`='$aadhar'";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$tid = $row["tid"].'';
if(isset($_GET['submit'])){	
  $sql="INSERT INTO `problem`(`tid`,`tenant_name`, `owner_email`, `issue`) VALUES ('$tid','$name','$email','$issue')";
  $result=mysqli_query($con,$sql);
  if($result){
    echo "<script>alert('We will  inform owner ')</script>";

    header("location:tenant_home_page.php");
  }
  else{
    echo "<script>alert('your response has not recorded ')</script>";

	header("location:tenant_home_page.php");
  }
  }

?>





<!DOCTYPE HTML>
<html>

	<head>
	
		<title>Owner Details</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	
	<p style="background-image: url('../../images/pic01.jpg');">
	
                        <div class="">
              
			 
         <table border="4" id="">
    <tr>
      <th>Owner name</th>
      <th>Owner email</th>
      <th>Phone</th>
    </tr>
    
<?php
$query="SELECT * FROM `owner`" ;
$data=mysqli_query($con,$query);
while($result=mysqli_fetch_assoc($data))
{
 echo "<tr><td>".$result['name']."</td><td>".$result['email']."</td><td> ".$result['phone']."</td>";

echo "</td></tr>";
}
echo "</table>";
?>
<body class="is-preload">
<div id="header">
<div class="inner">
							<section>
								<h2>Get in touch</h2>
								<form method="" action="">
									<div class="fields">
									
										<!-- <div class="field half">
										<input type="text" name="name" id="name" placeholder="Owner Name">
										</div> -->
										<div class="field half">
											<input type="text" name="email" id="name" placeholder="Owner email" />
										</div>
                      <div class="field half">
											<input type="text" name="issue" id="issue" placeholder="Issue" required >
										</div>
									<ul class="actions">
										<li><input type="submit" name="submit" value="submit" class="primary" /></li><br>
									</ul>
								</form>
								
								<section>
								<div class= "lo">
							<ul class="actions">
							
										<li><a href="tenant_home_page.php" class="button primary" value="Go Back">Go Back</a></li>
							</div>
							</section>
							</section>




             <nav id="menu">
						<h2>Menu</h2>
						<ul>
						<li><a href="tenant_home_page.php">Home</a></li>
							<li><a href="generic.html">About us</a></li>
							<li><a href="help.html">Help</a></li>
							<li><a href="feedback_form.php">Feedback</a></li>
							
						</ul>
					</nav>
					</body>

</div>
</html>
</html>
