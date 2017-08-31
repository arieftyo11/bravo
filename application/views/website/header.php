<!DOCTYPE html>
<html lang="en" dir="ltr">

	<!-- START head -->
	<head>
		<!-- Site meta charset -->
		<meta charset="UTF-8">
		
		<!-- title -->
		<title>Bravo Travel</title>
		
		<!-- meta description -->
		<meta name="description" content="YOUR META DESCRIPTION GOES HERE" />
		
		<!-- meta keywords -->
		<meta name="keywords" content="YOUR META KEYWORDS GOES HERE" />
		
		<!-- meta viewport -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		
		<!-- favicon -->
		<link rel="icon" href="favicon.html" type="image/x-icon" />
		<link rel="shortcut icon" href="favicon.html" type="image/x-icon" />
		
		<!-- bootstrap 3 stylesheets -->
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/asset/bs3/css/bootstrap.css');?>" media="all" />
		<!-- template stylesheet -->
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/asset/css/styles.css');?>" media="all" />
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/asset/css/fancybox/jquery.fancybox.css');?>" media="all" />
		<link rel="stylesheet" href="<?=base_url('assets/asset/css/flexslider.css');?>" type="text/css" media="screen" />
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/asset/js/rs-plugin/css/settings.css');?>" media="all" />
		<!-- responsive stylesheet -->
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/asset/css/responsive.css');?>" media="all" />
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/asset/css/share.css');?>" media="all" />
		
		<!-- color scheme -->
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/asset/css/colors/color1.css');?>" title="color1" />
		<link rel="alternate stylesheet" type="text/css" href="<?=base_url('assets/asset/css/colors/color2.css');?>" title="color2" />
		<link rel="alternate stylesheet" type="text/css" href="<?=base_url('assets/asset/css/colors/color3.css');?>" title="color3" />
		<link rel="alternate stylesheet" type="text/css" href="<?=base_url('assets/asset/css/colors/color4.css');?>" title="color4" />

		<!-- Load Fonts via Google Fonts API -->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Karla:400,700,400italic,700italic" />

	</head>
	<!-- START body -->
	<body>
		<!-- START #wrapper -->
		<div id="wrapper">
			<!-- START header -->
			<header>
				<!-- START #top-header -->
				<div id="top-header">
					<div class="container">
						<div class="row top-row">
							<div class="col-md-6">
								<div class="left-part alignleft">
									<span class="contact-email small">bravonusantara.tnt@gmail.com</span>
									<span class="contact-phone small">+6221 - 849 00 380</span>
									<ul class="social-media header-social">
										<li><a class="sm-yahoo" href="#"><span>Yahoo</span></a></li>
										<li><a class="sm-facebook" href="#"><span>Facebook</span></a></li>
										<li><a class="sm-rss" href="#"><span>RSS</span></a></li>
										<li><a class="sm-flickr" href="#"><span>Flicker</span></a></li>
										<li><a class="sm-windows" href="#"><span>Windows</span></a></li>
										<li><a class="sm-stumble" href="#"><span>Stumbleupon</span></a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-6">
								<div class="right-part alignright">
									<form action="#" method="get">
										<fieldset class="alignright">
											<input type="text" name="s" class="search-input" value="Search..." onfocus="if (this.value == 'Search...') { this.value = ''; }" onblur="if (this.value == '') { this.value = 'Search...'; }" />
											<input type="submit" name="submit" class="search-submit" value="" />
										</fieldset>
									</form>
									
									<?php if ($this->session->userdata('id')): ?>
									
									<a href="<?php echo site_url('Register/logout')?>">
									<span class="top-link small">Logout</span>
									</a>
									<a href="<?php echo site_url('Orders/history')?>">
									<span class="top-link small">Order History</span>
									</a>
									<a href="<?php echo site_url('Register/profile')?>">
									<span class="top-link small">Profile</span>
									</a>
									
									
									<?php else: ?>
										<a href="<?php echo site_url('Register/login')?>">
										<span class="top-link small">Login</span>
										</a>
										<a href="<?php echo site_url('Register/register')?>">
										<span class="top-link small">Register</span>
										</a> 
									<?php endif; ?>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END #top-header -->
				
				<!-- START #main-header -->
				<div id="main-header">
					<div class="container">
						<div class="row">
							<div class="col-md-3">
								<a id="site-logo" href="<?php echo site_url('Home')?>">
									<br><img src="<?=base_url('assets/asset/img/bravo1.png');?>" alt="Bravo Travel" width="150px" />
								</a>
							</div>
							<div class="col-md-9">
								<nav class="main-nav">
									<span>MENU</span>
									<ul id="main-menu">
										<li><a href="<?php echo site_url('Home')?>" title="">HOME</a></li>
										<li><a href="<?php echo site_url('Article_Web')?>">BLOG</a></li>
										<li><a href="<?php echo site_url('Contact_Web')?>">CONTACT</a></li>
										<li><a href="<?php echo site_url('Galery_Web')?>">GALLERY</a></li>								
										<li><a href="<?php echo site_url('Promo_Web')?>" title="">DEALS</a></li>
										<li><a href="<?php echo site_url('Statis_Web')?>" title="">ABOUT US</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<!-- END #main-header -->
			</header>
			<!-- END header -->