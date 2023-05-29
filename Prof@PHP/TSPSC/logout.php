<?php
error_reporting( E_ERROR | E_WARNING | E_PARSE);
//include 'all_validations.php';
session_start();

session_unset();

session_destroy();

header("location:Index.php");
Print "<script>alert('You Are Successfully Logged Out')</script>";

exit();

?>
