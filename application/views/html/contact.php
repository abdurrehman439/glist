    <link href="<?php echo base_url(); ?>assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">
     
    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Contact</li>
            </ol>
            <section class="page-title">
                <h1 class="pull-left">Contact</h1>
                <div class="pull-right featured-contact">
                    <i class="icon_comment_alt"></i>
                    <h4>24/7 Support</h4>
                    <!-- <h3>228-341-8068</h3> -->
                </div>
            </section>
            <!--end section-title-->
        </div>
        <!--end container-->
        <section>
            <!-- <div class="map height-400px" id="listing-map"></div> -->
            <!--end map-->
        </section>
        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <h3>Contact Information</h3>
                        <div class="box">
                            <address>
                                <!-- <strong>Location</strong>
                                <figure>4758 Nancy Street</figure>
                                <br> -->
                                <!-- <strong>Phone Number</strong>
                                <figure>+1 919-571-2528</figure>
                                <br> -->
                                <strong>Email</strong>
                                <figure><a href="#">support@glokallist.com</a></figure>
                                <br>
                                <strong>Customer Care</strong>
                                <figure><a href="#">marketing@glokallist.com</a></figure>
                            </address>
                        </div>
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-9 col-sm-9">
                        <h3>Form</h3>
                        <form class="form form-email inputs-underline" id="form-hero">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name" id="name">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-4-->
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-4-->
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" class="form-control" name="subject" id="subject">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-4-->
                            </div>
                            <!--end row-->
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" rows="4" name="message"></textarea>
                            </div>
                            <!--end form-group-->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary icon shadow">Send Message<i class="fa fa-caret-right"></i></button>
                            </div>
                            <!--end form-group-->
                        </form>
                    </div>
                    <!--end col-md-9-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
    </div>
    <!--end page-content-->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyAiM_FqkKLI0eup2tuWSJ_1IFneZsVw4ds&libraries=places"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/richmarker-compiled.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/maps.js"></script>

<script>
    
    var _latitude = 40.7344458;
    var _longitude = -73.86704922;
    var element = "listing-map";
    var lat_element = "listing-latitude";
    var long_element = "listing-longitude";
    simpleMap(lat_element,_latitude,long_element,_longitude, element, true);
</script>
