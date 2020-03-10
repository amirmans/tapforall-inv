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
                                    Add Job Product
                                </div>

                                <div class="panel-body">
                                    <form id="job_product_insert" class="form-horizontal"  method="post" action="#"  enctype="multipart/form-data">
 <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Is Customer Owned?</label>
                                            <div class="col-sm-10">
                                                <input type="checkbox" id="customer_owned" name="customer_owned"  checked=""  value="1">

                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Job Number</label>
                                            <div class="col-sm-10">
                                                <select class="selectpicker user-success" id="job_id" style="margin: 0 3px;" name="job_id" onchange="get_job_product_data()" >
                                                    <?php for ($i = 0; $i < count($jobs); $i++) {
                                                        ?>
                                                        <option value="<?php echo $jobs[$i]['job_id']; ?>"><?php echo $jobs[$i]['job_id'] . " - " . $jobs[$i]['customer_name']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Product</label>
                                            <div class="col-sm-10">
                                                <select class="selectpicker user-success" id="product_id" name="product_id" style="margin: 0 3px;" onchange="get_job_product_data()" >
                                                    <?php for ($i = 0; $i < count($products); $i++) {
                                                        ?>
                                                        <option value="<?php echo $products[$i]['product_id']; ?>"><?php echo $products[$i]['product_name']; ?></option>
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

                                                        <option value="<?php echo $locations[$i]['inventory_location_id']; ?>"><?php echo $locations[$i]['name']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Work step</label>
                                            <div class="col-sm-10">
                                                <select class="selectpicker user-success" id="workstep" style="margin: 0 3px;" name="workstep">
                                                    <?php for ($i = 1; $i < count($steps); $i++) {
                                                   
                                                        ?>
                                                        <option value="<?php echo $steps[$i]['workstep_id']; ?>" <?php if ($steps[$i]['workstep_name'] == "production") {
                                                        echo 'selected';
                                                    } ?>  ><?php echo $steps[$i]['workstep_name']; ?></option>
<?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label" style="
                                                   font-weight: bold;
                                                   font-size: 15px;">Quantity In System</label>
                                            <div class="col-sm-10">
                                                <label style="margin-top: 7px; font-weight: bold;
                                                       font-size: 15px;" id="lable_sum_total_items"></label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Unit price</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="price_per_item" name="price_per_item" required="" step="0.01" min="0" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Total Quantity</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="total_items" name="total_items" required="" >
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
                                                <input type="number" class="form-control" id="batch_size" name="batch_size" required="" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Notes</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="notes" name="notes">
                                            </div>
                                        </div>

                                        <div class="form-group" >
                                            <div class="col-sm-offset-2 col-sm-10">
<!--                                                <button type="submit" class="btn btn-default" formaction="<?php echo base_url('index.php/jobproduct/insert_jobproduct'); ?>" onclick="return confirm_popup()" >Submit</button>
                                                <button type="submit" class="btn btn-default" formaction="<?php echo base_url('index.php/jobproduct/insert_job_product_and_continue'); ?>" onclick="return confirm_popup1()" >Submit and add more Job Products</button>-->
                                                <a href="javascript:void(0)"    class="btn btn-default" onclick="return generate_batch()" >Generate batch</a>

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
                            <h4 class="modal-title" id="csv_title"><?php echo date('Y_m_d'); ?></h4>
                            <input type="hidden" value="<?php echo '' . date('Y_m_d'); ?>" name="filename" id="csv_filename" >
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
                            <button type="submit" class="btn btn-default" onclick="download()">DOWNLOAD</button>
                            <button type="submit" class="btn btn-default" onclick="add_more()">DOWNLOAD and ADD MORE</button>
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

            function confirm_popup()
            {

                var price_per_item = $("#price_per_item").val();
                if (price_per_item == 0)
                {
                    alert('Please enter Unit price');

                    return false;
                }
                var total_items = $("#total_items").val();
                if (total_items == 0)
                {

                    alert('Please enter Total Quantity');
                    return false;
                }
                var batch_size = $("#batch_size").val();
                if (batch_size == 0)
                {

                    alert('Please enter Batch Size');
                    return false;
                }
                swal({
                    title: "Are you sure ?",
                    text: "you haven't generated batches. you can generate it by clicking on 'Generate Batche' button.",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, add it!",
                    closeOnConfirm: false
                },
                        function () {
                            $("#job_product_insert").attr("action", "<?php echo base_url('index.php/jobproduct/insert_jobproduct'); ?>");
                            $("#job_product_insert").submit();
                        });
                return false;

            }
            function confirm_popup1()
            {

                var price_per_item = $("#price_per_item").val();
                if (price_per_item == 0)
                {
                    alert('Please enter Unit price');

                    return false;
                }
                var total_items = $("#total_items").val();
                if (total_items == 0)
                {

                    alert('Please enter Total Quantity');
                    return false;
                }
                var batch_size = $("#batch_size").val();
                if (batch_size == 0)
                {

                    alert('Please enter Batch Size');
                    return false;
                }

                swal({
                    title: "Are you sure ?",
                    text: "you haven't generated batches. you can generate it by clicking on 'Generate Batch' button.",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, add it!",
                    closeOnConfirm: false
                },
                        function () {
                            $("#job_product_insert").attr("action", "<?php echo base_url('index.php/jobproduct/insert_job_product_and_continue'); ?>");
                            $("#job_product_insert").submit();
                        });
                return false;

            }


            get_job_product_data();

            function generate_batch()
            {

                var price_per_item = $("#price_per_item").val();
                if (price_per_item == 0)
                {
                    alert('Please enter Unit price');

                    return false;
                }
                var total_items = $("#total_items").val();
                if (total_items == 0)
                {

                    alert('Please enter Total Quantity');
                    return false;
                }
                var batch_size = $("#batch_size").val();
                if (batch_size == 0)
                {

                    alert('Please enter Batch Size');
                    return false;
                }

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
                            if(data['status']!=0)
                            {
                            var quantity = $("#lable_sum_total_items").html();
                            console.log(quantity)
                            console.log($("#total_item").val())
                            quantity = parseInt($("#total_items").val()) + parseInt(quantity)
                            console.log(quantity)
                            $("#lable_sum_total_items").html(quantity);

                            $("#csv_data").html(data);
                            $("#csv_data1").html(data);
                            var product_name = $('#product_id>option:selected').text();
                            $("#csv_filename").val('' + $("#job_id").val() + '_' + product_name + '_<?php echo date('Y_m_d'); ?>');
                            $("#csv_title").html('' + $("#job_id").val() + '_' + product_name + '_<?php echo date('Y_m_d'); ?>');
                            $("#modelCSV").modal('show');
                        }else{
                            alert(data['msg']);
                        }
//data-toggle="modal" data-target="#modelCSV"

                        });
            }

            function download()
            {
                swal('Your file is downloaded')
                setTimeout(function () {
                    $('#modelCSV').modal('toggle');
                    window.location = '<?php echo base_url(); ?>index.php/jobproduct'
                }, 2000);



            }

            function add_more()
            {
                $('#modelCSV').modal('toggle');
                $('#job_product_insert').trigger('reset');
//                setTimeout(function() {
//                    $('#modelCSV').modal('toggle');
//                    $('#job_product_insert').trigger('reset');
//                }, 3000);

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