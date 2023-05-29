<?php
error_reporting( E_ERROR | E_WARNING | E_PARSE);
mysqli_report(MYSQLI_REPORT_OFF);

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
}
/* Creating Admin Details Table */
$admin = "admin_info";
$admin_tab = "CREATE TABLE IF NOT EXISTS $admin (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `adminfirstname` varchar(200) NOT NULL, 
    `adminlastname` varchar(200) NOT NULL, 
    `adminemail` varchar(200) NOT NULL,
    `adminremail` varchar(200) NOT NULL, 
    `adminpassword` varchar(200) NOT NULL,
    `adminsex` varchar(200) NOT NULL,
    `dob` varchar(200) NOT NULL,  
    `CreatedDate` varchar(200) NOT NULL, 
    PRIMARY KEY (`id`)
  )";
$admin_query = mysqli_query($connection,$admin_tab);

/* Fetching the Data from the Admin Registration Form */ 
if(isset($_REQUEST['adminsignup'])){
  
$dob = $_REQUEST['adminday'].'-'.$_REQUEST['adminmonth'].'-'.$_REQUEST['adminyear'];
$adminfirstname = $_REQUEST['adminfirstname'];
$adminlastname = $_REQUEST['adminlastname']; 
$adminemail = $_REQUEST['adminemail'];
$adminremail = $_REQUEST['adminremail'];
$adminpassword = base64_encode($_REQUEST['adminpassword']);
$adminsex = $_REQUEST['adminsex'];
date_default_timezone_set('Asia/Kolkata');
$created_date = date("Y-m-d H:i:s");



$adm_ins = "INSERT INTO $admin (`adminfirstname`, `adminlastnam`, `adminemail`, `adminremail`, `adminpassword`, `adminsex`, `dob`, `created_date`) VALUES('$adminfirstname', '$adminlastname', '$adminemail', '$adminremail', '$adminpassword', '$adminsex', '$dob', '$created_date')";
mysqli_query($connection, $adm_ins);

if(!mysqli_query($connection, $adm_ins)){
  echo "1. $adminfirstname<br>2. $adminlastname<br>3. $adminemail<br>4. $adminremail<br>5. $adminpassword<br>6. $adminsex<br>7. $dob<br>";
}
else{
  echo "Error Occured";
}

}
/* Pushing data into Admin Details Table */
  /* $adm_ins = "INSERT INTO $admin(`adminfirstname`, `adminlastname`, `adminemail`, `adminremail`, `adminpassword`, `adminsex`, `dob`, `CreatedDate`) VALUES('$adminfirstname', '$adminlastname', '$adminemail', '$adminremail', '$adminpassword', '$adminsex', '$dob', '$created_date)";
  $adm_ins_query = mysqli_query($connection,$adm_ins); }
  if($adm_ins_query){
    echo "<script>alert('Data inserted into Admin Details')<script>";
  }
  else{

} */

mysqli_close($connection);

?>