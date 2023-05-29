
<!--  /* ********************************************* All the Back end Code will be followed here *********************************************  */ --> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <fieldset style="width=50%"><legend>User Signup</legend>
    <table>
 <!--<tr><td> TSPSC ID : </td><td><input type="text" name="tspscid" placeholder="TSPSC ID"></td></tr><br> --> 
 <tr><td> TSPSC ID : </td><td><input type="text" name="tspscid" placeholder="TSPSC ID" onKeyup="this.value = this.value.toUpperCase()"></td></tr><br>
 <tr><td> Date of Birth : </td><td><input type="text" name="dob" placeholder="DATE OF BIRTH" onKeyup="this.value = this.value.toUpperCase()"></td></tr>
 <tr><td> Mobile Number : </td><td><input type="text" name="mobile" placeholder="10 Digit Mobile Number" onKeyup="this.value = this.value.toUpperCase()"></td></tr>
 <tr><td> Fee Amount : </td><td><input type="text" name="fee" placeholder="Amount" onKeyup="this.value = this.value.toUpperCase()"></td></tr>
 <!-- <tr><td> Photo: </td><td><input type="file" name="cand_image" value=""></td></tr>
 <tr><td> Sign: </td><td><input type="file" name="cand_sign" value=""></td></tr> -->
 <tr><td></td><td><input type="submit" name="sumbit" value="submit"></td></tr>
  </table> 
  </fieldset>
  </form>
</body>
</html>


<?php

/* ********************************************* All the Back end Code will be followed here ********************************************* */ 

$connection =  mysqli_connect("localhost", "root", "", "group2_db");

$table_name="fee";
$table="CREATE TABLE IF NOT EXISTS $table_name(`id` INT(10) NOT NULL AUTO_INCREMENT, `tspscid` VARCHAR(255) NOT NULL, `dob` VARCHAR(255) NOT NULL, `mobile` VARCHAR(255) NOT NULL,  `journal_num` VARCHAR(255) NOT NULL, `payment_date` VARCHAR(255) NOT NULL, `amount` VARCHAR(255) NOT NULL, PRIMARY KEY(`id`)) ";

    $query_table = mysqli_query($connection,$table);

    if(!$query_table){
        echo '<script>alert("Table is not created..")<br></script>';
    }
    else{
        echo'<script>alert("Table is Successfully created.. as \"$db_name\" cand_photos")<br></script>';
    }

/* ********************************************************************************************* */
/* Checking whether the Submit Button is Clicked or Not*/ 
if(isset($_REQUEST['sumbit'])){

    
    $tspscid = $_REQUEST['tspscid'];
    $dob = $_REQUEST['dob'];
    $mobile = $_REQUEST['mobile'];
    $amount = $_REQUEST['fee'];
    

    date_default_timezone_set('Asia/Kolkata');
    $timestamp = date("Y-m-d");
    $payment_date = str_replace("/", "", $timestamp);
    
    $journal_num = substr($tspscid, 5, strlen($tspscid)-1);

 $query = "INSERT INTO $table_name(`tspscid`,`dob`, `mobile`, `amount`, `journal_num`, `payment_date` ) VALUES('$tspscid','$dob','$mobile','$amount','$journal_num', '$payment_date')";
 
 $status = mysqli_query($connection,$query);
    if($status){
        echo '<script>alert(" Your Form is Submitted Successfully !! ")</script><br>';/* Query Executed Successfully... and Data inserted into Table */
    }
    else{
        echo '<script>alert(" Your Form is Not Submitted ")</script><br>'; /* Query Not Executed Successfully... and Data not inserted */ 
    }

    /* ********************************************************************************************* */
/* Retriving the data  Frrom the Database  According to the User information*/ 

$ret_query = "SELECT * FROM $table_name ORDER BY id DESC LIMIT 1";
$query_ex = mysqli_query($connection, $ret_query);
$row = mysqli_num_rows($query_ex)>0 ;

if($max_row = mysqli_fetch_assoc($query_ex))
{

    print "<table border=\"1px\" cellpadding=\"10px\" class=\" table-striped style=\"text-align:center; border-collapse:collapse;\"\">
    <tr style=\"text-align:center;\"><td><b>TSPSC ID</b></td>
    <td><b>Date of Birth</b></td>
    <td><b>Mobile Number</b></td>
    <td><b>Journal Number</b></td>
    <td><b>Payment Date</b></td>
    <td><b>Amount</b></td></tr><br/>
    
    <tr style=\"text-align:center;\"><td>$max_row[tspscid]</td>
    <td>$max_row[dob]</td>
    <td>$max_row[mobile]</td>
    <td>$max_row[journal_num]</td>
    <td>$max_row[payment_date]</td>
    <td>$max_row[amount]</td></tr>
    
    
    </table>";
    /*echo '<br><br> Candidate TSPSC ID is : '.$max_row['tspscid'].'<br>';
    echo 'Candidate Date of Birth is : '.$max_row['dob'].'<br>';
    echo 'Candidate Mobile Number is : '.$max_row['mobile'].'<br>';
    echo 'Candidate Payment Date is : '.$max_row['payment_date'].'<br>';
    echo 'Candidate Journal Number is : '.$max_row['journal_num'].'<br>';

   // echo "<img src = '$table_name/".$max_row['cand_image']."'><br>";
    //echo "<img src = '$table_name/".$max_row['cand_sign']."'><br>";*/
}

// $retrive_query = "SELECT * FROM $table_name"; /* Order By [id] Desc */
/* $result = mysqli_query($connection2,$retrive_query);
$rows = mysqli_num_rows($result)>0 ;


        if ($row = mysqli_fetch_assoc($result)) {
            echo 'First Name of the Candidate is : '.$row["tspscid"].'<br>';
            echo 'Last Name of the Candidate is : '.$row["dob"].'<br>';
            echo 'Mobile Number of the Candidate is : '.$row["mobile"].'<br>';



            echo "<img src = 'candidates_photos/".$row['cand_image']."'><br>";
            echo "<img src = 'candidates_photos/".$row['cand_sign']."'><br>";
            /*echo "<img src = 'candidates_photos/$tspscid".'_'.$row["cand_image"]."'>'<br>'";*/
            
        }
//mysqli_free_result($query_ex);


//mysqli_close($connection2);





?>




