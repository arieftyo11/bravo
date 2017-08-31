			<!-- START #page-header -->
			<div id="header-banner">
				<div class="banner-overlay">
					<div class="container">
						<div class="row">
							<section class="col-sm-6">
								<h1 class="text-upper">Blog</h1>
							</section>
							
							<!-- breadcrumbs -->
							<section class="col-sm-6">
								<ol class="breadcrumb">
									<li class="home"><a href="#">Home</a></li>
									<li><a href="#">Blog</a></li>
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
						<div class="col-md-8">
						<?php
						if(isset($data_article)){
						foreach($data_article as $row){
							$tanggal = $row->tanggal;
							$format = date('d-m-Y', strtotime($tanggal ));
						?> 
							<div class="col-md-6">
								<div class="post-data">
									<div class="plan-image">
										<a href="<?php echo base_url();?>Article_Web/detail_article/<?php echo $row->id_berita;?>"><img class="img-responsive" src="<?=base_url('uploads/foto_berita/'.$row->gambar).'';?>" /></a>
									</div>
									<ul class="featured-btm single-ft-btm list-unstyled box-shadow1">
										<li class="author-img"><img class="img-circle img-wt-border" width="60px" src="<?=base_url('assets/asset/img/author-image1.jpg');?>" alt="Admin" /></li>
										<li class="post-author"><a class="text-upper" href="#">Admin</a></li>
										<li class="post-date"><a class="text-upper" href="#"><?php echo $format;?></a></li>
									</ul>
									<div class="post-desc">
										<h4><a href="<?php echo base_url();?>Article_Web/detail_article/<?php echo $row->id_berita;?>" title="<?php echo $row->judul;?>"><?php echo $row->judul; ?></a></h4>
										<p><?=substr(strip_tags($row->isi_berita),0,230).".."?></p>
									</div>
								</div>
							</div>
							
							<?php }
							}
							
							else if(isset($data_article_result)){
								 foreach($data_article_result as $row){
									$tanggal = $row->tanggal;
									$format = date('d-m-Y', strtotime($tanggal ));
							?>
							
							<div class="col-md-6">
								<div class="post-data">
									<div class="plan-image">
										<img class="img-responsive" src="<?=base_url('uploads/foto_berita/'.$row->gambar).'';?>" alt="Vancouver, BC" />
									</div>
									<ul class="featured-btm single-ft-btm list-unstyled box-shadow1">
										
										<li class="post-author"><a class="text-upper" href="#">Admin</a></li>
										<li class="post-date"><a class="text-upper" href="#"><?php echo $format;?></a></li>
									</ul>
									<div class="post-desc">
										<h4><a href="<?php echo base_url();?>Article_Web/detail_article/<?php echo $row->id_berita;?>" title="<?php echo $row->judul;?>"><?php echo $row->judul; ?></a></h4>
										<p><?=substr(strip_tags($row->isi_berita),0,180).".."?></p>
									</div>
								</div>
							</div>
							
							<?php }
							} 
							
							else {
							?>
						<div class="error-page">
						<div class="error-text">
							<span>the Article you requested</span>
							<span class="large-text">could not be found</span>
						</div>
						<a class="back-home" href="<?php echo site_url('Home')?>">BACK TO HOME</a>
					</div>
							
						<?php 
							}
						?>
							
							<div class="clearfix"></div>
						</div>
						<!-- START #sidebar -->
						<aside id="sidebar" class="col-md-4">
						<div class="sidebar-widget">
								<!-- Sidebar Newsletter -->
								<div class="styled-box gray">
									<h3 class="text-upper">Find Article</h3>
									<form action="<?php echo site_url('Article_Web/search_keyword');?>" method="post">
										<label>Anything</label>
										<input type="text" name="keyword" class="form-control input-style1 marb20" value="Enter Keyword" onfocus="if (this.value == 'Enter Keyword') { this.value = ''; }" onblur="if (this.value == '') { this.value = 'Enter Keyword'; }" />
										<input type="submit" name="submit" class="btn btn-primary text-upper marb20" value="Search" />
									</form>
								</div>
							</div>
							<div class="sidebar-widget">
								<!-- Sidebar recent popular posts -->
								<!-- START TABS -->
								<ul class="nav nav-tabs text-upper">
									<li class="active"><a href="#popular-posts" data-toggle="tab">Popular</a></li>
									<li><a href="#recent-posts" data-toggle="tab">Recent</a></li>
								</ul>
								<!-- END TABS -->
								
								<!-- START TAB CONTENT -->
								<div class="tab-content gray box-shadow1 clearfix marb30">
									<!-- START TAB 1 -->
									<div class="tab-pane active" id="popular-posts">
										<ul class="rc-posts-list list-unstyled">
										<?php 
										foreach ($data_article_popular as $row):?>
											<li>
												<span class="rc-post-image">
													<img class="img-responsive" src="<?=base_url('uploads/foto_berita/'.$row->gambar).'';?>" alt="Recent Post 2" />
												</span>
												<h5><a href="<?php echo base_url();?>Article_Web/detail_article/<?php echo $row->id_berita;?>"><?=substr(strip_tags($row->judul),0,20).".."?></a></h5>
												<span class="rc-post-date small"><?php echo $row->tanggal;?></span>
											</li>
										<?php endforeach;?>
										</ul>
									</div>
									<!-- END TAB 1 -->
									
									<!-- START TAB 2 -->
									<div class="tab-pane" id="recent-posts">
										<ul class="rc-posts-list list-unstyled">
											<?php foreach ($data_article_recent as $row):?>
											<li>
												<span class="rc-post-image">
													<img class="img-responsive" src="<?=base_url('uploads/foto_berita/'.$row->gambar).'';?>" alt="Recent Post 2" />
												</span>
												<h5><a href="<?php echo base_url();?>Article_Web/detail_article/<?php echo $row->id_berita;?>"><?=substr(strip_tags($row->judul),0,20).".."?></a></h5>
												<span class="rc-post-date small"><?php echo $row->tanggal;?></span>
											</li>
										<?php endforeach;?>
										</ul>
									</div>
									<!-- END TAB 2 -->
								</div>
								<!-- END TAB CONTENT -->
							</div>
							
							<div class="sidebar-widget">
								<!-- Sidebar facebook widget -->
								<!-- START TABS -->
								<ul class="nav nav-tabs social-tabs text-upper">
									<li class="active"><a class="facebook-tab" href="#facebook-tab" data-toggle="tab">Facebook</a></li>
									<li><a class="twitter-tab" href="#twitter-tab" data-toggle="tab">Twitter</a></li>
									<li><a class="share-tab" href="#share-tab" data-toggle="tab">Follow Us</a></li>
								</ul>
								<!-- END TABS -->
								
								<!-- START TAB CONTENT -->
								<div class="tab-content clearfix marb30">
									<!-- START TAB 1 -->
									<div class="tab-pane active" id="facebook-tab">
										<div id="fb-widget">
											<iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FFacebookDevelopers&amp;width&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:290px;" allowTransparency="true"></iframe>
										</div>
									</div>
									<!-- END TAB 1 -->
									
									<!-- START TAB 2 -->
									<div class="tab-pane" id="twitter-tab">
										
									</div>
									<!-- END TAB 2 -->
									
									<!-- START TAB 3 -->
									<div class="tab-pane" id="share-tab">
										
									</div>
									<!-- END TAB 3 -->
								</div>
								<!-- END TAB CONTENT -->
							</div>
							
							<div class="sidebar-widget">
								<!-- Sidebar What We Do -->
								<h3 class="text-upper">What We Do ?</h3>
								<div class="panel-group" id="accordion">
									<div class="panel panel-default">
										<div class="panel-heading">
											<a class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
												About Us
											</a>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in">
											<div class="panel-body">
												Bravo Tours melayani reservasi hotel domestik maupun internasional, harga yang ditawarkan jauh lebih murah dibandingkan reservasi langsung di hotel. Selain reservasi hotel, pelayanan lain yang ditawarkan adalah reservasi tiket pesawat internasional dan domestik, reservasi tiket kereta api, paket wisata internasional dan domestik, railink bandara Kualanamu-Medan, Shuttle/Bus Jakarta-Bandung, pembuatan Visa dan Paspor.
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											<a class="panel-title collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
												Visi Bravo Tours
											</a>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse">
											<div class="panel-body">
												Bravo Tours, dengan taglinenya “Brave People are Traveller” menjadi Travel Agent yang dapat bersaing dibandingkan dengan travel lainnya. Bravo Tours memiiki sifat sosial yang lebih mementingkan masyarakat kecil atau masyarakat menengah.
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											<a class="panel-title collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
												Misi Bravo Tours
											</a>
										</div>
										<div id="collapseThree" class="panel-collapse collapse">
											<div class="panel-body">
												Yang menjadi keunggulan dari Travel Agent ini adalah pelayanan kepada customer yang menjadi pusat perhatian. Hal ini menjadikan perjalanan liburan Anda sebagai customer merasa terpuaskan oleh pelayanan Bravo Tours tanpa perlu mengeluarkan biaya yang banyak.
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="sidebar-widget">
								<!-- Sidebar About -->
								<h3 class="text-upper">About Bravo Tours</h3>
								<p>Bravo Nusantara Tours and Travel merupakan salah satu perusahan biro perjalanan wisata yang berlokasi di Pondok Jati Indah, Jl. Dr Ratna, Jatiasih, Pondok Gede. Bravo Tours, sebagai Travel Agent terbaru dan termodern di Bekasi, 
								hadir untuk melayani kebutuhan pelanggan akan jasa pariwisata yang senantiasa mengedepankan pelayanan yang maksimal kepada pelanggan.</p>
							</div>
							
							
						</aside>
						<!-- END #sidebar -->
					</div>
					<!-- START .pagination -->
					<?php 
						if(isset($data_article)){     
						echo $halaman;
					}     
					?>
					<!-- END .pagination -->
				</div>
			</div>
			<!-- END .main-contents -->
			