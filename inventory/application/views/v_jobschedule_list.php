<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="" />
        <title>Inventory </title>
        <?php
        $this->load->view('v_head');
        ?>
        <style>
            .add_btn{
                float: right;
                color: white !important;
            }
        </style>

    </head>
    <body>
        <?php
        $this->load->view('v_header');
        ?>

        <div class="content">
            <div class="container-mail">
                <div class="mailbox clearfix">
                    <div class="container-mailbox">



                        <div class="col-md-12">
                            <div class="panel panel-default">

                                <div class="panel-title">
                                    Job Shipping Schedule
                                    <a href="<?php echo base_url('index.php/jobschedule/add_jobschedule'); ?>" class="btn btn-primary add_btn"><i class="fa fa-plus"></i>Add</a>
                                </div>


                                <div class="panel-body table-responsive">

                                    <table class="table table-striped table-bordered" id="job_schedule_table">
                                        <thead>
                                            <tr>

                                                <td>Job Shipping Schedule Number</td>
                                                <td>Job Number</td>
                                                <td>Product</td>
                                                <td>No of Batches</td>
                                                <td>Shipping Date</td>
                                                <td>Shipping Address</td>
                                                <td>Note</td>
                                                <td>Edit</td>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php foreach ($jobschedules as $jobschedule) 
                                            { ?>
                                            <tr>
                                                <td><?php echo $jobschedule['job_shipping_schedule_id']; ?></td>
                                                <td><?php echo $jobschedule['job_id']; ?></td>
                                                <td><?php echo $jobschedule['product_name']; ?></td>
                                                <td><?php echo $jobschedule['no_batches']; ?></td>
                                                <td><?php echo $jobschedule['shipping_date']; ?></td>
                                                <td><?php echo $jobschedule['shipping_address']; ?></td>
                                                <td><?php echo $jobschedule['note']; ?></td>
                                                <td><a href="<?php echo base_url('index.php/jobschedule/edit_jobschedule/'.$jobschedule['jss_id']); ?>" class="btn btn-info add_product_btn"><i class="fa fa-edit"></i>Edit</a></td>

                                            </tr>   
                                            <?php  } ?>






                                        </tbody>
                                    </table>
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
                $('#job_schedule_table').DataTable();
            });

        </script>








    </body>
</html>