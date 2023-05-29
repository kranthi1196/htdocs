<?php
    // Code to Insert Image into the Database //
    $output_dir = "./images/";
    $RandomNum = time();
    $ImageName = str_replace('','-',strtolower($_FILES['photo']['name'][0]));
    $ImageType = $_FILES['photo']['type'][0];

    $ImageExt = substr($ImageName, strrpos($ImageName,'.'));
    $ImageExt = str_replace('.','',$ImageExt);
    $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
    $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
    $ret[$NewImageName] = $output_dir.$NewImageName;

    // Code to check whether the Referenced Path is there or not //
    if(!file_exists($output_dir)){
        @mkdir($output_dir, 0777);
    }
    move_uploaded_file($_FILES["photo"]["tmp_name"][0], $output_dir."/".$NewImageName);
    $sql = "INSERT INTO `img`(`photo`) VALUES ('$NewImageName')";
    if(mysqli_query($cn,$sql)){
        echo "Successfully! Uploaded";
    }
    else{
        echo "Error: ".$sql. "".mysqli_error($cn);
    }
    // Code to Check the Directory is Ended

    ?>