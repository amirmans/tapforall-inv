
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
                                    Add Customer

                                </div>

                                <div class="panel-body">
                                    <form id="customer_insert" class="form-horizontal"  method="post" action=""  enctype="multipart/form-data">


                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Customer Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="customer_name" name="customer_name" required="" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Contact Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="contact_name" name="contact_name" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Contact Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="contact_email" name="contact_email" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Contact Phone</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="contact_phone" name="contact_phone" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Account Manager</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="account_manager" name="account_manager" >
                                            </div>
                                        </div>

                                        <div class="form-group" >
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-default" formaction="<?php echo base_url(); ?>index.php/customer/insert_customer" onclick="return confirm_popup()"   >Submit</button>
                                                <button type="submit" class="btn btn-default" formaction="<?php echo base_url(); ?>index.php/customer/insert_customer_and_continue"  onclick="return confirm_popup1()"   >Submit and add more Customers</button>
                                            </div>
                                        </div>

                                    </form> 

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
            $("#customers_tab").addClass('active_tab');

            function confirm_popup()
            {

                var customer_name = $("#customer_name").val();
                if (customer_name == "")
                {
                    alert('Please enter Customer name');
                    return false;
                }
                $.post('<?php echo base_url(); ?>index.php/customer/validate_customer',
                        {
                            customer_name: $("#customer_name").val()
                        },
                        function (data, status) {
                            data = $.parseJSON(data);
                            if (data['status'] == 0)
                            {
//                                swal({
//                                    title: "Customer name already available ",
//                                    text: "Are you sure add",
//                                    type: "warning",
//                                    showCancelButton: true,
//                                    confirmButtonColor: "#DD6B55",
//                                    confirmButtonText: "Yes, add it!",
//                                    closeOnConfirm: false
//                                },
//                                        function () {
//                                            $("#customer_insert").attr("action", "<?php //echo base_url(); ?>//index.php/customer/insert_customer");
//                                            $("#customer_insert").submit();
//                                        });
                                alert('Customer name already exists');
                                return false;
                            } else {
                                $("#customer_insert").attr("action", "<?php echo base_url(); ?>index.php/customer/insert_customer");
                                $("#customer_insert").submit();
                            }



                        });

                return false;

            }


            function confirm_popup1()
            {

                var customer_name = $("#customer_name").val();
                if (customer_name == "")
                {
                    alert('Please enter Customer name');
                    return false;
                }
                $.post('<?php echo base_url(); ?>index.php/customer/validate_customer',
                        {
                            customer_name: $("#customer_name").val()
                        },
                        function (data, status) {
                            data = $.parseJSON(data);
                            if (data['status'] == 0)
                            {
//                                swal({
//                                    title: "Customer name already available ",
//                                    text: "Are you sure add",
//                                    type: "warning",
//                                    showCancelButton: true,
//                                    confirmButtonColor: "#DD6B55",
//                                    confirmButtonText: "Yes, add it!",
//                                    closeOnConfirm: false
//                                },
//                                        function () {
//                                            $("#customer_insert").attr("action", "<?php //echo base_url(); ?>//index.php/customer/insert_customer_and_continue");
//                                            $("#customer_insert").submit();
//                                        });
                                alert('Customer name already exists');
                                return false;
                            } else {
                                $("#customer_insert").attr("action", "<?php echo base_url(); ?>index.php/customer/insert_customer_and_continue");
                                $("#customer_insert").submit();
                            }



                        });

                return false;

            }
        </script>

    </body>
</html>