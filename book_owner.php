<?php include ("connect.php");?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>OWNER BOOK...</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
    <h1 align="center">
      
        <h1>BOOKINGS</h1>
        <br<br>
        <?php
session_start();
$aadhar=$_SESSION['aadhar'];
$sq ="SELECT `hid` FROM `house` WHERE `owner_aadhar`='$aadhar'";
$new=mysqli_query($con,$sq);
while(($rs=mysqli_fetch_assoc($new))){
$hid=$rs['hid'].'';
$sql = "SELECT * FROM `booking` WHERE `hid`='$hid'";
$row=mysqli_query($con,$sql);
$check=mysqli_num_rows($row);?>
<br>
<!-- <body background ="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUpfyCab-Upl1UX_Y-lLTuozqqMGsPyIQ_sQ&usqp=CAU"> -->
<table border="5" id=""> <table border="5"
   bgcolor="" width="80%" height ="12%">
<tr>
<th>House ID</th>
<th>Tenant name</th>
<th>Tenant Aadhar</th>
<th>Booking_Date</th>
<br>
<?php

if ($check!=0){
  echo "<script>alert('See bookings')</script>";
    while(($result = mysqli_fetch_assoc($row))){
        echo "<tr><td>".$result['hid']."</td><td>".$result['tenant_name']."</td><td> ".$result['tenant_aadhar']."</td>";
        echo  "<td>".$result['booking_date']."</td></tr>";
      echo "</table></tr>";
    }}
      else{
        echo "<script>alert('No bookings')</script>";
        header("refresh:0;url=owner_home_page.php");
        } 
      } 
?>
</tr>
    </table>

    <section>
								<div class= "lo">
							<ul class="actions">
							
										<li><a href="owner_home_page.php" class="button primary" value="Home">Go back</a></li>
							</div>
							</section>
    </html>






