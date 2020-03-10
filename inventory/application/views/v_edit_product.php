
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
                                    Edit Product

                                </div>

                                <div class="panel-body">
                                    <form id="product_edit" class="form-horizontal"  method="post" action="<?php echo base_url(); ?>index.php/product/update_product"  enctype="multipart/form-data">

                                        <input type="hidden" class="form-control" id="product_id" name="product_id" value="<?php echo $product["product_id"]; ?>">

                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Product Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="product_name" name="product_name" value="<?php echo $product["product_name"]; ?>" required="" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Notes</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="note" name="note"  value="<?php echo $product["note"]; ?>" >
                                            </div>
                                        </div>



                                        <div class="form-group" >
                                            <div class="col-sm-offset-2 col-sm-10">
<!--                                        <button type="submit" class="btn btn-default" name="archived" value="0" onclick="return confirm_popup()" >Submit</button>-->
                                        <button type="submit" class="btn btn-default" name="archived" value="0" formaction="<?php echo base_url(); ?>index.php/product/update_product" onclick="return confirm_popup()">Submit</button>
                                        <div style="float:right;">
                                            <div style="float:right;">
                                                <label id="backend_msg" style="border: 1px solid orange;
                                                    padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 7px">NA</label>
                                            <button type="submit" class="btn btn-default" name="archived" value="1" onclick= "return confirm_popup_for_archive()" >Archive me!</button>
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
                // Get the customer id from href
                var param = location.href.split(/(\\|\/)/g).pop();
                var product_url = '<?php echo site_url() ?>' + '/product/getNumberofOffspring/' + param;



                $.ajax({
                    url: product_url,
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
                            var msg = 'No. of Job Products: ' + data;
                            $('#backend_msg').html(msg)
                        }
                    },
                    type: 'GET'
                });
            });



            $("#products_tab").addClass('active_tab');
        function confirm_popup()
            {

                var product_name = $("#product_name").val();
                if (product_name == "")
                {
                    alert('Please enter Product_name name');
                    return false;
                }
                $.post('<?php echo base_url(); ?>index.php/product/validate_product2',
                        {
                            product_name: $("#product_name").val(),
                            product_id: $("#product_id").val(),
                        },
                        function (data, status) {
                            data = $.parseJSON(data);
                            if (data['status'] == 0)
                            {
                                swal({
                                    title: "Product name already available ",
                                    text: "Are you sure update",
                                    type: "warning",
                                    showCancelButton: true,
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "Yes, update it!",
                                    closeOnConfirm: false
                                },
                                        function () {
                                            $("#product_edit").attr("action", "<?php echo base_url(); ?>index.php/product/update_product");
                                            $("#product_edit").submit();
                                        });
                            } else {
                                $("#product_edit").attr("action", "<?php echo base_url(); ?>index.php/product/update_product");
                                $("#product_edit").submit();
                            }



                        });

        return true;



    }


    function confirm_popup_for_archive()
    {

        var product_name = $("#product_name").val();
        if (product_name == "")
        {
            alert('Please enter Product_name name');
                return false;
        }
        var backend_message = "";
        if ($(backend_msg).is(":visible") )
        {
            backend_message = $('#backend_msg').text() + "\n";
        }
        var alertMessage = backend_message + "Are you sure you want to archive this product?";
        return confirm(alertMessage);
    }

        </script>

    </body>
</html>
