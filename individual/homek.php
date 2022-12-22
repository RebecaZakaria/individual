<!DOCTYPE html>
<html>
<head>
	<title>House keeping management system</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	.main{
		background-image: url(img1.JPEG);
		width: 100%;
		height:150vh;
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
	}
	
	</style>
</head>
<body>
<div class="main">

	<div>
		<div class="menu">
				<ul>
  				<li><a href="#home">HOME</a></li>
  				<li><a href="#nws">NEWS</a></li>
  				<li><a href="#contact">CONTACT</a></li>
 				<li><a href="#about">ABOUT</a></li>
				</ul>
		</div>	
       <div class="mycontent">
    		<h2>WELCOME <br>TO OUR WEBSITE</h2>> <br><h3>HOUSE AND HOTEL KEEPING </h3>
       </div>
         <div class="myform">

		     <form method="POST" action="connection.php">
					<h2>please fill this form</h2>
					<input type="text" name="name" placeholder="your fullname" required>
					<input type="email" name="email" placeholder="your email" required>
					<input type="date" name="reg_date" placeholder="enter date" required>
					<input type="tel" name="contact" placeholder="enter phone number" required><br>
					<textarea name="comment" rows="5" cols="30" placeholder="your comments or suggestion"></textarea>
		
 					<button class="btn" type="submit" name="send">submit</button> 
 			 </form>
    </div>
</div>
</body>
</html>


<?php
$conn=mysqli_connect("localhost","root","","housekeeping");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$reg_date=$_POST['reg_date'];
	$contact=$_POST['contact'];
	$comment=$_POST['comment'];
$sql="INSERT INTO 'housekeepertable' (name,email, reg_date,contact, email) VALUE('$name','$email', '$reg_date','$contact','$comment')";
$result=mysql_query($conn,$sql);
if($result)
{
	echo"sent successfully";
}
else
{
	echo"not sent";
}
}

?>