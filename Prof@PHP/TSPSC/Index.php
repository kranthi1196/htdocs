
<?php
error_reporting( E_ERROR | E_WARNING | E_PARSE);
if(isset($_REQUEST['apply_online'])){
    header('location:registration.php');

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 2 Application</title>
    <link rel="stylesheet" type="text/css" href="../CSS/prev2.css1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css1">

    <style>
        /*div{
            height: auto;
            width: auto;
            background-color: powderblue;
            padding:30px;
        }

        form{
            padding-left:auto;
            padding-right:auto;
            margin:auto;
            width:95%;
            padding:;
            height:280px;
        }*/
        body{
            background-color: powderblue;
            }
        fieldset,  h1, h2, {
            padding-left:auto;
            padding-right:auto;
            margin: auto;
            color: rgb(1, 6, 100); 
            padding-top: 20px;
            padding-bottom:20px;
            background-color: powderblue; 
            height:auto;
            width:inherit; 

           /* padding-left:auto;
            padding-right:auto;
            margin:auto;
            width:100%;
            display: flex;
            flex-wrap: wrap;
            align-content: center;*/
        }
        img{
            width:100px;
            height:100px;
        }

    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>

<script>
    document.addEventListener('contextmenu', event => event.preventDefault());
</script>
<!-- Code to Eliminate Repeating Options in a Dropdown-->
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
var code = {};
$("select[name='sortfilter'] > option").each(function () {
    if(code[this.text]) {
        $(this).remove();
    } else {
        code[this.text] = this.value;
    }
});
</script>

</head>
<body>
<div>
    <center><img class="tspsc_logo" id="tspsc_logo"    src="../Images/TSPSC_Logo.png" alt="TSPSC Logo"><br><h1>TELANGANA STATE PUBLIC SERVICE COMMISSION :: HYDERABAD</h1>
    <h2>GROUP-II SERVICES</h2>
    <h2>(GENERAL RECRUITMENT)</h2>
    <h2>SUPPLEMENTARY NOTIFICATION NO. 17/2016 TO NOTIFICATION NO. 20/2015, Dated.01/09/2016</h2></center>
    <form action="" method="post" enctype = "multipart/form-data">
        <fieldset>
            <legend><b> Latest Notifications</b></legend>
            <table>
                <tr><br><td style = "padding-bottom:15px;padding-left:25px;">1. </td><td style = "padding-bottom:15px;">TSPSC Group II Notification No. 17/2016, Supplementary to Notification No. 20/2015</td><td><span style = "float:right; padding-left:auto; padding-bottom:15px;"><input type="submit" name="apply_online" id="" value="Apply"></span></td></tr>
            </table> 
        </fieldset>
    </form>
    </div>
</body>
</html>
