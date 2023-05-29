<?php
	session_start();
	error_reporting(1);
	$user=$_SESSION['fbuser'];
	mysqli_report(MYSQLI_REPORT_OFF);
	$connect = @mysqli_connect("localhost","root","","faceback1");
	$query1=mysqli_query($connect, "select * from users where Email='$user'");
	$rec1=mysqli_fetch_array($query1);
	$userid=$rec1[0];
	mysqli_query($connect, "update user_status set status='Offline' where user_id='$userid'");
	unset($_SESSION['fbuser']);
	//session_destroy();
	header("location:../../index.php");
?>