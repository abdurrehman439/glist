<?php
$base_url = "https://glokallist.com/";
echo
'<div class="modal-dialog width-350px" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="section-title">
                <h2>Reset Password</h2>
                <p>Enter your sign-in email where we will send you a link to reset password.</p>
            </div>
        </div>
        <div class="modal-body">
            <form action="'.$base_url.'user/forget_password" method="post" class="form inputs-underline">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="mail" id="mail" placeholder="Your email" required>
                </div>
                <!--end form-group-->
                <div class="form-group center">
                    <button type="submit" class="btn btn-primary width-100">Send Link</button>
                </div>
                <!--end form-group-->
            </form>
            <!--end form-->
        </div>
        <!--end modal-body-->
    </div>
    <!--end modal-content-->
</div>
<!--end modal-dialog-->
';
