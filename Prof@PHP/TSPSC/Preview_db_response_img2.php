<?php
error_reporting( E_ERROR | E_WARNING | E_PARSE);
/* ********************************************* All the Back end Code will be followed here ********************************************* */ 

//$db_name="group2_db";

/* ########################################################################################### */ 
$db_connection = mysqli_connect("localhost","root", "", "group2_db") or die("Error in Connecting DataBase");
$imgTableName = "candidate_images";
$img_table = "CREATE TABLE IF NOT EXISTS $imgTableName(`id` INT(10) NOT NULL AUTO_INCREMENT, `tspscid` VARCHAR(255) NOT NULL, `cand_image` VARCHAR(255) NOT NULL, `cand_sign` VARCHAR(255) NOT NULL, PRIMARY KEY(`id`))";

$query_imgTable = mysqli_query($db_connection, $img_table);

if(!$query_imgTable){
    echo '<script>alert(" Table is Not Created ")</script><br>';
}else{
    //echo '<script>alert(" Table is Created ")</script><br>';
}


/* ########################################################################################### */ 
 /* To Create a Directory if it is not Available in Local Drive*/ 
if (!file_exists($imgTableName)) {
    mkdir($imgTableName, 0777, true);
    echo '<script>alert("Folder is Created") <br></script>';
}
/* #################################################################################################### */
/* Checking whether the Submit Button is Clicked or Not*/ 
if(isset($_REQUEST['app_submit'])){

    $cand_image = $_FILES['cand_image']['name'];
    $cand_sign = $_FILES['cand_sign']['name'];
    if(isset($_REQUEST['tspscid'])){
    $tspscid = $_REQUEST['tspscid'];
    }
    

    $targetfile = "$imgTableName/".$tspscid.'_'.basename($_FILES['cand_image']['name']);
    $targetfile_sign = "$imgTableName/".$tspscid.'_'.basename($_FILES['cand_sign']['name']);

 $query_insert = "INSERT INTO $imgTableName(tspscid, cand_image, cand_sign) VALUES('$tspscid', '$cand_image', '$cand_sign')";
 
 $status_img = mysqli_query($db_connection,$query_insert);
    if($status_img){
       // echo '<script>alert(" Your Table Data is Submitted Successfully !! ")</script><br>';/* Query Executed Successfully... and Data inserted into Table */

        move_uploaded_file($_FILES['cand_image']['tmp_name'], $targetfile);
        move_uploaded_file($_FILES['cand_sign']['tmp_name'], $targetfile_sign);
    }
    else{
        echo '<script>alert(" Your Table Data is Not Submitted ")</script><br>'; /* Query Not Executed Successfully... and Data not inserted */ 
    }

    /* #################################################################################################### */
/* Retriving the data  Frrom the Database  According to the User information*/ 

//$ret_query_imgTable = "SELECT * FROM $imgTableName ORDER BY id DESC";
$ret_query_imgTable = "SELECT * FROM $imgTableName WHERE tspscid='$tspscid' /*AND mobile='$mobile'*/";
$query_ex_imgTable = mysqli_query($db_connection, $ret_query_imgTable);
$row_img = mysqli_num_rows($query_ex_imgTable)>0 ;

if($max_row_imgTable = mysqli_fetch_assoc($query_ex_imgTable))
{

}
 
}
?>




