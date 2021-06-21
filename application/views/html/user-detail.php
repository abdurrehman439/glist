<link href="<?php echo base_url(); ?>assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.nouislider.min.css" type="text/css">

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">

<style type="text/css" rel="stylesheet">
    address>figure {
        word-break: break-all;
    }
</style>

<div id="page-content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="active">User Detail</li>
        </ol>

        <div class="row">
            <div class="col-md-9 col-sm-9">
                <section class="page-title">
                    <div class="pull-left">
                        <h1><?php echo $users_data[0]['full_name']; ?></h1>
                        <h3><?php echo $users_profile_data[0]['occupation']; ?></h3>
                        <h4><?php echo $users_data[0]['zip_code']; ?></h4>
                        <div class="rating-passive" data-rating="4">
                            <span class="stars"></span>
                            <span class="reviews">6</span>
                        </div>
                    </div>
                    <!--end page-title-->
                </section>

                <div class="row">
                    <div class="col-md-8 col-sm-12">

                        <section>
                            <section>
                                <h2>About Myself</h2>
                                <p style="word-break: break-all;">
                                    <?php echo $users_profile_data[0]['description']; ?>
                                </p>
                            </section>
                        </section>

                        <section>
                            <section>
                                <h2>Professional Details</h2>
                                <p style="word-break: break-all;">
                                    <?php echo $users_profile_data[0]['professional_details']; ?>
                                </p>
                            </section>
                        </section>

                        <?php
                        $data = array(
                            'post_id' => $this->uri->segment(3),
                            'type' => 1,
                        );
                        $this->load->view('html/review_show', $data); ?>
                        <!-- show review end  -->
                        <!-- start add review  -->
                        <?php $this->load->view('html/review_section_user'); ?>
                    </div>
                    <!--end col-md-6-->
                    <div class="col-md-4 col-sm-12">
                        <section>
                            <div class="detail-sidebar">
                                <section class="shadow">
                                    <div class="user-image" style="padding: 30px;">
                                        <img class="img-responsive" src="<?php echo base_url() . $users_profile_data[0]['profile_picture']; ?>" />
                                    </div>
                                    <!--end map-->
                                    <div class="content">
                                        <div class="vertical-aligned-elements">
                                            <div class="element"><b>Verified</b></div>
                                            <div class="element text-align-right"><a href="#" class="btn btn-primary btn-rounded btn-xs">Send Message</a></div>
                                        </div>
                                        <hr>
                                        <address>
                                            <figure><i class="fa fa-map-marker"></i><?php echo $users_data[0]['zip_code']; ?></figure>
                                            <figure><i class="fa fa-envelope"></i><?php echo $users_data[0]['email']; ?></figure>
                                            <figure><i class="fa fa-phone"></i><?php echo $users_profile_data[0]['phone']; ?></figure>
                                            <figure><i class="fa fa-globe"></i><?php echo $users_profile_data[0]['website']; ?></figure>
                                        </address>
                                    </div>
                                </section>
                            </div>
                            <!--end detail-sidebar-->
                        </section>
                        <section>
                            <h2>Skills</h2>
                            <?php $skills = json_decode($users_profile_data[0]['skills']); ?>
                            <?php if (sizeof($skills) < 1) echo "<p>No skills provided yet</p>"; ?>
                            <ul class="tags">
                                <?php for ($i = 0; $i < sizeof($skills); $i++) { ?>
                                    <li><?php echo $skills[$i]; ?></li>
                                <?php } ?>
                            </ul>
                        </section>
                        <section>
                            <h2>Social Share</h2>
                            <div class="social-share"></div>
                        </section>
                    </div>
                    <!--end col-md-3-->
                </div>
                <!--end row-->
            </div>
            <!--end col-md-9-->

            <div class="col-md-3 col-sm-3">
                <aside class="sidebar">
                    <section>
                        <h2>Recent Items</h2>
                        <div class="item" data-id="1">
                            <a href="#">
                                <!-- <div class="description">
                                        <figure>Average Price: $8 - $30</figure>
                                        <div class="label label-default">Restaurant</div>
                                        <h3>Marky’s Restaurant</h3>
                                        <h4>63 Birch Street</h4>
                                    </div> -->
                                <!--end description-->
                                <div class="image bg-transfer" style="background-repeat: no-repeat; background-size: contain;">
                                    <img src="<?php echo base_url(); ?>assets/landing/images/no-add.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <!-- <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Add to favorites</a></li>
                                        <li><a href="#">Add to watchlist</a></li>
                                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                                    </ul>
                                </div> -->
                        </div>
                        <!--end item-->
                        <div class="item" data-id="2">
                            <a href="#">
                                <!-- <div class="description">
                                        <div class="label label-default">Restaurant</div>
                                        <h3>Ironapple</h3>
                                        <h4>4209 Glenview Drive</h4>
                                    </div> -->
                                <!--end description-->
                                <div class="image bg-transfer" style="background-repeat: no-repeat; background-size: contain;">
                                    <img src="<?php echo base_url(); ?>assets/landing/images/no-add.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <!-- <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Add to favorites</a></li>
                                        <li><a href="#">Add to watchlist</a></li>
                                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                                    </ul>
                                </div> -->
                            <!--end controls-more-->
                        </div>
                        <!--end item-->
                        <div class="item" data-id="15">
                            <!-- <figure class="ribbon">Top</figure> -->
                            <a href="#">
                                <!-- <div class="description">
                                        <figure>Happy hour: 18:00 - 19:00</figure>
                                        <div class="label label-default">Bar & Grill</div>
                                        <h3>Bambi Planet Houseboat Bar& Grill </h3>
                                        <h4>3857 Losh Lane</h4>
                                    </div> -->
                                <!--end description-->
                                <div class="image bg-transfer" style="background-repeat: no-repeat; background-size: contain;">
                                    <img src="<?php echo base_url(); ?>assets/landing/images/no-add.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <!-- <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Add to favorites</a></li>
                                        <li><a href="#">Add to watchlist</a></li>
                                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                                    </ul>
                                </div> -->
                            <!--end controls-more-->
                        </div>
                        <!--end item-->
                    </section>
                </aside>
                <!--end sidebar-->
            </div>
            <!--end col-md-3-->
        </div>
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
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.nouislider.all.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/maps.js"></script>

<script>
    var geocoder = new google.maps.Geocoder();

    geocoder.geocode({
        'address': "<?php echo $users_data[0]['zip_code']; ?>"
    }, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            var _latitude = results[0].geometry.location.lat().toString();
            var _longitude = results[0].geometry.location.lng().toString();
            var element = "listing-map";
            var lat_element = "listing-latitude";
            var long_element = "listing-longitude";
            simpleMap(lat_element, _latitude, long_element, _longitude, element, true);
        } else {
            console.log("Location is not valid.....!");
        }
    });
</script>