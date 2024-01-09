<?php
require('dashboarddb.php');
?>

<html xmlns="http://w3.org/1999/xhtml">

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

    p,
    a,
    li,
    td,
    blockquote {
      -moz-mso-line-height-rule: exactly;
    }

    p,
    a,
    li,
    td,
    body,
    table,
    blockquote {
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

    .ExternalClass,
    .ExternalClass div,
    .ExternalClass font,
    .ExternalClass p,
    .ExternalClass span,
    .ExternalClass td,
    img {
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

    u+#body a {
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

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
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

    img,
    a img {
      border: 0;
      height: auto;
      outline: none;
      text-decoration: none !important;
    }

    body,
    #bodyTable,
    #bodyCell {
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
        display: none !important;
      }

      table.mobilePadding {
        margin: 15px 0 !important;
      }

      table.row,
      div.row {
        width: 100% !important;
        max-width: 100% !important;
      }

      table.centerFloat,
      td.centerFloat {
        float: none !important;
      }

      td.menuContainer {
        text-align: center !important;
      }

      td.autoHeight {
        height: auto !important;
      }

      td.height200 {
        height: 200px !important;
      }

      td.borderRounded {
        border-radius: 6px !important;
      }

      td.borderNone {
        border: none !important;
      }

      td.imgResponsive img {
        width: 100% !important;
        max-width: 100% !important;
        height: auto !important;
        margin: auto;
      }

      td.centerText {
        text-align: center !important;
      }

      td.containerPadding {
        width: 100% !important;
        padding-left: 15px !important;
        padding-right: 15px !important;
      }

      td.spaceControl {
        height: 15px !important;
        font-size: 15px !important;
        line-height: 15px !important;
      }
    }
  </style>
  <script>
function myFunction() {
  var content = document.documentElement.innerHTML;
  download(content, "<?php echo $fileName?>", "html")
  
}
function download(content, fileName, fileType) {
  var link = document.getElementById("donwload-link");
  var file = new Blob([content], {type: "txt"});
  var donwloadFile = fileName + "." + fileType;
  link.href = URL.createObjectURL(file);
  link.download = donwloadFile
}

</script>
  <title><?php echo $subjectLine ?> | <?php echo $dateFelds[0]."-".$dateFelds[1]."-".$dateFelds[2]; ?></title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div
    style="display:none;font-size:1px;color:#FFFFFF;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;">
    Includes return flights &amp; hand baggage* | All prices exclude baggage and transfers | Atol Protected... </div>
  <!--<table align="center" border="0" cellpadding="0" cellspacing="0" data-module="Hero Image Button Text Section1" style="width:100%;max-width:100%;" width="100%">
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
  <table align="center" border="0" cellpadding="0" cellspacing="0" data-module="Hero Image Button Text Section1"
    style="width:100%;max-width:100%;" width="100%">
    <tbody>
      <tr>
        <td align="center" bgcolor="#f5f5f5" class="bodyBgColor" data-bgcolor="" valign="top">
          <table align="center" border="0" cellpadding="0" cellspacing="0" class="row"
            style="width:700px;max-width:700px;" width="700">
            <tbody>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="whiteBgColor" data-bgcolor="Inner Background Color"
                  valign="top">
                  <table>
                    <tbody>
                      <tr>
                        <td>
                          <table align="center" cellpadding="0" cellspacing="0" data-editable="image"
                            data-mobile-width="1" style="max-width: 100% ! important;" width="100%">
                            <tbody>
                              <tr>
                                <td align="left" class="tdBlock"
                                  style="margin: 0px; padding: 10px 0 0 0; display: inline-block; background-color: rgb(255, 255, 255);"
                                  valign="top"><a href="https://bestonlineholidays.co.uk"
                                    style="text-decoration:none;border:0" target="_blank"> <img alt="Summer 2023"
                                      src="https://www.bestonlineholidays.co.uk/sendout/img/header.png?20230529"
                                      style="border-width: 0px; border-style: none; border-color: transparent; display: block; width: 100%; max-width: 100% !important;"
                                      width="600" /> </a></td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <table>
                    <tbody>
                      <tr>
                        <td>
                          <table align="center" cellpadding="0" cellspacing="0" data-editable="image"
                            data-mobile-width="1" style="max-width: 100% ! important;" width="100%">
                            <tbody>
                              <tr>
                                <td align="left" class="tdBlock"
                                  style="margin: 0px; padding: 0px; display: inline-block;" valign="top"><img
                                    alt="Deal of the Day 2023" data-createnew="true"
                                    data-origsrc="https://www.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png?20230529"
                                    data-src="https://www.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png|600|4|600|20|0|0|1"
                                    src="https://www.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png?20230529"
                                    style="border-width: 0px; border-style: none; border-color: transparent; display: block; width: 100%; max-width: 100% ! important;"
                                    width="600" /></td>
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
  </table>
  <table align="center" border="0" cellpadding="0" cellspacing="0" data-module="Hero Image Button Text Section1"
    style="width:100%;max-width:100%;" width="100%">
    <tbody>
      <tr>
        <td align="center" bgcolor="#f5f5f5" class="bodyBgColor" data-bgcolor="" valign="top">
          <table align="center" border="0" cellpadding="0" cellspacing="0" class="row"
            style="width:700px;max-width:700px;" width="700">
            <tbody>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="whiteBgColor" data-bgcolor="Inner Background Color"
                  valign="top">
                  <table>
                    <tbody>
                      <tr>
                        <td>
                          <table align="center" cellpadding="0" cellspacing="0" data-editable="image"
                            data-mobile-width="1" style="max-width: 100% ! important;" width="100%">
                            <tbody>
                              <tr>
                                <td align="left" class="tdBlock"
                                  style="margin: 0px; padding: 10px 0 0 0; display: inline-block; background-color: rgb(245, 249, 248);"
                                  valign="top"><a
                                    href="<?php echo $pageUrl;?>?src=email"
                                    target="_blank"> <img alt="<?php echo $dealTitle; ?>"
                                      src="https://email.bestonlineholidays.co.uk/sendout/img/<?php echo $imageUrl;?>.jpg?<?php echo rand();?>"
                                      style="border-width: 0px; border-style: none; border-color: transparent; display: block; width: 100%; max-width: 100% ! important;"
                                      width="700" /> </a></td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <table>
                    <tbody>
                      <tr>
                        <td>
                          <table align="center" cellpadding="0" cellspacing="0" data-editable="image"
                            data-mobile-width="1" style="max-width: 100% ! important;" width="100%">
                            <tbody>
                              <tr>
                                <td align="left" class="tdBlock"
                                  style="margin: 0px; padding: 0px; display: inline-block;" valign="top"><img
                                    alt="2023-01-25" data-createnew="true"
                                    data-origsrc="https://www.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png?20230529"
                                    data-src="https://www.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png|600|4|600|20|0|0|1"
                                    src="https://www.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png?20230529"
                                    style="border-width: 0px; border-style: none; border-color: transparent; display: block; width: 100%; max-width: 100% ! important;"
                                    width="600" /></td>
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
  </table>
  <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;" width="100%">
    <tbody>
      <tr>
        <td align="center" bgcolor="#F9F9F9" class="bodyBgColor" valign="top"><!-- Bg Color Open // -->

          <table align="center" border="0" cellpadding="0" cellspacing="0" class="row"
            style="width:700px;max-width:700px;" width="700">
            <tbody>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="whiteBgColor" valign="top">
                  <!-- E-mail Container Section Open // -->

                  <table align="center" border="0" cellpadding="0" cellspacing="0" class="row"
                    style="width:600px;max-width:600px;" width="600">
                    <tbody>
                      <tr>
                        <td align="center" class="containerPadding" valign="top"><!-- Space Open -->

                          <table align="center" border="0" cellpadding="0" cellspacing="0"
                            style="width:100%;max-width:100%;" width="100%">
                            <tbody>
                              <tr>
                                <td align="center" height="30" style="font-size:30px;line-height:30px;" valign="middle">
                                  &nbsp;</td>
                              </tr>
                            </tbody>
                          </table>

                          <!-- Space Close -->
                          <!-- Table Container 1 Column Open // -->

                          <table align="center" border="0" cellpadding="0" cellspacing="0" class="row"
                            style="width:600px;max-width:600px;" width="600">
                            <tbody>
                              <tr>
                                <td align="center" style="font-size:0;padding:0" valign="middle">
                                  <!-- Title Section // -->

                                  <table align="center" border="0" cellpadding="0" cellspacing="0" class="row"
                                    style="width:600px;max-width:600px;" width="600">
                                    <tbody>
                                      <tr style="text-align:center;">
                                        <a href="tel:02038831740" target="_blank"><img
                                            style="display: block;border: 0;width: 100%;max-width: 600px;"
                                            src="https://email.bestonlineholidays.co.uk/sendout/img/cta.png?20230529"
                                            alt="0203 883 1740 Phone Number Image"></a>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>

                          <!-- Table Container 1 Column Close // -->
                          <!-- Space Open -->

                          <table align="center" border="0" cellpadding="0" cellspacing="0"
                            style="width:100%;max-width:100%;" width="100%">
                            <tbody>
                              <tr>
                                <td align="center" height="30" style="font-size:30px;line-height:30px;" valign="middle">
                                  &nbsp;</td>
                              </tr>
                            </tbody>
                          </table>

                          <!-- Space Close -->
                        </td>
                      </tr>
                    </tbody>
                  </table>

                  <!-- E-mail Container Section Close // -->
                </td>
              </tr>
            </tbody>
          </table>

          <!-- Bg Color Close // -->
        </td>
      </tr>
    </tbody>
  </table>
  <table align="center" border="0" cellpadding="0" cellspacing="0" data-module="Hero Image Button Text Section1"
    style="width:100%;max-width:100%;" width="100%">
    <tbody>
      <tr>
        <td align="center" bgcolor="#f5f5f5" class="bodyBgColor" data-bgcolor="" valign="top">
          <table align="center" border="0" cellpadding="0" cellspacing="0" class="row"
            style="width:700px;max-width:700px;" width="700">
            <tbody>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="whiteBgColor" data-bgcolor="Inner Background Color"
                  valign="top"><!--[if (gte mso 9)|(IE)]>
                             
    <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:700px;height:510px;">
                                
    <v:fill type="frame" src="https://email.superescapes.co.uk/3RD/img/hero-promotion-img.jpg" color="#000000">
    
    </v:fill>
                                
    <v:textbox style="v-text-anchor:middle;" inset="0,0,0,0">
                                   
    <![endif]-->

                  <table>
                    <tbody>
                      <tr>
                        <td>
                          <table align="center" cellpadding="0" cellspacing="0" data-editable="image"
                            data-mobile-width="1" style="max-width: 100% ! important;" width="100%">
                            <tbody>
                              <tr>
                                <td align="left" class="tdBlock"
                                  style="margin: 0px; padding: 10px 0 0 0; display: inline-block; background-color: rgb(245, 249, 248);"
                                  valign="top"><a href="https://bestonlineholidays.co.uk" target="_blank"> <img
                                      data-createnew="true"
                                      data-origsrc="https://www.bestonlineholidays.co.uk/sendout/img/footer_img2.png"
                                      data-src="https://www.bestonlineholidays.co.uk/sendout/img/footer_img2.png?20230529"
                                      src="https://www.bestonlineholidays.co.uk/sendout/img/footer_img2.png"
                                      style="border-width: 0px; border-style: none; border-color: transparent; display: block; width: 100%; max-width: 100% ! important;"
                                      width="700" /> </a></td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>

                  <!--[if (gte mso 9)|(IE)]>
                                
    </v:textbox>
                             
    </v:rect>
                             
    <![endif]-->
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
  <table align="center" border="0" cellpadding="0" cellspacing="0" data-module="Add Banner Section3"
    data-thumb="thumbnails/b-2.jpg" style="width:100%;max-width:100%;" width="100%">
    <tbody>
      <tr>
        <td align="center" bgcolor="#F5F5F5" class="bodyBgColor" data-bgcolor="Outer Background Color" valign="top">
          <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;"
            width="100%">
            <tbody>
              <tr>
                <td align="center" bgcolor="#F9F9F9" class="bodyBgColor" valign="top">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" class="row"
                    style="width:700px;max-width:700px;" width="700">
                    <tbody>
                      <tr>
                        <td align="center" bgcolor="#e19c41" class="OrangeBgColor" valign="top">
                          <table align="center" border="0" cellpadding="0" cellspacing="0" class="row"
                            style="width:100%;max-width:100%;" width="100%">
                            <tbody>
                              <tr>
                                <td align="center"
                                  background="https://www.bestonlineholidays.co.uk/sendout/img/email_bg-img.jpg"
                                  class="bg-image" style="background-size:cover;background-position:center;"
                                  valign="top">
                                  <table align="center" border="0" cellpadding="0" cellspacing="0" class="row"
                                    style="width:600px;max-width:600px;" width="600">
                                    <tbody>
                                      <tr>
                                        <td align="center" class="containerPadding" valign="top">
                                          <table align="center" border="0" cellpadding="0" cellspacing="0"
                                            style="width:100%;max-width:100%;" width="100%">
                                            <tbody>
                                              <tr>
                                                <td align="center" height="30" style="font-size:60px;line-height:30px;"
                                                  valign="middle">&nbsp;</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                          <table align="center" border="0" cellpadding="0" cellspacing="0" class="row"
                                            style="width:600px;max-width:600px;" width="600">
                                            <tbody>
                                              <tr>
                                                <td align="center" style="font-size:0;padding:0" valign="top">
                                                  <div class="row"
                                                    style="display:inline-block;max-width:220px;vertical-align:top;width:100%">
                                                    <table align="center" border="0" cellpadding="0" cellspacing="0"
                                                      class="row" style="width:220px;max-width:220px;" width="220">
                                                      <tbody>
                                                        <tr>
                                                          <td align="center" valign="middle">
                                                            <table align="center" border="0" cellpadding="0"
                                                              cellspacing="0" class="centerFloat">
                                                              <tbody>
                                                                <tr>
                                                                  <td align="center" class="logo"
                                                                    style="padding:0;padding-bottom:20px;"
                                                                    valign="middle"><a
                                                                      href="http://bestonlineholidays.co.uk"
                                                                      style="text-decoration:none;border:0"> <img
                                                                        alt="#" border="0" data-crop="false"
                                                                        editable="true"
                                                                        src="https://www.bestonlineholidays.co.uk/sendout/img/logo-light.png?20230529"
                                                                        style="display:block;border:0;width:170px;"
                                                                        width="170" /> </a></td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </td>
                                                        </tr>
                                                        <tr>
                                                          <td>
                                                            <table align="center" border="0" cellpadding="0"
                                                              cellspacing="10" class="row"
                                                              style="width:100%;max-width:100%;" width="100%">
                                                              <tbody>
                                                                <tr bgcolor="#FFFFFF">
                                                                  <td align="center" valign="middle">
                                                                    <table align="center" border="0" cellpadding="0"
                                                                      cellspacing="0" class="centerFloat">
                                                                      <tbody>
                                                                        <tr>
                                                                          <td align="center" class="logo"
                                                                            style="padding:0;padding-bottom:10px;padding-top:10px;"
                                                                            valign="middle"><a
                                                                              href="https://bestonlineholidays.co.uk/financial-protection.aspx"
                                                                              style="text-decoration:none;border:0">
                                                                              <img alt="#" border="0" data-crop="false"
                                                                                editable="true"
                                                                                src="https://www.bestonlineholidays.co.uk/sendout/img/footer-atol.jpg"
                                                                                style="display:block;border:0;width:60px;"
                                                                                width="60" /> </a></td>
                                                                          <td align="center" class="logo"
                                                                            style="padding:0;padding-bottom:10px;padding-top:10px;"
                                                                            valign="middle"><a
                                                                              href="https://bestonlineholidays.co.uk/financial-protection.aspx"
                                                                              style="text-decoration:none;border:0">
                                                                              <img alt="#" border="0" data-crop="false"
                                                                                editable="true"
                                                                                src="https://www.bestonlineholidays.co.uk/sendout/img/tta.jpg"
                                                                                style="display:block;border:0;width:60px;"
                                                                                width="60" /> </a></td>
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
                                                  </div>
                                                  <div class="row"
                                                    style="display:inline-block;max-width:20px;vertical-align:top;width:100%">
                                                    <table align="center" border="0" cellpadding="0" cellspacing="0"
                                                      class="row" style="width:20px;max-width:20px;" width="20">
                                                      <tbody>
                                                        <tr>
                                                          <td align="center" height="30"
                                                            style="font-size:30px;line-height:30px;" valign="middle">
                                                            &nbsp;</td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </div>
                                                  <div class="row"
                                                    style="display:inline-block;max-width:200px;vertical-align:top;width:100%">
                                                    <table align="center" border="0" cellpadding="0" cellspacing="0"
                                                      class="row" style="width:200px;max-width:200px;" width="200">
                                                      <tbody>
                                                        <tr>
                                                          <td align="center" valign="middle">
                                                            <table align="left" border="0" cellpadding="0"
                                                              cellspacing="0" class="centerFloat" width="100%">
                                                              <tbody>
                                                                <tr>
                                                                  <td align="left" class="fotterTitle centerText"
                                                                    data-color="Fotter Title" data-size="Fotter Title"
                                                                    mc:edit="" mc:hideable=""
                                                                    style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:700;letter-spacing:0px;padding:0;padding-bottom:20px"
                                                                    valign="middle">
                                                                    <singleline> CONTACT INFO </singleline>
                                                                  </td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                            <table align="center" border="0" cellpadding="0"
                                                              cellspacing="0" class="centerFloat">
                                                              <tbody>
                                                                <tr>
                                                                  <td align="left" class="fotterDescription centerText"
                                                                    data-color="Fotter Description"
                                                                    data-size="Fotter Description" mc:edit=""
                                                                    mc:hideable=""
                                                                    style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;padding:0;padding-bottom:10px;text-align: left "
                                                                    valign="middle">
                                                                    <singleline> Marshall House, Suite 37/38, <br />
                                                                      124 Middleton Road, Morden SM4 6RW, United Kingdom
                                                                    </singleline>
                                                                  </td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                            <table align="left" border="0" cellpadding="0"
                                                              cellspacing="0" class="leftFloat">
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
                                                                  <td align="left" class="fotterDescription centerText"
                                                                    style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px; "
                                                                    valign="middle"><a editable="true" href="#"
                                                                      style="color:#FFFFFF;text-decoration:none;">
                                                                      <singleline>Phone: 020 3883 1740 </singleline>
                                                                    </a></td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </div>
                                                  <div class="row"
                                                    style="display:inline-block;max-width:20px;vertical-align:top;width:100%">
                                                    <table align="center" border="0" cellpadding="0" cellspacing="0"
                                                      class="row" style="width:20px;max-width:20px;" width="20">
                                                      <tbody>
                                                        <tr>
                                                          <td align="center" height="30"
                                                            style="font-size:30px;line-height:30px;" valign="middle">
                                                            &nbsp;</td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </div>
                                                  <div class="row"
                                                    style="display:inline-block;max-width:140px;vertical-align:top;width:100%">
                                                    <table align="center" border="0" cellpadding="0" cellspacing="0"
                                                      class="row" style="width:140px;max-width:140px;" width="140">
                                                      <tbody>
                                                        <tr>
                                                          <td align="center" valign="middle">
                                                            <table align="left" border="0" cellpadding="0"
                                                              cellspacing="0" class="centerFloat" width="100%">
                                                              <tbody>
                                                                <tr>
                                                                  <td align="left" class="fotterTitle centerText"
                                                                    data-color="Fotter Title" data-size="Fotter Title"
                                                                    mc:edit="" mc:hideable=""
                                                                    style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:700;letter-spacing:0px;padding:0;padding-bottom:20px"
                                                                    valign="middle">
                                                                    <singleline><a
                                                                        href="https://email.bestonlineholidays.co.uk/sendout/<?php echo $fileName?>.html"
                                                                        target="_blank"
                                                                        style="color:inherit;text-decoration: none;">
                                                                        MORE LINKS </a></singleline>
                                                                  </td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                            <table align="center" border="0" cellpadding="0"
                                                              cellspacing="0" class="centerFloat">
                                                              <tbody>
                                                                <tr>
                                                                  <td align="center"
                                                                    class="fotterDescription centerText"
                                                                    data-size="Footer Link" mc:edit="" mc:hideable=""
                                                                    style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;text-align: left"
                                                                    valign="middle"><a data-color="Footer Link"
                                                                      href="https://bestonlineholidays.co.uk/terms.html"
                                                                      style="color:#FFFFFF; text-decoration:none;">
                                                                      <singleline> Terms </singleline>
                                                                    </a></td>
                                                                </tr>
                                                                <tr>
                                                                  <td align="center"
                                                                    class="fotterDescription centerText"
                                                                    data-size="Footer Link" mc:edit="" mc:hideable=""
                                                                    style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;text-align: left"
                                                                    valign="middle"><a data-color="Footer Link"
                                                                      href="https://bestonlineholidays.co.uk/traveladvice.html"
                                                                      style="color:#FFFFFF;text-decoration:none;">
                                                                      <singleline>TravelAdvice </singleline>
                                                                    </a></td>
                                                                </tr>
                                                                <tr>
                                                                  <td align="center"
                                                                    class="fotterDescription centerText"
                                                                    data-size="Footer Link" mc:edit="" mc:hideable=""
                                                                    style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;text-align: left"
                                                                    valign="middle"><a data-color="Footer Link"
                                                                      href="https://bestonlineholidays.co.uk/aboutus.html"
                                                                      style="color:#FFFFFF;text-decoration:none;">
                                                                      <singleline>About Best Online Holidays
                                                                      </singleline>
                                                                    </a></td>
                                                                </tr>
                                                                <tr>
                                                                  <td align="center"
                                                                    class="fotterDescription centerText"
                                                                    data-size="Footer Link" mc:edit="" mc:hideable=""
                                                                    style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;text-align: left"
                                                                    valign="middle"><a data-color="Footer Link"
                                                                      href="https://bestonlineholidays.co.uk/privacy.html"
                                                                      style="color:#FFFFFF;text-decoration:none;">
                                                                      <singleline>Privacy &amp; Policies </singleline>
                                                                    </a></td>
                                                                </tr>
                                                                <tr>
                                                                  <td align="center"
                                                                    class="fotterDescription centerText"
                                                                    data-size="Footer Link" mc:edit="" mc:hideable=""
                                                                    style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;text-align: left"
                                                                    valign="middle"><a data-color="Footer Link"
                                                                      href="https://bestonlineholidays.co.uk/contactus.html"
                                                                      style="color:#FFFFFF;text-decoration:none;">
                                                                      <singleline>Contact Us </singleline>
                                                                    </a></td>
                                                                </tr>
                                                                <tr>
                                                                  <td align="center"
                                                                    class="fotterDescription centerText"
                                                                    data-size="Footer Link" mc:edit="" mc:hideable=""
                                                                    style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;text-align: left;"
                                                                    valign="middle"><a data-color="Footer Link" href="
    
    <%unsubscribe_link_text%>" style="color:#FFFFFF;text-decoration:none;">
                                                                      <singleline>Unsubscribe </singleline>
                                                                    </a></td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </div>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                          <table align="center" border="0" cellpadding="0" cellspacing="0"
                                            style="width:100%;max-width:100%;" width="100%">
                                            <tbody>
                                              <tr>
                                                <td align="center" height="30" style="font-size:30px;line-height:30px;"
                                                  valign="middle">&nbsp;</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                          <table align="center" border="0" cellpadding="0" cellspacing="0"
                                            style="width:100%;max-width:100%;" width="100%">
                                            <tbody>
                                              <tr>
                                                <td align="center" height="10" style="font-size:10px;line-height:10px;"
                                                  valign="middle">&nbsp;</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                          <table align="center" border="0" cellpadding="0" cellspacing="0" class="row"
                                            style="width:600px;max-width:600px;" width="600">
                                            <tbody>
                                              <tr>
                                                <td align="center" style="font-size:0;padding:0" valign="top">
                                                  <div class="row"
                                                    style="display:inline-block;max-width:290px;vertical-align:top;width:100%">
                                                    <table align="center" border="0" cellpadding="0" cellspacing="0"
                                                      class="row" style="width:290px;max-width:290px;" width="290">
                                                      <tbody>
                                                        <tr>
                                                          <td align="center" valign="middle">
                                                            <table align="center" border="0" cellpadding="0"
                                                              cellspacing="0" class="centerFloat">
                                                              <tbody>
                                                                <tr>
                                                                  <td align="left" class="fotterDescription centerText"
                                                                    data-size="Fotter Copyright" mc:edit=""
                                                                    mc:hideable=""
                                                                    style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;"
                                                                    valign="middle">
                                                                    <singleline> &copy; 2024 Superescapes. All Rights
                                                                      Reserved </singleline>
                                                                  </td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </div>
                                                  <div class="row"
                                                    style="display:inline-block;max-width:20px;vertical-align:top;width:100%">
                                                    <table align="center" border="0" cellpadding="0" cellspacing="0"
                                                      class="row" style="width:20px;max-width:20px;" width="20">
                                                      <tbody>
                                                        <tr>
                                                          <td align="center" height="30"
                                                            style="font-size:30px;line-height:30px;" valign="middle">
                                                            &nbsp;</td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </div>
                                                  <div class="row"
                                                    style="display:inline-block;max-width:290px;vertical-align:top;width:100%">
                                                    <table align="center" border="0" cellpadding="0" cellspacing="0"
                                                      class="row" style="width:290px;max-width:290px;" width="290">
                                                      <tbody>
                                                        <tr>
                                                          <td align="center" valign="middle">
                                                            <table align="center" border="0" cellpadding="0"
                                                              cellspacing="0" class="centerFloat">
                                                              <tbody>
                                                                <tr>
                                                                  <td align="left" class="fotterDescription centerText"
                                                                    data-size="Fotter Unsubscribe" mc:edit=""
                                                                    mc:hideable=""
                                                                    style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;"
                                                                    valign="middle">
                                                                    <unsubscribe> <a href="
    
    <%unsubscribe_link_text%>" style="color: #fff; text-decoration:none; " id="donwload-link" onClick="myFunction()">Unsubscribe </a> </unsubscribe>
                                                                  </td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </div>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                          <table align="center" border="0" cellpadding="0" cellspacing="0"
                                            style="width:100%;max-width:100%;" width="100%">
                                            <tbody>
                                              <tr>
                                                <td align="center" height="30" style="font-size:60px;line-height:30px;"
                                                  valign="middle">&nbsp;</td>
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
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
</body>

</html>