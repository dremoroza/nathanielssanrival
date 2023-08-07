<div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Contact <strong>Us</strong></h2> 	    				
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Get In Touch</h2>
	    				<?php echo $this->session->flashdata("flash_msg_success");?>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form action="<?php echo base_url()?>contact-form" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="contact_name" class="form-control" required="required" placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="contact_email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="contact_subject" class="form-control" required="required" placeholder="Subject">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="contact_message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<p>Nathaniel's Sans Rival</p>
							<p>109 Benito Drive Savvy 25 Severina Ave West Service Road</p>
							<p>Parañaque, Philippines</p>
							<p>Mobile: +63 917 550 6371</p>
							<p>Email: Nathaniel_balatbat@yahoo.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->