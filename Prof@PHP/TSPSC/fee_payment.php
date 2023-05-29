<?php
error_reporting( E_ERROR | E_WARNING | E_PARSE);
// include 'all_validations.php';
// include 'fee_payment_val.php';
// include 'user_details.php';
include "fee_val.php";

if(isset($_REQUEST['fee_submit'])){
    header('Location:preview_Dup.php');
}
if(isset($_REQUEST['continue'])){
    header('Location:./preview_Dup.php');
}
 // include 'validations.php';


?>
<!--  /* ********************************************* All the Back end Code will be followed here *********************************************  */ --> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/feestyle.css">
   
</head>
<body>
    <form action=" " method="post" enctype="multipart/form-data">
    <fieldset style="width=50%"><legend>Fee Payment</legend>
    <table>
 <!--<tr><td> TSPSC ID : </td><td><input type="text" name="tspscid" placeholder="TSPSC ID"></td></tr><br> --> 
 <tr><td> TSPSC ID : </td><td><input type="text" name="tspscid" placeholder="TSPSC ID" onKeyup="this.value = this.value.toUpperCase()" value="<?php print "$app_data[tspscid]";?>"></td></tr><br>
 <tr><td> Date of Birth : </td><td><input type="text" name="dob" placeholder="DATE OF BIRTH" onKeyup="this.value = this.value.toUpperCase()" value="<?php print "$app_data[dob]";?>"></td></tr>
 <tr><td> Mobile Number : </td><td><input type="text" name="mobile" placeholder="10 Digit Mobile Number" onKeyup="this.value = this.value.toUpperCase()" value="<?php print "$app_data[mobile]";?>"></td></tr>
 <tr><td> Fee Amount : </td><td><input type="text" name="fee" placeholder="Amount" onKeyup="this.value = this.value.toUpperCase()" value="<?php print "$app_data[fee]";?>"></td></tr>
 <!-- <tr><td> Photo: </td><td><input type="file" name="cand_image" value=""></td></tr>
 <tr><td> Sign: </td><td><input type="file" name="cand_sign" value=""></td></tr> -->
 <tr></tr>
 <tr></tr>
 <tr></tr>
 <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="fee_sumbit" value="submit">&nbsp; &nbsp; &nbsp;<!-- --></td></tr>
  </table> 
  </fieldset>
  </form>
</body>
</html>

<?php
print "<table border=\"1px\" cellpadding=\"10px\" class=\" table-striped style=\"text-align:center; border-collapse:collapse; padding-left:0px padding-right:0px\"\">

<tr style=\"text-align:center;\">   <td><b>TSPSC ID</b></td>   <td><b>Date of Birth</b></td>   <td><b>Mobile Number</b></td>   <td><b>Journal Number</b></td>   <td><b>Payment Date</b></td>   <td><b>Amount</b></td>   <td><b>Date</b></td></tr><br/>
<tr style=\"text-align:center;\">   <td>$fee_data[tspscid]</td>   <td>$fee_data[dob]</td>   <td>$fee_data[mobile]</td>   <td>$fee_data[journal_num]</td>   <td>$fee_data[payment_date]</td>   <td>$fee_data[amount]</td>   <td>$fee_data[date]</td></tr>
</table>
<br><center><input type=\"submit\" name=\"continue\" id=\"continue\" value=\"continue\"></center>
<script>
document. getElementById(\"continue\"). onclick = function () { location. href = \"../TSPSC/preview_Dup.php\"; };
</script>" ;



?>
