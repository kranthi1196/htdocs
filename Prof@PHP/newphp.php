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

// Php Variables 

// Global Variables

    $var=100;
    $var1;
    function local(){
        $var=50; // Local Variable
        print "Local Variable declared in a function is:<br/>" ;
        print $var."<br/>";


        if(isset($var1)){
            print "Variable is assigned <br/>";
        }
        else{
            print "Variable is not assigned!! <br/>";
        }

        
        echo '<br/><br/>';
        
    }
    local();
    print "Global Variable declared outside of the Function is:";
    print $var;
    print isset($var1);
    
    echo '<br/><br/>';
    print "*************************************<br/>";
    print "* ";print "Designed & Written by: Kranthi Kumar M"; print " *";
    print "<br/> *************************************";

    ?>
</body>
</html>