<style type="text/css">
	.billing_info p{color: red;font-style: bold}
	.shipping_info p{color:red;font-weight: bold;font-size: 12px}
</style>
<section id="cart_items">
		<div class="container">
				<div class="breadcrumbs">
					<ol class="breadcrumb">
					<li><a href="<?php echo base_url();?>">Home</a></li>
					<li><a href="<?php echo base_url();?>/show-cart">Shopping Cart</a></li>
					<li class="active">Checkout</li>
					</ol>
				</div><!--/breadcrums-->

				<div class="step-one">
					<h2 class="heading">Step 2</h2>
				</div>
				<h5 class="billing_info">
					<?php echo validation_errors();?>
				</h5>	
				<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-6 clearfix">
						<div class="bill-to">
							<p>Billing Address</p>
							<span style="font-weight:bold;font-size:13px">Fields mark with <span style="color:red">*</span> are mandatory</span>
							<div class="form-two">
								<form action="<?php echo base_url()?>place-order" method="post" >
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
							</div>
							
						</div>
					</div>
					<div class="col-sm-6 clearfix">
						<div class="bill-to">
							<p>Shipping Address</p>
							<span style="font-weight:bold;font-size:13px">Fields mark with <span style="color:red">*</span> are mandatory</span>
							<div class="form-two">
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
									
							</div>
							
						</div>
					</div>
					


				</div>
			</div>
			<br>
			

				<!--/cart-->	
					<div class="container">
						<div class="table-responsive cart_info">
							<table class="table table-condensed">
								<thead>
									<tr class="cart_menu">
										<td class="image">Item</td>
										<td class="description"></td>
										<td class="price">Price</td>
										<td class="quantity">Quantity</td>
										<td class="total">Total</td>
										<td></td>
									</tr>
								</thead>
								<tbody>
									<?php $cart_content = $this->cart->contents();
									
									?>

									<?php 
									$ctr = 1;
									foreach ($cart_content as $items){ ?>

									<tr>
										<td class="cart_product">
											<a href=""><img  width="100" src="<?php echo $items['options']['pro_image']?>" alt=""></a>
										</td>
										<td class="cart_description">
											<h4><a href=""><?php echo $items['name']?></a></h4>
										</td>
										<td class="cart_price">
											<p>₱<?php echo number_format($items['price'],2)?></p>
										</td>
										<td class="cart_quantity">
											<div class="cart_quantity_button">
													<input class="cart_quantity_input" type="text" name="qty" value="<?php echo $items['qty']?>" autocomplete="off" size="2" id="qty-<?php echo $ctr;?>">
													<a 
													style="width: 74px;
														background: #d93aa8;
														color: #fff;
														padding: 2px;
														border-radius: 7px;
														margin-left: 11px;"
													onClick="updateCartPayment('<?php echo $items['rowid']?>', <?php echo $ctr;?>)"
													>Update</a>
											</div>
										</td>
										<td class="cart_total">
											<p class="cart_total_price">₱<?php echo number_format($items['subtotal'],2)?></p>
										</td>
										<td class="cart_delete">
											<a class="cart_quantity_delete" href="<?php echo base_url()?>delete-to-cart-payment/<?php echo $items['rowid']?>"><i class="fa fa-times"></i></a>
										</td>
									</tr>
									<?php $ctr++; } ?>

								</tbody>
							</table>
						</div>
					</div>

					<section id="do_action">
						<div class="container">
							
							<div class="row">
								<div class="col-sm-6">
									<p class="alert alert-warning">Payment Method</p>
									<span>
										<?php if($cus_info->cus_status == "VIP"){?>
										<label><input type="radio"  name="payment_gateway" value="cash_on_delivery" checked> Cash on delivery</label><br>
										<label><input type="radio"  name="payment_gateway" value="bank_deposit">Bank Deposit</label><br>
										Bank Details:<br>
										Bank: BPI<br>
										Account Type: Savings<br>
										Account Name: Nathaniel's Sans Rival<br>
										Account #: 897-2232-000<br>
										<?php }?>
										<?php if($cus_info->cus_status == "Regular"){?>
            							<label><input type="radio"  name="payment_gateway" value="bank_deposit" checked>Bank Deposit</label><br>
										Bank Details:<br>
										Bank: BPI<br>
										Account Type: Savings<br>
										Account Name: Nathaniel's Sans Rival<br>
										Account #: 897-2232-000<br>
										<?php }?>
										
									</span>
			
								</div>
								<div class="col-sm-6">
								<div class="total_area">
										<ul>
											<?php 
												$cart_total = $this->cart->total();
											?>
											<li>Cart Sub Total <span>₱<?php echo number_format($cart_total,2);?></span></li>
											<?php
												$tax = ($cart_total*2)/100;
											?>
											<!-- <li>Eco Tax 2% <span>₱<?php echo $tax?></span></li> -->
											<!-- Shipping Cost Dependend Quantity, price, buyer distance etc -->
											<?php
												if($cart_total>0 && $cart_total<49){
													$shiping = 0;
												}elseif($cart_total>50 && $cart_total<98){
													$shiping = 2;
												}elseif($cart_total>99 && $cart_total<198){
													$shiping = 5;
												}elseif($cart_total>199){
													$shiping = 10;
												}elseif($cart_total==0){
													$shiping = 0;
												}
											?>
											<!-- <li>Shipping Cost <span>₱<?php echo $shiping?></span></li> -->
											<?php $g_total = $cart_total?>
											<li>Total <span>₱<?php echo number_format($g_total,2);?></span></li>
										</ul>

									</div>
										<div class="payment-options">
											<div class="order-message">
												<textarea name="payment_message"  placeholder="Notes about your order, Special Notes for Delivery" rows="10"></textarea>
											</div>	

											<span>
												<input type="submit" name="btn" class="btn btn-primary" value="Place Order">
											</span>
										</div>
									</form>
								</div>

							</div>
						</div>
					</section><!--/#do_action-->
			<!--/cart-->									
			
		</div>
		<br>
	</section> <!--/#cart_items-->
	<script type="text/javascript">
		var base_url = "<?php echo base_url()?>";

		function updateCartPayment(rowId, qty) {
			let new_qty = jQuery('#qty-' + qty).val();
			let url = base_url + 'update-cart-qty-payment/' + rowId + '/' + new_qty;
			window.location = url;
			return false;
		}
	</script>