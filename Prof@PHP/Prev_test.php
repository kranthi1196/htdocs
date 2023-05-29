<?php
session_start();

/* Step: 1. Creating Database Connection using Conn Object from mysqli_connect(); */
$con=mysqli_connect("localhost", "root", "", "practice");
//$db=mysqli_select_db($con, 'practice');


/* Step: 2. Vallidate required Fields/ Tags - Submit Button Validation */
    if(isset($_POST['submit'])){
        $refid=0;
        //echo "Hello Your form is submitted!...";
        $refid=$refid++;
        echo '<br>';
        $refrid="TSPSC".$refid;
        //echo "$refrid";
    
/* Validating All the Declared Variables/ Columns in the Data Base*/ 
$uid=$_POST['uid'];
$tspscid=$_POST['tspscid'];
$refid=$refid;
$cand_name=$_POST['cand_name'];
$fath_hus_name=$_POST['fath_hus_name'];
$mother_name=$_POST['mother_name'];
$dob=$_POST['dob'];

$gender=$_POST["gender"];
$address=$_POST['address'];
$district=$_POST['district'];
$mandal=$_POST['mandal'];

$village=$_POST['village'];
$pincode=$_POST['pincode'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$community=$_POST['community'];

$identication_marks=$_POST['identication_marks'];
$ex_service=$_POST['ex_service'];
$employment=$_POST['employment'];
$temp_emp=$_POST['temp_emp'];
$ncc_instructor=$_POST['ncc_instructor'];
$ph_status=$_POST['ph_status'];

$eligibility_1_4_6_7_9=$_POST['eligibility_1_4_6_7_9'];
$eligibility_2=$_POST['eligibility_2']; 
$eligibility_3=$_POST['eligibility_3'];
$eligibility_5=$_POST['eligibility_5'];
$hindu=$_POST['hindu'];
$photo=$_FILES['photo']['cand_name'];
$sign=$_FILES['sign']['cand_name'];
$eligibility_10=$_POST['eligibility_10'];
$eligibility_11=$_POST['eligibility_11'];
$eligibility_12=$_POST['eligibility_12'];
$eligibility_13=$_POST['eligibility_13'];
$applied_post1=$_POST['applied_post1'];

$applied_post2=$_POST['applied_post2'];
$applied_post3=$_POST['applied_post3'];
$applied_post4=$_POST['applied_post4'];
$applied_post5=$_POST['applied_post5'];
$applied_post6=$_POST['applied_post6'];
$applied_post7=$_POST['applied_post7'];
$applied_post8=$_POST['applied_post8'];
$applied_post9=$_POST['applied_post9'];
$applied_post10=$_POST['applied_post10'];
$applied_post11=$_POST['applied_post11'];
$applied_post12=$_POST['applied_post12'];

$applied_post13=$_POST['applied_post13'];
$qualification=$_POST['qualification'];
$university=$_POST['university'];
$doa=$_POST['doa'];
$deg_htnum=$_POST['deg_htnum'];
$typeofstudy=$_POST['typeofstudy'];
$zone=$_POST['zone'];
$degree_loc=$_POST['degree_loc'];
$degree_mandal_loc=$_POST['degree_mandal_loc'];
$degree_village_loc=$_POST['degree_village_loc'];
$inter_loc=$_POST['inter_loc'];

$inter_mandal_loc=$_POST['inter_mandal_loc'];
$inter_village_loc=$_POST['inter_village_loc'];
$ssc_loc=$_POST['ssc_loc'];
$ssc_mandal_loc=$_POST['ssc_mandal_loc'];
$ssc_village_loc=$_POST['ssc_village_loc'];
$cls9_loc=$_POST['cls9_loc'];
$cls9_mandal_loc=$_POST['cls9_mandal_loc'];
$cls9_village_loc=$_POST['cls9_village_loc'];
$cls8_loc=$_POST['cls8_loc'];

$cls8_mandal_loc=$_POST['cls8_mandal_loc']; 

$cls8_village_loc=$_POST['cls8_village_loc'];
$cls7_loc=$_POST['cls7_loc'];
$cls7_mandal_loc=$_POST['cls7_mandal_loc'];
$cls7_village_loc=$_POST['cls7_village_loc'];
$cls6_loc=$_POST['cls6_loc'];
$cls6_mandal_loc=$_POST['cls6_mandal_loc'];
$cls6_village_loc=$_POST['cls6_village_loc'];
$journal_num=$_POST['journal_num'];
$payment_date=$_POST['payment_date'];
$fee=$_POST['fee'];
$pref_1=$_POST['pref_1'];

$pref_2=$_POST['pref_2'];
$pref_3=$_POST['pref_3'];
$pref_4=$_POST['pref_4'];
$pref_5=$_POST['pref_5'];
$pref_6=$_POST['pref_6'];
$pref_7=$_POST['pref_7'];
$pref_8=$_POST['pref_8'];
$pref_9=$_POST['pref_9'];
$pref_10=$_POST['pref_10'];
    
   /* Step: 3. Write a query to Insert the Data into the Database Table mk*/ 

   $query= " INSERT INTO mk(`uid`,`tspscid`,`cand_name`,`fath_hus_name`,`mother_name`,`dob`,`gender`,`address`,`district`,`mandal`,`village`,`pincode`,`mobile`,`email`,`community`,`identication_marks`,`ex_service`,`employment`,`temp_emp`,`ncc_instructor`,`ph_status`,`eligibility_1_4_6_7_9`,`eligibility_2`,`eligibility_3`,`eligibility_5`,`hindu`,`photo`,`sign`,`eligibility_10`,`eligibility_11`,`eligibility_12`,`eligibility_13`,`applied_post1`,`applied_post2`,`applied_post3`,`applied_post4`,`applied_post5`,`applied_post6`,`applied_post7`,`applied_post8`,`applied_post9`,`applied_post10`,`applied_post11`,`applied_post12`,`applied_post13`,`qualification`,`university`,`doa`,`deg_htnum`,`typeofstudy`,`zone`,`degree_loc`,`inter_loc`,`ssc_loc`,`cls9_loc`,`cls8_loc`,`cls7_loc`,`cls6_loc`,`journal_num`,`payment_date`,`fee`,`pref_1`,`pref_2`,`pref_3`,`pref_4`,`pref_5`,`pref_6`,`pref_7`,`pref_8`,`pref_9`,`pref_10`) VALUES('$id','$uid','$tspscid','$cand_name','$fath_hus_name','$mother_name','$dob','$gender','$address','$district','$mandal','$village','$pincode','$mobile','$email','$community','$identication_marks','$ex_service','$employment','$temp_emp','$ncc_instructor','$ph_status','$eligibility_1_4_6_7_9','$eligibility_2','$eligibility_3','$eligibility_5','$hindu','$photo','$sign','$eligibility_10','$eligibility_11','$eligibility_12','$eligibility_13','$applied_post1','$applied_post2','$applied_post3','$applied_post4','$applied_post5','$applied_post6','$applied_post7','$applied_post8','$applied_post9','$applied_post10','$applied_post11','$applied_post12','$applied_post13','$qualification','$university','$doa','$deg_htnum','$typeofstudy','$zone','$degree_loc','$inter_loc','$ssc_loc','$cls9_loc','$cls8_loc','$cls7_loc','$cls6_loc','$journal_num','$payment_date','$fee','$pref_1','$pref_2','$pref_3','$pref_4','$pref_5','$pref_6','$pref_7','$pref_8','$pref_9','$pref_10')";
    
    /* Step: 4. Run a query to Send the Data into the Database practice of Table mk*/ 
    $query_run=mysqli_query($con, $query);

    /* Step: 5. check whether the query has Executed or Not....*/ 
    if($query_run){
        move_uploaded_file($_FILES['photo']['tmp_name'],"applicant_photos/images/".$_FILES["photo"]["name"]);
        $_SESSION['status']="image Stored Successfully";
        header('Location:Application.php');
    }
else{
    $_SESSION['status']="Image not inserted!!!";
    header('Location:Preview.php');
    }
    }



?>