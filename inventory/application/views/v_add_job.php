
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
                                    Add Job

                                </div>

                                <div class="panel-body">
                                    <form id="job_insert" class="form-horizontal"  method="post" action=""  enctype="multipart/form-data">


                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Job Number</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="job_number" name="job_number"  value="" min="0" onkeyup="check_jobnumber_availability()" >
                                                <input type="hidden" id="is_jobnumber_valid" value="0">
                                                <p style="display: none" id="check_availability_text" class="text-danger font-w-600" >Job number already exists</p>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">HAS SHIPPING SCHEDULE?</label>
                                            <div class="col-sm-10">
                                                <input type="checkbox" id="has_shipping_shedule" name="has_shipping_shedule"  checked=""  value="1">

                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Customer</label>
                                            <div class="col-sm-10">
                                                <select class="selectpicker user-success" id="customer_id" style="margin: 10px 3px;" name="customer_id" required="" >
                                                    <option value="">select customer</option>
                                                    <?php foreach ($customers as $customer) {
                                                        ?>
                                                        <option value="<?php echo $customer['customer_id']; ?>"><?php echo $customer['customer_name']; ?></option>
                                                    <?php } ?>
                                                </select>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Customer job #</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="customer_job_id" id="customer_job_id" value="0" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Order Date</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="order_date" name="order_date" value="" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Due Date</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="due_date" name="due_date" value="" >
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
                                                <button type="submit" class="btn btn-default" id="submit2" formaction="<?php echo base_url(); ?>index.php/job/insert_job_and_continue"  onclick="return confirm_popup1()" >Submit and add more Job</button>
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
            $("#jobs_tab").addClass('active_tab');
            $(document).ready(function() {
                $('#order_date').daterangepicker({
                    singleDatePicker: true,
                    timePicker: true,
                    locale: {
                        format: 'YYYY-MM-DD H:mm:ss'
                    }
                }, function(start, end, label) {
                    console.log(start.toISOString(), end.toISOString(), label);
                });
            });

            $(document).ready(function() {
                $('#due_date').daterangepicker({
                    singleDatePicker: true,
                    timePicker: true,
                    timePickerIncrement: 30,
                    locale: {
                        format: 'YYYY-MM-DD h:mm:ss'
                    }
                }, function(start, end, label) {
                    console.log(start.toISOString(), end.toISOString(), label);
                });
            });

            function confirm_popup()
            {
                var customer_id = $("#customer_id").val();
                var is_jobnumber_valid = $("#is_jobnumber_valid").val();
                if(is_jobnumber_valid==0)
                {
                    alert('Please enter valid job number')
                    return false;
                }


                if (customer_id != "")
                {

                    swal({
                        title: "Are you sure ?",
                        text: "Add job",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, add it!",
                        closeOnConfirm: false
                    },
                    function() {
                        $("#job_insert").attr("action", "<?php echo base_url(); ?>index.php/job/insert_job");
                        $("#job_insert").submit();
                    });
                    return false;
                }
            }

            function confirm_popup1()
            {
                var customer_id = $("#customer_id").val();
                 var is_jobnumber_valid = $("#is_jobnumber_valid").val();
                if(is_jobnumber_valid==0)
                {
                    alert('Please enter valid job number')
                    return false;
                }
                if (customer_id != "")
                {
                    swal({
                        title: "Are you sure ?",
                        text: "Add job",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, add it!",
                        closeOnConfirm: false
                    },
                    function() {
                        $("#job_insert").attr("action", "<?php echo base_url(); ?>index.php/job/insert_job_and_continue");
                        $("#job_insert").submit();
                    });
                    return false;
                }
            }

            function check_jobnumber_availability()
            {

                var jobnumber = $('#job_number').val();

                if (jobnumber != '')
                {
                    $.post('<?php echo base_url(); ?>index.php/job/check_jobnumber_availability',
                            {
                                job_id: jobnumber
                            },
                    function(data, status) {
                        data = $.parseJSON(data);
                        if (data['is_exist'])
                        {
                            $("#check_availability_text").show();
                            $("#is_jobnumber_valid").val(0);


                        }
                        else{
                            $("#check_availability_text").hide();
                            $("#is_jobnumber_valid").val(1);
                        }


                    });
                }
                else{
                    $("#check_availability_text").hide();
                            $("#is_jobnumber_valid").val(0);
                }

            }
        </script>

    </body>
</html>