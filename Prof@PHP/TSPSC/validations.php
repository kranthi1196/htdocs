<?php
/* Registration Page Validation Starts Here..... */
ini_set('display_errors', 1); ini_set('log_errors',1);
error_reporting( E_ERROR | E_WARNING | E_PARSE);

$db = "group2_db";

$db_connection1 = mysqli_query(mysqli_connect("localhost","root",""), "CREATE DATABASE IF NOT EXISTS $db");

$db_connection = mysqli_connect("localhost","root","", $db) or die('Error Connecting the DataBase');

$reg_table_name = "Registration_Details";
$reg_table_create = "CREATE TABLE IF NOT EXISTS $reg_table_name(`id` INT(10) NOT NULL AUTO_INCREMENT, `fname` VARCHAR(255) NOT NULL, `lname` VARCHAR(255) NOT NULL, `mobile` VARCHAR(255) NOT NULL, `email` VARCHAR(255) NOT NULL, `pass` VARCHAR(255) NOT NULL, `conpass` VARCHAR(255) NOT NULL, `date` VARCHAR(255) NOT NULL, PRIMARY KEY(`id`))";
mysqli_query($db_connection, $reg_table_create);

if(isset($_REQUEST['reg_submit'])){
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $mobile = $_REQUEST['mobile'];
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass']; 
    $conpass = $_REQUEST['conpass'];  
    
    date_default_timezone_set('Asia/Kolkata');
    //$timestamp = date("Y-m-d H:i:s");
    $date = date("Y-m-d H:i:s");

if(!empty($_REQUEST['fname']) && !empty($_REQUEST['lname']) && !empty($_REQUEST['mobile']) && !empty($_REQUEST['email']) && !empty($_REQUEST['pass']) && !empty($_REQUEST['conpass'])){
   
   if($pass != $conpass){
    echo '<script>alert("Password and Confirm Password is not Same")</script>';
   }else{
    
    $reg_insert = "INSERT INTO $reg_table_name(`fname`, `lname`, `mobile`, `email`, `pass`, `conpass`, `date`) VALUES('$fname', '$lname', '$mobile', '$email', '$pass', '$conpass', '$date')";
    $insert_query = mysqli_query($db_connection, $reg_insert);

        if(!$insert_query){
        echo '<script>alert("Data Not Inserted into Table...")</script>';
        }else{
            
            print "<script>alert('Congratulations!!! You have Successfully Registered As  $fname $lname')</script>";
            //header('Location:login.php');
            //print "<h3></h3>";
        }
   }   
}
}
else{ 
    echo '<script>alert("Please Make Sure to Fill all the required Fields !!!")</script>';
}
/* Registration Page Validations Ended Here */ 

/* **************************************************** @@@ **************************************************** */ 

/* Login Page Validations Started Here */ 

$reg_table_name = "registration_Details";

if(isset($_REQUEST['register'])){
    header('Location:Registration.php');
}

if(isset($_REQUEST['login'])){

    $email = $_REQUEST['email_log'];
    $pass = $_REQUEST['pass_log'];

    if(empty($email)){
        Print "<script>alert('Email is Required...')</script>";
    }
    if(empty($pass)){
        Print "<script>alert('Password is Required...')</script>";
    }
    
    if(!empty($email) && !empty($pass)){

        $reg_fetch_query = "SELECT * FROM $reg_table_name WHERE email='$email' AND pass='$pass'";
        $reg_fetch_query_ex = mysqli_query($db_connection, $reg_fetch_query);
        $row_reg = mysqli_num_rows($reg_fetch_query_ex)>0;

        if($reg_data = mysqli_fetch_assoc($reg_fetch_query_ex))
        {
        }
        if( $reg_data['email'] == $email && $reg_data['pass'] == $pass ){
            print "<script>alert('Congratulations!!! You are Successfully Logged In As $reg_data[fname].$reg_data[lname]')</script>";
            header('Location:Application.php');   
        }
        else{
            // This Block is Failed to  Executed
            print "<script>alert('Your Login is Failed...Your Details are not matched with our Data Base')</script>";
        }
        
    }/*
    else{
        Print "<script>alert('Please Make sure to fill all the Details to Login... ')</script>";
    }*/   
}

/* Login Page Validations Ended Here */

/* **************************************************** @@@ **************************************************** */ 

/* Application Page Validations Started Here */ 

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
  cand_image` VARCHAR(255) NOT NULL,
  `cand_sign` VARCHAR(255) NOT NULL)"; 

$app_table_status = mysqli_query($db_connection,$app_table_create);
/*
if (!file_exists($app_table_name)) {
    mkdir($app_table_name, 0777, true);
    echo '<script>alert("Folder is Created") <br></script>';
}*/

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

   
        if(strval($community)=="OBC"){
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
$refid = str_replace(" ", "", $refid);
$payment_date = $date;
    

    
} 
if(!empty($uid) && !empty($tspscid) && !empty($refid)){

    $app_table_insert = "INSERT INTO $app_table_name(`uid`, `tspscid`, `refid`,
  `cand_name`, `fath_hus_name`, `mother_name`, `dob`, `gender`, `address`, `district`, `mandal`, `village`, `pincode`, `mobile`, `email`, `community`, `identication_marks`, `ex_service`, `employment`, `temp_emp`, `ncc_instructor`, `ph_status`, `eligibility_1_4_6_7_9`, `eligibility_2`, `eligibility_3`, `eligibility_5`, `hindu`, `eligibility_10`, `eligibility_11`, `eligibility_12`, `eligibility_13`, `applied_post1`, `applied_post2`, `applied_post3`, `applied_post4`, `applied_post5`, `applied_post6`, `applied_post7`, `applied_post8`, `applied_post9`, `applied_post10`, `applied_post11`, `applied_post12`, `applied_post13`, `deg_status`,
  `university`, `doa`, `deg_htnum`, `typeofstudy`, `zone`, `degree_loc`, `inter_loc`, `ssc_loc`, `cls9_loc`, `cls8_loc`, `cls7_loc`, `cls6_loc`, `journal_num`, `payment_date`, `fee`, `pref_1`, `pref_2`, `pref_3`, `pref_4`, `pref_5`, `pref_6`, `pref_7`, `pref_8`, `pref_9`, `pref_10`, `date`) VALUES('$uid','$tspscid', '$refid', '$cand_name', '$fath_hus_name', '$mother_name', '$dob', '$gender', '$address', '$district', '$mandal', '$village', '$pincode', '$mobile', '$email', '$community', '$identication_marks', '$ex_service', '$employment', '$temp_emp', '$ncc_instructor', '$ph_status', '$eligibility_1_4_6_7_9', '$eligibility_2', '$eligibility_3', '$eligibility_5', '$hindu', '$eligibility_10', '$eligibility_11', '$eligibility_12', '$eligibility_13', '$applied_post1', '$applied_post2', '$applied_post3', '$applied_post4', '$applied_post5', '$applied_post6', '$applied_post7', '$applied_post8', '$applied_post9', '$applied_post10', '$applied_post11', '$applied_post12', '$applied_post13', '$deg_status', '$university', '$doa', '$deg_htnum', '$typeofstudy', '$zone', '$degree_loc', '$inter_loc', '$ssc_loc', '$cls9_loc', '$cls8_loc', '$cls7_loc', '$cls6_loc', '$journal_num', '$payment_date', '$fee', '$pref_1', '$pref_2', '$pref_3', '$pref_4', '$pref_5', '$pref_6', '$pref_7', '$pref_8', '$pref_9', '$pref_10', '$date')";

    $app_insert_query = mysqli_query($db_connection, $app_table_insert);
}
    if($app_insert_query){
       // echo '<script>alert(" Your Form is Submitted Successfully !! ")</script><br>';/* Query Executed Successfully... and Data inserted into Table */

        
    }
    else{
        //print "<script>alert('Please Fill all the Required Fields')</script>";
        //echo '<script>alert(" Your Form is Not Submitted ")</script><br>'; /* Query Not Executed Successfully... and Data not inserted */ 
    }


    /* ************************************************************************ */ 
    /* Data Retrival from the DataBase*/ 

    $app_fetch_query = "SELECT * FROM $app_table_name WHERE tspscid = '$tspscid'";
    $app_fetch_query_ex = mysqli_query($db_connection, $app_fetch_query);
    $row_app = mysqli_num_rows($app_fetch_query_ex)>0 ;

    if($app_data = mysqli_fetch_assoc($app_fetch_query_ex))
    {
        //print "<p>This is from Database Results : TSPSC Id is : $app_data[tspscid]</p>";
    }

/* Application Page Validations Ended Here */

/* **************************************************** @@@ **************************************************** */ 

/* Application Images Page Validations Started Here */ 

$img_table_name = "candidate_images";
$img_table_create = "CREATE TABLE IF NOT EXISTS $img_table_name(`id` INT(10) NOT NULL AUTO_INCREMENT, `tspscid` VARCHAR(255) NOT NULL, `cand_image` VARCHAR(255) NOT NULL, `cand_sign` VARCHAR(255) NOT NULL, `date` VARCHAR(255) NOT NULL, PRIMARY KEY(`id`))";

$img_table_status = mysqli_query($db_connection, $img_table_create);

if(!$img_table_status){
    echo '<script>alert(" Table is Not Created ")</script><br>';
}else{
    //echo '<script>alert(" Table is Created ")</script><br>';
}

 /* To Create a Directory if it is not Available in Local Drive*/ 
if (!file_exists($img_table_name)) {
    mkdir($img_table_name, 0777, true);
    echo '<script>alert("Folder is Created") <br></script>';
}
/* Checking whether the Submit Button is Clicked or Not*/ 
if(isset($_REQUEST['app_submit'])){

    $cand_image = $_FILES['cand_image']['name'];
    $cand_sign = $_FILES['cand_sign']['name'];
    if(isset($_REQUEST['tspscid'])){
    $tspscid = $_REQUEST['tspscid'];
    }
    
   // $targetfile = "$table_name/".$tspscid.'_'.basename($cand_image);

    $targetfile = "$img_table_name/".$tspscid.'_'.basename($_FILES['cand_image']['name']);
    $targetfile_sign = "$img_table_name/".$tspscid.'_'.basename($_FILES['cand_sign']['name']);

 $img_table_insert = "INSERT INTO $img_table_name(`tspscid`, `cand_image`, `cand_sign`, `date`) VALUES('$tspscid', '$cand_image', '$cand_sign', '$date')";
 
 $img_insert_query = mysqli_query($db_connection,$img_table_insert);
    if($img_insert_query){
       // echo '<script>alert(" Your Table Data is Submitted Successfully !! ")</script><br>';/* Query Executed Successfully... and Data inserted into Table */

        move_uploaded_file($_FILES['cand_image']['tmp_name'], $targetfile);
        move_uploaded_file($_FILES['cand_sign']['tmp_name'], $targetfile_sign);
    }
    else{
        echo '<script>alert(" Your Table Data is Not Submitted ")</script><br>'; /* Query Not Executed Successfully... and Data not inserted */ 
    }

    /* #################################################################################################### */
/* Retriving the data  From the Database  According to the User information*/ 

//$ret_query_imgTable = "SELECT * FROM $img_table_name ORDER BY id DESC";
$img_fetch_query = "SELECT * FROM $img_table_name WHERE tspscid = '$tspscid' /*AND mobile='$mobile'*/";
$img_fetch_query_ex = mysqli_query($db_connection, $img_fetch_query);
$row_img = mysqli_num_rows($img_fetch_query_ex)>0 ;

if($img_data = mysqli_fetch_assoc($img_fetch_query_ex))
{
    // print "This Image is from Database Results : Candidate Photo is :<img src = '$img_table_name/".$tspscid.'_'.$img_data['cand_image']."'>";
    
    
}
 
}

/* Application Page Images Validations Ended Here */

/* **************************************************** @@@ **************************************************** */ 

/* Preview Page Validations Started Here */ 

$db_connection = mysqli_connect("localhost","root","","group2_db") or die('Error Connecting the DataBase');
$app_table_name = "candidate_details";
$img_table_name = "candidate_images";

$app_fetch_query1 = "SELECT * FROM $app_table_name WHERE tspscid = '$tspscid'";
$app_fetch_query_ex1 = mysqli_query($db_connection, $app_fetch_query1);
$row_app1 = mysqli_num_rows($app_fetch_query_ex1)>0 ;

if($app_data1 = mysqli_fetch_assoc($app_fetch_query_ex1))
{

}

$img_fetch_query1 = "SELECT * FROM $img_table_name WHERE tspscid = '$tspscid' /*AND mobile='$mobile'*/";
$img_fetch_query_ex1 = mysqli_query($db_connection, $img_fetch_query1);
$row_img1 = mysqli_num_rows($img_fetch_query_ex1)>0 ;

if($img_data1 = mysqli_fetch_assoc($img_fetch_query_ex1))
{
    // print "This Image is from Database Results : Candidate Photo is :<img src = '$img_table_name/".$tspscid.'_'.$img_data['cand_image']."'>";   
}

/* Application Page Images Validations Ended Here */

/* **************************************************** @@@ **************************************************** */ 

/* Fee Payment Page Validations Started Here */ 
?>