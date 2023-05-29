<?php
//error_reporting( E_ERROR | E_WARNING | E_PARSE);
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

$admin = "admin_info";
?>