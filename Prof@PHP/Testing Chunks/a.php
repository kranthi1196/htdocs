<!DOCTYPE html>
<html>
<head>
   <title>Object Oriented Programming in PHP</title>
</head>
<h3>Object Oriented Programming Example in PHP</h3>
<body>
<?php
   // This example is based on object oriented concept
   // available in PHP - CodesCracker
   class oop_class
   {
    // Class's variables
      public $oop_member_vars = "oop_member_var member variable";
      public $oop_function_name = "oop_member_function";

      // Class's Functions/ methods
      function oop_member_fun()
      {
         echo "I'm Inside Class's oop_member_fun()";
      }
      public static function say()
      {
         self::oop_member_fun();
      }
   }
  
   $oop_class = new oop_class;
   
   // to access member variables in an object,
   // you can use another variable as name 
   // as shown here
   $element = "oop_function_name";
   echo $oop_class->$element.'<br>';
   echo oop_class::oop_member_fun();

   // Compilation by Profe.
   // Inorder to Achive any class variables using object method, 1. we need to Create an object for the Class we want to use,
   // 2. Assign the class's variables inside a string to new variables
   // 3. now call the newly created variables, using class object
   // Note: You can't directly call Class's variables without assigning them to newly created variables
   // You can Access the class methods directly using class name :: function/method name as shown
   // If you want to copy one function's contents inside  another function's body, within its own class, you can access it as self::function_you_want_to_copy_contents();
   
?>
</body>
</html>