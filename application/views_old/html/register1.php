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

.login-form-1{
    border-bottom-right-radius: 1rem !important;
    border-top-right-radius: 1rem !important;

    border-bottom-left-radius:unset;
    border-top-left-radius:unset;
}


.login-form-2{
    border-bottom-left-radius:1rem !important;
    border-top-left-radius: 1rem !important;

    border-bottom-right-radius:unset;
    border-top-right-radius:unset;
}



</style>
<body>
<div class="container login-container " style="margin-top:2rem;margin-bottom:unset;" >
                              
            <div class="row center_row">
                
                <div class="col-md-6 col-sm-12 login-form-2">

                   <center><img src="<?php echo base_url(); ?>assets/images/logo_login.png" class="logo_class"></center>
                    
                     <div class="social">
                        <div id="social_login1" class="form-group sign-with-email social_login"><a href="#" class="cld-mail"><i class="fa fa-envelope"></i> Sign up with Email</a></div>
                        <div id="social_login2" class="form-group sign-with-google social_login" ><a href="#" class="cld-google"><i class="fa fa-google-plus"></i> Sign up with Google</a></div>
                       <div id="social_login3" class="form-group sign-with-fb social_login"><a href="#" class="cld-fb"><i class="fa fa-facebook-f"></i> Sign up with Facebook</a></div>
                    </div>
                </div>

                <div class="col-md-6  col-sm-12 login-form-1">
                    
                    <h4 style="margin-top: 2rem;">Sign up</h4>

  <div class="col-md-12">
                                        <?php if ($this->session->flashdata("error_message")):?>
                                            <div class="alert alert-danger alert-dismissable  in">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                <strong>Error ! </strong><?php echo $this->session->flashdata("error_message"); ?>
                                            </div>
                                        <?php endif;?>
                                        
                                        <?php if ($this->session->flashdata("success_message")):?>
                                            <div class="alert alert-success alert-dismissable  in">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                <strong>Success ! </strong><?php echo $this->session->flashdata("success_message"); ?>
                                            </div>
                                        <?php endif;?>

                                        <?php
                                            if ($this->session->flashdata('errors')){
                                                echo "<div class='alert alert-danger alert-dismissable  in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                                                echo $this->session->flashdata('errors');
                                                echo "</div>";
                                            }
                                        ?>
                                      </div>  




                    <form action="<?php echo base_url(); ?>user/register" method="post" method="post">
                        <div class="form-group">
                             <label for="first_name">Name</label>
                                        <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Name"   required/> 
                        </div>
                        <div class="form-group">
                           <label for="last_name">User Name</label>
                             <input type="text" class="form-control" name="user_name" id="user_name" placeholder="User name"  required />
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                            </div>


                        <div class="form-group">
                            <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password"  required />
                            </div>

                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password"  required/>
                            </div>
                            


                            <div class="form-group">
                                <label for="zipcode">Zip code</label>
                                <input type="text" class="form-control" name="zipcode1"  placeholder=" Zip code" >
                            </div>
                            
                            <div class="form-group">
                                <label for="zipcode">City </label>
                                <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="City " required>
                            </div>

                       <!--end map-->
                            <div class="form-group hidden">
                                <div class="map height-200px shadow" id="reg-map"></div>
                                <input type="text" class="form-control" id="reg-latitude" name="latitude" hidden="">
                                <input type="text" class="form-control" id="reg-longitude" name="longitude" hidden="">
                            </div>


                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Sign up" />
                        </div>

                    </form>
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

<script>
    var _latitude = 40.7344458;
    var _longitude = -73.86704922;
    var element = "reg-map";
    var lat_element = "reg-latitude";
    var long_element = "reg-longitude";
    simpleMap(lat_element,_latitude,long_element,_longitude, element, true);
</script>

        </body>