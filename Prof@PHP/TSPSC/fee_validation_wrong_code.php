/* ****** Fee Payment Page Validations Starts Here ****** */

$connection =  mysqli_connect("localhost", "root", "", "group2_db");

$fee_table_name="fee_payments";
$fee_table_create="CREATE TABLE IF NOT EXISTS $fee_table_name(`id` INT(10) NOT NULL AUTO_INCREMENT, `tspscid` VARCHAR(255) NOT NULL, `dob` VARCHAR(255) NOT NULL, `mobile` VARCHAR(255) NOT NULL,  `journal_num` VARCHAR(255) NOT NULL, `fee_payment_date` VARCHAR(255) NOT NULL, `amount` VARCHAR(255) NOT NULL, PRIMARY KEY(`id`)) ";

    $fee_query_table = mysqli_query($connection,$fee_table_create);

    if(!$fee_query_table){
        echo '<script>alert("Table is not created..")<br></script>';
    }
    else{
        echo'<script>alert("Table is Successfully created.. as \"$db_name\" cand_photos")<br></script>';
    }


    $tspscid = $app_data['tspscid'];//$_REQUEST['tspscid'];
    $dob = $app_data['dob'];
    $mobile = $app_data['mobile'];
    $amount = $app_data['fee'];
/* ********************************************************************************************* */
/* Checking whether the Submit Button is Clicked or Not*/ 
if(isset($_REQUEST['fee_sumbit'])){
    
    date_default_timezone_set('Asia/Kolkata');
    $timestamp = date("Y-m-d");
    $fee_payment_date = str_replace("/", "", $timestamp);
    
    $journal_num = substr($tspscid, 5, strlen($tspscid)-1);

 $fee_table_insert = "INSERT INTO $fee_table_name(`tspscid`,`dob`, `mobile`, `amount`, `journal_num`, `fee_payment_date`) VALUES('$tspscid','$dob','$mobile','$amount','$journal_num', '$fee_payment_date')";
 
 $fee_status = mysqli_query($connection,$fee_table_insert);
    if($fee_status){
        echo '<script>alert(" Your Fee is Received Successfully !! ")</script><br>';/* Query Executed Successfully... and Data inserted into Table */
    }
    else{
        echo '<script>alert(" Your Fee is Received ")</script><br>'; /* Query Not Executed Successfully... and Data not inserted */ 
    }

    /* ********************************************************************************************* */
/* Retriving the data  Frrom the Database  According to the User information*/ 

//$ret_query = "SELECT * FROM $table_name_fee ORDER BY id DESC LIMIT 1";
$fee_ret_query = "SELECT * FROM $fee_table_name WHERE tspscid='$tspscid'";
$fee_query_ex = mysqli_query($connection, $fee_ret_query);
$row_fee = mysqli_num_rows($fee_query_ex)>0 ;

if($fee_data = mysqli_fetch_assoc($fee_query_ex))
{

    print "<table border=\"1px\" cellpadding=\"10px\" class=\" table-striped style=\"text-align:center; border-collapse:collapse;\"\">
    <tr style=\"text-align:center;\"><td><b>TSPSC ID</b></td>
    <td><b>Date of Birth</b></td>
    <td><b>Mobile Number</b></td>
    <td><b>Journal Number</b></td>
    <td><b>Payment Date</b></td>
    <td><b>Amount</b></td></tr><br/>
    
    <tr style=\"text-align:center;\"><td>$fee_data[tspscid]</td>
    <td>$fee_data[dob]</td>
    <td>$fee_data[mobile]</td>
    <td>$fee_data[journal_num]</td>
    <td>$fee_data[payment_date]</td>
    <td>$fee_data[amount]</td></tr>
     
    </table>";

}

        }

/* ****** Fee Payment Page Validations Ended Here ****** */ 