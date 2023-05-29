<?php
/* Link-Up */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index :: Link-Up</title>
    <!-- Bootstrap Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- CSS Links -->
    <STYLE>
    
   .form{width: 400px; margin: auto; padding: 12px; border-left: 2px solid #ccc; border-radius: 18px;}
   h2{color: purple; text-align: center;}
   input{padding: 12px; width: 100%; margin-bottom: 12px; border: 0px; border-radius: 6px;
      background-color: #ccc;}
   button{margin: 20px 0px; width: 100%; background-color: #008080; color: white; padding: 12px;
      font-size: 1rem; border-radius: 6px;}
   p{text-align: center;}
   button:hover{cursor: pointer;}
   .red{color: red;}
</STYLE>

    <!-- JavaScript Links -->

    <!-- Google Imported Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
</head>
<body>
    <div class="container" style="margin-bottom:100px;">
        <div class="row" >
            <!-- Left Column -->
            <div class="col-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 style="color:#9e39eb;padding-left:30px;padding-right:100px;margin-top:130px; font-family:'Sofia';font-size:50px;">Link-Up</h1>
                    </div>
                    <div class="panel-body">
                        <h6 style="color:#383beb;padding-left:0px;font-family:poppins;line-height:20px"> Link-Up helps connecting people together and shares every moment of life</h6>
                    </div>
                </div>
            </div>
            <!-- Center Column -->
            <div class="col-4" style="margin-top:80px">
            </div>
            <!-- Right Form Column -->
            <div class="col-4 alert alert-success" role="alert" style="margin-top:80px">
                <form action="login.php" method="POST" >
                <input type="email" class="form-control " id="exampleFormControlInput1" placeholder="Username" >
                <input type="password" class="form-control " id="exampleFormControlInput1" placeholder="Password">
                <button class="btn btn-primary" type="button" style="font-weight: 550;">Login</button>
                    <a href="#" class="alert-link" style="text-decoration: none;"><center> Forgotten Password?</center></a>
                    <hr>
                    <center>
                    <button class="btn btn-success" type="button" style="padding-left:auto;padding-right:auto; background-color:#42b72a;width:200px;height:45px"><a href="registration.php" style="text-decoration: none; color:rgb(255,255,255); font-weight:550"> Create New Account</a></button></center>
                </form>
            </div>
        </div>
        <div style="float:right; padding-right:5px; font-size:13px;"><a  href="#" class="alert-link" style="text-decoration: none;"> Do you want to create a page for Business or Celebrity?</a></div>
    </div>
<!-- Footer Section -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <sub>
                        <a href="" title="English" style="text-decoration: none;">English(UK)</a> | <a href="#" title="Hindi" style="text-decoration: none;">हिन्दी</a> | <a href="#" title="Urdu"style="text-decoration: none;"> اردو</a> | <a href="#" title="Tamil"style="text-decoration: none;">தமிழ்</a> | <a href="#" title="Bengali"style="text-decoration: none;">বাংলা
                        </a> | <a href="#" title="Marathi"style="text-decoration: none;">मराठी </a> | <a href="#" title="Telugu"style="text-decoration: none;">తెలుగు</a> | <a href="#" title="Gujarathi"style="text-decoration: none;">ગુજરાતી</a> | <a href="#" title="Kannada"style="text-decoration: none;">ಕನ್ನಡ</a> | <a href="#" title="Malayalam"style="text-decoration: none;">മലയാളം</a> | <a href="#" title="Spanish"style="text-decoration: none;">Español </a>
                        </sub>
            <hr style="margin-bottom:-5px;margin-top:5px;">
            <sub style="line-height:10px;">
            <a href="" title="SignUp for Link-Up" style="text-decoration: none;">SignUp</a> &#8198;&#8198; <a href="" title="Log into Link-Up" style="text-decoration: none;">Login</a> &#8198;&#8198; <a href="" title="Take a look at Mobile App" style="text-decoration: none;">Mobile App</a> &#8198;&#8198; <a href="" title="Lite version for Android" style="text-decoration: none;">Link-Up lite</a> &#8198;&#8198; <a href="" title="Browse our watch videos" style="text-decoration: none;">Watch</a> &#8198;&#8198; <a href="" title="Take a Look at Popular Places" style="text-decoration: none;">Places</a> &#8198;&#8198; <a href="" title="Check out Games" style="text-decoration: none;">Games</a>
            </sub>
            <br>
            <p>All rights reserved :: Link-Up &copy; 2022</p> 
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
</html>