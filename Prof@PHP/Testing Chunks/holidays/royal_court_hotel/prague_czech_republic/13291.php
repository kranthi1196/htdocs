<?php 
error_reporting(E_ALL);
//error_reporting(E_ERROR | E_WARNING | E_NOTICE | E_PARSE);
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
$url = "https://";   
else  
$url = "http://";   
// Append the host(domain name, ip) to the URL.   
$url.= $_SERVER['HTTP_HOST'];   

// Append the requested resource location to the URL   
$url.= $_SERVER['REQUEST_URI'];    
//echo $url;

parse_str(parse_url($url)['query'], $params);

/* $url1=parse_url($url, PHP_URL_QUERY); phpv8
parse_str($url1, $params); */

if($params['board']){
	//echo strtoupper($params['board']);
	switch(strtoupper($params['board'])){
		case 'AI': 
			$board = 'All Inclusive';
			break;
		case 'RO':
			$board = 'Room Only';
			break;
		case 'BB':
			$board = 'Bed & Breakfast';
			break;
		case 'SC':
			$board = 'Self Catering';
			break;
		case 'HB':
			$board = 'Half Board';
			break;
		case 'FB':
			$board = 'Full Board';
			break;
		default :
			$board = 'Board';
			break;
	}
}
//echo $params['nts'].'<br>'; 


if($params['src']==="email"){
	$_didContact="0203 883 1740"; 
	$_didTel=str_replace(' ', '', $_didContact);
	$hide = "display:none;visibility:hidden";
}
elseif($params['src']==="tzlist"){
	$_didContact="0203 883 8690"; 
	$_didTel=str_replace(' ', '', $_didContact);
	$hide = "visibility:visible";
}
elseif($params['src']==="tz20"){
	$_didContact="0203 883 8685"; 
	$_didTel=str_replace(' ', '', $_didContact);
	$hide = "visibility:visible";
}
elseif($params['src']==="2tz20"){
	$_didContact="0203 883 8236"; 
	$_didTel=str_replace(' ', '', $_didContact);
	$hide = "visibility:visible";
}
elseif($params['src']==="3tz20"){
	$_didContact="0203 883 8241"; 
	$_didTel=str_replace(' ', '', $_didContact);
	$hide = "visibility:visible";
}
elseif($params['src']==="4tz20"){
	$_didContact="0203 883 8237"; 
	$_didTel=str_replace(' ', '', $_didContact);
	$hide = "visibility:visible";
}
elseif($params['src']==="5tz20"){
	$_didContact="0203 883 8238"; 
	$_didTel=str_replace(' ', '', $_didContact);
	$hide = "visibility:visible";
}
elseif($params['src']==="tzsolus"){
	$_didContact="0203 598 2854"; 
	$_didTel=str_replace(' ', '', $_didContact);
	$hide = "visibility:visible";
}

else{
	$_didContact="0203 883 1740"; 
	$_didTel=str_replace(' ', '', $_didContact);
	$hide = "display:none;visibility:hidden";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>


	<title>Bestonlineholidays</title>
	<meta charset="utf-8">
	<link rel="SHORTCUT ICON" href="https://travelzoo.bestonlineholidays.co.uk/assets/images/favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	<link href="https://travelzoo.bestonlineholidays.co.uk/assets/css/admin1/dataTables.bootstrap.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="https://travelzoo.bestonlineholidays.co.uk/assets/js/admin1/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://travelzoo.bestonlineholidays.co.uk/assets/js/admin1/dataTables.bootstrap.min.js"></script>
	<!-- <link href="<.?php // echo base_url(); ?>assets/css/dow-banners.css?<.?= time();?>" rel="stylesheet" type="text/css" />
   <script type="text/javascript" src="<.?php //echo base_url(); ?>assets/js/scroll-reveal.js"></script>-->


	<link href="https://travelzoo.bestonlineholidays.co.uk/assets/css/head-foot.css" type="text/css" rel="stylesheet">
	<link href="https://travelzoo.bestonlineholidays.co.uk/assets/css/main.css?1682758380" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://travelzoo.bestonlineholidays.co.uk/assets/css/a1travel.sb1.v1.css?v=2.30">
	<link rel="stylesheet" href="https://travelzoo.bestonlineholidays.co.uk/assets/css/footer.css?1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://travelzoo.bestonlineholidays.co.uk/assets/css/simplelightbox.min.css" type="text/css">
	<link rel="stylesheet" href="https://travelzoo.bestonlineholidays.co.uk/assets/css/light_image.css" type="text/css">
	<link rel="stylesheet" href="https://travelzoo.bestonlineholidays.co.uk/assets/css/lt2-1.css?1682758380" type="text/css">
	<link rel="stylesheet" href="https://travelzoo.bestonlineholidays.co.uk/assets/css/fonts.css" type="text/css">
	<link rel="stylesheet" href="https://travelzoo.bestonlineholidays.co.uk/assets/css/responsive.css?1682758380" type="text/css">
	<link rel="stylesheet" href="https://travelzoo.bestonlineholidays.co.uk/assets/css/bannerstyle.css?1682758380" type="text/css">


	<link href="https://travelzoo.bestonlineholidays.co.uk/assets/css/travelzoo_list.css?1682758380" type="text/css" rel="stylesheet">



	<script>
		(function(e) {
			var t = document,
				n = t.createElement("script");
			n.async = !0, n.defer = !0, n.src = e, t.getElementsByTagName("head")[0].appendChild(n)
		})("//c.flx1.com/179-21074.js?id=21074&m=179")
	</script>
	<style>
		.modal-dialog {
			width: 497px;
			margin: 30px auto;
		}

		.header-icons .modal-content {
			border-radius: 0;
		}

		#myModal .modal-header .close {
			margin-top: -32px;
			background: #27376d;
			opacity: 1;
			width: 30px;
			border-radius: 50px;
			height: 30px;
			color: #fff;
			font-weight: normal;
			top: 4px;
			left: 25px;
			font-weight: bold;
			position: relative;
		}

		#myModal .modal-header {
			border: 0;
		}

		#myModal .modal-content {
			border-radius: 0;
		}

		#myModal2 .modal-header .close {
			position: relative;
			z-index: 99;
			margin-top: -32px;
			background: #27376d;
			opacity: 1;
			width: 30px;
			border-radius: 50px;
			height: 30px;
			color: #fff;
			font-weight: normal;
			top: 20px;
			left: 10px;
			font-weight: bold;
		}

		.header-icons .modal {
			text-align: center;
			padding: 0 !important;
		}

		.header-icons .modal:before {
			content: '';
			display: inline-block;
			height: 100%;
			vertical-align: middle;
			margin-right: -4px;
		}

		.header-icons .modal-dialog {
			display: inline-block;
			text-align: left;
			vertical-align: middle;
		}

		#cookies h3 {
			font-weight: 600;
			text-align: center;
		}

		#cookies .modal-content {
			border-radius: 0;
		}

		#cookies {
			text-align: center;
			padding: 15px;
		}

		#cookies p {
			font-size: 13.75px;
		}

		#cookies button.close {
			background: #27376d;
			color: #FFF;
			position: relative;
			top: -13px;
			left: 10px;
			opacity: 1;
			border-radius: 35px;
			width: 25px;
			height: 25px;
			font-size: 15px;
			z-index: 99;
		}

		.search_fil.desktop {
			position: relative;
			z-index: 1;
			height: 508px;
		}

		footer#footer {
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
		}

		@media only screen and (max-width: 991px) {
			.search_fil.desktop {
				height: 578px;
			}
		}

		@media only screen and (max-width: 767px) {
			.body_box {
				top: 0;
			}

			.metrologo {
				width: 70PX;
				padding-top: 10px;
			}
		}
	</style>
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-TFKKNZ8');
	</script>
	<!-- End Google Tag Manager -->

</head>

<body>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TFKKNZ8" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<header class="white">
				<?= $_didContact; ?><div id="dvHeader" class="inner gridContainer flex">

			<a href="https://www.bestonlineholidays.co.uk/" class="content-logo">
				<!-- Amends: Se-Designer: -->
				<img src="https://travelzoo.bestonlineholidays.co.uk/images/bestonline-logo.svg" alt="bestonlineholidays.co.uk"></a>
			<!-- Amends: Se-Designer: 22-05-2018 -->

			<div class="content-nav">
				<div class="phone-number dt-phone-number">

					<a id="aPhoneNumber" href="tel:<?= $_didTel;?>"><i class="fa fa-skype" aria-hidden="true">&nbsp;</i><i class="fa fa-phone-square" aria-hidden="true" style="margin-right: 0;"></i>
						<span id="spPhoneNumber">
						<?= $_didContact;?></span></a>
				</div>

				<div class="main-menu">
					<div class="hide_desktop">
						<div class="side-panel-header clearfix hide_desktop">
							<h4 class="txt_white">Main Menu</h4>
							<a class="button close close-menu"><i class="fa fa-close" aria-hidden="true"></i></a>
						</div>
					</div>

					<nav>
						<a class="flex" href="https://www.bestonlineholidays.co.uk/"><span>Search</span> <i class="icon-chevron-right" aria-hidden="true"></i></a>
						<!--          <a class="flex" href="https://www.bestonlineholidays.co.uk/shortlist.aspx"><span>Shortlist <span id="spShortListCount" class="notification off">0</span></span> <i class="icon-chevron-right" aria-hidden="true"></i></a>
                 
              <a class="flex" href="https://www.bestonlineholidays.co.uk/managebookinglogin.aspx"><span>My Booking</span> <i class="icon-chevron-right" aria-hidden="true"></i></a>
-->
						<div class="hide_desktop">
							<a href="https://www.bestonlineholidays.co.uk/careers.aspx"><span>Careers</span> <i class="icon-chevron-right" aria-hidden="true"></i></a>
							<a class="flex" href="https://www.bestonlineholidays.co.uk/"><span>Terms</span> <i class="icon-chevron-right" aria-hidden="true"></i></a>
						</div>

						<div class="mobile-bonding clearfix">
							<a class="mb" href="#" target="_blank">
								<!--Amends: Se-Designer-->
								<img src="https://travelzoo.bestonlineholidays.co.uk/images/ATOL_Protected.svg" alt="ATOL Icon" title="ATOL 12016. Click to verify." style="max-width: 50px; height: 73px !important">
								<!--Amends: Se-Designer 22-05-2021-->
							</a>
							<a class="mb" href="#" target="_blank">
								<!--Amends: Se-Designer 22-05-2018-->
								<img src="https://travelzoo.bestonlineholidays.co.uk/images/TTA_0.svg" alt="ABTA Icon" title="ABTA P6654. Click to verify" style="max-width: 90px; height: 73px !important">
								<!--Amends: Se-Designer 22-05-2021-->
							</a>
						</div>
					</nav>
				</div>

			</div>
			<div class="bonding">
				<div class="flex center header-icons">

					<!--Amends: Se-Designer 22-05-2018-->
					<img src="https://travelzoo.bestonlineholidays.co.uk/images/ATOL_Protected.svg" alt="ATOL Icon" title="ATOL 12016." style="height: 50px; margin: 0 10px 0 10px; padding: 0 0 0 0;">
					<img src="https://travelzoo.bestonlineholidays.co.uk/images/TTA_0.svg" alt="TTA" title="Travel trust association" style="height: 50px; margin: 0 10px 0 10px; padding: 0 0 0 0;">

					<!--<a class="price-match inline_popup" href="#pricematch" data-toggle="modal" data-target="#myModal">
                    <img src="<.?= base_url(); ?>images/usp_deposit.svg?2" alt="Price Match Icon" title="Price match guarantee" style="height: 50px; margin: 0 10px 0 10px; padding: 0 0 0 0;">
                </a>-->

					<!-- <a class="deposits inline_popup" href="#lowdeposits" data-toggle="modal" data-target="#myModal2">
                    <img src="<.?= base_url(); ?>images/usp_payments.svg?3" alt="0% Interest Icon" title="Deposits with 0% Monthly Payments" style="height: 50px; margin: 0 10px 0 10px; padding: 0 0 0 0;">
                </a>-->
					<!--Amends: Se-Designer 22-05-2018-->
				</div>
			</div>

			<div class="content-nav-mobile">
				<div class="phone-number">
					<!--Amends: Se-Designer 22-05-2018-->
					<a id="aMNumber" class="button" href="tel:<?= $_didTel;?>"><i class="fa fa-phone-square" aria-hidden="true"></i></a>
					<!--Amends: Se-Designer 22-05-2018-->
				</div>
				<div class="menu">
					<a class="show-menu button"><i class="fa fa-bars" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
	</header>
	<div class="modal fade" id="myModal" role="dialog" style="color: #002340;">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title" style="color: #002340 !important; font-weight: 600; font-size: 1.313em; text-align: center;">At SuperEscapes we promise you the lowest prices available.</h4>
				</div>
				<p style="color: #002340; line-height: 15px; padding: 0 15px;text-align: center;"><small>If you make an online booking and later find your holiday combination on sale, and available, at a lower price somewhere else on the internet, we will refund the difference to you.</small>
				</p>
				<div class="modal-body">
					<strong style="color: #002340;text-align: center; display: block;">Terms and conditions</strong> <br>
					<small>
						<ul style="text-align: left; color: #002340;">
							<li>The claim must be from the lead passenger on the booking.</li>
							<li>We can only price match a booking that has been made online.</li>
							<li>The lower price holiday must be accurately priced, available to book immediately online and be from an abta bonded company.</li>
							<li>The policy does not apply to bookings of 9 passengers or more.</li>
							<li>The policy only applies when both flights and accommodation are booked together under the same reference number, this does not apply to individually booked elements the price match is only valid on the total holiday cost and not individually priced elements.
							</li>
							<li>Bestonlineholidays is an independent travel agent and does not organise package&nbsp;holidays. To make a claim It must be an exact match, for example, several companies now operate both a charter airline and a no frills airline and we do not price match from one to the other. Neither do we match a tailor made holiday against a package holiday</li>
							<li>This price match cannot be part of a discounted price due to&nbsp;a voucher or loyalty scheme redemption</li>
							<li>We at bestonlineholidays must be able to verify that the competitors price is based on exactly the same products booked, therefore you must email a screenshot of the final page of the booking process of the competitors website to <a title="blocked::mailto:bookings@bestonlineholidays.co.uk" href="mailto:bookings@bestonlineholidays.co.uk">bookings@bestonlineholidays.co.uk</a> putting the word 'Price Match' in the subject. We cannot accept responsibility were you have failed to send us the information requested</li>
							<li>The email must be sent to <a title="blocked::mailto:bookings@bestonlineholidays.co.uk" href="mailto:bookings@bestonlineholidays.co.uk">bookings@bestonlineholidays.co.uk</a> within 24 hours of placing your online booking.</li>
							<li>Refunds, if applicable will only be made to the card used to purchase the holiday.<br> We are unable to accept price matches for a booking that departs within 14 days of the date booked. </li>
						</ul>
						<p style="padding-bottom: 15px;">
							<small style="font-size: .76em;	line-height: 1.2; color: #002340; ">We reserve the right to refuse and claim where we are unable to substantiate the
								claim to our satisfaction and in accordance with the above points. We reserve the
								right to remove this offer at any time.</small>
						</p>
					</small>
				</div>
			</div>

		</div>
	</div>


	<div class="modal fade" id="myModal2" role="dialog" style="color: #002340;">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header" style="padding: 0;">
					<button type="button" class="close" data-dismiss="modal">×</button>
				</div>
				<div class="modal-body" style="padding: 0;">
					<div class="fancybox-skin" style="padding: 0px; width: auto; height: auto;">
						<div class="fancybox-outer">
							<div class="fancybox-inner" style="overflow: auto; width: 480px; height: auto;">
								<div id="lowdeposits" style="max-width: 480px;" class="padded center">
									<div class="bg_1">

										<img src="https://www.bestonlineholidays.co.uk/Images/Logo.png" style="width: 100%; background: #fff;" alt="Low Deposits">
									</div>
									<p>
										With our low deposits and 0% monthly payments, you can book ahead and secure your holiday from as little as £49 per person, paying the final balance up until 14 days before departure
									</p>
									<p>
										Sit back, relax and look forward to your trip without the financial worry.
									</p>
									<p>
										<small class="light">Subject to supplier availability. Terms and conditions apply.</small>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!--Banner Search Box-->
	<!--<div class="search_fil desktop">
             <iframe width='100%' height='500' src="https://www.bestonlineholidays.co.uk/search.aspx?src=emails" frameborder="0" scrolling="no" allowfullscreen style="height:500px;">
            </iframe>
        </div>-->
	<div class="body_box" style="margin-bottom: 50px !important">
		<style>
	/*changes have done on 1-15-2019 */
	a.big {
		overflow: hidden;
		height: 339px;
		display: inline;
	}

	.container .gallery a.big img {
		height: 498px;
		max-height: 100%;
		object-fit: cover;
	}

	@media screen and (max-width:768px) {
		.container .gallery a.big img {
			height: 400px;
		}

		.gallery {
			height: 250px;
		}

		.container .gallery a img {
			height: 126px;
		}
	}

	@media screen and (max-width:414px) {
		.container .gallery a.big img {
			height: 225px;
		}

		.gallery {
			height: 225px;
		}

		@media screen and (max-width:375px) {
			.container .gallery a.big img {
				height: 225px;
			}

			.gallery {
				height: 225px;
			}

			@media screen and (max-width:320px) {
				.gallery {
					height: 209px;
				}

				.container .gallery a.big img {
					height: 209px;
				}
			}
</style>
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-xs-12">
				<div class="main-heading">
					<h1>
						4<sup>*&nbsp;</sup><?= strtoupper($board)?> PRAGUE CITY BREAK<span class="unhighlight-2">
							<div class="hide_desktop">from
						</span>£<span class="needtest"><strong>99</strong>pp</span><sup class="price-pp">pp</sup></h1>
					<h2>
						<ul class="list-inline">
							<li><i class="fa fa-star"></i></li> <li><i class="fa fa-star"></i></li> <li><i class="fa fa-star"></i></li> <li><i class="fa fa-star"></i></li> 
						</ul>
						Royal Court Hotel					</h2>
					<p><i class="fa fa-map-marker"></i> Prague, Czech Republic					</p>
				</div>
				<div class="tz_badge flex center hide_desktop"><img src="https://travelzoo.bestonlineholidays.co.uk/images/tz-badge-01.svg"  alt="Travelzoo Badge"/></div><br>
				<!--<p>
						<div>from<span class="deal__price">£/*<.?php echo $tzoffer['price']; ?>*/</span>pp</div></p>-->
				<!--Saving Upto /*<.?.php echo $tzoffer['save_percent']; ?*/>%-->

			</div>

			<div class="gallery_view">
				<div class="gallery">
											<a href="https://travelzoo.bestonlineholidays.co.uk/sliders/0_16825160990_1.jpg" class="big"><img src="https://travelzoo.bestonlineholidays.co.uk/sliders/0_16825160990_1.jpg" title="<?=strtoupper($board) ?> PRAGUE CITY BREAK" /></a>

											<a href="https://travelzoo.bestonlineholidays.co.uk/sliders/1_16825160990_2.jpg" class="normal"><img src="https://travelzoo.bestonlineholidays.co.uk/sliders/1_16825160990_2.jpg" title="<?=strtoupper($board) ?> PRAGUE CITY BREAK" /></a>

											<a href="https://travelzoo.bestonlineholidays.co.uk/sliders/2_16825160990_3.jpg" class="normal"><img src="https://travelzoo.bestonlineholidays.co.uk/sliders/2_16825160990_3.jpg" title="<?=strtoupper($board) ?> PRAGUE CITY BREAK" /></a>

											<a href="https://travelzoo.bestonlineholidays.co.uk/sliders/3_16825160990_4.jpg" class="normal"><img src="https://travelzoo.bestonlineholidays.co.uk/sliders/3_16825160990_4.jpg" title="<?=strtoupper($board) ?> PRAGUE CITY BREAK" /></a>

											<a href="https://travelzoo.bestonlineholidays.co.uk/sliders/4_16825160990_5.jpg" class="normal"><img src="https://travelzoo.bestonlineholidays.co.uk/sliders/4_16825160990_5.jpg" title="<?=strtoupper($board) ?> PRAGUE CITY BREAK" /></a>

										<div class="tz_img_badge hide_mobile"><img src="https://travelzoo.bestonlineholidays.co.uk/images/tz-badge-01.svg" alt="Travelzoo Badge"/></div>
					<div class="clear"></div>

				</div>
				<div class="mphone-wrapper hide_desktop">
					
					<a class="phone" href="tel:#tel:<?= $_didTel;?>"><span><?= $_didContact;?></span></a>
				</div>



				<div class="price_offer hide_mobile">
					<span>CALL US NOW</span>
					<span class="mobile">CALL NOW</span>
					<h1><a href="tel:<?= $_didTel;?>"><i class="fa fa-phone"></i> <?= $_didContact;?></a></h1>
					<h1 style="font-size:12px; letter-spacing: 0;padding-top:10px;">Limited availability</h1>
				</div>
			</div>


			
			<div class="dates_dealhightlights">
				<div class="row">
					<div class="col-md-8 col-sm-8 col-xs-12">
						<div class="dates">
							<h1 id="dates">&nbsp;Dates</h1>


							<div class="tz_img_badge hide_mobile"><img src="https://travelzoo.bestonlineholidays.co.uk/images/tz-badge-01.svg" style="<?= $hide; ?>" alt="Travelzoo Badge"/></div><div class="dates_here" id="dates_top">
								<div class="deal__dates">
<div class="deal__year" id="deal__year_1">
<div class="deal__months">
<div class="deal__yearName">London Departures 2 Nights From &pound;99 pp</div>

<div class="deal__month"><span>Sep 2023 &pound;99</span><span> 10th, 12th, 18th</span></div>

<div class="deal__month"><span>Nov 2023 &pound;99</span><span> 5th, 12th, 15th, 22nd</span></div>

<div class="deal__month"><span>Dec 2023 &pound;99</span><span> 10th, 12th, 14th</span></div>

<div class="deal__month"><span>Jan 2024 &pound;99</span><span> 7th, 9th, 16th, 29th, 31st</span></div>

<div class="deal__month"><span>Feb 2024 &pound;99</span><span> 4th, 7th, 20th, 25th, 27th</span></div>

<div class="deal__month"><span>Mar 2024 &pound;99</span><span> 3rd, 6th, 10th, 18th, 20th</span></div>

<div class="deal__month"><span>Jun 2023 &pound;119</span><span> 12th, 21st, 26th</span></div>

<div class="deal__month"><span>Oct 2023 &pound;119</span><span> 4th, 8th, 16th, 31st</span></div>

<div class="deal__month"><span>Jul 2023 &pound;129</span><span> 4th, 13th, 16th, 18th</span></div>

<div class="deal__month"><span>Aug 2023 &pound;149</span><span> 16th, 20th, 28th, 30th</span></div>

<div class="deal__month"><span>Apr 2024 &pound;159</span><span> 1st, 2nd</span></div>
</div>
</div>

<div class="deal__year" id="deal__year_2">
<div class="deal__months">
<div class="deal__yearName">From London Gatwick</div>
</div>
</div>

<div class="deal__year" id="deal__year_3">
<div class="deal__months">
<div class="deal__yearName">Manchester Departures 2 Nights From &pound;99 pp</div>

<div class="deal__month"><span>Jan 2024 &pound;99</span><span> 7th, 10th, 16th, 29th, 31st</span></div>

<div class="deal__month"><span>Feb 2024 &pound;99</span><span> 4th, 6th, 25th, 27th</span></div>

<div class="deal__month"><span>Mar 2024 &pound;99</span><span> 3rd, 6th, 12th, 17th</span></div>

<div class="deal__month"><span>Nov 2023 &pound;129</span><span> 5th, 8th, 12th, 22nd</span></div>

<div class="deal__month"><span>Jun 2023 &pound;139</span><span> 12th, 21st, 26th, 28th</span></div>

<div class="deal__month"><span>Sep 2023 &pound;139</span><span> 4th, 20th, 27th</span></div>

<div class="deal__month"><span>Jul 2023 &pound;149</span><span> 9th, 12th, 16th, 18th</span></div>

<div class="deal__month"><span>Oct 2023 &pound;149</span><span> 11th, 18th, 26th</span></div>

<div class="deal__month"><span>Dec 2023 &pound;149</span><span> 18th, 19th</span></div>

<div class="deal__month"><span>Aug 2023 &pound;199</span><span> 11th, 15th, 21st, 28th</span></div>

<div class="deal__month"><span>Apr 2024 &pound;259</span><span> 19th</span></div>
</div>
</div>

<div class="deal__year" id="deal__year_4">
<div class="deal__months">
<div class="deal__yearName">Bristol Departures 2 Nights From &pound;129 pp</div>

<div class="deal__month"><span>Oct 2023 &pound;129</span><span> 3rd, 10th, 17th</span></div>

<div class="deal__month"><span>Jan 2024 &pound;139</span><span> 12th, 19th, 26th</span></div>

<div class="deal__month"><span>Mar 2024 &pound;169</span><span> 1st, 8th</span></div>

<div class="deal__month"><span>Feb 2024 &pound;179</span><span> 2nd, 23rd</span></div>

<div class="deal__month"><span>Nov 2023 &pound;199</span><span> 17th</span></div>

<div class="deal__month"><span>Dec 2023 &pound;219</span><span> 15th, 22nd</span></div>
</div>
</div>

<div class="deal__year" id="deal__year_5">
<div class="deal__months">
<div class="deal__yearName">Edinburgh Departures 2 Nights From &pound;199 pp</div>

<div class="deal__month"><span>Jun 2023 &pound;199</span><span> 25th, 27th</span></div>

<div class="deal__month"><span>Aug 2023 &pound;199</span><span> 22nd, 29th</span></div>

<div class="deal__month"><span>Jul 2023 &pound;219</span><span> 4th, 18th</span></div>

<div class="deal__month"><span>Oct 2023 &pound;219</span><span> 13th, 20th, 27th</span></div>

<div class="deal__month"><span>Sep 2023 &pound;239</span><span> 15th, 29th</span></div>
</div>
</div>
</div>
								<!--<a href="#" id="loadMore">Load More Dates <i class="fa fa-angle-double-down" aria-hidden="true"></i></a>-->
							</div>

							<div class="hide_desktop dealhightlights">
								<h1>&nbsp;Deal Highlights</h1>
								<ul class="list-unstyled">
									<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Return Flights</li><li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;2 Nights</li><li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Board Basis – <?= $board?></li>								</ul>
							</div>
						</div>
						<div class="over_view">
							<h1>&nbsp;Description</h1>
							<div class="over_view_here">
								<p>In a former Royal Court from the 19th century, close to the Charles University. Wenceslas Square is a 20-minute walk away.</p>

<p>&nbsp;</p>

<p>Several types of massages and beauty treatments are available as well. All is available at an additional cost.</p>

<p>Each room at the Royal Courts&#39; is air-conditioned and equipped with satellite TV, and offers free WiFi.</p>

<p>The I. P. Pavlova Metro and Tram Station is 7 minutes&#39; walk from the property.</p>

<p>A limited amount of parking spaces is offered in the hotel&#39;s garage for an extra charge. Reservation in advance is required.</p>
							</div>

						</div>
						<div class="hide_desktop map_location">
							<h4>&nbsp;Hotel Location Map</h4>
							<div class="over_view_here">
								<iframe src=" https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2560.7447939004196!2d14.427746225215039!3d50.07234092259012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470b948bfd71cb6d%3A0x224e898ef6407285!2sRoyal%20Court%20Hotel!5e0!3m2!1sen!2sin!4v1682515459034!5m2!1sen!2sin" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>
												<div class="over_view">
							<h1>&nbsp;Paramount's</h1>
							<div class="over_view_here">
								<ol>
									<li>Our prices are per person, based on two people sharing, and are all subject to availability. </li>
									<li>Prices are correct at time of publish are subject to change at any time.</li>
									<li>Our offers are extremely popular as many are exclusive or have added values therefore they operate on a first come first served basis with limited availability.</li>
									<li>Any upgrades and extras not outlined with the promotional offers can be added however all costs will be an additional cost payable by the customer.</li>
									<li>Once flights are confirmed the onus is with the client/s to complete their own online check-in, if you require this service or additional support from the team a supplement will apply.</li>
									<li>Our premium support package is not included in the deal.</li>
									<li>This website / landing page does not host live pricing, we will endeavour to keep our prices updated as close to live prices as possible.</li>
									<li>Please note that this website is a price service providing website and its motive is solely to assist customers in sourcing the availability of travel-related goods and services and to make permissible reservations or otherwise perform business with suppliers. We do not operate any suppliers.</li>
									<li>We do not share our client data with any third parties.</li>
									<li>We are TTA bonded and ATOL protected.</li>
									<li>If you are banned from flying with any airline we will be forced to cancel your holiday and refund would be processed without any notice.</li>
									<li>Any refunds made by us will take 7-10 business days,</li>
									<li>We hold right to ask you for any identity proof or payment authorisation code/s in order to avoid any fraudulent transactions.</li>
								</ol>
							</div>
						</div>
					</div> <!--Column 8 Ends-->

					<div class="col-md-4 pl-0 col-sm-4 col-xs-12 pl-15" style="position:sticky;top:0;">
						<div class="hide_mobile dealhightlights">
							<h1>Deal Price From</h1>
							<p><span class="deal__price">£99</span>pp</p>
						</div>


						<div class="hide_mobile dealhightlights">
							<h1>Deal Highlights</h1>
							<ul class="list-unstyled">
								<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Return Flights</li><li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;2 Nights</li><li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Board Basis – <?= $board ?></li>							</ul>
						</div>
						

													<div class="hide_mobile map_location">
								<h4>Hotel Location Map</h4>
								<div class="over_view_here">
									<iframe src=" https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2560.7447939004196!2d14.427746225215039!3d50.07234092259012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470b948bfd71cb6d%3A0x224e898ef6407285!2sRoyal%20Court%20Hotel!5e0!3m2!1sen!2sin!4v1682515459034!5m2!1sen!2sin" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
							</div>

							<div class="deal-highlights-head">
								<!--<h4>Deals.. Deals.. Deals.. For </h4>
                </div>
                <a href="<.?=$defweeklink; ?>" target="_blank"> 
                <img src="<.?=$defweekimg; ?>" class="img-responisve" alt="Banner"/> </a>  -->


														<h1>&nbsp; Save up to 70%</h1>


							<div class="Sign_Up love-feedback">

							</div>
							
							</div>

					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<section>

	<div class="row">
		<div class="col-md-12">
			<div class="travel_advice clearfix">
				<p><b>TRAVEL ADVICE:</b>The <a href="https://www.gov.uk/foreign-travel-advice" target="_blank">Foreign &amp; Commonwealth Office (FCO)</a> issues up-to-date travel advice on destinations, health, safety and security as well as information on passports and visas. We advise all passengers to check for any travel advice for the destination that they are travelling to. <a href="https://www.gov.uk/foreign-travel-advice" target="_blank">Click here to visit their website</a>.</p><br>
			</div>
		</div>
	</div>
</section>
<!--<footer>
    <div class="container">
        <div class="row" style="border: 0;">
            <div class="col-md-12 col-sm-12">
                <div class="bottom_offers">
                    <h2>Featured Deals</h2>
                    <ul>
					                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>-->

<style>
	.vm-book-thi-deal {
		background-color: #cf142b;
		color: #fff;
		font-size: 22px;
		padding: 10px;
		text-align: center;
		font-weight: bold;
		margin-bottom: 10px;
		border-radius: 4px;
		display: block;
		transition: 0.5s ease-out;
	}

	.vm-book-thi-deal:hover {
		background-color: #5f9f46;
		transition: 0.5s ease-in;
		text-decoration: none;
	}

	.vm-vote-banner {
		border: 2px solid #B0B0B0;
		color: #585858;
		text-align: center;
		margin-top: 20px;
	}

	.vm-vote-banner>p {
		font-weight: bold;
		padding: 5px;
		margin-bottom: 0;
		font-size: 13px;
	}

	.vm-vote-banner>p>span {
		font-weight: bold;
		color: #CD0003;
	}

	.price_offer {
		bottom: 235px;
	}

	.dow {
		padding: 0;
	}

	.subbtn {
		background-color: #00247d !important;
	}

	@media (min-width: 1920px) {
		.container {
			max-width: 1480px;
		}

		.container .gallery a.big img {
			height: 507px;
		}

		.gallery {
			height: 508px;
		}
	}

	@media (max-width: 768px) {
		.vm-book-thi-deal {
			font-size: 19px;
		}
	}
</style>
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-551025062bd24c7d"></script>
	</div>
	<section class="footer-sec">
		<div class="footer-wrapper">
	<div class="phone-wrapper hide_mobile">
				<a class="phone" href="tel:<?= $_didTel;?>"><span><?= $_didContact;?></span></a>
	</div>
	<div class="mphone-wrapper-footer hide_desktop">
		<a class="mphone-footer" href="tel:<?= $_didTel;?>"><span><?= $_didContact;?></span></a>
	</div>
	<footer>
		<div class="footer__content"><br>
			<p>
			<div>Registered office: Unit 305B, Collingham House, 6-12 Gladstone Road, London, SW19 1QT, United Kingdom</div>
			<div>Trading address: Unit 305B, Collingham House, 6-12 Gladstone Road, London, SW19 1QT, United Kingdom</div>
			</p>

			<div class="partner-logos">
				<a class="logo-link" title="View PTS details" href="#" target="_blank">
					<img src="https://bestonlineholidays.co.uk/img/logo_tta.png" alt="Protected Trust Services Logo" />
				</a>
				<img src="https://bestonlineholidays.co.uk/img/logo_payment-types.svg" alt="payment type logos" title="We accept VISA and MASTERCARD payments" />
			</div>

			<p>
				Best Online Holidays is a trading name for Chemm Business Ltd. Company registration no: 11123428. Best Online Holidays gives you 100% financial protection with all your monies being held in a Trust Account. You can be rest assured that you are safe when making a booking with Best Online Holidays. We are a member of Travel Trust Association (TTA), our TTA membership number is Q6238 and ATOL number is 12016
			</p>

			<p>
				<a style="color:white; text-decoration: underline; cursor: pointer;" href="terms.html">Terms and Conditions</a> | <a style="color:white; text-decoration: underline; cursor: pointer;" href="privacy.html">Privacy Policy</a> | <a style="color:white; text-decoration: underline; cursor: pointer;" href="aboutus.html">About Us</a> | <a style="color:white; text-decoration: underline; cursor: pointer;" href="contactus.html">Contact Us</a> | <a style="color:white; text-decoration: underline; cursor: pointer;" href="traveladvice.html">Travel Advice</a>
			</p>
			<p style="font-size: 8px;">All of the flight-inclusive holidays on this website are financially protected by the ATOL scheme but ATOL protection does not apply to all of the travel products e.g<a name="_GoBack"></a>. car hire, transfers or hotel only bookings not including a flight, offered on this website. This website will provide you with information on the protection that applies in the case of each holiday and travel service offered before you make your booking. Our terms and conditions can be viewed by clicking the link <strong>here</strong>. If you do not receive an ATOL Certificate, then the booking will not be ATOL protected. If you do receive an ATOL Certificate but all parts of your trip are not listed on it, those parts will not be ATOL protected. Please see our booking conditions for information, or for more information about financial protection and the ATOL Certificate go to: <a href="http://www.caa.co.uk/atol-protection">www.caa.co.uk/atol-protection</a>.</p>

		</div>
	</footer>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://travelzoo.bestonlineholidays.co.uk/assets/js/simple-lightbox.js"></script>

<script type="text/javascript" src="https://travelzoo.bestonlineholidays.co.uk/assets/js/stick-to-me.js"></script>

<!-- livezilla.net PLACE SOMEWHERE IN BODY -->
<!-- livezilla.net PLACE SOMEWHERE IN BODY -->

<script type="text/javascript" id="demo2-javascript">
	$(document).ready(function() {
		$("#demo2").navgoco({
			accordion: true
		});
	});
</script>
<script>
	$(function() {
		var $gallery = $('.gallery a').simpleLightbox();

		$gallery.on('show.simplelightbox', function() {
				console.log('Requested for showing');
			})
			.on('shown.simplelightbox', function() {
				console.log('Shown');
			})
			.on('close.simplelightbox', function() {
				console.log('Requested for closing');
			})
			.on('closed.simplelightbox', function() {
				console.log('Closed');
			})
			.on('change.simplelightbox', function() {
				console.log('Requested for change');
			})
			.on('next.simplelightbox', function() {
				console.log('Requested for next');
			})
			.on('prev.simplelightbox', function() {
				console.log('Requested for prev');
			})
			.on('nextImageLoaded.simplelightbox', function() {
				console.log('Next image loaded');
			})
			.on('prevImageLoaded.simplelightbox', function() {
				console.log('Prev image loaded');
			})
			.on('changed.simplelightbox', function() {
				console.log('Image changed');
			})
			.on('nextDone.simplelightbox', function() {
				console.log('Image changed to next');
			})
			.on('prevDone.simplelightbox', function() {
				console.log('Image changed to prev');
			})
			.on('error.simplelightbox', function(e) {
				console.log('No image found, go to the next/prev');
				console.log(e);
			});
	});
</script>
<script>
	$(window).scroll(function() {
		if ($(this).scrollTop() > 620 && !$('#header').hasClass('open')) {
			$('#header').addClass('open');
			$('#header').slideDown();
		} else if ($(this).scrollTop() <= 620) {
			$('#header').removeClass('open');
			$('#header').slideUp();
		}
	});
</script>
<script>
	$(document).ready(function() {
		$(".sl-close").click(function() {
			$(".simple-lightbox").hide();
		});
	});
</script>
<script>
	$(window).on('load resize', function() { //SHOW/HIDE MONILE PANELS
		//THIS WILL APPLY THE ACTIVE CLASS AND MOVE IT INTO VIEW WITH A CSS ANIMATION
		//CLOSE BUTTONS WILL HIDE THE PANELS
		// in large screen, If we go beyond 768 px wide - then hide mobile filter off canvas	
		var win = $(this); //this = window
		if (win.width() >= 769) {
			$(".main-menu").removeClass("active");
			$("html").removeClass("no-scroll");
			$("body").removeClass("pushed-right");
		};
	});

	//SHOW/ HIDE SIDE PANEL PAYMENT
	$(".show-menu").click(ShowMobileMenu);
	$(".close-menu").click(HideMobileMenu);

	function ShowMobileMenu() {
		$(".main-menu").toggleClass("active");
		$("html").toggleClass("no-scroll");
		//$("body").toggleClass("pushed-right");
		//ShowMobileMenu.preventDefault();
	}

	function HideMobileMenu() {
		$(".main-menu").toggleClass("active");
		$("html").toggleClass("no-scroll");
		//$("body").toggleClass("pushed-right");
		//HideMobileMenu.preventDefault();
	}

	$(document).ready(function() {
		$(".content").slice(0, 2).show();
		$("#loadMore").on("click", function(e) {
			e.preventDefault();
			$(".content:hidden").slice(0, 2).slideDown();
			if ($(".content:hidden").length == 0) {
				$("#loadMore").text("").addClass("noContent");
			}
		});

	})

	$.stickToMe({
		layer: '#stickLayer'
	});
	$('.Sign_Up').load('https://travelzoo.bestonlineholidays.co.uk/welcome/reusablesubscribe');
</script>	</section>

</body>

</html>