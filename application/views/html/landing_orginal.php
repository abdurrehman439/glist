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

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- ShareThis -->
		<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
		<script type="text/javascript">
			stLight.options({publisher: "3bc052dc-4724-42ae-8aee-43fedca5df0c", doNotHash: false, doNotCopy: false, hashAddressBar: false});
		</script>
		<style>
			.content{
				top: 55% !important;
			}
			.alert{
				width: 50%;
				margin: auto;
			}
			.categories-list{
				padding: 0px 175px;
			}
			.categories-list .list-item .title .icon{
				border-radius: 50%;
				display: inline-block;
				background-color: #1f1f1f;
				color: #fff;
				text-align: center;
				width: 40px;
				height: 40px;
				margin-right: 10px;
			}
			.categories-list .list-item .title .icon i{
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
	</head>
	<body class="bg-slide"> 

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
								<?php if ($this->session->flashdata("error_message")):?>
									<div class="alert alert-danger alert-dismissable fade in">
										<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
										<strong>Error ! </strong><?php echo $this->session->flashdata("error_message"); ?>
									</div>
								<?php endif;?>

								<?php if ($this->session->flashdata("info_message")):?>
									<div class="alert alert-info alert-dismissable fade in">
										<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
										<strong>Information ! </strong><?php echo $this->session->flashdata("info_message"); ?>
									</div>
								<?php endif;?>
								
								<?php if ($this->session->flashdata("success_message")):?>
									<div class="alert alert-success alert-dismissable fade in">
										<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
										<strong>Success ! </strong><?php echo $this->session->flashdata("success_message"); ?>
									</div>
								<?php endif;?>

								<h1>
									Welcome to Glokallist
									<span>Connecting Neighbor Communities all over the world</span>
									<span>See what’s happening around…Stay connected and do more…</span>
								</h1>
								<a href="<?php echo base_url(); ?>login" class="btn btn-primary">Sign In</a>
								<a href="<?php echo base_url(); ?>register" class="btn btn-primary">Register</a>
								<br/>

							</div>

						</div>
					</div>
				</div>
			</section>
		<!-- Main End
		================================================== -->


		<!-- Share Begin
		================================================== -->
			<section class="share-it">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<!-- Custom ShareThis button from http://www.sharethis.com/ -->
							<span class='st_social'><span class="fa fa-facebook">&nbsp;</span></span>
							<a href="https://twitter.com/glokallist" target="_blank"><span class='st_social'><span class="fa fa-twitter">&nbsp;</span></span></a>
							<a href="https://plus.google.com/109382472733667827430" target="_blank"><span class='st_social'><span class="fa fa-google-plus">&nbsp;</span></span></a>
							<a href="https://www.linkedin.com/in/glokallist-com-727538165/" target="_blank"><span class='st_social'><span class="fa fa-linkedin">&nbsp;</span></span></a>
							<a href="https://www.youtube.com/watch?v=bIIx-rF2IyI" target="_blank"><span class='st_social'><span class="fa fa-youtube">&nbsp;</span></span></a>
							<!--/ Custom ShareThis -->
						</div>
						<div class="col-md-6 text-right">
							<div class="copyright">
								Copyright &copy; 2018 glokallist
							</div>
						</div>
					</div>
				</div>
			</section>
		<!-- Share End
		================================================== -->

		<script src="<?php echo base_url(); ?>assets/landing/js/vendors/modernizr-2.6.2.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/landing/js/vendors/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/landing/js/vendors/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/landing/js/plugins.js"></script>
		<script src="<?php echo base_url(); ?>assets/landing/js/main.js"></script>
  
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
