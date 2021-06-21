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
				background-color: #4611a7;
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
    padding-left: 1rem;}
.testa_color_text{    color: #c1c1c1;}	
.showcase .left_side_text{padding-right:4rem;}
.showcase .right_side_text{padding-left:4rem;}
*{
color:#000;
}
.txt-white{
color:#fff;
}
footer.footer{padding-top:2rem;padding-bottom:2rem;}
.copy-right{    padding: .5rem .5rem;
    background: #4611a7;
    color: #fff !important;}

   .list-inline-item:not(:last-child){    margin-right: .5rem !important;} 
	.social_icon li a i {
		    color: #4611a7;
    border-radius: 27px;
    font-size: 17px;
    border: solid #e3e3e3;
    padding: 8px 24px 7px 8px;
}
	.application{float:left;}
	@media only screen and (max-width: 500px) {
  		
  		.showcase .right_side_text {padding:1rem;}
  		.showcase .left_side_text{padding:1rem;}
  		.application{float:none;}

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

  <!-- Image Showcases -->
  <section class="showcase b1g-light">
    <div class="container p-0">
      
		
								<center><h1 style="font-size:50px">Get motivated to share your best work </h1></center><br>
								
								<center><h4>Become part of a community that celebrates incredible photography</h4></center><br><br><br>
	  <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('<?php echo base_url(); ?>assets/images/bg-showcase-2.jpg');"></div>
        <div class="col-lg-6 my-auto right_side_text">
          <h2>Updated For Bootstrap 4</h2>
          <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 4 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 4!</p>
			<br>
		 <button onclick="#">Click Here</button> 
		</div>
      </div>
	  
	  <br>
	  
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('<?php echo base_url(); ?>assets/images/bg-showcase-3.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto left_side_text">
          <h2>Easy to Use &amp; Customize</h2>
          <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p>
			 <br><button onclick="#">Click Here</button>
		</div>
      </div>
	  
	  <br>
	  
	  <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('<?php echo base_url(); ?>assets/images/bg-showcase-1.jpg');"></div>
        <div class="col-lg-6 my-auto right_side_text">
          <h2>Fully Responsive Design</h2>
          <p class="lead mb-0">When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</p>
			<br><button onclick="#">Click Here</button>
		</div>
      </div>
	  
	</div>
  </section>

<!-- Testimonials -->
  <section class="testimonials text-center b1g-light">
    <div class="container">
      <span style="font-size:50px">Loved by people around the world</span><br>
	  <span style="font-size:20px">join over 15 million other photographers who allready use 500px.</span> <br><br><br><br>
      <div class="row">
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <p class="font-weight-light mb-0">"Having a testimonials feature if you are having some business presence on the web is a must-have feature Having a testimonials feature if you are having some business presence on the web is a must-have feature ."</p>
			<br> <img class="img-fluid rounded-circle mb-3" style=""src="<?php echo base_url(); ?>assets/images/testimonials-1.jpg" alt="">
			 <span class="testa">Adrian Sky</span> <br>
			 <span class="testa testa_color_text">Lahore,  UK</span>
			 
		  </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            
            <p class="font-weight-light mb-0">"Having a testimonials feature if you are having some business presence on the web is a must-have feature Having a testimonials feature if you are having some business presence on the web is a must-have feature."</p>
			<br><img class="img-fluid rounded-circle mb-3" src="<?php echo base_url(); ?>assets/images/testimonials-2.jpg" alt="">
             <span class="testa">Adrian Sky</span> <br>
			 <span class="testa testa_color_text">Lahore,  UK</span>
		</div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <p class="font-weight-light mb-0">"Having a testimonials feature if you are having some business presence on the web is a must-have feature Having a testimonials feature if you are having some business presence on the web is a must-have feature."</p>
			<br> <img class="img-fluid rounded-circle mb-3" src="<?php echo base_url(); ?>assets/images/testimonials-3.jpg" alt="">
             <span class="testa">Adrian Sky</span> <br>
			 <span class="testa testa_color_text">Lahore,  UK</span>
           
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
		
			<h1 style="float:left">Take 500px with you</h1>
			<h6 style="float:left">Download the beautiful and fun way to capture, edit, share and discover inspiring photos.</h6>
			<div class="application"> 
			<img  style="margin:20px 20px 0px 0px; " src="<?php echo base_url(); ?>assets/images/store1.png">
			<img  style="margin:20px 0px 0px 0px" src="<?php echo base_url(); ?>assets/images/store2.png">
			</div>
		</div>
      
	  </div>
	
	</div>
  
  </section>
  <!-- mobile section end -->
  

<!--	footer	================================================== -->

<footer class="footer b1g-light">
    <div class="container">
      <div class="row" style="padding: 1rem 0rem;border-top: solid 1px gray;">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
        <p class="text-muted small mb-4 mb-lg-0" style="font-size:13px;  padding: .5rem .5rem;">Glokallist.com is copy right by Glokallist Inc. To review the Terms and Condition of Use and to review our Privacy Policy please click on the on <span style="color:blue;">Terms of Use <span> and <span style="color:blue;">Privacy Policy.<span></p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0 social_icon">
               <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook-f fa-2x fa-fw"></i>
              </a>
            </li>
              
              <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-google fa-2x fa-fw "></i>
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
      
<div class="row">
      	
      	<div class="col-lg-12 h-100 text-center text-lg-left my-auto">
        <p class="text-muted small mb-4 mb-lg-0 copy-right">(C) 2016 Your Company, All right reserved</p>
        </div>
         </div>

       </div>   
      
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
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-120368561-1');
		</script>

	</body>
</html>
