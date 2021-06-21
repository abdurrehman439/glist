<?php

$base_url = "https://glokallist.com/";

echo

'<div class="modal-dialog width-400px" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="section-title">
                <h2>Register</h2>
            </div>
        </div>
        <div class="modal-body">
            <form id="register-form" action="'.$base_url.'user/register" method="post" class="form inputs-underline">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="first_name">Name</label>
                            <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Name" min-length="3" max-length="30" pattern="[A-Za-z]+" required>
                        </div>
                        <!--end form-group-->
                    </div>
                    <!--end col-md-6-->
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="last_name">User Name</label>
                            <input type="text" class="form-control" name="user_name" id="user_name" placeholder="User name" min-length="3" max-length="30" required>
                        </div>
                        <!--end form-group-->
                    </div>
                    <!--end col-md-6-->
                </div>
                <!--end row-->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" max-length="50" required>
                </div>
                <!--end form-group-->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" min-length="6" max-length="50" required>
                </div>
                <!--end form-group-->
                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" min-length="6" max-length="50" required>
                </div>
                <!--end form-group-->
                <div class="form-group" id="password-errors" style="color:red;">

                </div>
                <!--end row-->
                <div class="form-group">
                    <label for="zipcode">City / Zip code</label>
                    <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="City / Zip code" max-length="500" required>
                </div>
                <!--end form-group-->

                
                <div class="form-group hidden">
                    <div class="map height-200px shadow" id="reg-map"></div>
                    <input type="text" class="form-control" id="reg-latitude" name="latitude" hidden="">
                    <input type="text" class="form-control" id="reg-longitude" name="longitude" hidden="">
                </div>
                <!--end form-group-->

                <div class="form-group center">
                    <button type="submit" class="btn btn-primary width-100">Register Now</button>
                </div>
                <!--end form-group-->
            </form>

            <hr>

            <p class="center note">By clicking on “Register Now” button you are accepting the <a href="terms-and-conditions.html" class="underline">Terms & Conditions</a></p>
            <!--end form-->
        </div>
        <!--end modal-body-->
    </div>
    <!--end modal-content-->
</div>
<!--end modal-dialog-->
'
.
"<script>
    $(function(){
        $('#register-form').on('submit',function(event){
            if( $('#password').val() != $('#confirm_password').val() )
            {    
                $('#password-errors').html(' * Passwords don\'t match.');
                return false;
            }
            return true;
        });
    });
</script>
";
