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
                                    Jobs    
                                    <a href="<?php echo base_url(); ?>index.php/job/add_job" class="btn btn-primary add_btn"><i class="fa fa-plus"></i>Add</a>
                                </div>


                                <div class="panel-body table-responsive">

                                    <table class="table table-striped table-bordered" id="jobs_table">
                                        <thead>
                                            <tr>

                                                <td>Job Number</td>
                                                <td>HAS SHIPPING SCHEDULE?</td>
                                                <td>Customer</td>
                                                <td>Customer job #</td>
                                                <td>Order Date</td>
                                                <td>Due Date</td>
                                                <td>Notes</td>
                                                <td>Edit</td>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($jobs as $job) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $job['job_id']; ?></td>
                                                    <td><?php echo $job['has_shipping_shedule']; ?></td>
                                                    <td><?php echo $job['customer_name']; ?></td>
                                                    <td><?php echo $job['customer_job_id']; ?></td>
                                                    <td><?php echo $job['order_date']; ?></td>
                                                    <td><?php echo $job['due_date']; ?></td>
                                                    <td><?php echo $job['note']; ?></td>
                                                    <td><a href="<?php echo base_url(); ?>index.php/job/edit_job/<?php echo $job["job_id"]; ?>" class="btn btn-info "><i class="fa fa-edit"></i>Edit</a></td>

                                                </tr>   
                                            <?php } ?> 








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

            $("#jobs_tab").addClass('active_tab');

            $(document).ready(function () {
                $('#jobs_table').DataTable();
            });

        </script>








    </body>
</html>