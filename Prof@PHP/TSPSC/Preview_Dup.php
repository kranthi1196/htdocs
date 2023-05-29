<?php
//include 'preview_db_validations.php';
include 'preview_db_validations.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/prev2.css">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css1" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css1" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js1" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <title>::Confirmation Page::</title>
    <style>
        body{
            background-color:powderblue;
        }
    </style>
</head>
<body>

<?php
//include 'all_validations.php';
//include 'Preview_db_response.php';
//include 'Preview_db_response_img2.php';

// ./$img_Table_Name/$tspscid"."_$img_data[cand_image]
// '$img_table_name/".$tspscid.'_'.$img_data['cand_image']."'

if (isset($_POST['back'])) {

    header('Location:../TSPSC/Edit_page.php');
}

error_reporting(E_ERROR | E_WARNING | E_PARSE);

print "<center><img class=\"tspsc_logo\" id=\"tspsc_logo\"    src=\"../Images/TSPSC_Logo.png\" alt=\"TSPSC Logo\"></center>";
print "<center><h4>TELANGANA STATE PUBLIC SERVICE COMMISSION :: HYDERABAD</h4>
<h5>GROUP-II SERVICES</h5>
<h5>(GENERAL RECRUITMENT)</h5>
<h5>SUPPLEMENTARY NOTIFICATION NO. 17/2016 TO NOTIFICATION NO. 20/2015, Dated.01/09/2016</h5></center>";

print " <center><div class=\"col-auto\"><table border=\"1px\" cellpadding=\"0\" class=\" table-striped \">
<tbody style=\"\">
<tr>
    <td class=\"slnum\">1. </td> <td colspan=\"3\" style=\"padding-left:5px\"><b> Unique Identification Number (UID)/Aadhaar Number :</b> $app_data[uid]</td> <td rowspan=\"6\" style=\"width: 150px;\"> <img src='$img_table_name/$app_data[tspscid]".$img_data['cand_image']."'> </td></tr>
    <tr><td class=\"slnum\">2. </td><td class=\"tdwidth\"style=\"padding-left:5px\"><b> TSPSC ID :</b> $app_data[tspscid]</td><td class=\"slnum\">3.</td><td class=\"tdwidth\" style=\"padding-left:5px\"><b>Reference Id : </b>$app_data[refid]</td></tr>
    <tr><td class=\"slnum\">4. </td><td style=\"padding-left:5px\"><b> Candidate Name : </b> $app_data[cand_name]</td><td class=\"slnum\">5.</td><td class=\"tdwidth\" style=\"padding-left:5px\"><b> Father's/Husband`s Name :</b> $app_data[fath_hus_name]</td></tr>
    <tr><td class=\"slnum\">6. </td><td colspan=\"3\" style=\"padding-left:5px\"><b> Mother's Name :</b> $app_data[mother_name]</td></tr>
    <tr><td class=\"slnum\">7. </td><td style=\"padding-left:5px\"><b> Date of Birth :</b> $app_data[dob]</td><td class=\"slnum\">8.</td><td style=\"padding-left:5px\"><b> Gender : </b>$app_data[gender]</td></tr>
    <tr><td class=\"slnum\">9. </td><td colspan=\"3\" style=\"padding-left:5px\"><b>Address for communication :</b> $app_data[address]</td> <td></td></tr>
    <tr><td class=\"slnum\">10.</td><td colspan=\"3\"style=\"padding-left:5px\"><b>District/Mandal/Village :</b> $app_data[district]/$app_data[mandal]/$app_data[village]</td><td><img style=\"width:150px;height:50px;\" alt=\"Candidate Signature\" src = '$img_table_name/" . $tspscid . '_' . $img_data['cand_image'] . "' ></td></tr>
    <tr><td class=\"slnum\">11.</td><td colspan=\"3\"style=\"padding-left:5px\"><b>Pincode :</b> $app_data[pincode] <b>Mobile :</b> $app_data[mobile] <b>E-mail :</b> $app_data[email]</td><td rowspan=\"6\"></td></tr>
    <tr><td class=\"slnum\">12.</td><td colspan=\"3\" style=\"padding-left:5px\"><b>Community :</b> $app_data[community] </td></tr>
    <tr><td class=\"slnum\">13.</td><td colspan=\"3\" style=\"padding-left:5px\"><b>Identification Marks as per SSC certificate :</b> $app_data[identication_marks]</td></tr>
    <tr><td class=\"slnum\">14.</td><td colspan=\"3\" style=\"padding-left:5px\"><b>Are you an Ex-Service man : </b>$app_data[ex_service], <b>Govt Employment Status :</b> $app_data[employment]</td></tr>
    <tr><td class=\"slnum\">15.</td><td colspan=\"3\" style=\"padding-left:5px\"><b>Are you retrenched temporary employee in State Census department :</b> $app_data[temp_emp]</td></tr>
    <tr><td class=\"slnum\">16. </td><td style=\"padding-left:5px\"><b> Do you Worked as instructor in NCC :</b> $app_data[ncc_instructor]</td><td class=\"slnum\">17.</td><td style=\"padding-left:5px\"><b>Are you a PH-Person : </b>$app_data[ph_status]</td></tr>
    <tr><td class=\"slnum\">18. </td><td colspan=\"4\" style=\"padding-left:5px\"><b>Do You Possess Qualification and Eligibility for Post Codes 01, 04, 06, 07, 09 as per Notification? : </b>$app_data[eligibility_1_4_6_7_9]</td></tr>
    <tr><td class=\"slnum\">19. </td><td colspan=\"4\" style=\"padding-left:5px\"><b>Do You Possess Qualification and Eligibility for Post Code 02 as per Notification : </b>$app_data[eligibility_2]</td></tr>
    <tr><td class=\"slnum\">20. </td><td colspan=\"4\" style=\"padding-left:5px\"><b>Do You Possess Qualification and Eligibility for Post Code 03 as per Notification : </b>$app_data[eligibility_3]</td></tr>
    <tr><td class=\"slnum\">21. </td><td colspan=\"4\" style=\"padding-left:5px\"><b>Do You Possess Qualification, Eligibility and Physical Requirements For Pc. No. 05 as per Notification : </b>$app_data[eligibility_5]</td></tr>
    <tr><td class=\"slnum\">22. </td><td colspan=\"4\" style=\"padding-left:5px\"><b>Do You Profess Hindu Religion : </b>$app_data[hindu]</td></tr>
    <tr><td class=\"slnum\">23. </td><td colspan=\"4\" style=\"padding-left:5px\"><b>Do You Possess Qualification and Eligibility for Post Code 10 as per Notification : </b>$app_data[eligibility_10]</td></tr>
    <tr><td class=\"slnum\">24. </td><td colspan=\"4\" style=\"padding-left:5px\"><b>Do You Possess Qualification and Eligibility for Post Code 11 as per Notification : </b>$app_data[eligibility_11]</td></tr>
    <tr><td class=\"slnum\">25. </td><td colspan=\"4\" style=\"padding-left:5px\"><b>Do You Possess Qualification and Eligibility for Post Code 12 as per Notification : </b>$app_data[eligibility_12]</td></tr>
    <tr><td class=\"slnum\">26. </td><td colspan=\"4\" style=\"padding-left:5px\"><b>Do You Possess Qualification and Eligibility for Post Code 13 as per Notification : </b>$app_data[eligibility_13]</td></tr>
    <tr><td class=\"slnum\">27. </td><td colspan=\"4\" style=\"padding-left:5px\"><b>Applied Posts :
    <br></b>$app_data[applied_post1]<br>$app_data[applied_post2]<br>$app_data[applied_post3]<br>$app_data[applied_post4]<br>$app_data[applied_post5]<br>$app_data[applied_post6]<br>$app_data[applied_post7]<br>$app_data[applied_post8]<br>$app_data[applied_post9]<br>$app_data[applied_post10]<br>$app_data[applied_post11]<br>$app_data[applied_post12]<br>$app_data[applied_post13]<br></td></tr>
    <tr><td class=\"slnum\">27a. </td><td colspan=\"4\" style=\"padding-left:5px\"><b>Qualification : </b>$app_data[deg_status]  </td></tr>
    <tr><td class=\"slnum\">27b. </td><td colspan=\"4\" style=\"padding-left:5px\"><b>University : </b>$app_data[university]</td></tr>
    <tr><td class=\"slnum\">28. </td><td style=\"width: 440px; padding-left:5px\" ><b>Date of Acquiring Qualification : </b>$app_data[doa] <br> <b>Hallticket No. of Degree Examination : </b>$app_data[deg_htnum]</td><td class=\"slnum\">29.</td><td colspan=\"2\" style=\"padding-left:5px\"><b>Type of Study : </b>$app_data[typeofstudy]</td></tr>
    <tr><td class=\"slnum\">30. </td><td colspan=\"4\" style=\"padding-left:5px\"><b>Zone as Indicated by the Candidate in OTR : </b>$app_data[zone]</td></tr>

    </table><br>

    <table border=\"1px\" style=\"width:1000px;\" class=\"edu_details\">
    <tr><td colspan=\"9\"><center><b>31. Education Details  </b></center></td></tr>
    <tr><td style=\"max-width:123px; text-align: center;\">6th/Residence 1st yr</td><td style=\"max-width:123px ;text-align: center;\">7th/Residence 2nd yr</td><td style=\"max-width:123px ;text-align: center;\">8th/Residence 3rd yr</td><td style=\"max-width:123px ;text-align: center;\">9th/Residence 4th yr</td><td style=\"max-width:123px ;text-align: center;\">SSC</td><td style=\"max-width:123px ;text-align: center;\">Intermediate</td><td style=\"max-width:123px ;text-align: center;\">Degree</td></tr>
    <tr><td style=\"max-width:123px ;text-align: center;\">$app_data[cls6_loc]</td><td style=\"max-width:123px ;text-align: center;\">$app_data[cls7_loc]</td><td style=\"max-width:123px ;text-align: center;\">$app_data[cls8_loc]</td><td style=\"max-width:123px ;text-align: center;\">$app_data[cls9_loc]</td><td style=\"max-width:123px ;text-align: center;\">$app_data[ssc_loc]</td><td style=\"max-width:123px ;text-align: center;\">$app_data[inter_loc]</td><td style=\"max-width:123px ;text-align: center;\">$app_data[degree_loc]</td></tr>
</table>
<br>

<table border=\"1px\">
<tr><td colspan=\"9\"><center><b>32. Payment Details </b> </center></td></tr>
<tr><td style=\"width:300px; text-align: center;\">Journal Number</td><td style=\"width:300px ;text-align: center;\">Payment Date</td><td style=\"width:300px ;text-align: center;\">Amount</td></tr>
<tr><td style=\"width:300px ;text-align: center;\">$app_data[journal_num]</td><td style=\"width:300px ;text-align: center;\">$app_data[payment_date]</td><td style=\"width:300px ;text-align: center;\">$app_data[fee]</td></tr>
</table>
     <br>

<table border=\"1px\" >
<tr><td colspan=\"10\"><center> <b>33. Examination Centers  </></center></td></tr>
<tr><td style=\"width: 110px; padding-left:5px;\" ><b>Preference 1</b></td><td style=\"width: 110px;padding-left:5px\"><b>Preference 2</td><td style=\"width: 110px;padding-left:5px\"><b>Preference 3</td><td style=\"width: 110px; padding-left:5px\"><b>Preference 4</td><td style=\"width: 110px;padding-left:5px\"><b>Preference 5</td><td style=\"width: 110px;padding-left:5px\"><b>Preference 6</td><td style=\"width: 110px; padding-left:5px\"><b>Preference 7</td><td style=\"width: 110px;padding-left:5px\"><b>Preference 8</td><td style=\"width: 110px;padding-left:5px\"><b>Preference 9</td><td style=\"width: 110px;padding-left:5px;\"><b>Preference 10</td></tr>

<tr><td style=\"max-width: 110px;text-align: center;font-size:15px; word-wrap: break-word;\">$app_data[pref_1]</td><td style=\"max-width: 110px;text-align: center;font-size:15px;word-wrap: break-word;\">$app_data[pref_2]</td><td style=\"max-width: 110px;text-align: center;font-size:15px;word-wrap: break-word;\">$app_data[pref_3]</td><td style=\"max-width: 110px;text-align: center;font-size:15px;word-wrap: break-word;\">$app_data[pref_4]</td><td style=\"max-width: 110px;text-align: center;font-size:15px;word-wrap: break-word;\">$app_data[pref_5]</td><td style=\"max-width: 110px;text-align: center;font-size:15px;word-wrap: break-word;\">$app_data[pref_6]</td><td style=\"max-width: 110px;text-align: center;font-size:15px;word-wrap: break-word;\">$app_data[pref_7]</td><td style=\"max-width: 110px;text-align: center;font-size:15px;word-wrap: break-word;\">$app_data[pref_8]</td><td style=\"max-width: 110px;text-align: center;font-size:15px;word-wrap: break-word;\">$app_data[pref_9]</td><td style=\"max-width: 110px;text-align: center;font-size:15px;word-wrap: break-word;\">$app_data[pref_10]</td></tr>
</table>

<br>
<br>
<table>
<tr><td ><center><u> Declaration </u></center></td></tr>
<tr><td style=\"width:auto;padding: 0px; \"><h5> I here by declare that all the entries/statements made in this application are true, complete and correct to the best of my knowledge and belief. In the event of any information being found false or incorrect or ineligibility being detected before or after the examination, the Commission can take action against me as per rule incase it is detected that I have misled Telangana State Public Service Commission on any issue then I will be solely responsible for all penal consequences thereof.</h5></td></tr>
<tr><td align=\"right\" style=\"padding-right: 20px;\">Sd/-</td></tr>
<tr><td align=\"right\" style=\"padding-right: 20px;\">$app_data[cand_name] ( $app_data[date] )</td></tr>
</table>
<center><h6>Copyright ©2022. Telangana State Public Service Commission. All rights reserved.
</h6></center>

<input type=\"button\" name=\"back\" id=\"myButton\" value=\"Edit\">

<script>
document. getElementById(\"myButton\"). onclick = function () { location. href = \"../TSPSC/Application.php\"; };
</script>

      <button onClick=\"window.print()\">Confirm & Print</button>
      </center>

</div>";

?>