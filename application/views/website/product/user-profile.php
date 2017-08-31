
			
			<!-- START #page-header -->
			<div id="header-banner">
				<div class="banner-overlay">
					<div class="container">
						<div class="row">
							<section class="col-sm-6">
								<h1 class="text-upper">User Profile</h1>
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
						<div id="page" class="col-md-12">
							<div class="user-profile">
								<!-- Sidebar recent popular posts -->
								<!-- START TABS -->
								<ul class="nav nav-tabs text-upper">
									<li class="active"><a href="#userinfo" data-toggle="tab">User Info</a></li>
									<li><a href="#booking" data-toggle="tab">Booking</a></li>
								</ul>
								<!-- END TABS -->
								
								<!-- START TAB CONTENT -->
								<div class="tab-content clearfix marb30">
									<!-- START TAB 1 -->
									<div class="tab-pane active mart20" id="userinfo">
										<form class="form-horizontal" method="post" action="<?php echo site_url('Register/profile'); ?>">
											<fieldset>
												<ul class="formFields list-unstyled">
													<li class="row">
														<div class="col-md-6">
															<label>Full Name <span class="required small">(Required)</span></label>
															<input type="text" class="form-control" name="full_name" value="<?php echo set_value('full_name', isset($user['full_name']) ? $user['full_name'] : ''); ?>" />
														</div>
														<div class="col-md-6">
															<label>Email <span class="required small">(Required)</span></label>
															<input type="text" class="form-control" name="email" value="<?php echo set_value('email', isset($user['email']) ? $user['email'] : ''); ?>" />
														</div>
													</li>
													<li class="row">
														<div class="col-md-6">
															<label>Password <span class="required small">(Required)</span></label>
															<input type="password" class="form-control" name="password" value="" />
														</div>
														<div class="col-md-6">
															<label>Confirm Password <span class="required small">(Required)</span></label>
															<input type="text" class="form-control" name="confirm_password" value="" />
														</div>
													</li>
													<li class="row">
														<div class="col-md-6">
															<label>Phone<span class="required small">(Required)</span></label>
															<input type="text" class="form-control" name="phone" value="<?php echo set_value('phone', isset($user['phone']) ? $user['phone'] : ''); ?>" />
														</div>
														<div class="col-md-6">
															<label>Zip<span class="required small">(Required)</span></label>
															<input type="text" class="form-control" name="zip" value="<?php echo set_value('zip', isset($user['zip']) ? $user['zip'] : ''); ?>" />
														</div>
													</li>
													<li class="row">
														<div class="col-md-12">
															<label>Address <span class="required small">(Required)</span></label>
															  <textarea class="form-control" name="address"><?php echo set_value('address', isset($user['address']) ? $user['address'] : ''); ?></textarea>
														</div>
													</li>
													<li class="row">
														<div class="col-md-12">
															<input type="submit" class="btn btn-primary btn-lg text-upper" name="save" value="Save" />
															<span class="required small">*Your email will never published.</span>
														</div>
													</li>
												</ul>
											</fieldset>
										</form>
									</div>
									<!-- END TAB 1 -->
									
									<!-- START TAB 2 -->
									<div class="tab-pane" id="booking">
										<div class="booking gray clearfix box-shadow1">
											<div class="selected-deal">
												<h2 class="marb20">Selected Deal</h2>
												<div class="ft-item">
													<span class="ft-image">
														<img src="img/ft-img-1.jpg" alt="featured Scroller" />
													</span>
													<div class="ft-data">
														<a class="ft-hotel text-upper" href="#">Hotel</a>
														<a class="ft-plane text-upper" href="#">Air Ticket</a>
														<a class="ft-tea text-upper" href="#">Break Fast</a>
													</div>
													<div class="ft-foot">
														<h4 class="ft-title text-upper"><a href="#">Colosseum</a></h4>
														<span class="ft-offer text-upper">Starting From 250 $</span>
													</div>
													<div class="ft-foot-ex">
														<span class="ft-date text-upper alignleft">28 December 2013</span>
														<span class="ft-temp alignright">17&#730;c</span>
													</div>
												</div>
											</div>
											<div class="booking-status">
												<h2 class="marb20">Booking Status</h2>
												<p>Amet turpis tristique, nec in aliquet dis amet, proin egestas in tempor, cras et dapibus.</p>
												<span class="checkbox-container">
													<label><input type="radio" name="radio" class="styled"  checked="checked" /> First Choice</label>
													<label><input type="radio" name="radio" class="styled" /> Second Choice</label>
													<label><input type="radio" name="radio" class="styled" /> Third Choice</label>
												</span>
											</div>
											
										</div>
									</div>
									<!-- END TAB 2 -->
								</div>
								<!-- END TAB CONTENT -->
							</div>
						</div>
						<!-- END #page -->
						
						<!-- END #sidebar -->
					</div>
					<!-- END .row -->
				</div>
			</div>
			<!-- END .main-contents -->
