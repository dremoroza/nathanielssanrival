
<div id="page-wrapper">
    <div class="row">
         <!--  page header -->
        <div class="col-lg-12">
            <h1 class="page-header">Tables</h1>
        </div>
         <!-- end  page header -->
    </div>
     <div class="row">
        <div class="col-lg-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                     Order Tables
                </div>
                <p class="text-success"> <?php if(isset($success_message)){
                  echo $success_message;
                 }?>
                 </p>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th width="5%">Order No</th>
                                    <th width="40%">Customer Name</th>
                                    <th width="15%">Customer Phone</th>
                                   
                                    <th width="10%">Total Order</th>
                                    <th width="10%">Order Status</th>
                                    <th class="text-center" width="30%">Action</th>
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
                                    <td><?php echo $value->cus_name ." ". $value->cus_lname ;?></td>
                                    <td><?php echo $value->cus_mobile;?></td>
                                    <td>₱<?php echo $value->order_total;?></td>
                                    <td>
                                         <select class="form-control" id="payment_status"  onChange="changeStatus(<?php echo $value->order_id?>, this)">
                                            <?php 
                                            $status = ['pending', 'processed', 'shipped', 'completed'];
                                            foreach ($status as $stats) {?>
                                            <option  value="<?php echo $stats;?>" <?php echo ($value->order_status == $stats) ? 'selected="selected"': '';?>>
                                                <?php echo $stats?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                   <td>
                                        <a class="btn btn-info" href="<?php echo base_url()?>view-order/<?php echo $value->order_id?>">View</a>
                                        <a onclick="alert('Are Your Sure to Delete')" class="btn btn-info" href="<?php echo base_url()?>delete-order/<?php echo $value->order_id?>">Delete</a>
                                    </td> 
                                    
                                </tr>
                                <?php }} ?>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>
</div>
    <script src="<?php echo base_url()?>assets/back/plugins/dataTables/jquery.dataTables.js"></script>
   
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
     
        });

        function changeStatus(id, val){
            location.href = "/manage-order?orderstatus=" + val.value + '&id=' + id;
        }

    </script> 