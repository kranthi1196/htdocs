

<?php

/* ********************************************* All the Back end Code will be followed here ********************************************* */ 

$connection =  mysqli_connect("localhost", "root", "", "group2_db");


$table_name_fee="fee";
$table_fee="CREATE TABLE IF NOT EXISTS $table_name_fee(`id` INT(10) NOT NULL AUTO_INCREMENT, `tspscid` VARCHAR(255) NOT NULL, `dob` VARCHAR(255) NOT NULL, `mobile` VARCHAR(255) NOT NULL,  `journal_num` VARCHAR(255) NOT NULL, `payment_date` VARCHAR(255) NOT NULL, `amount` VARCHAR(255) NOT NULL, `date` VARCHAR(255) NOT NULL, PRIMARY KEY(`id`)) ";

    $query_table = mysqli_query($connection,$table_fee);

    if(!$query_table){
        echo '<script>alert("Table is not created..")<br></script>';
    }
    else{
        echo'<script>alert("Table is Successfully created.. as \"$db_name\" cand_photos")<br></script>';
    }

/* ********************************************************************************************* */
/*$app_table_name = "candidate_details";
$app_tab = "SELECT * FROM $app_table_name WHERE tspscid = '$tspscid'";
$app_tab_query = mysqli_query($connection, $app_tab);
$row_app = mysqli_num_rows($app_tab_query)>0;
if($app_data = mysqli_fetch_assoc($app_tab_query)){
Print "TSPSC ID from App Data is : $app_data[tspscid]";
}*/


/* Checking whether the Submit Button is Clicked or Not*/ 
if(isset($_REQUEST['fee_sumbit'])){
    
    $tspscid = $_REQUEST['tspscid'];
    $dob = $_REQUEST['dob'];
    $mobile = $_REQUEST['mobile'];
    $amount = $_REQUEST['fee'];
    

    date_default_timezone_set('Asia/Kolkata');
    $timestamp = date("Y-m-d");
    $payment_date = str_replace("/", "", $timestamp);
    
    $journal_num = substr($tspscid, 5, strlen($tspscid)-1);

    
    date_default_timezone_set('Asia/Kolkata');
    //$timestamp = date("Y-m-d H:i:s");
    $date = date("Y-m-d H:i:s");

 $query_fee = "INSERT INTO $table_name_fee(`tspscid`,`dob`, `mobile`, `amount`, `journal_num`, `payment_date`, `date`) VALUES('$tspscid','$dob','$mobile','$amount','$journal_num', '$payment_date', '$date')";
 
 $status_fee = mysqli_query($connection,$query_fee);
    if($status_fee){
        echo '<script>alert(" Your Form is Submitted Successfully !! ")</script><br>';/* Query Executed Successfully... and Data inserted into Table */
    }
    else{
        echo '<script>alert(" Your Form is Not Submitted ")</script><br>'; /* Query Not Executed Successfully... and Data not inserted */ 
    }

    /* ********************************************************************************************* */
/* Retriving the data  Frrom the Database  According to the User information*/ 

//$ret_query = "SELECT * FROM $table_name_fee ORDER BY id DESC LIMIT 1";
$ret_query = "SELECT * FROM candidate_details/*$table_name_fee*/ WHERE tspscid='$tspscid'";
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
    <td><b>Amount</b></td>
    <td><b>Date</b></td></tr><br/>
    
    <tr style=\"text-align:center;\"><td>$max_row[tspscid]</td>
    <td>$max_row[dob]</td>
    <td>$max_row[mobile]</td>
    <td>$max_row[journal_num]</td>
    <td>$max_row[payment_date]</td>
    <td>$max_row[amount]</td>
    <td>$max_row[date]</td></tr>
    
    
    </table>";
    /*echo '<br><br> Candidate TSPSC ID is : '.$max_row['tspscid'].'<br>';
    echo 'Candidate Date of Birth is : '.$max_row['dob'].'<br>';
    echo 'Candidate Mobile Number is : '.$max_row['mobile'].'<br>';
    echo 'Candidate Payment Date is : '.$max_row['payment_date'].'<br>';
    echo 'Candidate Journal Number is : '.$max_row['journal_num'].'<br>';

   // echo "<img src = '$table_name_fee/".$max_row['cand_image']."'><br>";
    //echo "<img src = '$table_name_fee/".$max_row['cand_sign']."'><br>";*/
}

// $retrive_query = "SELECT * FROM $table_name_fee"; /* Order By [id] Desc */
/* $result = mysqli_query($connection2,$retrive_query);
$rows = mysqli_num_rows($result)>0 ;


        if ($row = mysqli_fetch_assoc($result)) {
            echo 'First Name of the Candidate is : '.$row["tspscid"].'<br>';
            echo 'Last Name of the Candidate is : '.$row["dob"].'<br>';
            echo 'Mobile Number of the Candidate is : '.$row["mobile"].'<br>';



            echo "<img src = 'candidates_photos/".$row['cand_image']."'><br>";
            echo "<img src = 'candidates_photos/".$row['cand_sign']."'><br>";
            /*echo "<img src = 'candidates_photos/$tspscid".'_'.$row["cand_image"]."'>'<br>'";*/
            
     
//mysqli_free_result($query_ex);


//mysqli_close($connection2);
}



?>

