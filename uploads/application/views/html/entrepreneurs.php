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
                <li class="active">Entrepreneurs Profile</li>
            </ol>
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <section class="page-title">
                        <h1>Entrepreneurs</h1>
                    </section>
                    <!--end section-title-->
                    <section>
                        <div class="row">

                            <?php 
                                $count = 0;
                                foreach($users_data as $row)
                                {
                            ?>
                                <div class="col-md-4 col-sm-6">
                                    <div class="subject-list">
                                        <a href="<?php echo base_url(); ?>home/entrepreneur_detail/<?php echo $row['user_id']?>" class="image">
                                            <div class="bg-transfer disable-on-mobile">
                                                <img src="<?php echo base_url() . $row['profile_picture']; ?>" alt="">
                                            </div>
                                        </a>
                                        <!--end image-->
                                        <div class="description">
                                            <section class="name">
                                                <h3><a href="<?php echo base_url(); ?>home/entrepreneur_detail/<?php echo $row['user_id']?>"><?php echo $row['full_name']?></a></h3>
                                                <h4><?php echo $users_listing[$count++]; ?> Listings</h4>
                                            </section>
                                            <!--end description-->
                                            <section class="contacts">
                                                <figure><i class="fa fa-map-marker"></i><?php echo $row['website']?></figure>
                                                <figure><i class="fa fa-globe"></i><?php echo $row['zip_code']?></figure>
                                            </section>
                                            <!--end contacts-->
                                            <section class="social">
                                                <a href="<?php echo $row['twitter']?>"><i class="social_twitter"></i></a>
                                                <a href="<?php echo $row['facebook']?>"><i class="social_facebook"></i></a>
                                                <a href="<?php echo $row['linkedin']?>"><i class="social_linkedin"></i></a>
												<a style="float:right;"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Online</a>
                                            </section>
                                            <!--end social-->
                                        </div>
                                        <!--end description-->
                                    </div>
                                    <!--end subject-list-->
                                </div>
                                <!--end col-md-4-->
                            <?php 
                                }
                            ?>

                        </div>
                        <!--end row-->
                    </section>

                    <!--<section>
                        <div class="center">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="disabled previous">
                                        <a href="#" aria-label="Previous">
                                            <i class="arrow_left"></i>
                                        </a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li class="active"><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li class="next">
                                        <a href="#" aria-label="Next">
                                            <i class="arrow_right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </section>-->
                   
                </div>
                <!--end col-md-9-->

                <div class="col-md-3 col-sm-3">
                    <aside class="sidebar">
                        <section>
                            <h2>Search Filter</h2>
                            <form class="form inputs-underline" action="#">
                                
                                <div class="form-group">
                                    <input type="text" class="form-control" name="keyword" placeholder="Enter Keyword">
                                </div>
                                <!--end form-group-->

                                <div class="form-group">
                                    <input type="text" class="form-control" name="zipcode" placeholder="Enter Zipcode">
                                </div>
                                <!--end form-group-->

                                <div class="form-group">
                                    <input type="text" class="form-control" name="category" placeholder="Enter Category">
                                </div>
                                <!--end form-group-->

                                <div class="form-group">
                                    <input type="text" class="form-control" name="language" placeholder="Enter Language">
                                </div>
                                <!--end form-group-->
                                
                                <!--

                                <div class="form-group">
                                    <select class="form-control selectpicker" name="location">
                                        <option value="">Location</option>
                                            <option value="1">New York</option>
                                            <option value="2">Washington</option>
                                            <option value="3">London</option>
                                            <option value="4">Paris</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control selectpicker" name="category">
                                        <option value="">Category</option>
                                            <option value="1">Restaurant</option>
                                            <option value="2">Event</option>
                                            <option value="3">Adrenaline</option>
                                            <option value="4">Sport</option>
                                            <option value="5">Wellness</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control date-picker" name="min-price" placeholder="Event Date">
                                </div>
                                <div class="form-group">
                                    <div class="ui-slider" id="price-slider" data-value-min="10" data-value-max="400" data-value-type="price" data-currency="$" data-currency-placement="before">
                                        <div class="values clearfix">
                                            <input class="value-min" name="value-min[]" readonly>
                                            <input class="value-max" name="value-max[]" readonly>
                                        </div>
                                        <div class="element"></div>
                                    </div>
                                </div>

                                -->

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary pull-right">Search Now<i class="fa fa-search"></i></button>
                                </div>
                                <!--end form-group-->
                            </form>
                        </section>
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
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/maps.js"></script>
