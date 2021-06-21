<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="<?php echo base_url(); ?>/assets/img/favicon.jpg" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Glokallist</title>

        <!-- Icon css link -->
        <link href="<?php echo base_url(); ?>/assets/appsy/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/appsy/vendors/ionicons/css/ionicons.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>/assets/appsy/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="<?php echo base_url(); ?>/assets/appsy/vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/appsy/vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/appsy/vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/appsy/vendors/animate-css/animate.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/appsy/vendors/magnifi-popup/magnific-popup.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/appsy/vendors/slider-3d/jquery.flipster.min.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="<?php echo base_url(); ?>/assets/appsy/vendors/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">
        
        <link href="<?php echo base_url(); ?>/assets/appsy/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/appsy/css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <style>
            .appsy_download_area:before{
                background-size: 100% 100% !important;
            }
            .team_slider_active .item {
                max-height: 350px;
            }
        </style>
    </head>
    <body data-scroll-animation="true">
       
       <div class="preloader">
            <div class="left_pre"></div>
            <div class="right_pre"></div>
            <div class="row m0 content">            
                <div class="circle">
                    <div class="red">
                        <div class="rotator">
                            <img src="<?php echo base_url(); ?>/assets/appsy/img/curve.png" alt="">
                        </div>
                        <a href="#" class="logo" style="font-size:24px;">GLOKALLIST</a>
                    </div>
                </div>
            </div>
        </div>
       
       <div class="right_sidebar_menu">
           <div class="right_menu_inner">
               <div class="close_menu content-wrap" id="close-button"><i class="ion-android-close"></i></div>
               <img class="right_menu_logo" style="width: 60px;" src="<?php echo base_url(); ?>/assets/img/logo-white.png" alt="">
               <ul class="nav side_menu">
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li><a href="#hello">Hello</a></li>
                    <li><a href="#feature">Features</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
           </div>
           <ul class="right_menu_social">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-instagram"></i></a></li>
               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
           </ul>
           <div class="morph-shape" id="morph-shape" data-morph-open="M-7.312,0H15c0,0,66,113.339,66,399.5C81,664.006,15,800,15,800H-7.312V0z;M-7.312,0H100c0,0,0,113.839,0,400c0,264.506,0,400,0,400H-7.312V0z">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
                    <path d="M-7.312,0H0c0,0,0,113.839,0,400c0,264.506,0,400,0,400h-7.312V0z"/>
                </svg>
            </div>
       </div>
       
        <!--================ Main Header Area =================-->
        <div class="main_menu_area">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>"><img style="width: 60px;" src="<?php echo base_url(); ?>/assets/img/logo-white.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li><a href="#hello">Hello</a></li>
                        <li><a href="#feature">Features</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="inline-popups"><a href="#search-popup" data-effect="mfp-3d-unfold"><i class="ion-ios-search"></i></a></li>
                        <li class="burger_menu" id="open-button"><i class="ion-navicon"></i></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
        <!--================ End Main Header Area =================-->
        
        <div id="search-popup" class="white-popup mfp-with-anim mfp-hide search_box">
            <h4>Search For What you Need</h4>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-default submit_s_btn" type="button">Search</button>
                </span>
            </div><!-- /input-group -->
        </div>
        
        <!--================Kenburns Area =================-->
        <section class="video_slider_area">
            <div class="rev_slider"  data-version="5.0" id="video_slider">
                <ul>    <!-- SLIDE  -->
                    <li data-index="rs-3015" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="default" data-masterspeed="2000"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
<!--                        <img src="../../assets/images/drinkwinecover.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgparallax="3" class="rev-slidebg" data-no-retina>-->
                        <!-- LAYERS -->

                        <!-- BACKGROUND VIDEO LAYER -->
                        <div class="rs-background-video-layer" 
                        data-forcerewind="on" 
                        data-volume="mute" 
                        data-videowidth="100%" 
                        data-videoheight="100%" 
                        data-videomp4="<?php echo base_url(); ?>/assets/appsy/img/video/BW-Scroll-youtube.mp4" 
                        data-videopreload="auto" 
                        data-videoloop="loopandnoslidestop" 
                        data-aspectratio="16:9" 
                        data-autoplay="true" 
                        data-autoplayonlyfirsttime="false" 
                        ></div>
                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box">
                            <div class="tp-caption first_text" 
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-x="['left','left','left','left','center']" 
                                data-y="top"
                                data-voffset="['280,'280','280','280','115']"
                                data-hoffset="['0,'0','0','0','0']"
                                data-fontsize="['60','60','30','30','30']" 
                                data-lineheight="['75','75','75','75','75']" 
                                data-transform_idle="o:1;"
                                data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                data-start="1000" 
                                data-splitin="chars" 
                                data-splitout="none" 
                                data-responsive_offset="on">
                            </div>
                            <div class="tp-caption secand_text" 
                                data-x="['left','left','left','left','center']" 
                                data-y="top" 
                                data-voffset="['365','365','365','190']"
                                data-fontsize="['20','20','18','18','18']"
                                data-lineheight="['30','30','28','28','28']"
                                data-width="none"
                                data-height="none"
                                data-transform_idle="o:1;"
                                data-whitespace="nowrap"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                data-start="800" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on" 
                                data-elementdelay="0.05" >GLOKALLIST FOR IOS &amp; ANDROID
                            </div>
                            <div class="tp-caption third_text" 
                                data-x="['left','left','left','left','center']" 
                                data-y="top" 
                                data-voffset="['410','410','410','235']"
                                data-fontsize="['20','20','18','18','18']"
                                data-lineheight="['20','20','20','20','20']"
                                data-width="none"
                                data-height="none"
                                data-transform_idle="o:1;"
                                data-whitespace="nowrap"
                               data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                data-start="800" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on" 
                                data-elementdelay="0.05" >An app to connect you with the world
                            </div>
                            <div class="tp-caption s_btn_store" 
                                data-x="['left','left','left','left','center']" 
                                data-y="top" 
                                data-voffset="['500','500','500','285']" 
                                data-fontsize="['20','20','20','20','20']"
                                data-lineheight="['20','20','20','20','20']"
                                data-width="375"
                                data-height="none"
                                data-transform_idle="o:1;"
                                data-whitespace="nowrap"
                               data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                data-start="800" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on" 
                                data-elementdelay="0.05" >
                                <a class="store_btn store_btn_dark" href="#">GET STARTED</a>
                                <a href="#" class="s_btn">
                                <svg>
                                <rect x="0" y="0" fill="none" width="100%" height="100%"/>
                                </svg>
                                DOWNLOAD NOW
                                </a>
                            </div>
                            <div class="tp-caption right_mobile" 
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-voffset="['35']"
                                data-hoffset="['120','0','0']"
                                data-x="right" 
                                data-y="bottom"
                                data-fontsize="['48']" 
                                data-lineheight="['55']" 
                                data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                data-start="800" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on">
                                <div class="slider_man_shap">
                                    <img src="<?php echo base_url(); ?>/assets/appsy/img/home-slider/mobile-slider.png" alt="">
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="user_sms wow animated fadeInRight">
                <div class="media">
                    <div class="media-left">
                        <img class="img-circle" src="<?php echo base_url(); ?>/assets/appsy/img/help-user/user-1.png" alt="">
                    </div>
                    <div class="media-body">
                        <a href="#"><h4>Lili Jane</h4></a>
                        <a href="#"><h5>Do You Need Help?</h5></a>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Kenburns Area =================-->
        
        <!--================Chose Area =================-->
        <section class="chose_area" id="hello">
            <div class="container">
                <div class="sec_title">
                    <h2>WHY CHOSE GLOKALLIST</h2>
                    <p>Glokallist keeps you connected with the world through an app. Try now the new app and enjoy the following functionalities.</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="chose_left_content">
                            <div class="media wow animated fadeInRight">
                                <div class="media-body">
                                    <a href="#"><h4>BROWSE</h4></a>
                                    <p>Browse all the listings posted in our pages. Post your listing and browse other listings.</p>
                                </div>
                                <div class="media-right">
                                    <a href="#"><i class="ion-android-laptop"></i></a>
                                </div>
                            </div>
                            <div class="media wow animated fadeInRight">
                                <div class="media-body">
                                    <a href="#"><h4>CREATE PROFILE</h4></a>
                                    <p>Create your profile for free and start posting right away.</p>
                                </div>
                                <div class="media-right">
                                    <a href="#"><i class="ion-android-color-palette"></i></a>
                                </div>
                            </div>
                            <div class="media wow animated fadeInRight">
                                <div class="media-body">
                                    <a href="#"><h4>PROFILE</h4></a>
                                    <p>Create your profile and stay connected with others. </p>
                                </div>
                                <div class="media-right">
                                    <a href="#"><i class="ion-archive"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="chose_mobile wow animated fadeInUp">
                            <img src="<?php echo base_url(); ?>/assets/appsy/img/chose_mobile.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="chose_right_content">
                            <div class="media wow animated fadeInLeft">
                                <div class="media-left">
                                    <a href="#"><i class="ion-ios-paw"></i></a>
                                </div>
                                <div class="media-body">
                                    <a href="#"><h4>RESPONSE</h4></a>
                                    <p>Read the post and response, you may contact the person for the post.</p>
                                </div>
                            </div>
                            <div class="media wow animated fadeInLeft">
                                <div class="media-left">
                                    <a href="#"><i class="ion-ios-browsers"></i></a>
                                </div>
                                <div class="media-body">
                                    <a href="#"><h4>SUBMIT LISTING</h4></a>
                                    <p>Use your phone to submit listing in few steps, create profile, take snap and post.</p>
                                </div>
                            </div>
                            <div class="media wow animated fadeInLeft">
                               <div class="media-left">
                                    <a href="#"><i class="ion-android-bookmark"></i></a>
                                </div>
                                <div class="media-body">
                                    <a href="#"><h4>HELP</h4></a>
                                    <p>Help through our customer services desk is available by just filling out a simple form.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Chose Area =================-->
        
        <!--================Feature Area =================-->
        <section class="feature_area" id="feature">
            <div class="container">
                <div class="sec_title">
                    <h2>Amazing Features</h2>
                    <p>Glokallist.com offer amazing feature in the app which made it more exciting to use. Download now and start enjoying the amazing feature.</p>
                </div>
                <div class="row feature_items">
                    <div class="col-md-4 col-sm-6">
                        <div class="feature_item wow animated fadeInLeft" data-wow-delay="0.1s">
                            <div class="media">
                                <div class="media-left">
                                    <i class="ion-social-apple"></i>
                                </div>
                                <div class="media-body">
                                    <a href="#"><h4>SECURE</h4></a>
                                    <p>Your data is completely secure. We do not sell or rent user information to any third party.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="feature_item wow animated fadeInLeft" data-wow-delay="0.2s">
                            <div class="media">
                                <div class="media-left">
                                    <i class="ion-social-android"></i>
                                </div>
                                <div class="media-body">
                                    <a href="#"><h4>FREE</h4></a>
                                    <p>The use of this website is complete free. You can create your profile and post in any tab you want.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="feature_item wow animated fadeInLeft" data-wow-delay="0.3s">
                            <div class="media">
                                <div class="media-left">
                                    <i class="ion-bug"></i>
                                </div>
                                <div class="media-body">
                                    <a href="#"><h4>STAY IN TOUCH</h4></a>
                                    <p>Now you may stay in touch, our user friendly interface keep to connected with others.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="feature_item wow animated fadeInLeft" data-wow-delay="0.4s">
                            <div class="media">
                                <div class="media-left">
                                    <i class="ion-android-boat"></i>
                                </div>
                                <div class="media-body">
                                    <a href="#"><h4>LISTINGS</h4></a>
                                    <p>View and post listing from your phone, use the app or access the website to see the listings.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="feature_item wow animated fadeInLeft" data-wow-delay="0.5s">
                            <div class="media">
                                <div class="media-left">
                                    <i class="ion-android-download"></i>
                                </div>
                                <div class="media-body">
                                    <a href="#"><h4>REVIEW</h4></a>
                                    <p>Post your reviews and let us know how we can improve. Your feedback is important to us.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="feature_item wow animated fadeInLeft" data-wow-delay="0.6s">
                            <div class="media">
                                <div class="media-left">
                                    <i class="ion-help-buoy"></i>
                                </div>
                                <div class="media-body">
                                    <a href="#"><h4>USER FRIENDLY</h4></a>
                                    <p>Our app and website is very user friendly and easy to navigate.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Feature Area =================-->\
        
        <!--================Appsy Team Area =================-->
        <!-- <section class="appsy_team_area" id="team">
            <div class="container">
                <div class="sec_title">
                    <h2>THE TEAM BEHIND THE GLOKALLIST.COM</h2>
                    <p>We are the team of dedicated full stack professional website and app developers. We offer immaculate solution to your everyday needs. </p>
                </div>
                <div class="team_inner_area">
                    <div class="team_slider_active owl-carousel">
                        <div class="item">
                            <img src="<?php echo base_url(); ?>/assets/appsy/img/team/team-1.jpg" alt="">
                            <div class="hover_team">
                                <div class="hover_team_inner">
                                    <h5><span>Creative Director</span></h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo base_url(); ?>/assets/appsy/img/team/team-2.jpg" alt="">
                            <div class="hover_team">
                                <div class="hover_team_inner">
                                    <h5><span>Web Developer</span></h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo base_url(); ?>/assets/appsy/img/team/team-3.jpg" alt="">
                            <div class="hover_team">
                                <div class="hover_team_inner">
                                    <h5><span>Project Manager</span></h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo base_url(); ?>/assets/appsy/img/team/team-4.jpg" alt="">
                            <div class="hover_team">
                                <div class="hover_team_inner">
                                    <h5><span>Team Leader</span></h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--================End Appsy Team Area =================-->
        
        <!--================Appsy Download Area =================-->
        <section class="appsy_download_area">
            <div class="container">
                <div class="sec_whit_title">
                    <h2>download the glokallist.com on</h2>
                    <p>Download now and start using our state of the art app. Download for free at no charge completely safe and secure. </p>
                </div>
                <div class="download_btn">
                    <a class="store_btn wow animated fadeInRight" href="#"><i class="ion-social-apple"></i>App Store</a>
                    <a class="store_w_btn wow animated fadeInLeft" href="#"><i class="ion-social-android"></i>Play Store</a>
                </div>
            </div>
        </section>
        <!--================End Appsy Download Area =================-->
        
        <!--================Counter Area =================-->
        <section class="counter_area">
            <div class="container">
                <div class="col-md-3 col-sm-6">
                    <div class="counterup_item wow animated fadeInUp" data-wow-delay="0.2s">
                        <h3 class="counter">3468</h3>
                        <h4>GLOKALLIST Downloaded</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counterup_item wow animated fadeInUp" data-wow-delay="0.4s">
                        <h3 class="counter">4638</h3>
                        <h4>Happy Clients</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counterup_item wow animated fadeInUp" data-wow-delay="0.6s">
                        <h3 class="counter">348</h3>
                        <h4>Hours of work</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counterup_item wow animated fadeInUp" data-wow-delay="0.8s">
                        <h3 class="counter">462</h3>
                        <h4>Cup of coffee</h4>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Counter Area =================-->
        
        <!--================User Review Area =================-->
        <!--<section class="user_review_area">
            <div class="container"> 
                <h3 class="user_t">USER REVIEWS</h3>
                <div class="user_review_slider2 owl-carousel">
                    <div class="item">
                        <div class="user_items_inner">
                            <img class="img-circle" src="<?php echo base_url(); ?>/assets/appsy/img/review-user/user-1.png" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                            <a href="#"><h4>jone doe</h4></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="user_items_inner">
                            <img class="img-circle" src="<?php echo base_url(); ?>/assets/appsy/img/review-user/user-2.png" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                            <a href="#"><h4>jONE SMITH</h4></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="user_items_inner">
                            <img class="img-circle" src="<?php echo base_url(); ?>/assets/appsy/img/review-user/user-1.png" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                            <a href="#"><h4>jone doe</h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--================End User Review Area =================-->
        
        <!--================Subscrib Area =================-->
        <section class="subscrib_area">
            <div class="container">
                <div class="sec_whit_title">
                    <h2>SUBSCRIBE Newsletter</h2>
                    <p>Stay connected, stay in touch. Subscribe with your email to receive most recent updates and changes in you inbox.</p>
                </div>
                <form class="mailchimp" method="post">
                    <div class="input-group subscrib_form">
                        <input type="email" name="semail" class="form-control memail" placeholder="Enter your email">
                        <span class="input-group-btn">
                            <button class="btn btn-default submit_btn" type="submit">SUBSCRIBE</button>
                        </span>
                    </div>
                    <p class="mchimp-errmessage"></p>
                    <p class="mchimp-sucmessage"></p>
                </form>
            </div>
        </section>
        <!--================End Subscrib Area =================-->
        
        <!--================Contact Area =================-->
        <section class="contact_area" id="contact">
            <div class="container">
                <div class="sec_title">
                    <h2>Get in touch with us!</h2>
                    <p>Your voice matter to us. Write to us with your questions and feedbacks. Fill out the following form and someone from our team will get back to you shortly. </p>
                </div>
                <div class="row contact_form_inner">
                    <form action="contact_process.php" method="post" id="contactForm">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea class="form-control" rows="1" id="message" name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <button class="btn btn-default submit_btn2" type="submit">Send Massage</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--================End Contact Area =================-->
        
        <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                        <h2 class="modal-title">Thank you</h2>
                        <p class="modal-subtitle">Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                        <h2 class="modal-title">Sorry</h2>
                        <p class="modal-subtitle"> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->
        
        <!--================Map Area =================-->
        <!-- <div id="mapBox" class="mapBox row m0" 
        data-lat="40.7058316" 
        data-lon="-74.2581888" 
        data-zoom="10" 
        data-marker="<?php echo base_url(); ?>/assets/appsy/img/map-marker.png" 
        data-info="Dhaka, uttara, Sector 10, Road 22"
        data-mlat="40.7058316"
        data-mlon="-74.2581888"></div> -->
        <!--================End Map Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="footer_social_area">
                <h4>GLOKALLIST.COM</h4>
                <ul class="social_f">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
            <div class="footer_copyright">
                <h4>Copyright © 2017 - <a href="http://glokallist.com">glokallist.com</a>. Developed with <i class="fa fa-heart"></i> <a href="http://glokallist.com">glokallist.com</a></h4>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url(); ?>/assets/appsy/js/jquery-2.1.4.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url(); ?>/assets/appsy/js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="<?php echo base_url(); ?>/assets/appsy/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/appsy/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/appsy/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/appsy/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/appsy/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/appsy/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/appsy/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <!-- TYPEWRITER AND COMING SOON ADD ON -->
		<script type="text/javascript" src="<?php echo base_url(); ?>/assets/appsy/vendors/revolution-addons/typewriter/js/revolution.addon.typewriter.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>/assets/appsy/vendors/revolution-addons/countdown/revolution.addon.countdown.min.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="<?php echo base_url(); ?>/assets/appsy/js/gmaps.min.js"></script>
        <!-- contact js -->
        <script src="<?php echo base_url(); ?>/assets/appsy/js/jquery.form.js"></script>
        <script src="<?php echo base_url(); ?>/assets/appsy/js/jquery.validate.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/appsy/js/contact.js"></script>
        <script src="<?php echo base_url(); ?>/assets/appsy/js/mailchimp.js"></script>
        <!-- Extra plugin js -->
        <script src="<?php echo base_url(); ?>/assets/appsy/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/appsy/vendors/magnifi-popup/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/appsy/vendors/counterup/waypoints.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/appsy/vendors/animate-css/wow.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/appsy/vendors/counterup/jquery.counterup.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/appsy/vendors/slider-3d/jquery.flipster.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/appsy/vendors/ripples/jquery.ripples-min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/appsy/vendors/typedjs/typed.min.js"></script>
        
        <script src="<?php echo base_url(); ?>/assets/appsy/vendors/svg/snap.svg-min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/appsy/vendors/svg/classie.js"></script>
        <script src="<?php echo base_url(); ?>/assets/appsy/vendors/svg/round.js"></script>
       
        <script src="<?php echo base_url(); ?>/assets/appsy/js/theme.js"></script>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120368561-1"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-120368561-1');
		</script>


    </body>
</html>
