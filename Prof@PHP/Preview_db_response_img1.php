<?php

/* ********************************************* All the Back end Code will be followed here ********************************************* */ 

$db_name="group2_db";

/* ########################################################################################### */ 
$connection2 = mysqli_connect("localhost","root", "", $db_name);
$table_name_img="candidate_images";
$table_img="CREATE TABLE IF NOT EXISTS $table_name_img(`id` INT(10) NOT NULL AUTO_INCREMENT, `tspscid1` VARCHAR(255) NOT NULL, `cand_image` VARCHAR(255) NOT NULL, `cand_sign` VARCHAR(255) NOT NULL, PRIMARY KEY(`id`)) ";


    $query_table_img = mysqli_query($connection2,$table_img);

    if(!$query_table_img){
        echo '<script>alert("Table is not created..")<br></script>';
    }
    else{
        echo'<script>alert("Table is Successfully created.. as \"$db_name\" cand_photos")<br></script>';
    }
/* ########################################################################################### */ 
 /* To Create a Directory if it is not Available in Local Drive*/ 
if (!file_exists($table_name_img)) {
    mkdir($table_name_img, 0777, true);
    echo '<script>alert("Folder is Created") <br></script>';
}

/* #################################################################################################### */
/* Checking whether the Submit Button is Clicked or Not*/ 
if(isset($_REQUEST['sumbit'])){


    $cand_image = $_FILES['cand_image']['name'];
    $cand_sign = $_FILES['cand_sign']['name'];
    $tspscid1 = $max_row['tspscid'];

    $targetfile = "$table_name_img/"/*.$tspscid.'_'*/.basename($cand_image);
    $targetfile_sign = "$table_name_img/"/*.$tspscid.'_'*/.basename($cand_sign);

 $query = "INSERT INTO $table_name_img(`tspscid1`, `cand_image`, `cand_sign`) VALUES('$tspscid1','$cand_image', '$cand_sign')";
 
 $status_img = mysqli_query($connection2,$query);
    if($status_img){
        echo '<script>alert(" Your Table Data is Submitted Successfully !! ")</script><br>';/* Query Executed Successfully... and Data inserted into Table */

        move_uploaded_file($_FILES['cand_image']['tmp_name'],$targetfile);
        move_uploaded_file($_FILES['cand_sign']['tmp_name'],$targetfile_sign);
    }
    else{
        echo '<script>alert(" Your Table Data is Not Submitted ")</script><br>'; /* Query Not Executed Successfully... and Data not inserted */ 
    }

    /* #################################################################################################### */
/* Retriving the data  Frrom the Database  According to the User information*/ 

/*$ret_query = "SELECT * FROM $table_name ORDER BY id DESC LIMIT 1";
$query_ex = mysqli_query($db_connection, $ret_query);
$row = mysqli_num_rows($query_ex)>0 ;

if($max_row = mysqli_fetch_assoc($query_ex))
{

}*/

$ret_query_img = "SELECT * FROM $table_name_img ORDER BY id DESC";
$query_ex_img = mysqli_query($connection2, $ret_query_img);
$row = mysqli_num_rows($query_ex_img)>0 ;

if($max_row_img = mysqli_fetch_assoc($query_ex_img))
{
    print "<table border=\"1px\" boder-collapse=\"collapse\">
    <tr> <td> <img src = $table_name_img/$max_row_img[cand_image]><br></td></tr>
    <tr> <td> <img src = $table_name_img/$max_row_img[cand_sign]><br></td></tr>
    <tr><td> **************************** </td></tr>
    
    </table>";
}
 
}
?>




