    
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="<?php echo base_url(); ?>assets/css/style_login_signup.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->
<style>
	
body{background-image: url(<?php echo base_url(); ?>assets/images/photo-wide-4.jpg);}

.login-form-2{
    background-image: url(<?php echo base_url(); ?>assets/images/photo-long-3.jpg);	
}
</style>
<body>
<div class="container login-container">
            <div class="row center_row" style="width: 60%;">
                
                <div class="col-md-6 col-sm-12  login-form-1">
                    
                    <center><img src="<?php echo base_url(); ?>assets/images/logo_login.png" class="logo_class"></center>
                    
                    
                    <h4>Sign in</h4>
                    <form action="<?php echo base_url(); ?>user/sign_in" method="post">
                        <div class="form-group">
                        	<label for="psw">Email Address</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                        	<label for="psw">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Your Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Sign in" />
                        </div>
                        <div class="form-group forgot">
                       <CENTER>    <a href="#"  data-modal-external-file="modal_reset_password.php" data-target="modal-reset-password"> Forgot Password</a></CENTER>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-sm-12 login-form-2">
                    <div class="social">
                        <div id="social_login1" class="form-group sign-with-email social_login" ><a href="#" class="cld-mail"><i class="fa fa-envelope"></i> Sign up with Email</a></div>
                       <div id="social_login2" class="form-group sign-with-google social_login" ><a href="#" class="cld-google"><i class="fa fa-google-plus"></i> Sign up with Google</a></div>
                       <div id="social_login3" class="form-group sign-with-fb social_login" ><a href="#" class="cld-fb"><i class="fa fa-facebook-f"></i> Sign up with Facebook</a></div>
                    </div>
                </div>

            </div>     
        </div>

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
<style type="text/css">
    
    .customizer {
    display: none;
}
</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120368561-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-120368561-1');
</script>

        </body>