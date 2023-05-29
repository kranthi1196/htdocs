<?php 

	error_reporting( E_ALL); // To avoid error messages

	$db="grocerydb";
	
	$con = mysqli_connect('localhost', 'root', '');
	
	$db_create = "CREATE DATABASE IF NOT EXISTS $db";
	$db_create_query = mysqli_query($con,$db_create);
	
	$con = mysqli_connect("localhost","root","", $db)  or die("Couldn't connect to SQL server");
	
?>