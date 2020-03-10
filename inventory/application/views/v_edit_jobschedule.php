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
                                    Edit Job Shipping Schedule
                                </div>

                                <div class="panel-body">
                                    <form id="jobschedule_edit" class="form-horizontal"  method="post" action="<?php echo base_url('index.php/jobschedule/update_jobschedule'); ?>"  enctype="multipart/form-data">

                                        <input type="hidden" id="job_shipping_schedule_id" name="job_shipping_schedule_id" value="<?php echo $jobschedule['job_shipping_schedule_id']; ?>" />
                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Job Shipping Schedule Number</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" disabled="" id="job_shipping_schedule_id" name="job_shipping_schedule_id"  value="<?php echo $jobschedule['job_shipping_schedule_id']; ?>" >
                                                  <input type="hidden" class="form-control"  id="jss_id" name="jss_id"  value="<?php echo $jobschedule['jss_id']; ?>" >
                                               
                                            </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Job Number</label>
                                            <div class="col-sm-10">
                                                <select class="selectpicker user-success" id="job_id" style="margin: 0 3px;" name="job_id" onchange="get_available_batches()" >
                                                    <?php for ($i = 0; $i < count($jobs); $i++) {
                                                        ?>
                                                        <option value="<?php echo $jobs[$i]['job_id']; ?>" <?php if ($jobs[$i]['job_id'] == $jobschedule['job_id']) {
                                                        echo 'selected';
                                                    }
                                                        ?>  ><?php echo $jobs[$i]['job_id'] . " - " . $jobs[$i]['customer_name']; ?></option>
<?php } ?>
                                                </select>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Product</label>
                                            <div class="col-sm-10">
                                                <select class="selectpicker user-success" id="product_id" name="product_id" style="margin: 0 3px;" onchange="get_available_batches()" >
                                                            <?php for ($i = 0; $i < count($products); $i++) {
                                                                ?>
                                                        <option value="<?php echo $products[$i]['product_id']; ?>" <?php if ($products[$i]['product_id'] == $jobschedule['job_product_id']) {
                                                                echo 'selected';
                                                            }
                                                            ?>><?php echo $products[$i]['product_name']; ?></option>
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
                                                       font-size: 15px;" id="lable_total_batches"></label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">No of Batches</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="no_batches" id="no_batches" value="<?php echo $jobschedule['no_batches']; ?>" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Shipping Date</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="shipping_date" name="shipping_date" value="<?php echo $jobschedule['shipping_date']; ?>" >
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Shipping Address</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="shipping_address" name="shipping_address"><?php echo $jobschedule['shipping_address']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Notes</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="note" name="note"  value="<?php echo $jobschedule['note']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group" >
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-default" name="archived" value="0" onclick="return confirm_popup()">Submit</button>
                                                <div style="float:right;">
                                                    <button type="submit" class="btn btn-default" name="archived" value="1" onclick="return confirm_archive_popup()">Archive me!</button>
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
            $("#job_shipping_schedule_tab").addClass('active_tab');
            $(document).ready(function() {
                $('#shipping_date').daterangepicker({
                    singleDatePicker: true,
                    timePicker: true,
                    locale: {
                        format: 'YYYY-MM-DD h:mm:ss'
                    }
                }, function(start, end, label) {
                    console.log(start.toISOString(), end.toISOString(), label);
                });
            });

            function get_available_batches()
            {
                $.post('<?php echo base_url(); ?>index.php/jobschedule/get_available_batches',
                        {
                            job_id: $("#job_id").val(),
                            product_id: $("#product_id").val()
                        },
                function(data, status) {
                    data = $.parseJSON(data);
                    $("#lable_total_batches").html(data['total_batches']);
                });

            }

            get_available_batches()

            function confirm_popup()
            {
                var total_batches = $("#lable_total_batches").html();
                var shipping_date = $("#shipping_date").val();
                var shipping_address = $("#shipping_address").val();
                var no_batches = $("#no_batches").val();

                if (total_batches == 0)
                {
                    alert('Job Product Not Found');
                    return false;
                }
                if (no_batches == 0)
                {
                    alert('Please enter Batch Size');
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

                if (parseInt(no_batches) > parseInt(total_batches))
                {
                    alert('Please enter Valid Batches');
                    return false;
                }
                if (no_batches != "")
                {

                        $("#jobschedule_insert").submit();
                    
                    return true;
                }
            }

            function confirm_archive_popup()
            {
                return (confirm("Are you sure you want to archive this pull job id?"));
            }


        </script>









    </body>
</html>