<?php $all_slider = $this->ProductModel->get_all_top_product()?>

<div class="col-sm-12">
	<div id="slider-carousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<?php
				$s=0;
				foreach ($all_slider as $sliders) {
			?>
				<li data-target="#slider-carousel" data-slide-to="<?php echo $s;?>"></li>
			<?php	
				$s++;		
				}
			?>

		</ol>
		
		<div class="carousel-inner">

			<?php
				$i=1;
				foreach ($all_slider as $slider) {
					if($i==1){
						echo "<div class='item active'>";
					}else{
						echo "<div class='item'>";
					}
			?>
			
				<div class="col-sm-6">
					<h1>Nathaniel's Sans Rival</h1>
					<h2 ><?php echo $slider->pro_title;?></h2>
					<?php echo $slider->pro_desc_slider;?>
					<a href="<?php echo base_url()?>product-details/<?php echo $slider->pro_id; ?>">
						<button type="button" class="btn btn-default get">Get it now</button>
					</a>
				</div>
				<div class="col-sm-6">
					<img src="<?php echo base_url().$slider->pro_image;?>" class="girl img-responsive" alt="" />
					<img src="images/home/pricing.png"  class="pricing" alt="" />
				</div>
			</div>
			<?php $i++; } ?>

		</div>
		
		<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
			<i class="fa fa-angle-left"></i>
		</a>
		<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
			<i class="fa fa-angle-right"></i>
		</a>
	</div>
	
</div>
