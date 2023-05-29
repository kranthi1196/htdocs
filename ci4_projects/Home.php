<?php
include "Home_validations.php";
//if(isset($_REQUEST['login'])){header("Location:Admin.php");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="CSS/default_home.css" rel="stylesheet" type="text/css" media="all" />
    <link href="CSS/fonts.css" rel="stylesheet" type="text/css" media="all" />
    <script>
document.getElementByName("carousel"). onclick = function () { location.href = "Register.php"; };
</script>
    <style>


    </style>
</head>
<body>
<div id="wrapper">
        <div id="menu-wrapper">
                <div id="menu" class="container">
                    <ul>
                        <li class="current_page_item"><a href="#">Homepage</a></li>
                        <li><a href="Register.php">Register</a></li>
                        <li><a href="Login.php">Login</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
        </div>
        <div id="banner"></div>
        <div id="page" class="container">
        <div id="content">
			<div class="title">
				<h2>Carousel Image Uploader Page</h2>
                <br>
                <form action="" enctype="multipart/form-data" method="post">
                <fieldset>
                    <legend>Uploade images</legend>
                        <table><tr><td>1st Image</td><td style="padding-top:20px"> : <input type="file" name="img[]" multiple/> <input type="submit" name="home_submit" value="Submit" id="button"></td></tr>
                
                    </fieldset>
                    </form>


        </div>
</div>
</body>
</html>