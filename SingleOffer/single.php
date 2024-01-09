<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="telephone=no">
<meta name="format-detection" content="date=no">
<meta name="format-detection" content="address=no">
<meta name="format-detection" content="email=no">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&amp;display=swap" rel="stylesheet" />
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
    table.hideMobile,
    tr.hideMobile,
    td.hideMobile,
    br.hideMobile {
    display: none!important;
    }
    table.mobilePadding {
    margin: 15px 0!important;
    }
    table.row,
    div.row {
    width: 100%!important;
    max-width: 100%!important;
    }
    table.centerFloat,
    td.centerFloat {
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
<?php
require_once( 'connectvars.php' );
$dbc = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
$theme_id = $_GET[ 'theme_id' ];
$t = time();
// Grab the response data from the database to generate the form
$query = "SELECT theme FROM themes WHERE theme_id = '$theme_id' ";
$data = mysqli_query( $dbc, $query );
while ( $row = mysqli_fetch_array( $data ) ) {
  echo '<title>' . $row[ 'theme' ] . ' | ' . date( "Y-m-d" ) . '</title>';
}
mysqli_close( $dbc );
?>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div style="display:none;font-size:1px;color:#FFFFFF;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;">Includes return flights &amp; hand baggage* | All prices exclude baggage and transfers | Atol Protected... </div>
<!--<table align="center" border="0" cellpadding="0" cellspacing="0" data-module="Hero Image Button Text Section1" data-thumb="thumbnails/add-hero.jpg" style="width:100%;max-width:100%;" width="100%">
<tbody>
<tr>
<td align="center" bgcolor="#f5f5f5" class="bodyBgColor" data-bgcolor="" valign="top">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:700px;max-width:700px;" width="700">
<tbody>
<tr>
<td align="right" class="whiteBgColor" data-bgcolor="Inner Background Color" valign="top">
<table>
<tbody>
<tr>
<td>
<table align="right" cellpadding="0" cellspacing="0" data-editable="image" data-mobile-width="1" style="max-width: 100% ! important;" width="100%">
<tbody>
<tr>
<td align="right" class="sectionTitle centerText" data-color="Section Title" data-size="Section Title" mc:edit="" mc:hideable="" style="font-family: 'Montserrat',  Arial,Helvetica,sans-serif;color: #565656;font-size: 14px;line-height: 36px;font-weight: 600;letter-spacing:0px;padding:0;" valign="middle">
<singleline>
<p>To unsubscribe from this newsletter, click here: 
<a href="

<%unsubscribe_link_text%>" style="text-decoration: underline !important;">here 
</a>
</p> 
</singleline>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>-->
<table align="center" border="0" cellpadding="0" cellspacing="0" data-module="Hero Image Button Text Section1" data-thumb="thumbnails/add-hero.jpg" style="width:100%;max-width:100%;" width="100%">
  <tbody>
    <tr>
      <td align="center" bgcolor="#f5f5f5" class="bodyBgColor" data-bgcolor="" valign="top"><table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:700px;max-width:700px;" width="700">
          <tbody>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="whiteBgColor" data-bgcolor="Inner Background Color" valign="top"><table>
                  <tbody>
                    <tr>
                      <td><table align="center" cellpadding="0" cellspacing="0" data-editable="image" data-mobile-width="1" style="max-width: 100% ! important;" width="100%">
                          <tbody>
                            <tr>
                              <td align="left" class="tdBlock" style="margin: 0px; padding: 10px 0 0 0; display: inline-block; background-color: rgb(255, 255, 255);" valign="top"><a href="https://bestonlineholidays.co.uk" style="text-decoration:none;border:0" target="_blank"> <img alt="Summer 2021" src="https://www.bestonlineholidays.co.uk/sendout/img/header.png?<?php echo $t;  ?>" style="border-width: 0px; border-style: none; border-color: transparent; display: block; width: 100%; max-width: 100% !important;" width="600" /> </a></td>
                            </tr>
                          </tbody>
                        </table></td>
                    </tr>
                  </tbody>
                </table>
                <table>
                  <tbody>
                    <tr>
                      <td><table align="center" cellpadding="0" cellspacing="0" data-editable="image" data-mobile-width="1" style="max-width: 100% ! important;" width="100%">
                          <tbody>
                            <tr>
                              <td align="left" class="tdBlock" style="margin: 0px; padding: 0px; display: inline-block;" valign="top"><img alt="Deal of the Day 2021" data-createnew="true" data-origsrc="https://www.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png?_ga=<?php echo $t;  ?>" data-src="https://www.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png|600|4|600|20|0|0|1" src="https://www.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png?<?php echo $t;  ?>" style="border-width: 0px; border-style: none; border-color: transparent; display: block; width: 100%; max-width: 100% ! important;" width="600" /></td>
                            </tr>
                          </tbody>
                        </table></td>
                    </tr>
                  </tbody>
                </table></td>
            </tr>
          </tbody>
        </table></td>
    </tr>
  </tbody>
</table>
<?php
require_once( 'connectvars.php' );
$dbc = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
$date = $_REQUEST[ 'senddate' ];
$theme_id = $_REQUEST[ 'theme_id' ];
$qry2 = "SELECT * FROM themes as th INNER JOIN tzoffers as se ";
$qry2 .= "on se.theme_id = th.theme_id WHERE se.theme_id = '$theme_id' ";
$qry2 .= "and se.senddate = '$date' ORDER BY th.theme DESC LIMIT 1";
$dataval = mysqli_query( $dbc, $qry2 );
$responses = array();
while ( $rowval = mysqli_fetch_assoc( $dataval ) ) {
  array_push( $responses, $rowval );
}
//echo '<pre>';print_r($responses);die;
?>
<table align="center" border="0" cellpadding="0" cellspacing="0" data-module="Hero Image Button Text Section1" data-thumb="thumbnails/add-hero.jpg" style="width:100%;max-width:100%;" width="100%">
  <tbody>
    <tr>
      <td align="center" bgcolor="#f5f5f5" class="bodyBgColor" data-bgcolor="" valign="top"><table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:700px;max-width:700px;" width="700">
          <tbody>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="whiteBgColor" data-bgcolor="Inner Background Color" valign="top"><table>
                  <tbody>
                    <tr>
                      <td><table align="center" cellpadding="0" cellspacing="0" data-editable="image" data-mobile-width="1" style="max-width: 100% ! important;" width="100%">
                          <tbody>
                            <tr>
                              <td align="left" class="tdBlock" style="margin: 0px; padding: 10px 0 0 0; display: inline-block; background-color: rgb(245, 249, 248);" valign="top"><a href="https://emails.bestonlineholidays.co.uk/holidays/<?php echo $responses[0]['url_strings']; ?>/<?php echo $responses[0]['id']; ?>?src=email" target="_blank"> <img alt="<?php echo $responses[0]['theme']; ?>" src="https://www.bestonlineholidays.co.uk/sendout/img/<?php echo $responses[0]['main_image']; ?>?<?php echo $t;  ?>" style="border-width: 0px; border-style: none; border-color: transparent; display: block; width: 100%; max-width: 100% ! important;" width="700" /> </a></td>
                            </tr>
                          </tbody>
                        </table></td>
                    </tr>
                  </tbody>
                </table>
                <table>
                  <tbody>
                    <tr>
                      <td><table align="center" cellpadding="0" cellspacing="0" data-editable="image" data-mobile-width="1" style="max-width: 100% ! important;" width="100%">
                          <tbody>
                            <tr>
                              <td align="left" class="tdBlock" style="margin: 0px; padding: 0px; display: inline-block;" valign="top"><img alt="2021-10-27" data-createnew="true" data-origsrc="https://www.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png?_ga=1.113707653.308031464.1459512055" data-src="https://www.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png|600|4|600|20|0|0|1" src="https://www.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png?img1477660205861" style="border-width: 0px; border-style: none; border-color: transparent; display: block; width: 100%; max-width: 100% ! important;" width="600" /></td>
                            </tr>
                          </tbody>
                        </table></td>
                    </tr>
                  </tbody>
                </table></td>
            </tr>
          </tbody>
        </table></td>
    </tr>
  </tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;" width="100%">
  <tbody>
    <tr>
      <td align="center" bgcolor="#F9F9F9" class="bodyBgColor" valign="top"><!-- Bg Color Open // -->
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:700px;max-width:700px;" width="700">
          <tbody>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="whiteBgColor" valign="top"><!-- E-mail Container Section Open // -->
                
                <table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:600px;max-width:600px;" width="600">
                  <tbody>
                    <tr>
                      <td align="center" class="containerPadding" valign="top"><!-- Space Open -->
                        
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;" width="100%">
                          <tbody>
                            <tr>
                              <td align="center" height="30" style="font-size:30px;line-height:30px;" valign="middle">&nbsp;</td>
                            </tr>
                          </tbody>
                        </table>
                        
                        <!-- Space Close --> 
                        <!-- Table Container 1 Column Open // -->
                        
                        <table align="center" border="0" cellpadding="0" cellspacing="0" data-editable="text" width="100%">
                          <tbody>
                            <tr>
                              <td align="left" class="lh-2" style="padding: 10px; font-family: Arial,Helvetica,sans-serif; color: rgb(128, 128, 128); font-size: 16px; line-height: 1.25;" valign="top"><div style="text-align: left;">
                                  <ul>
                                    <li> <span style="line-height: 1.25;"> <span style="font-weight: bold;"> <font size="16" style="font-size: 16px;"><?php echo $responses[0]['title']; ?> </font> </span> </span> </li>
                                    <li><?php echo strtoupper($responses[0]['nights']); ?> Nights</li>
                                    <li>Board Basis:
                                      <?php
                                      $boardbasis = $responses[ 0 ][ 'board' ];
                                      if ( $boardbasis == BB ) {
                                        echo 'BED & BREAKFAST';
                                      } else if ( $boardbasis == AI ) {
                                        echo 'ALL INCLUSIVE';
                                      } else if ( $boardbasis == HB ) {
                                        echo 'HALF BOARD';
                                      } else if ( $boardbasis == SC ) {
                                        echo 'SELF CATERING';
                                      } else if ( $boardbasis == RO ) {
                                        echo 'ROOM ONLY';
                                      } else if ( $boardbasis == FB ) {
                                        echo 'FULL BOARD';
                                      }
                                      ?>
                                    </li>
                                    <li>Selected Dates: <?php echo strtoupper($responses[0]['selected_dates']); ?></li>
                                    <?php if (!empty($responses[0]['tour'])) {
		                             $tours = $responses[0][ 'tour' ];
                                      $str = [ ',','–','£' ];
                                      $rplc = [ ' ','-','&pound;' ];
                                      echo '<li>'  . str_replace( $str, $rplc, $tours ) . '</li>' ;
                                      } ?> 
                                    <li>Includes return flights &amp; hand baggage* </li>
                                    <li>All prices exclude hold baggage and transfers </li>
                                    <li>Atol Protected </li>
                                  </ul>
                                  <div>
                                    <div style="text-align: center;"> <span style="font-family: Helvetica,sans-serif; color: gray;"><?php echo $responses[0]['star']; ?>* <?php echo $responses[0]['hotel_name']; ?> </span>
                                      <div style="text-align: center;"> <span style="font-size: 9pt; font-family: Helvetica,sans-serif; color: gray;"><?php echo $responses[0]['hotel_addr']; ?> </span> </div>
                                      <span style="text-align: left;"> </span> </div>
                                  </div>
                                  <ul>
                                  </ul>
                                </div></td>
                            </tr>
                          </tbody>
                        </table>
                        
                        <!-- Table Container 1 Column Close // --></td>
                    </tr>
                  </tbody>
                </table>
                
                <!-- E-mail Container Section Close // --></td>
            </tr>
          </tbody>
        </table>
        
        <!-- Bg Color Close // --></td>
    </tr>
  </tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;" width="100%">
  <tbody>
    <tr>
      <td align="center" bgcolor="#F9F9F9" class="bodyBgColor" valign="top"><!-- Bg Color Open // -->
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:700px;max-width:700px;" width="700">
          <tbody>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="whiteBgColor" valign="top"><!-- E-mail Container Section Open // -->
                
                <table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:600px;max-width:600px;" width="600">
                  <tbody>
                    <tr>
                      <td align="center" class="containerPadding" valign="top"><!-- Space Open -->
                        
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;" width="100%">
                          <tbody>
                            <tr>
                              <td align="center" height="30" style="font-size:30px;line-height:30px;" valign="middle">&nbsp;</td>
                            </tr>
                          </tbody>
                        </table>
                        
                        <!-- Space Close --> 
                        <!-- Table Container 1 Column Open // -->
                        
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:600px;max-width:600px;" width="600">
                          <tbody>
                            <tr>
                              <td align="center" style="font-size:0;padding:0" valign="middle"><!-- Title Section // -->
                                
                                <table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:580px;max-width:580px;" width="580">
                                  <tbody>
                                    <tr style="text-align:center;">
                                      <td align="center" class="tdBlock" style="display: inline-block; padding: 13px 25px; margin: 0px; border-radius: 7px; background-color: rgb(255, 155, 29); " valign="top"><a href="tel:<?php echo $responses[0]['tel']; ?>" style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; color: rgb(255 255 255); font-size: 20px; text-decoration: none; font-weight: bold;" target="_blank"> <span>TO BOOK CALL US NOW ON </span> <br />
                                        <span style="font-size: 34px; font-family: Helvetica, 'Helvetica Neue', Arial, sans-serif; background-color: inherit; color: rgb(255 255 255);"><?php echo $responses[0]['tel']; ?> </span> </a></td>
                                    </tr>
                                  </tbody>
                                </table></td>
                            </tr>
                          </tbody>
                        </table>
                        
                        <!-- Table Container 1 Column Close // --> 
                        <!-- Space Open -->
                        
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;" width="100%">
                          <tbody>
                            <tr>
                              <td align="center" height="30" style="font-size:30px;line-height:30px;" valign="middle">&nbsp;</td>
                            </tr>
                          </tbody>
                        </table>
                        
                        <!-- Space Close --></td>
                    </tr>
                  </tbody>
                </table>
                
                <!-- E-mail Container Section Close // --></td>
            </tr>
          </tbody>
        </table>
        
        <!-- Bg Color Close // --></td>
    </tr>
  </tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" data-module="Hero Image Button Text Section1" data-thumb="thumbnails/add-hero.jpg" style="width:100%;max-width:100%;" width="100%">
  <tbody>
    <tr>
      <td align="center" bgcolor="#f5f5f5" class="bodyBgColor" data-bgcolor="" valign="top"><table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:700px;max-width:700px;" width="700">
          <tbody>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="whiteBgColor" data-bgcolor="Inner Background Color" valign="top"><!--[if (gte mso 9)|(IE)]>
                         
<v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:700px;height:510px;">
                            
<v:fill type="frame" src="https://email.superescapes.co.uk/3RD/img/hero-promotion-img.jpg" color="#000000">

</v:fill>
                            
<v:textbox style="v-text-anchor:middle;" inset="0,0,0,0">
                               
<![endif]-->
                
                <table>
                  <tbody>
                    <tr>
                      <td><table align="center" cellpadding="0" cellspacing="0" data-editable="image" data-mobile-width="1" style="max-width: 100% ! important;" width="100%">
                          <tbody>
                            <tr>
                              <td align="left" class="tdBlock" style="margin: 0px; padding: 10px 0 0 0; display: inline-block; background-color: rgb(245, 249, 248);" valign="top"><a href="https://bestonlineholidays.co.uk" target="_blank"> <img data-createnew="true" data-origsrc="https://bestonlineholidays.co.uk/sendout/img/footer_img2.png" data-src="https://bestonlineholidays.co.uk/sendout/img/footer_img2.png?|600|110|600|103|0|0|1" src="https://bestonlineholidays.co.uk/sendout/img/footer_img2.png" style="border-width: 0px; border-style: none; border-color: transparent; display: block; width: 100%; max-width: 100% ! important;" width="700" /> </a></td>
                            </tr>
                          </tbody>
                        </table></td>
                    </tr>
                  </tbody>
                </table>
                
                <!--[if (gte mso 9)|(IE)]>
                            
</v:textbox>
                         
</v:rect>
                         
<![endif]--></td>
            </tr>
          </tbody>
        </table></td>
    </tr>
  </tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" data-module="Add Banner Section3" data-thumb="thumbnails/b-2.jpg" style="width:100%;max-width:100%;" width="100%">
  <tbody>
    <tr>
      <td align="center" bgcolor="#F5F5F5" class="bodyBgColor" data-bgcolor="Outer Background Color" valign="top"><table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;" width="100%">
          <tbody>
            <tr>
              <td align="center" bgcolor="#F9F9F9" class="bodyBgColor" valign="top"><table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:700px;max-width:700px;" width="700">
                  <tbody>
                    <tr>
                      <td align="center" bgcolor="#e19c41" class="OrangeBgColor" valign="top"><table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:100%;max-width:100%;" width="100%">
                          <tbody>
                            <tr>
                              <td align="center" background="https://bestonlineholidays.co.uk/sendout/img/email_bg-img.jpg" class="bg-image" style="background-size:cover;background-position:center;" valign="top"><table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:600px;max-width:600px;" width="600">
                                  <tbody>
                                    <tr>
                                      <td align="center" class="containerPadding" valign="top"><table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;" width="100%">
                                          <tbody>
                                            <tr>
                                              <td align="center" height="30" style="font-size:60px;line-height:30px;" valign="middle">&nbsp;</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:600px;max-width:600px;" width="600">
                                          <tbody>
                                            <tr>
                                              <td align="center" style="font-size:0;padding:0" valign="top"><div class="row" style="display:inline-block;max-width:220px;vertical-align:top;width:100%">
                                                  <table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:220px;max-width:220px;" width="220">
                                                    <tbody>
                                                      <tr>
                                                        <td align="center" valign="middle"><table align="center" border="0" cellpadding="0" cellspacing="0" class="centerFloat">
                                                            <tbody>
                                                              <tr>
                                                                <td align="center" class="logo" style="padding:0;padding-bottom:20px;" valign="middle"><a href="http://bestonlineholidays.co.uk" style="text-decoration:none;border:0"> <img alt="#" border="0" data-crop="false" editable="true" src="https://bestonlineholidays.co.uk/sendout/img/logo-light.png?1" style="display:block;border:0;width:170px;" width="170" /> </a></td>
                                                              </tr>
                                                            </tbody>
                                                          </table></td>
                                                      </tr>
                                                      <tr>
                                                        <td><table align="center" border="0" cellpadding="0" cellspacing="10" class="row" style="width:100%;max-width:100%;" width="100%">
                                                            <tbody>
                                                              <tr bgcolor="#FFFFFF">
                                                                <td align="center" valign="middle"><table align="center" border="0" cellpadding="0" cellspacing="0" class="centerFloat">
                                                                    <tbody>
                                                                      <tr>
                                                                        <td align="center" class="logo" style="padding:0;padding-bottom:10px;padding-top:10px;" valign="middle"><a href="https://bestonlineholidays.co.uk/financial-protection.aspx" style="text-decoration:none;border:0"> <img alt="#" border="0" data-crop="false" editable="true" src="https://bestonlineholidays.co.uk/sendout/img/footer-atol.jpg" style="display:block;border:0;width:60px;" width="60" /> </a></td>
                                                                        <td align="center" class="logo" style="padding:0;padding-bottom:10px;padding-top:10px;" valign="middle"><a href="https://bestonlineholidays.co.uk/financial-protection.aspx" style="text-decoration:none;border:0"> <img alt="#" border="0" data-crop="false" editable="true" src="https://bestonlineholidays.co.uk/sendout/img/tta.jpg" style="display:block;border:0;width:60px;" width="60" /> </a></td>
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
                                                <div class="row" style="display:inline-block;max-width:20px;vertical-align:top;width:100%">
                                                  <table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:20px;max-width:20px;" width="20">
                                                    <tbody>
                                                      <tr>
                                                        <td align="center" height="30" style="font-size:30px;line-height:30px;" valign="middle">&nbsp;</td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                </div>
                                                <div class="row" style="display:inline-block;max-width:200px;vertical-align:top;width:100%">
                                                  <table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:200px;max-width:200px;" width="200">
                                                    <tbody>
                                                      <tr>
                                                        <td align="center" valign="middle"><table align="left" border="0" cellpadding="0" cellspacing="0" class="centerFloat" width="100%">
                                                            <tbody>
                                                              <tr>
                                                                <td align="left" class="fotterTitle centerText" data-color="Fotter Title" data-size="Fotter Title" mc:edit="" mc:hideable="" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:700;letter-spacing:0px;padding:0;padding-bottom:20px" valign="middle"><singleline> CONTACT INFO </singleline></td>
                                                              </tr>
                                                            </tbody>
                                                          </table>
                                                          <table align="center" border="0" cellpadding="0" cellspacing="0" class="centerFloat">
                                                            <tbody>
                                                              <tr>
                                                                <td align="left" class="fotterDescription centerText" data-color="Fotter Description" data-size="Fotter Description" mc:edit="" mc:hideable="" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;padding:0;padding-bottom:10px;text-align: left " valign="middle"><singleline> Marshall House, Suite 37/38, <br />
                                                                    124 Middleton Road, Morden SM4 6RW, United Kingdom </singleline></td>
                                                              </tr>
                                                            </tbody>
                                                          </table>
                                                          <table align="left" border="0" cellpadding="0" cellspacing="0" class="leftFloat">
                                                            <tbody>
                                                              <!--

<tr>

<td align="left" class="fotterDescription leftText" data-size="Fotter Email" mc:edit="" mc:hideable="" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;text-align: left" valign="left">

<a data-color="Fotter Email" href="http://email-superescapes.co.uk/re?l=D0I1il339yIf5v64jeIuITk8zl5v9m&amp;s=PLCHDLPECNHFODIO&amp;req=dmc_cid%3D8927" style="color:#FFFFFF;text-decoration:none;">

<singleline>Email: 

<span class="__cf_email__" data-cfemail="771e1911183704020712051204141607120459141859021c">[email&nbsp;protected]

</span>

</singleline>

</a>

</td>

</tr>-->
                                                              <tr>
                                                                <td align="left" class="footerd leftText" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;" valign="middle"><a editable="true" href="#" style="color:#FFFFFF;text-decoration:none;">Phone: 020 3883 1740 </a></td>
                                                              </tr>
                                                            </tbody>
                                                          </table></td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                </div>
                                                <div class="row" style="display:inline-block;max-width:20px;vertical-align:top;width:100%">
                                                  <table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:20px;max-width:20px;" width="20">
                                                    <tbody>
                                                      <tr>
                                                        <td align="center" height="30" style="font-size:30px;line-height:30px;" valign="middle">&nbsp;</td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                </div>
                                                <div class="row" style="display:inline-block;max-width:140px;vertical-align:top;width:100%">
                                                  <table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:140px;max-width:140px;" width="140">
                                                    <tbody>
                                                      <tr>
                                                        <td align="center" valign="middle"><table align="left" border="0" cellpadding="0" cellspacing="0" class="centerFloat" width="100%">
                                                            <tbody>
                                                              <tr>
                                                                <td align="left" class="fotterTitle centerText" data-color="Fotter Title" data-size="Fotter Title" mc:edit="" mc:hideable="" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:700;letter-spacing:0px;padding:0;padding-bottom:20px" valign="middle"><singleline> MORE LINKS </singleline></td>
                                                              </tr>
                                                            </tbody>
                                                          </table>
                                                          <table align="center" border="0" cellpadding="0" cellspacing="0" class="centerFloat">
                                                            <tbody>
                                                              <tr>
                                                                <td align="center" class="fotterDescription centerText" data-size="Footer Link" mc:edit="" mc:hideable="" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;text-align: left" valign="middle"><a data-color="Footer Link" href="https://www.bestonlineholidays.co.uk/terms.html" style="color:#FFFFFF; text-decoration:none;">
                                                                  <singleline> Terms </singleline>
                                                                  </a></td>
                                                              </tr>
                                                              <tr>
                                                                <td align="center" class="fotterDescription centerText" data-size="Footer Link" mc:edit="" mc:hideable="" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;text-align: left" valign="middle"><a data-color="Footer Link" href="https://www.bestonlineholidays.co.uk/traveladvice.html" style="color:#FFFFFF;text-decoration:none;">
                                                                  <singleline>TravelAdvice </singleline>
                                                                  </a></td>
                                                              </tr>
                                                              <tr>
                                                                <td align="center" class="fotterDescription centerText" data-size="Footer Link" mc:edit="" mc:hideable="" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;text-align: left" valign="middle"><a data-color="Footer Link" href="https://www.bestonlineholidays.co.uk/aboutus.html" style="color:#FFFFFF;text-decoration:none;">
                                                                  <singleline>About Best Online Holidays </singleline>
                                                                  </a></td>
                                                              </tr>
                                                              <tr>
                                                                <td align="center" class="fotterDescription centerText" data-size="Footer Link" mc:edit="" mc:hideable="" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;text-align: left" valign="middle"><a data-color="Footer Link" href="https://www.bestonlineholidays.co.uk/privacy.html" style="color:#FFFFFF;text-decoration:none;">
                                                                  <singleline>Privacy &amp; Policies </singleline>
                                                                  </a></td>
                                                              </tr>
                                                              <tr>
                                                                <td align="center" class="fotterDescription centerText" data-size="Footer Link" mc:edit="" mc:hideable="" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;text-align: left" valign="middle"><a data-color="Footer Link" href="https://www.bestonlineholidays.co.uk/contactus.html" style="color:#FFFFFF;text-decoration:none;">
                                                                  <singleline>Contact Us </singleline>
                                                                  </a></td>
                                                              </tr>
                                                              <tr>
                                                                <td align="center" class="fotterDescription centerText" data-size="Footer Link" mc:edit="" mc:hideable="" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;text-align: left;" valign="middle"><a data-color="Footer Link" href="

<%unsubscribe_link_text%>" style="color:#FFFFFF;text-decoration:none;">
                                                                  <singleline>Unsubscribe </singleline>
                                                                  </a></td>
                                                              </tr>
                                                            </tbody>
                                                          </table></td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                </div></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;" width="100%">
                                          <tbody>
                                            <tr>
                                              <td align="center" height="30" style="font-size:30px;line-height:30px;" valign="middle">&nbsp;</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;" width="100%">
                                          <tbody>
                                            <tr>
                                              <td align="center" height="10" style="font-size:10px;line-height:10px;" valign="middle">&nbsp;</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:600px;max-width:600px;" width="600">
                                          <tbody>
                                            <tr>
                                              <td align="center" style="font-size:0;padding:0" valign="top"><div class="row" style="display:inline-block;max-width:290px;vertical-align:top;width:100%">
                                                  <table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:290px;max-width:290px;" width="290">
                                                    <tbody>
                                                      <tr>
                                                        <td align="center" valign="middle"><table align="center" border="0" cellpadding="0" cellspacing="0" class="centerFloat">
                                                            <tbody>
                                                              <tr>
                                                                <td align="left" class="fotterDescription centerText" data-size="Fotter Copyright" mc:edit="" mc:hideable="" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;" valign="middle"><singleline> &copy; 2021 Superescapes. All Rights Reserved </singleline></td>
                                                              </tr>
                                                            </tbody>
                                                          </table></td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                </div>
                                                <div class="row" style="display:inline-block;max-width:20px;vertical-align:top;width:100%">
                                                  <table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:20px;max-width:20px;" width="20">
                                                    <tbody>
                                                      <tr>
                                                        <td align="center" height="30" style="font-size:30px;line-height:30px;" valign="middle">&nbsp;</td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                </div>
                                                <div class="row" style="display:inline-block;max-width:290px;vertical-align:top;width:100%">
                                                  <table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:290px;max-width:290px;" width="290">
                                                    <tbody>
                                                      <tr>
                                                        <td align="center" valign="middle"><table align="center" border="0" cellpadding="0" cellspacing="0" class="centerFloat">
                                                            <tbody>
                                                              <tr>
                                                                <td align="left" class="fotterDescription centerText" data-size="Fotter Unsubscribe" mc:edit="" mc:hideable="" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;" valign="middle"><unsubscribe> <a href="

<%unsubscribe_link_text%>" style="color: #fff; text-decoration:none; ">Unsubscribe </a> </unsubscribe></td>
                                                              </tr>
                                                            </tbody>
                                                          </table></td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                </div></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;" width="100%">
                                          <tbody>
                                            <tr>
                                              <td align="center" height="30" style="font-size:60px;line-height:30px;" valign="middle">&nbsp;</td>
                                            </tr>
                                          </tbody>
                                        </table></td>
                                    </tr>
                                  </tbody>
                                </table></td>
                            </tr>
                          </tbody>
                        </table></td>
                    </tr>
                  </tbody>
                </table></td>
            </tr>
          </tbody>
        </table></td>
    </tr>
  </tbody>
</table>
</body>
</html>