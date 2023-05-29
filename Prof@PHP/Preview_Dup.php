<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/prev2.css">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css1" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css1" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js1" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <title>::Confirmation Page::</title>
</head>
<body>

<?php
include 'Preview_db_response.php';
include 'Preview_db_response_img2.php';

if(isset($_POST['back'])){
    
    header('Location:../Edit_page.php');
}


error_reporting( E_ERROR | E_WARNING | E_PARSE);


print "<center><img class=\"tspsc_logo\" id=\"tspsc_logo\"    src=\"./Images/TSPSC_Logo.png\" alt=\"TSPSC Logo\"></center>";
print "<center><h4>TELANGANA STATE PUBLIC SERVICE COMMISSION :: HYDERABAD</h4>
<h5>GROUP-II SERVICES</h5>
<h5>(GENERAL RECRUITMENT)</h5>
<h5>SUPPLEMENTARY NOTIFICATION NO. 17/2016 TO NOTIFICATION NO. 20/2015, Dated.01/09/2016</h5></center>";

print " <center><div class=\"col-auto\"><table border=\"1px\" cellpadding=\"0\" class=\" table-striped \">
<tbody style=\"\">
<tr>
    <td class=\"slnum\">1. </td> <td colspan=\"3\" style=\"padding-left:5px\"><b> Unique Identification Number (UID)/Aadhaar Number :</b> $max_row[uid]</td> <td rowspan=\"6\" style=\"width: 150px;\"><img src = \"./$imgTableName/$tspscid"."_$max_row_imgTable[cand_image]\" alt=\"Candidate Photo\"></td></tr>
    <tr><td class=\"slnum\">2. </td><td class=\"tdwidth\"style=\"padding-left:5px\"><b> TSPSC ID :</b> $max_row[tspscid]</td><td class=\"slnum\">3.</td><td class=\"tdwidth\" style=\"padding-left:5px\"><b>Reference Id : </b>$max_row[refid]</td></tr>
    <tr><td class=\"slnum\">4. </td><td style=\"padding-left:5px\"><b> Candidate Name : </b> $max_row[cand_name]</td><td class=\"slnum\">5.</td><td class=\"tdwidth\" style=\"padding-left:5px\"><b> Father's/Husband`s Name :</b> $max_row[fath_hus_name]</td></tr>
    <tr><td class=\"slnum\">6. </td><td colspan=\"3\" style=\"padding-left:5px\"><b> Mother's Name :</b> $max_row[mother_name]</td></tr>
    <tr><td class=\"slnum\">7. </td><td style=\"padding-left:5px\"><b> Date of Birth :</b> $max_row[dob]</td><td class=\"slnum\">8.</td><td style=\"padding-left:5px\"><b> Gender : </b>$max_row[gender]</td></tr>
    <tr><td class=\"slnum\">9. </td><td colspan=\"3\" style=\"padding-left:5px\"><b>Address for communication :</b> $max_row[address]</td> <td></td></tr>
    <tr><td class=\"slnum\">10.</td><td colspan=\"3\"style=\"padding-left:5px\"><b>District/Mandal/Village :</b> $max_row[district]/$max_row[mandal]/$max_row[village]</td><td><img style=\"width:100%;\" src=\"./$imgTableName/$tspscid"."_$max_row_imgTable[cand_sign]\" alt=\"Candidate Signature\"></td></tr>
    <tr><td class=\"slnum\">11.</td><td colspan=\"3\"style=\"padding-left:5px\"><b>Pincode :</b> $max_row[pincode] <b>Mobile :</b> $max_row[mobile] <b>E-mail :</b> $max_row[email]</td><td rowspan=\"6\"></td></tr>
    <tr><td class=\"slnum\">12.</td><td colspan=\"3\" style=\"padding-left:5px\"><b>Community :</b> $max_row[community] </td></tr>
    <tr><td class=\"slnum\">13.</td><td colspan=\"3\" style=\"padding-left:5px\"><b>Identification Marks as per SSC certificate :</b> $max_row[identication_marks]</td></tr>
    <tr><td class=\"slnum\">14.</td><td colspan=\"3\" style=\"padding-left:5px\"><b>Are you an Ex-Service man : </b>$max_row[ex_service], <b>Govt Employment Status :</b> $max_row[employment]</td></tr>
    <tr><td class=\"slnum\">15.</td><td colspan=\"3\" style=\"padding-left:5px\"><b>Are you retrenched temporary employee in State Census department :</b> $max_row[temp_emp]</td></tr>
    <tr><td class=\"slnum\">16. </td><td style=\"padding-left:5px\"><b> Do you Worked as instructor in NCC :</b> $max_row[ncc_instructor]</td><td class=\"slnum\">17.</td><td style=\"padding-left:5px\"><b>Are you a PH-Person : </b>$max_row[ph_status]</td></tr>
    <tr><td class=\"slnum\">18. </td><td colspan=\"4\" style=\"padding-left:5px\"><b>Do You Possess Qualification and Eligibility for Post Codes 01, 04, 06, 07, 09 as per Notification? : </b>$max_row[eligibility_1_4_6_7_9]</td></tr>
    <tr><td class=\"slnum\">19. </td><td colspan=\"4\" style=\"padding-left:5px\"><b>Do You Possess Qualification and Eligibility for Post Code 02 as per Notification : </b>$max_row[eligibility_2]</td></tr>
    <tr><td class=\"slnum\">20. </td><td colspan=\"4\" style=\"padding-left:5px\"><b>Do You Possess Qualification and Eligibility for Post Code 03 as per Notification : </b>$max_row[eligibility_3]</td></tr>
    <tr><td class=\"slnum\">21. </td><td colspan=\"4\" style=\"padding-left:5px\"><b>Do You Possess Qualification, Eligibility and Physical Requirements For Pc. No. 05 as per Notification : </b>$max_row[eligibility_5]</td></tr>
    <tr><td class=\"slnum\">22. </td><td colspan=\"4\" style=\"padding-left:5px\"><b>Do You Profess Hindu Religion : </b>$max_row[hindu]</td></tr>
    <tr><td class=\"slnum\">23. </td><td colspan=\"4\" style=\"padding-left:5px\"><b>Do You Possess Qualification and Eligibility for Post Code 10 as per Notification : </b>$max_row[eligibility_10]</td></tr>
    <tr><td class=\"slnum\">24. </td><td colspan=\"4\" style=\"padding-left:5px\"><b>Do You Possess Qualification and Eligibility for Post Code 11 as per Notification : </b>$max_row[eligibility_11]</td></tr>
    <tr><td class=\"slnum\">25. </td><td colspan=\"4\" style=\"padding-left:5px\"><b>Do You Possess Qualification and Eligibility for Post Code 12 as per Notification : </b>$max_row[eligibility_12]</td></tr>
    <tr><td class=\"slnum\">26. </td><td colspan=\"4\" style=\"padding-left:5px\"><b>Do You Possess Qualification and Eligibility for Post Code 13 as per Notification : </b>$max_row[eligibility_13]</td></tr>
    <tr><td class=\"slnum\">27. </td><td colspan=\"4\" style=\"padding-left:5px\"><b>Applied Posts :
    <br></b>$max_row[applied_post1]<br>$max_row[applied_post2]<br>$max_row[applied_post3]<br>$max_row[applied_post4]<br>$max_row[applied_post5]<br>$max_row[applied_post6]<br>$max_row[applied_post7]<br>$max_row[applied_post8]<br>$max_row[applied_post9]<br>$max_row[applied_post10]<br>$max_row[applied_post11]<br>$max_row[applied_post12]<br>$max_row[applied_post13]<br></td></tr>
    <tr><td class=\"slnum\">27a. </td><td colspan=\"4\" style=\"padding-left:5px\"><b>Qualification : </b>$max_row[deg_status]  </td></tr>
    <tr><td class=\"slnum\">27b. </td><td colspan=\"4\" style=\"padding-left:5px\"><b>University : </b>$max_row[university]</td></tr>
    <tr><td class=\"slnum\">28. </td><td style=\"width: 440px; padding-left:5px\" ><b>Date of Acquiring Qualification : </b>$max_row[doa] <br> <b>Hallticket No. of Degree Examination : </b>$max_row[deg_htnum]</td><td class=\"slnum\">29.</td><td colspan=\"2\" style=\"padding-left:5px\"><b>Type of Study : </b>$max_row[typeofstudy]</td></tr>
    <tr><td class=\"slnum\">30. </td><td colspan=\"4\" style=\"padding-left:5px\"><b>Zone as Indicated by the Candidate in OTR : </b>$max_row[zone]</td></tr>
    
    </table><br>

    <table border=\"1px\" style=\"width:1000px;\" class=\"edu_details\">
    <tr><td colspan=\"9\"><center><b>31. Education Details  </b></center></td></tr>
    <tr><td style=\"max-width:123px; text-align: center;\">6th/Residence 1st yr</td><td style=\"max-width:123px ;text-align: center;\">7th/Residence 2nd yr</td><td style=\"max-width:123px ;text-align: center;\">8th/Residence 3rd yr</td><td style=\"max-width:123px ;text-align: center;\">9th/Residence 4th yr</td><td style=\"max-width:123px ;text-align: center;\">SSC</td><td style=\"max-width:123px ;text-align: center;\">Intermediate</td><td style=\"max-width:123px ;text-align: center;\">Degree</td></tr>
    <tr><td style=\"max-width:123px ;text-align: center;\">$max_row[cls6_loc]</td><td style=\"max-width:123px ;text-align: center;\">$max_row[cls7_loc]</td><td style=\"max-width:123px ;text-align: center;\">$max_row[cls8_loc]</td><td style=\"max-width:123px ;text-align: center;\">$max_row[cls9_loc]</td><td style=\"max-width:123px ;text-align: center;\">$max_row[ssc_loc]</td><td style=\"max-width:123px ;text-align: center;\">$max_row[inter_loc]</td><td style=\"max-width:123px ;text-align: center;\">$max_row[degree_loc]</td></tr>
</table> 
<br>

<table border=\"1px\">
<tr><td colspan=\"9\"><center><b>32. Payment Details </b> </center></td></tr>
<tr><td style=\"width:300px; text-align: center;\">Journal Number</td><td style=\"width:300px ;text-align: center;\">Payment Date</td><td style=\"width:300px ;text-align: center;\">Amount</td></tr>
<tr><td style=\"width:300px ;text-align: center;\">$max_row[journal_num]</td><td style=\"width:300px ;text-align: center;\">$max_row[payment_date]</td><td style=\"width:300px ;text-align: center;\">$max_row[fee]</td></tr>
</table>  
     <br>

<table border=\"1px\" >
<tr><td colspan=\"10\"><center> <b>33. Examination Centers  </></center></td></tr>
<tr><td style=\"width: 110px; padding-left:5px;\" ><b>Preference 1</b></td><td style=\"width: 110px;padding-left:5px\"><b>Preference 2</td><td style=\"width: 110px;padding-left:5px\"><b>Preference 3</td><td style=\"width: 110px; padding-left:5px\"><b>Preference 4</td><td style=\"width: 110px;padding-left:5px\"><b>Preference 5</td><td style=\"width: 110px;padding-left:5px\"><b>Preference 6</td><td style=\"width: 110px; padding-left:5px\"><b>Preference 7</td><td style=\"width: 110px;padding-left:5px\"><b>Preference 8</td><td style=\"width: 110px;padding-left:5px\"><b>Preference 9</td><td style=\"width: 110px;padding-left:5px;\"><b>Preference 10</td></tr>

<tr><td style=\"max-width: 110px;text-align: center;font-size:15px; word-wrap: break-word;\">$max_row[pref_1]</td><td style=\"max-width: 110px;text-align: center;font-size:15px;word-wrap: break-word;\">$max_row[pref_2]</td><td style=\"max-width: 110px;text-align: center;font-size:15px;word-wrap: break-word;\">$max_row[pref_3]</td><td style=\"max-width: 110px;text-align: center;font-size:15px;word-wrap: break-word;\">$max_row[pref_4]</td><td style=\"max-width: 110px;text-align: center;font-size:15px;word-wrap: break-word;\">$max_row[pref_5]</td><td style=\"max-width: 110px;text-align: center;font-size:15px;word-wrap: break-word;\">$max_row[pref_6]</td><td style=\"max-width: 110px;text-align: center;font-size:15px;word-wrap: break-word;\">$max_row[pref_7]</td><td style=\"max-width: 110px;text-align: center;font-size:15px;word-wrap: break-word;\">$max_row[pref_8]</td><td style=\"max-width: 110px;text-align: center;font-size:15px;word-wrap: break-word;\">$max_row[pref_9]</td><td style=\"max-width: 110px;text-align: center;font-size:15px;word-wrap: break-word;\">$max_row[pref_10]</td></tr>
</table> 

<br>
<br>
<table>
<tr><td ><center><u> Declaration </u></center></td></tr>
<tr><td style=\"width:auto;padding: 0px; \"><h5> I here by declare that all the entries/statements made in this application are true, complete and correct to the best of my knowledge and belief. In the event of any information being found false or incorrect or ineligibility being detected before or after the examination, the Commission can take action against me as per rule incase it is detected that I have misled Telangana State Public Service Commission on any issue then I will be solely responsible for all penal consequences thereof.</h5></td></tr>
<tr><td align=\"right\" style=\"padding-right: 20px;\">Sd/-</td></tr>
<tr><td align=\"right\" style=\"padding-right: 20px;\">$max_row[cand_name] ( $date )</td></tr>
</table>
<center><h6>Copyright ©2022. Telangana State Public Service Commission. All rights reserved.
</h6></center>   

<input type=\"button\" name=\"back\" id=\"myButton\" value=\"Back\">

<script>
document. getElementById(\"myButton\"). onclick = function () { location. href = \"./Application.php\"; };
</script>


     
                        
      <button onClick=\"window.print()\">Confirm & Print</button>
      </center>










</div>";
























?>