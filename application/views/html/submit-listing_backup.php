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
                                    <div class="col-md-12 col-sm-12">

                                        <div class="form-group">

                                            <label for="listing-type">Select Listing</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="listing-type" id="listing-type">
                                                <option value="events" selected>Events</option>
                                                <option value="garage-sales">Garage Sales</option>
                                                <option value="sales">Sales</option>
                                                <option value="coupons">Coupons</option>
                                                <option value="jobs">Jobs</option>
                                                <option value="service-require">Service Require</option>
                                                <option value="service-providers">Service Offered</option>
                                                <option value="realty">Realty</option>
                                                <!--<option value="nearby-stores">Nearby Stores</option>-->
                                                <option value="attractions">Attractions</option>
                                                <option value="hire-a-resource">Gigs and Freelancers</option>
                                                <option value="tickets">Tickets</option>
                                                <option value="store-closures">Store Closures</option>
                                                <option value="learnings">Learning &amp; Classes</option>
                                                <option value="discards">Discards &amp; Scraps</option>
                                                <!--<option value="restaurants">Restaurants</option>-->
                                            </select>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-12-->

                                    <div class="col-md-6 col-sm-6" id="div-title">

                                        <div class="form-group">

                                            <label for="title">Title</label>

                                            <input type="text" class="form-control" name="title" id="title" placeholder="Title">

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-events-category">

                                        <div class="form-group">

                                            <label for="events-category">Category</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="events-category" id="events-category">
                                                <option value="fun_n_entertainment">Fun &amp; Entertainment</option>
                                                <option value="education_n_informative">Education &amp; Informative</option>
                                                <option value="games">Games</option>
                                                <option value="religious">Religious</option>
                                                <option value="other">Other</option>
                                            </select>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-sales-category">

                                        <div class="form-group">

                                            <label for="sales-category">Category</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="sales-category" id="sales-category">
                                                <option value="new">New</option>
                                                <option value="used">Used</option>
                                                <option value="classic_antiques">Classic/Antiques</option>
                                            </select>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-coupons-category">

                                        <div class="form-group">

                                            <label for="coupons-category">Category</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="coupons-category" id="coupons-category">
                                                <option value="goods">Goods</option>
                                                <option value="services">Services</option>
                                                <option value="attractions">Attractions</option>
                                                <option value="household">Household</option>
                                                <option value="events">Events</option>
                                                <option value="others">Others</option>
                                            </select>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-service-require-category">

                                        <div class="form-group">

                                            <label for="service-require-category">Category</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="service-require-category" id="service-require-category">
                                                <option value="hvac">HVAC</option>
                                                <option value="electrical">Electrical</option>
                                                <option value="plumbing">Plumbing</option>
                                                <option value="home_construciton">Home Construciton</option>
                                                <option value="lanscaping">Lanscaping</option>
                                                <option value="roofing">Roofing</option>
                                                <option value="cleaning">Cleaning</option>
                                                <option value="painting">Painting</option>
                                                <option value="interior_inside">Interior/Inside</option>
                                                <option value="exterior_outside">Exterior/Outside</option>
                                                <option value="labour">Labour</option>
                                                <option value="automative">Automative</option>
                                                <option value="beauty">Beauty</option>
                                                <option value="computer">Computer</option>
                                                <option value="accounting_n_finance">Accounting &amp; Finance</option>
                                                <option value="taxation">Taxation</option>
                                                <option value="household">Household</option>
                                                <option value="legal">Legal</option>
                                                <option value="education_n_classes">Education &amp; Classes</option>
                                                <option value="others">Others</option>
                                            </select>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-service-providers-category">

                                        <div class="form-group">

                                            <label for="service-providers-category">Category</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="service-providers-category" id="service-providers-category">
                                                <option value="hvac">HVAC</option>
                                                <option value="electrical">Electrical</option>
                                                <option value="plumbing">Plumbing</option>
                                                <option value="home_construciton">Home Construciton</option>
                                                <option value="lanscaping">Lanscaping</option>
                                                <option value="roofing">Roofing</option>
                                                <option value="cleaning">Cleaning</option>
                                                <option value="painting">Painting</option>
                                                <option value="interior_inside">Interior/Inside</option>
                                                <option value="exterior_outside">Exterior/Outside</option>
                                                <option value="labour">Labour</option>
                                                <option value="automative">Automative</option>
                                                <option value="beauty">Beauty</option>
                                                <option value="computer">Computer</option>
                                                <option value="accounting_n_finance">Accounting &amp; Finance</option>
                                                <option value="taxation">Taxation</option>
                                                <option value="household">Household</option>
                                                <option value="legal">Legal</option>
                                                <option value="education_n_classes">Education &amp; Classes</option>
                                                <option value="others">Others</option>
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
                                                    <option value="for_sale">For Sale</option>
                                                    <option value="for_rent">For Rent</option>
                                                    <option value="others">Others</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">

                                                <label for="realty-type">Type</label>

                                                <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="realty-type" id="realty-type">
                                                    <option value="appartments">Appartments</option>
                                                    <option value="house">House</option>
                                                    <option value="condo">Condo</option>
                                                    <option value="office">Office</option>
                                                    <option value="commercial">Commercial</option>
                                                    <option value="lot_n_lands">Lot &amp; Lands</option>
                                                    <option value="rooms_sharing">Rooms / Sharing</option>
                                                    <option value="vaccation_home">Vaccation Home</option>
                                                </select>

                                            </div>
                                        </div>

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-nearby-stores-category">

                                        <div class="form-group">

                                            <label for="nearby-stores-category">Category</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="nearby-stores-category" id="nearby-stores-category">
                                                <option value="fun">Fun</option>
                                                <option value="education">Education</option>
                                                <option value="entertainment">Entertainment</option>
                                                <option value="games">Games</option>
                                                <option value="religious">Religious</option>
                                                <option value="informative">Informative</option>
                                                <option value="other">Other</option>
                                            </select>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-attractions-category">

                                        <div class="form-group">

                                            <label for="attractions-category">Category</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="attractions-category" id="attractions-category">
                                                <option value="art_n_culture">Art &amp; Culture</option>
                                                <option value="entertainment">Entertainment</option>
                                                <option value="nightlife">Nightlife</option>
                                                <option value="fun">Fun</option>
                                                <option value="education">Education</option>
                                                <option value="games">Games</option>
                                                <option value="history_n_heritage">History &amp; Heritage</option>
                                                <option value="monument_n_memorial">Monument &amp; Memorial</option>
                                                <option value="meuseum">Meuseum</option>
                                                <option value="shopping">Shopping</option>
                                                <option value="festivals">Festivals</option>
                                                <option value="saloon_n_spa">Saloon &amp; Spa</option>
                                                <option value="sports">Sports</option>
                                                <option value="outdoor_recreation">Outdoor Recreation</option>
                                                <option value="theaters">Theaters</option>
                                                <option value="sightseeing">Sightseeing</option>
                                                <option value="parks">Parks</option>
                                                <option value="water_parks">Water Parks</option>
                                                <option value="lakes_n_beaches">Lakes &amp; Beaches</option>
                                                <option value="rides_n_funplex">Rides &amp; Funplex</option>
                                                <option value="others">Others</option>
                                            </select>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-hire-a-resource-category">

                                        <div class="form-group">

                                            <label for="hire-a-resource-category">Category</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="hire-a-resource-category" id="hire-a-resource-category">
                                                <option value="web_design_n_development">Web Design &amp; Development</option>
                                                <option value="graphics_n_design">Graphics &amp; Design</option>
                                                <option value="programming">Programming</option>
                                                <option value="digital_marketing">Digital Marketing</option>
                                                <option value="writing">Writing</option>
                                                <option value="video_n_animation">Video &amp; Animation</option>
                                                <option value="music_n_audio">Music &amp; Audio</option>
                                                <option value="business">Business</option>
                                                <option value="lifestyle">Lifestyle</option>
                                                <option value="tech">Tech</option>
                                                <option value="accounting_n_finance">Accounting &amp; Finance</option>
                                                <option value="taxation">Taxation</option>
                                                <option value="education_related">Education Related</option>
                                                <option value="others">Others</option>
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                        
                                    </div>

                                    <!--end col-md-6-->

                                    <div id="div-hire-a-resource-second-language">

                                        <div class="col-md-6 col-sm-6 form-group">

                                            <label for="hire-a-resource-country">Country</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="hire-a-resource-country" id="hire-a-resource-country">
                                                <option value="AFG">Afghanistan</option>
                                                <option value="ALA">Åland Islands</option>
                                                <option value="ALB">Albania</option>
                                                <option value="DZA">Algeria</option>
                                                <option value="ASM">American Samoa</option>
                                                <option value="AND">Andorra</option>
                                                <option value="AGO">Angola</option>
                                                <option value="AIA">Anguilla</option>
                                                <option value="ATA">Antarctica</option>
                                                <option value="ATG">Antigua and Barbuda</option>
                                                <option value="ARG">Argentina</option>
                                                <option value="ARM">Armenia</option>
                                                <option value="ABW">Aruba</option>
                                                <option value="AUS">Australia</option>
                                                <option value="AUT">Austria</option>
                                                <option value="AZE">Azerbaijan</option>
                                                <option value="BHS">Bahamas</option>
                                                <option value="BHR">Bahrain</option>
                                                <option value="BGD">Bangladesh</option>
                                                <option value="BRB">Barbados</option>
                                                <option value="BLR">Belarus</option>
                                                <option value="BEL">Belgium</option>
                                                <option value="BLZ">Belize</option>
                                                <option value="BEN">Benin</option>
                                                <option value="BMU">Bermuda</option>
                                                <option value="BTN">Bhutan</option>
                                                <option value="BOL">Bolivia, Plurinational State of</option>
                                                <option value="BES">Bonaire, Sint Eustatius and Saba</option>
                                                <option value="BIH">Bosnia and Herzegovina</option>
                                                <option value="BWA">Botswana</option>
                                                <option value="BVT">Bouvet Island</option>
                                                <option value="BRA">Brazil</option>
                                                <option value="IOT">British Indian Ocean Territory</option>
                                                <option value="BRN">Brunei Darussalam</option>
                                                <option value="BGR">Bulgaria</option>
                                                <option value="BFA">Burkina Faso</option>
                                                <option value="BDI">Burundi</option>
                                                <option value="KHM">Cambodia</option>
                                                <option value="CMR">Cameroon</option>
                                                <option value="CAN">Canada</option>
                                                <option value="CPV">Cape Verde</option>
                                                <option value="CYM">Cayman Islands</option>
                                                <option value="CAF">Central African Republic</option>
                                                <option value="TCD">Chad</option>
                                                <option value="CHL">Chile</option>
                                                <option value="CHN">China</option>
                                                <option value="CXR">Christmas Island</option>
                                                <option value="CCK">Cocos (Keeling) Islands</option>
                                                <option value="COL">Colombia</option>
                                                <option value="COM">Comoros</option>
                                                <option value="COG">Congo</option>
                                                <option value="COD">Congo, the Democratic Republic of the</option>
                                                <option value="COK">Cook Islands</option>
                                                <option value="CRI">Costa Rica</option>
                                                <option value="CIV">Côte d'Ivoire</option>
                                                <option value="HRV">Croatia</option>
                                                <option value="CUB">Cuba</option>
                                                <option value="CUW">Curaçao</option>
                                                <option value="CYP">Cyprus</option>
                                                <option value="CZE">Czech Republic</option>
                                                <option value="DNK">Denmark</option>
                                                <option value="DJI">Djibouti</option>
                                                <option value="DMA">Dominica</option>
                                                <option value="DOM">Dominican Republic</option>
                                                <option value="ECU">Ecuador</option>
                                                <option value="EGY">Egypt</option>
                                                <option value="SLV">El Salvador</option>
                                                <option value="GNQ">Equatorial Guinea</option>
                                                <option value="ERI">Eritrea</option>
                                                <option value="EST">Estonia</option>
                                                <option value="ETH">Ethiopia</option>
                                                <option value="FLK">Falkland Islands (Malvinas)</option>
                                                <option value="FRO">Faroe Islands</option>
                                                <option value="FJI">Fiji</option>
                                                <option value="FIN">Finland</option>
                                                <option value="FRA">France</option>
                                                <option value="GUF">French Guiana</option>
                                                <option value="PYF">French Polynesia</option>
                                                <option value="ATF">French Southern Territories</option>
                                                <option value="GAB">Gabon</option>
                                                <option value="GMB">Gambia</option>
                                                <option value="GEO">Georgia</option>
                                                <option value="DEU">Germany</option>
                                                <option value="GHA">Ghana</option>
                                                <option value="GIB">Gibraltar</option>
                                                <option value="GRC">Greece</option>
                                                <option value="GRL">Greenland</option>
                                                <option value="GRD">Grenada</option>
                                                <option value="GLP">Guadeloupe</option>
                                                <option value="GUM">Guam</option>
                                                <option value="GTM">Guatemala</option>
                                                <option value="GGY">Guernsey</option>
                                                <option value="GIN">Guinea</option>
                                                <option value="GNB">Guinea-Bissau</option>
                                                <option value="GUY">Guyana</option>
                                                <option value="HTI">Haiti</option>
                                                <option value="HMD">Heard Island and McDonald Islands</option>
                                                <option value="VAT">Holy See (Vatican City State)</option>
                                                <option value="HND">Honduras</option>
                                                <option value="HKG">Hong Kong</option>
                                                <option value="HUN">Hungary</option>
                                                <option value="ISL">Iceland</option>
                                                <option value="IND">India</option>
                                                <option value="IDN">Indonesia</option>
                                                <option value="IRN">Iran, Islamic Republic of</option>
                                                <option value="IRQ">Iraq</option>
                                                <option value="IRL">Ireland</option>
                                                <option value="IMN">Isle of Man</option>
                                                <option value="ISR">Israel</option>
                                                <option value="ITA">Italy</option>
                                                <option value="JAM">Jamaica</option>
                                                <option value="JPN">Japan</option>
                                                <option value="JEY">Jersey</option>
                                                <option value="JOR">Jordan</option>
                                                <option value="KAZ">Kazakhstan</option>
                                                <option value="KEN">Kenya</option>
                                                <option value="KIR">Kiribati</option>
                                                <option value="PRK">Korea, Democratic People's Republic of</option>
                                                <option value="KOR">Korea, Republic of</option>
                                                <option value="KWT">Kuwait</option>
                                                <option value="KGZ">Kyrgyzstan</option>
                                                <option value="LAO">Lao People's Democratic Republic</option>
                                                <option value="LVA">Latvia</option>
                                                <option value="LBN">Lebanon</option>
                                                <option value="LSO">Lesotho</option>
                                                <option value="LBR">Liberia</option>
                                                <option value="LBY">Libya</option>
                                                <option value="LIE">Liechtenstein</option>
                                                <option value="LTU">Lithuania</option>
                                                <option value="LUX">Luxembourg</option>
                                                <option value="MAC">Macao</option>
                                                <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
                                                <option value="MDG">Madagascar</option>
                                                <option value="MWI">Malawi</option>
                                                <option value="MYS">Malaysia</option>
                                                <option value="MDV">Maldives</option>
                                                <option value="MLI">Mali</option>
                                                <option value="MLT">Malta</option>
                                                <option value="MHL">Marshall Islands</option>
                                                <option value="MTQ">Martinique</option>
                                                <option value="MRT">Mauritania</option>
                                                <option value="MUS">Mauritius</option>
                                                <option value="MYT">Mayotte</option>
                                                <option value="MEX">Mexico</option>
                                                <option value="FSM">Micronesia, Federated States of</option>
                                                <option value="MDA">Moldova, Republic of</option>
                                                <option value="MCO">Monaco</option>
                                                <option value="MNG">Mongolia</option>
                                                <option value="MNE">Montenegro</option>
                                                <option value="MSR">Montserrat</option>
                                                <option value="MAR">Morocco</option>
                                                <option value="MOZ">Mozambique</option>
                                                <option value="MMR">Myanmar</option>
                                                <option value="NAM">Namibia</option>
                                                <option value="NRU">Nauru</option>
                                                <option value="NPL">Nepal</option>
                                                <option value="NLD">Netherlands</option>
                                                <option value="NCL">New Caledonia</option>
                                                <option value="NZL">New Zealand</option>
                                                <option value="NIC">Nicaragua</option>
                                                <option value="NER">Niger</option>
                                                <option value="NGA">Nigeria</option>
                                                <option value="NIU">Niue</option>
                                                <option value="NFK">Norfolk Island</option>
                                                <option value="MNP">Northern Mariana Islands</option>
                                                <option value="NOR">Norway</option>
                                                <option value="OMN">Oman</option>
                                                <option value="PAK">Pakistan</option>
                                                <option value="PLW">Palau</option>
                                                <option value="PSE">Palestinian Territory, Occupied</option>
                                                <option value="PAN">Panama</option>
                                                <option value="PNG">Papua New Guinea</option>
                                                <option value="PRY">Paraguay</option>
                                                <option value="PER">Peru</option>
                                                <option value="PHL">Philippines</option>
                                                <option value="PCN">Pitcairn</option>
                                                <option value="POL">Poland</option>
                                                <option value="PRT">Portugal</option>
                                                <option value="PRI">Puerto Rico</option>
                                                <option value="QAT">Qatar</option>
                                                <option value="REU">Réunion</option>
                                                <option value="ROU">Romania</option>
                                                <option value="RUS">Russian Federation</option>
                                                <option value="RWA">Rwanda</option>
                                                <option value="BLM">Saint Barthélemy</option>
                                                <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
                                                <option value="KNA">Saint Kitts and Nevis</option>
                                                <option value="LCA">Saint Lucia</option>
                                                <option value="MAF">Saint Martin (French part)</option>
                                                <option value="SPM">Saint Pierre and Miquelon</option>
                                                <option value="VCT">Saint Vincent and the Grenadines</option>
                                                <option value="WSM">Samoa</option>
                                                <option value="SMR">San Marino</option>
                                                <option value="STP">Sao Tome and Principe</option>
                                                <option value="SAU">Saudi Arabia</option>
                                                <option value="SEN">Senegal</option>
                                                <option value="SRB">Serbia</option>
                                                <option value="SYC">Seychelles</option>
                                                <option value="SLE">Sierra Leone</option>
                                                <option value="SGP">Singapore</option>
                                                <option value="SXM">Sint Maarten (Dutch part)</option>
                                                <option value="SVK">Slovakia</option>
                                                <option value="SVN">Slovenia</option>
                                                <option value="SLB">Solomon Islands</option>
                                                <option value="SOM">Somalia</option>
                                                <option value="ZAF">South Africa</option>
                                                <option value="SGS">South Georgia and the South Sandwich Islands</option>
                                                <option value="SSD">South Sudan</option>
                                                <option value="ESP">Spain</option>
                                                <option value="LKA">Sri Lanka</option>
                                                <option value="SDN">Sudan</option>
                                                <option value="SUR">Suriname</option>
                                                <option value="SJM">Svalbard and Jan Mayen</option>
                                                <option value="SWZ">Swaziland</option>
                                                <option value="SWE">Sweden</option>
                                                <option value="CHE">Switzerland</option>
                                                <option value="SYR">Syrian Arab Republic</option>
                                                <option value="TWN">Taiwan, Province of China</option>
                                                <option value="TJK">Tajikistan</option>
                                                <option value="TZA">Tanzania, United Republic of</option>
                                                <option value="THA">Thailand</option>
                                                <option value="TLS">Timor-Leste</option>
                                                <option value="TGO">Togo</option>
                                                <option value="TKL">Tokelau</option>
                                                <option value="TON">Tonga</option>
                                                <option value="TTO">Trinidad and Tobago</option>
                                                <option value="TUN">Tunisia</option>
                                                <option value="TUR">Turkey</option>
                                                <option value="TKM">Turkmenistan</option>
                                                <option value="TCA">Turks and Caicos Islands</option>
                                                <option value="TUV">Tuvalu</option>
                                                <option value="UGA">Uganda</option>
                                                <option value="UKR">Ukraine</option>
                                                <option value="ARE">United Arab Emirates</option>
                                                <option value="GBR">United Kingdom</option>
                                                <option value="USA">United States</option>
                                                <option value="UMI">United States Minor Outlying Islands</option>
                                                <option value="URY">Uruguay</option>
                                                <option value="UZB">Uzbekistan</option>
                                                <option value="VUT">Vanuatu</option>
                                                <option value="VEN">Venezuela, Bolivarian Republic of</option>
                                                <option value="VNM">Viet Nam</option>
                                                <option value="VGB">Virgin Islands, British</option>
                                                <option value="VIR">Virgin Islands, U.S.</option>
                                                <option value="WLF">Wallis and Futuna</option>
                                                <option value="ESH">Western Sahara</option>
                                                <option value="YEM">Yemen</option>
                                                <option value="ZMB">Zambia</option>
                                                <option value="ZWE">Zimbabwe</option>
                                            </select>
                                        </div>
                                        <!--end form-group-->

                                        <div class="col-md-6 col-sm-6 form-group">

                                            <label for="hire-a-resource-second-language">Second Language</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="hire-a-resource-second-language" id="hire-a-resource-second-language">
                                                <option value="arabic">Arabic</option>
                                                <option value="afrikaans">Afrikaans</option>
                                                <option value="bengali">Bengali</option>
                                                <option value="bulgarian">Bulgarian</option>
                                                <option value="chinese">Chinese</option>
                                                <option value="czech">Czech</option>
                                                <option value="danish">Danish</option>
                                                <option value="dutch">Dutch</option>
                                                <option value="english">English</option>
                                                <option value="french">French</option>
                                                <option value="german">German</option>
                                                <option value="greek">Greek</option>
                                                <option value="hindi">Hindi</option>
                                                <option value="hungarian">Hungarian</option>
                                                <option value="irish">Irish</option>
                                                <option value="italian">Italian</option>
                                                <option value="japanese">Japanese</option>
                                                <option value="korean">Korean</option>
                                                <option value="latvian">Latvian</option>
                                                <option value="polish">Polish</option>
                                                <option value="persian">Persian</option>
                                                <option value="portuguese">Portuguese</option>
                                                <option value="romanian">Romanian</option>
                                                <option value="russian">Russian</option>
                                                <option value="swahili">Swahili</option>
                                                <option value="slovak">Slovak</option>
                                                <option value="slovenian">Slovenian</option>
                                                <option value="spanish">Spanish</option>
                                                <option value="swedish">Swedish</option>
                                                <option value="turkish">Turkish</option>
                                                <option value="thai">Thai</option>
                                                <option value="urdu">Urdu</option>
                                                <option value="other">Other</option>
                                            </select>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <div class="col-md-6 col-sm-6" id="div-tickets-category">

                                        <div class="form-group">

                                            <label for="tickets-category">Category</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="tickets-category" id="tickets-category">
                                                <option value="fun_n_entertainment">Fun &amp; Entertainment</option>
                                                <option value="education_n_informative">Education &amp; Informative</option>
                                                <option value="games">Games</option>
                                                <option value="religious">Religious</option>
                                                <option value="other">Other</option>
                                            </select>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->
                                    
                                    <div class="col-md-6 col-sm-6" id="div-learnings-category">

                                        <div class="form-group">

                                            <label for="learnings-category">Category</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="learnings-category" id="learnings-category">
                                                <option value="online">Online</option>
                                                <option value="in_class">In Class</option>
                                            </select>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-restaurants-category">

                                        <div class="form-group">

                                            <label for="restaurants-category">Category</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="restaurants-category" id="restaurants-category">
                                                <option value="fun">Fun</option>
                                                <option value="education">Education</option>
                                                <option value="entertainment">Entertainment</option>
                                                <option value="games">Games</option>
                                                <option value="religious">Religious</option>
                                                <option value="informative">Informative</option>
                                                <option value="other">Other</option>
                                            </select>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-12 col-sm-12" id="div-business-name">

                                        <div class="form-group">

                                            <label for="business-name">Business Name</label>

                                            <input type="text" class="form-control" name="business-name" id="business-name" placeholder="Business Name" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->
                                    
                                    <div class="col-md-12 col-sm-12" id="div-tags">

                                        <div class="form-group">
                                    
                                            <label for="tags">Tags / Keywords</label>
        
                                            <input type="text" class="form-control" name="tags" id="tags" placeholder="+ Add tag">
        
                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-12 col-sm-12" id="div-openhouse-date">

                                        <div class="form-group">

                                            <label for="openhouse-date">Open House Date</label>

                                            <input type="text" class="form-control date-picker" name="openhouse-date" id="openhouse-date" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-12-->

                                    <div class="col-md-12 col-sm-12" id="div-date">

                                        <div class="form-group">

                                            <label for="date">Date</label>

                                            <input type="text" class="form-control date-picker" name="date" id="date" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-12-->

                                    <div class="col-md-6 col-sm-6" id="div-start-date">

                                        <div class="form-group">

                                            <label for="start-date">Start Date</label>

                                            <input type="text" class="form-control date-picker" name="start-date" id="start-date" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-finish-date">

                                        <div class="form-group">

                                            <label for="finish-date">Finish Date</label>

                                            <input type="text" class="form-control date-picker" name="finish-date" id="finish-date" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-time-start">

                                        <div class="form-group">

                                            <label for="time-start">Time Start</label>

                                            <input type="time" class="form-control" name="time-start" id="time-start" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-time-finish">

                                        <div class="form-group">

                                            <label for="time-finish">Time Finish</label>

                                            <input type="time" class="form-control" name="time-finish" id="time-finish" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-open-hour">

                                        <div class="form-group">

                                            <label for="open-hour">Open Hour</label>

                                            <input type="time" class="form-control" name="open-hour" id="open-hour" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-close-hour">

                                        <div class="form-group">

                                            <label for="close-hour">Close Hour</label>

                                            <input type="time" class="form-control" name="close-hour" id="close-hour" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-12 col-sm-12" id="div-details">

                                        <div class="form-group">
                                            <label for="details">Details</label>
                                            <textarea class="form-control" id="details" rows="4" name="details" placeholder="Details of listing"></textarea>
                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-12-->

                                    <div class="col-md-12 col-sm-12" id="div-job-description">

                                        <div class="form-group">
                                            <label for="job-description">Job Description</label>
                                            <textarea class="form-control" id="job-description" rows="4" name="job-description" placeholder="Job description for listing"></textarea>
                                        </div>

                                        <!--end form-group-->

                                    </div>
                                    
                                    <div class="col-md-6 col-sm-6" id="div-price">

                                        <div class="form-group">

                                            <label for="price">Price</label>

                                            <input type="number" class="form-control" name="price" id="price" min="0"/>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-salary">

                                        <div class="form-group">

                                            <label for="salary">Salary</label>

                                            <input type="number" class="form-control" name="salary" id="salary" min="0"/>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->
                                    
                                    <div class="col-md-6 col-sm-6" id="div-hourly-rate">

                                        <div class="form-group">

                                            <label for="hourly-rate">Hourly Rate / Amount</label>

                                            <input type="number" class="form-control" name="hourly-rate" id="hourly-rate"  min="0"/>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-original-price">

                                        <div class="form-group">

                                            <label for="original-price">Original Price</label>

                                            <input type="number" class="form-control" name="original-price" id="original-price" min="0"/>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->
                                    
                                    <div class="col-md-6 col-sm-6" id="div-discounted-price">

                                        <div class="form-group">

                                            <label for="discounted-price">Discounted Price</label>

                                            <input type="number" class="form-control" name="discounted-price" id="discounted-price" min="0"/>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6" id="div-currency">

                                        <div class="form-group">

                                            <label for="currency">Currency</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8"  name="currency" id="currency">
												<option value="CRP" selected="selected">Crypto Currency</option>
												<option value="USD">United States Dollars</option>
                                                <option value="EUR">Euro</option>
                                                <option value="GBP">United Kingdom Pounds</option>
                                                <option value="DZD">Algeria Dinars</option>
                                                <option value="ARP">Argentina Pesos</option>
                                                <option value="AUD">Australia Dollars</option>
                                                <option value="ATS">Austria Schillings</option>
                                                <option value="BSD">Bahamas Dollars</option>
                                                <option value="BBD">Barbados Dollars</option>
                                                <option value="BEF">Belgium Francs</option>
                                                <option value="BMD">Bermuda Dollars</option>
                                                <option value="BRR">Brazil Real</option>
                                                <option value="BGL">Bulgaria Lev</option>
                                                <option value="CAD">Canada Dollars</option>
                                                <option value="CLP">Chile Pesos</option>
                                                <option value="CNY">China Yuan Renmimbi</option>
                                                <option value="CYP">Cyprus Pounds</option>
                                                <option value="CSK">Czech Republic Koruna</option>
                                                <option value="DKK">Denmark Kroner</option>
                                                <option value="NLG">Dutch Guilders</option>
                                                <option value="XCD">Eastern Caribbean Dollars</option>
                                                <option value="EGP">Egypt Pounds</option>
                                                <option value="FJD">Fiji Dollars</option>
                                                <option value="FIM">Finland Markka</option>
                                                <option value="FRF">France Francs</option>
                                                <option value="DEM">Germany Deutsche Marks</option>
                                                <option value="XAU">Gold Ounces</option>
                                                <option value="GRD">Greece Drachmas</option>
                                                <option value="HKD">Hong Kong Dollars</option>
                                                <option value="HUF">Hungary Forint</option>
                                                <option value="ISK">Iceland Krona</option>
                                                <option value="INR">India Rupees</option>
                                                <option value="IDR">Indonesia Rupiah</option>
                                                <option value="IEP">Ireland Punt</option>
                                                <option value="ILS">Israel New Shekels</option>
                                                <option value="ITL">Italy Lira</option>
                                                <option value="JMD">Jamaica Dollars</option>
                                                <option value="JPY">Japan Yen</option>
                                                <option value="JOD">Jordan Dinar</option>
                                                <option value="KRW">Korea (South) Won</option>
                                                <option value="LBP">Lebanon Pounds</option>
                                                <option value="LUF">Luxembourg Francs</option>
                                                <option value="MYR">Malaysia Ringgit</option>
                                                <option value="MXP">Mexico Pesos</option>
                                                <option value="NLG">Netherlands Guilders</option>
                                                <option value="NZD">New Zealand Dollars</option>
                                                <option value="NOK">Norway Kroner</option>
                                                <option value="PKR">Pakistan Rupees</option>
                                                <option value="XPD">Palladium Ounces</option>
                                                <option value="PHP">Philippines Pesos</option>
                                                <option value="XPT">Platinum Ounces</option>
                                                <option value="PLZ">Poland Zloty</option>
                                                <option value="PTE">Portugal Escudo</option>
                                                <option value="ROL">Romania Leu</option>
                                                <option value="RUR">Russia Rubles</option>
                                                <option value="SAR">Saudi Arabia Riyal</option>
                                                <option value="XAG">Silver Ounces</option>
                                                <option value="SGD">Singapore Dollars</option>
                                                <option value="SKK">Slovakia Koruna</option>
                                                <option value="ZAR">South Africa Rand</option>
                                                <option value="KRW">South Korea Won</option>
                                                <option value="ESP">Spain Pesetas</option>
                                                <option value="XDR">Special Drawing Right (IMF)</option>
                                                <option value="SDD">Sudan Dinar</option>
                                                <option value="SEK">Sweden Krona</option>
                                                <option value="CHF">Switzerland Francs</option>
                                                <option value="TWD">Taiwan Dollars</option>
                                                <option value="THB">Thailand Baht</option>
                                                <option value="TTD">Trinidad and Tobago Dollars</option>
                                                <option value="TRL">Turkey Lira</option>
                                                <option value="VEB">Venezuela Bolivar</option>
                                                <option value="ZMK">Zambia Kwacha</option>
                                                <option value="EUR">Euro</option>
                                                <option value="XCD">Eastern Caribbean Dollars</option>
                                                <option value="XDR">Special Drawing Right (IMF)</option>
                                                <option value="XAG">Silver Ounces</option>
                                                <option value="XAU">Gold Ounces</option>
                                                <option value="XPD">Palladium Ounces</option>
                                                <option value="XPT">Platinum Ounces</option>
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

                                            <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="City / Zip code">

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

                                            <input type="text" class="form-control" name="contact-name" id="contact-name" placeholder="Contact Name">

                                        </div>

                                        <!--end form-group-->

                                        <div class="form-group">

                                            <label for="contact-number">Contact Number</label>

                                            <input type="text" class="form-control" name="contact-number" id="contact-number" placeholder="Contact number">

                                        </div>

                                        <!--end form-group-->

                                        <div class="form-group">

                                            <label for="contact-email">Contact Email</label>

                                            <input type="email" class="form-control" name="contact-email" id="contact-email" placeholder="hello@example.com">

                                        </div>

                                        <!--end form-group-->

                                        <div class="form-group">

                                            <label for="contact-website">Contact Website</label>

                                            <input type="text" class="form-control" name="contact-website" id="contact-website" placeholder="https://www.example.com">

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-12 col-sm-12">
                                    
                                        <h3>Profile Privacy</h3>

                                        <div class="col-md-12 col-sm-12">

                                            <div class="form-group">

                                                <input type="radio" class="" id="profile-yes" name="profile-privacy" value="1" checked="true" />

                                                <label for="profile-yes" style="position: relative; bottom: 3px;left: 5px;">APPEAR IN POST AND PROFESSINAL PROFILE</label>

                                            </div>

                                        </div>

                                        <!--end col-md-12-->

                                        <div class="col-md-12 col-sm-12">

                                            <div class="form-group">

                                                <input type="radio" class="" id="profile-no" name="profile-privacy" value="0" />

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
                                                <option value="full_time">Full Time</option>
                                                <option value="part_time">Part Type</option>
                                                <option value="remote">Remote</option>
                                            </select>

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="jobs-status">Jobs Status</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" id="jobs-status" name="jobs-status">
                                                <option value="contract">Contract</option>
                                                <option value="temp">Temp</option>
                                                <option value="perm">Perm</option>
                                                <option value="temp_to_perm">Temp to Perm</option>
                                                <option value="contract_to_hire">Contract to Hire</option>
                                                <option value="intern">Intern</option>
                                            </select>

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="jobs-industry">Jobs Industry</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" id="jobs-industry" name="jobs-industry">
                                                <option value="agriculture_n_food">Agriculture &amp;  Food</option>
                                                <option value="architecture_n_construction">Architecture &amp; Construction</option>
                                                <option value="audio_video_technology_n_communications">Audio/Video Technology &amp; Communications</option>
                                                <option value="accounting_n_finance">Accounting &amp; Finance</option>
                                                <option value="arts_n_culture">Arts &amp; Culture</option>
                                                <option value="business_management_n_administration">Business Management &amp; Administration</option>
                                                <option value="construction">Construction</option>
                                                <option value="chemcials">Chemcials</option>
                                                <option value="consumer_services">Consumer Services</option>
                                                <option value="defense">Defense</option>
                                                <option value="education_n_training">Education &amp; Training</option>
                                                <option value="government_n_public_administration">Government &amp; Public Administration</option>
                                                <option value="health_science">Health Science</option>
                                                <option value="hospitality_n_tourism">Hospitality &amp; Tourism</option>
                                                <option value="human_services_pharma_n_biotech">Human Services, Pharma &amp; Biotech</option>
                                                <option value="home_interior">Home Interior</option>
                                                <option value="home_exterior">Home Exterior</option>
                                                <option value="information_technology">Information Technology</option>
                                                <option value="telecommunication">Telecommunication</option>
                                                <option value="leisure_n_hospitality">Leisure &amp; Hospitality</option>
                                                <option value="legal_n_taxation">Legal &amp; Taxation</option>
                                                <option value="law_public_safety_corrections_n_security">Law, Public Safety, Corrections &amp; Security</option>
                                                <option value="manufacturing">Manufacturing</option>
                                                <option value="marketing_n_sales">Marketing &amp; Sales</option>
                                                <option value="media_n_entertainment">Media &amp; Entertainment</option>
                                                <option value="natural_resources_n_mining">Natural resources &amp; Mining</option>
                                                <option value="real_estate">Reak Estate</option>
                                                <option value="repair_n_maintainence">Repair &amp; Maintainence</option>
                                                <option value="retaurants">Retaurants</option>
                                                <option value="not_for_profit">Not for Profit</option>
                                                <option value="professional_n_business_services">Professional &amp; Business Services</option>
                                                <option value="other_services">Other Services</option>
                                                <option value="retail_wholesale_n_distributions">Retail, Wholesale &amp; Distributions</option>
                                                <option value="science_technology_engineering_n_mathematics">Science, Technology, Engineering &amp; Mathematics</option>
                                                <option value="sports">Sports</option>
                                                <option value="transportation_distribution_n_logistics">Transportation, Distribution &amp; Logistics</option>
                                                <option value="utility">Utility</option>
                                                <option value="Other">Other</option>
                                            </select>

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="jobs-function">Jobs Function</label>

                                            <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" id="jobs-function" name="jobs-function">
                                                <option value="accounting_careers">Accounting Careers</option>
                                                <option value="administrative_careers">Administrative Careers</option>
                                                <option value="advertising_careers">Advertising Careers</option>
                                                <option value="aeronautics_careers">Aeronautics Careers</option>
                                                <option value="agriculture_n_fishing_careers">Agriculture &amp; Fishing Careers</option>
                                                <option value="animal_services_careers">Animal Services Careers</option>
                                                <option value="automotive_careers">Automotive Careers</option>
                                                <option value="banking_careers">Banking Careers</option>
                                                <option value="biotechnology_careers">Biotechnology Careers</option>
                                                <option value="business_careers">Business Careers</option>
                                                <option value="charity_careers">Charity Careers</option>
                                                <option value="construction_careers">Construction Careers</option>
                                                <option value="creative_design_careers">Creative Design Careers</option>
                                                <option value="customer_service_careers">Customer Service Careers</option>
                                                <option value="editorial_careers">Editorial Careers</option>
                                                <option value="education_careers">Education Careers</option>
                                                <option value="energy_careers">Energy Careers</option>
                                                <option value="engineering_careers">Engineering Careers</option>
                                                <option value="environmental_careers">Environmental Careers</option>
                                                <option value="executive_careers">Executive Careers</option>
                                                <option value="finance_careers">Finance Careers</option>
                                                <option value="food_service_careers">Food Service Careers</option>
                                                <option value="government_careers">Government Careers</option>
                                                <option value="healthcare_careers">Healthcare Careers</option>
                                                <option value="hospitality_careers">Hospitality Careers</option>
                                                <option value="human_resource_careers">Human Resource Careers</option>
                                                <option value="human_services_careers">Human Services Careers</option>
                                                <option value="information_technology_careers">Information Technology Careers</option>
                                                <option value="insurance_careers">Insurance Careers</option>
                                                <option value="international_careers">International Careers</option>
                                                <option value="internet_careers">Internet Careers</option>
                                                <option value="language_translator_careers">Language Translator Careers</option>
                                                <option value="legal_careers">Legal Careers</option>
                                                <option value="logistic_careers">Logistic Careers</option>
                                                <option value="maintenance_careers">Maintenance Careers</option>
                                                <option value="manufacturing_careers">Manufacturing Careers</option>
                                                <option value="marketing_careers">Marketing Careers</option>
                                                <option value="media_careers">Media Careers</option>
                                                <option value="military_careers">Military Careers</option>
                                                <option value="overseas_careers">Overseas Careers</option>
                                                <option value="part_time_careers">Part Time Careers</option>
                                                <option value="personal_service_careers">Personal Service Careers</option>
                                                <option value="production_n_operations_careers">Production &amp; Operations Careers</option>
                                                <option value="project_management_careers">Project Management Careers</option>
                                                <option value="quality_assurance_careers">Quality Assurance Careers</option>
                                                <option value="real_estate_careers">Real Estate Careers</option>
                                                <option value="religious_careers">Religious Careers</option>
                                                <option value="research_n_development_careers">Research &amp; Development Careers</option>
                                                <option value="retail_careers">Retail Careers</option>
                                                <option value="sales_careers">Sales Careers</option>
                                                <option value="science_careers">Science Careers</option>
                                                <option value="security_careers">Security Careers</option>
                                                <option value="skilled_trades_careers">Skilled Trades Careers</option>
                                                <option value="sports_careers">Sports Careers</option>
                                                <option value="technology_careers">Technology Careers</option>
                                                <option value="telecommunications_careers">Telecommunications Careers</option>
                                                <option value="transportation_careers">Transportation Careers</option>
                                                <option value="travel_service_careers">Travel Service Careers</option>
                                                <option value="web_careers">Web Careers</option>
                                                <option value="other">Other</option>
                                            </select>

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="jobs-experience">Jobs Experience (In years)</label>

                                            <input type="text" class="form-control" name="jobs-experience" id="jobs-experience" placeholder="Jobs Experience">

                                        </div>
                                        <!--end form-group-->

                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="jobs-education">Jobs Education</label>

                                            <input type="text" class="form-control" name="jobs-education" id="jobs-education" placeholder="Jobs Education">

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="jobs-skill">Jobs Skill</label>

                                            <input type="text" class="form-control" name="jobs-skill" id="jobs-skill" placeholder="Jobs Skill">

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="jobs-software">Jobs Software</label>

                                            <input type="text" class="form-control" name="jobs-software" id="jobs-software" placeholder="Jobs Software">

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

                                            <input type="number" class="form-control" name="realty-bed" id="realty-bed" placeholder="Bed" min="0">

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="realty-bath">Bath</label>

                                            <input type="number" class="form-control" name="realty-bath" id="realty-bath" placeholder="Bath" min="0">

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="realty-lot">Lot</label>

                                            <input type="text" class="form-control" name="realty-lot" id="realty-lot" placeholder="Lot">

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="realty-sewerage">Sewerage</label>

                                            <input type="text" class="form-control" name="realty-sewerage" id="realty-sewerage" placeholder="Sewerage">

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="realty-water">Water</label>

                                            <input type="text" class="form-control" name="realty-water" id="realty-water" placeholder="Water">

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="realty-gas">Gas</label>

                                            <input type="text" class="form-control" name="realty-gas" id="realty-gas" placeholder="Gas">

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="realty-tax">Tax</label>

                                            <input type="number" class="form-control" name="realty-tax" id="realty-tax" placeholder="Tax" min="0">

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="realty-mls">MLS</label>

                                            <input type="text" class="form-control" name="realty-mls" id="realty-mls" placeholder="MLS">

                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->

                                </div>

                                <!--end row-->

                            </section>

                            <section id="section-gallery">

                                <h3>Gallery</h3>
                                
                                <div class="file-upload-previews"></div>

                                <div class="file-upload">

                                    <input type="file" name="files[]" class="file-upload-input with-preview" multiple title="Click to add files" maxlength="10" accept="gif|jpg|png">

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

        if( $("#listing-type option:selected").val() == "not-selected" )
        {
            $("#form-notification").html("<div class=\"alert alert-danger alert-dismissable\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a><strong>Error ! </strong> Kindly Select any Listing First.....! </div>");
        }
        else
        {
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
        }
    }));

    $("#listing-type").on("change", function() {
        $("#form-notification").html("");
        
        /*if( $("#listing-type option:selected").val() == "not-selected" )
        {
            $("#submit-listing-form").removeAttr("action");

            $("#div-title").hide();$("#title").removeAttr("required");

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

            $("#div-date").hide();$("#date").removeAttr("required");

            $("#div-start-date").hide();$("#start-date").removeAttr("required");

            $("#div-finish-date").hide();$("#finish-date").removeAttr("required");

            $("#div-time-start").hide();$("#time-start").removeAttr("required");

            $("#div-time-finish").hide();$("#time-finish").removeAttr("required");

            $("#div-open-hour").hide();$("#open-hour").removeAttr("required");

            $("#div-close-hour").hide();$("#close-hour").removeAttr("required");

            $("#div-details").hide();$("#details").removeAttr("required");

            $("#div-job-description").hide();$("#job-description").removeAttr("required");

            $("#div-price").hide();$("#price").removeAttr("required");

            $("#div-salary").hide();$("#salary").removeAttr("required");

            $("#div-hourly-rate").hide();$("#hourly-rate").removeAttr("required");

            $("#div-original-price").hide();$("#original-price").removeAttr("required");
            
            $("#div-discounted-price").hide();$("#discounted-price").removeAttr("required");

            $("#section-address").hide();
            
            $("#zipcode").removeAttr("required");
            $("#contact-name").removeAttr("required");
            $("#contact-number").removeAttr("required");
            $("#contact-email").removeAttr("required");
            $("#contact-website").removeAttr("required");

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

            $("#section-gallery").hide();
        }
        else */if( $("#listing-type option:selected").val() == "events" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>Events/insert" );

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

            
            $("#div-hire-a-resource-second-language").hide();$("#hire-a-resource-second-language").removeAttr("required");
        }
        else if( $("#listing-type option:selected").val() == "garage-sales" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>GarageSales/insert" );

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

            
            $("#div-currency").show();$("#currency").removeAttr("required");$("#currency").attr( "required" , "required" );

            
            $("#div-hire-a-resource-second-language").hide();$("#hire-a-resource-second-language").removeAttr("required");
        }
        else if( $("#listing-type option:selected").val() == "sales" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>Sales/insert" );

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
        }
        else if( $("#listing-type option:selected").val() == "coupons" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>Coupons/insert" );

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
        }
        else if( $("#listing-type option:selected").val() == "jobs" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>Jobs/insert" );

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
        }
        else if( $("#listing-type option:selected").val() == "service-require" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>ServiceRequire/insert" );

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

            
            $("#div-currency").show();$("#currency").removeAttr("required");$("#currency").attr( "required" , "required" );

            
            $("#div-hire-a-resource-second-language").hide();$("#hire-a-resource-second-language").removeAttr("required");
        }
        else if( $("#listing-type option:selected").val() == "service-providers" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>ServiceProviders/insert" );

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

            
            $("#div-currency").show();$("#currency").removeAttr("required");$("#currency").attr( "required" , "required" );

            
            $("#div-hire-a-resource-second-language").hide();$("#hire-a-resource-second-language").removeAttr("required");
        }
        else if( $("#listing-type option:selected").val() == "realty" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>realty/insert" );

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
        }
        else if( $("#listing-type option:selected").val() == "nearby-stores" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>NearbyStores/insert" );

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
        }
        else if( $("#listing-type option:selected").val() == "attractions" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>Attractions/insert" );

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

            
            $("#div-currency").show();$("#currency").removeAttr("required");$("#currency").attr( "required" , "required" );

            
            $("#div-hire-a-resource-second-language").hide();$("#hire-a-resource-second-language").removeAttr("required");
        }
        else if( $("#listing-type option:selected").val() == "hire-a-resource" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>HireAResource/insert" );

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
        }
        else if( $("#listing-type option:selected").val() == "tickets" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>Tickets/insert" );

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
        }
        else if( $("#listing-type option:selected").val() == "store-closures" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>StoreClosures/insert" );

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
        }
        else if( $("#listing-type option:selected").val() == "learnings" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>Learnings/insert" );

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
        }
        else if( $("#listing-type option:selected").val() == "discards" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>Discards/insert" );

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
        }
        else if( $("#listing-type option:selected").val() == "restaurants" )
        {
            $("#submit-listing-form").removeAttr("action");
            $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>Restaurants/insert" );

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
        }
    });

    $(document).ready(function(){
        $("#submit-listing-form").removeAttr("action");
        $("#submit-listing-form").attr( "action" , "<?php echo base_url(); ?>Events/insert" );

        $("#div-title").show();$("#title").removeAttr("required");$("#title").attr( "required" , "required" );
        
        $("#div-currency").show();$("#currency").removeAttr("required");$("#currency").attr( "required" , "required" );

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

        $("#div-hire-a-resource-second-language").hide();$("#hire-a-resource-second-language").removeAttr("required");
        
        var _latitude = 40.7344458;
        var _longitude = -73.86704922;
        var element = "listing-map";
        var lat_element = "listing-latitude";
        var long_element = "listing-longitude";
        simpleMap(lat_element,_latitude,long_element,_longitude, element, true);


    });

</script>
