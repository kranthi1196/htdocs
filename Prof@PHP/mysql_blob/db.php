<?php 
$db_name = "image_uploading";
$conn = mysqli_connect("localhost", "root", "");

$query = "CREATE DATABASE IF NOT EXISTS $db_name";
$status = mysqli_query($conn,$query);

$table = "output_images";
$query_table = "CREATE TABLE IF NOT EXISTS `output_images` ( `imageId` tinyint(3) NOT NULL AUTO_INCREMENT, `imageType` varchar(25) NOT NULL DEFAULT '', `imageData` mediumblob NOT NULL, PRIMARY KEY (`imageId`))";
$table_status = mysqli_query($conn, $query_table);

if(!$table_status){
    echo "Table is not created...";
}
else{
    echo "Table is created...";
}


?>