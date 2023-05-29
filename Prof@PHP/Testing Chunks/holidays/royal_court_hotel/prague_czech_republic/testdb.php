<?php
$db="travelzoo";
$table = "tzdeals";
mysqli_query(mysqli_connect("localhost","root",""), "CREATE DATABASE IF NOT EXISTS $db");
$con = mysqli_connect("localhost", "root", "", $db);

mysqli_query($con, "CREATE TABLE IF NOT EXISTS $table(`id` INT(10) NOT NULL AUTO_INCREMENT, `media_id` INT(10) NOT NULL, `board` VARCHAR(255) NOT NULL, `pixls` VARCHAR(255) NOT NULL, `emails_pos` VARCHAR(255) NOT NULL, `hotel_name` VARCHAR(255) NOT NULL, `hotel_addr` VARCHAR(255) NOT NULL, `url_strings` VARCHAR(255) NOT NULL, `price` VARCHAR(255) NOT NULL, `heading` VARCHAR(255) NOT NULL, `title` VARCHAR(255) NOT NULL, `star` VARCHAR(255) NOT NULL, `resort` VARCHAR(255) NOT NULL, `theme_id` VARCHAR(255) NOT NULL, `phone_num` VARCHAR(255) NOT NULL, `save_percent` VARCHAR(255) NOT NULL, `description` LONGTEXT NOT NULL, `location` longtext NOT NULL, `online_booking_btn` VARCHAR(255) NOT NULL, `highlights` VARCHAR(255) NOT NULL, `tour` VARCHAR(255) NOT NULL, `selected_dates` longtext NOT NULL, `dates` longtext NOT NULL, `senddate` VARCHAR(255) NOT NULL, `dealweek` VARCHAR(255) NOT NULL, `deal_week_img` VARCHAR(255) NOT NULL, `as_seen_on` VARCHAR(255) NOT NULL,
 PRIMARY KEY(`id`))");

?>