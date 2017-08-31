	
			<!-- START #page-header -->
			<div id="header-banner">
				<div class="banner-overlay">
				<?php
						foreach($data_promo_detail as $row){
						?> 
					<div class="container">
						<div class="row">
							<section class="col-sm-6">
								<h1 class="text-upper"><?php echo $row->judul;?></h1>
							</section>
							
							<!-- breadcrumbs -->
							<section class="col-sm-6">
								<ol class="breadcrumb">
									<li class="home"><a href="#">Home</a></li>
									<li><a href="#">Top Deals</a></li>
									<li class="active"><?php echo $row->judul;?></li>
								</ol>
							</section>
						</div>
					</div>
				<?php } ?>
				</div>
			</div>
			<!-- END #page-header -->
			
			<!-- START .main-contents -->
			<div class="main-contents">
				<div class="container">
					<!-- START #page -->
					<div id="page">
						<!-- START .tour-plans -->
						<?php
						foreach($data_promo_detail as $row){
                                                $tanggal = $row->keberangkatan;
                                                $tanggal2 = $row->kepulangan;
						$format = date('d-m-Y', strtotime($tanggal));
                                                $format2 = date('d-m-Y', strtotime($tanggal2));
						?> 
						<div class="tour-plans">
							<div class="plan-image1">
								<img class="img-responsive" src="<?=base_url('uploads/img_promo/'.$row->gambar).'';?>" alt="Vancouver, BC" />
								<div class="offer-box">
									<div class="offer-top">
										<span class="ft-temp alignright">19&#730;c</span>
										<span class="featured-cr text-upper"><?php echo $row->negara;?></span>
										<h2 class="featured-cy text-upper"><?php echo $row->kota;?></h2>
									</div>
									
									<div class="offer-bottom">
										<span class="featured-stf">Starting From </span>
										<span class="featured-spe"><?php echo $row->harga;?></span>
									</div>
								</div>
							</div>
							
							<div class="featured-btm box-shadow1">
								<a class="ft-hotel text-upper"><?php echo $row->durasi;?></a>
								<a class="ft-plane text-upper"><?php echo $format;?> until <?php echo $format2;?></a>
								<a class="ft-tea text-upper"><?php echo $row->kategori;?></a>
							</div>
							
							<h2 class="text-upper">Tour Information</h2>
							<p><?php echo $row->deskripsi;?></p>
						</div>
						
						<!-- END .tour-plans -->
						<div class="span3 no_margin_left">
                    <a href="<?php echo site_url('products/add_cart/' . $row['permalink']); ?>" class="btn btn-primary">Add to cart</a>
						</div>	
						<!-- START TABS -->
						<ul class="nav nav-tabs text-upper">
							<li class="active"><a href="#tourPlan" data-toggle="tab">Tour Plan</a></li>
							<li><a href="#flightSchedule" data-toggle="tab">Payment Method</a></li>
							<li><a href="#additionalInfo" data-toggle="tab">Additional Information</a></li>
						</ul>
						<!-- END TABS -->
						
						<!-- START TAB CONTENT -->
						<div class="tab-content gray box-shadow1 clearfix marb30">
							<!-- START TAB 1 -->
							<div class="tab-pane active" id="tourPlan">
								<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th>Day 1</th>
													<th>Day 2</th>
													<th>Day 3</th>
													<th>Day 4</th>
													<th>Day 5</th>
												</tr>
											</thead>
											<tbody>
												<tr class="dark-gray">
													<td><?php echo $row->harisatu;?></td>
													<td><?php echo $row->haridua;?></td>
													<td><?php echo $row->haritiga;?></td>
													<td><?php echo $row->hariempat;?></td>
													<td><?php echo $row->harilima;?>0</td>
												</tr>
											</tbody>
										</table>
									</div>
							</div>
							<!-- END TAB 1 -->
							<?php } ?>
							<!-- START TAB 2 -->
							<?php
							foreach($data_payment as $row){
							?> 
							<div class="tab-pane" id="flightSchedule">
								<div class="inside-pane">
								<p><?php echo $row->isi_halaman;?></p>
								</div>
							</div>
							<?php } ?>
							<!-- END TAB 2 -->
							<!-- START TAB 3 -->
							<?php
							foreach($data_additional as $row){
							?> 
							<div class="tab-pane" id="additionalInfo">
								<div class="inside-pane">
									<p><?php echo $row->isi_halaman;?></p>
								<div class="sidebar-widget">
								<!-- Sidebar Social Icons -->
								<ul class="sidebar-social list-unstyled">
									<li class="facebook">
										<a target="_blank" rel="external" title="Share on Facebook" href="https://facebook.com/sharer/sharer.php?u=<?php echo urlencode("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");?>" height="18" width="18" alt="Share On Facebook">
										<span class="sc-count text-center">Share</span>
										<span class="sc-text text-center">On Facebook</span>
										</a>
									</li>
									<li class="twitter">
										<a target="_blank" rel="external" title="Share on Twitter" href="https://twitter.com/intent/tweet/?url=<?php echo urlencode("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");?>" height="18" width="18" alt="Share On Twitter">
											<span class="sc-count text-center">Share</span>
											<span class="sc-text text-center">On Twitter</span>
										</a>
									</li>
									<li class="rss">
										<a target="_blank" rel="external" title="Share on Google+" href="https://plus.google.com/share?url=<?php echo urlencode("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");?>" height="18" width="18" alt="Share On Google+">
											<span class="sc-count text-center">Share</span>
											<span class="sc-text text-center">On G+</span>
										</a>
									</li>
								</ul>
							</div>
								</div>
							</div>
							<?php } ?>
							<!-- END TAB 3 -->
						</div>
						<!-- END TAB CONTENT -->
					</div>
					<!-- END #page -->
				</div>
			</div>
			<!-- END .main-contents -->		