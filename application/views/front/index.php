
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Nathaniels Sans Rival</title>

	<link href="<?php echo base_url()?>assets/front/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/front/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/front/css/prettyPhoto.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/front/css/price-range.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/front/css/animate.css" rel="stylesheet">
	
	<!-- <link href="<?php echo base_url()?>assets/front/css/sliderprice.css" rel="stylesheet"> -->
	<link href="<?php echo base_url()?>assets/front/css/jquery-ui.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/front/css/responsive.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/front/css/main.css" rel="stylesheet">

	<link href="<?php echo base_url()?>assets/back/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
	
    <!--[if lt IE 9]>
    <script src="<?php echo base_url()?>assets/front/js/html5shiv.js"></script>
    <script src="<?php echo base_url()?>assets/front/js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/front/images/home/nathaniels-logo.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()?>assets/front/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()?>assets/front/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()?>assets/front/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url()?>assets/front/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +63 917 550 6371</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> Nathaniel_balatbat@yahoo.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/profile.php?id=100064180860854"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="<?php echo base_url();?>"><img src="<?php echo base_url()?>assets/front/images/home/nathaniels-logo.jpg" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<?php $customer_id = $this->session->userdata('cus_id');?>
								<?php $shipping_id = $this->session->userdata('shipping_id');?>
								<?php if($customer_id!=NULL){ ?>

									<li><a href="<?php echo base_url()?>customer-account"><i class="fa fa-user"></i> Account</a></li>

								<?php }?>

								
								<li>	
									<a href="<?php echo base_url()?>show-cart"><i class="fa fa-shopping-cart"></i>
									<?php $cart_items =  $this->cart->total_items();
										if($cart_items>0){
									?> 
									 Cart(<?php echo $cart_items;?>)
									 <?php }else{?>
									  Cart(empty)
									 <?php } ?>
									</a>

								</li>
								<?php 
									
								if($customer_id){?>
								<li>
									<a href="<?php echo base_url()?>logout"><i class="fa fa-lock"></i> Logout</a>
								</li>
								<?php }else{ ?>
								<li>
									<a href="<?php echo base_url()?>checkout"><i class="fa fa-lock"></i> Login</a>
								</li>
								<?php } ?>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?php echo base_url();?>" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
									<ul role="menu" class="sub-menu">
										<li><a href="<?php echo base_url()?>products">Products</a></li>
											<?php if($this->cart->total_items()!=Null && $customer_id!=NULL){
													?>
											<li>
												<a href="<?php echo base_url()?>billing">Checkout</a>

											</li>
												<?php }elseif($this->cart->total_items()!=Null){?>
											<li>
												<a href="<?php echo base_url()?>checkout">Checkout</a>

											</li>
												<?php } ?>
											<li>	
												<a href="<?php echo base_url()?>show-cart">
												<?php $cart_items =  $this->cart->total_items();
													if($cart_items>0){
												?> 
												 Cart(<?php echo $cart_items;?>)
												 <?php }else{?>
												  Cart(empty)
												 <?php } ?>
												</a>

											</li>
											<?php if($customer_id){?>
											<li>
												<a href="<?php echo base_url()?>logout"><i class="fa fa-lock"></i> Logout</a>
											</li>
											<?php }else{ ?>
											<li>
												<a href="<?php echo base_url()?>checkout"><i class="fa fa-lock"></i> Login</a>
											</li>
											<?php } ?>
			 
									</ul>
								</li> 
								<!-- <li><a href="<?php echo base_url()?>home/_404_page">404</a></li> -->
								<li><a href="<?php echo base_url()?>contact">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<form action="<?php echo base_url()?>search" method="post">
							<input type="text" name="search" placeholder="search" />							
							</form>
						</div> 
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

<?php if(isset($main_content) && $main_content!=NULL){
	echo $main_content; // Load a single page under header and footer
}else{?>
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<?php if(isset($slider)){
						echo $slider;
					}?>
				</div>
			</div>
		</div>
	</section><!--/slider-->
	<section>
		<div class="container">
			<div class="row">
					<?php if(isset($category_brand)){
						echo $category_brand;
					}?>
				
				<div class="col-sm-9 padding-right">
					<?php if(isset($feature)){
						echo $feature;
					}?>
					
					<!-- This is Category Post option -->
					
					<?php if(isset($recommended)){
						//echo $recommended;
					}?>
					
				</div>
			</div>
		</div>
	</section>
<?php } ?>

	<footer id="footer"><!--Footer-->		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
						<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="/terms-and-condition">Terms and Conditions</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Us</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="/contact">Contact Us</a></li>
							</ul>
						</div>
					</div>					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2023 Nathaniel's Sans Rival. All rights reserved.</p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	<script
  src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous"></script>
	<script src="<?php echo base_url()?>assets/front/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>assets/front/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url()?>assets/front/js/price-range.js"></script>
	<script src="<?php echo base_url()?>assets/front/js/jquery-ui.js"></script>

	<script src="<?php echo base_url()?>assets/front/js/main.js"></script>
	<script src="<?php echo base_url()?>assets/back/plugins/dataTables/jquery.dataTables.js"></script>
	<!-- Price Range Script Start-->
	<script type="text/javascript">  
		$(document).ready(function () {
			$('#dataTables-example').dataTable();
	   });
 $(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 1500,
      values: [ 500,1000 ],
      slide: function( event, ui ) {
        $( "#amount" ).html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		$( "#amount1" ).val(ui.values[ 0 ]);
		$( "#amount2" ).val(ui.values[ 1 ]);
      }
    });
    $( "#amount" ).html( "₱" + $( "#slider-range" ).slider( "values", 0 ) +
     " - ₱" + $( "#slider-range" ).slider( "values", 1 ) );
  });
  </script>

	<!-- Price Range Code end -->
</body>
</html>