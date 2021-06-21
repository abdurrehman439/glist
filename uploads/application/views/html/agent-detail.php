    <link href="<?php echo base_url(); ?>assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.nouislider.min.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">

    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Agent Detail</li>
            </ol>
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <section id="favourite-notification">
                    </section>
                    
                    <section class="page-title">
                        <h1><?php echo $users_data[0]['full_name']; ?></h1>
                    </section>
                    <!--end section-title-->
                    
                    <section>
                        <div class="subject-detail">
                            <div class="image">
                                <div class="bg-transfer">
                                    <img src="<?php echo base_url() . $users_data[0]['profile_picture']; ?>" alt="">
                                </div>
                            </div>
                            <div class="description">
                                <section class="name">
                                    <h3><?php echo $users_data[0]['full_name']; ?></h3>
                                    <p style="text-align: justify;text-justify: inter-word;word-break: break-all;"><?php if( strlen($users_data[0]['description']) > 200 ) { echo substr($users_data[0]['description'], 0, 200) . "...."; } else { echo $users_data[0]['description']; }?></p>
                                </section>
                                <!--end description-->
                                <section class="contacts">
                                    <figure><i class="fa fa-phone"></i><?php echo $users_data[0]['phone']; ?></figure>
                                    <figure><a href=""><i class="fa fa-envelope"></i><?php echo $users_data[0]['email']; ?></a></figure>
                                    <figure><i class="fa fa-globe"></i><?php echo $users_data[0]['zip_code']; ?></figure>
                                    <figure><a href=""><i class="fa fa-map-marker"></i><?php echo $users_data[0]['website']; ?></a></figure>
                                    <figure style="text-align:right;"><a style="color:white;" href="<?php echo base_url(); ?>home/user_detail/<?php echo $users_data[0]['user_id']; ?>" class="btn btn-primary btn-small btn-rounded">View User Profile</a></figure>
                                </section>
                                <!--end contacts-->
                                <section class="social">
                                    <a href="<?php echo $users_data[0]['twitter']; ?>"><i class="social_twitter"></i></a>
                                    <a href="<?php echo $users_data[0]['facebook']; ?>"><i class="social_facebook"></i></a>
                                    <a href="<?php echo $users_data[0]['linkedin']; ?>"><i class="social_linkedin"></i></a>
                                </section>
                                <!--end social-->
                            </div>
                            <!--end description-->
                        </div>
                        <!--end subject-detail-->
                    </section>
                    <section>
                        <h2>My Listings</h2>
                        <section>
                            <h3>Featured Listings</h3>
                            <div class="row">
                                <?php 
                                    
                                    $count = 0;

                                    $tab_name = array();
                                    $tab_name[] = 'events';
                                    $tab_name[] = 'garage_sales';
                                    $tab_name[] = 'sales';
                                    $tab_name[] = 'coupons';
                                    $tab_name[] = 'jobs';
                                    $tab_name[] = 'service_require';
                                    $tab_name[] = 'service_providers';
                                    $tab_name[] = 'realty';
                                    $tab_name[] = 'nearby_stores';
                                    $tab_name[] = 'attractions';
                                    $tab_name[] = 'hire_a_resource';
                                    $tab_name[] = 'tickets';
                                    $tab_name[] = 'store_closures';
                                    $tab_name[] = 'learnings';
                                    $tab_name[] = 'discards';
                                    $tab_name[] = 'restaurants';
                                    $tab_name[] = 'rent';
                                    $tab_name[] = 'funding';
                                    $tab_name[] = 'business_sales';
                                    $tab_name[] = 'match_friends';
                                    $tab_name[] = 'short_term_hiring';

                                    $tab_controller_name = array();
                                    $tab_controller_name[] = 'Events';
                                    $tab_controller_name[] = 'GarageSales';
                                    $tab_controller_name[] = 'Sales';
                                    $tab_controller_name[] = 'Coupons';
                                    $tab_controller_name[] = 'Jobs';
                                    $tab_controller_name[] = 'ServiceRequire';
                                    $tab_controller_name[] = 'ServiceProviders';
                                    $tab_controller_name[] = 'Realty';
                                    $tab_controller_name[] = 'NearbyStores';
                                    $tab_controller_name[] = 'Attractions';
                                    $tab_controller_name[] = 'HireAResource';
                                    $tab_controller_name[] = 'Tickets';
                                    $tab_controller_name[] = 'StoreClosures';
                                    $tab_controller_name[] = 'Learnings';
                                    $tab_controller_name[] = 'Discards';
                                    $tab_controller_name[] = 'Restaurants';
                                    $tab_controller_name[] = 'Rent';
                                    $tab_controller_name[] = 'Funding';
                                    $tab_controller_name[] = 'BusinessSales';
                                    $tab_controller_name[] = 'MatchFriends';
                                    $tab_controller_name[] = 'ShortTermHiring';

                                    for( $tab=0 ; $tab < 21 ; $tab++){
                                        if($count == 3)
                                            break;
                                        foreach($users_listing[$tab] as $row)
                                        {    
                                            if($count == 3)
                                                break;
                                ?>
                                            <div class="col-md-4 col-sm-4">
                                                <div class="item" data-id="2">
                                                    <a href="<?php echo base_url() . $tab_controller_name[$tab] .'/post_details/' . $row[$tab_name[$tab].'_id']; ?>">
                                                        <div class="description">

                                                            <?php
                                                                if(isset($row['category'])){
                                                            ?>
                                                                <div class="label label-default"><?php echo $row['category']; ?></div>
                                                            <?php
                                                                }
                                                            ?>
                                                            
                                                            <?php
                                                                if(isset($row['title'])){
                                                            ?>
                                                                <h3><?php echo $row['title']; ?></h3>
                                                            <?php
                                                                }
                                                            ?>    
                                                            
                                                            <?php
                                                            if(isset($row['zipcode'])){
															?>
																<h4><?php echo $row['zipcode']; ?></h4>
															<?php
																}
															?>  
                                                        </div>
                                                        <!--end description-->
                                                        <div class="image bg-transfer">
                                                            <img src="<?php echo base_url() . json_decode($row['file'])[0]; ?>" alt="">
                                                        </div>
                                                        <!--end image-->
                                                    </a>
                                                    <div class="additional-info">
                                                        <div class="rating-passive" data-rating="3">
                                                            <span class="stars"></span>
                                                            <span class="reviews">13</span>
                                                        </div>
                                                        <div class="controls-more">
                                                            <ul>
                                                                <li><a onclick="addToFavourite('<?php echo $tab_name[$tab]; ?>',<?php echo $row[$tab_name[$tab].'_id']; ?>);">Add to favorites</a></li>
                                                                <li><a href="">Add to watchlist</a></li>
                                                                <li><a href="" class="quick-detail">Quick detail</a></li>
                                                            </ul>
                                                        </div>
                                                        <!--end controls-more-->
                                                    </div>
                                                    <!--end additional-info-->
                                                </div>
                                                <!--end item-->
                                            </div>
                                            <!--<end col-md-3-->            
                                <?php
                                            $count++;
                                        }
                                    }
                                ?>
                                
                            </div>
                        </section>
                        <section>
                            <h3>All Listings</h3>
                                <?php 
                                    $count = 1;
                                    for( $tab=0 ; $tab < 21 ; $tab++)
                                    {
                                        foreach($users_listing[$tab] as $row)
                                        {
                                ?>
                                            <div class="item item-row" data-id="<?php echo $count++; ?>" data-latitude="40.73925841" data-longitude="-73.85348797">
                                                <a href="<?php echo base_url() . $tab_controller_name[$tab] .'/post_details/' . $row[$tab_name[$tab].'_id']; ?>">
                                                    <div class="image bg-transfer">
                                                        <img src="<?php echo base_url() . json_decode($row['file'])[0]; ?>" alt="">
                                                    </div>
                                                    <!--end image-->
                                                    <div class="map"></div>
                                                    <div class="description">   
                                                            
                                                        <?php
                                                            if(isset($row['title'])){
                                                        ?>
                                                            <h3><?php echo $row['title']; ?></h3>
                                                        <?php
                                                            }
                                                        ?>    
														
														<?php
                                                            if(isset($row['zipcode'])){
                                                        ?>
                                                        	<h4><?php echo $row['zipcode']; ?></h4>
														<?php
                                                            }
														?>  
														
                                                        <?php
                                                            if(isset($row['category'])){
                                                        ?>
                                                            <div class="label label-default"><?php echo $row['category']; ?></div>
                                                        <?php
                                                            }
                                                        ?>
                                                    </div>
                                                    <!--end description-->
                                                    <div class="additional-info">
                                                        <div class="rating-passive" data-rating="5">
                                                            <span class="stars"></span>
                                                            <span class="reviews">8</span>
                                                        </div>
                                                    </div>
                                                    <!--end additional-info-->
                                                </a>
                                                <div class="controls-more">
                                                    <ul>
                                                        <li><a onclick="addToFavourite('<?php echo $tab_name[$tab]; ?>',<?php echo $row[$tab_name[$tab].'_id']; ?>);">Add to favorites</a></li>
                                                        <li><a href="">Add to watchlist</a></li>
                                                        <li><a href="" class="quick-detail">Quick detail</a></li>
                                                    </ul>
                                                </div>
                                                <!--end controls-more-->
                                            </div>
                                            <!--end item.row-->          
                                <?php
                                        }
                                    }
                                ?>
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
    
                                        <div class="col-md-8">
    
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
    
                                        <div class="col-md-4">
    
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
                <!--end col-md-4-->
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
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom1.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/maps1.js"></script>

<script>

$(document).ready(function(){
    rating(".visitor-rating");
});

</script>
