
       <!--  page-wrapper -->
        <div id="page-wrapper" style="background:#fff">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Order Page</h1>
                </div>
                <!--End Page Header -->
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           Billing Address
                        </div>
                        <div class="panel-body">
                          <h4><b>Firstname:</b><?php echo $cus_info->cus_name?></h4>
                          <h4><b>Lastname:</b><?php echo $cus_info->cus_lname?></h4>
                          <h4><b>Email:</b><?php echo $cus_info->cus_email?></h4>
                          <h4><b>Mobile:</b><?php echo $cus_info->cus_mobile?></h4>
                          <h4><b>Address:</b><?php echo $cus_info->cus_address?></h4>
                          <h4><b>City:</b><?php echo $cus_info->cus_city?></h4>
                          <h4><b>Country:</b><?php echo $cus_info->cus_country?></h4>
                          <h4><b>Zip:</b><?php echo $cus_info->cus_zip?></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          Shipping Address
                        </div>
                        <div class="panel-body">
                          <h4><b>Firstname:</b><?php echo $ship_info->cus_name?></h4>
                          <h4><b>Lastname:</b><?php echo $ship_info->cus_lname?></h4>
                          <h4><b>Email:</b><?php echo $ship_info->cus_email?></h4>
                          <h4><b>Mobile:</b><?php echo $ship_info->cus_mobile?></h4>
                          <h4><b>Address:</b><?php echo $ship_info->cus_address?></h4>
                          <h4><b>City:</b><?php echo $ship_info->cus_city?></h4>
                          <h4><b>Country:</b><?php echo $ship_info->cus_country?></h4>
                          <h4><b>Zip:</b><?php echo $ship_info->cus_zip?></h4>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row">
                     <div class="col-lg-6">
                         <div class="panel panel-primary">
                            <div class="panel-heading">
                               Invoice # Inv <?php echo $order_info->order_id?>
                            </div>
                            <div class="panel-body">
                            <h4>
                                Invoice Date: <?php $date=  $order_info->order_date; echo date('m-d-y',strtotime($date));
                                ?>
                            </h4>
                            <h4>
                                Payment Method: <?php  echo $payment->payment_type;?>
                            </h4>       <h4>
                                Order Message/Notes: <?php  echo $payment->payment_message;?>
                            </h4>

                            </div>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="panel panel-primary">
                            <div class="panel-heading">
                               Order Status History
                            </div>
                            <div class="panel-body">
                            <?php if(count($order_status_history) > 0){
                                $ctr = 1;
                                foreach($order_status_history as $history){?>
                            <h5>
                                <?php echo $ctr;?>.  <?php echo $history->order_status; ?> on <?php echo date('m-d-y',strtotime($history->created_at));?>
                            </h5>
                            <?php $ctr++;
                            }
                            }?>
                            </div>
                         </div>
                     </div>
                </div>
               <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          Order Details
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Unit Price</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $total=0;
                                        foreach ($order_details_info as $order) {?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $order->product_name?></td>

                                            

                                            <td><?php echo $order->sales_quantity?></td>
                                            <td>₱<?php echo $order->product_price;?></td>
                                            <td class="center">₱<?php echo $order->sales_quantity * $order->product_price;?></td>  

                                        </tr>
                                        <?php 
                                        $total = $total+$order->sales_quantity * $order->product_price;
                                           
                                         } ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->   
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           Amount Calcutation
                        </div>
                        <div class="panel-body">
                           <h4><strong>Sub-Total: </strong>₱<?php echo $total?></h4>
                           <h4><strong>Grand-Total: </strong>₱<?php echo $total;?></h4>
                        </div>
                        <!-- <div class="panel-footer">
                            Panel Footer
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->
       