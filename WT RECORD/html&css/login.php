<!DOCTYPE html>
<html>
<?php
    include "connect.php";
    session_start();
    //echo "not connected";
    if(isset($_POST["submit"]))
    {
        $email=$_POST["check_email"];
        $password=$_POST["check_password"];
        $qry = "select `email`,`password` from `user_tbl` where `email`='$email' and `password`='$password';";
        $res=mysqli_query($conn,$qry);
        if(mysqli_num_rows($res)>0)
        {
             header("Location:register.php");
        }
        else {
            echo '<script language="javascript">';
            echo 'alert("invalid email or password")';
            echo '</script>'; 
        }
    }
    
?>
<head>
        <title>LOGIN page</title>
</head>
<body>
        <form class="form" method="post" action="">
        <label for="check_email">Email:</label></br>
        <input type="text" id="email" name="check_email">  <br><br>
        <label for="check_password">Password:</label></br>
        <input type="password" id="password" name="check_password">
        <br><br>
        <input type="submit" name="submit"/>
        </form>
</body>
</html> 
