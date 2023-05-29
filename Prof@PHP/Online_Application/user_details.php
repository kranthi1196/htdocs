<?php

/* ********************************************* All the Back end Code will be followed here ********************************************* */ 

$connection = mysqli_connect("localhost","root", "", /*"cand_info" */);
$db_name="candidates_info";

$db = "CREATE DATABASE IF NOT EXISTS $db_name";
$db_status = mysqli_query($connection,$db);
if(!$db_status){
    echo '<script>alert("Database is not created..")<br></script>';
}
else{
    //echo '<script>alert("Database is Successfully created.. ")</script>';
}
/* ########################################################################################### */ 
$connection2 = mysqli_connect("localhost","root", "", $db_name);
$table_name="candidates_photos";
$table="CREATE TABLE IF NOT EXISTS $table_name(`id` INT(10) NOT NULL AUTO_INCREMENT, `tspscid` VARCHAR(255) NOT NULL, `FirstName` VARCHAR(255) NOT NULL, `LastName` VARCHAR(255) NOT NULL,  `mobile` VARCHAR(255) NOT NULL, `cand_image` VARCHAR(255) NOT NULL, `cand_sign` VARCHAR(255) NOT NULL, PRIMARY KEY(`id`)) ";


    $query_table = mysqli_query($connection2,$table);

    if(!$query_table){
        echo '<script>alert("Table is not created..")<br></script>';
    }
    else{
        //echo'<script>alert("Table is Successfully created.. as \"$db_name\" cand_photos")<br></script>';
    }
/* ########################################################################################### */ 
 /* To Create a Directory if it is not Available in Local Drive*/ 
if (!file_exists('./candidates_photos')) {
    mkdir('./candidates_photos', 0777, true);
    echo '<script>alert("Folder is Created") <br></script>';
}

/* #################################################################################################### */
/* Checking whether the Submit Button is Clicked or Not*/ 
if(isset($_REQUEST['sumbit'])){

    
    $FirstName = $_REQUEST['FirstName'];
    $LastName = $_REQUEST['LastName'];
    $mobile = $_REQUEST['mobile'];
    $appid = '123456';

    $cand_image = $_FILES['cand_image']['name'];
    $cand_sign = $_FILES['cand_sign']['name'];
    $tspscid = 'TSPSC'.$appid;

    $targetfile = "$table_name/"/*.$tspscid.'_'*/.basename($cand_image);
    $targetfile_sign = "$table_name/"/*.$tspscid.'_'*/.basename($cand_sign);

 $query = "INSERT INTO $table_name(`tspscid`,`FirstName`, `LastName`, `mobile`, `cand_image`, `cand_sign`) VALUES('$tspscid','$FirstName','$LastName','$mobile','$cand_image', '$cand_sign')";
 
 $status = mysqli_query($connection2,$query);
    if($status){
        echo '<script>alert(" Your Form is Submitted Successfully !! ")</script><br>';/* Query Executed Successfully... and Data inserted into Table */

        move_uploaded_file($_FILES['cand_image']['tmp_name'],$targetfile);
        move_uploaded_file($_FILES['cand_sign']['tmp_name'],$targetfile_sign);
    }
    else{
        echo '<script>alert(" Your Form is Not Submitted ")</script><br>'; /* Query Not Executed Successfully... and Data not inserted */ 
    }

    /* #################################################################################################### */
/* Retriving the data  Frrom the Database  According to the User information*/ 

$ret_query = "SELECT * FROM $table_name ORDER BY id DESC LIMIT 1";
$query_ex = mysqli_query($connection2, $ret_query);
$row = mysqli_num_rows($query_ex)>0 ;

if($max_row = mysqli_fetch_assoc($query_ex))
{
    print "<table border=\"1px\" boder-collapse=\"collapse\">
    <tr> <td> Candidate First Name is : $max_row[FirstName]<br></td><td> <img src = $table_name/$max_row[cand_image]><br></td></tr>
    <tr> <td> Candidate Last Name is : $max_row[LastName]<br></td><td><img src = $table_name/$max_row[cand_sign]><br></td></tr>
    <tr> <td> Candidate Mobile Number is : $max_row[mobile]<br></td></tr>

    
    </table>";

    //.$max_row['FirstName'].'<br>';
    //echo 'Candidate Last Name is : '.$max_row['LastName'].'<br>';
    //echo 'Candidate Mobile Number is : '.$max_row['mobile'].'<br>';
    //echo "<img src = '$table_name/".$max_row['cand_image']."'><br>";
    //echo "<img src = '$table_name/".$max_row['cand_sign']."'><br>";
}

// $retrive_query = "SELECT * FROM $table_name"; /* Order By [id] Desc */
/* $result = mysqli_query($connection2,$retrive_query);
$rows = mysqli_num_rows($result)>0 ;


        if ($row = mysqli_fetch_assoc($result)) {
            echo 'First Name of the Candidate is : '.$row["FirstName"].'<br>';
            echo 'Last Name of the Candidate is : '.$row["LastName"].'<br>';
            echo 'Mobile Number of the Candidate is : '.$row["mobile"].'<br>';



            echo "<img src = 'candidates_photos/".$row['cand_image']."'><br>";
            echo "<img src = 'candidates_photos/".$row['cand_sign']."'><br>";
            /*echo "<img src = 'candidates_photos/$tspscid".'_'.$row["cand_image"]."'>'<br>'";*/
            
        }
//mysqli_free_result($query_ex);


//mysqli_close($connection2);





?>




