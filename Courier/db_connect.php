<?php 
$db = "cms_db";
mysqli_query(mysqli_connect('localhost','root',''),"CREATE DATABASE IF NOT EXISTS $db");
$conn= mysqli_connect('localhost','root','',$db)or die("Could not connect to mysql".mysqli_error($con));