<?php
include "connect.php";
session_start();
if(isset($_POST['sub'])) {
	$name=$_POST['YourName'];
	$email=$_POST['YourEmail'];
	$pass=$_POST['Password']; 
	$retype=$_POST['Retype']; 
	$qry="INSERT INTO `user_tbl` (`user_name`,`email`,`password`,`retypePassword`)
		VALUES('$name','$email','$pass','$retype');";
		
	mysqli_query($conn,$qry) or die("connection fail.mysql_error()");
	header('location:login.php');
}
?> 

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
		<div class="header">
		<img src="C:\Users\Sahita\Documents\wt\RecipeWorld\images\logo.png" alt="Recipe World Logo">
			<ul class="nav">
				<li><a href="home.html">Home</a></li>
				<li><a href="recipes.html">Recipes</a></li>
				<li><a href="suggest.html">Suggest</a></li>
			</ul>
		</div>
		<div class="main-content">
			<h2>Register</h2>
                
                
                <form class="form" method="post" action="">
                User Name<br><br> <input type="text" id="Your Name" name="YourName"></br></br>
               Your Email<br><br> <input type="text" id="Your Email" name="YourEmail"> <br><br>
               Password<br><br> <input type="text" id="Password" name="Password"></br></br> 
               Retype Password<br><br> <input type="text" id="Retype Password " name="Retype"></br></br>
               <input type="submit" name="sub" value="Click to Submit" class="bold">
                </form>
		</div>
	</body>
</html>
