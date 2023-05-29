<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Operators</title>
</head>
<body>
    <?php
    Echo '************************<br>'.'Program on String Operators<br>'.'************************<br>';
    $str1 = "Kranthi Kumar";
    $str2= "Kumar";
    $str3=strcmp($str1,$str2);
    $str4=strtolower($str1);
    $str5=strtoupper($str2);
    echo $str3."<br>";
    echo $str4."<br>";
    echo $str5."<br>";
    echo strtoupper("hello my world");
    
    ?>
</body>
</html>