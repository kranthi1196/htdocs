<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include 'dbdata.php';
  if (isset($_REQUEST['submit'])) {
    header('Location:./action_page.php');
//    header('Location:fee_payment.php');
}  
/* if (isset($_REQUEST['logout'])) {
    include 'logout.php';
} */

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SRC Tests</title>
</head>
<body>
<h2>User Login</h2>

<form method="post">
  <label for="fname">User name:</label><br>
  <input type="text" id="fname" name="fname" placeholder="John"><br>
  <label for="lname">Password:</label><br>
  <input type="password" id="pass" name="pass" placeholder="****"><br><br>
  <input type="submit" value="Submit" name="submit" >
</form> 

<!-- <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p> -->

</body>
</html>
