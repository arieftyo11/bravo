<!-- START #page-header -->
			<div id="header-banner">
				<div class="banner-overlay">
					<div class="container">
						<div class="row">
							<section class="col-sm-6">
								<h1 class="text-upper">Contact</h1>
							</section>
							
							<!-- breadcrumbs -->
							<section class="col-sm-6">
								<ol class="breadcrumb">
									<li class="home"><a href="#">Home</a></li>
									<li class="active">Contact Us</li>
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
						<!-- START #page -->
						<div id="page" class="col-md-8">
							<!-- GOOGLE MAP -->
							<section id="contactMap">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3334.936235906148!2d106.95006950839665!3d-6.2729484047508945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d0cd927d77b%3A0x5f16dd8c4358e716!2sJl.+Dr.+Ratna%2C+Jatikramat%2C+Pondokgede%2C+Kota+Bks%2C+Jawa+Barat+17412!5e0!3m2!1sen!2sid!4v1482635999837" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>							
							</section>
							
							<!-- START #contactForm -->
							<section id="contactForm">
								<h2 class="ft-heading text-upper">If You need further details - Please write us</h2>
								<form action="<?php echo site_url('Contact_Web/simpan_contact_us')?>" method="post" enctype="multipart/form-data">
									<fieldset>
										<ul class="formFields list-unstyled">
											<li class="row">
												<div class="col-md-6">
													<label>Name <span class="required small">(Required)</span></label>
													<input type="text" class="form-control" name="nama" value="" />
												</div>
												<div class="col-md-6">
													<label>Email <span class="required small">(Required)</span></label>
													<input type="text" class="form-control" name="email" value="" />
												</div>
											</li>
											<li class="row">
												<div class="col-md-12">
													<label>Subject <span class="required small">(Required)</span></label>
													<input type="text" class="form-control" name="subjek" value="" />
												</div>
											</li>
											<li class="row">
												<div class="col-md-12">
													<label>Message <span class="required small">(Required)</span></label>
													<textarea class="form-control" name="isi"></textarea>
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
							<!-- END #contactForm -->
						</div>
						<!-- END #page -->
						
						<!-- START #sidebar -->
						<aside id="sidebar" class="col-md-4">
							<div class="sidebar-widget">
								<!-- Sidebar Social Icons -->
								<ul class="sidebar-social list-unstyled">
									<li class="facebook">
										<a target="_blank" rel="external" title="Share on Facebook" href=" http://www.facebook.com/share.php?u=<?php echo base_url();?>" height="18" width="18" alt="Share On Facebook">
										<span class="sc-count text-center">Share</span>
										<span class="sc-text text-center">On Facebook</span>
										</a>
									</li>
									<li class="twitter">
										<a target="_blank" rel="external" title="Share on Facebook" href="https://twitter.com/intent/tweet/?text=<?php echo base_url();?>" height="18" width="18" alt="Share On Twitter">
											<span class="sc-count text-center">Share</span>
											<span class="sc-text text-center">On Twitter</span>
										</a>
									</li>
									<li class="rss">
										<a target="_blank" rel="external" title="Share on Facebook" href="https://plus.google.com/share?url=<?php echo base_url();?>" height="18" width="18" alt="Share On G+">
											<span class="sc-count text-center">Share</span>
											<span class="sc-text text-center">On G+</span>
										</a>
									</li>
								</ul>
							</div>
							
							<div class="sidebar-widget">
								<!-- Sidebar Contact info -->
								<div class="styled-box gray">
									<h3 class="text-upper">Contact Us</h3>
									<p>We're very approachable and would love to speak to you. Feel free to call, send us an email, Tweet us or simply complete the enquiry form.</p>
									<ul class="contact-info list-unstyled">
										<li class="ct-phone">+6221 - 849 00 380</li>
										<li class="ct-phone">+62896 3996 8367</li>
										<li class="ct-email">bravonusantara.tnt@gmail.com</li>
										</br>
										<li>Pondok Jati Indah (B1/10)</li>
										<li>Jl. Dr Ratna, Jatiasih, Pondok Gede, Jawa Barat</li>
										<li>Indonesia 17421</li>
										
									</ul>
								</div>
							</div>
						</aside>
						<!-- END #sidebar -->
					</div>
					<!-- END .row -->
				</div>
			</div>
			<!-- END .main-contents -->
			
	