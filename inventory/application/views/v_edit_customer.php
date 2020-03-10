
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
                                    Edit Customer

                                </div>

                                <div class="panel-body">
                                    <form id="customer_insert" class="form-horizontal"  method="post" action="<?php echo base_url();?>index.php/customer/update_customer"  enctype="multipart/form-data">


                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Customer Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="customer_name" name="customer_name" value="<?php echo $customer["customer_name"];?>" required="" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Contact Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="contact_name" name="contact_name" value="<?php echo $customer["contact_name"];?>" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Contact Email</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="contact_email" name="contact_email" value="<?php echo $customer["contact_email"];?>" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Contact Phone</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="contact_phone" name="contact_phone" value="<?php echo $customer["contact_phone"];?>">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Account Manager</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="contact_phone" name="account_manager" value="<?php echo $customer["account_manager"];?>">
                                                <input type="hidden" class="form-control" id="customer_id" name="customer_id" value="<?php echo $customer["customer_id"];?>">
                                            
                                            </div>
                                        </div>

                                        <div class="form-group" >
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-default" name="archived" value="0" onclick="return confirm_popup()"   >Submit</button>
                                                <div style="float:right;">
                                                    <label id="backend_msg" style="border: 1px solid orange;
                                                    padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 7px">NA</label>
                                                    <button type="submit" class="btn btn-default" name="archived" value="1" onclick= "return confirm_archive_popup()" >Archive me!</button>
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
            <?php
            $this->load->view('v_footer');
            ?>
        </div>

        <?php
        $this->load->view('v_footer_script');
        ?>
        <script>

            $(function() {
//            $('#customer_id').change(function() {
                // Get the customer id from href
                var param = location.href.split(/(\\|\/)/g).pop();
                var customer_url = '<?php echo site_url() ?>' + '/customer/getNumberofOffspring/' + param;



                $.ajax({
                    url: customer_url,
                    data: {
                        format: 'json'
                    },
                    error: function() {
                        alert('An error has occurred');
                    },
                    dataType: 'TEXT',
                    success: function(data) {
                        if (data <= 0) {
                            $('#backend_msg').hide();
                        } else  {
                            var msg = 'No. of Jobs: ' + data;
                            $('#backend_msg').html(msg)
                        }
                    },
                    type: 'GET'
                });
            });


            $("#customers_tab").addClass('active_tab');
            
            function confirm_popup()
            {

                var customer_name = $("#customer_name").val();
                if (customer_name == "")
                {
                    alert('Please enter Customer name');
                    return false;
                }
                var ok = confirm("Are you sure you want to update this customer?");
                if (ok == false) {
                    return false;
                }
                $.post('<?php echo base_url(); ?>index.php/customer/validate_customer2',
                        {
                            customer_name: $("#customer_name").val(),
                            customer_id: $("#customer_id").val(),
                        },
                        function (data, status) {
                            data = $.parseJSON(data);
                            if (data['status'] == 0)
                            {
                                alert('Customer name already exists');
                                return false;
                            }else {
                                $("#customer_insert").attr("action", "<?php echo base_url();?>index.php/customer/update_customer");
                                $("#customer_insert").submit();
                            }



                        });

                return false;

            }

            function confirm_archive_popup()
            {
                var customer_name = $("#customer_name").val();
                if (customer_name == "")
                {
                    alert('Please enter Customer name');
                    return false;
                }

                var backend_message = "";
                if ($(backend_msg).is(":visible") )
                {
                    backend_message = $('#backend_msg').text() + "\n";
                }
                var alertMessage = backend_message + "Are you sure you want to archive this customer?";
                var ok = confirm(alertMessage);
                if (ok == false) {
                    return false;
                }

                return true;
            }
          
        </script>


    </body>
</html>
