
<table border="0" width="101%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
  <tbody>
    <tr>
      <td data-bgcolor="Outer Background Color" class="bodyBgColor" align="center" valign="top" bgcolor="#F5F5F5"><table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;">
          <tbody>
            <tr>
              <td class="whiteBgColor" align="center" valign="top" bgcolor="#FFFFFF"><table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;">
                  <tbody>
                    <tr>
                      <td class="containerPadding" align="center" valign="top"><table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
                          <tbody>
                            <tr>
                              <td align="center" valign="middle" height="50" style="font-size: 50px;line-height: 50px;">&nbsp;</td>
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
      <td align="center" bgcolor="#f5f5f5" class="bodyBgColor" data-bgcolor="" valign="top"><table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:700px;max-width:700px;" width="700">
          <tbody>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="whiteBgColor" data-bgcolor="Inner Background Color" valign="top"><!--[if (gte mso 9)|(IE)]>
                                <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:700px;height:510px;">
                                   <v:fill type="frame" src="https://email.superescapes.co.uk/3RD/img/hero-promotion-img.jpg" color="#000000"></v:fill>
                                   <v:textbox style="v-text-anchor:middle;" inset="0,0,0,0">
                                      <![endif]-->
                
                <table>
                  <tbody>
                    <tr>
                      <td><table align="center" cellpadding="0" cellspacing="0" data-editable="image" data-mobile-width="1" style="max-width: 100% ! important;" width="100%">
                          <tbody>
                            <tr>
                              <?php // Connect to the database 
                              $dbc3 = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
                              $theme_id = $_GET[ 'theme_id' ];
                              $date = $_GET[ 'senddate' ];
                              $t = time();
                              // Retrieve the theme data from MySQL
                              $query3 = "SELECT theme_id, callus, tel FROM themes WHERE theme_id = '$theme_id' ORDER BY theme DESC LIMIT 1";
                              $data3 = mysqli_query( $dbc3, $query3 );
                              while ( $row = mysqli_fetch_array( $data3 ) ) {
                                echo '<td align="left" class="tdBlock" style="margin: 0px; padding: 10px 0 0 0; display: inline-block; background-color: rgb(245, 249, 248);" valign="top">
  <a href="https://bestonlineholidays.co.uk" target="_blank"><img src="https://email.bestonlineholidays.co.uk/sendout/img/' . $row[ 'callus' ] . '" alt="Footer Callcenter Image" width="700" style="border-width: 0px; border-style: none; border-color: transparent; display: block; width: 100%; max-width: 100% ! important;" data-createnew="true" data-origsrc="https://email.bestonlineholidays.co.uk/sendout/img/' . $row[ 'callus' ] . '" data-src="https://email.bestonlineholidays.co.uk/sendout/img/' . $row[ 'callus' ] . '' . $t . '"> </a>
  </td>';

                                ?>
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
                              <td align="left" class="tdBlock" style="margin: 0px; padding: 0px; display: inline-block;" valign="top">&nbsp;</td>
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
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
  <tbody>
    <tr>
      <td data-bgcolor="Outer Background Color" class="bodyBgColor" align="center" valign="top" bgcolor="#F5F5F5"><table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;">
          <tbody>
            <tr>
              <td data-bgcolor="Inner Background Color" class="whiteBgColor" align="center" valign="top" bgcolor="#FFFFFF"><table class="row" width="600" align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;max-width:600px;">
                  <tbody>
                    <tr>
                      <td class="containerPadding" align="center" valign="top"><table class="row" width="700" border="0" cellpadding="0" cellspacing="0" align="center" style="width: 700px;max-width: 700px;">
                          <tbody>
                            <tr>
                              <td align="center" valign="middle" style="font-size:0;padding:0"><!--<table class="row" width="700" border="0" cellpadding="0" cellspacing="0" align="center" style="width: 700px;max-width: 700px;">
  <tbody>
  <tr>
  <td data-size="Section Title" data-color="Section Title" mc:hideable="" mc:edit="" class="sectionTitle centerText" align="center" valign="middle" style="font-family:'Montserrat',Arial,Helvetica,sans-serif;color: #565656;font-size: 15px;line-height: 26px;font-weight: 600;letter-spacing:0px;padding:0;">
  <singleline>
  <p>
  Don't see anything that suits ? Why not search online - Simply <a href="https://bestonlineholidays.co.uk">Click Here Now</a>
  </p>
  </singleline>
  </td>
  </tr>
  </tbody>
  </table>--></td>
                            </tr>
                            <tr>
                              <td align="center" valign="middle" style="padding:0;padding-bottom:0px;"><table border="0" align="center" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td align="center" style="width:80px">&nbsp;</td>
                                    </tr>
                                  </tbody>
                                </table></td>
                            </tr>
                          </tbody>
                        </table></td>
                    </tr>
                  </tbody>
                </table>
                <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
                  <tbody>
                    <tr>
                      <td align="center" valign="middle" height="5" style="font-size:5px;line-height:5px;">&nbsp;</td>
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
      <td align="center" bgcolor="#F5F5F5" class="bodyBgColor" valign="top"><table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:700px;max-width:700px;" width="700">
          <tbody>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="whiteBgColor" valign="top"><table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:700;max-width:700;" width="700">
                  <tbody>
                    <tr>
                      <td align="center" valign="top"><table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:100%;max-width:100%;" width="100%">
                          <tbody>
                            <tr>
                              <td align="center" class="imgResponsive" valign="middle"><a href="http://bestonlineholidays.co.uk/" style="text-decoration:none;border:0"><img alt="thin shadow image" border="0" editable="true" src="https://email.bestonlineholidays.co.uk/sendout/img/bottom-thin-shadow.png?<?php echo $t;  ?>" style="display:block;border:0;width:100%;max-width:700px" width="700"> </a></td>
                            </tr>
                          </tbody>
                        </table></td>
                    </tr>
                  </tbody>
                </table>
                <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;" width="100%">
                  <tbody>
                    <tr>
                      <td align="center" height="15" style="font-size:15px;line-height:15px;" valign="middle">&nbsp;</td>
                    </tr>
                  </tbody>
                </table></td>
            </tr>
          </tbody>
        </table></td>
    </tr>
  </tbody>
</table>
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
  <tbody>
    <tr>
      <td data-bgcolor="Outer Background Color" class="bodyBgColor" align="center" valign="top" bgcolor="#F5F5F5"><table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;">
          <tbody>
            <tr>
              <td data-bgcolor="Inner Background Color" class="whiteBgColor" align="center" valign="top" bgcolor="#FFFFFF"></td>
            </tr>
          </tbody>
        </table></td>
    </tr>
  </tbody>
</table>
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
  <tbody>
    <tr>
      <td data-bgcolor="Outer Background Color" class="bodyBgColor" align="center" valign="top" bgcolor="#F5F5F5"><table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;">
          <tbody>
            <tr>
              <td data-bgcolor="Inner Background Color" class="whiteBgColor" align="center" valign="top" bgcolor="#FFFFFF"></td>
            </tr>
          </tbody>
        </table>
        <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
          <tbody>
            <tr>
              <td data-bgcolor="Outer Background Color" class="bodyBgColor" align="center" valign="top" bgcolor="#F5F5F5"><table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;">
                  <tbody>
                    <tr>
                      <td class="whiteBgColor" align="center" valign="top" bgcolor="#FFFFFF"><table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;">
                          <tbody>
                            <tr>
                              <td class="containerPadding" align="center" valign="top"><table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
                                  <tbody>
                                    <tr>
                                      <td align="center" valign="middle" height="15" style="font-size:15px;line-height:15px;">&nbsp;</td>
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
              <td align="center" bgcolor="#F9F9F9" class="bodyBgColor" valign="top"><table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:700px;max-width:700px;" width="700">
                  <tbody>
                    <tr>
                      <td align="center" bgcolor="#e19c41" class="OrangeBgColor" valign="top"><table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:100%;max-width:100%;" width="100%">
                          <tbody>
                            <tr>
                              <td align="center" background="https://email.bestonlineholidays.co.uk/sendout/img/email_bg-img.jpg" class="bg-image" style="background-size:cover;background-position:center;" valign="top"><table align="center" border="0" cellpadding="0" cellspacing="0" class="row" style="width:600px;max-width:600px;" width="600">
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
                                                                <td align="center" class="logo" style="padding:0;padding-bottom:20px;" valign="middle"><a href="http://bestonlineholidays.co.uk" style="text-decoration:none;border:0"><img alt="#" border="0" data-crop="false" editable="true" src="https://email.bestonlineholidays.co.uk/sendout/img/logo-light.png?1" style="display:block;border:0;width:170px;" width="170"> </a></td>
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
                                                                        <td align="center" class="logo" style="padding:0;padding-bottom:10px;padding-top:10px;" valign="middle"><a href="https://bestonlineholidays.co.uk/financial-protection.aspx" style="text-decoration:none;border:0"><img alt="#" border="0" data-crop="false" editable="true" src="https://email.bestonlineholidays.co.uk/sendout/img/footer-atol.jpg" style="display:block;border:0;width:60px;" width="60"> </a></td>
                                                                        <td align="center" class="logo" style="padding:0;padding-bottom:10px;padding-top:10px;" valign="middle"><a href="https://bestonlineholidays.co.uk/financial-protection.aspx" style="text-decoration:none;border:0"><img alt="#" border="0" data-crop="false" editable="true" src="https://email.bestonlineholidays.co.uk/sendout/img/tta.jpg" style="display:block;border:0;width:60px;" width="60"> </a></td>
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
                                                        <td align="center" valign="middle"><table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" class="centerFloat">
                                                            <tbody>
                                                              <tr>
                                                                <td align="left" class="fotterTitle centerText" data-color="Fotter Title" data-size="Fotter Title" mc:edit="" mc:hideable="" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:700;letter-spacing:0px;padding:0;padding-bottom:20px" valign="middle"><singleline> CONTACT INFO</singleline></td>
                                                              </tr>
                                                            </tbody>
                                                          </table>
                                                          <table align="center" border="0" cellpadding="0" cellspacing="0" class="centerFloat">
                                                            <tbody>
                                                              <tr>
                                                                <td align="left" class="fotterDescription centerText" data-color="Fotter Description" data-size="Fotter Description" mc:edit="" mc:hideable="" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;padding:0;padding-bottom:10px;text-align: left " valign="middle"><singleline> Marshall House, Suite 37/38,<br />
                                                                    124 Middleton Road, Morden SM4 6RW, United Kingdom </singleline></td>
                                                              </tr>
                                                            </tbody>
                                                          </table>
                                                          <table align="left" border="0" cellpadding="0" cellspacing="0" class="leftFloat">
                                                            <tbody>
                                                              <!--<tr>
  <td align="left" class="fotterDescription leftText" data-size="Fotter Email" mc:edit="" mc:hideable="" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;text-align: left" valign="left">
  <a data-color="Fotter Email" href="http://email-superescapes.co.uk/re?l=D0I1il339yIf5v64jeIuITk8zl5v9m&amp;s=PLCHDLPECNHFODIO&amp;req=dmc_cid%3D8927" style="color:#FFFFFF;text-decoration:none;">
  <singleline>Email: <span class="__cf_email__" data-cfemail="771e1911183704020712051204141607120459141859021c">[email&nbsp;protected]</span></singleline>
  </a>
  </td>
  </tr>-->
                                                              <tr>
                                                                <td align="left" class="footerd leftText" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;" valign="middle"><a editable="true" href="#" style="color:#FFFFFF;text-decoration:none;"><?php echo' Phone: ' . $row['tel'] . ''; ?>
                                                                  <?php } ?>
                                                                  </a></td>
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
                                                        <td align="center" valign="middle"><table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" class="centerFloat">
                                                            <tbody>
                                                              <tr>
                                                                <td align="left" class="fotterTitle centerText" data-color="Fotter Title" data-size="Fotter Title" mc:edit="" mc:hideable="" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:700;letter-spacing:0px;padding:0;padding-bottom:20px" valign="middle"><singleline> MORE LINKS</singleline></td>
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
                                                                  <singleline>TravelAdvice</singleline>
                                                                  </a></td>
                                                              </tr>
                                                              <tr>
                                                                <td align="center" class="fotterDescription centerText" data-size="Footer Link" mc:edit="" mc:hideable="" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;text-align: left" valign="middle"><a data-color="Footer Link" href="https://www.bestonlineholidays.co.uk/aboutus.html" style="color:#FFFFFF;text-decoration:none;">
                                                                  <singleline>About Best Online Holidays</singleline>
                                                                  </a></td>
                                                              </tr>
                                                              <tr>
                                                                <td align="center" class="fotterDescription centerText" data-size="Footer Link" mc:edit="" mc:hideable="" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;text-align: left" valign="middle"><a data-color="Footer Link" href="https://www.bestonlineholidays.co.uk/privacy.html" style="color:#FFFFFF;text-decoration:none;">
                                                                  <singleline>Privacy &amp; Policies</singleline>
                                                                  </a></td>
                                                              </tr>
                                                              <tr>
                                                                <td align="center" class="fotterDescription centerText" data-size="Footer Link" mc:edit="" mc:hideable="" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;text-align: left" valign="middle"><a data-color="Footer Link" href="https://www.bestonlineholidays.co.uk/contactus.html" style="color:#FFFFFF;text-decoration:none;">
                                                                  <singleline>Contact Us</singleline>
                                                                  </a></td>
                                                              </tr>
                                                              <tr>
                                                                <td align="center" class="fotterDescription centerText" data-size="Footer Link" mc:edit="" mc:hideable="" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;text-align: left;" valign="middle"><a data-color="Footer Link" href="<%unsubscribe_link_text%>" style="color:#FFFFFF;text-decoration:none;">
                                                                  <singleline>Unsubscribe</singleline>
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
                                                                <td align="left" class="fotterDescription centerText" data-size="Fotter Copyright" mc:edit="" mc:hideable="" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;" valign="middle"><singleline> © 2021 Superescapes. All Rights Reserved </singleline></td>
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
                                                                <td align="left" class="fotterDescription centerText" data-size="Fotter Unsubscribe" mc:edit="" mc:hideable="" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;" valign="middle"><unsubscribe><a href="<%unsubscribe_link_text%>" style="color: #fff; text-decoration:none; ">Unsubscribe</a></unsubscribe></td>
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
</body></html>