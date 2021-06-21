    <link href="<?php echo base_url(); ?>assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url(); ?>assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">

    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">

    <style type="text/css" rel="stylesheet">
        #div-title,
        #div-events-category,
        #div-sales-category,
        #div-coupons-category,
        #div-service-require-category,
        #div-service-providers-category,
        #div-realty-category,
        #div-nearby-stores-category,
        #div-attractions-category,
        #div-hire-a-resource-category,
        #div-tickets-category,
        #div-learnings-category,
        #div-restaurants-category,
        #div-rent-category,
        #div-business-sales-category,
        #div-short-term-hiring-category,
        #div-hire-a-resource-second-language,
        #div-business-name,
        #div-tags,
        #div-openhouse-date,
        #div-date,
        #div-start-date,
        #div-finish-date,
        #div-time-start,
        #div-time-finish,
        #div-open-hour,
        #div-close-hour,
        #div-expected-hours,
        #div-details,
        #div-work-details,
        #div-job-description,
        #div-price,
        #div-price-duration,
        #div-pay,
        #div-pay-duration,
        #div-amount,
        #div-address,
        #div-salary,
        #div-hourly-rate,
        #div-original-price,
        #div-discounted-price,
        #section-address,
        #section-profile-option,
        #section-jobs,
        #section-realty,
        #section-social,
        #section-gallery,
        #div-currency,
        #section-match-friends {
            display: none;
        }
    </style>

    <div id="page-content">

        <div class="container">

            <ol class="breadcrumb">

                <li><a href="#">Home</a></li>

                <li><a href="#">Pages</a></li>

                <li class="active">Contact</li>

            </ol>

            <!--end breadcrumb-->

            <section class="    page-title center">

                <h1>Submit Listing Form</h1>

            </section>

            <!--end page-title-->

            <section>

                <div class="row">

                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">

                        <form id="submit-listing-form" method="post" class="form inputs-underline" enctype="multipart/form-data">

                            <section>
                                <div id="form-notification" class="row">

                                </div>
                                <div class="row">

                                    <input type="hidden" id="<?php echo @$type; ?>_id" name="<?php echo @$type; ?>_id" value="<?php $temp_type = $type . '_id';
                                                                                                                                echo @$data[0]->$temp_type; ?>" required />

                                    <div class="col-md-6 col-sm-6" id="div-title">

                                        <div class="form-group">

                                            <label for="title">Title</label>

                                            <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="<?php echo @$data[0]->title; ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->
                                    <?php if (isset($data[0]->category)) { ?>

                                        <div class="col-md-6 col-sm-6" id="div-events-category">

                                            <div class="form-group">

                                                <label for="events-category">Category</label>

                                                <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="events-category" id="events-category">
                                                    <option value="fun_n_entertainment" <?php if ($data[0]->category == "fun_n_entertainment") echo 'selected="selected"'; ?>>Fun &amp; Entertainment</option>
                                                    <option value="education_n_informative" <?php if ($data[0]->category == "education_n_informative") echo 'selected="selected"'; ?>>Education &amp; Informative</option>
                                                    <option value="games" <?php if ($data[0]->category == "games") echo 'selected="selected"'; ?>>Games</option>
                                                    <option value="religious" <?php if ($data[0]->category == "religious") echo 'selected="selected"'; ?>>Religious</option>
                                                    <option value="other" <?php if ($data[0]->category == "other") echo 'selected="selected"'; ?>>Other</option>
                                                </select>

                                            </div>

                                            <!--end form-group-->

                                        </div>


                                        <div class="col-md-6 col-sm-6" id="div-sales-category">

                                            <div class="form-group">

                                                <label for="sales-category">Category</label>

                                                <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="sales-category" id="sales-category">
                                                    <option value="new" <?php if ($data[0]->category == "new") echo 'selected="selected"'; ?>>New</option>
                                                    <option value="used" <?php if ($data[0]->category == "used") echo 'selected="selected"'; ?>>Used</option>
                                                    <option value="classic_antiques" <?php if ($data[0]->category == "classic_antiques") echo 'selected="selected"'; ?>>Classic/Antiques</option>
                                                </select>

                                            </div>

                                            <!--end form-group-->

                                        </div>

                                        <div class="col-md-6 col-sm-6" id="div-coupons-category">

                                            <div class="form-group">

                                                <label for="coupons-category">Category</label>

                                                <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="coupons-category" id="coupons-category">
                                                    <option value="goods" <?php if ($data[0]->category == "goods") echo 'selected="selected"'; ?>>Goods</option>
                                                    <option value="services" <?php if ($data[0]->category == "services") echo 'selected="selected"'; ?>>Services</option>
                                                    <option value="attractions" <?php if ($data[0]->category == "attractions") echo 'selected="selected"'; ?>>Attractions</option>
                                                    <option value="household" <?php if ($data[0]->category == "household") echo 'selected="selected"'; ?>>Household</option>
                                                    <option value="events" <?php if ($data[0]->category == "events") echo 'selected="selected"'; ?>>Events</option>
                                                    <option value="others" <?php if ($data[0]->category == "others") echo 'selected="selected"'; ?>>Others</option>
                                                </select>

                                            </div>

                                            <!--end form-group-->

                                        </div>

                                        <!--end col-md-6-->

                                        <div class="col-md-6 col-sm-6" id="div-service-require-category">

                                            <div class="form-group">

                                                <label for="service-require-category">Category</label>

                                                <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="service-require-category" id="service-require-category">
                                                    <option value="hvac" <?php if ($data[0]->category == "hvac") echo 'selected="selected"'; ?>>HVAC</option>
                                                    <option value="electrical" <?php if ($data[0]->category == "electrical") echo 'selected="selected"'; ?>>Electrical</option>
                                                    <option value="plumbing" <?php if ($data[0]->category == "plumbing") echo 'selected="selected"'; ?>>Plumbing</option>
                                                    <option value="home_construciton" <?php if ($data[0]->category == "home_construciton") echo 'selected="selected"'; ?>>Home Construciton</option>
                                                    <option value="lanscaping" <?php if ($data[0]->category == "lanscaping") echo 'selected="selected"'; ?>>Lanscaping</option>
                                                    <option value="roofing" <?php if ($data[0]->category == "roofing") echo 'selected="selected"'; ?>>Roofing</option>
                                                    <option value="cleaning" <?php if ($data[0]->category == "cleaning") echo 'selected="selected"'; ?>>Cleaning</option>
                                                    <option value="painting" <?php if ($data[0]->category == "painting") echo 'selected="selected"'; ?>>Painting</option>
                                                    <option value="interior_inside" <?php if ($data[0]->category == "interior_inside") echo 'selected="selected"'; ?>>Interior/Inside</option>
                                                    <option value="exterior_outside" <?php if ($data[0]->category == "exterior_outside") echo 'selected="selected"'; ?>>Exterior/Outside</option>
                                                    <option value="labour" <?php if ($data[0]->category == "labour") echo 'selected="selected"'; ?>>Labour</option>
                                                    <option value="automative" <?php if ($data[0]->category == "automative") echo 'selected="selected"'; ?>>Automative</option>
                                                    <option value="beauty" <?php if ($data[0]->category == "beauty") echo 'selected="selected"'; ?>>Beauty</option>
                                                    <option value="computer" <?php if ($data[0]->category == "computer") echo 'selected="selected"'; ?>>Computer</option>
                                                    <option value="accounting_n_finance" <?php if ($data[0]->category == "accounting_n_finance") echo 'selected="selected"'; ?>>Accounting &amp; Finance</option>
                                                    <option value="taxation" <?php if ($data[0]->category == "taxation") echo 'selected="selected"'; ?>>Taxation</option>
                                                    <option value="household" <?php if ($data[0]->category == "household") echo 'selected="selected"'; ?>>Household</option>
                                                    <option value="legal" <?php if ($data[0]->category == "legal") echo 'selected="selected"'; ?>>Legal</option>
                                                    <option value="education_n_classes" <?php if ($data[0]->category == "education_n_classes") echo 'selected="selected"'; ?>>Education &amp; Classes</option>
                                                    <option value="others" <?php if ($data[0]->category == "others") echo 'selected="selected"'; ?>>Others</option>
                                                </select>

                                            </div>

                                            <!--end form-group-->

                                        </div>

                                        <!--end col-md-6-->

                                        <div class="col-md-6 col-sm-6" id="div-service-providers-category">

                                            <div class="form-group">

                                                <label for="service-providers-category">Category</label>

                                                <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="service-providers-category" id="service-providers-category">
                                                    <option value="hvac" <?php if ($data[0]->category == "hvac") echo 'selected="selected"'; ?>>HVAC</option>
                                                    <option value="electrical" <?php if ($data[0]->category == "electrical") echo 'selected="selected"'; ?>>Electrical</option>
                                                    <option value="plumbing" <?php if ($data[0]->category == "plumbing") echo 'selected="selected"'; ?>>Plumbing</option>
                                                    <option value="home_construciton" <?php if ($data[0]->category == "home_construciton") echo 'selected="selected"'; ?>>Home Construciton</option>
                                                    <option value="lanscaping" <?php if ($data[0]->category == "lanscaping") echo 'selected="selected"'; ?>>Lanscaping</option>
                                                    <option value="roofing" <?php if ($data[0]->category == "roofing") echo 'selected="selected"'; ?>>Roofing</option>
                                                    <option value="cleaning" <?php if ($data[0]->category == "cleaning") echo 'selected="selected"'; ?>>Cleaning</option>
                                                    <option value="painting" <?php if ($data[0]->category == "painting") echo 'selected="selected"'; ?>>Painting</option>
                                                    <option value="interior_inside" <?php if ($data[0]->category == "interior_inside") echo 'selected="selected"'; ?>>Interior/Inside</option>
                                                    <option value="exterior_outside" <?php if ($data[0]->category == "exterior_outside") echo 'selected="selected"'; ?>>Exterior/Outside</option>
                                                    <option value="labour" <?php if ($data[0]->category == "labour") echo 'selected="selected"'; ?>>Labour</option>
                                                    <option value="automative" <?php if ($data[0]->category == "automative") echo 'selected="selected"'; ?>>Automative</option>
                                                    <option value="beauty" <?php if ($data[0]->category == "beauty") echo 'selected="selected"'; ?>>Beauty</option>
                                                    <option value="computer" <?php if ($data[0]->category == "computer") echo 'selected="selected"'; ?>>Computer</option>
                                                    <option value="accounting_n_finance" <?php if ($data[0]->category == "accounting_n_finance") echo 'selected="selected"'; ?>>Accounting &amp; Finance</option>
                                                    <option value="taxation" <?php if ($data[0]->category == "taxation") echo 'selected="selected"'; ?>>Taxation</option>
                                                    <option value="household" <?php if ($data[0]->category == "household") echo 'selected="selected"'; ?>>Household</option>
                                                    <option value="legal" <?php if ($data[0]->category == "legal") echo 'selected="selected"'; ?>>Legal</option>
                                                    <option value="education_n_classes" <?php if ($data[0]->category == "education_n_classes") echo 'selected="selected"'; ?>>Education &amp; Classes</option>
                                                    <option value="others" <?php if ($data[0]->category == "others") echo 'selected="selected"'; ?>>Others</option>
                                                </select>

                                            </div>

                                            <!--end form-group-->

                                        </div>

                                        <!--end col-md-6-->

                                        <div class="col-md-12" style="padding:0px;" id="div-realty-category">

                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">

                                                    <label for="realty-category">Category</label>

                                                    <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="realty-category" id="realty-category">
                                                        <option value="for_sale" <?php if ($data[0]->category == "for_sale") echo 'selected="selected"'; ?>>For Sale</option>
                                                        <option value="for_rent" <?php if ($data[0]->category == "for_rent") echo 'selected="selected"'; ?>>For Rent</option>
                                                        <option value="others" <?php if ($data[0]->category == "others") echo 'selected="selected"'; ?>>Others</option>
                                                    </select>

                                                </div>
                                            </div>

                                        </div>
                                    <?php } ?>

                                    <?php if (isset($data[0]->type)) { ?>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">

                                                <label for="realty-type">Type</label>

                                                <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="realty-type" id="realty-type">
                                                    <option value="appartments" <?php if ($data[0]->type == "appartments") echo 'selected="selected"'; ?>>Appartments</option>
                                                    <option value="house" <?php if ($data[0]->type == "house") echo 'selected="selected"'; ?>>House</option>
                                                    <option value="condo" <?php if ($data[0]->type == "condo") echo 'selected="selected"'; ?>>Condo</option>
                                                    <option value="office" <?php if ($data[0]->type == "office") echo 'selected="selected"'; ?>>Office</option>
                                                    <option value="commercial" <?php if ($data[0]->type == "commercial") echo 'selected="selected"'; ?>>Commercial</option>
                                                    <option value="lot_n_lands" <?php if ($data[0]->type == "lot_n_lands") echo 'selected="selected"'; ?>>Lot &amp; Lands</option>
                                                    <option value="rooms_sharing" <?php if ($data[0]->type == "rooms_sharing") echo 'selected="selected"'; ?>>Rooms / Sharing</option>
                                                    <option value="vaccation_home" <?php if ($data[0]->type == "vaccation_home") echo 'selected="selected"'; ?>>Vaccation Home</option>
                                                </select>

                                            </div>
                                        </div>


                                    <?php } ?>
                                    <!--end col-md-6-->
                                    <?php if (isset($data[0]->category)) { ?>
                                        <div class="col-md-6 col-sm-6" id="div-nearby-stores-category">

                                            <div class="form-group">

                                                <label for="nearby-stores-category">Category</label>

                                                <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="nearby-stores-category" id="nearby-stores-category">
                                                    <option value="fun" <?php if ($data[0]->category == "fun") echo 'selected="selected"'; ?>>Fun</option>
                                                    <option value="education" <?php if ($data[0]->category == "education") echo 'selected="selected"'; ?>>Education</option>
                                                    <option value="entertainment" <?php if ($data[0]->category == "entertainment") echo 'selected="selected"'; ?>>Entertainment</option>
                                                    <option value="games" <?php if ($data[0]->category == "games") echo 'selected="selected"'; ?>>Games</option>
                                                    <option value="religious" <?php if ($data[0]->category == "religious") echo 'selected="selected"'; ?>>Religious</option>
                                                    <option value="informative" <?php if ($data[0]->category == "informative") echo 'selected="selected"'; ?>>Informative</option>
                                                    <option value="other" <?php if ($data[0]->category == "other") echo 'selected="selected"'; ?>>Other</option>
                                                </select>

                                            </div>

                                            <!--end form-group-->

                                        </div>

                                        <!--end col-md-6-->

                                        <div class="col-md-6 col-sm-6" id="div-attractions-category">

                                            <div class="form-group">

                                                <label for="attractions-category">Category</label>

                                                <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="attractions-category" id="attractions-category">
                                                    <option value="art_n_culture" <?php if ($data[0]->category == "art_n_culture") echo 'selected="selected"'; ?>>Art &amp; Culture</option>
                                                    <option value="entertainment" <?php if ($data[0]->category == "entertainment") echo 'selected="selected"'; ?>>Entertainment</option>
                                                    <option value="nightlife" <?php if ($data[0]->category == "nightlife") echo 'selected="selected"'; ?>>Nightlife</option>
                                                    <option value="fun" <?php if ($data[0]->category == "fun") echo 'selected="selected"'; ?>>Fun</option>
                                                    <option value="education" <?php if ($data[0]->category == "education") echo 'selected="selected"'; ?>>Education</option>
                                                    <option value="games" <?php if ($data[0]->category == "games") echo 'selected="selected"'; ?>>Games</option>
                                                    <option value="history_n_heritage" <?php if ($data[0]->category == "history_n_heritage") echo 'selected="selected"'; ?>>History &amp; Heritage</option>
                                                    <option value="monument_n_memorial" <?php if ($data[0]->category == "monument_n_memorial") echo 'selected="selected"'; ?>>Monument &amp; Memorial</option>
                                                    <option value="meuseum" <?php if ($data[0]->category == "meuseum") echo 'selected="selected"'; ?>>Meuseum</option>
                                                    <option value="shopping" <?php if ($data[0]->category == "shopping") echo 'selected="selected"'; ?>>Shopping</option>
                                                    <option value="festivals" <?php if ($data[0]->category == "festivals") echo 'selected="selected"'; ?>>Festivals</option>
                                                    <option value="saloon_n_spa" <?php if ($data[0]->category == "saloon_n_spa") echo 'selected="selected"'; ?>>Saloon &amp; Spa</option>
                                                    <option value="sports" <?php if ($data[0]->category == "sports") echo 'selected="selected"'; ?>>Sports</option>
                                                    <option value="outdoor_recreation" <?php if ($data[0]->category == "outdoor_recreation") echo 'selected="selected"'; ?>>Outdoor Recreation</option>
                                                    <option value="theaters" <?php if ($data[0]->category == "theaters") echo 'selected="selected"'; ?>>Theaters</option>
                                                    <option value="sightseeing" <?php if ($data[0]->category == "sightseeing") echo 'selected="selected"'; ?>>Sightseeing</option>
                                                    <option value="parks" <?php if ($data[0]->category == "parks") echo 'selected="selected"'; ?>>Parks</option>
                                                    <option value="water_parks" <?php if ($data[0]->category == "water_parks") echo 'selected="selected"'; ?>>Water Parks</option>
                                                    <option value="lakes_n_beaches" <?php if ($data[0]->category == "lakes_n_beaches") echo 'selected="selected"'; ?>>Lakes &amp; Beaches</option>
                                                    <option value="rides_n_funplex" <?php if ($data[0]->category == "rides_n_funplex") echo 'selected="selected"'; ?>>Rides &amp; Funplex</option>
                                                    <option value="others" <?php if ($data[0]->category == "others") echo 'selected="selected"'; ?>>Others</option>
                                                </select>

                                            </div>

                                            <!--end form-group-->

                                        </div>

                                        <!--end col-md-6-->

                                        <div class="col-md-6 col-sm-6" id="div-hire-a-resource-category">

                                            <div class="form-group">

                                                <label for="hire-a-resource-category">Category</label>

                                                <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="hire-a-resource-category" id="hire-a-resource-category">
                                                    <option value="web_design_n_development" <?php if ($data[0]->category == "web_design_n_development") echo 'selected="selected"'; ?>>Web Design &amp; Development</option>
                                                    <option value="graphics_n_design" <?php if ($data[0]->category == "graphics_n_design") echo 'selected="selected"'; ?>>Graphics &amp; Design</option>
                                                    <option value="programming" <?php if ($data[0]->category == "programming") echo 'selected="selected"'; ?>>Programming</option>
                                                    <option value="digital_marketing" <?php if ($data[0]->category == "digital_marketing") echo 'selected="selected"'; ?>>Digital Marketing</option>
                                                    <option value="writing" <?php if ($data[0]->category == "writing") echo 'selected="selected"'; ?>>Writing</option>
                                                    <option value="video_n_animation" <?php if ($data[0]->category == "video_n_animation") echo 'selected="selected"'; ?>>Video &amp; Animation</option>
                                                    <option value="music_n_audio" <?php if ($data[0]->category == "music_n_audio") echo 'selected="selected"'; ?>>Music &amp; Audio</option>
                                                    <option value="business" <?php if ($data[0]->category == "business") echo 'selected="selected"'; ?>>Business</option>
                                                    <option value="lifestyle" <?php if ($data[0]->category == "lifestyle") echo 'selected="selected"'; ?>>Lifestyle</option>
                                                    <option value="tech" <?php if ($data[0]->category == "tech") echo 'selected="selected"'; ?>>Tech</option>
                                                    <option value="accounting_n_finance" <?php if ($data[0]->category == "accounting_n_finance") echo 'selected="selected"'; ?>>Accounting &amp; Finance</option>
                                                    <option value="taxation" <?php if ($data[0]->category == "taxation") echo 'selected="selected"'; ?>>Taxation</option>
                                                    <option value="education_related" <?php if ($data[0]->category == "education_related") echo 'selected="selected"'; ?>>Education Related</option>
                                                    <option value="others" <?php if ($data[0]->category == "others") echo 'selected="selected"'; ?>>Others</option>
                                                </select>

                                            </div>

                                            <!--end form-group-->

                                        </div>
                                    <?php } ?>
                                    <!--end col-md-6-->


                                    <?php if (isset($data[0]->country)) { ?>

                                        <div class="col-md-6 col-sm-6 form-group" id="div-hire-a-resource-second-language">

                                            <label for="hire-a-resource-country">Country</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="hire-a-resource-country" id="hire-a-resource-country">
                                                <option value="<?php if ($data[0]->country != '') {
                                                                    echo $data[0]->country;
                                                                } ?>" selected="selected"><?php echo $data[0]->country; ?></option>
                                                <option value="Afganistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bonaire">Bonaire</option>
                                                <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                <option value="Brunei">Brunei</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Canary Islands">Canary Islands</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Channel Islands">Channel Islands</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos Island">Cocos Island</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote DIvoire">Cote DIvoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Curaco">Curacao</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="East Timor">East Timor</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands">Falkland Islands</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Ter">French Southern Ter</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Great Britain">Great Britain</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Hawaii">Hawaii</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="India">India</option>
                                                <option value="Iran">Iran</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea North">Korea North</option>
                                                <option value="Korea Sout">Korea South</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Laos">Laos</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libya">Libya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macau">Macau</option>
                                                <option value="Macedonia">Macedonia</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Midway Islands">Midway Islands</option>
                                                <option value="Moldova">Moldova</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Nambia">Nambia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherland Antilles">Netherland Antilles</option>
                                                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                <option value="Nevis">Nevis</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau Island">Palau Island</option>
                                                <option value="Palestine">Palestine</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Phillipines">Philippines</option>
                                                <option value="Pitcairn Island">Pitcairn Island</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                <option value="Republic of Serbia">Republic of Serbia</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russia">Russia</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="St Barthelemy">St Barthelemy</option>
                                                <option value="St Eustatius">St Eustatius</option>
                                                <option value="St Helena">St Helena</option>
                                                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                <option value="St Lucia">St Lucia</option>
                                                <option value="St Maarten">St Maarten</option>
                                                <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                <option value="Saipan">Saipan</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="Samoa American">Samoa American</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syria">Syria</option>
                                                <option value="Tahiti">Tahiti</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania">Tanzania</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Erimates">United Arab Emirates</option>
                                                <option value="United States of America">United States of America</option>
                                                <option value="Uraguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Vatican City State">Vatican City State</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Vietnam">Vietnam</option>
                                                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                <option value="Wake Island">Wake Island</option>
                                                <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zaire">Zaire</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>

                                        </div>
                                    <?php } ?>

                                    <!--end form-group-->
                                    <?php if (isset($data[0]->second_language)) { ?>
                                        <div class="col-md-6 col-sm-6 form-group" id="language-hide">

                                            <label for="hire-a-resource-second-language">Second Language</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="hire-a-resource-second-language" id="hire-a-resource-second-language">
                                                <option value="arabic" <?php if ($data[0]->second_language == "arabic") echo 'selected="selected"'; ?>>Arabic</option>
                                                <option value="afrikaans" <?php if ($data[0]->second_language == "afrikaans") echo 'selected="selected"'; ?>>Afrikaans</option>
                                                <option value="bengali" <?php if ($data[0]->second_language == "bengali") echo 'selected="selected"'; ?>>Bengali</option>
                                                <option value="bulgarian" <?php if ($data[0]->second_language == "bulgarian") echo 'selected="selected"'; ?>>Bulgarian</option>
                                                <option value="chinese" <?php if ($data[0]->second_language == "chinese") echo 'selected="selected"'; ?>>Chinese</option>
                                                <option value="czech" <?php if ($data[0]->second_language == "czech") echo 'selected="selected"'; ?>>Czech</option>
                                                <option value="danish" <?php if ($data[0]->second_language == "danish") echo 'selected="selected"'; ?>>Danish</option>
                                                <option value="dutch" <?php if ($data[0]->second_language == "dutch") echo 'selected="selected"'; ?>>Dutch</option>
                                                <option value="english" <?php if ($data[0]->second_language == "english") echo 'selected="selected"'; ?>>English</option>
                                                <option value="french" <?php if ($data[0]->second_language == "french") echo 'selected="selected"'; ?>>French</option>
                                                <option value="german" <?php if ($data[0]->second_language == "german") echo 'selected="selected"'; ?>>German</option>
                                                <option value="greek" <?php if ($data[0]->second_language == "greek") echo 'selected="selected"'; ?>>Greek</option>
                                                <option value="hindi" <?php if ($data[0]->second_language == "hindi") echo 'selected="selected"'; ?>>Hindi</option>
                                                <option value="hungarian" <?php if ($data[0]->second_language == "hungarian") echo 'selected="selected"'; ?>>Hungarian</option>
                                                <option value="irish" <?php if ($data[0]->second_language == "irish") echo 'selected="selected"'; ?>>Irish</option>
                                                <option value="italian" <?php if ($data[0]->second_language == "italian") echo 'selected="selected"'; ?>>Italian</option>
                                                <option value="japanese" <?php if ($data[0]->second_language == "japanese") echo 'selected="selected"'; ?>>Japanese</option>
                                                <option value="korean" <?php if ($data[0]->second_language == "korean") echo 'selected="selected"'; ?>>Korean</option>
                                                <option value="latvian" <?php if ($data[0]->second_language == "latvian") echo 'selected="selected"'; ?>>Latvian</option>
                                                <option value="polish" <?php if ($data[0]->second_language == "polish") echo 'selected="selected"'; ?>>Polish</option>
                                                <option value="persian" <?php if ($data[0]->second_language == "persian") echo 'selected="selected"'; ?>>Persian</option>
                                                <option value="portuguese" <?php if ($data[0]->second_language == "portuguese") echo 'selected="selected"'; ?>>Portuguese</option>
                                                <option value="romanian" <?php if ($data[0]->second_language == "romanian") echo 'selected="selected"'; ?>>Romanian</option>
                                                <option value="russian" <?php if ($data[0]->second_language == "russian") echo 'selected="selected"'; ?>>Russian</option>
                                                <option value="swahili" <?php if ($data[0]->second_language == "swahili") echo 'selected="selected"'; ?>>Swahili</option>
                                                <option value="slovak" <?php if ($data[0]->second_language == "slovak") echo 'selected="selected"'; ?>>Slovak</option>
                                                <option value="slovenian" <?php if ($data[0]->second_language == "slovenian") echo 'selected="selected"'; ?>>Slovenian</option>
                                                <option value="spanish" <?php if ($data[0]->second_language == "spanish") echo 'selected="selected"'; ?>>Spanish</option>
                                                <option value="swedish" <?php if ($data[0]->second_language == "swedish") echo 'selected="selected"'; ?>>Swedish</option>
                                                <option value="turkish" <?php if ($data[0]->second_language == "turkish") echo 'selected="selected"'; ?>>Turkish</option>
                                                <option value="thai" <?php if ($data[0]->second_language == "thai") echo 'selected="selected"'; ?>>Thai</option>
                                                <option value="urdu" <?php if ($data[0]->second_language == "urdu") echo 'selected="selected"'; ?>>Urdu</option>
                                                <option value="other" <?php if ($data[0]->second_language == "other") echo 'selected="selected"'; ?>>Other</option>
                                            </select>

                                        </div>

                                        <!--end form-group-->
                                    <?php } ?>


                                    <?php if (isset($data[0]->category)) { ?>
                                        <div class="col-md-6 col-sm-6" id="div-tickets-category">

                                            <div class="form-group">

                                                <label for="tickets-category">Category</label>

                                                <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="tickets-category" id="tickets-category">
                                                    <option value="fun_n_entertainment" <?php if ($data[0]->category == "fun_n_entertainment") echo 'selected="selected"'; ?>>Fun &amp; Entertainment</option>
                                                    <option value="education_n_informative" <?php if ($data[0]->category == "education_n_informative") echo 'selected="selected"'; ?>>Education &amp; Informative</option>
                                                    <option value="games" <?php if ($data[0]->category == "games") echo 'selected="selected"'; ?>>Games</option>
                                                    <option value="religious" <?php if ($data[0]->category == "religious") echo 'selected="selected"'; ?>>Religious</option>
                                                    <option value="other" <?php if ($data[0]->category == "other") echo 'selected="selected"'; ?>>Other</option>
                                                </select>

                                            </div>

                                            <!--end form-group-->

                                        </div>

                                        <!--end col-md-6-->

                                        <div class="col-md-6 col-sm-6" id="div-learnings-category">

                                            <div class="form-group">

                                                <label for="learnings-category">Category</label>

                                                <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="learnings-category" id="learnings-category">
                                                    <option value="online" <?php if ($data[0]->category == "online") echo 'selected="selected"'; ?>>Online</option>
                                                    <option value="in_class" <?php if ($data[0]->category == "in_class") echo 'selected="selected"'; ?>>In Class</option>
                                                </select>

                                            </div>

                                            <!--end form-group-->

                                        </div>

                                        <!--end col-md-6-->

                                        <div class="col-md-6 col-sm-6" id="div-restaurants-category">

                                            <div class="form-group">

                                                <label for="restaurants-category">Category</label>

                                                <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="restaurants-category" id="restaurants-category">
                                                    <option value="fun" <?php if ($data[0]->category == "fun") echo 'selected="selected"'; ?>>Fun</option>
                                                    <option value="education" <?php if ($data[0]->category == "education") echo 'selected="selected"'; ?>>Education</option>
                                                    <option value="entertainment" <?php if ($data[0]->category == "entertainment") echo 'selected="selected"'; ?>>Entertainment</option>
                                                    <option value="games" <?php if ($data[0]->category == "games") echo 'selected="selected"'; ?>>Games</option>
                                                    <option value="religious" <?php if ($data[0]->category == "religious") echo 'selected="selected"'; ?>>Religious</option>
                                                    <option value="informative" <?php if ($data[0]->category == "informative") echo 'selected="selected"'; ?>>Informative</option>
                                                    <option value="other" <?php if ($data[0]->category == "other") echo 'selected="selected"'; ?>>Other</option>
                                                </select>

                                            </div>

                                            <!--end form-group-->

                                        </div>

                                        <!--end col-md-6-->

                                        <div class="col-md-6 col-sm-6" id="div-rent-category">

                                            <div class="form-group">

                                                <label for="rent-category">Category</label>

                                                <input type="text" class="form-control" name="rent-category" id="rent-category" placeholder="Category" value="<?php echo @$data[0]->category; ?>" />

                                            </div>

                                            <!--end form-group-->

                                        </div>

                                        <!--end col-md-6-->

                                        <div class="col-md-6 col-sm-6" id="div-business-sales-category">

                                            <div class="form-group">

                                                <label for="business-sales-category">Category</label>

                                                <input type="text" class="form-control" name="business-sales-category" id="business-sales-category" placeholder="Category" value="<?php echo @$data[0]->category; ?>" />

                                            </div>

                                            <!--end form-group-->

                                        </div>

                                        <!--end col-md-6-->

                                        <div class="col-md-6 col-sm-6" id="div-short-term-hiring-category">

                                            <div class="form-group">

                                                <label for="short-term-hiring-category">Category</label>

                                                <input type="text" class="form-control" name="short-term-hiring-category" id="short-term-hiring-category" placeholder="Category" value="<?php echo @$data[0]->category; ?>" />

                                            </div>

                                            <!--end form-group-->

                                        </div>

                                        <!--end col-md-6-->
                                    <?php } ?>

                                    <?php if (isset($data[0]->business_name)) { ?>

                                        <div class="col-md-12 col-sm-12" id="div-business-name">

                                            <div class="form-group">

                                                <label for="business-name">Business Name</label>

                                                <input type="text" class="form-control" name="business-name" id="business-name" placeholder="Business Name" value="<?php echo @$data[0]->business_name; ?>" />

                                            </div>

                                            <!--end form-group-->

                                        </div>
                                    <?php } ?>
                                    <!--end col-md-6-->

                                    <div class="col-md-12 col-sm-12" id="div-tags">

                                        <div class="form-group">

                                            <label for="tags">Tags / Keywords</label>

                                            <input type="text" class="form-control" name="tags" id="tags" placeholder="+ Add tag" value="<?php echo @$data[0]->tags; ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-12 col-sm-12" id="div-openhouse-date">

                                        <div class="form-group">

                                            <label for="openhouse-date">Open House Date</label>

                                            <input type="text" class="form-control date-picker" name="openhouse-date" id="openhouse-date" value="<?php echo date('m/d/Y', strtotime(@$data[0]->openhouse_date)); ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-12-->

                                    <div class="col-md-12 col-sm-12" id="div-date">

                                        <div class="form-group">

                                            <label for="date">Date</label>

                                            <input type="text" class="form-control date-picker" name="date" id="date" value="<?php echo date('m/d/Y', strtotime($data[0]->date)); ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-12-->

                                    <div class="col-md-6 col-sm-6" id="div-start-date">

                                        <div class="form-group">

                                            <label for="start-date">Start Date</label>

                                            <input type="text" class="form-control date-picker" name="start-date" id="start-date" value="<?php echo date('m/d/Y', strtotime(@$data[0]->start_date)); ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-finish-date">

                                        <div class="form-group">

                                            <label for="finish-date">Finish Date</label>

                                            <input type="text" class="form-control date-picker" name="finish-date" id="finish-date" value="<?php echo date('m/d/Y', strtotime(@$data[0]->finish_date)); ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-time-start">

                                        <div class="form-group">

                                            <label for="time-start">Time Start</label>

                                            <input type="time" class="form-control" name="time-start" id="time-start" value="<?php echo @$data[0]->time_start; ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-time-finish">

                                        <div class="form-group">

                                            <label for="time-finish">Time Finish</label>

                                            <input type="time" class="form-control" name="time-finish" id="time-finish" value="<?php echo @$data[0]->time_finish; ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-open-hour">

                                        <div class="form-group">

                                            <label for="open-hour">Open Hour</label>

                                            <input type="time" class="form-control" name="open-hour" id="open-hour" value="<?php echo @$data[0]->open_hour; ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-close-hour">

                                        <div class="form-group">

                                            <label for="close-hour">Close Hour</label>

                                            <input type="time" class="form-control" name="close-hour" id="close-hour" value="<?php echo @$data[0]->close_hour; ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-12 col-sm-12" id="div-expected-hours">

                                        <div class="form-group">

                                            <label for="expected-hours">Expected Hours</label>

                                            <input type="number" class="form-control" name="expected-hours" id="expected-hours" min="0" value="<?php echo @$data[0]->expected_hours; ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-12 col-sm-12" id="div-details">

                                        <div class="form-group">
                                            <label for="details">Details</label>
                                            <textarea class="form-control" id="details" rows="4" name="details" placeholder="Details of listing"><?php echo @$data[0]->details; ?></textarea>
                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-12-->

                                    <div class="col-md-12 col-sm-12" id="div-work-details">

                                        <div class="form-group">
                                            <label for="work-details">Work Details</label>
                                            <textarea class="form-control" id="work-details" rows="4" name="work-details" placeholder="Details of work"><?php echo @$data[0]->work_details; ?></textarea>
                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-12-->

                                    <div class="col-md-12 col-sm-12" id="div-job-description">

                                        <div class="form-group">
                                            <label for="job-description">Job Description</label>
                                            <textarea class="form-control" id="job-description" rows="4" name="job-description" placeholder="Job description for listing"><?php echo @$data[0]->job_description; ?></textarea>
                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <div class="col-md-6 col-sm-6" id="div-price">

                                        <div class="form-group">

                                            <label for="price">Price</label>

                                            <input type="number" class="form-control" name="price" id="price" min="0" value="<?php echo @$data[0]->price; ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-price-duration">

                                        <div class="form-group">

                                            <label for="price-duration">Price Type</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="price-duration" id="price-duration">
                                                <option value="per-hour" <?php if (@$data[0]->price_duration == "per-hour") echo 'selected="selected"'; ?>>Per Hour</option>
                                                <option value="per-day" <?php if (@$data[0]->price_duration == "per-hour") echo 'selected="selected"'; ?>>Per Day</option>
                                            </select>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-pay">

                                        <div class="form-group">

                                            <label for="pay">Pay</label>

                                            <input type="number" class="form-control" name="pay" id="pay" min="0" value="<?php echo @$data[0]->pay; ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-pay-duration">

                                        <div class="form-group">

                                            <label for="pay-duration">Pay Type</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="pay-duration" id="pay-duration">
                                                <option value="per-hour" <?php if (@$data[0]->pay_duration == "per-hour") echo 'selected="selected"'; ?>>Per Hour</option>
                                                <option value="per-day" <?php if (@$data[0]->pay_duration == "per-day") echo 'selected="selected"'; ?>>Per Day</option>
                                            </select>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-amount">

                                        <div class="form-group">

                                            <label for="amount">Amount</label>

                                            <input type="number" class="form-control" name="amount" id="amount" min="0" value="<?php echo @$data[0]->amount; ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-12 col-sm-12" id="div-address">

                                        <div class="form-group">

                                            <label for="address">Address</label>

                                            <input type="text" class="form-control" name="address" id="address" value="<?php echo @$data[0]->address; ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-salary">

                                        <div class="form-group">

                                            <label for="salary">Salary</label>

                                            <input type="number" class="form-control" name="salary" id="salary" min="0" value="<?php echo @$data[0]->salary; ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-hourly-rate">

                                        <div class="form-group">

                                            <label for="hourly-rate">Hourly Rate</label>

                                            <input type="number" class="form-control" name="hourly-rate" id="hourly-rate" min="0" value="<?php echo @$data[0]->hourly_rate; ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-original-price">

                                        <div class="form-group">

                                            <label for="original-price">Original Price</label>

                                            <input type="number" class="form-control" name="original-price" id="original-price" min="0" value="<?php echo @$data[0]->original_price; ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-discounted-price">

                                        <div class="form-group">

                                            <label for="discounted-price">Discounted Price</label>

                                            <input type="number" class="form-control" name="discounted-price" id="discounted-price" min="0" value="<?php echo @$data[0]->discounted_price; ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->
                                    <?php if (isset($data[0]->currency)) { ?>
                                        <div class="col-md-6 col-sm-6" id="div-currency">

                                            <div class="form-group">

                                                <label for="currency">Currency</label>
                                                <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="currency" id="currency">


                                                    <option value="CRP" <?php if ($data[0]->currency == "CRP") echo 'selected="selected"'; ?>>Crypto Currency</option>
                                                    <option value="USD" <?php if ($data[0]->currency == "USD") echo 'selected="selected"'; ?>>United States Dollars</option>
                                                    <option value="EUR" <?php if ($data[0]->currency == "EUR") echo 'selected="selected"'; ?>>Euro</option>
                                                    <option value="GBP" <?php if ($data[0]->currency == "GBP") echo 'selected="selected"'; ?>>United Kingdom Pounds</option>
                                                    <option value="DZD" <?php if ($data[0]->currency == "DZD") echo 'selected="selected"'; ?>>Algeria Dinars</option>
                                                    <option value="ARP" <?php if ($data[0]->currency == "ARP") echo 'selected="selected"'; ?>>Argentina Pesos</option>
                                                    <option value="AUD" <?php if ($data[0]->currency == "AUD") echo 'selected="selected"'; ?>>Australia Dollars</option>
                                                    <option value="ATS" <?php if ($data[0]->currency == "ATS") echo 'selected="selected"'; ?>>Austria Schillings</option>
                                                    <option value="BSD" <?php if ($data[0]->currency == "BSD") echo 'selected="selected"'; ?>>Bahamas Dollars</option>
                                                    <option value="BBD" <?php if ($data[0]->currency == "BBD") echo 'selected="selected"'; ?>>Barbados Dollars</option>
                                                    <option value="BEF" <?php if ($data[0]->currency == "BEF") echo 'selected="selected"'; ?>>Belgium Francs</option>
                                                    <option value="BMD" <?php if ($data[0]->currency == "BMD") echo 'selected="selected"'; ?>>Bermuda Dollars</option>
                                                    <option value="BRR" <?php if ($data[0]->currency == "BRR") echo 'selected="selected"'; ?>>Brazil Real</option>
                                                    <option value="BGL" <?php if ($data[0]->currency == "BGL") echo 'selected="selected"'; ?>>Bulgaria Lev</option>
                                                    <option value="CAD" <?php if ($data[0]->currency == "CAD") echo 'selected="selected"'; ?>>Canada Dollars</option>
                                                    <option value="CLP" <?php if ($data[0]->currency == "CLP") echo 'selected="selected"'; ?>>Chile Pesos</option>
                                                    <option value="CNY" <?php if ($data[0]->currency == "CNY") echo 'selected="selected"'; ?>>China Yuan Renmimbi</option>
                                                    <option value="CYP" <?php if ($data[0]->currency == "CYP") echo 'selected="selected"'; ?>>Cyprus Pounds</option>
                                                    <option value="CSK" <?php if ($data[0]->currency == "CSK") echo 'selected="selected"'; ?>>Czech Republic Koruna</option>
                                                    <option value="DKK" <?php if ($data[0]->currency == "DKK") echo 'selected="selected"'; ?>>Denmark Kroner</option>
                                                    <option value="NLG" <?php if ($data[0]->currency == "NLG") echo 'selected="selected"'; ?>>Dutch Guilders</option>
                                                    <option value="XCD" <?php if ($data[0]->currency == "XCD") echo 'selected="selected"'; ?>>Eastern Caribbean Dollars</option>
                                                    <option value="EGP" <?php if ($data[0]->currency == "EGP") echo 'selected="selected"'; ?>>Egypt Pounds</option>
                                                    <option value="FJD" <?php if ($data[0]->currency == "FJD") echo 'selected="selected"'; ?>>Fiji Dollars</option>
                                                    <option value="FIM" <?php if ($data[0]->currency == "FIM") echo 'selected="selected"'; ?>>Finland Markka</option>
                                                    <option value="FRF" <?php if ($data[0]->currency == "FRF") echo 'selected="selected"'; ?>>France Francs</option>
                                                    <option value="DEM" <?php if ($data[0]->currency == "DEM") echo 'selected="selected"'; ?>>Germany Deutsche Marks</option>
                                                    <option value="XAU" <?php if ($data[0]->currency == "XAU") echo 'selected="selected"'; ?>>Gold Ounces</option>
                                                    <option value="GRD" <?php if ($data[0]->currency == "GRD") echo 'selected="selected"'; ?>>Greece Drachmas</option>
                                                    <option value="HKD" <?php if ($data[0]->currency == "HKD") echo 'selected="selected"'; ?>>Hong Kong Dollars</option>
                                                    <option value="HUF" <?php if ($data[0]->currency == "HUF") echo 'selected="selected"'; ?>>Hungary Forint</option>
                                                    <option value="ISK" <?php if ($data[0]->currency == "ISK") echo 'selected="selected"'; ?>>Iceland Krona</option>
                                                    <option value="INR" <?php if ($data[0]->currency == "INR") echo 'selected="selected"'; ?>>India Rupees</option>
                                                    <option value="IDR" <?php if ($data[0]->currency == "IDR") echo 'selected="selected"'; ?>>Indonesia Rupiah</option>
                                                    <option value="IEP" <?php if ($data[0]->currency == "IEP") echo 'selected="selected"'; ?>>Ireland Punt</option>
                                                    <option value="ILS" <?php if ($data[0]->currency == "ILS") echo 'selected="selected"'; ?>>Israel New Shekels</option>
                                                    <option value="ITL" <?php if ($data[0]->currency == "ITL") echo 'selected="selected"'; ?>>Italy Lira</option>
                                                    <option value="JMD" <?php if ($data[0]->currency == "JMD") echo 'selected="selected"'; ?>>Jamaica Dollars</option>
                                                    <option value="JPY" <?php if ($data[0]->currency == "JPY") echo 'selected="selected"'; ?>>Japan Yen</option>
                                                    <option value="JOD" <?php if ($data[0]->currency == "JOD") echo 'selected="selected"'; ?>>Jordan Dinar</option>
                                                    <option value="KRW" <?php if ($data[0]->currency == "KRW") echo 'selected="selected"'; ?>>Korea (South) Won</option>
                                                    <option value="LBP" <?php if ($data[0]->currency == "LBP") echo 'selected="selected"'; ?>>Lebanon Pounds</option>
                                                    <option value="LUF" <?php if ($data[0]->currency == "LUF") echo 'selected="selected"'; ?>>Luxembourg Francs</option>
                                                    <option value="MYR" <?php if ($data[0]->currency == "MYR") echo 'selected="selected"'; ?>>Malaysia Ringgit</option>
                                                    <option value="MXP" <?php if ($data[0]->currency == "MXP") echo 'selected="selected"'; ?>>Mexico Pesos</option>
                                                    <option value="NLG" <?php if ($data[0]->currency == "NLG") echo 'selected="selected"'; ?>>Netherlands Guilders</option>
                                                    <option value="NZD" <?php if ($data[0]->currency == "NZD") echo 'selected="selected"'; ?>>New Zealand Dollars</option>
                                                    <option value="NOK" <?php if ($data[0]->currency == "NOK") echo 'selected="selected"'; ?>>Norway Kroner</option>
                                                    <option value="PKR" <?php if ($data[0]->currency == "PKR") echo 'selected="selected"'; ?>>Pakistan Rupees</option>
                                                    <option value="XPD" <?php if ($data[0]->currency == "XPD") echo 'selected="selected"'; ?>>Palladium Ounces</option>
                                                    <option value="PHP" <?php if ($data[0]->currency == "PHP") echo 'selected="selected"'; ?>>Philippines Pesos</option>
                                                    <option value="XPT" <?php if ($data[0]->currency == "XPT") echo 'selected="selected"'; ?>>Platinum Ounces</option>
                                                    <option value="PLZ" <?php if ($data[0]->currency == "PLZ") echo 'selected="selected"'; ?>>Poland Zloty</option>
                                                    <option value="PTE" <?php if ($data[0]->currency == "PTE") echo 'selected="selected"'; ?>>Portugal Escudo</option>
                                                    <option value="ROL" <?php if ($data[0]->currency == "ROL") echo 'selected="selected"'; ?>>Romania Leu</option>
                                                    <option value="RUR" <?php if ($data[0]->currency == "RUR") echo 'selected="selected"'; ?>>Russia Rubles</option>
                                                    <option value="SAR" <?php if ($data[0]->currency == "SAR") echo 'selected="selected"'; ?>>Saudi Arabia Riyal</option>
                                                    <option value="XAG" <?php if ($data[0]->currency == "XAG") echo 'selected="selected"'; ?>>Silver Ounces</option>
                                                    <option value="SGD" <?php if ($data[0]->currency == "SGD") echo 'selected="selected"'; ?>>Singapore Dollars</option>
                                                    <option value="SKK" <?php if ($data[0]->currency == "SKK") echo 'selected="selected"'; ?>>Slovakia Koruna</option>
                                                    <option value="ZAR" <?php if ($data[0]->currency == "ZAR") echo 'selected="selected"'; ?>>South Africa Rand</option>
                                                    <option value="KRW" <?php if ($data[0]->currency == "KRW") echo 'selected="selected"'; ?>>South Korea Won</option>
                                                    <option value="ESP" <?php if ($data[0]->currency == "ESP") echo 'selected="selected"'; ?>>Spain Pesetas</option>
                                                    <option value="XDR" <?php if ($data[0]->currency == "XDR") echo 'selected="selected"'; ?>>Special Drawing Right (IMF)</option>
                                                    <option value="SDD" <?php if ($data[0]->currency == "SDD") echo 'selected="selected"'; ?>>Sudan Dinar</option>
                                                    <option value="SEK" <?php if ($data[0]->currency == "SEK") echo 'selected="selected"'; ?>>Sweden Krona</option>
                                                    <option value="CHF" <?php if ($data[0]->currency == "CHF") echo 'selected="selected"'; ?>>Switzerland Francs</option>
                                                    <option value="TWD" <?php if ($data[0]->currency == "TWD") echo 'selected="selected"'; ?>>Taiwan Dollars</option>
                                                    <option value="THB" <?php if ($data[0]->currency == "THB") echo 'selected="selected"'; ?>>Thailand Baht</option>
                                                    <option value="TTD" <?php if ($data[0]->currency == "TTD") echo 'selected="selected"'; ?>>Trinidad and Tobago Dollars</option>
                                                    <option value="TRL" <?php if ($data[0]->currency == "TRL") echo 'selected="selected"'; ?>>Turkey Lira</option>
                                                    <option value="VEB" <?php if ($data[0]->currency == "VEB") echo 'selected="selected"'; ?>>Venezuela Bolivar</option>
                                                    <option value="ZMK" <?php if ($data[0]->currency == "ZMK") echo 'selected="selected"'; ?>>Zambia Kwacha</option>
                                                    <option value="EUR" <?php if ($data[0]->currency == "EUR") echo 'selected="selected"'; ?>>Euro</option>
                                                    <option value="XCD" <?php if ($data[0]->currency == "XCD") echo 'selected="selected"'; ?>>Eastern Caribbean Dollars</option>
                                                    <option value="XDR" <?php if ($data[0]->currency == "XDR") echo 'selected="selected"'; ?>>Special Drawing Right (IMF)</option>
                                                    <option value="XAG" <?php if ($data[0]->currency == "XAG") echo 'selected="selected"'; ?>>Silver Ounces</option>
                                                    <option value="XAU" <?php if ($data[0]->currency == "XAU") echo 'selected="selected"'; ?>>Gold Ounces</option>
                                                    <option value="XPD" <?php if ($data[0]->currency == "XPD") echo 'selected="selected"'; ?>>Palladium Ounces</option>
                                                    <option value="XPT" <?php if ($data[0]->currency == "XPT") echo 'selected="selected"'; ?>>Platinum Ounces</option>
                                                </select>

                                            </div>

                                            <!--end form-group-->

                                        </div>

                                    <?php } ?>
                                    <!--end col-md-6-->


                            </section>

                            <section id="section-match-friends">

                                <div class="row">

                                    <div class="col-md-6 col-sm-6" id="div-age">
                                        <div class="form-group">
                                            <label for="age">Age</label>
                                            <input type="number" class="form-control" name="age" id="age" placeholder="Age" min="1" max="150" value="<?php echo @$data[0]->age; ?>" />
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-gender">
                                        <div class="form-group">
                                            <label for="gender">Gender</label>
                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="2" name="gender" id="gender">
                                                <option value="male" <?php if (@$data[0]->currency == "male") echo 'selected="selected"'; ?>>Male</option>
                                                <option value="female" <?php if (@$data[0]->currency == "female") echo 'selected="selected"'; ?>>Female</option>
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-12 col-sm-12" id="div-about-yourself">
                                        <div class="form-group">
                                            <label for="about-yourself">About Yourself</label>
                                            <textarea class="form-control" id="about-yourself" rows="4" name="about-yourself" placeholder="About Yourself"><?php echo @$data[0]->about_yourself; ?></textarea>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-12-->

                                    <div class="col-md-6 col-sm-6" id="div-occupation">
                                        <div class="form-group">
                                            <label for="occupation">Occupation</label>
                                            <input type="text" class="form-control" name="occupation" id="occupation" placeholder="Occupation" value="<?php echo @$data[0]->occupation; ?>" />
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-religion">
                                        <div class="form-group">
                                            <label for="religion">Religion</label>
                                            <input type="text" class="form-control" name="religion" id="religion" placeholder="Religion" value="<?php echo @$data[0]->religion; ?>" />
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-height">
                                        <div class="form-group">
                                            <label for="height">Height</label>
                                            <input type="text" class="form-control" name="height" id="height" placeholder="Height" value="<?php echo @$data[0]->height; ?>" />
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-ethnicity">
                                        <div class="form-group">
                                            <label for="ethnicity">Ethnicity</label>
                                            <input type="text" class="form-control" name="ethnicity" id="ethnicity" placeholder="Ethnicity" value="<?php echo @$data[0]->ethnicity; ?>" />
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-body-type">
                                        <div class="form-group">
                                            <label for="body-type">Body Type</label>
                                            <input type="text" class="form-control" name="body-type" id="body-type" placeholder="Body Type" value="<?php echo @$data[0]->body_type; ?>" />
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-education">
                                        <div class="form-group">
                                            <label for="education">Education</label>
                                            <input type="text" class="form-control" name="education" id="education" placeholder="Education" value="<?php echo @$data[0]->education; ?>" />
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-12 col-sm-12" id="div-ideal-match">
                                        <div class="form-group">
                                            <label for="ideal-match">Ideal Match</label>
                                            <input type="text" class="form-control" name="ideal-match" id="ideal-match" placeholder="Ideal Match" value="<?php echo @$data[0]->ideal_match; ?>" />
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-12-->

                                    <div class="col-md-12 col-sm-12" id="div-relationship-history">
                                        <div class="form-group">
                                            <label for="relationship-history">Relationship History</label>
                                            <textarea class="form-control" id="relationship-history" rows="4" name="relationship-history" placeholder="Relationship History"><?php echo @$data[0]->relationship_history; ?></textarea>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-12-->

                                    <div class="col-md-12 col-sm-12" id="div-lifestyle">
                                        <div class="form-group">
                                            <label for="lifestyle">Lifestyle</label>
                                            <textarea class="form-control" id="lifestyle" rows="4" name="lifestyle" placeholder="Lifestyle"><?php echo @$data[0]->lifestyle; ?></textarea>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-12-->

                                </div>

                            </section>

                            <section id="section-address">

                                <div class="row">

                                    <div class="col-md-12 col-sm-12">

                                        <h3>Contact</h3>

                                    </div>

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="zipcode">City / Zip code</label>

                                            <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="City / Zip code" value="<?php echo @$data[0]->zipcode; ?>" />

                                        </div>

                                        <!--end form-group-->

                                        <div class="map height-200px shadow" id="listing-map"></div>

                                        <!--end map-->

                                        <div class="form-group hidden">

                                            <input type="text" class="form-control" id="listing-latitude" name="listing-latitude" hidden="">

                                            <input type="text" class="form-control" id="listing-longitude" name="listing-longitude" hidden="">

                                        </div>

                                        <p class="note">Enter the exact address or drag the map marker to position</p>

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="contact-name">Contact Name</label>

                                            <input type="text" class="form-control" name="contact-name" id="contact-name" placeholder="Contact Name" value="<?php echo @$data[0]->contact_name; ?>" />

                                        </div>

                                        <!--end form-group-->

                                        <div class="form-group">

                                            <label for="contact-number">Contact Number</label>

                                            <input type="text" class="form-control" name="contact-number" id="contact-number" placeholder="Contact number" value="<?php echo @$data[0]->contact_number; ?>" />

                                        </div>

                                        <!--end form-group-->

                                        <div class="form-group">

                                            <label for="contact-email">Contact Email</label>

                                            <input type="email" class="form-control" name="contact-email" id="contact-email" placeholder="hello@example.com" value="<?php echo @$data[0]->contact_email; ?>" />

                                        </div>

                                        <!--end form-group-->

                                        <div class="form-group">

                                            <label for="contact-website">Contact Website</label>

                                            <input type="text" class="form-control" name="contact-website" id="contact-website" placeholder="https://www.example.com" value="<?php echo @$data[0]->contact_website; ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                </div>

                            </section>

                            <section id="section-profile-option">

                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <h3>Profile Privacy</h3>

                                        <div class="col-md-12 col-sm-12">

                                            <div class="form-group">

                                                <input type="radio" class="" id="profile-yes" name="profile-privacy" value="1" <?php if (@$data[0]->profile == "1") echo 'checked="true"'; ?> />

                                                <label for="profile-yes" style="position: relative; bottom: 3px;left: 5px;">APPEAR IN POST AND PROFESSINAL PROFILE</label>

                                            </div>

                                        </div>

                                        <!--end col-md-12-->

                                        <div class="col-md-12 col-sm-12">

                                            <div class="form-group">

                                                <input type="radio" class="" id="profile-no" name="profile-privacy" value="0" <?php if (@$data[0]->profile == "0") echo 'checked="true"'; ?> />

                                                <label for="profile-no" style="position: relative; bottom: 3px;left: 5px;">APPEAR IN POST ONLY DON’T APPEAR IN PROFESSIONAL PROFILE</label>

                                            </div>

                                        </div>

                                        <!--end col-md-12-->
                                    </div>
                                </div>

                            </section>

                            <section id="section-jobs">

                                <h3>More Information</h3>

                                <div class="row">

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="jobs-type">Jobs Type</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" id="jobs-type" name="jobs-type">
                                                <option value="full_time" <?php if (@$data[0]->type == "full_time") echo 'selected="selected"'; ?>>Full Time</option>
                                                <option value="part_time" <?php if (@$data[0]->type == "part_time") echo 'selected="selected"'; ?>>Part Type</option>
                                                <option value="remote" <?php if (@$data[0]->type == "remote") echo 'selected="selected"'; ?>>Remote</option>
                                            </select>

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="jobs-status">Jobs Status</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" id="jobs-status" name="jobs-status">
                                                <option value="contract" <?php if (@$data[0]->status == "contract") echo 'selected="selected"'; ?>>Contract</option>
                                                <option value="temp" <?php if (@$data[0]->status == "temp") echo 'selected="selected"'; ?>>Temp</option>
                                                <option value="perm" <?php if (@$data[0]->status == "perm") echo 'selected="selected"'; ?>>Perm</option>
                                                <option value="temp_to_perm" <?php if (@$data[0]->status == "temp_to_perm") echo 'selected="selected"'; ?>>Temp to Perm</option>
                                                <option value="contract_to_hire" <?php if (@$data[0]->status == "contract_to_hire") echo 'selected="selected"'; ?>>Contract to Hire</option>
                                                <option value="intern" <?php if (@$data[0]->status == "intern") echo 'selected="selected"'; ?>>Intern</option>
                                            </select>

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                    <?php if (isset($data[0]->industry)) { ?>
                                        <div class="col-md-6 col-sm-6">

                                            <div class="form-group">

                                                <label for="jobs-industry">Jobs Industry</label>

                                                <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" id="jobs-industry" name="jobs-industry">
                                                    <option value="agriculture_n_food" <?php if ($data[0]->industry == "agriculture_n_food") echo 'selected="selected"'; ?>>Agriculture &amp; Food</option>
                                                    <option value="architecture_n_construction" <?php if ($data[0]->industry == "architecture_n_construction") echo 'selected="selected"'; ?>>Architecture &amp; Construction</option>
                                                    <option value="audio_video_technology_n_communications" <?php if ($data[0]->industry == "audio_video_technology_n_communications") echo 'selected="selected"'; ?>>Audio/Video Technology &amp; Communications</option>
                                                    <option value="accounting_n_finance" <?php if ($data[0]->industry == "accounting_n_finance") echo 'selected="selected"'; ?>>Accounting &amp; Finance</option>
                                                    <option value="arts_n_culture" <?php if ($data[0]->industry == "arts_n_culture") echo 'selected="selected"'; ?>>Arts &amp; Culture</option>
                                                    <option value="business_management_n_administration" <?php if ($data[0]->industry == "business_management_n_administration") echo 'selected="selected"'; ?>>Business Management &amp; Administration</option>
                                                    <option value="construction" <?php if ($data[0]->industry == "construction") echo 'selected="selected"'; ?>>Construction</option>
                                                    <option value="chemcials" <?php if ($data[0]->industry == "chemcials") echo 'selected="selected"'; ?>>Chemcials</option>
                                                    <option value="consumer_services" <?php if ($data[0]->industry == "consumer_services") echo 'selected="selected"'; ?>>Consumer Services</option>
                                                    <option value="defense" <?php if ($data[0]->industry == "defense") echo 'selected="selected"'; ?>>Defense</option>
                                                    <option value="education_n_training" <?php if ($data[0]->industry == "education_n_training") echo 'selected="selected"'; ?>>Education &amp; Training</option>
                                                    <option value="government_n_public_administration" <?php if ($data[0]->industry == "government_n_public_administration") echo 'selected="selected"'; ?>>Government &amp; Public Administration</option>
                                                    <option value="health_science" <?php if ($data[0]->industry == "health_science") echo 'selected="selected"'; ?>>Health Science</option>
                                                    <option value="hospitality_n_tourism" <?php if ($data[0]->industry == "hospitality_n_tourism") echo 'selected="selected"'; ?>>Hospitality &amp; Tourism</option>
                                                    <option value="human_services_pharma_n_biotech" <?php if ($data[0]->industry == "human_services_pharma_n_biotech") echo 'selected="selected"'; ?>>Human Services, Pharma &amp; Biotech</option>
                                                    <option value="home_interior" <?php if ($data[0]->industry == "home_interior") echo 'selected="selected"'; ?>>Home Interior</option>
                                                    <option value="home_exterior" <?php if ($data[0]->industry == "home_exterior") echo 'selected="selected"'; ?>>Home Exterior</option>
                                                    <option value="information_technology" <?php if ($data[0]->industry == "information_technology") echo 'selected="selected"'; ?>>Information Technology</option>
                                                    <option value="telecommunication" <?php if ($data[0]->industry == "telecommunication") echo 'selected="selected"'; ?>>Telecommunication</option>
                                                    <option value="leisure_n_hospitality" <?php if ($data[0]->industry == "leisure_n_hospitality") echo 'selected="selected"'; ?>>Leisure &amp; Hospitality</option>
                                                    <option value="legal_n_taxation" <?php if ($data[0]->industry == "legal_n_taxation") echo 'selected="selected"'; ?>>Legal &amp; Taxation</option>
                                                    <option value="law_public_safety_corrections_n_security" <?php if ($data[0]->industry == "law_public_safety_corrections_n_security") echo 'selected="selected"'; ?>>Law, Public Safety, Corrections &amp; Security</option>
                                                    <option value="manufacturing" <?php if ($data[0]->industry == "manufacturing") echo 'selected="selected"'; ?>>Manufacturing</option>
                                                    <option value="marketing_n_sales" <?php if ($data[0]->industry == "marketing_n_sales") echo 'selected="selected"'; ?>>Marketing &amp; Sales</option>
                                                    <option value="media_n_entertainment" <?php if ($data[0]->industry == "media_n_entertainment") echo 'selected="selected"'; ?>>Media &amp; Entertainment</option>
                                                    <option value="natural_resources_n_mining" <?php if ($data[0]->industry == "natural_resources_n_mining") echo 'selected="selected"'; ?>>Natural resources &amp; Mining</option>
                                                    <option value="real_estate" <?php if ($data[0]->industry == "real_estate") echo 'selected="selected"'; ?>>Real Estate</option>
                                                    <option value="repair_n_maintainence" <?php if ($data[0]->industry == "repair_n_maintainence") echo 'selected="selected"'; ?>>Repair &amp; Maintainence</option>
                                                    <option value="retaurants" <?php if ($data[0]->industry == "retaurants") echo 'selected="selected"'; ?>>Retaurants</option>
                                                    <option value="not_for_profit" <?php if ($data[0]->industry == "not_for_profit") echo 'selected="selected"'; ?>>Not for Profit</option>
                                                    <option value="professional_n_business_services" <?php if ($data[0]->industry == "professional_n_business_services") echo 'selected="selected"'; ?>>Professional &amp; Business Services</option>
                                                    <option value="other_services" <?php if ($data[0]->industry == "other_services") echo 'selected="selected"'; ?>>Other Services</option>
                                                    <option value="retail_wholesale_n_distributions" <?php if ($data[0]->industry == "retail_wholesale_n_distributions") echo 'selected="selected"'; ?>>Retail, Wholesale &amp; Distributions</option>
                                                    <option value="science_technology_engineering_n_mathematics" <?php if ($data[0]->industry == "science_technology_engineering_n_mathematics") echo 'selected="selected"'; ?>>Science, Technology, Engineering &amp; Mathematics</option>
                                                    <option value="sports" <?php if ($data[0]->industry == "sports") echo 'selected="selected"'; ?>>Sports</option>
                                                    <option value="transportation_distribution_n_logistics" <?php if ($data[0]->industry == "transportation_distribution_n_logistics") echo 'selected="selected"'; ?>>Transportation, Distribution &amp; Logistics</option>
                                                    <option value="utility" <?php if ($data[0]->industry == "utility") echo 'selected="selected"'; ?>>Utility</option>
                                                    <option value="other" <?php if ($data[0]->industry == "other") echo 'selected="selected"'; ?>>Other</option>
                                                </select>

                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-6-->
                                    <?php } ?>

                                    <?php if (isset($data[0]->function)) { ?>

                                        <div class="col-md-6 col-sm-6">

                                            <div class="form-group">

                                                <label for="jobs-function">Jobs Function</label>

                                                <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" id="jobs-function" name="jobs-function">
                                                    <option value="accounting_careers" <?php if ($data[0]->function == "accounting_careers") echo 'selected="selected"'; ?>>Accounting Careers</option>
                                                    <option value="administrative_careers" <?php if ($data[0]->function == "administrative_careers") echo 'selected="selected"'; ?>>Administrative Careers</option>
                                                    <option value="advertising_careers" <?php if ($data[0]->function == "advertising_careers") echo 'selected="selected"'; ?>>Advertising Careers</option>
                                                    <option value="aeronautics_careers" <?php if ($data[0]->function == "aeronautics_careers") echo 'selected="selected"'; ?>>Aeronautics Careers</option>
                                                    <option value="agriculture_n_fishing_careers" <?php if ($data[0]->function == "agriculture_n_fishing_careers") echo 'selected="selected"'; ?>>Agriculture &amp; Fishing Careers</option>
                                                    <option value="animal_services_careers" <?php if ($data[0]->function == "animal_services_careers") echo 'selected="selected"'; ?>>Animal Services Careers</option>
                                                    <option value="automotive_careers" <?php if ($data[0]->function == "automotive_careers") echo 'selected="selected"'; ?>>Automotive Careers</option>
                                                    <option value="banking_careers" <?php if ($data[0]->function == "banking_careers") echo 'selected="selected"'; ?>>Banking Careers</option>
                                                    <option value="biotechnology_careers" <?php if ($data[0]->function == "biotechnology_careers") echo 'selected="selected"'; ?>>Biotechnology Careers</option>
                                                    <option value="business_careers" <?php if ($data[0]->function == "business_careers") echo 'selected="selected"'; ?>>Business Careers</option>
                                                    <option value="charity_careers" <?php if ($data[0]->function == "charity_careers") echo 'selected="selected"'; ?>>Charity Careers</option>
                                                    <option value="construction_careers" <?php if ($data[0]->function == "construction_careers") echo 'selected="selected"'; ?>>Construction Careers</option>
                                                    <option value="creative_design_careers" <?php if ($data[0]->function == "creative_design_careers") echo 'selected="selected"'; ?>>Creative Design Careers</option>
                                                    <option value="customer_service_careers" <?php if ($data[0]->function == "customer_service_careers") echo 'selected="selected"'; ?>>Customer Service Careers</option>
                                                    <option value="editorial_careers" <?php if ($data[0]->function == "editorial_careers") echo 'selected="selected"'; ?>>Editorial Careers</option>
                                                    <option value="education_careers" <?php if ($data[0]->function == "education_careers") echo 'selected="selected"'; ?>>Education Careers</option>
                                                    <option value="energy_careers" <?php if ($data[0]->function == "energy_careers") echo 'selected="selected"'; ?>>Energy Careers</option>
                                                    <option value="engineering_careers" <?php if ($data[0]->function == "engineering_careers") echo 'selected="selected"'; ?>>Engineering Careers</option>
                                                    <option value="environmental_careers" <?php if ($data[0]->function == "environmental_careers") echo 'selected="selected"'; ?>>Environmental Careers</option>
                                                    <option value="executive_careers" <?php if ($data[0]->function == "executive_careers") echo 'selected="selected"'; ?>>Executive Careers</option>
                                                    <option value="finance_careers" <?php if ($data[0]->function == "finance_careers") echo 'selected="selected"'; ?>>Finance Careers</option>
                                                    <option value="food_service_careers" <?php if ($data[0]->function == "food_service_careers") echo 'selected="selected"'; ?>>Food Service Careers</option>
                                                    <option value="government_careers" <?php if ($data[0]->function == "government_careers") echo 'selected="selected"'; ?>>Government Careers</option>
                                                    <option value="healthcare_careers" <?php if ($data[0]->function == "healthcare_careers") echo 'selected="selected"'; ?>>Healthcare Careers</option>
                                                    <option value="hospitality_careers" <?php if ($data[0]->function == "hospitality_careers") echo 'selected="selected"'; ?>>Hospitality Careers</option>
                                                    <option value="human_resource_careers" <?php if ($data[0]->function == "human_resource_careers") echo 'selected="selected"'; ?>>Human Resource Careers</option>
                                                    <option value="human_services_careers" <?php if ($data[0]->function == "human_services_careers") echo 'selected="selected"'; ?>>Human Services Careers</option>
                                                    <option value="information_technology_careers" <?php if ($data[0]->function == "information_technology_careers") echo 'selected="selected"'; ?>>Information Technology Careers</option>
                                                    <option value="insurance_careers" <?php if ($data[0]->function == "insurance_careers") echo 'selected="selected"'; ?>>Insurance Careers</option>
                                                    <option value="international_careers" <?php if ($data[0]->function == "international_careers") echo 'selected="selected"'; ?>>International Careers</option>
                                                    <option value="internet_careers" <?php if ($data[0]->function == "internet_careers") echo 'selected="selected"'; ?>>Internet Careers</option>
                                                    <option value="language_translator_careers" <?php if ($data[0]->function == "language_translator_careers") echo 'selected="selected"'; ?>>Language Translator Careers</option>
                                                    <option value="legal_careers" <?php if ($data[0]->function == "legal_careers") echo 'selected="selected"'; ?>>Legal Careers</option>
                                                    <option value="logistic_careers" <?php if ($data[0]->function == "logistic_careers") echo 'selected="selected"'; ?>>Logistic Careers</option>
                                                    <option value="maintenance_careers" <?php if ($data[0]->function == "maintenance_careers") echo 'selected="selected"'; ?>>Maintenance Careers</option>
                                                    <option value="manufacturing_careers" <?php if ($data[0]->function == "manufacturing_careers") echo 'selected="selected"'; ?>>Manufacturing Careers</option>
                                                    <option value="marketing_careers" <?php if ($data[0]->function == "marketing_careers") echo 'selected="selected"'; ?>>Marketing Careers</option>
                                                    <option value="media_careers" <?php if ($data[0]->function == "media_careers") echo 'selected="selected"'; ?>>Media Careers</option>
                                                    <option value="military_careers" <?php if ($data[0]->function == "military_careers") echo 'selected="selected"'; ?>>Military Careers</option>
                                                    <option value="overseas_careers" <?php if ($data[0]->function == "overseas_careers") echo 'selected="selected"'; ?>>Overseas Careers</option>
                                                    <option value="part_time_careers" <?php if ($data[0]->function == "part_time_careers") echo 'selected="selected"'; ?>>Part Time Careers</option>
                                                    <option value="personal_service_careers" <?php if ($data[0]->function == "personal_service_careers") echo 'selected="selected"'; ?>>Personal Service Careers</option>
                                                    <option value="production_n_operations_careers" <?php if ($data[0]->function == "production_n_operations_careers") echo 'selected="selected"'; ?>>Production &amp; Operations Careers</option>
                                                    <option value="project_management_careers" <?php if ($data[0]->function == "project_management_careers") echo 'selected="selected"'; ?>>Project Management Careers</option>
                                                    <option value="quality_assurance_careers" <?php if ($data[0]->function == "quality_assurance_careers") echo 'selected="selected"'; ?>>Quality Assurance Careers</option>
                                                    <option value="real_estate_careers" <?php if ($data[0]->function == "real_estate_careers") echo 'selected="selected"'; ?>>Real Estate Careers</option>
                                                    <option value="religious_careers" <?php if ($data[0]->function == "religious_careers") echo 'selected="selected"'; ?>>Religious Careers</option>
                                                    <option value="research_n_development_careers" <?php if ($data[0]->function == "research_n_development_careers") echo 'selected="selected"'; ?>>Research &amp; Development Careers</option>
                                                    <option value="retail_careers" <?php if ($data[0]->function == "retail_careers") echo 'selected="selected"'; ?>>Retail Careers</option>
                                                    <option value="sales_careers" <?php if ($data[0]->function == "sales_careers") echo 'selected="selected"'; ?>>Sales Careers</option>
                                                    <option value="science_careers" <?php if ($data[0]->function == "science_careers") echo 'selected="selected"'; ?>>Science Careers</option>
                                                    <option value="security_careers" <?php if ($data[0]->function == "security_careers") echo 'selected="selected"'; ?>>Security Careers</option>
                                                    <option value="skilled_trades_careers" <?php if ($data[0]->function == "skilled_trades_careers") echo 'selected="selected"'; ?>>Skilled Trades Careers</option>
                                                    <option value="sports_careers" <?php if ($data[0]->function == "sports_careers") echo 'selected="selected"'; ?>>Sports Careers</option>
                                                    <option value="technology_careers" <?php if ($data[0]->function == "technology_careers") echo 'selected="selected"'; ?>>Technology Careers</option>
                                                    <option value="telecommunications_careers" <?php if ($data[0]->function == "telecommunications_careers") echo 'selected="selected"'; ?>>Telecommunications Careers</option>
                                                    <option value="transportation_careers" <?php if ($data[0]->function == "transportation_careers") echo 'selected="selected"'; ?>>Transportation Careers</option>
                                                    <option value="travel_service_careers" <?php if ($data[0]->function == "travel_service_careers") echo 'selected="selected"'; ?>>Travel Service Careers</option>
                                                    <option value="web_careers" <?php if ($data[0]->function == "web_careers") echo 'selected="selected"'; ?>>Web Careers</option>
                                                    <option value="other" <?php if ($data[0]->function == "other") echo 'selected="selected"'; ?>>Other</option>
                                                </select>

                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-6-->

                                    <?php } ?>
                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="jobs-experience">Jobs Experience (In years)</label>

                                            <input type="text" class="form-control" name="jobs-experience" id="jobs-experience" placeholder="Jobs Experience" value="<?php echo @$data[0]->experience; ?>" />

                                        </div>
                                        <!--end form-group-->

                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="jobs-education">Jobs Education</label>

                                            <input type="text" class="form-control" name="jobs-education" id="jobs-education" placeholder="Jobs Education" value="<?php echo @$data[0]->education; ?>" />

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="jobs-skill">Jobs Skill</label>

                                            <input type="text" class="form-control" name="jobs-skill" id="jobs-skill" placeholder="Jobs Skill" value="<?php echo @$data[0]->skill; ?>" />

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="jobs-software">Jobs Software</label>

                                            <input type="text" class="form-control" name="jobs-software" id="jobs-software" placeholder="Jobs Software" value="<?php echo @$data[0]->software; ?>" />

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                </div>

                                <!--end row-->

                            </section>

                            <section id="section-realty">

                                <h3>More Information</h3>

                                <div class="row">

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="realty-bed">Bed</label>

                                            <input type="number" class="form-control" name="realty-bed" id="realty-bed" placeholder="Bed" min="0" value="<?php echo @$data[0]->bed; ?>" />

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="realty-bath">Bath</label>

                                            <input type="number" class="form-control" name="realty-bath" id="realty-bath" placeholder="Bath" min="0" value="<?php echo @$data[0]->bath; ?>" />

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="realty-lot">Lot</label>

                                            <input type="text" class="form-control" name="realty-lot" id="realty-lot" placeholder="Lot" value="<?php echo @$data[0]->lot; ?>" />

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="realty-sewerage">Sewerage</label>

                                            <input type="text" class="form-control" name="realty-sewerage" id="realty-sewerage" placeholder="Sewerage" value="<?php echo @$data[0]->sewerage; ?>" />

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="realty-water">Water</label>

                                            <input type="text" class="form-control" name="realty-water" id="realty-water" placeholder="Water" value="<?php echo @$data[0]->water; ?>" />

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="realty-gas">Gas</label>

                                            <input type="text" class="form-control" name="realty-gas" id="realty-gas" placeholder="Gas" value="<?php echo @$data[0]->gas; ?>" />

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="realty-tax">Tax</label>

                                            <input type="number" class="form-control" name="realty-tax" id="realty-tax" placeholder="Tax" min="0" value="<?php echo @$data[0]->tax; ?>" />

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="realty-mls">MLS</label>

                                            <input type="text" class="form-control" name="realty-mls" id="realty-mls" placeholder="MLS" value="<?php echo @$data[0]->mls; ?>" />

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                </div>

                                <!--end row-->

                            </section>

                            <section id="section-social">

                                <h3>Social Information</h3>

                                <div class="row">

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="social-facebook">Facebook</label>

                                            <input type="text" class="form-control" name="social-facebook" id="social-facenook" placeholder="Facebook Link" value="<?php echo @$data[0]->facebook; ?>" />

                                        </div>
                                        <!--end form-group-->

                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="social-linkedin">Linkedin</label>

                                            <input type="text" class="form-control" name="social-linkedin" id="social-linkedin" placeholder="Linkedin Link" value="<?php echo @$data[0]->linkedin; ?>" />

                                        </div>
                                        <!--end form-group-->

                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="social-twitter">Twitter</label>

                                            <input type="text" class="form-control" name="social-twitter" id="social-twitter" placeholder="Twitter Link" value="<?php echo @$data[0]->twitter; ?>" />

                                        </div>
                                        <!--end form-group-->

                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="social-instagram">Instagram</label>

                                            <input type="text" class="form-control" name="social-instagram" id="social-instagram" placeholder="Instagram Link" value="<?php echo @$data[0]->instagram; ?>" />

                                        </div>
                                        <!--end form-group-->

                                    </div>
                                    <!--end col-md-6-->

                                </div>

                                <!--end row-->

                            </section>

                            <section id="section-gallery">

                                <h3>Gallery</h3>

                                <div class="row">

                                    <div class="col-lg-12">

                                        <?php
                                        $images = json_decode(@$data[0]->file);

                                        for ($i = 1; $i <= sizeof($images); $i++) { ?>

                                            <div id="previous-image-<?php echo $i; ?>" style="display:inline-block;padding:0px 20px 20px 20px;background-color: rgba(0, 0, 0, 0.03);border-radius:2px;border: 2px solid rgba(0, 0, 0, 0.1);cursor: pointer; margin-right:20px;">
                                                <input type="hidden" name="previous-images[]" value="<?php echo $images[$i - 1]; ?>" />
                                                <span style="display: block;text-align: right;"><a class="delete-previous" onclick="remove_image(<?php echo $i; ?>);" style="color:white;background-color:red; padding: 1px 7px 3px 7px; border-radius: 50%;position: relative;top: -10px;left: 25px;">x</a></span>
                                                <img class="previous-image" style="max-height:100px;" src="<?php echo base_url() . $images[$i - 1]; ?>" />
                                            </div>

                                        <?php
                                        }
                                        ?>
                                    </div>

                                </div>

                                <div class="file-upload-previews">

                                </div>

                                <div class="file-upload">

                                    <input type="file" id="file-upload-input" name="files[]" class="file-upload-input with-preview" multiple title="Click to add files" maxlength="<?php echo 10 - sizeof(json_decode(@$data[0]->file)); ?>" accept="gif|jpg|png" />

                                    <span>Click or drag images here</span>

                                </div>

                            </section>

                            <hr>

                            <section class="center">

                                <div class="form-group">

                                    <button type="submit" class="btn btn-primary btn-rounded">Submit Listing</button>

                                </div>

                                <!--end form-group-->

                            </section>

                        </form>

                        <!--end form-->

                    </div>

                    <!--end col-md-6-->

                </div>

                <!--end row-->

            </section>

        </div>

        <!--end container-->

    </div>

    <!--end page-content-->



    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.2.1.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-migrate-1.2.1.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-select.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>

    <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyAiM_FqkKLI0eup2tuWSJ_1IFneZsVw4ds&libraries=places"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/richmarker-compiled.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jQuery.MultiFile.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/maps.js"></script>

    <script type="text/javascript">
        $('#submit-listing-form').on('submit', (function(e) {
            e.preventDefault();
            var formData = new FormData(this);


            $("#form-notification").html("");

            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: formData,
                dataType: "json",
                contentType: false,
                enctype: 'multipart/form-data',
                processData: false,
                cache: false,
                success: function(data) {
                    if (typeof data.success !== 'undefined') {
                        $("html, body").animate({
                            scrollTop: 0
                        }, "slow");
                        $("#form-notification").html("<div class=\"alert alert-success alert-dismissable\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a><strong>Success ! </strong>" + data.success + "</div>");
                    }
                    if (typeof data.validation_errors !== 'undefined') {
                        $("html, body").animate({
                            scrollTop: 0
                        }, "slow");
                        $("#form-notification").html("<div class=\"alert alert-danger alert-dismissable\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a><strong>Errors ! </strong>" + data.validation_errors + "</div>");
                    }
                },
                error: function(data) {
                    $("html, body").animate({
                        scrollTop: 0
                    }, "slow");
                    $("#form-notification").html("<div class=\"alert alert-danger alert-dismissable\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a><strong>Error ! </strong> Something went wrong.....!</div>");
                }
            });

        }));

        $(document).ready(function() {
            $("#form-notification").html("");

            if ("<?php echo $type; ?>" == "events") {
                $("#submit-listing-form").removeAttr("action");
                $("#submit-listing-form").attr("action", "<?php echo base_url(); ?>Events/edit");

                $("#div-title").show();
                $("#title").removeAttr("required");
                $("#title").attr("required", "required");

                $("#div-events-category").show();
                $("#events-category").removeAttr("required");
                $("#events-category").attr("required", "required");
                $("#div-sales-category").hide();
                $("#sales-category").removeAttr("required");
                $("#div-coupons-category").hide();
                $("#coupons-category").removeAttr("required");
                $("#div-service-require-category").hide();
                $("#service-require-category").removeAttr("required");
                $("#div-service-providers-category").hide();
                $("#service-providers-category").removeAttr("required");
                $("#div-realty-category").hide();
                $("#realty-category").removeAttr("required");
                $("#div-nearby-stores-category").hide();
                $("#nearby-stores-category").removeAttr("required");
                $("#div-attractions-category").hide();
                $("#attractions-category").removeAttr("required");
                $("#div-hire-a-resource-category").hide();
                $("#hire-a-resource-category").removeAttr("required");
                $("#div-tickets-category").hide();
                $("#tickets-category").removeAttr("required");
                $("#div-learnings-category").hide();
                $("#learnings-category").removeAttr("required");
                $("#div-restaurants-category").hide();
                $("#restaurants-category").removeAttr("required");
                $("#div-rent-category").hide();
                $("#rent-category").removeAttr("required");
                $("#div-business-sales-category").hide();
                $("#business-sales-category").removeAttr("required");
                $("#div-short-term-hiring-category").hide();
                $("#short-term-hiring-category").removeAttr("required");
                $("#div-business-name").hide();
                $("#business-name").removeAttr("required");
                $("#div-tags").hide();
                $("#tags").removeAttr("required");
                $("#div-openhouse-date").hide();
                $("#openhouse-date").removeAttr("required");
                $("#div-date").show();
                $("#date").removeAttr("required");
                $("#date").attr("required", "required");
                $("#div-start-date").hide();
                $("#start-date").removeAttr("required");
                $("#div-finish-date").hide();
                $("#finish-date").removeAttr("required");
                $("#div-time-start").show();
                $("#time-start").removeAttr("required");
                $("#time-start").attr("required", "required");
                $("#div-time-finish").show();
                $("#time-finish").removeAttr("required");
                $("#time-finish").attr("required", "required");
                $("#div-open-hour").hide();
                $("#open-hour").removeAttr("required");
                $("#div-close-hour").hide();
                $("#close-hour").removeAttr("required");
                $("#div-details").show();
                $("#details").removeAttr("required");
                $("#details").attr("required", "required");
                $("#div-job-description").hide();
                $("#job-description").removeAttr("required");
                $("#div-price").show();
                $("#price").removeAttr("required");
                $("#price").attr("required", "required");
                $("#div-salary").hide();
                $("#salary").removeAttr("required");
                $("#div-hourly-rate").hide();
                $("#hourly-rate").removeAttr("required");
                $("#div-original-price").hide();
                $("#original-price").removeAttr("required");
                $("#div-discounted-price").hide();
                $("#discounted-price").removeAttr("required");

                $("#section-profile-option").show();
                $("#section-address").show();

                $("#zipcode").removeAttr("required");
                $("#zipcode").attr("required", "required");
                $("#contact-name").removeAttr("required");
                $("#contact-name").attr("required", "required");
                $("#contact-number").removeAttr("required");
                $("#contact-number").attr("required", "required");
                $("#contact-email").removeAttr("required");
                $("#contact-email").attr("required", "required");
                $("#contact-website").removeAttr("required");
                $("#contact-website").attr("required", "required");

                $("#section-jobs").hide();

                $("#jobs-type").removeAttr("required");
                $("#jobs-status").removeAttr("required");
                $("#jobs-experience").removeAttr("required");
                $("#jobs-education").removeAttr("required");
                $("#jobs-skill").removeAttr("required");
                $("#jobs-software").removeAttr("required");

                $("#section-realty").hide();

                $("#realty-bed").removeAttr("required");
                $("#realty-bath").removeAttr("required");
                $("#realty-lot").removeAttr("required");
                $("#realty-sewerage").removeAttr("required");
                $("#realty-water").removeAttr("required");
                $("#realty-gas").removeAttr("required");
                $("#realty-tax").removeAttr("required");
                $("#realty-mls").removeAttr("required");

                $("#section-gallery").show();


                $("#div-currency").show();
                $("#currency").removeAttr("required");
                $("#currency").attr("required", "required");


                $("#div-hire-a-resource-second-language").show();
                $("#language-hide").hide();
                $("#hire-a-resource-second-language").removeAttr("required");

                $("#section-social").hide();

                $("#social-facebook").removeAttr("required");
                $("#social-twitter").removeAttr("required");
                $("#social-linkedin").removeAttr("required");
                $("#social-instagram").removeAttr("required");

                $("#div-price-duration").hide();
                $("#price-duration").removeAttr("required");

                $("#div-address").hide();
                $("#address").removeAttr("required");

                $("#div-amount").hide();
                $("#amount").removeAttr("required");

                $("#div-work-details").hide();
                $("#work-details").removeAttr("required");
                $("#div-expected-hours").hide();
                $("#expected-hours").removeAttr("required");
                $("#div-pay").hide();
                $("#pay").removeAttr("required");
                $("#div-pay-duration").hide();
                $("#pay-duration").removeAttr("required");

                $("#section-match-friends").hide();

                $("#age").removeAttr("required");
                $("#gender").removeAttr("required");
                $("#about-yourself").removeAttr("required");
                $("#occupation").removeAttr("required");
                $("#religion").removeAttr("required");
                $("#height").removeAttr("required");
                $("#ethnicity").removeAttr("required");
                $("#body-type").removeAttr("required");
                $("#education").removeAttr("required");
                $("#ideal-match").removeAttr("required");
                $("#relationship-history").removeAttr("required");
                $("#lifestyle").removeAttr("required");

                var geocoder = new google.maps.Geocoder();

                geocoder.geocode({
                    'address': "<?php echo $data[0]->zipcode; ?>"
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var _latitude = results[0].geometry.location.lat().toString();
                        var _longitude = results[0].geometry.location.lng().toString();
                        var element = "listing-map";
                        var lat_element = "listing-latitude";
                        var long_element = "listing-longitude";
                        simpleMap(lat_element, _latitude, long_element, _longitude, element, true);
                    } else {
                        console.log("Location is not valid.....!");
                    }
                });
            } else if ("<?php echo $type; ?>" == "garage_sales") {
                $("#submit-listing-form").removeAttr("action");
                $("#submit-listing-form").attr("action", "<?php echo base_url(); ?>GarageSales/edit");

                $("#div-title").show();
                $("#title").removeAttr("required");
                $("#title").attr("required", "required");
                $("#div-events-category").hide();
                $("#events-category").removeAttr("required");
                $("#div-sales-category").hide();
                $("#sales-category").removeAttr("required");
                $("#div-coupons-category").hide();
                $("#coupons-category").removeAttr("required");
                $("#div-service-require-category").hide();
                $("#service-require-category").removeAttr("required");
                $("#div-service-providers-category").hide();
                $("#service-providers-category").removeAttr("required");
                $("#div-realty-category").hide();
                $("#realty-category").removeAttr("required");
                $("#div-nearby-stores-category").hide();
                $("#nearby-stores-category").removeAttr("required");
                $("#div-attractions-category").hide();
                $("#attractions-category").removeAttr("required");
                $("#div-hire-a-resource-category").hide();
                $("#hire-a-resource-category").removeAttr("required");
                $("#div-tickets-category").hide();
                $("#tickets-category").removeAttr("required");
                $("#div-learnings-category").hide();
                $("#learnings-category").removeAttr("required");
                $("#div-restaurants-category").hide();
                $("#restaurants-category").removeAttr("required");
                $("#div-rent-category").hide();
                $("#rent-category").removeAttr("required");
                $("#div-business-sales-category").hide();
                $("#business-sales-category").removeAttr("required");
                $("#div-short-term-hiring-category").hide();
                $("#short-term-hiring-category").removeAttr("required");
                $("#div-business-name").hide();
                $("#business-name").removeAttr("required");
                $("#div-tags").hide();
                $("#tags").removeAttr("required");
                $("#div-openhouse-date").hide();
                $("#openhouse-date").removeAttr("required");
                $("#div-date").show();
                $("#date").removeAttr("required");
                $("#date").attr("required", "required");
                $("#div-start-date").hide();
                $("#start-date").removeAttr("required");
                $("#div-finish-date").hide();
                $("#finish-date").removeAttr("required");
                $("#div-time-start").show();
                $("#time-start").removeAttr("required");
                $("#time-start").attr("required", "required");
                $("#div-time-finish").show();
                $("#time-finish").removeAttr("required");
                $("#time-finish").attr("required", "required");
                $("#div-open-hour").hide();
                $("#open-hour").removeAttr("required");
                $("#div-close-hour").hide();
                $("#close-hour").removeAttr("required");
                $("#div-details").show();
                $("#details").removeAttr("required");
                $("#details").attr("required", "required");
                $("#div-job-description").hide();
                $("#job-description").removeAttr("required");
                $("#div-price").hide();
                $("#price").removeAttr("required");
                $("#div-salary").hide();
                $("#salary").removeAttr("required");
                $("#div-hourly-rate").hide();
                $("#hourly-rate").removeAttr("required");
                $("#div-original-price").hide();
                $("#original-price").removeAttr("required");
                $("#div-discounted-price").hide();
                $("#discounted-price").removeAttr("required");

                $("#section-profile-option").show();
                $("#section-address").show();

                $("#zipcode").removeAttr("required");
                $("#zipcode").attr("required", "required");
                $("#contact-name").removeAttr("required");
                $("#contact-name").attr("required", "required");
                $("#contact-number").removeAttr("required");
                $("#contact-number").attr("required", "required");
                $("#contact-email").removeAttr("required");
                $("#contact-email").attr("required", "required");
                $("#contact-website").removeAttr("required");
                $("#contact-website").attr("required", "required");

                $("#section-jobs").hide();

                $("#jobs-type").removeAttr("required");
                $("#jobs-status").removeAttr("required");
                $("#jobs-experience").removeAttr("required");
                $("#jobs-education").removeAttr("required");
                $("#jobs-skill").removeAttr("required");
                $("#jobs-software").removeAttr("required");

                $("#section-realty").hide();

                $("#realty-bed").removeAttr("required");
                $("#realty-bath").removeAttr("required");
                $("#realty-lot").removeAttr("required");
                $("#realty-sewerage").removeAttr("required");
                $("#realty-water").removeAttr("required");
                $("#realty-gas").removeAttr("required");
                $("#realty-tax").removeAttr("required");
                $("#realty-mls").removeAttr("required");

                $("#section-gallery").show();


                //$("#div-currency").show();$("#currency").removeAttr("required");$("#currency").attr( "required" , "required" );

                $("#div-currency").hide();
                $("#currency").removeAttr("required");

                $("#div-hire-a-resource-second-language").show();
                $("#language-hide").hide();

                $("#hire-a-resource-second-language").removeAttr("required");

                $("#section-social").hide();

                $("#social-facebook").removeAttr("required");
                $("#social-twitter").removeAttr("required");
                $("#social-linkedin").removeAttr("required");
                $("#social-instagram").removeAttr("required");

                $("#div-price-duration").hide();
                $("#price-duration").removeAttr("required");

                $("#div-address").hide();
                $("#address").removeAttr("required");

                $("#div-amount").hide();
                $("#amount").removeAttr("required");

                $("#div-work-details").hide();
                $("#work-details").removeAttr("required");
                $("#div-expected-hours").hide();
                $("#expected-hours").removeAttr("required");
                $("#div-pay").hide();
                $("#pay").removeAttr("required");
                $("#div-pay-duration").hide();
                $("#pay-duration").removeAttr("required");

                $("#section-match-friends").hide();

                $("#age").removeAttr("required");
                $("#gender").removeAttr("required");
                $("#about-yourself").removeAttr("required");
                $("#occupation").removeAttr("required");
                $("#religion").removeAttr("required");
                $("#height").removeAttr("required");
                $("#ethnicity").removeAttr("required");
                $("#body-type").removeAttr("required");
                $("#education").removeAttr("required");
                $("#ideal-match").removeAttr("required");
                $("#relationship-history").removeAttr("required");
                $("#lifestyle").removeAttr("required");

                var geocoder = new google.maps.Geocoder();

                geocoder.geocode({
                    'address': "<?php echo $data[0]->zipcode; ?>"
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var _latitude = results[0].geometry.location.lat().toString();
                        var _longitude = results[0].geometry.location.lng().toString();
                        var element = "listing-map";
                        var lat_element = "listing-latitude";
                        var long_element = "listing-longitude";
                        simpleMap(lat_element, _latitude, long_element, _longitude, element, true);
                    } else {
                        console.log("Location is not valid.....!");
                    }
                });
            } else if ("<?php echo $type; ?>" == "sales") {
                $("#submit-listing-form").removeAttr("action");
                $("#submit-listing-form").attr("action", "<?php echo base_url(); ?>Sales/edit");

                $("#div-title").show();
                $("#title").removeAttr("required");
                $("#title").attr("required", "required");
                $("#div-events-category").hide();
                $("#events-category").removeAttr("required");
                $("#div-sales-category").show();
                $("#sales-category").removeAttr("required");
                $("#sales-category").attr("required", "required");
                $("#div-coupons-category").hide();
                $("#coupons-category").removeAttr("required");
                $("#div-service-require-category").hide();
                $("#service-require-category").removeAttr("required");
                $("#div-service-providers-category").hide();
                $("#service-providers-category").removeAttr("required");
                $("#div-realty-category").hide();
                $("#realty-category").removeAttr("required");
                $("#div-nearby-stores-category").hide();
                $("#nearby-stores-category").removeAttr("required");
                $("#div-attractions-category").hide();
                $("#attractions-category").removeAttr("required");
                $("#div-hire-a-resource-category").hide();
                $("#hire-a-resource-category").removeAttr("required");
                $("#div-tickets-category").hide();
                $("#tickets-category").removeAttr("required");
                $("#div-learnings-category").hide();
                $("#learnings-category").removeAttr("required");
                $("#div-restaurants-category").hide();
                $("#restaurants-category").removeAttr("required");
                $("#div-rent-category").hide();
                $("#rent-category").removeAttr("required");
                $("#div-business-sales-category").hide();
                $("#business-sales-category").removeAttr("required");
                $("#div-short-term-hiring-category").hide();
                $("#short-term-hiring-category").removeAttr("required");
                $("#div-business-name").hide();
                $("#business-name").removeAttr("required");
                $("#div-tags").show();
                $("#tags").removeAttr("required");
                $("#tags").attr("required", "required");
                $("#div-openhouse-date").hide();
                $("#openhouse-date").removeAttr("required");
                $("#div-date").hide();
                $("#date").removeAttr("required");
                $("#div-start-date").hide();
                $("#start-date").removeAttr("required");
                $("#div-finish-date").hide();
                $("#finish-date").removeAttr("required");
                $("#div-time-start").hide();
                $("#time-start").removeAttr("required");
                $("#div-time-finish").hide();
                $("#time-finish").removeAttr("required");
                $("#div-open-hour").hide();
                $("#open-hour").removeAttr("required");
                $("#div-close-hour").hide();
                $("#close-hour").removeAttr("required");
                $("#div-details").show();
                $("#details").removeAttr("required");
                $("#details").attr("required", "required");
                $("#div-job-description").hide();
                $("#job-description").removeAttr("required");
                $("#div-price").show();
                $("#price").removeAttr("required");
                $("#price").attr("required", "required");
                $("#div-salary").hide();
                $("#salary").removeAttr("required");
                $("#div-hourly-rate").hide();
                $("#hourly-rate").removeAttr("required");
                $("#div-original-price").hide();
                $("#original-price").removeAttr("required");
                $("#div-discounted-price").hide();
                $("#discounted-price").removeAttr("required");

                $("#section-profile-option").show();
                $("#section-address").show();

                $("#zipcode").removeAttr("required");
                $("#zipcode").attr("required", "required");
                $("#contact-name").removeAttr("required");
                $("#contact-name").attr("required", "required");
                $("#contact-number").removeAttr("required");
                $("#contact-number").attr("required", "required");
                $("#contact-email").removeAttr("required");
                $("#contact-email").attr("required", "required");
                $("#contact-website").removeAttr("required");
                $("#contact-website").attr("required", "required");

                $("#section-jobs").hide();

                $("#jobs-type").removeAttr("required");
                $("#jobs-status").removeAttr("required");
                $("#jobs-experience").removeAttr("required");
                $("#jobs-education").removeAttr("required");
                $("#jobs-skill").removeAttr("required");
                $("#jobs-software").removeAttr("required");

                $("#section-realty").hide();

                $("#realty-bed").removeAttr("required");
                $("#realty-bath").removeAttr("required");
                $("#realty-lot").removeAttr("required");
                $("#realty-sewerage").removeAttr("required");
                $("#realty-water").removeAttr("required");
                $("#realty-gas").removeAttr("required");
                $("#realty-tax").removeAttr("required");
                $("#realty-mls").removeAttr("required");

                $("#section-gallery").show();


                $("#div-currency").show();
                $("#currency").removeAttr("required");
                $("#currency").attr("required", "required");


                $("#div-hire-a-resource-second-language").show();
                $("#language-hide").hide();
                $("#hire-a-resource-second-language").removeAttr("required");

                $("#section-social").hide();

                $("#social-facebook").removeAttr("required");
                $("#social-twitter").removeAttr("required");
                $("#social-linkedin").removeAttr("required");
                $("#social-instagram").removeAttr("required");

                $("#div-price-duration").hide();
                $("#price-duration").removeAttr("required");

                $("#div-address").hide();
                $("#address").removeAttr("required");

                $("#div-amount").hide();
                $("#amount").removeAttr("required");

                $("#div-work-details").hide();
                $("#work-details").removeAttr("required");
                $("#div-expected-hours").hide();
                $("#expected-hours").removeAttr("required");
                $("#div-pay").hide();
                $("#pay").removeAttr("required");
                $("#div-pay-duration").hide();
                $("#pay-duration").removeAttr("required");

                $("#section-match-friends").hide();

                $("#age").removeAttr("required");
                $("#gender").removeAttr("required");
                $("#about-yourself").removeAttr("required");
                $("#occupation").removeAttr("required");
                $("#religion").removeAttr("required");
                $("#height").removeAttr("required");
                $("#ethnicity").removeAttr("required");
                $("#body-type").removeAttr("required");
                $("#education").removeAttr("required");
                $("#ideal-match").removeAttr("required");
                $("#relationship-history").removeAttr("required");
                $("#lifestyle").removeAttr("required");

                var geocoder = new google.maps.Geocoder();

                geocoder.geocode({
                    'address': "<?php echo $data[0]->zipcode; ?>"
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var _latitude = results[0].geometry.location.lat().toString();
                        var _longitude = results[0].geometry.location.lng().toString();
                        var element = "listing-map";
                        var lat_element = "listing-latitude";
                        var long_element = "listing-longitude";
                        simpleMap(lat_element, _latitude, long_element, _longitude, element, true);
                    } else {
                        console.log("Location is not valid.....!");
                    }
                });
            } else if ("<?php echo $type; ?>" == "coupons") {
                $("#submit-listing-form").removeAttr("action");
                $("#submit-listing-form").attr("action", "<?php echo base_url(); ?>Coupons/edit");

                $("#div-title").show();
                $("#title").removeAttr("required");
                $("#title").attr("required", "required");
                $("#div-events-category").hide();
                $("#events-category").removeAttr("required");
                $("#div-sales-category").hide();
                $("#sales-category").removeAttr("required");
                $("#div-coupons-category").show();
                $("#coupons-category").removeAttr("required");
                $("#coupons-category").attr("required", "required");
                $("#div-service-require-category").hide();
                $("#service-require-category").removeAttr("required");
                $("#div-service-providers-category").hide();
                $("#service-providers-category").removeAttr("required");
                $("#div-realty-category").hide();
                $("#realty-category").removeAttr("required");
                $("#div-nearby-stores-category").hide();
                $("#nearby-stores-category").removeAttr("required");
                $("#div-attractions-category").hide();
                $("#attractions-category").removeAttr("required");
                $("#div-hire-a-resource-category").hide();
                $("#hire-a-resource-category").removeAttr("required");
                $("#div-tickets-category").hide();
                $("#tickets-category").removeAttr("required");
                $("#div-learnings-category").hide();
                $("#learnings-category").removeAttr("required");
                $("#div-restaurants-category").hide();
                $("#restaurants-category").removeAttr("required");
                $("#div-rent-category").hide();
                $("#rent-category").removeAttr("required");
                $("#div-business-sales-category").hide();
                $("#business-sales-category").removeAttr("required");
                $("#div-short-term-hiring-category").hide();
                $("#short-term-hiring-category").removeAttr("required");
                $("#div-business-name").show();
                $("#business-name").removeAttr("required");
                $("#business-name").attr("required", "required");
                $("#div-tags").show();
                $("#tags").removeAttr("required");
                $("#tags").attr("required", "required");
                $("#div-openhouse-date").hide();
                $("#openhouse-date").removeAttr("required");
                $("#div-date").hide();
                $("#date").removeAttr("required");
                $("#div-start-date").show();
                $("#start-date").removeAttr("required");
                $("#start-date").attr("required", "required");
                $("#div-finish-date").show();
                $("#finish-date").removeAttr("required");
                $("#finish-date").attr("required", "required");
                $("#div-time-start").hide();
                $("#time-start").removeAttr("required");
                $("#div-time-finish").hide();
                $("#time-finish").removeAttr("required");
                $("#div-open-hour").hide();
                $("#open-hour").removeAttr("required");
                $("#div-close-hour").hide();
                $("#close-hour").removeAttr("required");
                $("#div-details").show();
                $("#details").removeAttr("required");
                $("#details").attr("required", "required");
                $("#div-job-description").hide();
                $("#job-description").removeAttr("required");
                $("#div-price").hide();
                $("#price").removeAttr("required");
                $("#div-salary").hide();
                $("#salary").removeAttr("required");
                $("#div-hourly-rate").hide();
                $("#hourly-rate").removeAttr("required");
                $("#div-original-price").show();
                $("#original-price").removeAttr("required");
                $("#original-price").attr("required", "required");
                $("#div-discounted-price").show();
                $("#discounted-price").removeAttr("required");
                $("#discounted-price").attr("required", "required");

                $("#section-profile-option").show();
                $("#section-address").show();

                $("#zipcode").removeAttr("required");
                $("#zipcode").attr("required", "required");
                $("#contact-name").removeAttr("required");
                $("#contact-name").attr("required", "required");
                $("#contact-number").removeAttr("required");
                $("#contact-number").attr("required", "required");
                $("#contact-email").removeAttr("required");
                $("#contact-email").attr("required", "required");
                $("#contact-website").removeAttr("required");
                $("#contact-website").attr("required", "required");

                $("#section-jobs").hide();

                $("#jobs-type").removeAttr("required");
                $("#jobs-status").removeAttr("required");
                $("#jobs-experience").removeAttr("required");
                $("#jobs-education").removeAttr("required");
                $("#jobs-skill").removeAttr("required");
                $("#jobs-software").removeAttr("required");

                $("#section-realty").hide();

                $("#realty-bed").removeAttr("required");
                $("#realty-bath").removeAttr("required");
                $("#realty-lot").removeAttr("required");
                $("#realty-sewerage").removeAttr("required");
                $("#realty-water").removeAttr("required");
                $("#realty-gas").removeAttr("required");
                $("#realty-tax").removeAttr("required");
                $("#realty-mls").removeAttr("required");

                $("#section-gallery").show();


                $("#div-currency").show();
                $("#currency").removeAttr("required");
                $("#currency").attr("required", "required");


                $("#div-hire-a-resource-second-language").show();
                $("#language-hide").hide();

                $("#hire-a-resource-second-language").removeAttr("required");

                $("#section-social").hide();

                $("#social-facebook").removeAttr("required");
                $("#social-twitter").removeAttr("required");
                $("#social-linkedin").removeAttr("required");
                $("#social-instagram").removeAttr("required");

                $("#div-price-duration").hide();
                $("#price-duration").removeAttr("required");

                $("#div-address").hide();
                $("#address").removeAttr("required");

                $("#div-amount").hide();
                $("#amount").removeAttr("required");

                $("#div-work-details").hide();
                $("#work-details").removeAttr("required");
                $("#div-expected-hours").hide();
                $("#expected-hours").removeAttr("required");
                $("#div-pay").hide();
                $("#pay").removeAttr("required");
                $("#div-pay-duration").hide();
                $("#pay-duration").removeAttr("required");

                $("#section-match-friends").hide();

                $("#age").removeAttr("required");
                $("#gender").removeAttr("required");
                $("#about-yourself").removeAttr("required");
                $("#occupation").removeAttr("required");
                $("#religion").removeAttr("required");
                $("#height").removeAttr("required");
                $("#ethnicity").removeAttr("required");
                $("#body-type").removeAttr("required");
                $("#education").removeAttr("required");
                $("#ideal-match").removeAttr("required");
                $("#relationship-history").removeAttr("required");
                $("#lifestyle").removeAttr("required");

                var geocoder = new google.maps.Geocoder();

                geocoder.geocode({
                    'address': "<?php echo $data[0]->zipcode; ?>"
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var _latitude = results[0].geometry.location.lat().toString();
                        var _longitude = results[0].geometry.location.lng().toString();
                        var element = "listing-map";
                        var lat_element = "listing-latitude";
                        var long_element = "listing-longitude";
                        simpleMap(lat_element, _latitude, long_element, _longitude, element, true);
                    } else {
                        console.log("Location is not valid.....!");
                    }
                });
            } else if ("<?php echo $type; ?>" == "jobs") {
                $("#submit-listing-form").removeAttr("action");
                $("#submit-listing-form").attr("action", "<?php echo base_url(); ?>Jobs/edit");

                $("#div-title").show();
                $("#title").removeAttr("required");
                $("#title").attr("required", "required");
                $("#div-events-category").hide();
                $("#events-category").removeAttr("required");
                $("#div-sales-category").hide();
                $("#sales-category").removeAttr("required");
                $("#div-coupons-category").hide();
                $("#coupons-category").removeAttr("required");
                $("#div-service-require-category").hide();
                $("#service-require-category").removeAttr("required");
                $("#div-service-providers-category").hide();
                $("#service-providers-category").removeAttr("required");
                $("#div-realty-category").hide();
                $("#realty-category").removeAttr("required");
                $("#div-nearby-stores-category").hide();
                $("#nearby-stores-category").removeAttr("required");
                $("#div-attractions-category").hide();
                $("#attractions-category").removeAttr("required");
                $("#div-hire-a-resource-category").hide();
                $("#hire-a-resource-category").removeAttr("required");
                $("#div-tickets-category").hide();
                $("#tickets-category").removeAttr("required");
                $("#div-learnings-category").hide();
                $("#learnings-category").removeAttr("required");
                $("#div-restaurants-category").hide();
                $("#restaurants-category").removeAttr("required");
                $("#div-rent-category").hide();
                $("#rent-category").removeAttr("required");
                $("#div-business-sales-category").hide();
                $("#business-sales-category").removeAttr("required");
                $("#div-short-term-hiring-category").hide();
                $("#short-term-hiring-category").removeAttr("required");
                $("#div-business-name").show();
                $("#business-name").removeAttr("required");
                $("#business-name").attr("required", "required");
                $("#div-tags").show();
                $("#tags").removeAttr("required");
                $("#tags").attr("required", "required");
                $("#div-openhouse-date").hide();
                $("#openhouse-date").removeAttr("required");
                $("#div-date").show();
                $("#date").removeAttr("required");
                $("#date").attr("required", "required");
                $("#div-start-date").hide();
                $("#start-date").removeAttr("required");
                $("#div-finish-date").hide();
                $("#finish-date").removeAttr("required");
                $("#div-time-start").hide();
                $("#time-start").removeAttr("required");
                $("#div-time-finish").hide();
                $("#time-finish").removeAttr("required");
                $("#div-open-hour").hide();
                $("#open-hour").removeAttr("required");
                $("#div-close-hour").hide();
                $("#close-hour").removeAttr("required");
                $("#div-details").hide();
                $("#details").removeAttr("required");
                $("#div-job-description").show();
                $("#job-description").removeAttr("required");
                $("#job-description").attr("required", "required");
                $("#div-price").hide();
                $("#price").removeAttr("required");
                $("#div-salary").show();
                $("#salary").removeAttr("required");
                $("#salary").attr("required", "required");
                $("#div-hourly-rate").hide();
                $("#hourly-rate").removeAttr("required");
                $("#div-original-price").hide();
                $("#original-price").removeAttr("required");
                $("#div-discounted-price").hide();
                $("#discounted-price").removeAttr("required");

                $("#section-profile-option").show();
                $("#section-address").show();

                $("#zipcode").removeAttr("required");
                $("#zipcode").attr("required", "required");
                $("#contact-name").removeAttr("required");
                $("#contact-name").attr("required", "required");
                $("#contact-number").removeAttr("required");
                $("#contact-number").attr("required", "required");
                $("#contact-email").removeAttr("required");
                $("#contact-email").attr("required", "required");
                $("#contact-website").removeAttr("required");
                $("#contact-website").attr("required", "required");

                $("#section-jobs").show();

                $("#jobs-type").removeAttr("required");
                $("#jobs-type").attr("required", "required");
                $("#jobs-status").removeAttr("required");
                $("#jobs-status").attr("required", "required");
                $("#jobs-experience").removeAttr("required");
                $("#jobs-experience").attr("required", "required");
                $("#jobs-education").removeAttr("required");
                $("#jobs-education").attr("required", "required");
                $("#jobs-skill").removeAttr("required");
                $("#jobs-skill").attr("required", "required");
                $("#jobs-software").removeAttr("required");
                $("#jobs-software").attr("required", "required");

                $("#section-realty").hide();

                $("#realty-bed").removeAttr("required");
                $("#realty-bath").removeAttr("required");
                $("#realty-lot").removeAttr("required");
                $("#realty-sewerage").removeAttr("required");
                $("#realty-water").removeAttr("required");
                $("#realty-gas").removeAttr("required");
                $("#realty-tax").removeAttr("required");
                $("#realty-mls").removeAttr("required");

                $("#section-gallery").show();


                $("#div-currency").show();
                $("#currency").removeAttr("required");
                $("#currency").attr("required", "required");


                $("#div-hire-a-resource-second-language").show();
                $("#language-hide").hide();
                $("#hire-a-resource-second-language").removeAttr("required");


                $("#section-social").hide();

                $("#social-facebook").removeAttr("required");
                $("#social-twitter").removeAttr("required");
                $("#social-linkedin").removeAttr("required");
                $("#social-instagram").removeAttr("required");

                $("#div-price-duration").hide();
                $("#price-duration").removeAttr("required");

                $("#div-address").hide();
                $("#address").removeAttr("required");

                $("#div-amount").hide();
                $("#amount").removeAttr("required");

                $("#div-work-details").hide();
                $("#work-details").removeAttr("required");
                $("#div-expected-hours").hide();
                $("#expected-hours").removeAttr("required");
                $("#div-pay").hide();
                $("#pay").removeAttr("required");
                $("#div-pay-duration").hide();
                $("#pay-duration").removeAttr("required");

                $("#section-match-friends").hide();

                $("#age").removeAttr("required");
                $("#gender").removeAttr("required");
                $("#about-yourself").removeAttr("required");
                $("#occupation").removeAttr("required");
                $("#religion").removeAttr("required");
                $("#height").removeAttr("required");
                $("#ethnicity").removeAttr("required");
                $("#body-type").removeAttr("required");
                $("#education").removeAttr("required");
                $("#ideal-match").removeAttr("required");
                $("#relationship-history").removeAttr("required");
                $("#lifestyle").removeAttr("required");

                var geocoder = new google.maps.Geocoder();

                geocoder.geocode({
                    'address': "<?php echo $data[0]->zipcode; ?>"
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var _latitude = results[0].geometry.location.lat().toString();
                        var _longitude = results[0].geometry.location.lng().toString();
                        var element = "listing-map";
                        var lat_element = "listing-latitude";
                        var long_element = "listing-longitude";
                        simpleMap(lat_element, _latitude, long_element, _longitude, element, true);
                    } else {
                        console.log("Location is not valid.....!");
                    }
                });
            } else if ("<?php echo $type; ?>" == "service_require") {
                $("#submit-listing-form").removeAttr("action");
                $("#submit-listing-form").attr("action", "<?php echo base_url(); ?>ServiceRequire/edit");

                $("#div-title").show();
                $("#title").removeAttr("required");
                $("#title").attr("required", "required");
                $("#div-events-category").hide();
                $("#events-category").removeAttr("required");
                $("#div-sales-category").hide();
                $("#sales-category").removeAttr("required");
                $("#div-coupons-category").hide();
                $("#coupons-category").removeAttr("required");
                $("#div-service-require-category").show();
                $("#service-require-category").removeAttr("required");
                $("#service-require-category").attr("required", "required");
                $("#div-service-providers-category").hide();
                $("#service-providers-category").removeAttr("required");
                $("#div-realty-category").hide();
                $("#realty-category").removeAttr("required");
                $("#div-nearby-stores-category").hide();
                $("#nearby-stores-category").removeAttr("required");
                $("#div-attractions-category").hide();
                $("#attractions-category").removeAttr("required");
                $("#div-hire-a-resource-category").hide();
                $("#hire-a-resource-category").removeAttr("required");
                $("#div-tickets-category").hide();
                $("#tickets-category").removeAttr("required");
                $("#div-learnings-category").hide();
                $("#learnings-category").removeAttr("required");
                $("#div-restaurants-category").hide();
                $("#restaurants-category").removeAttr("required");
                $("#div-rent-category").hide();
                $("#rent-category").removeAttr("required");
                $("#div-business-sales-category").hide();
                $("#business-sales-category").removeAttr("required");
                $("#div-short-term-hiring-category").hide();
                $("#short-term-hiring-category").removeAttr("required");
                $("#div-business-name").hide();
                $("#business-name").removeAttr("required");
                $("#div-tags").show();
                $("#tags").removeAttr("required");
                $("#tags").attr("required", "required");
                $("#div-openhouse-date").hide();
                $("#openhouse-date").removeAttr("required");
                $("#div-date").show();
                $("#date").removeAttr("required");
                $("#date").attr("required", "required");
                $("#div-start-date").hide();
                $("#start-date").removeAttr("required");
                $("#div-finish-date").hide();
                $("#finish-date").removeAttr("required");
                $("#div-time-start").hide();
                $("#time-start").removeAttr("required");
                $("#div-time-finish").hide();
                $("#time-finish").removeAttr("required");
                $("#div-open-hour").hide();
                $("#open-hour").removeAttr("required");
                $("#div-close-hour").hide();
                $("#close-hour").removeAttr("required");
                $("#div-details").hide();
                $("#details").removeAttr("required");
                $("#div-job-description").show();
                $("#job-description").removeAttr("required");
                $("#job-description").attr("required", "required");
                $("#div-price").hide();
                $("#price").removeAttr("required");
                $("#div-salary").hide();
                $("#salary").removeAttr("required");
                $("#div-hourly-rate").hide();
                $("#hourly-rate").removeAttr("required");
                $("#div-original-price").hide();
                $("#original-price").removeAttr("required");
                $("#div-discounted-price").hide();
                $("#discounted-price").removeAttr("required");

                $("#section-profile-option").show();
                $("#section-address").show();

                $("#zipcode").removeAttr("required");
                $("#zipcode").attr("required", "required");
                $("#contact-name").removeAttr("required");
                $("#contact-name").attr("required", "required");
                $("#contact-number").removeAttr("required");
                $("#contact-number").attr("required", "required");
                $("#contact-email").removeAttr("required");
                $("#contact-email").attr("required", "required");
                $("#contact-website").removeAttr("required");
                $("#contact-website").attr("required", "required");

                $("#section-jobs").hide();

                $("#jobs-type").removeAttr("required");
                $("#jobs-status").removeAttr("required");
                $("#jobs-experience").removeAttr("required");
                $("#jobs-education").removeAttr("required");
                $("#jobs-skill").removeAttr("required");
                $("#jobs-software").removeAttr("required");

                $("#section-realty").hide();

                $("#realty-bed").removeAttr("required");
                $("#realty-bath").removeAttr("required");
                $("#realty-lot").removeAttr("required");
                $("#realty-sewerage").removeAttr("required");
                $("#realty-water").removeAttr("required");
                $("#realty-gas").removeAttr("required");
                $("#realty-tax").removeAttr("required");
                $("#realty-mls").removeAttr("required");

                $("#section-gallery").show();


                $("#div-currency").show();
                $("#currency").removeAttr("required");
                $("#currency").attr("required", "required");


                $("#div-hire-a-resource-second-language").show();
                $("#language-hide").hide();

                $("#hire-a-resource-second-language").removeAttr("required");


                $("#section-social").hide();

                $("#social-facebook").removeAttr("required");
                $("#social-twitter").removeAttr("required");
                $("#social-linkedin").removeAttr("required");
                $("#social-instagram").removeAttr("required");

                $("#div-price-duration").hide();
                $("#price-duration").removeAttr("required");

                $("#div-address").hide();
                $("#address").removeAttr("required");

                $("#div-amount").hide();
                $("#amount").removeAttr("required");

                $("#div-work-details").hide();
                $("#work-details").removeAttr("required");
                $("#div-expected-hours").hide();
                $("#expected-hours").removeAttr("required");
                $("#div-pay").hide();
                $("#pay").removeAttr("required");
                $("#div-pay-duration").hide();
                $("#pay-duration").removeAttr("required");

                $("#section-match-friends").hide();

                $("#age").removeAttr("required");
                $("#gender").removeAttr("required");
                $("#about-yourself").removeAttr("required");
                $("#occupation").removeAttr("required");
                $("#religion").removeAttr("required");
                $("#height").removeAttr("required");
                $("#ethnicity").removeAttr("required");
                $("#body-type").removeAttr("required");
                $("#education").removeAttr("required");
                $("#ideal-match").removeAttr("required");
                $("#relationship-history").removeAttr("required");
                $("#lifestyle").removeAttr("required");

                var geocoder = new google.maps.Geocoder();

                geocoder.geocode({
                    'address': "<?php echo $data[0]->zipcode; ?>"
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var _latitude = results[0].geometry.location.lat().toString();
                        var _longitude = results[0].geometry.location.lng().toString();
                        var element = "listing-map";
                        var lat_element = "listing-latitude";
                        var long_element = "listing-longitude";
                        simpleMap(lat_element, _latitude, long_element, _longitude, element, true);
                    } else {
                        console.log("Location is not valid.....!");
                    }
                });
            } else if ("<?php echo $type; ?>" == "service_providers") {
                $("#submit-listing-form").removeAttr("action");
                $("#submit-listing-form").attr("action", "<?php echo base_url(); ?>ServiceProviders/edit");

                $("#div-title").show();
                $("#title").removeAttr("required");
                $("#title").attr("required", "required");
                $("#div-events-category").hide();
                $("#events-category").removeAttr("required");
                $("#div-sales-category").hide();
                $("#sales-category").removeAttr("required");
                $("#div-coupons-category").hide();
                $("#coupons-category").removeAttr("required");
                $("#div-service-require-category").hide();
                $("#service-require-category").removeAttr("required");
                $("#div-service-providers-category").show();
                $("#service-providers-category").removeAttr("required");
                $("#service-providers-category").attr("required", "required");
                $("#div-realty-category").hide();
                $("#realty-category").removeAttr("required");
                $("#div-nearby-stores-category").hide();
                $("#nearby-stores-category").removeAttr("required");
                $("#div-attractions-category").hide();
                $("#attractions-category").removeAttr("required");
                $("#div-hire-a-resource-category").hide();
                $("#hire-a-resource-category").removeAttr("required");
                $("#div-tickets-category").hide();
                $("#tickets-category").removeAttr("required");
                $("#div-learnings-category").hide();
                $("#learnings-category").removeAttr("required");
                $("#div-restaurants-category").hide();
                $("#restaurants-category").removeAttr("required");
                $("#div-rent-category").hide();
                $("#rent-category").removeAttr("required");
                $("#div-business-sales-category").hide();
                $("#business-sales-category").removeAttr("required");
                $("#div-short-term-hiring-category").hide();
                $("#short-term-hiring-category").removeAttr("required");
                $("#div-business-name").show();
                $("#business-name").removeAttr("required");
                $("#business-name").attr("required", "required");
                $("#div-tags").show();
                $("#tags").removeAttr("required");
                $("#tags").attr("required", "required");
                $("#div-openhouse-date").hide();
                $("#openhouse-date").removeAttr("required");
                $("#div-date").hide();
                $("#date").removeAttr("required");
                $("#div-start-date").hide();
                $("#start-date").removeAttr("required");
                $("#div-finish-date").hide();
                $("#finish-date").removeAttr("required");
                $("#div-time-start").hide();
                $("#time-start").removeAttr("required");
                $("#div-time-finish").hide();
                $("#time-finish").removeAttr("required");
                $("#div-open-hour").show();
                $("#open-hour").removeAttr("required");
                $("#open-hour").attr("required", "required");
                $("#div-close-hour").show();
                $("#close-hour").removeAttr("required");
                $("#close-hour").attr("required", "required");
                $("#div-details").hide();
                $("#details").removeAttr("required");
                $("#div-job-description").show();
                $("#job-description").removeAttr("required");
                $("#job-description").attr("required", "required");
                $("#div-price").hide();
                $("#price").removeAttr("required");
                $("#div-salary").hide();
                $("#salary").removeAttr("required");
                $("#div-hourly-rate").hide();
                $("#hourly-rate").removeAttr("required");
                $("#div-original-price").hide();
                $("#original-price").removeAttr("required");
                $("#div-discounted-price").hide();
                $("#discounted-price").removeAttr("required");

                $("#section-profile-option").show();
                $("#section-address").show();

                $("#zipcode").removeAttr("required");
                $("#zipcode").attr("required", "required");
                $("#contact-name").removeAttr("required");
                $("#contact-name").attr("required", "required");
                $("#contact-number").removeAttr("required");
                $("#contact-number").attr("required", "required");
                $("#contact-email").removeAttr("required");
                $("#contact-email").attr("required", "required");
                $("#contact-website").removeAttr("required");
                $("#contact-website").attr("required", "required");

                $("#section-jobs").hide();

                $("#jobs-type").removeAttr("required");
                $("#jobs-status").removeAttr("required");
                $("#jobs-experience").removeAttr("required");
                $("#jobs-education").removeAttr("required");
                $("#jobs-skill").removeAttr("required");
                $("#jobs-software").removeAttr("required");

                $("#section-realty").hide();

                $("#realty-bed").removeAttr("required");
                $("#realty-bath").removeAttr("required");
                $("#realty-lot").removeAttr("required");
                $("#realty-sewerage").removeAttr("required");
                $("#realty-water").removeAttr("required");
                $("#realty-gas").removeAttr("required");
                $("#realty-tax").removeAttr("required");
                $("#realty-mls").removeAttr("required");

                $("#section-gallery").show();


                $("#div-currency").show();
                $("#currency").removeAttr("required");
                $("#currency").attr("required", "required");


                $("#div-hire-a-resource-second-language").show();
                $("#language-hide").hide();

                $("#hire-a-resource-second-language").removeAttr("required");

                $("#section-social").hide();

                $("#social-facebook").removeAttr("required");
                $("#social-twitter").removeAttr("required");
                $("#social-linkedin").removeAttr("required");
                $("#social-instagram").removeAttr("required");

                $("#div-price-duration").hide();
                $("#price-duration").removeAttr("required");

                $("#div-address").hide();
                $("#address").removeAttr("required");

                $("#div-amount").hide();
                $("#amount").removeAttr("required");

                $("#div-work-details").hide();
                $("#work-details").removeAttr("required");
                $("#div-expected-hours").hide();
                $("#expected-hours").removeAttr("required");
                $("#div-pay").hide();
                $("#pay").removeAttr("required");
                $("#div-pay-duration").hide();
                $("#pay-duration").removeAttr("required");

                $("#section-match-friends").hide();

                $("#age").removeAttr("required");
                $("#gender").removeAttr("required");
                $("#about-yourself").removeAttr("required");
                $("#occupation").removeAttr("required");
                $("#religion").removeAttr("required");
                $("#height").removeAttr("required");
                $("#ethnicity").removeAttr("required");
                $("#body-type").removeAttr("required");
                $("#education").removeAttr("required");
                $("#ideal-match").removeAttr("required");
                $("#relationship-history").removeAttr("required");
                $("#lifestyle").removeAttr("required");

                var geocoder = new google.maps.Geocoder();

                geocoder.geocode({
                    'address': "<?php echo $data[0]->zipcode; ?>"
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var _latitude = results[0].geometry.location.lat().toString();
                        var _longitude = results[0].geometry.location.lng().toString();
                        var element = "listing-map";
                        var lat_element = "listing-latitude";
                        var long_element = "listing-longitude";
                        simpleMap(lat_element, _latitude, long_element, _longitude, element, true);
                    } else {
                        console.log("Location is not valid.....!");
                    }
                });
            } else if ("<?php echo $type; ?>" == "realty") {
                $("#submit-listing-form").removeAttr("action");
                $("#submit-listing-form").attr("action", "<?php echo base_url(); ?>realty/edit");

                $("#div-title").hide();
                $("#title").removeAttr("required");
                $("#div-events-category").hide();
                $("#events-category").removeAttr("required");
                $("#div-sales-category").hide();
                $("#sales-category").removeAttr("required");
                $("#div-coupons-category").hide();
                $("#coupons-category").removeAttr("required");
                $("#div-service-require-category").hide();
                $("#service-require-category").removeAttr("required");
                $("#div-service-providers-category").hide();
                $("#service-providers-category").removeAttr("required");
                $("#div-realty-category").show();
                $("#realty-category").removeAttr("required");
                $("#realty-category").attr("required", "required");
                $("#div-nearby-stores-category").hide();
                $("#nearby-stores-category").removeAttr("required");
                $("#div-attractions-category").hide();
                $("#attractions-category").removeAttr("required");
                $("#div-hire-a-resource-category").hide();
                $("#hire-a-resource-category").removeAttr("required");
                $("#div-tickets-category").hide();
                $("#tickets-category").removeAttr("required");
                $("#div-learnings-category").hide();
                $("#learnings-category").removeAttr("required");
                $("#div-restaurants-category").hide();
                $("#restaurants-category").removeAttr("required");
                $("#div-rent-category").hide();
                $("#rent-category").removeAttr("required");
                $("#div-business-sales-category").hide();
                $("#business-sales-category").removeAttr("required");
                $("#div-short-term-hiring-category").hide();
                $("#short-term-hiring-category").removeAttr("required");
                $("#div-business-name").hide();
                $("#business-name").removeAttr("required");
                $("#div-business-name").hide();
                $("#business-name").removeAttr("required");
                $("#div-openhouse-date").show();
                $("#openhouse-date").removeAttr("required");
                $("#div-date").hide();
                $("#date").removeAttr("required");
                $("#div-start-date").hide();
                $("#start-date").removeAttr("required");
                $("#div-finish-date").hide();
                $("#finish-date").removeAttr("required");
                $("#div-time-start").hide();
                $("#time-start").removeAttr("required");
                $("#div-time-finish").hide();
                $("#time-finish").removeAttr("required");
                $("#div-open-hour").show();
                $("#open-hour").removeAttr("required");
                $("#open-hour").attr("required", "required");
                $("#div-close-hour").show();
                $("#close-hour").removeAttr("required");
                $("#close-hour").attr("required", "required");
                $("#div-details").show();
                $("#details").removeAttr("required");
                $("#details").attr("required", "required");
                $("#div-job-description").hide();
                $("#job-description").removeAttr("required");
                $("#div-price").show();
                $("#price").removeAttr("required");
                $("#price").attr("required", "required");
                $("#div-salary").hide();
                $("#salary").removeAttr("required");
                $("#div-hourly-rate").hide();
                $("#hourly-rate").removeAttr("required");
                $("#div-original-price").hide();
                $("#original-price").removeAttr("required");
                $("#div-discounted-price").hide();
                $("#discounted-price").removeAttr("required");

                $("#section-profile-option").show();
                $("#section-address").show();

                $("#zipcode").removeAttr("required");
                $("#zipcode").attr("required", "required");
                $("#contact-name").removeAttr("required");
                $("#contact-name").attr("required", "required");
                $("#contact-number").removeAttr("required");
                $("#contact-number").attr("required", "required");
                $("#contact-email").removeAttr("required");
                $("#contact-email").attr("required", "required");
                $("#contact-website").removeAttr("required");
                $("#contact-website").attr("required", "required");

                $("#section-jobs").hide();

                $("#jobs-type").removeAttr("required");
                $("#jobs-status").removeAttr("required");
                $("#jobs-experience").removeAttr("required");
                $("#jobs-education").removeAttr("required");
                $("#jobs-skill").removeAttr("required");
                $("#jobs-software").removeAttr("required");

                $("#section-realty").show();

                $("#realty-bed").removeAttr("required");
                $("#realty-bed").attr("required", "required");
                $("#realty-bath").removeAttr("required");
                $("#realty-bath").attr("required", "required");
                $("#realty-lot").removeAttr("required");
                $("#realty-lot").attr("required", "required");
                $("#realty-sewerage").removeAttr("required");
                $("#realty-sewerage").attr("required", "required");
                $("#realty-water").removeAttr("required");
                $("#realty-water").attr("required", "required");
                $("#realty-gas").removeAttr("required");
                $("#realty-gas").attr("required", "required");
                $("#realty-tax").removeAttr("required");
                $("#realty-tax").attr("required", "required");
                $("#realty-mls").removeAttr("required");
                $("#realty-mls").attr("required", "required");

                $("#section-gallery").show();


                $("#div-currency").show();
                $("#currency").removeAttr("required");
                $("#currency").attr("required", "required");


                $("#div-hire-a-resource-second-language").show();
                $("#language-hide").hide();

                $("#hire-a-resource-second-language").removeAttr("required");


                $("#section-social").hide();

                $("#social-facebook").removeAttr("required");
                $("#social-twitter").removeAttr("required");
                $("#social-linkedin").removeAttr("required");
                $("#social-instagram").removeAttr("required");

                $("#div-price-duration").hide();
                $("#price-duration").removeAttr("required");

                $("#div-address").hide();
                $("#address").removeAttr("required");

                $("#div-amount").hide();
                $("#amount").removeAttr("required");

                $("#div-work-details").hide();
                $("#work-details").removeAttr("required");
                $("#div-expected-hours").hide();
                $("#expected-hours").removeAttr("required");
                $("#div-pay").hide();
                $("#pay").removeAttr("required");
                $("#div-pay-duration").hide();
                $("#pay-duration").removeAttr("required");

                $("#section-match-friends").hide();

                $("#age").removeAttr("required");
                $("#gender").removeAttr("required");
                $("#about-yourself").removeAttr("required");
                $("#occupation").removeAttr("required");
                $("#religion").removeAttr("required");
                $("#height").removeAttr("required");
                $("#ethnicity").removeAttr("required");
                $("#body-type").removeAttr("required");
                $("#education").removeAttr("required");
                $("#ideal-match").removeAttr("required");
                $("#relationship-history").removeAttr("required");
                $("#lifestyle").removeAttr("required");

                var geocoder = new google.maps.Geocoder();

                geocoder.geocode({
                    'address': "<?php echo $data[0]->zipcode; ?>"
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var _latitude = results[0].geometry.location.lat().toString();
                        var _longitude = results[0].geometry.location.lng().toString();
                        var element = "listing-map";
                        var lat_element = "listing-latitude";
                        var long_element = "listing-longitude";
                        simpleMap(lat_element, _latitude, long_element, _longitude, element, true);
                    } else {
                        console.log("Location is not valid.....!");
                    }
                });
            } else if ("<?php echo $type; ?>" == "nearby_stores") {
                $("#submit-listing-form").removeAttr("action");
                $("#submit-listing-form").attr("action", "<?php echo base_url(); ?>NearbyStores/edit");

                $("#div-title").show();
                $("#title").removeAttr("required");
                $("#title").attr("required", "required");
                $("#div-events-category").hide();
                $("#events-category").removeAttr("required");
                $("#div-sales-category").hide();
                $("#sales-category").removeAttr("required");
                $("#div-coupons-category").hide();
                $("#coupons-category").removeAttr("required");
                $("#div-service-require-category").hide();
                $("#service-require-category").removeAttr("required");
                $("#div-service-providers-category").hide();
                $("#service-providers-category").removeAttr("required");
                $("#div-realty-category").hide();
                $("#realty-category").removeAttr("required");
                $("#div-nearby-stores-category").show();
                $("#nearby-stores-category").removeAttr("required");
                $("#nearby-stores-category").attr("required", "required");
                $("#div-attractions-category").hide();
                $("#attractions-category").removeAttr("required");
                $("#div-hire-a-resource-category").hide();
                $("#hire-a-resource-category").removeAttr("required");
                $("#div-tickets-category").hide();
                $("#tickets-category").removeAttr("required");
                $("#div-learnings-category").hide();
                $("#learnings-category").removeAttr("required");
                $("#div-restaurants-category").hide();
                $("#restaurants-category").removeAttr("required");
                $("#div-rent-category").hide();
                $("#rent-category").removeAttr("required");
                $("#div-business-sales-category").hide();
                $("#business-sales-category").removeAttr("required");
                $("#div-short-term-hiring-category").hide();
                $("#short-term-hiring-category").removeAttr("required");
                $("#div-business-name").show();
                $("#business-name").removeAttr("required");
                $("#business-name").attr("required", "required");
                $("#div-tags").show();
                $("#tags").removeAttr("required");
                $("#tags").attr("required", "required");
                $("#div-openhouse-date").hide();
                $("#openhouse-date").removeAttr("required");
                $("#div-date").hide();
                $("#date").removeAttr("required");
                $("#div-start-date").hide();
                $("#start-date").removeAttr("required");
                $("#div-finish-date").hide();
                $("#finish-date").removeAttr("required");
                $("#div-time-start").hide();
                $("#time-start").removeAttr("required");
                $("#div-time-finish").hide();
                $("#time-finish").removeAttr("required");
                $("#div-open-hour").show();
                $("#open-hour").removeAttr("required");
                $("#open-hour").attr("required", "required");
                $("#div-close-hour").show();
                $("#close-hour").removeAttr("required");
                $("#close-hour").attr("required", "required");
                $("#div-details").show();
                $("#details").removeAttr("required");
                $("#details").attr("required", "required");
                $("#div-job-description").hide();
                $("#job-description").removeAttr("required");
                $("#div-price").hide();
                $("#price").removeAttr("required");
                $("#div-salary").hide();
                $("#salary").removeAttr("required");
                $("#div-hourly-rate").hide();
                $("#hourly-rate").removeAttr("required");
                $("#div-original-price").hide();
                $("#original-price").removeAttr("required");
                $("#div-discounted-price").hide();
                $("#discounted-price").removeAttr("required");

                $("#section-profile-option").show();
                $("#section-address").show();

                $("#zipcode").removeAttr("required");
                $("#zipcode").attr("required", "required");
                $("#contact-name").removeAttr("required");
                $("#contact-name").attr("required", "required");
                $("#contact-number").removeAttr("required");
                $("#contact-number").attr("required", "required");
                $("#contact-email").removeAttr("required");
                $("#contact-email").attr("required", "required");
                $("#contact-website").removeAttr("required");
                $("#contact-website").attr("required", "required");

                $("#section-jobs").hide();

                $("#jobs-type").removeAttr("required");
                $("#jobs-status").removeAttr("required");
                $("#jobs-experience").removeAttr("required");
                $("#jobs-education").removeAttr("required");
                $("#jobs-skill").removeAttr("required");
                $("#jobs-software").removeAttr("required");

                $("#section-realty").hide();

                $("#realty-bed").removeAttr("required");
                $("#realty-bath").removeAttr("required");
                $("#realty-lot").removeAttr("required");
                $("#realty-sewerage").removeAttr("required");
                $("#realty-water").removeAttr("required");
                $("#realty-gas").removeAttr("required");
                $("#realty-tax").removeAttr("required");
                $("#realty-mls").removeAttr("required");

                $("#section-gallery").show();


                $("#div-currency").hide();
                $("#currency").removeAttr("required");


                $("#div-hire-a-resource-second-language").show();
                $("#language-hide").hide();

                $("#hire-a-resource-second-language").removeAttr("required");


                $("#section-social").hide();

                $("#social-facebook").removeAttr("required");
                $("#social-twitter").removeAttr("required");
                $("#social-linkedin").removeAttr("required");
                $("#social-instagram").removeAttr("required");

                $("#div-price-duration").hide();
                $("#price-duration").removeAttr("required");

                $("#div-address").hide();
                $("#address").removeAttr("required");

                $("#div-amount").hide();
                $("#amount").removeAttr("required");

                $("#div-work-details").hide();
                $("#work-details").removeAttr("required");
                $("#div-expected-hours").hide();
                $("#expected-hours").removeAttr("required");
                $("#div-pay").hide();
                $("#pay").removeAttr("required");
                $("#div-pay-duration").hide();
                $("#pay-duration").removeAttr("required");

                $("#section-match-friends").hide();

                $("#age").removeAttr("required");
                $("#gender").removeAttr("required");
                $("#about-yourself").removeAttr("required");
                $("#occupation").removeAttr("required");
                $("#religion").removeAttr("required");
                $("#height").removeAttr("required");
                $("#ethnicity").removeAttr("required");
                $("#body-type").removeAttr("required");
                $("#education").removeAttr("required");
                $("#ideal-match").removeAttr("required");
                $("#relationship-history").removeAttr("required");
                $("#lifestyle").removeAttr("required");

                var geocoder = new google.maps.Geocoder();

                geocoder.geocode({
                    'address': "<?php echo $data[0]->zipcode; ?>"
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var _latitude = results[0].geometry.location.lat().toString();
                        var _longitude = results[0].geometry.location.lng().toString();
                        var element = "listing-map";
                        var lat_element = "listing-latitude";
                        var long_element = "listing-longitude";
                        simpleMap(lat_element, _latitude, long_element, _longitude, element, true);
                    } else {
                        console.log("Location is not valid.....!");
                    }
                });
            } else if ("<?php echo $type; ?>" == "attractions") {
                $("#submit-listing-form").removeAttr("action");
                $("#submit-listing-form").attr("action", "<?php echo base_url(); ?>Attractions/edit");

                $("#div-title").show();
                $("#title").removeAttr("required");
                $("#title").attr("required", "required");
                $("#div-events-category").hide();
                $("#events-category").removeAttr("required");
                $("#div-sales-category").hide();
                $("#sales-category").removeAttr("required");
                $("#div-coupons-category").hide();
                $("#coupons-category").removeAttr("required");
                $("#div-service-require-category").hide();
                $("#service-require-category").removeAttr("required");
                $("#div-service-providers-category").hide();
                $("#service-providers-category").removeAttr("required");
                $("#div-realty-category").hide();
                $("#realty-category").removeAttr("required");
                $("#div-nearby-stores-category").hide();
                $("#nearby-stores-category").removeAttr("required");
                $("#div-attractions-category").show();
                $("#attractions-category").removeAttr("required");
                $("#attractions-category").attr("required", "required");
                $("#div-hire-a-resource-category").hide();
                $("#hire-a-resource-category").removeAttr("required");
                $("#div-tickets-category").hide();
                $("#tickets-category").removeAttr("required");
                $("#div-learnings-category").hide();
                $("#learnings-category").removeAttr("required");
                $("#div-restaurants-category").hide();
                $("#restaurants-category").removeAttr("required");
                $("#div-rent-category").hide();
                $("#rent-category").removeAttr("required");
                $("#div-business-sales-category").hide();
                $("#business-sales-category").removeAttr("required");
                $("#div-short-term-hiring-category").hide();
                $("#short-term-hiring-category").removeAttr("required");
                $("#div-business-name").hide();
                $("#business-name").removeAttr("required");
                $("#div-tags").show();
                $("#tags").removeAttr("required");
                $("#tags").attr("required", "required");
                $("#div-openhouse-date").hide();
                $("#openhouse-date").removeAttr("required");
                $("#div-date").hide();
                $("#date").removeAttr("required");
                $("#div-start-date").hide();
                $("#start-date").removeAttr("required");
                $("#div-finish-date").hide();
                $("#finish-date").removeAttr("required");
                $("#div-time-start").hide();
                $("#time-start").removeAttr("required");
                $("#div-time-finish").hide();
                $("#time-finish").removeAttr("required");
                $("#div-open-hour").show();
                $("#open-hour").removeAttr("required");
                $("#open-hour").attr("required", "required");
                $("#div-close-hour").show();
                $("#close-hour").removeAttr("required");
                $("#close-hour").attr("required", "required");
                $("#div-details").show();
                $("#details").removeAttr("required");
                $("#details").attr("required", "required");
                $("#div-job-description").hide();
                $("#job-description").removeAttr("required");
                $("#div-price").hide();
                $("#price").removeAttr("required");
                $("#div-salary").hide();
                $("#salary").removeAttr("required");
                $("#div-hourly-rate").hide();
                $("#hourly-rate").removeAttr("required");
                $("#div-original-price").hide();
                $("#original-price").removeAttr("required");
                $("#div-discounted-price").hide();
                $("#discounted-price").removeAttr("required");

                $("#section-profile-option").show();
                $("#section-address").show();

                $("#zipcode").removeAttr("required");
                $("#zipcode").attr("required", "required");
                $("#contact-name").removeAttr("required");
                $("#contact-name").attr("required", "required");
                $("#contact-number").removeAttr("required");
                $("#contact-number").attr("required", "required");
                $("#contact-email").removeAttr("required");
                $("#contact-email").attr("required", "required");
                $("#contact-website").removeAttr("required");
                $("#contact-website").attr("required", "required");

                $("#section-jobs").hide();

                $("#jobs-type").removeAttr("required");
                $("#jobs-status").removeAttr("required");
                $("#jobs-experience").removeAttr("required");
                $("#jobs-education").removeAttr("required");
                $("#jobs-skill").removeAttr("required");
                $("#jobs-software").removeAttr("required");

                $("#section-realty").hide();

                $("#realty-bed").removeAttr("required");
                $("#realty-bath").removeAttr("required");
                $("#realty-lot").removeAttr("required");
                $("#realty-sewerage").removeAttr("required");
                $("#realty-water").removeAttr("required");
                $("#realty-gas").removeAttr("required");
                $("#realty-tax").removeAttr("required");
                $("#realty-mls").removeAttr("required");

                $("#section-gallery").show();


                $("#div-currency").show();
                $("#currency").removeAttr("required");
                $("#currency").attr("required", "required");


                $("#div-hire-a-resource-second-language").show();
                $("#language-hide").hide();
                $("#hire-a-resource-second-language").removeAttr("required");


                $("#section-social").hide();

                $("#social-facebook").removeAttr("required");
                $("#social-twitter").removeAttr("required");
                $("#social-linkedin").removeAttr("required");
                $("#social-instagram").removeAttr("required");

                $("#div-price-duration").hide();
                $("#price-duration").removeAttr("required");

                $("#div-address").hide();
                $("#address").removeAttr("required");

                $("#div-amount").hide();
                $("#amount").removeAttr("required");

                $("#div-work-details").hide();
                $("#work-details").removeAttr("required");
                $("#div-expected-hours").hide();
                $("#expected-hours").removeAttr("required");
                $("#div-pay").hide();
                $("#pay").removeAttr("required");
                $("#div-pay-duration").hide();
                $("#pay-duration").removeAttr("required");

                $("#section-match-friends").hide();

                $("#age").removeAttr("required");
                $("#gender").removeAttr("required");
                $("#about-yourself").removeAttr("required");
                $("#occupation").removeAttr("required");
                $("#religion").removeAttr("required");
                $("#height").removeAttr("required");
                $("#ethnicity").removeAttr("required");
                $("#body-type").removeAttr("required");
                $("#education").removeAttr("required");
                $("#ideal-match").removeAttr("required");
                $("#relationship-history").removeAttr("required");
                $("#lifestyle").removeAttr("required");

                var geocoder = new google.maps.Geocoder();

                geocoder.geocode({
                    'address': "<?php echo $data[0]->zipcode; ?>"
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var _latitude = results[0].geometry.location.lat().toString();
                        var _longitude = results[0].geometry.location.lng().toString();
                        var element = "listing-map";
                        var lat_element = "listing-latitude";
                        var long_element = "listing-longitude";
                        simpleMap(lat_element, _latitude, long_element, _longitude, element, true);
                    } else {
                        console.log("Location is not valid.....!");
                    }
                });
            } else if ("<?php echo $type; ?>" == "hire_a_resource") {
                $("#submit-listing-form").removeAttr("action");
                $("#submit-listing-form").attr("action", "<?php echo base_url(); ?>HireAResource/edit");

                $("#div-title").show();
                $("#title").removeAttr("required");
                $("#title").attr("required", "required");
                $("#div-events-category").hide();
                $("#events-category").removeAttr("required");
                $("#div-sales-category").hide();
                $("#sales-category").removeAttr("required");
                $("#div-coupons-category").hide();
                $("#coupons-category").removeAttr("required");
                $("#div-service-require-category").hide();
                $("#service-require-category").removeAttr("required");
                $("#div-service-providers-category").hide();
                $("#service-providers-category").removeAttr("required");
                $("#div-realty-category").hide();
                $("#realty-category").removeAttr("required");
                $("#div-nearby-stores-category").hide();
                $("#nearby-stores-category").removeAttr("required");
                $("#div-attractions-category").hide();
                $("#attractions-category").removeAttr("required");
                $("#div-hire-a-resource-category").show();
                $("#hire-a-resource-category").removeAttr("required");
                $("#hire-a-resource-category").attr("required", "required");
                $("#div-tickets-category").hide();
                $("#tickets-category").removeAttr("required");
                $("#div-learnings-category").hide();
                $("#learnings-category").removeAttr("required");
                $("#div-restaurants-category").hide();
                $("#restaurants-category").removeAttr("required");
                $("#div-rent-category").hide();
                $("#rent-category").removeAttr("required");
                $("#div-business-sales-category").hide();
                $("#business-sales-category").removeAttr("required");
                $("#div-short-term-hiring-category").hide();
                $("#short-term-hiring-category").removeAttr("required");
                $("#div-business-name").hide();
                $("#business-name").removeAttr("required");
                $("#div-tags").show();
                $("#tags").removeAttr("required");
                $("#tags").attr("required", "required");
                $("#div-openhouse-date").hide();
                $("#openhouse-date").removeAttr("required");
                $("#div-date").hide();
                $("#date").removeAttr("required");
                $("#div-start-date").hide();
                $("#start-date").removeAttr("required");
                $("#div-finish-date").hide();
                $("#finish-date").removeAttr("required");
                $("#div-time-start").hide();
                $("#time-start").removeAttr("required");
                $("#div-time-finish").hide();
                $("#time-finish").removeAttr("required");
                $("#div-open-hour").hide();
                $("#open-hour").removeAttr("required");
                $("#div-close-hour").hide();
                $("#close-hour").removeAttr("required");
                $("#div-details").show();
                $("#details").removeAttr("required");
                $("#details").attr("required", "required");
                $("#div-job-description").hide();
                $("#job-description").removeAttr("required");
                $("#div-price").hide();
                $("#price").removeAttr("required");
                $("#div-salary").hide();
                $("#salary").removeAttr("required");
                $("#div-hourly-rate").show();
                $("#hourly-rate").removeAttr("required");
                $("#hourly-rate").attr("required", "required");
                $("#div-original-price").hide();
                $("#original-price").removeAttr("required");
                $("#div-discounted-price").hide();
                $("#discounted-price").removeAttr("required");

                $("#section-profile-option").show();
                $("#section-address").show();

                $("#zipcode").removeAttr("required");
                $("#zipcode").attr("required", "required");
                $("#contact-name").removeAttr("required");
                $("#contact-name").attr("required", "required");
                $("#contact-number").removeAttr("required");
                $("#contact-number").attr("required", "required");
                $("#contact-email").removeAttr("required");
                $("#contact-email").attr("required", "required");
                $("#contact-website").removeAttr("required");
                $("#contact-website").attr("required", "required");

                $("#section-jobs").hide();

                $("#jobs-type").removeAttr("required");
                $("#jobs-status").removeAttr("required");
                $("#jobs-experience").removeAttr("required");
                $("#jobs-education").removeAttr("required");
                $("#jobs-skill").removeAttr("required");
                $("#jobs-software").removeAttr("required");

                $("#section-realty").hide();

                $("#realty-bed").removeAttr("required");
                $("#realty-bath").removeAttr("required");
                $("#realty-lot").removeAttr("required");
                $("#realty-sewerage").removeAttr("required");
                $("#realty-water").removeAttr("required");
                $("#realty-gas").removeAttr("required");
                $("#realty-tax").removeAttr("required");
                $("#realty-mls").removeAttr("required");

                $("#section-gallery").show();


                $("#div-currency").show();
                $("#currency").removeAttr("required");
                $("#currency").attr("required", "required");


                $("#div-hire-a-resource-second-language").show();
                $("#hire-a-resource-second-language").removeAttr("required");
                $("#hire-a-resource-second-language").attr("required", "required");


                $("#section-social").hide();

                $("#social-facebook").removeAttr("required");
                $("#social-twitter").removeAttr("required");
                $("#social-linkedin").removeAttr("required");
                $("#social-instagram").removeAttr("required");

                $("#div-price-duration").hide();
                $("#price-duration").removeAttr("required");

                $("#div-address").hide();
                $("#address").removeAttr("required");

                $("#div-amount").hide();
                $("#amount").removeAttr("required");

                $("#div-work-details").hide();
                $("#work-details").removeAttr("required");
                $("#div-expected-hours").hide();
                $("#expected-hours").removeAttr("required");
                $("#div-pay").hide();
                $("#pay").removeAttr("required");
                $("#div-pay-duration").hide();
                $("#pay-duration").removeAttr("required");

                $("#section-match-friends").hide();

                $("#age").removeAttr("required");
                $("#gender").removeAttr("required");
                $("#about-yourself").removeAttr("required");
                $("#occupation").removeAttr("required");
                $("#religion").removeAttr("required");
                $("#height").removeAttr("required");
                $("#ethnicity").removeAttr("required");
                $("#body-type").removeAttr("required");
                $("#education").removeAttr("required");
                $("#ideal-match").removeAttr("required");
                $("#relationship-history").removeAttr("required");
                $("#lifestyle").removeAttr("required");

                var geocoder = new google.maps.Geocoder();

                geocoder.geocode({
                    'address': "<?php echo $data[0]->zipcode; ?>"
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var _latitude = results[0].geometry.location.lat().toString();
                        var _longitude = results[0].geometry.location.lng().toString();
                        var element = "listing-map";
                        var lat_element = "listing-latitude";
                        var long_element = "listing-longitude";
                        simpleMap(lat_element, _latitude, long_element, _longitude, element, true);
                    } else {
                        console.log("Location is not valid.....!");
                    }
                });
            } else if ("<?php echo $type; ?>" == "tickets") {
                $("#submit-listing-form").removeAttr("action");
                $("#submit-listing-form").attr("action", "<?php echo base_url(); ?>Tickets/edit");

                $("#div-title").show();
                $("#title").removeAttr("required");
                $("#title").attr("required", "required");
                $("#div-events-category").hide();
                $("#events-category").removeAttr("required");
                $("#div-sales-category").hide();
                $("#sales-category").removeAttr("required");
                $("#div-coupons-category").hide();
                $("#coupons-category").removeAttr("required");
                $("#div-service-require-category").hide();
                $("#service-require-category").removeAttr("required");
                $("#div-service-providers-category").hide();
                $("#service-providers-category").removeAttr("required");
                $("#div-realty-category").hide();
                $("#realty-category").removeAttr("required");
                $("#div-nearby-stores-category").hide();
                $("#nearby-stores-category").removeAttr("required");
                $("#div-attractions-category").hide();
                $("#attractions-category").removeAttr("required");
                $("#div-hire-a-resource-category").hide();
                $("#hire-a-resource-category").removeAttr("required");
                $("#div-tickets-category").show();
                $("#tickets-category").removeAttr("required");
                $("#tickets-category").attr("required", "required");
                $("#div-learnings-category").hide();
                $("#learnings-category").removeAttr("required");
                $("#div-restaurants-category").hide();
                $("#restaurants-category").removeAttr("required");
                $("#div-rent-category").hide();
                $("#rent-category").removeAttr("required");
                $("#div-business-sales-category").hide();
                $("#business-sales-category").removeAttr("required");
                $("#div-short-term-hiring-category").hide();
                $("#short-term-hiring-category").removeAttr("required");
                $("#div-business-name").hide();
                $("#business-name").removeAttr("required");
                $("#div-tags").show();
                $("#tags").removeAttr("required");
                $("#tags").attr("required", "required");
                $("#div-openhouse-date").hide();
                $("#openhouse-date").removeAttr("required");
                $("#div-date").show();
                $("#date").removeAttr("required");
                $("#date").attr("required", "required");
                $("#div-start-date").hide();
                $("#start-date").removeAttr("required");
                $("#div-finish-date").hide();
                $("#finish-date").removeAttr("required");
                $("#div-time-start").hide();
                $("#time-start").removeAttr("required");
                $("#div-time-finish").hide();
                $("#time-finish").removeAttr("required");
                $("#div-open-hour").hide();
                $("#open-hour").removeAttr("required");
                $("#div-close-hour").hide();
                $("#close-hour").removeAttr("required");
                $("#div-details").show();
                $("#details").removeAttr("required");
                $("#details").attr("required", "required");
                $("#div-job-description").hide();
                $("#job-description").removeAttr("required");
                $("#div-price").show();
                $("#price").removeAttr("required");
                $("#price").attr("required", "required");
                $("#div-salary").hide();
                $("#salary").removeAttr("required");
                $("#div-hourly-rate").hide();
                $("#hourly-rate").removeAttr("required");
                $("#div-original-price").hide();
                $("#original-price").removeAttr("required");
                $("#div-discounted-price").hide();
                $("#discounted-price").removeAttr("required");

                $("#section-profile-option").show();
                $("#section-address").show();

                $("#zipcode").removeAttr("required");
                $("#zipcode").attr("required", "required");
                $("#contact-name").removeAttr("required");
                $("#contact-name").attr("required", "required");
                $("#contact-number").removeAttr("required");
                $("#contact-number").attr("required", "required");
                $("#contact-email").removeAttr("required");
                $("#contact-email").attr("required", "required");
                $("#contact-website").removeAttr("required");
                $("#contact-website").attr("required", "required");

                $("#section-jobs").hide();

                $("#jobs-type").removeAttr("required");
                $("#jobs-status").removeAttr("required");
                $("#jobs-experience").removeAttr("required");
                $("#jobs-education").removeAttr("required");
                $("#jobs-skill").removeAttr("required");
                $("#jobs-software").removeAttr("required");

                $("#section-realty").hide();

                $("#realty-bed").removeAttr("required");
                $("#realty-bath").removeAttr("required");
                $("#realty-lot").removeAttr("required");
                $("#realty-sewerage").removeAttr("required");
                $("#realty-water").removeAttr("required");
                $("#realty-gas").removeAttr("required");
                $("#realty-tax").removeAttr("required");
                $("#realty-mls").removeAttr("required");

                $("#section-gallery").show();


                $("#div-currency").show();
                $("#currency").removeAttr("required");
                $("#currency").attr("required", "required");


                $("#div-hire-a-resource-second-language").show();
                $("#language-hide").hide();
                $("#hire-a-resource-second-language").removeAttr("required");


                $("#section-social").hide();

                $("#social-facebook").removeAttr("required");
                $("#social-twitter").removeAttr("required");
                $("#social-linkedin").removeAttr("required");
                $("#social-instagram").removeAttr("required");

                $("#div-price-duration").hide();
                $("#price-duration").removeAttr("required");

                $("#div-address").hide();
                $("#address").removeAttr("required");

                $("#div-amount").hide();
                $("#amount").removeAttr("required");

                $("#div-work-details").hide();
                $("#work-details").removeAttr("required");
                $("#div-expected-hours").hide();
                $("#expected-hours").removeAttr("required");
                $("#div-pay").hide();
                $("#pay").removeAttr("required");
                $("#div-pay-duration").hide();
                $("#pay-duration").removeAttr("required");

                $("#section-match-friends").hide();

                $("#age").removeAttr("required");
                $("#gender").removeAttr("required");
                $("#about-yourself").removeAttr("required");
                $("#occupation").removeAttr("required");
                $("#religion").removeAttr("required");
                $("#height").removeAttr("required");
                $("#ethnicity").removeAttr("required");
                $("#body-type").removeAttr("required");
                $("#education").removeAttr("required");
                $("#ideal-match").removeAttr("required");
                $("#relationship-history").removeAttr("required");
                $("#lifestyle").removeAttr("required");

                var geocoder = new google.maps.Geocoder();

                geocoder.geocode({
                    'address': "<?php echo $data[0]->zipcode; ?>"
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var _latitude = results[0].geometry.location.lat().toString();
                        var _longitude = results[0].geometry.location.lng().toString();
                        var element = "listing-map";
                        var lat_element = "listing-latitude";
                        var long_element = "listing-longitude";
                        simpleMap(lat_element, _latitude, long_element, _longitude, element, true);
                    } else {
                        console.log("Location is not valid.....!");
                    }
                });
            } else if ("<?php echo $type; ?>" == "store_closures") {
                $("#submit-listing-form").removeAttr("action");
                $("#submit-listing-form").attr("action", "<?php echo base_url(); ?>StoreClosures/edit");

                $("#div-title").show();
                $("#title").removeAttr("required");
                $("#title").attr("required", "required");
                $("#div-events-category").hide();
                $("#events-category").removeAttr("required");
                $("#div-sales-category").hide();
                $("#sales-category").removeAttr("required");
                $("#div-coupons-category").hide();
                $("#coupons-category").removeAttr("required");
                $("#div-service-require-category").hide();
                $("#service-require-category").removeAttr("required");
                $("#div-service-providers-category").hide();
                $("#service-providers-category").removeAttr("required");
                $("#div-realty-category").hide();
                $("#realty-category").removeAttr("required");
                $("#div-nearby-stores-category").hide();
                $("#nearby-stores-category").removeAttr("required");
                $("#div-attractions-category").hide();
                $("#attractions-category").removeAttr("required");
                $("#div-hire-a-resource-category").hide();
                $("#hire-a-resource-category").removeAttr("required");
                $("#div-tickets-category").hide();
                $("#tickets-category").removeAttr("required");
                $("#div-learnings-category").hide();
                $("#learnings-category").removeAttr("required");
                $("#div-restaurants-category").hide();
                $("#restaurants-category").removeAttr("required");
                $("#div-rent-category").hide();
                $("#rent-category").removeAttr("required");
                $("#div-business-sales-category").hide();
                $("#business-sales-category").removeAttr("required");
                $("#div-short-term-hiring-category").hide();
                $("#short-term-hiring-category").removeAttr("required");
                $("#div-business-name").show();
                $("#business-name").removeAttr("required");
                $("#business-name").attr("required", "required");
                $("#div-tags").show();
                $("#tags").removeAttr("required");
                $("#tags").attr("required", "required");
                $("#div-openhouse-date").hide();
                $("#openhouse-date").removeAttr("required");
                $("#div-date").hide();
                $("#date").removeAttr("required");
                $("#div-start-date").hide();
                $("#start-date").removeAttr("required");
                $("#div-finish-date").hide();
                $("#finish-date").removeAttr("required");
                $("#div-time-start").hide();
                $("#time-start").removeAttr("required");
                $("#div-time-finish").hide();
                $("#time-finish").removeAttr("required");
                $("#div-open-hour").hide();
                $("#open-hour").removeAttr("required");
                $("#div-close-hour").hide();
                $("#close-hour").removeAttr("required");
                $("#div-details").show();
                $("#details").removeAttr("required");
                $("#details").attr("required", "required");
                $("#div-job-description").hide();
                $("#job-description").removeAttr("required");
                $("#div-price").hide();
                $("#price").removeAttr("required");
                $("#div-salary").hide();
                $("#salary").removeAttr("required");
                $("#div-hourly-rate").hide();
                $("#hourly-rate").removeAttr("required");
                $("#div-original-price").hide();
                $("#original-price").removeAttr("required");
                $("#div-discounted-price").hide();
                $("#discounted-price").removeAttr("required");

                $("#section-profile-option").show();
                $("#section-address").show();

                $("#zipcode").removeAttr("required");
                $("#zipcode").attr("required", "required");
                $("#contact-name").removeAttr("required");
                $("#contact-name").attr("required", "required");
                $("#contact-number").removeAttr("required");
                $("#contact-number").attr("required", "required");
                $("#contact-email").removeAttr("required");
                $("#contact-email").attr("required", "required");
                $("#contact-website").removeAttr("required");
                $("#contact-website").attr("required", "required");

                $("#section-jobs").hide();

                $("#jobs-type").removeAttr("required");
                $("#jobs-status").removeAttr("required");
                $("#jobs-experience").removeAttr("required");
                $("#jobs-education").removeAttr("required");
                $("#jobs-skill").removeAttr("required");
                $("#jobs-software").removeAttr("required");

                $("#section-realty").hide();

                $("#realty-bed").removeAttr("required");
                $("#realty-bath").removeAttr("required");
                $("#realty-lot").removeAttr("required");
                $("#realty-sewerage").removeAttr("required");
                $("#realty-water").removeAttr("required");
                $("#realty-gas").removeAttr("required");
                $("#realty-tax").removeAttr("required");
                $("#realty-mls").removeAttr("required");

                $("#section-gallery").show();


                $("#div-currency").hide();
                $("#currency").removeAttr("required");


                $("#div-hire-a-resource-second-language").show();
                $("#language-hide").hide();
                $("#hire-a-resource-second-language").removeAttr("required");


                $("#section-social").hide();

                $("#social-facebook").removeAttr("required");
                $("#social-twitter").removeAttr("required");
                $("#social-linkedin").removeAttr("required");
                $("#social-instagram").removeAttr("required");

                $("#div-price-duration").hide();
                $("#price-duration").removeAttr("required");

                $("#div-address").hide();
                $("#address").removeAttr("required");

                $("#div-amount").hide();
                $("#amount").removeAttr("required");

                $("#div-work-details").hide();
                $("#work-details").removeAttr("required");
                $("#div-expected-hours").hide();
                $("#expected-hours").removeAttr("required");
                $("#div-pay").hide();
                $("#pay").removeAttr("required");
                $("#div-pay-duration").hide();
                $("#pay-duration").removeAttr("required");

                $("#section-match-friends").hide();

                $("#age").removeAttr("required");
                $("#gender").removeAttr("required");
                $("#about-yourself").removeAttr("required");
                $("#occupation").removeAttr("required");
                $("#religion").removeAttr("required");
                $("#height").removeAttr("required");
                $("#ethnicity").removeAttr("required");
                $("#body-type").removeAttr("required");
                $("#education").removeAttr("required");
                $("#ideal-match").removeAttr("required");
                $("#relationship-history").removeAttr("required");
                $("#lifestyle").removeAttr("required");

                var geocoder = new google.maps.Geocoder();

                geocoder.geocode({
                    'address': "<?php echo $data[0]->zipcode; ?>"
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var _latitude = results[0].geometry.location.lat().toString();
                        var _longitude = results[0].geometry.location.lng().toString();
                        var element = "listing-map";
                        var lat_element = "listing-latitude";
                        var long_element = "listing-longitude";
                        simpleMap(lat_element, _latitude, long_element, _longitude, element, true);
                    } else {
                        console.log("Location is not valid.....!");
                    }
                });
            } else if ("<?php echo $type; ?>" == "learnings") {
                $("#submit-listing-form").removeAttr("action");
                $("#submit-listing-form").attr("action", "<?php echo base_url(); ?>Learnings/edit");

                $("#div-title").show();
                $("#title").removeAttr("required");
                $("#title").attr("required", "required");
                $("#div-events-category").hide();
                $("#events-category").removeAttr("required");
                $("#div-sales-category").hide();
                $("#sales-category").removeAttr("required");
                $("#div-coupons-category").hide();
                $("#coupons-category").removeAttr("required");
                $("#div-service-require-category").hide();
                $("#service-require-category").removeAttr("required");
                $("#div-service-providers-category").hide();
                $("#service-providers-category").removeAttr("required");
                $("#div-realty-category").hide();
                $("#realty-category").removeAttr("required");
                $("#div-nearby-stores-category").hide();
                $("#nearby-stores-category").removeAttr("required");
                $("#div-attractions-category").hide();
                $("#attractions-category").removeAttr("required");
                $("#div-hire-a-resource-category").hide();
                $("#hire-a-resource-category").removeAttr("required");
                $("#div-tickets-category").hide();
                $("#tickets-category").removeAttr("required");
                $("#div-learnings-category").show();
                $("#learnings-category").removeAttr("required");
                $("#learnings-category").attr("required", "required");
                $("#div-restaurants-category").hide();
                $("#restaurants-category").removeAttr("required");
                $("#div-rent-category").hide();
                $("#rent-category").removeAttr("required");
                $("#div-business-sales-category").hide();
                $("#business-sales-category").removeAttr("required");
                $("#div-short-term-hiring-category").hide();
                $("#short-term-hiring-category").removeAttr("required");
                $("#div-business-name").show();
                $("#business-name").removeAttr("required");
                $("#business-name").attr("required", "required");
                $("#div-tags").show();
                $("#tags").removeAttr("required");
                $("#tags").attr("required", "required");
                $("#div-openhouse-date").hide();
                $("#openhouse-date").removeAttr("required");
                $("#div-date").hide();
                $("#date").removeAttr("required");
                $("#div-start-date").hide();
                $("#start-date").removeAttr("required");
                $("#div-finish-date").hide();
                $("#finish-date").removeAttr("required");
                $("#div-time-start").hide();
                $("#time-start").removeAttr("required");
                $("#div-time-finish").hide();
                $("#time-finish").removeAttr("required");
                $("#div-open-hour").show();
                $("#open-hour").removeAttr("required");
                $("#open-hour").attr("required", "required");
                $("#div-close-hour").show();
                $("#close-hour").removeAttr("required");
                $("#close-hour").attr("required", "required");
                $("#div-details").show();
                $("#details").removeAttr("required");
                $("#details").attr("required", "required");
                $("#div-job-description").hide();
                $("#job-description").removeAttr("required");
                $("#div-price").hide();
                $("#price").removeAttr("required");
                $("#div-salary").hide();
                $("#salary").removeAttr("required");
                $("#div-hourly-rate").hide();
                $("#hourly-rate").removeAttr("required");
                $("#div-original-price").hide();
                $("#original-price").removeAttr("required");
                $("#div-discounted-price").hide();
                $("#discounted-price").removeAttr("required");

                $("#section-profile-option").show();
                $("#section-address").show();

                $("#zipcode").removeAttr("required");
                $("#zipcode").attr("required", "required");
                $("#contact-name").removeAttr("required");
                $("#contact-name").attr("required", "required");
                $("#contact-number").removeAttr("required");
                $("#contact-number").attr("required", "required");
                $("#contact-email").removeAttr("required");
                $("#contact-email").attr("required", "required");
                $("#contact-website").removeAttr("required");
                $("#contact-website").attr("required", "required");

                $("#section-jobs").hide();

                $("#jobs-type").removeAttr("required");
                $("#jobs-status").removeAttr("required");
                $("#jobs-experience").removeAttr("required");
                $("#jobs-education").removeAttr("required");
                $("#jobs-skill").removeAttr("required");
                $("#jobs-software").removeAttr("required");

                $("#section-realty").hide();

                $("#realty-bed").removeAttr("required");
                $("#realty-bath").removeAttr("required");
                $("#realty-lot").removeAttr("required");
                $("#realty-sewerage").removeAttr("required");
                $("#realty-water").removeAttr("required");
                $("#realty-gas").removeAttr("required");
                $("#realty-tax").removeAttr("required");
                $("#realty-mls").removeAttr("required");

                $("#section-gallery").show();


                $("#div-currency").hide();
                $("#currency").removeAttr("required");


                $("#div-hire-a-resource-second-language").show();
                $("#language-hide").hide();
                $("#hire-a-resource-second-language").removeAttr("required");


                $("#section-social").hide();

                $("#social-facebook").removeAttr("required");
                $("#social-twitter").removeAttr("required");
                $("#social-linkedin").removeAttr("required");
                $("#social-instagram").removeAttr("required");

                $("#div-price-duration").hide();
                $("#price-duration").removeAttr("required");

                $("#div-address").hide();
                $("#address").removeAttr("required");

                $("#div-amount").hide();
                $("#amount").removeAttr("required");

                $("#div-work-details").hide();
                $("#work-details").removeAttr("required");
                $("#div-expected-hours").hide();
                $("#expected-hours").removeAttr("required");
                $("#div-pay").hide();
                $("#pay").removeAttr("required");
                $("#div-pay-duration").hide();
                $("#pay-duration").removeAttr("required");

                $("#section-match-friends").hide();

                $("#age").removeAttr("required");
                $("#gender").removeAttr("required");
                $("#about-yourself").removeAttr("required");
                $("#occupation").removeAttr("required");
                $("#religion").removeAttr("required");
                $("#height").removeAttr("required");
                $("#ethnicity").removeAttr("required");
                $("#body-type").removeAttr("required");
                $("#education").removeAttr("required");
                $("#ideal-match").removeAttr("required");
                $("#relationship-history").removeAttr("required");
                $("#lifestyle").removeAttr("required");

                var geocoder = new google.maps.Geocoder();

                geocoder.geocode({
                    'address': "<?php echo $data[0]->zipcode; ?>"
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var _latitude = results[0].geometry.location.lat().toString();
                        var _longitude = results[0].geometry.location.lng().toString();
                        var element = "listing-map";
                        var lat_element = "listing-latitude";
                        var long_element = "listing-longitude";
                        simpleMap(lat_element, _latitude, long_element, _longitude, element, true);
                    } else {
                        console.log("Location is not valid.....!");
                    }
                });
            } else if ("<?php echo $type; ?>" == "discards") {
                $("#submit-listing-form").removeAttr("action");
                $("#submit-listing-form").attr("action", "<?php echo base_url(); ?>Discards/edit");

                $("#div-title").show();
                $("#title").removeAttr("required");
                $("#title").attr("required", "required");
                $("#div-events-category").hide();
                $("#events-category").removeAttr("required");
                $("#div-sales-category").hide();
                $("#sales-category").removeAttr("required");
                $("#div-coupons-category").hide();
                $("#coupons-category").removeAttr("required");
                $("#div-service-require-category").hide();
                $("#service-require-category").removeAttr("required");
                $("#div-service-providers-category").hide();
                $("#service-providers-category").removeAttr("required");
                $("#div-realty-category").hide();
                $("#realty-category").removeAttr("required");
                $("#div-nearby-stores-category").hide();
                $("#nearby-stores-category").removeAttr("required");
                $("#div-attractions-category").hide();
                $("#attractions-category").removeAttr("required");
                $("#div-hire-a-resource-category").hide();
                $("#hire-a-resource-category").removeAttr("required");
                $("#div-tickets-category").hide();
                $("#tickets-category").removeAttr("required");
                $("#div-learnings-category").hide();
                $("#learnings-category").removeAttr("required");
                $("#div-restaurants-category").hide();
                $("#restaurants-category").removeAttr("required");
                $("#div-rent-category").hide();
                $("#rent-category").removeAttr("required");
                $("#div-business-sales-category").hide();
                $("#business-sales-category").removeAttr("required");
                $("#div-short-term-hiring-category").hide();
                $("#short-term-hiring-category").removeAttr("required");
                $("#div-business-name").hide();
                $("#business-name").removeAttr("required");
                $("#div-tags").show();
                $("#tags").removeAttr("required");
                $("#tags").attr("required", "required");
                $("#div-openhouse-date").hide();
                $("#openhouse-date").removeAttr("required");
                $("#div-date").hide();
                $("#date").removeAttr("required");
                $("#div-start-date").hide();
                $("#start-date").removeAttr("required");
                $("#div-finish-date").hide();
                $("#finish-date").removeAttr("required");
                $("#div-time-start").hide();
                $("#time-start").removeAttr("required");
                $("#div-time-finish").hide();
                $("#time-finish").removeAttr("required");
                $("#div-open-hour").hide();
                $("#open-hour").removeAttr("required");
                $("#div-close-hour").hide();
                $("#close-hour").removeAttr("required");
                $("#div-details").show();
                $("#details").removeAttr("required");
                $("#details").attr("required", "required");
                $("#div-job-description").hide();
                $("#job-description").removeAttr("required");
                $("#div-price").hide();
                $("#price").removeAttr("required");
                $("#div-salary").hide();
                $("#salary").removeAttr("required");
                $("#div-hourly-rate").hide();
                $("#hourly-rate").removeAttr("required");
                $("#div-original-price").hide();
                $("#original-price").removeAttr("required");
                $("#div-discounted-price").hide();
                $("#discounted-price").removeAttr("required");

                $("#section-profile-option").show();
                $("#section-address").show();

                $("#zipcode").removeAttr("required");
                $("#zipcode").attr("required", "required");
                $("#contact-name").removeAttr("required");
                $("#contact-name").attr("required", "required");
                $("#contact-number").removeAttr("required");
                $("#contact-number").attr("required", "required");
                $("#contact-email").removeAttr("required");
                $("#contact-email").attr("required", "required");
                $("#contact-website").removeAttr("required");
                $("#contact-website").attr("required", "required");

                $("#section-jobs").hide();

                $("#jobs-type").removeAttr("required");
                $("#jobs-status").removeAttr("required");
                $("#jobs-experience").removeAttr("required");
                $("#jobs-education").removeAttr("required");
                $("#jobs-skill").removeAttr("required");
                $("#jobs-software").removeAttr("required");

                $("#section-realty").hide();

                $("#realty-bed").removeAttr("required");
                $("#realty-bath").removeAttr("required");
                $("#realty-lot").removeAttr("required");
                $("#realty-sewerage").removeAttr("required");
                $("#realty-water").removeAttr("required");
                $("#realty-gas").removeAttr("required");
                $("#realty-tax").removeAttr("required");
                $("#realty-mls").removeAttr("required");

                $("#section-gallery").show();


                $("#div-currency").hide();
                $("#currency").removeAttr("required");


                $("#div-hire-a-resource-second-language").show();
                $("#language-hide").hide();
                $("#hire-a-resource-second-language").removeAttr("required");


                $("#section-social").hide();

                $("#social-facebook").removeAttr("required");
                $("#social-twitter").removeAttr("required");
                $("#social-linkedin").removeAttr("required");
                $("#social-instagram").removeAttr("required");

                $("#div-price-duration").hide();
                $("#price-duration").removeAttr("required");

                $("#div-address").hide();
                $("#address").removeAttr("required");

                $("#div-amount").hide();
                $("#amount").removeAttr("required");

                $("#div-work-details").hide();
                $("#work-details").removeAttr("required");
                $("#div-expected-hours").hide();
                $("#expected-hours").removeAttr("required");
                $("#div-pay").hide();
                $("#pay").removeAttr("required");
                $("#div-pay-duration").hide();
                $("#pay-duration").removeAttr("required");

                $("#section-match-friends").hide();

                $("#age").removeAttr("required");
                $("#gender").removeAttr("required");
                $("#about-yourself").removeAttr("required");
                $("#occupation").removeAttr("required");
                $("#religion").removeAttr("required");
                $("#height").removeAttr("required");
                $("#ethnicity").removeAttr("required");
                $("#body-type").removeAttr("required");
                $("#education").removeAttr("required");
                $("#ideal-match").removeAttr("required");
                $("#relationship-history").removeAttr("required");
                $("#lifestyle").removeAttr("required");

                var geocoder = new google.maps.Geocoder();

                geocoder.geocode({
                    'address': "<?php echo $data[0]->zipcode; ?>"
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var _latitude = results[0].geometry.location.lat().toString();
                        var _longitude = results[0].geometry.location.lng().toString();
                        var element = "listing-map";
                        var lat_element = "listing-latitude";
                        var long_element = "listing-longitude";
                        simpleMap(lat_element, _latitude, long_element, _longitude, element, true);
                    } else {
                        console.log("Location is not valid.....!");
                    }
                });
            } else if ("<?php echo $type; ?>" == "restaurants") {
                $("#submit-listing-form").removeAttr("action");
                $("#submit-listing-form").attr("action", "<?php echo base_url(); ?>Restaurants/insert");

                $("#div-title").show();
                $("#title").removeAttr("required");
                $("#title").attr("required", "required");
                $("#div-events-category").hide();
                $("#events-category").removeAttr("required");
                $("#div-sales-category").hide();
                $("#sales-category").removeAttr("required");
                $("#div-coupons-category").hide();
                $("#coupons-category").removeAttr("required");
                $("#div-service-require-category").hide();
                $("#service-require-category").removeAttr("required");
                $("#div-service-providers-category").hide();
                $("#service-providers-category").removeAttr("required");
                $("#div-realty-category").hide();
                $("#realty-category").removeAttr("required");
                $("#div-nearby-stores-category").hide();
                $("#nearby-stores-category").removeAttr("required");
                $("#div-attractions-category").hide();
                $("#attractions-category").removeAttr("required");
                $("#div-hire-a-resource-category").hide();
                $("#hire-a-resource-category").removeAttr("required");
                $("#div-tickets-category").hide();
                $("#tickets-category").removeAttr("required");
                $("#div-learnings-category").hide();
                $("#learnings-category").removeAttr("required");
                $("#div-restaurants-category").show();
                $("#restaurants-category").removeAttr("required");
                $("#restaurants-category").attr("required", "required");
                $("#div-rent-category").hide();
                $("#rent-category").removeAttr("required");
                $("#div-business-sales-category").hide();
                $("#business-sales-category").removeAttr("required");
                $("#div-short-term-hiring-category").hide();
                $("#short-term-hiring-category").removeAttr("required");
                $("#div-business-name").hide();
                $("#business-name").removeAttr("required");
                $("#div-tags").show();
                $("#tags").removeAttr("required");
                $("#tags").attr("required", "required");
                $("#div-openhouse-date").hide();
                $("#openhouse-date").removeAttr("required");
                $("#div-date").hide();
                $("#date").removeAttr("required");
                $("#div-start-date").hide();
                $("#start-date").removeAttr("required");
                $("#div-finish-date").hide();
                $("#finish-date").removeAttr("required");
                $("#div-time-start").hide();
                $("#time-start").removeAttr("required");
                $("#div-time-finish").hide();
                $("#time-finish").removeAttr("required");
                $("#div-open-hour").show();
                $("#open-hour").removeAttr("required");
                $("#open-hour").attr("required", "required");
                $("#div-close-hour").show();
                $("#close-hour").removeAttr("required");
                $("#close-hour").attr("required", "required");
                $("#div-details").show();
                $("#details").removeAttr("required");
                $("#details").attr("required", "required");
                $("#div-job-description").hide();
                $("#job-description").removeAttr("required");
                $("#div-price").hide();
                $("#price").removeAttr("required");
                $("#div-salary").hide();
                $("#salary").removeAttr("required");
                $("#div-hourly-rate").hide();
                $("#hourly-rate").removeAttr("required");
                $("#div-original-price").hide();
                $("#original-price").removeAttr("required");
                $("#div-discounted-price").hide();
                $("#discounted-price").removeAttr("required");

                $("#section-profile-option").show();
                $("#section-address").show();

                $("#zipcode").removeAttr("required");
                $("#zipcode").attr("required", "required");
                $("#contact-name").removeAttr("required");
                $("#contact-name").attr("required", "required");
                $("#contact-number").removeAttr("required");
                $("#contact-number").attr("required", "required");
                $("#contact-email").removeAttr("required");
                $("#contact-email").attr("required", "required");
                $("#contact-website").removeAttr("required");
                $("#contact-website").attr("required", "required");

                $("#section-jobs").hide();

                $("#jobs-type").removeAttr("required");
                $("#jobs-status").removeAttr("required");
                $("#jobs-experience").removeAttr("required");
                $("#jobs-education").removeAttr("required");
                $("#jobs-skill").removeAttr("required");
                $("#jobs-software").removeAttr("required");

                $("#section-realty").hide();

                $("#realty-bed").removeAttr("required");
                $("#realty-bath").removeAttr("required");
                $("#realty-lot").removeAttr("required");
                $("#realty-sewerage").removeAttr("required");
                $("#realty-water").removeAttr("required");
                $("#realty-gas").removeAttr("required");
                $("#realty-tax").removeAttr("required");
                $("#realty-mls").removeAttr("required");

                $("#section-gallery").show();


                $("#div-currency").hide();
                $("#currency").removeAttr("required");


                $("#div-hire-a-resource-second-language").show();
                $("#language-hide").hide();
                $("#hire-a-resource-second-language").removeAttr("required");


                $("#section-social").hide();

                $("#social-facebook").removeAttr("required");
                $("#social-twitter").removeAttr("required");
                $("#social-linkedin").removeAttr("required");
                $("#social-instagram").removeAttr("required");

                $("#div-price-duration").hide();
                $("#price-duration").removeAttr("required");

                $("#div-address").hide();
                $("#address").removeAttr("required");

                $("#div-amount").hide();
                $("#amount").removeAttr("required");

                $("#div-work-details").hide();
                $("#work-details").removeAttr("required");
                $("#div-expected-hours").hide();
                $("#expected-hours").removeAttr("required");
                $("#div-pay").hide();
                $("#pay").removeAttr("required");
                $("#div-pay-duration").hide();
                $("#pay-duration").removeAttr("required");

                $("#section-match-friends").hide();

                $("#age").removeAttr("required");
                $("#gender").removeAttr("required");
                $("#about-yourself").removeAttr("required");
                $("#occupation").removeAttr("required");
                $("#religion").removeAttr("required");
                $("#height").removeAttr("required");
                $("#ethnicity").removeAttr("required");
                $("#body-type").removeAttr("required");
                $("#education").removeAttr("required");
                $("#ideal-match").removeAttr("required");
                $("#relationship-history").removeAttr("required");
                $("#lifestyle").removeAttr("required");

                var geocoder = new google.maps.Geocoder();

                geocoder.geocode({
                    'address': "<?php echo $data[0]->zipcode; ?>"
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var _latitude = results[0].geometry.location.lat().toString();
                        var _longitude = results[0].geometry.location.lng().toString();
                        var element = "listing-map";
                        var lat_element = "listing-latitude";
                        var long_element = "listing-longitude";
                        simpleMap(lat_element, _latitude, long_element, _longitude, element, true);
                    } else {
                        console.log("Location is not valid.....!");
                    }
                });
            } else if ("<?php echo $type; ?>" == "rent") {
                $("#submit-listing-form").removeAttr("action");
                $("#submit-listing-form").attr("action", "<?php echo base_url(); ?>Rent/edit");

                $("#div-title").show();
                $("#title").removeAttr("required");
                $("#title").attr("required", "required");
                $("#div-events-category").hide();
                $("#events-category").removeAttr("required");
                $("#div-sales-category").hide();
                $("#sales-category").removeAttr("required");
                $("#div-coupons-category").hide();
                $("#coupons-category").removeAttr("required");
                $("#div-service-require-category").hide();
                $("#service-require-category").removeAttr("required");
                $("#div-service-providers-category").hide();
                $("#service-providers-category").removeAttr("required");
                $("#div-realty-category").hide();
                $("#realty-category").removeAttr("required");
                $("#div-nearby-stores-category").hide();
                $("#nearby-stores-category").removeAttr("required");
                $("#div-attractions-category").hide();
                $("#attractions-category").removeAttr("required");
                $("#div-hire-a-resource-category").hide();
                $("#hire-a-resource-category").removeAttr("required");
                $("#div-tickets-category").hide();
                $("#tickets-category").removeAttr("required");
                $("#div-learnings-category").hide();
                $("#learnings-category").removeAttr("required");
                $("#div-restaurants-category").hide();
                $("#restaurants-category").removeAttr("required");
                $("#div-rent-category").show();
                $("#rent-category").removeAttr("required");
                $("#rent-category").attr("required", "required");
                $("#div-business-sales-category").hide();
                $("#business-sales-category").removeAttr("required");
                $("#div-short-term-hiring-category").hide();
                $("#short-term-hiring-category").removeAttr("required");
                $("#div-business-name").show();
                $("#business-name").removeAttr("required");
                $("#business-name").attr("required", "required");
                $("#div-tags").show();
                $("#tags").removeAttr("required");
                $("#tags").attr("required", "required");
                $("#div-openhouse-date").hide();
                $("#openhouse-date").removeAttr("required");
                $("#div-date").hide();
                $("#date").removeAttr("required");
                $("#div-start-date").hide();
                $("#start-date").removeAttr("required");
                $("#div-finish-date").hide();
                $("#finish-date").removeAttr("required");
                $("#div-time-start").hide();
                $("#time-start").removeAttr("required");
                $("#div-time-finish").hide();
                $("#time-finish").removeAttr("required");
                $("#div-open-hour").show();
                $("#open-hour").removeAttr("required");
                $("#open-hour").attr("required", "required");
                $("#div-close-hour").show();
                $("#close-hour").removeAttr("required");
                $("#close-hour").attr("required", "required");
                $("#div-details").show();
                $("#details").removeAttr("required");
                $("#details").attr("required", "required");
                $("#div-job-description").hide();
                $("#job-description").removeAttr("required");
                $("#div-price").show();
                $("#price").removeAttr("required");
                $("#price").attr("required", "required");
                $("#div-salary").hide();
                $("#salary").removeAttr("required");
                $("#div-hourly-rate").hide();
                $("#hourly-rate").removeAttr("required");
                $("#div-original-price").hide();
                $("#original-price").removeAttr("required");
                $("#div-discounted-price").hide();
                $("#discounted-price").removeAttr("required");

                $("#section-address").show();

                $("#zipcode").removeAttr("required");
                $("#zipcode").attr("required", "required");
                $("#contact-name").removeAttr("required");
                $("#contact-name").attr("required", "required");
                $("#contact-number").removeAttr("required");
                $("#contact-number").attr("required", "required");
                $("#contact-email").removeAttr("required");
                $("#contact-email").attr("required", "required");
                $("#contact-website").removeAttr("required");
                $("#contact-website").attr("required", "required");

                $("#section-jobs").hide();

                $("#jobs-type").removeAttr("required");
                $("#jobs-status").removeAttr("required");
                $("#jobs-experience").removeAttr("required");
                $("#jobs-education").removeAttr("required");
                $("#jobs-skill").removeAttr("required");
                $("#jobs-software").removeAttr("required");

                $("#section-realty").hide();

                $("#realty-bed").removeAttr("required");
                $("#realty-bath").removeAttr("required");
                $("#realty-lot").removeAttr("required");
                $("#realty-sewerage").removeAttr("required");
                $("#realty-water").removeAttr("required");
                $("#realty-gas").removeAttr("required");
                $("#realty-tax").removeAttr("required");
                $("#realty-mls").removeAttr("required");

                $("#section-gallery").show();


                $("#div-currency").show();
                $("#currency").removeAttr("required");
                $("#currency").attr("required", "required");


                $("#div-hire-a-resource-second-language").show();
                $("#language-hide").hide();
                $("#hire-a-resource-second-language").removeAttr("required");

                $("#section-social").show();

                $("#social-facebook").removeAttr("required");
                $("#social-facebook").attr("required", "required");
                $("#social-twitter").removeAttr("required");
                $("#social-twitter").attr("required", "required");
                $("#social-linkedin").removeAttr("required");
                $("#social-linkedin").attr("required", "required");
                $("#social-instagram").removeAttr("required");
                $("#social-instagram").attr("required", "required");


                $("#div-price-duration").show();
                $("#price-duration").removeAttr("required");
                $("#price-duration").attr("required", "required");

                $("#div-address").show();
                $("#address").removeAttr("required");
                $("#address").attr("required", "required");

                $("#div-amount").hide();
                $("#amount").removeAttr("required");

                $("#div-work-details").hide();
                $("#work-details").removeAttr("required");
                $("#div-expected-hours").hide();
                $("#expected-hours").removeAttr("required");
                $("#div-pay").hide();
                $("#pay").removeAttr("required");
                $("#div-pay-duration").hide();
                $("#pay-duration").removeAttr("required");

                var geocoder = new google.maps.Geocoder();

                geocoder.geocode({
                    'address': "<?php echo $data[0]->zipcode; ?>"
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var _latitude = results[0].geometry.location.lat().toString();
                        var _longitude = results[0].geometry.location.lng().toString();
                        var element = "listing-map";
                        var lat_element = "listing-latitude";
                        var long_element = "listing-longitude";
                        simpleMap(lat_element, _latitude, long_element, _longitude, element, true);
                    } else {
                        console.log("Location is not valid.....!");
                    }
                });

            } else if ("<?php echo $type; ?>" == "funding") {
                $("#submit-listing-form").removeAttr("action");
                $("#submit-listing-form").attr("action", "<?php echo base_url(); ?>Funding/edit");

                $("#div-title").show();
                $("#title").removeAttr("required");
                $("#title").attr("required", "required");
                $("#div-events-category").hide();
                $("#events-category").removeAttr("required");
                $("#div-sales-category").hide();
                $("#sales-category").removeAttr("required");
                $("#div-coupons-category").hide();
                $("#coupons-category").removeAttr("required");
                $("#div-service-require-category").hide();
                $("#service-require-category").removeAttr("required");
                $("#div-service-providers-category").hide();
                $("#service-providers-category").removeAttr("required");
                $("#div-realty-category").hide();
                $("#realty-category").removeAttr("required");
                $("#div-nearby-stores-category").hide();
                $("#nearby-stores-category").removeAttr("required");
                $("#div-attractions-category").hide();
                $("#attractions-category").removeAttr("required");
                $("#div-hire-a-resource-category").hide();
                $("#hire-a-resource-category").removeAttr("required");
                $("#div-tickets-category").hide();
                $("#tickets-category").removeAttr("required");
                $("#div-learnings-category").hide();
                $("#learnings-category").removeAttr("required");
                $("#div-restaurants-category").hide();
                $("#restaurants-category").removeAttr("required");
                $("#div-rent-category").hide();
                $("#rent-category").removeAttr("required");
                $("#div-business-sales-category").hide();
                $("#business-sales-category").removeAttr("required");
                $("#div-short-term-hiring-category").hide();
                $("#short-term-hiring-category").removeAttr("required");
                $("#div-business-name").show();
                $("#business-name").removeAttr("required");
                $("#business-name").attr("required", "required");
                $("#div-tags").show();
                $("#tags").removeAttr("required");
                $("#tags").attr("required", "required");
                $("#div-openhouse-date").hide();
                $("#openhouse-date").removeAttr("required");
                $("#div-date").hide();
                $("#date").removeAttr("required");
                $("#div-start-date").hide();
                $("#start-date").removeAttr("required");
                $("#div-finish-date").hide();
                $("#finish-date").removeAttr("required");
                $("#div-time-start").hide();
                $("#time-start").removeAttr("required");
                $("#div-time-finish").hide();
                $("#time-finish").removeAttr("required");
                $("#div-open-hour").hide();
                $("#open-hour").removeAttr("required");
                $("#div-close-hour").hide();
                $("#close-hour").removeAttr("required");
                $("#div-details").show();
                $("#details").removeAttr("required");
                $("#details").attr("required", "required");
                $("#div-job-description").hide();
                $("#job-description").removeAttr("required");
                $("#div-price").hide();
                $("#price").removeAttr("required");
                $("#div-salary").hide();
                $("#salary").removeAttr("required");
                $("#div-hourly-rate").hide();
                $("#hourly-rate").removeAttr("required");
                $("#div-original-price").hide();
                $("#original-price").removeAttr("required");
                $("#div-discounted-price").hide();
                $("#discounted-price").removeAttr("required");

                $("#section-profile-option").show();
                $("#section-address").show();

                $("#zipcode").removeAttr("required");
                $("#zipcode").attr("required", "required");
                $("#contact-name").removeAttr("required");
                $("#contact-name").attr("required", "required");
                $("#contact-number").removeAttr("required");
                $("#contact-number").attr("required", "required");
                $("#contact-email").removeAttr("required");
                $("#contact-email").attr("required", "required");
                $("#contact-website").removeAttr("required");
                $("#contact-website").attr("required", "required");

                $("#section-jobs").hide();

                $("#jobs-type").removeAttr("required");
                $("#jobs-status").removeAttr("required");
                $("#jobs-experience").removeAttr("required");
                $("#jobs-education").removeAttr("required");
                $("#jobs-skill").removeAttr("required");
                $("#jobs-software").removeAttr("required");

                $("#section-realty").hide();

                $("#realty-bed").removeAttr("required");
                $("#realty-bath").removeAttr("required");
                $("#realty-lot").removeAttr("required");
                $("#realty-sewerage").removeAttr("required");
                $("#realty-water").removeAttr("required");
                $("#realty-gas").removeAttr("required");
                $("#realty-tax").removeAttr("required");
                $("#realty-mls").removeAttr("required");

                $("#section-gallery").show();


                $("#div-currency").show();
                $("#currency").removeAttr("required");
                $("#currency").attr("required", "required");


                $("#div-hire-a-resource-second-language").show();
                $("#language-hide").hide();
                $("#hire-a-resource-second-language").removeAttr("required");

                $("#section-social").show();

                $("#social-facebook").removeAttr("required");
                $("#social-facebook").attr("required", "required");
                $("#social-twitter").removeAttr("required");
                $("#social-twitter").attr("required", "required");
                $("#social-linkedin").removeAttr("required");
                $("#social-linkedin").attr("required", "required");
                $("#social-instagram").removeAttr("required");
                $("#social-instagram").attr("required", "required");


                $("#div-price-duration").hide();
                $("#price-duration").removeAttr("required");

                $("#div-address").hide();
                $("#address").removeAttr("required");

                $("#div-amount").show();
                $("#amount").removeAttr("required");
                $("#amount").attr("required", "required");

                $("#div-work-details").hide();
                $("#work-details").removeAttr("required");
                $("#div-expected-hours").hide();
                $("#expected-hours").removeAttr("required");
                $("#div-pay").hide();
                $("#pay").removeAttr("required");
                $("#div-pay-duration").hide();
                $("#pay-duration").removeAttr("required");

                $("#section-match-friends").hide();

                $("#age").removeAttr("required");
                $("#gender").removeAttr("required");
                $("#about-yourself").removeAttr("required");
                $("#occupation").removeAttr("required");
                $("#religion").removeAttr("required");
                $("#height").removeAttr("required");
                $("#ethnicity").removeAttr("required");
                $("#body-type").removeAttr("required");
                $("#education").removeAttr("required");
                $("#ideal-match").removeAttr("required");
                $("#relationship-history").removeAttr("required");
                $("#lifestyle").removeAttr("required");

                var geocoder = new google.maps.Geocoder();

                geocoder.geocode({
                    'address': "<?php echo $data[0]->zipcode; ?>"
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var _latitude = results[0].geometry.location.lat().toString();
                        var _longitude = results[0].geometry.location.lng().toString();
                        var element = "listing-map";
                        var lat_element = "listing-latitude";
                        var long_element = "listing-longitude";
                        simpleMap(lat_element, _latitude, long_element, _longitude, element, true);
                    } else {
                        console.log("Location is not valid.....!");
                    }
                });

            } else if ("<?php echo $type; ?>" == "business_sales") {
                $("#submit-listing-form").removeAttr("action");
                $("#submit-listing-form").attr("action", "<?php echo base_url(); ?>BusinessSales/edit");

                $("#div-title").show();
                $("#title").removeAttr("required");
                $("#title").attr("required", "required");
                $("#div-events-category").hide();
                $("#events-category").removeAttr("required");
                $("#div-sales-category").hide();
                $("#sales-category").removeAttr("required");
                $("#div-coupons-category").hide();
                $("#coupons-category").removeAttr("required");
                $("#div-service-require-category").hide();
                $("#service-require-category").removeAttr("required");
                $("#div-service-providers-category").hide();
                $("#service-providers-category").removeAttr("required");
                $("#div-realty-category").hide();
                $("#realty-category").removeAttr("required");
                $("#div-nearby-stores-category").hide();
                $("#nearby-stores-category").removeAttr("required");
                $("#div-attractions-category").hide();
                $("#attractions-category").removeAttr("required");
                $("#div-hire-a-resource-category").hide();
                $("#hire-a-resource-category").removeAttr("required");
                $("#div-tickets-category").hide();
                $("#tickets-category").removeAttr("required");
                $("#div-learnings-category").hide();
                $("#learnings-category").removeAttr("required");
                $("#div-restaurants-category").hide();
                $("#restaurants-category").removeAttr("required");
                $("#div-rent-category").hide();
                $("#rent-category").removeAttr("required");
                $("#div-business-sales-category").show();
                $("#business-sales-category").removeAttr("required");
                $("#business-sales-category").attr("required", "required");
                $("#div-short-term-hiring-category").hide();
                $("#short-term-hiring-category").removeAttr("required");
                $("#div-business-name").show();
                $("#business-name").removeAttr("required");
                $("#business-name").attr("required", "required");
                $("#div-tags").show();
                $("#tags").removeAttr("required");
                $("#tags").attr("required", "required");
                $("#div-openhouse-date").hide();
                $("#openhouse-date").removeAttr("required");
                $("#div-date").hide();
                $("#date").removeAttr("required");
                $("#div-start-date").hide();
                $("#start-date").removeAttr("required");
                $("#div-finish-date").hide();
                $("#finish-date").removeAttr("required");
                $("#div-time-start").hide();
                $("#time-start").removeAttr("required");
                $("#div-time-finish").hide();
                $("#time-finish").removeAttr("required");
                $("#div-open-hour").hide();
                $("#open-hour").removeAttr("required");
                $("#div-close-hour").hide();
                $("#close-hour").removeAttr("required");
                $("#div-details").show();
                $("#details").removeAttr("required");
                $("#details").attr("required", "required");
                $("#div-job-description").hide();
                $("#job-description").removeAttr("required");
                $("#div-price").show();
                $("#price").removeAttr("required");
                $("#price").attr("required", "required");
                $("#div-salary").hide();
                $("#salary").removeAttr("required");
                $("#div-hourly-rate").hide();
                $("#hourly-rate").removeAttr("required");
                $("#div-original-price").hide();
                $("#original-price").removeAttr("required");
                $("#div-discounted-price").hide();
                $("#discounted-price").removeAttr("required");

                $("#section-profile-option").show();
                $("#section-address").show();

                $("#zipcode").removeAttr("required");
                $("#zipcode").attr("required", "required");
                $("#contact-name").removeAttr("required");
                $("#contact-name").attr("required", "required");
                $("#contact-number").removeAttr("required");
                $("#contact-number").attr("required", "required");
                $("#contact-email").removeAttr("required");
                $("#contact-email").attr("required", "required");
                $("#contact-website").removeAttr("required");
                $("#contact-website").attr("required", "required");

                $("#section-jobs").hide();

                $("#jobs-type").removeAttr("required");
                $("#jobs-status").removeAttr("required");
                $("#jobs-experience").removeAttr("required");
                $("#jobs-education").removeAttr("required");
                $("#jobs-skill").removeAttr("required");
                $("#jobs-software").removeAttr("required");

                $("#section-realty").hide();

                $("#realty-bed").removeAttr("required");
                $("#realty-bath").removeAttr("required");
                $("#realty-lot").removeAttr("required");
                $("#realty-sewerage").removeAttr("required");
                $("#realty-water").removeAttr("required");
                $("#realty-gas").removeAttr("required");
                $("#realty-tax").removeAttr("required");
                $("#realty-mls").removeAttr("required");

                $("#section-gallery").show();


                $("#div-currency").show();
                $("#currency").removeAttr("required");
                $("#currency").attr("required", "required");


                $("#div-hire-a-resource-second-language").show();
                $("#language-hide").hide();
                $("#hire-a-resource-second-language").removeAttr("required");

                $("#section-social").show();

                $("#social-facebook").removeAttr("required");
                $("#social-facebook").attr("required", "required");
                $("#social-twitter").removeAttr("required");
                $("#social-twitter").attr("required", "required");
                $("#social-linkedin").removeAttr("required");
                $("#social-linkedin").attr("required", "required");
                $("#social-instagram").removeAttr("required");
                $("#social-instagram").attr("required", "required");


                $("#div-price-duration").hide();
                $("#price-duration").removeAttr("required");

                $("#div-address").hide();
                $("#address").removeAttr("required");

                $("#div-amount").hide();
                $("#amount").removeAttr("required");

                $("#div-work-details").hide();
                $("#work-details").removeAttr("required");
                $("#div-expected-hours").hide();
                $("#expected-hours").removeAttr("required");
                $("#div-pay").hide();
                $("#pay").removeAttr("required");
                $("#div-pay-duration").hide();
                $("#pay-duration").removeAttr("required");

                $("#section-match-friends").hide();

                $("#age").removeAttr("required");
                $("#gender").removeAttr("required");
                $("#about-yourself").removeAttr("required");
                $("#occupation").removeAttr("required");
                $("#religion").removeAttr("required");
                $("#height").removeAttr("required");
                $("#ethnicity").removeAttr("required");
                $("#body-type").removeAttr("required");
                $("#education").removeAttr("required");
                $("#ideal-match").removeAttr("required");
                $("#relationship-history").removeAttr("required");
                $("#lifestyle").removeAttr("required");

                var geocoder = new google.maps.Geocoder();

                geocoder.geocode({
                    'address': "<?php echo $data[0]->zipcode; ?>"
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var _latitude = results[0].geometry.location.lat().toString();
                        var _longitude = results[0].geometry.location.lng().toString();
                        var element = "listing-map";
                        var lat_element = "listing-latitude";
                        var long_element = "listing-longitude";
                        simpleMap(lat_element, _latitude, long_element, _longitude, element, true);
                    } else {
                        console.log("Location is not valid.....!");
                    }
                });
            } else if ("<?php echo $type; ?>" == "short_term_hiring") {
                $("#submit-listing-form").removeAttr("action");
                $("#submit-listing-form").attr("action", "<?php echo base_url(); ?>ShortTermHiring/edit");

                $("#div-title").show();
                $("#title").removeAttr("required");
                $("#title").attr("required", "required");
                $("#div-events-category").hide();
                $("#events-category").removeAttr("required");
                $("#div-sales-category").hide();
                $("#sales-category").removeAttr("required");
                $("#div-coupons-category").hide();
                $("#coupons-category").removeAttr("required");
                $("#div-service-require-category").hide();
                $("#service-require-category").removeAttr("required");
                $("#div-service-providers-category").hide();
                $("#service-providers-category").removeAttr("required");
                $("#div-realty-category").hide();
                $("#realty-category").removeAttr("required");
                $("#div-nearby-stores-category").hide();
                $("#nearby-stores-category").removeAttr("required");
                $("#div-attractions-category").hide();
                $("#attractions-category").removeAttr("required");
                $("#div-hire-a-resource-category").hide();
                $("#hire-a-resource-category").removeAttr("required");
                $("#div-tickets-category").hide();
                $("#tickets-category").removeAttr("required");
                $("#div-learnings-category").hide();
                $("#learnings-category").removeAttr("required");
                $("#div-restaurants-category").hide();
                $("#restaurants-category").removeAttr("required");
                $("#div-rent-category").hide();
                $("#rent-category").removeAttr("required");
                $("#div-business-sales-category").hide();
                $("#business-sales-category").removeAttr("required");
                $("#div-short-term-hiring-category").show();
                $("#short-term-hiring-category").removeAttr("required");
                $("#short-term-hiring-category").attr("required", "required");
                $("#div-business-name").show();
                $("#business-name").removeAttr("required");
                $("#business-name").attr("required", "required");
                $("#div-tags").show();
                $("#tags").removeAttr("required");
                $("#tags").attr("required", "required");
                $("#div-openhouse-date").hide();
                $("#openhouse-date").removeAttr("required");
                $("#div-date").hide();
                $("#date").removeAttr("required");
                $("#div-start-date").hide();
                $("#start-date").removeAttr("required");
                $("#div-finish-date").hide();
                $("#finish-date").removeAttr("required");
                $("#div-time-start").hide();
                $("#time-start").removeAttr("required");
                $("#div-time-finish").hide();
                $("#time-finish").removeAttr("required");
                $("#div-open-hour").show();
                $("#open-hour").removeAttr("required");
                $("#open-hour").attr("required", "required");
                $("#div-close-hour").show();
                $("#close-hour").removeAttr("required");
                $("#close-hour").attr("required", "required");
                $("#div-details").hide();
                $("#details").removeAttr("required");
                $("#div-job-description").hide();
                $("#job-description").removeAttr("required");
                $("#div-price").hide();
                $("#price").removeAttr("required");
                $("#div-salary").hide();
                $("#salary").removeAttr("required");
                $("#div-hourly-rate").hide();
                $("#hourly-rate").removeAttr("required");
                $("#div-original-price").hide();
                $("#original-price").removeAttr("required");
                $("#div-discounted-price").hide();
                $("#discounted-price").removeAttr("required");

                $("#section-profile-option").show();
                $("#section-address").show();

                $("#zipcode").removeAttr("required");
                $("#zipcode").attr("required", "required");
                $("#contact-name").removeAttr("required");
                $("#contact-name").attr("required", "required");
                $("#contact-number").removeAttr("required");
                $("#contact-number").attr("required", "required");
                $("#contact-email").removeAttr("required");
                $("#contact-email").attr("required", "required");
                $("#contact-website").removeAttr("required");
                $("#contact-website").attr("required", "required");

                $("#section-jobs").hide();

                $("#jobs-type").removeAttr("required");
                $("#jobs-status").removeAttr("required");
                $("#jobs-experience").removeAttr("required");
                $("#jobs-education").removeAttr("required");
                $("#jobs-skill").removeAttr("required");
                $("#jobs-software").removeAttr("required");

                $("#section-realty").hide();

                $("#realty-bed").removeAttr("required");
                $("#realty-bath").removeAttr("required");
                $("#realty-lot").removeAttr("required");
                $("#realty-sewerage").removeAttr("required");
                $("#realty-water").removeAttr("required");
                $("#realty-gas").removeAttr("required");
                $("#realty-tax").removeAttr("required");
                $("#realty-mls").removeAttr("required");

                $("#section-gallery").show();


                $("#div-currency").show();
                $("#currency").removeAttr("required");
                $("#currency").attr("required", "required");


                $("#div-hire-a-resource-second-language").show();
                $("#language-hide").hide();
                $("#hire-a-resource-second-language").removeAttr("required");

                $("#section-social").show();

                $("#social-facebook").removeAttr("required");
                $("#social-facebook").attr("required", "required");
                $("#social-twitter").removeAttr("required");
                $("#social-twitter").attr("required", "required");
                $("#social-linkedin").removeAttr("required");
                $("#social-linkedin").attr("required", "required");
                $("#social-instagram").removeAttr("required");
                $("#social-instagram").attr("required", "required");


                $("#div-price-duration").hide();
                $("#price-duration").removeAttr("required");

                $("#div-address").show();
                $("#address").removeAttr("required");
                $("#address").attr("required", "required");

                $("#div-amount").hide();
                $("#amount").removeAttr("required");

                $("#div-work-details").show();
                $("#work-details").removeAttr("required");
                $("#work-details").attr("required", "required");
                $("#div-expected-hours").show();
                $("#expected-hours").removeAttr("required");
                $("#expected-hours").attr("required", "required");
                $("#div-pay").show();
                $("#pay").removeAttr("required");
                $("#pay").attr("required", "required");
                $("#div-pay-duration").show();
                $("#pay-duration").removeAttr("required");
                $("#pay-duration").attr("required", "required");

                var geocoder = new google.maps.Geocoder();

                geocoder.geocode({
                    'address': "<?php echo $data[0]->zipcode; ?>"
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var _latitude = results[0].geometry.location.lat().toString();
                        var _longitude = results[0].geometry.location.lng().toString();
                        var element = "listing-map";
                        var lat_element = "listing-latitude";
                        var long_element = "listing-longitude";
                        simpleMap(lat_element, _latitude, long_element, _longitude, element, true);
                    } else {
                        console.log("Location is not valid.....!");
                    }
                });
            } else if ("<?php echo $type; ?>" == "match_friends") {
                $("#submit-listing-form").removeAttr("action");
                $("#submit-listing-form").attr("action", "<?php echo base_url(); ?>MatchFriends/edit");

                $("#div-title").show();
                $("#title").removeAttr("required");
                $("#title").attr("required", "required");
                $("#div-events-category").hide();
                $("#events-category").removeAttr("required");
                $("#div-sales-category").hide();
                $("#sales-category").removeAttr("required");
                $("#div-coupons-category").hide();
                $("#coupons-category").removeAttr("required");
                $("#div-service-require-category").hide();
                $("#service-require-category").removeAttr("required");
                $("#div-service-providers-category").hide();
                $("#service-providers-category").removeAttr("required");
                $("#div-realty-category").hide();
                $("#realty-category").removeAttr("required");
                $("#div-nearby-stores-category").hide();
                $("#nearby-stores-category").removeAttr("required");
                $("#div-attractions-category").hide();
                $("#attractions-category").removeAttr("required");
                $("#div-hire-a-resource-category").hide();
                $("#hire-a-resource-category").removeAttr("required");
                $("#div-tickets-category").hide();
                $("#tickets-category").removeAttr("required");
                $("#div-learnings-category").hide();
                $("#learnings-category").removeAttr("required");
                $("#div-restaurants-category").hide();
                $("#restaurants-category").removeAttr("required");
                $("#div-rent-category").hide();
                $("#rent-category").removeAttr("required");
                $("#div-business-sales-category").hide();
                $("#business-sales-category").removeAttr("required");
                $("#div-short-term-hiring-category").hide();
                $("#short-term-hiring-category").removeAttr("required");
                $("#div-business-name").hide();
                $("#business-name").removeAttr("required");
                $("#div-tags").hide();
                $("#tags").removeAttr("required");
                $("#div-openhouse-date").hide();
                $("#openhouse-date").removeAttr("required");
                $("#div-date").hide();
                $("#date").removeAttr("required");
                $("#div-start-date").hide();
                $("#start-date").removeAttr("required");
                $("#div-finish-date").hide();
                $("#finish-date").removeAttr("required");
                $("#div-time-start").hide();
                $("#time-start").removeAttr("required");
                $("#div-time-finish").hide();
                $("#time-finish").removeAttr("required");
                $("#div-open-hour").hide();
                $("#open-hour").removeAttr("required");
                $("#div-close-hour").hide();
                $("#close-hour").removeAttr("required");
                $("#div-details").hide();
                $("#details").removeAttr("required");
                $("#div-job-description").hide();
                $("#job-description").removeAttr("required");
                $("#div-price").hide();
                $("#price").removeAttr("required");
                $("#div-salary").hide();
                $("#salary").removeAttr("required");
                $("#div-hourly-rate").hide();
                $("#hourly-rate").removeAttr("required");
                $("#div-original-price").hide();
                $("#original-price").removeAttr("required");
                $("#div-discounted-price").hide();
                $("#discounted-price").removeAttr("required");

                $("#section-profile-option").show();
                $("#section-address").show();

                $("#zipcode").removeAttr("required");
                $("#zipcode").attr("required", "required");
                $("#contact-name").removeAttr("required");
                $("#contact-name").attr("required", "required");
                $("#contact-number").removeAttr("required");
                $("#contact-number").attr("required", "required");
                $("#contact-email").removeAttr("required");
                $("#contact-email").attr("required", "required");
                $("#contact-website").removeAttr("required");
                $("#contact-website").attr("required", "required");

                $("#section-jobs").hide();

                $("#jobs-type").removeAttr("required");
                $("#jobs-status").removeAttr("required");
                $("#jobs-experience").removeAttr("required");
                $("#jobs-education").removeAttr("required");
                $("#jobs-skill").removeAttr("required");
                $("#jobs-software").removeAttr("required");

                $("#section-realty").hide();

                $("#realty-bed").removeAttr("required");
                $("#realty-bath").removeAttr("required");
                $("#realty-lot").removeAttr("required");
                $("#realty-sewerage").removeAttr("required");
                $("#realty-water").removeAttr("required");
                $("#realty-gas").removeAttr("required");
                $("#realty-tax").removeAttr("required");
                $("#realty-mls").removeAttr("required");

                $("#section-gallery").show();


                $("#div-currency").hide();
                $("#currency").removeAttr("required");
                $("#currency").attr("required", "required");


                $("#div-hire-a-resource-second-language").show();
                $("#language-hide").hide();
                $("#hire-a-resource-second-language").removeAttr("required");

                $("#section-social").show();

                $("#social-facebook").removeAttr("required");
                $("#social-facebook").attr("required", "required");
                $("#social-twitter").removeAttr("required");
                $("#social-twitter").attr("required", "required");
                $("#social-linkedin").removeAttr("required");
                $("#social-linkedin").attr("required", "required");
                $("#social-instagram").removeAttr("required");
                $("#social-instagram").attr("required", "required");


                $("#div-price-duration").hide();
                $("#price-duration").removeAttr("required");

                $("#div-address").hide();
                $("#address").removeAttr("required");

                $("#div-amount").hide();
                $("#amount").removeAttr("required");

                $("#div-work-details").hide();
                $("#work-details").removeAttr("required");
                $("#div-expected-hours").hide();
                $("#expected-hours").removeAttr("required");
                $("#div-pay").hide();
                $("#pay").removeAttr("required");
                $("#div-pay-duration").hide();
                $("#pay-duration").removeAttr("required");

                $("#section-match-friends").show();

                $("#age").removeAttr("required");
                $("#age").attr("required", "required");
                $("#gender").removeAttr("required");
                $("#gender").attr("required", "required");
                $("#about-yourself").removeAttr("required");
                $("#about-yourself").attr("required", "required");
                $("#occupation").removeAttr("required");
                $("#occupation").attr("required", "required");
                $("#religion").removeAttr("required");
                $("#religion").attr("required", "required");
                $("#height").removeAttr("required");
                $("#height").attr("required", "required");
                $("#ethnicity").removeAttr("required");
                $("#ethnicity").attr("required", "required");
                $("#body-type").removeAttr("required");
                $("#body-type").attr("required", "required");
                $("#education").removeAttr("required");
                $("#education").attr("required", "required");
                $("#ideal-match").removeAttr("required");
                $("#ideal-match").attr("required", "required");
                $("#relationship-history").removeAttr("required");
                $("#relationship-history").attr("required", "required");
                $("#lifestyle").removeAttr("required");
                $("#lifestyle").attr("required", "required");

                var geocoder = new google.maps.Geocoder();

                geocoder.geocode({
                    'address': "<?php echo $data[0]->zipcode; ?>"
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var _latitude = results[0].geometry.location.lat().toString();
                        var _longitude = results[0].geometry.location.lng().toString();
                        var element = "listing-map";
                        var lat_element = "listing-latitude";
                        var long_element = "listing-longitude";
                        simpleMap(lat_element, _latitude, long_element, _longitude, element, true);
                    } else {
                        console.log("Location is not valid.....!");
                    }
                });
            }

        });

        var previousFileLength = <?php echo sizeof(json_decode($data[0]->file)); ?>

        function remove_image(id) {
            previousFileLength--;

            //$("#previous-image-"+id).remove();
            $("#previous-image-" + id).fadeTo(1000, 0.01, function() {
                $(this).remove();
            });
            $("#file-upload-input").removeAttr("maxlength");
            $("#file-upload-input").attr("maxlength", 10 - previousFileLength);

            if (previousFileLength == 0)
                $("#file-upload-input").removeAttr("required");
            $("#file-upload-input").attr("required", "required");
        }
    </script>