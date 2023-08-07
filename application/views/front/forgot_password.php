<section id="form" style="margin-top:0px"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="login-form"><!--login form-->
						<h2>Forgot Password</h2>
						<p class="alert-danger"><?php echo $this->session->flashdata("flash_msg_forgot_scs");?></p><br><br>
						<span style="font-weight:bold;font-size:13px">Fields mark with <span style="color:red">*</span> are mandatory</span>
						<?php 
						   	$email = isset($_GET['email']) ? $_GET['email']: '';
							   $token = isset($_GET['token']) ? $_GET['token']: '';
						?>
						<h5 style='color:red'> <?php echo validation_errors();?></h5>
						<form action="<?php echo base_url()?>forgot-password/?email=<?php echo $email ;?>&token=<?php echo $token;?>" method="post">
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