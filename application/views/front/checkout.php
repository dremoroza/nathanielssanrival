<section id="form" style="margin-top:0px"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						 <h4 style='color:red'>
                   			 <?php echo $this->session->flashdata('flash_msg'); ?> 
			               </h4>
						<form action="<?php echo base_url()?>customer-login" method="post">
							
							<input type="email" placeholder="Email Address" name="cus_email" />
							<input type="password" placeholder="Password" name="cus_password" />
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup! </h2>
						<span style="font-weight:bold;font-size:13px">Fields mark with <span style="color:red">*</span> are mandatory</span>
				
						 <h5 style='color:red'> <?php echo validation_errors();?></h5>
						<form action="<?php echo base_url()?>customer-registration" method="post">
							Firstname *
							<input type="text" placeholder="Firstname *" name="cus_name" value="<?php echo set_value('cus_name'); ?>"/>
							Lastname *
							<input type="text" placeholder="Lastname *" name="cus_lname" value="<?php echo set_value('cus_lname'); ?>"/>
							Email Address *
							<input type="email" placeholder="Email Address *" name="cus_email" value="<?php echo set_value('cus_email'); ?>"/>
							Mobile * (<span style="font-size:13px;color:red">eg. 09178889999</span>)
							<input type="text" placeholder="Mobile *" name="cus_mobile" value="<?php echo set_value('cus_mobile'); ?>">
							Address *
							<input type="text" placeholder="Address *" name="cus_address" value="<?php echo set_value('cus_address'); ?>">
							City *
							<input type="text" placeholder="City *" name="cus_city" value="<?php echo set_value('cus_city'); ?>">
							Zipcode *
							<input type="text" placeholder="Zip *" name="cus_zip" style="margin-top:10px" value="<?php echo set_value('cus_zip'); ?>">
							Country *
							<select name="cus_country">
								<option value="Philippines" >Philippines</option>
							</select>
							Password * (<span style="font-size:13px;color:red">Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character</span>)
							<input type="password" placeholder="Password *" name="cus_password" value="<?php echo set_value('cus_password'); ?>"/>
							Confirm Password *
							<input type="password" name="con_pass" placeholder="Confirm Password *" value="<?php echo set_value('con_pass'); ?>"/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->