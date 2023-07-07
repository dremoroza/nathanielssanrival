
<script type="text/javascript" src="<?php echo base_url();?>/assets/back/ckeditor/ckeditor.js"></script>
    <!--  page-wrapper -->
    <div id="page-wrapper">
        <div class="row">
           <!-- page header -->
           <div class="col-lg-12">
            <h1 class="page-header"> Add new Product</h1>
        </div>
        <!--end page header -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
              <?php echo $this->session->flashdata('flsh_msg'); ?>
               <h4 class="error">
                    <?php $msg = $this->session->userdata('error_image');
                        echo $msg;
                        $this->session->unset_userdata('error_image');
                     ?>                       
                </h4>
                <div class="panel-body">
                    <div class="row">

                        <div class="col-lg-12">
                        <span style="font-weight:bold;font-size:13px">Fields mark with <span style="color:red">*</span> are mandatory</span>
                           <h5 style='color:red'> <?php echo validation_errors();?></h5>
                             <?php echo form_open_multipart('save-product','');?>
                                <div class="form-group">
                                    <label>Add Product Title *</label>
                                    <input type="text" class="form-control" value="" name="pro_title" required="">
                                </div>
                                 <div class="form-group">
                                    <label>Add Product Description</label>
                                    <textarea  id="ck" class="form-control" rows="3" name="pro_desc"></textarea>
                                    <script>CKEDITOR.replace('ck')</script>
                                </div>
                                 <div class="form-group">
                                    <label>Select Category *</label>
                                    <select class="form-control" name="pro_cat" required>
                                        <?php
                                         foreach ($all_cat as $category) {  ?>
                                        <option value="<?php echo $category->category_id;?>"><?php echo $category->category_name?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Sub Category *</label>
                                    <select class="form-control" name="pro_sub_cat" required>
                                            <?php foreach ($all_sub_cat as $sub_cat) {?>
                                            <option  value="<?php echo $sub_cat->sub_cat_id?>">
                                                <?php echo $sub_cat->sub_category_name?>
                                                </option>
                                        <?php } ?>
                                    </select>
                                </div>
    
                                 <div class="form-group">
                                    <label>Add Product Price *</label>
                                    <input type="number" class="form-control" value="" name="pro_price" required="" step="any">
                                </div>
                                 <div class="form-group">
                                    <label>Add Product Quantity *</label>
                                    <input type="number" class="form-control" value="" name="pro_quantity" required="">
                                </div>
                                <div class="form-group">
                                    <label>Product Status *</label>
                                    <select class="form-control" name="pro_status" required>
                                        <option value="">Select One</option>
                                        <option value="1">Enable</option>
                                        <option value="2">Disable</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Product Availability *</label>
                                    <select class="form-control" name="pro_availability" required>
                                        <option value="">Select One</option>
                                        <option value="1">In Stock</option>
                                        <option value="2">Out Of Stock</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Upload Product Image *</label>
                                    <input type="file" name="pro_image">
                                </div>
                                 <div class="form-group">
                                    <label>Homepage Slider</label>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="top_product" value="1">Enable
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Slider Description</label>
                                    <textarea  id="pro_desc_slider" class="form-control" rows="3" name="pro_desc_slider"></textarea>
                                    <script>CKEDITOR.replace('pro_desc_slider')</script>
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            <?php echo form_close();?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Form Elements -->
        </div>
    </div>
</div>
<!-- end page-wrapper -->


