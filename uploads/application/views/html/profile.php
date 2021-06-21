    <link href="<?php echo base_url(); ?>assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url(); ?>assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">

    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">  

    <div id="page-content">

        <div class="container">

            <ol class="breadcrumb">

                <li><a href="#">Home</a></li>

                <li><a href="#">Pages</a></li>

                <li class="active">Contact</li>

            </ol>

            <!--end breadcrumb-->

            <section class="page-title center">

                <h1>Your Profile</h1>

            </section>

            <!--end page-title-->

            <section>

                <div class="row">

                    <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">

                        <form id="profileImageForm" class="form inputs-underline" action="<?php echo base_url(); ?>user/update_profileimage" method="post" enctype="multipart/form-data">

                            <section>

                                <div class="user-details box" style="height: 160px;">

                                    <div class="user-image" style="position: relative;">

                                        <div class="image" style="margin: auto;">

                                            <div id="profile-image-bg" class="bg-transfer"><img id="profile-image" src="<?php echo base_url().$profile_picture; ?>" alt=""></div>

                                            <!--end bg-transfer-->

                                            <div class="single-file-input">

                                                <input type="file" id="profileImage" name="profileImage" />

                                                <div>Upload a picture<i class="fa fa-upload"></i></div>

                                            </div>
                                    
                                        </div>

                                    </div>

                                </div>
                                <div id="profile-image-error">
                                </div>

                            </section>

                            <!--end user-details-->
                        </form>

                        <form class="form inputs-underline" action="<?php echo base_url(); ?>user/update_profile" method="post" enctype="multipart/form-data">

                            <section>

                                <h3>About You</h3>

                                <div class="row">

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="full_name">Full Name</label>

                                            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Full Name" value="<?php echo $full_name ?>" pattern="[A-Za-z]+" minlength="3" maxlength="30" required>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">
                                    
                                            <label for="phone">Phone</label>

                                            <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone" value="<?php echo $phone;?>" min="0" maxlength="15">

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="email">Email</label>

                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email;?>" max-length="50" disabled required>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="website">Website</label>

                                            <input type="text" class="form-control" name="website" id="wesbite" placeholder="Website" value="<?php echo $website;?>" max-length="100">

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                </div>

                                <!--end row-->

                                <div class="form-group">
                                    <label for="zipcode">City / Zip code</label>
                                    <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="City / Zip code" value="<?php echo $zip_code;?>" max-length="500" required>
                                </div>
                                <!--end form-group-->

                                <div class="form-group hidden">
                                    <div class="map height-200px shadow" id="profile-map"></div>
                                    <input type="text" class="form-control" id="profile-latitude" name="latitude" hidden="">
                                    <input type="text" class="form-control" id="profile-longitude" name="longitude" hidden="">
                                </div>
                                <!--end form-group-->

                                <div class="form-group">
                                    <label for="occupation">Title/Occupation</label>
                                    <input type="text" class="form-control" name="occupation" id="occupation" placeholder="Title/Occupation" value="<?php echo $occupation ?>"  minlength="3" maxlength="255" required>
                                </div>
                                <!--end form-group-->

                                <div class="form-group">
                                    <label for="description">Describe yourself</label>
                                    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Describe yourself" onkeypress="if (this.value.length > 199) { return false; }" required><?php echo $description;?></textarea>
                                </div>
                                <!--end form-group-->

                                <div class="form-group">
                                    <label for="professional_details" style="padding-bottom:20px;">Professional Details</label>
                                    <textarea class="form-control" name="professional_details" id="professional_details" rows="4" placeholder="Professional Details" required><?php echo $professional_details;?></textarea>
                                </div>
                                <!--end form-group-->

                            </section>

                            <section>

                                <h3>Select your Profession</h3>

                                <div class="row" style="padding-top:20px;">

                                    <div class="col-md-6 col-sm-12">

                                        <div class="form-group">

                                            <input type="radio" class="" id="agent" name="interest" value="agent" <?php if($profession == "agent"){?> checked="true" <?php } ?> />

                                            <label for="agent" style="position: relative; bottom: 3px;left: 5px;">List me as Agent</label>

                                        </div>

                                    </div>

                                    <!--end col-md-12-->

                                    <div class="col-md-6 col-sm-12">

                                        <div class="form-group">

                                            <input type="radio" class="" id="freelancer" name="interest" value="freelancer" <?php if($profession == "freelancer"){?> checked="true" <?php } ?> />

                                            <label for="freelancer" style="position: relative; bottom: 3px;left: 5px;">List me as Freelancer</label>

                                        </div>

                                    </div>

                                    <!--end col-md-12-->
                                    
                                    <div class="col-md-6 col-sm-12">

                                        <div class="form-group">

                                            <input type="radio" class="" id="service-provider" name="interest" value="service-provider" <?php if($profession == "service-provider"){?> checked="true" <?php } ?> />

                                            <label for="service-provider" style="position: relative; bottom: 3px;left: 5px;">List me as Service Provider</label>

                                        </div>

                                    </div>

                                    <!--end col-md-12-->

                                    <div class="col-md-6 col-sm-12">

                                        <div class="form-group">

                                            <input type="radio" class="" id="resume" name="interest" value="resume" <?php if($profession == "resume"){?> checked="true" <?php } ?> />

                                            <label for="resume" style="position: relative; bottom: 3px;left: 5px;">List me as Professionals Profile</label>

                                        </div>

                                    </div>

                                    <!--end col-md-12-->

									<div class="col-md-6 col-sm-12">

                                        <div class="form-group">

                                            <input type="radio" class="" id="entrepreneur" name="interest" value="entrepreneur" <?php if($profession == "entrepreneur"){?> checked="true" <?php } ?> />

                                            <label for="entrepreneur" style="position: relative; bottom: 3px;left: 5px;">List me as Entrepreneurs Profile</label>

                                        </div>

                                    </div>

                                    <!--end col-md-12-->

									<div class="col-md-6 col-sm-12">

                                        <div class="form-group">

                                            <input type="radio" class="" id="investor" name="interest" value="investor" <?php if($profession == "investor"){?> checked="true" <?php } ?> />

                                            <label for="investor" style="position: relative; bottom: 3px;left: 5px;">List me as Investors Profile</label>

                                        </div>

                                    </div>

                                    <!--end col-md-12-->

                                    <div class="col-md-6 col-sm-12">

                                        <div class="form-group">

                                            <input type="radio" class="" id="guest" name="interest" value="guest" <?php if($profession == "guest"){?> checked="true" <?php } ?> />

                                            <label for="guest" style="position: relative; bottom: 3px;left: 5px;">List me as Guest</label>

                                        </div>

                                    </div>

                                    <!--end col-md-12-->
                                    
                                </div>

                                <!--end row-->

                            </section>

                            <section>

                                <h3>Skills</h3>
                                <ul class="tags">
                                    <?php for( $i=0 ; $i < sizeof($skills) ; $i++ ) { ?>
                                        <li class="tag"><?php echo $skills[$i]; ?><input type="hidden" name="skills[]" value="<?php echo $skills[$i]; ?>" /></li>
                                    <?php } ?>
                                </ul>
                                <div id="tags" class="form-group">
                                    <input class="form-control" type="text" id="skills" placeholder="Add a skill (Hit Enter or Comma to Add)" />
                                </div>

                            </section>

                            <section>

                                <h3>Your Social Networks</h3>

                                <div class="row">

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="facebook">Facebook</label>

                                            <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Facebook" value="<?php echo $facebook;?>" max-length="255" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="twitter">Twitter</label>

                                            <input type="text" class="form-control" name="twitter" id="twitter" placeholder="Twitter" value="<?php echo $twitter;?>" max-length="255" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="google-plus">Google Plus</label>

                                            <input type="text" class="form-control" name="google-plus" id="google-plus" placeholder="Google Plus" value="<?php echo $googleplus;?>" max-length="255" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="linkedin">LinkedIn</label>

                                            <input type="text" class="form-control" name="linkedin" id="linkedin" placeholder="LinkedIn" value="<?php echo $linkedin;?>" max-length="255" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                </div>

                                <!--end row-->

                            </section>

                            <section class="center">

                                <div class="form-group">

                                    <button type="submit" class="btn btn-primary btn-rounded">Save Changes</button>

                                </div>

                                <!--end form-group-->

                            </section>

                        </form>

                        <!--end form-->

                        <hr>

                    </div>

                    <!--end col-md-6-->

                </div>

                <!--end row-->

            </section>

            <section>

                <section>

                    <div class="row">

                        <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">

                            <h3 class="center">Change Your Password</h3>

                            <form id="change-password" class="form inputs-underline" action="<?php echo base_url(); ?>user/update_password" method="post">

                                <div class="form-group">

                                    <label for="old-password">Current Password</label>

                                    <input type="password" class="form-control" name="old-password" id="old-password" placeholder="Old Password" min-length="6" max-length="50" required/>

                                </div>

                                <!--end form-group-->

                                <div class="form-group">

                                    <label for="new-password">New Password</label>

                                    <input type="password" class="form-control" name="new-password" id="new-password" placeholder="New Password" min-length="6" max-length="50" required/>

                                </div>

                                <!--end form-group-->

                                <div class="form-group">

                                    <label for="confirm-new-password">Confirm New Password</label>

                                    <input type="password" class="form-control" name="confirm-new-password" id="confirm-new-password" placeholder="Confirm New Password" min-length="6" max-length="50" required/>

                                </div>

                                <div class="form-group" id="password-errors" style="color:red;">

                                <!--end form-group-->

                                <div class="form-group center">

                                    <button type="submit" class="btn btn-primary btn-framed btn-rounded btn-light-frame">Change Password</button>

                                </div>

                                <!--end form-group-->

                            </form>

                        </div>

                    </div>

                </section>

            </section>

        </div>

        <!--end container-->

    </div>

    <!--end page-content-->



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

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/icheck.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>

<script>
    var _latitude = 40.7344458;
    var _longitude = -73.86704922;
    var element = "profile-map";
    var lat_element = "profile-latitude";
    var long_element = "profile-longitude";
    simpleMap(lat_element,_latitude,long_element,_longitude, element, true);
</script>

<script>
    $(function(){
        $('#change-password').on('submit',function(event){
            if( $('#new-password').val() != $('#confirm-new-password').val() )
            {    
                $('#password-errors').html(' * Passwords don\'t match.');
                return false;
            }
            return true;
        });
    });
    
    $('#profileImageForm').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $("#profile-image-error").html("<div style=\"text-align:center; color:blue;\"><b> <i class=\"fa fa-spinner fa-spin\" style=\"color:blue; font-size:36px\"></i> &nbsp; &nbsp; &nbsp; &nbsp; </b><span style=\"position:relative;bottom:10px;\">Profile picture updating.....!</span></div>");

        $.ajax({
            type:'POST',
            url: $(this).attr('action'),
            data:formData,
            dataType : "json",
            contentType: false,
            enctype: 'multipart/form-data',
            processData: false,
            cache:false,
            success:function(data){
                if (typeof data.success !== 'undefined') {
                    
                    $("#profile-image").removeAttr("src");
                    $("#profile-image").attr("src",data.success);

                    $("#profile-image-bg").removeAttr("style");
                    $("#profile-image-bg").attr( "style" , "background-image: url(\"" + data.success + "\")" );

                    $("#profile-image-error").html("<div style=\"text-align:center; color:green;\"><b> * Success ! </b>Profile Picture Updated.....!</div>");
                }
                if (typeof data.error !== 'undefined') {
                    $("#profile-image-error").html("<div style=\"text-align:center; color:red;\"><b> * Error ! </b>" + data.error + "</div>");
                }
            },
            error: function(data){
                $("#profile-image-error").html("<div style=\"text-align:center; color:red;\"><b> * Try Again ! </b>" + "Error occured while updating Profile Picture.....!" + "</div>");
            }
        });
    }));

    $("#profileImage").on("change", function() {
        $("#profileImageForm").submit();
    });

    $(function(){

        $('#tags input').on('keyup',function( e ){
            if(/(188|13)/.test(e.which)) {
                var txt = this.value.replace(/[^a-zA-Z0-9\+\-\.\#]/g,''); // allowed characters list
                
                if(txt) 
                    $(".tags").append('<li class="tag">'+ txt +'<input type="hidden" name="skills[]" value="'+txt+'" /></li>');
                
                this.value = "";
            }
        });

        $('.tags').on('click','.tag',function(){
            swal({
                title: "Are you sure?",
                text: "You really want to remove this skill?",
                icon: "info",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if( willDelete ) {
                    $(this).remove();
                }
            });
        });

        $(document).on("keypress", "form", function(event) { 
            return event.keyCode != 13;
        });

        CKEDITOR.replace( 'professional_details' );

    });
</script>
