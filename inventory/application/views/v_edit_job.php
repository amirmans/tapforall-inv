
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="" />
        <title>Tap In </title>
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
                                    Edit Job
                                </div>

                                <div class="panel-body">
                                    <form id="job_edit" class="form-horizontal"  method="post" action="<?php echo base_url('index.php/job/update_job'); ?>"  enctype="multipart/form-data">

                                        <input type="hidden" id="job_id" name="job_id" value="<?php echo $job['job_id']; ?>" />
                                        <div class="form-group" >
                                            <label for="input002" class="col-sm-2 control-label form-label">Job Number</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="job_number" name="job_number" disabled="" value="<?php echo $job['job_id']; ?>" >
                                            </div>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">HAS SHIPPING SCHEDULE?</label>
                                            <div class="col-sm-10">
                                                <input type="checkbox" id="has_shipping_shedule" name="has_shipping_shedule"  <?php  if($job['has_shipping_shedule']==1){ echo 'checked';} ?>   value="1"  >

                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Customer</label>
                                            <div class="col-sm-10">
                                                <select class="selectpicker user-success" id="customer_id" style="margin: 10px 3px;" name="customer_id">
                                                         <?php foreach ($customers as $customer) {
                                                        ?>
                                                    <option value="<?php echo $customer['customer_id']; ?>"  <?php if($customer['customer_id']==$job['customer_id']){
                                                                                                                echo 'selected';} ?>  ><?php echo $customer['customer_name']; ?></option>
                                                    <?php } ?>
                                                </select>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Customer job #</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="customer_job_id"  required name="customer_job_id"  value="<?php echo $job['customer_job_id']; ?>" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Order Date</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="order_date" name="order_date" value="<?php echo $job['order_date']; ?>"  >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Due Date</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="due_date" name="due_date" value="<?php echo $job['due_date']; ?>"  >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Notes</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="note" name="note" value="<?php echo $job['note']; ?>"  >
                                            </div>
                                        </div>



                                        <div class="form-group" >
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-default" name="archived" value="0" onclick = "return confirm_edit_popup()">Update</button>
                                                <div style="float:right;">
                                                    <label id="backend_msg" style="border: 1px solid orange;">NA</label>
                                                    <button type="submit" id="archive_button" class="btn btn-default" name="archived" value="1" onclick= "return confirm_archive_popup()">Archive me!</button>
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

        <?php
        $this->load->view('v_footer_script');
        ?>

        <script>

            $(function() {
//            $('#customer_id').change(function() {
                var param = $('#job_id').val();
                var job_url = '<?php echo site_url() ?>' + '/job/getNumberofOffspring/' + param;

                $.ajax({
                    url: job_url,
                    data: {
                        format: 'json'
                    },
                    error: function() {
                        alert('An error has occurred');
                    },
                    dataType: 'TEXT',
                    success: function(data) {
//                        alert (msg);
//                        var msg = "<?php //echo $this->session->flashdata('m  essage'); ?>//";
//                        $('#backend_msg').append(data);
//                        $("#results").empty().append(myHtml);
                        if (data <= 0) {
                            $('#backend_msg').hide();
                        } else  {
                            var msg = ' No of Job products: ' + data + ' ';
                            $('#backend_msg').html(msg)
                        }
                    },
                    type: 'GET'
                });
            });














            $("#jobs_tab").addClass('active_tab');
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
                $('#due_date1').daterangepicker({
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

            function confirm_edit_popup()
            {
                var customer_name = $("#customer_name").val();
                if (customer_name == "")
                {
                    alert('Please enter Customer name');
                    return false;
                }

                var ok = confirm("Are you sure you want to edit this job?");
                if (ok === false) {
                    return false;
                }

                return true;
            }

            function confirm_archive_popup()
            {
                $(document).ready(function () {
                    $('#due_date1').daterangepicker({
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

//                var customer_name = $("#customer_name").text();
//                if (customer_name == "")
//                {
//                    alert('Please enter Customer name');
//                    return false;
//                }
                var backend_message = "";
                if ($(backend_msg).is(":visible") )
                {
                    backend_message = $('#backend_msg').text() + "\n";
                }
                var alertMessage = backend_message + "Are you sure you want to archive this job?";
                var ok = confirm(alertMessage);
                if (ok === false) {
                    return false;
                }

                return true;
            }

        </script>









    </body>
</html>
