
<?php 
$cart_content = $this->cart->contents();
?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="paypal-form"> 
	<input type="hidden" name="cmd" value="_cart">
	<input type="hidden" name="business" value="jl.joshualopez23@gmail.com">
	<input type="hidden" name="upload" value="1">
	<input type="hidden" name="first_name" value="<?php echo $this->session->userdata("b_name");?>"> 
	<input type="hidden" name="last_name" value="<?php echo $this->session->userdata("b_lastname");?>">
	<?php 
	$ctr = 1;
	foreach ($cart_content as $items){ ?>

	<input type="hidden" name="item_name_<?php echo $ctr;?>" value="<?php echo $items['name']?>"> 
	<input type="hidden" name="amount_<?php echo $ctr;?>" value="<?php echo $items['price']?>">  
	<input type="hidden" name="quantity_<?php echo $ctr;?>" value="<?php echo $items['qty']?>"> 

	<?php 
	$ctr++;
	}
	?>

	<input type="hidden" name="currency_code" value="PHP"> <!-- Enable override of buyers's address stored with PayPal . -->
	<input type='hidden' name='rm' value='2'>
	<input type='hidden' name='cancel_return' value='<?php echo base_url()?>billing'>
    <input type='hidden' name='return' value='<?php echo base_url()?>order-paypal-success/'>

 </form>
<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(event) { 
		document.getElementById("paypal-form").submit();
	})
</script>