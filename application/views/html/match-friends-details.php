<link href="<?php echo base_url(); ?>assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">

<link href="<?php echo base_url(); ?>assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">

<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css" type="text/css">

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.nouislider.min.css" type="text/css">   

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css" type="text/css">

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">

<style>
	.match-friends-details span{
		font-weight: bold;
		color: #1f1f1f;
	}
</style>

<div id="page-content" class="subpage-detail">

    <div class="container">

        <ol class="breadcrumb">

            <li><a href="#">Home</a></li>

            <li><a href="#">Pages</a></li>

            <li class="active">Match Friends Details</li>

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

                    <h2>About Yourself</h2>

                    <p>
                    <?php echo $post[0]->about_yourself; ?>
                    </p>

                </section>

				<section>
					<h2>Details</h2>
					<div class="match-friends-details">
						<p><span>Age : </span><?php echo $post[0]->age; ?></p>
						<p><span>Gender : </span><?php echo $post[0]->gender; ?></p>
						<p><span>Occupation : </span><?php echo $post[0]->occupation; ?></p>
						<p><span>Religion : </span><?php echo $post[0]->religion; ?></p>
						<p><span>Height : </span><?php echo $post[0]->height; ?></p>
						<p><span>Ethnicity : </span><?php echo $post[0]->ethnicity; ?></p>
						<p><span>Body Type : </span><?php echo $post[0]->body_type; ?></p>
						<p><span>Education : </span><?php echo $post[0]->education; ?></p>
						<p><span>Ideal Match : </span><?php echo $post[0]->ideal_match; ?></p>
						<p><span>Relationship History : </span><?php echo $post[0]->relationship_history; ?></p>
						<p><span>Lifestyle : </span><?php echo $post[0]->lifestyle; ?></p>
					</div>	
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

                                <div class="element text-align-right"><a href="#" class="btn btn-primary btn-rounded btn-xs" onclick="set_send_message_data('MatchFriends','<?php echo $post[0]->contact_email; ?>','<?php echo base_url(uri_string()); ?>');" data-modal-external-file="modal_send_message.php" data-target="modal-send-message">Send Message</a></div>

                            </div>

                            <hr>

                            <address>
                                <figure><i class="fa fa-map-marker"></i><?php echo $post[0]->zipcode; ?> </figure>

                                <figure><i class="fa fa-user"></i><a href="#"><?php echo $post[0]->contact_name; ?></a></figure>

                                <figure><i class="fa fa-envelope"></i><a href="#"><?php echo $post[0]->contact_email; ?></a></figure>

                                <figure><i class="fa fa-phone"></i><?php echo $post[0]->contact_number; ?></figure>

                                <figure><i class="fa fa-globe"></i><a href="<?php echo $post[0]->contact_website; ?>"><?php echo $post[0]->contact_website; ?></a></figure>
                            </address>

                        </div>

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
