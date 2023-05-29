<html>
<head>
   <title>PHP const Keyword - CodesCracker</title>
</head>
<body>
<h2>PHP const Keyword</h2>
<?php 
   # const keyword example in PHP
   class userLogMsgLevel
   {
      const info = 1;
      const warning = 2;
      const error = 3;
      const debug = 4;

      // you can even assign the constant as a default value

      public function log($notification, $level = self::info)
      {
         echo "Notification level ". $level.": ".$notification;
      }   
   }
   $logObj = new userLogMsgLevel();
   
   // using default value
   $logObj->log("Info");
   echo "<br/>";
   
   // using variable
   $logObj->log("Warning", $logObj::warning);
   echo "<br/>";
   
   // using class
   $logObj->log("Error", userLogMsgLevel::error);
   echo "<br/>";

   $logObj->log("x");
   echo "<br/>";
?>
</body>
</html>