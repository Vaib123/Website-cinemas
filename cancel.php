<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family:sans-serif;
  padding-left:40px;
}
.hero-image {
  background-image: url("60578.jpg");
  padding:50px;
  padding-left:80px;
  height: 1200px;
  background-size: cover;
  
}
</style>
<div class="hero-image">
<form method="POST" action="cancels.php">
Enter your booking id :<br>
<input type="text" name="canceltype" size="30"><br><br>
<input type="submit" value="cancel"><br><br>
<a href='bookingpage.php'>IF YOU DO NOT WANT TO CANCEL CLICK HERE</a>
</form>

</div>
</html>