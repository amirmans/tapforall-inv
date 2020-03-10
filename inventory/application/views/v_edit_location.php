
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
                                    Edit Location

                                </div>

                                <div class="panel-body">
                                    <form id="location_edit" class="form-horizontal"  method="post" action="<?php echo base_url(); ?>index.php/location/update_location"  enctype="multipart/form-data">

                                        <input type="hidden" class="form-control" id="inventory_location_id" name="inventory_location_id" value="<?php echo $location["inventory_location_id"]; ?>">

                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Location Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="location_name" name="location_name" value="<?php echo $location["name"]; ?>" required="" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Notes</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="note" name="note"  value="<?php echo $location["note"]; ?>" >
                                            </div>
                                        </div>



                                        <div class="form-group" >
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-default"  name="archived" value="0" onclick="return confirm_popup()" >Submit</button>
                                                <div style="float:right;">
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
                var location_url = '<?php echo site_url() ?>' + '/location/getNumberofOffspring/' + param;



                $.ajax({
                    url: location_url,
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
                            var msg = 'No. of Job Products with this location: ' + data;
                            $('#backend_msg').html(msg)
                        }
                    },
                    type: 'GET'
                });
            });




            $("#locations_tab").addClass('active_tab');
        function confirm_popup()
            {

                var location_name = $("#location_name").val();
                if (location_name == "")
                {
                    alert('Please enter Location name');
                    return false;
                }
                $.post('<?php echo base_url(); ?>index.php/location/validate_location2',
                        {
                            location_name: $("#location_name").val(),
                            inventory_location_id: $("#inventory_location_id").val(),
                        },
                        function (data, status) {
                            data = $.parseJSON(data);
                            if (data['status'] == 0)
                            {
//                                swal({
//                                    title: "Location name already available ",
//                                    text: "Are you sure update",
//                                    type: "warning",
//                                    showCancelButton: true,
//                                    confirmButtonColor: "#DD6B55",
//                                    confirmButtonText: "Yes, update it!",
//                                    closeOnConfirm: false
//                                },
//                                        function () {
//                                            $("#location_edit").attr("action", "<?php //echo base_url(); ?>//index.php/location/update_location");
//                                            $("#location_edit").submit();
//                                        });
                                alert("Location name already exists!");
                                return false;
                            } else {
                                $("#location_edit").attr("action", "<?php echo base_url(); ?>index.php/location/update_location");
                                $("#location_edit").submit();
                            }



                        });

                return false;



            }

            function confirm_archive_popup()
            {
//                var customer_name = $("#customer_name").val();
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
                var alertMessage = backend_message + "Are you sure you want to archive this location?";
                var ok = confirm(alertMessage);
                if (ok === false) {
                    return false;
                }

                return true;
            }

        </script>











    </body>
</html>
