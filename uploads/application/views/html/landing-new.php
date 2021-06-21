<html>
    <head>
        <script src="<?php echo base_url(); ?>assets/pixelarity/items/demos_assets/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/pixelarity/items/demos_assets/jquery.scrolly.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/pixelarity/items/demos_assets/jquery.scrollex.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/pixelarity/items/demos_assets/browser.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/pixelarity/items/demos_assets/breakpoints.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/pixelarity/assets/js/util.js"></script>

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <title>Glokallist</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/pixelarity/assets/css/style.css" />
        <style>
            @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css);
            @import url("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i");
            #banner{
                background-image: url("<?php echo base_url(); ?>assets/pixelarity/images/banner.jpg");
            }
            .wrapper.style4 {
                background-color: #4611a7 !important;
            }
            .posts .image img {s
                min-height:350px;
                max-height:350px;
            }
        </style>
    </head>
    <body class="">
        <header id="header" class="alt"><a class="logo" href="<?php echo base_url(); ?>"><img style="width:75px;" src="<?php echo base_url(); ?>assets/img/logo.png" alt="Glokallist Logo"></span></a>
            <nav>
                <ul>
                    <li><a href="#menu" onclick="show_menu();">Menu</a></li>
                </ul>
            </nav>
        </header>
        
        

        <section id="banner">
            <div class="inner">

                <?php if ($this->session->flashdata("error_message")):?>
                    <div class="alert alert-danger alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong style="color: #721c24;">Error ! </strong><?php echo $this->session->flashdata("error_message"); ?>
                    </div>
                <?php endif;?>

                <?php if ($this->session->flashdata("info_message")):?>
                    <div class="alert alert-info alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong style="color: #004085;">Information ! </strong><?php echo $this->session->flashdata("info_message"); ?>
                    </div>
                <?php endif;?>
                
                <?php if ($this->session->flashdata("success_message")):?>
                    <div class="alert alert-success alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong style="color: #155724;">Success ! </strong><?php echo $this->session->flashdata("success_message"); ?>
                    </div>
                <?php endif;?>

                <h1>WELCOME<br/> TO<br/> GLOKALLIST</h1>
                <p>Connecting Neighbor Communities All Over The World.<br/>
	                We Connect You for Social & Professional Needs.</p>
                <ul class="actions special">
                    <li><a href="<?php echo base_url(); ?>register" class="button large wide scrolly-middle">Sign Up</a></li>
                    <li><a href="<?php echo base_url(); ?>login" class="button primary large wide scrolly-middle">Sign In</a></li>
                </ul>
            </div>
        </section>
        <article id="one" class="spotlight odd accent1">
            <div class="inner">

                <div class="image" data-position="top right"><img src="<?php echo base_url(); ?>assets/pixelarity/images/pic01.jpg" alt=""></div>
                <h2>Browse<br/> Our<br/> Listings</h2>
                <div class="content">
                    <h3>Connect to do more now…</h3>
                    <p>Check out our various listing sections. You can browse listings and post listings to connect with your local area as well as worldwide. We connect our users locally and globally for their various personal, social and business needs.</p>
                    <ul class="actions">
                        <li><a href="#" class="button primary accent1">Learn more</a></li>
                    </ul>
                </div>
            </div>
        </article>
        <article id="two" class="spotlight even accent2">
            <div class="inner">
                <div class="image" data-position="top left"><img src="<?php echo base_url(); ?>assets/pixelarity/images/pic02.jpg" alt=""></div>
                <h2>Post<br/> Your<br/> Listings</h2>
                <div class="content">
                    <h3>List your postings <br/>for users</h3>
                    <p>Check out our listing sections to list your items. We have different listing section for your personal and business need. Your personal and professional listings will reach to relevant audience.</p>
                    <ul class="actions">
                        <li><a href="#" class="button primary accent2">Learn more</a></li>
                    </ul>
                </div>
            </div>
        </article>
        <article id="three" class="spotlight odd accent3">
            <div class="inner">
                <div class="image" data-position="center right"><img src="<?php echo base_url(); ?>assets/pixelarity/images/pic03.jpg" alt=""></div>
                <h2>Create<br/> Your<br/> Profile</h2>
                <div class="content">
                    <h3>Take control of your listing,<br/> create your profile</h3>
                    <p>Create your personal or professional profile, select your personal or professional preference. Your profile will be listed in one of the category for user searches for that category. All your listings under the profile. </p>
                    <ul class="actions">
                        <li><a href="#" class="button primary accent3">Learn more</a></li>
                    </ul>
                </div>
            </div>
        </article>
        <section id="four" class="wrapper style4">
            <div class="inner">
                <header class="major">
                    <h2>Our Listing Sections</h2>
                </header>
                <div class="carousel">
                    <article class="visible" style="">
                        <div class="image" data-position="top center"><img src="<?php echo base_url(); ?>assets/pixelarity/slider/events.png" alt=""></div>
                        <div class="content">
                            <h3>Events</h3>
                            <p>Don’t miss out any event, sing up to stay connected and know all the events. Post your event here.</p>
                            <ul class="actions special">
                                <li><a href="#" class="button primary accent4">Learn more</a></li>
                            </ul>
                        </div>
                    </article>
                    <article style="display: none;">
                        <div class="image" data-position="center center"><img src="<?php echo base_url(); ?>assets/pixelarity/slider/jobs.jpg" alt=""></div>
                        <div class="content">
                            <h3>Jobs</h3>
                            <p>Are you looking for a job or looking to hire new talents. Post a job or apply a job through our website.</p>
                            <ul class="actions special">
                                <li><a href="#" class="button primary accent4">Learn more</a></li>
                            </ul>
                        </div>
                    </article>
                    <article style="display: none;">
                        <div class="image" data-position="center center"><img src="<?php echo base_url(); ?>assets/pixelarity/slider/attractions.jpg" alt=""></div>
                        <div class="content">
                            <h3>Attractions</h3>
                            <p>Do you want to know attraction in the area visit our website for attractions and things to do. Post your attractions here to sight and sound within your community.</p>
                            <ul class="actions special">
                                <li><a href="#" class="button primary accent4">Learn more</a></li>
                            </ul>
                        </div>
                    </article>
                    <article style="display: none;">
                        <div class="image" data-position="center center"><img src="<?php echo base_url(); ?>assets/pixelarity/slider/classes learning.jpg" alt=""></div>
                        <div class="content">
                            <h3>Learning & Classes</h3>
                            <p>Let’s spread the word out to the community about courses and classes you are offering.</p>
                            <ul class="actions special">
                                <li><a href="#" class="button primary accent4">Learn more</a></li>
                            </ul>
                        </div>
                    </article>
                    <article style="display: none;">
                        <div class="image" data-position="center center"><img src="<?php echo base_url(); ?>assets/pixelarity/slider/funding.jpg" alt=""></div>
                        <div class="content">
                            <h3>Funding</h3>
                            <p>If you are an entrepreneur and looking to acquire funding for your business or an investor looking for the right opportunity, check out the listings.</p>
                            <ul class="actions special">
                                <li><a href="#" class="button primary accent4">Learn more</a></li>
                            </ul>
                        </div>
                    </article>
                    <article style="display: none;">
                        <div class="image" data-position="center center"><img src="<?php echo base_url(); ?>assets/pixelarity/slider/garage yard sale.jpg" alt=""></div>
                        <div class="content">
                            <h3>Garage Sales</h3>
                            <p>Know your neighborhood, see all the garage/yard sale in your area.</p>
                            <ul class="actions special">
                                <li><a href="#" class="button primary accent4">Learn more</a></li>
                            </ul>
                        </div>
                    </article>
                    <article style="display: none;">
                        <div class="image" data-position="center center"><img src="<?php echo base_url(); ?>assets/pixelarity/slider/service requried.jpg" alt=""></div>
                        <div class="content">
                            <h3>Service Require</h3>
                            <p>Do you need any services such as grass cutting, HVAC or other, post your request here.</p>
                            <ul class="actions special">
                                <li><a href="#" class="button primary accent4">Learn more</a></li>
                            </ul>
                        </div>
                    </article>
                    <article style="display: none;">
                        <div class="image" data-position="center center"><img src="<?php echo base_url(); ?>assets/pixelarity/slider/Gigs and freelancer.jpg" alt=""></div>
                        <div class="content">
                            <h3>Gigs and Freelancer</h3>
                            <p>For freelancer to explore the opportunity worldwide. Post your freelancer services or gigs here. Hire your next freelancer or purchase a gig here.</p>
                            <ul class="actions special">
                                <li><a href="#" class="button primary accent4">Learn more</a></li>
                            </ul>
                        </div>
                    </article>
                    <article style="display: none;">
                        <div class="image" data-position="center center"><img src="<?php echo base_url(); ?>assets/pixelarity/slider/scrap and disposal.jpg" alt=""></div>
                        <div class="content">
                            <h3>Discard & Scraps</h3>
                            <p>List your junk here, things you want to discard, may be someone need it.</p>
                            <ul class="actions special">
                                <li><a href="#" class="button primary accent4">Learn more</a></li>
                            </ul>
                        </div>
                    </article>
                    <article style="display: none;">
                        <div class="image" data-position="center center"><img src="<?php echo base_url(); ?>assets/pixelarity/slider/Short term hirings.jpg" alt=""></div>
                        <div class="content">
                            <h3>Short term hiring</h3>
                            <p>Are you looking for a help, a short term helping hand for hours or a day. List any service you need for hours or days. An opportunity to those who are seeking for short term work.</p>
                            <ul class="actions special">
                                <li><a href="#" class="button primary accent4">Learn more</a></li>
                            </ul>
                        </div>
                    </article>
                    <article style="display: none;">
                        <div class="image" data-position="center center"><img src="<?php echo base_url(); ?>assets/pixelarity/slider/Business for sale.jpg" alt=""></div>
                        <div class="content">
                            <h3>Business for sales</h3>
                            <p>Are you selling your business, list here and check out to see what other are selling in your area.</p>
                            <ul class="actions special">
                                <li><a href="#" class="button primary accent4">Learn more</a></li>
                            </ul>
                        </div>
                    </article>
                    <article style="display: none;">
                        <div class="image" data-position="center center"><img src="<?php echo base_url(); ?>assets/pixelarity/slider/buying and selling.jpg" alt=""></div>
                        <div class="content">
                            <h3>Buying & Selling</h3>
                            <p>List any item you want to sale or check out what other are selling in your proximity.</p>
                            <ul class="actions special">
                                <li><a href="#" class="button primary accent4">Learn more</a></li>
                            </ul>
                        </div>
                    </article>
                    <article style="display: none;">
                        <div class="image" data-position="center center"><img src="<?php echo base_url(); ?>assets/pixelarity/slider/service offer.jpg" alt=""></div>
                        <div class="content">
                            <h3>Services offered</h3>
                            <p>Are you a service provider and offering any service create your profile and list your service here.</p>
                            <ul class="actions special">
                                <li><a href="#" class="button primary accent4">Learn more</a></li>
                            </ul>
                        </div>
                    </article>
                    <article style="display: none;">
                        <div class="image" data-position="center center"><img src="<?php echo base_url(); ?>assets/pixelarity/slider/Tickets.jpg" alt=""></div>
                        <div class="content">
                            <h3>Tickets</h3>
                            <p>Post or buy a ticket here</p>
                            <ul class="actions special">
                                <li><a href="#" class="button primary accent4">Learn more</a></li>
                            </ul>
                        </div>
                    </article>
                    <article style="display: none;">
                        <div class="image" data-position="center center"><img src="<?php echo base_url(); ?>assets/pixelarity/images/Chat.jpg" alt=""></div>
                        <div class="content">
                            <h3>Chat</h3>
                            <p>Communicate with others based on locations.</p>
                            <ul class="actions special">
                                <li><a href="#" class="button primary accent4">Learn more</a></li>
                            </ul>
                        </div>
                    </article>
                    <article style="display: none;">
                        <div class="image" data-position="center center"><img src="<?php echo base_url(); ?>assets/pixelarity/slider/lost and found.JPG" alt=""></div>
                        <div class="content">
                            <h3>Lost & Found</h3>
                            <p>If you have lost something or have found something, list here.</p>
                            <ul class="actions special">
                                <li><a href="#" class="button primary accent4">Learn more</a></li>
                            </ul>
                        </div>
                    </article>
                    <article style="display: none;">
                        <div class="image" data-position="center center"><img src="<?php echo base_url(); ?>assets/pixelarity/slider/Match.jpg" alt=""></div>
                        <div class="content">
                            <h3>Friend & Match</h3>
                            <p>Looking for a right match create your profile and meet your perfect match. </p>
                            <ul class="actions special">
                                <li><a href="#" class="button primary accent4">Learn more</a></li>
                            </ul>
                        </div>
                    </article>
                    <article style="display: none;">
                        <div class="image" data-position="center center"><img src="<?php echo base_url(); ?>assets/pixelarity/slider/Coupons.jpg" alt=""></div>
                        <div class="content">
                            <h3>Coupons</h3>
                            <p>Save some money check the discount and coupons offering in your area. For businesses list your offer here.</p>
                            <ul class="actions special">
                                <li><a href="#" class="button primary accent4">Learn more</a></li>
                            </ul>
                        </div>
                    </article>
                    <article style="display: none;">
                        <div class="image" data-position="center center"><img src="<?php echo base_url(); ?>assets/pixelarity/slider/real estate 2.jpg" alt=""></div>
                        <div class="content">
                            <h3>Realty</h3>
                            <p>If you are a real estate agent or private seller post your property to reach out the interested buyer. Check out the listing to see the property on sale in the area.</p>
                            <ul class="actions special">
                                <li><a href="#" class="button primary accent4">Learn more</a></li>
                            </ul>
                        </div>
                    </article>
                    <article style="display: none;">
                        <div class="image" data-position="center center"><img src="<?php echo base_url(); ?>assets/pixelarity/slider/store closure.jpg" alt=""></div>
                        <div class="content">
                            <h3>Store Closure</h3>
                            <p>Rush now, don’t miss the opportunity of buying item at very low price. Check out close out deals and buy more for less.</p>
                            <ul class="actions special">
                                <li><a href="#" class="button primary accent4">Learn more</a></li>
                            </ul>
                        </div>
                    </article>
                    <article style="display: none;">
                        <div class="image" data-position="center center"><img src="<?php echo base_url(); ?>assets/pixelarity/slider/For Rent.png" alt=""></div>
                        <div class="content">
                            <h3>Items for rent</h3>
                            <p>Make money on idle things, if you have something to rent post here. Those who do not want to spend big money for small use check out the item listed for rent.</p>
                            <ul class="actions special">
                                <li><a href="#" class="button primary accent4">Learn more</a></li>
                            </ul>
                        </div>
                    </article>
                    <nav><a href="#" class="previous"><span class="label">Previous</span></a><a href="#" class="next"><span
                                class="label">Next</span></a></nav>
                </div>
            </div>
        </section>
        <section id="five" class="wrapper">
            <div class="inner">
                <header class="major">
                    <h2>Profiles</h2>
                </header>
                <div class="posts">
                    <article><a href="#" class="image"><img src="<?php echo base_url(); ?>assets/pixelarity/images/Profile Pic general user.jpg" alt=""></a>
                        <div class="content">
                            <h3><a href="#">General User</a></h3>
                            <p>You can use the website and browse the listing by signing up. Complete your profile before the posting of listing in any section. Check other profile options if more closely applies to you.</p>
                            <ul class="actions special">
                                <li><a href="#" class="button primary accent1">Learn more</a></li>
                            </ul>
                        </div>
                    </article>
                    <article><a href="#" class="image"><img src="<?php echo base_url(); ?>assets/pixelarity/images/Profiel Pic real estate agent.jpg" alt=""></a>
                        <div class="content">
                            <h3><a href="#">Real Estate Agents</a></h3>
                            <p>Create your profile as real estate agent. Your profile will be listed in Real Estate section and people in the neighborhood may find you as real estate agent in their area. Users can also see your real estate listings if you selected to publish publically.</p>
                            <ul class="actions special">
                                <li><a href="#" class="button primary accent2">Learn more</a></li>
                            </ul>
                        </div>
                    </article>
                    <article><a href="#" class="image"><img src="<?php echo base_url(); ?>assets/pixelarity/images/Profile pic service provider.jpg" alt=""></a>
                        <div class="content">
                            <h3><a href="#">Service Providers</a></h3>
                            <p>If you provide any kind of services, select your profile type as service provider, pick some keywords which represent your area of expertise in the profile to come up in the user search. You will be receiving notification when job related to your area posted online.</p>
                            <ul class="actions special">
                                <li><a href="#" class="button primary accent3">Learn more</a></li>
                            </ul>
                        </div>
                    </article>
                    <article><a href="#" class="image"><img src="<?php echo base_url(); ?>assets/pixelarity/images/Profile pic Freelancer.png" alt=""></a>
                        <div class="content">
                            <h3><a href="#">Freelancers</a></h3>
                            <p>Select your profile as freelancer, if you work as freelancer and belong to profession such as IT or any other related professions. To post gigs must select your profile as freelancer, all your gig will be listed in your profile section if you selected it to appear in the profile.</p>
                            <ul class="actions special">
                                <li><a href="#" class="button primary accent1">Learn more</a></li>
                            </ul>
                        </div>
                    </article>
                    <article><a href="#" class="image"><img src="<?php echo base_url(); ?>assets/pixelarity/images/Profie pic professional.png" alt=""></a>
                        <div class="content">
                            <h3><a href="#">Professionals</a></h3>
                            <p>Are you a job seeker or an independent self employed professional who work as independent professional, select your profile as professionals to appear in professionals’ profile.</p>
                            <ul class="actions special">
                                <li><a href="#" class="button primary accent4">Learn more</a></li>
                            </ul>
                        </div>
                    </article>
                    <article><a href="#" class="image"><img src="<?php echo base_url(); ?>assets/pixelarity/images/Profile pics Entreprenuer investors.jpg" alt=""></a>
                        <div class="content">
                            <h3><a href="#">Entrepreneur & Investors</a></h3>
                            <p>Interested in funding your project and/or invest in project. If you opt to choose your profile as entrepreneur/investor your profile will be listed as entrepreneur / investor.</p>
                            <ul class="actions special">
                                <li><a href="#" class="button primary accent2">Learn more</a></li>
                            </ul>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <section id="six" class="wrapper style1">
            <div class="inner">
                <header class="major">
                    <h2>SUBSCRIBE NEWSLETTER</h2>
                    <p>Stay connected. Subscribe with your email to receive most recent updates and changes in you inbox.</p>
                </header>
                <form method="post" action="#" class="combined"><input type="email" name="email" id="email" placeholder="Your email address"
                        class="alt accent4"><input type="submit" class="button primary accent4" value="Subscribe"></form>
            </div>
        </section>
        <footer id="footer">
            <!-- <ul class="contact-icons">
                <li class="icon fa-map-marker"><a href="#">1234 Fictional Street #5432 Nashville, TN 00000-0000</a></li>
                <li class="icon fa-phone"><a href="#">(000) 000-0000</a></li>
                <li class="icon fa-envelope"><a href="#">info@untitled.tld</a></li>
            </ul> -->
            <div class="copyright"> © Glokallist. All rights reserved. </div>
        </footer>
        <script>
            (function ($) {
                var $window = $(window),
                    $body = $('body'),
                    $header = $('#header'),
                    $banner = $('#banner'),
                    settings = {
                        carousel: {
                            speed: 350
                        }
                    };
                $.fn._carousel = function (options) {
                    var $window = $(window),
                        $this = $(this);
                    if (this.length == 0) return $this;
                    if (this.length > 1) {
                        for (var i = 0; i < this.length; i++) $(this[i])._slider(options);
                        return $this;
                    }
                    var current = 0,
                        pos = 0,
                        lastPos = 0,
                        slides = [],
                        $slides = $this.children('article'),
                        intervalId, isLocked = false,
                        i = 0;
                    $this._switchTo = function (x, stop) {
                        if (isLocked || pos == x) return;
                        isLocked = true;
                        if (stop) window.clearInterval(intervalId);
                        lastPos = pos;
                        pos = x;
                        slides[lastPos].removeClass('visible');
                        window.setTimeout(function () {
                            slides[lastPos].hide();
                            slides[pos].show();
                            window.setTimeout(function () {
                                slides[pos].addClass('visible');
                            }, 25);
                            window.setTimeout(function () {
                                isLocked = false;
                            }, options.speed);
                        }, options.speed);
                    };
                    $slides.each(function () {
                        var $slide = $(this);
                        slides.push($slide);
                        $slide.hide();
                        i++;
                    });
                    $this.on('click', '.next', function (event) {
                        event.preventDefault();
                        event.stopPropagation();
                        current++;
                        if (current >= slides.length) current = 0;
                        $this._switchTo(current);
                    }).on('click', '.previous', function (event) {
                        event.preventDefault();
                        event.stopPropagation();
                        current--;
                        if (current < 0) current = slides.length - 1;
                        $this._switchTo(current);
                    });
                    slides[pos].show().addClass('visible');
                    if (slides.length == 1) return;
                };
                breakpoints({
                    xlarge: ['1281px', '1680px'],
                    large: ['981px', '1280px'],
                    medium: ['737px', '980px'],
                    small: ['481px', '736px'],
                    xsmall: [null, '480px']
                });
                $window.on('load', function () {
                    window.setTimeout(function () {
                        $body.removeClass('is-preload');
                    }, 100);
                });
                $('#menu').append('<a href="#menu" class="close"></a>').appendTo($body).panel({
                    delay: 500,
                    hideOnClick: true,
                    hideOnSwipe: true,
                    resetScroll: true,
                    resetForms: true,
                    side: 'right'
                });
                if ($banner.length > 0 && $header.hasClass('alt')) {
                    $window.on('resize', function () {
                        $window.trigger('scroll');
                    });
                    $banner.scrollex({
                        bottom: $header.outerHeight(),
                        terminate: function () {
                            $header.removeClass('alt');
                        },
                        enter: function () {
                            $header.addClass('alt');
                        },
                        leave: function () {
                            $header.removeClass('alt');
                        }
                    });
                }
                $('.image[data-position]').each(function () {
                    var $this = $(this),
                        $img = $this.children('img');
                    if (!browser.canUse('object-fit')) {
                        $this.css('background-image', 'url("' + $img.attr('src') + '")').css('background-position',
                            $this.data('position')).css('background-size', 'cover').css('background-repeat',
                            'no-repeat');
                        $img.css('opacity', '0');
                        return;
                    }
                });
                $('.scrolly').scrolly({
                    offset: function () {
                        return $header.outerHeight() - 2;
                    }
                });
                $('.scrolly-middle').scrolly({
                    anchor: 'middle',
                    offset: function () {
                        return $header.outerHeight() - 2;
                    }
                });
                $('.spotlight').scrollex({
                    top: '30vh',
                    bottom: '30vh',
                    delay: 25,
                    initialize: function () {
                        //$(this).addClass('is-inactive');
                    },
                    terminate: function () {
                        $(this).removeClass('is-inactive');
                    },
                    enter: function () {
                        $(this).removeClass('is-inactive');
                    }
                });
                $('.carousel')._carousel(settings.carousel);
            })(jQuery);

            function show_menu(){
                $("#menu" ).addClass('visible');
            };
            function close_menu(){
                $("#menu" ).removeClass('visible');
            };
        </script>
        <nav id="menu">
            <ul class="links">
                <li><a href="index.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Login</a></li>
                <li><a href="<?php echo base_url(); ?>register" class="button primary" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Sign Up</a></li>
                <li><a href="<?php echo base_url(); ?>login" class="button" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Sign In</a></li>
            </ul><a href="#menu" onclick="close_menu();" class="close" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></a>
        </nav>
    </body>

</html>