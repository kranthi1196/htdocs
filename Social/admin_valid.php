<?php
error_reporting( E_ERROR | E_WARNING | E_PARSE);
/* mysqli_report(MYSQLI_REPORT_OFF);

$server = "localhost";
$username = "root";
$password = "";
$db_name = "linkup_db";

$db = "CREATE DATABASE IF NOT EXISTS $db_name";
$connect = @mysqli_connect($server,$username,$password);
$db_query = mysqli_query($connect,$db);

$connection = @mysqli_connect($server,$username,$password,$db_name);
if(mysqli_connect_errno()){
    echo "Failed to establish a connection to the database. Please check your connection settings<br>";
    echo "Error Code: ".mysqli_connect_errno();
    exit();
} */
include('db.php');



/* Creating Admin Details Table */
$admin = "admin_info";
$admin_tab = "CREATE TABLE IF NOT EXISTS $admin (
    `id` INT(10) NOT NULL AUTO_INCREMENT,
    `adminfirstname` varchar(255) NOT NULL, 
    `adminlastname` varchar(255) NOT NULL, 
    `adminemail` varchar(255) NOT NULL,
    `adminremail` varchar(255) NOT NULL, 
    `adminpassword` varchar(255) NOT NULL,
    `adminsex` varchar(255) NOT NULL,
    `dob` varchar(255) NOT NULL,  
    `createddate` varchar(255) NOT NULL, 
    PRIMARY KEY (`id`)
  )";
$admin_query = mysqli_query($connection,$admin_tab);

/* Fetching the Data from the Admin Registration Form */ 
 if(isset($_REQUEST['adminsignup'])){
  
$adminfirstname = $_REQUEST['adminfirstname'];
$adminlastname = $_REQUEST['adminlastname']; 
$adminemail = $_REQUEST['adminemail'];
$adminremail = $_REQUEST['adminremail'];
$adminpassword = $_REQUEST['adminpassword'];
$adminpassword_dec = base64_encode($_REQUEST['adminpassword']);
$adminsex = $_REQUEST['adminsex'];
$dob = $_REQUEST['adminday'].'-'.$_REQUEST['adminmonth'].'-'.$_REQUEST['adminyear'];
date_default_timezone_set('Asia/Kolkata');
$createddate = date("Y-m-d H:i:s");
} 

/* Pushing data into Admin Details Table */

$admin_ins = "INSERT INTO `$admin`(`adminfirstname`, `adminlastname`, `adminemail`, `adminremail`, `adminpassword`, `adminsex`, `dob`, `createddate`) VALUES('$adminfirstname', '$adminlastname', '$adminemail', '$adminremail', '$adminpassword_dec', '$adminsex', '$dob', '$createddate')";
$insert_query = mysqli_query($connection,$admin_ins);

if($insert_query){
    //echo "<script>alert('Data inserted')</script>";
    header('location:adminsignup_success.php');
}
else{
    echo '<script>alert("Sorry! Please try once again")</script>';
    header('location:admin_reg.php');
}

$admin_ret = "SELECT * FROM `$admin` WHERE adminemail='$adminemail' AND adminpassword = '$adminpassword_dec'";
$ret_data = mysqli_query($connection, $admin_ret);

$row_admin = mysqli_num_rows($ret_data)>0 ;
if($admin_data = mysqli_fetch_assoc($ret_data)){
    
    //echo '<br><br><br>'.$admin_data['adminfirstname'];
}
/* =================================================================== Admin Login Validations ============================================================= */

mysqli_report(MYSQLI_REPORT_OFF);






mysqli_close($connection);
?>