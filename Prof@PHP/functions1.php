<?php
$msg = "";
$connection = mysqli_connect("localhost","root", "", "practice");
if(isset($_POST['sumbit'])){
    
   // $username= stripslashes($_POST['FirstName']);//.stripslashes($_POST['LastName']);
   
   $FirstName = $_POST['FirstName'];
   $LastName = $_POST['LastName'];
   $mobile = $_POST['mobile'];
   $tspscid="TSPSC".$mobile;

    $image=$_FILES['cand_image']['name'];
    $sign=$_FILES['cand_sign']['name'];

    //$target_dir = "./images/";
    $target_file = "./images/".$tspscid.'_'.basename($image);
    $target_file_sign = "./images/".$tspscid.'_'.basename($sign);

    $query = "INSERT INTO cand_images(`tspscid`,`FirstName`,`LastName`,`mobile`,`image`,`sign`) VALUES ('$tspscid','$FirstName','$LastName','$mobile','$image','$sign')";
     //$sql = "INSERT INTO cand_images(`tspscid`,`FirstName`,`LastName`,`mobile`,`image`, `sign`) VALUES('$tspscid','$FirstName','$LastName','$mobile','$image', '$sign')";

     $query_run = mysqli_query($connection,$query);
     //mysqli_query($connection,$sql); 

     if($query_run){
        // move_uploaded_file($_FILES['photo']['tmp_name'],"..\applicant_photos/images/".$_FILES["photo"]["name"]);     * ** ..\Preview.php
        // move_uploaded_file($_FILES['sign']['tmp_name'],"..\applicant_photos/images/".$_FILES["sign"]["name"]);
        echo 'Data Base is Updated :: <br>';
         header('Location:.\user_details.php');
     }
     else{
        echo 'Data is not updated into the Database :: cand_images';
         header('Location:');
     }
 

    if(move_uploaded_file($_FILES['cand_image']['tmp_name'],$target_file) && move_uploaded_file($_FILES['cand_sign']['tmp_name'],$target_file_sign)){
        
        echo '<br>Your Application has been Submitted with a Reference Number: '.'<b>'.$tspscid.'</b>';
    
        $msg="Images updated Successfully";
    }
    else{
        
        $msg="Images not updated Successfully";
    }
    
   /* if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file)){
        $sql="INSERT INTO cand_images SET image='$image', username='$username'";
        if(mysqli_query($connection,$sql)){
            header('user_details.php');
            echo 'Image is Submitted';
        }
        else{
            echo 'Image is not stored';
        }
    }
*/
}
?>
