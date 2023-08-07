<section id="form" style="margin-top:0px"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="login-form"><!--login form-->
						<h2>Forgot Password</h2>
						<p class="alert-danger"><?php echo $this->session->flashdata("flash_msg_forgot");?></p><br><br>

						<span style="font-weight:bold;font-size:13px">Fields mark with <span style="color:red">*</span> are mandatory</span>
						<h5 style='color:red'> <?php echo validation_errors();?></h5>
						<form action="<?php echo base_url()?>forgot-email-password" method="post">
							<input type="email" name="email"  value="<?php echo set_value('email'); ?>"placeholder="Email *" />
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form-->