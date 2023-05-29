<?php

error_reporting( E_ALL );
require_once( 'connectvars.php' );
$dbc = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
$date = $_GET[ 'senddate' ];
$theme_id = $_GET[ 'theme_id' ];
$t = time();
// Grab the response data from the database to generate the form
$query2 = "SELECT * FROM themes as th INNER JOIN tzoffers as se ";
$query2 .= "on se.theme_id = th.theme_id WHERE se.theme_id = '$theme_id' ";
$query2 .= "and se.senddate = '$date' ORDER BY th.theme DESC LIMIT 1";
$data = mysqli_query( $dbc, $query2 );
$responses = array();
while ( $row = mysqli_fetch_assoc( $data ) ) {
  array_push( $responses, $row );
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <!--[if (gte mso 9)|(IE)]>
  <xml>
    <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
  </xml>
  <![endif]-->

  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="format-detection" content="telephone=no">
  <meta name="format-detection" content="date=no">
  <meta name="format-detection" content="address=no">
  <meta name="format-detection" content="email=no">
  <title><?php echo $row['theme']; ?> | <?php echo $row['senddate']; ?></title>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
<style type="text/css">
/*------ Client-Specific Style ------ */
@-ms-viewport {
width: device-width;
}
table {
    -moz-mso-table-lspace: 0pt;
    -moz-mso-table-rspace: 0pt;
}
table td {
    border-collapse: collapse;
}
img {
    -ms-interpolation-mode: bicubic;
    display: block;
    width: auto;
    max-width: auto;
    height: auto;
    margin: auto;
}
p, a, li, td, blockquote {
    -moz-mso-line-height-rule: exactly;
}
p, a, li, td, body, table, blockquote {
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
#outlook a {
    padding: 0;
}
.ReadMsgBody {
    width: 100%;
    background-color: #ffffff;
}
.ExternalClass {
    width: 100%;
}
.ExternalClass, .ExternalClass div, .ExternalClass font, .ExternalClass p, .ExternalClass span, .ExternalClass td, img {
    line-height: 100%;
}
a[x-apple-data-detectors] {
    color: inherit !important;
    text-decoration: none !important;
    font-size: inherit !important;
    font-family: inherit !important;
    font-weight: inherit !important;
    line-height: inherit !important;
}
u + #body a {
    color: inherit;
    font-family: inherit;
    text-decoration: none;
    font-size: inherit;
    font-weight: inherit;
    line-height: inherit;
}
.mcnPreviewText {
    display: none !important;
}
/*------ Reset Style ------ */
table {
    border-spacing: 0 !important;
}
h1, h2, h3, h4, h5, h6 {
    display: block;
    Margin: 0;
    padding: 0;
}
strong {
    font-weight: bold !important;
}
p {
    margin: 0 !important;
    padding: 0 !important;
    display: inline-block !important;
    font-family: inherit !important;
}
img, a img {
    border: 0;
    height: auto;
    outline: none;
    text-decoration: none !important;
}
body, #bodyTable, #bodyCell {
    margin: 0px !important;
    padding: 0px !important;
    display: block !important;
    min-width: 100% !important;
    width: 100% !important;
    -webkit-text-size-adjust: none;
    -webkit-text-resize: 100%;
    -moz-text-resize: 100%;
}
.appleLinks a {
    color: #D7D7D7 !important;
    text-decoration: none !important;
}
span.preheader {
    display: none !important;
}
td[data-bgcolor-Outer] {
    background-color: #fff;
}
</style>
<style type="text/css">
/*------ Media Width 599px ------ */
         /*Responsive*/
@media screen and (max-width: 599px) {
table.hideMobile, tr.hideMobile, td.hideMobile, br.hideMobile {
    display: none!important;
}
table.mobilePadding {
    margin: 15px 0!important;
}
table.row, div.row {
    width: 100%!important;
    max-width: 100%!important;
}
table.centerFloat, td.centerFloat {
    float: none!important;
}
td.menuContainer {
    text-align: center !important;
}
td.autoHeight {
    height: auto!important;
}
td.height200 {
    height: 200px!important;
}
td.borderRounded {
    border-radius: 6px!important;
}
td.borderNone {
    border: none!important;
}
td.imgResponsive img {
    width: 100%!important;
    max-width: 100%!important;
    height: auto!important;
    margin: auto;
}
td.centerText {
    text-align: center!important;
}
td.containerPadding {
    width: 100%!important;
    padding-left: 15px!important;
    padding-right: 15px!important;
}
td.spaceControl {
    height: 15px!important;
    font-size: 15px!important;
    line-height: 15px!important;
}
}
</style>
</head>
<body>
<div style="display:none;font-size:1px;color:#FFFFFF;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;"> Includes return flights &amp; hand baggage* | All prices exclude baggage and transfers | Atol Protected... </div>
<!--Pre Subject Line--> 

<!--Unsubscribe Link Table Starts-->
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
  <tr>
    <td data-bgcolor="" class="bodyBgColor" align="center" valign="top" bgcolor="#f5f5f5"><table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;">
        <tr>
          <td data-bgcolor="Inner Background Color" class="whiteBgColor" align="right" valign="top"><table>
              <tr>
                <td><table data-editable="image" data-mobile-width="1" style="max-width: 100% ! important;" width="100%" cellspacing="0" cellpadding="0" align="right">
                    <tr>
                      <td data-size="Section Title" data-color="Section Title" mc:hideable="" mc:edit="" class="sectionTitle centerText" align="right" valign="middle" style="font-family:IBM Plex Sans,Arial,Helvetica,sans-serif;color: #565656;font-size: 14px;line-height: 36px;font-weight: 600;letter-spacing:0px;padding:0;"><singleline>
                          <p><a href="https://email.bestonlineholidays.co.uk/sendout/<?php echo $row['also_available']; ?>" style="text-decoration: underline !important;">View in Browser:</a></p>
                        </singleline></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<!--Unsubscribe Link Table Ends--> 
<!--DID header with think shadow image Starts-->
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
  <tr>
    <td data-bgcolor="" class="bodyBgColor" align="center" valign="top" bgcolor="#f5f5f5"><table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;">
        <tr>
          <td data-bgcolor="Inner Background Color" class="whiteBgColor" align="center" valign="top" bgcolor="#FFFFFF"><table>
              <tr>
                <td><table data-editable="image" data-mobile-width="1" style="max-width: 100% ! important;" width="100%" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                      <td style="margin: 0px; padding: 10px 0 0 0; display: inline-block; background-color: rgb(255, 255, 255);" class="tdBlock" valign="top" align="left"><a href="https://bestonlineholidays.co.uk" style="text-decoration:none;border:0" target="_blank"> <img src="https://email.bestonlineholidays.co.uk/sendout/img/<?php echo $row['header_img']; ?>" alt="<?php echo $row['theme']; ?>" style="display:block;border:0;width:100%;max-width: 630px;" width="230" /> </a></td>
                    </tr>
                  </table></td>
              </tr>
            </table>
            <table>
              <tr>
                <td><table data-editable="image" data-mobile-width="1" style="max-width: 100% ! important;" width="100%" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                      <td style="margin: 0px; padding: 0px; display: inline-block;" class="tdBlock" valign="top" align="left"><img src="https://email.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png?img1477660205861" data-src="https://email.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png|600|4|600|20|0|0|1" data-origsrc="https://email.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png?_ga=1.113707653.308031464.1459512055" data-createnew="true" alt="<?php echo $row['theme']; ?>" style="border-width: 0px; border-style: none; border-color: transparent; display: block; width: 100%; max-width: 100% ! important;" width="600" /></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<!--DID header with think shadow image Ends--> 

<!--MAIN IMAGE STARTS-->
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
  <tr>
    <td data-bgcolor="" class="bodyBgColor" align="center" valign="top" bgcolor="#f5f5f5"><table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;">
        <tr>
          <td data-bgcolor="Inner Background Color" class="whiteBgColor" align="center" valign="top" bgcolor="#FFFFFF"><table>
              <tr>
                <td><table data-editable="image" data-mobile-width="1" style="max-width: 100% ! important;" width="100%" cellspacing="0" cellpadding="0" align="center">
                    <tr> 
                      <!--MAIN IMAGE STARTS-->
                      <td style="margin: 0px; padding: 10px 0 0 0; display: inline-block; background-color: rgb(245, 249, 248);" class="tdBlock" valign="top" align="left"><a href="https://bestonlineholidays.co.uk" target="_blank"> <img src="https://email.bestonlineholidays.co.uk/sendout/img/<?php echo $row['main_image']; ?>?<?php echo $t ?>" alt="<?php echo $row['theme']; ?>" style="border-width: 0px; border-style: none; border-color: transparent; display: block; width: 100%; max-width: 100% ! important;" width="700"> </a></td>
                      <!--MAIN IMAGE ENDS--> 
                    </tr>
                  </table></td>
              </tr>
            </table>
            <table>
              <tr>
                <td><table data-editable="image" data-mobile-width="1" style="max-width: 100% ! important;" width="100%" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                      <td style="margin: 0px; padding: 0px; display: inline-block;" class="tdBlock" valign="top" align="left"><img src="https://email.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png?img1477660205861" data-src="https://email.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png|600|4|600|20|0|0|1" data-origsrc="https://email.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png?_ga=1.113707653.308031464.1459512055" data-createnew="true" alt="<?php echo $row['senddate']; ?>" style="border-width: 0px; border-style: none; border-color: transparent; display: block; width: 100%; max-width: 100% ! important;" width="600" /></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<!--MAIN IMAGE ENDS-->

<table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;" width="100%">
  <tr>
    <td align="center" bgcolor="#F9F9F9" class="bodyBgColor" valign="top"><table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:700px;max-width:700px;" width="700">
        <tr>
          <td align="center" bgcolor="#FFFFFF" class="whiteBgColor" valign="top"><table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:600px;max-width:600px;" width="600">
              <tr>
                <td align="center" class="containerPadding" valign="top"><table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:600px;max-width:600px;" width="600">
                    <tr>
                      <td align="center" style="font-size:0;padding:0" valign="middle"><table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:580px;max-width:580px;" width="580">
                          <tr>
                            <td align="left" class="dataTextTitle centerText" style="font-family:IBM Plex Sans,Arial,Helvetica,sans-serif;color:#6F6F6F;font-size:12px;line-height:10px;font-weight:400;letter-spacing:0px;padding:0;padding-bottom:0px;" valign="middle"><multi>&nbsp;</multi></td>
                          </tr>
                          <tr>
                            <td align="left" class="contDescription centerText" style="font-family:Open-Sans,Arial,Helvetica,sans-serif;color:#1e1e1d;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;padding:0;padding-bottom:10px" valign="middle"><multi> <?php echo $row['customer_note']; ?> </multi></td>
                          </tr>
                        </table></td>
                    </tr>
                  </table>
                  <table>
                    <tr>
                      <td><table data-editable="image" data-mobile-width="1" style="max-width: 100% ! important;" width="100%" cellspacing="0" cellpadding="0" align="center">
                          <tr>
                            <td style="margin: 0px; padding: 0px; display: inline-block;" class="tdBlock" valign="top" align="left"><img src="https://email.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png?img1477660205861" data-src="https://email.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png|600|4|600|20|0|0|1" data-origsrc="https://email.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png?_ga=1.113707653.308031464.1459512055" data-createnew="true" alt="<?php echo $row['theme']; ?>" style="border-width: 0px; border-style: none; border-color: transparent; display: block; width: 100%; max-width: 100% ! important;" width="600" /></td>
                          </tr>
                        </table></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<?php
}
mysqli_close( $dbc );
?>
<?php
// Connect to the database
$dbc = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
$date = $_GET[ 'senddate' ];
$theme_id = $_GET[ 'theme_id' ];


// Grab the response data from the database to generate the form
$query2 = "SELECT * FROM tzoffers as se INNER JOIN themes as th ";
$query2 .= "on th.theme_id = se.theme_id WHERE se.theme_id = '$theme_id' ";
$query2 .= "and se.senddate = '$date' ORDER BY price ASC";

$data = mysqli_query( $dbc, $query2 );
$responses = array();
while ( $row = mysqli_fetch_assoc( $data ) ) {
  array_push( $responses, $row );

  $img = explode( ",", $row[ 'images' ] );
  $image = array();
  foreach ( $img as $key => $value ) {
    $imgdir = explode( "/", $value );
    $imagedir = 'https://travelzoo.bestonlineholidays.co.uk/' . $imgdir[ 0 ] . '/';
    $image[] = $imgdir[ 1 ];
  }
	?>
<!--Deal Box Table 100% Starts-->
<table data-module="About Tour Image Section1" border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
  <tbody>
    <tr>
      <td data-bgcolor="Outer Background Color" class="bodyBgColor" align="center" valign="top" bgcolor="#F5F5F5"><!--Deal Box Table 700px Starts-->
        
        <table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;">
          <tbody>
            <tr>
              <td data-bgcolor="Inner Background Color" class="whiteBgColor" align="center" valign="top" bgcolor="#FFFFFF"><!--Deal Box Table2 700px Starts-->
                
                <table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;">
                  <tbody>
                    <tr>
                      <td class="containerPadding" align="center" valign="middle" style="font-size:0;padding:0"><!--Space under deal box starts-->
                        
                        <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
                          <tbody>
                            <tr>
                              <td align="center" valign="middle" height="15" style="font-size:15px;line-height:15px;">&nbsp;</td>
                            </tr>
                          </tbody>
                        </table>
                        
                        <!--Space under deal box ends--> 
                        <!--Deal Image Starts-->
                        
                        <div class="row" style="display:inline-block;max-width: 230px;vertical-align:middle;width:100%;">
                          <table class="row" border="0" width="230" align="left" cellpadding="0" cellspacing="0" style="width: 230px;max-width: 230px;border-collapse:collapse;">
                            <tbody>
                              <tr>
                                <td align="center" valign="middle"><table class="row" border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
                                    <tbody>
                                      <tr>
                                        <td class="imgResponsive" align="center" valign="middle"><a href="https://emails.bestonlineholidays.co.uk/holidays/<?php echo $row['url_strings'] ?>/<?php echo $row['id'] ?>?src=email" style="text-decoration:none;border:0" target="_blank"> <img data-crop="false" editable="true" src="https://emails.bestonlineholidays.co.uk/<?php echo $imgdir[0]; ?>/<?php echo $image[0]; ?>" alt="<?php echo $row['resort'] ?>" border="0" width="230" height="230" style="display:block;border:0;height:230px;max-width: 230px;object-fit: cover !important;"> </a></td>
                                      </tr>
                                    </tbody>
                                  </table></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        
                        <!--Deal Image Ends--> 
                        <!--Space Starts-->
                        
                        <div class="row" style="display:inline-block;max-width:0px;vertical-align:top;width:100%">
                          <table class="row" width="0" border="0" cellpadding="0" cellspacing="0" align="left" style="width:0px;max-width:0px;">
                            <tbody>
                              <tr>
                                <td align="center" valign="middle" height="10" style="font-size:50px;line-height:10px;">&nbsp;</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        
                        <!--Space Ends--> 
                        <!--Deal Text Starts-->
                        
                        <div class="row" style="display:inline-block;max-width: 370px;vertical-align:middle;width:100%;">
                          <table class="row" border="0" width="370" align="left" cellpadding="0" cellspacing="0" style="width: 370px;max-width: 370px;">
                            <tbody>
                              <tr>
                                <td align="left" valign="middle"><table class="row" border="0" width="370" align="left" cellpadding="0" cellspacing="0" style="width: 370px;max-width: 370px;">
                                    <tbody>
                                      <tr>
                                        <td data-size="Description" data-color="Description" mc:hideable="" mc:edit="" class="contTitle centerText" align="left" valign="middle" style="font-family:IBM Plex Sans,Arial,Helvetica,sans-serif;color: #717171;font-size: 18px;line-height:20px;font-weight: 700;letter-spacing:0px;padding:5px;padding-bottom: 5px;padding-left: 15px;"><singleline><?php echo $row['star'] ?>* <?php echo strtoupper( str_replace( "_", " ", $row[ 'resort' ] ) ) ?> FROM &pound;<?php echo $row['price'] ?>/pp</singleline></td>
                                      </tr>
							<?php
							if (!empty($row['tour'])) {
                             echo '<tr>';
                                echo '<td data-size="Description" data-color="Description" mc:hideable="" mc:edit="" class="contTitle centerText" align="left" valign="middle" style="font-family:';echo "'IBM Plex Sans',"; echo ' Arial,Helvetica,sans-serif;#373636;font-size: 14px;line-height:15px;font-weight: 600;letter-spacing:0px;padding:5px;padding-bottom: 5px;padding-left: 15px;">';
                                  echo '<singleline>';	
                                      $tours = $row[ 'tour' ];
                                      $str = [ ',','�','�' ];
                                      $rplc = [ ' ','-','&pound;' ];
                                      echo  str_replace( $str, $rplc, $tours ) ;
                                    
                                     echo '</singleline>';                                   
                                    echo '</td>';
                                  echo '</tr>';
                               }	
	                           ?>
                                      <tr>
                                        <td data-size="Description" data-color="Description" mc:hideable="" mc:edit="" class="contTitle centerText" align="left" valign="middle" style="font-family:IBM Plex Sans,Arial,Helvetica,sans-serif;color: #1e1e1d;font-size:14px;line-height: 22px;font-weight:400;letter-spacing:0px;padding:5px;padding-bottom: 5px;padding-left: 15px;"><singleline><?php echo $row['hotel_name'] ?> | <?php echo $row['nights'] ?> NTS - <?php echo $row['board'] ?></singleline></td>
                                      </tr>
                                      <tr>
                                        <td style="padding: 0 15px;"><hr style="color: grey;margin: 0;padding: 0px 0;"></td>
                                      </tr>
                                      <tr>
                                        <td data-size="Description" data-color="Description" mc:hideable="" mc:edit="" class="contTitle centerText" align="left" valign="middle" style="font-family:IBM Plex Sans,Arial,Helvetica,sans-serif;color: #1e1e1d;font-size: 12px;line-height: 22px;font-weight:400;letter-spacing:0px;padding:5px;padding-bottom: 5px;padding-left: 15px;"><singleline>Departs on selected dates: <?php echo $row['selected_dates'] ?><br>
                                            Other dates available, please call for further details</singleline></td>
                                      </tr>
                                      <tr>
                                        <td style="padding: 0 15px;"><hr style="color: grey;margin: 0;padding: 0px 0;"></td>
                                      </tr>
                                      <tr>
                                        <td data-size="Description" data-color="Description" mc:hideable="" mc:edit="" class="contTitle centerText" align="left" valign="middle" style="font-family:
  IBM Plex Sans,Arial,Helvetica,sans-serif;color: #1e1e1d;font-size: 12px;line-height: 22px;font-weight:400;letter-spacing:0px;padding:5px;padding-bottom: 5px;padding-left: 15px;"><singleline>Includes return flights &amp; hand baggage* | All prices exclude baggage and transfers | Atol Protected...</singleline></td>
                                      </tr>
                                      <tr>
                                        <td align="center" valign="middle"><table class="centerFloat" border="0" align="right" cellpadding="0" cellspacing="0">
                                            <tbody>
                                              <tr>
                                                <td data-size="Button" data-bgcolor="Button" mc:hideable="" mc:edit="" class="heroBtn" align="center" style="font-family:
  Open Sans,Arial,Helvetica,sans-serif;font-size:12px;line-height:20px;display:inline-block;"><a data-color="Button" href="tel:<?php echo str_replace( " ", "", $row[ 'tel' ] ) ?>" target="_blank" style="color:#FFFFFF;text-decoration:none;"><img style="display: block;border: 0;width: 100%;max-width: 218px;" src="https://email.bestonlineholidays.co.uk/sendout/img/<?php echo $row['ctc_btn'] ?>? <?php echo $t ?>"  alt=" <?php echo $row['tel'] ?> Phone Number Image"></a></td>
                                              </tr>
                                            </tbody>
                                          </table></td>
                                      </tr>
                                    </tbody>
                                  </table></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        
                        <!--Deal Text Ends--></td>
                    </tr>
                  </tbody>
                </table>
                
                <!--Deal Box Table 700px Starts--></td>
            </tr>
          </tbody>
        </table>
        
        <!--Deal Box Table2 700px Ends--></td>
    </tr>
  </tbody>
</table>
<?php
}
mysqli_close( $dbc );
?>
<!--Deal Box Table 100% Ends-->
<?php
// Insert the page footer
require_once( 'footer.php' );
?>
