
<?php
//include "all_validations.php";
error_reporting( E_ERROR | E_WARNING | E_PARSE);
$db_connection = mysqli_connect("localhost","root","","group2_db") or die('Error Connecting the DataBase').mysqli_connect_error();
$app_table_name = "candidate_details";

$app_ret_query = "SELECT * FROM candidate_details WHERE tspscid='$tspscid'";
    $app_ret_exec = mysqli_query($db_connection, $app_ret_query);
    $rows = mysqli_num_rows($app_ret_exec)>0;

        if($app_data = mysqli_fetch_assoc($app_ret_exec)){
            echo $app_data['journal_num'];
        }

$fee_table_name = "FeePayment_details";//$app_table_name = "candidate_details";

/* Checking whether the Submit Button is Clicked or Not*/ 
if (isset($_REQUEST['fee_sumbit'])) {
    $tspscid = $_REQUEST['tspscid'];
    $dob = $_REQUEST['dob'];
    $mobile = $_REQUEST['mobile'];
    $amount = $_REQUEST['fee'];

    date_default_timezone_set('Asia/Kolkata');
    $timestamp = date("Y-m-d");
    $payment_date = str_replace("/", "", $timestamp);
    $payment_date = str_replace(" ", "", $payment_date);
    $journal_num = substr($tspscid, 5, strlen($tspscid)-1);


    date_default_timezone_set('Asia/Kolkata'); //$timestamp = date("Y-m-d H:i:s");
    $date = date("Y-m-d H:i:s");

    $create_table = "CREATE TABLE IF NOT EXISTS $fee_table_name(`id` INT(10) NOT NULL AUTO_INCREMENT, `tspscid` VARCHAR(255) NOT NULL, `dob` VARCHAR(255) NOT NULL, `mobile` VARCHAR(255) NOT NULL, `amount` VARCHAR(255) NOT NULL, `journal_num` VARCHAR(255) NOT NULL, `payment_date` VARCHAR(255) NOT NULL, `date` VARCHAR(255) NOT NULL, PRIMARY KEY(`id`))";

    mysqli_query($db_connection, $create_table);

    if (!empty($tspscid) && !empty($dob) && !empty($mobile) && !empty($amount)) {
        $query_fee = "INSERT INTO $fee_table_name(`tspscid`,`dob`, `mobile`, `amount`, `journal_num`, `payment_date`, `date`) VALUES('$tspscid','$dob','$mobile','$amount','$journal_num', '$payment_date', '$date')";

        $status_fee = mysqli_query($db_connection, $query_fee);
    }
    if ($status_fee) {
        echo '<script>alert(" Your Form is Submitted Successfully !! ")</script><br>';/* Query Executed Successfully... and Data inserted into Table */
    } else {
        echo '<script>alert(" Your Form is Not Submitted ")</script><br>'; /* Query Not Executed Successfully... and Data not inserted */
    }

    $fee_ret_query = "SELECT * FROM $fee_table_name WHERE tspscid='$tspscid'";
    $fee_ret_exec = mysqli_query($db_connection, $fee_ret_query);
    $rows = mysqli_num_rows($fee_ret_exec)>0;

        if($fee_data = mysqli_fetch_assoc($fee_ret_exec)){
            //echo $app_data["journal_num"];
        }
    

    /* ********************************************************************************************* */
    
}
mysqli_close($db_connection);
?>


