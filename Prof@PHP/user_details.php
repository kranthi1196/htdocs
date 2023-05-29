<?php
$connection = mysqli_connect("localhost","root", "", "practice");
if(isset($_POST['sumbit'])){

    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $mobile = $_POST['mobile'];
    $appid = '123456';

    $cand_image = $_FILES['cand_image']['name'];
    $cand_sign = $_FILES['cand_sign']['name'];
    $tspscid = 'TSPSC'.$appid;

    $targetfile = "./cand_images/".$tspscid.'_'.basename($cand_image);
    $targetfile_sign = "./cand_images/".$tspscid.'_'.basename($cand_sign);

 $query = "INSERT INTO cand_images(`tspscid`,`FirstName`, `LastName`, `mobile`, `cand_image`, `cand_sign`) VALUES('$tspscid','$FirstName','$LastName','$mobile','$cand_image', '$cand_sign')";
 
 $status = mysqli_query($connection,$query);
    if($status){
        echo 'Query Executed Successfully... and Data inserted into -> cand_images<br>';

        move_uploaded_file($_FILES['cand_image']['tmp_name'],$targetfile);
        move_uploaded_file($_FILES['cand_sign']['tmp_name'],$targetfile_sign);
    }
    else{
        echo 'Query Not Executed Successfully... and Data not inserted<br>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
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




