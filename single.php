<?php
require_once( 'connectvars.php' );
$dbc = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
$date = $_REQUEST[ 'senddate' ];
$theme_id = $_REQUEST[ 'theme_id' ];
$t = time();
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
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="telephone=no">
<meta name="format-detection" content="date=no">
<meta name="format-detection" content="address=no">
<meta name="format-detection" content="email=no">
<title><?php echo $responses[0]['theme']; ?> | <?php echo $responses[0]['senddate']; ?></title>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" />
</head>

<body style="margin-top:0; margin-bottom:0;padding-top:0;padding-bottom:0;width:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;">
<style type="text/css">
      /*------ Client-Specific Style ------ */
      @-ms-viewport{width:device-width;}
      table {mso-table-lspace:0pt; mso-table-rspace:0pt;}
      table td {border-collapse: collapse;}
      img {-ms-interpolation-mode:bicubic;display:block; width:auto; max-width:auto; height:auto; margin:auto;}
      p, a, li, td, blockquote{mso-line-height-rule:exactly;}
      p, a, li, td, body, table, blockquote{-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%;}
      #outlook a{padding:0;}
      .ReadMsgBody{width:100%;background-color:#ffffff;} .ExternalClass{width:100%;}
      .ExternalClass,.ExternalClass div,.ExternalClass font,.ExternalClass p,.ExternalClass span,.ExternalClass td,img{line-height:100%;}
      a[x-apple-data-detectors] {color:inherit !important;text-decoration:none !important;font-size:inherit !important;font-family:inherit !important;font-weight:inherit !important;line-height:inherit !important;}
      u + #body a {color:inherit;font-family:inherit;text-decoration:none;font-size:inherit;font-weight:inherit;line-height:inherit;}
      .mcnPreviewText{display:none !important;}

      /*------ Reset Style ------ */
      table{border-spacing: 0 !important;}
      h1, h2, h3, h4, h5, h6{display:block; Margin:0;padding:0;}
      strong {font-weight: bold !important;}
      p {margin:0 !important;padding:0 !important;display:block !important;font-family:inherit !important;}
      img, a img{border:0; height:auto; outline:none;text-decoration:none  !important;}
      body, #bodyTable, #bodyCell {margin:0px !important;padding:0px !important;display:block !important; min-width:100% !important; width:100% !important; -webkit-text-size-adjust:none; -webkit-text-resize:100%;text-resize:100%;}

      .appleLinks a {color: #c2c2c2 !important;text-decoration: none !important;}
      span.preheader {display:none !important; }
      .topMsg a{color:#939393 !important;text-decoration: underline !important;text-align:right !important;}
      .webView a{color:#FFFFFF !important;text-decoration: none !important;}
      .menuLink a{color:#FBF5F6 !important;text-decoration: none !important;}
      .menuLinkWhite a{color:#FFFFFF !important;text-decoration: none !important;}
      .heroBtn a { color:#FFFFFF !important; font-family:'Open Sans',Helvetica,Arial,sans-serif !important; text-decoration:none !important;}
      .wheroBtn a { color:#191919 !important; font-family:'Open Sans',Helvetica,Arial,sans-serif !important; text-decoration:none !important;}
      .footerd a{color:#FFFFFF !important;text-decoration: none !important;}
    </style>
<style type="text/css">
      /*------ Media Width 599px ------ */
      /*Responsive*/
      @media screen and (max-width: 599px) {
         table.hideMobile, tr.hideMobile, td.hideMobile, br.hideMobile {display:none!important;}
         table.mobilePadding {margin: 15px 0!important;}
         table.row, div.row {width: 100%!important;max-width: 100%!important;}
         table.centerFloat, td.centerFloat {float: none!important;}
         td.menuContainer {text-align: center !important;}
         td.autoHeight {height: auto!important;}
         td.height200 {height: 200px!important;}
         td.borderRounded {border-radius: 6px!important;}
         td.borderNone {border: none!important;}
         td.imgResponsive img {width:100%!important;max-width: 100%!important;height: auto!important;margin: auto;}
         td.centerText{text-align: center!important;}
         td.containerPadding {width: 100%!important;padding-left: 15px!important;padding-right: 15px!important;}
         td.spaceControl {height:15px!important;font-size:15px!important;line-height:15px!important;}
      }
    </style>
<!-- Do Even More Section Open //-->
<module label="50% off section">
  <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
    <tr>
      <td class="bodyBgColor" align="center" valign="top" bgcolor="#F9F9F9"><!-- Bg Color Open // -->        
        <table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;">
          <tr>
            <td class="greyBgColor" align="center" valign="top" bgcolor="#F9F9F9"><!-- E-mail Container Section Open // -->              
              <table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;">
                <tr>
                  <td class="containerPadding" align="center" valign="top"><!-- Space Open -->                    
                    <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
                      <tr>
                        <td align="center" valign="middle" height="10" style="font-size:10px;line-height:10px;">&nbsp;</td>
                      </tr>
                    </table>                    
                    <!-- Space Close --> 
                    <!-- Table Container 1 Column Open // -->                    
                    <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%; max-width:100%;">
                      <tr>
                        <td align="center" valign="top"><table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%; max-width:100%;">
                            <tr>
                              <td class="topMsg centerText" align="right" valign="middle" style="font-family:'Montserrat',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:10px;line-height:18px;font-weight:400;letter-spacing:0px;padding:0;padding-right:20px"><a editable="true" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" style="color:#939393; text-decoration:underline;">View In Browser→</a></td>
                            </tr>
                          </table></td>
                      </tr>
                    </table>                    
                    <!-- Table Container 1 Column Close // --> 
                    <!-- Space Open -->                    
                    <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
                      <tr>
                        <td align="center" valign="middle" height="10" style="font-size:10px;line-height:10px;">&nbsp;</td>
                      </tr>
                    </table>                    
                    <!-- Space Close --></td>
                </tr>
              </table>              
              <!-- E-mail Container Section Close // --></td>
          </tr>
        </table>        
        <!-- Bg Color Close // --></td>
    </tr>
  </table>
</module>
<!-- Do Even More Section Close //--> 
<!-- Header  Section Open // -->
<module label="Header With Left Menu Section">
  <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
    <tr>
      <td class="bodyBgColor" align="center" valign="top" bgcolor="#F9F9F9"><!-- Bg Color Open // -->        
        <table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;">
          <tr>
            <td  class="whiteBgColor" align="center" valign="top" bgcolor="#FFFFFF"><!-- E-mail Container Section Open // -->              
              <table class="row" width="600" align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;max-width:600px;">
                <tr>
                  <td class="containerPadding" align="center" valign="top"><!-- Space Open -->                    
                    <table>
                      <tr>
                        <td><table align="center" cellpadding="0" cellspacing="0" data-editable="image" data-mobile-width="1" style="max-width: 100% ! important;" width="100%">
                            <tr>
                              <td align="left" class="tdBlock" style="margin: 0px; padding: 0px 0 0 0; display: inline-block; background-color: rgb(255, 255, 255);" valign="top"><a href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" style="text-decoration:none;border:0" target="_blank"> <img alt="<?php echo $responses[0]['theme']; ?>" src="<?php echo 'http://' . $_SERVER['HTTP_HOST']; ?>/email-templates/images/<?php echo $responses[0]['header_img']; ?>?<?php echo $t; ?>" style="border-width: 0px; border-style: none; border-color: transparent; display: block; width: 100%; max-width: 100% !important;" width="600" /> </a></td>
                            </tr>
                          </table></td>
                      </tr>                     
                    </table>
                    <!-- Space Close --></td>
                </tr>
              </table>              
              <!-- E-mail Container Section Close // --></td>
          </tr>
        </table>        
        <!-- Bg Color Close // --></td>
    </tr>
  </table>
</module>
<!-- Header Section Close // --> 
<!-- Our Achievement With Image Section Open // -->
<module label="Our Achievement With Image Section">
  <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
    <tr>
      <td class="bodyBgColor" align="center" valign="top" bgcolor="#F9F9F9"><!-- Bg Color Open // -->
        
        <table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;">
          <tr>
            <td class="whiteBgColor" align="center" valign="top" bgcolor="#FFFFFF"><!-- Hero Image 1 Outlook // --> 
              <!--[if (gte mso 9)|(IE)]>
              <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:700px;height:140px;">
              <v:fill type="frame" src="images/our-achievment.jpg" color="#000000"></v:fill>
              <v:textbox style="v-text-anchor:middle;" inset="0,0,0,0">
              <![endif]-->              
              <table class="row" border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
                <tr>
                  <td class="blackBgColor" align="center" valign="top" bgcolor="#f2f2f2"><!-- E-mail Container Section Open // -->                    
                    <table class="row" width="600" align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;max-width:600px;">
                      <tr>
                        <td class="containerPadding" align="center" valign="top"><!-- Space Open -->                          
                          <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
                            <tr>
                              <td align="center" valign="middle" height="15" style="font-size:15px;line-height:15px;">&nbsp;</td>
                            </tr>
                          </table>                          
                          <!-- Space Close --> 
                          <!-- Table Container 2 Column Open // -->                          
                          <table class="row" width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="width:600px;max-width:600px;">
                            <tr>
                              <td align="center" valign="middle" style="font-size:0;padding:0"><!--[if (gte mso 9)|(IE)]><table border="0" cellpadding="0" cellspacing="0"><tr><td valign="middle"><![endif]-->                                
                                <div class="row" style="display:inline-block;max-width:30px;vertical-align:top;width:100%"> 
                                  <!-- Gap Section Open // -->
                                  <table class="row" width="30" border="0" cellpadding="0" cellspacing="0" align="left" style="width:<?php echo $responses[0]['icon_width']; ?>px;max-width:357px;">
                                    <tr>
                                      <td align="center" valign="middle" height="30" width="250" style="font-size:30px;line-height:30px;"><img data-emoji="🏖" alt="🏖" aria-label="🏖" src="https://fonts.gstatic.com/s/e/notoemoji/14.0/1f3d6/32.png" loading="lazy" style="display:block;border:0;width:100%;max-width:30px;"></td>
                                    </tr>
                                  </table>
                                </div>                                
                                <!--[if (gte mso 9)|(IE)]></td><td valign="middle"><![endif]-->                                
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
                                <div class="row" style="display:inline-block;max-width:570px;vertical-align:top;width:100%">                                   
                                  <!-- Clint Image Open // -->
                                  <table class="row" border="0" width="570" align="left" cellpadding="0" cellspacing="0" style="width:570px;max-width:570px;">
                                    <tr>
                                      <td class="contTitle centerText" width="450" align="center" valign="middle" style="font-family:'Montserrat',Arial,Helvetica,sans-serif;color:#222;font-size:16px;line-height:26px;font-weight:700;letter-spacing:0px;padding:0;padding-bottom:5px;"><multi>
                                          <p> <?php echo $responses[0]['theme_heading']; ?></p>
                                        </multi></td>
                                    </tr>
                                  </table>
                                </div>                                
                                <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td>
                            </tr>
                          </table>                          
                          <!-- Table Container 2 Column Close // --> 
                          <!-- Space Open -->                          
                          <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
                            <tr>
                              <td align="center" valign="middle" height="15" style="font-size:15px;line-height:15px;">&nbsp;</td>
                            </tr>
                          </table>                          
                          <!-- Space Close --></td>
                      </tr>
                    </table>                    
                    <!-- E-mail Container Section Close // --></td>
                </tr>
              </table>              
              <!--[if (gte mso 9)|(IE)]></v:textbox></v:rect><![endif]--> 
              <!-- Space Open -->              
              <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
                <tr>
                  <td align="center" valign="middle" height="0" style="font-size:30px;line-height:0px;">&nbsp;</td>
                </tr>
              </table>              
              <!-- Space Close --></td>
          </tr>
        </table>        
        <!-- Bg Color Close // --></td>
    </tr>
  </table>
</module>
<!-- Our Achievement With Image Section Close // -->
<?php
$query2 = "SELECT * FROM tzoffers as se INNER JOIN themes as th ";
$query2 .= "on th.theme_id = se.theme_id WHERE se.theme_id = '$theme_id' ";
$query2 .= "and se.senddate = '$date' ORDER BY price ASC";
$data = mysqli_query( $dbc, $query2 );
?>
<!-- Blog 1 Column Section Open // -->
<module label="Blog 1 Column Section">
  <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
    <tr>
      <td class="bodyBgColor" align="center" valign="top" bgcolor="#F9F9F9"><!-- Bg Color Open // -->        
        <table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;">
          <tr>
            <td class="whiteBgColor" align="center" valign="top" bgcolor="#FFFFFF"><!-- E-mail Container Section Open // -->              
              <table class="row" width="600" align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;max-width:600px;">
                <tr>
                  <td align="center" valign="top"><!-- Space Open -->                    
                    <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
                      <tr>
                        <td align="center" valign="middle" height="00" style="font-size:30px;line-height:00px;">&nbsp;</td>
                      </tr>
                    </table>                    
                    <!-- Space Close -->                    
                    <?php
                    $k = 0;
                    $j = 0;
                    $row1 = mysqli_fetch_assoc( $data );
                    // echo '<pre>';print_r($row1);
                    $img1 = explode( ",", $row1[ 'email_img' ] );
                    $image1 = array();
                    foreach ( $img1 as $key1 => $value1 ) {
                      $imgdir1 = explode( "/", $value1 );
                      $imagedir1 = 'https://email.holidaybuzz.co.uk/email-templates/images/' . $imgdir1[ 0 ] . '';
                      $image1[] = $imgdir1[ 1 ];
                    }
                    ?>                    
                    <!-- Table Container 1 Column Open // -->                    
                    <table class="row" width="700" border="0" cellpadding="0" cellspacing="0" align="center" style="width:700px;max-width:700px;">
                      <tr>
                        <td align="center" valign="middle" style="font-size:0;padding:0"><!-- Image Section -->                          
                          <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
                            <tr>
                              <td class="imgResponsive" align="center" valign="middle" style="padding:0;padding-bottom:20px;"><a href="https://emails.holidaybuzz.co.uk/holidays/<?php echo $row1['url_strings'] ?>/<?php echo $row1['id'] ?>" style="text-decoration:none;border:0"> <img editable="true" src="https://email.holidaybuzz.co.uk/email-templates/images/<?php echo $imgdir1[0]; ?><?php echo $image1[0]; ?>?<?php echo $t;  ?>" alt="Main Hero Image:<?php echo $row1['email_img'] ?>" border="0" width="700" style="display:block;border:0;width:100%;max-width:700px"> </a></td>
                            </tr>
                          </table>                          
                          <!-- Title Section // -->                          
                          <table class="row" width="580" border="0" cellpadding="0" cellspacing="0" align="center" style="width:580px;max-width:580px;">
                            <tr>
                              <td class="contTitle centerText" align="center" valign="middle" style="font-family:'Montserrat',Arial,Helvetica,sans-serif;color:#444;font-size:14px;line-height:26px;font-weight:700;letter-spacing:0px;padding:0;padding-bottom:20px;"><multi>
                                  <p>
                                  <div style="text-align: center;">
                                    <ul style="display: inline-block;zoom:1; *display: inline; text-align: left;">
                                      <p style="font-family:'Montserrat',Arial,Helvetica,sans-serif;color:#939393;font-size:20px;line-height:30px;font-weight:600;letter-spacing:0px;padding:0;padding-bottom:0;"> <?php echo $row1['star']; ?>* <?php echo $row1['hotel_name']; ?><br>
                                      </p>
                                      <p style="font-family:'Montserrat',Arial,Helvetica,sans-serif;color:#898989;font-size:12px;line-height:22px;font-weight:600;letter-spacing:0px;padding:0;padding-bottom:20px;"><?php echo strtoupper($row1['hotel_addr']); ?></p>
                                      <h3>Deal Highlights:</h3>
                                      <?php
                                      $highlight = $row1[ 'highlights' ];
                                      $str = [ ',', '–' ];
                                      $rplc = [ '</li><li>', '-' ];
                                      echo '<li>' . str_replace( $str, $rplc, $highlight );
                                      '</li>'
                                      ?>
                                      </li>
                                      <li>Selected Dates: <?php echo strtoupper($row1['selected_dates']); ?></li>
                                    </ul>
                                  </div>
                                  </p>
                                </multi></td>
                            </tr>
                            <tr>
                              <td class="contDescription centerText" align="center" valign="middle" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#222;font-size:14px;line-height:22px;font-weight:600;letter-spacing:0px;padding:0;padding-bottom:30px"><multi>
                                  <p> Call our travel experts to know more about this deal</p>
                                </multi></td>
                            </tr>
                            <tr>
                              <td align="center" valign="middle"><table class="centerFloat" border="0" align="center" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td class="tdBlock" style="display: inline-block; padding: 13px 25px; margin: 0px; border-radius: 7px; background-color: rgb(255, 155, 29); " valign="top" align="center"><a href="tel:<?php echo $row1['phone_num']; ?>" style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; color: rgb(255 255 255); font-size: 20px; text-decoration: none; font-weight: bold;" target="_blank"> <span> TO BOOK CALL US NOW ON </span> <br>
                                      <span style="font-size: 34px; font-family: Helvetica, 'Helvetica Neue', Arial, sans-serif; background-color: inherit; color: rgb(255 255 255);"> <?php echo $row1['phone_num']; ?></span> </a></td>
                                  </tr>
                                </table></td>
                            </tr>
                          </table></td>
                      </tr>
                    </table>                    
                    <!-- Table Container 1 Column Close // --> 
                    <!-- Space Open -->                    
                    <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
                      <tr>
                        <td align="center" valign="middle" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
                      </tr>
                    </table>                    
                    <!-- Space Close --></td>
                </tr>
              </table>              
              <!-- E-mail Container Section Close // --></td>
          </tr>
        </table>        
        <!-- Bg Color Close // --></td>
    </tr>
  </table>
</module>
<!-- Blog 1 Column Section Close // --> 
<!-- Fotter Section Open // -->
<module label="Fotter Section">
  <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
    <tr>
      <td class="bodyBgColor" align="center" valign="top" bgcolor="#F9F9F9"><!-- Bg Color Open // -->
        
        <table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;">
          <tr>
            <td class="blackBgColor" align="center" valign="top" bgcolor="#15257b"><!-- Hero Image 1 Outlook // --> 
              <!--[if (gte mso 9)|(IE)]>
                          <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:700px;height:290px;">
                          <v:fill type="frame" src="images/fotter-img.jpg" color="#000000"></v:fill>
                          <v:textbox style="v-text-anchor:middle;" inset="0,0,0,0">
                          <![endif]-->              
              <table class="row" border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
                <tr>
                  <td class="blackBgColor" align="center" valign="top" bgcolor="#191919"><!-- E-mail Container Section Open // -->
                    
                    <table class="row" width="600" align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;max-width:600px;">
                      <tr>
                        <td class="containerPadding" align="center" valign="top"><!-- Space Open -->
                          
                          <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
                            <tr>
                              <td align="center" valign="middle" height="60" style="font-size:60px;line-height:60px;">&nbsp;</td>
                            </tr>
                          </table>                          
                          <!-- Space Close --> 
                          <!-- Table Container 3 Column Open // -->                          
                          <table class="row" width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="width:600px;max-width:600px;">
                            <tr>
                              <td align="center" valign="top" style="font-size:0;padding:0"><!--[if (gte mso 9)|(IE)]><table border="0" cellpadding="0" cellspacing="0"><tr><td valign="top"><![endif]-->                                
                                <div class="row" style="display:inline-block;max-width:220px;vertical-align:top;width:100%"> 
                                  <!-- Fotter Column 1 Open // -->
                                  <table class="row" border="0" width="220" align="left" cellpadding="0" cellspacing="0" style="width:220px;max-width:220px;">
                                    <tr>
                                      <td align="center" valign="middle"><table class="centerFloat" border="0" align="left" cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td class="contDescription centerText" align="left" valign="middle" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:700;letter-spacing:0px;padding:0;padding-bottom:20px"> TIMINGS </td>
                                          </tr>
                                        </table>                                        
                                        <!-- Text Open // -->                                        
                                        <table class="centerFloat" border="0" align="left" cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td class="contDescription centerText" align="left" valign="middle" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;padding:0;padding-bottom:0px"><div>
                                                <div>Mon - Fri: 7.00am - Midnight</div>
                                              </div>
                                              <div>
                                                <div>Sat : 7.00am - Midnight</div>
                                              </div>
                                              <div>
                                                <div>Sun: 7.00am - Midnight</div>
                                              </div></td>
                                          </tr>
                                        </table></td>
                                    </tr>
                                  </table>
                                </div>                                
                                <!--[if (gte mso 9)|(IE)]></td><td valign="middle"><![endif]-->                                
                                <div class="row" style="display:inline-block;max-width:20px;vertical-align:top;width:100%">                                   
                                  <!-- Gap Section Open // -->
                                  <table class="row" width="20" border="0" cellpadding="0" cellspacing="0" align="left" style="width:20px;max-width:20px;">
                                    <tr>
                                      <td align="center" valign="middle" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
                                    </tr>
                                  </table>
                                </div>                                
                                <!--[if (gte mso 9)|(IE)]></td><td valign="middle"><![endif]-->                                
                                <div class="row" style="display:inline-block;max-width:200px;vertical-align:top;width:100%">                                   
                                  <!-- Fotter Column 2 Open // -->
                                  <table class="row" border="0" width="200" align="left" cellpadding="0" cellspacing="0" style="width:200px;max-width:200px;">
                                    <tr>
                                      <td align="center" valign="middle"><table class="centerFloat" border="0" align="left" cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td class="contDescription centerText" align="left" valign="middle" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:700;letter-spacing:0px;padding:0;padding-bottom:20px"> CONTACT INFO </td>
                                          </tr>
                                        </table>
                                        <table class="centerFloat" border="0" align="left" cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td class="contDescription centerText" align="left" valign="middle" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;"><a data-color="Email" href="mailto:info@holidaybuzz.co.uk" style="color:#FFFFFF;text-decoration:none;">Email: info@holidaybuzz.co.uk</a></td>
                                          </tr>
                                          <tr>
                                            <td class="contDescription centerText" align="left" valign="middle" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;"><a data-color="Phone" href="tel:<?php echo str_replace(" ","", $responses[0]['tel']); ?>" style="color:#FFFFFF;text-decoration:none;">Phone: <?php echo $responses[0]['tel']; ?></a></td>
                                          </tr>
                                        </table></td>
                                    </tr>
                                  </table>
                                </div>                                
                                <!--[if (gte mso 9)|(IE)]></td><td valign="middle"><![endif]-->                                
                                <div class="row" style="display:inline-block;max-width:20px;vertical-align:top;width:100%">                                   
                                  <!-- Gap Section Open // -->
                                  <table class="row" width="20" border="0" cellpadding="0" cellspacing="0" align="left" style="width:20px;max-width:20px;">
                                    <tr>
                                      <td align="center" valign="middle" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
                                    </tr>
                                  </table>
                                </div>                                
                                <!--[if (gte mso 9)|(IE)]></td><td valign="middle"><![endif]-->                                
                                <div class="row" style="display:inline-block;max-width:140px;vertical-align:top;width:100%"> 
                                  <!-- Fotter Column 3 Open // -->
                                  <table class="row" border="0" width="140" align="left" cellpadding="0" cellspacing="0" style="width:140px;max-width:140px;">
                                    <tr>
                                      <td align="center" valign="middle"><table class="centerFloat" border="0" align="left" cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td class="contDescription centerText" align="left" valign="middle" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:700;letter-spacing:0px;padding:0;padding-bottom:20px"> MORE LINKS </td>
                                          </tr>
                                        </table>
                                        <table class="centerFloat" border="0" align="left" cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td class="contDescription centerText" align="left" valign="middle" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;"><a data-color="Footer Link" href="https://holidaybuzz.co.uk/terms.html" style="color:#FFFFFF; text-decoration:none;"> Terms </a></td>
                                          </tr>
                                          <tr>
                                            <td class="contDescription centerText" align="left" valign="middle" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;"><a data-color="Footer Link" href="https://holidaybuzz.co.uk/traveladvice.html" style="color:#FFFFFF;text-decoration:none;">Travel Advice</a></td>
                                          </tr>
                                          <tr>
                                            <td class="contDescription centerText" align="left" valign="middle" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;"><a data-color="Footer Link" href="https://holidaybuzz.co.uk/privacy.html" style="color:#FFFFFF;text-decoration:none;">Privacy &amp; Policies</a></td>
                                          </tr>
                                        </table></td>
                                    </tr>
                                  </table>
                                </div>                                
                                <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td>
                            </tr>
                          </table>                          
                          <!-- Table Container 3 Column Close // --> 
                          <!-- Footer Logo Open // -->                          
                          <table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;">
                            <tr>
                              <td class="whiteBgColor" align="center" valign="top" bgcolor="#191919"><!-- E-mail Container Section Open // -->
                                
                                <table class="row" width="600" align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;max-width:600px;">
                                  <tr>
                                    <td class="containerPadding" align="center" valign="top"><!-- Space Open -->
                                      
                                      <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
                                        <tr>
                                          <td align="center" valign="middle" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
                                        </tr>
                                      </table>                                      
                                      <!-- Space Close --> 
                                      <!-- Table Container 1 Column Open // -->                                      
                                      <table class="row" width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="width:600px;max-width:600px;">
                                        <tr>
                                          <td align="center" valign="middle" style="font-size:0;padding:0"><!-- Logo and Link Section // -->                       
                                            <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
                                              <tr bgcolor="#FFFFFF">
                                                <td align="center" class="logo" style="padding:0;padding-bottom:10px;padding-top:10px;line-height:22px;" valign="middle"><a href="https://holidaybuzz.co.uk" style="text-decoration:none;border:0"> <img src="https://email.holidaybuzz.co.uk/email-templates/images/logo-footer.png?<?php echo $t;  ?>" alt="#" border="0" width="125" style="display:block;border:0;width:125px;margin-left: 29px;"> </a></td>
                                                <td align="center" class="logo" style="padding:0;padding-bottom:10px;padding-top:10px;" valign="middle"><a href="https://holidaybuzz.co.uk/financial-protection.aspx" style="text-decoration:none;border:0"><img alt="#" border="0" data-crop="false"                                                                                       editable="true" src="https://email.holidaybuzz.co.uk/email-templates/images/footer-atol.jpg?<?php echo $t;  ?>" style="display:block;border:0;width:60px;margin-right: -20px;" width="60"> </a></td>
                                                <td align="center" class="logo" style="padding:0;padding-bottom:10px;padding-top:10px;" valign="middle"><a href="https://holidaybuzz.co.uk/financial-protection.aspx" style="text-decoration:none;border:0"><img alt="#" border="0" data-crop="false"                                                                                       editable="true" src="https://email.holidaybuzz.co.uk/email-templates/images/pts.jpg?<?php echo $t;  ?>" style="display:block;border:0;width:60px;" width="60"> </a></td>
                                              </tr>
                                            </table></td>
                                        </tr>
                                      </table>                                      
                                      <!-- Table Container 1 Column Close // --></td>
                                  </tr>
                                </table>                                
                                <!-- E-mail Container Section Close // --></td>
                            </tr>
                          </table>                          
                          <!-- Footer Logo Close // --> 
                          <!-- Space Open -->                          
                          <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
                            <tr>
                              <td align="center" valign="middle" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
                            </tr>
                          </table>                          
                          <!-- Space Close --> 
                          <!-- Space Open -->                          
                          <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
                            <tr>
                              <td align="center" valign="middle" height="10" style="font-size:10px;line-height:10px;">&nbsp;</td>
                            </tr>
                          </table>                          
                          <!-- Space Close --> 
                          <!-- Table Container 3 Column Open // -->                          
                          <table class="row" width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="width:600px;max-width:600px;">
                            <tr>
                              <td align="center" valign="top" style="font-size:0;padding:0"><!--[if (gte mso 9)|(IE)]><table border="0" cellpadding="0" cellspacing="0"><tr><td valign="top"><![endif]-->                                
                                <div class="row" style="display:inline-block;max-width:290px;vertical-align:top;width:100%"> 
                                  <!-- Fotter Column 1 Open // -->
                                  <table class="row" border="0" width="290" align="left" cellpadding="0" cellspacing="0" style="width:290px;max-width:290px;">
                                    <tr>
                                      <td align="center" valign="middle"><!-- Text Open // -->                                        
                                        <table class="centerFloat" border="0" align="left" cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td class="contDescription centerText" align="left" valign="middle" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;">&copy; 2022 Superescapes. All Rights Reserved </td>
                                          </tr>
                                        </table></td>
                                    </tr>
                                  </table>
                                </div>                                
                                <!--[if (gte mso 9)|(IE)]></td><td valign="top"><![endif]-->                                
                                <div class="row" style="display:inline-block;max-width:20px;vertical-align:top;width:100%"> 
                                  <!-- Gap Section Open // -->
                                  <table class="row" width="20" border="0" cellpadding="0" cellspacing="0" align="left" style="width:20px;max-width:20px;">
                                    <tr>
                                      <td align="center" valign="middle" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
                                    </tr>
                                  </table>
                                </div>                                
                                <!--[if (gte mso 9)|(IE)]></td><td valign="top"><![endif]-->                                
                                <div class="row" style="display:inline-block;max-width:290px;vertical-align:top;width:100%"> 
                                  <!-- Fotter Column 2 Open // -->
                                  <table class="row" border="0" width="290" align="left" cellpadding="0" cellspacing="0" style="width:290px;max-width:290px;">
                                    <tr>
                                      <td align="center" valign="middle"><!-- Text Open // -->
                                        
                                        <table class="centerFloat" border="0" align="right" cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td class="contDescription centerText" align="left" valign="middle" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;"><unsubscribe><a href="<%unsubscribe_link_text%>" target="_blank" style="color: #FFFFFF;">Unsubscribe</a></unsubscribe></td>
                                          </tr>
                                        </table></td>
                                    </tr>
                                  </table>
                                </div>                                
                                <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td>
                            </tr>
                          </table>                          
                          <!-- Table Container 3 Column Close // --> 
                          <!-- Space Open -->
                          
                          <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
                            <tr>
                              <td align="center" valign="middle" height="60" style="font-size:60px;line-height:60px;">&nbsp;</td>
                            </tr>
                          </table>                          
                          <!-- Space Close --></td>
                      </tr>
                    </table>                    
                    <!-- E-mail Container Section Close // --></td>
                </tr>
              </table></td>
          </tr>
        </table>        
        <!-- Bg Color Close // --></td>
    </tr>
  </table>
</module>
<!-- Fotter Section Close // -->
</body>
</html>