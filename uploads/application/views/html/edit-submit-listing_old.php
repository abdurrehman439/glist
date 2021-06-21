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
        #div-details,
        #div-job-description,
        #div-price,
        #div-salary,
        #div-hourly-rate,
        #div-original-price,
        #div-discounted-price,
        #section-address,
        #section-jobs,
        #section-realty,
        #section-gallery,
        #div-currency{
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

            <section class="page-title center">

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
                                    
                                    <input type="hidden" id="<?php echo $type; ?>_id" name="<?php echo $type; ?>_id" value="<?php $temp_type = $type.'_id'; echo $data[0]->$temp_type; ?>" required />

                                    <div class="col-md-6 col-sm-6" id="div-title">

                                        <div class="form-group">

                                            <label for="title">Title</label>

                                            <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="<?php echo $data[0]->title; ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-events-category">

                                        <div class="form-group">

                                            <label for="events-category">Category</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="events-category" id="events-category">
                                                <option value="fun_n_entertainment" <?php if( $data[0]->category == "fun_n_entertainment" ) echo 'selected="selected"'; ?> >Fun &amp; Entertainment</option>
                                                <option value="education_n_informative" <?php if( $data[0]->category == "education_n_informative" ) echo 'selected="selected"'; ?> >Education &amp; Informative</option>
                                                <option value="games" <?php if( $data[0]->category == "games" ) echo 'selected="selected"'; ?> >Games</option>
                                                <option value="religious" <?php if( $data[0]->category == "religious" ) echo 'selected="selected"'; ?> >Religious</option>
                                                <option value="other" <?php if( $data[0]->category == "other" ) echo 'selected="selected"'; ?> >Other</option>
                                            </select>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-sales-category">

                                        <div class="form-group">

                                            <label for="sales-category">Category</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="sales-category" id="sales-category">
                                                <option value="new" <?php if( $data[0]->category == "new" ) echo 'selected="selected"'; ?> >New</option>
                                                <option value="used" <?php if( $data[0]->category == "used" ) echo 'selected="selected"'; ?> >Used</option>
                                                <option value="classic_antiques" <?php if( $data[0]->category == "classic_antiques" ) echo 'selected="selected"'; ?> >Classic/Antiques</option>
                                            </select>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-coupons-category">

                                        <div class="form-group">

                                            <label for="coupons-category">Category</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="coupons-category" id="coupons-category">
                                                <option value="goods" <?php if( $data[0]->category == "goods" ) echo 'selected="selected"'; ?> >Goods</option>
                                                <option value="services" <?php if( $data[0]->category == "services" ) echo 'selected="selected"'; ?> >Services</option>
                                                <option value="attractions" <?php if( $data[0]->category == "attractions" ) echo 'selected="selected"'; ?> >Attractions</option>
                                                <option value="household" <?php if( $data[0]->category == "household" ) echo 'selected="selected"'; ?> >Household</option>
                                                <option value="events" <?php if( $data[0]->category == "events" ) echo 'selected="selected"'; ?> >Events</option>
                                                <option value="others" <?php if( $data[0]->category == "others" ) echo 'selected="selected"'; ?> >Others</option>
                                            </select>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-service-require-category">

                                        <div class="form-group">

                                            <label for="service-require-category">Category</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="service-require-category" id="service-require-category">
                                                <option value="hvac" <?php if( $data[0]->category == "hvac" ) echo 'selected="selected"'; ?> >HVAC</option>
                                                <option value="electrical" <?php if( $data[0]->category == "electrical" ) echo 'selected="selected"'; ?> >Electrical</option>
                                                <option value="plumbing" <?php if( $data[0]->category == "plumbing" ) echo 'selected="selected"'; ?> >Plumbing</option>
                                                <option value="home_construciton" <?php if( $data[0]->category == "home_construciton" ) echo 'selected="selected"'; ?> >Home Construciton</option>
                                                <option value="lanscaping" <?php if( $data[0]->category == "lanscaping" ) echo 'selected="selected"'; ?> >Lanscaping</option>
                                                <option value="roofing" <?php if( $data[0]->category == "roofing" ) echo 'selected="selected"'; ?> >Roofing</option>
                                                <option value="cleaning" <?php if( $data[0]->category == "cleaning" ) echo 'selected="selected"'; ?> >Cleaning</option>
                                                <option value="painting" <?php if( $data[0]->category == "painting" ) echo 'selected="selected"'; ?> >Painting</option>
                                                <option value="interior_inside" <?php if( $data[0]->category == "interior_inside" ) echo 'selected="selected"'; ?> >Interior/Inside</option>
                                                <option value="exterior_outside" <?php if( $data[0]->category == "exterior_outside" ) echo 'selected="selected"'; ?> >Exterior/Outside</option>
                                                <option value="labour" <?php if( $data[0]->category == "labour" ) echo 'selected="selected"'; ?> >Labour</option>
                                                <option value="automative" <?php if( $data[0]->category == "automative" ) echo 'selected="selected"'; ?> >Automative</option>
                                                <option value="beauty" <?php if( $data[0]->category == "beauty" ) echo 'selected="selected"'; ?> >Beauty</option>
                                                <option value="computer" <?php if( $data[0]->category == "computer" ) echo 'selected="selected"'; ?> >Computer</option>
                                                <option value="accounting_n_finance" <?php if( $data[0]->category == "accounting_n_finance" ) echo 'selected="selected"'; ?> >Accounting &amp; Finance</option>
                                                <option value="taxation" <?php if( $data[0]->category == "taxation" ) echo 'selected="selected"'; ?> >Taxation</option>
                                                <option value="household" <?php if( $data[0]->category == "household" ) echo 'selected="selected"'; ?> >Household</option>
                                                <option value="legal" <?php if( $data[0]->category == "legal" ) echo 'selected="selected"'; ?> >Legal</option>
                                                <option value="education_n_classes" <?php if( $data[0]->category == "education_n_classes" ) echo 'selected="selected"'; ?> >Education &amp; Classes</option>
                                                <option value="others" <?php if( $data[0]->category == "others" ) echo 'selected="selected"'; ?> >Others</option>
                                            </select>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-service-providers-category">

                                        <div class="form-group">

                                            <label for="service-providers-category">Category</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="service-providers-category" id="service-providers-category">
                                                <option value="hvac" <?php if( $data[0]->category == "hvac" ) echo 'selected="selected"'; ?> >HVAC</option>
                                                <option value="electrical" <?php if( $data[0]->category == "electrical" ) echo 'selected="selected"'; ?> >Electrical</option>
                                                <option value="plumbing" <?php if( $data[0]->category == "plumbing" ) echo 'selected="selected"'; ?> >Plumbing</option>
                                                <option value="home_construciton" <?php if( $data[0]->category == "home_construciton" ) echo 'selected="selected"'; ?> >Home Construciton</option>
                                                <option value="lanscaping" <?php if( $data[0]->category == "lanscaping" ) echo 'selected="selected"'; ?> >Lanscaping</option>
                                                <option value="roofing" <?php if( $data[0]->category == "roofing" ) echo 'selected="selected"'; ?> >Roofing</option>
                                                <option value="cleaning" <?php if( $data[0]->category == "cleaning" ) echo 'selected="selected"'; ?> >Cleaning</option>
                                                <option value="painting" <?php if( $data[0]->category == "painting" ) echo 'selected="selected"'; ?> >Painting</option>
                                                <option value="interior_inside" <?php if( $data[0]->category == "interior_inside" ) echo 'selected="selected"'; ?> >Interior/Inside</option>
                                                <option value="exterior_outside" <?php if( $data[0]->category == "exterior_outside" ) echo 'selected="selected"'; ?> >Exterior/Outside</option>
                                                <option value="labour" <?php if( $data[0]->category == "labour" ) echo 'selected="selected"'; ?> >Labour</option>
                                                <option value="automative" <?php if( $data[0]->category == "automative" ) echo 'selected="selected"'; ?> >Automative</option>
                                                <option value="beauty" <?php if( $data[0]->category == "beauty" ) echo 'selected="selected"'; ?> >Beauty</option>
                                                <option value="computer" <?php if( $data[0]->category == "computer" ) echo 'selected="selected"'; ?> >Computer</option>
                                                <option value="accounting_n_finance" <?php if( $data[0]->category == "accounting_n_finance" ) echo 'selected="selected"'; ?> >Accounting &amp; Finance</option>
                                                <option value="taxation" <?php if( $data[0]->category == "taxation" ) echo 'selected="selected"'; ?> >Taxation</option>
                                                <option value="household" <?php if( $data[0]->category == "household" ) echo 'selected="selected"'; ?> >Household</option>
                                                <option value="legal" <?php if( $data[0]->category == "legal" ) echo 'selected="selected"'; ?> >Legal</option>
                                                <option value="education_n_classes" <?php if( $data[0]->category == "education_n_classes" ) echo 'selected="selected"'; ?> >Education &amp; Classes</option>
                                                <option value="others" <?php if( $data[0]->category == "others" ) echo 'selected="selected"'; ?> >Others</option>
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
                                                    <option value="for_sale" <?php if( $data[0]->category == "for_sale" ) echo 'selected="selected"'; ?> >For Sale</option>
                                                    <option value="for_rent" <?php if( $data[0]->category == "for_rent" ) echo 'selected="selected"'; ?> >For Rent</option>
                                                    <option value="others" <?php if( $data[0]->category == "others" ) echo 'selected="selected"'; ?> >Others</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">

                                                <label for="realty-type">Type</label>

                                                <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="realty-type" id="realty-type">
                                                    <option value="appartments" <?php if( $data[0]->type == "appartments" ) echo 'selected="selected"'; ?> >Appartments</option>
                                                    <option value="house" <?php if( $data[0]->type == "house" ) echo 'selected="selected"'; ?> >House</option>
                                                    <option value="condo" <?php if( $data[0]->type == "condo" ) echo 'selected="selected"'; ?> >Condo</option>
                                                    <option value="office" <?php if( $data[0]->type == "office" ) echo 'selected="selected"'; ?> >Office</option>
                                                    <option value="commercial" <?php if( $data[0]->type == "commercial" ) echo 'selected="selected"'; ?> >Commercial</option>
                                                    <option value="lot_n_lands" <?php if( $data[0]->type == "lot_n_lands" ) echo 'selected="selected"'; ?> >Lot &amp; Lands</option>
                                                    <option value="rooms_sharing" <?php if( $data[0]->type == "rooms_sharing" ) echo 'selected="selected"'; ?> >Rooms / Sharing</option>
                                                    <option value="vaccation_home" <?php if( $data[0]->type == "vaccation_home" ) echo 'selected="selected"'; ?> >Vaccation Home</option>
                                                </select>

                                            </div>
                                        </div>

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-nearby-stores-category">

                                        <div class="form-group">

                                            <label for="nearby-stores-category">Category</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="nearby-stores-category" id="nearby-stores-category">
                                                <option value="fun" <?php if( $data[0]->category == "fun" ) echo 'selected="selected"'; ?> >Fun</option>
                                                <option value="education" <?php if( $data[0]->category == "education" ) echo 'selected="selected"'; ?> >Education</option>
                                                <option value="entertainment" <?php if( $data[0]->category == "entertainment" ) echo 'selected="selected"'; ?> >Entertainment</option>
                                                <option value="games" <?php if( $data[0]->category == "games" ) echo 'selected="selected"'; ?> >Games</option>
                                                <option value="religious" <?php if( $data[0]->category == "religious" ) echo 'selected="selected"'; ?> >Religious</option>
                                                <option value="informative" <?php if( $data[0]->category == "informative" ) echo 'selected="selected"'; ?> >Informative</option>
                                                <option value="other" <?php if( $data[0]->category == "other" ) echo 'selected="selected"'; ?> >Other</option>
                                            </select>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-attractions-category">

                                        <div class="form-group">

                                            <label for="attractions-category">Category</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="attractions-category" id="attractions-category">
                                                <option value="art_n_culture" <?php if( $data[0]->category == "art_n_culture" ) echo 'selected="selected"'; ?> >Art &amp; Culture</option>
                                                <option value="entertainment" <?php if( $data[0]->category == "entertainment" ) echo 'selected="selected"'; ?> >Entertainment</option>
                                                <option value="nightlife" <?php if( $data[0]->category == "nightlife" ) echo 'selected="selected"'; ?> >Nightlife</option>
                                                <option value="fun" <?php if( $data[0]->category == "fun" ) echo 'selected="selected"'; ?> >Fun</option>
                                                <option value="education" <?php if( $data[0]->category == "education" ) echo 'selected="selected"'; ?> >Education</option>
                                                <option value="games" <?php if( $data[0]->category == "games" ) echo 'selected="selected"'; ?> >Games</option>
                                                <option value="history_n_heritage" <?php if( $data[0]->category == "history_n_heritage" ) echo 'selected="selected"'; ?> >History &amp; Heritage</option>
                                                <option value="monument_n_memorial" <?php if( $data[0]->category == "monument_n_memorial" ) echo 'selected="selected"'; ?> >Monument &amp; Memorial</option>
                                                <option value="meuseum" <?php if( $data[0]->category == "meuseum" ) echo 'selected="selected"'; ?> >Meuseum</option>
                                                <option value="shopping" <?php if( $data[0]->category == "shopping" ) echo 'selected="selected"'; ?> >Shopping</option>
                                                <option value="festivals" <?php if( $data[0]->category == "festivals" ) echo 'selected="selected"'; ?> >Festivals</option>
                                                <option value="saloon_n_spa" <?php if( $data[0]->category == "saloon_n_spa" ) echo 'selected="selected"'; ?> >Saloon &amp; Spa</option>
                                                <option value="sports" <?php if( $data[0]->category == "sports" ) echo 'selected="selected"'; ?> >Sports</option>
                                                <option value="outdoor_recreation" <?php if( $data[0]->category == "outdoor_recreation" ) echo 'selected="selected"'; ?> >Outdoor Recreation</option>
                                                <option value="theaters" <?php if( $data[0]->category == "theaters" ) echo 'selected="selected"'; ?> >Theaters</option>
                                                <option value="sightseeing" <?php if( $data[0]->category == "sightseeing" ) echo 'selected="selected"'; ?> >Sightseeing</option>
                                                <option value="parks" <?php if( $data[0]->category == "parks" ) echo 'selected="selected"'; ?> >Parks</option>
                                                <option value="water_parks" <?php if( $data[0]->category == "water_parks" ) echo 'selected="selected"'; ?> >Water Parks</option>
                                                <option value="lakes_n_beaches" <?php if( $data[0]->category == "lakes_n_beaches" ) echo 'selected="selected"'; ?> >Lakes &amp; Beaches</option>
                                                <option value="rides_n_funplex" <?php if( $data[0]->category == "rides_n_funplex" ) echo 'selected="selected"'; ?> >Rides &amp; Funplex</option>
                                                <option value="others" <?php if( $data[0]->category == "others" ) echo 'selected="selected"'; ?> >Others</option>
                                            </select>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-hire-a-resource-category">

                                        <div class="form-group">

                                            <label for="hire-a-resource-category">Category</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="hire-a-resource-category" id="hire-a-resource-category">
                                                <option value="web_design_n_development" <?php if( $data[0]->category == "web_design_n_development" ) echo 'selected="selected"'; ?> >Web Design &amp; Development</option>
                                                <option value="graphics_n_design" <?php if( $data[0]->category == "graphics_n_design" ) echo 'selected="selected"'; ?> >Graphics &amp; Design</option>
                                                <option value="programming" <?php if( $data[0]->category == "programming" ) echo 'selected="selected"'; ?> >Programming</option>
                                                <option value="digital_marketing" <?php if( $data[0]->category == "digital_marketing" ) echo 'selected="selected"'; ?> >Digital Marketing</option>
                                                <option value="writing" <?php if( $data[0]->category == "writing" ) echo 'selected="selected"'; ?> >Writing</option>
                                                <option value="video_n_animation" <?php if( $data[0]->category == "video_n_animation" ) echo 'selected="selected"'; ?> >Video &amp; Animation</option>
                                                <option value="music_n_audio" <?php if( $data[0]->category == "music_n_audio" ) echo 'selected="selected"'; ?> >Music &amp; Audio</option>
                                                <option value="business" <?php if( $data[0]->category == "business" ) echo 'selected="selected"'; ?> >Business</option>
                                                <option value="lifestyle" <?php if( $data[0]->category == "lifestyle" ) echo 'selected="selected"'; ?> >Lifestyle</option>
                                                <option value="tech" <?php if( $data[0]->category == "tech" ) echo 'selected="selected"'; ?> >Tech</option>
                                                <option value="accounting_n_finance" <?php if( $data[0]->category == "accounting_n_finance" ) echo 'selected="selected"'; ?> >Accounting &amp; Finance</option>
                                                <option value="taxation" <?php if( $data[0]->category == "taxation" ) echo 'selected="selected"'; ?> >Taxation</option>
                                                <option value="education_related" <?php if( $data[0]->category == "education_related" ) echo 'selected="selected"'; ?> >Education Related</option>
                                                <option value="others" <?php if( $data[0]->category == "others" ) echo 'selected="selected"'; ?> >Others</option>
                                            </select>

                                        </div>

                                        <!--end form-group-->

                                    </div>
                                    
                                    <!--end col-md-6-->

                                    <div id="div-hire-a-resource-second-language">

                                        <div class="col-md-6 col-sm-6 form-group">

                                            <label for="hire-a-resource-country">Country</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="hire-a-resource-country" id="hire-a-resource-country">
                                                <option value="AFG" <?php if( $data[0]->country == "AFG" ) echo 'selected="selected"'; ?> >Afghanistan</option>
                                                <option value="ALA" <?php if( $data[0]->country == "ALA" ) echo 'selected="selected"'; ?> >Åland Islands</option>
                                                <option value="ALB" <?php if( $data[0]->country == "ALB" ) echo 'selected="selected"'; ?> >Albania</option>
                                                <option value="DZA" <?php if( $data[0]->country == "DZA" ) echo 'selected="selected"'; ?> >Algeria</option>
                                                <option value="ASM" <?php if( $data[0]->country == "ASM" ) echo 'selected="selected"'; ?> >American Samoa</option>
                                                <option value="AND" <?php if( $data[0]->country == "AND" ) echo 'selected="selected"'; ?> >Andorra</option>
                                                <option value="AGO" <?php if( $data[0]->country == "AGO" ) echo 'selected="selected"'; ?> >Angola</option>
                                                <option value="AIA" <?php if( $data[0]->country == "AIA" ) echo 'selected="selected"'; ?> >Anguilla</option>
                                                <option value="ATA" <?php if( $data[0]->country == "ATA" ) echo 'selected="selected"'; ?> >Antarctica</option>
                                                <option value="ATG" <?php if( $data[0]->country == "ATG" ) echo 'selected="selected"'; ?> >Antigua and Barbuda</option>
                                                <option value="ARG" <?php if( $data[0]->country == "ARG" ) echo 'selected="selected"'; ?> >Argentina</option>
                                                <option value="ARM" <?php if( $data[0]->country == "ARM" ) echo 'selected="selected"'; ?> >Armenia</option>
                                                <option value="ABW" <?php if( $data[0]->country == "ABW" ) echo 'selected="selected"'; ?> >Aruba</option>
                                                <option value="AUS" <?php if( $data[0]->country == "AUS" ) echo 'selected="selected"'; ?> >Australia</option>
                                                <option value="AUT" <?php if( $data[0]->country == "AUT" ) echo 'selected="selected"'; ?> >Austria</option>
                                                <option value="AZE" <?php if( $data[0]->country == "AZE" ) echo 'selected="selected"'; ?> >Azerbaijan</option>
                                                <option value="BHS" <?php if( $data[0]->country == "BHS" ) echo 'selected="selected"'; ?> >Bahamas</option>
                                                <option value="BHR" <?php if( $data[0]->country == "BHR" ) echo 'selected="selected"'; ?> >Bahrain</option>
                                                <option value="BGD" <?php if( $data[0]->country == "BGD" ) echo 'selected="selected"'; ?> >Bangladesh</option>
                                                <option value="BRB" <?php if( $data[0]->country == "BRB" ) echo 'selected="selected"'; ?> >Barbados</option>
                                                <option value="BLR" <?php if( $data[0]->country == "BLR" ) echo 'selected="selected"'; ?> >Belarus</option>
                                                <option value="BEL" <?php if( $data[0]->country == "BEL" ) echo 'selected="selected"'; ?> >Belgium</option>
                                                <option value="BLZ" <?php if( $data[0]->country == "BLZ" ) echo 'selected="selected"'; ?> >Belize</option>
                                                <option value="BEN" <?php if( $data[0]->country == "BEN" ) echo 'selected="selected"'; ?> >Benin</option>
                                                <option value="BMU" <?php if( $data[0]->country == "BMU" ) echo 'selected="selected"'; ?> >Bermuda</option>
                                                <option value="BTN" <?php if( $data[0]->country == "BTN" ) echo 'selected="selected"'; ?> >Bhutan</option>
                                                <option value="BOL" <?php if( $data[0]->country == "BOL" ) echo 'selected="selected"'; ?> >Bolivia, Plurinational State of</option>
                                                <option value="BES" <?php if( $data[0]->country == "BES" ) echo 'selected="selected"'; ?> >Bonaire, Sint Eustatius and Saba</option>
                                                <option value="BIH" <?php if( $data[0]->country == "BIH" ) echo 'selected="selected"'; ?> >Bosnia and Herzegovina</option>
                                                <option value="BWA" <?php if( $data[0]->country == "BWA" ) echo 'selected="selected"'; ?> >Botswana</option>
                                                <option value="BVT" <?php if( $data[0]->country == "BVT" ) echo 'selected="selected"'; ?> >Bouvet Island</option>
                                                <option value="BRA" <?php if( $data[0]->country == "BRA" ) echo 'selected="selected"'; ?> >Brazil</option>
                                                <option value="IOT" <?php if( $data[0]->country == "IOT" ) echo 'selected="selected"'; ?> >British Indian Ocean Territory</option>
                                                <option value="BRN" <?php if( $data[0]->country == "BRN" ) echo 'selected="selected"'; ?> >Brunei Darussalam</option>
                                                <option value="BGR" <?php if( $data[0]->country == "BGR" ) echo 'selected="selected"'; ?> >Bulgaria</option>
                                                <option value="BFA" <?php if( $data[0]->country == "BFA" ) echo 'selected="selected"'; ?> >Burkina Faso</option>
                                                <option value="BDI" <?php if( $data[0]->country == "BDI" ) echo 'selected="selected"'; ?> >Burundi</option>
                                                <option value="KHM" <?php if( $data[0]->country == "KHM" ) echo 'selected="selected"'; ?> >Cambodia</option>
                                                <option value="CMR" <?php if( $data[0]->country == "CMR" ) echo 'selected="selected"'; ?> >Cameroon</option>
                                                <option value="CAN" <?php if( $data[0]->country == "CAN" ) echo 'selected="selected"'; ?> >Canada</option>
                                                <option value="CPV" <?php if( $data[0]->country == "CPV" ) echo 'selected="selected"'; ?> >Cape Verde</option>
                                                <option value="CYM" <?php if( $data[0]->country == "CYM" ) echo 'selected="selected"'; ?> >Cayman Islands</option>
                                                <option value="CAF" <?php if( $data[0]->country == "CAF" ) echo 'selected="selected"'; ?> >Central African Republic</option>
                                                <option value="TCD" <?php if( $data[0]->country == "TCD" ) echo 'selected="selected"'; ?> >Chad</option>
                                                <option value="CHL" <?php if( $data[0]->country == "CHL" ) echo 'selected="selected"'; ?> >Chile</option>
                                                <option value="CHN" <?php if( $data[0]->country == "CHN" ) echo 'selected="selected"'; ?> >China</option>
                                                <option value="CXR" <?php if( $data[0]->country == "CXR" ) echo 'selected="selected"'; ?> >Christmas Island</option>
                                                <option value="CCK" <?php if( $data[0]->country == "CCK" ) echo 'selected="selected"'; ?> >Cocos (Keeling) Islands</option>
                                                <option value="COL" <?php if( $data[0]->country == "COL" ) echo 'selected="selected"'; ?> >Colombia</option>
                                                <option value="COM" <?php if( $data[0]->country == "COM" ) echo 'selected="selected"'; ?> >Comoros</option>
                                                <option value="COG" <?php if( $data[0]->country == "COG" ) echo 'selected="selected"'; ?> >Congo</option>
                                                <option value="COD" <?php if( $data[0]->country == "COD" ) echo 'selected="selected"'; ?> >Congo, the Democratic Republic of the</option>
                                                <option value="COK" <?php if( $data[0]->country == "COK" ) echo 'selected="selected"'; ?> >Cook Islands</option>
                                                <option value="CRI" <?php if( $data[0]->country == "CRI" ) echo 'selected="selected"'; ?> >Costa Rica</option>
                                                <option value="CIV" <?php if( $data[0]->country == "CIV" ) echo 'selected="selected"'; ?> >Côte d'Ivoire</option>
                                                <option value="HRV" <?php if( $data[0]->country == "HRV" ) echo 'selected="selected"'; ?> >Croatia</option>
                                                <option value="CUB" <?php if( $data[0]->country == "CUB" ) echo 'selected="selected"'; ?> >Cuba</option>
                                                <option value="CUW" <?php if( $data[0]->country == "CUW" ) echo 'selected="selected"'; ?> >Curaçao</option>
                                                <option value="CYP" <?php if( $data[0]->country == "CYP" ) echo 'selected="selected"'; ?> >Cyprus</option>
                                                <option value="CZE" <?php if( $data[0]->country == "CZE" ) echo 'selected="selected"'; ?> >Czech Republic</option>
                                                <option value="DNK" <?php if( $data[0]->country == "DNK" ) echo 'selected="selected"'; ?> >Denmark</option>
                                                <option value="DJI" <?php if( $data[0]->country == "DJI" ) echo 'selected="selected"'; ?> >Djibouti</option>
                                                <option value="DMA" <?php if( $data[0]->country == "DMA" ) echo 'selected="selected"'; ?> >Dominica</option>
                                                <option value="DOM" <?php if( $data[0]->country == "DOM" ) echo 'selected="selected"'; ?> >Dominican Republic</option>
                                                <option value="ECU" <?php if( $data[0]->country == "ECU" ) echo 'selected="selected"'; ?> >Ecuador</option>
                                                <option value="EGY" <?php if( $data[0]->country == "EGY" ) echo 'selected="selected"'; ?> >Egypt</option>
                                                <option value="SLV" <?php if( $data[0]->country == "SLV" ) echo 'selected="selected"'; ?> >El Salvador</option>
                                                <option value="GNQ" <?php if( $data[0]->country == "GNQ" ) echo 'selected="selected"'; ?> >Equatorial Guinea</option>
                                                <option value="ERI" <?php if( $data[0]->country == "ERI" ) echo 'selected="selected"'; ?> >Eritrea</option>
                                                <option value="EST" <?php if( $data[0]->country == "EST" ) echo 'selected="selected"'; ?> >Estonia</option>
                                                <option value="ETH" <?php if( $data[0]->country == "ETH" ) echo 'selected="selected"'; ?> >Ethiopia</option>
                                                <option value="FLK" <?php if( $data[0]->country == "FLK" ) echo 'selected="selected"'; ?> >Falkland Islands (Malvinas)</option>
                                                <option value="FRO" <?php if( $data[0]->country == "FRO" ) echo 'selected="selected"'; ?> >Faroe Islands</option>
                                                <option value="FJI" <?php if( $data[0]->country == "FJI" ) echo 'selected="selected"'; ?> >Fiji</option>
                                                <option value="FIN" <?php if( $data[0]->country == "FIN" ) echo 'selected="selected"'; ?> >Finland</option>
                                                <option value="FRA" <?php if( $data[0]->country == "FRA" ) echo 'selected="selected"'; ?> >France</option>
                                                <option value="GUF" <?php if( $data[0]->country == "GUF" ) echo 'selected="selected"'; ?> >French Guiana</option>
                                                <option value="PYF" <?php if( $data[0]->country == "PYF" ) echo 'selected="selected"'; ?> >French Polynesia</option>
                                                <option value="ATF" <?php if( $data[0]->country == "ATF" ) echo 'selected="selected"'; ?> >French Southern Territories</option>
                                                <option value="GAB" <?php if( $data[0]->country == "GAB" ) echo 'selected="selected"'; ?> >Gabon</option>
                                                <option value="GMB" <?php if( $data[0]->country == "GMB" ) echo 'selected="selected"'; ?> >Gambia</option>
                                                <option value="GEO" <?php if( $data[0]->country == "GEO" ) echo 'selected="selected"'; ?> >Georgia</option>
                                                <option value="DEU" <?php if( $data[0]->country == "DEU" ) echo 'selected="selected"'; ?> >Germany</option>
                                                <option value="GHA" <?php if( $data[0]->country == "GHA" ) echo 'selected="selected"'; ?> >Ghana</option>
                                                <option value="GIB" <?php if( $data[0]->country == "GIB" ) echo 'selected="selected"'; ?> >Gibraltar</option>
                                                <option value="GRC" <?php if( $data[0]->country == "GRC" ) echo 'selected="selected"'; ?> >Greece</option>
                                                <option value="GRL" <?php if( $data[0]->country == "GRL" ) echo 'selected="selected"'; ?> >Greenland</option>
                                                <option value="GRD" <?php if( $data[0]->country == "GRD" ) echo 'selected="selected"'; ?> >Grenada</option>
                                                <option value="GLP" <?php if( $data[0]->country == "GLP" ) echo 'selected="selected"'; ?> >Guadeloupe</option>
                                                <option value="GUM" <?php if( $data[0]->country == "GUM" ) echo 'selected="selected"'; ?> >Guam</option>
                                                <option value="GTM" <?php if( $data[0]->country == "GTM" ) echo 'selected="selected"'; ?> >Guatemala</option>
                                                <option value="GGY" <?php if( $data[0]->country == "GGY" ) echo 'selected="selected"'; ?> >Guernsey</option>
                                                <option value="GIN" <?php if( $data[0]->country == "GIN" ) echo 'selected="selected"'; ?> >Guinea</option>
                                                <option value="GNB" <?php if( $data[0]->country == "GNB" ) echo 'selected="selected"'; ?> >Guinea-Bissau</option>
                                                <option value="GUY" <?php if( $data[0]->country == "GUY" ) echo 'selected="selected"'; ?> >Guyana</option>
                                                <option value="HTI" <?php if( $data[0]->country == "HTI" ) echo 'selected="selected"'; ?> >Haiti</option>
                                                <option value="HMD" <?php if( $data[0]->country == "HMD" ) echo 'selected="selected"'; ?> >Heard Island and McDonald Islands</option>
                                                <option value="VAT" <?php if( $data[0]->country == "VAT" ) echo 'selected="selected"'; ?> >Holy See (Vatican City State)</option>
                                                <option value="HND" <?php if( $data[0]->country == "HND" ) echo 'selected="selected"'; ?> >Honduras</option>
                                                <option value="HKG" <?php if( $data[0]->country == "HKG" ) echo 'selected="selected"'; ?> >Hong Kong</option>
                                                <option value="HUN" <?php if( $data[0]->country == "HUN" ) echo 'selected="selected"'; ?> >Hungary</option>
                                                <option value="ISL" <?php if( $data[0]->country == "ISL" ) echo 'selected="selected"'; ?> >Iceland</option>
                                                <option value="IND" <?php if( $data[0]->country == "IND" ) echo 'selected="selected"'; ?> >India</option>
                                                <option value="IDN" <?php if( $data[0]->country == "IDN" ) echo 'selected="selected"'; ?> >Indonesia</option>
                                                <option value="IRN" <?php if( $data[0]->country == "IRN" ) echo 'selected="selected"'; ?> >Iran, Islamic Republic of</option>
                                                <option value="IRQ" <?php if( $data[0]->country == "IRQ" ) echo 'selected="selected"'; ?> >Iraq</option>
                                                <option value="IRL" <?php if( $data[0]->country == "IRL" ) echo 'selected="selected"'; ?> >Ireland</option>
                                                <option value="IMN" <?php if( $data[0]->country == "IMN" ) echo 'selected="selected"'; ?> >Isle of Man</option>
                                                <option value="ISR" <?php if( $data[0]->country == "ISR" ) echo 'selected="selected"'; ?> >Israel</option>
                                                <option value="ITA" <?php if( $data[0]->country == "ITA" ) echo 'selected="selected"'; ?> >Italy</option>
                                                <option value="JAM" <?php if( $data[0]->country == "JAM" ) echo 'selected="selected"'; ?> >Jamaica</option>
                                                <option value="JPN" <?php if( $data[0]->country == "JPN" ) echo 'selected="selected"'; ?> >Japan</option>
                                                <option value="JEY" <?php if( $data[0]->country == "JEY" ) echo 'selected="selected"'; ?> >Jersey</option>
                                                <option value="JOR" <?php if( $data[0]->country == "JOR" ) echo 'selected="selected"'; ?> >Jordan</option>
                                                <option value="KAZ" <?php if( $data[0]->country == "KAZ" ) echo 'selected="selected"'; ?> >Kazakhstan</option>
                                                <option value="KEN" <?php if( $data[0]->country == "KEN" ) echo 'selected="selected"'; ?> >Kenya</option>
                                                <option value="KIR" <?php if( $data[0]->country == "KIR" ) echo 'selected="selected"'; ?> >Kiribati</option>
                                                <option value="PRK" <?php if( $data[0]->country == "PRK" ) echo 'selected="selected"'; ?> >Korea, Democratic People's Republic of</option>
                                                <option value="KOR" <?php if( $data[0]->country == "KOR" ) echo 'selected="selected"'; ?> >Korea, Republic of</option>
                                                <option value="KWT" <?php if( $data[0]->country == "KWT" ) echo 'selected="selected"'; ?> >Kuwait</option>
                                                <option value="KGZ" <?php if( $data[0]->country == "KGZ" ) echo 'selected="selected"'; ?> >Kyrgyzstan</option>
                                                <option value="LAO" <?php if( $data[0]->country == "LAO" ) echo 'selected="selected"'; ?> >Lao People's Democratic Republic</option>
                                                <option value="LVA" <?php if( $data[0]->country == "LVA" ) echo 'selected="selected"'; ?> >Latvia</option>
                                                <option value="LBN" <?php if( $data[0]->country == "LBN" ) echo 'selected="selected"'; ?> >Lebanon</option>
                                                <option value="LSO" <?php if( $data[0]->country == "LSO" ) echo 'selected="selected"'; ?> >Lesotho</option>
                                                <option value="LBR" <?php if( $data[0]->country == "LBR" ) echo 'selected="selected"'; ?> >Liberia</option>
                                                <option value="LBY" <?php if( $data[0]->country == "LBY" ) echo 'selected="selected"'; ?> >Libya</option>
                                                <option value="LIE" <?php if( $data[0]->country == "LIE" ) echo 'selected="selected"'; ?> >Liechtenstein</option>
                                                <option value="LTU" <?php if( $data[0]->country == "LTU" ) echo 'selected="selected"'; ?> >Lithuania</option>
                                                <option value="LUX" <?php if( $data[0]->country == "LUX" ) echo 'selected="selected"'; ?> >Luxembourg</option>
                                                <option value="MAC" <?php if( $data[0]->country == "MAC" ) echo 'selected="selected"'; ?> >Macao</option>
                                                <option value="MKD" <?php if( $data[0]->country == "MKD" ) echo 'selected="selected"'; ?> >Macedonia, the former Yugoslav Republic of</option>
                                                <option value="MDG" <?php if( $data[0]->country == "MDG" ) echo 'selected="selected"'; ?> >Madagascar</option>
                                                <option value="MWI" <?php if( $data[0]->country == "MWI" ) echo 'selected="selected"'; ?> >Malawi</option>
                                                <option value="MYS" <?php if( $data[0]->country == "MYS" ) echo 'selected="selected"'; ?> >Malaysia</option>
                                                <option value="MDV" <?php if( $data[0]->country == "MDV" ) echo 'selected="selected"'; ?> >Maldives</option>
                                                <option value="MLI" <?php if( $data[0]->country == "MLI" ) echo 'selected="selected"'; ?> >Mali</option>
                                                <option value="MLT" <?php if( $data[0]->country == "MLT" ) echo 'selected="selected"'; ?> >Malta</option>
                                                <option value="MHL" <?php if( $data[0]->country == "MHL" ) echo 'selected="selected"'; ?> >Marshall Islands</option>
                                                <option value="MTQ" <?php if( $data[0]->country == "MTQ" ) echo 'selected="selected"'; ?> >Martinique</option>
                                                <option value="MRT" <?php if( $data[0]->country == "MRT" ) echo 'selected="selected"'; ?> >Mauritania</option>
                                                <option value="MUS" <?php if( $data[0]->country == "MUS" ) echo 'selected="selected"'; ?> >Mauritius</option>
                                                <option value="MYT" <?php if( $data[0]->country == "MYT" ) echo 'selected="selected"'; ?> >Mayotte</option>
                                                <option value="MEX" <?php if( $data[0]->country == "MEX" ) echo 'selected="selected"'; ?> >Mexico</option>
                                                <option value="FSM" <?php if( $data[0]->country == "FSM" ) echo 'selected="selected"'; ?> >Micronesia, Federated States of</option>
                                                <option value="MDA" <?php if( $data[0]->country == "MDA" ) echo 'selected="selected"'; ?> >Moldova, Republic of</option>
                                                <option value="MCO" <?php if( $data[0]->country == "MCO" ) echo 'selected="selected"'; ?> >Monaco</option>
                                                <option value="MNG" <?php if( $data[0]->country == "MNG" ) echo 'selected="selected"'; ?> >Mongolia</option>
                                                <option value="MNE" <?php if( $data[0]->country == "MNE" ) echo 'selected="selected"'; ?> >Montenegro</option>
                                                <option value="MSR" <?php if( $data[0]->country == "MSR" ) echo 'selected="selected"'; ?> >Montserrat</option>
                                                <option value="MAR" <?php if( $data[0]->country == "MAR" ) echo 'selected="selected"'; ?> >Morocco</option>
                                                <option value="MOZ" <?php if( $data[0]->country == "MOZ" ) echo 'selected="selected"'; ?> >Mozambique</option>
                                                <option value="MMR" <?php if( $data[0]->country == "MMR" ) echo 'selected="selected"'; ?> >Myanmar</option>
                                                <option value="NAM" <?php if( $data[0]->country == "NAM" ) echo 'selected="selected"'; ?> >Namibia</option>
                                                <option value="NRU" <?php if( $data[0]->country == "NRU" ) echo 'selected="selected"'; ?> >Nauru</option>
                                                <option value="NPL" <?php if( $data[0]->country == "NPL" ) echo 'selected="selected"'; ?> >Nepal</option>
                                                <option value="NLD" <?php if( $data[0]->country == "NLD" ) echo 'selected="selected"'; ?> >Netherlands</option>
                                                <option value="NCL" <?php if( $data[0]->country == "NCL" ) echo 'selected="selected"'; ?> >New Caledonia</option>
                                                <option value="NZL" <?php if( $data[0]->country == "NZL" ) echo 'selected="selected"'; ?> >New Zealand</option>
                                                <option value="NIC" <?php if( $data[0]->country == "NIC" ) echo 'selected="selected"'; ?> >Nicaragua</option>
                                                <option value="NER" <?php if( $data[0]->country == "NER" ) echo 'selected="selected"'; ?> >Niger</option>
                                                <option value="NGA" <?php if( $data[0]->country == "NGA" ) echo 'selected="selected"'; ?> >Nigeria</option>
                                                <option value="NIU" <?php if( $data[0]->country == "NIU" ) echo 'selected="selected"'; ?> >Niue</option>
                                                <option value="NFK" <?php if( $data[0]->country == "NFK" ) echo 'selected="selected"'; ?> >Norfolk Island</option>
                                                <option value="MNP" <?php if( $data[0]->country == "MNP" ) echo 'selected="selected"'; ?> >Northern Mariana Islands</option>
                                                <option value="NOR" <?php if( $data[0]->country == "NOR" ) echo 'selected="selected"'; ?> >Norway</option>
                                                <option value="OMN" <?php if( $data[0]->country == "OMN" ) echo 'selected="selected"'; ?> >Oman</option>
                                                <option value="PAK" <?php if( $data[0]->country == "PAK" ) echo 'selected="selected"'; ?> >Pakistan</option>
                                                <option value="PLW" <?php if( $data[0]->country == "PLW" ) echo 'selected="selected"'; ?> >Palau</option>
                                                <option value="PSE" <?php if( $data[0]->country == "PSE" ) echo 'selected="selected"'; ?> >Palestinian Territory, Occupied</option>
                                                <option value="PAN" <?php if( $data[0]->country == "PAN" ) echo 'selected="selected"'; ?> >Panama</option>
                                                <option value="PNG" <?php if( $data[0]->country == "PNG" ) echo 'selected="selected"'; ?> >Papua New Guinea</option>
                                                <option value="PRY" <?php if( $data[0]->country == "PRY" ) echo 'selected="selected"'; ?> >Paraguay</option>
                                                <option value="PER" <?php if( $data[0]->country == "PER" ) echo 'selected="selected"'; ?> >Peru</option>
                                                <option value="PHL" <?php if( $data[0]->country == "PHL" ) echo 'selected="selected"'; ?> >Philippines</option>
                                                <option value="PCN" <?php if( $data[0]->country == "PCN" ) echo 'selected="selected"'; ?> >Pitcairn</option>
                                                <option value="POL" <?php if( $data[0]->country == "POL" ) echo 'selected="selected"'; ?> >Poland</option>
                                                <option value="PRT" <?php if( $data[0]->country == "PRT" ) echo 'selected="selected"'; ?> >Portugal</option>
                                                <option value="PRI" <?php if( $data[0]->country == "PRI" ) echo 'selected="selected"'; ?> >Puerto Rico</option>
                                                <option value="QAT" <?php if( $data[0]->country == "QAT" ) echo 'selected="selected"'; ?> >Qatar</option>
                                                <option value="REU" <?php if( $data[0]->country == "REU" ) echo 'selected="selected"'; ?> >Réunion</option>
                                                <option value="ROU" <?php if( $data[0]->country == "ROU" ) echo 'selected="selected"'; ?> >Romania</option>
                                                <option value="RUS" <?php if( $data[0]->country == "RUS" ) echo 'selected="selected"'; ?> >Russian Federation</option>
                                                <option value="RWA" <?php if( $data[0]->country == "RWA" ) echo 'selected="selected"'; ?> >Rwanda</option>
                                                <option value="BLM" <?php if( $data[0]->country == "BLM" ) echo 'selected="selected"'; ?> >Saint Barthélemy</option>
                                                <option value="SHN" <?php if( $data[0]->country == "SHN" ) echo 'selected="selected"'; ?> >Saint Helena, Ascension and Tristan da Cunha</option>
                                                <option value="KNA" <?php if( $data[0]->country == "KNA" ) echo 'selected="selected"'; ?> >Saint Kitts and Nevis</option>
                                                <option value="LCA" <?php if( $data[0]->country == "LCA" ) echo 'selected="selected"'; ?> >Saint Lucia</option>
                                                <option value="MAF" <?php if( $data[0]->country == "MAF" ) echo 'selected="selected"'; ?> >Saint Martin (French part)</option>
                                                <option value="SPM" <?php if( $data[0]->country == "SPM" ) echo 'selected="selected"'; ?> >Saint Pierre and Miquelon</option>
                                                <option value="VCT" <?php if( $data[0]->country == "VCT" ) echo 'selected="selected"'; ?> >Saint Vincent and the Grenadines</option>
                                                <option value="WSM" <?php if( $data[0]->country == "WSM" ) echo 'selected="selected"'; ?> >Samoa</option>
                                                <option value="SMR" <?php if( $data[0]->country == "SMR" ) echo 'selected="selected"'; ?> >San Marino</option>
                                                <option value="STP" <?php if( $data[0]->country == "STP" ) echo 'selected="selected"'; ?> >Sao Tome and Principe</option>
                                                <option value="SAU" <?php if( $data[0]->country == "SAU" ) echo 'selected="selected"'; ?> >Saudi Arabia</option>
                                                <option value="SEN" <?php if( $data[0]->country == "SEN" ) echo 'selected="selected"'; ?> >Senegal</option>
                                                <option value="SRB" <?php if( $data[0]->country == "SRB" ) echo 'selected="selected"'; ?> >Serbia</option>
                                                <option value="SYC" <?php if( $data[0]->country == "SYC" ) echo 'selected="selected"'; ?> >Seychelles</option>
                                                <option value="SLE" <?php if( $data[0]->country == "SLE" ) echo 'selected="selected"'; ?> >Sierra Leone</option>
                                                <option value="SGP" <?php if( $data[0]->country == "SGP" ) echo 'selected="selected"'; ?> >Singapore</option>
                                                <option value="SXM" <?php if( $data[0]->country == "SXM" ) echo 'selected="selected"'; ?> >Sint Maarten (Dutch part)</option>
                                                <option value="SVK" <?php if( $data[0]->country == "SVK" ) echo 'selected="selected"'; ?> >Slovakia</option>
                                                <option value="SVN" <?php if( $data[0]->country == "SVN" ) echo 'selected="selected"'; ?> >Slovenia</option>
                                                <option value="SLB" <?php if( $data[0]->country == "SLB" ) echo 'selected="selected"'; ?> >Solomon Islands</option>
                                                <option value="SOM" <?php if( $data[0]->country == "SOM" ) echo 'selected="selected"'; ?> >Somalia</option>
                                                <option value="ZAF" <?php if( $data[0]->country == "ZAF" ) echo 'selected="selected"'; ?> >South Africa</option>
                                                <option value="SGS" <?php if( $data[0]->country == "SGS" ) echo 'selected="selected"'; ?> >South Georgia and the South Sandwich Islands</option>
                                                <option value="SSD" <?php if( $data[0]->country == "SSD" ) echo 'selected="selected"'; ?> >South Sudan</option>
                                                <option value="ESP" <?php if( $data[0]->country == "ESP" ) echo 'selected="selected"'; ?> >Spain</option>
                                                <option value="LKA" <?php if( $data[0]->country == "LKA" ) echo 'selected="selected"'; ?> >Sri Lanka</option>
                                                <option value="SDN" <?php if( $data[0]->country == "SDN" ) echo 'selected="selected"'; ?> >Sudan</option>
                                                <option value="SUR" <?php if( $data[0]->country == "SUR" ) echo 'selected="selected"'; ?> >Suriname</option>
                                                <option value="SJM" <?php if( $data[0]->country == "SJM" ) echo 'selected="selected"'; ?> >Svalbard and Jan Mayen</option>
                                                <option value="SWZ" <?php if( $data[0]->country == "SWZ" ) echo 'selected="selected"'; ?> >Swaziland</option>
                                                <option value="SWE" <?php if( $data[0]->country == "SWE" ) echo 'selected="selected"'; ?> >Sweden</option>
                                                <option value="CHE" <?php if( $data[0]->country == "CHE" ) echo 'selected="selected"'; ?> >Switzerland</option>
                                                <option value="SYR" <?php if( $data[0]->country == "SYR" ) echo 'selected="selected"'; ?> >Syrian Arab Republic</option>
                                                <option value="TWN" <?php if( $data[0]->country == "TWN" ) echo 'selected="selected"'; ?> >Taiwan, Province of China</option>
                                                <option value="TJK" <?php if( $data[0]->country == "TJK" ) echo 'selected="selected"'; ?> >Tajikistan</option>
                                                <option value="TZA" <?php if( $data[0]->country == "TZA" ) echo 'selected="selected"'; ?> >Tanzania, United Republic of</option>
                                                <option value="THA" <?php if( $data[0]->country == "THA" ) echo 'selected="selected"'; ?> >Thailand</option>
                                                <option value="TLS" <?php if( $data[0]->country == "TLS" ) echo 'selected="selected"'; ?> >Timor-Leste</option>
                                                <option value="TGO" <?php if( $data[0]->country == "TGO" ) echo 'selected="selected"'; ?> >Togo</option>
                                                <option value="TKL" <?php if( $data[0]->country == "TKL" ) echo 'selected="selected"'; ?> >Tokelau</option>
                                                <option value="TON" <?php if( $data[0]->country == "TON" ) echo 'selected="selected"'; ?> >Tonga</option>
                                                <option value="TTO" <?php if( $data[0]->country == "TTO" ) echo 'selected="selected"'; ?> >Trinidad and Tobago</option>
                                                <option value="TUN" <?php if( $data[0]->country == "TUN" ) echo 'selected="selected"'; ?> >Tunisia</option>
                                                <option value="TUR" <?php if( $data[0]->country == "TUR" ) echo 'selected="selected"'; ?> >Turkey</option>
                                                <option value="TKM" <?php if( $data[0]->country == "TKM" ) echo 'selected="selected"'; ?> >Turkmenistan</option>
                                                <option value="TCA" <?php if( $data[0]->country == "TCA" ) echo 'selected="selected"'; ?> >Turks and Caicos Islands</option>
                                                <option value="TUV" <?php if( $data[0]->country == "TUV" ) echo 'selected="selected"'; ?> >Tuvalu</option>
                                                <option value="UGA" <?php if( $data[0]->country == "UGA" ) echo 'selected="selected"'; ?> >Uganda</option>
                                                <option value="UKR" <?php if( $data[0]->country == "UKR" ) echo 'selected="selected"'; ?> >Ukraine</option>
                                                <option value="ARE" <?php if( $data[0]->country == "ARE" ) echo 'selected="selected"'; ?> >United Arab Emirates</option>
                                                <option value="GBR" <?php if( $data[0]->country == "GBR" ) echo 'selected="selected"'; ?> >United Kingdom</option>
                                                <option value="USA" <?php if( $data[0]->country == "USA" ) echo 'selected="selected"'; ?> >United States</option>
                                                <option value="UMI" <?php if( $data[0]->country == "UMI" ) echo 'selected="selected"'; ?> >United States Minor Outlying Islands</option>
                                                <option value="URY" <?php if( $data[0]->country == "URY" ) echo 'selected="selected"'; ?> >Uruguay</option>
                                                <option value="UZB" <?php if( $data[0]->country == "UZB" ) echo 'selected="selected"'; ?> >Uzbekistan</option>
                                                <option value="VUT" <?php if( $data[0]->country == "VUT" ) echo 'selected="selected"'; ?> >Vanuatu</option>
                                                <option value="VEN" <?php if( $data[0]->country == "VEN" ) echo 'selected="selected"'; ?> >Venezuela, Bolivarian Republic of</option>
                                                <option value="VNM" <?php if( $data[0]->country == "VNM" ) echo 'selected="selected"'; ?> >Viet Nam</option>
                                                <option value="VGB" <?php if( $data[0]->country == "VGB" ) echo 'selected="selected"'; ?> >Virgin Islands, British</option>
                                                <option value="VIR" <?php if( $data[0]->country == "VIR" ) echo 'selected="selected"'; ?> >Virgin Islands, U.S.</option>
                                                <option value="WLF" <?php if( $data[0]->country == "WLF" ) echo 'selected="selected"'; ?> >Wallis and Futuna</option>
                                                <option value="ESH" <?php if( $data[0]->country == "ESH" ) echo 'selected="selected"'; ?> >Western Sahara</option>
                                                <option value="YEM" <?php if( $data[0]->country == "YEM" ) echo 'selected="selected"'; ?> >Yemen</option>
                                                <option value="ZMB" <?php if( $data[0]->country == "ZMB" ) echo 'selected="selected"'; ?> >Zambia</option>
                                                <option value="ZWE" <?php if( $data[0]->country == "ZWE" ) echo 'selected="selected"'; ?> >Zimbabwe</option>
                                            </select>

                                        </div>

                                        <!--end form-group-->

                                        <div class="col-md-6 col-sm-6 form-group">

                                            <label for="hire-a-resource-second-language">Second Language</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="hire-a-resource-second-language" id="hire-a-resource-second-language">
                                                <option value="arabic" <?php if( $data[0]->second_language == "arabic" ) echo 'selected="selected"'; ?> >Arabic</option>
                                                <option value="afrikaans" <?php if( $data[0]->second_language == "afrikaans" ) echo 'selected="selected"'; ?> >Afrikaans</option>
                                                <option value="bengali" <?php if( $data[0]->second_language == "bengali" ) echo 'selected="selected"'; ?> >Bengali</option>
                                                <option value="bulgarian" <?php if( $data[0]->second_language == "bulgarian" ) echo 'selected="selected"'; ?> >Bulgarian</option>
                                                <option value="chinese" <?php if( $data[0]->second_language == "chinese" ) echo 'selected="selected"'; ?> >Chinese</option>
                                                <option value="czech" <?php if( $data[0]->second_language == "czech" ) echo 'selected="selected"'; ?> >Czech</option>
                                                <option value="danish" <?php if( $data[0]->second_language == "danish" ) echo 'selected="selected"'; ?> >Danish</option>
                                                <option value="dutch" <?php if( $data[0]->second_language == "dutch" ) echo 'selected="selected"'; ?> >Dutch</option>
                                                <option value="english" <?php if( $data[0]->second_language == "english" ) echo 'selected="selected"'; ?> >English</option>
                                                <option value="french" <?php if( $data[0]->second_language == "french" ) echo 'selected="selected"'; ?> >French</option>
                                                <option value="german" <?php if( $data[0]->second_language == "german" ) echo 'selected="selected"'; ?> >German</option>
                                                <option value="greek" <?php if( $data[0]->second_language == "greek" ) echo 'selected="selected"'; ?> >Greek</option>
                                                <option value="hindi" <?php if( $data[0]->second_language == "hindi" ) echo 'selected="selected"'; ?> >Hindi</option>
                                                <option value="hungarian" <?php if( $data[0]->second_language == "hungarian" ) echo 'selected="selected"'; ?> >Hungarian</option>
                                                <option value="irish" <?php if( $data[0]->second_language == "irish" ) echo 'selected="selected"'; ?> >Irish</option>
                                                <option value="italian" <?php if( $data[0]->second_language == "italian" ) echo 'selected="selected"'; ?> >Italian</option>
                                                <option value="japanese" <?php if( $data[0]->second_language == "japanese" ) echo 'selected="selected"'; ?> >Japanese</option>
                                                <option value="korean" <?php if( $data[0]->second_language == "korean" ) echo 'selected="selected"'; ?> >Korean</option>
                                                <option value="latvian" <?php if( $data[0]->second_language == "latvian" ) echo 'selected="selected"'; ?> >Latvian</option>
                                                <option value="polish" <?php if( $data[0]->second_language == "polish" ) echo 'selected="selected"'; ?> >Polish</option>
                                                <option value="persian" <?php if( $data[0]->second_language == "persian" ) echo 'selected="selected"'; ?> >Persian</option>
                                                <option value="portuguese" <?php if( $data[0]->second_language == "portuguese" ) echo 'selected="selected"'; ?> >Portuguese</option>
                                                <option value="romanian" <?php if( $data[0]->second_language == "romanian" ) echo 'selected="selected"'; ?> >Romanian</option>
                                                <option value="russian" <?php if( $data[0]->second_language == "russian" ) echo 'selected="selected"'; ?> >Russian</option>
                                                <option value="swahili" <?php if( $data[0]->second_language == "swahili" ) echo 'selected="selected"'; ?> >Swahili</option>
                                                <option value="slovak" <?php if( $data[0]->second_language == "slovak" ) echo 'selected="selected"'; ?> >Slovak</option>
                                                <option value="slovenian" <?php if( $data[0]->second_language == "slovenian" ) echo 'selected="selected"'; ?> >Slovenian</option>
                                                <option value="spanish" <?php if( $data[0]->second_language == "spanish" ) echo 'selected="selected"'; ?> >Spanish</option>
                                                <option value="swedish" <?php if( $data[0]->second_language == "swedish" ) echo 'selected="selected"'; ?> >Swedish</option>
                                                <option value="turkish" <?php if( $data[0]->second_language == "turkish" ) echo 'selected="selected"'; ?> >Turkish</option>
                                                <option value="thai" <?php if( $data[0]->second_language == "thai" ) echo 'selected="selected"'; ?> >Thai</option>
                                                <option value="urdu" <?php if( $data[0]->second_language == "urdu" ) echo 'selected="selected"'; ?> >Urdu</option>
                                                <option value="other" <?php if( $data[0]->second_language == "other" ) echo 'selected="selected"'; ?> >Other</option>
                                            </select>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <div class="col-md-6 col-sm-6" id="div-tickets-category">

                                        <div class="form-group">

                                            <label for="tickets-category">Category</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="tickets-category" id="tickets-category">
                                                <option value="fun_n_entertainment" <?php if( $data[0]->category == "fun_n_entertainment" ) echo 'selected="selected"'; ?> >Fun &amp; Entertainment</option>
                                                <option value="education_n_informative" <?php if( $data[0]->category == "education_n_informative" ) echo 'selected="selected"'; ?> >Education &amp; Informative</option>
                                                <option value="games" <?php if( $data[0]->category == "games" ) echo 'selected="selected"'; ?> >Games</option>
                                                <option value="religious" <?php if( $data[0]->category == "religious" ) echo 'selected="selected"'; ?> >Religious</option>
                                                <option value="other" <?php if( $data[0]->category == "other" ) echo 'selected="selected"'; ?> >Other</option>
                                            </select>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->
                                    
                                    <div class="col-md-6 col-sm-6" id="div-learnings-category">

                                        <div class="form-group">

                                            <label for="learnings-category">Category</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="learnings-category" id="learnings-category">
                                                <option value="online" <?php if( $data[0]->category == "online" ) echo 'selected="selected"'; ?> >Online</option>
                                                <option value="in_class" <?php if( $data[0]->category == "in_class" ) echo 'selected="selected"'; ?> >In Class</option>
                                            </select>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-restaurants-category">

                                        <div class="form-group">

                                            <label for="restaurants-category">Category</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="restaurants-category" id="restaurants-category">
                                                <option value="fun" <?php if( $data[0]->category == "fun" ) echo 'selected="selected"'; ?> >Fun</option>
                                                <option value="education" <?php if( $data[0]->category == "education" ) echo 'selected="selected"'; ?> >Education</option>
                                                <option value="entertainment" <?php if( $data[0]->category == "entertainment" ) echo 'selected="selected"'; ?> >Entertainment</option>
                                                <option value="games" <?php if( $data[0]->category == "games" ) echo 'selected="selected"'; ?> >Games</option>
                                                <option value="religious" <?php if( $data[0]->category == "religious" ) echo 'selected="selected"'; ?> >Religious</option>
                                                <option value="informative" <?php if( $data[0]->category == "informative" ) echo 'selected="selected"'; ?> >Informative</option>
                                                <option value="other" <?php if( $data[0]->category == "other" ) echo 'selected="selected"'; ?> >Other</option>
                                            </select>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-12 col-sm-12" id="div-business-name">

                                        <div class="form-group">

                                            <label for="business-name">Business Name</label>

                                            <input type="text" class="form-control" name="business-name" id="business-name" placeholder="Business Name"  value="<?php echo $data[0]->business_name; ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->
                                    
                                    <div class="col-md-12 col-sm-12" id="div-tags">

                                        <div class="form-group">
                                    
                                            <label for="tags">Tags / Keywords</label>
        
                                            <input type="text" class="form-control" name="tags" id="tags" placeholder="+ Add tag"  value="<?php echo $data[0]->tags; ?>" />
        
                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-12 col-sm-12" id="div-openhouse-date">

                                        <div class="form-group">

                                            <label for="openhouse-date">Open House Date</label>

                                            <input type="text" class="form-control date-picker" name="openhouse-date" id="openhouse-date"  value="<?php echo date( 'm/d/Y' , strtotime($data[0]->openhouse_date) ); ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-12-->

                                    <div class="col-md-12 col-sm-12" id="div-date">

                                        <div class="form-group">

                                            <label for="date">Date</label>

                                            <input type="text" class="form-control date-picker" name="date" id="date" value="<?php echo date( 'm/d/Y' , strtotime($data[0]->date) ); ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-12-->

                                    <div class="col-md-6 col-sm-6" id="div-start-date">

                                        <div class="form-group">

                                            <label for="start-date">Start Date</label>

                                            <input type="text" class="form-control date-picker" name="start-date" id="start-date"  value="<?php echo date( 'm/d/Y' , strtotime($data[0]->start_date) ); ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-finish-date">

                                        <div class="form-group">

                                            <label for="finish-date">Finish Date</label>

                                            <input type="text" class="form-control date-picker" name="finish-date" id="finish-date"  value="<?php echo date( 'm/d/Y' , strtotime($data[0]->finish_date) ); ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-time-start">

                                        <div class="form-group">

                                            <label for="time-start">Time Start</label>

                                            <input type="time" class="form-control" name="time-start" id="time-start" value="<?php echo $data[0]->time_start; ?>"/>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-time-finish">

                                        <div class="form-group">

                                            <label for="time-finish">Time Finish</label>

                                            <input type="time" class="form-control" name="time-finish" id="time-finish" value="<?php echo $data[0]->time_finish; ?>"/>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-open-hour">

                                        <div class="form-group">

                                            <label for="open-hour">Open Hour</label>

                                            <input type="time" class="form-control" name="open-hour" id="open-hour"  value="<?php echo $data[0]->open_hour; ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-close-hour">

                                        <div class="form-group">

                                            <label for="close-hour">Close Hour</label>

                                            <input type="time" class="form-control" name="close-hour" id="close-hour"  value="<?php echo $data[0]->close_hour; ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-12 col-sm-12" id="div-details">

                                        <div class="form-group">
                                            <label for="details">Details</label>
                                            <textarea class="form-control" id="details" rows="4" name="details" placeholder="Details of listing"><?php echo $data[0]->details; ?></textarea>
                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-12-->

                                    <div class="col-md-12 col-sm-12" id="div-job-description">

                                        <div class="form-group">
                                            <label for="job-description">Job Description</label>
                                            <textarea class="form-control" id="job-description" rows="4" name="job-description" placeholder="Job description for listing"><?php echo $data[0]->job_description; ?></textarea>
                                        </div>

                                        <!--end form-group-->

                                    </div>
                                    
                                    <div class="col-md-6 col-sm-6" id="div-price">

                                        <div class="form-group">

                                            <label for="price">Price</label>

                                            <input type="number" class="form-control" name="price" id="price" min="0" value="<?php echo $data[0]->price; ?>"/>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-salary">

                                        <div class="form-group">

                                            <label for="salary">Salary</label>

                                            <input type="number" class="form-control" name="salary" id="salary" min="0"  value="<?php echo $data[0]->salary; ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->
                                    
                                    <div class="col-md-6 col-sm-6" id="div-hourly-rate">

                                        <div class="form-group">

                                            <label for="hourly-rate">Hourly Rate</label>

                                            <input type="number" class="form-control" name="hourly-rate" id="hourly-rate"  min="0" value="<?php echo $data[0]->hourly_rate; ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-original-price">

                                        <div class="form-group">

                                            <label for="original-price">Original Price</label>

                                            <input type="number" class="form-control" name="original-price" id="original-price" min="0" value="<?php echo $data[0]->original_price; ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->
                                    
                                    <div class="col-md-6 col-sm-6" id="div-discounted-price">

                                        <div class="form-group">

                                            <label for="discounted-price">Discounted Price</label>

                                            <input type="number" class="form-control" name="discounted-price" id="discounted-price" min="0" value="<?php echo $data[0]->discounted_price; ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-currency">

                                        <div class="form-group">

                                            <label for="currency">Currency</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8"  name="currency" id="currency">
												<option value="CRP" <?php if( $data[0]->currency == "CRP" ) echo 'selected="selected"'; ?> >Crypto Currency</option>
												<option value="USD" <?php if( $data[0]->currency == "USD" ) echo 'selected="selected"'; ?> >United States Dollars</option>
                                                <option value="EUR" <?php if( $data[0]->currency == "EUR" ) echo 'selected="selected"'; ?> >Euro</option>
                                                <option value="GBP" <?php if( $data[0]->currency == "GBP" ) echo 'selected="selected"'; ?> >United Kingdom Pounds</option>
                                                <option value="DZD" <?php if( $data[0]->currency == "DZD" ) echo 'selected="selected"'; ?> >Algeria Dinars</option>
                                                <option value="ARP" <?php if( $data[0]->currency == "ARP" ) echo 'selected="selected"'; ?> >Argentina Pesos</option>
                                                <option value="AUD" <?php if( $data[0]->currency == "AUD" ) echo 'selected="selected"'; ?> >Australia Dollars</option>
                                                <option value="ATS" <?php if( $data[0]->currency == "ATS" ) echo 'selected="selected"'; ?> >Austria Schillings</option>
                                                <option value="BSD" <?php if( $data[0]->currency == "BSD" ) echo 'selected="selected"'; ?> >Bahamas Dollars</option>
                                                <option value="BBD" <?php if( $data[0]->currency == "BBD" ) echo 'selected="selected"'; ?> >Barbados Dollars</option>
                                                <option value="BEF" <?php if( $data[0]->currency == "BEF" ) echo 'selected="selected"'; ?> >Belgium Francs</option>
                                                <option value="BMD" <?php if( $data[0]->currency == "BMD" ) echo 'selected="selected"'; ?> >Bermuda Dollars</option>
                                                <option value="BRR" <?php if( $data[0]->currency == "BRR" ) echo 'selected="selected"'; ?> >Brazil Real</option>
                                                <option value="BGL" <?php if( $data[0]->currency == "BGL" ) echo 'selected="selected"'; ?> >Bulgaria Lev</option>
                                                <option value="CAD" <?php if( $data[0]->currency == "CAD" ) echo 'selected="selected"'; ?> >Canada Dollars</option>
                                                <option value="CLP" <?php if( $data[0]->currency == "CLP" ) echo 'selected="selected"'; ?> >Chile Pesos</option>
                                                <option value="CNY" <?php if( $data[0]->currency == "CNY" ) echo 'selected="selected"'; ?> >China Yuan Renmimbi</option>
                                                <option value="CYP" <?php if( $data[0]->currency == "CYP" ) echo 'selected="selected"'; ?> >Cyprus Pounds</option>
                                                <option value="CSK" <?php if( $data[0]->currency == "CSK" ) echo 'selected="selected"'; ?> >Czech Republic Koruna</option>
                                                <option value="DKK" <?php if( $data[0]->currency == "DKK" ) echo 'selected="selected"'; ?> >Denmark Kroner</option>
                                                <option value="NLG" <?php if( $data[0]->currency == "NLG" ) echo 'selected="selected"'; ?> >Dutch Guilders</option>
                                                <option value="XCD" <?php if( $data[0]->currency == "XCD" ) echo 'selected="selected"'; ?> >Eastern Caribbean Dollars</option>
                                                <option value="EGP" <?php if( $data[0]->currency == "EGP" ) echo 'selected="selected"'; ?> >Egypt Pounds</option>
                                                <option value="FJD" <?php if( $data[0]->currency == "FJD" ) echo 'selected="selected"'; ?> >Fiji Dollars</option>
                                                <option value="FIM" <?php if( $data[0]->currency == "FIM" ) echo 'selected="selected"'; ?> >Finland Markka</option>
                                                <option value="FRF" <?php if( $data[0]->currency == "FRF" ) echo 'selected="selected"'; ?> >France Francs</option>
                                                <option value="DEM" <?php if( $data[0]->currency == "DEM" ) echo 'selected="selected"'; ?> >Germany Deutsche Marks</option>
                                                <option value="XAU" <?php if( $data[0]->currency == "XAU" ) echo 'selected="selected"'; ?> >Gold Ounces</option>
                                                <option value="GRD" <?php if( $data[0]->currency == "GRD" ) echo 'selected="selected"'; ?> >Greece Drachmas</option>
                                                <option value="HKD" <?php if( $data[0]->currency == "HKD" ) echo 'selected="selected"'; ?> >Hong Kong Dollars</option>
                                                <option value="HUF" <?php if( $data[0]->currency == "HUF" ) echo 'selected="selected"'; ?> >Hungary Forint</option>
                                                <option value="ISK" <?php if( $data[0]->currency == "ISK" ) echo 'selected="selected"'; ?> >Iceland Krona</option>
                                                <option value="INR" <?php if( $data[0]->currency == "INR" ) echo 'selected="selected"'; ?> >India Rupees</option>
                                                <option value="IDR" <?php if( $data[0]->currency == "IDR" ) echo 'selected="selected"'; ?> >Indonesia Rupiah</option>
                                                <option value="IEP" <?php if( $data[0]->currency == "IEP" ) echo 'selected="selected"'; ?> >Ireland Punt</option>
                                                <option value="ILS" <?php if( $data[0]->currency == "ILS" ) echo 'selected="selected"'; ?> >Israel New Shekels</option>
                                                <option value="ITL" <?php if( $data[0]->currency == "ITL" ) echo 'selected="selected"'; ?> >Italy Lira</option>
                                                <option value="JMD" <?php if( $data[0]->currency == "JMD" ) echo 'selected="selected"'; ?> >Jamaica Dollars</option>
                                                <option value="JPY" <?php if( $data[0]->currency == "JPY" ) echo 'selected="selected"'; ?> >Japan Yen</option>
                                                <option value="JOD" <?php if( $data[0]->currency == "JOD" ) echo 'selected="selected"'; ?> >Jordan Dinar</option>
                                                <option value="KRW" <?php if( $data[0]->currency == "KRW" ) echo 'selected="selected"'; ?> >Korea (South) Won</option>
                                                <option value="LBP" <?php if( $data[0]->currency == "LBP" ) echo 'selected="selected"'; ?> >Lebanon Pounds</option>
                                                <option value="LUF" <?php if( $data[0]->currency == "LUF" ) echo 'selected="selected"'; ?> >Luxembourg Francs</option>
                                                <option value="MYR" <?php if( $data[0]->currency == "MYR" ) echo 'selected="selected"'; ?> >Malaysia Ringgit</option>
                                                <option value="MXP" <?php if( $data[0]->currency == "MXP" ) echo 'selected="selected"'; ?> >Mexico Pesos</option>
                                                <option value="NLG" <?php if( $data[0]->currency == "NLG" ) echo 'selected="selected"'; ?> >Netherlands Guilders</option>
                                                <option value="NZD" <?php if( $data[0]->currency == "NZD" ) echo 'selected="selected"'; ?> >New Zealand Dollars</option>
                                                <option value="NOK" <?php if( $data[0]->currency == "NOK" ) echo 'selected="selected"'; ?> >Norway Kroner</option>
                                                <option value="PKR" <?php if( $data[0]->currency == "PKR" ) echo 'selected="selected"'; ?> >Pakistan Rupees</option>
                                                <option value="XPD" <?php if( $data[0]->currency == "XPD" ) echo 'selected="selected"'; ?> >Palladium Ounces</option>
                                                <option value="PHP" <?php if( $data[0]->currency == "PHP" ) echo 'selected="selected"'; ?> >Philippines Pesos</option>
                                                <option value="XPT" <?php if( $data[0]->currency == "XPT" ) echo 'selected="selected"'; ?> >Platinum Ounces</option>
                                                <option value="PLZ" <?php if( $data[0]->currency == "PLZ" ) echo 'selected="selected"'; ?> >Poland Zloty</option>
                                                <option value="PTE" <?php if( $data[0]->currency == "PTE" ) echo 'selected="selected"'; ?> >Portugal Escudo</option>
                                                <option value="ROL" <?php if( $data[0]->currency == "ROL" ) echo 'selected="selected"'; ?> >Romania Leu</option>
                                                <option value="RUR" <?php if( $data[0]->currency == "RUR" ) echo 'selected="selected"'; ?> >Russia Rubles</option>
                                                <option value="SAR" <?php if( $data[0]->currency == "SAR" ) echo 'selected="selected"'; ?> >Saudi Arabia Riyal</option>
                                                <option value="XAG" <?php if( $data[0]->currency == "XAG" ) echo 'selected="selected"'; ?> >Silver Ounces</option>
                                                <option value="SGD" <?php if( $data[0]->currency == "SGD" ) echo 'selected="selected"'; ?> >Singapore Dollars</option>
                                                <option value="SKK" <?php if( $data[0]->currency == "SKK" ) echo 'selected="selected"'; ?> >Slovakia Koruna</option>
                                                <option value="ZAR" <?php if( $data[0]->currency == "ZAR" ) echo 'selected="selected"'; ?> >South Africa Rand</option>
                                                <option value="KRW" <?php if( $data[0]->currency == "KRW" ) echo 'selected="selected"'; ?> >South Korea Won</option>
                                                <option value="ESP" <?php if( $data[0]->currency == "ESP" ) echo 'selected="selected"'; ?> >Spain Pesetas</option>
                                                <option value="XDR" <?php if( $data[0]->currency == "XDR" ) echo 'selected="selected"'; ?> >Special Drawing Right (IMF)</option>
                                                <option value="SDD" <?php if( $data[0]->currency == "SDD" ) echo 'selected="selected"'; ?> >Sudan Dinar</option>
                                                <option value="SEK" <?php if( $data[0]->currency == "SEK" ) echo 'selected="selected"'; ?> >Sweden Krona</option>
                                                <option value="CHF" <?php if( $data[0]->currency == "CHF" ) echo 'selected="selected"'; ?> >Switzerland Francs</option>
                                                <option value="TWD" <?php if( $data[0]->currency == "TWD" ) echo 'selected="selected"'; ?> >Taiwan Dollars</option>
                                                <option value="THB" <?php if( $data[0]->currency == "THB" ) echo 'selected="selected"'; ?> >Thailand Baht</option>
                                                <option value="TTD" <?php if( $data[0]->currency == "TTD" ) echo 'selected="selected"'; ?> >Trinidad and Tobago Dollars</option>
                                                <option value="TRL" <?php if( $data[0]->currency == "TRL" ) echo 'selected="selected"'; ?> >Turkey Lira</option>
                                                <option value="VEB" <?php if( $data[0]->currency == "VEB" ) echo 'selected="selected"'; ?> >Venezuela Bolivar</option>
                                                <option value="ZMK" <?php if( $data[0]->currency == "ZMK" ) echo 'selected="selected"'; ?> >Zambia Kwacha</option>
                                                <option value="EUR" <?php if( $data[0]->currency == "EUR" ) echo 'selected="selected"'; ?> >Euro</option>
                                                <option value="XCD" <?php if( $data[0]->currency == "XCD" ) echo 'selected="selected"'; ?> >Eastern Caribbean Dollars</option>
                                                <option value="XDR" <?php if( $data[0]->currency == "XDR" ) echo 'selected="selected"'; ?> >Special Drawing Right (IMF)</option>
                                                <option value="XAG" <?php if( $data[0]->currency == "XAG" ) echo 'selected="selected"'; ?> >Silver Ounces</option>
                                                <option value="XAU" <?php if( $data[0]->currency == "XAU" ) echo 'selected="selected"'; ?> >Gold Ounces</option>
                                                <option value="XPD" <?php if( $data[0]->currency == "XPD" ) echo 'selected="selected"'; ?> >Palladium Ounces</option>
                                                <option value="XPT" <?php if( $data[0]->currency == "XPT" ) echo 'selected="selected"'; ?> >Platinum Ounces</option>
                                            </select>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                </div>

                                <!--end col-md-12-->
                            
                            </section>

                            <section id="section-address">

                                <div class="row">
                                    
                                    <div class="col-md-12 col-sm-12">
                                    
                                        <h3>Contact</h3>
                                    
                                    </div>

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="zipcode">City / Zip code</label>

                                            <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="City / Zip code" value="<?php echo $data[0]->zipcode; ?>" />

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

                                            <input type="text" class="form-control" name="contact-name" id="contact-name" placeholder="Contact Name" value="<?php echo $data[0]->contact_name; ?>" />

                                        </div>

                                        <!--end form-group-->

                                        <div class="form-group">

                                            <label for="contact-number">Contact Number</label>

                                            <input type="text" class="form-control" name="contact-number" id="contact-number" placeholder="Contact number" value="<?php echo $data[0]->contact_number; ?>" />

                                        </div>

                                        <!--end form-group-->

                                        <div class="form-group">

                                            <label for="contact-email">Contact Email</label>

                                            <input type="email" class="form-control" name="contact-email" id="contact-email" placeholder="hello@example.com" value="<?php echo $data[0]->contact_email; ?>" />

                                        </div>

                                        <!--end form-group-->

                                        <div class="form-group">

                                            <label for="contact-website">Contact Website</label>

                                            <input type="text" class="form-control" name="contact-website" id="contact-website" placeholder="https://www.example.com" value="<?php echo $data[0]->contact_website; ?>" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-12 col-sm-12">
                                    
                                        <h3>Profile Privacy</h3>

                                        <div class="col-md-12 col-sm-12">

                                            <div class="form-group">

                                                <input type="radio" class="" id="profile-yes" name="profile-privacy" value="1" <?php if( $data[0]->profile == "1" ) echo 'checked="true"'; ?> />

                                                <label for="profile-yes" style="position: relative; bottom: 3px;left: 5px;">APPEAR IN POST AND PROFESSINAL PROFILE</label>

                                            </div>

                                        </div>

                                        <!--end col-md-12-->

                                        <div class="col-md-12 col-sm-12">

                                            <div class="form-group">

                                                <input type="radio" class="" id="profile-no" name="profile-privacy" value="0" <?php if( $data[0]->profile == "0" ) echo 'checked="true"'; ?> />

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
                                                <option value="full_time" <?php if( $data[0]->type == "full_time" ) echo 'selected="selected"'; ?> >Full Time</option>
                                                <option value="part_time" <?php if( $data[0]->type == "part_time" ) echo 'selected="selected"'; ?> >Part Type</option>
                                                <option value="remote" <?php if( $data[0]->type == "remote" ) echo 'selected="selected"'; ?> >Remote</option>
                                            </select>

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="jobs-status">Jobs Status</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" id="jobs-status" name="jobs-status">
                                                <option value="contract" <?php if( $data[0]->status == "contract" ) echo 'selected="selected"'; ?> >Contract</option>
                                                <option value="temp" <?php if( $data[0]->status == "temp" ) echo 'selected="selected"'; ?> >Temp</option>
                                                <option value="perm" <?php if( $data[0]->status == "perm" ) echo 'selected="selected"'; ?> >Perm</option>
                                                <option value="temp_to_perm" <?php if( $data[0]->status == "temp_to_perm" ) echo 'selected="selected"'; ?> >Temp to Perm</option>
                                                <option value="contract_to_hire" <?php if( $data[0]->status == "contract_to_hire" ) echo 'selected="selected"'; ?> >Contract to Hire</option>
                                                <option value="intern" <?php if( $data[0]->status == "intern" ) echo 'selected="selected"'; ?> >Intern</option>
                                            </select>

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="jobs-industry">Jobs Industry</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" id="jobs-industry" name="jobs-industry">
                                                <option value="agriculture_n_food" <?php if( $data[0]->industry == "agriculture_n_food" ) echo 'selected="selected"'; ?> >Agriculture &amp;  Food</option>
                                                <option value="architecture_n_construction" <?php if( $data[0]->industry == "architecture_n_construction" ) echo 'selected="selected"'; ?> >Architecture &amp; Construction</option>
                                                <option value="audio_video_technology_n_communications" <?php if( $data[0]->industry == "audio_video_technology_n_communications" ) echo 'selected="selected"'; ?> >Audio/Video Technology &amp; Communications</option>
                                                <option value="accounting_n_finance" <?php if( $data[0]->industry == "accounting_n_finance" ) echo 'selected="selected"'; ?> >Accounting &amp; Finance</option>
                                                <option value="arts_n_culture" <?php if( $data[0]->industry == "arts_n_culture" ) echo 'selected="selected"'; ?> >Arts &amp; Culture</option>
                                                <option value="business_management_n_administration" <?php if( $data[0]->industry == "business_management_n_administration" ) echo 'selected="selected"'; ?> >Business Management &amp; Administration</option>
                                                <option value="construction" <?php if( $data[0]->industry == "construction" ) echo 'selected="selected"'; ?> >Construction</option>
                                                <option value="chemcials" <?php if( $data[0]->industry == "chemcials" ) echo 'selected="selected"'; ?> >Chemcials</option>
                                                <option value="consumer_services" <?php if( $data[0]->industry == "consumer_services" ) echo 'selected="selected"'; ?> >Consumer Services</option>
                                                <option value="defense" <?php if( $data[0]->industry == "defense" ) echo 'selected="selected"'; ?> >Defense</option>
                                                <option value="education_n_training" <?php if( $data[0]->industry == "education_n_training" ) echo 'selected="selected"'; ?> >Education &amp; Training</option>
                                                <option value="government_n_public_administration" <?php if( $data[0]->industry == "government_n_public_administration" ) echo 'selected="selected"'; ?> >Government &amp; Public Administration</option>
                                                <option value="health_science" <?php if( $data[0]->industry == "health_science" ) echo 'selected="selected"'; ?> >Health Science</option>
                                                <option value="hospitality_n_tourism" <?php if( $data[0]->industry == "hospitality_n_tourism" ) echo 'selected="selected"'; ?> >Hospitality &amp; Tourism</option>
                                                <option value="human_services_pharma_n_biotech" <?php if( $data[0]->industry == "human_services_pharma_n_biotech" ) echo 'selected="selected"'; ?> >Human Services, Pharma &amp; Biotech</option>
                                                <option value="home_interior" <?php if( $data[0]->industry == "home_interior" ) echo 'selected="selected"'; ?> >Home Interior</option>
                                                <option value="home_exterior" <?php if( $data[0]->industry == "home_exterior" ) echo 'selected="selected"'; ?> >Home Exterior</option>
                                                <option value="information_technology" <?php if( $data[0]->industry == "information_technology" ) echo 'selected="selected"'; ?> >Information Technology</option>
                                                <option value="telecommunication" <?php if( $data[0]->industry == "telecommunication" ) echo 'selected="selected"'; ?> >Telecommunication</option>
                                                <option value="leisure_n_hospitality" <?php if( $data[0]->industry == "leisure_n_hospitality" ) echo 'selected="selected"'; ?> >Leisure &amp; Hospitality</option>
                                                <option value="legal_n_taxation" <?php if( $data[0]->industry == "legal_n_taxation" ) echo 'selected="selected"'; ?> >Legal &amp; Taxation</option>
                                                <option value="law_public_safety_corrections_n_security" <?php if( $data[0]->industry == "law_public_safety_corrections_n_security" ) echo 'selected="selected"'; ?> >Law, Public Safety, Corrections &amp; Security</option>
                                                <option value="manufacturing" <?php if( $data[0]->industry == "manufacturing" ) echo 'selected="selected"'; ?> >Manufacturing</option>
                                                <option value="marketing_n_sales" <?php if( $data[0]->industry == "marketing_n_sales" ) echo 'selected="selected"'; ?> >Marketing &amp; Sales</option>
                                                <option value="media_n_entertainment" <?php if( $data[0]->industry == "media_n_entertainment" ) echo 'selected="selected"'; ?> >Media &amp; Entertainment</option>
                                                <option value="natural_resources_n_mining" <?php if( $data[0]->industry == "natural_resources_n_mining" ) echo 'selected="selected"'; ?> >Natural resources &amp; Mining</option>
                                                <option value="real_estate" <?php if( $data[0]->industry == "real_estate" ) echo 'selected="selected"'; ?> >Real Estate</option>
                                                <option value="repair_n_maintainence" <?php if( $data[0]->industry == "repair_n_maintainence" ) echo 'selected="selected"'; ?> >Repair &amp; Maintainence</option>
                                                <option value="retaurants" <?php if( $data[0]->industry == "retaurants" ) echo 'selected="selected"'; ?> >Retaurants</option>
                                                <option value="not_for_profit" <?php if( $data[0]->industry == "not_for_profit" ) echo 'selected="selected"'; ?> >Not for Profit</option>
                                                <option value="professional_n_business_services" <?php if( $data[0]->industry == "professional_n_business_services" ) echo 'selected="selected"'; ?> >Professional &amp; Business Services</option>
                                                <option value="other_services" <?php if( $data[0]->industry == "other_services" ) echo 'selected="selected"'; ?> >Other Services</option>
                                                <option value="retail_wholesale_n_distributions" <?php if( $data[0]->industry == "retail_wholesale_n_distributions" ) echo 'selected="selected"'; ?> >Retail, Wholesale &amp; Distributions</option>
                                                <option value="science_technology_engineering_n_mathematics" <?php if( $data[0]->industry == "science_technology_engineering_n_mathematics" ) echo 'selected="selected"'; ?> >Science, Technology, Engineering &amp; Mathematics</option>
                                                <option value="sports" <?php if( $data[0]->industry == "sports" ) echo 'selected="selected"'; ?> >Sports</option>
                                                <option value="transportation_distribution_n_logistics" <?php if( $data[0]->industry == "transportation_distribution_n_logistics" ) echo 'selected="selected"'; ?> >Transportation, Distribution &amp; Logistics</option>
                                                <option value="utility" <?php if( $data[0]->industry == "utility" ) echo 'selected="selected"'; ?> >Utility</option>
                                                <option value="other" <?php if( $data[0]->industry == "other" ) echo 'selected="selected"'; ?> >Other</option>
                                            </select>

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="jobs-function">Jobs Function</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" id="jobs-function" name="jobs-function">
                                                <option value="accounting_careers" <?php if( $data[0]->function == "accounting_careers" ) echo 'selected="selected"'; ?> >Accounting Careers</option>
                                                <option value="administrative_careers" <?php if( $data[0]->function == "administrative_careers" ) echo 'selected="selected"'; ?> >Administrative Careers</option>
                                                <option value="advertising_careers" <?php if( $data[0]->function == "advertising_careers" ) echo 'selected="selected"'; ?> >Advertising Careers</option>
                                                <option value="aeronautics_careers" <?php if( $data[0]->function == "aeronautics_careers" ) echo 'selected="selected"'; ?> >Aeronautics Careers</option>
                                                <option value="agriculture_n_fishing_careers" <?php if( $data[0]->function == "agriculture_n_fishing_careers" ) echo 'selected="selected"'; ?> >Agriculture &amp; Fishing Careers</option>
                                                <option value="animal_services_careers" <?php if( $data[0]->function == "animal_services_careers" ) echo 'selected="selected"'; ?> >Animal Services Careers</option>
                                                <option value="automotive_careers" <?php if( $data[0]->function == "automotive_careers" ) echo 'selected="selected"'; ?> >Automotive Careers</option>
                                                <option value="banking_careers" <?php if( $data[0]->function == "banking_careers" ) echo 'selected="selected"'; ?> >Banking Careers</option>
                                                <option value="biotechnology_careers" <?php if( $data[0]->function == "biotechnology_careers" ) echo 'selected="selected"'; ?> >Biotechnology Careers</option>
                                                <option value="business_careers" <?php if( $data[0]->function == "business_careers" ) echo 'selected="selected"'; ?> >Business Careers</option>
                                                <option value="charity_careers" <?php if( $data[0]->function == "charity_careers" ) echo 'selected="selected"'; ?> >Charity Careers</option>
                                                <option value="construction_careers" <?php if( $data[0]->function == "construction_careers" ) echo 'selected="selected"'; ?> >Construction Careers</option>
                                                <option value="creative_design_careers" <?php if( $data[0]->function == "creative_design_careers" ) echo 'selected="selected"'; ?> >Creative Design Careers</option>
                                                <option value="customer_service_careers" <?php if( $data[0]->function == "customer_service_careers" ) echo 'selected="selected"'; ?> >Customer Service Careers</option>
                                                <option value="editorial_careers" <?php if( $data[0]->function == "editorial_careers" ) echo 'selected="selected"'; ?> >Editorial Careers</option>
                                                <option value="education_careers" <?php if( $data[0]->function == "education_careers" ) echo 'selected="selected"'; ?> >Education Careers</option>
                                                <option value="energy_careers" <?php if( $data[0]->function == "energy_careers" ) echo 'selected="selected"'; ?> >Energy Careers</option>
                                                <option value="engineering_careers" <?php if( $data[0]->function == "engineering_careers" ) echo 'selected="selected"'; ?> >Engineering Careers</option>
                                                <option value="environmental_careers" <?php if( $data[0]->function == "environmental_careers" ) echo 'selected="selected"'; ?> >Environmental Careers</option>
                                                <option value="executive_careers" <?php if( $data[0]->function == "executive_careers" ) echo 'selected="selected"'; ?> >Executive Careers</option>
                                                <option value="finance_careers" <?php if( $data[0]->function == "finance_careers" ) echo 'selected="selected"'; ?> >Finance Careers</option>
                                                <option value="food_service_careers" <?php if( $data[0]->function == "food_service_careers" ) echo 'selected="selected"'; ?> >Food Service Careers</option>
                                                <option value="government_careers" <?php if( $data[0]->function == "government_careers" ) echo 'selected="selected"'; ?> >Government Careers</option>
                                                <option value="healthcare_careers" <?php if( $data[0]->function == "healthcare_careers" ) echo 'selected="selected"'; ?> >Healthcare Careers</option>
                                                <option value="hospitality_careers" <?php if( $data[0]->function == "hospitality_careers" ) echo 'selected="selected"'; ?> >Hospitality Careers</option>
                                                <option value="human_resource_careers" <?php if( $data[0]->function == "human_resource_careers" ) echo 'selected="selected"'; ?> >Human Resource Careers</option>
                                                <option value="human_services_careers" <?php if( $data[0]->function == "human_services_careers" ) echo 'selected="selected"'; ?> >Human Services Careers</option>
                                                <option value="information_technology_careers" <?php if( $data[0]->function == "information_technology_careers" ) echo 'selected="selected"'; ?> >Information Technology Careers</option>
                                                <option value="insurance_careers" <?php if( $data[0]->function == "insurance_careers" ) echo 'selected="selected"'; ?> >Insurance Careers</option>
                                                <option value="international_careers" <?php if( $data[0]->function == "international_careers" ) echo 'selected="selected"'; ?> >International Careers</option>
                                                <option value="internet_careers" <?php if( $data[0]->function == "internet_careers" ) echo 'selected="selected"'; ?> >Internet Careers</option>
                                                <option value="language_translator_careers" <?php if( $data[0]->function == "language_translator_careers" ) echo 'selected="selected"'; ?> >Language Translator Careers</option>
                                                <option value="legal_careers" <?php if( $data[0]->function == "legal_careers" ) echo 'selected="selected"'; ?> >Legal Careers</option>
                                                <option value="logistic_careers" <?php if( $data[0]->function == "logistic_careers" ) echo 'selected="selected"'; ?> >Logistic Careers</option>
                                                <option value="maintenance_careers" <?php if( $data[0]->function == "maintenance_careers" ) echo 'selected="selected"'; ?> >Maintenance Careers</option>
                                                <option value="manufacturing_careers" <?php if( $data[0]->function == "manufacturing_careers" ) echo 'selected="selected"'; ?> >Manufacturing Careers</option>
                                                <option value="marketing_careers" <?php if( $data[0]->function == "marketing_careers" ) echo 'selected="selected"'; ?> >Marketing Careers</option>
                                                <option value="media_careers" <?php if( $data[0]->function == "media_careers" ) echo 'selected="selected"'; ?> >Media Careers</option>
                                                <option value="military_careers" <?php if( $data[0]->function == "military_careers" ) echo 'selected="selected"'; ?> >Military Careers</option>
                                                <option value="overseas_careers" <?php if( $data[0]->function == "overseas_careers" ) echo 'selected="selected"'; ?> >Overseas Careers</option>
                                                <option value="part_time_careers" <?php if( $data[0]->function == "part_time_careers" ) echo 'selected="selected"'; ?> >Part Time Careers</option>
                                                <option value="personal_service_careers" <?php if( $data[0]->function == "personal_service_careers" ) echo 'selected="selected"'; ?> >Personal Service Careers</option>
                                                <option value="production_n_operations_careers" <?php if( $data[0]->function == "production_n_operations_careers" ) echo 'selected="selected"'; ?> >Production &amp; Operations Careers</option>
                                                <option value="project_management_careers" <?php if( $data[0]->function == "project_management_careers" ) echo 'selected="selected"'; ?> >Project Management Careers</option>
                                                <option value="quality_assurance_careers" <?php if( $data[0]->function == "quality_assurance_careers" ) echo 'selected="selected"'; ?> >Quality Assurance Careers</option>
                                                <option value="real_estate_careers" <?php if( $data[0]->function == "real_estate_careers" ) echo 'selected="selected"'; ?> >Real Estate Careers</option>
                                                <option value="religious_careers" <?php if( $data[0]->function == "religious_careers" ) echo 'selected="selected"'; ?> >Religious Careers</option>
                                                <option value="research_n_development_careers" <?php if( $data[0]->function == "research_n_development_careers" ) echo 'selected="selected"'; ?> >Research &amp; Development Careers</option>
                                                <option value="retail_careers" <?php if( $data[0]->function == "retail_careers" ) echo 'selected="selected"'; ?> >Retail Careers</option>
                                                <option value="sales_careers" <?php if( $data[0]->function == "sales_careers" ) echo 'selected="selected"'; ?> >Sales Careers</option>
                                                <option value="science_careers" <?php if( $data[0]->function == "science_careers" ) echo 'selected="selected"'; ?> >Science Careers</option>
                                                <option value="security_careers" <?php if( $data[0]->function == "security_careers" ) echo 'selected="selected"'; ?> >Security Careers</option>
                                                <option value="skilled_trades_careers" <?php if( $data[0]->function == "skilled_trades_careers" ) echo 'selected="selected"'; ?> >Skilled Trades Careers</option>
                                                <option value="sports_careers" <?php if( $data[0]->function == "sports_careers" ) echo 'selected="selected"'; ?> >Sports Careers</option>
                                                <option value="technology_careers" <?php if( $data[0]->function == "technology_careers" ) echo 'selected="selected"'; ?> >Technology Careers</option>
                                                <option value="telecommunications_careers" <?php if( $data[0]->function == "telecommunications_careers" ) echo 'selected="selected"'; ?> >Telecommunications Careers</option>
                                                <option value="transportation_careers" <?php if( $data[0]->function == "transportation_careers" ) echo 'selected="selected"'; ?> >Transportation Careers</option>
                                                <option value="travel_service_careers" <?php if( $data[0]->function == "travel_service_careers" ) echo 'selected="selected"'; ?> >Travel Service Careers</option>
                                                <option value="web_careers" <?php if( $data[0]->function == "web_careers" ) echo 'selected="selected"'; ?> >Web Careers</option>
                                                <option value="other" <?php if( $data[0]->function == "other" ) echo 'selected="selected"'; ?> >Other</option>
                                            </select>

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="jobs-experience">Jobs Experience (In years)</label>

                                            <input type="text" class="form-control" name="jobs-experience" id="jobs-experience" placeholder="Jobs Experience"  value="<?php echo $data[0]->experience; ?>" />

                                        </div>
                                        <!--end form-group-->

                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="jobs-education">Jobs Education</label>

                                            <input type="text" class="form-control" name="jobs-education" id="jobs-education" placeholder="Jobs Education"  value="<?php echo $data[0]->education; ?>" />

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="jobs-skill">Jobs Skill</label>

                                            <input type="text" class="form-control" name="jobs-skill" id="jobs-skill" placeholder="Jobs Skill"  value="<?php echo $data[0]->skill; ?>" />

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="jobs-software">Jobs Software</label>

                                            <input type="text" class="form-control" name="jobs-software" id="jobs-software" placeholder="Jobs Software"  value="<?php echo $data[0]->software; ?>" />

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

                                            <input type="number" class="form-control" name="realty-bed" id="realty-bed" placeholder="Bed" min="0"  value="<?php echo $data[0]->bed; ?>" />

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="realty-bath">Bath</label>

                                            <input type="number" class="form-control" name="realty-bath" id="realty-bath" placeholder="Bath" min="0"  value="<?php echo $data[0]->bath; ?>" />

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="realty-lot">Lot</label>

                                            <input type="text" class="form-control" name="realty-lot" id="realty-lot" placeholder="Lot"  value="<?php echo $data[0]->lot; ?>" />

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="realty-sewerage">Sewerage</label>

                                            <input type="text" class="form-control" name="realty-sewerage" id="realty-sewerage" placeholder="Sewerage"  value="<?php echo $data[0]->sewerage; ?>" />

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="realty-water">Water</label>

                                            <input type="text" class="form-control" name="realty-water" id="realty-water" placeholder="Water" value="<?php echo $data[0]->water; ?>" />

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="realty-gas">Gas</label>

                                            <input type="text" class="form-control" name="realty-gas" id="realty-gas" placeholder="Gas"  value="<?php echo $data[0]->gas; ?>" />

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="realty-tax">Tax</label>

                                            <input type="number" class="form-control" name="realty-tax" id="realty-tax" placeholder="Tax" min="0"  value="<?php echo $data[0]->tax; ?>" />

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="realty-mls">MLS</label>

                                            <input type="text" class="form-control" name="realty-mls" id="realty-mls" placeholder="MLS"  value="<?php echo $data[0]->mls; ?>" />

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
                                            $images = json_decode($data[0]->file);

                                            for( $i=1 ; $i<=sizeof($images) ; $i++)
                                            {?>

                                                <div id="previous-image-<?php echo $i; ?>" style="display:inline-block;padding:0px 20px 20px 20px;background-color: rgba(0, 0, 0, 0.03);border-radius:2px;border: 2px solid rgba(0, 0, 0, 0.1);cursor: pointer; margin-right:20px;">
                                                    <input type="hidden" name="previous-images[]" value="<?php echo $images[$i-1]; ?>" />
                                                    <span style="display: block;text-align: right;"><a class="delete-previous" onclick="remove_image(<?php echo $i; ?>);" style="color:white;background-color:red; padding: 1px 7px 3px 7px; border-radius: 50%;position: relative;top: -10px;left: 25px;">x</a></span>
                                                    <img class="previous-image" style="max-height:100px;" src="<?php echo base_url() . $images[$i-1]; ?>" />  
                                                </div>

                                        <?php
                                            }
                                        ?>
                                    </div>

                                </div>
                                
                                <div class="file-upload-previews">
                                    
                                </div>

                                <div class="file-upload">

                                    <input type="file" id="file-upload-input" name="files[]" class="file-upload-input with-preview" multiple title="Click to add files" maxlength="<?php echo 10 - sizeof( json_decode($data[0]->file) ); ?>" accept="gif|jpg|png" <?php if(sizeof( json_decode($data[0]->file) ) == 0) echo 'required'; ?> />

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
    $('#submit-listing-form').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $("#form-notification").html("");

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
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    $("#form-notification").html("<div class=\"alert alert-success alert-dismissable\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a><strong>Success ! </strong>" + data.success + "</div>");
                }
                if (typeof data.validation_errors !== 'undefined') {
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    $("#form-notification").html("<div class=\"alert alert-danger alert-dismissable\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a><strong>Errors ! </strong>" + data.validation_errors + "</div>");
                }
            },
            error: function(data){
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $("#form-notification").html("<div class=\"alert alert-danger alert-dismissable\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a><strong>Error ! </strong> Something went wrong.....!</div>");
            }
        });

    }));

    $(document).ready(function(){
        $("#form-notification").html("");
        
        if( "<?php echo $type; ?>" == "events" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>Events/edit" );

            $("#div-title").show();$("#title").removeAttr("required");$("#title").attr( "required" , "required" );

            $("#div-events-category").show();$("#events-category").removeAttr("required");$("#events-category").attr( "required" , "required" );
            $("#div-sales-category").hide();$("#sales-category").removeAttr("required");
            $("#div-coupons-category").hide();$("#coupons-category").removeAttr("required");
            $("#div-service-require-category").hide();$("#service-require-category").removeAttr("required");
            $("#div-service-providers-category").hide();$("#service-providers-category").removeAttr("required");
            $("#div-realty-category").hide();$("#realty-category").removeAttr("required");
            $("#div-nearby-stores-category").hide();$("#nearby-stores-category").removeAttr("required");
            $("#div-attractions-category").hide();$("#attractions-category").removeAttr("required");
            $("#div-hire-a-resource-category").hide();$("#hire-a-resource-category").removeAttr("required");
            $("#div-tickets-category").hide();$("#tickets-category").removeAttr("required");
            $("#div-learnings-category").hide();$("#learnings-category").removeAttr("required");
            $("#div-restaurants-category").hide();$("#restaurants-category").removeAttr("required");
            $("#div-business-name").hide();$("#business-name").removeAttr("required");
            $("#div-tags").hide();$("#tags").removeAttr("required");
            $("#div-openhouse-date").hide();$("#openhouse-date").removeAttr("required");
            $("#div-date").show();$("#date").removeAttr("required");$("#date").attr( "required" , "required" );
            $("#div-start-date").hide();$("#start-date").removeAttr("required");
            $("#div-finish-date").hide();$("#finish-date").removeAttr("required");
            $("#div-time-start").show();$("#time-start").removeAttr("required");$("#time-start").attr( "required" , "required" );
            $("#div-time-finish").show();$("#time-finish").removeAttr("required");$("#time-finish").attr( "required" , "required" );
            $("#div-open-hour").hide();$("#open-hour").removeAttr("required");
            $("#div-close-hour").hide();$("#close-hour").removeAttr("required");
            $("#div-details").show();$("#details").removeAttr("required");$("#details").attr( "required" , "required" );
            $("#div-job-description").hide();$("#job-description").removeAttr("required");
            $("#div-price").show();$("#price").removeAttr("required");$("#price").attr( "required" , "required" );
            $("#div-salary").hide();$("#salary").removeAttr("required");
            $("#div-hourly-rate").hide();$("#hourly-rate").removeAttr("required");
            $("#div-original-price").hide();$("#original-price").removeAttr("required");
            $("#div-discounted-price").hide();$("#discounted-price").removeAttr("required");
            
            $("#section-address").show();
            
            $("#zipcode").removeAttr("required");$("#zipcode").attr( "required" , "required" );
            $("#contact-name").removeAttr("required");$("#contact-name").attr( "required" , "required" );
            $("#contact-number").removeAttr("required");$("#contact-number").attr( "required" , "required" );
            $("#contact-email").removeAttr("required");$("#contact-email").attr( "required" , "required" );
            $("#contact-website").removeAttr("required");$("#contact-website").attr( "required" , "required" );

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

            
            $("#div-currency").show();$("#currency").removeAttr("required");$("#currency").attr( "required" , "required" );
            
            var geocoder = new google.maps.Geocoder();
        
            geocoder.geocode({ 'address': "<?php echo $data[0]->zipcode; ?>" }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var _latitude = results[0].geometry.location.lat().toString();
                    var _longitude = results[0].geometry.location.lng().toString();
                    var element = "listing-map";
                    var lat_element = "listing-latitude";
                    var long_element = "listing-longitude";
                    simpleMap(lat_element,_latitude,long_element,_longitude, element, true);
                }
                else
                {
                    console.log("Location is not valid.....!");
                }
            });
        }
        else if( "<?php echo $type; ?>" == "garage_sales" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>GarageSales/edit" );

            $("#div-title").show();$("#title").removeAttr("required");$("#title").attr( "required" , "required" );
            $("#div-events-category").hide();$("#events-category").removeAttr("required");
            $("#div-sales-category").hide();$("#sales-category").removeAttr("required");
            $("#div-coupons-category").hide();$("#coupons-category").removeAttr("required");
            $("#div-service-require-category").hide();$("#service-require-category").removeAttr("required");
            $("#div-service-providers-category").hide();$("#service-providers-category").removeAttr("required");
            $("#div-realty-category").hide();$("#realty-category").removeAttr("required");
            $("#div-nearby-stores-category").hide();$("#nearby-stores-category").removeAttr("required");
            $("#div-attractions-category").hide();$("#attractions-category").removeAttr("required");
            $("#div-hire-a-resource-category").hide();$("#hire-a-resource-category").removeAttr("required");
            $("#div-tickets-category").hide();$("#tickets-category").removeAttr("required");
            $("#div-learnings-category").hide();$("#learnings-category").removeAttr("required");
            $("#div-restaurants-category").hide();$("#restaurants-category").removeAttr("required");
            $("#div-business-name").hide();$("#business-name").removeAttr("required");
            $("#div-tags").hide();$("#tags").removeAttr("required");
            $("#div-openhouse-date").hide();$("#openhouse-date").removeAttr("required");
            $("#div-date").show();$("#date").removeAttr("required");$("#date").attr( "required" , "required" );
            $("#div-start-date").hide();$("#start-date").removeAttr("required");
            $("#div-finish-date").hide();$("#finish-date").removeAttr("required");
            $("#div-time-start").show();$("#time-start").removeAttr("required");$("#time-start").attr( "required" , "required" );
            $("#div-time-finish").show();$("#time-finish").removeAttr("required");$("#time-finish").attr( "required" , "required" );
            $("#div-open-hour").hide();$("#open-hour").removeAttr("required");
            $("#div-close-hour").hide();$("#close-hour").removeAttr("required");
            $("#div-details").show();$("#details").removeAttr("required");$("#details").attr( "required" , "required" );
            $("#div-job-description").hide();$("#job-description").removeAttr("required");
            $("#div-price").hide();$("#price").removeAttr("required");
            $("#div-salary").hide();$("#salary").removeAttr("required");
            $("#div-hourly-rate").hide();$("#hourly-rate").removeAttr("required");
            $("#div-original-price").hide();$("#original-price").removeAttr("required");
            $("#div-discounted-price").hide();$("#discounted-price").removeAttr("required");

            $("#section-address").show();
            
            $("#zipcode").removeAttr("required");$("#zipcode").attr( "required" , "required" );
            $("#contact-name").removeAttr("required");$("#contact-name").attr( "required" , "required" );
            $("#contact-number").removeAttr("required");$("#contact-number").attr( "required" , "required" );
            $("#contact-email").removeAttr("required");$("#contact-email").attr( "required" , "required" );
            $("#contact-website").removeAttr("required");$("#contact-website").attr( "required" , "required" );

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

            
            $("#div-currency").hide();$("#currency").removeAttr("required");
            
            $("#div-hire-a-resource-second-language").hide();$("#hire-a-resource-second-language").removeAttr("required");
            
            var geocoder = new google.maps.Geocoder();
        
            geocoder.geocode({ 'address': "<?php echo $data[0]->zipcode; ?>" }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var _latitude = results[0].geometry.location.lat().toString();
                    var _longitude = results[0].geometry.location.lng().toString();
                    var element = "listing-map";
                    var lat_element = "listing-latitude";
                    var long_element = "listing-longitude";
                    simpleMap(lat_element,_latitude,long_element,_longitude, element, true);
                }
                else
                {
                    console.log("Location is not valid.....!");
                }
            });
        }
        else if( "<?php echo $type; ?>" == "sales" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>Sales/edit" );

            $("#div-title").show();$("#title").removeAttr("required");$("#title").attr( "required" , "required" );
            $("#div-events-category").hide();$("#events-category").removeAttr("required");
            $("#div-sales-category").show();$("#sales-category").removeAttr("required");$("#sales-category").attr( "required" , "required" );
            $("#div-coupons-category").hide();$("#coupons-category").removeAttr("required");
            $("#div-service-require-category").hide();$("#service-require-category").removeAttr("required");
            $("#div-service-providers-category").hide();$("#service-providers-category").removeAttr("required");
            $("#div-realty-category").hide();$("#realty-category").removeAttr("required");
            $("#div-nearby-stores-category").hide();$("#nearby-stores-category").removeAttr("required");
            $("#div-attractions-category").hide();$("#attractions-category").removeAttr("required");
            $("#div-hire-a-resource-category").hide();$("#hire-a-resource-category").removeAttr("required");
            $("#div-tickets-category").hide();$("#tickets-category").removeAttr("required");
            $("#div-learnings-category").hide();$("#learnings-category").removeAttr("required");
            $("#div-restaurants-category").hide();$("#restaurants-category").removeAttr("required");
            $("#div-business-name").hide();$("#business-name").removeAttr("required");
            $("#div-tags").show();$("#tags").removeAttr("required");$("#tags").attr( "required" , "required" );
            $("#div-openhouse-date").hide();$("#openhouse-date").removeAttr("required");
            $("#div-date").hide();$("#date").removeAttr("required");
            $("#div-start-date").hide();$("#start-date").removeAttr("required");
            $("#div-finish-date").hide();$("#finish-date").removeAttr("required");
            $("#div-time-start").hide();$("#time-start").removeAttr("required");
            $("#div-time-finish").hide();$("#time-finish").removeAttr("required");
            $("#div-open-hour").hide();$("#open-hour").removeAttr("required");
            $("#div-close-hour").hide();$("#close-hour").removeAttr("required");
            $("#div-details").show();$("#details").removeAttr("required");$("#details").attr( "required" , "required" );
            $("#div-job-description").hide();$("#job-description").removeAttr("required");
            $("#div-price").show();$("#price").removeAttr("required");$("#price").attr( "required" , "required" );
            $("#div-salary").hide();$("#salary").removeAttr("required");
            $("#div-hourly-rate").hide();$("#hourly-rate").removeAttr("required");
            $("#div-original-price").hide();$("#original-price").removeAttr("required");
            $("#div-discounted-price").hide();$("#discounted-price").removeAttr("required");
            
            $("#section-address").show();
            
            $("#zipcode").removeAttr("required");$("#zipcode").attr( "required" , "required" );
            $("#contact-name").removeAttr("required");$("#contact-name").attr( "required" , "required" );
            $("#contact-number").removeAttr("required");$("#contact-number").attr( "required" , "required" );
            $("#contact-email").removeAttr("required");$("#contact-email").attr( "required" , "required" );
            $("#contact-website").removeAttr("required");$("#contact-website").attr( "required" , "required" );

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

            
            $("#div-currency").show();$("#currency").removeAttr("required");$("#currency").attr( "required" , "required" );
            
            $("#div-hire-a-resource-second-language").hide();$("#hire-a-resource-second-language").removeAttr("required");
            
            var geocoder = new google.maps.Geocoder();
        
            geocoder.geocode({ 'address': "<?php echo $data[0]->zipcode; ?>" }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var _latitude = results[0].geometry.location.lat().toString();
                    var _longitude = results[0].geometry.location.lng().toString();
                    var element = "listing-map";
                    var lat_element = "listing-latitude";
                    var long_element = "listing-longitude";
                    simpleMap(lat_element,_latitude,long_element,_longitude, element, true);
                }
                else
                {
                    console.log("Location is not valid.....!");
                }
            });
        }
        else if( "<?php echo $type; ?>" == "coupons" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>Coupons/edit" );

            $("#div-title").show();$("#title").removeAttr("required");$("#title").attr( "required" , "required" );
            $("#div-events-category").hide();$("#events-category").removeAttr("required");
            $("#div-sales-category").hide();$("#sales-category").removeAttr("required");
            $("#div-coupons-category").show();$("#coupons-category").removeAttr("required");$("#coupons-category").attr( "required" , "required" );
            $("#div-service-require-category").hide();$("#service-require-category").removeAttr("required");
            $("#div-service-providers-category").hide();$("#service-providers-category").removeAttr("required");
            $("#div-realty-category").hide();$("#realty-category").removeAttr("required");
            $("#div-nearby-stores-category").hide();$("#nearby-stores-category").removeAttr("required");
            $("#div-attractions-category").hide();$("#attractions-category").removeAttr("required");
            $("#div-hire-a-resource-category").hide();$("#hire-a-resource-category").removeAttr("required");
            $("#div-tickets-category").hide();$("#tickets-category").removeAttr("required");
            $("#div-learnings-category").hide();$("#learnings-category").removeAttr("required");
            $("#div-restaurants-category").hide();$("#restaurants-category").removeAttr("required");
            $("#div-business-name").show();$("#business-name").removeAttr("required");$("#business-name").attr( "required" , "required" );
            $("#div-tags").show();$("#tags").removeAttr("required");$("#tags").attr( "required" , "required" );
            $("#div-openhouse-date").hide();$("#openhouse-date").removeAttr("required");
            $("#div-date").hide();$("#date").removeAttr("required");
            $("#div-start-date").show();$("#start-date").removeAttr("required");$("#start-date").attr( "required" , "required" );
            $("#div-finish-date").show();$("#finish-date").removeAttr("required");$("#finish-date").attr( "required" , "required" );
            $("#div-time-start").hide();$("#time-start").removeAttr("required");
            $("#div-time-finish").hide();$("#time-finish").removeAttr("required");
            $("#div-open-hour").hide();$("#open-hour").removeAttr("required");
            $("#div-close-hour").hide();$("#close-hour").removeAttr("required");
            $("#div-details").show();$("#details").removeAttr("required");$("#details").attr( "required" , "required" );
            $("#div-job-description").hide();$("#job-description").removeAttr("required");
            $("#div-price").hide();$("#price").removeAttr("required");
            $("#div-salary").hide();$("#salary").removeAttr("required");
            $("#div-hourly-rate").hide();$("#hourly-rate").removeAttr("required");
            $("#div-original-price").show();$("#original-price").removeAttr("required");$("#original-price").attr( "required" , "required" );
            $("#div-discounted-price").show();$("#discounted-price").removeAttr("required");$("#discounted-price").attr( "required" , "required" );
            
            $("#section-address").show();
            
            $("#zipcode").removeAttr("required");$("#zipcode").attr( "required" , "required" );
            $("#contact-name").removeAttr("required");$("#contact-name").attr( "required" , "required" );
            $("#contact-number").removeAttr("required");$("#contact-number").attr( "required" , "required" );
            $("#contact-email").removeAttr("required");$("#contact-email").attr( "required" , "required" );
            $("#contact-website").removeAttr("required");$("#contact-website").attr( "required" , "required" );

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

            
            $("#div-currency").show();$("#currency").removeAttr("required");$("#currency").attr( "required" , "required" );
            
            $("#div-hire-a-resource-second-language").hide();$("#hire-a-resource-second-language").removeAttr("required");
            
            var geocoder = new google.maps.Geocoder();
        
            geocoder.geocode({ 'address': "<?php echo $data[0]->zipcode; ?>" }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var _latitude = results[0].geometry.location.lat().toString();
                    var _longitude = results[0].geometry.location.lng().toString();
                    var element = "listing-map";
                    var lat_element = "listing-latitude";
                    var long_element = "listing-longitude";
                    simpleMap(lat_element,_latitude,long_element,_longitude, element, true);
                }
                else
                {
                    console.log("Location is not valid.....!");
                }
            });
        }
        else if( "<?php echo $type; ?>" == "jobs" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>Jobs/edit" );

            $("#div-title").show();$("#title").removeAttr("required");$("#title").attr( "required" , "required" );
            $("#div-events-category").hide();$("#events-category").removeAttr("required");
            $("#div-sales-category").hide();$("#sales-category").removeAttr("required");
            $("#div-coupons-category").hide();$("#coupons-category").removeAttr("required");
            $("#div-service-require-category").hide();$("#service-require-category").removeAttr("required");
            $("#div-service-providers-category").hide();$("#service-providers-category").removeAttr("required");
            $("#div-realty-category").hide();$("#realty-category").removeAttr("required");
            $("#div-nearby-stores-category").hide();$("#nearby-stores-category").removeAttr("required");
            $("#div-attractions-category").hide();$("#attractions-category").removeAttr("required");
            $("#div-hire-a-resource-category").hide();$("#hire-a-resource-category").removeAttr("required");
            $("#div-tickets-category").hide();$("#tickets-category").removeAttr("required");
            $("#div-learnings-category").hide();$("#learnings-category").removeAttr("required");
            $("#div-restaurants-category").hide();$("#restaurants-category").removeAttr("required");
            $("#div-business-name").show();$("#business-name").removeAttr("required");$("#business-name").attr( "required" , "required" );
            $("#div-tags").show();$("#tags").removeAttr("required");$("#tags").attr( "required" , "required" );
            $("#div-openhouse-date").hide();$("#openhouse-date").removeAttr("required");
            $("#div-date").show();$("#date").removeAttr("required");$("#date").attr( "required" , "required" );
            $("#div-start-date").hide();$("#start-date").removeAttr("required");
            $("#div-finish-date").hide();$("#finish-date").removeAttr("required");
            $("#div-time-start").hide();$("#time-start").removeAttr("required");
            $("#div-time-finish").hide();$("#time-finish").removeAttr("required");
            $("#div-open-hour").hide();$("#open-hour").removeAttr("required");
            $("#div-close-hour").hide();$("#close-hour").removeAttr("required");
            $("#div-details").hide();$("#details").removeAttr("required");
            $("#div-job-description").show();$("#job-description").removeAttr("required");$("#job-description").attr( "required" , "required" );
            $("#div-price").hide();$("#price").removeAttr("required");
            $("#div-salary").show();$("#salary").removeAttr("required");$("#salary").attr( "required" , "required" );
            $("#div-hourly-rate").hide();$("#hourly-rate").removeAttr("required");
            $("#div-original-price").hide();$("#original-price").removeAttr("required");
            $("#div-discounted-price").hide();$("#discounted-price").removeAttr("required");
            
            $("#section-address").show();
            
            $("#zipcode").removeAttr("required");$("#zipcode").attr( "required" , "required" );
            $("#contact-name").removeAttr("required");$("#contact-name").attr( "required" , "required" );
            $("#contact-number").removeAttr("required");$("#contact-number").attr( "required" , "required" );
            $("#contact-email").removeAttr("required");$("#contact-email").attr( "required" , "required" );
            $("#contact-website").removeAttr("required");$("#contact-website").attr( "required" , "required" );

            $("#section-jobs").show();
            
            $("#jobs-type").removeAttr("required");$("#jobs-type").attr( "required" , "required" );
            $("#jobs-status").removeAttr("required");$("#jobs-status").attr( "required" , "required" );
            $("#jobs-experience").removeAttr("required");$("#jobs-experience").attr( "required" , "required" );
            $("#jobs-education").removeAttr("required");$("#jobs-education").attr( "required" , "required" );
            $("#jobs-skill").removeAttr("required");$("#jobs-skill").attr( "required" , "required" );
            $("#jobs-software").removeAttr("required");$("#jobs-software").attr( "required" , "required" );

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

            
            $("#div-currency").show();$("#currency").removeAttr("required");$("#currency").attr( "required" , "required" );
            
            $("#div-hire-a-resource-second-language").hide();$("#hire-a-resource-second-language").removeAttr("required");
            
            var geocoder = new google.maps.Geocoder();
        
            geocoder.geocode({ 'address': "<?php echo $data[0]->zipcode; ?>" }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var _latitude = results[0].geometry.location.lat().toString();
                    var _longitude = results[0].geometry.location.lng().toString();
                    var element = "listing-map";
                    var lat_element = "listing-latitude";
                    var long_element = "listing-longitude";
                    simpleMap(lat_element,_latitude,long_element,_longitude, element, true);
                }
                else
                {
                    console.log("Location is not valid.....!");
                }
            });
        }
        else if( "<?php echo $type; ?>" == "service_require" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>ServiceRequire/edit" );

            $("#div-title").show();$("#title").removeAttr("required");$("#title").attr( "required" , "required" );
            $("#div-events-category").hide();$("#events-category").removeAttr("required");
            $("#div-sales-category").hide();$("#sales-category").removeAttr("required");
            $("#div-coupons-category").hide();$("#coupons-category").removeAttr("required");
            $("#div-service-require-category").show();$("#service-require-category").removeAttr("required");$("#service-require-category").attr( "required" , "required" );
            $("#div-service-providers-category").hide();$("#service-providers-category").removeAttr("required");
            $("#div-realty-category").hide();$("#realty-category").removeAttr("required");
            $("#div-nearby-stores-category").hide();$("#nearby-stores-category").removeAttr("required");
            $("#div-attractions-category").hide();$("#attractions-category").removeAttr("required");
            $("#div-hire-a-resource-category").hide();$("#hire-a-resource-category").removeAttr("required");
            $("#div-tickets-category").hide();$("#tickets-category").removeAttr("required");
            $("#div-learnings-category").hide();$("#learnings-category").removeAttr("required");
            $("#div-restaurants-category").hide();$("#restaurants-category").removeAttr("required");
            $("#div-business-name").hide();$("#business-name").removeAttr("required");
            $("#div-tags").show();$("#tags").removeAttr("required");$("#tags").attr( "required" , "required" );
            $("#div-openhouse-date").hide();$("#openhouse-date").removeAttr("required");
            $("#div-date").show();$("#date").removeAttr("required");$("#date").attr( "required" , "required" );
            $("#div-start-date").hide();$("#start-date").removeAttr("required");
            $("#div-finish-date").hide();$("#finish-date").removeAttr("required");
            $("#div-time-start").hide();$("#time-start").removeAttr("required");
            $("#div-time-finish").hide();$("#time-finish").removeAttr("required");
            $("#div-open-hour").hide();$("#open-hour").removeAttr("required");
            $("#div-close-hour").hide();$("#close-hour").removeAttr("required");
            $("#div-details").hide();$("#details").removeAttr("required");
            $("#div-job-description").show();$("#job-description").removeAttr("required");$("#job-description").attr( "required" , "required" );
            $("#div-price").hide();$("#price").removeAttr("required");
            $("#div-salary").hide();$("#salary").removeAttr("required");
            $("#div-hourly-rate").hide();$("#hourly-rate").removeAttr("required");
            $("#div-original-price").hide();$("#original-price").removeAttr("required");
            $("#div-discounted-price").hide();$("#discounted-price").removeAttr("required");
            
            $("#section-address").show();
            
            $("#zipcode").removeAttr("required");$("#zipcode").attr( "required" , "required" );
            $("#contact-name").removeAttr("required");$("#contact-name").attr( "required" , "required" );
            $("#contact-number").removeAttr("required");$("#contact-number").attr( "required" , "required" );
            $("#contact-email").removeAttr("required");$("#contact-email").attr( "required" , "required" );
            $("#contact-website").removeAttr("required");$("#contact-website").attr( "required" , "required" );

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

            
            $("#div-currency").hide();$("#currency").removeAttr("required");
            
            $("#div-hire-a-resource-second-language").hide();$("#hire-a-resource-second-language").removeAttr("required");
            
            var geocoder = new google.maps.Geocoder();
        
            geocoder.geocode({ 'address': "<?php echo $data[0]->zipcode; ?>" }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var _latitude = results[0].geometry.location.lat().toString();
                    var _longitude = results[0].geometry.location.lng().toString();
                    var element = "listing-map";
                    var lat_element = "listing-latitude";
                    var long_element = "listing-longitude";
                    simpleMap(lat_element,_latitude,long_element,_longitude, element, true);
                }
                else
                {
                    console.log("Location is not valid.....!");
                }
            });
        }
        else if( "<?php echo $type; ?>" == "service_providers" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>ServiceProviders/edit" );

            $("#div-title").show();$("#title").removeAttr("required");$("#title").attr( "required" , "required" );
            $("#div-events-category").hide();$("#events-category").removeAttr("required");
            $("#div-sales-category").hide();$("#sales-category").removeAttr("required");
            $("#div-coupons-category").hide();$("#coupons-category").removeAttr("required");
            $("#div-service-require-category").hide();$("#service-require-category").removeAttr("required");
            $("#div-service-providers-category").show();$("#service-providers-category").removeAttr("required");$("#service-providers-category").attr( "required" , "required" );
            $("#div-realty-category").hide();$("#realty-category").removeAttr("required");
            $("#div-nearby-stores-category").hide();$("#nearby-stores-category").removeAttr("required");
            $("#div-attractions-category").hide();$("#attractions-category").removeAttr("required");
            $("#div-hire-a-resource-category").hide();$("#hire-a-resource-category").removeAttr("required");
            $("#div-tickets-category").hide();$("#tickets-category").removeAttr("required");
            $("#div-learnings-category").hide();$("#learnings-category").removeAttr("required");
            $("#div-restaurants-category").hide();$("#restaurants-category").removeAttr("required");
            $("#div-business-name").show();$("#business-name").removeAttr("required");$("#business-name").attr( "required" , "required" );
            $("#div-tags").show();$("#tags").removeAttr("required");$("#tags").attr( "required" , "required" );
            $("#div-openhouse-date").hide();$("#openhouse-date").removeAttr("required");
            $("#div-date").hide();$("#date").removeAttr("required");
            $("#div-start-date").hide();$("#start-date").removeAttr("required");
            $("#div-finish-date").hide();$("#finish-date").removeAttr("required");
            $("#div-time-start").hide();$("#time-start").removeAttr("required");
            $("#div-time-finish").hide();$("#time-finish").removeAttr("required");
            $("#div-open-hour").show();$("#open-hour").removeAttr("required");$("#open-hour").attr( "required" , "required" );
            $("#div-close-hour").show();$("#close-hour").removeAttr("required");$("#close-hour").attr( "required" , "required" );
            $("#div-details").hide();$("#details").removeAttr("required");
            $("#div-job-description").show();$("#job-description").removeAttr("required");$("#job-description").attr( "required" , "required" );
            $("#div-price").hide();$("#price").removeAttr("required");
            $("#div-salary").hide();$("#salary").removeAttr("required");
            $("#div-hourly-rate").hide();$("#hourly-rate").removeAttr("required");
            $("#div-original-price").hide();$("#original-price").removeAttr("required");
            $("#div-discounted-price").hide();$("#discounted-price").removeAttr("required");
            
            $("#section-address").show();
            
            $("#zipcode").removeAttr("required");$("#zipcode").attr( "required" , "required" );
            $("#contact-name").removeAttr("required");$("#contact-name").attr( "required" , "required" );
            $("#contact-number").removeAttr("required");$("#contact-number").attr( "required" , "required" );
            $("#contact-email").removeAttr("required");$("#contact-email").attr( "required" , "required" );
            $("#contact-website").removeAttr("required");$("#contact-website").attr( "required" , "required" );

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

            
            $("#div-currency").hide();$("#currency").removeAttr("required");
            
            $("#div-hire-a-resource-second-language").hide();$("#hire-a-resource-second-language").removeAttr("required");
            
            var geocoder = new google.maps.Geocoder();
        
            geocoder.geocode({ 'address': "<?php echo $data[0]->zipcode; ?>" }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var _latitude = results[0].geometry.location.lat().toString();
                    var _longitude = results[0].geometry.location.lng().toString();
                    var element = "listing-map";
                    var lat_element = "listing-latitude";
                    var long_element = "listing-longitude";
                    simpleMap(lat_element,_latitude,long_element,_longitude, element, true);
                }
                else
                {
                    console.log("Location is not valid.....!");
                }
            });
        }
        else if( "<?php echo $type; ?>" == "realty" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>realty/edit" );

            $("#div-title").hide();$("#title").removeAttr("required");
            $("#div-events-category").hide();$("#events-category").removeAttr("required");
            $("#div-sales-category").hide();$("#sales-category").removeAttr("required");
            $("#div-coupons-category").hide();$("#coupons-category").removeAttr("required");
            $("#div-service-require-category").hide();$("#service-require-category").removeAttr("required");
            $("#div-service-providers-category").hide();$("#service-providers-category").removeAttr("required");
            $("#div-realty-category").show();$("#realty-category").removeAttr("required");$("#realty-category").attr( "required" , "required" );
            $("#div-nearby-stores-category").hide();$("#nearby-stores-category").removeAttr("required");
            $("#div-attractions-category").hide();$("#attractions-category").removeAttr("required");
            $("#div-hire-a-resource-category").hide();$("#hire-a-resource-category").removeAttr("required");
            $("#div-tickets-category").hide();$("#tickets-category").removeAttr("required");
            $("#div-learnings-category").hide();$("#learnings-category").removeAttr("required");
            $("#div-restaurants-category").hide();$("#restaurants-category").removeAttr("required");
            $("#div-business-name").hide();$("#business-name").removeAttr("required");
            $("#div-business-name").hide();$("#business-name").removeAttr("required");
            $("#div-openhouse-date").show();$("#openhouse-date").removeAttr("required");
            $("#div-date").hide();$("#date").removeAttr("required");
            $("#div-start-date").hide();$("#start-date").removeAttr("required");
            $("#div-finish-date").hide();$("#finish-date").removeAttr("required");
            $("#div-time-start").hide();$("#time-start").removeAttr("required");
            $("#div-time-finish").hide();$("#time-finish").removeAttr("required");
            $("#div-open-hour").show();$("#open-hour").removeAttr("required");$("#open-hour").attr( "required" , "required" );
            $("#div-close-hour").show();$("#close-hour").removeAttr("required");$("#close-hour").attr( "required" , "required" );
            $("#div-details").show();$("#details").removeAttr("required");$("#details").attr( "required" , "required" );
            $("#div-job-description").hide();$("#job-description").removeAttr("required");
            $("#div-price").show();$("#price").removeAttr("required");$("#price").attr( "required" , "required" );
            $("#div-salary").hide();$("#salary").removeAttr("required");
            $("#div-hourly-rate").hide();$("#hourly-rate").removeAttr("required");
            $("#div-original-price").hide();$("#original-price").removeAttr("required");
            $("#div-discounted-price").hide();$("#discounted-price").removeAttr("required");
            
            $("#section-address").show();
            
            $("#zipcode").removeAttr("required");$("#zipcode").attr( "required" , "required" );
            $("#contact-name").removeAttr("required");$("#contact-name").attr( "required" , "required" );
            $("#contact-number").removeAttr("required");$("#contact-number").attr( "required" , "required" );
            $("#contact-email").removeAttr("required");$("#contact-email").attr( "required" , "required" );
            $("#contact-website").removeAttr("required");$("#contact-website").attr( "required" , "required" );

            $("#section-jobs").hide();
            
            $("#jobs-type").removeAttr("required");
            $("#jobs-status").removeAttr("required");
            $("#jobs-experience").removeAttr("required");
            $("#jobs-education").removeAttr("required");
            $("#jobs-skill").removeAttr("required");
            $("#jobs-software").removeAttr("required");

            $("#section-realty").show();

            $("#realty-bed").removeAttr("required");$("#realty-bed").attr( "required" , "required" );
            $("#realty-bath").removeAttr("required");$("#realty-bath").attr( "required" , "required" );
            $("#realty-lot").removeAttr("required");$("#realty-lot").attr( "required" , "required" );
            $("#realty-sewerage").removeAttr("required");$("#realty-sewerage").attr( "required" , "required" );
            $("#realty-water").removeAttr("required");$("#realty-water").attr( "required" , "required" );
            $("#realty-gas").removeAttr("required");$("#realty-gas").attr( "required" , "required" );
            $("#realty-tax").removeAttr("required");$("#realty-tax").attr( "required" , "required" );
            $("#realty-mls").removeAttr("required");$("#realty-mls").attr( "required" , "required" );
            
            $("#section-gallery").show();

            
            $("#div-currency").show();$("#currency").removeAttr("required");$("#currency").attr( "required" , "required" );
            
            $("#div-hire-a-resource-second-language").hide();$("#hire-a-resource-second-language").removeAttr("required");
            
            var geocoder = new google.maps.Geocoder();
        
            geocoder.geocode({ 'address': "<?php echo $data[0]->zipcode; ?>" }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var _latitude = results[0].geometry.location.lat().toString();
                    var _longitude = results[0].geometry.location.lng().toString();
                    var element = "listing-map";
                    var lat_element = "listing-latitude";
                    var long_element = "listing-longitude";
                    simpleMap(lat_element,_latitude,long_element,_longitude, element, true);
                }
                else
                {
                    console.log("Location is not valid.....!");
                }
            });
        }
        else if( "<?php echo $type; ?>" == "nearby_stores" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>NearbyStores/edit" );

            $("#div-title").show();$("#title").removeAttr("required");$("#title").attr( "required" , "required" );
            $("#div-events-category").hide();$("#events-category").removeAttr("required");
            $("#div-sales-category").hide();$("#sales-category").removeAttr("required");
            $("#div-coupons-category").hide();$("#coupons-category").removeAttr("required");
            $("#div-service-require-category").hide();$("#service-require-category").removeAttr("required");
            $("#div-service-providers-category").hide();$("#service-providers-category").removeAttr("required");
            $("#div-realty-category").hide();$("#realty-category").removeAttr("required");
            $("#div-nearby-stores-category").show();$("#nearby-stores-category").removeAttr("required");$("#nearby-stores-category").attr( "required" , "required" );
            $("#div-attractions-category").hide();$("#attractions-category").removeAttr("required");
            $("#div-hire-a-resource-category").hide();$("#hire-a-resource-category").removeAttr("required");
            $("#div-tickets-category").hide();$("#tickets-category").removeAttr("required");
            $("#div-learnings-category").hide();$("#learnings-category").removeAttr("required");
            $("#div-restaurants-category").hide();$("#restaurants-category").removeAttr("required");
            $("#div-business-name").show();$("#business-name").removeAttr("required");$("#business-name").attr( "required" , "required" );
            $("#div-tags").show();$("#tags").removeAttr("required");$("#tags").attr( "required" , "required" );
            $("#div-openhouse-date").hide();$("#openhouse-date").removeAttr("required");
            $("#div-date").hide();$("#date").removeAttr("required");
            $("#div-start-date").hide();$("#start-date").removeAttr("required");
            $("#div-finish-date").hide();$("#finish-date").removeAttr("required");
            $("#div-time-start").hide();$("#time-start").removeAttr("required");
            $("#div-time-finish").hide();$("#time-finish").removeAttr("required");
            $("#div-open-hour").show();$("#open-hour").removeAttr("required");$("#open-hour").attr( "required" , "required" );
            $("#div-close-hour").show();$("#close-hour").removeAttr("required");$("#close-hour").attr( "required" , "required" );
            $("#div-details").show();$("#details").removeAttr("required");$("#details").attr( "required" , "required" );
            $("#div-job-description").hide();$("#job-description").removeAttr("required");
            $("#div-price").hide();$("#price").removeAttr("required");
            $("#div-salary").hide();$("#salary").removeAttr("required");
            $("#div-hourly-rate").hide();$("#hourly-rate").removeAttr("required");
            $("#div-original-price").hide();$("#original-price").removeAttr("required");
            $("#div-discounted-price").hide();$("#discounted-price").removeAttr("required");
            
            $("#section-address").show();
            
            $("#zipcode").removeAttr("required");$("#zipcode").attr( "required" , "required" );
            $("#contact-name").removeAttr("required");$("#contact-name").attr( "required" , "required" );
            $("#contact-number").removeAttr("required");$("#contact-number").attr( "required" , "required" );
            $("#contact-email").removeAttr("required");$("#contact-email").attr( "required" , "required" );
            $("#contact-website").removeAttr("required");$("#contact-website").attr( "required" , "required" );

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

            
            $("#div-currency").hide();$("#currency").removeAttr("required");
            
            $("#div-hire-a-resource-second-language").hide();$("#hire-a-resource-second-language").removeAttr("required");
            
            var geocoder = new google.maps.Geocoder();
        
            geocoder.geocode({ 'address': "<?php echo $data[0]->zipcode; ?>" }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var _latitude = results[0].geometry.location.lat().toString();
                    var _longitude = results[0].geometry.location.lng().toString();
                    var element = "listing-map";
                    var lat_element = "listing-latitude";
                    var long_element = "listing-longitude";
                    simpleMap(lat_element,_latitude,long_element,_longitude, element, true);
                }
                else
                {
                    console.log("Location is not valid.....!");
                }
            });
        }
        else if( "<?php echo $type; ?>" == "attractions" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>Attractions/edit" );

            $("#div-title").show();$("#title").removeAttr("required");$("#title").attr( "required" , "required" );
            $("#div-events-category").hide();$("#events-category").removeAttr("required");
            $("#div-sales-category").hide();$("#sales-category").removeAttr("required");
            $("#div-coupons-category").hide();$("#coupons-category").removeAttr("required");
            $("#div-service-require-category").hide();$("#service-require-category").removeAttr("required");
            $("#div-service-providers-category").hide();$("#service-providers-category").removeAttr("required");
            $("#div-realty-category").hide();$("#realty-category").removeAttr("required");
            $("#div-nearby-stores-category").hide();$("#nearby-stores-category").removeAttr("required");
            $("#div-attractions-category").show();$("#attractions-category").removeAttr("required");$("#attractions-category").attr( "required" , "required" );
            $("#div-hire-a-resource-category").hide();$("#hire-a-resource-category").removeAttr("required");
            $("#div-tickets-category").hide();$("#tickets-category").removeAttr("required");
            $("#div-learnings-category").hide();$("#learnings-category").removeAttr("required");
            $("#div-restaurants-category").hide();$("#restaurants-category").removeAttr("required");
            $("#div-business-name").hide();$("#business-name").removeAttr("required");
            $("#div-tags").show();$("#tags").removeAttr("required");$("#tags").attr( "required" , "required" );
            $("#div-openhouse-date").hide();$("#openhouse-date").removeAttr("required");
            $("#div-date").hide();$("#date").removeAttr("required");
            $("#div-start-date").hide();$("#start-date").removeAttr("required");
            $("#div-finish-date").hide();$("#finish-date").removeAttr("required");
            $("#div-time-start").hide();$("#time-start").removeAttr("required");
            $("#div-time-finish").hide();$("#time-finish").removeAttr("required");
            $("#div-open-hour").show();$("#open-hour").removeAttr("required");$("#open-hour").attr( "required" , "required" );
            $("#div-close-hour").show();$("#close-hour").removeAttr("required");$("#close-hour").attr( "required" , "required" );
            $("#div-details").show();$("#details").removeAttr("required");$("#details").attr( "required" , "required" );
            $("#div-job-description").hide();$("#job-description").removeAttr("required");
            $("#div-price").hide();$("#price").removeAttr("required");
            $("#div-salary").hide();$("#salary").removeAttr("required");
            $("#div-hourly-rate").hide();$("#hourly-rate").removeAttr("required");
            $("#div-original-price").hide();$("#original-price").removeAttr("required");
            $("#div-discounted-price").hide();$("#discounted-price").removeAttr("required");
            
            $("#section-address").show();
            
            $("#zipcode").removeAttr("required");$("#zipcode").attr( "required" , "required" );
            $("#contact-name").removeAttr("required");$("#contact-name").attr( "required" , "required" );
            $("#contact-number").removeAttr("required");$("#contact-number").attr( "required" , "required" );
            $("#contact-email").removeAttr("required");$("#contact-email").attr( "required" , "required" );
            $("#contact-website").removeAttr("required");$("#contact-website").attr( "required" , "required" );

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

            
            $("#div-currency").hide();$("#currency").removeAttr("required");
            
            $("#div-hire-a-resource-second-language").hide();$("#hire-a-resource-second-language").removeAttr("required");
            
            var geocoder = new google.maps.Geocoder();
        
            geocoder.geocode({ 'address': "<?php echo $data[0]->zipcode; ?>" }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var _latitude = results[0].geometry.location.lat().toString();
                    var _longitude = results[0].geometry.location.lng().toString();
                    var element = "listing-map";
                    var lat_element = "listing-latitude";
                    var long_element = "listing-longitude";
                    simpleMap(lat_element,_latitude,long_element,_longitude, element, true);
                }
                else
                {
                    console.log("Location is not valid.....!");
                }
            });
        }
        else if( "<?php echo $type; ?>" == "hire_a_resource" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>HireAResource/edit" );

            $("#div-title").show();$("#title").removeAttr("required");$("#title").attr( "required" , "required" );
            $("#div-events-category").hide();$("#events-category").removeAttr("required");
            $("#div-sales-category").hide();$("#sales-category").removeAttr("required");
            $("#div-coupons-category").hide();$("#coupons-category").removeAttr("required");
            $("#div-service-require-category").hide();$("#service-require-category").removeAttr("required");
            $("#div-service-providers-category").hide();$("#service-providers-category").removeAttr("required");
            $("#div-realty-category").hide();$("#realty-category").removeAttr("required");
            $("#div-nearby-stores-category").hide();$("#nearby-stores-category").removeAttr("required");
            $("#div-attractions-category").hide();$("#attractions-category").removeAttr("required");
            $("#div-hire-a-resource-category").show();$("#hire-a-resource-category").removeAttr("required");$("#hire-a-resource-category").attr( "required" , "required" );
            $("#div-tickets-category").hide();$("#tickets-category").removeAttr("required");
            $("#div-learnings-category").hide();$("#learnings-category").removeAttr("required");
            $("#div-restaurants-category").hide();$("#restaurants-category").removeAttr("required");
            $("#div-business-name").hide();$("#business-name").removeAttr("required");
            $("#div-tags").show();$("#tags").removeAttr("required");$("#tags").attr( "required" , "required" );
            $("#div-openhouse-date").hide();$("#openhouse-date").removeAttr("required");
            $("#div-date").hide();$("#date").removeAttr("required");
            $("#div-start-date").hide();$("#start-date").removeAttr("required");
            $("#div-finish-date").hide();$("#finish-date").removeAttr("required");
            $("#div-time-start").hide();$("#time-start").removeAttr("required");
            $("#div-time-finish").hide();$("#time-finish").removeAttr("required");
            $("#div-open-hour").hide();$("#open-hour").removeAttr("required");
            $("#div-close-hour").hide();$("#close-hour").removeAttr("required");
            $("#div-details").show();$("#details").removeAttr("required");$("#details").attr( "required" , "required" );
            $("#div-job-description").hide();$("#job-description").removeAttr("required");
            $("#div-price").hide();$("#price").removeAttr("required");
            $("#div-salary").hide();$("#salary").removeAttr("required");
            $("#div-hourly-rate").show();$("#hourly-rate").removeAttr("required");$("#hourly-rate").attr( "required" , "required" );
            $("#div-original-price").hide();$("#original-price").removeAttr("required");
            $("#div-discounted-price").hide();$("#discounted-price").removeAttr("required");
            
            $("#section-address").show();
            
            $("#zipcode").removeAttr("required");$("#zipcode").attr( "required" , "required" );
            $("#contact-name").removeAttr("required");$("#contact-name").attr( "required" , "required" );
            $("#contact-number").removeAttr("required");$("#contact-number").attr( "required" , "required" );
            $("#contact-email").removeAttr("required");$("#contact-email").attr( "required" , "required" );
            $("#contact-website").removeAttr("required");$("#contact-website").attr( "required" , "required" );

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

            
            $("#div-currency").show();$("#currency").removeAttr("required");$("#currency").attr( "required" , "required" );
            
            $("#div-hire-a-resource-second-language").show();$("#hire-a-resource-second-language").removeAttr("required");$("#hire-a-resource-second-language").attr( "required" , "required" );
            
            var geocoder = new google.maps.Geocoder();
        
            geocoder.geocode({ 'address': "<?php echo $data[0]->zipcode; ?>" }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var _latitude = results[0].geometry.location.lat().toString();
                    var _longitude = results[0].geometry.location.lng().toString();
                    var element = "listing-map";
                    var lat_element = "listing-latitude";
                    var long_element = "listing-longitude";
                    simpleMap(lat_element,_latitude,long_element,_longitude, element, true);
                }
                else
                {
                    console.log("Location is not valid.....!");
                }
            });
        }
        else if( "<?php echo $type; ?>" == "tickets" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>Tickets/edit" );

            $("#div-title").show();$("#title").removeAttr("required");$("#title").attr( "required" , "required" );
            $("#div-events-category").hide();$("#events-category").removeAttr("required");
            $("#div-sales-category").hide();$("#sales-category").removeAttr("required");
            $("#div-coupons-category").hide();$("#coupons-category").removeAttr("required");
            $("#div-service-require-category").hide();$("#service-require-category").removeAttr("required");
            $("#div-service-providers-category").hide();$("#service-providers-category").removeAttr("required");
            $("#div-realty-category").hide();$("#realty-category").removeAttr("required");
            $("#div-nearby-stores-category").hide();$("#nearby-stores-category").removeAttr("required");
            $("#div-attractions-category").hide();$("#attractions-category").removeAttr("required");
            $("#div-hire-a-resource-category").hide();$("#hire-a-resource-category").removeAttr("required");
            $("#div-tickets-category").show();$("#tickets-category").removeAttr("required");$("#tickets-category").attr( "required" , "required" );
            $("#div-learnings-category").hide();$("#learnings-category").removeAttr("required");
            $("#div-restaurants-category").hide();$("#restaurants-category").removeAttr("required");
            $("#div-business-name").hide();$("#business-name").removeAttr("required");
            $("#div-tags").show();$("#tags").removeAttr("required");$("#tags").attr( "required" , "required" );
            $("#div-openhouse-date").hide();$("#openhouse-date").removeAttr("required");
            $("#div-date").show();$("#date").removeAttr("required");$("#date").attr( "required" , "required" );
            $("#div-start-date").hide();$("#start-date").removeAttr("required");
            $("#div-finish-date").hide();$("#finish-date").removeAttr("required");
            $("#div-time-start").hide();$("#time-start").removeAttr("required");
            $("#div-time-finish").hide();$("#time-finish").removeAttr("required");
            $("#div-open-hour").hide();$("#open-hour").removeAttr("required");
            $("#div-close-hour").hide();$("#close-hour").removeAttr("required");
            $("#div-details").show();$("#details").removeAttr("required");$("#details").attr( "required" , "required" );
            $("#div-job-description").hide();$("#job-description").removeAttr("required");
            $("#div-price").show();$("#price").removeAttr("required");$("#price").attr( "required" , "required" );
            $("#div-salary").hide();$("#salary").removeAttr("required");
            $("#div-hourly-rate").hide();$("#hourly-rate").removeAttr("required");
            $("#div-original-price").hide();$("#original-price").removeAttr("required");
            $("#div-discounted-price").hide();$("#discounted-price").removeAttr("required");
            
            $("#section-address").show();
            
            $("#zipcode").removeAttr("required");$("#zipcode").attr( "required" , "required" );
            $("#contact-name").removeAttr("required");$("#contact-name").attr( "required" , "required" );
            $("#contact-number").removeAttr("required");$("#contact-number").attr( "required" , "required" );
            $("#contact-email").removeAttr("required");$("#contact-email").attr( "required" , "required" );
            $("#contact-website").removeAttr("required");$("#contact-website").attr( "required" , "required" );

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

            
            $("#div-currency").show();$("#currency").removeAttr("required");$("#currency").attr( "required" , "required" );
            
            $("#div-hire-a-resource-second-language").hide();$("#hire-a-resource-second-language").removeAttr("required");
            
            var geocoder = new google.maps.Geocoder();
        
            geocoder.geocode({ 'address': "<?php echo $data[0]->zipcode; ?>" }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var _latitude = results[0].geometry.location.lat().toString();
                    var _longitude = results[0].geometry.location.lng().toString();
                    var element = "listing-map";
                    var lat_element = "listing-latitude";
                    var long_element = "listing-longitude";
                    simpleMap(lat_element,_latitude,long_element,_longitude, element, true);
                }
                else
                {
                    console.log("Location is not valid.....!");
                }
            });
        }
        else if( "<?php echo $type; ?>" == "store_closures" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>StoreClosures/edit" );

            $("#div-title").show();$("#title").removeAttr("required");$("#title").attr( "required" , "required" );
            $("#div-events-category").hide();$("#events-category").removeAttr("required");
            $("#div-sales-category").hide();$("#sales-category").removeAttr("required");
            $("#div-coupons-category").hide();$("#coupons-category").removeAttr("required");
            $("#div-service-require-category").hide();$("#service-require-category").removeAttr("required");
            $("#div-service-providers-category").hide();$("#service-providers-category").removeAttr("required");
            $("#div-realty-category").hide();$("#realty-category").removeAttr("required");
            $("#div-nearby-stores-category").hide();$("#nearby-stores-category").removeAttr("required");
            $("#div-attractions-category").hide();$("#attractions-category").removeAttr("required");
            $("#div-hire-a-resource-category").hide();$("#hire-a-resource-category").removeAttr("required");
            $("#div-tickets-category").hide();$("#tickets-category").removeAttr("required");
            $("#div-learnings-category").hide();$("#learnings-category").removeAttr("required");
            $("#div-restaurants-category").hide();$("#restaurants-category").removeAttr("required");
            $("#div-business-name").show();$("#business-name").removeAttr("required");$("#business-name").attr( "required" , "required" );
            $("#div-tags").show();$("#tags").removeAttr("required");$("#tags").attr( "required" , "required" );
            $("#div-openhouse-date").hide();$("#openhouse-date").removeAttr("required");
            $("#div-date").hide();$("#date").removeAttr("required");
            $("#div-start-date").hide();$("#start-date").removeAttr("required");
            $("#div-finish-date").hide();$("#finish-date").removeAttr("required");
            $("#div-time-start").hide();$("#time-start").removeAttr("required");
            $("#div-time-finish").hide();$("#time-finish").removeAttr("required");
            $("#div-open-hour").hide();$("#open-hour").removeAttr("required");
            $("#div-close-hour").hide();$("#close-hour").removeAttr("required");
            $("#div-details").show();$("#details").removeAttr("required");$("#details").attr( "required" , "required" );
            $("#div-job-description").hide();$("#job-description").removeAttr("required");
            $("#div-price").hide();$("#price").removeAttr("required");
            $("#div-salary").hide();$("#salary").removeAttr("required");
            $("#div-hourly-rate").hide();$("#hourly-rate").removeAttr("required");
            $("#div-original-price").hide();$("#original-price").removeAttr("required");
            $("#div-discounted-price").hide();$("#discounted-price").removeAttr("required");
            
            $("#section-address").show();
            
            $("#zipcode").removeAttr("required");$("#zipcode").attr( "required" , "required" );
            $("#contact-name").removeAttr("required");$("#contact-name").attr( "required" , "required" );
            $("#contact-number").removeAttr("required");$("#contact-number").attr( "required" , "required" );
            $("#contact-email").removeAttr("required");$("#contact-email").attr( "required" , "required" );
            $("#contact-website").removeAttr("required");$("#contact-website").attr( "required" , "required" );

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

            
            $("#div-currency").hide();$("#currency").removeAttr("required");
            
            $("#div-hire-a-resource-second-language").hide();$("#hire-a-resource-second-language").removeAttr("required");
            
            var geocoder = new google.maps.Geocoder();
        
            geocoder.geocode({ 'address': "<?php echo $data[0]->zipcode; ?>" }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var _latitude = results[0].geometry.location.lat().toString();
                    var _longitude = results[0].geometry.location.lng().toString();
                    var element = "listing-map";
                    var lat_element = "listing-latitude";
                    var long_element = "listing-longitude";
                    simpleMap(lat_element,_latitude,long_element,_longitude, element, true);
                }
                else
                {
                    console.log("Location is not valid.....!");
                }
            });
        }
        else if( "<?php echo $type; ?>" == "learnings" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>Learnings/edit" );

            $("#div-title").show();$("#title").removeAttr("required");$("#title").attr( "required" , "required" );
            $("#div-events-category").hide();$("#events-category").removeAttr("required");
            $("#div-sales-category").hide();$("#sales-category").removeAttr("required");
            $("#div-coupons-category").hide();$("#coupons-category").removeAttr("required");
            $("#div-service-require-category").hide();$("#service-require-category").removeAttr("required");
            $("#div-service-providers-category").hide();$("#service-providers-category").removeAttr("required");
            $("#div-realty-category").hide();$("#realty-category").removeAttr("required");
            $("#div-nearby-stores-category").hide();$("#nearby-stores-category").removeAttr("required");
            $("#div-attractions-category").hide();$("#attractions-category").removeAttr("required");
            $("#div-hire-a-resource-category").hide();$("#hire-a-resource-category").removeAttr("required");
            $("#div-tickets-category").hide();$("#tickets-category").removeAttr("required");
            $("#div-learnings-category").show();$("#learnings-category").removeAttr("required");$("#learnings-category").attr( "required" , "required" );
            $("#div-restaurants-category").hide();$("#restaurants-category").removeAttr("required");
            $("#div-business-name").show();$("#business-name").removeAttr("required");$("#business-name").attr( "required" , "required" );
            $("#div-tags").show();$("#tags").removeAttr("required");$("#tags").attr( "required" , "required" );
            $("#div-openhouse-date").hide();$("#openhouse-date").removeAttr("required");
            $("#div-date").hide();$("#date").removeAttr("required");
            $("#div-start-date").hide();$("#start-date").removeAttr("required");
            $("#div-finish-date").hide();$("#finish-date").removeAttr("required");
            $("#div-time-start").hide();$("#time-start").removeAttr("required");
            $("#div-time-finish").hide();$("#time-finish").removeAttr("required");
            $("#div-open-hour").show();$("#open-hour").removeAttr("required");$("#open-hour").attr( "required" , "required" );
            $("#div-close-hour").show();$("#close-hour").removeAttr("required");$("#close-hour").attr( "required" , "required" );
            $("#div-details").show();$("#details").removeAttr("required");$("#details").attr( "required" , "required" );
            $("#div-job-description").hide();$("#job-description").removeAttr("required");
            $("#div-price").hide();$("#price").removeAttr("required");
            $("#div-salary").hide();$("#salary").removeAttr("required");
            $("#div-hourly-rate").hide();$("#hourly-rate").removeAttr("required");
            $("#div-original-price").hide();$("#original-price").removeAttr("required");
            $("#div-discounted-price").hide();$("#discounted-price").removeAttr("required");
            
            $("#section-address").show();
            
            $("#zipcode").removeAttr("required");$("#zipcode").attr( "required" , "required" );
            $("#contact-name").removeAttr("required");$("#contact-name").attr( "required" , "required" );
            $("#contact-number").removeAttr("required");$("#contact-number").attr( "required" , "required" );
            $("#contact-email").removeAttr("required");$("#contact-email").attr( "required" , "required" );
            $("#contact-website").removeAttr("required");$("#contact-website").attr( "required" , "required" );

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

            
            $("#div-currency").hide();$("#currency").removeAttr("required");
            
            $("#div-hire-a-resource-second-language").hide();$("#hire-a-resource-second-language").removeAttr("required");
            
            var geocoder = new google.maps.Geocoder();
        
            geocoder.geocode({ 'address': "<?php echo $data[0]->zipcode; ?>" }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var _latitude = results[0].geometry.location.lat().toString();
                    var _longitude = results[0].geometry.location.lng().toString();
                    var element = "listing-map";
                    var lat_element = "listing-latitude";
                    var long_element = "listing-longitude";
                    simpleMap(lat_element,_latitude,long_element,_longitude, element, true);
                }
                else
                {
                    console.log("Location is not valid.....!");
                }
            });
        }
        else if( "<?php echo $type; ?>" == "discards" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>Discards/edit" );

            $("#div-title").show();$("#title").removeAttr("required");$("#title").attr( "required" , "required" );
            $("#div-events-category").hide();$("#events-category").removeAttr("required");
            $("#div-sales-category").hide();$("#sales-category").removeAttr("required");
            $("#div-coupons-category").hide();$("#coupons-category").removeAttr("required");
            $("#div-service-require-category").hide();$("#service-require-category").removeAttr("required");
            $("#div-service-providers-category").hide();$("#service-providers-category").removeAttr("required");
            $("#div-realty-category").hide();$("#realty-category").removeAttr("required");
            $("#div-nearby-stores-category").hide();$("#nearby-stores-category").removeAttr("required");
            $("#div-attractions-category").hide();$("#attractions-category").removeAttr("required");
            $("#div-hire-a-resource-category").hide();$("#hire-a-resource-category").removeAttr("required");
            $("#div-tickets-category").hide();$("#tickets-category").removeAttr("required");
            $("#div-learnings-category").hide();$("#learnings-category").removeAttr("required");
            $("#div-restaurants-category").hide();$("#restaurants-category").removeAttr("required");
            $("#div-business-name").hide();$("#business-name").removeAttr("required");
            $("#div-tags").show();$("#tags").removeAttr("required");$("#tags").attr( "required" , "required" );
            $("#div-openhouse-date").hide();$("#openhouse-date").removeAttr("required");
            $("#div-date").hide();$("#date").removeAttr("required");
            $("#div-start-date").hide();$("#start-date").removeAttr("required");
            $("#div-finish-date").hide();$("#finish-date").removeAttr("required");
            $("#div-time-start").hide();$("#time-start").removeAttr("required");
            $("#div-time-finish").hide();$("#time-finish").removeAttr("required");
            $("#div-open-hour").hide();$("#open-hour").removeAttr("required");
            $("#div-close-hour").hide();$("#close-hour").removeAttr("required");
            $("#div-details").show();$("#details").removeAttr("required");$("#details").attr( "required" , "required" );
            $("#div-job-description").hide();$("#job-description").removeAttr("required");
            $("#div-price").hide();$("#price").removeAttr("required");
            $("#div-salary").hide();$("#salary").removeAttr("required");
            $("#div-hourly-rate").hide();$("#hourly-rate").removeAttr("required");
            $("#div-original-price").hide();$("#original-price").removeAttr("required");
            $("#div-discounted-price").hide();$("#discounted-price").removeAttr("required");
            
            $("#section-address").show();
            
            $("#zipcode").removeAttr("required");$("#zipcode").attr( "required" , "required" );
            $("#contact-name").removeAttr("required");$("#contact-name").attr( "required" , "required" );
            $("#contact-number").removeAttr("required");$("#contact-number").attr( "required" , "required" );
            $("#contact-email").removeAttr("required");$("#contact-email").attr( "required" , "required" );
            $("#contact-website").removeAttr("required");$("#contact-website").attr( "required" , "required" );

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

            
            $("#div-currency").hide();$("#currency").removeAttr("required");
            
            $("#div-hire-a-resource-second-language").hide();$("#hire-a-resource-second-language").removeAttr("required");
            
            var geocoder = new google.maps.Geocoder();
        
            geocoder.geocode({ 'address': "<?php echo $data[0]->zipcode; ?>" }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var _latitude = results[0].geometry.location.lat().toString();
                    var _longitude = results[0].geometry.location.lng().toString();
                    var element = "listing-map";
                    var lat_element = "listing-latitude";
                    var long_element = "listing-longitude";
                    simpleMap(lat_element,_latitude,long_element,_longitude, element, true);
                }
                else
                {
                    console.log("Location is not valid.....!");
                }
            });
        }
        else if( "<?php echo $type; ?>" == "restaurants" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>Restaurants/edit" );

            $("#div-title").show();$("#title").removeAttr("required");$("#title").attr( "required" , "required" );
            $("#div-events-category").hide();$("#events-category").removeAttr("required");
            $("#div-sales-category").hide();$("#sales-category").removeAttr("required");
            $("#div-coupons-category").hide();$("#coupons-category").removeAttr("required");
            $("#div-service-require-category").hide();$("#service-require-category").removeAttr("required");
            $("#div-service-providers-category").hide();$("#service-providers-category").removeAttr("required");
            $("#div-realty-category").hide();$("#realty-category").removeAttr("required");
            $("#div-nearby-stores-category").hide();$("#nearby-stores-category").removeAttr("required");
            $("#div-attractions-category").hide();$("#attractions-category").removeAttr("required");
            $("#div-hire-a-resource-category").hide();$("#hire-a-resource-category").removeAttr("required");
            $("#div-tickets-category").hide();$("#tickets-category").removeAttr("required");
            $("#div-learnings-category").hide();$("#learnings-category").removeAttr("required");
            $("#div-restaurants-category").show();$("#restaurants-category").removeAttr("required");$("#restaurants-category").attr( "required" , "required" );
            $("#div-business-name").hide();$("#business-name").removeAttr("required");
            $("#div-tags").show();$("#tags").removeAttr("required");$("#tags").attr( "required" , "required" );
            $("#div-openhouse-date").hide();$("#openhouse-date").removeAttr("required");
            $("#div-date").hide();$("#date").removeAttr("required");
            $("#div-start-date").hide();$("#start-date").removeAttr("required");
            $("#div-finish-date").hide();$("#finish-date").removeAttr("required");
            $("#div-time-start").hide();$("#time-start").removeAttr("required");
            $("#div-time-finish").hide();$("#time-finish").removeAttr("required");
            $("#div-open-hour").show();$("#open-hour").removeAttr("required");$("#open-hour").attr( "required" , "required" );
            $("#div-close-hour").show();$("#close-hour").removeAttr("required");$("#close-hour").attr( "required" , "required" );
            $("#div-details").show();$("#details").removeAttr("required");$("#details").attr( "required" , "required" );
            $("#div-job-description").hide();$("#job-description").removeAttr("required");
            $("#div-price").hide();$("#price").removeAttr("required");
            $("#div-salary").hide();$("#salary").removeAttr("required");
            $("#div-hourly-rate").hide();$("#hourly-rate").removeAttr("required");
            $("#div-original-price").hide();$("#original-price").removeAttr("required");
            $("#div-discounted-price").hide();$("#discounted-price").removeAttr("required");
            
            $("#section-address").show();
            
            $("#zipcode").removeAttr("required");$("#zipcode").attr( "required" , "required" );
            $("#contact-name").removeAttr("required");$("#contact-name").attr( "required" , "required" );
            $("#contact-number").removeAttr("required");$("#contact-number").attr( "required" , "required" );
            $("#contact-email").removeAttr("required");$("#contact-email").attr( "required" , "required" );
            $("#contact-website").removeAttr("required");$("#contact-website").attr( "required" , "required" );

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

            
            $("#div-currency").hide();$("#currency").removeAttr("required");
            
            $("#div-hire-a-resource-second-language").hide();$("#hire-a-resource-second-language").removeAttr("required");
            
            var geocoder = new google.maps.Geocoder();
        
            geocoder.geocode({ 'address': "<?php echo $data[0]->zipcode; ?>" }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var _latitude = results[0].geometry.location.lat().toString();
                    var _longitude = results[0].geometry.location.lng().toString();
                    var element = "listing-map";
                    var lat_element = "listing-latitude";
                    var long_element = "listing-longitude";
                    simpleMap(lat_element,_latitude,long_element,_longitude, element, true);
                }
                else
                {
                    console.log("Location is not valid.....!");
                }
            });
        }

    });

    var previousFileLength = <?php echo sizeof( json_decode($data[0]->file) ); ?>

    function remove_image(id)
    {
        previousFileLength--;
        
        //$("#previous-image-"+id).remove();
        $("#previous-image-"+id).fadeTo(1000, 0.01, function(){ 
            $(this).remove(); 
        });
        $("#file-upload-input").removeAttr("maxlength");$("#file-upload-input").attr( "maxlength" , 10 - previousFileLength );

        if(previousFileLength == 0)
            $("#file-upload-input").removeAttr("required");$("#file-upload-input").attr( "required" , "required" );
    }

</script>
