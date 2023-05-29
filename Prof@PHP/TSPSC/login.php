<?php
include 'validations.php';
?>

<!-- All the HTML Code Starts from Here -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            background-color: powderblue;
        }
        form {
            padding-left:auto;
            padding-right:auto;
            margin:auto;
            height: auto;
            
            width:30%;
        }
        fieldset {
            padding-left:auto;
            padding-right:auto;

            padding-top: 20px;
            padding-bottom:20px;
            margin: auto;
            background-color: powderblue;
            font-weight: 100;
            color: rgb(1, 6, 100); 
        }
        td>center{
            padding-top:10px;
            padding-left:10px;
        }
        table{
            padding-left:auto;
            padding-right:auto;
            margin:auto;
        }

    </style>
</head>
<body>
    <center><h4 style="color:Green; font-family:Lato;padding-top:40px;">:: Login to Proceed Further ::</h4></center>
<form action="" method="POST" enctype = "multipart/form-data">
<center><fieldset>
    <legend><b style="font-family:Lato;color:darkblue;">Candidate Login : </b></legend>
<table>
<tr> <td></td><td><input type="text" name="email_log"  placeholder="Enter Email id"  value="<?php echo $row_data['email']?>"></td></tr>
<tr> <td></td><td><input type="password" name="pass_log" placeholder="Enter your Password" ></td></tr>
<tr><td></td><td><center><input type="submit" name="login" value="Login">&nbsp;&nbsp;<input type="submit" name="register"  value="Register"></center></td><td></td></tr>
</table>



</fieldset> </center>
  </form>    

</body>
</html>