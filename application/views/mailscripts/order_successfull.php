<h3>Dear <?php echo $cus_full_name;?>,</h3>
<h4>Thank you for your recent purchase from our store.</h4>
			
				<table border="1" cellspacing="0" cellpadding="0" width="100%">
					<thead>
						<tr class="cart_menu">
							<td class="image" style="padding:5px;font-weight:bold;width:20%">Item</td>
							<td class="description" style="padding:5px;font-weight:bold">Name</td>
							<td class="price" style="padding:5px;font-weight:bold">Price</td>
							<td class="quantity" style="padding:5px;font-weight:bold">Quantity</td>
							<td class="total" style="padding:5px;font-weight:bold">Total</td>
						</tr>
					</thead>
					<tbody>
						
						<?php $cart_content = $this->cart->contents();
						
						?>

						<?php foreach ($cart_content as $items){ ?>
						<tr>
							<td class="cart_product" style="text-align:center">
								<img  width="100" src="<?php echo $items['options']['pro_image']?>" alt="">
							</td>
							<td class="cart_description" style="text-align:center">
								<p style="text-align:center"><?php echo $items['name']?></p>
							</td>
							<td class="cart_price" style="text-align:center">
								<p style="text-align:center">₱<?php echo number_format($items['price'],2)?></p>
							</td>
							<td class="cart_quantity" style="text-align:center">
								<p style="text-align:center"><?php echo $items['qty']?></p>
							</td>
							<td class="cart_total" style="text-align:center">
								<p style="text-align:center">₱<?php echo number_format($items['subtotal'],2)?></p>
							</td>
							
						</tr>
						<?php } ?>

					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
	<?php
	$gdata = array();
	$gdata['g_total'] = $g_total;
	$this->session->set_userdata($gdata);
	$gtotal =  "₱" . number_format($g_total,2);
	?>

	<p style="text-align:right;font-size:35px;font-weight:bold">Total:  <?php echo $gtotal;?><p>