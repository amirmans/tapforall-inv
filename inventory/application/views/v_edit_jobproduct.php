<?php
//echo '<pre>';
//print_r($jobproduct);
//print_r($products);
//die;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="" />
        <title>Inventory</title>
        <?php
        $this->load->view('v_head');
        ?>

    </head>
    <body>
        <?php
        $this->load->view('v_header');
        ?>

        <div class="content">
            <div class="container-mail">
                <div class="mailbox clearfix">
                    <div class="container-mailbox">



                        <div class="col-md-12  padding-0">
                            <div class="panel panel-default">

                                <div class="panel-title">
                                    Edit Job Product
                                </div>

                                <div class="panel-body">
                                    <form id="edit_job_insert" class="form-horizontal"  method="post" action="<?php echo base_url('index.php/jobproduct/update_jobproduct'); ?>"  enctype="multipart/form-data">
                                        <input type="hidden" name="job_product_id" id="job_product_id" value="<?php echo $jobproduct['job_product_id']; ?>" />
                                        
                         <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Is Customer Owned?</label>
                                            <div class="col-sm-10">
                                                <input type="checkbox" id="customer_owned" name="customer_owned"  <?php if($jobproduct['customer_owned']=="1"){echo 'checked';} ?>  value="1">

                                            </div>

                                        </div>
                       <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Job Number</label>
                                            <div class="col-sm-10">
                                                <select class="selectpicker user-success" disabled="" id="job_id" style="margin: 0 3px;    background-color: #eee;" name="job_id" onchange="get_job_product_data()"  >
                                                    <?php for ($i = 0; $i < count($jobs); $i++) {
                                                        ?>
                                                        <option value="<?php echo $jobs[$i]['job_id']; ?>" <?php
                                                        if ($jobproduct['job_id'] == $jobs[$i]['job_id']) {
                                                            echo 'selected';
                                                        }
                                                        ?> ><?php echo $jobs[$i]['job_id']." - ".$jobs[$i]['customer_name']; ?></option>
<?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group" >
                                            <label for="input002" class="col-sm-2 control-label form-label">Product</label>
                                            <div class="col-sm-10">
                                                <select class="selectpicker user-success" disabled=""  id="product_id" name="product_id" style="margin: 0 3px;  background-color: #eee;" onchange="get_job_product_data()" >
                                                    <?php for ($i = 0; $i < count($products); $i++) {
                                                        ?>
                                                        <option value="<?php echo $products[$i]['product_id']; ?>"  <?php if ($jobproduct['product_id'] == $products[$i]['product_id']) {  echo 'selected'; }  ?>  ><?php echo $products[$i]['product_name']; ?></option>
<?php } ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Location</label>
                                            <div class="col-sm-10">
                                                <select class="selectpicker user-success"  id="inventory_location_id" style="margin: 0 3px;" name="inventory_location_id">
                                                    <?php
                                                    for ($i = 0; $i < count($locations); $i++) {
                                                        ?>

                                                        <option value="<?php echo $locations[$i]['inventory_location_id']; ?>" <?php
                                                            if ($jobproduct['inventory_location_id'] == $locations[$i]['inventory_location_id']) {
                                                                echo 'selected';
                                                            }
                                                            ?> ><?php echo $locations[$i]['name']; ?></option>
<?php } ?>
                                                </select>
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Work step</label>
                                            <div class="col-sm-10">
                                                <select class="selectpicker user-success" disabled=""  id="workstep" style="margin: 0 3px;  background-color: #eee;" name="workstep">
<?php for ($i = 0; $i < count($steps); $i++) {
    ?>
                                                        <option value="<?php echo $steps[$i]['workstep_id']; ?>" <?php
    if ($jobproduct['workstep'] == $steps[$i]['workstep_id']) {
        echo 'selected';
    }
    ?> ><?php echo $steps[$i]['workstep_name']; ?></option>
<?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Unit price</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="price_per_item" min="0" name="price_per_item" required="" step="0.01" value="<?php echo $jobproduct['price_per_item']; ?>" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label" style="font-weight: bold;
    font-size: 15px;">Total Quantity(DB)</label>
                                            <div class="col-sm-10">
                                                <label style="margin-top: 7px;font-weight: bold;
    font-size: 15px;" id="lable_sum_total_items"></label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Total Quantity</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" disabled=""  id="total_items" name="total_items" required="" value="<?php echo $jobproduct['total_items']; ?>" >
                                            </div>
                                        </div>
<!--                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Batch Size(DB)</label>
                                            <div class="col-sm-10">
                                                <label style="margin-top: 7px;" id="lable_sum_batch_size"></label>
                                            </div>
                                        </div>-->
                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Batch Size</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="batch_size" disabled="" name="batch_size" required="" value="<?php echo $jobproduct['batch_size']; ?>" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Notes</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="notes" name="notes" value="<?php echo $jobproduct['notes']; ?>" >
                                            </div>
                                        </div>

                                        <div class="form-group" >
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-default" name="archived" value="0"
                                                        formaction="<?php echo base_url('index.php/jobproduct/update_jobproduct'); ?>">Update</button>
                                                <div style="float:right;">
                                                    <button type="submit" class="btn btn-default" name="archived" value="1"
                                                           formaction="<?php echo base_url('index.php/jobproduct/update_jobproduct'); ?>" onclick= "return confirm_archive_popup()"> Archive me!</button>
                                                </div>

                                            </div>
                                        </div>

                                    </form> 

                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <div class="row footer">

            </div>
        </div>

        <div class="modal fade" id="modelCSV"  tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form  id="updateuser" class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/jobproduct/download_csv">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                            <h4 class="modal-title">CSV</h4>
                        </div>
                        <div class="modal-body">




                            <div class="form-group">

                                <div class="col-sm-12">

                                    <textarea disabled="" class="form-control" name="csv_data1" id="csv_data1" ></textarea>
                                    <textarea style="display: none" class="form-control" name="csv_data" id="csv_data" ></textarea>

                                </div>
                            </div>





                        </div>
                        <div class="modal-footer">
                            <p id="error_text1" class="model_msg success_text" ></p>
                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-default">DOWNLOAD</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
        $this->load->view('v_footer_script');
        ?>
        <?php
        $success = $this->session->flashdata('success');
        if (isset($success) && $success != '') {
            ?>
            <script> swal('', '<?php echo $success; ?>', 'success')</script>
            <?php
            $success = '';
        }

        $error = $this->session->flashdata('error');
        if (isset($error) && $error != '') {
            ?>
            <script> swal('', '<?php echo $error; ?>', 'error')</script>
    <?php
    $error = '';
}
?>
        <script>
            $("#job_products_tab").addClass('active_tab');
            $(document).ready(function () {
                $('#order_date').daterangepicker({
                    singleDatePicker: true,
                    timePicker: true,
                    locale: {
                        format: 'YYYY-MM-DD H:mm:ss'
                    }
                }, function (start, end, label) {
                    console.log(start.toISOString(), end.toISOString(), label);
                });
            });

            $(document).ready(function () {
                $('#due_date').daterangepicker({
                    singleDatePicker: true,
                    timePicker: true,
                    timePickerIncrement: 30,
                    locale: {
                        format: 'YYYY-MM-DD h:mm:ss'
                    }
                }, function (start, end, label) {
                    console.log(start.toISOString(), end.toISOString(), label);
                });
            });

            function get_job_product_data()
            {


                $.post('<?php echo base_url(); ?>index.php/jobproduct/get_job_product_data',
                        {
                            job_id: $("#job_id").val(),
                            product_id: $("#product_id").val()
                        },
                function (data, status) {
                    data = $.parseJSON(data);

                    $("#lable_sum_total_items").html(data['sum_total_items']);
                   // $("#lable_sum_batch_size").html(data['sum_batch_size']);

                });

            }


            get_job_product_data();

            function generate_batch()
            {

                $.post('<?php echo base_url(); ?>index.php/jobproduct/generate_batch',
                        {
                            job_id: $("#job_id").val(),
                            product_id: $("#product_id").val(),
                            inventory_location_id: $("#inventory_location_id").val(),
                            workstep: $("#workstep").val(),
                            price_per_item: $("#price_per_item").val(),
                            total_items: $("#total_items").val(),
                            batch_size: $("#batch_size").val(),
                            notes: $("#notes").val()
                        },
                function (data, status) {
                    data = $.parseJSON(data);

                    $("#csv_data").html(data);
                    $("#csv_data1").html(data);


                });
            }

            function confirm_archive_popup()
            {
//                var customer_name = $("#customer_name").val();
//                if (customer_name == "")
//                {
//                    alert('Please enter Customer name');
//                    return false;
//                }
                var ok = confirm("Are you sure you want to archive this job product?");
                if (ok == false) {
                    return false;
                }

                return true;
            }
//(function () {
//                $('#form_add_job_prodcuct').ajaxForm({
//                    complete: function (xhr) {
//                        var data = $.parseJSON(xhr.responseText);
//                        $("#csv_data").html(data['csv_data']);
//
//                    }
//                
//                });
//
//
//            })();
        </script>

    </body>
</html>
