<?php include 'Preview_db_response.php'; ?>

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


<center><img class="tspsc_logo" id="tspsc_logo"    src="./Images/TSPSC_Logo.png" alt="TSPSC Logo"></center>
<center><h4>TELANGANA STATE PUBLIC SERVICE COMMISSION :: HYDERABAD</h4>
<h5>GROUP-II SERVICES</h5>
<h5>(GENERAL RECRUITMENT)</h5>
<h5>SUPPLEMENTARY NOTIFICATION NO. 17/2016 TO NOTIFICATION NO. 20/2015, Dated.01/09/2016</h5></center> <?php ?>


<center><div class="col-auto"><table border="1px" cellpadding="0" class=" table-striped">
<tbody>
<tr>
    <td class="slnum">1. </td> <td colspan="3" style="padding-left:5px"><b> Unique Identification Number (UID)/Aadhaar Number :</b> <?php echo $uid;?></td> <td rowspan="6" style="width: 150px;"><img src="" alt="Candidate Photo"><?php echo max_row[photo]; ?></td></tr>
    <tr><td class="slnum">2. </td><td class="tdwidth"style="padding-left:5px"><b> TSPSC ID :</b><?php echo $max_row['tspscid'];?></td><td class="slnum">3.</td><td class="tdwidth" style="padding-left:5px"><b>Reference Id : </b><?php echo max_row[refid];?></td></tr>
                    <tr><td class="slnum">4. </td><td style="padding-left:5px"><b> Candidate Name : </b><?php echo  max_row[cand_name];?></td><td class="slnum">5.</td><td class="tdwidth" style="padding-left:5px"><b> Father's/Husband`s Name :</b> <?php echo  max_row[fath_hus_name];?></td></tr>
                    <tr><td class="slnum">6. </td><td colspan="3" style="padding-left:5px"><b> Mother's Name :</b> <?php echo  max_row[mother_name];?></td></tr>
                    <tr><td class="slnum">7. </td><td style="padding-left:5px"><b> <b>Date of Birth :</b> <?php echo max_row[dob] ;?></td><td class="slnum">8.</td><td style="padding-left:5px"><b> Gender : </b><?php echo  max_row[gender];?></td></tr>
                    <tr><td class="slnum">9. </td><td colspan="3" style="padding-left:5px"><b>Address for communication :</b> <?php echo  max_row[address];?></td> <td></td></tr>
                    <tr><td class="slnum">10.</td><td colspan="3"style="padding-left:5px"><b>District/Mandal/Village :</b> <?php echo  max_row[district];?>/<?php echo  max_row[mandal];?>/<?php echo  max_row[village];?></td><td><img src="" alt="Candidate Signature"><?php echo  max_row[sign];?></td></tr>
                    <tr><td class="slnum">11.</td><td colspan="3"style="padding-left:5px"><b>Pincode :</b> <?php echo  max_row[pincode];?> <b>Mobile :</b> <?php echo  max_row[mobile];?> <b>E-mail :</b> <?php echo  max_row[email];?></td><td rowspan="6"></td></tr>
                    <tr><td class="slnum">12.</td><td colspan="3" style="padding-left:5px"><b>Community :</b> <?php echo  max_row[community];?> </td></tr>
                    <tr><td class="slnum">13.</td><td colspan="3" style="padding-left:5px"><b>Identification Marks as per SSC certificate :</b> <?php echo  max_row[identication_marks];?></td></tr>
                    <tr><td class="slnum">14.</td><td colspan="3" style="padding-left:5px"><b>Are you an Ex-Service man : </b><?php echo  max_row[ex_service];?> <b>Govt Employment Status :</b> <?php echo  max_row[employment];?></td></tr>
                    <tr><td class="slnum">15.</td><td colspan="3" style="padding-left:5px"><b>Are you retrenched temporary employee in State Census department :</b> <?php echo  max_row[temp_emp];?></td></tr>
                    <tr><td class="slnum">16. </td><td style="padding-left:5px"><b> Do you Worked as instructor in NCC :</b> <?php echo  max_row[ncc_instructor];?></td><td class="slnum">17.</td><td style="padding-left:5px"><b>Are you a PH-Person : </b><?php echo  max_row[ph_status];?></td></tr>
                    <tr><td class="slnum">18. </td><td colspan="4" style="padding-left:5px"><b>Do You Possess Qualification and Eligibility for Post Codes 01, 04, 06, 07, 09 as per Notification? : </b><?php echo  max_row[eligibility_1_4_6_7_9];?></td></tr>
                    <tr><td class="slnum">19. </td><td colspan="4" style="padding-left:5px"><b>Do You Possess Qualification and Eligibility for Post Code 02 as per Notification : </b><?php echo  max_row[eligibility_2];?></td></tr>
                    <tr><td class="slnum">20. </td><td colspan="4" style="padding-left:5px"><b>Do You Possess Qualification and Eligibility for Post Code 03 as per Notification : </b><?php echo  max_row[eligibility_3];?></td></tr>
                    <tr><td class="slnum">21. </td><td colspan="4" style="padding-left:5px"><b>Do You Possess Qualification, Eligibility and Physical Requirements For Pc. No. 05 as per Notification : </b><?php echo  max_row[eligibility_5];?></td></tr>
                    <tr><td class="slnum">22. </td><td colspan="4" style="padding-left:5px"><b>Do You Profess Hindu Religion : </b><?php echo  max_row[hindu];?></td></tr>
                    <tr><td class="slnum">23. </td><td colspan="4" style="padding-left:5px"><b>Do You Possess Qualification and Eligibility for Post Code 10 as per Notification : </b><?php echo  max_row[eligibility_10];?></td></tr>
                    <tr><td class="slnum">24. </td><td colspan="4" style="padding-left:5px"><b>Do You Possess Qualification and Eligibility for Post Code 11 as per Notification : </b><?php echo  max_row[eligibility_11];?></td></tr>
                    <tr><td class="slnum">25. </td><td colspan="4" style="padding-left:5px"><b>Do You Possess Qualification and Eligibility for Post Code 12 as per Notification : </b><?php echo  max_row[eligibility_12];?></td></tr>
                    <tr><td class="slnum">26. </td><td colspan="4" style="padding-left:5px"><b>Do You Possess Qualification and Eligibility for Post Code 13 as per Notification : </b><?php echo  max_row[eligibility_13];?></td></tr>
                    <tr><td class="slnum">27. </td><td colspan="4" style="padding-left:5px"><b>Applied Posts :
                    <br></b><?php echo  max_row[applied_post1];?><br><?php echo  max_row[applied_post2];?><br><?php echo  max_row[applied_post3];?><br><?php echo  max_row[applied_post4];?><br><?php echo  max_row[applied_post5];?><br><?php echo  max_row[applied_post6];?><br><?php echo  max_row[applied_post7];?><br><?php echo  max_row[applied_post8];?><br><?php echo  max_row[applied_post9];?><br><?php echo  max_row[applied_post10];?><br><?php echo  max_row[applied_post11];?><br><?php echo  max_row[applied_post12];?><br><?php echo  max_row[applied_post13];?><br></td></tr>
                    <tr><td class="slnum">27a. </td><td colspan="4" style="padding-left:5px"><b>Qualification : </b><?php echo  max_row[qualification];?>  </td></tr>
                    <tr><td class="slnum">27b. </td><td colspan="4" style="padding-left:5px"><b>University : </b><?php echo  max_row[university];?></td></tr>
                    <tr><td class="slnum">28. </td><td style="width: 440px; padding-left:5px" ><b>Date of Acquiring Qualification : </b><?php echo  max_row[doa];?> <br> <b>Hallticket No. of Degree Examination : </b><?php echo  max_row[deg_htnum];?></td><td class="slnum">29.</td><td colspan="2" style="padding-left:5px"><b>Type of Study : </b><?php echo  max_row[typeofstudy];?></td></tr>
                    <tr><td class="slnum">30. </td><td colspan="4" style="padding-left:5px"><b>Zone as Indicated by the Candidate in OTR : </b><?php echo  max_row[zone];?></td></tr>
                    
                    </table><br>


                    <table border="1px" style="width:1000px;" class="edu_details">
                   <tr><td colspan="9"><center><b>31. Education Details  </b></center></td></tr>
                   <tr><td style="max-width:123px; text-align: center;">6th/Residence 1st yr</td><td style="max-width:123px ;text-align: center;">7th/Residence 2nd yr</td><td style="max-width:123px ;text-align: center;">8th/Residence 3rd yr</td><td style="max-width:123px ;text-align: center;">9th/Residence 4th yr</td><td style="max-width:123px ;text-align: center;">SSC</td><td style="max-width:123px ;text-align: center;">Intermediate</td><td style="max-width:123px ;text-align: center;">Degree</td></tr>
                   <tr><td style="max-width:123px ;text-align: center;"><?php echo  max_row[cls6_loc];?></td><td style="max-width:123px ;text-align: center;"><?php echo  max_row[cls7_loc];?></td><td style="max-width:123px ;text-align: center;"><?php echo  max_row[cls8_loc];?></td><td style="max-width:123px ;text-align: center;"><?php echo  max_row[cls9_loc];?></td><td style="max-width:123px ;text-align: center;"><?php echo  max_row[ssc_loc];?></td><td style="max-width:123px ;text-align: center;"><?php echo  max_row[inter_loc];?></td><td style="max-width:123px ;text-align: center;"><?php echo  max_row[degree_loc];?></td></tr>
               </table> 
               <br>
               
               <table border="1px">
             <tr><td colspan="9"><center><b>32. Payment Details </b> </center></td></tr>
             <tr><td style="width:300px; text-align: center;">Journal Number</td><td style="width:300px ;text-align: center;">Payment Date</td><td style="width:300px ;text-align: center;">Amount</td></tr>
             <tr><td style="width:300px ;text-align: center;"><?php echo  max_row[journal_num];?></td><td style="width:300px ;text-align: center;"><?php echo  max_row[payment_date];?></td><td style="width:300px ;text-align: center;"><?php echo  max_row[fee];?></td></tr>
         </table>  
                    <br>

         <table border="1px" >
         <tr><td colspan="10"><center> <b>33. Examination Centers  </></center></td></tr>
         <tr><td style="width: 110px; padding-left:5px;" ><b>Preference 1</b></td><td style="width: 110px;padding-left:5px"><b>Preference 2</td><td style="width: 110px;padding-left:5px"><b>Preference 3</td><td style="width: 110px; padding-left:5px"><b>Preference 4</td><td style="width: 110px;padding-left:5px"><b>Preference 5</td><td style="width: 110px;padding-left:5px"><b>Preference 6</td><td style="width: 110px; padding-left:5px"><b>Preference 7</td><td style="width: 110px;padding-left:5px"><b>Preference 8</td><td style="width: 110px;padding-left:5px"><b>Preference 9</td><td style="width: 110px;padding-left:5px;"><b>Preference 10</td></tr>

         <tr><td style="max-width: 110px;text-align: center;font-size:15px; word-wrap: break-word;"><?php echo  max_row[pref_1];?></td><td style="max-width: 110px;text-align: center;font-size:15px;word-wrap: break-word;"><?php echo  max_row[pref_2];?></td><td style="max-width: 110px;text-align: center;font-size:15px;word-wrap: break-word;"><?php echo  max_row[pref_3];?></td><td style="max-width: 110px;text-align: center;font-size:15px;word-wrap: break-word;"><?php echo  max_row[pref_4];?></td><td style="max-width: 110px;text-align: center;font-size:15px;word-wrap: break-word;"><?php echo  max_row[pref_5];?></td><td style="max-width: 110px;text-align: center;font-size:15px;word-wrap: break-word;"><?php echo  max_row[pref_6];?></td><td style="max-width: 110px;text-align: center;font-size:15px;word-wrap: break-word;"><?php echo  max_row[pref_7];?></td><td style="max-width: 110px;text-align: center;font-size:15px;word-wrap: break-word;"><?php echo  max_row[pref_8];?></td><td style="max-width: 110px;text-align: center;font-size:15px;word-wrap: break-word;"><?php echo  max_row[pref_9];?></td><td style="max-width: 110px;text-align: center;font-size:15px;word-wrap: break-word;"><?php echo  max_row[pref_10];?></td></tr>
     </table> 

     <br>

     <table >
     <tr><td ><center><u> Declaration </u></center></td></tr>
     <tr><td style="width:auto;padding: 10px;"><h5> I here by declare that all the entries/statements made in this application are true, complete and correct to the best of my knowledge and belief. In the event of any information being found false or incorrect or ineligibility being detected before or after the examination, the Commission can take action against me as per rule incase it is detected that I have misled Telangana State Public Service Commission on any issue then I will be solely responsible for all penal consequences thereof.</h5></td></tr>
     <tr><td align="right" style="padding-right: 20px;">Sd/-</td></tr>
     <tr><td align="right" style="padding-right: 20px;"><?php echo  max_row[cand_name];?><?php echo  ($date);?></td></tr>
 </table>
 <center><h6>Copyright ©2022. Telangana State Public Service Commission. All rights reserved.
 </h6></center>   
            
 <input type="button" name="back" id="myButton" value="Back">
 <script>
 document. getElementById("myButton"). onclick = function () { location. href = "./Application.html"; };
 </script>



                    
                                       
                     <button onClick="window.print()">Confirm & Print</button>
                     </center>


    </div>
<?php 

$uid = $_REQUEST['uid'];


?>    

    

  


<!--


        
            
            <table >
                        <tr><td ><center> Declaration </center></td></tr>
                        <tr><td style="width:auto;padding: 10px;"><h5> I here by declare that all the entries/statements made in this application are true, complete and correct to the best of my knowledge and belief. In the event of any information being found false or incorrect or ineligibility being detected before or after the examination, the Commission can take action against me as per rule incase it is detected that I have misled Telangana State Public Service Commission on any issue then I will be solely responsible for all penal consequences thereof.</h5></td></tr>
                        <tr><td align="right" style="padding-right: 20px;">Sd/-</td></tr>
                        <tr><td align="right" style="padding-right: 20px;">---()</td></tr>
                    </table>
                    <center><h6>Copyright ©2022. Telangana State Public Service Commission. All rights reserved.
                    </h6></center>        
                    
                    
                    

                                       </table>
                    <table border="1px" style="width:100px;" class="edu_details">
                   <tr><td colspan="9"><center><b>31. Education Details  </b></center></td></tr>
                   <tr><td style="max-width:123px; text-align: center;">6th/Residence 1st yr</td><td style="max-width:123px ;text-align: center;">7th/Residence 2nd yr</td><td style="max-width:123px ;text-align: center;">8th/Residence 3rd yr</td><td style="max-width:123px ;text-align: center;">9th/Residence 4th yr</td><td style="max-width:123px ;text-align: center;">SSC</td><td style="max-width:123px ;text-align: center;">Intermediate</td><td style="max-width:123px ;text-align: center;">Degree</td></tr>
                   <tr><td style="max-width:123px ;text-align: center;"> $cls6_loc</td><td style="max-width:123px ;text-align: center;"> $cls7_loc</td><td style="max-width:123px ;text-align: center;"> $cls8_loc</td><td style="max-width:123px ;text-align: center;"> $cls9_loc</td><td style="max-width:123px ;text-align: center;"> $ssc_loc</td><td style="max-width:123px ;text-align: center;"> $inter_loc</td><td style="max-width:123px ;text-align: center;"> $degree_loc</td></tr>
               </table>
                   
            
                    <table border="1px">
             <tr><td colspan="9"><center><b>32. Payment Details </b> </center></td></tr>
             <tr><td style="width:300px; text-align: center;">Journal Number</td><td style="width:300px ;text-align: center;">Payment Date</td><td style="width:300px ;text-align: center;">Amount</td></tr>
             <tr><td style="width:300px ;text-align: center;"> $journal_num</td><td style="width:300px ;text-align: center;"> $payment_date</td><td style="width:300px ;text-align: center;"> $fee</td></tr>
         </table>  
        

         <table border="1px" >
            <tr><td colspan="10"><center> <b>33. Examination Centers  </></center></td></tr>
            <tr><td style="width: 110px; text-align: center; padding-left:5px;" ><b>Preference 1</b></td><td style="width: 110px;text-align: center;padding-left:5px"><b>Preference 2</td><td style="width: 110px;text-align: center;padding-left:5px"><b>Preference 3</td><td style="width: 110px; text-align: center;padding-left:5px"><b>Preference 4</td><td style="width: 110px;text-align: center;padding-left:5px"><b>Preference 5</td><td style="width: 110px;text-align: center;padding-left:5px"><b>Preference 6</td><td style="width: 110px; text-align: center;padding-left:5px"><b>Preference 7</td><td style="width: 110px;text-align: center;padding-left:5px"><b>Preference 8</td><td style="width: 110px;text-align: center;padding-left:5px"><b>Preference 9</td><td style="text-align: center;padding-left:5px"><b>Preference 10</td></tr>

            <tr><td style="max-width: 110px;text-align: center;font-size:15px;"> $pref_1</td><td style="max-width: 110px;text-align: center;font-size:15px;"> $pref_2</td><td style="max-width: 110px;text-align: center;font-size:15px;"> $pref_3</td><td style="max-width: 110px;text-align: center;font-size:15px;"> $pref_4</td><td style="max-width: 110px;text-align: center;font-size:15px;"> $pref_5</td><td style="max-width: 110px;text-align: center;font-size:15px;"> $pref_6</td><td style="max-width: 110px;text-align: center;font-size:15px;"> $pref_7</td><td style="max-width: 110px;text-align: center;font-size:15px;"> $pref_8</td><td style="max-width: 110px;text-align: center;font-size:15px;"> $pref_9</td><td style="max-width: 110px;text-align: center;font-size:15px;"> $pref_10</td></tr>
        </table> 


            
</table>
      

                    <table class="tab_decl">
                        <tr><td ><center><u> Declaration</u> </center></td></tr>
                        <tr><td style="width:auto;padding: 10px;"><h5 style="font-weight:normal"> I here by declare that all the entries/statements made in this application are true, complete and correct to the best of my knowledge and belief. In the event of any information being found false or incorrect or ineligibility being detected before or after the examination, the Commission can take action against me as per rule incase it is detected that I have misled Telangana State Public Service Commission on any issue then I will be solely responsible for all penal consequences thereof.</h5></td></tr>
                        <tr><td align="right" style="padding-right: 20px;">Sd/-</td></tr>
                        <tr><td align="right" style="padding-right: 20px;"> $cand_name.( $date)</td></tr>
                    </table>
                    <center><h6 style="font-weight:normal">Copyright ©2022. Telangana State Public Service Commission. All rights reserved.
                    </h6></center>

                    <button onclick="history.back()">Edit</button> 
                    
                     <button onClick="window.print()">Confirm & Print</button>




-->
        
</body>
</html>