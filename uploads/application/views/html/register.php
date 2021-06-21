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
                <li class="active">Register</li>
            </ol>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
                    <?php if ($this->session->flashdata("error_message")):?>
                        <div class="alert alert-danger alert-dismissable fade in">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Error ! </strong><?php echo $this->session->flashdata("error_message"); ?>
                        </div>
                    <?php endif;?>
                    
                    <?php if ($this->session->flashdata("success_message")):?>
                        <div class="alert alert-success alert-dismissable fade in">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Success ! </strong><?php echo $this->session->flashdata("success_message"); ?>
                        </div>
                    <?php endif;?>

                    <?php
                        if ($this->session->flashdata('errors')){
                            echo "<div class='alert alert-danger'><ul>";
                            echo $this->session->flashdata('errors');
                            echo "</ul></div>";
                        }
                    ?>
                    
                    <section class="page-title">
                        <h1>Register</h1>
                    </section
                    <!--end page-title-->

                    <section>
                        <form action="<?php echo base_url(); ?>user/register" method="post" class="form inputs-underline">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="first_name">Name</label>
                                        <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Name" min-length="3" max-length="30" required>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-6-->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="last_name">User Name</label>
                                        <input type="text" class="form-control" name="user_name" id="user_name" placeholder="User name" min-length="3" max-length="30" required>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-6-->
                            </div>
                            <!--enr row-->
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                            </div>
                            <!--end form-group-->
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" min-length="6" max-length="15" required>
                            </div>
                            <!--end form-group-->
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" min-length="6" max-length="15" required>
                            </div>
                            <!--end form-group-->
                            
                            <div class="form-group">
                                <label for="zipcode">City / Zip code</label>
                                <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="City / Zip code" required>
                            </div>
                            <!--end form-group-->
                                
                            <!--end map-->
                            <div class="form-group hidden">
                                <div class="map height-200px shadow" id="reg-map"></div>
                                <input type="text" class="form-control" id="reg-latitude" name="latitude" hidden="">
                                <input type="text" class="form-control" id="reg-longitude" name="longitude" hidden="">
                            </div>

                            <div class="form-group center">
                                <button type="submit" class="btn btn-primary width-100">Register Now</button>
                            </div>
                            <!--end form-group-->
                        </form>

                        <hr>

						<p>By clicking on “Register Now” button you are accepting the <a href="<?php base_url(); ?>/terms_and_conditions">Terms &amp; Conditions</a></p>
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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120368561-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-120368561-1');
</script>

<script>
    var _latitude = 40.7344458;
    var _longitude = -73.86704922;
    var element = "reg-map";
    var lat_element = "reg-latitude";
    var long_element = "reg-longitude";
    simpleMap(lat_element,_latitude,long_element,_longitude, element, true);
</script>
