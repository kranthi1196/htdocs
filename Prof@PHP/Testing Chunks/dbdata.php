<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE); 
$db="srctest"; $table="srctable";
$con = mysqli_connect("localhost","root","");

/* Database Creation */
$createDb="CREATE DATABASE IF NOT EXISTS $db";

$dbExecute = mysqli_query($con, $createDb);

$con = mysqli_connect("localhost","root","", $db);

/* Table Creation */
$createTable="CREATE TABLE IF NOT EXISTS $table(`id` int(10) NOT NULL AUTO_INCREMENT, `fname` varchar(255)   NOT NULL, `pass` VARCHAR(255) NOT NULL, `created_time` VARCHAR(255) NOT NULL, PRIMARY KEY(`id`))";

$tableExecute = mysqli_query($con, $createTable);

/* Getting the data on submission & Sending to the database*/
if(isset($_REQUEST['submit'])){
    $fname = $_REQUEST['fname'];
    
    $pass = $_REQUEST['pass']; 
    date_default_timezone_set('Asia/Kolkata');
    $created_time = date('d-m-Y H:i:s');
    
    if(!empty($fname)&& !empty($pass)){

        $dataInsert = "INSERT INTO $table(`fname`, `pass`, `created_time`) VALUES ('$fname', '$pass', '$created_time')";

        $inserQuery = mysqli_query($con, $dataInsert);
    }
    else{
        echo "<p>Please enter all the fields in the form</p>";
    }

/* Data Retrival from the data base */

    $ret = "SELECT * FROM $table WHERE fname = '$fname'";
    $retExecute = mysqli_query($con, $ret);
    $rows = mysqli_num_rows($retExecute)>0;
    
    if($row_data = mysqli_fetch_array($retExecute)){

        echo $row_data['fname'];
    }
    
}




?>