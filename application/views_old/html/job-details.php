<link href="<?php echo base_url(); ?>assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">

<link href="<?php echo base_url(); ?>assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">

<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css" type="text/css">

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.nouislider.min.css" type="text/css">   

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css" type="text/css">

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">

<div id="page-content" class="subpage-detail">

    <div class="container">

        <ol class="breadcrumb">

            <li><a href="#">Home</a></li>

            <li><a href="#">Pages</a></li>

            <li class="active">Event Details</li>

        </ol>

        <section class="page-title pull-left">

            <h1><?php echo $post[0]->title; ?></h1>

            <h3><?php echo $post[0]->zipcode; ?></h3>

            <div class="rating-passive" data-rating="4">

                <span class="stars"></span>

                <span class="reviews">6</span>

            </div>

        </section>

        <!--end page-title-->

        <a href="#write-a-review" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-star"></i>Write a review</a>

    </div>

    <!--end container-->

    <section>

        <div class="gallery detail">

            <div class="owl-carousel" data-owl-items="3" data-owl-loop="1" data-owl-auto-width="1" data-owl-nav="1" data-owl-dots="0" data-owl-margin="2" data-owl-nav-container="#gallery-nav">

            <?php 
                $pictures = json_decode($post[0]->file);
                for( $i = 0 ; $i < sizeof($pictures) ; $i++ )
                {?>
                    <div class="image">
                        <div class="bg-transfer"><img src="<?php echo base_url().$pictures[$i]; ?>" alt=""></div>
                    </div>    
            <?php    
                }    
            ?>
                

            </div>

            <!--end owl-carousel-->

        </div>

        <!--end gallery-->

    </section>

    <div class="container">

        <div class="row">

            <div class="col-md-7 col-sm-7">

                <div id="gallery-nav"></div>

                <section>

                    <h2>About this listing</h2>

                    <p>
                    <?php echo $post[0]->job_description; ?>
                    </p>

                </section>

                <section>

                    <h2>Tags</h2>

                    <ul class="tags">

                        <li><?php echo $post[0]->tags; ?></li>

                    </ul>

                </section>

                <section>

                    <h2>Business Name</h2>

                    <p><b><?php echo $post[0]->business_name; ?></b></p>
                    
				</section>
				
				<section>

                    <h2>Job Details</h2>

					<p><b>Type : </b><?php echo $post[0]->type; ?></p>
					
					<p><b>Status : </b><?php echo $post[0]->status; ?></p>

					<p><b>Industry : </b><?php echo $post[0]->industry; ?></p>

					<p><b>Function : </b><?php echo $post[0]->function; ?></p>

					<p><b>Experience : </b><?php echo $post[0]->experience; ?></p>

					<p><b>Education : </b><?php echo $post[0]->education; ?></p>

					<p><b>Skill : </b><?php echo $post[0]->skill; ?></p>

					<p><b>Software : </b><?php echo $post[0]->software; ?></p>
                    
                </section>

            </div>

            <!--end col-md-7-->

            <div class="col-md-5 col-sm-5">

                <div class="detail-sidebar">

                    <section class="shadow">

                        <div class="map height-250px" id="listing-map"></div>

                        <!--end map-->

                        <div class="content">

                            <div class="vertical-aligned-elements">

                                <div class="element"><img src="<?php echo base_url(); ?>assets/img/logo-2.png" alt=""></div>

                                <div class="element text-align-right"><a href="#" class="btn btn-primary btn-rounded btn-xs"<a href="#" class="btn btn-primary btn-rounded btn-xs" onclick="set_send_message_data('Discards & Scraps','<?php echo $post[0]->contact_email; ?>','<?php echo base_url(uri_string()); ?>');" data-modal-external-file="modal_job_send_message.php" data-target="modal-job-send-message">Apply</a></div>

                            </div>

                            <hr>

                            <address>
                                <figure><i class="fa fa-map-marker"></i><?php echo $post[0]->zipcode; ?> </figure>

                                <figure><i class="fa fa-user"></i><a href="#"><?php echo $post[0]->contact_name; ?></a></figure>

                                <figure><i class="fa fa-envelope"></i><a href="#"><?php echo $post[0]->contact_email; ?></a></figure>

                                <figure><i class="fa fa-phone"></i><?php echo $post[0]->contact_number; ?></figure>

                                <figure><i class="fa fa-globe"></i><a href="<?php echo $post[0]->contact_website; ?>"><?php echo $post[0]->contact_website; ?></a></figure>
                                
                                <figure><i class="fa fa-money"></i><a href="#"><?php echo $post[0]->salary . " " . $post[0]->currency; ?></a></figure>
                            </address>

                        </div>

                    </section>

                    <section>
                        <h2>Date for Post</h2>
                        <dl>
                            <dt><?php echo date('d F, Y' , strtotime($post[0]->date) ); ?></dt>
                            <dd></dd>
                        </dl>
                    </section>

                    <section>

                        <h2>Share This Listing</h2>

                        <div class="social-share"></div>

                    </section>

                </div>

                <!--end detail-sidebar-->

            </div>

            <!--end col-md-5-->

        </div>

        <!--end row-->

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

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/maps.js"></script>



<script>

$(document).ready(function(){
    rating(".visitor-rating");

    /*var geocoder = new google.maps.Geocoder();
    var address = <?php echo $post[0]->price; ?>;
    geocoder.getLatLng(address, function(point) {
        
    });*/

    var geocoder = new google.maps.Geocoder();
    
    geocoder.geocode({ 'address': "<?php echo $post[0]->zipcode; ?>" }, function (results, status) {
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
});
</script>
