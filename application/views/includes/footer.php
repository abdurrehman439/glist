    <footer id="page-footer">
        <div class="footer-wrapper">
            <div class="block">
                <div class="container">
                    <div class="vertical-aligned-elements">
                        <div class="element width-50">
                            <p data-toggle="modal" data-target="#myModal">Glokallist.com is copy right by Glokallist Inc. To review the Terms and Condition of Use and to review our Privacy Policy please click on the on <a href="<?php echo base_url(); ?>home/terms_and_conditions">Terms of Use</a> and <a href="<?php echo base_url(); ?>home/privacy_policy">Privacy Policy</a> and <a href="<?php echo base_url(); ?>home/contact">Contact</a> and <a href="<?php echo base_url(); ?>home/invite_a_friend">Invite A Friend</a> and <a href="<?php echo base_url(); ?>home/partner_with_us">Partner With Us</a>.</p>
                        </div>
                        <div class="element width-50 text-align-right">
                            <a href="#" class="circle-icon" target="_blank"><i class="social_facebook"></i></a>
                            <a href="https://twitter.com/glokallist" class="circle-icon" target="_blank"><i class="social_twitter"></i></a>
                            <a href="https://plus.google.com/109382472733667827430" class="circle-icon" target="_blank"><i class="social_googleplus"></i></a>
                            <a href="https://www.linkedin.com/in/glokallist-com-727538165/" class="circle-icon" target="_blank"><i class="social_linkedin"></i></a>
                            <a href="https://www.youtube.com/watch?v=bIIx-rF2IyI" class="circle-icon" target="_blank"><i class="social_youtube"></i></a>
                        </div>
                    </div>
                    <div class="background-wrapper">
                        <div class="bg-transfer opacity-50">
                            <img src="<?php echo base_url(); ?>assets/img/footer-bg.png" alt="">
                        </div>
                    </div>
                    <!--end background-wrapper-->
                </div>
            </div>
            <div class="footer-navigation">
                <div class="container">
                    <div class="vertical-aligned-elements">
                        <div class="element width-50">(C) <?= date('Y') ?> Glokallist.com. All right reserved.</div>
                        <!--<div class="element width-50 text-align-right">
                            <a href="index.html">Home</a>
                            <a href="listing-grid-right-sidebar.html">Listings</a>
                            <a href="submit.html">Submit Item</a>
                            <a href="contact.html">Contact</a>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--end page-footer-->
    </div>
    <!--end page-wrapper-->
    <a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>

    <script>
        function set_send_message_data(post_type, receiver_email, url) {
            setTimeout(function() {
                $('#post_type').val(post_type);
                $('#receiver_email').val(receiver_email);
                $('#url').val(url);
            }, 2000);
        }

        function addToFavourite(type, id) {

            $("html, body").animate({
                scrollTop: 0
            }, "slow");

            $('#favourite-notification').html('<div class=\"alert alert-info\"><strong>Wait!</strong> Requesting to add the post to favourites</div>');

            $.ajax({
                type: 'POST',
                data: {
                    'type': type,
                    'id': id
                },
                url: '<?php echo base_url(); ?>user/add_to_favourite',
                success: function(data) {
                    if (data == "success") {
                        $('#favourite-notification').html('<div class=\"alert alert-success alert-dismissible\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong>Success!</strong> Post added to favourites.</div>');
                        // $('#favourite-notification-pre').hide();
                        // $('#favourite-notification-added').show();
                        // setTimeout(function(){ $('#favourite-notification-added').hide(); }, 2000);
                    } else if (data == 'login') {
                        $('#favourite-notification').html('<div class=\"alert alert-warning alert-dismissible\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong>Note!</strong> You must login first to add post to favourites.</div>');
                    } else {
                        $('#favourite-notification').html('<div class=\"alert alert-warning alert-dismissible\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong>Note!</strong> Post already in favourites.</div>');
                        // $('#favourite-notification-pre').hide();
                        // $('#favourite-notification-already').show();
                        // setTimeout(function(){ $('#favourite-notification-already').hide(); }, 2000);
                    }
                }
            });
        }
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120368561-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-120368561-1');

        $(document).ready(function() {
            console.log("ready!");
            if ($(".page-title h1:first-child").text() == '') {
                $(".adds_area").css('display', 'none');
            }
            $("#page-title-inbanner").html($(".page-title h1:first-child").text());

        });
    </script>
    </body>