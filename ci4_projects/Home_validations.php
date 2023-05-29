<?php
error_reporting(E_ALL);
$db_name = "ci4_project";
$connection = mysqli_connect("localhost", "root", "", );
$db = "CREATE DATABASE IF NOT EXISTS $db_name";
$db_query = mysqli_query($connection, $db);
$db_connection = mysqli_connect("localhost", "root", "", $db_name);
$img_table_name = "images_table";

date_default_timezone_set('Asia/Kolkata');
$date = date("Y-m-d H:i:s");

$img_table_create = "CREATE TABLE IF NOT EXISTS $img_table_name(`id` INT(10) NOT NULL AUTO_INCREMENT, `img1` VARCHAR(255) NOT NULL, `img2` VARCHAR(255) NOT NULL, `img3` VARCHAR(255) NOT NULL, `img4` VARCHAR(255) NOT NULL, `img5` VARCHAR(255) NOT NULL, `date` VARCHAR(255) NOT NULL, PRIMARY KEY(`id`))";
$img_table_query = mysqli_query($db_connection, $img_table_create);

if (isset($_REQUEST['home_submit'])) {
    echo "Submit Button is Clicked";
    $img1 = $_FILES["img1"]["name"];
    $img2 = $_FILES["img2"]["name"];
    $img3 = $_FILES["img3"]["name"];
    $img4 = $_FILES["img4"]["name"];
    $img5 = $_FILES["img5"]["name"];
    
}

    if (!file_exists($img_table_name)) {
        mkdir($img_table_name, 0777, true);
        echo '<script>alert("Folder is Created") <br></script>';
    }
    $img_insert = "INSERT INTO $img_table_name(`img1`, `img2`, `img3`, `img4`, `img5`, `date`) VALUES('$img1', '$img2', '$img3', '$img4', '$img5', '$date')";
    $img_query = mysqli_query($db_connection, $img_insert);

if ($img_query) {
    //echo '<script>alert(" Your Form is Submitted Successfully !! ")</script><br>';/* Query Executed Successfully... and Data inserted into Table */
    $targetfile1 = "$img_table_name/" .basename($img1);
    move_uploaded_file($_FILES["img1"]["tmp_name"], $targetfile1);

    $targetfile2 = "$img_table_name/" . basename($img2);
    move_uploaded_file($_FILES["img2"]["tmp_name"], $targetfile2);

    $targetfile3 = "$img_table_name/" . basename($img3);
    move_uploaded_file($_FILES["img3"]["tmp_name"], $targetfile3);

    $targetfile4 = "$img_table_name/" . basename($img4);
    move_uploaded_file($_FILES["img4"]["tmp_name"], $targetfile4);

    $targetfile5 = "$img_table_name/" . basename($img5);
    move_uploaded_file($_FILES["img5"]["tmp_name"], $targetfile5);
} else {
    print "<script>alert('Please Fill all the Required Fields')</script>";
    //echo '<script>alert(" Your Form is Not Submitted ")</script><br>'; /* Query Not Executed Successfully... and Data not inserted */
}

$ret_query = "SELECT * FROM $img_table_name WHERE date = '$date'";
$query_ex = mysqli_query($db_connection, $ret_query);
$row = mysqli_num_rows($query_ex) > 0;

if ($img_data = mysqli_fetch_assoc($query_ex)) {
    // Test Code for Retriving the Data From DB //
    // echo $app_data['fname'];  Printing Input Fields data
    //echo "<img src = ./$img_table_name/$application_number"."_$app_data[donor_image]>";
    echo "<img src = ./$img_table_name/$img_data[img1]><br>";
    echo "<img src = ./$img_table_name/$img_data[img2]><br>";
    echo "<img src = ./$img_table_name/$img_data[img3]><br>";
    echo "<img src = ./$img_table_name/$img_data[img4]><br>";
    echo "<img src = ./$img_table_name/$img_data[img5]><br>";
}



?>