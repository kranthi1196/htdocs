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
    // Example on an Array
    $arr1=array("Book","Table","Pen");
    echo "Array Element is: ".$arr1[1]."<br/>";
    print_r($arr1)."<br/>";
    //echo "Array Element is: ".$arr1;

    //Example on Oject//
    class Test{
        function object(){
            return 'a function return statement';
        }
    }

    echo "<br/>";
    $obj1=new Test();
    echo $obj1->object();
    /*class Animal{
        function dog() {
          return 'Dogs are honest pet animal';
        }
      }
      $obj1 = new Animal();
      echo $obj1->dog();
*/
    ?>
</body>
</html>