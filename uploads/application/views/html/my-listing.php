    <link href="<?php echo base_url(); ?>assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">
    
    <style>
        .box { padding: 10px; font-size: 12px; font-weight: bold; line-height: 50px; }
        .row { margin-bottom: 30px; }
    </style>

    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Contact</li>
            </ol>
            <section>
                <div class="section-title">
                    <h2>My Listing</h2>
                </div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Posts</a></li>
                    <li role="presentation"><a href="#favourites" aria-controls="favourites" role="tab" data-toggle="tab">Favourites</a></li>
                    <!--<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Watch List</a></li>-->
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home">
                        <section>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#events" aria-controls="events" role="tab" data-toggle="tab">Events</a></li>
                                <li role="presentation"><a href="#garage_sales" aria-controls="garage_sales" role="tab" data-toggle="tab">Garage Sales</a></li>
                                <li role="presentation"><a href="#sales" aria-controls="sales" role="tab" data-toggle="tab">Sales</a></li>
                                <li role="presentation"><a href="#coupons" aria-controls="coupons" role="tab" data-toggle="tab">Coupons</a></li>
                                <li role="presentation"><a href="#jobs" aria-controls="jobs" role="tab" data-toggle="tab">Jobs</a></li>
                                <li role="presentation"><a href="#service_require" aria-controls="service_require" role="tab" data-toggle="tab">Service Require</a></li>
                                <li role="presentation"><a href="#service_providers" aria-controls="service_providers" role="tab" data-toggle="tab">Service Offered</a></li>
                                <li role="presentation"><a href="#realty" aria-controls="realty" role="tab" data-toggle="tab">Realty</a></li>
                                <!--<li role="presentation"><a href="#nearby_stores" aria-controls="nearby_stores" role="tab" data-toggle="tab">Nearby Stores</a></li>-->
                                <li role="presentation"><a href="#attractions" aria-controls="attractions" role="tab" data-toggle="tab">Attractions</a></li>
                                <li role="presentation"><a href="#hire_a_resource" aria-controls="hire_a_resource" role="tab" data-toggle="tab">Gigs &amp; Freelancers </a></li>
                                <li role="presentation"><a href="#tickets" aria-controls="tickets" role="tab" data-toggle="tab">Tickets</a></li>
                                <li role="presentation"><a href="#store_closures" aria-controls="store_closures" role="tab" data-toggle="tab">Store Closures</a></li>
                                <li role="presentation"><a href="#learnings" aria-controls="learnings" role="tab" data-toggle="tab">Learning &amp; Classes</a></li>
                                <li role="presentation"><a href="#discards" aria-controls="discards" role="tab" data-toggle="tab">Discards &amp; Scraps</a></li>
                                <!--<li role="presentation"><a href="#restaurants" aria-controls="restaurants" role="tab" data-toggle="tab">Restaurants</a></li>-->
                                <li role="presentation"><a href="#rent" aria-controls="rent" role="tab" data-toggle="tab">Rent</a></li>
                                <li role="presentation"><a href="#funding" aria-controls="funding" role="tab" data-toggle="tab">Funding</a></li>
                                <li role="presentation"><a href="#business_sales" aria-controls="business_sales" role="tab" data-toggle="tab">Business Sales</a></li>
                                <li role="presentation"><a href="#short_term_hiring" aria-controls="short_term_hiring" role="tab" data-toggle="tab">Short Term Hiring</a></li>
                                <li role="presentation"><a href="#match_friends" aria-controls="match_friends" role="tab" data-toggle="tab">Match Friends</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="events">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($events as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>Events/post_details/<?php echo $temp['events_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>Events/post_details/<?php echo $temp['events_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a href="<?php echo base_url(); ?>user/edit_submit_listing/Events/<?php echo $temp['events_id']; ?>" class="link icon"><i class="fa fa-edit"></i>Edit</a>
                                                                <a href="<?php echo base_url(); ?>home/reviews" class="link icon"><i class="fa fa-comment"></i>Reviews</a>
                                                                <a href="#" class="link icon delete" onclick=" delete_record( 'Events' , <?php echo $temp['events_id']; ?> ); "><i class="fa fa-trash"></i>Delete</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="garage_sales">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($garage_sales as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>GarageSales/post_details/<?php echo $temp['garage_sales_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>GarageSales/post_details/<?php echo $temp['garage_sales_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a href="<?php echo base_url(); ?>user/edit_submit_listing/GarageSales/<?php echo $temp['garage_sales_id']; ?>" class="link icon"><i class="fa fa-edit"></i>Edit</a>
                                                                <a href="<?php echo base_url(); ?>home/reviews" class="link icon"><i class="fa fa-comment"></i>Reviews</a>
                                                                <a href="#" class="link icon delete" onclick=" delete_record( 'GarageSales' , <?php echo $temp['garage_sales_id']; ?> ); "><i class="fa fa-trash"></i>Delete</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="sales">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($sales as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>Sales/post_details/<?php echo $temp['sales_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>Sales/post_details/<?php echo $temp['Sales_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a href="<?php echo base_url(); ?>user/edit_submit_listing/Sales/<?php echo $temp['sales_id']; ?>" class="link icon"><i class="fa fa-edit"></i>Edit</a>
                                                                <a href="<?php echo base_url(); ?>home/reviews" class="link icon"><i class="fa fa-comment"></i>Reviews</a>
                                                                <a href="#" class="link icon delete" onclick=" delete_record( 'Sales' , <?php echo $temp['sales_id']; ?> ); "><i class="fa fa-trash"></i>Delete</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="coupons">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($coupons as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>Coupons/post_details/<?php echo $temp['coupons_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>Coupons/post_details/<?php echo $temp['coupons_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a href="<?php echo base_url(); ?>user/edit_submit_listing/Coupons/<?php echo $temp['coupons_id']; ?>" class="link icon"><i class="fa fa-edit"></i>Edit</a>
                                                                <a href="<?php echo base_url(); ?>home/reviews" class="link icon"><i class="fa fa-comment"></i>Reviews</a>
                                                                <a href="#" class="link icon delete" onclick=" delete_record( 'Coupons' , <?php echo $temp['coupons_id']; ?> ); "><i class="fa fa-trash"></i>Delete</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="jobs">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($jobs as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>Jobs/post_details/<?php echo $temp['jobs_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>Jobs/post_details/<?php echo $temp['jobs_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a href="<?php echo base_url(); ?>user/edit_submit_listing/Jobs/<?php echo $temp['jobs_id']; ?>" class="link icon"><i class="fa fa-edit"></i>Edit</a>
                                                                <a href="<?php echo base_url(); ?>home/reviews" class="link icon"><i class="fa fa-comment"></i>Reviews</a>
                                                                <a href="#" class="link icon delete" onclick=" delete_record( 'Jobs' , <?php echo $temp['jobs_id']; ?> ); "><i class="fa fa-trash"></i>Delete</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="service_require">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($service_require as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>ServiceRequire/post_details/<?php echo $temp['service_require_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>ServiceRequire/post_details/<?php echo $temp['service_require_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a href="<?php echo base_url(); ?>user/edit_submit_listing/ServiceRequire/<?php echo $temp['service_require_id']; ?>" class="link icon"><i class="fa fa-edit"></i>Edit</a>
                                                                <a href="<?php echo base_url(); ?>home/reviews" class="link icon"><i class="fa fa-comment"></i>Reviews</a>
                                                                <a href="#" class="link icon delete" onclick=" delete_record( 'ServiceRequire' , <?php echo $temp['service_require_id']; ?> ); "><i class="fa fa-trash"></i>Delete</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="service_providers">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($service_providers as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>ServiceProviders/post_details/<?php echo $temp['service_providers_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>ServiceProviders/post_details/<?php echo $temp['service_providers_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a href="<?php echo base_url(); ?>user/edit_submit_listing/ServiceProviders/<?php echo $temp['service_providers_id']; ?>" class="link icon"><i class="fa fa-edit"></i>Edit</a>
                                                                <a href="<?php echo base_url(); ?>home/reviews" class="link icon"><i class="fa fa-comment"></i>Reviews</a>
                                                                <a href="#" class="link icon delete" onclick=" delete_record( 'ServiceProviders' , <?php echo $temp['service_providers_id']; ?> ); "><i class="fa fa-trash"></i>Delete</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="realty">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($realty as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>Realty/post_details/<?php echo $temp['realty_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>Realty/post_details/<?php echo $temp['realty_id']; ?>"><h2>See Post Details</h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a href="<?php echo base_url(); ?>user/edit_submit_listing/Realty/<?php echo $temp['realty_id']; ?>" class="link icon"><i class="fa fa-edit"></i>Edit</a>
                                                                <a href="<?php echo base_url(); ?>home/reviews" class="link icon"><i class="fa fa-comment"></i>Reviews</a>
                                                                <a href="#" class="link icon delete" onclick=" delete_record( 'Realty' , <?php echo $temp['realty_id']; ?> ); "><i class="fa fa-trash"></i>Delete</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="nearby_stores">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($nearby_stores as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>NearbyStores/post_details/<?php echo $temp['nearby_stores_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>NearbyStores/post_details/<?php echo $temp['nearby_stores_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a href="<?php echo base_url(); ?>user/edit_submit_listing/NearbyStores/<?php echo $temp['nearby_stores_id']; ?>" class="link icon"><i class="fa fa-edit"></i>Edit</a>
                                                                <a href="<?php echo base_url(); ?>home/reviews" class="link icon"><i class="fa fa-comment"></i>Reviews</a>
                                                                <a href="#" class="link icon delete" onclick=" delete_record( 'NearbyStores' , <?php echo $temp['nearby_stores_id']; ?> ); "><i class="fa fa-trash"></i>Delete</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="attractions">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($attractions as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>Attractions/post_details/<?php echo $temp['attractions_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>Attractions/post_details/<?php echo $temp['attractions_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a href="<?php echo base_url(); ?>user/edit_submit_listing/Attractions/<?php echo $temp['attractions_id']; ?>" class="link icon"><i class="fa fa-edit"></i>Edit</a>
                                                                <a href="<?php echo base_url(); ?>home/reviews" class="link icon"><i class="fa fa-comment"></i>Reviews</a>
                                                                <a href="#" class="link icon delete" onclick=" delete_record( 'Attractions' , <?php echo $temp['attractions_id']; ?> ); "><i class="fa fa-trash"></i>Delete</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="hire_a_resource">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($hire_a_resource as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>HireAResource/post_details/<?php echo $temp['hire_a_resource_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>HireAResource/post_details/<?php echo $temp['hire_a_resource_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a href="<?php echo base_url(); ?>user/edit_submit_listing/HireAResource/<?php echo $temp['hire_a_resource_id']; ?>" class="link icon"><i class="fa fa-edit"></i>Edit</a>
                                                                <a href="<?php echo base_url(); ?>home/reviews" class="link icon"><i class="fa fa-comment"></i>Reviews</a>
                                                                <a href="#" class="link icon delete" onclick=" delete_record( 'HireAResource' , <?php echo $temp['hire_a_resource_id']; ?> ); "><i class="fa fa-trash"></i>Delete</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tickets">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($tickets as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>Tickets/post_details/<?php echo $temp['tickets_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>Tickets/post_details/<?php echo $temp['tickets_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a href="<?php echo base_url(); ?>user/edit_submit_listing/Tickets/<?php echo $temp['tickets_id']; ?>" class="link icon"><i class="fa fa-edit"></i>Edit</a>
                                                                <a href="<?php echo base_url(); ?>home/reviews" class="link icon"><i class="fa fa-comment"></i>Reviews</a>
                                                                <a href="#" class="link icon delete" onclick=" delete_record( 'Tickets' , <?php echo $temp['tickets_id']; ?> ); "><i class="fa fa-trash"></i>Delete</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="store_closures">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($store_closures as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>StoreClosures/post_details/<?php echo $temp['store_closures_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>StoreClosures/post_details/<?php echo $temp['store_closures_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a href="<?php echo base_url(); ?>user/edit_submit_listing/StoreClosures/<?php echo $temp['store_closures_id']; ?>" class="link icon"><i class="fa fa-edit"></i>Edit</a>
                                                                <a href="<?php echo base_url(); ?>home/reviews" class="link icon"><i class="fa fa-comment"></i>Reviews</a>
                                                                <a href="#" class="link icon delete" onclick=" delete_record( 'StoreClosures' , <?php echo $temp['store_closures_id']; ?> ); "><i class="fa fa-trash"></i>Delete</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="learnings">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($learnings as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>Learnings/post_details/<?php echo $temp['learnings_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>Learnings/post_details/<?php echo $temp['learnings_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a href="<?php echo base_url(); ?>user/edit_submit_listing/Learnings/<?php echo $temp['learnings_id']; ?>" class="link icon"><i class="fa fa-edit"></i>Edit</a>
                                                                <a href="<?php echo base_url(); ?>home/reviews" class="link icon"><i class="fa fa-comment"></i>Reviews</a>
                                                                <a href="#" class="link icon delete" onclick=" delete_record( 'Learnings' , <?php echo $temp['learnings_id']; ?> ); "><i class="fa fa-trash"></i>Delete</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="discards">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($discards as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>Discards/post_details/<?php echo $temp['discards_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>Discards/post_details/<?php echo $temp['discards_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a href="<?php echo base_url(); ?>user/edit_submit_listing/Discards/<?php echo $temp['discards_id']; ?>" class="link icon"><i class="fa fa-edit"></i>Edit</a>
                                                                <a href="<?php echo base_url(); ?>home/reviews" class="link icon"><i class="fa fa-comment"></i>Reviews</a>
                                                                <a href="#" class="link icon delete" onclick=" delete_record( 'Discards' , <?php echo $temp['discards_id']; ?> ); "><i class="fa fa-trash"></i>Delete</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="restaurants">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($restaurants as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>Restaurants/post_details/<?php echo $temp['restaurants_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>Restaurants/post_details/<?php echo $temp['restaurants_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a href="<?php echo base_url(); ?>user/edit_submit_listing/Restaurants/<?php echo $temp['restaurants_id']; ?>" class="link icon"><i class="fa fa-edit"></i>Edit</a>
                                                                <a href="<?php echo base_url(); ?>home/reviews" class="link icon"><i class="fa fa-comment"></i>Reviews</a>
                                                                <a href="#" class="link icon delete" onclick=" delete_record( 'Restaurants' , <?php echo $temp['restaurants_id']; ?> ); "><i class="fa fa-trash"></i>Delete</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
								<div role="tabpanel" class="tab-pane fade" id="rent">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($rent as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>Rent/post_details/<?php echo $temp['rent_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>Rent/post_details/<?php echo $temp['rent_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a href="<?php echo base_url(); ?>user/edit_submit_listing/Rent/<?php echo $temp['rent_id']; ?>" class="link icon"><i class="fa fa-edit"></i>Edit</a>
                                                                <a href="<?php echo base_url(); ?>home/reviews" class="link icon"><i class="fa fa-comment"></i>Reviews</a>
                                                                <a href="#" class="link icon delete" onclick=" delete_record( 'Rent' , <?php echo $temp['rent_id']; ?> ); "><i class="fa fa-trash"></i>Delete</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
								<div role="tabpanel" class="tab-pane fade" id="funding">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($funding as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>Funding/post_details/<?php echo $temp['funding_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>Funding/post_details/<?php echo $temp['funding_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a href="<?php echo base_url(); ?>user/edit_submit_listing/Funding/<?php echo $temp['funding_id']; ?>" class="link icon"><i class="fa fa-edit"></i>Edit</a>
                                                                <a href="<?php echo base_url(); ?>home/reviews" class="link icon"><i class="fa fa-comment"></i>Reviews</a>
                                                                <a href="#" class="link icon delete" onclick=" delete_record( 'Funding' , <?php echo $temp['funding_id']; ?> ); "><i class="fa fa-trash"></i>Delete</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
								<div role="tabpanel" class="tab-pane fade" id="business_sales">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($business_sales as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>BusinessSales/post_details/<?php echo $temp['business_sales_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>BusinessSales/post_details/<?php echo $temp['business_sales_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a href="<?php echo base_url(); ?>user/edit_submit_listing/BusinessSales/<?php echo $temp['business_sales_id']; ?>" class="link icon"><i class="fa fa-edit"></i>Edit</a>
                                                                <a href="<?php echo base_url(); ?>home/reviews" class="link icon"><i class="fa fa-comment"></i>Reviews</a>
                                                                <a href="#" class="link icon delete" onclick=" delete_record( 'BusinessSales' , <?php echo $temp['business_sales_id']; ?> ); "><i class="fa fa-trash"></i>Delete</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
								<div role="tabpanel" class="tab-pane fade" id="short_term_hiring">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($short_term_hiring as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>ShortTermHiring/post_details/<?php echo $temp['short_term_hiring_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>ShortTermHiring/post_details/<?php echo $temp['short_term_hiring_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a href="<?php echo base_url(); ?>user/edit_submit_listing/ShortTermHiring/<?php echo $temp['short_term_hiring_id']; ?>" class="link icon"><i class="fa fa-edit"></i>Edit</a>
                                                                <a href="<?php echo base_url(); ?>home/reviews" class="link icon"><i class="fa fa-comment"></i>Reviews</a>
                                                                <a href="#" class="link icon delete" onclick=" delete_record( 'ShortTermHiring' , <?php echo $temp['short_term_hiring_id']; ?> ); "><i class="fa fa-trash"></i>Delete</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
								<div role="tabpanel" class="tab-pane fade" id="match_friends">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($match_friends as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>MatchFriends/post_details/<?php echo $temp['match_friends_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') { echo base_url() . json_decode($temp['file'])[0]; } ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>MatchFriends/post_details/<?php echo $temp['match_friends_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a href="<?php echo base_url(); ?>user/edit_submit_listing/MatchFriends/<?php echo $temp['match_friends_id']; ?>" class="link icon"><i class="fa fa-edit"></i>Edit</a>
                                                                <a href="<?php echo base_url(); ?>home/reviews" class="link icon"><i class="fa fa-comment"></i>Reviews</a>
                                                                <a href="#" class="link icon delete" onclick=" delete_record( 'MatchFriends' , <?php echo $temp['match_friends_id']; ?> ); "><i class="fa fa-trash"></i>Delete</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                            </div>
                        </section>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="favourites">
                    <section>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#favourite_events" aria-controls="favourite_events" role="tab" data-toggle="tab">Events</a></li>
                                <li role="presentation"><a href="#favourite_garage_sales" aria-controls="favourite_garage_sales" role="tab" data-toggle="tab">Garage Sales</a></li>
                                <li role="presentation"><a href="#favourite_sales" aria-controls="favourite_sales" role="tab" data-toggle="tab">Sales</a></li>
                                <li role="presentation"><a href="#favourite_coupons" aria-controls="favourite_coupons" role="tab" data-toggle="tab">Coupons</a></li>
                                <li role="presentation"><a href="#favourite_jobs" aria-controls="favourite_jobs" role="tab" data-toggle="tab">Jobs</a></li>
                                <li role="presentation"><a href="#favourite_service_require" aria-controls="favourite_service_require" role="tab" data-toggle="tab">Service Require</a></li>
                                <li role="presentation"><a href="#favourite_service_providers" aria-controls="favourite_service_providers" role="tab" data-toggle="tab">Service Offered</a></li>
                                <li role="presentation"><a href="#favourite_realty" aria-controls="favourite_realty" role="tab" data-toggle="tab">Realty</a></li>
                                <!--<li role="presentation"><a href="#favourite_nearby_stores" aria-controls="favourite_nearby_stores" role="tab" data-toggle="tab">Nearby Stores</a></li>-->
                                <li role="presentation"><a href="#favourite_attractions" aria-controls="favourite_attractions" role="tab" data-toggle="tab">Attractions</a></li>
                                <li role="presentation"><a href="#favourite_hire_a_resource" aria-controls="favourite_hire_a_resource" role="tab" data-toggle="tab">Gigs &amp; Freelancers </a></li>
                                <li role="presentation"><a href="#favourite_tickets" aria-controls="favourite_tickets" role="tab" data-toggle="tab">Tickets</a></li>
                                <li role="presentation"><a href="#favourite_store_closures" aria-controls="favourite_store_closures" role="tab" data-toggle="tab">Store Closures</a></li>
                                <li role="presentation"><a href="#favourite_learnings" aria-controls="favourite_learnings" role="tab" data-toggle="tab">Learning &amp; Classes</a></li>
                                <li role="presentation"><a href="#favourite_discards" aria-controls="favourite_discards" role="tab" data-toggle="tab">Discards  &amp; Scraps</a></li>
                                <!--<li role="presentation"><a href="#favourite_restaurants" aria-controls="favourite_restaurants" role="tab" data-toggle="tab">Restaurants</a></li>-->
                                <li role="presentation"><a href="#favourite_rent" aria-controls="favourite_rent" role="tab" data-toggle="tab">Rent</a></li>
                                <li role="presentation"><a href="#favourite_funding" aria-controls="favourite_funding" role="tab" data-toggle="tab">Funding</a></li>
                                <li role="presentation"><a href="#favourite_business_sales" aria-controls="favourite_business_sales" role="tab" data-toggle="tab">Business Sales</a></li>
                                <li role="presentation"><a href="#favourite_short_term_hiring" aria-controls="favourite_short_term_hiring" role="tab" data-toggle="tab">Short Term Hiring</a></li>
                                <li role="presentation"><a href="#favourite_match_friends" aria-controls="favourite_match_friends" role="tab" data-toggle="tab">Match Friends</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="favourite_events">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($favourite_events as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>Events/post_details/<?php echo $temp['events_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>Events/post_details/<?php echo $temp['events_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a onclick=" remove_from_favourite( <?php echo $temp['events_id']; ?> , 'events' ); " class="link icon delete" ><i class="fa fa-trash"></i>Remove from favourites</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="favourite_garage_sales">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($favourite_garage_sales as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>GarageSales/post_details/<?php echo $temp['garage_sales_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>GarageSales/post_details/<?php echo $temp['garage_sales_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a onclick=" remove_from_favourite( <?php echo $temp['garage_sales_id']; ?> , 'garage_sales' ); " class="link icon delete" ><i class="fa fa-trash"></i>Remove from favourites</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="favourite_sales">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($favourite_sales as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>Sales/post_details/<?php echo $temp['sales_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>Sales/post_details/<?php echo $temp['sales_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a onclick=" remove_from_favourite( <?php echo $temp['sales_id']; ?> , 'sales' ); " class="link icon delete" ><i class="fa fa-trash"></i>Remove from favourites</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="favourite_coupons">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($favourite_coupons as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>Coupons/post_details/<?php echo $temp['coupons_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>Coupons/post_details/<?php echo $temp['coupons_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a onclick=" remove_from_favourite( <?php echo $temp['coupons_id']; ?> , 'coupons' ); " class="link icon delete" ><i class="fa fa-trash"></i>Remove from favourites</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="favourite_jobs">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($favourite_jobs as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>Jobs/post_details/<?php echo $temp['jobs_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>Jobs/post_details/<?php echo $temp['jobs_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a onclick=" remove_from_favourite( <?php echo $temp['jobs_id']; ?> , 'jobs' ); " class="link icon delete" ><i class="fa fa-trash"></i>Remove from favourites</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="favourite_service_require">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($favourite_service_require as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>ServiceRequire/post_details/<?php echo $temp['service_require_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>ServiceRequire/post_details/<?php echo $temp['service_require_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a onclick=" remove_from_favourite( <?php echo $temp['service_require_id']; ?> , 'service_require' ); " class="link icon delete" ><i class="fa fa-trash"></i>Remove from favourites</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="favourite_service_providers">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($favourite_service_providers as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>ServiceProviders/post_details/<?php echo $temp['service_providers_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>ServiceProviders/post_details/<?php echo $temp['service_providers_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a onclick=" remove_from_favourite( <?php echo $temp['service_providers_id']; ?> , 'service_providers' ); " class="link icon delete" ><i class="fa fa-trash"></i>Remove from favourites</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="favourite_realty">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($favourite_realty as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>Realty/post_details/<?php echo $temp['realty_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>Realty/post_details/<?php echo $temp['realty_id']; ?>"><h2>See Post Details</h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a onclick=" remove_from_favourite( <?php echo $temp['realty_id']; ?> , 'realty' ); " class="link icon delete" ><i class="fa fa-trash"></i>Remove from favourites</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="favourite_nearby_stores">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($favourite_nearby_stores as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>NearbyStores/post_details/<?php echo $temp['nearby_stores_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>NearbyStores/post_details/<?php echo $temp['nearby_stores_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a onclick=" remove_from_favourite( <?php echo $temp['nearby_stores_id']; ?> , 'nearby_stores' ); " class="link icon delete" ><i class="fa fa-trash"></i>Remove from favourites</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="favourite_attractions">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($favourite_attractions as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>Attractions/post_details/<?php echo $temp['attractions_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>Attractions/post_details/<?php echo $temp['attractions_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a onclick=" remove_from_favourite( <?php echo $temp['attractions_id']; ?> , 'attractions' ); " class="link icon delete" ><i class="fa fa-trash"></i>Remove from favourites</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="favourite_hire_a_resource">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($favourite_hire_a_resource as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>HireAResource/post_details/<?php echo $temp['hire_a_resource_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>HireAResource/post_details/<?php echo $temp['hire_a_resource_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a onclick=" remove_from_favourite( <?php echo $temp['hire_a_resource_id']; ?> , 'hire_a_resource' ); " class="link icon delete" ><i class="fa fa-trash"></i>Remove from favourites</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="favourite_tickets">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($favourite_tickets as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>Tickets/post_details/<?php echo $temp['tickets_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>Tickets/post_details/<?php echo $temp['tickets_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a onclick=" remove_from_favourite( <?php echo $temp['tickets_id']; ?> , 'tickets' ); " class="link icon delete" ><i class="fa fa-trash"></i>Remove from favourites</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="favourite_store_closures">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($favourite_store_closures as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>StoreClosures/post_details/<?php echo $temp['store_closures_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>StoreClosures/post_details/<?php echo $temp['store_closures_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a onclick=" remove_from_favourite( <?php echo $temp['store_closures_id']; ?> , 'store_closures' ); " class="link icon delete" ><i class="fa fa-trash"></i>Remove from favourites</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="favourite_learnings">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($favourite_learnings as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>Learnings/post_details/<?php echo $temp['learnings_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>Learnings/post_details/<?php echo $temp['learnings_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a onclick=" remove_from_favourite( <?php echo $temp['learnings_id']; ?> , 'learnings' ); " class="link icon delete" ><i class="fa fa-trash"></i>Remove from favourites</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="favourite_discards">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($favourite_discards as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>Discards/post_details/<?php echo $temp['discards_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>Discards/post_details/<?php echo $temp['discards_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a onclick=" remove_from_favourite( <?php echo $temp['discards_id']; ?> , 'discards' ); " class="link icon delete" ><i class="fa fa-trash"></i>Remove from favourites</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="favourite_restaurants">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($favourite_restaurants as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>Restaurants/post_details/<?php echo $temp['restaurants_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>Restaurants/post_details/<?php echo $temp['restaurants_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a onclick=" remove_from_favourite( <?php echo $temp['restaurants_id']; ?> , 'restaurants' ); " class="link icon delete" ><i class="fa fa-trash"></i>Remove from favourites</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
								<div role="tabpanel" class="tab-pane fade" id="favourite_rent">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($favourite_rent as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>Rent/post_details/<?php echo $temp['rent_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>Rent/post_details/<?php echo $temp['rent_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a onclick=" remove_from_favourite( <?php echo $temp['rent_id']; ?> , 'rent' ); " class="link icon delete" ><i class="fa fa-trash"></i>Remove from favourites</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
								<div role="tabpanel" class="tab-pane fade" id="favourite_funding">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($favourite_funding as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>Funding/post_details/<?php echo $temp['funding_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>Funding/post_details/<?php echo $temp['funding_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a onclick=" remove_from_favourite( <?php echo $temp['funding_id']; ?> , 'funding' ); " class="link icon delete" ><i class="fa fa-trash"></i>Remove from favourites</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
								<div role="tabpanel" class="tab-pane fade" id="favourite_business_sales">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($favourite_business_sales as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>BusinessSales/post_details/<?php echo $temp['business_sales_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>BusinessSales/post_details/<?php echo $temp['business_sales_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a onclick=" remove_from_favourite( <?php echo $temp['business_sales_id']; ?> , 'business_sales' ); " class="link icon delete" ><i class="fa fa-trash"></i>Remove from favourites</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
								<div role="tabpanel" class="tab-pane fade" id="favourite_short_term_hiring">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($favourite_short_term_hiring as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>ShortTermHiring/post_details/<?php echo $temp['short_term_hiring_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>ShortTermHiring/post_details/<?php echo $temp['short_term_hiring_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <figure class="location"><?php echo $temp['zipcode']; ?></figure>
                                                                <figure class="label label-info"><?php echo $temp['category']; ?></figure>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a onclick=" remove_from_favourite( <?php echo $temp['short_term_hiring_id']; ?> , 'short_term_hiring' ); " class="link icon delete" ><i class="fa fa-trash"></i>Remove from favourites</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
								<div role="tabpanel" class="tab-pane fade" id="favourite_match_friends">
                                    <div class="my-items table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Listings</th>
                                                    <th>Featured</th>
                                                    <th>Views</th>
                                                    <th>Reviews</th>
                                                    <th>Rating</th>
                                                    <th>Date Posted</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($favourite_match_friends as $temp)
                                                    {
                                                ?>
                                                    <tr class="my-item">
                                                        <td>
                                                            <div class="image-wrapper">
                                                                <a href="<?php echo base_url(); ?>MatchFriends/post_details/<?php echo $temp['match_friends_id']; ?>" class="image">
                                                                    <div class="bg-transfer">
                                                                        <img src="<?php if($temp['file'] != '[]') echo base_url() . json_decode($temp['file'])[0]; ?>" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="info">
                                                                <a href="<?php echo base_url(); ?>MatchFriends/post_details/<?php echo $temp['match_friends_id']; ?>"><h2><?php echo $temp['title']; ?></h2></a>
                                                                <div class="additional-info"></div>
                                                                <!--end additional-info-->
                                                            </div>
                                                            <!--end info-->
                                                        </td>
                                                        <td class="featured yes"></td>
                                                        <td class="views"></td>
                                                        <td class="reviews"></td>
                                                        <td class="rating"></td>
                                                        <td class="last-edited"><?php echo date('jS F Y' , strtotime( $temp['created_at'] ) ); ?>
                                                            <div class="edit-options">
                                                                <a onclick=" remove_from_favourite( <?php echo $temp['match_friends_id']; ?> , 'match_friends' ); " class="link icon delete" ><i class="fa fa-trash"></i>Remove from favourites</a>
                                                            </div>
                                                            <!--end edit-options-->
                                                        </td>
                                                    </tr>
                                                    <!--end my-item-->
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end my-items-->
                                </div>
                            </div>
                        </section>
                    </div>
                    <!--<div role="tabpanel" class="tab-pane fade" id="settings">
                    </div>-->
                </div>
            </section>
            <!--end breadcrumb-->

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
    function delete_record(url,id)
    {
        if (confirm('Are you sure you want to delete this post?')) {
            window.location = "<?php echo base_url(); ?>" + url + '/delete/' + id;
        }
    }
    function remove_from_favourite(id,type)
    {
        if (confirm('Are you sure you want to remove this post from favourites?')) {
            window.location = "<?php echo base_url(); ?>user/remove_from_favourite?id=" + id + "&type=" + type;
        }
    }
    
</script>
