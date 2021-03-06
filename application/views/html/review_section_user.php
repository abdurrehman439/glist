<section id="write-a-review">

    <h2>Write a Review</h2>

    <form class="clearfix form inputs-underline" action="<?php echo base_url(); ?>Home/save_reviews" method="POST">

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

                            <input type="text" class="form-control" id="title" name="title" placeholder="Beautiful place!" required="">

                            <input type="hidden" class="form-control" id="post_id" name="post_id" value="<?php echo $this->uri->segment(3); ?>" placeholder="Beautiful place!" required="">

                            <input type="hidden" class="form-control" id="type" name="type" value="1" placeholder="Beautiful place!" required="">
                            <input type="hidden" class="form-control" id="url" name="url" value="<?php echo current_url(); ?>" placeholder="Beautiful place!" required="">

                        </div>

                        <div class="form-group">

                            <label for="message">Your Message<em>*</em></label>

                            <textarea class="form-control" id="message" rows="8" name="message" required="" placeholder="Describe your experience"></textarea>

                        </div>

                        <!--end form-group-->

                    </div>

                    <!--end col-md-8-->

                    <div class="col-md-4" style="display:none;">

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

                    <button type="submit" class="btn btn-primary btn-rounded  review_section">Send Review</button>

                </div>

                <!--end form-group-->

            </div>

            <!--end comment-->

        </div>

        <!--end review-->

    </form>

    <!--end form-->

</section>