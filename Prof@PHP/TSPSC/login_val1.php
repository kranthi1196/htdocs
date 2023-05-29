<?php
//  error_reporting( E_ERROR | E_WARNING | E_PARSE);
$db_connection = mysqli_connect("localhost","root","","group2_db") or die('Error Connecting the DataBase');

$reg_table_name = "registration_Details";

if(!empty($_POST['login'])){
    $email = $_REQUEST['email_log'];
    $pass = $_REQUEST['pass_log'];



        if(!empty($email) && !empty($pass)){

        $fetch_query = "SELECT * FROM $reg_table_name WHERE email='$email' AND pass='$pass'";
        $fetch_query_ex = mysqli_query($db_connection, $fetch_query);
        $row = mysqli_num_rows($fetch_query_ex)>0 ;


        if($row_data = mysqli_fetch_assoc($fetch_query_ex))
        {
        }

            if(($email == $row_data['email']) && ($pass == $row_data['pass'])){
                
                echo '<script>alert("Your Login is Successfull...")</script>';
                //header('Location:Application1.php');
            }
            else{
                Echo '<script>alert(Your Login Failed... <br>)</script>';
                Echo '<script>alert(Your Details are not matched with our DB records...<br>)</script>';
            }

        }
        else{
            Echo '<script>alert(Please Fill All the Fields... <br>)</script>';
        }
}



?>