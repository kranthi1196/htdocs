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
    Echo '************************<br>'.'Program on Functions<br>'.'************************<br>';
    function add($a , $b){
        $c=$a+$b;
        echo "The Sum is: ".$c;

        $string = "TSPSC123456789";

        $str2 = substr($string, 5,strlen($string)-1);
        echo '<br>'.$str2;
    }   

    add(1000,2500);
    
    ?>
</body>
</html>