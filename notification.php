<?php
session_start();
include ("connect.php");
$name = $_SESSION['name'];
$email =$_SESSION['email'];
$sql = "SELECT * FROM `problem` WHERE  `owner_email`='$email'";
$result = mysqli_query($con,$sql);
$check = mysqli_num_rows($result);?>
 <P><h1>Notifications</h1></P>
    <?php
if ($check!=0){
    while(($row = mysqli_fetch_assoc($result))){
    echo "<script>alert('Check Notifications ?')</script>";
    $abhi= "".$row['tenant_name'] . " ";
    $abh= "".$row['issue'] . " ";
    //  echo "$abhi";
    //  echo "$abh";
    
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
    <Body>
        <!-- <Div Class="Container">
            <Input Type="Checkbox" Name="" Class="Btn" />
            <Div Class="Box">
                <Div Class="Header"> -->
                  
                </div>

                        <Div Class="">
                        <strong>
                            <h3>
                       <p style="font-size:120%;"><i><?php echo "$abhi";?>
                           Leaves a message! </p></i>
                            <P style ="font-famil:Impact"><u><?php echo "$abh";?></u></P>
                        </div>
                    </div>

                    <?php
    }}
    else{
        echo "<script>alert('No Notification')</script>";
        header("refresh:0;url=owner_home_page.php");
    }
        ?>  
         <section>
							
							<ul class="actions">
							
										<li><a href="owner_home_page.php" class="button primary" value="Home">Go back</a></li>
							</div>
							</section>         
    </body>
</html>