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
                                    Job Product    
                                    <a href="<?php echo base_url('index.php/jobproduct/add_jobproduct'); ?>" class="btn btn-primary add_btn"><i class="fa fa-plus"></i>Add</a>
                                </div>


                                <div class="panel-body table-responsive">

                                    <table class="table table-striped table-bordered" id="job_product_table">
                                        <thead>
                                            <tr>

                                                <td>Job Number</td>
                                                <td>Product</td>
                                                <td>Unit Price</td>
                                                <td>Total Quantity</td>
                                                <td>Batch Size</td>
                                                <td>Is Customer Owned?</td>
                                                <td>Note</td>
                                                <td>Edit</td>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php foreach ($jobproducts as $jobproduct) 
                                            { ?>
                                            <tr>
                                                <td><?php echo $jobproduct['job_id']; ?></td>
                                                <td><?php echo $jobproduct['product_name']; ?></td>
                                                <td><?php echo $jobproduct['price_per_item']; ?></td>
                                                <td><?php echo $jobproduct['total_items']; ?></td>
                                                <td><?php echo $jobproduct['batch_size']; ?></td>
                                               <td><?php echo $jobproduct['customer_owned']; ?></td>
                                                <td><?php echo $jobproduct['notes']; ?></td>
                                                <td><a href="<?php echo base_url('index.php/jobproduct/edit_jobproduct/'.$jobproduct['job_product_id']); ?>" class="btn btn-info add_product_btn"><i class="fa fa-edit"></i>Edit</a></td>

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

            $("#job_products_tab").addClass('active_tab');

            $(document).ready(function () {
                $('#job_product_table').DataTable();
            });

        </script>








    </body>
</html>