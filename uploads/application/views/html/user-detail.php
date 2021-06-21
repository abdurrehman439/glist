<link href="<?php echo base_url(); ?>assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.nouislider.min.css" type="text/css">

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">

<style type="text/css" rel="stylesheet">
	address > figure{
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

                        <section>
                            <h2>Reviews</h2>
                            <div class="review">
                                <div class="image">
                                    <div class="bg-transfer"><img src="<?php echo base_url(); ?>assets/img/person-02.jpg" alt=""></div>
                                </div>
                                <div class="description">
                                    <figure>
                                        <div class="rating-passive" data-rating="4">
                                            <span class="stars"></span>
                                            <span class="reviews">6</span>
                                        </div>
                                        <span class="date">09.05.2016</span>
                                    </figure>
                                    <p>Please be advised that your comment should be specific, clear, courteous and concise. The comment should be worded so it helps reader for awareness and a suggestion to which it belongs to. Please avoid cruel comments, as it will be removed immediately - Admin</p>
                                </div>
                            </div>
                            <!--end review-->
                        </section>

                        <section id="write-a-review">
                            <h2>Write a Review</h2>
                            <form class="clearfix form inputs-underline">
                                <div class="box">
                                    <div class="comment">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="comment-title">
                                                    <h4>Review your experience</h4>
                                                </div>
                                                <!--end title-->
                                                <div class="form-group">
                                                    <label for="name">Title of your review<em>*</em></label>
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Beautiful place!" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="message">Your Message<em>*</em></label>
                                                    <textarea class="form-control" id="message" rows="8" name="message" required="" placeholder="Describe your experience"></textarea>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-8-->
                                            <div class="col-md-5">
                                                <div class="comment-title">
                                                    <h4>Rating</h4>
                                                </div>
                                                <!--end title-->
                                                <dl class="visitor-rating">
                                                    <dt>Comfort</dt>
                                                    <dd class="star-rating active" data-name="comfort"></dd>
                                                    <dt>Location</dt>
                                                    <dd class="star-rating active" data-name="location"></dd>
                                                    <dt>Facilities</dt>
                                                    <dd class="star-rating active" data-name="facilities"></dd>
                                                    <dt>Staff</dt>
                                                    <dd class="star-rating active" data-name="staff"></dd>
                                                    <dt>Value for money</dt>
                                                    <dd class="star-rating active" data-name="value"></dd>
                                                </dl>
                                            </div>
                                            <!--end col-md-4-->
                                        </div>
                                        <!--end row-->
                                        <br>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-rounded">Send Review</button>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end comment-->
                                </div>
                                <!--end review-->
                            </form>
                            <!--end form-->
                        </section>
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
                            <?php if(sizeof($skills) < 1) echo "<p>No skills provided yet</p>"; ?>
                            <ul class="tags">
                                <?php for( $i=0 ; $i < sizeof($skills) ; $i++ ) { ?>
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
                                <div class="description">
                                    <figure>Average Price: $8 - $30</figure>
                                    <div class="label label-default">Restaurant</div>
                                    <h3>Marky’s Restaurant</h3>
                                    <h4>63 Birch Street</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="<?php echo base_url(); ?>assets/img/items/1.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="controls-more">
                                <ul>
                                    <li><a href="#">Add to favorites</a></li>
                                    <li><a href="#">Add to watchlist</a></li>
                                    <li><a href="#" class="quick-detail">Quick detail</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--end item-->
                        <div class="item" data-id="2">
                            <a href="#">
                                <div class="description">
                                    <div class="label label-default">Restaurant</div>
                                    <h3>Ironapple</h3>
                                    <h4>4209 Glenview Drive</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="<?php echo base_url(); ?>assets/img/items/2.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="controls-more">
                                <ul>
                                    <li><a href="#">Add to favorites</a></li>
                                    <li><a href="#">Add to watchlist</a></li>
                                    <li><a href="#" class="quick-detail">Quick detail</a></li>
                                </ul>
                            </div>
                            <!--end controls-more-->
                        </div>
                        <!--end item-->
                        <div class="item" data-id="15">
                            <figure class="ribbon">Top</figure>
                            <a href="#">
                                <div class="description">
                                    <figure>Happy hour: 18:00 - 19:00</figure>
                                    <div class="label label-default">Bar & Grill</div>
                                    <h3>Bambi Planet Houseboat Bar& Grill </h3>
                                    <h4>3857 Losh Lane</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="<?php echo base_url(); ?>assets/img/items/3.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="controls-more">
                                <ul>
                                    <li><a href="#">Add to favorites</a></li>
                                    <li><a href="#">Add to watchlist</a></li>
                                    <li><a href="#" class="quick-detail">Quick detail</a></li>
                                </ul>
                            </div>
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
        
        geocoder.geocode({ 'address': "<?php echo $users_data[0]['zip_code']; ?>" }, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                var _latitude = results[0].geometry.location.lat().toString();
                var _longitude = results[0].geometry.location.lng().toString();
                var element = "listing-map";
                var lat_element = "listing-latitude";
                var long_element = "listing-longitude";
                simpleMap(lat_element,_latitude,long_element,_longitude, element, true);
            }
            else
            {
                console.log("Location is not valid.....!");
            }
        });
</script>
