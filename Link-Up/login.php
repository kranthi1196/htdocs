<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login into Link-Up</title>
    <!-- Bootstrap Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- CSS Links -->
    <STYLE>
    
   .form{width: 350px; margin: ; padding: 12px; border-left: 2px solid #ccc; border-radius: 10px;}
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
    <div class="container">
        <div class="row">
            <!-- login form Title left container -->
            <div class="col-4"></div>
            <!-- login form Title center container -->
            <div class="col-4">
            <center>
                    <h1 style="color:#9e39eb;padding-left:auto;padding-right:auto;margin-top:80px; font-family:'Sofia';font-size:50px;">Link-Up</h1>
                </center>
            </div>
            <!-- login form Title right container -->
            <div class="col-4"></div>
        </div>
        <!-- Login form -->
                <div class="row">
                    <!-- Login form left column -->
                `   <div class="col-4"></div>
                    <!-- Login form center column -->
                    <div class="col-4 alert alert-success form" role="alert" style="margin-top:15px; margin-bottom:50px">
                        <form action=" " method="POST" >
                            <p>Log in to Link-Up</p>
                            <input type="email" class="form-control " id="exampleFormControlInput1" placeholder="Email address or phone number" style="height:45px;">
                            <input type="password" class="form-control " id="exampleFormControlInput1" placeholder="Password" style="height:45px;">
                            <button class="btn btn-primary" type="button" style="font-weight: 550; height:45px; font-size:20px; margin-top: 1px;">Log in</button>
                                <p style="font-size: 13px;"><a href="#" class="alert-link" style="text-decoration: none; padding:auto; font-weight:450"> Forgotten Account?</a> &nbsp; &nbsp;
                                <a href="registration.php" class="alert-link" style="text-decoration: none; float:center;padding:auto; font-weight:450"> Sign up for Link-Up </a></p>
                        </form>
                    </div>
                </div>
    <div class="col-4"></div>
                </div>
    </div>
    
</body>
</html>