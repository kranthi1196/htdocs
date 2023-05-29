
<!--  /* ********************************************* All the Back end Code will be followed here *********************************************  */ --> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="user_details.php" method="post" enctype="multipart/form-data">
    <fieldset style="width=50%"><legend>User Signup</legend>
    <table>
 <!--<tr><td> TSPSC ID : </td><td><input type="text" name="tspscid" placeholder="TSPSC ID"></td></tr><br> --> 
 <tr><td> First Name : </td><td><input type="text" name="FirstName" placeholder="FirstName" onKeyup="this.value = this.value.toUpperCase()"></td></tr><br>
 <tr><td> Last Name : </td><td><input type="text" name="LastName" placeholder="LastName" onKeyup="this.value = this.value.toUpperCase()"></td></tr>
 <tr><td> Mobile Number : </td><td><input type="text" name="mobile" placeholder="10 Digit Mobile Number" onKeyup="this.value = this.value.toUpperCase()"></td></tr>
 <tr><td> Photo: </td><td><input type="file" name="cand_image" value=""></td></tr>
 <tr><td> Sign: </td><td><input type="file" name="cand_sign" value=""></td></tr>
 <tr><td></td><td><input type="submit" name="sumbit" value="submit"></td></tr>
  </table> 
  </fieldset>
  </form>
</body>
</html>


