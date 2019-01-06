<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family:cursive,sans-serif;

}
.hero-image {
  background-image: url("one.jpg");
  
  height: 1200px;
  background-size: cover;
  
}
.one
{
	width:40%;
	float:right;
	color:white;
	
}
.two
{
    width:40%;
	float:left;
	color:white;
	padding-left:10%;
}

h1{color:white;text-align:center;position:sticky;}
</style>
<div class="hero-image">

<h1>WELCOME TO PVR</h1>
<form method="POST" action="logged.php">
<div class="two">
Enter your name :<br>
<input type="text" name="name" size="30"><br><br>
Enter your password :<br>
<input type="password" name="password" size="30"><br><br>

<input type="submit" value="LOGIN"><br><br>
<input type="reset" value="RESET"><br><br>
</div>
</form>
<div class="one">
<form method="POST" action="registered.php">


Enter your name :<br>
<input type="text" name="name" size="30"><br><br>
Enter your password :<br>
<input type="password" name="password" size="30"><br><br>
Enter your phone :<br>
<input type="number" name="phone" size="30"><br><br>
Enter your email :<br>
<input type="email" name="email" size="30"><br><br>
<input type="submit" value="REGISTER"><br><br>
<input type="reset" value="RESET"><br><br>
</form>
</div>
</div>

</body>
</html>