<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="<?php echo base_url(); ?>assets/css/style_login_signup.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->
<style>
    body {
        /* background-image: url(<?php echo base_url(); ?>assets/images/photo-wide-4.jpg); */
    }

    .login-form-2 {
        background-image: url(<?php echo base_url(); ?>assets/images/photo-long-3.jpg);
    }

    .login-form-1 {
        border-bottom-right-radius: 1rem !important;
        border-top-right-radius: 1rem !important;

        border-bottom-left-radius: unset;
        border-top-left-radius: unset;
    }


    .login-form-2 {
        border-bottom-left-radius: 1rem !important;
        border-top-left-radius: 1rem !important;

        border-bottom-right-radius: unset;
        border-top-right-radius: unset;
    }
</style>

<body>
    <div class="container login-container " style="margin-top:2rem;margin-bottom:unset;">

        <div class="row center_row">

            <div class="col-md-6 col-sm-12 login-form-2">

                <center><img src="<?php echo base_url(); ?>assets/images/logo_login.png" class="logo_class"></center>

                <div class="social">
                    <div id="social_login1" class="form-group sign-with-email social_login"><a href="<?php echo base_url(); ?>login" class="cld-mail"><i class="fa fa-envelope"></i> Sign up with Email</a></div>
                    <div id="social_login2" class="form-group sign-with-google social_login"><a href="#" class="cld-google"><i class="fa fa-google-plus"></i> Sign up with Google</a></div>
                    <div id="social_login3" class="form-group sign-with-fb social_login"><a href="#" class="cld-fb"><i class="fa fa-facebook-f"></i> Sign up with Facebook</a></div>
                </div>
            </div>

            <div class="col-md-6  col-sm-12 login-form-1">

                <h4 style="margin-top: 2rem;">Sign up</h4>

                <div class="col-md-12">
                    <?php if ($this->session->flashdata("error_message")) : ?>
                        <div class="alert alert-danger alert-dismissable  in">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Error ! </strong><?php echo $this->session->flashdata("error_message"); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($this->session->flashdata("success_message")) : ?>
                        <div class="alert alert-success alert-dismissable  in">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Success ! </strong><?php echo $this->session->flashdata("success_message"); ?>
                        </div>
                    <?php endif; ?>

                    <?php
                    if ($this->session->flashdata('errors')) {
                        echo "<div class='alert alert-danger alert-dismissable  in'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                        echo $this->session->flashdata('errors');
                        echo "</div>";
                    }
                    ?>
                </div>




                <form action="<?php echo base_url(); ?>user/register" method="post" method="post">
                    <!-- <div class="form-group">
                        <label for="first_name">Name</label> -->
                        <input type="hidden" class="form-control" value="-" name="full_name" id="full_name" placeholder="Name"  />
                    <!-- </div> -->
                    <div class="form-group">
                        <label for="last_name">User Name</label>
                        <input type="text" class="form-control" name="user_name" id="user_name" placeholder="User name" required />
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                    </div>


                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required />
                    </div>

                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required />
                    </div>



                    <div class="form-group">
                        <label for="zipcode">Zip code</label>
                        <input type="text" class="form-control" name="zipcode1" placeholder=" Zip code">
                    </div>
                    <div class="form-group">
                        <label for="zipcode">Country</label>
                        <select autocomplete="off" name="country_name" id="country_name" class="form-control">

                            <option value=" ">Select Country</option>

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

                    <div class="form-group">
                        <label for="zipcode">City </label>
                        <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="City " required>
                    </div>

                    <!--end map-->
                    <div class="form-group hidden">
                        <div class="map height-200px shadow" id="reg-map"></div>
                        <input type="text" class="form-control" id="reg-latitude" name="latitude" hidden="">
                        <input type="text" class="form-control" id="reg-longitude" name="longitude" hidden="">
                    </div>


                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Sign up" />
                    </div>

                </form>
            </div>

        </div>
    </div>

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

    <style type="text/css">
        .customizer {
            display: none;
        }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120368561-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-120368561-1');
    </script>

    <script>
        var _latitude = 40.7344458;
        var _longitude = -73.86704922;
        var element = "reg-map";
        var lat_element = "reg-latitude";
        var long_element = "reg-longitude";
        simpleMap(lat_element, _latitude, long_element, _longitude, element, true);
    </script>

</body>