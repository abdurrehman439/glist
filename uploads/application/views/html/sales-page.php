<link href="<?php echo base_url(); ?>assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.nouislider.min.css" type="text/css">

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">
    
<style>
    #add-date-filter {
        color : #4611a7;
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
        color : #4611a7;
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
        <div class="hero-section has-background" style="height:100px;">
            <div class="form search-form horizontal">
                <div class="container">
                    <form id="search-form" action="<?php echo base_url(); ?>Sales/search" method="post">
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
                    <form id="zipcode-form" action="<?php echo base_url(); ?>Sales/zipcode" method="post">
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
                        <form id="filters-form" action="<?php echo base_url(); ?>Sales/filters" method="post" class="form inputs-underline">
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
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control selectpicker" data-dropup-auto="false" data-size="8" id="category" name="category[]" multiple>
                                    <option value="new">New</option>
                                    <option value="used">Used</option>
                                    <option value="classic_antiques">Classic/Antiques</option>
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
                    <h1>Sales Listing</h1>
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
                    nofilter();
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
                                load_more_index = data[0].sales_id;
                                if(response['rows'][0]['elements'][0]['status'] != "ZERO_RESULTS" && response['rows'][0]['elements'][0]['status'] != "NOT_FOUND"){
                                    console.log("Posts | " + "Origin = " + $("#zipcode").val() + " & Destination = " + data[0].zipcode +" & Distance = " + Math.ceil(response['rows'][0]['elements'][0]['distance']['value']/1609.34) + " & index = " + index);
                                    
                                    if(Math.ceil(response['rows'][0]['elements'][0]['distance']['value']/1609.34) <= range )
                                    {   
                                        var component = "<div class=\"col-md-4 col-sm-4\">";
                                        component +=    "<div class=\"item\" data-id=\"1\">";
                                        component +=         "<a href=\"<?php echo base_url();?>Sales/post_details/" + data[0].sales_id + "\">";
                                        component +=            "<div class=\"description\">";
                                        component +=                "<figure>Price : " + data[0].price + " " + data[0].currency + "</figure>";
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
                                        component +=                    "<li><a onclick=\"addToFavourite(\'sales\'," + data[0].sales_id + ");\">Add to favorites</a></li>";
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
                            load_more_index = data[0].sales_id;
                            if(response['rows'][0]['elements'][0]['status'] != "ZERO_RESULTS" && response['rows'][0]['elements'][0]['status'] != "NOT_FOUND"){
                                console.log("Posts | " + "Origin = " + $("#zipcode").val() + " & Destination = " + data[0].zipcode +" & Distance = " + Math.ceil(response['rows'][0]['elements'][0]['distance']['value']/1609.34) + " & index = " + index);
                                
                                if(Math.ceil(response['rows'][0]['elements'][0]['distance']['value']/1609.34) <= range )
                                {   
                                    var component = "<div class=\"col-md-4 col-sm-4\">";
                                    component +=    "<div class=\"item\" data-id=\"1\">";
                                    component +=         "<a href=\"<?php echo base_url();?>Sales/post_details/" + data[0].sales_id + "\">";
                                    component +=            "<div class=\"description\">";
                                    component +=                "<figure>Price : " + data[0].price + " " + data[0].currency + "</figure>";
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
                                    component +=                    "<li><a onclick=\"addToFavourite(\'sales\'," + data[0].sales_id + ");\">Add to favorites</a></li>";
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
}));


function nofilter()
{
    if($("#zipcode").val() == "" || $("#range").val() == "")
    {
        alert("Kindly set City / Zip code & Range first.....!");
        return false;
    }

    $('#currency option').attr("selected",false);
    $('#category option').attr("selected",false);

    $('#currency').selectpicker('refresh');
    $('#category').selectpicker('refresh');

    $(".btn-disable").attr( "disabled" , "disabled" );

    load_more_index = 0;
    load_more_url = '<?php echo base_url(); ?>Sales/no_filter';
    load_more_formData = new Array();

    $.ajax({
        type : 'POST',
        url : '<?php echo base_url(); ?>Sales/no_filter',
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
                            load_more_index = data[0].sales_id;
                            if(response['rows'][0]['elements'][0]['status'] != "ZERO_RESULTS" && response['rows'][0]['elements'][0]['status'] != "NOT_FOUND"){
                                console.log("Posts | " + "Origin = " + $("#zipcode").val() + " & Destination = " + data[0].zipcode +" & Distance = " + Math.ceil(response['rows'][0]['elements'][0]['distance']['value']/1609.34) + " & index = " + index);
                                
                                if(Math.ceil(response['rows'][0]['elements'][0]['distance']['value']/1609.34) <= range )
                                {   
                                    var component = "<div class=\"col-md-4 col-sm-4\">";
                                    component +=    "<div class=\"item\" data-id=\"1\">";
                                    component +=         "<a href=\"<?php echo base_url();?>Sales/post_details/" + data[0].sales_id + "\">";
                                    component +=            "<div class=\"description\">";
                                    component +=                "<figure>Price : " + data[0].price + " " + data[0].currency + "</figure>";
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
                                    component +=                    "<li><a onclick=\"addToFavourite(\'sales\'," + data[0].sales_id + ");\">Add to favorites</a></li>";
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
    
    console.log("Sales ID set To before load more : " + load_more_index);
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
                                load_more_index = data[0].sales_id;
                                if(response['rows'][0]['elements'][0]['status'] != "ZERO_RESULTS" && response['rows'][0]['elements'][0]['status'] != "NOT_FOUND"){
                                    console.log("Posts | " + "Origin = " + $("#zipcode").val() + " & Destination = " + data[0].zipcode +" & Distance = " + Math.ceil(response['rows'][0]['elements'][0]['distance']['value']/1609.34) + " & index = " + index);
                                    
                                    if(Math.ceil(response['rows'][0]['elements'][0]['distance']['value']/1609.34) <= range )
                                    {   
                                        var component = "<div class=\"col-md-4 col-sm-4\">";
                                        component +=    "<div class=\"item\" data-id=\"1\">";
                                        component +=         "<a href=\"<?php echo base_url();?>Sales/post_details/" + data[0].sales_id + "\">";
                                        component +=            "<div class=\"description\">";
                                        component +=                "<figure>Price : " + data[0].price + " " + data[0].currency + "</figure>";
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
                                        component +=                    "<li><a onclick=\"addToFavourite(\'sales\'," + data[0].sales_id + ");\">Add to favorites</a></li>";
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
                                load_more_index = data[0].sales_id;
                                if(response['rows'][0]['elements'][0]['status'] != "ZERO_RESULTS" && response['rows'][0]['elements'][0]['status'] != "NOT_FOUND"){
                                    console.log("Posts | " + "Origin = " + $("#zipcode").val() + " & Destination = " + data[0].zipcode +" & Distance = " + Math.ceil(response['rows'][0]['elements'][0]['distance']['value']/1609.34) + " & index = " + index);
                                    
                                    if(Math.ceil(response['rows'][0]['elements'][0]['distance']['value']/1609.34) <= range )
                                    {   
                                        var component = "<div class=\"col-md-4 col-sm-4\">";
                                        component +=    "<div class=\"item\" data-id=\"1\">";
                                        component +=         "<a href=\"<?php echo base_url();?>Sales/post_details/" + data[0].sales_id + "\">";
                                        component +=            "<div class=\"description\">";
                                        component +=                "<figure>Price : " + data[0].price + " " + data[0].currency + "</figure>";
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
                                        component +=                    "<li><a onclick=\"addToFavourite(\'sales\'," + data[0].sales_id + ");\">Add to favorites</a></li>";
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
}

$(window).load(function() {
    nofilter();
});

</script>
