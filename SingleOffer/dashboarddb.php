<?php
//session_start();
error_reporting( E_ALL);

/* Database Creation */
$db = "adroit";
$db_start = mysqli_connect("localhost","root", "");

$db_create = "CREATE DATABASE if not exists $db";
$db_qry = mysqli_query($db_start, $db_create);
$db_connection = mysqli_connect("localhost","root","",$db) or die('Error Connecting the DataBase');

/* BOH Table Connection */
if(isset($_POST['boh_add'])){
/* Table Creation */
$table = "boh_form_data";
$table_create = "CREATE TABLE IF NOT EXISTS $table (`id` INT(10) NOT NULL AUTO_INCREMENT, `subjectLine` VARCHAR(255) NOT NULL, `pageUrl` VARCHAR(255) NOT NULL, `imageUrl` VARCHAR(255) NOT NULL, `fileName` VARCHAR(255) NOT NULL, `dealTitle` VARCHAR(255) NOT NULL, `senddate` VARCHAR(255) NOT NULL, PRIMARY KEY(`id`))";
$table_qry = mysqli_query($db_connection, $table_create);

if(isset($_POST['boh_add'])) {

    /* fetching form data */
    
    $subjectLine = $_POST['subjectLine'];
    $pageUrl = $_POST['pageUrl'];
    $imageUrl = $_POST['imageUrl'];
    $fileName = $_POST['fileName'];
    $dealTitle = $_POST['dealTitle'];
    //$emailText = $_POST['emailText'];
    $senddate1 = $_POST['senddate'];

    $dateFelds = explode("-", $senddate1);
    $senddate = implode("-", $dateFelds);

    

    /* Checking whether data is there or not */
    if(!empty($subjectLine) && !empty($pageUrl) && !empty($fileName) && !empty($senddate)) {

        /* Insert data into the DB */
        $insert_data = "INSERT INTO $table(`subjectLine`, `pageUrl`, `imageUrl`, `fileName`, `dealTitle`, `senddate`) VALUES ('$subjectLine', '$pageUrl', '$imageUrl', '$fileName', '$dealTitle', '$senddate')"; 
        $insert_qry = mysqli_query($db_connection, $insert_data); 
        
        if($insert_qry){
            #echo 'Your entry is inserted successfully!';   
        }
        else{
            #echo 'Error in inserting data!';
        }
    }
    else{
        #echo 'Please enter the required fields';
    }
}

if(isset($_POST['boh_add'])){
    $data_fetch_query = "SELECT * FROM $table WHERE fileName='$fileName' ";
    $data_fetch_query_ex = mysqli_query($db_connection, $data_fetch_query);
    $row_hb = mysqli_num_rows($data_fetch_query_ex)>0 ;


if($reg_data = mysqli_fetch_assoc($data_fetch_query_ex))
{
   /* print "$row_data[fname]<br>";
    print "$row_data[lname]<br>";
    print "$row_data[mobile]<br>";
    print "$row_data[email]<br>";
    print "$row_data[pass]<br>";
    print "$row_data[conpass]<br>"; */
}
}

}

elseif(isset($_POST['hb_add'])){
/* Table Creation */
$table = "hb_form_data";
$table_create = "CREATE TABLE IF NOT EXISTS $table (`id` INT(10) NOT NULL AUTO_INCREMENT, `subjectLine` VARCHAR(255) NOT NULL, `pageUrl` VARCHAR(255) NOT NULL, `imageUrl` VARCHAR(255) NOT NULL, `fileName` VARCHAR(255) NOT NULL, `dealTitle` VARCHAR(255) NOT NULL, `senddate` VARCHAR(255) NOT NULL, PRIMARY KEY(`id`))";
$table_qry = mysqli_query($db_connection, $table_create);

if(isset($_POST['hb_add'])) {

    /* fetching form data */
    
    $subjectLine = $_POST['subjectLine'];
    $pageUrl = $_POST['pageUrl'];
    $imageUrl = $_POST['imageUrl'];
    $fileName = $_POST['fileName'];
    $dealTitle = $_POST['dealTitle'];
    //$emailText = $_POST['emailText'];
    $senddate1 = $_POST['senddate'];

    $dateFelds = explode("-", $senddate1);
    $senddate = implode("-", $dateFelds);


    /* Checking whether data is there or not */
    if(!empty($subjectLine) && !empty($pageUrl) && !empty($fileName) && !empty($senddate)) {

        /* Insert data into the DB */
        $insert_data = "INSERT INTO $table(`subjectLine`, `pageUrl`, `imageUrl`, `fileName`, `dealTitle`, `senddate`) VALUES ('$subjectLine', '$pageUrl', '$imageUrl', '$fileName', '$dealTitle', '$senddate')"; 
        $insert_qry = mysqli_query($db_connection, $insert_data); 
        
        if($insert_qry){
            #echo 'Your entry is inserted successfully!';   
        }
        else{
            #echo 'Error in inserting data!';
        }
    }
    else{
        #echo 'Please enter the required fields';
    }
}

if(isset($_POST['hb_add'])){
    $data_fetch_query = "SELECT * FROM $table WHERE fileName='$fileName' ";
    $data_fetch_query_ex = mysqli_query($db_connection, $data_fetch_query);
    $row_hb = mysqli_num_rows($data_fetch_query_ex)>0 ;


if($reg_data = mysqli_fetch_assoc($data_fetch_query_ex))
{
   /* print "$row_data[fname]<br>";
    print "$row_data[lname]<br>";
    print "$row_data[mobile]<br>";
    print "$row_data[email]<br>";
    print "$row_data[pass]<br>";
    print "$row_data[conpass]<br>"; */
}
}

}

else{
    if(isset($_POST['se_add'])){
        /* Table Creation */
$table = "se_form_data";
$table_create = "CREATE TABLE IF NOT EXISTS $table (`id` INT(10) NOT NULL AUTO_INCREMENT, `subjectLine` VARCHAR(255) NOT NULL, `pageUrl` VARCHAR(255) NOT NULL, `imageUrl` VARCHAR(255) NOT NULL, `fileName` VARCHAR(255) NOT NULL, `dealTitle` VARCHAR(255) NOT NULL, `senddate` VARCHAR(255) NOT NULL, PRIMARY KEY(`id`))";
$table_qry = mysqli_query($db_connection, $table_create);

if(isset($_POST['se_add'])) {

    /* fetching form data */
    
    $subjectLine = $_POST['subjectLine'];
    $pageUrl = $_POST['pageUrl'];
    $imageUrl = $_POST['imageUrl'];
    $fileName = $_POST['fileName'];
    $dealTitle = $_POST['dealTitle'];
    //$emailText = $_POST['emailText'];
    $senddate1 = $_POST['senddate'];

    $dateFelds = explode("-", $senddate1);
    $senddate = implode("-", $dateFelds);

    

    /* Checking whether data is there or not */
    if(!empty($subjectLine) && !empty($pageUrl) && !empty($fileName) && !empty($senddate)) {

        /* Insert data into the DB */
        $insert_data = "INSERT INTO $table(`subjectLine`, `pageUrl`, `imageUrl`, `fileName`, `dealTitle`, `senddate`) VALUES ('$subjectLine', '$pageUrl', '$imageUrl', '$fileName', '$dealTitle', '$senddate')"; 
        $insert_qry = mysqli_query($db_connection, $insert_data); 
        
        if($insert_qry){
            #echo 'Your entry is inserted successfully!';   
        }
        else{
            #echo 'Error in inserting data!';
        }
    }
    else{
        #echo 'Please enter the required fields';
    }
}

if(isset($_POST['se_add'])){
    $data_fetch_query = "SELECT * FROM $table WHERE fileName='$fileName' ";
    $data_fetch_query_ex = mysqli_query($db_connection, $data_fetch_query);
    $row_hb = mysqli_num_rows($data_fetch_query_ex)>0 ;


if($reg_data = mysqli_fetch_assoc($data_fetch_query_ex))
{
   /* print "$row_data[fname]<br>";
    print "$row_data[lname]<br>";
    print "$row_data[mobile]<br>";
    print "$row_data[email]<br>";
    print "$row_data[pass]<br>";
    print "$row_data[conpass]<br>"; */
}
}

    }
}




?>