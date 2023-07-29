
<div id="page-wrapper">
    <div class="row">
         <!--  page header -->
        <div class="col-lg-12">
            <h1 class="page-header">User List</h1>
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
                                    <th width="40%">Customer Name</th>
                                    <th width="15%">Email</th>
                                    <th width="10%">Phone</th>
                                    <th class="text-center" width="30%">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                if(isset($all_user)){
                                  foreach ($all_user as $value){
                                    $i++;

                                ?>
                                <tr class="gradeC">
                                    <td><?php echo $value->cus_name ." ". $value->cus_lname ;?></td>
                                    <td><?php echo $value->cus_email;?></td>
                                    <td><?php echo $value->cus_mobile;?></td>         
                                    <td>
                                    <select class="form-control" id="payment_status"  onChange="changeStatus(<?php echo $value->cus_id?>, this)">
                                            <?php 
                                            $status = ['Regular', 'VIP'];
                                            foreach ($status as $stats) {?>
                                            <option  value="<?php echo $stats;?>" <?php echo ($value->cus_status == $stats) ? 'selected="selected"': '';?>>
                                                <?php echo $stats?>
                                                </option>
                                            <?php } ?>
                                        </select>
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
            location.href = "/manage-user?userstatus=" + val.value + '&id=' + id;
        }

    </script> 