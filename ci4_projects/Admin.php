<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel Banner</title>
    <link href="CSS/default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="CSS/fonts.css" rel="stylesheet" type="text/css" media="all" />
    <style>
#banner 
	{
		overflow: hidden;
		height: 330px;
		background: url(images/pic01.jpg) no-repeat center;
		background-size: cover;
	}

    </style>
</head>
<body>
<div id="wrapper">
        <div id="menu-wrapper">
                <div id="menu" class="container">
                    <ul>
                        <li class="current_page_item"><a href="./Home.php">Homepage</a></li>
                        <li><a href="./Register.php">Register</a></li>
                        <li><a href="./Login.php">Login</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
        </div>
        <div id="banner"></div>
        <div id="page" class="container">
        </div>
</div>
</body>
</html>