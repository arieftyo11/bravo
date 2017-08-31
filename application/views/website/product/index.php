			<!-- START #main-slider -->
			<div id="main-slider">
				<div id="content-slider">
					<ul>
						<!-- START Slide 1 -->
						<li data-transition="fade" data-slotamount="5" data-masterspeed="700">
							<img src="<?=base_url('assets/asset/img/slide-image-1.jpg');?>" alt="Slider Image 1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" />
							
							<!-- LAYER NR. 1 -->
							<div class="caption caption-yellow sft stt headline text-upper"
								data-x="20"
								data-y="150"
								data-speed="600"
								data-start="2000"
								data-easing="Power3.easeOut"
								data-endspeed="400"
								data-endeasing="Power4.easeIn"
								data-captionhidden="off"
								style="z-index:6;font-size:18px;">Starting From 1200 $ Only
							</div>
							
							<!-- LAYER NR. 2 -->
							<div class="caption caption-white sfr stl slider-heading text-upper"
								data-x="20"
								data-y="185"
								data-speed="1000"
								data-start="1800"
								data-easing="Power2.easeOut"
								data-endspeed="600"
								data-endeasing="Power3.easeIn"
								data-captionhidden="off"
								style="z-index:6;font-size:48px; ">Luxury Journeys
							</div>
							
							<!-- LAYER NR. 3 -->
							<div class="caption caption-black sfb stb headline text-upper"
								data-x="20"
								data-y="263"
								data-speed="600"
								data-start="1500"
								data-easing="Power4.easeOut"
								data-endspeed="500"
								data-endeasing="Power1.easeIn"
								data-captionhidden="off"
								style="z-index:6">Crafting individual and unique itineraries to every corner of Japan.<br />
								Peruse the possibilities here.
							</div>
						</li>
						<!-- END Slide 1 -->
						
						<!-- START Slide 2 -->
						<li data-transition="fade" data-slotamount="7" data-masterspeed="1000">
							<img src="<?=base_url('assets/asset/img/slide-image-2.jpg');?>" alt="Slider Image 2"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" />
							
							<!-- LAYER NR. 1 -->
							<div class="caption caption-yellow sfl str headline text-upper"
								data-x="20"
								data-y="150"
								data-speed="600"
								data-start="2000"
								data-easing="Bounce.easeInOut"
								data-endspeed="400"
								data-endeasing="Bounce.easeOut"
								data-captionhidden="off"
								style="z-index:6;font-size:18px;">Starting From 1200 $ Only
							</div>
							
							<!-- LAYER NR. 2 -->
							<div class="caption caption-white sft stb slider-heading text-upper"
								data-x="20"
								data-y="185"
								data-speed="500"
								data-start="800"
								data-easing="Expo.easeIn"
								data-endspeed="600"
								data-endeasing="Expo.easeInOut"
								data-captionhidden="off"
								style="z-index:6;font-size:48px; ">Luxury Journeys
							</div>
							
							<!-- LAYER NR. 3 -->
							<div class="caption caption-black sfr stl headline text-upper"
								data-x="20"
								data-y="263"
								data-speed="600"
								data-start="1500"
								data-easing="Power0.easeOut"
								data-endspeed="500"
								data-endeasing="Back.easeOut"
								data-captionhidden="off"
								style="z-index:6">Crafting individual and unique itineraries to every corner of Japan.<br />
								Peruse the possibilities here.
							</div>
						</li>
						
						<!-- START Slide 3 -->
						<li data-transition="fade" data-slotamount="6" data-masterspeed="800">
							<img src="<?=base_url('assets/asset/img/slide-image-3.jpg');?>" alt="Slider Image 3"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" />
							
							<!-- LAYER NR. 1 -->
							<div class="caption caption-yellow sft stt headline text-upper"
								data-x="20"
								data-y="150"
								data-speed="600"
								data-start="2000"
								data-easing="Power3.easeOut"
								data-endspeed="400"
								data-endeasing="Power4.easeIn"
								data-captionhidden="off"
								style="z-index:6;font-size:18px;">Starting From 1200 $ Only
							</div>
							
							<!-- LAYER NR. 2 -->
							<div class="caption caption-white sfr stl slider-heading text-upper"
								data-x="20"
								data-y="185"
								data-speed="1000"
								data-start="1800"
								data-easing="Power2.easeOut"
								data-endspeed="600"
								data-endeasing="Power3.easeIn"
								data-captionhidden="off"
								style="z-index:6;font-size:48px; ">Luxury Journeys
							</div>
							
							<!-- LAYER NR. 3 -->
							<div class="caption caption-black sfb stb headline text-upper"
								data-x="20"
								data-y="263"
								data-speed="600"
								data-start="1500"
								data-easing="Power4.easeOut"
								data-endspeed="500"
								data-endeasing="Power1.easeIn"
								data-captionhidden="off"
								style="z-index:6">Crafting individual and unique itineraries to every corner of Japan.<br />
								Peruse the possibilities here.
							</div>
						</li>
						<!-- END Slide 3 -->
					</ul>
				</div>
				<div id="slider-overlay"></div>
			</div>
			<!-- END #main-slider -->
			

			<!-- START .main-contents -->
			<div class="main-contents">
				<div class="container" id="home-page">

					<!-- START .tour-plan -->
					<form action="<?php echo site_url('Promo_Web/search_deals');?>" method="post" class="plan-tour">
						<div class="plan-banner"><span>PLAN YOUR</span><h4>DREAM <span>TOUR</span></h4></div>
						<div class="top-fields">
							<div class="input-field col-md-6">
							<input type="text" name="keyword" placeholder="Where to go?" />
							</div>
							<div class="input-field col-md-6 schedule">
								<input type="date" name="date_from" value="" placeholder="From When?" data-date="11-12-2012" data-date-format="dd-mm-yyyy" />
								<i class="calendar-icon"></i>
								<input type="date" name="date_to" value="" placeholder="Till When?" data-date="12-12-2012" data-date-format="dd-mm-yyyy" />
							</div>
						</div>
						<div class="bottom-fields">
							<div class="input-field select col-md-3">
								<label>With Adults</label>
								<select id="adults">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
								</select>
							</div>
							<div class="input-field select col-md-3">
								<label>With Kids</label>
								<select id="kids">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
								</select>
							</div>
							<div class="submit-btn col-md-6">
								<input type="submit" name="submit" value="Search" />
							</div>
						</div>
					</form>
					<!-- END .tour-plan -->
					
					<h2 class="ft-heading text-upper">Latest Destinations</h2>

					<div class="carousel">
						<ul class="slides">		
								<div class="row">
								<?php
									foreach($data_promo as $row){
									?> 
									<div class="col-md-3">
										<div class="ft-item">
											<span class="ft-image">
												<img src="<?=base_url('uploads/img_promo/'.$row->gambar).'';?>" alt="featured Scroller" />
											</span>
											<div class="ft-data">
												<a class="ft-hotel text-upper" href="#"><?php echo $row->kategori; ?></a>
												<a class="ft-plane text-upper" href="#"><?php echo $row->durasi; ?></a>
												<a class="ft-tea text-upper" href="#"><?php echo $row->keberangkatan; ?></a>
											</div>
											<div class="ft-foot">
												<h4 class="ft-title text-upper"><a href="<?php echo base_url();?>Promo_Web/detail_promo/<?php echo $row->id_promo;?>"><?php echo $row->judul; ?></a></h4>
												<span class="ft-offer text-upper"><?php echo $row->harga; ?> $</span>
											</div>
											<div class="ft-foot-ex">
												<span class="ft-date text-upper alignleft"><?php echo $row->keberangkatan; ?></span>
												<span class="ft-temp alignright">17&#730;c</span>
											</div>
										</div>			
									</div>
									<?php } ?>
								</div>
								
						</ul>  	
					</div>

				</div>
			</div>
			<!-- END .main-contents -->
			
			<!-- START .main-contents .bom-contents -->
			<div class="main-contents bom-contents">
				<div class="container">
					<h2 class="text-center text-upper">Bravo Travel</h2>
					<p class="headline text-center">Wh Choose Us</p>
					
					<div class="row">
						<!-- START featured destination 1 -->
						<section class="col-md-3 fd-column">
							<div class="featured-dest">
								<span class="fd-image">
									<img class="img-circle" src="<?=base_url('assets/asset/img/featured-image-1.jpg');?>" alt="Featured Destination" />
								</span>
								<h3 class="text-center text-upper">Kenyamanan Servis</h3>
								<p class="text-center">Kami bertanggung jawab untuk mendukung kebutuhan perjalanan Anda mulai pada saat reservasi hingga kembali ke rumah! Silahkan bertanya dan konsultasi, staff kami akan melayani Anda.</p>
					
							</div>
						</section>
						<!-- END featured destination 1 -->
						
						<!-- START featured destination 2 -->
						<section class="col-md-3 fd-column">
							<div class="featured-dest">
								<span class="fd-image">
									<img class="img-circle" src="<?=base_url('assets/asset/img/featured-image-2.jpg');?>" alt="Featured Destination" />
								</span>
								<h3 class="text-center text-upper">Global Network</h3>
								<p class="text-center">Bravo Travel memiliki keuntungan dengan jaringan global yang mendukung perjalanan Anda. Dengan sistem terbaik melayani mulai dari reservasi hingga Anda kembali!</p>
								
							</div>
						</section>
						<!-- END featured destination 2 -->
						
						<!-- START featured destination 3 -->
						<section class="col-md-3 fd-column">
							<div class="featured-dest">
								<span class="fd-image">
									<img class="img-circle" src="<?=base_url('assets/asset/img/featured-image-3.jpg');?>" alt="Featured Destination" />
								</span>
								<h3 class="text-center text-upper">Harga Terbaik</h3>
								<p class="text-center">Cabang Bravo Travel di luar negeri menawarkan harga terbaik untuk hotel dimanapun dan kapanpun Anda butuhkan dan dengan kualitas terbaik yang tidak anda bayangkan.</p>
								
							</div>
						</section>
						<!-- END featured destination 3 -->
						
						<!-- START featured destination 4 -->
						<section class="col-md-3 fd-column">
							<div class="featured-dest">
								<span class="fd-image">
									<img class="img-circle" src="<?=base_url('assets/asset/img/featured-image-4.jpg');?>" alt="Featured Destination" />
								</span>
								<h3 class="text-center text-upper">Individual Tour</h3>
								<p class="text-center">Kami menyediakan berbagai macam tour untuk Anda. Kami dapat menyusun perjalanan Anda. Segala prosedur untuk pembuatan visa dapat Anda serahkan kepada kami!</p>
								
							</div>
						</section>
						<!-- END featured destination 4 -->
					</div>
				</div>
			</div>
			<!-- END .main-contents .bom-contents -->
