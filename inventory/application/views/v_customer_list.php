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
            .add_customer_btn{
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
                                    Customer    
                                    <a href="<?php echo base_url();?>index.php/customer/add_customer" class="btn btn-primary add_customer_btn"><i class="fa fa-plus"></i>Add</a>
                                </div>


                                <div class="panel-body table-responsive">

                                    <table class="table table-striped table-bordered" id="customer_table">
                                        <thead>
                                            <tr>

                                                <td>Customer Name</td>
                                                <td>Contact Name</td>
                                                <td>Contact Email </td>
                                                <td>Contact Phone</td>
                                                <td>Account Manager</td>
                                                <td>Edit</td>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($customers as $customer) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $customer["customer_name"]; ?></td>
                                                    <td><?php echo $customer["contact_name"]; ?></td>
                                                    <td><?php echo $customer["contact_email"]; ?></td>
                                                    <td><?php echo $customer["contact_phone"]; ?></td>
                                                    <td><?php echo $customer["account_manager"]; ?></td>
                                                    <td><a href="<?php echo base_url();?>index.php/customer/edit_customer/<?php echo $customer["customer_id"]; ?>" class="btn btn-info add_product_btn"><i class="fa fa-edit"></i>Edit</a></td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <?php
            $this->load->view('v_footer');
            ?>
        </div>



        <?php
        $this->load->view('v_footer_script');
        ?>

         <?php
    $success = $this->session->flashdata('success');
    if (isset($success) && $success!='') {
        ?>
    <script> swal('','<?php echo $success;?>','success')</script>
        <?php
        $success='';
    }
    
    $error = $this->session->flashdata('error');
    if (isset($error) && $error!='') {
        ?>
    <script> swal('','<?php echo $error;?>','error')</script>
        <?php
        $error='';
    }
    ?>

        <script>
            $("#customers_tab").addClass('active_tab');

            $(document).ready(function() {
                $('#customer_table').DataTable();
            });
        </script>








    </body>
</html>