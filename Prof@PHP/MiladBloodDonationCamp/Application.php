<?php
include "milad_db_validation.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milad Blood Donation Camp</title>
    <style>
        div{
            height: 200px;
  width: 45%;
  background-color: powderblue;
        }
    </style>
</head>
<body>
    <h2 style="color: green;font-family:Lato"><center>Milad Blood Donation Camp</center></h2>
    <center>
<div>
    <form action="Success.php" method="post" enctype = "multipart/form-data" style="width=500px">
        <fieldset>
        <legend><b> Donor Details.</b></legend>
        <table>
    <tr><td><b style="color: darkblue;font-family:Lato">First Name * : </td><td><input type="text" name="fname"   onKeyup="this.value = this.value.toUpperCase()" value=""></b></td></tr>
    <tr><td><b style="color: darkblue;font-family:Lato">Last Name : </td><td><input type="text" name="lname"   onKeyup="this.value = this.value.toUpperCase()" value=""></b></td></tr>
    <tr><td><b style="color: darkblue;font-family:Lato">Contact * : </td><td><input type="text" name="phone"   onKeyup="this.value = this.value.toUpperCase()" value=""></b></td></tr>
    <tr><td><b style="color: darkblue;font-family:Lato">Blood Group *</b></td><td><select name="bloodgroup" id="" value="" style = "width:70%">
        <option style="color: Blue;" name="sortfilter" value="Select">Select Your Blood Group </option>
        <option style="color: Blue;" name="sortfilter" value="A +Ve">A + Positive</option>
        <option style="color: Blue;" name="sortfilter" value="A-Ve">A - Negative</option>
        <option style="color: Blue;" name="sortfilter" value="B+Ve">B + Positive</option>
        <option style="color: Blue;" name="sortfilter" value="B-Ve">B - Negative</option>
        <option style="color: Blue;" name="sortfilter" value="O+Ve">O + Positive</option>
        <option style="color: Blue;" name="sortfilter" value="O-Ve">O - Negative</option>
        <option style="color: Blue;" name="sortfilter" value="AB+Ve">AB + Positive</option>
        <option style="color: Blue;" name="sortfilter" value="AB-Ve">AB - Negative</option>
        </select></td></tr>
    <tr><td><b style="color: darkblue;font-family:Lato">Address : </td><td><input type="text" name="address"   onKeyup="this.value = this.value.toUpperCase()" value=""></b></td></tr>
    <tr><td><b style="color: darkblue;font-family:Lato">Donor Photo * :</b></td><td><input type="file" name="donor_image" value=""/><br></td></tr>
    <tr><td></td><td><center><input type="submit" name="submit" id=""></center></td><td></td></tr>
    </table>
    </fieldset>
</form>
</div>
</center>
</body>
</html>





