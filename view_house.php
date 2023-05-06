<?php
session_start();
include ("connect.php");
error_reporting(E_ERROR | E_PARSE);	
  echo "<a href='addhouse.html' class='btn btn-primary'></a> <br><br>";

?>
<style>
  td {
  text-align:center;
}
.center {
  margin-left: auto;
  margin-right: auto;
}
</style>
<div class="inner">
  <h1>House Details</h1>

  <table class= "center" style="width:85%" border="1" id=""> 
  <table class="center" border="1" style="width:85%"
           bgcolor="#D6EEEE" font="white">
    <tr style="width:85%" >
      <th>House ID</th>
      <th>Owner name</th>
      <th>No of rooms</th>
      <th>Address</th>
      <th>Rate for rent</th>
      <th>Pincode</th>
      <th>Availablity</th>
      <th>Image</th>
    </tr>
    <div id="display-image">
<?php



$query="SELECT * FROM `house`" ;
$data=mysqli_query($con,$query);
while($result=mysqli_fetch_assoc($data)){
 echo "<tr><td>".$result['hid']."</td><td>".$result['owner_name']."</td><td> ".$result['no_of_rooms']."</td>";
echo  "<td>".$result['address']."</td><td>".$result['amount']."</td><td>".$result['pincode']."</td><td>".$result['availability'];
?>

<td><img src="./photos/<?php echo $result['filename']; ?>"  width="350" height="250">
<?php
echo "</td></tr>";
}
echo "</table>";
?>




						<h1><marquee direction="down">Click Here to Book House</marquee></h1>
						<ul>
            <a href="book_house.php">
							<li> <input type="submit" name ="BOOK HOUSE" value="BOOK HOUSE" class="primary" ></a></li>
							
						</ul>
					</nav>

</html> 