<?php
$x=$_POST['name'];
$y=$_POST['password'];
$z=$_POST['phone'];
$w=$_POST['email'];

if( $x=="" ||$y==""||$z==""||$w=="")
{
	echo "Fill all";
	echo "<a href='index.php'>&nbsp &nbsp GO BACK";

}
else
{
mysql_connect("localhost","root","");
mysql_select_db("pvr");
$query1="SELECT * from watchers WHERE name='$x' && password='$y'";
$result=mysql_query($query1);
$con=mysql_num_rows($result);
if($con==0)
{
$query="INSERT INTO watchers (name,password,phone,email) VALUES('$x','$y','$z','$w')";
mysql_query($query);
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully REgIstered');
    window.location.href='index.php';
    </script>");
//header("location:index.php");
}
else
{
	echo "USER ALREADY EXISTS";
	echo "<a href='index.php'>&nbsp &nbsp GO BACK";
}
}
?>