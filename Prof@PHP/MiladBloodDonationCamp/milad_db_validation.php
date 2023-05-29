<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
if (isset($_REQUEST[$request])) {
    header("Location:Success.php");
}

$db_name = "milad";
$connection = mysqli_connect("localhost", "root", "", );
$db = "CREATE DATABASE IF NOT EXISTS $db_name";
$db_query = mysqli_query($connection, $db);

$db_connection = mysqli_connect("localhost", "root", "", $db_name);
$table_name_app = "donor_details";

$table_app = "CREATE TABLE IF NOT EXISTS $table_name_app(`id` INT(10) NOT NULL AUTO_INCREMENT,
 `fname` VARCHAR(255) NOT NULL,
 `lname` VARCHAR(255) NOT NULL,
 `phone` VARCHAR(255) NOT NULL,
 `bloodgroup` VARCHAR(255) NOT NULL,
 `address` VARCHAR(255) NOT NULL,
 `application_number` VARCHAR(255) NOT NULL,
 `date` VARCHAR(255) NOT NULL,
 `donor_image` VARCHAR(255) NOT NULL, PRIMARY KEY(`id`))";

$table_query = mysqli_query($db_connection, $table_app);
if (!$table_query) {
    echo '<script>alert("DB is not Created") <br></script>';
}

if (isset($_REQUEST['submit'])) {

    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $phone = $_REQUEST['phone'];
    $bloodgroup = $_REQUEST['bloodgroup'];
    $address = $_REQUEST['address'];

    $donor_image = $_FILES["donor_image"]["name"];

    date_default_timezone_set('Asia/Kolkata');
    //$timestamp = date("Y-m-d H:i:s");

    $date = date("Y-m-d H:i:s");
    //echo "$date";

    $timestamp = date("Y-m-d");
    $payment_date2 = str_replace("-", "", $date);
    $refid = str_replace(":", "", $payment_date2);
    $payment_date = $date;

    //$application_number = $refid;
    $application_number = str_replace(" ", "", $refid);
    $application_number = $application_number . substr($phone, 5, 10);
    //echo $application_number;

}

if (!file_exists($table_name_app)) {
    mkdir($table_name_app, 0777, true);
    echo '<script>alert("Folder is Created") <br></script>';
}

if (!empty($fname) && !empty($lname) && !empty($phone) && !empty($bloodgroup) && !empty($address) && !empty($donor_image)) {

    $query = "INSERT INTO $table_name_app(`fname`, `lname`, `phone`,
  `bloodgroup`, `address`, `application_number`, `date`, `donor_image`) VALUES('$fname','$lname', '$phone', '$bloodgroup', '$address', '$application_number', '$date', '$donor_image')";

    $status = mysqli_query($db_connection, $query);
}
if ($status) {
    //echo '<script>alert(" Your Form is Submitted Successfully !! ")</script><br>';/* Query Executed Successfully... and Data inserted into Table */
    $targetfile = "$table_name_app/" . $application_number . '_' . basename($donor_image);
    move_uploaded_file($_FILES["donor_image"]["tmp_name"], $targetfile);
} else {
    print "<script>alert('Please Fill all the Required Fields')</script>";
    //echo '<script>alert(" Your Form is Not Submitted ")</script><br>'; /* Query Not Executed Successfully... and Data not inserted */
}

//$ret_query = "SELECT * FROM $table_name_app ORDER BY id DESC LIMIT 1";
$ret_query = "SELECT * FROM $table_name_app WHERE application_number = '$application_number'";
$query_ex = mysqli_query($db_connection, $ret_query);
$row = mysqli_num_rows($query_ex) > 0;

if ($app_data = mysqli_fetch_assoc($query_ex)) {
    // Test Code for Retriving the Data From DB //
    echo $app_data['fname']; // Printing Input Fields data
    //echo "<img src = ./$table_name_app/$application_number"."_$app_data[donor_image]>";
}
