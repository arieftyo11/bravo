<!-- START #page-header -->
			<div id="header-banner">
				<div class="banner-overlay">
					<div class="container">
						<div class="row">
							<section class="col-sm-6">
								<h1 class="text-upper">Sign In</h1>
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
							<!-- START #contactForm -->
							<section id="signin-form">
								<h2 class="ft-heading text-upper">Sign In</h2>
								<?php echo form_open('Register/login'); ?>
									<fieldset>
										<ul class="formFields list-unstyled">
											<li class="row">
												<div class="col-md-6">
													<label>Email <span class="required small">(Required)</span></label>
													<input type="text" class="form-control" name="email" value="<?php echo set_value('email') ?>" />
												</div>
												<div class="col-md-6">
													<label>Password <span class="required small">(Required)</span></label>
													<input type="password" class="form-control" name="password" value="" />
												</div>
											</li>
											<li class="row">
												<div class="col-md-12">
													<input type="submit" class="btn btn-primary btn-lg text-upper" name="submit" value="signin" />
													<span class="required small">*Your email will never published.</span>
												</div>
											</li>
										</ul>
									</fieldset>
								<?php echo form_close(); ?>
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
										<a href="#">
											<span class="sc-count text-center">28,096</span>
											<span class="sc-text text-center">fans &amp; likes</span>
										</a>
									</li>
									<li class="twitter">
										<a href="#">
											<span class="sc-count text-center">8,096</span>
											<span class="sc-text text-center">Followers</span>
										</a>
									</li>
									<li class="rss">
										<a href="#">
											<span class="sc-count text-center">12,096</span>
											<span class="sc-text text-center">Subscribers</span>
										</a>
									</li>
								</ul>
							</div>
						</aside>
						<!-- END #sidebar -->
					</div>
					<!-- END .row -->
				</div>
			</div>
			<!-- END .main-contents -->
