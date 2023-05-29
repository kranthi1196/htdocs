<?php
$msg = "";
$connection=mysqli_connect("localhost", "root", "","practice") or die("Could not connect to DataBase");
//$db = mysqli_select_db($connection, 'practice');

if(isset($_POST['submit1']))
{
    $uid = $_POST['uid'];
    $cand_name = $_POST['cand_name'];
    $fath_hus_name = $_POST['fath_hus_name'];
    $mother_name = $_POST['mother_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];
    $mobile = $_POST['mobile'];
    $tspscid="TSPSC".$mobile;
    $email = $_POST['email'];

    $candi_photo=$_FILES['candi_photo']['name'];
    $candi_sign=$_FILES['candi_sign']['name'];

    $target_file = "Online_Application/images/".$tspscid.'_'.basename($candi_photo);
    $target_file_sign = "Online_Application/images/".$tspscid.'_'.basename($candi_sign);

    /* To Create a Table if it is not Available */

    // Writing Query to Create a Table //
    $table="CREATE TABLE IF NOT EXISTS `app_images`(`id` INT(10) NOT NULL AUTO_INCREMENT, `tspscid` VARCHAR(255) NOT NULL, `uid` VARCHAR(255) NOT NULL, `cand_name` VARCHAR(255) NOT NULL, `fath_hus_name` VARCHAR(255) NOT NULL, `mother_name` VARCHAR(255) NOT NULL, `dob` VARCHAR(10) NOT NULL, `gender` VARCHAR(20) NOT NULL, `address` VARCHAR(255) NOT NULL, `pincode` VARCHAR(10) NOT NULL, `mobile` VARCHAR(255) NOT NULL, `email` VARCHAR(255) NOT NULL, `candi_photo` VARCHAR(255) NOT NULL, `candi_sign` VARCHAR(255) NOT NULL, PRIMARY KEY(`id`)) ";

    // Executing the Query //
    $query_table = mysqli_query($connection,$table);

    // executing the Query to Insert the Data into the DataBase //
    $query = "INSERT INTO app_images(`tspscid`,`uid`,`cand_name`,`fath_hus_name`,`mother_name`,`dob`,`gender`,`address`,`pincode`,`mobile`,`email`,`candi_photo`,`candi_sign`) VALUES ('$tspscid','$uid','$cand_name','$fath_hus_name','$mother_name','$dob','$gender','$address','$pincode','$mobile','$email', '$candi_photo', '$candi_sign')";


//  ,`image`,`sign`
//   ,'$image','$sign'
    $query_run = mysqli_query($connection,$query);
 
    if(move_uploaded_file($_FILES['cand_image']['tmp_name'],$target_file)){
        echo 'image send to the Folder';
        echo '<br>Your Application has been Submitted with a Reference Number: '.'<b>'.$tspscid.'</b>';
    }
    if(move_uploaded_file($_FILES['cand_sign']['tmp_name'],$target_file_sign)){
        echo 'sign Sent to the Folder';
    }

    if($query_run){
        echo 'Query Executed Successfully';
        //header('Location:..\Preview.php');
        

        if(move_uploaded_file($_FILES['cand_image']['tmp_name'],$target_file) && move_uploaded_file($_FILES['cand_sign']['tmp_name'],$target_file_sign)){
        
            echo '<br>Your Application has been Submitted with a Reference Number: '.'<b>'.$tspscid.'</b>';
            //header('Location:..\Preview.php');
            $msg="Images updated Successfully";
        }
        else{
            
            $msg="Images not updated Successfully";
        }

    }
    else{
        echo 'Query Not Executed Successfully';
        header('Location:.\App.php');
        
    }



}

?>
<!-- HTML Form Code Starts from here    onKeyup="this.value = this.value.toUpperCase()" -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 2 Application</title>
    <link rel="stylesheet" type="text/css" href="./CSS/prev2.css">

<script>
    document.addEventListener('contextmenu', event => event.preventDefault());
</script>


</head>
<body>

    <center><img class="tspsc_logo" id="tspsc_logo"    src="./Images/TSPSC_Logo.png" alt="TSPSC Logo"><br><h1>TELANGANA STATE PUBLIC SERVICE COMMISSION :: HYDERABAD</h1>
    <h2>GROUP-II SERVICES</h2>
    <h2>(GENERAL RECRUITMENT)</h2>
    <h2>SUPPLEMENTARY NOTIFICATION NO. 17/2016 TO NOTIFICATION NO. 20/2015, Dated.01/09/2016</h2></center>
    <form action="" method="post">
        <fieldset>
        <legend><b> Candidate Details.</b></legend>
        <table>
    <tr><br><td><b>Unique Identification Number (UID)/Aadhar Number * : </td><td><input type="text" name="uid"   placeholder="7913 9305 5275"></b></td></tr>

    <!--<tr><td><b>Reference ID :</td><td><input type="text" name="refid" placeholder="Dont Fill This"></b></td></tr>  ** <input type="hidden"   name="MAX_FILE_SIZE" value="500">  <input type="hidden"   name="MAX_FILE_SIZE" value="500"><br>-->
    <tr><td><b>Candidate Name * :</td><td><input type="text" name="cand_name"   placeholder="KRANTHI KUMAR MARIKANTI" onKeyup="this.value = this.value.toUpperCase()"></b></td></tr>
    <tr><td><b>Father's/Husband's Name :</td><td><input type="text" name="fath_hus_name" id="" placeholder="SANJEEVA MARIKANTI" onKeyup="this.value = this.value.toUpperCase()"></b></td></tr>
    <tr><td><b>Mother's Name :</td><td><input type="text" name="mother_name" placeholder="RAMANA MARIKANTI" onKeyup="this.value = this.value.toUpperCase()"></b></td></tr> 
    <tr><td><b>Date of Birth * :</td><td><input style="width:172px;" type="date" name="dob" placeholder="15/03/1993" min="1995-01-01" max="2017-04-30" onKeyup="this.value = this.value.toUpperCase()"></b></td></tr> 
    <tr><td><b>Gender :</td><td><input style=" width:25px" type="radio" name="gender" value="Male">Male <input type="radio" name="gender" value="Female" onKeyup="this.value = this.value.toUpperCase()">Female</b></td></tr> 
    <tr><td><b>Address for Communication :</td><td><input type="textarea" name="address" id="" placeholder="4-140, THALLASINGARAM, NUTHANKAL, SURYAPET" onKeyup="this.value = this.value.toUpperCase()"></b></td></tr> 
    
    <tr><td><b>Pincode :</td><td><input type="text" name="pincode" placeholder="508221" onKeyup="this.value = this.value.toUpperCase()"></b></td></tr> 
    <tr><td><b>Mobile Number * :</td><td><input type="text" name="mobile" id=""   placeholder="9640735588" onKeyup="this.value = this.value.toUpperCase()"></b></td></tr> 
    <tr><td><b>E-mail * :</td><td><input type="text" name="email" id=""   placeholder="kranthi.marikanti@gmail.com" ></b></td></tr> 
    
    </table>
</fieldset> 
<br>
<fieldset>
    <legend><b> Personal Details.</b></legend>
    <table>

    <tr><td><b>Candidate Photo * :</b></td><td><br> <input type="file" name="candi_photo" id="" value="upload"><br></td></tr>

    <tr><td><b>Candidate Signature * :</b></td><td> <input type="file" name="candi_sign" id="" value="upload"></td></tr>
    
</table>
</fieldset>   

 <br><br><br>



<center><input type="submit" name="submit1" id="" value="submit"></center>

    <tr><td><b><br></b></td><td><br></td></tr>
    </form>
</body>
</html>
