<?php
include "validations.php";
//if(isset($_REQUEST['login'])){header("Location:Home.php");}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="CSS/default_Log.css" rel="stylesheet" type="text/css" media="all" />
    <link href="CSS/fonts.css" rel="stylesheet" type="text/css" media="all" />
    <script>
    document.getElementByName("login").onclick = function() {
        location.href = "Register.php";
    };
    </script>
    <style>

    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
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
                    <h2>Candidate Login Page*</h2>
                    <br>
                    <form action="" enctype="multipart/form-data" method="post">
                        <fieldset>
                            <legend>Candidate Login</legend>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="text" name="pass" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="login" value="Submit" id="button">
                            </div>
                        </fieldset>
                    </form>


                </div>
            </div>
</body>

</html>