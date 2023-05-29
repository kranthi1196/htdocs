<?php
include "milad_db_validation.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Page</title>
</head>
<body style = "background:powderblue">
<br>
<center>

<img src="./Images/Success.png" alt="Form Success Logo">
<h2 style="color: green;font-family:Lato"> Your details submission has been Successful! </h2>
<h3 style="color: darkblue;font-family:Lato"> Application Number :<?php echo $app_data['application_number'] ?> </h3>

<h4 style="color: darkblue;font-family:Lato"> Thank you, We have received your details, and we'll be in touch with you very soon.<br>For any inquiries, Please Contact @ +91 86865 16213 </h4>

<input type="button" name="print" id="printButton" value="Print">

<script>
document. getElementById("printButton"). onclick = function () { location. href = "./printcopy.php"; };
</script>


<!--
<input type="submit" name="print" id="" Value="Print"/>
<input type="submit" name="exit" id="" Value="Exit"/>
-->

</center>
</body>
</html>


