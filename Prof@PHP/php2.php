<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Example on a class and Const Variable//
    class Test{
        const name=100;
        function happy(){
            print "I'm function's Body <br/>";
        }
    }
    print "Accessing the Function from a class <br/>".Test::happy();
    echo "<br/>";
    echo "Accessing the Constant Variable:".Test::name;

    print "<br/>";


    define("happy", ["puppy", "chutki", "maya"]);
    print happy[2];

    ?>

</body>
</html>