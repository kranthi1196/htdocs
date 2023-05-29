<?php
error_reporting( E_ERROR | E_WARNING | E_PARSE);
$db_connection = mysqli_connect("localhost","root","","group2_db") or die('Error Connecting the DataBase');

$reg_table_name = "Registration_Details";
$reg_table = "CREATE TABLE IF NOT EXISTS $reg_table_name(`id` INT(10) NOT NULL AUTO_INCREMENT, `fname` VARCHAR(255) NOT NULL, `lname` VARCHAR(255) NOT NULL, `mobile` VARCHAR(255) NOT NULL, `email` VARCHAR(255) NOT NULL, `pass` VARCHAR(255) NOT NULL, `conpass` VARCHAR(255) NOT NULL, PRIMARY KEY(`id`))";
$tab_status = mysqli_query($db_connection, $reg_table);

if(isset($_REQUEST['submit'])){
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $mobile = $_REQUEST['mobile'];
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];  
    $conpass = $_REQUEST['conpass'];  
    
    date_default_timezone_set('Asia/Kolkata');
    //$timestamp = date("Y-m-d H:i:s");
    $date = date("Y-m-d H:i:s");
}
if(!empty($_REQUEST['fname']) && !empty($_REQUEST['lname']) && !empty($_REQUEST['mobile']) && !empty($_REQUEST['email']) && !empty($_REQUEST['pass']) && !empty($_REQUEST['conpass'])){
   
   if($pass != $conpass){
    echo '<script>alert("Password and Confirm Password is not Same")</script>';
   }else{
    
    $reg_insert = "INSERT INTO $reg_table_name(`fname`, `lname`, `mobile`, `email`, `pass`, `conpass`) VALUES('$fname', '$lname', '$mobile', '$email', '$pass', '$conpass')";
    $insert_query = mysqli_query($db_connection, $reg_insert);

        if(!$insert_query){
        echo '<script>alert("Data Not Inserted into Table...")</script>';
        }else{
            echo '<script>alert("Congratulations You have Successfully Registered !!!...")</script>';
            //header('Location:login.php');
            //print "<h3></h3>";
        }

   }

       
}
else{
    
    echo '<script>alert("Please Fill all the Fields !!!")</script>';
}
?>