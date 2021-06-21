<!DOCTYPE html>

<html lang="en-US">

<head>

    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="author" content="ThemeStarz" />

    <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>/assets/img/favicon.jpg"/>

    <title>Glokallist</title>

</head>



<body class="nav-btn-only homepage">

<div class="page-wrapper">

    <header id="page-header">

        <nav>

            <div class="left">

                <!--<a>glokallist</a>--><a href="<?php echo base_url(); ?>" class="brand"><img style="width: 60px;" src="<?php echo base_url(); ?>/assets/img/logo.png" alt=""></a>

            </div>

            <!--end left-->

            <div class="right">

                <div class="primary-nav has-mega-menu">

                    <ul class="navigation">

                        <a href="https://career.glokallist.com/" class="btn btn-primary btn-small icon shadow add-listing"><span>Careers</span></a>
                        <a href="https://career.glokallist.com/" class="btn btn-primary btn-small icon shadow add-listing"><span>Apply for franchise</span></a>

                        &nbsp;&nbsp;&nbsp;

                        <li <?php if(isset($menu) && $menu == "home"){echo "class=\"active\"";} ?> ><a href="<?php echo base_url(); ?>">Home</a></li>

                        <?php
                            /*if(isset($user_id)):*/
                        ?>

                        <li <?php if(isset($menu) && $menu == "browse"){echo "class=\"active has-child\"";}else{echo "class=\"has-child\"";} ?> ><a>Browse</a>

                            <div class="wrapper">

                                <div id="nav-browsepages" class="nav-wrapper">

                                    <ul>

                                        <li><a href="<?php echo base_url(); ?>Events">Events</a></li>

                                        <li><a href="<?php echo base_url(); ?>GarageSales">Garage Sales</a></li>

                                        <li><a href="<?php echo base_url(); ?>Sales">Sales</a></li>

                                        <li><a href="<?php echo base_url(); ?>Coupons">Coupons</a></li>

                                        <li><a href="<?php echo base_url(); ?>Jobs">Jobs</a></li>

                                        <li><a href="<?php echo base_url(); ?>ServiceRequire">Service Require</a></li>

                                        <li><a href="<?php echo base_url(); ?>ServiceProviders">Service Offered</a></li>

                                        <li><a href="<?php echo base_url(); ?>Realty">Realty</a></li>

                                        <!--<li><a href="<?php echo base_url(); ?>NearbyStores">Nearby Stores</a></li>-->

                                        <li><a href="<?php echo base_url(); ?>Attractions">Attractions</a></li>

                                        <li><a href="<?php echo base_url(); ?>HireAResource">Gigs &amp; Freelancers</a></li>

                                        <li><a href="<?php echo base_url(); ?>Tickets">Tickets</a></li>

                                        <li><a href="<?php echo base_url(); ?>StoreClosures">Store Closures</a></li>

                                        <li><a href="<?php echo base_url(); ?>Learnings">Learning &amp; Classes</a></li>

                                        <li><a href="<?php echo base_url(); ?>Discards">Discards &amp; Scraps</a></li>

                                        <!--<li><a href="<?php echo base_url(); ?>Restaurants">Restaurants</a></li>-->

                                        <li><a href="<?php echo base_url(); ?>Rent">Rent</a></li>

                                        <li><a href="<?php echo base_url(); ?>Funding">Funding</a></li>

                                        <li><a href="<?php echo base_url(); ?>BusinessSales">Business Sales</a></li>

                                        <li><a href="<?php echo base_url(); ?>ShortTermHiring">Short Term Hiring</a></li>
										
                                        <li><a href="<?php echo base_url(); ?>MatchFriends">Match Friends</a></li>

                                    </ul>

                                </div>

                            </div>

                        </li>

                        <?php /*endif;*/ ?>

                        <?php
                            if(isset($user_id)):
                        ?>

                        <li <?php if(isset($menu) && $menu == "user"){echo "class=\"active has-child\"";}else{echo "class=\"has-child\"";} ?>  ><a>User</a>

                            <div class="wrapper">

                                <div id="nav-userpages" class="nav-wrapper">

                                    <ul>

                                        <li><a href="<?php echo base_url(); ?>user/profile">Profile</a></li>

                                        <li><a href="<?php echo base_url(); ?>user/my_listing">My Listing</a></li>

                                        <li><a href="<?php echo base_url(); ?>user/submit_listing">Submit Listing</a></li>

                                    </ul>

                                </div>

                            </div>

                        </li>

                        <?php endif; ?>

                        <?php
                            /*if(isset($user_id)):*/
                        ?>
                        
                            <li <?php if(isset($menu) && $menu == "professionals-listing"){echo "class=\"active has-child\"";}else{echo "class=\"has-child\"";} ?>  ><a>Professionals Listing</a>
    
                                <div class="wrapper">
    
                                    <div id="nav-userpages" class="nav-wrapper">
    
                                        <ul>
    
                                            <li><a href="<?php echo base_url(); ?>home/agent_listing">Agent Listing</a></li>
    
                                            <li><a href="<?php echo base_url(); ?>home/freelancers">Freelancers</a></li>
                                            
                                            <li><a href="<?php echo base_url(); ?>home/resume">Professionals Profile</a></li>
    
                                            <li><a href="<?php echo base_url(); ?>home/service_providers">Service Providers</a></li>
                                            
                                            <li><a href="<?php echo base_url(); ?>home/entrepreneurs">Entrepreneurs Profile</a></li>
    
                                            <li><a href="<?php echo base_url(); ?>home/investors">Investors Profile</a></li>
    
                                        </ul>
    
                                    </div>
    
                                </div>
    
                            </li>

                        <!--<li <?php if(isset($menu) && $menu == "agent-listing"){echo "class=\"active\"";} ?> ><a href="<?php echo base_url(); ?>home/agent_listing">Agent Listing</a></li>

                        <li <?php if(isset($menu) && $menu == "service-provider-listing"){echo "class=\"active\"";} ?> ><a href="<?php echo base_url(); ?>home/service_provider_listing">Service Provider Listing</a></li>-->

                        <?php /*endif;*/ ?>

                     <!--   <li <?php // if(isset($menu) && $menu == "how-it-works"){//echo "class=\"active\"";} ?> ><a href="<?php // echo base_url(); ?>home/how_it_works">How It Works</a></li>-->

                        

                        <li <?php if(isset($menu) && $menu == "about"){echo "class=\"active has-child\"";}else{echo "class=\"has-child\"";} ?> ><a>About</a>

                            <div class="wrapper">

                                <div id="nav-aboutpages" class="nav-wrapper">

                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>home/faq">FAQ</a></li>

                                        <li><a href="<?php echo base_url(); ?>home/pricing">Pricing</a></li>

                                        <li><a href="<?php echo base_url(); ?>home/how_it_works">How It Works</a></li>

                                        <li><a href="<?php echo base_url(); ?>home/terms_and_conditions">Terms & Conditions</a></li>
                                        
                                        <li><a href="<?php echo base_url(); ?>home/privacy_policy">Privacy Policy</a></li>
                                    </ul>

                                </div>

                            </div>

                        </li>



                        <li <?php if(isset($menu) && $menu == "reviews"){echo "class=\"active\"";} ?> ><a href="<?php echo base_url(); ?>home/reviews">Reviews</a></li>

                        <li <?php if(isset($menu) && $menu == "blog"){echo "class=\"active\"";} ?> ><a href="<?php echo base_url(); ?>home/blog">Blog</a></li>

                        <li <?php if(isset($menu) && $menu == "contact"){echo "class=\"active\"";} ?> ><a href="<?php echo base_url(); ?>home/contact">Contact</a></li>
                        
                        <li <?php if(isset($menu) && $menu == "invite-a-friend"){echo "class=\"active\"";} ?> ><a href="<?php echo base_url(); ?>home/invite_a_friend">Invite A Friend</a></li>
                        
                        <li <?php if(isset($menu) && $menu == "partner-with-us"){echo "class=\"active\"";} ?> ><a href="<?php echo base_url(); ?>home/partner_with_us">Partner With Us</a></li>
                        
                        <li <?php if(isset($menu) && $menu == "app"){echo "class=\"active\"";} ?> ><a href="<?php echo base_url(); ?>home/app" target="_blank">App</a></li>

                    </ul>

                    <!--end navigation-->

                </div>

                <!--end primary-nav-->
                
                <div class="secondary-nav" <?php if(!isset($user_id)){echo "style=\"border-right: 0px;\"";}?> >

                    <!-- <?php
                        if(!isset($user_id)):
                    ?>

                    <a href="#" data-modal-external-file="modal_sign_in.php" data-target="modal-sign-in">Sign In</a>

                    <a href="#" class="promoted" data-modal-external-file="modal_register.php" data-target="modal-register">Register</a>

                    <?php endif; ?> -->
                    
                    <?php
                        if(isset($user_id)):
                    ?>

                    <a href="<?php echo base_url(); ?>user/sign_out">Sign Out</a>

                    <?php endif; ?>

                </div>

                <!--end secondary-nav-->
                
                <?php
                    /*if(isset($user_id)):*/
                ?>

                <a href="#" class="btn btn-primary btn-small btn-rounded icon shadow add-listing" data-modal-external-file="modal_submit.php" data-target="modal-submit"><i class="fa fa-plus"></i><span>Manage Alerts</span></a>

                <?php /*endif;*/ ?>

                <div class="nav-btn">

                    <i></i>

                    <i></i>

                    <i></i>

                </div>

                <!--end nav-btn-->

            </div>

            <!--end right-->

        </nav>

        <!--end nav-->

    </header>

    <!--end page-header-->

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
        if ($this->session->flashdata('errors'))
        {?>
            <div class="alert alert-danger alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <p><strong>Error ! </strong></p>
                <?php echo $this->session->flashdata("errors"); ?>
            </div>
    <?php 
        }
    ?>
    <style type="text/css">
        .adds_area {
    background-color:rgb(112,48,160);
    padding: 30px 0px;
    text-align: center;
    margin-top:3rem;
    margin-left: 1.5rem;
    margin-right:-1rem;
    
        }
        .adds_area h1{
            color: #fff;
            font-weight:500;
            opacity: unset;
        }
        .page-title h1:first-child {
            display: none;
        }
      .breadcrumb{margin-left: 1.5rem;}  
    </style>


     <div class="container">
        <div class="adds_area">
            <h1 id="page-title-inbanner"> </h1>
        </div>
        </div>
