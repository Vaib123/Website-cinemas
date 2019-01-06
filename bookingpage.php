<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family:cursive,sans-serif;

}
.hero-image {
padding:50px;
  background-image:url("x.jpg");
	height:1200px;
  background-size: cover;
  padding-left:60px;
}
</style>
<div class="hero-image">
<?php
session_start();
if(isset($_SESSION['fame']))
{
	$a=$_SESSION['fame'];
	
	$x=0;
	mysql_connect("localhost","root","");
	mysql_select_db("pvr");
	$query="SELECT * FROM bookinghistory WHERE owner='$a'";
   $result=mysql_query($query);
	
   while($row=mysql_fetch_array($result))
	{
		echo"<table border='5' cellpadding='10' cellspacing='5' >";
		echo"<tr>";
		$x=$row[0];
		echo"<td>".$row[0]."</td>"; 
		echo"<td>".$row[1]."</td>"; 
		echo"<td>".$row[2]."</td>"; 
		echo"<td>".$row[3]."</td>"; 
		echo"<td>".$row[4]."</td>"; 
		echo"<td>".$row[5]."</td>";
		echo"<td>".$row[6]."</td>";
		echo"</tr>";
		echo"</table>";
	}
	
	if($x!=0)
	{
	echo "<strong>";
	echo nl2br("\nYOUR BOOKING id is {$x}BV7PART{$x}");
	echo nl2br("\nPLEASE REMEMBER THE BOOKING ID \n\nIN ORDER TO CANCEL CLICK BELOW\n\n<a href='cancel.php'>CANCEL</a>");
	echo nl2br("\n<a href='welcome.php'>HOME PAGE</a>");
	echo "</strong>";
	
	}
	else
	{
		echo "<strong>";
		echo nl2br("\nYOU HAVENT BOOK ANY TICKETS YET !! GO BOOK NOW \n\n");
		echo nl2br("<a href='book.php'>BOOK NOW</a>");
		echo nl2br("\n\n<a href='welcome.php'>HOME PAGE</a>");
		echo "</strong>";
	}
}
	else
	{
		header("location:welcome.php");
		}

?>
</div>
</html>