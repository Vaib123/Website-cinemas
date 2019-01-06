<?php
session_start();
$a=$_POST['name'];
$b=$_POST['password'];

if($a==""||$b=="")
{
	echo "fill all of them ";
	echo"<a href='register.php'>click here to go back";
	}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("pvr");
	$query="SELECT * from watchers WHERE name='$a' && password='$b'";
	$result=mysql_query($query);
	$con=mysql_num_rows($result);
	
	if($con==0)
	{
		echo "NO SUCH USER";
		echo "<a href='index.php'> &nbsp &nbsp &nbsp &nbsp click here to go back";
	}
	
	else
	{
		$_SESSION['fame'] = $a;
		header ("location:welcome.php");
		echo "LOGIN SUCCESSFUL";
	}
}
?>