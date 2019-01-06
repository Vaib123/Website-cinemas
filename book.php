<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.hero-image {
  background-image: url("57394.jpg");
  background-color: #cccccc;
  height:1500px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top:60%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}
h1
{
text-align:center;
color:white;
}
#pe{
display:none;
}
#tm{
display:none;
}
#debit{
display:none;
}
</style>
<script>
var x="block";
		 function phonepe()
		 {
		 
			document.getElementById("pe").style.display=x;
			if(x=="none")
				x="block";
			else
				x="none";
		 }
 var y="block";
		 function paytm()
		 {
		 
			document.getElementById("tm").style.display=y;
			if(y=="none")
				y="block";
			else
				y="none";

		 }
 var z="block";
		 function debitcard()
		 {
		 
			document.getElementById("debit").style.display=z;
			if(z=="none")
				z="block";
			else
				z="none";
		 }
</script>
<div class="hero-image">
<div class="hero-text">
<form method="POST" action="bookings.php">
<h1>BOOK A TICKET</h1>
Enter the movie name :<br>
<input type="text" name="moviename" size="30"><br><br>
Enter the class (silver,gold,platinum) :<br>
<input type="text" name="classtype" size="50"><br><br>
Enter the no of tickets :<br>
<input type="number_format" name="numt" size="30"><br><br>
<button type="button" onclick="paytm()">PAYTM</button><br><br>

<div id="tm">

Enter the upi address(@paytm) :<br>
<input type="text" name="upipaytm" size="30"><br><br>
Enter the upi pin :<br>
<input type="password" name="upipaytmpin" size="30"><br><br>

</div>
<button type="button" onclick="phonepe()">PHONEPE</button><br><br>
<div id="pe">

Enter the upi address(@ybl) :<br>
<input type="text" name="upiphonepe" size="30"><br><br>
Enter the upi pin :<br>
<input type="password" name="upiphonepepin" size="30"><br><br>


</div>
<button type="button" onclick="debitcard()">DEBIT CARD</button><br><br>
<div id="debit">
Enter the cardholder name :<br>
<input type="text" name="cardholdername" size="30"><br><br>
Enter the expiry date :<br>
<input type="text" name="expirydate" size="30"><br><br>
Enter the cvv :<br>
<input type="number_format" name="cvv" size="30"><br><br>
</div>

<input type="submit" value="BOOK NOW" ><br><br>
<input type="reset" name="RESET NOW"><br><br>
</form>
<a href="welcome.php">CLICK HERE TO GO BACK</a>
</div>
</div>
</html>