<link href="<?php echo base_url(); ?>assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.nouislider.min.css" type="text/css">

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css" type="text/css">

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
    
    #message{
        margin-left: 32px;
    }

    #send-message{
        width: 90%;
        height: 65px;
        border-radius: 10px;
    }

    #chat{
        overflow-y: scroll; 
        height: 400px;
        margin-left: 15px;
        border-radius: 3px;
    }

    #chat .container {
        border: 2px solid #dedede;
        background-color: rgb(245, 230, 255);
        border-radius: 5px;
        padding: 10px;
        margin: 10px 0;
        width: 99%;
    }

    #chat .darker {
        border-color: #ccc;
        background-color: rgb(230, 230, 255);
    }

    #chat .container::after {
        content: "";
        clear: both;
        display: table;
    }

    #chat .container img {
        float: left;
        max-width: 60px;
        width: 100%;
        margin-right: 20px;
        border-radius: 50%;
    }

    #chat .container img.right {
        float: right;
        margin-left: 20px;
        margin-right:0;
    }

    #chat .time-right {
        float: right;
        color: #aaa;
    }

    #chat .time-left {
        float: left;
        color: #999;
    }

    #chat .container b{
        font-size:14px;
    }

    #online_users{
        overflow-y: scroll; 
        height: 500px;
    }

    #online_users .container {
        border: 1px solid #dedede;
        background-color: rgb(245, 230, 255);
        border-radius: 5px;
        padding: 3px;
        margin: 3px 7px;
        width: 95%;
    }

    #online_users .darker {
        border-color: #ccc;
        background-color: rgb(230, 230, 255);
    }

    #online_users .container::after {
        content: "";
        clear: both;
        display: table;
    }

    #online_users .container img {
        float: left;
        max-width: 30px;
        width: 100%;
        margin-right: 10px;
        border-radius: 50%;
    }

    #online_users .container img.right {
        float: right;
        margin-left: 10px;
        margin-right:0;
    }

    #online_users .container b{
        font-size: 16px;
        position: relative;
        top: 4px;
    } 
</style>

<div id="page-content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="">Home</a></li>
            <li><a href="">Browse</a></li>
            <li class="active">Chat</li>
        </ol>
        <div class="container">
       <center > <img   class="adds_tab" src="<?php echo base_url(); ?>assets/images/banners.PNG"></center>
        </div>
        
        <div class="hero-section has-background" style="height:100px;">
            <div class="form search-form horizontal">
                <div class="container">
                    <form id="zipcode-form" action="<?php echo base_url(); ?>Chat/zipcode" method="post">
                        <div class="row">
                            
                            <div class="col-md-10 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="City / Zip code" value="<?php echo $zip_code; ?>" required />
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
                            
                            <div class="col-md-2 col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-disable btn-primary pull-right">Change Chat Room</button>
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

            <div class="col-md-9 col-sm-9">

                <section>
                    
                    <div class="row" id="chat">
                    </div>
                    <!--end row-->
                </section>

                <section>
                    <div id="div-message" class="row">
                        <div class="row">
                            <form id="message-form">
                                <div class="col-md-10 col-sm-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" name="message" placeholder="Write you message"></textarea>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-10-->
                                <div class="col-md-2 col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" id="send-message" class="btn btn-disable btn-primary pull-right">Send Message</button>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-2-->
                        </div>
                        <!--end row-->
                    </div>
                </section>

            </div>
            <!--end col-md-9-->

            <div class="col-md-3 col-sm-3">

                <section>
                    <div class="row" id="online_users">
                    </div>
                    <!--end row-->
                </section>

            </div>
            <!--end col-md-3-->
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/sockjs-client/0.3.2/sockjs-min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.min.js"></script>

        
<script>

    var user_id = "<?php echo $user_id; ?>";
    var user_name = "<?php echo $user_name; ?>";
    var zipcode = "<?php echo $zip_code; ?>";
    var profile_picture = "<?php echo $profile_picture; ?>";
    var range = 1;

    var last_chat_id = "<?php echo $last_chat_id; ?>";

    var show_messages = 0;
    var scroll_top = 0;
    var scroll_to = "";

    // Create a connection to https://206.189.71.188:3050/chat
    var sock = new SockJS('https://glokallist.com:3050/chat');//new SockJS('https://206.189.71.188:3030/chat');

    // Open the connection
    sock.onopen = function() {
        console.log('open');

        var send = {
            action: 'online',
            user_id: user_id,
            user_name: user_name,
            zipcode: zipcode,
            profile_picture: profile_picture
        };

        // Send it now
        sock.send(JSON.stringify(send));
    };

    // On connection close
    sock.onclose = function() {
        console.log('close');
    };

    sock.onerror = function(e) {
        console.error(e);
    }

    // On receive message from server
    sock.onmessage = function(e) {
        console.log(JSON.parse(e.data));

        content = JSON.parse(e.data);

        if(content[0].action == "online"){
            if(content.length > 1)
            {
                initial_users = content;
                show_online_users();
            }
            else
            {
                var origin = zipcode;
                var destination = content[0].zipcode;
                var service = new google.maps.DistanceMatrixService();


                service.getDistanceMatrix({origins: [origin],destinations: [destination],travelMode:'DRIVING',},
                    function(response, status) {
                        callback(response, status, new Array(content[0]) );
                    }
                );

                function callback(response, status, data)
                {
                    if(status !== 'OK'){
                        alert('Some error occured while requesting google Map Api');
                    }
                    else
                    {
                        if(response['rows'][0]['elements'][0]['status'] != "ZERO_RESULTS" && response['rows'][0]['elements'][0]['status'] != "NOT_FOUND"){
                            
                            if(Math.ceil(response['rows'][0]['elements'][0]['distance']['value']/1609.34) <= range )
                            {   
                                if($("#user_"+data[0].user_id).length == 0) {
                                    // Append the text to text area (using jQuery)
                                    var com = "";
                                    
                                    if(data[0].user_id == user_id)
                                        com += "<div class=\"container darker\" id=\"user_"+data[0].user_id+"\">";
                                    else
                                        com += "<div class=\"container\" id=\"user_"+data[0].user_id+"\">";

                                    com += "<img src=\"<?php echo base_url();?>"+ data[0].profile_picture +"\" alt=\"Avatar\" style=\"width:100%;\">";
                                    com += "<p><b>"+ data[0].user_name +"</b></p>";
                                    com += "</div>";

                                    if(data[0].user_id == user_id){
                                        $('#online_users').prepend(com);
                                    }
                                    else{
                                        $('#online_users').append(com);
                                    }

                                    if(data[0].user_id != user_id){
                                        $.notify({
                                            message: "<b>" + data[0].user_name + "</b> is online now"
                                        },{
                                            type: 'success'
                                        },{
                                            offset: 50
                                        });
                                    }
                                }
                            }
                        }
                    }                    
                }
            }
        }
        else if(content[0].action == "offline"){
            
            if(content[0].user_id != user_id){
                if($("#user_"+content[0].user_id).length != 0) {
                    $("#user_"+content[0].user_id).remove();
                
                    $.notify({
                        message: "<b>" + content[0].user_name + "</b> is offline now"
                    },{
                        type: 'danger'
                    },{
                        offset: 50
                    });
                }
            }
        }
        else if(content[0].message){

            var origin = zipcode;
            var destination = content[0].zipcode;
            var service = new google.maps.DistanceMatrixService();
            
            service.getDistanceMatrix({origins: [origin],destinations: [destination],travelMode:'DRIVING',},
                function(response, status) {
                    callback(response, status, new Array(content[0]));
                }
            );
            
            function callback(response, status, data)
            {
                if(status !== 'OK'){
                    alert('Some error occured while requesting google Map Api');
                }
                else
                {
                    if(response['rows'][0]['elements'][0]['status'] != "ZERO_RESULTS" && response['rows'][0]['elements'][0]['status'] != "NOT_FOUND"){
                        
                        if(Math.ceil(response['rows'][0]['elements'][0]['distance']['value']/1609.34) <= range )
                        {   
                            // Append the text to text area (using jQuery)
                            var com = "";
                            
                            if(data[0].user_id == user_id)
                                com += "<div class=\"container darker\">";
                            else
                                com += "<div class=\"container\">";

                            com += "<img src=\"<?php echo base_url();?>"+ data[0].profile_picture +"\" alt=\"Avatar\" style=\"width:100%;\">";
                            com += "<p><b>"+ data[0].user_name +" : </b>"+ data[0].message +"</p>";
                            var time = new Date(data[0].date_time);
                            com += "<span class=\"time-right\">"+ time.toDateString() +"</span>";
                            com += "</div>";

                            $('#chat').append(com);

                            if(data[0].user_id != user_id){
                                $.notify({
                                    icon: 'fa fa-envelope',
                                    message: "Got New Message from <b>"+ data[0].user_name +"</b>"
                                },{
                                    offset: 50
                                });
                                if($("#chat").scrollTop() + $("#chat").innerHeight() >= $("#chat")[0].scrollHeight) {
                                    $("#chat").scrollTop($("#chat")[0].scrollHeight);
                                }
                            }
                            else if(data[0].user_id == user_id){
                                $("#chat").scrollTop($("#chat")[0].scrollHeight);
                            }
                            
                        }
                    }
                    else{
                        if(data[0].user_id == user_id)
                            swal("Alert!", "You have selected an invalid location for chat.....!");
                    }
                }                    
            }
        }
        
    };

    $('#message').keypress(function(e) {
        if(e.which == 13) {
            $('#message-form').submit();
        }
    });

    // Function for sending the message to server
    $('#message-form').on('submit',(function(e) {
        e.preventDefault();

        if($('#message').val() == ""){
            swal("Alert!", "Message can't be empty.....!");
        }
        else{
            // Get the content from the textbox
            var message = $('#message').val();

            // The object to send
            var send = {
                action: 'message',
                message: message,
                user_id: user_id,
                zipcode: zipcode
            };

            // Send it now
            sock.send(JSON.stringify(send));

            $('#message').val('');
        }

    }));

    $( document ).ready(function() {
        load_messages();
    });

    function load_messages(){
        if(last_chat_id != ""){
            $.ajax({
                type : 'POST',
                url : '<?php echo base_url(); ?>/Chat/fetch_message',
                data : {
                    'id': last_chat_id
                },
                dataType : "json",
                success:function(data){
                    
                    if(data.result == "No results found") {
                        last_chat_id = "";
                        console.log("Messages Ended");
                    }
                    else{
                        var origin = zipcode;
                        var destination = data.zipcode;
                        var service = new google.maps.DistanceMatrixService();
                        
                        service.getDistanceMatrix({origins: [origin],destinations: [destination],travelMode:'DRIVING',},
                            function(response, status) {
                                callback(response, status, new Array(data));
                            }
                        );
                        
                        function callback(response, status, data)
                        {
                            if(status !== 'OK'){
                                alert('Some error occured while requesting google Map Api');
                            }
                            else
                            {
                                if(response['rows'][0]['elements'][0]['status'] != "ZERO_RESULTS" && response['rows'][0]['elements'][0]['status'] != "NOT_FOUND"){
                                    
                                    if(Math.ceil(response['rows'][0]['elements'][0]['distance']['value']/1609.34) <= range )
                                    {   
                                        // Append the text to text area (using jQuery)
                                        var com = "";
                                        
                                        if(data[0].user_id == user_id)
                                            com += "<div class=\"container darker\">";
                                        else
                                            com += "<div class=\"container\">";

                                        com += "<img src=\"<?php echo base_url();?>"+ data[0].profile_picture +"\" alt=\"Avatar\" style=\"width:100%;\">";
                                        com += "<p><b style=\"font-size:14px;\">"+ data[0].user_name +" : </b>"+ data[0].message +"</p>";
                                        var time = new Date(data[0].date_time);
                                        com += "<span class=\"time-right\">"+ time.toDateString() +"</span>";
                                        com += "</div>";

                                        $('#chat').prepend(com);

                                        if(scroll_top == 0){
                                            $("#chat").scrollTop($("#chat")[0].scrollHeight);
                                        }
                                        else if(scroll_top == 1){
                                            $("#chat").scrollTop(scroll_to.offset().top);
                                        }

                                        show_messages++;
                                    }    
                                }

                                last_chat_id--;

                                if(show_messages < 5){
                                    load_messages();
                                }
                                else{
                                    show_messages = 0;
                                }
                            }
                        }
                    }
                },
                error: function(data){
                    console.log("Error Occured.....!");
                }
            });
        }
    }

    $('#chat').scroll(function() {
        var pos = $('#chat').scrollTop();
        if (pos == 0) {
            scroll_top = 1;
            scroll_to = $("#chat:first-child");
            load_messages();
        }
    });

    var initial_users;
    var initial_index = 0;

    function show_online_users(){
        if(initial_index < initial_users.length)
        {
            var origin = zipcode;
            var destination = initial_users[initial_index].zipcode;
            var service = new google.maps.DistanceMatrixService();


            service.getDistanceMatrix({origins: [origin],destinations: [destination],travelMode:'DRIVING',},
                function(response, status) {
                    callback(response, status, new Array(initial_users[initial_index]) );
                }
            );

            function callback(response, status, data)
            {
                if(status !== 'OK'){
                    alert('Some error occured while requesting google Map Api');
                }
                else
                {
                    if(response['rows'][0]['elements'][0]['status'] != "ZERO_RESULTS" && response['rows'][0]['elements'][0]['status'] != "NOT_FOUND"){
                        
                        if(Math.ceil(response['rows'][0]['elements'][0]['distance']['value']/1609.34) <= range )
                        {   
                            if($("#user_"+data[0].user_id).length == 0) {
                                // Append the text to text area (using jQuery)
                                var com = "";
                                

                                if(data[0].user_id == user_id)
                                    com += "<div class=\"container darker\" id=\"user_"+data[0].user_id+"\">";
                                else
                                    com += "<div class=\"container\" id=\"user_"+data[0].user_id+"\">";

                                com += "<img src=\"<?php echo base_url();?>"+ data[0].profile_picture +"\" alt=\"Avatar\" style=\"width:100%;\">";
                                com += "<p><b>"+ data[0].user_name +"</b></p>";
                                com += "</div>";

                                if(data[0].user_id == user_id){
                                    $('#online_users').prepend(com);
                                }
                                else{
                                    $('#online_users').append(com);
                                }

                                if(data[0].user_id != user_id){
                                    $.notify({
                                        message: "<b>" + data[0].user_name + "</b> is online now"
                                    },{
                                        type: 'success'
                                    },{
                                        offset: 50
                                    });
                                }
                            }
                        }
                    }

                    initial_index++;
                    show_online_users();

                }                    
            }
        }
    }
</script>