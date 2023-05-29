<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include("dbdata.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action Page</title>
</head>
<body>
    <h3>Working with SRC <?php print $row_data['fname']; ?></h3>

<?php
/*     $url = 'https://example.com?l=en&d=1234&s=abcd';

$query = parse_url($url)['query'] ?? '';

parse_str($query, $parameters);

$languageCode = $parameters['l'] ?? '';
$deviceId = $parameters['d'] ?? '';
$sessionId = $parameters['s'] ?? '';

//dd($languageCode, $deviceId, $sessionId);

echo "Language code is: $languageCode<br> Device Id is: $deviceId<br> Session Id is: $sessionId<br>";
 */

/* --------------------------------------------------------------------------- */
// Working on a given URL to get the ID's & Attributes
$url = 'https://travelzoo.bestonlineholidays.co.uk/holidays/soho_hotel/budapest_hungary/13285?src=tz4t20';

//$url_components = parse_url($url);

parse_str(parse_url($url)['query'], $params);
     
// Display result
echo ' SRC Code is: '.$params['src'];    
/* ----------------------------------------------------------------------------- */
//Working on a site URL to get the ID's & Attributes
/* <?php  
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
    echo $url;  
  ?> */


/* ----------------------------------------------------------------------------- */
/* Different Key Findings  */

// Contact Number
// Tz Member Offer Logo
// Bottom Contact Number

 
?>


    
</body>
</html>