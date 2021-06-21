    <link href="<?php echo base_url(); ?>assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url(); ?>assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">

    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">

    

    <div id="page-content">

        <div class="container">

            <ol class="breadcrumb">

                <li><a href="<?php echo base_url(); ?>">Glokallist</a></li>

                <li class="active">Reset Password</li>

            </ol>

            <!--end breadcrumb-->

            <div class="row">

                <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">

                    <section class="page-title">

                        <h1>Change Password</h1>

                    </section>

                    <!--end page-title-->

                    <section>

                        <form id="change-password-form" action="<?php echo base_url(); ?>user/change_password" method="post" class="form inputs-underline">
                            <input type="hidden" name="email" value="<?php echo $pass->email; ?>"/>
			                <input type="hidden" name="userid" value="<?php echo $pass->user_id; ?>"/>
                            
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" min-length="6" max-length="50" required>
                            </div>
                            <!--end form-group-->
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" min-length="6" max-length="50" required>
                            </div>
                            <!--end form-group-->
                            <div class="form-group" id="password-errors" style="color:red;">

                            </div>

                            <div class="form-group center">

                                <button type="submit" class="btn btn-primary width-100">Change Password</button>

                            </div>

                            <!--end form-group-->

                        </form>

                        <!--end form-->

                    </section>

                </div>

                <!--col-md-4-->

            </div>

            <!--end ro-->

        </div>

        <!--end container-->

    </div>

    <!--end page-content-->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.2.1.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-migrate-1.2.1.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-select.min.js"></script>

<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyAiM_FqkKLI0eup2tuWSJ_1IFneZsVw4ds&libraries=places"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/richmarker-compiled.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/maps.js"></script>

<script type="text/javascript">
    $(function(){
        $('#change-password-form').on('submit',function(event){
            if( $('#password').val() != $('#confirm_password').val() )
            {    
                $('#password-errors').html(' * Passwords don\'t match.');
                return false;
            }
            return true;
        });
    });
</script>
