<style type="text/css">
	.billing_info p{color: red;font-style: bold}
	.shipping_info p{color:red;font-weight: bold;font-size: 12px}
</style>
<section id="cart_items">
		<div class="container">
				<div class="breadcrumbs">
					<ol class="breadcrumb">
					<li><a href="<?php echo base_url();?>">Home</a></li>
					<li class="active">Account</li>
					</ol>
				</div><!--/breadcrums-->
				<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-6 clearfix">
						<div class="bill-to">
							<h5 class="billing_info">
                   			 <?php echo validation_errors();?>
			              </h5>
							<p>Billing Address</p>
							<span style="font-weight:bold;font-size:13px">Fields mark with <span style="color:red">*</span> are mandatory</span>
		
	
							
							<div class="form-two">
								<form action="<?php echo base_url()?>update-billing" method="post" name="billing_info">
								Firstname *
									<input type="text" placeholder="Firstname *" name="cus_name" value="<?php echo isset($cus_info->cus_name) ? $cus_info->cus_name : ""?>">
									Lastname *
									<input type="text" placeholder="Lastname *" name="cus_lname" value="<?php echo isset($cus_info->cus_lname) ? $cus_info->cus_lname : ""?>">
									<input type="hidden" name="cus_id" value="<?php echo isset($cus_info->cus_id) ? $cus_info->cus_id : ""?>">
									Mobile * (<span style="font-size:13px;color:red">eg. 09178889999</span>)
									<input type="text" placeholder="Mobile *" name="cus_mobile" value="<?php echo isset($cus_info->cus_mobile) ? $cus_info->cus_mobile : ""?>">
									Address *
									<input type="text" placeholder="Address *" name="cus_address" value="<?php echo isset($cus_info->cus_address) ? $cus_info->cus_address : ""?>">
									City *
									<input type="text" placeholder="City *" name="cus_city" value="<?php echo isset($cus_info->cus_city) ? $cus_info->cus_city : ""?>">
									Zipcode *
									<input type="text" placeholder="Zip *" name="cus_zip" value="<?php echo isset($cus_info->cus_zip) ? $cus_info->cus_zip : ""?>">
									Country *
									<select name="cus_country" value="<?php echo $cus_info->cus_country?>">
										<option value="Philippines" >Philippines</option>
									</select>
									<!-- Shipping Same As Billing
									<input type="checkbox" name="shipping_info" value="on"> -->
									<!-- <input type="submit" value="Save Billing" class="btn btn-primary"> -->
									<p>Shipping Address</p>
									<span style="font-weight:bold;font-size:13px">Fields mark with <span style="color:red">*</span> are mandatory</span><br>
									Firstname *
									<input type="text" placeholder="Firstname *" name="sh_cus_name" value="<?php echo isset($sh_cus_info->cus_name) ? $sh_cus_info->cus_name : ""?>">
									Lastname *
									<input type="text" placeholder="Lastname *" name="sh_cus_lname" value="<?php echo isset($sh_cus_info->cus_lname) ? $sh_cus_info->cus_lname : ""?>">
									<input type="hidden" name="shipping_id"  value="<?php  echo isset($sh_cus_info->shipping_id) ? $sh_cus_info->shipping_id : ""?>">
									Mobile * (<span style="font-size:13px;color:red">eg. 09178889999</span>)
									<input type="text" placeholder="Mobile *" name="sh_cus_mobile" value="<?php echo isset($sh_cus_info->cus_mobile) ? $sh_cus_info->cus_mobile : "" ?>">
									Address *
									<input type="text" placeholder="Address *" name="sh_cus_address" value="<?php echo  isset($sh_cus_info->cus_address) ? $sh_cus_info->cus_address : ""?>">
									City *
									<input type="text" placeholder="City *" name="sh_cus_city" value="<?php echo isset($sh_cus_info->cus_city) ? $sh_cus_info->cus_city : ""?>">
									Zipcode *
									<input type="text" placeholder="Zip *" name="sh_cus_zip" value="<?php echo isset( $sh_cus_info->cus_zip) ?  $sh_cus_info->cus_zip : ""?>">
									Country *
									<select name="sh_cus_country">
									<option value="Philippines" >Philippines</option>
									</select>
									<input type="submit" value="Update" class="btn btn-primary">
								</form>
							</div>
							
						</div>
					</div>
				</div>
				<div class="row">
						<div class="col-sm-12 clearfix">
							<h3>Orders</h3>
      							 <div class="table-responsive">
										<table class="table table-striped table-bordered table-hover" id="dataTables-example">
										<thead>
											<tr>
												<th width="5%">Order No</th>
												<th width="15%">Customer Name</th>
												<th width="10%">Total Order</th>
												<th width="10%">Order Status</th>
												<th width="10%">Payment Status</th>
											</tr>
										</thead>
										<tbody>
										<?php
											$i = 0;
											if(isset($all_order)){
											foreach ($all_order as $value){
												$i++;

											?>
											<tr class="gradeC">
												<td>#<?php echo $value->order_id;?></td>
												<td><?php echo $value->cus_name;?></td>
												<td><?php echo $value->order_total;?></td>
												<td><?php echo $value->order_status;?></td>
												<td><?php echo $value->payment_status;?></td>											
											</tr>
											<?php }} ?>
										</tbody>
										</table>
									</div>
							</div>
						</div>
				</div>
			</div>
			<br>
			
		</div>
		<br>
	</section> <!--/#cart_items-->