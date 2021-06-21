<link href="<?php echo base_url(); ?>assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.nouislider.min.css" type="text/css">

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">
    
<style>
    #add-date-filter {
        color : #1f1f1f;
    }
    #date-filter > div div{
        padding: 0px;
        text-align: center;
    }
    .div-close-date{
        position:  relative;
        top: 15px;
        color: red;
        font-weight: 800;
    }
    #posts-location{
        color : #1f1f1f;
        text-align: right;
    }
    #clear-filter{
        padding: 13px;
        margin-top: -2px;
        font-size: 14px;
        margin-left: 2px;
    }
</style>

<div id="page-content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="">Home</a></li>
            <li><a href="">Browse</a></li>
            <li class="active">Posts</li>
        </ol>
        <div class="container">
       <center > <img   class="adds_tab" src="<?php echo base_url(); ?>assets/images/banners.PNG"></center>
        </div>
        
        <div class="hero-section has-background" style="height:100px;">
            <div class="form search-form horizontal">
                <div class="container">
                    <form id="search-form" action="<?php echo base_url(); ?>HireAResource/search" method="post">
                        <div class="row">
                            
                            <div class="col-md-10 col-sm-12">

                                <div class="form-group">
                                    <input type="text" id="keyword" class="form-control" name="keyword" placeholder="Search by Keyword" />
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-10-->

                            <div class="col-md-2 col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-disable btn-primary pull-right">Search Now</button>
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-2-->
                        </div>
                        <!--end row-->
                    </form>
                    <!--end form-hero-->
                </div>
                <!--end container-->
            </div>
        </div>
        <div class="hero-section has-background" style="height:100px;">
            <div class="form search-form horizontal">
                <div class="container">
                    <form id="zipcode-form" action="<?php echo base_url(); ?>HireAResource/zipcode" method="post">
                        <div class="row">
                            
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="City / Zip code" value="<?php echo $zip_code; ?>" />
                                </div>
                                <!--end form-group-->
                            </div>

                            <div class="map height-200px shadow" id="listing-map" style="display:none;"></div>

                            <!--end map-->

                            <div class="form-group hidden" style="display:none;">

                                <input type="text" class="form-control" id="listing-latitude" name="listing-latitude" hidden="">

                                <input type="text" class="form-control" id="listing-longitude" name="listing-longitude" hidden="">

                            </div>

                            <p class="note" style="display:none;">Enter the exact address or drag the map marker to position</p>

                            <!--end col-md-6-->

                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input type="number" class="form-control" id="range" name="range" min="1" placeholder="Range in miles" value="<?php echo $range; ?>" />
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-4-->
                            
                            <div class="col-md-2 col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-disable btn-primary pull-right">Set Zipcode &amp; Range </button>
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-2-->
                        </div>
                        <!--end row-->
                    </form>
                    <!--end form-hero-->
                </div>
                <!--end container-->
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <aside class="sidebar">
                    <section>
                        <h2>Search Filter</h2>
                        <form id="filters-form" action="<?php echo base_url(); ?>HireAResource/filters" method="post" class="form inputs-underline">
                            <div class="form-group">
                                <label>Currency</label>
                                <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="currency[]" id="currency" multiple>
									<option value="CRP">Crypto Currency</option>
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

                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" id="category" name="category[]" multiple>
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

                            <div class="form-group">
                                <label>Second Language</label>
                                <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" id="second-language" name="second_language[]" multiple>
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

                            <div class="form-group">
                                <label>Country</label>
                                <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" name="country[]" id="country" multiple>
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

                            <div class="form-group">
                                <button type="button" id="clear-filter" class="btn btn-disable btn-primary pull-right" onclick="nofilter();">CLEAR FILTERS</button>
                                <button type="submit" class="btn btn-disable btn-primary pull-right">APPLY FILTERS</button>
                            </div>
                            <!--end form-group-->

                            <div class="form-group">
                            </div>
                            <!--end form-group-->
                        </form>
                    </section>
                </aside>
                <!--end sidebar-->
            </div>
            <!--end col-md-3-->

            <div class="col-md-9 col-sm-9">
                <section id="favourite-notification">
                </section>
                <section class="page-title">
                    <h1>Gigs &amp; Freelancers Listing</h1>
                    <div class="row" id="posts-location"></div>
                </section>
                <!--end section-title-->

                <section>
                    
                    <div class="row" id="posts">

                    </div>
                    <!--end row-->
                </section>

                <section>
                    <div id="load-more" class="row" style="text-align:center;" >

                    </div>
                </section>

            </div>
            <!--end col-md-9-->
        </div>
        <!--end row-->
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
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.nouislider.all.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/maps.js"></script>

<script>

    var _latitude = 40.7344458;
    var _longitude = -73.86704922;
    var element = "listing-map";
    var lat_element = "listing-latitude";
    var long_element = "listing-longitude";
    simpleMap(lat_element,_latitude,long_element,_longitude, element, true);

</script>

<script>

var load_more_index = 0;
var load_more_check = 0;
var load_more_url = "";
var load_more_formData = "";
var origin = $("#zipcode").val();
var range = $("#range").val();

$('#zipcode-form').on('submit',(function(e) {
    e.preventDefault();

    var formData = new FormData(this);
    
    if($("#zipcode").val != "" && $("#range").val != ""){
        $.ajax({
            type : 'POST',
            url : $(this).attr('action'),
            data : formData,
            dataType : "json",
            contentType : false,
            enctype : 'multipart/form-data',
            processData : false,
            cache : false,
            success:function(data){
                if(data.result == "error1")
                {
                    alert("Kindly set Zipcode & Range first.....!");
                }
                else if(data.result == "error2")
                {
                    alert("Range should be greater than 1.....!");
                }
                else
                {    
                    origin = $("#zipcode").val();
                    range = $("#range").val();
                    zipcodefilter();
                }
            },
            error: function(data){
                alert("Error Occured.....!");
            }
        });
    }
    else{
        alert("Kindly set Zipcode & Range first.....!");
    }
}));


$('#search-form').on('submit',(function(e) {

    if($("#zipcode").val() == "" || $("#range").val() == "")
    {
        alert("Kindly set City / Zip code & Range first.....!");
        return false;
    }
    
    e.preventDefault();
    
    $(".btn-disable").attr( "disabled" , "disabled" );

    load_more_index = 0;
    load_more_url = $(this).attr('action');
    load_more_formData = new FormData(this);

    var formData = load_more_formData;
    formData.append('index', load_more_index);

    if($("#keyword").val != ""){
        $.ajax({
            type : 'POST',
            url : $(this).attr('action'),
            data : formData,
            dataType : "json",
            contentType : false,
            enctype : 'multipart/form-data',
            processData : false,
            cache : false,
            success:function(data){

                if(data.result == "No results found") {
                    load_more_check = 0;
                    $("#posts").html("");
                    $("#load-more").html("<div style=\"font-size:20px;text-align:center;\"> No More Posts .....!</div>");
                    $(".btn-disable").removeAttr("disabled");
                }
                else {
                    
                    $("#load-more").html("<div style=\"font-size:20px;color:blue;text-align:center;\"> Loading posts <i class=\"fa fa-spinner fa-spin\" style=\"font-size: 28px;\"></i></div>");
                    
                    $("#posts-location").html("( Location : Post from all locations are displaying)");
                    
                    $("#posts").html("");
                    var ind = -1;
    
                    for(var i=0;i<data.length;i++)
                    {
                        load_more_index = data[0].hire_a_resource_id;

                        var component = "<div class=\"col-md-4 col-sm-4\">";
                        component +=    "<div class=\"item\" data-id=\"1\">";
                        component +=         "<a href=\"<?php echo base_url();?>HireAResource/post_details/" + data[0].hire_a_resource_id + "\">";
                        component +=            "<div class=\"description\">";
                        component +=                "<figure>Hourly Rate : " + data[0].hourly_rate + " " + data[0].currency + "</figure>";
                        component +=                "<div class=\"label label-default\">" + data[0].category + "</div>";
                        
                        if(data[0].title.length > 20)
                            component +=                "<h3>" + data[0].title.substr(0,20) + "...</h3>";
                        else
                            component +=                "<h3>" + data[0].title + "</h3>";

                        if(data[0].zipcode.length > 30)
                            component +=                "<h4>" + data[0].zipcode.substr(0,30) + "...</h4>";
                        else
                            component +=                "<h4>" + data[0].zipcode + "</h4>";
                        
                        component +=            "</div>";
                        component +=            "<div class=\"image bg-transfer\" style=\"background-image: url(\'<?php echo base_url();?>" + (jQuery.parseJSON(data[0].file))[0] + "\');\">";
                        component +=                "<img src=\"<?php echo base_url();?>" + (jQuery.parseJSON(data[0].file))[0] + "\" alt=\"\">";
                        component +=            "</div>";
                        component +=         "</a>";
                        component +=        "<div class=\"additional-info\">";
                        component +=            "<div class=\"rating-passive\">";
                        component +=                "<span class=\"stars\">";
                        component +=                    "<figure class=\"active fa fa-star\"></figure>";
                        component +=                    "<figure class=\"active fa fa-star\"></figure>";
                        component +=                    "<figure class=\"active fa fa-star\"></figure>";
                        component +=                    "<figure class=\"active fa fa-star\"></figure>";
                        component +=                    "<figure class=\"fa fa-star\"></figure>";
                        component +=                "</span>";
                        component +=                "<span class=\"reviews\">6</span>";
                        component +=            "</div>";
                        component +=            "<div class=\"controls-more\">";
                        component +=                "<ul>";
                        component +=                    "<li><a onclick=\"addToFavourite(\'hire_a_resource\'," + data[0].hire_a_resource_id + ");\">Add to favorites</a></li>";
                        component +=                    "<li><a>Add to watchlist</a></li>";
                        component +=                    "<li><a href=\"#\" class=\"quick-detail\">Quick detail</a></li>";
                        component +=                "</ul>";
                        component +=            "</div>";
                        component +=        "</div>";
                        component +=    "</div>";
                        component += "</div>";

                        $("#posts").append(component);
                        load_more_check++;
                                    

                        if(load_more_check < 3)
                        {
                            load_more();
                        }
                        else
                        {
                            load_more_check = 0;
                            $("#load-more").html("<div style=\"font-size:20px;text-align:center;color:blue;font-weight:bold;\" onclick=\"load_more();\">Load More Posts</div>");

                            $(".btn-disable").removeAttr("disabled");
                        }
                    }
                }
            },
            error: function(data){
                $("#posts").html("<div style=\"text-align:center;color:red;\"><b>Error Occured</b></div>");
                $(".btn-disable").removeAttr("disabled");
            }
        });
    }
    else{
        alert("Kindly enter keyword for search.....!");
    }
}));

$('#filters-form').on('submit',(function(e) {

    if($("#zipcode").val() == "" || $("#range").val() == "")
    {
        alert("Kindly set City / Zip code & Range first.....!");
        return false;
    }

    e.preventDefault();
    $(".btn-disable").attr( "disabled" , "disabled" );
    load_more_index = 0;
    load_more_url = $(this).attr('action');
    load_more_formData = new FormData(this);
    
    var formData = load_more_formData;
    formData.append('index', load_more_index);

    $.ajax({
        type : 'POST',
        url : $(this).attr('action'),
        data : formData,
        dataType : "json",
        contentType : false,
        enctype : 'multipart/form-data',
        processData : false,
        cache : false,
        success:function(data){
            
            if(data.result == "No results found") {
                load_more_check = 0;
                $("#posts").html("");
                $("#load-more").html("<div style=\"font-size:20px;text-align:center;\"> No More Posts .....!</div>");

                $(".btn-disable").removeAttr("disabled");
            }
            else {
                
                $("#load-more").html("<div style=\"font-size:20px;color:blue;text-align:center;\"> Loading posts <i class=\"fa fa-spinner fa-spin\" style=\"font-size: 28px;\"></i></div>");
                    
                $("#posts-location").html("( Location : Post from all locations are displaying)");
                
                $("#posts").html("");
                var ind = -1;

                for(var i=0;i<data.length;i++)
				{
					load_more_index = data[0].hire_a_resource_id;

					var component = "<div class=\"col-md-4 col-sm-4\">";
					component +=    "<div class=\"item\" data-id=\"1\">";
					component +=         "<a href=\"<?php echo base_url();?>HireAResource/post_details/" + data[0].hire_a_resource_id + "\">";
					component +=            "<div class=\"description\">";
					component +=                "<figure>Hourly Rate : " + data[0].hourly_rate + " " + data[0].currency + "</figure>";
					component +=                "<div class=\"label label-default\">" + data[0].category + "</div>";
					
					if(data[0].title.length > 20)
						component +=                "<h3>" + data[0].title.substr(0,20) + "...</h3>";
					else
						component +=                "<h3>" + data[0].title + "</h3>";

					if(data[0].zipcode.length > 30)
						component +=                "<h4>" + data[0].zipcode.substr(0,30) + "...</h4>";
					else
						component +=                "<h4>" + data[0].zipcode + "</h4>";
					
					component +=            "</div>";
					component +=            "<div class=\"image bg-transfer\" style=\"background-image: url(\'<?php echo base_url();?>" + (jQuery.parseJSON(data[0].file))[0] + "\');\">";
					component +=                "<img src=\"<?php echo base_url();?>" + (jQuery.parseJSON(data[0].file))[0] + "\" alt=\"\">";
					component +=            "</div>";
					component +=         "</a>";
					component +=        "<div class=\"additional-info\">";
					component +=            "<div class=\"rating-passive\">";
					component +=                "<span class=\"stars\">";
					component +=                    "<figure class=\"active fa fa-star\"></figure>";
					component +=                    "<figure class=\"active fa fa-star\"></figure>";
					component +=                    "<figure class=\"active fa fa-star\"></figure>";
					component +=                    "<figure class=\"active fa fa-star\"></figure>";
					component +=                    "<figure class=\"fa fa-star\"></figure>";
					component +=                "</span>";
					component +=                "<span class=\"reviews\">6</span>";
					component +=            "</div>";
					component +=            "<div class=\"controls-more\">";
					component +=                "<ul>";
					component +=                    "<li><a onclick=\"addToFavourite(\'hire_a_resource\'," + data[0].hire_a_resource_id + ");\">Add to favorites</a></li>";
					component +=                    "<li><a>Add to watchlist</a></li>";
					component +=                    "<li><a href=\"#\" class=\"quick-detail\">Quick detail</a></li>";
					component +=                "</ul>";
					component +=            "</div>";
					component +=        "</div>";
					component +=    "</div>";
					component += "</div>";

					$("#posts").append(component);
					load_more_check++;
								

					if(load_more_check < 3)
					{
						load_more();
					}
					else
					{
						load_more_check = 0;
						$("#load-more").html("<div style=\"font-size:20px;text-align:center;color:blue;font-weight:bold;\" onclick=\"load_more();\">Load More Posts</div>");

						$(".btn-disable").removeAttr("disabled");
					}
				}
            }
        },
        error: function(data){
            $("#posts").html("<div style=\"text-align:center;color:red;\"><b>Error Occured</b></div>");
            $(".btn-disable").removeAttr("disabled");
        }
    });
}));

function nofilter()
{
    $('#currency option').attr("selected",false);
    $('#category option').attr("selected",false);
    $('#second-language option').attr("selected",false);

    $('#currency').selectpicker('refresh');
    $('#category').selectpicker('refresh');
    $('#second-language').selectpicker('refresh');

    $(".btn-disable").attr( "disabled" , "disabled" );

    load_more_index = 0;
    load_more_url = '<?php echo base_url(); ?>HireAResource/no_filter';
    load_more_formData = new Array();

    $.ajax({
        type : 'POST',
        url : '<?php echo base_url(); ?>HireAResource/no_filter',
        data : { 
            'index': load_more_index 
        }, 
        dataType : "json",
        success:function(data){

            if(data.result == "No results found") {
                load_more_check = 0;
                $("#posts").html("");
                $("#load-more").html("<div style=\"font-size:20px;text-align:center;\"> No More Posts .....!</div>");

                $(".btn-disable").removeAttr("disabled");
            }
            else {
                
                $("#load-more").html("<div style=\"font-size:20px;color:blue;text-align:center;\"> Loading posts <i class=\"fa fa-spinner fa-spin\" style=\"font-size: 28px;\"></i></div>");
                    
                $("#posts-location").html("( Location : Post from all locations are displaying)");
                
                $("#posts").html("");
                var ind = -1;

                for(var i=0;i<data.length;i++)
                { 
                    load_more_index = data[0].hire_a_resource_id;

                    var component = "<div class=\"col-md-4 col-sm-4\">";
                    component +=    "<div class=\"item\" data-id=\"1\">";
                    component +=         "<a href=\"<?php echo base_url();?>HireAResource/post_details/" + data[0].hire_a_resource_id + "\">";
                    component +=            "<div class=\"description\">";
                    component +=                "<figure>Hourly Rate : " + data[0].hourly_rate + " " + data[0].currency + "</figure>";
                    component +=                "<div class=\"label label-default\">" + data[0].category + "</div>";
                    
                    if(data[0].title.length > 20)
                        component +=                "<h3>" + data[0].title.substr(0,20) + "...</h3>";
                    else
                        component +=                "<h3>" + data[0].title + "</h3>";

                    if(data[0].zipcode.length > 30)
                        component +=                "<h4>" + data[0].zipcode.substr(0,30) + "...</h4>";
                    else
                        component +=                "<h4>" + data[0].zipcode + "</h4>";
                    
                    component +=            "</div>";
                    component +=            "<div class=\"image bg-transfer\" style=\"background-image: url(\'<?php echo base_url();?>" + (jQuery.parseJSON(data[0].file))[0] + "\');\">";
                    component +=                "<img src=\"<?php echo base_url();?>" + (jQuery.parseJSON(data[0].file))[0] + "\" alt=\"\">";
                    component +=            "</div>";
                    component +=         "</a>";
                    component +=        "<div class=\"additional-info\">";
                    component +=            "<div class=\"rating-passive\">";
                    component +=                "<span class=\"stars\">";
                    component +=                    "<figure class=\"active fa fa-star\"></figure>";
                    component +=                    "<figure class=\"active fa fa-star\"></figure>";
                    component +=                    "<figure class=\"active fa fa-star\"></figure>";
                    component +=                    "<figure class=\"active fa fa-star\"></figure>";
                    component +=                    "<figure class=\"fa fa-star\"></figure>";
                    component +=                "</span>";
                    component +=                "<span class=\"reviews\">6</span>";
                    component +=            "</div>";
                    component +=            "<div class=\"controls-more\">";
                    component +=                "<ul>";
                    component +=                    "<li><a onclick=\"addToFavourite(\'hire_a_resource\'," + data[0].hire_a_resource_id + ");\">Add to favorites</a></li>";
                    component +=                    "<li><a>Add to watchlist</a></li>";
                    component +=                    "<li><a href=\"#\" class=\"quick-detail\">Quick detail</a></li>";
                    component +=                "</ul>";
                    component +=            "</div>";
                    component +=        "</div>";
                    component +=    "</div>";
                    component += "</div>";

                    $("#posts").append(component);
                    load_more_check++;

                    if(load_more_check < 3)
                    {
                        load_more();
                    }
                    else
                    {
                        load_more_check = 0;
                        $("#load-more").html("<div style=\"font-size:20px;text-align:center;color:blue;font-weight:bold;\" onclick=\"load_more();\">Load More Posts</div>");

                        $(".btn-disable").removeAttr("disabled");
                    }
                }
            }
        },
        error: function(data){
            $("#posts").html("<div style=\"text-align:center;color:red;\"><b>Error Occured</b></div>");
            $(".btn-disable").removeAttr("disabled");
        }
    });
}

function zipcodefilter()
{
    $('#currency option').attr("selected",false);
    $('#category option').attr("selected",false);
    $('#second-language option').attr("selected",false);

    $('#currency').selectpicker('refresh');
    $('#category').selectpicker('refresh');
    $('#second-language').selectpicker('refresh');

    $(".btn-disable").attr( "disabled" , "disabled" );

    load_more_index = 0;
    load_more_url = '<?php echo base_url(); ?>HireAResource/zipcode_filter';
    load_more_formData = new Array();

    $.ajax({
        type : 'POST',
        url : '<?php echo base_url(); ?>HireAResource/zipcode_filter',
        data : { 
            'index': load_more_index 
        }, 
        dataType : "json",
        success:function(data){

            if(data.result == "No results found") {
                load_more_check = 0;
                $("#posts").html("");
                $("#load-more").html("<div style=\"font-size:20px;text-align:center;\"> No More Posts .....!</div>");

                $(".btn-disable").removeAttr("disabled");
            }
            else {
                
                $("#load-more").html("<div style=\"font-size:20px;color:blue;text-align:center;\"> Loading posts <i class=\"fa fa-spinner fa-spin\" style=\"font-size: 28px;\"></i></div>");
                    
                $("#posts-location").html("( Location : "+ $("#zipcode").val() +" | Range : "+ $("#range").val() +" mile)");
                
                $("#posts").html("");
                var ind = -1;

                for(var i=0;i<data.length;i++)
                {
                    var destination = data[i].zipcode;
                    var service = new google.maps.DistanceMatrixService();
                    
                    if(i == data.length - 1 ){
                        service.getDistanceMatrix({origins: [origin],destinations: [destination],travelMode:'DRIVING',},
                            function(response, status) {ind++;callback(response, status, new Array(data[ind]),ind,true);}
                        );
                    }
                    else
                    {
                        service.getDistanceMatrix({origins: [origin],destinations: [destination],travelMode:'DRIVING',},
                            function(response, status) {ind++;callback(response, status, new Array(data[ind]),ind,false);}
                        );
                    }
                    
                    function callback(response, status,data,index,lastpost)
                    {
                        if(status !== 'OK'){
                            alert('Some error occured while requesting google Map Api');
                        }
                        else
                        {
                            load_more_index = data[0].hire_a_resource_id;
                            if(response['rows'][0]['elements'][0]['status'] != "ZERO_RESULTS" && response['rows'][0]['elements'][0]['status'] != "NOT_FOUND"){
                                console.log("Posts | " + "Origin = " + $("#zipcode").val() + " & Destination = " + data[0].zipcode +" & Distance = " + Math.ceil(response['rows'][0]['elements'][0]['distance']['value']/1609.34) + " & index = " + index);
                                
                                if(Math.ceil(response['rows'][0]['elements'][0]['distance']['value']/1609.34) <= range )
                                {   
                                    var component = "<div class=\"col-md-4 col-sm-4\">";
                                    component +=    "<div class=\"item\" data-id=\"1\">";
                                    component +=         "<a href=\"<?php echo base_url();?>HireAResource/post_details/" + data[0].hire_a_resource_id + "\">";
                                    component +=            "<div class=\"description\">";
                                    component +=                "<div class=\"label label-default\">" + data[0].category + "</div>";
                                    
                                    if(data[0].title.length > 20)
                                        component +=                "<h3>" + data[0].title.substr(0,20) + "...</h3>";
                                    else
                                        component +=                "<h3>" + data[0].title + "</h3>";

                                    if(data[0].zipcode.length > 30)
                                        component +=                "<h4>" + data[0].zipcode.substr(0,30) + "...</h4>";
                                    else
                                        component +=                "<h4>" + data[0].zipcode + "</h4>";
                                    
                                    component +=            "</div>";
                                    component +=            "<div class=\"image bg-transfer\" style=\"background-image: url(\'<?php echo base_url();?>" + (jQuery.parseJSON(data[0].file))[0] + "\');\">";
                                    component +=                "<img src=\"<?php echo base_url();?>" + (jQuery.parseJSON(data[0].file))[0] + "\" alt=\"\">";
                                    component +=            "</div>";
                                    component +=         "</a>";
                                    component +=        "<div class=\"additional-info\">";
                                    component +=            "<div class=\"rating-passive\">";
                                    component +=                "<span class=\"stars\">";
                                    component +=                    "<figure class=\"active fa fa-star\"></figure>";
                                    component +=                    "<figure class=\"active fa fa-star\"></figure>";
                                    component +=                    "<figure class=\"active fa fa-star\"></figure>";
                                    component +=                    "<figure class=\"active fa fa-star\"></figure>";
                                    component +=                    "<figure class=\"fa fa-star\"></figure>";
                                    component +=                "</span>";
                                    component +=                "<span class=\"reviews\">6</span>";
                                    component +=            "</div>";
                                    component +=            "<div class=\"controls-more\">";
                                    component +=                "<ul>";
                                    component +=                    "<li><a onclick=\"addToFavourite(\'hire_a_resource\'," + data[0].hire_a_resource_id + ");\">Add to favorites</a></li>";
                                    component +=                    "<li><a>Add to watchlist</a></li>";
                                    component +=                    "<li><a href=\"#\" class=\"quick-detail\">Quick detail</a></li>";
                                    component +=                "</ul>";
                                    component +=            "</div>";
                                    component +=        "</div>";
                                    component +=    "</div>";
                                    component += "</div>";

                                    $("#posts").append(component);
                                    load_more_check++;
                                }

                                if(load_more_check < 3)
                                {
                                    load_more();
                                }
                                else
                                {
                                    load_more_check = 0;
                                    $("#load-more").html("<div style=\"font-size:20px;text-align:center;color:blue;font-weight:bold;\" onclick=\"load_more();\">Load More Posts</div>");

                                    $(".btn-disable").removeAttr("disabled");
                                }
                            }
                            else
                            {
                                console.log("ZERO_RESULT AND NOT_FOUND");
                                load_more();
                            }
                        }                    
                    }
                }
            }
        },
        error: function(data){
            $("#posts").html("<div style=\"text-align:center;color:red;\"><b>Error Occured</b></div>");
            $(".btn-disable").removeAttr("disabled");
        }
    });
}

function load_more()
{
    $(".btn-disable").attr( "disabled" , "disabled" );
    
    console.log("Hire A Resource ID set To before load more : " + load_more_index);
    console.log("Type set To before load more : " + load_more_url);

    var formData;

    if(load_more_url.includes("no_filter")){
        $.ajax({
            type : 'POST',
            url : load_more_url,
            data : { 
                'index': load_more_index 
            },
            dataType : "json",
            success:function(data){

                if(data.result == "No results found") {
                    load_more_check = 0;
                    $("#load-more").html("<div style=\"font-size:20px;text-align:center;\"> No More Posts .....!</div>");

                    $(".btn-disable").removeAttr("disabled");
                }
                else {

                    $("#load-more").html("<div style=\"font-size:20px;color:blue;text-align:center;\"> Loading posts <i class=\"fa fa-spinner fa-spin\" style=\"font-size: 28px;\"></i></div>");

                    var ind = -1;
    
                    for(var i=0;i<data.length;i++)
                    {
                        load_more_index = data[0].hire_a_resource_id;

                        var component = "<div class=\"col-md-4 col-sm-4\">";
                        component +=    "<div class=\"item\" data-id=\"1\">";
                        component +=         "<a href=\"<?php echo base_url();?>HireAResource/post_details/" + data[0].hire_a_resource_id + "\">";
                        component +=            "<div class=\"description\">";
                        component +=                "<figure>Hourly Rate : " + data[0].hourly_rate + " " + data[0].currency + "</figure>";
                        component +=                "<div class=\"label label-default\">" + data[0].category + "</div>";
                        
                        if(data[0].title.length > 20)
                            component +=                "<h3>" + data[0].title.substr(0,20) + "...</h3>";
                        else
                            component +=                "<h3>" + data[0].title + "</h3>";

                        if(data[0].zipcode.length > 30)
                            component +=                "<h4>" + data[0].zipcode.substr(0,30) + "...</h4>";
                        else
                            component +=                "<h4>" + data[0].zipcode + "</h4>";
                        
                        component +=            "</div>";
                        component +=            "<div class=\"image bg-transfer\" style=\"background-image: url(\'<?php echo base_url();?>" + (jQuery.parseJSON(data[0].file))[0] + "\');\">";
                        component +=                "<img src=\"<?php echo base_url();?>" + (jQuery.parseJSON(data[0].file))[0] + "\" alt=\"\">";
                        component +=            "</div>";
                        component +=         "</a>";
                        component +=        "<div class=\"additional-info\">";
                        component +=            "<div class=\"rating-passive\">";
                        component +=                "<span class=\"stars\">";
                        component +=                    "<figure class=\"active fa fa-star\"></figure>";
                        component +=                    "<figure class=\"active fa fa-star\"></figure>";
                        component +=                    "<figure class=\"active fa fa-star\"></figure>";
                        component +=                    "<figure class=\"active fa fa-star\"></figure>";
                        component +=                    "<figure class=\"fa fa-star\"></figure>";
                        component +=                "</span>";
                        component +=                "<span class=\"reviews\">6</span>";
                        component +=            "</div>";
                        component +=            "<div class=\"controls-more\">";
                        component +=                "<ul>";
                        component +=                    "<li><a onclick=\"addToFavourite(\'hire_a_resource\'," + data[0].hire_a_resource_id + ");\">Add to favorites</a></li>";
                        component +=                    "<li><a>Add to watchlist</a></li>";
                        component +=                    "<li><a href=\"#\" class=\"quick-detail\">Quick detail</a></li>";
                        component +=                "</ul>";
                        component +=            "</div>";
                        component +=        "</div>";
                        component +=    "</div>";
                        component += "</div>";

                        $("#posts").append(component);
                        load_more_check++;
                                    

                        if(load_more_check < 3)
                        {
                            load_more();
                        }
                        else
                        {
                            load_more_check = 0;
                            $("#load-more").html("<div style=\"font-size:20px;text-align:center;color:blue;font-weight:bold;\" onclick=\"load_more();\">Load More Posts</div>");

                            $(".btn-disable").removeAttr("disabled");
                        }
                    }
                }
            },
            error: function(data){
                $("#posts").html("<div style=\"text-align:center;color:red;\"><b>Error Occured</b></div>");
                $(".btn-disable").removeAttr("disabled");
            }
        });
    }
	else if(load_more_url.includes("zipcode_filter")){
        $.ajax({
            type : 'POST',
            url : load_more_url,
            data : { 
                'index': load_more_index 
            },
            dataType : "json",
            success:function(data){

                if(data.result == "No results found") {
                    load_more_check = 0;
                    $("#load-more").html("<div style=\"font-size:20px;text-align:center;\"> No More Posts .....!</div>");

                    $(".btn-disable").removeAttr("disabled");
                }
                else {

                    $("#load-more").html("<div style=\"font-size:20px;color:blue;text-align:center;\"> Loading posts <i class=\"fa fa-spinner fa-spin\" style=\"font-size: 28px;\"></i></div>");

                    var ind = -1;
    
                    for(var i=0;i<data.length;i++)
                    {
                        var destination = data[i].zipcode;
                        var service = new google.maps.DistanceMatrixService();
                        
                        if(i == data.length - 1 ){
                            service.getDistanceMatrix({origins: [origin],destinations: [destination],travelMode:'DRIVING',},
                                function(response, status) {ind++;callback(response, status, new Array(data[ind]),ind,true);}
                            );
                        }
                        else
                        {
                            service.getDistanceMatrix({origins: [origin],destinations: [destination],travelMode:'DRIVING',},
                                function(response, status) {ind++;callback(response, status, new Array(data[ind]),ind,false);}
                            );
                        }
                        
                        function callback(response, status,data,index,lastpost)
                        {
                            if(status !== 'OK'){
                                alert('Some error occured while requesting google Map Api');
                            }
                            else
                            {
                                load_more_index = data[0].hire_a_resource_id;
                                if(response['rows'][0]['elements'][0]['status'] != "ZERO_RESULTS" && response['rows'][0]['elements'][0]['status'] != "NOT_FOUND"){
                                    console.log("Posts | " + "Origin = " + $("#zipcode").val() + " & Destination = " + data[0].zipcode +" & Distance = " + Math.ceil(response['rows'][0]['elements'][0]['distance']['value']/1609.34) + " & index = " + index);
                                    
                                    if(Math.ceil(response['rows'][0]['elements'][0]['distance']['value']/1609.34) <= range )
                                    {   
                                        var component = "<div class=\"col-md-4 col-sm-4\">";
                                        component +=    "<div class=\"item\" data-id=\"1\">";
                                        component +=         "<a href=\"<?php echo base_url();?>HireAResource/post_details/" + data[0].hire_a_resource_id + "\">";
                                        component +=            "<div class=\"description\">";
                                        component +=                "<figure>Hourly Rate : " + data[0].hourly_rate + " " + data[0].currency + "</figure>";
                                        component +=                "<div class=\"label label-default\">" + data[0].category + "</div>";
                                        
                                        if(data[0].title.length > 20)
                                            component +=                "<h3>" + data[0].title.substr(0,20) + "...</h3>";
                                        else
                                            component +=                "<h3>" + data[0].title + "</h3>";

                                        if(data[0].zipcode.length > 30)
                                            component +=                "<h4>" + data[0].zipcode.substr(0,30) + "...</h4>";
                                        else
                                            component +=                "<h4>" + data[0].zipcode + "</h4>";
                                        
                                        component +=            "</div>";
                                        component +=            "<div class=\"image bg-transfer\" style=\"background-image: url(\'<?php echo base_url();?>" + (jQuery.parseJSON(data[0].file))[0] + "\');\">";
                                        component +=                "<img src=\"<?php echo base_url();?>" + (jQuery.parseJSON(data[0].file))[0] + "\" alt=\"\">";
                                        component +=            "</div>";
                                        component +=         "</a>";
                                        component +=        "<div class=\"additional-info\">";
                                        component +=            "<div class=\"rating-passive\">";
                                        component +=                "<span class=\"stars\">";
                                        component +=                    "<figure class=\"active fa fa-star\"></figure>";
                                        component +=                    "<figure class=\"active fa fa-star\"></figure>";
                                        component +=                    "<figure class=\"active fa fa-star\"></figure>";
                                        component +=                    "<figure class=\"active fa fa-star\"></figure>";
                                        component +=                    "<figure class=\"fa fa-star\"></figure>";
                                        component +=                "</span>";
                                        component +=                "<span class=\"reviews\">6</span>";
                                        component +=            "</div>";
                                        component +=            "<div class=\"controls-more\">";
                                        component +=                "<ul>";
                                        component +=                    "<li><a onclick=\"addToFavourite(\'hire_a_resource\'," + data[0].hire_a_resource_id + ");\">Add to favorites</a></li>";
                                        component +=                    "<li><a>Add to watchlist</a></li>";
                                        component +=                    "<li><a href=\"#\" class=\"quick-detail\">Quick detail</a></li>";
                                        component +=                "</ul>";
                                        component +=            "</div>";
                                        component +=        "</div>";
                                        component +=    "</div>";
                                        component += "</div>";

                                        $("#posts").append(component);
                                        load_more_check++;
                                    }

                                    if(load_more_check < 3)
                                    {
                                        load_more();
                                    }
                                    else
                                    {
                                        load_more_check = 0;
                                        $("#load-more").html("<div style=\"font-size:20px;text-align:center;color:blue;font-weight:bold;\" onclick=\"load_more();\">Load More Posts</div>");

                                        $(".btn-disable").removeAttr("disabled");
                                    }
                                }
                                else
                                {
                                    load_more();
                                }
                            }                    
                        }
                    }
                }
            },
            error: function(data){
                $("#posts").html("<div style=\"text-align:center;color:red;\"><b>Error Occured</b></div>");
                $(".btn-disable").removeAttr("disabled");
            }
        });
    }
    else
    {
        formData = load_more_formData;
        formData.append('index', load_more_index);
        
        $.ajax({
            type : 'POST',
            url : load_more_url,
            data : formData,
            dataType : "json",
            contentType : false,
            enctype : 'multipart/form-data',
            processData : false,
            cache : false,
            success:function(data){

                if(data.result == "No results found") {
                    load_more_check = 0;
                    $("#load-more").html("<div style=\"font-size:20px;text-align:center;\"> No More Posts .....!</div>");

                    $(".btn-disable").removeAttr("disabled");
                }
                else {
                    
                    $("#load-more").html("<div style=\"font-size:20px;color:blue;text-align:center;\"> Loading posts <i class=\"fa fa-spinner fa-spin\" style=\"font-size: 28px;\"></i></div>");

                    var ind = -1;
    
                    for(var i=0;i<data.length;i++)
                    {
                        load_more_index = data[0].hire_a_resource_id;

                        var component = "<div class=\"col-md-4 col-sm-4\">";
                        component +=    "<div class=\"item\" data-id=\"1\">";
                        component +=         "<a href=\"<?php echo base_url();?>HireAResource/post_details/" + data[0].hire_a_resource_id + "\">";
                        component +=            "<div class=\"description\">";
                        component +=                "<figure>Hourly Rate : " + data[0].hourly_rate + " " + data[0].currency + "</figure>";
                        component +=                "<div class=\"label label-default\">" + data[0].category + "</div>";
                        
                        if(data[0].title.length > 20)
                            component +=                "<h3>" + data[0].title.substr(0,20) + "...</h3>";
                        else
                            component +=                "<h3>" + data[0].title + "</h3>";

                        if(data[0].zipcode.length > 30)
                            component +=                "<h4>" + data[0].zipcode.substr(0,30) + "...</h4>";
                        else
                            component +=                "<h4>" + data[0].zipcode + "</h4>";
                        
                        component +=            "</div>";
                        component +=            "<div class=\"image bg-transfer\" style=\"background-image: url(\'<?php echo base_url();?>" + (jQuery.parseJSON(data[0].file))[0] + "\');\">";
                        component +=                "<img src=\"<?php echo base_url();?>" + (jQuery.parseJSON(data[0].file))[0] + "\" alt=\"\">";
                        component +=            "</div>";
                        component +=         "</a>";
                        component +=        "<div class=\"additional-info\">";
                        component +=            "<div class=\"rating-passive\">";
                        component +=                "<span class=\"stars\">";
                        component +=                    "<figure class=\"active fa fa-star\"></figure>";
                        component +=                    "<figure class=\"active fa fa-star\"></figure>";
                        component +=                    "<figure class=\"active fa fa-star\"></figure>";
                        component +=                    "<figure class=\"active fa fa-star\"></figure>";
                        component +=                    "<figure class=\"fa fa-star\"></figure>";
                        component +=                "</span>";
                        component +=                "<span class=\"reviews\">6</span>";
                        component +=            "</div>";
                        component +=            "<div class=\"controls-more\">";
                        component +=                "<ul>";
                        component +=                    "<li><a onclick=\"addToFavourite(\'hire_a_resource\'," + data[0].hire_a_resource_id + ");\">Add to favorites</a></li>";
                        component +=                    "<li><a>Add to watchlist</a></li>";
                        component +=                    "<li><a href=\"#\" class=\"quick-detail\">Quick detail</a></li>";
                        component +=                "</ul>";
                        component +=            "</div>";
                        component +=        "</div>";
                        component +=    "</div>";
                        component += "</div>";

                        $("#posts").append(component);
                        load_more_check++;
                                    

                        if(load_more_check < 3)
                        {
                            load_more();
                        }
                        else
                        {
                            load_more_check = 0;
                            $("#load-more").html("<div style=\"font-size:20px;text-align:center;color:blue;font-weight:bold;\" onclick=\"load_more();\">Load More Posts</div>");

                            $(".btn-disable").removeAttr("disabled");
                        }
                    }
                }
            },
            error: function(data){
                $("#posts").html("<div style=\"text-align:center;color:red;\"><b>Error Occured</b></div>");
                $(".btn-disable").removeAttr("disabled");
            }
        });
    }
}

$(window).load(function() {
    nofilter();
});

</script>
