<?php
include "validations.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="CSS/default_Reg.css" rel="stylesheet" type="text/css" media="all" />
    <link href="CSS/fonts.css" rel="stylesheet" type="text/css" media="all" />
    <style>


    </style>
</head>
<body>
<div id="wrapper">
        <div id="menu-wrapper">
                <div id="menu" class="container">
                    <ul>
                        <li class="current_page_item"><a href="#">Homepage</a></li>
                        <li><a href="Register.php">Register</a></li>
                        <li><a href="Login.php">Login</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
        </div>
        <div id="banner"></div>
        <div id="page" class="container">
        <div id="content">
			<div class="title">
				<h2>Candidate Registration Page*</h2>
                <br>
                <form action="" method="post">
                    <fieldset>
                        <legend>Candidate Registration</legend>
                        <table>
                <tr><td>First Name</td> <td><input type="text" name="fname" onKeyup="this.value = this.value.toUpperCase()" required /> </td> </tr>
                <tr> <td>Last Name</td> <td><input type="text" name="lname" onKeyup="this.value = this.value.toUpperCase()" required /> </td> </tr>
                <tr> <td>Mobile Number</td> <td> <input type="text" name="mobile" value="" required /></td> </tr>
                <tr> <td>Email ID</td> <td> <input type="email" name="email" value="" required /></td> </tr>
                <tr> <td>Password</td> <td> <input type="password" name="pass" value="" required /></td> </tr>
                <tr> <td>Confirm Password</td> <td> <input type="password" name="conpass" value="" required /> </td> </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr><center><td></td><td><input type="submit" name="reg_submit" id="" /></td><td></td></center></tr>
              </table>
              
                <h4><a href="Login.php"> Already a Registered? Login Here</a></h4>
                </fieldset>      
                </form>
        </div>
</div>
</div>
</body>
</html>