<?php

$servername = "localhost";
$username = "root3";
$password = "Sahita1!";
$db = "mydatabase" ;


$conn = mysqli_connect($servername, $username, $password) or die("Connection failed: " . mysql_connect());



mysqli_select_db($conn,$db);
?>
