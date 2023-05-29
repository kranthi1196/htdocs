
<?php
error_reporting( E_ERROR | E_WARNING | E_PARSE);
include 'Preview_db_response.php';
include 'Preview_db_response_img2.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 2 Application</title>
    <link rel="stylesheet" type="text/css" href="../CSS/prev2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css1">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>

<script>
    document.addEventListener('contextmenu', event => event.preventDefault());
</script>
<!-- Code to Eliminate Repeating Options in a Dropdown-->
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
var code = {};
$("select[name='sortfilter'] > option").each(function () {
    if(code[this.text]) {
        $(this).remove();
    } else {
        code[this.text] = this.value;
    }
});
</script>

</head>
<body>

    <?php
if(isset($_SESSION['status']) && $_SESSION!=''){
    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hey!</strong> Your Data is Being Saved to the Data Base<!--<?php echo $_SESSION['status']; ?>-->
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php
unset($_SESSION['status']);
}
?>

    <center><img class="tspsc_logo" id="tspsc_logo"    src="../Images/TSPSC_Logo.png" alt="TSPSC Logo"><br><h1>TELANGANA STATE PUBLIC SERVICE COMMISSION :: HYDERABAD</h1>
    <h2>GROUP-II SERVICES</h2>
    <h2>(GENERAL RECRUITMENT)</h2>
    <h2>SUPPLEMENTARY NOTIFICATION NO. 17/2016 TO NOTIFICATION NO. 20/2015, Dated.01/09/2016</h2></center>
    <form action="preview_Dup.php" method="post" enctype = "multipart/form-data">
        <fieldset>
        <legend><b> Candidate Details.</b></legend>
        <table>
    <tr><br><td><b>Unique Identification Number (UID)/Aadhar Number * : </td><td><input type="text" name="uid"   onKeyup="this.value = this.value.toUpperCase()" value=""></b></td></tr>
    <tr><td><b>TSPSC ID * :</td> <td><input type="text" name="tspscid"   onKeyup="this.value = this.value.toUpperCase()" value=""></b></td></tr>
    <tr><td><b>Reference ID :</td><td><input type="text" name="refid" onKeyup="this.value = this.value.toUpperCase()" value=""></b></td></tr>
    <tr><td><b>Candidate Name * :</td><td><input type="text" name="cand_name"   onKeyup="this.value = this.value.toUpperCase()" value=""></b></td></tr>
    <tr><td><b>Father's/Husband's Name :</td><td><input type="text" name="fath_hus_name" id="" onKeyup="this.value = this.value.toUpperCase()" value=""></b></td></tr>
    <tr><td><b>Mother's Name :</td><td><input type="text" name="mother_name" onKeyup="this.value = this.value.toUpperCase()" value=""></b></td></tr> 
    <tr><td><b>Date of Birth * :</td><td><input type="calender" name="dob"   onKeyup="this.value = this.value.toUpperCase()" value=""></b></td></tr> 
    <tr><td><b>Gender :</td><td><input type="radio" name="gender" value="Male">Male <input type="radio" name="gender" value="Female">Female</b></td></tr> 
    <tr><td><b>Address for Communication :</td><td><input type="textarea" name="address" id="" onKeyup="this.value = this.value.toUpperCase()" value=""></b></td></tr> 
    <tr><td><b>District :</td><td><input type="text" name="district" id="" onKeyup="this.value = this.value.toUpperCase()" value=""></b></td></tr> 
    <tr><td><b>Mandal :</td><td><input type="text" name="mandal" onKeyup="this.value = this.value.toUpperCase()" value=""></b></td></tr> 
    <tr><td><b>Village :</td><td><input type="text" name="village" id="" onKeyup="this.value = this.value.toUpperCase()" value=""></b></td></tr> 
    <tr><td><b>Pincode :</td><td><input type="text" name="pincode" onKeyup="this.value = this.value.toUpperCase()" value=""></b></td></tr> 
    <tr><td><b>Mobile Number * :</td><td><input type="text" name="mobile" id=""   onKeyup="this.value = this.value.toUpperCase()" value=""></b></td></tr> 
    <tr><td><b>E-mail * :</td><td><input type="text" name="email" id=""    value=""></b></td></tr> 
    <tr><td><b>Community :</td><td><input type="radio"  name="community" value="SC">SC 
    <input type="radio" name="community" id="" value="ST">ST
    <input type="radio" name="community" id="" value="OBC">OBC</b></td></tr> 
    <tr><td><b>Identification Marks as per SSC Certificate :</td><td><input type="text" name="identication_marks" id="" onKeyup="this.value = this.value.toUpperCase()" value=""></b></td></tr> 
    <tr><td><b>Are you and Ex Service man :</td><td><input type="radio" name="ex_service" id="" value="Yes" value="Yes">Yes <input type="radio" name="ex_service" id="" value="No" value="No">No</b></td></tr> 
    <tr><td><b>Govt Employment Status :</td><td><input type="radio" name="employment" value="Yes" value="Yes">Yes <input type="radio" name="employment" id="" value="No" value="No">No</b></td></tr> 
    <tr><td><b>Are you retrenched temporary employee in State Census Department :</td><td><input type="radio" name="temp_emp" id="" value="Yes" value="Yes">Yes <input type="radio" name="temp_emp" id="" value="No" value="No">No</b></td></tr> 
    <tr><td><b>Worked as Instructor in NCC :</td><td><input type="radio" name="ncc_instructor" id=""  value="Yes">Yes <input type="radio" name="ncc_instructor" id="" value="No">No</b></td></tr> 
    <tr><td><b>Are you a Physically Handicapped :</td><td><input type="radio" name="ph_status" id="" value="Yes">Yes <input type="radio" name="ph_status" id="" value="No">No<b></td></tr> 

    <tr><td><b>Do You Possess Qualification and Eligibility for Post Codes 01, 04, 06, 07, 09 as per Notification? :</td><td><input type="radio" name="eligibility_1_4_6_7_9" id="" value="Yes"> Yes <input type="radio" name="eligibility_1_4_6_7_9" id="" value="No">No</b></td></tr> 
    <tr><td><b>Do You Possess Qualification and Eligibility for Post Code 02 as per Notification :</td><td><input type="radio" name="eligibility_2" id="" value="Yes">Yes <input type="radio" name="eligibility_2" id="" value="No">No</b></td></tr> 
    <tr><td><b>Do You Possess Qualification and Eligibility for Post Code 03 as per Notification :</td><td><input type="radio" name="eligibility_3" id="" value="Yes">Yes <input type="radio" name="eligibility_3" id="" value="No">No</b></td></tr> 
    <tr><td><b>Do You Possess Qualification, Eligibility and Physical Requirements For Pc. No. 05 as per Notification :</td><td><input type="radio" name="eligibility_5" id="" value="Yes">Yes <input type="radio" name="eligibility_5" id="" value="No">No</b></td></tr> 
    <tr><td><b>Do You Profess Hindu Religion :</td><td><input type="radio" name="hindu" id="" value="Yes">Yes <input type="radio" name="hindu" id="" value="No">No</b></td></tr> 
    <tr><td><b>Do You Possess Qualification and Eligibility for Post Code 10 as per Notification :</td><td><input type="radio" name="eligibility_10" id="" value="Yes">Yes <input type="radio" name="eligibility_10" id="" value="No">No</b></td></tr> 
    <tr><td><b>Do You Possess Qualification and Eligibility for Post Code 11 as per Notification :</td><td><input type="radio" name="eligibility_11" id="" value="Yes">Yes <input type="radio" name="eligibility_11" id="" value="No">No</b></td></tr> 
    <tr><td><b>Do You Possess Qualification and Eligibility for Post Code 12 as per Notification :</td><td><input type="radio" name="eligibility_12" id="" value="Yes">Yes <input type="radio" name="eligibility_12" id="" value="No">No</b></td></tr> 
    <tr><td><b>Do You Possess Qualification and Eligibility for Post Code 13 as per Notification :</td><td><input type="radio" name="eligibility_13" id="" value="Yes">Yes <input type="radio" name="eligibility_13" id="" value="No">No</b></td></tr> 
    <tr><td><b>Apply for the Post :</b></td><td><input type="checkbox" name="applied_post1" id="" value="1. Municipal Commissioner Gr.III in (Municipal Administration Sub Service) ">1. Municipal Commissioner Gr.III in (Municipal Administration Sub Service) <br>
        <input type="checkbox" name="applied_post2" id="" value="2. Assistant Commercial Tax Officer (Commercial Tax Sub-Service)">2. Assistant Commercial Tax Officer (Commercial Tax Sub-Service) <br>        
        <input type="checkbox" name="applied_post3" id="" value="3. Sub-Registrar Gr.II (Registration Sub - Service)">3. Sub-Registrar Gr.II (Registration Sub - Service) <br>
        <input type="checkbox" name="applied_post4" id="" value="4. Extension Officer (Panchayat Raj and Rural Development Sub Service)">4. Extension Officer (Panchayat Raj and Rural Development Sub Service) <br>
        <input type="checkbox" name="applied_post5" id="" value="5. Prohibition and Excise Sub Inspector (Excise Sub-Service)">5. Prohibition and Excise Sub Inspector (Excise Sub-Service) <br>
        <input type="checkbox" name="applied_post6" id="" value="6. Deputy Tahsildar in Land Administration">6. Deputy Tahsildar in Land Administration <br>
        <input type="checkbox" name="applied_post7" id="" value="7. Assistant Registrar in Registrar of Co - operative Societies">7. Assistant Registrar in Registrar of Co - operative Societies <br>
        <input type="checkbox" name="applied_post8" id="" value="8. Executive Officer Grade-I in Endowments Department">8. Executive Officer Grade-I in Endowments Department <br>
        <input type="checkbox" name="applied_post9" id="" value="9. Assistant Labour officer in Commissioner of Labour Department">9. Assistant Labour officer in Commissioner of Labour Department <br>
        <input type="checkbox" name="applied_post10" id="" value="10. Assistant Development Officer in Handlooms & Textiles">10. Assistant Development Officer in Handlooms & Textiles <br>
        <input type="checkbox" name="applied_post11" id="" value="11. Assistant Section Officer GAD(Single Unit) Secretariat">11. Assistant Section Officer GAD(Single Unit) Secretariat <br>
        <input type="checkbox" name="applied_post12" id="" value="12. Assistant Section Officer in Finance Department Secretariat ">12. Assistant Section Officer in Finance Department Secretariat <br>
        <input type="checkbox" name="applied_post13" id="" value="13. Assistant Section Officer in Law Department Secretariat">13. Assistant Section Officer in Law Department Secretariat</td></tr>
    </table>
</fieldset>
<br>
<fieldset>
    <legend><b> Academic Details.</b></legend>
    <table style="width: inherit;">

    <tr><td><b>Do You Posesses A Bachelor's Degree :</td><td><input type="radio" name="deg_status" id="" value="Yes">Yes <input type="radio" name="deg_status" id="" value="No">No<b></td></tr> 
    <tr><td><b>University :</b></td><td><input type="text" name="university" id="" onKeyup="this.value = this.value.toUpperCase()" value=""></td></tr>
    <tr><td><b>Date of Acquiring Qualification :</b></td><td><input type="text"  name="doa" id="" onKeyup="this.value = this.value.toUpperCase()" value=""></td></tr>
    <tr><td><b>Hallticket No. of Degree Examination * :</b></td><td><input type="text"   name="deg_htnum" id="" onKeyup="this.value = this.value.toUpperCase()" value=""></td></tr>
    <tr><td><b>Type of Study</b></td><td><input type="radio" name="typeofstudy" id="" value="Regular">Regular <input type="radio" name="typeofstudy" id="" value="Distance"> Distance</td></tr>
    <tr><td><b>Zone as Indicated by the Candidate in OTR * :</b></td><td><input type="radio"   name="zone" id="" value="Zone - I">Zone I
    <input type="radio" name="zone" id="" value="Zone - II">Zone II 
    <input type="radio" name="zone" id="" value="Zone - III">Zone III
    <input type="radio" name="zone" id="" value="Zone - IV">Zone IV 
    <input type="radio" name="zone" id="" value="Zone - V">Zone V
    <input type="radio" name="zone" id="" value="Zone - VI">Zone VI</td></tr>
</table>
</fieldset>   
<br>
<fieldset>
    <legend><b> Education Details.</b></legend>
    <table>
    
    <tr><td><b>Degree :</b></td><td>
        <select name="degree_loc" id="" value="">
        <option name="sortfilter" value="Select">Select Your District</option>
        <option name="sortfilter" value="ADILABAD">ADILABAD</option>
        <option name="sortfilter" value="BHADRADRI KOTHAGUDEM">BHADRADRI KOTHAGUDEM</option>
        <option name="sortfilter" value="HANUMAKONDA">HANUMAKONDA</option>
        <option name="sortfilter" value="HYDERABAD">HYDERABAD</option>
        <option name="sortfilter" value="JAGTIAL">JAGTIAL</option>
        <option name="sortfilter" value="JANGOAN">JANGOAN</option>
        <option name="sortfilter" value="JAYASHANKAR BHOOPALPALLY">JAYASHANKAR BHOOPALPALLY</option>
        <option name="sortfilter" value="JOGULAMBA GADWAL">JOGULAMBA GADWAL</option>
        <option name="sortfilter" value="KAMAREDDY">KAMAREDDY</option>
        <option name="sortfilter" value="KARIMNAGAR">KARIMNAGAR</option>
        <option name="sortfilter" value="KHAMMAM">KHAMMAM</option>
        <option name="sortfilter" value="KOMARAM BHEEM ASIFABAD">KOMARAM BHEEM ASIFABAD</option>
        <option name="sortfilter" value="MAHABUBABAD">MAHABUBABAD</option>
        <option name="sortfilter" value="MAHABUBNAGAR">MAHABUBNAGAR</option>
        <option name="sortfilter" value="MANCHERIAL">MANCHERIAL</option>
        <option name="sortfilter" value="MEDAK">MEDAK</option>
        <option name="sortfilter" value="MEDCHAL-MALKAJGIRI">MEDCHAL-MALKAJGIRI</option>
        <option name="sortfilter" value="MULUGU">MULUGU</option>
        <option name="sortfilter" value="NAGARKURNOOL">NAGARKURNOOL</option>
        <option name="sortfilter" value="NALGONDA">NALGONDA</option>
        <option name="sortfilter" value="NARAYANPET">NARAYANPET</option>
        <option name="sortfilter" value="NIRMAL">NIRMAL</option>
        <option name="sortfilter" value="NIZAMABAD">NIZAMABAD</option>
        <option name="sortfilter" value="PEDDAPALLI">PEDDAPALLI</option>
        <option name="sortfilter" value="RAJANNA SIRCILLA">RAJANNA SIRCILLA</option>
        <option name="sortfilter" value="RANGAREDDY">RANGAREDDY</option>
        <option name="sortfilter" value="SANGAREDDY">SANGAREDDY</option>
        <option name="sortfilter" value="SIDDIPET">SIDDIPET</option>
        <option name="sortfilter" value="SURYAPET">SURYAPET</option>
        <option name="sortfilter" value="VIKARABAD">VIKARABAD</option>
        <option name="sortfilter" value="WANAPARTHY">WANAPARTHY</option>
        <option name="sortfilter" value="WARANGAL">WARANGAL</option>
        <option name="sortfilter" value="YADADRI BHUVANAGIRI">YADADRI BHUVANAGIRI</option>
        </select>
         &nbsp; &nbsp;<input type="text" name="degree_mandal_loc" id="" onKeyup="this.value = this.value.toUpperCase()" value="">&nbsp; &nbsp;<input type="text" name="degree_village_loc" id="" onKeyup="this.value = this.value.toUpperCase()" value=""></td></tr>

         <tr><td><b>Intermediate :</b></td><td>
            <select name="inter_loc" id="" value="">
                <option name="sortfilter" value="Select">Select Your District</option>
                <option name="sortfilter" value="ADILABAD">ADILABAD</option>
                <option name="sortfilter" value="BHADRADRI KOTHAGUDEM">BHADRADRI KOTHAGUDEM</option>
                <option name="sortfilter" value="HANUMAKONDA">HANUMAKONDA</option>
                <option name="sortfilter" value="HYDERABAD">HYDERABAD</option>
                <option name="sortfilter" value="JAGTIAL">JAGTIAL</option>
                <option name="sortfilter" value="JANGOAN">JANGOAN</option>
                <option name="sortfilter" value="JAYASHANKAR BHOOPALPALLY">JAYASHANKAR BHOOPALPALLY</option>
                <option name="sortfilter" value="JOGULAMBA GADWAL">JOGULAMBA GADWAL</option>
                <option name="sortfilter" value="KAMAREDDY">KAMAREDDY</option>
                <option name="sortfilter" value="KARIMNAGAR">KARIMNAGAR</option>
                <option name="sortfilter" value="KHAMMAM">KHAMMAM</option>
                <option name="sortfilter" value="KOMARAM BHEEM ASIFABAD">KOMARAM BHEEM ASIFABAD</option>
                <option name="sortfilter" value="MAHABUBABAD">MAHABUBABAD</option>
                <option name="sortfilter" value="MAHABUBNAGAR">MAHABUBNAGAR</option>
                <option name="sortfilter" value="MANCHERIAL">MANCHERIAL</option>
                <option name="sortfilter" value="MEDAK">MEDAK</option>
                <option name="sortfilter" value="MEDCHAL-MALKAJGIRI">MEDCHAL-MALKAJGIRI</option>
                <option name="sortfilter" value="MULUGU">MULUGU</option>
                <option name="sortfilter" value="NAGARKURNOOL">NAGARKURNOOL</option>
                <option name="sortfilter" value="NALGONDA">NALGONDA</option>
                <option name="sortfilter" value="NARAYANPET">NARAYANPET</option>
                <option name="sortfilter" value="NIRMAL">NIRMAL</option>
                <option name="sortfilter" value="NIZAMABAD">NIZAMABAD</option>
                <option name="sortfilter" value="PEDDAPALLI">PEDDAPALLI</option>
                <option name="sortfilter" value="RAJANNA SIRCILLA">RAJANNA SIRCILLA</option>
                <option name="sortfilter" value="RANGAREDDY">RANGAREDDY</option>
                <option name="sortfilter" value="SANGAREDDY">SANGAREDDY</option>
                <option name="sortfilter" value="SIDDIPET">SIDDIPET</option>
                <option name="sortfilter" value="SURYAPET">SURYAPET</option>
                <option name="sortfilter" value="VIKARABAD">VIKARABAD</option>
                <option name="sortfilter" value="WANAPARTHY">WANAPARTHY</option>
                <option name="sortfilter" value="WARANGAL">WARANGAL</option>
                <option name="sortfilter" value="YADADRI BHUVANAGIRI">YADADRI BHUVANAGIRI</option>
            </select>
             &nbsp; &nbsp;<input type="text" name="inter_mandal_loc" id="" onKeyup="this.value = this.value.toUpperCase()" value="">&nbsp; &nbsp;<input type="text" name="inter_village_loc" id="" onKeyup="this.value = this.value.toUpperCase()" value=""></td></tr>

             <tr><td><b>SSC :</b></td><td>
                <select name="ssc_loc" id="" value="">
                    <option name="sortfilter" value="Select">Select Your District</option>
        <option name="sortfilter" value="ADILABAD">ADILABAD</option>
        <option name="sortfilter" value="BHADRADRI KOTHAGUDEM">BHADRADRI KOTHAGUDEM</option>
        <option name="sortfilter" value="HANUMAKONDA">HANUMAKONDA</option>
        <option name="sortfilter" value="HYDERABAD">HYDERABAD</option>
        <option name="sortfilter" value="JAGTIAL">JAGTIAL</option>
        <option name="sortfilter" value="JANGOAN">JANGOAN</option>
        <option name="sortfilter" value="JAYASHANKAR BHOOPALPALLY">JAYASHANKAR BHOOPALPALLY</option>
        <option name="sortfilter" value="JOGULAMBA GADWAL">JOGULAMBA GADWAL</option>
        <option name="sortfilter" value="KAMAREDDY">KAMAREDDY</option>
        <option name="sortfilter" value="KARIMNAGAR">KARIMNAGAR</option>
        <option name="sortfilter" value="KHAMMAM">KHAMMAM</option>
        <option name="sortfilter" value="KOMARAM BHEEM ASIFABAD">KOMARAM BHEEM ASIFABAD</option>
        <option name="sortfilter" value="MAHABUBABAD">MAHABUBABAD</option>
        <option name="sortfilter" value="MAHABUBNAGAR">MAHABUBNAGAR</option>
        <option name="sortfilter" value="MANCHERIAL">MANCHERIAL</option>
        <option name="sortfilter" value="MEDAK">MEDAK</option>
        <option name="sortfilter" value="MEDCHAL-MALKAJGIRI">MEDCHAL-MALKAJGIRI</option>
        <option name="sortfilter" value="MULUGU">MULUGU</option>
        <option name="sortfilter" value="NAGARKURNOOL">NAGARKURNOOL</option>
        <option name="sortfilter" value="NALGONDA">NALGONDA</option>
        <option name="sortfilter" value="NARAYANPET">NARAYANPET</option>
        <option name="sortfilter" value="NIRMAL">NIRMAL</option>
        <option name="sortfilter" value="NIZAMABAD">NIZAMABAD</option>
        <option name="sortfilter" value="PEDDAPALLI">PEDDAPALLI</option>
        <option name="sortfilter" value="RAJANNA SIRCILLA">RAJANNA SIRCILLA</option>
        <option name="sortfilter" value="RANGAREDDY">RANGAREDDY</option>
        <option name="sortfilter" value="SANGAREDDY">SANGAREDDY</option>
        <option name="sortfilter" value="SIDDIPET">SIDDIPET</option>
        <option name="sortfilter" value="SURYAPET">SURYAPET</option>
        <option name="sortfilter" value="VIKARABAD">VIKARABAD</option>
        <option name="sortfilter" value="WANAPARTHY">WANAPARTHY</option>
        <option name="sortfilter" value="WARANGAL">WARANGAL</option>
        <option name="sortfilter" value="YADADRI BHUVANAGIRI">YADADRI BHUVANAGIRI</option>
                </select>
                 &nbsp; &nbsp;<input type="text" name="ssc_mandal_loc" id="" onKeyup="this.value = this.value.toUpperCase()" value="">&nbsp; &nbsp;<input type="text" name="ssc_village_loc" id="" onKeyup="this.value = this.value.toUpperCase()" value=""></td></tr>
                 
                 <tr><td><b>9th :</b></td><td>
                    <select name="cls9_loc" id="" value="">
                        <option name="sortfilter" value="Select">Select Your District</option>
                        <option name="sortfilter" value="Select">Select Your District</option>
        <option name="sortfilter" value="ADILABAD">ADILABAD</option>
        <option name="sortfilter" value="BHADRADRI KOTHAGUDEM">BHADRADRI KOTHAGUDEM</option>
        <option name="sortfilter" value="HANUMAKONDA">HANUMAKONDA</option>
        <option name="sortfilter" value="HYDERABAD">HYDERABAD</option>
        <option name="sortfilter" value="JAGTIAL">JAGTIAL</option>
        <option name="sortfilter" value="JANGOAN">JANGOAN</option>
        <option name="sortfilter" value="JAYASHANKAR BHOOPALPALLY">JAYASHANKAR BHOOPALPALLY</option>
        <option name="sortfilter" value="JOGULAMBA GADWAL">JOGULAMBA GADWAL</option>
        <option name="sortfilter" value="KAMAREDDY">KAMAREDDY</option>
        <option name="sortfilter" value="KARIMNAGAR">KARIMNAGAR</option>
        <option name="sortfilter" value="KHAMMAM">KHAMMAM</option>
        <option name="sortfilter" value="KOMARAM BHEEM ASIFABAD">KOMARAM BHEEM ASIFABAD</option>
        <option name="sortfilter" value="MAHABUBABAD">MAHABUBABAD</option>
        <option name="sortfilter" value="MAHABUBNAGAR">MAHABUBNAGAR</option>
        <option name="sortfilter" value="MANCHERIAL">MANCHERIAL</option>
        <option name="sortfilter" value="MEDAK">MEDAK</option>
        <option name="sortfilter" value="MEDCHAL-MALKAJGIRI">MEDCHAL-MALKAJGIRI</option>
        <option name="sortfilter" value="MULUGU">MULUGU</option>
        <option name="sortfilter" value="NAGARKURNOOL">NAGARKURNOOL</option>
        <option name="sortfilter" value="NALGONDA">NALGONDA</option>
        <option name="sortfilter" value="NARAYANPET">NARAYANPET</option>
        <option name="sortfilter" value="NIRMAL">NIRMAL</option>
        <option name="sortfilter" value="NIZAMABAD">NIZAMABAD</option>
        <option name="sortfilter" value="PEDDAPALLI">PEDDAPALLI</option>
        <option name="sortfilter" value="RAJANNA SIRCILLA">RAJANNA SIRCILLA</option>
        <option name="sortfilter" value="RANGAREDDY">RANGAREDDY</option>
        <option name="sortfilter" value="SANGAREDDY">SANGAREDDY</option>
        <option name="sortfilter" value="SIDDIPET">SIDDIPET</option>
        <option name="sortfilter" value="SURYAPET">SURYAPET</option>
        <option name="sortfilter" value="VIKARABAD">VIKARABAD</option>
        <option name="sortfilter" value="WANAPARTHY">WANAPARTHY</option>
        <option name="sortfilter" value="WARANGAL">WARANGAL</option>
        <option name="sortfilter" value="YADADRI BHUVANAGIRI">YADADRI BHUVANAGIRI</option>
                    </select>
                     &nbsp; &nbsp;<input type="text" name="cls9_mandal_loc" id="" onKeyup="this.value = this.value.toUpperCase()" value="">&nbsp; &nbsp;<input type="text" name="cls9_village_loc" id="" onKeyup="this.value = this.value.toUpperCase()" value=""></td></tr>


                     <tr><td><b>8th :</b></td><td>
                        <select name="cls8_loc" id="" value="">
                            <option name="sortfilter" value="Select">Select Your District</option>
        <option name="sortfilter" value="ADILABAD">ADILABAD</option>
        <option name="sortfilter" value="BHADRADRI KOTHAGUDEM">BHADRADRI KOTHAGUDEM</option>
        <option name="sortfilter" value="HANUMAKONDA">HANUMAKONDA</option>
        <option name="sortfilter" value="HYDERABAD">HYDERABAD</option>
        <option name="sortfilter" value="JAGTIAL">JAGTIAL</option>
        <option name="sortfilter" value="JANGOAN">JANGOAN</option>
        <option name="sortfilter" value="JAYASHANKAR BHOOPALPALLY">JAYASHANKAR BHOOPALPALLY</option>
        <option name="sortfilter" value="JOGULAMBA GADWAL">JOGULAMBA GADWAL</option>
        <option name="sortfilter" value="KAMAREDDY">KAMAREDDY</option>
        <option name="sortfilter" value="KARIMNAGAR">KARIMNAGAR</option>
        <option name="sortfilter" value="KHAMMAM">KHAMMAM</option>
        <option name="sortfilter" value="KOMARAM BHEEM ASIFABAD">KOMARAM BHEEM ASIFABAD</option>
        <option name="sortfilter" value="MAHABUBABAD">MAHABUBABAD</option>
        <option name="sortfilter" value="MAHABUBNAGAR">MAHABUBNAGAR</option>
        <option name="sortfilter" value="MANCHERIAL">MANCHERIAL</option>
        <option name="sortfilter" value="MEDAK">MEDAK</option>
        <option name="sortfilter" value="MEDCHAL-MALKAJGIRI">MEDCHAL-MALKAJGIRI</option>
        <option name="sortfilter" value="MULUGU">MULUGU</option>
        <option name="sortfilter" value="NAGARKURNOOL">NAGARKURNOOL</option>
        <option name="sortfilter" value="NALGONDA">NALGONDA</option>
        <option name="sortfilter" value="NARAYANPET">NARAYANPET</option>
        <option name="sortfilter" value="NIRMAL">NIRMAL</option>
        <option name="sortfilter" value="NIZAMABAD">NIZAMABAD</option>
        <option name="sortfilter" value="PEDDAPALLI">PEDDAPALLI</option>
        <option name="sortfilter" value="RAJANNA SIRCILLA">RAJANNA SIRCILLA</option>
        <option name="sortfilter" value="RANGAREDDY">RANGAREDDY</option>
        <option name="sortfilter" value="SANGAREDDY">SANGAREDDY</option>
        <option name="sortfilter" value="SIDDIPET">SIDDIPET</option>
        <option name="sortfilter" value="SURYAPET">SURYAPET</option>
        <option name="sortfilter" value="VIKARABAD">VIKARABAD</option>
        <option name="sortfilter" value="WANAPARTHY">WANAPARTHY</option>
        <option name="sortfilter" value="WARANGAL">WARANGAL</option>
        <option name="sortfilter" value="YADADRI BHUVANAGIRI">YADADRI BHUVANAGIRI</option>
                        </select>
                         &nbsp; &nbsp;<input type="text" name="cls8_mandal_loc" id="" onKeyup="this.value = this.value.toUpperCase()" value="">&nbsp; &nbsp;<input type="text" name="cls8_village_loc" id="" onKeyup="this.value = this.value.toUpperCase()" value=""></td></tr>

                         <tr><td><b>7th :</b></td><td>
                            <select name="cls7_loc" id="" value="">
                                <option name="sortfilter" value="Select">Select Your District</option>
        <option name="sortfilter" value="ADILABAD">ADILABAD</option>
        <option name="sortfilter" value="BHADRADRI KOTHAGUDEM">BHADRADRI KOTHAGUDEM</option>
        <option name="sortfilter" value="HANUMAKONDA">HANUMAKONDA</option>
        <option name="sortfilter" value="HYDERABAD">HYDERABAD</option>
        <option name="sortfilter" value="JAGTIAL">JAGTIAL</option>
        <option name="sortfilter" value="JANGOAN">JANGOAN</option>
        <option name="sortfilter" value="JAYASHANKAR BHOOPALPALLY">JAYASHANKAR BHOOPALPALLY</option>
        <option name="sortfilter" value="JOGULAMBA GADWAL">JOGULAMBA GADWAL</option>
        <option name="sortfilter" value="KAMAREDDY">KAMAREDDY</option>
        <option name="sortfilter" value="KARIMNAGAR">KARIMNAGAR</option>
        <option name="sortfilter" value="KHAMMAM">KHAMMAM</option>
        <option name="sortfilter" value="KOMARAM BHEEM ASIFABAD">KOMARAM BHEEM ASIFABAD</option>
        <option name="sortfilter" value="MAHABUBABAD">MAHABUBABAD</option>
        <option name="sortfilter" value="MAHABUBNAGAR">MAHABUBNAGAR</option>
        <option name="sortfilter" value="MANCHERIAL">MANCHERIAL</option>
        <option name="sortfilter" value="MEDAK">MEDAK</option>
        <option name="sortfilter" value="MEDCHAL-MALKAJGIRI">MEDCHAL-MALKAJGIRI</option>
        <option name="sortfilter" value="MULUGU">MULUGU</option>
        <option name="sortfilter" value="NAGARKURNOOL">NAGARKURNOOL</option>
        <option name="sortfilter" value="NALGONDA">NALGONDA</option>
        <option name="sortfilter" value="NARAYANPET">NARAYANPET</option>
        <option name="sortfilter" value="NIRMAL">NIRMAL</option>
        <option name="sortfilter" value="NIZAMABAD">NIZAMABAD</option>
        <option name="sortfilter" value="PEDDAPALLI">PEDDAPALLI</option>
        <option name="sortfilter" value="RAJANNA SIRCILLA">RAJANNA SIRCILLA</option>
        <option name="sortfilter" value="RANGAREDDY">RANGAREDDY</option>
        <option name="sortfilter" value="SANGAREDDY">SANGAREDDY</option>
        <option name="sortfilter" value="SIDDIPET">SIDDIPET</option>
        <option name="sortfilter" value="SURYAPET">SURYAPET</option>
        <option name="sortfilter" value="VIKARABAD">VIKARABAD</option>
        <option name="sortfilter" value="WANAPARTHY">WANAPARTHY</option>
        <option name="sortfilter" value="WARANGAL">WARANGAL</option>
        <option name="sortfilter" value="YADADRI BHUVANAGIRI">YADADRI BHUVANAGIRI</option>
                            </select>
                             &nbsp; &nbsp;<input type="text" name="cls7_mandal_loc" id="" onKeyup="this.value = this.value.toUpperCase()" value="">&nbsp; &nbsp;<input type="text" name="cls7_village_loc" id="" onKeyup="this.value = this.value.toUpperCase()" value=""></td></tr>

                             <tr><td><b>6th :</b></td><td>
                                <select name="cls6_loc" id="" value="">
                                    <option name="sortfilter" value="Select">Select Your District</option>
        <option name="sortfilter" value="ADILABAD">ADILABAD</option>
        <option name="sortfilter" value="BHADRADRI KOTHAGUDEM">BHADRADRI KOTHAGUDEM</option>
        <option name="sortfilter" value="HANUMAKONDA">HANUMAKONDA</option>
        <option name="sortfilter" value="HYDERABAD">HYDERABAD</option>
        <option name="sortfilter" value="JAGTIAL">JAGTIAL</option>
        <option name="sortfilter" value="JANGOAN">JANGOAN</option>
        <option name="sortfilter" value="JAYASHANKAR BHOOPALPALLY">JAYASHANKAR BHOOPALPALLY</option>
        <option name="sortfilter" value="JOGULAMBA GADWAL">JOGULAMBA GADWAL</option>
        <option name="sortfilter" value="KAMAREDDY">KAMAREDDY</option>
        <option name="sortfilter" value="KARIMNAGAR">KARIMNAGAR</option>
        <option name="sortfilter" value="KHAMMAM">KHAMMAM</option>
        <option name="sortfilter" value="KOMARAM BHEEM ASIFABAD">KOMARAM BHEEM ASIFABAD</option>
        <option name="sortfilter" value="MAHABUBABAD">MAHABUBABAD</option>
        <option name="sortfilter" value="MAHABUBNAGAR">MAHABUBNAGAR</option>
        <option name="sortfilter" value="MANCHERIAL">MANCHERIAL</option>
        <option name="sortfilter" value="MEDAK">MEDAK</option>
        <option name="sortfilter" value="MEDCHAL-MALKAJGIRI">MEDCHAL-MALKAJGIRI</option>
        <option name="sortfilter" value="MULUGU">MULUGU</option>
        <option name="sortfilter" value="NAGARKURNOOL">NAGARKURNOOL</option>
        <option name="sortfilter" value="NALGONDA">NALGONDA</option>
        <option name="sortfilter" value="NARAYANPET">NARAYANPET</option>
        <option name="sortfilter" value="NIRMAL">NIRMAL</option>
        <option name="sortfilter" value="NIZAMABAD">NIZAMABAD</option>
        <option name="sortfilter" value="PEDDAPALLI">PEDDAPALLI</option>
        <option name="sortfilter" value="RAJANNA SIRCILLA">RAJANNA SIRCILLA</option>
        <option name="sortfilter" value="RANGAREDDY">RANGAREDDY</option>
        <option name="sortfilter" value="SANGAREDDY">SANGAREDDY</option>
        <option name="sortfilter" value="SIDDIPET">SIDDIPET</option>
        <option name="sortfilter" value="SURYAPET">SURYAPET</option>
        <option name="sortfilter" value="VIKARABAD">VIKARABAD</option>
        <option name="sortfilter" value="WANAPARTHY">WANAPARTHY</option>
        <option name="sortfilter" value="WARANGAL">WARANGAL</option>
        <option name="sortfilter" value="YADADRI BHUVANAGIRI">YADADRI BHUVANAGIRI</option>
                                </select>
                                 &nbsp; &nbsp;<input type="text" name="cls6_mandal_loc" id="" onKeyup="this.value = this.value.toUpperCase()" value="">&nbsp; &nbsp;<input type="text" name="cls6_village_loc" id="" onKeyup="this.value = this.value.toUpperCase()" value=""></td></tr>

                </table>
</fieldset>
<br>

<fieldset>
    <legend><b> Personal Details.</b></legend>
    <table>

    <tr><td><b>Candidate Photo * :</b></td><td><input type="file" name="cand_image" value=""/><br></td></tr>

    <tr><td><b>Candidate Signature * :</b></td><td><input type="file" name="cand_sign" value=""/></td></tr>
    
</table>
</fieldset>   

<br>
<fieldset>
    <legend><b> Payment Details.</b></legend>
    <table>
        <tr><td><b>Journal Number * :</b></td><td><input type="text"   name="journal_num1" id="" onKeyup="this.value = this.value.toUpperCase()" value=""></td></tr>
        <tr><td><b>Payment Date * :</b></td><td><input type="text"   name="payment_date" id="" onKeyup="this.value = this.value.toUpperCase()" value=""></td></tr>
        <tr><td><b>Amount * :</b></td><td><input type="text"   name="fee" id="" onKeyup="this.value = this.value.toUpperCase()" value=""></td></tr>

    <tr><td><b></b></td><td></td></tr>
</table>
</fieldset>
<br>
<fieldset>
    <legend><b> Exam Centers.</b></legend>
    <table>
        <tr><td><b>Preference 1 :</b></td><td><select name="pref_1" id=""  >
            <option name="sortfilter" value="Select">Select Exam Center 1</option>
            <option name="sortfilter" value="ADILABAD">ADILABAD</option>
        <option name="sortfilter" value="HYDERABAD">HYDERABAD</option>
        <option name="sortfilter" value="KARIMNAGAR">KARIMNAGAR</option>
        <option name="sortfilter" value="KHAMMAM">KHAMMAM</option>
        <option name="sortfilter" value="MAHABUBNAGAR">MAHABUBNAGAR</option>
        <option name="sortfilter" value="MEDAK">MEDAK</option>
        <option name="sortfilter" value="NALGONDA">NALGONDA</option>
        <option name="sortfilter" value="NIZAMABAD">NIZAMABAD</option>
        <option name="sortfilter" value="RANGAREDDY">RANGAREDDY</option>
        <option name="sortfilter" value="WARANGAL">WARANGAL</option>
        </select></td></tr>
        <tr><td><b>Preference 2 :</b></td><td><select name="pref_2" id="" value="">
            <option name="sortfilter" value="Select">Select Exam Center 2</option>
            <option name="sortfilter" value="ADILABAD">ADILABAD</option>
        <option name="sortfilter" value="HYDERABAD">HYDERABAD</option>
        <option name="sortfilter" value="KARIMNAGAR">KARIMNAGAR</option>
        <option name="sortfilter" value="KHAMMAM">KHAMMAM</option>
        <option name="sortfilter" value="MAHABUBNAGAR">MAHABUBNAGAR</option>
        <option name="sortfilter" value="MEDAK">MEDAK</option>
        <option name="sortfilter" value="NALGONDA">NALGONDA</option>
        <option name="sortfilter" value="NIZAMABAD">NIZAMABAD</option>
        <option name="sortfilter" value="RANGAREDDY">RANGAREDDY</option>
        <option name="sortfilter" value="WARANGAL">WARANGAL</option>
        </select></td></tr>
        <tr><td><b>Preference 3 :</b></td><td><select name="pref_3" id="" value="">
            <option name="sortfilter" value="Select">Select Exam Center 3</option>
            <option name="sortfilter" value="ADILABAD">ADILABAD</option>
        <option name="sortfilter" value="HYDERABAD">HYDERABAD</option>
        <option name="sortfilter" value="KARIMNAGAR">KARIMNAGAR</option>
        <option name="sortfilter" value="KHAMMAM">KHAMMAM</option>
        <option name="sortfilter" value="MAHABUBNAGAR">MAHABUBNAGAR</option>
        <option name="sortfilter" value="MEDAK">MEDAK</option>
        <option name="sortfilter" value="NALGONDA">NALGONDA</option>
        <option name="sortfilter" value="NIZAMABAD">NIZAMABAD</option>
        <option name="sortfilter" value="RANGAREDDY">RANGAREDDY</option>
        <option name="sortfilter" value="WARANGAL">WARANGAL</option>
        </select></td></tr>
        <tr><td><b>Preference 4 :</b></td><td><select name="pref_4" id="" value="">
            <option name="sortfilter" value="Select">Select Exam Center 4</option>
            <option name="sortfilter" value="ADILABAD">ADILABAD</option>
        <option name="sortfilter" value="HYDERABAD">HYDERABAD</option>
        <option name="sortfilter" value="KARIMNAGAR">KARIMNAGAR</option>
        <option name="sortfilter" value="KHAMMAM">KHAMMAM</option>
        <option name="sortfilter" value="MAHABUBNAGAR">MAHABUBNAGAR</option>
        <option name="sortfilter" value="MEDAK">MEDAK</option>
        <option name="sortfilter" value="NALGONDA">NALGONDA</option>
        <option name="sortfilter" value="NIZAMABAD">NIZAMABAD</option>
        <option name="sortfilter" value="RANGAREDDY">RANGAREDDY</option>
        <option name="sortfilter" value="WARANGAL">WARANGAL</option>
        </select></td></tr>
        <tr><td><b>Preference 5 :</b></td><td><select name="pref_5" id="" value="">
            <option name="sortfilter" value="Select">Select Exam Center 5</option>
            <option name="sortfilter" value="ADILABAD">ADILABAD</option>
        <option name="sortfilter" value="HYDERABAD">HYDERABAD</option>
        <option name="sortfilter" value="KARIMNAGAR">KARIMNAGAR</option>
        <option name="sortfilter" value="KHAMMAM">KHAMMAM</option>
        <option name="sortfilter" value="MAHABUBNAGAR">MAHABUBNAGAR</option>
        <option name="sortfilter" value="MEDAK">MEDAK</option>
        <option name="sortfilter" value="NALGONDA">NALGONDA</option>
        <option name="sortfilter" value="NIZAMABAD">NIZAMABAD</option>
        <option name="sortfilter" value="RANGAREDDY">RANGAREDDY</option>
        <option name="sortfilter" value="WARANGAL">WARANGAL</option>
        </select></td></tr>
        <tr><td><b>Preference 6 :</b></td><td><select name="pref_6" id="" value="">
            <option name="sortfilter" value="Select">Select Exam Center 6</option>
            <option name="sortfilter" value="ADILABAD">ADILABAD</option>
        <option name="sortfilter" value="HYDERABAD">HYDERABAD</option>
        <option name="sortfilter" value="KARIMNAGAR">KARIMNAGAR</option>
        <option name="sortfilter" value="KHAMMAM">KHAMMAM</option>
        <option name="sortfilter" value="MAHABUBNAGAR">MAHABUBNAGAR</option>
        <option name="sortfilter" value="MEDAK">MEDAK</option>
        <option name="sortfilter" value="NALGONDA">NALGONDA</option>
        <option name="sortfilter" value="NIZAMABAD">NIZAMABAD</option>
        <option name="sortfilter" value="RANGAREDDY">RANGAREDDY</option>
        <option name="sortfilter" value="WARANGAL">WARANGAL</option>
        </select></td></tr>
        <tr><td><b>Preference 7 :</b></td><td><select name="pref_7" id="" value="">
            <option name="sortfilter" value="Select">Select Exam Center 7</option>
            <option name="sortfilter" value="ADILABAD">ADILABAD</option>
        <option name="sortfilter" value="HYDERABAD">HYDERABAD</option>
        <option name="sortfilter" value="KARIMNAGAR">KARIMNAGAR</option>
        <option name="sortfilter" value="KHAMMAM">KHAMMAM</option>
        <option name="sortfilter" value="MAHABUBNAGAR">MAHABUBNAGAR</option>
        <option name="sortfilter" value="MEDAK">MEDAK</option>
        <option name="sortfilter" value="NALGONDA">NALGONDA</option>
        <option name="sortfilter" value="NIZAMABAD">NIZAMABAD</option>
        <option name="sortfilter" value="RANGAREDDY">RANGAREDDY</option>
        <option name="sortfilter" value="WARANGAL">WARANGAL</option>
        </select></td></tr>
        <tr><td><b>Preference 8 :</b></td><td><select name="pref_8" id="" value="">
            <option name="sortfilter" value="Select">Select Exam Center 8</option>
            <option name="sortfilter" value="ADILABAD">ADILABAD</option>
        <option name="sortfilter" value="HYDERABAD">HYDERABAD</option>
        <option name="sortfilter" value="KARIMNAGAR">KARIMNAGAR</option>
        <option name="sortfilter" value="KHAMMAM">KHAMMAM</option>
        <option name="sortfilter" value="MAHABUBNAGAR">MAHABUBNAGAR</option>
        <option name="sortfilter" value="MEDAK">MEDAK</option>
        <option name="sortfilter" value="NALGONDA">NALGONDA</option>
        <option name="sortfilter" value="NIZAMABAD">NIZAMABAD</option>
        <option name="sortfilter" value="RANGAREDDY">RANGAREDDY</option>
        <option name="sortfilter" value="WARANGAL">WARANGAL</option>
        </select></td></tr>
        <tr><td><b>Preference 9 :</b></td><td><select name="pref_9" id="" value="">
            <option name="sortfilter" value="Select">Select Exam Center 9</option>
            <option name="sortfilter" value="ADILABAD">ADILABAD</option>
        <option name="sortfilter" value="HYDERABAD">HYDERABAD</option>
        <option name="sortfilter" value="KARIMNAGAR">KARIMNAGAR</option>
        <option name="sortfilter" value="KHAMMAM">KHAMMAM</option>
        <option name="sortfilter" value="MAHABUBNAGAR">MAHABUBNAGAR</option>
        <option name="sortfilter" value="MEDAK">MEDAK</option>
        <option name="sortfilter" value="NALGONDA">NALGONDA</option>
        <option name="sortfilter" value="NIZAMABAD">NIZAMABAD</option>
        <option name="sortfilter" value="RANGAREDDY">RANGAREDDY</option>
        <option name="sortfilter" value="WARANGAL">WARANGAL</option>
        </select></td></tr>
        <tr><td><b>Preference 10 :</b></td><td><select name="pref_10" id="" value="">
            <option name="sortfilter" value="Select">Select Exam Center 10</option>
            <option name="sortfilter" value="ADILABAD">ADILABAD</option>
        <option name="sortfilter" value="HYDERABAD">HYDERABAD</option>
        <option name="sortfilter" value="KARIMNAGAR">KARIMNAGAR</option>
        <option name="sortfilter" value="KHAMMAM">KHAMMAM</option>
        <option name="sortfilter" value="MAHABUBNAGAR">MAHABUBNAGAR</option>
        <option name="sortfilter" value="MEDAK">MEDAK</option>
        <option name="sortfilter" value="NALGONDA">NALGONDA</option>
        <option name="sortfilter" value="NIZAMABAD">NIZAMABAD</option>
        <option name="sortfilter" value="RANGAREDDY">RANGAREDDY</option>
        <option name="sortfilter" value="WARANGAL">WARANGAL</option>
        </select></td></tr>
</table> <br><br><br>



<center><input type="submit" name="submit" id="" value="submit"></center>

    <tr><td><b><br></b></td><td><br></td></tr>
    </form>
</body>
</html>
