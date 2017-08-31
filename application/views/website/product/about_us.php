	
			<!-- START #page-header -->
			<div id="header-banner">
				<div class="banner-overlay">
				<?php
						foreach($data_statis as $row){
						?> 
					<div class="container">
						<div class="row">
							<section class="col-sm-6">
								<h1 class="text-upper"><?php echo $row->judul	;?></h1>
							</section>
							
							<!-- breadcrumbs -->
							<section class="col-sm-6">
								<ol class="breadcrumb">
									<li class="home"><a href="#">Home</a></li>
									<li><a href="#">Top Deals</a></li>
									<li class="active">About Us</li>
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
						foreach($data_statis as $row){
						?> 
						<div class="tour-plans">
							<div class="plan-image1">
								<img class="img-responsive" src="<?=base_url('uploads/img_statis/'.$row->gambar).'';?>" alt="Vancouver, BC" />
							</div>
							
							<div class="featured-btm box-shadow1">
							</div>
							
							<h2 class="text-upper"><?php echo $row->judul	;?></h2>
							<p><?php echo $row->isi_halaman	;?></p>
						</div>
						<?php } ?>
						<!-- END .tour-plans -->
						
						<!-- START TABS -->
						<ul class="nav nav-tabs text-upper">
							<li class="active"><a href="#tourPlan" data-toggle="tab">Profil</a></li>
							<li><a href="#flightSchedule" data-toggle="tab">Vision</a></li>
							<li><a href="#additionalInfo" data-toggle="tab">Mission</a></li>
						</ul>
						<!-- END TABS -->
						
						<!-- START TAB CONTENT -->
						<div class="tab-content gray box-shadow1 clearfix marb30">
							<!-- START TAB 1 -->
							<?php
							foreach($data_profil as $row){
							?> 
							<div class="tab-pane active" id="tourPlan">
								<div class="inside-pane">
									<p><?php echo $row->isi_halaman;?></p>
								</div>
							</div>
							<?php } ?>
							<!-- END TAB 1 -->
							
							<!-- START TAB 2 -->
							<?php
							foreach($data_visi as $row){
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
							foreach($data_misi as $row){
							?> 
							<div class="tab-pane" id="additionalInfo">
								<div class="inside-pane">
									<p><?php echo $row->isi_halaman;?></p>
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