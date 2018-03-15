<?php
	$servername ="localhost";
	$username="root";
	$password="";
	$retype="";
	$db="db";
	$conn=mysqli_connect($servername,$username,$password,$retype) or die("connection failed: ".mysql_connect());
	mysqli_select_db($conn,$db);
	mysqli_connect();
	?>
