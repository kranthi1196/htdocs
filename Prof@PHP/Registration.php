<?php
include ('reg_val.php');

error_reporting( E_ERROR | E_WARNING | E_PARSE);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
  <center><u><h3>User Registration Form</h3></u></center>
  <form action="" method="post" enctype = "multipart/form-data" align="justify">
<fieldset>
    <legend>Candidate Details : </legend>
<table>
<tr> <td>First Name </td><td>: <input type="text" name="fname" onKeyup="this.value = this.value.toUpperCase()"></td></tr>
<tr> <td>Last Name </td><td>: <input type="text" name="lname" onKeyup="this.value = this.value.toUpperCase()"></td></tr>
<tr> <td>Mobile Number </td><td>: <input type="text" name="mobile" value="" required></td></tr>
<tr> <td>Email ID </td><td>: <input type="email" name="email" value ="" required></td></tr>
<tr> <td>Password </td><td>: <input type="password" name="pass" value ="" required></td></tr>
<tr> <td>Confirm Password </td><td>: <input type="password" name="conpass" value ="" required></td></tr>
<tr><td></td><td><center><input type="submit" name="submit" id=""></center></td><td></td></tr>
</table>

<h4><a href="login.php"> Already a Registered? Login Here</a></h4>
</fieldset>
  </form>
</body>
</html>