<!-- START .main-contents -->
			<div class="main-contents">
				<div class="container">
					<!-- START #page -->
					<div id="page">
						
						<!-- START #contactForm -->
						<section id="signup-form">
							<h2 class="ft-heading text-upper">Account Detail</h2>
							<?php echo form_open('Register/register') ?>
								<fieldset>
								 <?php if ($this->session->flashdata('message')): ?>
									<?php echo $this->session->flashdata('message'); ?>
								<?php endif ?>
									<ul class="formFields list-unstyled">
										<li class="row">
											<div class="col-md-6">
												<label>Full Name <span class="required small">(Required)</span></label>
												<input type="text" class="form-control" name="full_name" value="<?php echo set_value('full_name'); ?>" />
											</div>
											<div class="col-md-6">
												<label>Email <span class="required small">(Required)</span></label>
												<input type="text" class="form-control" name="email" value="<?php echo set_value('email'); ?>" />
											</div>
										</li>
										
										<li class="row">
											<div class="col-md-6">
												<label>Password <span class="required small">(Required)</span></label>
												<input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>" />
											</div>
											<div class="col-md-6">
												<label>Confirm Password <span class="required small">(Required)</span></label>
												<input type="password" class="form-control" name="confirm_password" value="<?php echo set_value('confirm_password'); ?>" />
											</div>
										</li>
										
										<li class="row">
											<div class="col-md-6">
												<label>Phone <span class="required small">(Required)</span></label>
												<input type="text" class="form-control" name="phone" value="<?php echo set_value('phone'); ?>" />
											</div>
											<div class="col-md-6">
												<label>Zip<span class="required small">(Required)</span></label>
												<input type="text" class="form-control" name="zip" value="<?php echo set_value('zip'); ?>" />
											</div>
										</li>
										<li class="row">
											<div class="col-md-6">
												<label>Address <span class="required small">(Required)</span></label>
												<textarea class="form-control" name="address"><?php echo set_value('address'); ?></textarea>
											</div>
										</li>
										<li class="row">
											<div class="col-md-12">
												<input type="submit" class="btn btn-primary btn-lg text-upper" name="submit" value="Sign up" />
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
				</div>
			</div>
			<!-- END .main-contents -->
