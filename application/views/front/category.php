<div class="col-sm-3">
	<div class="left-sidebar">
		<h2>Category</h2>
		<div class="panel-group category-products" id="accordian"><!--category-productsr-->
			<?php $all_category = $this->CategoryModel->get_all_category();?>
			<?php $all_sub_category = $this->CategoryModel->get_all_sub_category();?>
			<?php foreach ($all_category as  $maincat) {?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordian" href="#<?php echo $maincat->category_name;?>">
							<span class="badge pull-right">
							<?php foreach ($all_sub_category as $plusicon){?>
								<?php if($plusicon->category_sub_id == $maincat->category_id){?>
									<i class="fa fa-plus"></i>
							<?php if($plusicon->category_sub_id == $maincat->category_id) {
								        break;    
								    }?>
								<?php }}?>
							
							</span>
							<?php echo $maincat->category_name?>	
						</a>
					</h4>
				</div>
				<div id="<?php echo $maincat->category_name;?>" class="panel-collapse collapse">
					<div class="panel-body">
						<ul>
							<?php foreach ($all_sub_category as  $subcat) {?>
								<?php if($subcat->category_sub_id == $maincat->category_id){?>
										<li><a href="<?php echo base_url()?>/show-post-by-sub-cat-id/<?php echo $subcat->sub_cat_id?>"><?php echo $subcat->sub_category_name?></a></li>
								<?php }?>
							<?php } ?>						
						</ul>
					</div>
				</div>
			</div>
			<?php }?>

		</div><!--/category-productsr-->


		<!--price-range-->
		<div class="">
			<h2>Price Range</h2>
			<p id="amount" style="text-align:center"></p>
			<div id="slider-range"></div>

			<div class="pricerange">
			  <form method="post" action="<?php echo base_url()?>show-product-by-price-range" >
			    <input type="hidden" id="amount1" name="amount1" value="">
			    <input type="hidden" id="amount2" name="amount2" value="">
			    <input type="submit" name="submit_range" value="FILTER">
			  </form>
			</div>
		</div>
		<!--/price-range-->










		<div class="shipping text-center"><!--shipping-->
			<img src="<?php echo base_url()?>assets/front/images/home/shipping.jpg" alt="" />
		</div><!--/shipping-->
		
	</div>
</div>