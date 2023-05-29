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
    Echo '************************<br>'.'Program on Array Operators<br>'.'************************<br>';

    $arr1=array('one'=>'1', 'two'=>'2', 'three'=>'3');
    $arr2=array('one'=>'1', 'two'=>'2', 'three'=>'3');
    
    if($arr1==$arr2){
        echo 'Both the Arrays are Same.';
    }
    else {
        var_dump($arr1===$arr2);
    }
    
    ?>
</body>
</html>