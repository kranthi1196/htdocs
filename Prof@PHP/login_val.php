<?php
error_reporting( E_ERROR | E_WARNING | E_PARSE);
$db_connection = mysqli_connect("localhost","root","","group2_db") or die('Error Connecting the DataBase');

$reg_table_name = "registration_Details";

if(!empty($_POST['login'])){
    $email = $_REQUEST['email_log'];
    $pass = $_REQUEST['pass_log'];


$fetch_query = "SELECT * FROM $reg_table_name WHERE email='$email' AND pass='$pass'";
$fetch_query_ex = mysqli_query($db_connection, $fetch_query);
$row = mysqli_num_rows($fetch_query_ex)>0 ;


if($row_data = mysqli_fetch_assoc($fetch_query_ex))
{
   /* print "$row_data[fname]<br>";
    print "$row_data[lname]<br>";
    print "$row_data[mobile]<br>";
    print "$row_data[email]<br>";
    print "$row_data[pass]<br>";
    print "$row_data[conpass]<br>"; */
}

    if(($email == $row_data['email']) && ($pass == $row_data['pass'])){
        
    }
 

else{
    Echo 'Your Login Failed... <br>';
    Echo 'Your Details are not matched with our DB records...<br>';
}

}


?>