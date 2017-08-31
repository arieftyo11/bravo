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
									<span class="contact-email">bravonusantara.tnt@gmail.com</span>
									<span class="contact-phone">+6221 - 849 00 380</span>
								</div>
								<div class="foot-box col-md-4">
									<span class="">&copy; 2013 bravotours. All Rights Reserved.</span>
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
		<script type="text/javascript" src="<?=base_url('assets/asset/js/bootstrap-datepicker.js');?>"></script>
		<script src="<?=base_url('assets/asset/js/jquery.flexslider-min.js');?>"></script>
		<script src="<?=base_url('assets/asset/js/jquery.easing.js');?>"></script>
		<script src="<?=base_url('assets/asset/js/script.js');?>"></script>
		<script src="<?=base_url('assets/asset/js/jquery.minimalect.min.js');?>" type="text/javascript"></script>
		<script src="<?=base_url('assets/asset/js/jquery.fancybox.js');?>"></script>
		<script src="<?=base_url('assets/asset/js/styleswitcher.js');?>"></script>
		
		<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
		<script type="text/javascript" src="<?=base_url('assets/asset/js/rs-plugin/js/jquery.plugins.min.js');?>"></script>
		<script type="text/javascript" src="<?=base_url('assets/asset/js/rs-plugin/js/jquery.revolution.min.js');?>"></script>

		<!--[if lt IE 9]>
			<script type="text/javascript" src="js/html5shiv.js"></script>
		<![endif]-->

		
		<script type="text/javascript">
		$(document).ready(function() {
			// revolution slider
			revapi = $("#content-slider").revolution({
				delay: 15000,
				startwidth: 1170,
				startheight: 920,
				hideThumbs: 10,
				fullWidth: "on",
				fullScreen: "off",
				fullScreenOffsetContainer: "",
				navigationVOffset: 320
			});
			
			// initilize datepicker
			$(".date-picker").datepicker();
		});


	    $(window).load(function(){
	      $('.carousel').flexslider({
			animation: "fade",
			animationLoop: true,
			controlNav: false,	
		    maxItems: 1,
			pausePlay: false,
			mousewheel:true,
			start: function(slider){
			  $('body').removeClass('loading');
			}
	      });
	    });


		</script>
		<script>
		$(document).ready(function(){
			$("#adults").minimalect({ theme: "bubble", placeholder: "Select" });
			$("#kids").minimalect({ theme: "bubble", placeholder: "Select" });
		});
		</script><!--- SELECT BOX -->
		
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