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
		
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/asset/bs3/css/bootstrap.css');?>" media="all" />
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/asset/css/styles.css');?>" media="all" />
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/asset/css/fancybox/jquery.fancybox.css');?>" media="all" />
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/asset/css/responsive.css');?>" media="all" />
	
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
									<span class="contact-email small">travel@bravo.com</span>
									<span class="contact-phone small">+1 125 496 0999</span>
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
									<span class="top-link small">Tell a Friend</span>
									<span class="top-link small">Bookmark</span>
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
	
			<!-- START #page-header -->
			<div id="header-banner">
				<div class="banner-overlay">
					<div class="container">
						<div class="row">
							<section class="col-sm-6">
								<h1 class="text-upper">Gallery</h1>
							</section>
							
							<!-- breadcrumbs -->
							<section class="col-sm-6">
								<ol class="breadcrumb">
									<li class="home"><a href="#">Home</a></li>
									<li class="active">Gallery</li>
								</ol>
							</section>
						</div>
					</div>
				</div>
			</div>
			<!-- END #page-header -->
			
			<!-- START .main-contents -->
			<div class="main-contents">
				<div class="container">
					<div class="row">
						<!-- START 4 columns gallery -->
						<ul class="gallery-list list-unstyled">
						<?php
						foreach($data_gallery as $row){
						?> 
							<li class="col-md-3">
								<div class="gal-item">
									<img class="img-responsive" src="<?=base_url('uploads/img_galeri/'.$row->gbr_gallery).'';?>" alt="Gallery Image" />
									<a class="item-overlay" href="<?=base_url('uploads/img_galeri/'.$row->gbr_gallery).'';?>">
										<img src="<?=base_url('assets/asset/img/icons/gal-zoom-icon.png');?>" alt="" />
										<span class="item-text text-center"><?php echo $row->jdl_gallery	;?></span>
									</a>
								</div>
							</li>
						<?php } ?>	
						</ul>
						<!-- END 4 columns gallery -->
					</div>
					<!-- END .row -->
					
					<!-- START .pagination -->
					<?php 
						if(isset($data_gallery)){     
						echo $halaman;
					}     
					?>
					
					<!-- END .pagination -->
				</div>
			</div>
			<!-- END .main-contents -->
			
		<footer>
				<!-- START #ft-footer -->
				<div id="ft-footer">
					<div class="footer-overlay">
						<div class="container">
							<div class="row">
								<!-- testimonials -->
								<section class="col-md-6">
									<h3>Bravo Travel</h3>
									<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Bravo Nusantara Tours and Travel hadir untuk melayani kebutuhan pelanggan akan jasa pariwisata yang senantiasa mengedepankan pelayanan yang maksimal kepada pelanggan.
									Bravo Tours menawarkan harga yang jauh lebih murah dibandingkan produk travel brand lain, dengan kualitas yang tetap diutamakan.
									</br></br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Bravo Tours, dengan taglinenya “Brave People are Traveller” menjadi Travel Agent yang dapat bersaing dibandingkan dengan travel lainnya. 
									Bravo Tours memiiki sifat sosial yang lebih mementingkan masyarakat kecil atau masyarakat menengah. Yang menjadi keunggulan dari Travel Agent ini adalah pelayanan kepada customer yang menjadi pusat perhatian.</p>
									<div class="tl-author">
								</section>
								
								<!-- twitter -->
								<section class="col-md-6">
									<h3>Bravo Travel Products</h3>
									<p>Tiket Pesawat & Reservasi Hotel Internasional/Domestik</p>
									<p>Tour Internasional/Domestik</p>
									<p>Kereta Api Domestik</p>
									<p>Railink Bandara Kualanamu - Medan</p>
									<p>Shuttle/Bus Jakarta - Bandung</p>
									<p>Visa/Paspor</p>
								</section>
							</div>
						</div>
					</div>
				</div>
				<!-- END #ft-footer -->
				
				<!-- START #ex-footer -->
				<div id="#ex-footer">
					<div class="container">
						<div class="row">
							<nav class="col-md-12">
								<ul class="footer-menu">
									<li><a href="#">Best Rate Guarntee</a></li>
									<li><a href="#">Careers</a></li>
									<li><a href="#">Hotel Directory</a></li>
									<li><a href="#">Website Terms of Use</a></li>
									<li><a href="#">Privacy Statement</a></li>
									<li><a href="#">Affiliates</a></li>
									<li class="last-item"><a href="#">Top Destinations</a></li>
								</ul>
							</nav>
							
							<div class="foot-boxs">
								<div class="foot-box col-md-4 text-right">
									<span>Stay Connected</span>
									<ul class="social-media footer-social">
										<li><a class="sm-yahoo" href="#"><span>Yahoo</span></a></li>
										<li><a class="sm-facebook" href="#"><span>Facebook</span></a></li>
										<li><a class="sm-rss" href="#"><span>RSS</span></a></li>
										<li><a class="sm-flickr" href="#"><span>Flicker</span></a></li>
										<li><a class="sm-windows" href="#"><span>Windows</span></a></li>
										<li><a class="sm-stumble" href="#"><span>Stumbleupon</span></a></li>
									</ul>
								</div>
								<div class="foot-box foot-box-md col-md-4">
									<span class="contact-email"> travel@bravo.com</span>
									<span class="contact-phone"> +1 125 496 0999</span>
								</div>
								<div class="foot-box col-md-4">
									<span class="">&copy; 2013 bravotravel. All Rights Reserved.</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END #ex-footer -->
			</footer>
			<!-- END footer -->
		</div>
		<!-- END #wrapper -->

		<div class="side-panel">
			<div class="colors">
				<h6>Color Schemes</h6>
				<a onclick="setActiveStyleSheet('color1'); return false;" class="color1"></a>
				<a onclick="setActiveStyleSheet('color2'); return false;" class="color2"></a>
				<a onclick="setActiveStyleSheet('color3'); return false;" class="color3"></a>
				<a onclick="setActiveStyleSheet('color4'); return false;" class="color4"></a>
			</div>
		</div>



		<!-- javascripts -->
			<script type="text/javascript" src="<?=base_url('assets/asset/js/modernizr.custom.17475.js');?>"></script>
			<script type="text/javascript" src="<?=base_url('assets/asset/js/jquery.min.js');?>"></script>
			<script type="text/javascript" src="<?=base_url('assets/asset/bs3/js/bootstrap.min.js');?>"></script>
			<script src="<?=base_url('assets/asset/js/jquery.easing.js');?>"></script>
			<script src="<?=base_url('assets/asset/js/jquery.fancybox.js');?>"></script>
			<script src="<?=base_url('assets/asset/js/script.js');?>"></script>
			<script src="<?=base_url('assets/asset/js/styleswitcher.js');?>"></script>
		
		
			
			<script type="text/javascript">
		$(document).ready(function() {
			
			// initilize fancybox
			$(".item-overlay").fancybox({
				overlayShow: true,
				overlayOpacity: .7,
				overlayColor: "#000000", // background overlay color
				transitionIn: "fade", // transition type 'elastic', 'fade' or 'none'
				transitionOut: "fade",
				easingIn: "easeInCubic", // Easing used for elastic animations
				easingOut: "easeOutCubic",
				cyclic: true
			});
		});
		</script>
		
		<!-- Analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-42761673-1', 'extracoding.com');
		  ga('send', 'pageview');
		</script>

	</body>
</html>
		