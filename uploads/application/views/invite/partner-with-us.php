<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Glokallist</title>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/img/favicon.jpg" type="image/x-icon">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />  
	<link href="<?php echo base_url(); ?>/assets/invite/css/style.css" rel="stylesheet"/> 
	<link href="<?php echo base_url(); ?>/assets/invite/css/colors/style-color-01.css" rel="stylesheet"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/invite/css/contact.css">	
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/invite/css/simple-line-icons.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
</head> 
<body>

<div id="wrapper">

	<!-- Start Header -->

	<div id="header">
	
		<div class="container">
			<div class="row">
				<div class="span12">
				
					<h1><a href="<?php echo base_url(); ?>" class="brand"><img style="width: 60px;" src="<?php echo base_url(); ?>/assets/img/logo-white.png" alt=""></a></h1>
					<h2 class="menulink"><a href="#">Menu</a></h2>
					
					<!-- Start Menu -->
					<div id="menu">
						<ul>  
							<li><a href="<?php echo base_url(); ?>">Home</a></li>
						</ul> 
					</div> 
					<!-- End Menu -->
					
				</div>
				<div class="clearfix"></div>
			</div>
			
		</div>
	
	</div>

	<!-- End Header -->

	<!-- Start Content -->

		<div class="container">
				 
            <div class="row">
	        	
	        	<div class="span6">
	        	
	        		<div class="inner">
	        		
	        			<div class="hero">
						
							<h1>How we can join</h1>
							<h2>Let us know how we can join for our mutual benefits.</h2>
							
						</div>

	        			
	        		</div>
	        		
	        	</div>
	        	
	        	<div class="span6">
	        	
	        		<div class="inner">
	        		
	        			<div class="form-box">
	        			
	        				<div class="top">
		        			
		        				<h2><span class="glyph-item  icon-pencil" aria-hidden="true"></span> Get in touch</h2>
		        				<p>Please complete the form to partner with us.</p>
		        				
	        				</div>
	        			
	        				<div class="bottom"> 
								
								<?php if ($this->session->flashdata("success_message")):?>
									<div>
										<span class="green textcenter">
											<p>Your message was sent successfully!</p>
										</span>
									</div>
								<?php endif;?>
								
								<?php if ($this->session->flashdata("error_message")):?>
									<div>
										<span>
											<p>Something went wrong. Please refresh and try again.</p>
										</span>
									</div>
								<?php endif;?>
								
								<form action="<?php echo base_url() . 'home/send_partner_with_us'; ?>" id="contact" name="contact" method="post" novalidate="novalidate">

									<div class="form-row">	 
								        <input type="text" name="sender_name" id="sender_name" size="30" required class="text login_input" placeholder="Sender name" />
								    </div>
									<div class="form-row">									     
								        <input type="text" name="sender_email" id="sender_email" size="50" required class="text login_input" placeholder="Sender Email Address" />
								    </div>
									<div class="form-row">									     
								        <textarea name="message" id="message" required placeholder="Message"></textarea>
								    </div>
									<div class="form-row">									    
								        <input id="submit" type="submit" name="submit" value="Send" class="btn" /> <a href="<?php echo base_url() . 'home/privacy_policy'; ?>">Privacy Policy</a> | <a href="<?php echo base_url() . 'home/terms_and_conditions'; ?>">Terms &amp; Conditions</a>
								    </div>
								</form>								
																
							</div> 
	        			
	        			</div>
	        			<div class="shadow"></div>
	        			<div class="clearfix"></div>
	        			
	        		</div>
	        		
	        	</div>
	        	
            </div>  
		
		</div>
	
	<!-- End content -->	
	
	<div class="clearfix"></div> 
	
</div>

<!--[if lte IE 7]><script src="js/icons-lte-ie7.js"></script><![endif]-->
<script src="<?php echo base_url(); ?>/assets/invite/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/invite/js/respond.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/invite/js/scripts.js"></script>  
<script src="<?php echo base_url(); ?>/assets/invite/js/jquery.form.js"></script>
<script src="<?php echo base_url(); ?>/assets/invite/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/invite/js/contact.js"></script>
	
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
