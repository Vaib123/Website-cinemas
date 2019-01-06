
<?php
session_start();
$x=$_POST['moviename'];
$y=$_POST['classtype'];
$z=$_POST['numt'];
$p=$_POST['upipaytm'];
$q=$_POST['upiphonepe'];
$r=$_POST['cardholdername'];
if($p==""&&$q==""&&$r=="")
{
	echo nl2br("\n PLEASE MAKE THE PAYMENT\n");
	echo nl2br("<a href='book.php'>\n GO BACK");

}
if($x==""||$y==""||$z=="")
{
	echo nl2br("\n PLEASE FILL ALL THE FIELDS \n");
	echo nl2br("<a href='book.php'>\n GO BACK");

}
else
{
	if($y=="SILVER" || $y=="Silver" ||$y=="silver")
	$m=90;
	else if($y=="GOLD" || $y=="Gold" ||$y=="gold")
	$m=150;
	else
	$m=200;
	if(isset($_SESSION['fame']))
	{
			mysql_connect("localhost","root","");
			mysql_select_db("pvr");
			$a=$_SESSION['fame'];
			$b=$m*$z;
			if($p!="")
			$r="PAYTM";
			else if($q!="")
			$r="PHONEPE";
			else
			$r="DEBIT CARD";
			$query="INSERT INTO bookinghistory(owner,name,class,seats,price,paymentmode)VALUES('$a','$x','$y','$z',$b,'$r')";
			mysql_query($query);
			$query2="SELECT seats FROM movieinfo WHERE moviename='$x'";
			$result=mysql_query($query2);
			$row=mysql_fetch_array($result);
			
			$con=mysql_num_rows($result);
			if($con!=0)
			{
				$res=number_format($row[0]);
				$left=(string)($res-$z);
				
				$query3="UPDATE movieinfo set seats='$left' WHERE moviename='$x'";
				$result=mysql_query($query3);
				header("location:bookingpage.php");
			}
	}
	else
	{
			echo nl2br("\n YOUR SESSION EXPIRED \n");
			echo nl2br("<a href='index.php'>\n GO BACK");
	}	

}
?>
