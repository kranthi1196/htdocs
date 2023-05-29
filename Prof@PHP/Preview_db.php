<!-- /* ********************************************* All the Back end Code will be followed here ********************************************* */ -->
<?php
/* DataBase Creation */ 
$db_name = "group2_db";
$connection = mysqli_connect("localhost","root", "",);
$db = "CREATE DATABASE IF NOT EXISTS $db_name";
$db_query = mysqli_query($connection,$db);
if(!$db_query){
    echo '<script>alert("Database is not created..")<br></script>';
}
else{ 
    //echo'<script>alert("Table is Successfully created.. as \"$db_name\" cand_photos")<br></script>';
}

/* ********************************************* All the Back end Code will be followed here ********************************************* */
/* Table Creation in Above DataBase*/ 

$db_connection = mysqli_connect("localhost", "root", "", $db_name);
$table_name = "candidate_details";
$table = "CREATE TABLE IF NOT EXISTS $table_name(`id` INT(10) NOT NULL AUTO_INCREMENT, `uid` VARCHAR(255) NOT NULL, `tspscid` VARCHAR(255) NOT NULL, `refid` VARCHAR(255) NOT NULL, `cand_name` VARCHAR(255) NOT NULL, `fath_hus_name` VARCHAR(255) NOT NULL,  `mother_name` VARCHAR(255) NOT NULL,  `dob` VARCHAR(255) NOT NULL,  `gender` VARCHAR(255) NOT NULL,  `address` VARCHAR(255) NOT NULL,  `district` VARCHAR(255) NOT NULL,  `mandal` VARCHAR(255) NOT NULL,  `village` VARCHAR(255) NOT NULL,  `pincode` VARCHAR(255) NOT NULL,  `mobile` VARCHAR(255) NOT NULL,  `email` VARCHAR(255) NOT NULL,  `community` VARCHAR(255) NOT NULL,  `identication_marks` VARCHAR(255) NOT NULL,  `ex_service` VARCHAR(5) NOT NULL,  `employment` VARCHAR(5) NOT NULL,  `temp_emp` VARCHAR(5) NOT NULL,  `ncc_instructor` VARCHAR(5) NOT NULL,  `ph_status` VARCHAR(5) NOT NULL,  `eligibility_1_4_6_7_9` VARCHAR(5) NOT NULL,  `eligibility_2` VARCHAR(5) NOT NULL,  `eligibility_3` VARCHAR(5) NOT NULL,  `eligibility_5` VARCHAR(5) NOT NULL,  `hindu` VARCHAR(5) NOT NULL,  `eligibility_10` VARCHAR(5) NOT NULL,  `eligibility_11` VARCHAR(5) NOT NULL,  `eligibility_12` VARCHAR(5) NOT NULL,  `eligibility_13` VARCHAR(5) NOT NULL,  `applied_post1` VARCHAR(255) NOT NULL,  `applied_post2` VARCHAR(255) NOT NULL,  `applied_post3` VARCHAR(255) NOT NULL,  `applied_post4` VARCHAR(255) NOT NULL,  `applied_post5` VARCHAR(255) NOT NULL,  `applied_post6` VARCHAR(255) NOT NULL,  `applied_post7` VARCHAR(255) NOT NULL,  `applied_post8` VARCHAR(255) NOT NULL,  `applied_post9` VARCHAR(255) NOT NULL,  `applied_post10` VARCHAR(255) NOT NULL,  `applied_post11` VARCHAR(255) NOT NULL,  `applied_post12` VARCHAR(255) NOT NULL,  `applied_post13` VARCHAR(255) NOT NULL,  `qualification` VARCHAR(255) NOT NULL,  `university` VARCHAR(255) NOT NULL,  `doa` VARCHAR(255) NOT NULL,  `deg_htnum` VARCHAR(255) NOT NULL,  `typeofstudy` VARCHAR(255) NOT NULL,  `zone` VARCHAR(255) NOT NULL,  `degree_loc` VARCHAR(255) NOT NULL,  `inter_loc` VARCHAR(255) NOT NULL,  `ssc_loc` VARCHAR(255) NOT NULL,  `cls9_loc` VARCHAR(255) NOT NULL,  `cls8_loc` VARCHAR(255) NOT NULL,  `cls7_loc` VARCHAR(255) NOT NULL, `cls6_loc` VARCHAR(255) NOT NULL,  `journal_num` VARCHAR(255) NOT NULL,  `payment_date` VARCHAR(255) NOT NULL,  `fee` VARCHAR(255) NOT NULL,  `pref_1` VARCHAR(255) NOT NULL,  `pref_2` VARCHAR(255) NOT NULL,  `pref_3` VARCHAR(255) NOT NULL,  `pref_4` VARCHAR(255) NOT NULL,  `pref_5` VARCHAR(255) NOT NULL,  `pref_6` VARCHAR(255) NOT NULL,  `pref_7` VARCHAR(255) NOT NULL,  `pref_8` VARCHAR(255) NOT NULL,  `pref_9` VARCHAR(255) NOT NULL,  `pref_10` VARCHAR(255) NOT NULL,  `photo` VARCHAR(255) NOT NULL,  `sign` VARCHAR(255) NOT NULL, `time` VARCHAR(255) NOT NULL, PRIMARY KEY(`id`))";

$table_query = mysqli_query($db_connection,$table);



/* ********************************************* All the Back end Code will be followed here ********************************************* */
/* To Create a Directory for Candidates Images if it is not existed in Local Drive*/
if(!file_exists('./candidate_images')){
    mkdir('./candidate_images', 0777, true);
    echo '<script>alert("Folder is Created") <br></script>';
}
/* ********************************************* All the Back end Code will be followed here ********************************************* */
/* Checking whether the Submit Button is Clicked or Not*/ 
if(isset($_REQUEST['submit'])){

    $uid = $_REQUEST['uid'];
    $tspscid = $_REQUEST['tspscid'];
    $refid = $_REQUEST['refid'];
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
    $qualification = $_REQUEST['qualification'];
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
    $photo = $_FILES['photo']['name'];
    $sign = $_FILES['sign']['name'];
    
    date_default_timezone_set('Asia/Kolkata');
    $timestamp = date("Y-m-d H:i:s");

    $date = $timestamp;
    
    $targetfile = "$table_name/".basename($photo);
    $targetfile_sign = "$table_name/".basename($sign);

    //$eligibility_10 = $_REQUEST['eligibility_10'];
    
    $query = "INSERT INTO $table_name(`uid`, `tspscid`, `refid`, `cand_name`, `fath_hus_name`, `mother_name`, `dob`, `gender`, `address`, `district`, `mandal`, `village`, `pincode`, `mobile`, `email`, `community`, `identication_marks`, `ex_service`, `employment`, `temp_emp`, `ncc_instructor`, `ph_status`, `eligibility_1_4_6_7_9`, `eligibility_2`, `eligibility_3`, `eligibility_5`, `hindu`, `eligibility_10`, `eligibility_11`, `eligibility_12`, `eligibility_13`, `applied_post1`, `applied_post2`, `applied_post3`, `applied_post4`, `applied_post5`, `applied_post6`, `applied_post7`, `applied_post8`, `applied_post9`, `applied_post10`, `applied_post11`, `applied_post12`, `applied_post13`, `qualification`, `university`, `doa`, `deg_htnum`, `typeofstudy`, `zone`, `degree_loc`, `inter_loc`, `ssc_loc`, `cls9_loc`, `cls8_loc`, `cls7_loc`, `cls6_loc`, `fee`, `pref_1`, `pref_2`, `pref_3`, `pref_4`, `pref_5`, `pref_6`, `pref_7`, `pref_8`, `pref_9`, `pref_10`, `photo`, `sign`, `date` ) VALUES('$uid', '$tspscid', '$refid', '$cand_name', '$fath_hus_name', '$mother_name', '$dob', '$gender', '$address', '$district', '$mandal', '$village', '$pincode', '$mobile', '$email', '$community', '$identication_marks', '$ex_service', '$employment', '$temp_emp', '$ncc_instructor', '$ph_status', '$eligibility_1_4_6_7_9', '$eligibility_2', '$eligibility_3', '$eligibility_5', '$hindu', '$eligibility_10', '$eligibility_11', '$eligibility_12', '$eligibility_13', '$applied_post1', '$applied_post2', '$applied_post3', '$applied_post4', '$applied_post5', '$applied_post6', '$applied_post7', '$applied_post8', '$applied_post9', '$applied_post10', '$applied_post11', '$applied_post12', '$applied_post13', '$qualification', '$university', '$doa', '$deg_htnum', '$typeofstudy', '$zone', '$degree_loc', '$inter_loc', '$ssc_loc', '$cls9_loc', '$cls8_loc', '$cls7_loc', '$cls6_loc', '$fee', '$pref_1', '$pref_2', '$pref_3', '$pref_4', '$pref_5', '$pref_6', '$pref_7', '$pref_8', '$pref_9', '$pref_10', '$photo', '$sign', '$date')";

$status = mysqli_query($db_connection, $query);

if(!$status){
    echo '<script>alert(" Your Form is not Submitted Successfully !! ")</script><br>';/* Query Executed Successfully... and Data inserted into Table */
}
else{
    echo '<script>alert(" Your Form is Not Submitted ")</script><br>'; /* Query Not Executed Successfully... and Data not inserted */ 
}
/* ********************************************* All the Back end Code will be followed here ********************************************* */
/* Retriving the data  Frrom the Database  According to the User information*/ 

$ret_query = "SELECT 8 FROM $table_name ORDER BY id DESC LIMIT 1";
$query_exec = mysqli_query($db_connection, $ret_query);
$row_max = mysqli_num_rows($query_exec)>0;
if($row = mysqli_fetch_assoc($query_exec)){
    //echo ' Candidate First Name is : '.$row['FirstName'].'<br>';


}



}























?>
