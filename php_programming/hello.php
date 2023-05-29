<?php
error_reporting(E_ALL);

$db = "sample";
$con = mysqli_query(mysqli_connect("localhost", "root", ""), "CREATE DATABASE IF NOT EXISTS $db");
$con = mysqli_connect("localhost", "root", "",$db) or die('Error Connecting to Database');

if(isset($_REQUEST['submit'])){

    
    $table = "sampTab";
    $tabQuery = "CREATE TABLE IF NOT EXISTS $table(`id` INT(10) NOT NULL AUTO_INCREMENT, `name` VARCHAR(255) NOT NULL, `password` VARCHAR(255) NOT NULL, `createdTime` VARCHAR(255) NOT NULL,PRIMARY KEY(`id`))";
    $tabStatus = mysqli_query($con, $tabQuery );

    $name = $_REQUEST['name'];
    $password = $_REQUEST['password'];
    date_default_timezone_set('Asia/Kolkata');
    $createdTime = date("Y-m-d H:i:s");

    if($tabStatus){
    $tabIns = "INSERT INTO $table(`name`, `password`, `createdTime`) VALUES('$name', '$password', '$createdTime')";
    $tab = mysqli_query($con, $tabIns);
    if($tab){
        echo 'data inserted Successfully';
    }
    else{
        echo 'data is not inserted';
    }
    }

    //data fetching:

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Form</title>
</head>
<body>
    <form action="" method="post">
        Username: <input type="text" name="name" id=""><br><br>
        Password: <input type="password" name="password" id=""><br>
        <button style="align-items: baseline; color:blue" type="submit" name="submit">submit</button>
    </form>
</body>
</html>