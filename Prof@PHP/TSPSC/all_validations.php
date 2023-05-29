<?php


/* ****** Registration Page Validations ****** */

error_reporting( E_ERROR | E_WARNING | E_PARSE);
$db_connection = mysqli_connect("localhost","root","","group2_db") or die('Error Connecting the DataBase');

$reg_table_name = "Registration_Details";
$reg_table_create = "CREATE TABLE IF NOT EXISTS $reg_table_name(`id` INT(10) NOT NULL AUTO_INCREMENT, `fname` VARCHAR(255) NOT NULL, `lname` VARCHAR(255) NOT NULL, `mobile` VARCHAR(255) NOT NULL, `email` VARCHAR(255) NOT NULL, `pass` VARCHAR(255) NOT NULL, `conpass` VARCHAR(255) NOT NULL, `date` VARCHAR(255) NOT NULL, PRIMARY KEY(`id`))";
$reg_table_status = mysqli_query($db_connection, $reg_table_create);

if(isset($_REQUEST['reg_submit'])){
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $mobile = $_REQUEST['mobile'];
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];  
    //$pass = SHA($_REQUEST['pass']);  

    $conpass = $_REQUEST['conpass'];  
    
    date_default_timezone_set('Asia/Kolkata');
    //$timestamp = date("Y-m-d H:i:s");
    $date = date("Y-m-d H:i:s");
}
if(!empty($_REQUEST['fname']) && !empty($_REQUEST['lname']) && !empty($_REQUEST['mobile']) && !empty($_REQUEST['email']) && !empty($_REQUEST['pass']) && !empty($_REQUEST['conpass'])){
   
   if($pass != $conpass){
    echo '<script>alert("OOPS!! Password and Confirm Password is not Same")</script>';
   }else{
    
    $reg_table_insert = "INSERT INTO $reg_table_name(`fname`, `lname`, `mobile`, `email`, `pass`, `conpass`, `date`) VALUES('$fname', '$lname', '$mobile', '$email', '$pass', '$conpass', '$date')";
    $tabel_insert_query = mysqli_query($db_connection, $reg_table_insert);
    echo '<script>alert(":: You are successfully Registered ::")</script>'; 
   }

}
/*else{
    
    echo '<script>alert("Make Sure to Please Fill all the Fields !!!")</script>';
} */

/* ****** Registration Page Validations Ended Here ****** */

/* *********************************************************************************** ### *********************************************************************************** */
/* ****** Login Page Validations Starts Here ****** */

$db_connection = mysqli_connect("localhost","root","","group2_db") or die('Error Connecting the DataBase');

$reg_table_name = "registration_Details";

if(!empty($_POST['login'])){
    $email = $_REQUEST['email_log'];
    $pass = $_REQUEST['pass_log'];


$reg_fetch_query = "SELECT * FROM $reg_table_name WHERE email='$email' AND pass='$pass'";
$reg_fetch_query_ex = mysqli_query($db_connection, $reg_fetch_query);
$row_login = mysqli_num_rows($reg_fetch_query_ex)>0 ;


if($reg_data = mysqli_fetch_assoc($reg_fetch_query_ex))
{
   /* print "$row_data[fname]<br>";
    print "$row_data[lname]<br>";
    print "$row_data[mobile]<br>";
    print "$row_data[email]<br>";
    print "$row_data[pass]<br>";
    print "$row_data[conpass]<br>"; */
}

    if(($email == $reg_data['email']) && ($pass == $reg_data['pass'])){

        echo '<script>alert("Your Login is Successfull...")</script>';
        header('Location:Application.php');
        
    }
 

else{
    Echo '<script>alert("Your Login Failed...<br>Your Details are not matched with our DB records...")<br></script>';
    //Echo 'Your Details are not matched with our DB records...<br>';
}

}
/* ****** Login Page Validations Ended Here ****** */


/* *********************************************************************************** ### *********************************************************************************** */
/* ****** Application Page Validations Starts Here ****** */

/* DataBase Creation */ 
$db_name = "group2_db";
$connection = mysqli_connect("localhost","root", "",);
$db = "CREATE DATABASE IF NOT EXISTS $db_name";
$db_query = mysqli_query($connection,$db);

$db_connection = mysqli_connect("localhost", "root", "", $db_name);
$app_table_name = "candidate_details";

$app_table_create = "CREATE TABLE IF NOT EXISTS $app_table_name(`id` INT(10) NOT NULL AUTO_INCREMENT, `uid` VARCHAR(255) NOT NULL,
 `tspscid` VARCHAR(255) NOT NULL, 
 `refid` VARCHAR(255) NOT NULL, 
 `cand_name` VARCHAR(255) NOT NULL, 
 `fath_hus_name` VARCHAR(255) NOT NULL,
 `mother_name` VARCHAR(255) NOT NULL,
 `dob` VARCHAR(255) NOT NULL,
 `gender` VARCHAR(255) NOT NULL,
 `address` VARCHAR(255) NOT NULL,
 `district` VARCHAR(255) NOT NULL,
 `mandal` VARCHAR(255) NOT NULL,
 `village` VARCHAR(255) NOT NULL,
 `pincode` VARCHAR(255) NOT NULL,
 `mobile` VARCHAR(255) NOT NULL,
 `email` VARCHAR(255) NOT NULL,
 `community` VARCHAR(255) NOT NULL,
 `identication_marks` VARCHAR(255) NOT NULL,
 `ex_service` VARCHAR(5) NOT NULL,
 `employment` VARCHAR(5) NOT NULL,
 `temp_emp` VARCHAR(5) NOT NULL,
 `ncc_instructor` VARCHAR(5) NOT NULL,
 `ph_status` VARCHAR(5) NOT NULL,
 `eligibility_1_4_6_7_9` VARCHAR(5) NOT NULL,
  `eligibility_2` VARCHAR(5) NOT NULL,
  `eligibility_3` VARCHAR(5) NOT NULL,
  `eligibility_5` VARCHAR(5) NOT NULL,
  `hindu` VARCHAR(5) NOT NULL,
  `eligibility_10` VARCHAR(5) NOT NULL,
  `eligibility_11` VARCHAR(5) NOT NULL,
  `eligibility_12` VARCHAR(5) NOT NULL,
  `eligibility_13` VARCHAR(5) NOT NULL,
  `applied_post1` VARCHAR(255) NOT NULL,
  `applied_post2` VARCHAR(255) NOT NULL,
  `applied_post3` VARCHAR(255) NOT NULL,
  `applied_post4` VARCHAR(255) NOT NULL,
  `applied_post5` VARCHAR(255) NOT NULL,
  `applied_post6` VARCHAR(255) NOT NULL,
  `applied_post7` VARCHAR(255) NOT NULL,
  `applied_post8` VARCHAR(255) NOT NULL,
  `applied_post9` VARCHAR(255) NOT NULL,
  `applied_post10` VARCHAR(255) NOT NULL,
  `applied_post11` VARCHAR(255) NOT NULL,
  `applied_post12` VARCHAR(255) NOT NULL,
  `applied_post13` VARCHAR(255) NOT NULL,
  `deg_status` VARCHAR(255) NOT NULL,
  `university` VARCHAR(255) NOT NULL,
  `doa` VARCHAR(255) NOT NULL,
  `deg_htnum` VARCHAR(255) NOT NULL,
  `typeofstudy` VARCHAR(255) NOT NULL,
  `zone` VARCHAR(255) NOT NULL,
  `degree_loc` VARCHAR(255) NOT NULL,
  `inter_loc` VARCHAR(255) NOT NULL,
  `ssc_loc` VARCHAR(255) NOT NULL,
  `cls9_loc` VARCHAR(255) NOT NULL,
  `cls8_loc` VARCHAR(255) NOT NULL,
  `cls7_loc` VARCHAR(255) NOT NULL, 
  `cls6_loc` VARCHAR(255) NOT NULL,
  `journal_num` VARCHAR(255) NOT NULL,
  `payment_date` VARCHAR(255) NOT NULL,
  `fee` VARCHAR(255) NOT NULL,
  `pref_1` VARCHAR(255) NOT NULL,
  `pref_2` VARCHAR(255) NOT NULL,
  `pref_3` VARCHAR(255) NOT NULL,
  `pref_4` VARCHAR(255) NOT NULL,
  `pref_5` VARCHAR(255) NOT NULL,
  `pref_6` VARCHAR(255) NOT NULL,
  `pref_7` VARCHAR(255) NOT NULL,
  `pref_8` VARCHAR(255) NOT NULL,
  `pref_9` VARCHAR(255) NOT NULL,
  `pref_10` VARCHAR(255) NOT NULL, 
  `date` VARCHAR(255) NOT NULL,
  /*`cand_image` VARCHAR(255) NOT NULL,
  `cand_sign` VARCHAR(255) NOT NULL, */  PRIMARY KEY(`id`))"; 

$app_table_query = mysqli_query($db_connection,$app_table_create);

if(isset($_REQUEST['app_submit'])){

    $uid = $_REQUEST['uid'];
    $tspscid = $_REQUEST['tspscid'];
    //$refid = $_REQUEST['refid'];
    $cand_name = $_REQUEST['cand_name'];
    $fath_hus_name = $_REQUEST['fath_hus_name'];
    $mother_name = $_REQUEST['mother_name'];
    $dob = $_REQUEST['dob'];
    $gender = $_REQUEST['gender'];
    $address = $_REQUEST['address'];
    $district = $_REQUEST['district'];
    $mandal = $_REQUEST['mandal'];
    $village = $_REQUEST['village'];
    $pincode = $_REQUEST['pincode'];
    $mobile = $_REQUEST['mobile'];
    $email = $_REQUEST['email'];
    $community = $_REQUEST['community'];

    $identication_marks = $_REQUEST['identication_marks'];
    $ex_service = $_REQUEST['ex_service'];
    $employment = $_REQUEST['employment'];
    $temp_emp = $_REQUEST['temp_emp'];
    $ncc_instructor = $_REQUEST['ncc_instructor'];
    $ph_status = $_REQUEST['ph_status'];

    $eligibility_1_4_6_7_9 = $_REQUEST['eligibility_1_4_6_7_9'];
    $eligibility_2 = $_REQUEST['eligibility_2'];
    $eligibility_3 = $_REQUEST['eligibility_3'];
    $eligibility_5 = $_REQUEST['eligibility_5'];
    $hindu = $_REQUEST['hindu'];
    $eligibility_10 = $_REQUEST['eligibility_10'];
    $eligibility_11 = $_REQUEST['eligibility_11'];
    $eligibility_12 = $_REQUEST['eligibility_12'];
    $eligibility_13 = $_REQUEST['eligibility_13'];

    $applied_post1 = $_REQUEST['applied_post1'];
    $applied_post2 = $_REQUEST['applied_post2'];
    $applied_post3 = $_REQUEST['applied_post3'];
    $applied_post4 = $_REQUEST['applied_post4'];
    $applied_post5 = $_REQUEST['applied_post5'];
    $applied_post6 = $_REQUEST['applied_post6'];
    $applied_post7 = $_REQUEST['applied_post7'];
    $applied_post8 = $_REQUEST['applied_post8'];
    $applied_post9 = $_REQUEST['applied_post9'];
    $applied_post10 = $_REQUEST['applied_post10'];
    $applied_post11 = $_REQUEST['applied_post11'];
    $applied_post12 = $_REQUEST['applied_post12'];
    $applied_post13 = $_REQUEST['applied_post13'];
    
    $university = $_REQUEST['university'];
    $doa = $_REQUEST['doa'];
    $deg_htnum = $_REQUEST['deg_htnum'];
    $typeofstudy = $_REQUEST['typeofstudy'];
    $zone = $_REQUEST['zone'];

    $degree_loc = $_REQUEST['degree_loc'];
    $inter_loc = $_REQUEST['inter_loc'];
    $ssc_loc = $_REQUEST['ssc_loc'];
    $cls9_loc = $_REQUEST['cls9_loc'];
    $cls8_loc = $_REQUEST['cls8_loc'];
    $cls7_loc = $_REQUEST['cls7_loc'];
    $cls6_loc = $_REQUEST['cls6_loc'];

    $journal_num1 = $_REQUEST['tspscid'];
    $journal_num = substr($journal_num1, 5,strlen($journal_num1)-1);
    // $payment_date = $_REQUEST['payment_date'];
    // $fee = $_REQUEST['fee'];

    $pref_1 = $_REQUEST['pref_1'];
    $pref_2 = $_REQUEST['pref_2'];
    $pref_3 = $_REQUEST['pref_3'];
    $pref_4 = $_REQUEST['pref_4'];
    $pref_5 = $_REQUEST['pref_5'];
    $pref_6 = $_REQUEST['pref_6'];
    $pref_7 = $_REQUEST['pref_7'];
    $pref_8 = $_REQUEST['pref_8'];
    $pref_9 = $_REQUEST['pref_9'];
    $pref_10 = $_REQUEST['pref_10'];

    $deg_status = $_REQUEST['deg_status'];
    echo $_REQUEST['community'];

    
    
    if(isset($_REQUEST['app_submit'])){
   
            if(strval($_REQUEST['community'])=="OBC"){
                $fee = "250";
            }
            else{
                $fee = "200";
            }

    date_default_timezone_set('Asia/Kolkata');
    //$timestamp = date("Y-m-d H:i:s");

    $date = date("Y-m-d H:i:s");
    //echo "$date";

    $timestamp = date("Y-m-d");
    $payment_date2 = str_replace("-", "", $date);
    $refid = str_replace(":", "", $payment_date2);
    $payment_date = $date;

    //header('location:fee_payment.php');

}


    $app_table_insert = "INSERT INTO $app_table_name(`uid`, `tspscid`, `refid`,
  `cand_name`, `fath_hus_name`, `mother_name`, `dob`, `gender`, `address`, `district`, `mandal`, `village`, `pincode`, `mobile`, `email`, `community`, `identication_marks`, `ex_service`, `employment`, `temp_emp`, `ncc_instructor`, `ph_status`, `eligibility_1_4_6_7_9`, `eligibility_2`, `eligibility_3`, `eligibility_5`, `hindu`, `eligibility_10`, `eligibility_11`, `eligibility_12`, `eligibility_13`, `applied_post1`, `applied_post2`, `applied_post3`, `applied_post4`, `applied_post5`, `applied_post6`, `applied_post7`, `applied_post8`, `applied_post9`, `applied_post10`, `applied_post11`, `applied_post12`, `applied_post13`, `deg_status`,
  `university`, `doa`, `deg_htnum`, `typeofstudy`, `zone`, `degree_loc`, `inter_loc`, `ssc_loc`, `cls9_loc`, `cls8_loc`, `cls7_loc`, `cls6_loc`, `journal_num`, `payment_date`, `fee`, `pref_1`, `pref_2`, `pref_3`, `pref_4`, `pref_5`, `pref_6`, `pref_7`, `pref_8`, `pref_9`, `pref_10`, `date`) VALUES('$uid','$tspscid', '$refid', '$cand_name', '$fath_hus_name', '$mother_name', '$dob', '$gender', '$address', '$district', '$mandal', '$village', '$pincode', '$mobile', '$email', '$community', '$identication_marks', '$ex_service', '$employment', '$temp_emp', '$ncc_instructor', '$ph_status', '$eligibility_1_4_6_7_9', '$eligibility_2', '$eligibility_3', '$eligibility_5', '$hindu', '$eligibility_10', '$eligibility_11', '$eligibility_12', '$eligibility_13', '$applied_post1', '$applied_post2', '$applied_post3', '$applied_post4', '$applied_post5', '$applied_post6', '$applied_post7', '$applied_post8', '$applied_post9', '$applied_post10', '$applied_post11', '$applied_post12', '$applied_post13', '$deg_status', '$university', '$doa', '$deg_htnum', '$typeofstudy', '$zone', '$degree_loc', '$inter_loc', '$ssc_loc', '$cls9_loc', '$cls8_loc', '$cls7_loc', '$cls6_loc', '$journal_num', '$payment_date', '$fee', '$pref_1', '$pref_2', '$pref_3', '$pref_4', '$pref_5', '$pref_6', '$pref_7', '$pref_8', '$pref_9', '$pref_10', '$date')";

    $app_table_status = mysqli_query($db_connection, $app_table_insert);

    if($app_table_status){
       // echo '<script>alert(" Your Form is Submitted Successfully !! ")</script><br>';/* Query Executed Successfully... and Data inserted into Table */        
    }
    else{
        echo '<script>alert(" Your Form is Not Submitted ")</script><br>'; /* Query Not Executed Successfully... and Data not inserted */ 
    }
    //header('Location:fee_payment.php');


    /* ************************************************************************ */ 
    /* Data Retrival from the DataBase*/ 
    //$ret_query_app = "SELECT * FROM $table_name_app ORDER BY id DESC LIMIT 1";
    $app_ret_query = "SELECT * FROM $app_table_name WHERE tspscid = '$tspscid'";
    $app_query_ex = mysqli_query($db_connection, $app_ret_query);
    $row_app = mysqli_num_rows($app_query_ex)>0 ;

    if($app_data = mysqli_fetch_assoc($app_query_ex)) //if($max_row = mysqli_fetch_assoc($query_ex))
    {
        
    }

/* ****** Application Page Validations Ended Here ****** */

/* *********************************************************************************** ### *********************************************************************************** */
/* ****** Application Page Images Validations Starts Here ****** */

$db_connection = mysqli_connect("localhost","root", "", "group2_db") or die("Error in Connecting DataBase");
$img_Table_Name = "candidate_images";
$img_table_create = "CREATE TABLE IF NOT EXISTS $img_Table_Name(`id` INT(10) NOT NULL AUTO_INCREMENT, `tspscid` VARCHAR(255) NOT NULL, `cand_image` VARCHAR(255) NOT NULL, `cand_sign` VARCHAR(255) NOT NULL, PRIMARY KEY(`id`))";

$img_Table_query = mysqli_query($db_connection, $img_table_create);

if(!$img_Table_query){
    echo '<script>alert(" Table is Not Created ")</script><br>';
}else{
    //echo '<script>alert(" Table is Created ")</script><br>';
}


/* ########################################################################################### */ 
 /* To Create a Directory if it is not Available in Local Drive*/ 
if (!file_exists($img_Table_Name)) {
    mkdir($img_Table_Name, 0777, true);
    echo '<script>alert("Folder is Created") <br></script>';
}
/* #################################################################################################### */
/* Checking whether the Submit Button is Clicked or Not*/ 
if(isset($_REQUEST['app_submit'])){

    $cand_image = $_FILES['cand_image']['name'];
    $cand_sign = $_FILES['cand_sign']['name'];
    if(isset($_REQUEST['tspscid'])){
    $tspscid = $_REQUEST['tspscid'];
    }
    

    $targetfile = "$img_Table_Name/".$tspscid.'_'.basename($_FILES['cand_image']['name']);
    $targetfile_sign = "$img_Table_Name/".$tspscid.'_'.basename($_FILES['cand_sign']['name']);

 $img_query_insert = "INSERT INTO $img_Table_Name(tspscid, cand_image, cand_sign) VALUES('$tspscid', '$cand_image', '$cand_sign')";
 
 $img_status = mysqli_query($db_connection,$img_query_insert);
    if($img_status){
       // echo '<script>alert(" Your Table Data is Submitted Successfully !! ")</script><br>';/* Query Executed Successfully... and Data inserted into Table */

        move_uploaded_file($_FILES['cand_image']['tmp_name'], $targetfile);
        move_uploaded_file($_FILES['cand_sign']['tmp_name'], $targetfile_sign);
    }
    else{
        echo '<script>alert(" Your Table Data is Not Submitted ")</script><br>'; /* Query Not Executed Successfully... and Data not inserted */ 
    }

    /* #################################################################################################### */
/* Retriving the data  Frrom the Database  According to the User information*/ 

//$ret_query_imgTable = "SELECT * FROM $img_Table_Name ORDER BY id DESC";
$ret_query_imgTable = "SELECT * FROM $img_Table_Name WHERE tspscid='$tspscid' /*AND mobile='$mobile'*/";
$query_ex_imgTable = mysqli_query($db_connection, $ret_query_imgTable);
//$row = mysqli_num_rows($query_ex_imgTable)>0 ;

if($img_data = mysqli_fetch_assoc($query_ex_imgTable))
{

}
 
}


/* ****** Application Page Images Validations Ended Here ****** */

/* *********************************************************************************** ### *********************************************************************************** */


/* *********************************************************************************** ### *********************************************************************************** */
/* ****** edit Page Validations Starts Here ****** */
if(isset($_REQUEST['edit_submit'])){

    
    $uid = $_REQUEST['uid'];
    $tspscid = $_REQUEST['tspscid'];
    $refid = $app_data[refid];
    $cand_name = $_REQUEST['cand_name'];
    $fath_hus_name = $_REQUEST['fath_hus_name'];
    $mother_name = $_REQUEST['mother_name'];
    $dob = $_REQUEST['dob'];
    $gender = $_REQUEST['gender'];
    $address = $_REQUEST['address'];
    $district = $_REQUEST['district'];
    $mandal = $_REQUEST['mandal'];
    $village = $_REQUEST['village'];
    $pincode = $_REQUEST['pincode'];
    $mobile = $_REQUEST['mobile'];
    $email = $_REQUEST['email'];
    $community = $_REQUEST['community'];
    $identication_marks = $_REQUEST['identication_marks'];
    $ex_service = $_REQUEST['ex_service'];
    $employment = $_REQUEST['employment'];
    $temp_emp = $_REQUEST['temp_emp'];
    $ncc_instructor = $_REQUEST['ncc_instructor'];
    $ph_status = $_REQUEST['ph_status'];

    $eligibility_1_4_6_7_9 = $_REQUEST['eligibility_1_4_6_7_9'];
    $eligibility_2 = $_REQUEST['eligibility_2'];
    $eligibility_3 = $_REQUEST['eligibility_3'];
    $eligibility_5 = $_REQUEST['eligibility_5'];
    $hindu = $_REQUEST['hindu'];
    $eligibility_10 = $_REQUEST['eligibility_10'];
    $eligibility_11 = $_REQUEST['eligibility_11'];
    $eligibility_12 = $_REQUEST['eligibility_12'];
    $eligibility_13 = $_REQUEST['eligibility_13'];

    $applied_post1 = $_REQUEST['applied_post1'];
    $applied_post2 = $_REQUEST['applied_post2'];
    $applied_post3 = $_REQUEST['applied_post3'];
    $applied_post4 = $_REQUEST['applied_post4'];
    $applied_post5 = $_REQUEST['applied_post5'];
    $applied_post6 = $_REQUEST['applied_post6'];
    $applied_post7 = $_REQUEST['applied_post7'];
    $applied_post8 = $_REQUEST['applied_post8'];
    $applied_post9 = $_REQUEST['applied_post9'];
    $applied_post10 = $_REQUEST['applied_post10'];
    $applied_post11 = $_REQUEST['applied_post11'];
    $applied_post12 = $_REQUEST['applied_post12'];
    $applied_post13 = $_REQUEST['applied_post13'];
    
    $university = $_REQUEST['university'];
    $doa = $_REQUEST['doa'];
    $deg_htnum = $_REQUEST['deg_htnum'];
    $typeofstudy = $_REQUEST['typeofstudy'];
    $zone = $_REQUEST['zone'];

    $degree_loc = $_REQUEST['degree_loc'];
    $inter_loc = $_REQUEST['inter_loc'];
    $ssc_loc = $_REQUEST['ssc_loc'];
    $cls9_loc = $_REQUEST['cls9_loc'];
    $cls8_loc = $_REQUEST['cls8_loc'];
    $cls7_loc = $_REQUEST['cls7_loc'];
    $cls6_loc = $_REQUEST['cls6_loc'];

    $journal_num1 = $_REQUEST['tspscid'];
    $journal_num = substr($journal_num1, 5,strlen($journal_num1)-1);
    $payment_date = $_REQUEST['payment_date'];
    $fee = $_REQUEST['fee'];

    $pref_1 = $_REQUEST['pref_1'];
    $pref_2 = $_REQUEST['pref_2'];
    $pref_3 = $_REQUEST['pref_3'];
    $pref_4 = $_REQUEST['pref_4'];
    $pref_5 = $_REQUEST['pref_5'];
    $pref_6 = $_REQUEST['pref_6'];
    $pref_7 = $_REQUEST['pref_7'];
    $pref_8 = $_REQUEST['pref_8'];
    $pref_9 = $_REQUEST['pref_9'];
    $pref_10 = $_REQUEST['pref_10'];

    $deg_status = $_REQUEST['deg_status'];


$app_update = "UPDATE $table_name_app SET `uid`='$uid',`tspscid`='$tspscid',`refid`='$refid',`cand_name`='$cand_name',`fath_hus_name`='$fath_hus_name',`mother_name`='$mother_name',`dob`='$dob',`gender`='$gender',`address`='$address',`district`='$district',`mandal`='$mandal',`village`='$village',`pincode`='$pincode',`mobile`='$mobile',`email`='$email',`community`='$community',`identication_marks`='$identication_marks',`ex_service`='$ex_service',`employment`='$employment',`temp_emp`='$temp_emp',`ncc_instructor`='$ncc_instructor',`ph_status`='$ph_status',`eligibility_1_4_6_7_9`='$eligibility_1_4_6_7_9',`eligibility_2`='$eligibility_2',`eligibility_3`='$eligibility_3',`eligibility_5`='$eligibility_5',`hindu`='$hindu',`eligibility_10`='$eligibility_10',`eligibility_11`='$eligibility_11',`eligibility_12`='$eligibility_12',`eligibility_13`='$eligibility_13',`applied_post1`='$applied_post1',`applied_post2`='$applied_post2',`applied_post3`='$applied_post3',`applied_post4`='$applied_post4',`applied_post5`='$applied_post5',`applied_post6`='$applied_post6',`applied_post7`='$applied_post7',`applied_post8`='$applied_post8',`applied_post9`='$applied_post9',`applied_post10`='$applied_post10',`applied_post11`='$applied_post11',`applied_post12`='$applied_post12',`applied_post13`='$applied_post13',`deg_status`='$deg_status',`university`='$university',`doa`='$doa',`deg_htnum`='$deg_htnum',`typeofstudy`='$typeofstudy',`zone`='$zone',`degree_loc`='$degree_loc',`inter_loc`='$inter_loc',`ssc_loc`='$ssc_loc',`cls9_loc`='$cls9_loc',`cls8_loc`='$cls8_loc',`cls7_loc`='$cls7_loc',`cls6_loc`='$cls6_loc',`journal_num`='$journal_num',`payment_date`='$payment_date',`fee`='$fee',`pref_1`='$pref_1',`pref_2`='$pref_2',`pref_3`='$pref_3',`pref_4`='$pref_4',`pref_5`='$pref_5',`pref_6`='$pref_6',`pref_7`='$pref_7',`pref_8`='$pref_8',`pref_9`='$pref_9',`pref_10`='$pref_10' ";


    $app_update_status = mysqli_query($db_connection, $app_update);

    if($app_update_status){
        echo '<script>alert(" Your Data is Submitted Successfully !! ")</script><br>';/* Query Executed Successfully... and Data inserted into Table */
        ?>
        <META HTTP-EQUIV = "Refresh" CONTENT = "0"; URL="../Edit_page.php">
        <?php

        
    }
    else{
        echo '<script>alert(" Your Form is Not Submitted ")</script><br>'; /* Query Not Executed Successfully... and Data not inserted */ 
    }
}
/* ****** Edit Page Validations Ended Here ****** */ 

/* *********************************************************************************** ### *********************************************************************************** */
/* ****** Logout Page Validations Starts Here ****** */

if(isset($_REQUEST['logout'])){

if (!isset($_SESSION)) { session_start(); }
    $_SESSION = array(); 
    session_destroy(); 
    header('location: Registration.php'); // Or wherever you want to redirect
    exit();

}

/* ****** Logout Page Validations Ended Here ****** */ 
}
?>