<?php
session_start();
if(!$_SESSION['i']){
    $$_SESSION['i'] = 1;
}
if(!$$_SESSION['l']){
    $$_SESSION['l'] = 100;
}

session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Session Example</title>
</head>
<body>
    <?php
    
    for($i=$_SESSION['i'];$i<=100;$i++){
        echo '<p>Initial value is: '.$i.'</p>';
    }

    
    for($l=$_SESSION['l'];$l;$l--){
        echo '<p> Last value is: '.$l.'</p>';
    }

    echo "It's Updated Time is : ".$date=date("h:i:s a").'.';
?>
</body>
</html>