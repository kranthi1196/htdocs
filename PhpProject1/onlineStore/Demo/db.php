<?php
error_reporting(E_ALL);
$servername = "localhost";
$username = "root";
$password = "";
$db = "onlineshop";

$con = mysqli_connect("localhost", "root", "");
$dbCreation = "CREATE DATABASE IF NOT EXISTS $db";
$dbcQuery = mysqli_query($con, $dbCreation);

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
