<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
h2
{
text-align:center;
font-family:cursive;
}
body {
  margin: 0;
  font-family:sans-serif;
  padding-left:40px;
}
.hero-image {
  background-image: url("60578.jpg");
  
  height: 1200px;
  background-size: cover;
  
}
.dropbtn {
  background-color:black;
  color: white;
  padding: 10px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
  float:right;
  margin-right:25px;
  padding-right:10px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 100px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {color:white;background-color: black}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: purple;
}
</style>
<div class="dropdown">
  <button class="dropbtn">HOME</button>
  <div class="dropdown-content">
  <a href="logout.php">LOGOUT</a>
  <a href="book.php">BOOK</a>
  <a href="bookingpage.php">BOOK HISTORY</a>
  <a href="cancel.php">CANCEL</a>
  </div>
</div>


<div class="hero-image">

<?php
session_start();
if(isset($_SESSION['fame']))
{
	echo "<strong>";
	echo "<strong>You have successfully logged in &nbsp &nbsp </strong>";	
	echo $_SESSION['fame'];
	echo nl2br("\n\nNOW SHOWING");
	echo "</strong>";

	mysql_connect("localhost","root","");
	mysql_select_db("pvr");
	$query="SELECT * FROM movieinfo";
   $result=mysql_query($query);
echo"<table border='5' cellpadding='5' cellspacing='10' >";
   while($row=mysql_fetch_array($result))
	{
		
		echo"<tr>";
		echo"<td>".$row[0]."</td>"; 
		echo"<td>".$row[1]."</td>"; 
		echo"<td>".$row[2]."</td>"; 
		echo"<td>".$row[3]."</td>"; 
		echo"<td>".$row[4]."</td>"; 
		echo"<td>".$row[5]."</td>";
		echo"</tr>";
		
	}
	echo"</table>";
}
	else
	{
		header("location:register.php");
		}

?>
</div
</html>