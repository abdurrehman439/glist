<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <link href="<?php echo base_url(); ?>assets/css/font.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
	
	.login-container{
    margin-top: 5%;
    margin-bottom: 5%;
}

.login-form-1{

    border-bottom-left-radius: 1rem;
    border-top-left-radius: 1rem;
	background-color: #fff;
    padding:4% 0%;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-1 h3{
 
 margin-left: 1rem;
    color: #333;
}
.login-form-2{
	border-bottom-right-radius: 1rem;
    border-top-right-radius: 1rem;
    padding:4% 0%;
    background: #0062cc;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-2 h3{
 margin-left: 1rem;	   
    color: #fff;
}
.login-container form{
    padding: 5%;
}
.btnSubmit
{
    width: 90%;
    border-radius: 1rem;
    padding: 1.5%;
    border: none;
    cursor: pointer;
}
.login-form-1 .btnSubmit{
    font-weight: 600;
    color: #fff;
    background-color: #0062cc;
}
.login-form-2 .btnSubmit{
    font-weight: 600;
    color: #0062cc;
    background-color: #fff;
}
.login-form-2 .ForgetPwd{
    color: #fff;
    font-weight: 600;
    text-decoration: none;
}
.login-form-1 .ForgetPwd{
    color: #0062cc;
    text-align: center;
    font-weight: 600;
    text-decoration: none;
}

.form-control{    border-radius: 41px !important; width: 90%;}

body{background-image: url(<?php echo base_url(); ?>assets/images/loginimage.jpg);}

</style>
<body>
<div class="container login-container">
            <div class="row">
                
                <div class="col-md-2">
                </div>
                <div class="col-md-4 login-form-1">
                    
                    <center><h1 class="sz">G</h1> </center>
                    <h3>Sign in</h3>
                    <form>
                        <div class="form-group">
                        	<label for="psw">Email Address</label>
                            <input type="text" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                        	<label for="psw">Password</label>
                            <input type="password" class="form-control" placeholder="Your Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">
                       <CENTER>     <a href="#" class="ForgetPwd">Forget Password?</a></CENTER>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 login-form-2">
                    <form>
                        <div class="form-group sign-with-email"><a href="#" class="cld-mail"><i class="far fa-envelope"></i> Sign up with Email</a></div>
                       <div class="form-group sign-with-google"><a href="#" class="cld-google"><i class="fab fa-google-plus-g"></i> Sign up with Google</a></div>
                       <div class="form-group sign-with-fb"><a href="#" class="cld-fb"><i class="fab fa-facebook-f"></i> Sign up with Facebook</a></div>
                    </form>
                </div>

                <div class="col-md-2">
                </div>
            </div>     
        </div>
        </body>