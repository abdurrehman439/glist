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
h4 span, .h4 span {
    display: block;
   
}
Button {border: solid 2px #007bff;
    border-radius: 20px;
    background: #fff;
    color: #007bff;}

	.b1g-light {
    background-color: #ffff;
}
.testa{    float: left;
    padding: 2px 0px 0px 26px;}
.testa_color_text{    color: #c1c1c1;}	
.showcase .left_side_text{padding-right:4rem;}
.showcase .right_side_text{padding-left:4rem;}
*{
color:#000;
}
.txt-white{
color:#fff;
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

								<h1 class="txt-white">
									Welcome to Glokallist
									<span class="txt-white">Connecting Neighbor Communities all over the world</span>
									<span class="txt-white">See what’s happening around…Stay connected and do more…</span>
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
  <!-- Icons Grid -->
  <section class="features-icons b1g-light text-center ">
    
								<center><h1>Welcome to Glokallist </h1></center><br>
									 
								<h4>
									<span>Connecting Neighbor Communities all over the world</span>
									<span>See what’s happening around Stay connected and do more…</span>
								</h4>
								
								<br><br>
								<div class="container">
      <div class="row">
        
		<div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary"></i>
            </div>
            <h3>Easy to Use</h3>
            <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
          </div>
        </div>
		
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-layers m-auto text-primary"></i>
            </div>
            <h3>Bootstrap 4 Ready</h3>
            <p class="lead mb-0">Featuring the latest build of the new Bootstrap 4 framework!</p>
          </div>
        </div>
        
		
		<div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-screen-desktop m-auto text-primary"></i>
            </div>
            <h3>Fully Responsive</h3>
            <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
          </div>
        </div>
			
      </div>
    </div>
  </section>


<!--		================================================== -->


		
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
