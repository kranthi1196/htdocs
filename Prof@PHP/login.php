<?php
include('login_val.php');
if(isset($_REQUEST['register'])){
    header('Location:Registration.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <center><h4>You have Successfully Registered!!</h4></center>
<form action="" method="post" enctype = "multipart/form-data">
<fieldset>
    <legend>Candidate Login : </legend>
<table>
<tr> <td></td><td><input type="text" name="email_log" value ="" placeholder="Enter Email id"></td></tr>
<tr> <td></td><td><input type="password" name="pass_log" value ="" placeholder="Enter your Password"></td></tr>
<tr><td></td><td><center><input type="submit" name="login" value="login">&nbsp;&nbsp;<input type="submit" name="register" href="./Registration.php" value="Register"></center></td><td></td></tr>
</table>



</fieldset>
  </form>    

</body>
</html>