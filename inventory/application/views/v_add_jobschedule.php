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
                                    Add Job Shipping Schedule
                                </div>

                                <div class="panel-body">
                                    <form id="jobschedule_insert" class="form-horizontal"  method="post" action=""  enctype="multipart/form-data">


                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Pull Job Number</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="job_shipping_schedule_id" name="job_shipping_schedule_id"  value="" min="0"  >
                                                <input type="hidden" id="is_jobshipping_number_valid" value="0">
                                                <p style="display: none" id="check_availability_text" class="text-danger font-w-600" >Pull Job Number already exists</p>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Product</label>
                                            <div class="col-sm-10">
                                                <select class="selectpicker user-success" id="product_id" name="product_id" style="margin: 0 3px;" onchange="get_available_job_ids()" >
                                                    <option disabled selected value> -- select an option -- </option>
                                                    <?php for ($i = 0; $i < count($products); $i++) {
                                                        ?>
                                                        <option value="<?php echo $products[$i]['product_id']; ?>"          <?php
                                                        if ($product_id == $products[$i]['product_id']) {
                                                            echo 'selected';
                                                        }
                                                        ?>><?php echo $products[$i]['product_name']; ?></option>
                                                            <?php } ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Job Number</label>
                                            <div class="col-sm-10">
                                                <select id="job_ids" class="selectpicker user-success" id="job_id" style="margin: 0 3px;" name="job_id" onchange="get_available_batches()" >
                                                    <option disabled selected value> -- select an option -- </option>
                                                    <?php for ($i = 0; $i < count($jobs); $i++) {
                                                        ?>
                                                        <option value="<?php echo $jobs[$i]['job_id']; ?>"   <?php
                                                        if ($job_id == $jobs[$i]['job_id']) {
                                                            echo 'selected';
                                                        }
                                                        ?>
                                                        ><?php echo $jobs[$i]['job_id'] . " - " . $jobs[$i]['customer_name']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group" >
                                            <label for="input002" class="col-sm-2 control-label form-label" style="
                                                   font-weight: bold;
                                                   font-size: 15px;">No. of all Items</label>
                                            <div class="col-sm-1">
                                                <label style="margin-top: 7px; font-weight: bold;
                                                       font-size: 15px;" id="lable_total_item"></label>
                                            </div>
                                            <label for="input002" class="col-sm-2 control-label form-label" style="
                                                   font-weight: bold;
                                                   font-size: 15px;">Batch Size</label>
                                            <div class="col-sm-1">
                                                <label style="margin-top: 7px; font-weight: bold;
                                                       font-size: 15px;" id="lable_batch_size"></label>
                                            </div>
                                            <label for="input002" class="col-sm-2 control-label form-label" style="
                                                   font-weight: bold;
                                                   font-size: 15px;">No. of Available Batches </label>
                                            <div class="col-sm-1">
                                                <label style="margin-top: 7px; font-weight: bold;
                                                       font-size: 15px;" id="lable_available_batch"></label>
                                            </div>

                                            <label for="input002" class="col-sm-2 control-label form-label" style="
                                                   font-weight: bold;
                                                   font-size: 15px;">No. of Batches to Pull</label>
                                            <div class="col-sm-1">
                                                <label style="margin-top: 7px; font-weight: bold;
                                                       font-size: 15px;" id="lable_total_batch_count">0</label>
                                            </div>

                                        </div>


                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">No. of Items to Pull</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="no_of_item" id="no_of_item" value="0" required="" onchange="calculate_batch_count()" >
                                                <input type="hidden" class="form-control" name="no_batches" id="no_batches" value="0" >
                                                <input type="hidden" class="form-control" name="calculated_item" id="calculated_item" value="0" >
                                                <input type="hidden" class="form-control" name="batch_size" id="batch_size" value="0" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Shipping Date</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="shipping_date" name="shipping_date" value=""  required>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Shipping Address</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="shipping_address" name="shipping_address" required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Notes</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="note" name="note" >
                                            </div>
                                        </div>





                                        <div class="form-group" >
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-default" id="submit1" formaction="<?php echo base_url(); ?>index.php/job/insert_job" onclick="return confirm_popup()" >Submit</button>
                                                <button type="submit" class="btn btn-default" id="submit2" formaction="<?php echo base_url(); ?>index.php/job/insert_job_and_continue"  onclick="return confirm_popup1()" >Submit and add more Job Shipping Schedule</button>
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
            $("#job_shipping_schedule_tab").addClass('active_tab');
            $(document).ready(function () {
                $('#shipping_date').daterangepicker({
                    singleDatePicker: true,
                    timePicker: true,
                    locale: {
                        format: 'YYYY-MM-DD h:mm:ss'
                    }
                }, function (start, end, label) {
                    console.log(start.toISOString(), end.toISOString(), label);
                });
            });

            function confirm_popup()
            {
                var total_batches = $("#lable_total_batches").html();
                var shipping_date = $("#shipping_date").val();
                var shipping_address = $("#shipping_address").val();
                var no_batches = $("#no_batches").val();
                if ($("#job_shipping_schedule_id").val() == "")
                {
                    alert('Please enter Pull Job Number ');
                    return false;
                }
                if (no_batches == 0)
                {
                    alert('Please enter valid Item for Batch count');
                    return false;
                }

                if (shipping_date == 0)
                {
                    alert('Please enter Shipping Date');
                    return false;
                }

                if (shipping_address == 0)
                {
                    alert('Please enter Shipping Address');
                    return false;
                }
                var calculated_item = $("#calculated_item").val();
                var added_item = $("#no_of_item").val();
                console.log("calculated_item" + calculated_item);
                console.log("added_item" + added_item);
                if (parseInt(added_item) > parseInt(calculated_item))
                {
                    alert('Please enter Valid Item');
                    return false;
                }
                if (no_batches != "")
                {


                    swal({
                        title: "Are you sure ?",
                        text: "Add job shipping schedule",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, add it!",
                        closeOnConfirm: false
                    },
                    function () {
                        $("#jobschedule_insert").attr("action", "<?php echo base_url(); ?>index.php/jobschedule/insert_jobschedule");
                        $("#jobschedule_insert").submit();
                    });
                    return false;
                }
            }

            function calculate_batch_count()
            {
                var lable_total_item = $("#lable_total_item").html();
                var total_item = parseInt(lable_total_item);
                var no_of_item = $("#no_of_item").val();
                var batch_size = $("#batch_size").val();
                no_of_item = parseInt(no_of_item);
                if (total_item == no_of_item)
                {
                    var batch_count = Math.ceil(no_of_item / batch_size);
                    //  var batch_count = Math.floor(no_of_item / batch_size);
                    //  var no_of_item = batch_size * batch_count;

                } else if (total_item > no_of_item) {
                    var batch_count = Math.floor(no_of_item / batch_size);
                    var no_of_item1 = batch_size * batch_count;
                    $("#no_of_item").val(no_of_item1);
                    if (no_of_item < batch_size)
                    {
                        alert("We can't process  " + no_of_item + " items,We can process atleast " + batch_size + " items");
                    } else {
                        if (no_of_item != no_of_item1)
                        {
                            alert("We can't process  " + no_of_item + " items,We can process " + no_of_item1 + " items");
                        }
                    }




                } else {
                    alert("We can't process  " + no_of_item + " items,We can process " + total_item + " items");
                    var batch_count = Math.ceil(total_item / batch_size);
                    $("#no_of_item").val(total_item);
                }


                $("#no_batches").val(batch_count);
                $("#lable_total_batch_count").html(batch_count);



            }

            function confirm_popup1()
            {

                var total_batches = $("#lable_total_batches").html();
                var shipping_date = $("#shipping_date").val();
                var shipping_address = $("#shipping_address").val();
                var no_batches = $("#no_batches").val();
                var is_jobshipping_number_valid = $("#is_jobshipping_number_valid").val();
                if ($("#job_shipping_schedule_id").val() == "")
                {
                    alert('Please enter Pull Job Number ');
                    return false;
                }


                if (no_batches == 0)
                {
                    alert('Please enter valid Item for Batch Count');
                    return false;
                }
                if (shipping_date == 0)
                {
                    alert('Please enter Shipping Date');
                    return false;
                }
                if (shipping_address == 0)
                {
                    alert('Please enter Shipping Address');
                    return false;
                }
                var calculated_item = $("#calculated_item").val();
                var added_item = $("#no_of_item").val();
                console.log("calculated_item" + calculated_item);
                console.log("added_item" + added_item);
                if (parseInt(added_item) > parseInt(calculated_item))
                {
                    alert('Please enter Item');
                    return false;
                }
                if (no_batches != "")
                {
                    swal({
                        title: "Are you sure ?",
                        text: "Add job shipping schedule",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, add it!",
                        closeOnConfirm: false
                    },
                    function () {
                        $("#jobschedule_insert").attr("action", "<?php echo base_url(); ?>index.php/jobschedule/insert_jobschedule_and_continue");
                        $("#jobschedule_insert").submit();
                    });
                    return false;
                }
            }

            function get_available_job_ids()
            {
                $.post('<?php echo base_url(); ?>index.php/jobschedule/get_available_job_ids',
                    {
                        product_id: $("#product_id").val()
                    },
                    function (data, status) {
                        data = $.parseJSON(data);

                        $("#job_ids option").remove();
                        for (var i=0; i < data.length; i++) {

                            $('#job_ids').append($('<option>', {
                                value: data[i]["job_id"],
                                text : data[i]["job_id"] + " - " + data[i]["customer_name"]
                            }));
                            $("#job_ids").val(data[0]["job_id"]);
                            get_available_batches();
                        }

                    });

                get_available_batches();
            }

            function get_available_batches()
            {
                $.post('<?php echo base_url(); ?>index.php/jobschedule/get_available_batches',
                        {
                            job_id: $("#job_ids").val(),
                            product_id: $("#product_id").val()
                        },
                function (data, status) {
                    data = $.parseJSON(data);

                    $("#lable_total_item").html(data['total_batches']);
                    $("#calculated_item").val(data['total_batches']);
                    $("#batch_size").val(data['batch_size']);
                    $("#lable_batch_size").html(data['batch_size']);
                    var lable_total_item = $("#lable_total_item").html();
                    var total_item = parseInt(lable_total_item);
                    var lable_available_batch = Math.ceil(total_item / data['batch_size']);
                    $("#lable_available_batch").html(lable_available_batch);
                });

            }
            // get_available_batches();

            function check_jobshipping_number_availability()
            {

                var job_shipping_schedule_id = $('#job_shipping_schedule_id').val();

                if (job_shipping_schedule_id != '')
                {
                    $.post('<?php echo base_url(); ?>index.php/jobschedule/check_jobshipping_number_availability',
                            {
                                job_shipping_schedule_id: job_shipping_schedule_id
                            },
                    function (data, status) {
                        data = $.parseJSON(data);
                        if (data['is_exist'])
                        {
                            $("#check_availability_text").show();
                            $("#is_jobshipping_number_valid").val(0);
                        } else {
                            $("#check_availability_text").hide();
                            $("#is_jobshipping_number_valid").val(1);
                        }
                    });
                } else {
                    $("#check_availability_text").hide();
                    $("#is_jobnumber_valid").val(0);
                }

            }
        </script>

    </body>
</html>