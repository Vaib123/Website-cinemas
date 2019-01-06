<?php
	session_start();
	$r=$_POST['canceltype'];
	$sub=substr($r,0,3);
	$sub=(int)$sub;
	if(isset($_SESSION['fame']))
	{
			$a=$_SESSION['fame'];
			echo $a;
			mysql_connect("localhost","root","");
			mysql_select_db("pvr");
			$query2="SELECT name,seats FROM bookinghistory WHERE owner='$a'";
			$result=mysql_query($query2);
		
				while($row=mysql_fetch_array($result))
				{
				
					$res=number_format($row[1]);
					$query5="SELECT seats FROM movieinfo WHERE moviename='$row[0]'";
					$result2=mysql_query($query5);
					$coll=mysql_fetch_array($result2);
					$res1=number_format($coll[0]);
					if($res+$res1<=200)
					{
					$left=(string)($res+$res1);
					
					$query3="UPDATE movieinfo SET seats='$left' WHERE moviename='$row[0]'";
					mysql_query($query3);
					}
					$query6="DELETE FROM bookinghistory WHERE owner='$a' AND id='$sub'";
					mysql_query($query6);
				}
				
			echo ("<script LANGUAGE='JavaScript'>
		window.alert('TICKET GETS CANCELLED');
		window.location.href='welcome.php';
		</script>");
			//header ("location:welcome.php");
				
	}
	else
	{
			echo nl2br("\n YOUR SESSION EXPIRED \n");
			echo nl2br("<a href='index.php'>\n GO BACK");
	}	


?>