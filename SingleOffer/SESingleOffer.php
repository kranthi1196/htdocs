<?php
//session_start();
error_reporting( E_ALL);
require('dashboarddb.php');

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
<title> <?php echo $subjectLine;?> | <?php echo $dateFelds[0]."-".$dateFelds[1]."-".$dateFelds[2]; ?></title>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,640,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" />
<style type="text/css">
		/*------ Client-Specific Style ------ */
		@-ms-viewport {
			width: device-width;
		}

		table {
			mso-table-lspace: 0pt;
			mso-table-rspace: 0pt;
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
			mso-line-height-rule: exactly;
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
			text-resize: 100%;
		}

		.appleLinks a {
			color: #c2c2c2 !important;
			text-decoration: none !important;
		}

		span.preheader {
			display: none !important;
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
  var file = new Blob([content], {type: "html"});
  var donwloadFile = fileName + "." + fileType;
  link.href = URL.createObjectURL(file);
  link.download = donwloadFile
}

</script>
</head>
<body style="margin-top:0; margin-bottom:0;padding-top:0;padding-bottom:0;width:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;">
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
<tr>
<td class="bodyBgColor" align="center" valign="top" bgcolor="#F9F9F9">
<table class="row" border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
<tr>
<td class="greyBgColor" align="center" valign="top" bgcolor="#F9F9F9">
<table class="row" border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
<tr>
<td class="containerPadding" align="center" valign="top">
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
<tr>
<td align="center" valign="middle" height="10" style="font-size:10px;line-height:10px;">&nbsp;</td>
</tr>
</table>
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
<a target="_blank" href="https://email.superescapes.co.uk/sendout/<?php echo $fileName?>.html" style="word-wrap: break-word;word-break: break-word;text-decoration: underline;color: rgb(102, 102, 102)">View
in browser</a>
</font>
</p>
</td>
</tr>
</table>
</td>
</tr>
</table>
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
<tr>
<td align="center" valign="middle" height="10" style="font-size:10px;line-height:10px;">&nbsp;</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
<tr>
<td class="bodyBgColor" align="center" valign="top" bgcolor="#F9F9F9">
<table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;">
<tr>
<td class="whiteBgColor" align="center" valign="top" bgcolor="#FFFFFF">
<table class="row" width="DEALS FOR TOUR" align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%px;max-width:100%px;">
<tr>
<td class="containerPadding" align="center" valign="top">
<table class="row" width="100%" border="0" cellpadding="0" cellspacing="0" align="center" style="width:100%px;max-width:100%px;">
<tr>
<td align="center" valign="middle" style="font-size:0;padding:0">
<!--[if (gte mso 9)|(IE)]><table border="0" cellpadding="0" cellspacing="0"><tr><td valign="middle"><![endif]-->
<div class="row" style="display:inline-block;max-width:100%px;vertical-align:middle;width:100%">
<table class="row" border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%px;max-width:100%px;">
<tr>
<td class="bodyBgColor" align="center" valign="top" bgcolor="#FFFFFF">
<table>
<tr>
<td>
<table style="max-width: 100% ! important;" width="100%" cellspacing="0" cellpadding="0" align="center">
<tr>
<td style="margin: 0px; padding: 0px; display: inline-block;" class="tdBlock" valign="top" align="left">
<img src="https://email.superescapes.co.uk/sendout/img/bottom-thin-shadow.png?img1477660205861" data-src="https://email.superescapes.co.uk/sendout/img/bottom-thin-shadow.png|640|4|640|20|0|0|1" data-origsrc="https://email.superescapes.co.uk/sendout/img/bottom-thin-shadow.png?_ga=1.113707653.308031464.1459512055" alt="Thin shadow image" style="border-width: 0px; border-style: none; border-color: transparent; display: block; width: 100%; max-width: 100% ! important;" width="100%" />
</td>
</tr>
</table>
</td>
</tr>
</table>
<table>
<tr>
<td>
<table style="max-width: 100% ! important;" width="100%" cellspacing="0" cellpadding="0" align="center">
<tr>
<td style="margin: 0px; padding: 0px; display: inline-block; background-color: rgb(255, 255, 255);" class="tdBlock" valign="top" align="left"><a href="https://email.superescapes.co.uk/" style="text-decoration:none;border:0" target="_blank"><img src="https://email.superescapes.co.uk/sendout/img/se_email_header.gif?1503231" alt="Header Image" style="display:block;border:0;width:100%;max-width: 640px;" width="640" /></a>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</div>
<!--[if (gte mso 9)|(IE)]></td><td valign="middle"><![endif]-->
</td>
</tr>
</table>
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
<tr>
<td align="center" valign="middle" height="15" style="font-size:15px;line-height:15px;">&nbsp;</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
<tr>
<td class="bodyBgColor" align="center" valign="top" bgcolor="#F9F9F9">
<table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;">
<tr>
<td class="whiteBgColor" align="center" valign="top" bgcolor="#FFFFFF">
<table class="row" width="640" align="center" border="0" cellpadding="0" cellspacing="0" style="width:640px;max-width:640px;">
<tr>
<td class="containerPadding" align="center" valign="top">
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
<tr>
<td align="center" valign="middle" height="0" style="font-size:0px;line-height:0px;">&nbsp;</td>
</tr>
</table>
<table class="row" width="640" border="0" cellpadding="0" cellspacing="0" align="center" style="width:640px;max-width:640px;">
<tr>
<td align="center" valign="middle" style="font-size:0;padding:0">
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
<tr>
<td class="imgResponsive" align="center" valign="middle" style="padding:0;padding-bottom:20px;">
<a href="<?php echo $pageUrl;?>?src=email" style="text-decoration:none;border:0">
<img src="https://email.superescapes.co.uk/sendout/img/<?php echo $imageUrl ?>.jpg?<?php rand();?>" alt="<?php echo $dealText; ?>" border="0" width="640" style="display:block;border:0;width:100%;max-width:640px">
</a>
</td>
</tr>
</table>
</td>
</tr>
</table>
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
<tr>
<td align="center" valign="middle" height="0" style="font-size:0px;line-height:0px;">&nbsp;</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
<tr>
<td class="bodyBgColor" align="center" valign="top" bgcolor="#F9F9F9">
<table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;">
<tr>
<td class="whiteBgColor" align="center" valign="top" bgcolor="#FFFFFF">
<table class="row" width="640" align="center" border="0" cellpadding="0" cellspacing="0" style="width:640px;max-width:640px;">
<tr>
<td class="containerPadding" align="center" valign="top">
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
<tr>
<td align="center" valign="middle" height="0" style="font-size:0px;line-height:0px;">&nbsp;</td>
</tr>
</table>
<table class="row" width="640" border="0" cellpadding="0" cellspacing="0" align="center" style="width:640px;max-width:640px;padding-top:15px;">
<tr>
<td align="center" valign="middle" style="font-size:0;padding:0">
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
<tr>
<td class="imgResponsive" align="center" valign="middle" style="padding:0;padding-bottom:8px;">
<a href="tel:+44-203-598-9829" style="text-decoration:none;border:0">
<img src="https://email.superescapes.co.uk/sendout/img/callus-new2023.png" alt="call button" border="0" width="640" style="display:block;border:0;width:100%;max-width:640px">
</a>
</td>
</tr>
<tr>
<td align="left" class="tdBlock" style="margin: 0px; padding: 10px 0 0 0; display: inline-block; background-color: rgb(245, 249, 248);" valign="top">
<a href="https://www.superescapes.co.uk" target="_blank"><img data-createnew="true" data-origsrc="https://email.superescapes.co.uk/sendout/img/footer-call.jpg?1" data-src="https://email.superescapes.co.uk/sendout/img/footer-call.jpg?1?img15022020?img15022020|600|110|600|103|0|0|1" src="https://email.superescapes.co.uk/sendout/img/footer-call.jpg?1" style="border-width: 0px; border-style: none; border-color: transparent; display: block; width: 100%; max-width: 100% ! important;" width="700"> </a>
</td>
</tr>
</table>
</td>
</tr>
</table>
<module label="Fotter Section">
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
<tr>
<td class="bodyBgColor" align="center" valign="top" bgcolor="#F9F9F9">
<table class="row" border="0" width="700" align="center" cellpadding="0" cellspacing="0" style="width:700px;max-width:700px;">
<tr>
<td class="whiteBgColor" align="center" valign="top" bgcolor="#FFFFFF">
<table class="row" border="0" width="640" align="center" cellpadding="0" cellspacing="0" style="width:640px;max-width:640px;">
<tr>
<td align="left" class="element-pad element-bord" style="font-family: Arial, sans-serif;padding: 10px;border-width: 0;padding-top: 10px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;font-size: 1px;line-height: 1px">
<img src="https://i.emlfiles4.com/cmpimg/2/7/9/7/8/1/files/1295310_bevel.png" style="max-width: 100%;color: rgb(39, 47, 50);font-size: 14px;line-height: 22px;width: 100%;min-height: auto;display: block" class="ee_editable" width="640">
</td>
</tr>
<tr>
<td class="blackBgColor" align="center" valign="top" bgcolor="#1d3037">
<!--[if (gte mso 9)|(IE)]>
																		<v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:640px;height:290px;">
																		<v:fill type="frame" src="images/fotter-img.jpg" color="#000000"></v:fill>
																		<v:textbox style="v-text-anchor:middle;" inset="0,0,0,0">
																		<![endif]-->
<table class="row" border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
<tr>
<td align="center" valign="top" background="https://email.superescapes.co.uk/sendout/img/fotter-img.jpg" style="background-size:cover;background-position:center top;">
<table class="row" width="600" align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;max-width:600px;">
<tr>
<td class="containerPadding" align="center" valign="top">
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
<tr>
<td align="center" valign="middle" height="30" style="font-size:30px;line-height:30px;">
&nbsp;
</td>
</tr>
</table>
<table class="row" width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="width:600px;max-width:600px;">
<tr>
<td align="center" valign="top" style="font-size:0;padding:0">
<!--[if (gte mso 9)|(IE)]><table border="0" cellpadding="0" cellspacing="0"><tr><td valign="top"><![endif]-->
<div class="row" style="display:inline-block;max-width:220px;vertical-align:top;width:100%">
<table class="row" border="0" width="220" align="left" cellpadding="0" cellspacing="0" style="width:220px;max-width:220px;">
<tr>
<td align="center" valign="middle">
<table class="centerFloat" border="0" align="left" cellpadding="0" cellspacing="0">
<tr>
<td class="contDescription centerText" align="left" valign="middle" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:600;letter-spacing:0px;padding:0;padding-bottom:20px">
TIMINGS
</td>
</tr>
</table>
<table class="centerFloat" border="0" align="left" cellpadding="0" cellspacing="0">
<tr>
<td class="contDescription centerText" align="left" valign="middle" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;padding:0;padding-bottom:0px">
<div>
<div>
Mon
-
Fri:
7.00am
-
Midnight
</div>
</div>
<div>
<div>
Sat
:
7.00am
-
Midnight
</div>
</div>
<div>
<div>
Sun:
7.00am
-
Midnight
</div>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</div>
<!--[if (gte mso 9)|(IE)]></td><td valign="middle"><![endif]-->
<div class="row" style="display:inline-block;max-width:20px;vertical-align:top;width:100%">
<table class="row" width="20" border="0" cellpadding="0" cellspacing="0" align="left" style="width:20px;max-width:20px;">
<tr>
<td align="center" valign="middle" height="30" style="font-size:30px;line-height:30px;">
&nbsp;
</td>
</tr>
</table>
</div>
<!--[if (gte mso 9)|(IE)]></td><td valign="middle"><![endif]-->
<div class="row" style="display:inline-block;max-width:200px;vertical-align:top;width:100%">
<table class="row" border="0" width="200" align="left" cellpadding="0" cellspacing="0" style="width:200px;max-width:200px;">
<tr>
<td align="center" valign="middle">
<table class="centerFloat" border="0" align="left" cellpadding="0" cellspacing="0">
<tr>
<td class="contDescription centerText" align="left" valign="middle" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:640;letter-spacing:0px;padding:0;padding-bottom:20px">
<singleline>
CONTACT
INFO
</singleline>
</td>
</tr>
</table>
<table class="centerFloat" border="0" align="left" cellpadding="0" cellspacing="0">
<tr>
<td class="contDescription centerText" align="left" valign="middle" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;">
<a data-color="Email" href="mailto:customer.support@superescapes.co.uk" style="color:#FFFFFF;text-decoration:none;">
<singleline>
Email:
<span class><span class data-cfemail>customer.support@</span><br>superescapes.co.uk<br>
</singleline>
</a>
</td>
</tr>
<tr>
<td class="contDescription centerText" align="left" valign="middle" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;">
<a data-color="Phone" href="tel:02035989829" style="color:#FFFFFF;text-decoration:none;">
<singleline>
Phone:
0203
598
9829
</singleline>
</a>
</td>
</tr>
</table>
</td>
</tr>
</table>
</div>
<!--[if (gte mso 9)|(IE)]></td><td valign="middle"><![endif]-->
<div class="row" style="display:inline-block;max-width:20px;vertical-align:top;width:100%">
<table class="row" width="20" border="0" cellpadding="0" cellspacing="0" align="left" style="width:20px;max-width:20px;">
<tr>
<td align="center" valign="middle" height="30" style="font-size:30px;line-height:30px;">
&nbsp;
</td>
</tr>
</table>
</div>
<!--[if (gte mso 9)|(IE)]></td><td valign="middle"><![endif]-->
<div class="row" style="display:inline-block;max-width:140px;vertical-align:top;width:100%">
<table class="row" border="0" width="140" align="left" cellpadding="0" cellspacing="0" style="width:140px;max-width:140px;">
<tr>
<td align="center" valign="middle">
<table class="centerFloat" border="0" align="left" cellpadding="0" cellspacing="0">
<tr>
<td class="contDescription centerText" align="left" valign="middle" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:640;letter-spacing:0px;padding:0;padding-bottom:20px">
<singleline>
MORE
LINKS
</singleline>
</td>
</tr>
</table>
<table class="centerFloat" border="0" align="left" cellpadding="0" cellspacing="0">
<tr>
<td class="contDescription centerText" align="left" valign="middle" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;">
<a data-color="Footer Link" href="https://www.superescapes.co.uk/Terms.aspx" style="color:#FFFFFF; text-decoration:none;">
Terms
</a>
</td>
</tr>
<tr>
<td class="contDescription centerText" align="left" valign="middle" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;">
<a data-color="Footer Link" href="https://email.superescapes.co.uk/traveladvice.html" style="color:#FFFFFF;text-decoration:none;">Travel
Advice</a>
</td>
</tr>
<tr>
<td class="contDescription centerText" align="left" valign="middle" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;">
<a data-color="Footer Link" href="https://email.superescapes.co.uk/privacy.html" style="color:#FFFFFF;text-decoration:none;">Privacy
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
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
<tr>
<td align="center" valign="middle" height="30" style="font-size:30px;line-height:30px;">
&nbsp;
</td>
</tr>
</table>
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
<tr>
<td align="center" valign="middle" height="10" style="font-size:10px;line-height:10px;">
&nbsp;
</td>
</tr>
</table>
<table class="row" width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="width:600px;max-width:600px;">
<tr>
<td align="center" valign="middle" style="font-size:0;padding:0">
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
<tr>
<td class="imgResponsive" align="center" valign="middle" style="padding:0;padding-bottom:20px;">
<a href="#" style="text-decoration:none;border:0">
<img editable="true" src="https://email.superescapes.co.uk/sendout/img/footer-white-bg.jpg" alt="Footer Image" border="0" width="600" style="display:block;border:0;width:100%;max-width:600px">
</a>
</td>
</tr>
</table>
</td>
</tr>
</table>
<table class="row" width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="width:600px;max-width:600px;">
<tr>
<td align="center" valign="top" style="font-size:0;padding:0">
<!--[if (gte mso 9)|(IE)]><table border="0" cellpadding="0" cellspacing="0"><tr><td valign="top"><![endif]-->
<div class="row" style="display:inline-block;max-width:290px;vertical-align:top;width:100%">
<table class="row" border="0" width="290" align="left" cellpadding="0" cellspacing="0" style="width:290px;max-width:290px;">
<tr>
<td align="center" valign="middle">
<table class="centerFloat" border="0" align="left" cellpadding="0" cellspacing="0">
<tr>
<td class="contDescription centerText" align="left" valign="middle" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;">
<singleline>
&copy;
2024
Superescapes.
All
Rights
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
<div class="row" style="display:inline-block;max-width:20px;vertical-align:top;width:100%">
<table class="row" width="20" border="0" cellpadding="0" cellspacing="0" align="left" style="width:20px;max-width:20px;">
<tr>
<td align="center" valign="middle" height="30" style="font-size:30px;line-height:30px;">
&nbsp;
</td>
</tr>
</table>
</div>
<!--[if (gte mso 9)|(IE)]></td><td valign="top"><![endif]-->
<div class="row" style="display:inline-block;max-width:290px;vertical-align:top;width:100%">
<table class="row" border="0" width="290" align="left" cellpadding="0" cellspacing="0" style="width:290px;max-width:290px;">
<tr>
<td align="center" valign="middle">
<table class="centerFloat" border="0" align="right" cellpadding="0" cellspacing="0">
<tr>
<td class="contDescription centerText" align="left" valign="middle" style="font-family:'Open Sans',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;">
<unsubscribe>
<a href="<%unsubscribe_link_text%>" id="donwload-link" onClick="myFunction()" target="_blank" style="color: #FFFFFF;">Unsubscribe</a>
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
<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
<tr>
<td align="center" valign="middle" height="30" style="font-size:30px;line-height:30px;">
&nbsp;
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</module>
</body>
</html>