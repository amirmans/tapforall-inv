
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
                                    Add Location

                                </div>

                                <div class="panel-body">
                                    <form id="customer_insert" class="form-horizontal"  method="post" action=""  enctype="multipart/form-data">


                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Location Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="location_name" name="location_name" required="" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input002" class="col-sm-2 control-label form-label">Notes</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="note" name="note" >
                                            </div>
                                        </div>



                                        <div class="form-group" >
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-default" formaction="<?php echo base_url(); ?>index.php/location/insert_location"   onclick="return confirm_popup()"  >Submit</button>
                                                <button type="submit" class="btn btn-default" formaction="<?php echo base_url(); ?>index.php/location/insert_location_and_continue"  onclick="return confirm_popup1()"   >Submit and add more Location</button>
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
            $("#locations_tab").addClass('active_tab');

            function confirm_popup()
            {

                var location_name = $("#location_name").val();
                if (location_name == "")
                {
                    alert('Please enter Location name');
                    return false;
                }
                $.post('<?php echo base_url(); ?>index.php/location/validate_location',
                        {
                            location_name: $("#location_name").val()
                        },
                        function (data, status) {
                            data = $.parseJSON(data);
                            if (data['status'] == 0)
                            {
                                alert('Location name already exists');
                                return false;
                            } else {
                                $("#customer_insert").attr("action", "<?php echo base_url(); ?>index.php/location/insert_location");
                                $("#customer_insert").submit();
                            }



                        });

                return false;



            }
            
            
            function confirm_popup1()
            {

           var location_name = $("#location_name").val();
                if (location_name == "")
                {
                    alert('Please enter Location name');
                    return false;
                }
                $.post('<?php echo base_url(); ?>index.php/location/validate_location',
                        {
                            location_name: $("#location_name").val()
                        },
                        function (data, status) {
                            data = $.parseJSON(data);
                            if (data['status'] == 0)
                            {
                                alert('Location name already exists');
                                return false;

                            } else {
                                $("#customer_insert").attr("action", "<?php echo base_url(); ?>index.php/location/insert_location_and_continue");
                                $("#customer_insert").submit();
                            }

                        });

                return false;



            }
        </script>

    </body>
</html>