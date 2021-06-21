<?php

$base_url = "https://glokallist.com/";

echo

'<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="section-title">
                <h2>Send Message</h2>
            </div>
        </div>
        <div class="modal-body">
            <form action="'.$base_url.'home/job_send_message" method="post" class="form inputs-underline" enctype="multipart/form-data">
                
                <input type="hidden" id="post_type" name="post_type" required/>
                <input type="hidden" id="receiver_email" name="receiver_email" required/>
                <input type="hidden" id="url" name="url" required/>

                <div class="form-group">
                    <label for="sender_name">Name:</label>
                    <input type="text" class="form-control" id="sender_name" name="sender_name" minlength="3" maxlength="50" placeholder="Enter your name" required />
                </div>
                <!--end form-group-->

                <div class="form-group">
                    <label for="sender_email">Email:</label>
                    <input type="email" class="form-control" id="sender_email" name="sender_email" minlength="3" maxlength="50" placeholder="Enter your email" required />
                </div>
                <!--end form-group-->

                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" class="form-control" id="subject" name="subject" minlength="3" maxlength="50" placeholder="Write Subject" required />
                </div>
                <!--end form-group-->

                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" id="message" name="message" minlength="3" placeholder="Write your message" required></textarea>
                </div>

                <div class="form-group">
                    <label for="files">Attachment:</label>
                    <input style="margin-top:15px;" type="file" class="form-control" id="files" name="files" required />
                </div>

                <div class="form-group center">
                    <button type="submit" class="btn btn-primary width-100">Send</button>
                </div>
                <!--end form-group-->
            </form>
            <!--end form-->
        </div>
        <!--end modal-body-->
    </div>
    <!--end modal-content-->
</div>
<!--end modal-dialog-->';
