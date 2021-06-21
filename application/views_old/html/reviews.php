    <link href="<?php echo base_url(); ?>assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">
    
    <style>
        .box { padding: 10px; font-size: 12px; font-weight: bold; line-height: 50px; }
        .row { margin-bottom: 30px; }
    </style>

    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Contact</li>
            </ol>
            <!--end breadcrumb-->
            <section class="page-title">
                <h1>Reviews</h1>
            </section>
            <!--end page-title-->

            <section id="write-a-review">

                <h2>Write a Review</h2>

                <form class="clearfix form inputs-underline">

                    <div class="box">

                        <div class="comment">

                            <div class="row">

                                <div class="col-md-8">

                                    <div class="comment-title">

                                        <h4>Review your experience</h4>

                                    </div>

                                    <!--end title-->

                                    <div class="form-group">

                                        <label for="name">Title of your review<em>*</em></label>

                                        <input type="text" class="form-control" id="name" name="name" placeholder="Beautiful place!" required="">

                                    </div>

                                    <div class="form-group">

                                        <label for="message">Your Message<em>*</em></label>

                                        <textarea class="form-control" id="message" rows="8" name="message" required="" placeholder="Describe your experience"></textarea>

                                    </div>

                                    <!--end form-group-->

                                </div>

                                <!--end col-md-8-->

                                <div class="col-md-4">

                                    <div class="comment-title">

                                        <h4>Rating</h4>

                                    </div>

                                    <!--end title-->

                                    <dl class="visitor-rating">

                                        <dt>Comfort</dt>

                                        <dd class="star-rating active" data-name="comfort"></dd>

                                        <dt>Location</dt>

                                        <dd class="star-rating active" data-name="location"></dd>

                                        <dt>Facilities</dt>

                                        <dd class="star-rating active" data-name="facilities"></dd>

                                        <dt>Staff</dt>

                                        <dd class="star-rating active" data-name="staff"></dd>

                                        <dt>Value for money</dt>

                                        <dd class="star-rating active" data-name="value"></dd>

                                    </dl>

                                </div>

                                <!--end col-md-4-->

                            </div>

                            <!--end row-->

                            <br>

                            <div class="form-group">

                                <button type="submit" class="btn btn-primary btn-rounded">Send Review</button>

                            </div>

                            <!--end form-group-->

                        </div>

                        <!--end comment-->

                    </div>

                    <!--end review-->

                </form>

                <!--end form-->

            </section>

            <section class="reviews">
                <div class="review">
                    <div class="ribbon right new"><figure>New</figure></div>
                    <div class="row">
                        <div class="col-md-2">
                            <aside class="name">John Doe</aside>
                            <aside class="date">10.03.2015</aside>
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-10">
                            <div class="comment">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="comment-title">
                                            <figure class="rating">9.5</figure>
                                            <h4>Beautiful</h4>
                                        </div>
                                        <!--end title-->
                                        <p>The site looks beautiful serves the purpose. Some are needs to be improved and require additional functionalities. Site is responsive and the speed is adequate. The site is bit slower than regular sites. Suggest improving the speed and security of the website. The customer services is not good, few things are unclear needs more attention to resolve on urgent basis such as broken links.</p>
                                        <div class="options">
                                            <a href="#reply_1" data-toggle="collapse" aria-expanded="false" aria-controls="reply_1" class="btn btn-framed btn-primary btn-rounded btn-small icon">Reply<i class="fa fa-reply font-color-default"></i></a>
                                        </div>
                                        <!--end options-->
                                        <div class="collapse in" id="reply_1">
                                            <div class="answer">
                                                <form class="form labels-uppercase clearfix" id="form_reply_1">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="form_reply_1-name">Your Name<em>*</em></label>
                                                                <input type="text" class="form-control" id="form_reply_1-name" name="name" placeholder="Name" required="">
                                                            </div>
                                                        </div>
                                                        <!--end col-md-6-->
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="form_reply_1-email">Your Position (optional)</label>
                                                                <input type="text" class="form-control" id="form_reply_1-email" name="position" placeholder="e.g. Owner">
                                                            </div>
                                                        </div>
                                                        <!--end col-md-6-->
                                                    </div>
                                                    <!--end row-->
                                                    <div class="form-group">
                                                        <label for="form_reply_1-message">Your Answer<em>*</em></label>
                                                        <textarea class="form-control" id="form_reply_1-message" rows="8" name="answer" required="" placeholder="Message"></textarea>
                                                    </div>
                                                    <!--end form-group-->
                                                    <div class="form-group pull-right">
                                                        <button type="submit" class="btn btn-primary btn-rounded">Send Message</button>
                                                    </div>
                                                    <!--end form-group-->
                                                </form>
                                                <!--end form-->
                                            </div>
                                            <!--end answer-->
                                        </div>
                                        <!--end collapse-->
                                    </div>
                                    <!--end col-md-8-->
                                    <div class="col-md-4">
                                        <div class="comment-title">
                                            <h4>Rating</h4>
                                        </div>
                                        <!--end title-->
                                        <dl class="visitor-rating">
                                            <dt>Cleanliness</dt>
                                            <dd>10</dd>
                                            <dt>Comfort</dt>
                                            <dd>9</dd>
                                            <dt>Location</dt>
                                            <dd>8</dd>
                                            <dt>Facilities</dt>
                                            <dd>10</dd>
                                            <dt>Staff</dt>
                                            <dd>8</dd>
                                            <dt>Value for money</dt>
                                            <dd>9</dd>
                                        </dl>
                                    </div>
                                    <!--end col-md-4-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end comment-->
                        </div>
                        <!--end col-md-9-->
                    </div>
                    <!--end row-->
                </div>
                <!--end review-->
            </section>
            <!--end reviews-->
            <section class="center">
                <a href="" class="btn btn-primary btn-light-frame btn-rounded btn-framed btn-large">Load More</a>
            </section>
            <!--end center-->

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

<script>
    $(document).ready(function(){
        rating(".visitor-rating");
    });
</script>