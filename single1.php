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
  <title>5* ALL INCLUSIVE ANTALYA BEACH ESCAPE | 2022-11-30</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,640,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" />

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
		p {margin:0 !important;padding:0 !important;display:inline-block !important;font-family:inherit !important;}
		img, a img{border:0; height:auto; outline:none;text-decoration:none  !important;}
		body, #bodyTable, #bodyCell {margin:0px !important;padding:0px !important;display:block !important; min-width:100% !important; width:100% !important; -webkit-text-size-adjust:none; -webkit-text-resize:100%;text-resize:100%;}

		.appleLinks a {color: #c2c2c2 !important;text-decoration: none !important;}
		span.preheader {display:none !important; }
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
</head>

<body style="margin-top:0; margin-bottom:0;padding-top:0;padding-bottom:0;width:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;">

<!-- Do Even More Section Open //-->
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
	<tr>
		<td class="bodyBgColor" align="center" valign="top" bgcolor="#F9F9F9">
			<!-- Bg Color Open // -->
			<table class="row" border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
				<tr>
					<td class="greyBgColor" align="center" valign="top" bgcolor="#F9F9F9">
						<!-- E-mail Container Section Open // -->
						<table class="row" border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
							<tr>
								<td class="containerPadding" align="center" valign="top">

									<!-- Space Open -->
									<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
										<tr>
											<td align="center" valign="middle" height="10" style="font-size:10px;line-height:10px;">&nbsp;</td>
										</tr>
									</table>
									<!-- Space Close -->

									<!-- Table Container 1 Column Open // -->
									<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%; max-width:100%;">
										<tr>
											<td align="center" valign="top">
												<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%; max-width:100%;">
													<tr>
														<td class="topMsg centerText" align="center" valign="middle" style="font-family:'Montserrat',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:10px;line-height:18px;font-weight:400;letter-spacing:0px;padding:0;padding-right:20px">
															<p class="disclaimer" style="word-wrap: break-word;word-break: break-word;margin: 0px;font-size: 12px;color: rgb(39, 47, 50);line-height: 19px;text-align: center">
																<font style="word-wrap: break-word;word-break: break-word;font-size: 10px;color: rgb(102, 102, 102)">
																<a target="_blank" href="<%unsubscribe_link_text%>" style="word-wrap: break-word;word-break: break-word;text-decoration: underline;color: rgb(102, 102, 102)">Unsubscribe</a>
																	&nbsp; &nbsp; | &nbsp; 
																	<a target="_blank" href="https://email.holidaybuzz.co.uk/email-templates/Turkey30112022.html" style="word-wrap: break-word;word-break: break-word;text-decoration: underline;color: rgb(102, 102, 102)">View in browser</a> 
																	</font>
																
															</p>
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
									<!-- Table Container 1 Column Close // -->

									<!-- Space Open -->
									<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
										<tr>
											<td align="center" valign="middle" height="10" style="font-size:10px;line-height:10px;">&nbsp;</td>
										</tr>
									</table>
									<!-- Space Close -->

								</td>
							</tr>
						</table>
						<!-- E-mail Container Section Close // -->
					</td>
				</tr>
			</table>
			<!-- Bg Color Close // -->
		</td>
	</tr>
</table>
<!-- Do Even More Section Close //-->

<!-- Header With Left Menu Section Open // -->
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
	<tr>
		<td class="bodyBgColor" align="center" valign="top" bgcolor="#F9F9F9">
			<!-- Bg Color Open // -->
			<table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;">
				<tr>
					<td class="whiteBgColor" align="center" valign="top" bgcolor="#FFFFFF">
						<!-- E-mail Container Section Open // -->
						<table class="row" width="DEALS FOR TOUR" align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%px;max-width:100%px;">
							<tr>
								<td class="containerPadding" align="center" valign="top">

									<!-- Table Container 2 Column Open // -->
									<table class="row" width="100%" border="0" cellpadding="0" cellspacing="0" align="center" style="width:100%px;max-width:100%px;">
										<tr>
											<td align="center" valign="middle" style="font-size:0;padding:0">

												<!--[if (gte mso 9)|(IE)]><table border="0" cellpadding="0" cellspacing="0"><tr><td valign="middle"><![endif]-->

												<div class="row" style="display:inline-block;max-width:100%px;vertical-align:middle;width:100%">

													<!-- Logo and Link // -->
													<table class="row" border="0" width="100%" align="center" cellpadding="0" cellspacing="0"
														style="width:100%px;max-width:100%px;">
														<tr>
															<td class="bodyBgColor" align="center" valign="top" bgcolor="#FFFFFF">
                                                                <table>
																	<tr>
																		<td>
																			<table style="max-width: 100% ! important;" width="100%" cellspacing="0" cellpadding="0"
																				align="center">
																				<tr>
																					<td style="margin: 0px; padding: 0px; display: inline-block;" class="tdBlock"
																						valign="top" align="left">
																						<img src="https://email.holidaybuzz.co.uk/email-templates/images/bottom-thin-shadow.png?img1477660205861"
																							data-src="https://email.holidaybuzz.co.uk/email-templates/images/bottom-thin-shadow.png|640|4|640|20|0|0|1"
																							data-origsrc="https://email.holidaybuzz.co.uk/email-templates/images/bottom-thin-shadow.png?_ga=1.113707653.308031464.1459512055"
																							alt="Thin shadow image"
																							style="border-width: 0px; border-style: none; border-color: transparent; display: block; width: 100%; max-width: 100% ! important;"
																							width="100%" />
																					</td>
																				</tr>
																			</table>
																		</td>
																	</tr>
																</table>
																<table>
																	<tr>
																		<td>
																			<table style="max-width: 100% ! important;" width="100%" cellspacing="0" cellpadding="0"
																				align="center">
																				<tr>
																					<td style="margin: 0px; padding: 0px; display: inline-block; background-color: rgb(255, 255, 255);"
																						class="tdBlock" valign="top" align="left"><a href="https://holidaybuzz.co.uk/"
																							style="text-decoration:none;border:0" target="_blank"><img
																								src="https://email.holidaybuzz.co.uk/email-templates/images/header2.jpg"
																								alt="Header Image"
																								style="display:block;border:0;width:100%;max-width: 640px;"
																								width="640" /></a></td>
																				</tr>
																			</table>
																		</td>
																	</tr>
																</table>
																<!--<table>
																	<tr>
																		<td>
																			<table style="max-width: 100% ! important;" width="100%" cellspacing="0" cellpadding="0"
																				align="center">
																				<tr>
																					<td style="margin: 0px; padding: 0px; display: inline-block;" class="tdBlock"
																						valign="top" align="left">
																						<img src="https://email.holidaybuzz.co.uk/email-templates/images/bottom-thin-shadow.png?img1477660205861"
																							data-src="https://email.holidaybuzz.co.uk/email-templates/images/bottom-thin-shadow.png|640|4|640|20|0|0|1"
																							data-origsrc="https://email.holidaybuzz.co.uk/email-templates/images/bottom-thin-shadow.png?_ga=1.113707653.308031464.1459512055"
																							alt="Thin shadow image"
																							style="border-width: 0px; border-style: none; border-color: transparent; display: block; width: 100%; max-width: 100% ! important;"
																							width="640" />
																					</td>
																				</tr>
																			</table>
																		</td>
																	</tr>
																</table>-->
															</td>
														</tr>
													</table>

												</div>

												<!--[if (gte mso 9)|(IE)]></td><td valign="middle"><![endif]-->

									 
											</td>
										</tr>
									</table>
									<!-- Table Container 2 Column Close // -->

									<!-- Space Open -->
									<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
										<tr>
										   <td align="center" valign="middle" height="15" style="font-size:15px;line-height:15px;">&nbsp;</td>
										</tr>
									</table>
									<!-- Space Close -->

								</td>
							</tr>
						</table>
						<!-- E-mail Container Section Close // -->
					</td>
				</tr>
			</table>
			<!-- Bg Color Close // -->
		</td>
	</tr>
</table>
<!-- Header With Left Menu Section Close // -->

<!-- Tour Card1 Section Open // -->
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
	<tr>
		<td class="bodyBgColor" align="center" valign="top" bgcolor="#F9F9F9">
			<!-- Bg Color Open // -->
			<table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;">
				<tr>
					<td class="whiteBgColor" align="center" valign="top" bgcolor="#FFFFFF">
						<!-- E-mail Container Section Open // -->
						<table class="row" width="640" align="center" border="0" cellpadding="0" cellspacing="0" style="width:640px;max-width:640px;">
							<tr>
								<td class="containerPadding" align="center" valign="top">

									<!-- Space Open -->
									<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
										<tr>
											<td align="center" valign="middle" height="0" style="font-size:0px;line-height:0px;">&nbsp;</td>
										</tr>
									</table>
									<!-- Space Close -->

									<!-- Table Container 1 Column Open // -->
									<table class="row" width="640" border="0" cellpadding="0" cellspacing="0" align="center" style="width:640px;max-width:640px;">
										<tr>
											<td align="center" valign="middle" style="font-size:0;padding:0">

												<!-- Image Section -->
												<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
													<tr>
														<td class="imgResponsive" align="center" valign="middle" style="padding:0;padding-bottom:20px;">
															<a href="https://holidaybuzz.co.uk/special-offer/230183/HB1466/ANTALYA-BEACH-ESCAPE.aspx" style="text-decoration:none;border:0">
																<img src="https://email.holidaybuzz.co.uk/email-templates/images/antalya30112022.jpg" alt="Halkidiki Main Image" border="0" width="640" style="display:block;border:0;width:100%;max-width:640px">
															</a>
														</td> 
													</tr> 	
												</table>
									 
											</td>
										</tr>
									</table>
									<!-- Table Container 1 Column Close // -->

									<!-- Space Open -->
									<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
										<tr>
										   <td align="center" valign="middle" height="0" style="font-size:0px;line-height:0px;">&nbsp;</td>
										</tr>
									</table>
									<!-- Space Close -->

								</td>
							</tr>
						</table>
						<!-- E-mail Container Section Close // -->
					</td>
				</tr>
			</table>
			<!-- Bg Color Close // -->
		</td>
	</tr>
</table>
<!-- Tour Card1 Section Close // -->
	
<!-- Tour Card1 Section Open // -->
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
	<tr>
		<td class="bodyBgColor" align="center" valign="top" bgcolor="#F9F9F9">
			<!-- Bg Color Open // -->
			<table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;">
				<tr>
					<td class="whiteBgColor" align="center" valign="top" bgcolor="#FFFFFF">
						<!-- E-mail Container Section Open // -->
						<table class="row" width="640" align="center" border="0" cellpadding="0" cellspacing="0" style="width:640px;max-width:640px;">
							<tr>
								<td class="containerPadding" align="center" valign="top">

									<!-- Space Open -->
									<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
										<tr>
											<td align="center" valign="middle" height="0" style="font-size:0px;line-height:0px;">&nbsp;</td>
										</tr>
									</table>
									<!-- Space Close -->

									<!-- Table Container 1 Column Open // -->
									<table class="row" width="640" border="0" cellpadding="0" cellspacing="0" align="center" style="width:640px;max-width:640px;">
										<tr>
											<td align="center" valign="middle" style="font-size:0;padding:0">

												<!-- Image Section -->
												<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
													<tr>
														<td class="imgResponsive" align="center" valign="middle" style="padding:0;padding-bottom:10px;">
															<a href="https://holidaybuzz.co.uk/special-offer/230183/HB1466/ANTALYA-BEACH-ESCAPE.aspx" style="text-decoration:none;border:0">
																<img src="https://email.holidaybuzz.co.uk/email-templates/images/singlecalltobook.png?1" alt="call button" border="0" width="640" style="display:block;border:0;width:100%;max-width:640px">
															</a>
														</td> 
													</tr> 	
												</table>
									 
											</td>
										</tr>
									</table>
									<!-- Table Container 1 Column Close // -->

									<!-- Space Open -->
									<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
										<tr>
										   <td align="center" valign="middle" height="0" style="font-size:0px;line-height:0px;">&nbsp;</td>
										</tr>
									</table>
									<!-- Space Close -->

								</td>
							</tr>
						</table>
						<!-- E-mail Container Section Close // -->
					</td>
				</tr>
			</table>
			<!-- Bg Color Close // -->
		</td>
	</tr>
</table>
<!-- Tour Card1 Section Close // -->

<!-- Spacer 30px Section Open //-->
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
	<tr>
		<td class="bodyBgColor" align="center" valign="top" bgcolor="#F9F9F9">
			<!-- Bg Color Open // -->
			<table class="row" border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
				<tr>
					<td class="whiteBgColor" align="center" valign="top" bgcolor="#FFFFFF">
						<!-- E-mail Container Section Open // -->
						<table class="row" width="640" align="center" border="0" cellpadding="0" cellspacing="0" style="width:640px;max-width:640px;">
							<tr>
								<td class="containerPadding" align="center" valign="top">

									<!-- Space Open -->
									<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
										<tr>
											<td align="center" valign="middle" height="0" style="font-size:0px;line-height:0px;">&nbsp;</td>
										</tr>
									</table>
									<!-- Space Close -->

								</td>
							</tr>
						</table>
						<!-- E-mail Container Section Close // -->
					</td>
				</tr>
			</table>
			<!-- Bg Color Close // -->
		</td>
	</tr>
</table>
<!-- Spacer 30px Section Close //-->

<!-- Fotter Section Open // -->
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
	<tr>
		<td class="bodyBgColor" align="center" valign="top" bgcolor="#F9F9F9">
			<!-- Bg Color Open // -->
			<table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0"
				style="width:700px;max-width:700px;">
				<tr>
					<td class="whiteBgColor" align="center" valign="top" bgcolor="#FFFFFF">
						<!-- E-mail Container Section Open // -->
						<table class="row" border="0" width="640" align="center" cellpadding="0" cellspacing="0"
							style="width:640px;max-width:640px;">
							<tr>
								<td align="left" class="element-pad element-bord"
									style="font-family: Arial, sans-serif;padding: 10px;border-width: 0;padding-top: 10px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;font-size: 1px;line-height: 1px">
									<img src="https://i.emlfiles4.com/cmpimg/2/7/9/7/8/1/files/1295310_bevel.png"
										style="max-width: 100%;color: rgb(39, 47, 50);font-size: 14px;line-height: 22px;width: 100%;min-height: auto;display: block"
										class="ee_editable" width="640"></td>
							</tr>
							<tr>
								<td class="blackBgColor" align="center" valign="top" bgcolor="#1d3037">
									<!-- Hero Image 1 Outlook // -->
									<!--[if (gte mso 9)|(IE)]>
											<v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:640px;height:290px;">
											<v:fill type="frame" src="images/fotter-img.jpg" color="#000000"></v:fill>
											<v:textbox style="v-text-anchor:middle;" inset="0,0,0,0">
											<![endif]-->

									<table class="row" border="0" width="100%" align="center" cellpadding="0"
										cellspacing="0" style="width:100%;max-width:100%;">
										<tr>
											<td align="center" valign="top"
												background="https://email.holidaybuzz.co.uk/email-templates/images/fotter-img.jpg"
												style="background-size:cover;background-position:center top;">
												<!-- E-mail Container Section Open // -->

												<table class="row" width="600" align="center" border="0" cellpadding="0"
													cellspacing="0" style="width:600px;max-width:600px;">
													<tr>
														<td class="containerPadding" align="center" valign="top">
															<!-- Space Open -->

															<table border="0" width="100%" align="center"
																cellpadding="0" cellspacing="0"
																style="width:100%;max-width:100%;">
																<tr>
																	<td align="center" valign="middle" height="30"
																		style="font-size:30px;line-height:30px;">&nbsp;
																	</td>
																</tr>
															</table>

															<!-- Space Close -->

															<!-- Table Container 3 Column Open // -->

															<table class="row" width="600" border="0" cellpadding="0"
																cellspacing="0" align="center"
																style="width:600px;max-width:600px;">
																<tr>
																	<td align="center" valign="top"
																		style="font-size:0;padding:0">
																		<!--[if (gte mso 9)|(IE)]><table border="0" cellpadding="0" cellspacing="0"><tr><td valign="top"><![endif]-->

																		<div class="row"
																			style="display:inline-block;max-width:220px;vertical-align:top;width:100%">

																			<!-- Fotter Column 1 Open // -->
																			<table class="row" border="0" width="220"
																				align="left" cellpadding="0"
																				cellspacing="0"
																				style="width:220px;max-width:220px;">
																				<tr>
																					<td align="center" valign="middle">
																						<!-- Logo Open // -->

																						<table class="centerFloat"
																							border="0" align="left"
																							cellpadding="0"
																							cellspacing="0">
																							<tr>
																								<td class="contDescription centerText"
																									align="left"
																									valign="middle"
																									style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:600;letter-spacing:0px;padding:0;padding-bottom:20px">
																									TIMINGS </td>
																							</tr>
																						</table>

																						<!-- Text Open // -->

																						<table class="centerFloat"
																							border="0" align="left"
																							cellpadding="0"
																							cellspacing="0">
																							<tr>
																								<td class="contDescription centerText"
																									align="left"
																									valign="middle"
																									style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;padding:0;padding-bottom:0px">
																									<div>
																										<div>Mon - Fri:
																											7.00am -
																											Midnight
																										</div>
																									</div>
																									<div>
																										<div>Sat :
																											7.00am -
																											Midnight
																										</div>
																									</div>
																									<div>
																										<div>Sun: 7.00am
																											- Midnight
																										</div>
																									</div>
																								</td>
																							</tr>
																						</table>

																						<!-- Social Icons Open // -->
																					</td>
																				</tr>
																			</table>
																		</div>

																		<!--[if (gte mso 9)|(IE)]></td><td valign="middle"><![endif]-->

																		<div class="row"
																			style="display:inline-block;max-width:20px;vertical-align:top;width:100%">

																			<!-- Gap Section Open // -->
																			<table class="row" width="20" border="0"
																				cellpadding="0" cellspacing="0"
																				align="left"
																				style="width:20px;max-width:20px;">
																				<tr>
																					<td align="center" valign="middle"
																						height="30"
																						style="font-size:30px;line-height:30px;">
																						&nbsp;</td>
																				</tr>
																			</table>
																		</div>

																		<!--[if (gte mso 9)|(IE)]></td><td valign="middle"><![endif]-->

																		<div class="row"
																			style="display:inline-block;max-width:200px;vertical-align:top;width:100%">

																			<!-- Fotter Column 2 Open // -->
																			<table class="row" border="0" width="200"
																				align="left" cellpadding="0"
																				cellspacing="0"
																				style="width:200px;max-width:200px;">
																				<tr>
																					<td align="center" valign="middle">
																						<table class="centerFloat"
																							border="0" align="left"
																							cellpadding="0"
																							cellspacing="0">
																							<tr>
																								<td class="contDescription centerText"
																									align="left"
																									valign="middle"
																									style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:640;letter-spacing:0px;padding:0;padding-bottom:20px">
																									<singleline> CONTACT
																										INFO
																									</singleline>
																								</td>
																							</tr>
																						</table>
																						<table class="centerFloat"
																							border="0" align="left"
																							cellpadding="0"
																							cellspacing="0">
																							<tr>
																								<td class="contDescription centerText"
																									align="left"
																									valign="middle"
																									style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;">
																									<a data-color="Email"
																										href="mailto:info@holidaybuzz.co.uk"
																										style="color:#FFFFFF;text-decoration:none;">
																										<singleline>
																											Email:
																											info@holidaybuzz.co.uk
																										</singleline>
																									</a></td>
																							</tr>
																							<tr>
																								<td class="contDescription centerText"
																									align="left"
																									valign="middle"
																									style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;">
																									<a data-color="Phone"
																										href="tel:02038831792"
																										style="color:#FFFFFF;text-decoration:none;">
																										<singleline>
																											Phone: 0203
																											883 1792
																										</singleline>
																									</a></td>
																							</tr>
																						</table>
																					</td>
																				</tr>
																			</table>
																		</div>

																		<!--[if (gte mso 9)|(IE)]></td><td valign="middle"><![endif]-->

																		<div class="row"
																			style="display:inline-block;max-width:20px;vertical-align:top;width:100%">

																			<!-- Gap Section Open // -->
																			<table class="row" width="20" border="0"
																				cellpadding="0" cellspacing="0"
																				align="left"
																				style="width:20px;max-width:20px;">
																				<tr>
																					<td align="center" valign="middle"
																						height="30"
																						style="font-size:30px;line-height:30px;">
																						&nbsp;</td>
																				</tr>
																			</table>
																		</div>

																		<!--[if (gte mso 9)|(IE)]></td><td valign="middle"><![endif]-->

																		<div class="row"
																			style="display:inline-block;max-width:140px;vertical-align:top;width:100%">

																			<!-- Fotter Column 3 Open // -->
																			<table class="row" border="0" width="140"
																				align="left" cellpadding="0"
																				cellspacing="0"
																				style="width:140px;max-width:140px;">
																				<tr>
																					<td align="center" valign="middle">
																						<table class="centerFloat"
																							border="0" align="left"
																							cellpadding="0"
																							cellspacing="0">
																							<tr>
																								<td class="contDescription centerText"
																									align="left"
																									valign="middle"
																									style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:640;letter-spacing:0px;padding:0;padding-bottom:20px">
																									<singleline> MORE
																										LINKS
																									</singleline>
																								</td>
																							</tr>
																						</table>
																						<table class="centerFloat"
																							border="0" align="left"
																							cellpadding="0"
																							cellspacing="0">
																							<tr>
																								<td class="contDescription centerText"
																									align="left"
																									valign="middle"
																									style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;">
																									<a data-color="Footer Link"
																										href="https://holidaybuzz.co.uk/terms.html"
																										style="color:#FFFFFF; text-decoration:none;">
																										Terms </a></td>
																							</tr>
																							<tr>
																								<td class="contDescription centerText"
																									align="left"
																									valign="middle"
																									style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;">
																									<a data-color="Footer Link"
																										href="https://holidaybuzz.co.uk/traveladvice.html"
																										style="color:#FFFFFF;text-decoration:none;">Travel
																										Advice</a></td>
																							</tr>
																							<tr>
																								<td class="contDescription centerText"
																									align="left"
																									valign="middle"
																									style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;">
																									<a data-color="Footer Link"
																										href="https://holidaybuzz.co.uk/privacy.html"
																										style="color:#FFFFFF;text-decoration:none;">Privacy
																										&amp;
																										Policies</a>
																								</td>
																							</tr>
																						</table>
																					</td>
																				</tr>
																			</table>
																		</div>

																		<!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
																	</td>
																</tr>
															</table>

															<!-- Table Container 3 Column Close // -->

															<!-- Space Open -->

															<table border="0" width="100%" align="center"
																cellpadding="0" cellspacing="0"
																style="width:100%;max-width:100%;">
																<tr>
																	<td align="center" valign="middle" height="30"
																		style="font-size:30px;line-height:30px;">&nbsp;
																	</td>
																</tr>
															</table>

															<!-- Space Close -->

															<!-- Space Open -->

															<table border="0" width="100%" align="center"
																cellpadding="0" cellspacing="0"
																style="width:100%;max-width:100%;">
																<tr>
																	<td align="center" valign="middle" height="10"
																		style="font-size:10px;line-height:10px;">&nbsp;
																	</td>
																</tr>
															</table>

															<!-- Space Close -->


															<!-- Table Container 1 Column Open // -->
															<table class="row" width="600" border="0" cellpadding="0"
																cellspacing="0" align="center"
																style="width:600px;max-width:600px;">
																<tr>
																	<td align="center" valign="middle"
																		style="font-size:0;padding:0">

																		<!-- Image Section -->
																		<table border="0" width="100%" align="center"
																			cellpadding="0" cellspacing="0"
																			style="width:100%;max-width:100%;">
																			<tr>
																				<td class="imgResponsive" align="center"
																					valign="middle"
																					style="padding:0;padding-bottom:20px;">
																					<a href="#"
																						style="text-decoration:none;border:0">
																						<img editable="true"
																							src="https://email.holidaybuzz.co.uk/email-templates/images/footer-white-bg.jpg"
																							alt="Footer Image" border="0"
																							width="600"
																							style="display:block;border:0;width:100%;max-width:600px">
																					</a>
																				</td>
																			</tr>
																		</table>


																	</td>
																</tr>
															</table>
															<!-- Table Container 1 Column Close // -->

															<!-- Table Container 3 Column Open // -->

															<table class="row" width="600" border="0" cellpadding="0"
																cellspacing="0" align="center"
																style="width:600px;max-width:600px;">
																<tr>
																	<td align="center" valign="top"
																		style="font-size:0;padding:0">
																		<!--[if (gte mso 9)|(IE)]><table border="0" cellpadding="0" cellspacing="0"><tr><td valign="top"><![endif]-->

																		<div class="row"
																			style="display:inline-block;max-width:290px;vertical-align:top;width:100%">

																			<!-- Fotter Column 1 Open // -->
																			<table class="row" border="0" width="290"
																				align="left" cellpadding="0"
																				cellspacing="0"
																				style="width:290px;max-width:290px;">
																				<tr>
																					<td align="center" valign="middle">
																						<!-- Text Open // -->

																						<table class="centerFloat"
																							border="0" align="left"
																							cellpadding="0"
																							cellspacing="0">
																							<tr>
																								<td class="contDescription centerText"
																									align="left"
																									valign="middle"
																									style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;">
																									<singleline> &copy;
																										2021
																										Superescapes.
																										All Rights
																										Reserved
																									</singleline>
																								</td>
																							</tr>
																						</table>
																					</td>
																				</tr>
																			</table>
																		</div>

																		<!--[if (gte mso 9)|(IE)]></td><td valign="top"><![endif]-->

																		<div class="row"
																			style="display:inline-block;max-width:20px;vertical-align:top;width:100%">

																			<!-- Gap Section Open // -->
																			<table class="row" width="20" border="0"
																				cellpadding="0" cellspacing="0"
																				align="left"
																				style="width:20px;max-width:20px;">
																				<tr>
																					<td align="center" valign="middle"
																						height="30"
																						style="font-size:30px;line-height:30px;">
																						&nbsp;</td>
																				</tr>
																			</table>
																		</div>

																		<!--[if (gte mso 9)|(IE)]></td><td valign="top"><![endif]-->

																		<div class="row"
																			style="display:inline-block;max-width:290px;vertical-align:top;width:100%">

																			<!-- Fotter Column 2 Open // -->
																			<table class="row" border="0" width="290"
																				align="left" cellpadding="0"
																				cellspacing="0"
																				style="width:290px;max-width:290px;">
																				<tr>
																					<td align="center" valign="middle">
																						<!-- Text Open // -->

																						<table class="centerFloat"
																							border="0" align="right"
																							cellpadding="0"
																							cellspacing="0">
																							<tr>
																								<td class="contDescription centerText"
																									align="left"
																									valign="middle"
																									style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;">
																									<unsubscribe><a
																											href="<%unsubscribe_link_text%>"
																											target="_blank"
																											style="color: #FFFFFF;">Unsubscribe</a>
																									</unsubscribe>
																								</td>
																							</tr>
																						</table>
																					</td>
																				</tr>
																			</table>
																		</div>

																		<!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
																	</td>
																</tr>
															</table>

															<!-- Table Container 3 Column Close // -->

															<!-- Space Open -->

															<table border="0" width="100%" align="center"
																cellpadding="0" cellspacing="0"
																style="width:100%;max-width:100%;">
																<tr>
																	<td align="center" valign="middle" height="30"
																		style="font-size:30px;line-height:30px;">&nbsp;
																	</td>
																</tr>
															</table>

															<!-- Space Close -->
														</td>
													</tr>
												</table>

												<!-- E-mail Container Section Close // -->
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table> <!-- E-mail Container Section Close // -->
					</td>
				</tr>
			</table>
			<!-- Bg Color Close // -->
		</td>
	</tr>
</table>  <!-- Fotter Section Close // -->

</body>
</html>