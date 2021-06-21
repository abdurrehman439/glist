<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<title>Glokallist</title>

	<link href="<?php echo base_url(); ?>assets/landing/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/landing/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/landing/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/landing_bootstrap.min.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	<!-- ShareThis -->
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">
		stLight.options({
			publisher: "3bc052dc-4724-42ae-8aee-43fedca5df0c",
			doNotHash: false,
			doNotCopy: false,
			hashAddressBar: false
		});
	</script>
	<style>
		.content {
			top: 55% !important;
		}

		.alert {
			width: 50%;
			margin: auto;
		}

		.categories-list {
			padding: 0px 175px;
		}

		.categories-list .list-item .title .icon {
			border-radius: 50%;
			display: inline-block;
			background-color: #4611a7;
			color: #fff;
			text-align: center;
			width: 40px;
			height: 40px;
			margin-right: 10px;
		}

		.categories-list .list-item .title .icon i {
			font-size: 14px;
			line-height: 38px;
		}

		.categories-list .list-item .title h3 {
			display: inline-block;
			font-size: 18px;
			font-weight: normal;
			vertical-align: middle;
		}

		.categories-list .list-item {
			float: left;
		}
	</style>


	<!-- new links-->
	<!-- Bootstrap core CSS -->
	<!-- Custom fonts for this template -->
	<link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<!-- Custom styles for this template -->
	<link href="<?php echo base_url(); ?>assets/css/landing-page.min.css" rel="stylesheet">
	<!-- end links-->
	<style>
		h4 span,
		.h4 span {
			display: block;

		}

		Button {
			border: solid 2px #007bff;
			border-radius: 20px;
			background: #fff;
			color: #007bff;
		}

		.b1g-light {
			background-color: #ffff;
		}

		.testa {
			float: left;
			padding-left: 1rem;
		}

		.testa_color_text {
			color: #c1c1c1;
		}

		.showcase .left_side_text {
			padding-right: 4rem;
		}

		.showcase .right_side_text {
			padding-left: 4rem;
		}

		* {
			color: #000;
		}

		.txt-white {
			color: #fff;
		}

		footer.footer {
			padding-top: 1rem;
			padding-bottom: 1rem;
		}

		.copy-right {
			padding: .3rem 1rem;
			background: #4611a7;
			color: #fff !important;
		}

		.list-inline-item:not(:last-child) {
			margin-right: .5rem !important;
		}

		.social_icon li a i {
			color: #4611a7;
			border-radius: 27px;
			font-size: 17px;
			border: solid #e3e3e3;
			padding: 8px 24px 7px 8px;
		}

		.application {
			float: left;
		}

		@media only screen and (max-width: 500px) {

			.showcase .right_side_text {
				padding: 1rem;
			}

			.showcase .left_side_text {
				padding: 1rem;
			}

			.application {
				float: none;
			}

		}

		.d-flex {
			display: flex !important;
		}

		.disc-item {
			cursor: pointer;
			transition: box-shadow 0.35s ease-in-out;
			margin-bottom: 14px;
		}

		.disc-item:hover {
			box-shadow: 0 17px 30px -5px rgba(0, 0, 0, 0.1);
			transition: box-shadow 0.35s ease-in-out;
		}

		.flex-column {
			flex-direction: column !important;
		}

		.disc-title {
			border: 1px solid #F3F3F6;
			font-size: large;
		}

		.loaded {
			height: 260px;
		}
	</style>

</head>

<body class="bg-slide" style="background: #fff">

	<!-- Preloader Begin
		================================================== -->
	<div id="preloader">
		<div id="status">
			<div class="loader-inner ball-scale-multiple">
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
	</div>
	<!-- Preloader End
		================================================== -->


	<!-- Logo Begin
		================================================== -->
	<div class="logo">
		<img style="width:100px;" src="<?php echo base_url(); ?>assets/img/logo.png" alt="Glokallist Logo">
	</div>
	<!-- Logo End
		================================================== -->


	<!-- Menu Begin
		================================================== -->
	<a id="trigger-overlay" href="#">menu</a>
	<div class="menu-overlay overlay-hugeinc">
		<a class="overlay-close" href="#">&nbsp;</a>
		<nav>
			<ul>
				<li><a href="<?php echo base_url(); ?>login" id="login">Sign In</a></li>
				<li><a href="<?php echo base_url(); ?>register" id="register">Register</a></li>
			</ul>
		</nav>
	</div>
	<!-- Menu End
		================================================== -->

	<!-- Main begin
		================================================== -->
	<section class="main-section text-center">
		<div class="container-fluid">



			<div class="row">
				<div class="col-md-12">

					<div class="content">
						<?php if ($this->session->flashdata("error_message")) : ?>
							<div class="alert alert-danger alert-dismissable ">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<strong>Error ! </strong><?php echo $this->session->flashdata("error_message"); ?>
							</div>
						<?php endif; ?>

						<?php if ($this->session->flashdata("info_message")) : ?>
							<div class="alert alert-info alert-dismissable fade in">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<strong>Information ! </strong><?php echo $this->session->flashdata("info_message"); ?>
							</div>
						<?php endif; ?>

						<?php if ($this->session->flashdata("success_message")) : ?>
							<div class="alert alert-success alert-dismissable fade in">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<strong>Success ! </strong><?php echo $this->session->flashdata("success_message"); ?>
							</div>
						<?php endif; ?>

						<h1 class="txt-white">
							Welcome to Glokallist
							<span class="txt-white">Bring the neighborhood even more closer. See who is in your neighborhood</span>
							<span class="txt-white">New to neighborhood or need help everything you need is at this single place. </span>
						</h1>
						<a href="<?php echo base_url(); ?>login" class="btn btn-primary">Sign In</a>
						<a href="<?php echo base_url(); ?>register" class="btn btn-primary">Register</a>
						<br />

					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- Main End
		================================================== -->
	<!-- Icons Grid -->
	<section class="features-icons b1g-light text-center ">

		<center>
			<h1>Welcome to Glokallist </h1>
		</center><br>

		<h4>
			<span>Bring the neighborhood even more closer. See who is in your neighborhood</span>
			<span>New to neighborhood or need help everything you need is at this single place.
			</span>
		</h4>

		<br><br>
		<div class="container">
			<div class="row">

				<div class="col-lg-4">
					<div class="features-icons-item mx-auto mb-0 mb-lg-3">
						<div class="features-icons-icon d-flex">
							<i class="icon-check m-auto text-primary"></i>
						</div>
						<h3>Say Hi </h3>
						<p class="lead mb-0">Start a discussion, post in a discussion and hear what people say around you….!</p>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
						<div class="features-icons-icon d-flex">
							<i class="icon-layers m-auto text-primary"></i>
						</div>
						<h3>Create Groups</h3>
						<p class="lead mb-0">Meet and greet with likeminded neighbors in a group and do things together real not virtual…</p>
					</div>
				</div>


				<div class="col-lg-4">
					<div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
						<div class="features-icons-icon d-flex">
							<i class="icon-screen-desktop m-auto text-primary"></i>
						</div>
						<h3>Local & Global</h3>
						<p class="lead mb-0">Stay local but reach global…select you city of choice, set range and explore more and more…</p>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Image Showcases -->
	<section class="showcase b1g-light">
		<div class="container p-0">


			<center>
				<h1 style="font-size:50px">Search and Share what you got </h1>
			</center><br>

			<center>
				<h4>Become a part of an active community website that comment, share, search and discover…</h4>
			</center><br><br><br>
			<div class="row no-gutters">
				<div class="col-lg-6 text-white showcase-img" style="background-image: url('<?php echo base_url(); ?>assets/images/im1.jpg');"></div>
				<div class="col-lg-6 my-auto right_side_text">
					<h2>Neighborhood community </h2>
					<p class="lead mb-0">To help each other we focused on building a healthy community where you can ask for help and help others…</p>
					<br>
					<button style="display: none;" onclick="#">Click Here</button>
				</div>
			</div>

			<br>

			<div class="row no-gutters">
				<div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('<?php echo base_url(); ?>assets/images/im2.jpg');"></div>
				<div class="col-lg-6 order-lg-1 my-auto left_side_text">
					<h2>Beyond the Listing</h2>
					<p class="lead mb-0">New to the town, looking for help or seeking a short tem service…we offer various listing sections for home, work and business needs. </p>
					<br><button style="display: none;" onclick="#">Click Here</button>
				</div>
			</div>

			<br>

			<div class="row no-gutters">
				<div class="col-lg-6 text-white showcase-img" style="background-image: url('<?php echo base_url(); ?>assets/images/im3.jpg');"></div>
				<div class="col-lg-6 my-auto right_side_text">
					<h2>Work and Fun at same place</h2>
					<p class="lead mb-0">Chat in any neighborhood…. Find work….. Ask for help…. Do fun things…..Search job….freelancers…service providers….need help… all you need. </p>
					<br><button style="display: none;" onclick="#">Click Here</button>
				</div>
			</div>

		</div>
	</section>


	<!-- Main End
		================================================== -->
	<!-- Icons Grid -->
	<section class="features-icons b1g-light text-center ">

		<center>
			<h1>Find near you</h1>
		</center><br>


		<br><br>
		<div class="container">
			<!-- {{-- row 1 --}} -->

			<div class="row">

				<div class="col-lg-3">
					<div class="disc-item d-flex flex-column" data-category-id="179">
						<div class="img-fluid discover-image-wrapper">
							<img class="br-top img-fluid object-fit-cover loaded" alt="Gardening" width="400" height="260" title="garage_sales" src="<?php echo base_url(); ?>assets/near/garage_sales.jpg" data-was-processed="true">
						</div>
						<p class="disc-title p-3 br-bottom mb-0">Garage Sales</p>
					</div>


				</div>

				<div class="col-lg-3">
					<div class="disc-item d-flex flex-column" data-category-id="179">
						<div class="img-fluid discover-image-wrapper">
							<img class="br-top img-fluid object-fit-cover loaded" alt="Gardening" width="400" height="260" title="professional_servies" src="<?php echo base_url(); ?>assets/near/professional_servies.jpg" data-was-processed="true">
						</div>
						<p class="disc-title p-3 br-bottom mb-0">Professional Services</p>
					</div>

				</div>


				<div class="col-lg-3">
					<div class="disc-item d-flex flex-column" data-category-id="179">
						<div class="img-fluid discover-image-wrapper">
							<img class="br-top img-fluid object-fit-cover loaded" alt="Gardening" width="400" height="260" title="business_services" src="<?php echo base_url(); ?>assets/near/business_services.png" data-was-processed="true">
						</div>
						<p class="disc-title p-3 br-bottom mb-0">Business Services</p>
					</div>

				</div>
				<div class="col-lg-3">
					<div class="disc-item d-flex flex-column" data-category-id="179">
						<div class="img-fluid discover-image-wrapper">
							<img class="br-top img-fluid object-fit-cover loaded" alt="Gardening" width="400" height="260" title="Groups" src="<?php echo base_url(); ?>assets/near/Groups.jpg" data-was-processed="true">
						</div>
						<p class="disc-title p-3 br-bottom mb-0">Gigs & Freelancers</p>
					</div>

				</div>

			</div>

			<!-- {{-- row 2  --}} -->
			<div class="row">

				<div class="col-lg-3">
					<div class="disc-item d-flex flex-column" data-category-id="179">
						<div class="img-fluid discover-image-wrapper">
							<img class="br-top img-fluid object-fit-cover loaded" alt="Gardening" width="400" height="260" title="Jobs" src="<?php echo base_url(); ?>assets/near/Jobs.jpg" data-was-processed="true">
						</div>
						<p class="disc-title p-3 br-bottom mb-0">Jobs</p>
					</div>


				</div>

				<div class="col-lg-3">
					<div class="disc-item d-flex flex-column" data-category-id="179">
						<div class="img-fluid discover-image-wrapper">
							<img class="br-top img-fluid object-fit-cover loaded" alt="Gardening" width="400" height="260" title="home_services" src="<?php echo base_url(); ?>assets/near/home_services.png" data-was-processed="true">
						</div>
						<p class="disc-title p-3 br-bottom mb-0">Home Services</p>
					</div>

				</div>


				<div class="col-lg-3">
					<div class="disc-item d-flex flex-column" data-category-id="179">
						<div class="img-fluid discover-image-wrapper">
							<img class="br-top img-fluid object-fit-cover loaded" alt="Gardening" width="400" height="260" title="for_rent" src="<?php echo base_url(); ?>assets/near/for_rent.png" data-was-processed="true">
						</div>
						<p class="disc-title p-3 br-bottom mb-0">Items for Rent</p>
					</div>

				</div>
				<div class="col-lg-3">
					<div class="disc-item d-flex flex-column" data-category-id="179">
						<div class="img-fluid discover-image-wrapper">
							<img class="br-top img-fluid object-fit-cover loaded" alt="Gardening" width="400" height="260" title="buy_sell" src="<?php echo base_url(); ?>assets/near/buy_sell.webp" data-was-processed="true">
						</div>
						<p class="disc-title p-3 br-bottom mb-0">Buy Sell</p>
					</div>

				</div>

			</div>
			<!-- {{-- row 3  --}} -->
			<div class="row">

				<div class="col-lg-3">
					<div class="disc-item d-flex flex-column" data-category-id="179">
						<div class="img-fluid discover-image-wrapper">
							<img class="br-top img-fluid object-fit-cover loaded" alt="Gardening" width="400" height="260" title="Funding" src="<?php echo base_url(); ?>assets/near/Funding.jpg" data-was-processed="true">
						</div>
						<p class="disc-title p-3 br-bottom mb-0">Funding</p>
					</div>


				</div>

				<div class="col-lg-3">

					<div class="disc-item d-flex flex-column" data-category-id="179">
						<div class="img-fluid discover-image-wrapper">
							<img class="br-top img-fluid object-fit-cover loaded" alt="Gardening" width="400" height="260" title="coupon" src="<?php echo base_url(); ?>assets/near/coupon.png" data-was-processed="true">
						</div>
						<p class="disc-title p-3 br-bottom mb-0">Coupons</p>
					</div>

				</div>
				<div class="col-lg-3">
					<div class="disc-item d-flex flex-column" data-category-id="179">
						<div class="img-fluid discover-image-wrapper">
							<img class="br-top img-fluid object-fit-cover loaded" alt="Gardening" width="400" height="260" title="learning_classes" src="<?php echo base_url(); ?>assets/near/learning_classes.jpg" data-was-processed="true">
						</div>
						<p class="disc-title p-3 br-bottom mb-0">Learning & Classes</p>
					</div>

				</div>
				<div class="col-lg-3">
					<div class="disc-item d-flex flex-column" data-category-id="179">
						<div class="img-fluid discover-image-wrapper">
							<img class="br-top img-fluid object-fit-cover loaded" alt="Gardening" width="400" height="260" title="real_estate" src="<?php echo base_url(); ?>assets/near/real_estate.jpg" data-was-processed="true">
						</div>
						<p class="disc-title p-3 br-bottom mb-0">Real Estate</p>
					</div>

				</div>

			</div>
			<!-- {{-- row 4 --}} -->
			<div class="row">

				<div class="col-lg-3">
					<div class="disc-item d-flex flex-column" data-category-id="179">
						<div class="img-fluid discover-image-wrapper">
							<img class="br-top img-fluid object-fit-cover loaded" alt="Gardening" width="400" height="260" title="disc_scrap" src="<?php echo base_url(); ?>assets/near/disc_scrap.gif" data-was-processed="true">
						</div>
						<p class="disc-title p-3 br-bottom mb-0">Discards & Scraps</p>
					</div>


				</div>

				<div class="col-lg-3">
					<div class="disc-item d-flex flex-column" data-category-id="179">
						<div class="img-fluid discover-image-wrapper">
							<img class="br-top img-fluid object-fit-cover loaded" alt="Gardening" width="400" height="260" title="business_for_sales" src="<?php echo base_url(); ?>assets/near/business_for_sales.png" data-was-processed="true">
						</div>
						<p class="disc-title p-3 br-bottom mb-0">Business for Sales</p>
					</div>

				</div>


				<div class="col-lg-3">
					<div class="disc-item d-flex flex-column" data-category-id="179">
						<div class="img-fluid discover-image-wrapper">
							<img class="br-top img-fluid object-fit-cover loaded" alt="Gardening" width="400" height="260" title="friends_match" src="<?php echo base_url(); ?>assets/near/friends_match.png" data-was-processed="true">
						</div>
						<p class="disc-title p-3 br-bottom mb-0">Friends & Match</p>
					</div>

				</div>
				<div class="col-lg-3">
					<div class="disc-item d-flex flex-column" data-category-id="179">
						<div class="img-fluid discover-image-wrapper">
							<img class="br-top img-fluid object-fit-cover loaded" alt="Gardening" width="400" height="260" title="discussion" src="<?php echo base_url(); ?>assets/near/discussion.jpg" data-was-processed="true">
						</div>
						<p class="disc-title p-3 br-bottom mb-0">Discussion</p>
					</div>


				</div>

			</div>

			<div class="row">

				<div class="col-lg-3">
					<div class="disc-item d-flex flex-column" data-category-id="179">
						<div class="img-fluid discover-image-wrapper">
							<img class="br-top img-fluid object-fit-cover loaded" alt="Gardening" width="400" height="260" title="store_closure" src="<?php echo base_url(); ?>assets/near/store_closure.jpg" data-was-processed="true">
						</div>
						<p class="disc-title p-3 br-bottom mb-0">Store Closures</p>
					</div>


				</div>

				<div class="col-lg-3">
					<div class="disc-item d-flex flex-column" data-category-id="179">
						<div class="img-fluid discover-image-wrapper">
							<img class="br-top img-fluid object-fit-cover loaded" alt="Gardening" width="400" height="260" title="events" src="<?php echo base_url(); ?>assets/near/events.jpg" data-was-processed="true">
						</div>
						<p class="disc-title p-3 br-bottom mb-0">Events</p>
					</div>

				</div>


				<div class="col-lg-3">

					<div class="disc-item d-flex flex-column" data-category-id="179">
						<div class="img-fluid discover-image-wrapper">
							<img class="br-top img-fluid object-fit-cover loaded" alt="Gardening" width="400" height="260" title="Groups" src="<?php echo base_url(); ?>assets/near/Groups.jpg" data-was-processed="true">
						</div>
						<p class="disc-title p-3 br-bottom mb-0">Groups</p>
					</div>


				</div>
				<div class="col-lg-3">
					<div class="disc-item d-flex flex-column" data-category-id="179">
						<div class="img-fluid discover-image-wrapper">
							<img class="br-top img-fluid object-fit-cover loaded" alt="Gardening" width="400" height="260" title="chat" src="<?php echo base_url(); ?>assets/near/chat.jpg" data-was-processed="true">
						</div>
						<p class="disc-title p-3 br-bottom mb-0">Chat</p>
					</div>

				</div>

			</div>
		</div>

	</section>

	<!-- Image Showcases -->
	<!-- Image Showcases -->
	<!-- Testimonials -->
	<section class="testimonials text-center b1g-light">
		<div class="container">
			<span style="font-size:50px">Loved by people around the world</span><br>
			<span style="display: none;" style="font-size:20px">join over 15 million other photographers who allready use 500px.</span> <br><br><br><br>
			<img src="<?php echo base_url(); ?>assets/img/original.jpg" style="width: -webkit-fill-available;"><br><br>
			<div class="row">


				<div class="col-lg-4">
					<div class="testimonial-item mx-auto mb-5 mb-lg-0">
						<p class="font-weight-light mb-0">Hi…recently moved in the town need a short term hire for couple of hour to cut the grass…The first thing I posted and hired for very short duration, never went out to look for help..Thanks </p>
						<br> <img class="img-fluid rounded-circle mb-3" style="" src="<?php echo base_url(); ?>assets/images/testimonials-1.jpg" alt="">
						<span class="testa">Adrian Sky</span> <br>
						<span style="display: none;" class="testa testa_color_text">Lahore, UK</span>

					</div>
				</div>
				<div class="col-lg-4">
					<div class="testimonial-item mx-auto mb-5 mb-lg-0">

						<p class="font-weight-light mb-0">When my furnace broke I just uploaded the picture a professional service provider contacted me for the job and came to fix it. I did contacted the HVAC guy they contacted me.</p>
						<br><img class="img-fluid rounded-circle mb-3" src="<?php echo base_url(); ?>assets/images/testimonials-2.jpg" alt="">
						<span class="testa">James Bain</span> <br>
						<span style="display: none;" class="testa testa_color_text">Lahore, UK</span>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="testimonial-item mx-auto mb-5 mb-lg-0">
						<p class="font-weight-light mb-0">Something we needed for the long time. I almost open this website every day for various need. I search for work and job, a cool place to make new friends in neighbor. </p>
						<br> <img class="img-fluid rounded-circle mb-3" src="<?php echo base_url(); ?>assets/images/testimonials-3.jpg" alt="">
						<span class="testa">Brian Scott</span> <br>
						<span style="display: none;" class="testa testa_color_text">Lahore, UK</span>

					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- mobile section -->
	<section class="testimonials text-center b1g-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<img style="float:right;" src="<?php echo base_url(); ?>assets/images/app1.png">
				</div>

				<div class="col-lg-8" style="padding-top:8rem;">

					<h1 style="float:left">Keep it with you 24/7</h1>
					<h6 style="float:left">Download the app and stay connected to socialize, share, explore and many more things…anytime.</h6>
					<div class="application">
						<img style="margin:20px 20px 0px 0px; " src="<?php echo base_url(); ?>assets/images/store1.png">
						<img style="margin:20px 0px 0px 0px" src="<?php echo base_url(); ?>assets/images/store2.png">
					</div>
				</div>

			</div>

		</div>

	</section>
	<!-- mobile section end -->


	<!--	footer	================================================== -->

	<footer class="footer b1g-light" style="border-top:solid 1px #f3e7e7;">
		<div class="container">
			<div class="row" style="padding-bottom:: 1rem">
				<div class="col-lg-6 h-100 text-center text-lg-left my-auto">
					<p class="text-muted small mb-4 mb-lg-0" style="font-size:13px;  padding: .5rem .5rem;">Glokallist.com is copy right by Glokallist Inc. To review the Terms and Condition of Use and to review our Privacy Policy please click on the on <span style="color:blue;">Terms of Use <span> and <span style="color:blue;">Privacy Policy.<span></p>
				</div>
				<div class="col-lg-6 h-100 text-center text-lg-right my-auto">
					<ul class="list-inline mb-0 social_icon">
						<li class="list-inline-item mr-3">
							<a href="#">
								<i class="fab fa-facebook-f fa-2x fa-fw social_icon"></i>
							</a>
						</li>

						<li class="list-inline-item mr-3">
							<a href="#">
								<i class="fab fa-google fa-2x fa-fw social_icon"></i>
							</a>
						</li>

						<li class="list-inline-item mr-3">
							<a href="#">
								<i class="fab fa-youtube fa-2x fa-fw"></i>
							</a>
						</li>

						<li class="list-inline-item mr-3">
							<a href="#">
								<i class="fab fa-twitter-square fa-2x fa-fw"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="#">
								<i class="fab fa-instagram fa-2x fa-fw"></i>
							</a>
						</li>


					</ul>
				</div>
			</div>


		</div>

	</footer>

	<footer class=" copy-right">
		<div class="container">
			<div class="row">

				<div class="row">

					<div class="col-lg-12 h-100 text-center text-lg-left my-auto">
						<p class="text-muted small mb-4 mb-lg-0 copy-right">(C) <?= date('Y') ?> Glokallist.com. All right reserved.</p>
					</div>
				</div>

			</div>

		</div>
	</footer>
	<footer class="b1g-light" style="padding-top:1rem">
	</footer>

	<script src="<?php echo base_url(); ?>assets/landing/js/vendors/modernizr-2.6.2.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/landing/js/vendors/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/landing/js/vendors/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/landing/js/plugins.js"></script>
	<script src="<?php echo base_url(); ?>assets/landing/js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120368561-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-120368561-1');
	</script>

</body>

</html>