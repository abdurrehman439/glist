    <link href="<?php echo base_url(); ?>assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url(); ?>assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">

    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">

    <div id="page-content">

        <div class="container">

            <ol class="breadcrumb">

                <li><a href="#">Home</a></li>

                <li><a href="#">Pages</a></li>

                <li class="active">Contact</li>

            </ol>

            <!--end breadcrumb-->

            <section class="page-title center">

                <h1>Your Profile</h1>

            </section>

            <!--end page-title-->

            <section>

                <div class="row">

                    <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">

                        <form id="profileImageForm" class="form inputs-underline" action="<?php echo base_url(); ?>user/update_profileimage" method="post" enctype="multipart/form-data">

                            <section>

                                <div class="user-details box" style="height: 160px;">

                                    <div class="user-image" style="position: relative;">

                                        <div class="image" style="margin: auto;">

                                            <div id="profile-image-bg" class="bg-transfer"><img id="profile-image" src="<?php echo base_url() . $profile_picture; ?>" alt=""></div>

                                            <!--end bg-transfer-->

                                            <div class="single-file-input">

                                                <input type="file" id="profileImage" name="profileImage" />

                                                <div>Upload a picture<i class="fa fa-upload"></i></div>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <div id="profile-image-error">
                                </div>

                            </section>

                            <!--end user-details-->
                        </form>

                        <form class="form inputs-underline" action="<?php echo base_url(); ?>user/update_profile" method="post" enctype="multipart/form-data">

                            <section>

                                <h3>About You</h3>

                                <div class="row">

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="full_name">Full Name</label>

                                            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Full Name" value="<?php echo $full_name ?>" pattern="[A-Za-z]+" minlength="3" maxlength="30" required>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="phone">Phone</label>

                                            <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone" value="<?php echo $phone; ?>" min="0" maxlength="15">

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="email">Email</label>

                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" max-length="50" disabled required>

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="website">Website</label>

                                            <input type="text" class="form-control" name="website" id="wesbite" placeholder="Website" value="<?php echo $website; ?>" max-length="100">

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                </div>
                                <div class="row">

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">
                                            <label for="zipcode">Zip code</label>
                                            <input type="text" class="form-control" name="zipcode1" placeholder=" Zip code" value="<?php echo $zip_code1; ?>" max-length="500">
                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="full_name">Country</label>

                                            <select autocomplete="off" name="country_name" id="country_name">


                                                <option value=" ">Select Country</option>
                                                <option value="<?php if ($country_name != '') {
                                                                    echo $country_name;
                                                                } ?>" selected="selected"><?php echo $country_name; ?></option>
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

                                        <!--end form-group-->

                                    </div>
                                </div>




                                <!--end row-->

                                <div class="form-group">
                                    <label for="zipcode">City</label>
                                    <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="City" value="<?php echo $zip_code; ?>" max-length="500" required>
                                </div>



                                <!--end form-group-->

                                <div class="form-group hidden">
                                    <div class="map height-200px shadow" id="profile-map"></div>
                                    <input type="text" class="form-control" id="profile-latitude" name="latitude" hidden="">
                                    <input type="text" class="form-control" id="profile-longitude" name="longitude" hidden="">
                                </div>
                                <!--end form-group-->

                                <div class="form-group">
                                    <label for="occupation">Title/Occupation</label>
                                    <input type="text" class="form-control" name="occupation" id="occupation" placeholder="Title/Occupation" value="<?php echo $occupation ?>" minlength="3" maxlength="255" required>
                                </div>
                                <!--end form-group-->

                                <div class="form-group">
                                    <label for="description">Describe yourself</label>
                                    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Describe yourself" onkeypress="if (this.value.length > 199) { return false; }" required><?php echo $description; ?></textarea>
                                </div>
                                <!--end form-group-->

                                <div class="form-group">
                                    <label for="professional_details" style="padding-bottom:20px;">Professional Details</label>
                                    <textarea class="form-control" name="professional_details" id="professional_details" rows="4" placeholder="Professional Details" required><?php echo $professional_details; ?></textarea>
                                </div>
                                <!--end form-group-->

                            </section>

                            <section>

                                <h3>Select your Profession</h3>

                                <div class="row" style="padding-top:20px;">

                                    <div class="col-md-6 col-sm-12">

                                        <div class="form-group">

                                            <input type="radio" class="" id="agent" name="interest" value="agent" <?php if ($profession == "agent") { ?> checked="true" <?php } ?> />

                                            <label for="agent" style="position: relative; bottom: 3px;left: 5px;">List me as Agent</label>

                                        </div>

                                    </div>

                                    <!--end col-md-12-->

                                    <div class="col-md-6 col-sm-12">

                                        <div class="form-group">

                                            <input type="radio" class="" id="freelancer" name="interest" value="freelancer" <?php if ($profession == "freelancer") { ?> checked="true" <?php } ?> />

                                            <label for="freelancer" style="position: relative; bottom: 3px;left: 5px;">List me as Freelancer</label>

                                        </div>

                                    </div>

                                    <!--end col-md-12-->

                                    <div class="col-md-6 col-sm-12">

                                        <div class="form-group">

                                            <input type="radio" class="" id="service-provider" name="interest" value="service-provider" <?php if ($profession == "service-provider") { ?> checked="true" <?php } ?> />

                                            <label for="service-provider" style="position: relative; bottom: 3px;left: 5px;">List me as Service Provider</label>

                                        </div>

                                    </div>

                                    <!--end col-md-12-->

                                    <div class="col-md-6 col-sm-12">

                                        <div class="form-group">

                                            <input type="radio" class="" id="resume" name="interest" value="resume" <?php if ($profession == "resume") { ?> checked="true" <?php } ?> />

                                            <label for="resume" style="position: relative; bottom: 3px;left: 5px;">List me as Professionals Profile</label>

                                        </div>

                                    </div>

                                    <!--end col-md-12-->

                                    <div class="col-md-6 col-sm-12">

                                        <div class="form-group">

                                            <input type="radio" class="" id="entrepreneur" name="interest" value="entrepreneur" <?php if ($profession == "entrepreneur") { ?> checked="true" <?php } ?> />

                                            <label for="entrepreneur" style="position: relative; bottom: 3px;left: 5px;">List me as Entrepreneurs Profile</label>

                                        </div>

                                    </div>

                                    <!--end col-md-12-->

                                    <div class="col-md-6 col-sm-12">

                                        <div class="form-group">

                                            <input type="radio" class="" id="investor" name="interest" value="investor" <?php if ($profession == "investor") { ?> checked="true" <?php } ?> />

                                            <label for="investor" style="position: relative; bottom: 3px;left: 5px;">List me as Investors Profile</label>

                                        </div>

                                    </div>

                                    <!--end col-md-12-->

                                    <div class="col-md-6 col-sm-12">

                                        <div class="form-group">

                                            <input type="radio" class="" id="guest" name="interest" value="guest" <?php if ($profession == "guest") { ?> checked="true" <?php } ?> />

                                            <label for="guest" style="position: relative; bottom: 3px;left: 5px;">List me as Guest</label>

                                        </div>

                                    </div>

                                    <!--end col-md-12-->

                                </div>

                                <!--end row-->

                            </section>

                            <section>

                                <h3>Skills</h3>
                                <ul class="tags">
                                    <?php for ($i = 0; $i < sizeof($skills); $i++) { ?>
                                        <li class="tag"><?php echo $skills[$i]; ?><input type="hidden" name="skills[]" value="<?php echo $skills[$i]; ?>" /></li>
                                    <?php } ?>
                                </ul>
                                <div id="tags" class="form-group">
                                    <input class="form-control" type="text" id="skills" placeholder="Add a skill (Hit Enter or Comma to Add)" />
                                </div>

                            </section>

                            <section>

                                <h3>Your Social Networks</h3>

                                <div class="row">

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="facebook">Facebook</label>

                                            <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Facebook" value="<?php echo $facebook; ?>" max-length="255" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="twitter">Twitter</label>

                                            <input type="text" class="form-control" name="twitter" id="twitter" placeholder="Twitter" value="<?php echo $twitter; ?>" max-length="255" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="google-plus">Google Plus</label>

                                            <input type="text" class="form-control" name="google-plus" id="google-plus" placeholder="Google Plus" value="<?php echo $googleplus; ?>" max-length="255" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                    <div class="col-md-6 col-sm-6">

                                        <div class="form-group">

                                            <label for="linkedin">LinkedIn</label>

                                            <input type="text" class="form-control" name="linkedin" id="linkedin" placeholder="LinkedIn" value="<?php echo $linkedin; ?>" max-length="255" />

                                        </div>

                                        <!--end form-group-->

                                    </div>

                                    <!--end col-md-6-->

                                </div>

                                <!--end row-->

                            </section>

                            <section class="center">

                                <div class="form-group">

                                    <button type="submit" class="btn btn-primary btn-rounded">Save Changes</button>

                                </div>

                                <!--end form-group-->

                            </section>

                        </form>

                        <!--end form-->

                        <hr>

                    </div>

                    <!--end col-md-6-->

                </div>

                <!--end row-->

            </section>

            <section>

                <section>

                    <div class="row">

                        <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">

                            <h3 class="center">Change Your Password</h3>

                            <form id="change-password" class="form inputs-underline" action="<?php echo base_url(); ?>user/update_password" method="post">

                                <div class="form-group">

                                    <label for="old-password">Current Password</label>

                                    <input type="password" class="form-control" name="old-password" id="old-password" placeholder="Old Password" min-length="6" max-length="50" required />

                                </div>

                                <!--end form-group-->

                                <div class="form-group">

                                    <label for="new-password">New Password</label>

                                    <input type="password" class="form-control" name="new-password" id="new-password" placeholder="New Password" min-length="6" max-length="50" required />

                                </div>

                                <!--end form-group-->

                                <div class="form-group">

                                    <label for="confirm-new-password">Confirm New Password</label>

                                    <input type="password" class="form-control" name="confirm-new-password" id="confirm-new-password" placeholder="Confirm New Password" min-length="6" max-length="50" required />

                                </div>

                                <div class="form-group" id="password-errors" style="color:red;">

                                    <!--end form-group-->

                                    <div class="form-group center">

                                        <button type="submit" class="btn btn-primary btn-framed btn-rounded btn-light-frame">Change Password</button>

                                    </div>

                                    <!--end form-group-->

                            </form>

                        </div>

                    </div>

                </section>

            </section>

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

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/icheck.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/maps.js"></script>

    <script>
        var _latitude = 40.7344458;
        var _longitude = -73.86704922;
        var element = "profile-map";
        var lat_element = "profile-latitude";
        var long_element = "profile-longitude";
        //    simpleMap(lat_element,_latitude,long_element,_longitude, element, true);
    </script>

    <script>
        $(function() {
            $('#change-password').on('submit', function(event) {
                if ($('#new-password').val() != $('#confirm-new-password').val()) {
                    $('#password-errors').html(' * Passwords don\'t match.');
                    return false;
                }
                return true;
            });
        });

        $('#profileImageForm').on('submit', (function(e) {
            e.preventDefault();
            var formData = new FormData(this);

            $("#profile-image-error").html("<div style=\"text-align:center; color:blue;\"><b> <i class=\"fa fa-spinner fa-spin\" style=\"color:blue; font-size:36px\"></i> &nbsp; &nbsp; &nbsp; &nbsp; </b><span style=\"position:relative;bottom:10px;\">Profile picture updating.....!</span></div>");

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

                        $("#profile-image").removeAttr("src");
                        $("#profile-image").attr("src", data.success);

                        $("#profile-image-bg").removeAttr("style");
                        $("#profile-image-bg").attr("style", "background-image: url(\"" + data.success + "\")");

                        $("#profile-image-error").html("<div style=\"text-align:center; color:green;\"><b> * Success ! </b>Profile Picture Updated.....!</div>");
                    }
                    if (typeof data.error !== 'undefined') {
                        $("#profile-image-error").html("<div style=\"text-align:center; color:red;\"><b> * Error ! </b>" + data.error + "</div>");
                    }
                },
                error: function(data) {
                    $("#profile-image-error").html("<div style=\"text-align:center; color:red;\"><b> * Try Again ! </b>" + "Error occured while updating Profile Picture.....!" + "</div>");
                }
            });
        }));

        $("#profileImage").on("change", function() {
            $("#profileImageForm").submit();
        });

        $(function() {

            $('#tags input').on('keyup', function(e) {
                if (/(188|13)/.test(e.which)) {
                    var txt = this.value.replace(/[^a-zA-Z0-9\+\-\.\#]/g, ''); // allowed characters list

                    if (txt)
                        $(".tags").append('<li class="tag">' + txt + '<input type="hidden" name="skills[]" value="' + txt + '" /></li>');

                    this.value = "";
                }
            });

            $('.tags').on('click', '.tag', function() {
                swal({
                    title: "Are you sure?",
                    text: "You really want to remove this skill?",
                    icon: "info",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        $(this).remove();
                    }
                });
            });

            $(document).on("keypress", "form", function(event) {
                return event.keyCode != 13;
            });

            CKEDITOR.replace('professional_details');

        });
    </script>