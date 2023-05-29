<?php
//error_reporting( E_ERROR | E_WARNING | E_PARSE);
include "milad_db_validation.php";

/* $db_name = "milad";
$db_connection = mysqli_connect("localhost", "root", "", $db_name);
$table_name_app = "donor_details";

$ret_query = "SELECT * FROM $table_name_app WHERE application_number = '$application_number'";
$query_ex = mysqli_query($db_connection, $ret_query);
$row = mysqli_num_rows($query_ex)>0 ;

if($app_data = mysqli_fetch_assoc($query_ex))
{
echo $app_data['fname'];// Printing Input Fields data
//echo "<img src = ./$table_name_app/$application_number"."_$app_data[donor_image]>";
}*/

print "<center>
<br>
<br>

<h2 style=\"color: green;font-family:Lato\"><center>Milad Blood Donation Camp</center></h2>
<div><table style=\"border:1px\" cellpadding=\"\" class=\" table-striped\">
<tbody style=\"\">
<tr>
<td class=\"\">1. </td> <td colspan=\"\" style=\"padding-left:5px\"><b> First Name :</b> $app_data[fname]</td> 
<td rowspan=\"6\" style=\"width: 150px;\"><img style='width:100%;' src = './$table_name_app/$application_number"."_$app_data[donor_image]'></td>
</tr>
<tr>
<td class=\"\">2. </td><td class=\"tdwidth\"style=\"padding-left:5px\"><b> Last Name :</b> $app_data[lname]</td>
</tr>
<tr>
<td >3. </td><td style=\"padding-left:5px\"><b> Contact Number : </b> $app_data[phone]</td>
</tr>
<tr>
<td >4. </td><td colspan=\"3\" style=\"padding-left:5px\"><b> Blood Group :</b>$app_data[bloodgroup]</td>
</tr>
<tr>
<td>5. </td><td style=\"padding-left:5px\"><b> Address :</b>$app_data[address]</td>
</tr>
</tbody>
</table>
<br>
<br>
<button onClick=\"window.print()\">Print</button>
</div>
</center>";
