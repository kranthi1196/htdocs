<?php

$db_connection = mysqli_connect("localhost", "root", "", "group2_db");

 /* Candidate Details Table Data Fetching */
$table_name_app = "candidate_details";

$app_query_fetch= "SELECT * FROM $table_name_app where tspscid='$tspscid'";
$app_query_ex = mysqli_query($db_connection, $app_query_fetch);
$row_app = mysqli_num_rows($app_query_ex)>0;
if($app_data = mysqli_fetch_assoc($app_query_ex)){
    Print "$app_data[uid]";
}

/* Image Table Data Fetching */
$table_name_img = "candidate_images";

$img_query = "SELECT * FROM $table_name_img where cand_image='$cand_image'";
$img_query_ex = mysqli_query($db_connection, $img_query);
$row_img = mysqli_num_rows($img_query_ex)>0;
if($img_data = mysqli_fetch_assoc($img_query_ex)){
    Print "./$table_name_img/$app_data[tspscid]_$img_data[cand_image]";

    //candidate_images/TS02912341234_Photo.jpg
}

?>