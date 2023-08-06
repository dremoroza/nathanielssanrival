<section id="form" style="margin-top:0px"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="login-form"><!--login form-->
						<h2>Forgot Password</h2>
						<span style="font-weight:bold;font-size:13px">Fields mark with <span style="color:red">*</span> are mandatory</span>
						<h5 style='color:red'> <?php echo validation_errors();?></h5>
						<form action="<?php echo base_url()?>forgot-password" method="post">
							
							New Password * (<span style="font-size:13px;color:red">Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character</span>)
							<input type="password" placeholder="Password *" name="cus_password" value="<?php echo set_value('cus_password'); ?>"/>
							Confirm Password *
							<input type="password" name="con_pass" placeholder="Confirm Password *" value="<?php echo set_value('con_pass'); ?>"/>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form-->