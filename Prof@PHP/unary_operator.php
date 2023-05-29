<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Document</title>
</head>
<body>
    <?php
    echo '****************************<br> Program on Php Unary Operators<br>****************************<br><hr>';

    $var=10;
    echo 'If Var =10, Post Increment:'.$var++.'<br> After print/echo Statement executed then Post Increment is: '.$var.'<br>';
    $var=15;
    echo 'If Var =15, Pre Increment:'.++$var.'<br>';
    
    $var=20;
    echo 'If Var =20, Post Decrement:'.$var--.'<br>';
    $var1=25;
    echo 'If Var =25, Pre Decrement:'.--$var1.'<br>';
    if(!isset($var)){
        echo 'this is not a set';
    }

    ?>
</body>
</html>