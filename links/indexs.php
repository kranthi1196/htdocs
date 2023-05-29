<?php
// Start the session
error_reporting(E_ALL);

// Insert the page header
require_once('header.php');

// require_once('connectvars.php');  

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$date = $_GET['senddate'];
$theme_id = $_GET['theme_id'];
$t = time();


// Grab the response data from the database to generate the form
$query2 = "SELECT * FROM themes as th INNER JOIN tzoffers as se ";
$query2 .= "on se.theme_id = th.theme_id WHERE se.theme_id = '$theme_id' ";
$query2 .= "and se.senddate = '$date' ORDER BY th.theme DESC LIMIT 1";
$data = mysqli_query($dbc, $query2);
$responses = array();
while ($row = mysqli_fetch_assoc($data)) {
  array_push($responses, $row);
  // Loop through the array of theme data, formatting it as HTML
  //<!--Pre Subject Line-->
  echo '<div style="display:none;font-size:1px;color:#FFFFFF;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;"> Includes return flights &amp; hand baggage* | All prices exclude baggage and transfers | Atol Protected... </div>';
  //<!--Pre Subject Line-->

  //<!--Unsubscribe Link Table Starts-->
  echo ' <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;"> ';
  echo '<tbody>';
  echo '<tr> ';
  echo ' <td data-bgcolor="" class="bodyBgColor" align="center" valign="top" bgcolor="#f5f5f5"> ';
  echo ' <table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;"> ';
  echo '<tbody>';
  echo '<tr> ';
  echo ' <td data-bgcolor="Inner Background Color" class="whiteBgColor" align="right" valign="top"> ';
  echo ' <table> ';
  echo '<tbody>';
  echo '<tr> ';
  echo ' <td> ';
  echo ' <table data-editable="image" data-mobile-width="1" style="max-width: 100% ! important;" width="100%" cellspacing="0" cellpadding="0" align="right"> ';
  echo '<tbody>';
  echo '<tr> ';
  echo ' <td data-size="Section Title" data-color="Section Title" mc:hideable="" mc:edit="" class="sectionTitle centerText" align="right" valign="middle" style="font-family:';
  echo " 'IBM Plex Sans', ";
  echo ' Arial,Helvetica,sans-serif;color: #565656;font-size: 14px;line-height: 36px;font-weight: 600;letter-spacing:0px;padding:0;">
<singleline><p><a href="https://email.bestonlineholidays.co.uk/sendout/' . $row['also_available'] . '" style="text-decoration: underline !important;">View in Browser:</a></p></singleline>
</td> ';
  echo ' </tr> ';
  echo ' </tbody> ';
  echo ' </table> ';
  echo ' </td> ';
  echo ' </tr> ';
  echo ' </tbody> ';
  echo ' </table> ';
  echo ' </td> ';
  echo ' </tr> ';
  echo ' </tbody> ';
  echo ' </table> ';
  echo ' </td> ';
  echo ' </tr> ';
  echo ' </tbody> ';
  echo ' </table> ';
  //<!--Unsubscribe Link Table Ends-->
  //<!--DID header with think shadow image Starts-->
  echo ' <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;"> ';
  echo '<tbody>';
  echo '<tr> ';
  echo ' <td data-bgcolor="" class="bodyBgColor" align="center" valign="top" bgcolor="#f5f5f5"> ';
  echo ' <table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;"> ';
  echo '<tbody>';
  echo '<tr> ';
  echo ' <td data-bgcolor="Inner Background Color" class="whiteBgColor" align="center" valign="top" bgcolor="#FFFFFF"> ';
  echo ' <table> ';
  echo '<tbody>';
  echo '<tr> ';
  echo ' <td> ';
  echo ' <table data-editable="image" data-mobile-width="1" style="max-width: 100% ! important;" width="100%" cellspacing="0" cellpadding="0" align="center"> ';
  echo '<tbody>';
  echo '<tr> ';
  echo ' <td style="margin: 0px; padding: 10px 0 0 0; display: inline-block; background-color: rgb(255, 255, 255);" class="tdBlock" valign="top" align="left">';
  #new changes done
  $url = $_SERVER['REQUEST_URI'];
  if (strpos($url, 'theme_id=2') == true) {
    //echo 'Current page contains index.php';
    echo '<a href="https://bestonlineholidays.co.uk/all-inclusive.php" style="text-decoration:none;border:0" target="_blank">';
    echo '<img src="https://email.bestonlineholidays.co.uk/sendout/img/' . $row['header_img'] . '" alt="' . $row['theme'] . '" style="display:block;border:0;width:100%;max-width: 630px;" width="230" /> ';
    echo '</a>';
  } else {
    echo '<a href="https://bestonlineholidays.co.uk" style="text-decoration:none;border:0" target="_blank">';
    echo '<img src="https://email.bestonlineholidays.co.uk/sendout/img/' . $row['header_img'] . '" alt="' . $row['theme'] . '" style="display:block;border:0;width:100%;max-width: 630px;" width="230" /> ';
    echo '</a>';
  }

  #new changes done
  echo '</td> ';

  echo ' </tr> ';
  echo ' </tbody> ';
  echo ' </table> ';
  echo ' </td> ';
  echo ' </tr> ';
  echo ' </tbody> ';
  echo ' </table> ';
  echo ' <table> ';
  echo '<tbody>';
  echo '<tr> ';
  echo ' <td> ';
  echo ' <table data-editable="image" data-mobile-width="1" style="max-width: 100% ! important;" width="100%" cellspacing="0" cellpadding="0" align="center"> ';
  echo '<tbody>';
  echo '<tr> ';

  echo ' <td style="margin: 0px; padding: 0px; display: inline-block;" class="tdBlock" valign="top" align="left">
    <img src="https://email.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png?img1477660205861" data-src="https://email.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png|600|4|600|20|0|0|1" data-origsrc="https://email.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png?_ga=1.113707653.308031464.1459512055" data-createnew="true" alt="' . $row['theme'] . '" style="border-width: 0px; border-style: none; border-color: transparent; display: block; width: 100%; max-width: 100% ! important;" width="600" />
    </td> ';
  echo ' </tr> ';
  echo ' </tbody> ';
  echo ' </table> ';
  echo ' </td> ';
  echo ' </tr> ';
  echo ' </tbody> ';
  echo ' </table> ';
  echo ' </td> ';
  echo ' </tr> ';
  echo ' </tbody> ';
  echo ' </table> ';
  echo ' </td> ';
  echo ' </tr> ';
  echo ' </tbody> ';
  echo ' </table> ';
  //<!--DID header with think shadow image Ends-->

  //<!--MAIN IMAGE STARTS-->
  echo ' <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;"> ';
  echo '<tbody>';
  echo '<tr> ';
  echo ' <td data-bgcolor="" class="bodyBgColor" align="center" valign="top" bgcolor="#f5f5f5"> ';
  echo ' <table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;"> ';
  echo '<tbody>';
  echo '<tr> ';
  echo ' <td data-bgcolor="Inner Background Color" class="whiteBgColor" align="center" valign="top" bgcolor="#FFFFFF"> ';
  echo ' <table> ';
  echo '<tbody>';
  echo '<tr> ';
  echo ' <td> ';
  echo ' <table data-editable="image" data-mobile-width="1" style="max-width: 100% ! important;" width="100%" cellspacing="0" cellpadding="0" align="center"> ';
  echo '<tbody>';
  echo '<tr> ';
  //<!--MAIN IMAGE STARTS-->
  echo ' <td style="margin: 0px; padding: 10px 0 0 0; display: inline-block; background-color: rgb(245, 249, 248);" class="tdBlock" valign="top" align="left">';

  #new changes done
  $url = $_SERVER['REQUEST_URI'];
  if (strpos($url, 'theme_id=2') == true) {
    //echo 'Current page contains theme_id=2';
    echo ' <a href="https://bestonlineholidays.co.uk/all-inclusive.php" target="_blank">';
    echo ' <img src="https://email.bestonlineholidays.co.uk/sendout/img/' . $row['main_image'] . '?' . $t . '" alt="' . $row['theme'] . '" style="border-width: 0px; border-style: none; border-color: transparent; display: block; width: 100%; max-width: 100% ! important;" width="700">';
    echo ' </a>';
  } else {
    echo ' <a href="https://bestonlineholidays.co.uk" target="_blank">';
    echo ' <img src="https://email.bestonlineholidays.co.uk/sendout/img/' . $row['main_image'] . '?' . $t . '" alt="' . $row['theme'] . '" style="border-width: 0px; border-style: none; border-color: transparent; display: block; width: 100%; max-width: 100% ! important;" width="700">';
    echo ' </a>';
  }

  #new changes done

  echo '</td> ';
  //<!--MAIN IMAGE ENDS-->
  echo ' </tr> ';
  echo ' </tbody> ';
  echo ' </table> ';
  echo ' </td> ';
  echo ' </tr> ';
  echo ' </tbody> ';
  echo ' </table> ';
  echo ' <table> ';
  echo '<tbody>';
  echo '<tr> ';
  echo ' <td> ';
  echo ' <table data-editable="image" data-mobile-width="1" style="max-width: 100% ! important;" width="100%" cellspacing="0" cellpadding="0" align="center"> ';
  echo '<tbody>';
  echo '<tr> ';

  echo ' <td style="margin: 0px; padding: 0px; display: inline-block;" class="tdBlock" valign="top" align="left">
    <img src="https://email.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png?img1477660205861" data-src="https://email.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png|600|4|600|20|0|0|1" data-origsrc="https://email.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png?_ga=1.113707653.308031464.1459512055" data-createnew="true" alt="' . $row['senddate'] . '" style="border-width: 0px; border-style: none; border-color: transparent; display: block; width: 100%; max-width: 100% ! important;" width="600" />
    </td> ';
  echo ' </tr> ';
  echo ' </tbody> ';
  echo ' </table> ';
  echo ' </td> ';
  echo ' </tr> ';
  echo ' </tbody> ';
  echo ' </table> ';
  echo ' </td> ';
  echo ' </tr> ';
  echo ' </tbody> ';
  echo ' </table> ';
  echo ' </td> ';
  echo ' </tr> ';
  echo ' </tbody> ';
  echo ' </table> ';
  //<!--MAIN IMAGE ENDS->

  echo ' <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;" width="100%"> ';
  echo '<tbody>';
  echo '<tr> ';

  echo ' <td align="center" bgcolor="#F9F9F9" class="bodyBgColor" valign="top"> ';

  echo ' <table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:700px;max-width:700px;" width="700"> ';
  echo '<tbody>';
  echo '<tr> ';
  echo ' <td align="center" bgcolor="#FFFFFF" class="whiteBgColor" valign="top"> ';
  echo ' <table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:600px;max-width:600px;" width="600"> ';
  echo '<tbody>';
  echo '<tr> ';
  echo ' <td align="center" class="containerPadding" valign="top"> ';
  echo ' <table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:600px;max-width:600px;" width="600"> ';
  echo '<tbody>';
  echo '<tr> ';
  echo ' <td align="center" style="font-size:0;padding:0" valign="middle"> ';
  echo ' <table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:580px;max-width:580px;" width="580"> ';
  echo '<tbody>';
  echo '<tr> ';

  echo ' <td align="left" class="dataTextTitle centerText" style="font-family:';
  echo " 'IBM Plex Sans', ";
  echo ' Arial,Helvetica,sans-serif;color:#6F6F6F;font-size:12px;line-height:10px;font-weight:400;letter-spacing:0px;padding:0;padding-bottom:0px;" valign="middle"><multi>&nbsp;</multi></td> ';
  echo ' </tr> ';
  echo ' <tr> ';
  echo ' <td align="left" class="contDescription centerText" style="font-family:';
  echo " 'Open Sans', ";
  echo ' Arial,Helvetica,sans-serif;color:#1e1e1d;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;padding:0;padding-bottom:10px" valign="middle">     
<multi>
 ' . $row['customer_note'] . '
 </multi> 
<td> ';
  echo ' </tr> ';
  echo ' </tbody> ';
  echo ' </table> ';
  echo ' </td> ';
  echo ' </tr> ';
  echo ' </tbody> ';
  echo ' </table> ';
  echo ' <table> ';
  echo '<tbody>';
  echo '<tr> ';
  echo ' <td> ';
  echo ' <table data-editable="image" data-mobile-width="1" style="max-width: 100% ! important;" width="100%" cellspacing="0" cellpadding="0" align="center"> ';
  echo '<tbody>';
  echo '<tr> ';

  echo ' <td style="margin: 0px; padding: 0px; display: inline-block;" class="tdBlock" valign="top" align="left">
    <img src="https://email.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png?img1477660205861" data-src="https://email.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png|600|4|600|20|0|0|1" data-origsrc="https://email.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png?_ga=1.113707653.308031464.1459512055" data-createnew="true" alt="' . $row['theme'] . '" style="border-width: 0px; border-style: none; border-color: transparent; display: block; width: 100%; max-width: 100% ! important;" width="600" />
    </td> ';
  echo ' </tr> ';
  echo ' </tbody> ';
  echo ' </table> ';
  echo ' </td> ';
  echo ' </tr> ';
  echo ' </tbody> ';
  echo ' </table> ';
  echo ' </td> ';
  echo ' </tr> ';
  echo ' </tbody> ';
  echo ' </table> ';
  echo ' </td> ';
  echo ' </tr> ';
  echo ' </tbody> ';
  echo ' </table> ';
  echo ' </td> ';
  echo ' </tr> ';
  echo ' </tbody> ';
  echo ' </table> ';
}
mysqli_close($dbc);
?>
<?php
// Connect to the database
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$date = $_GET['senddate'];
$theme_id = $_GET['theme_id'];


// Grab the response data from the database to generate the form
$query2 = "SELECT * FROM tzoffers as se INNER JOIN themes as th ";
$query2 .= "on th.theme_id = se.theme_id WHERE se.theme_id = '$theme_id' ";
$query2 .= "and se.senddate = '$date' ORDER BY price ASC";

$data = mysqli_query($dbc, $query2);
$responses = array();
while ($row = mysqli_fetch_assoc($data)) {
  array_push($responses, $row);

  $img = explode(",", $row['images']);
  $image = array();
  foreach ($img as $key => $value) {
    $imgdir = explode("/", $value);
    $imagedir = 'https://travelzoo.bestonlineholidays.co.uk/' . $imgdir[0] . '/';
    $image[] = $imgdir[1];
  }
  //echo '<img src="https://travelzoo.bestonlineholidays.co.uk/' . $imgdir[0] . '/' .$image[0].'">';

  //<!--Deal Box Table 100% Starts-->
  echo '<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;"><tbody><tr>';
  echo '<td data-bgcolor="Outer Background Color" class="bodyBgColor" align="center" valign="top" bgcolor="#F5F5F5">';

  //<!--Deal Box Table 700px Starts-->   
  echo '<table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;"><tbody><tr>';
  echo '<td data-bgcolor="Inner Background Color" class="whiteBgColor" align="center" valign="top" bgcolor="#FFFFFF">';

  //<!--Deal Box Table2 700px Starts-->    
  echo '<table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;"><tbody><tr>';
  echo '<td class="containerPadding" align="center" valign="middle" style="font-size:0;padding:0">';
  //<!--Space under deal box starts-->
  echo '<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;"><tbody><tr>';
  echo '<td align="center" valign="middle" height="15" style="font-size:15px;line-height:15px;">&nbsp;</td>';
  echo '</tr>';
  echo '</tbody>';
  echo '</table>';
  //<!--Space under deal box ends-->
  //<!--Deal Image Starts-->
  echo '<div class="row" style="display:inline-block;max-width: 230px;vertical-align:middle;width:100%;">';
  echo '<table class="row" border="0" width="230" align="left" cellpadding="0" cellspacing="0" style="width: 230px;max-width: 230px;border-collapse:collapse;"><tbody><tr>';
  echo '<td align="center" valign="middle">';
  echo '<table class="row" border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;"><tbody><tr>';
  echo '<td class="imgResponsive" align="center" valign="middle">
<a href="https://emails.bestonlineholidays.co.uk/holidays/' . $row['url_strings'] . '/' . $row['id'] . '?src=email" style="text-decoration:none;border:0" target="_blank">
<img data-crop="false" editable="true" src="https://travelzoo.bestonlineholidays.co.uk/' . $imgdir[0] . '/' . $image[0] . '" alt="' . $row['resort'] . '" border="0" width="230" height="230" style="display:block;border:0;height:230px;max-width: 230px;object-fit: cover !important;">
</a>
</td>';
  echo '</tr>';
  echo '</tbody>';
  echo '</table>';
  echo '</td>';
  echo '</tr>';
  echo '</tbody>';
  echo '</table>';
  echo '</div>';
  //<!--Deal Image Ends-->
  //<!--Space Starts-->    
  echo '<div class="row" style="display:inline-block;max-width:0px;vertical-align:top;width:100%">';
  echo '<table class="row" width="0" border="0" cellpadding="0" cellspacing="0" align="left" style="width:0px;max-width:0px;"><tbody><tr>';
  echo '<td align="center" valign="middle" height="10" style="font-size:50px;line-height:10px;">&nbsp;</td>';
  echo '</tr>';
  echo '</tbody>';
  echo '</table>';
  echo '</div>';
  //<!--Space Ends-->
  //<!--Deal Text Starts-->    
  echo '<div class="row" style="display:inline-block;max-width: 370px;vertical-align:middle;width:100%;">';
  echo '<table class="row" border="0" width="370" align="left" cellpadding="0" cellspacing="0" style="width: 370px;max-width: 370px;"><tbody><tr>';
  echo '<td align="left" valign="middle">';
  echo '<table class="row" border="0" width="370" align="left" cellpadding="0" cellspacing="0" style="width: 370px;max-width: 370px;"><tbody>';
  echo '<tr>';
  echo '<td data-size="Description" data-color="Description" mc:hideable="" mc:edit="" class="contTitle centerText" align="left" valign="middle" style="font-family:';
  echo "'IBM Plex Sans',";
  echo ' Arial,Helvetica,sans-serif;color: #717171;font-size: 18px;line-height:20px;font-weight: 700;letter-spacing:0px;padding:5px;padding-bottom: 5px;padding-left: 15px;">';
  echo '<singleline>' . $row['star'] . '* ' . strtoupper(str_replace("_", " ", $row['resort'])) . ' FROM £' . $row['price'] . '/pp</singleline>';
  echo '</td>';
  echo '</tr>';
  if (!empty($row['tour'])) {
    echo '<tr>';
    echo '<td data-size="Description" data-color="Description" mc:hideable="" mc:edit="" class="contTitle centerText" align="left" valign="middle" style="font-family:';
    echo "'IBM Plex Sans',";
    echo ' Arial,Helvetica,sans-serif;color:#373636;font-size: 14px;line-height:15px;font-weight: 600;letter-spacing:0px;padding:5px;padding-bottom: 5px;padding-left: 15px;">';
    echo '<singleline>';

    $tours = $row['tour'];
    $str = [',', '–', '£'];
    $rplc = [' ', '-', '&pound;'];
    echo  str_replace($str, $rplc, $tours);

    echo '</singleline>';
    echo '</td>';
    echo '</tr>';
  }
  echo '<tr>';
  echo '<td data-size="Description" data-color="Description" mc:hideable="" mc:edit="" class="contTitle centerText" align="left" valign="middle" style="font-family:';
  echo " 'IBM Plex Sans',";
  echo 'Arial,Helvetica,sans-serif;color: #1e1e1d;font-size:14px;line-height: 22px;font-weight:400;letter-spacing:0px;padding:5px;padding-bottom: 5px;padding-left: 15px;">';
  echo '<singleline>' . $row['hotel_name'] . ' | ' . $row['nights'] . ' NTS - ' . $row['board'] . '</singleline>';
  echo '</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td style="padding: 0 15px;">';
  echo '<hr style="color: grey;margin: 0;padding: 0px 0;">';
  echo '</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td data-size="Description" data-color="Description" mc:hideable="" mc:edit="" class="contTitle centerText" align="left" valign="middle" style="font-family:';
  echo "'IBM Plex Sans',";
  echo ' Arial,Helvetica,sans-serif;color: #1e1e1d;font-size: 12px;line-height: 22px;font-weight:400;letter-spacing:0px;padding:5px;padding-bottom: 5px;padding-left: 15px;">';
  echo '<singleline>Departs on selected dates: ' . $row['selected_dates'] . '<br>Other dates available, please call for further details</singleline>';
  echo '</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td style="padding: 0 15px;">';
  echo '<hr style="color: grey;margin: 0;padding: 0px 0;">';
  echo '</td>';
  echo '</tr>';
  echo '<tr><td data-size="Description" data-color="Description" mc:hideable="" mc:edit="" class="contTitle centerText" align="left" valign="middle" style="font-family:';
  echo "'IBM Plex Sans',";
  echo ' Arial,Helvetica,sans-serif;color: #1e1e1d;font-size: 12px;line-height: 22px;font-weight:400;letter-spacing:0px;padding:5px;padding-bottom: 5px;padding-left: 15px;">';
  echo '<singleline>Includes return flights &amp; hand baggage* | All prices exclude baggage and transfers | Atol Protected...</singleline>';
  echo '</td></tr>';
  echo '<tr>';
  echo '<td align="center" valign="middle">';
  echo '<table class="centerFloat" border="0" align="right" cellpadding="0" cellspacing="0"><tbody><tr>';
  echo '<td data-size="Button" data-bgcolor="Button" mc:hideable="" mc:edit="" class="heroBtn" align="center" style="font-family:';
  echo "'Open Sans',";
  echo ' Arial,Helvetica,sans-serif;font-size:12px;line-height:20px;display:inline-block;">';
  echo '<a data-color="Button" href="tel:' .  str_replace(" ", "", $row['tel'])  . '" target="_blank" style="color:#FFFFFF;text-decoration:none;"><img style="display: block;border: 0;width: 100%;max-width: 218px;" src="https://email.bestonlineholidays.co.uk/sendout/img/' . $row['ctc_btn'] . '?' . $t . '"  alt="' . $row['tel'] . ' Phone Number Image"></a>';
  echo '</td>';
  echo '</tr>';
  echo '</tbody>';
  echo '</table>';
  echo '</td>';
  echo '</tr>';
  echo '</tbody></table>';
  echo '</td>';
  echo '</tr>';
  echo '</tbody>';
  echo '</table>';
  echo '</div>';
  //<!--Deal Text Ends--> '; 
  echo '</td>';
  echo '</tr>';
  echo '</tbody>';
  echo '</table>';
  //<!--Deal Box Table 700px Starts--> ';   
  echo '</td>';
  echo '</tr>';
  echo '</tbody>';
  echo '</table>';
  //<!--Deal Box Table2 700px Ends-->    
  echo '</td>';
  echo '</tr>';
  echo '</tbody>';
  echo '</table>';
  //<!--Deal Box Table 100% Ends-->

}

mysqli_close($dbc);


?>
<?php
// Insert the page footer
require_once('footer.php');
?>
