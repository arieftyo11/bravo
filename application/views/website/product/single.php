			<!-- START #page-header -->
			<div id="header-banner">
				<div class="banner-overlay">
					<div class="container">
						<div class="row">
						<?php foreach ($data_article_detail as $row):?>
							<section class="col-md-6">
								<h1 class="text-upper"><?php echo $row->judul; ?></h1>
						<?php endforeach;?>
							</section>
							
							<!-- breadcrumbs -->
							<section class="col-md-6">
								<ol class="breadcrumb">
									<li class="home"><a href="#">Home</a></li>
									<li><a href="#">Blog</a></li>
									<li class="active">Blog-Detail</li>
								</ol>
							</section>
						</div>
					</div>
				</div>
			</div>
			<!-- END #page-header -->
			
			<!-- START .main-contents -->
			<?php foreach ($data_article_detail as $row):
								$tanggal = $row->tanggal;
								$format = date('d-m-Y', strtotime($tanggal ));
			?>
			<div class="main-contents">
				<div class="container">
					<div class="row">
						<!-- START #page -->
						<div id="page" class="col-md-8">
							<!-- START .post-data -->
							<div class="post-data">
								<div class="plan-image1">
									<img class="img-responsive" src="<?=base_url('uploads/foto_berita/'.$row->gambar).'';?>" alt="Vancouver, BC"/>
								</div>
								
								<ul class="featured-btm single-ft-btm list-unstyled box-shadow1">
									<li class="author-img"><img class="img-circle img-wt-border" width="100px" src="<?=base_url('assets/asset/img/author-image1.jpg');?>" alt="Admin" /></li>
									<li class="post-author"><a class="text-upper" href="#">Admin</a></li>
									<li class="post-date"><a class="text-upper" href="#"><?php echo $format;?></a></li>
									<li class="post-category"><a class="text-upper" href="#">Blog</a>, <a class="text-upper" href="#">News</a></li>
									<li>
									<!-- Sharingbutton Facebook -->
									<a class="resp-sharing-button__link" href="https://facebook.com/sharer/sharer.php?u=<?php echo urlencode("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");?>" target="_blank" aria-label="Facebook">
									  <div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--medium"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solidcircle">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 0C5.38 0 0 5.38 0 12s5.38 12 12 12 12-5.38 12-12S18.62 0 12 0zm3.6 11.5h-2.1v7h-3v-7h-2v-2h2V8.34c0-1.1.35-2.82 2.65-2.82h2.35v2.3h-1.4c-.25 0-.6.13-.6.66V9.5h2.34l-.24 2z"/></svg></div>Facebook</div>
									</a>
									
							
									<a class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?text=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;url=<?php echo urlencode("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");?>" target="_blank" aria-label="Twitter">
									 <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--medium"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solidcircle">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 0C5.38 0 0 5.38 0 12s5.38 12 12 12 12-5.38 12-12S18.62 0 12 0zm5.26 9.38v.34c0 3.48-2.64 7.5-7.48 7.5-1.48 0-2.87-.44-4.03-1.2 1.37.17 2.77-.2 3.9-1.08-1.16-.02-2.13-.78-2.46-1.83.38.1.8.07 1.17-.03-1.2-.24-2.1-1.3-2.1-2.58v-.05c.35.2.75.32 1.18.33-.7-.47-1.17-1.28-1.17-2.2 0-.47.13-.92.36-1.3C7.94 8.85 9.88 9.9 12.06 10c-.04-.2-.06-.4-.06-.6 0-1.46 1.18-2.63 2.63-2.63.76 0 1.44.3 1.92.82.6-.12 1.95-.27 1.95-.27-.35.53-.72 1.66-1.24 2.04z"/></svg></div>Twitter</div>
									</a>
								
									<a class="resp-sharing-button__link" href="https://plus.google.com/share?url=<?php echo urlencode("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");?>" target="_blank" aria-label="Google+">
									  <div class="resp-sharing-button resp-sharing-button--google resp-sharing-button--medium"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solidcircle">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12.65 8.6c-.02-.66-.3-1.3-.8-1.8S10.67 6 9.98 6c-.63 0-1.2.25-1.64.68-.45.44-.68 1.05-.66 1.7.02.68.3 1.32.8 1.8.96.97 2.6 1.04 3.5.14.45-.45.7-1.05.67-1.7zm-2.5 5.63c-2.14 0-3.96.95-3.96 2.1 0 1.12 1.8 2.08 3.94 2.08s3.98-.93 3.98-2.06c0-1.14-1.82-2.1-3.98-2.1z"/><path d="M12 0C5.38 0 0 5.38 0 12s5.38 12 12 12 12-5.38 12-12S18.62 0 12 0zm-1.84 19.4c-2.8 0-4.97-1.35-4.97-3.08s2.15-3.1 4.94-3.1c.84 0 1.6.14 2.28.36-.57-.4-1.25-.86-1.3-1.7-.26.06-.52.1-.8.1-.95 0-1.87-.38-2.57-1.08-.67-.68-1.06-1.55-1.1-2.48-.02-.94.32-1.8.96-2.45.65-.63 1.5-.93 2.4-.92V5h3.95v1h-1.53l.12.1c.67.67 1.06 1.55 1.1 2.48.02.93-.32 1.8-.97 2.45-.16.15-.33.3-.5.4-.2.6.05.8.83 1.33.9.6 2.1 1.42 2.1 3.56 0 1.73-2.17 3.1-4.96 3.1zM20 10h-2v2h-1v-2h-2V9h2V7h1v2h2v1z"/></svg></div>Google+</div>
									</a>
								
									</li>
									
								</ul>
							</div>
							<!-- END .post-data -->
							
							<!-- START .post-content -->
							<article class="post-content">
								<p><?php echo $row->isi_berita;?></p>
							</article>
							<!-- END .post-content -->
									<?php endforeach;?>
									</br>
							<!-- END .about-author -->
							<section id="commentForm">
								<h2 class="ft-heading text-upper">Leave Us a Reply</h2>
								<form action="<?php echo site_url('Article_Web/add_coment/'.$row->id_berita).''?>" method="post">
									<fieldset>
										<ul class="formFields list-unstyled">
											<li class="row">
												<div class="col-md-12">
													<label>Message <span class="required small">(Required)</span></label>
													<textarea class="form-control" name="isi" value=""></textarea>
												</div>
											</li>
											<li class="row">
												<div class="col-md-12">
													<input type="submit" class="btn btn-primary btn-lg text-upper" name="submit" value="Submit" />
													<span class="required small">*Your email will never published.</span>
												</div>
											</li>
										</ul>
									</fieldset>
								</form>
							</section>
							
							<!-- START #comments -->
							<div id="comments" class="gray box-shadow1">
							<?php foreach ($data_total as $row):?>
								<h3 class="text-upper">Comments (<?php echo $row->total; ?>)</h3>
								<?php endforeach;?>
								<ol class="comments-list list-unstyled">
									<li>
									
									<?php foreach ($data_user as $row1):?>
										<div class="comment-body">
											<span class="commenter-image">
												<img src="img/author-img.jpg" alt="Comment Author" />
											</span>
											<div class="comment-data">
												
												<span class="commenter-name"><strong><?php echo $row1->full_name; ?></strong></span>
												
												<span class="comment-date"><?php echo $row1->created; ?></span>
												<a class="comment-reply" href="#">Reply</a>
											</div>
											<div class="comment-text">
												<p><?php echo $row1->isi; ?></p>
											</div>
										</div>
										<?php endforeach;?>
										
									</li>
								</ol>
							</div>
							<!-- END #comments -->
							
						</div>
						<!-- END #page -->
						
						
						
						<!-- START #sidebar -->
						<aside id="sidebar" class="col-md-4">
						
						<div class="sidebar-widget">
								<!-- Sidebar Newsletter -->
								<div class="styled-box gray">
									<h3 class="text-upper">Find Article</h3>
									<form action="<?php echo site_url('article_web/search_keyword');?>" method="post">
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
									<li><a href="#recent-comments" data-toggle="tab">Comments</a></li>
								</ul>
								<!-- END TABS -->
								
								<!-- START TAB CONTENT -->
								<div class="tab-content gray box-shadow1 clearfix marb30">
									<!-- START TAB 1 -->
									<div class="tab-pane active" id="popular-posts">
										<ul class="rc-posts-list list-unstyled">
										<?php foreach ($data_article_popular as $row):?>
											<li>
												<span class="rc-post-image">
													<img class="img-responsive" src="<?=base_url('uploads/foto_berita/'.$row->gambar).'';?>" alt="Recent Post 2" />
												</span>
												<h5><a href="<?php echo base_url();?>article_web/detail_article/<?php echo $row->id_berita;?>"><?=substr(strip_tags($row->judul),0,20).".."?></a></h5>
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
												<h5><a href="<?php echo base_url();?>article_web/detail_article/<?php echo $row->id_berita;?>"><?=substr(strip_tags($row->judul),0,20).".."?></a></h5>
												<span class="rc-post-date small"><?php echo $row->tanggal;?></span>
											</li>
										<?php endforeach;?>
										</ul>
									</div>
									<!-- END TAB 2 -->
									
									<!-- START TAB 3 -->
									<div class="tab-pane" id="recent-comments">
										<div class="inside-pane">
											<p>Amet turpis tristique, nec in aliquet dis amet, proin egestas in tempor, cras et dapibus, lectus pellentesque enim odio elementum eu tincidunt diam a et. Dapibus sed cum, aliquam cras egestas enim elit in mattis? Scelerisque, ultrices mid! Lorem. Scelerisque? Pid cras, mattis vel, porta, quis! Porttitor turpis cras, odio ultricies parturient pulvinar tempor.</p>
											<p>eu turpis enim dapibus diam tristique cursus egestas quis phasellus montes! Parturient porta purus quis scelerisque? Vel proin, ac odio cras penatibus magnis non? Aliquam elementum, dis? Elementum ac.</p>
										</div>
									</div>
									<!-- END TAB 3 -->
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
										<div id="fb-widget"></div>
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
					<!-- END .row -->
				</div>
			</div>
			<!-- END .main-contents -->
			
