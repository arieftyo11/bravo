			
			<!-- START #page-header -->
			<div id="header-banner">
				<div class="banner-overlay">
					<div class="container">
						<div class="row">
							<section class="col-sm-6">
								<h1 class="text-upper">LATEST DEALS</h1>
							</section>
							
							<!-- breadcrumbs -->
							<section class="col-sm-6">
								<ol class="breadcrumb">
									<li class="home"><a href="#">Home</a></li>
									<li><a href="#">Top Deals</a></li>
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
					<?php
						if(isset($data_promo)){
						foreach($data_promo as $row){
                                                $tanggal = $row->keberangkatan;
						$format = date('d-m-Y', strtotime($tanggal ));
						?> 
						<div class="col-md-3">
							<div class="ft-item">
								<span class="ft-image">
									<img src="<?=base_url('uploads/img_promo/'.$row->gambar).'';?>" alt="featured Scroller" />
								</span>
								<div class="ft-data">
									<a class="ft-hotel text-upper" href="#"><?php echo $row->kota; ?></a>
									<a class="ft-plane text-upper" href="#"><?php echo $row->durasi; ?></a>
									<a class="ft-tea text-upper" href="#"><?php echo $row->kategori; ?></a>
								</div>
								<div class="ft-foot">
									<h4 class="ft-title text-upper"><a href="<?php echo base_url();?>Promo_Web/detail_promo/<?php echo $row->id_promo;?>"><?php echo $row->judul; ?></a></h4>
									<span class="ft-offer text-upper"><?php echo $row->harga; ?> $</span>
								</div>
								<div class="ft-foot-ex">
									<span class="ft-date text-upper alignleft"><?php echo $format; ?></span>
									
								</div>
							</div>		
						</div>
					<?php }
							}
							
							else if(isset($data_promo_result)){
								 foreach($data_promo_result as $row){
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
							
						<?php }
							}
						
						else {
							?>
						<div class="error-page">
						<div class="error-text">
							<span>the promo you requested</span>
							<span class="large-text">could not be found</span>
						</div>
						<a class="back-home" href="<?php echo site_url('Home')?>">BACK TO HOME</a>
					</div>
							
						<?php 
							}
						?>
							
						<div class="clearfix"></div>
					</div>
					<!-- START .pagination -->
					<?php 
						if(isset($data_promo)){     
						echo $halaman;
					}     
					?>
					<!-- END .pagination -->
				</div>
			</div>
			<!-- END .main-contents -->			