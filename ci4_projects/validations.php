<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$db_name = "ci4_project";
$connection = mysqli_connect("localhost", "root", "", );
$db = "CREATE DATABASE IF NOT EXISTS $db_name";
$db_query = mysqli_query($connection, $db);
$db_connection = mysqli_connect("localhost", "root", "", $db_name);

$table_name = "admin_table";
$table_create = "CREATE TABLE IF NOT EXISTS $table_name(`id` INT(10) NOT NULL AUTO_INCREMENT, `fname` VARCHAR(255) NOT NULL, `lname` VARCHAR(255) NOT NULL, `mobile` VARCHAR(255) NOT NULL, `email` VARCHAR(255) NOT NULL, `pass` VARCHAR(255) NOT NULL, `conpass` VARCHAR(255) NOT NULL, `date` VARCHAR(255) NOT NULL, PRIMARY KEY(`id`))";

$table_query = mysqli_query($db_connection, $table_create);

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
}

$table_insert = "INSERT INTO $table_name(`fname`, `lname`, `mobile`, `email`, `pass`, `conpass`, `date`) VALUES('$fname', '$lname', '$mobile', '$email', '$pass', '$conpass', '$date')";

$table_insert_query = mysqli_query($db_connection, $table_insert);

/* Registration Page Validations were ended */

if(isset($_REQUEST['login'])){
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];
}

if(empty($email)){
    Print "<script>alert('Email is Required...')</script>";
}
if(empty($pass)){
    Print "<script>alert('Password is Required...')</script>";
}

if(!empty($email) && !empty($pass)){

    $reg_fetch_query = "SELECT * FROM $table_name WHERE email='$email' AND pass='$pass'";
    $reg_fetch_query_ex = mysqli_query($db_connection, $reg_fetch_query);
    $row_reg = mysqli_num_rows($reg_fetch_query_ex)>0 ;

    if($reg_data = mysqli_fetch_assoc($reg_fetch_query_ex))
    {
        if( !($reg_data['email'] == $email && $reg_data['pass'] == $pass )){
            print "<script>alert('Your Login Failed...Your Details are not matched with our DB records')</script>";
            
        }
        else{
            // This Block is Failed to  Execute
            print "<script>alert('Congratulations!!! You are Successfully Logged In As $reg_data[fname] $reg_data[lname]')</script>";   
        }
        
    }

}

/* Login Page Validations were ended here */

?>