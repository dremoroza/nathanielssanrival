
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="<?php echo base_url();?>">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
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
						
						if($this->cart->total_items() != NULL) {

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
									<form action="<?php echo base_url()?>update-cart-qty" method="post">
			
										<input class="cart_quantity_input" type="text" name="qty" value="<?php echo $items['qty']?>" autocomplete="off" size="2">
									
										<input  type="hidden" name="rowid" value="<?php echo $items['rowid']?>">

										<input  type="submit"  value="Update"/>

									<form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">₱<?php echo number_format($items['subtotal'],2)?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="<?php echo base_url()?>delete-to-cart/<?php echo $items['rowid']?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<?php }
						} else { ?>
						<tr>
							<td colspan="6">
								<p style="text-align:center">Cart is empty!</p>
							</td>
						</tr>
						<?php }?>

					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-6">
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
								$shiping = "0";
								if($cart_total>0 && $cart_total<49){
									$shiping = 0;
								}elseif($cart_total>50 && $cart_total<98){
									$shiping = 2;
								}elseif($cart_total>99 && $cart_total<198){
									$shiping = 5;
								}elseif($cart_total>199){
									$shiping = 10;
								}elseif($cart_total<0){
									$shiping = 0;
								}
							?>
							<!-- <li>Shipping Cost <span>₱<?php echo $shiping?></span></li> -->
							<?php $g_total = $cart_total?>
							<li>Total <span>
								<?php
									$gdata = array();
									$gdata['g_total'] = $g_total;
									$this->session->set_userdata($gdata);
							 		echo "₱" . number_format($g_total,2);
							 	?>
							 </span></li>
						</ul>
							<form action="<?php echo base_url()?>update-cart-qty" method="post" >	
							<input type="submit" class="btn btn-default update"  value="Update"/>
							<?php $customer_id = $this->session->userdata('cus_id');?>
							<?php $shipping_id = $this->session->userdata('shipping_id');?>
							<?php if($this->cart->total_items()!=Null && $customer_id!=NULL){?>
							<a class="btn btn-default check_out" href="<?php echo base_url()?>billing">Check Out</a>
							<?php } elseif($customer_id==NULL  && $this->cart->total_items() == NULL){?>
							<a class="btn btn-default check_out" href="<?php echo base_url()?>products">Check Out</a>
							<?php }elseif($customer_id==NULL && $this->cart->total_items()!=Null){ ?>
							<a class="btn btn-default check_out" href="<?php echo base_url()?>checkout">Check Out</a>
							<?php }elseif($customer_id!=NULL && $this->cart->total_items()==Null){ ?>
							<a class="btn btn-default check_out" href="<?php echo base_url()?>products">Check Out</a>
							<?php } ?>
							</form>	
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->