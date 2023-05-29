<?php

$connection = mysqli_connect("localhost", "root", "",);
$db_name = "group2_db";
$db = "CREATE DATABASE IF NOT EXISTS $db_name";
$db_query = mysqli_query($connection,$db);

$db_connection = mysqli_connect("localhost","root","",$db_name);

$table_img = "candidate_images";

$table = "CREATE TABLE IF NOT EXISTS $table_img(`id` INT(10) NOT NULL AUTO_INCREMENT, `cand_image` VARCHAR(255) NOT NULL, `cand_sign` VARCHAR(255) NOT NULL, PRIMARY KEY(`id`))";
$table_query = mysqli_query($db_connection,$table);

if(!$table_query){
    echo 'Table is not Created';
}
else{
    if(!file_exists($table_img)){
        mkdir($table_img, 0777, true);
        echo '<script> alert("Folder is Created")<br></script>';
    }else{
        echo '<script> alert("Folder is not Created")<br></script>';
    }
}

if(isset($_REQUEST['submit'])){

    $cand_image = $_FILES['cand_image']['name'];
    $cand_sign = $_FILES['cand_sign']['name'];

    $targetfile = "$table_img/"/*.$tspscid.'_'*/.basename($cand_image);
    $targetfile_sign = "$table_img/"/*.$tspscid.'_'*/.basename($cand_sign);


}

$insertquery = "INSERT INTO $table_img (`cand_image`, `cand_sign`) VALUES('$cand_image', '$cand_sign')";
$table_status = mysqli_query($db_connection,$insertquery);
if(!$table_status){
    echo '<script>alert("Sorry Table Data is not Inserted...")</script>';
}else{
    echo '<script>alert("Table data is inserted Successfully")</script>';
    move_uploaded_file($_FILES['cand_image']['tmp_name'],$targetfile);
    move_uploaded_file($_FILES['cand_sign']['tmp_name'],$targetfile_sign);
}

$ret_img_query = "SELECT * FROM $table_img ORDER BY id DESC LIMIT 1";
$query_img_ex = mysqli_query($db_connection,$ret_img_query);
$row = mysqli_num_rows($query_img_ex)>0;

if($img_row = mysqli_fetch_assoc($query_img_ex)){
print "<table>
<tr> <td> <img src = $table_img/$img_row[cand_image]><br></td></tr>
<tr> <td> <img src = $table_img/$img_row[cand_sign]><br></td></tr>
<tr><td> ********************** </td></tr>
 </table>";
    

}

?>