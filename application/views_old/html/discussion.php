    <link href="<?php echo base_url(); ?>assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url(); ?>assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">

    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/zabuto_calendar.min.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css" type="text/css">



    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/trackpad-scroll-emulator.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">
    
    

    <style>

        .video-div{

            background-color: white;

            max-width: 100%;

            max-height: 40%;

            padding : 10px 0px;

        }

        video{

            width: 70%;

            margin: 0 auto;

            display: table;

        }

        .categories-list .col-md-3, .categories-list .col-sm-3{
            height: 50px;
        }

        input {
            color: black !important;
        }

.button_color{border:solid 1px #4611a7;
    color: #000;}

.replay_part{margin-left:9rem;}
.media-body{padding-left:2rem;}
.title-link {
    color: black;
    font-size: 19px;
    font-weight: bold;
}



    </style>



    <div id="page-content">

<div class="container">
    <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Discussion</li>
            </ol>
            <div class="row">
                
                    <div class="page-title" style="display: none;">
                        <h1>Discussion In You Area</h1>
                    </div>



<!---------Discussion-------->
        <section class="block">

            <div class="row">
                       <!-- starting comment  -->

        <div class="comment-wrapper">
            <div class="panel panel-info">
              
                <div class="panel-body">
                    <div class="clearfix"></div>
                    <div class="parent">
                         <?php 
                            $link='https://bootdey.com/img/Content/user_1.jpg';
                            if($comment['profile_picture'] != ''){
                                 $link="/".$comment['profile_picture'];
                             }
                        ?>
                    <a href="#" class="pull-left">
                                <img src="<?= $link ?>" width="100px" height="100px" alt="" class="img-circle">
                            </a>
                            <div class="media-body">
<!--                                 <span class="text-muted pull-right">
                                    <small class="text-muted">30 min ago</small>
                                </span> -->
                                <strong class="text-success"><?= $comment['full_name'] ?></strong>
                                <br>
                                <span class="text-muted">
                                    <small class="text-muted">
                                        <?= date("M d-Y H:i a", strtotime($comment['date'])) ?>
                                    </small>
                                </span>
                                <br>
                            <div class="question">
                                   <a class="title-link">
                                   <!-- <a href="/home/discussion" class="title-link">
                                    -->
                                    <?= $comment['comment']?>
                                    </a>
                                </div>
                                <hr>
                            </div>

                            
                            <div id="output" class="row col-md-12">

                            </div>
                    <div id="reply-section" class="row col-md-12">
                        <br>

                        <div id="comment-message" class="alert col-md-12 alert-success" style="display: none;">Reply posted successfuly!</div>
                        <textarea class="form-control" id="comment" placeholder="Write your reply!" rows="3"></textarea>
                        <br>                    
                        <button type="button" class="btn btn-lg btn-primary btn-rounded pull-right" id="submitButton">Post</button>

                    </div>

                        </div> <!-----parent--->

                </div>
            </div>
        </div>
</div>
</div>

    <!--end page-content-->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.2.1.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-migrate-1.2.1.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-select.min.js"></script>

<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyAiM_FqkKLI0eup2tuWSJ_1IFneZsVw4ds&libraries=places"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/richmarker-compiled.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.fitvids.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/icheck.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.trackpad-scroll-emulator.min.js"></script>



<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/maps.js"></script>



<script>

    autoComplete();

    $(document).ready(function() {
        $('.carousel').carousel({
        interval: 1200
        })
    });

    function set_send_message_data(post_type,receiver_email)
    {
        $('#post_type').val(post_type);
        $('#receiver_email').val(receiver_email);
    }

</script>
    <script>

function scrolltocomment(){

        <?php if($this->uri->segment(4) =='scroll'){ ?>
         $('html, body').animate({
              scrollTop: $("#reply-section").offset().top
        }, 1000);
     <?php } ?>
return true;
}

function formatDate(date) {
      var monthNames = [
        "January", "February", "March",
        "April", "May", "June", "July",
        "August", "September", "October",
        "November", "December"
      ];
      var day = date.getDate();
       var monthIndex = date.getMonth();
      var year = date.getFullYear();
      var hour=date.getHours();
      var am='AM';
      if(hour > 12){
        hour=hour-12;
      am='PM';
      }
      var minutes=date.getMinutes();

      return  monthNames[monthIndex] +' '+day+ '-' + year +' '+hour+':'+minutes+' '+am;
}

        var commentId= <?= $comment['comment_id'] ?>;
        var lastcommentID=0;
        var listshowen=[]; 
            function postReply(commentId) {
                $('#commentId').val(commentId);
                $("#name").focus();
            }

            $("#submitButton").click(function () {
                   $("#comment-message").css('display', 'none');
                   var message=$("#comment").val();
                   $("#comment").val('');

                if(message.trim() !=''){

                $.ajax({
                    url: "/discussion/replycomment",
                    data: {commentId:commentId,comment:message},
                    type: 'post',
                    success: function (response)
                    {
                        $("#comment").val('');
                        if (response ==1)
                        {
                            $("#comment-message").css('display', 'inline-block');
                            
                                getReplylistComment(commentId,window.lastcommentID);

                        } else
                        {
                            alert("Failed to add comments !");
                            return false;
                        }
                    }
                }); //ajax end
            }
            });
            
            $(document).ready(function () {
                   getReplylistComment(commentId,0,1);
                   setInterval(function(){  getReplylistComment(commentId,window.lastcommentID); }, 1000*10);
            });

            function getReplylistComment(commentId,lastcommentID,scrolto) {

                $.ajax({
                    url: "/discussion/getReplycomments",
                    data: {commentId:commentId,lastcommentID:lastcommentID},
                    type: 'post',
                    success: function (response)
                    {
                        var data = JSON.parse(response);
                               // $("#output").html('');
                            for (var i = 0; (i < data.length); i++)
                            {
    
                            if(window.listshowen.indexOf(data[i]['comment_id']) < 0){ ////alraeady showen
                            var comments='<div class="replay_part"><a href="#" class="pull-left">';
                            if(data[i]['profile_picture'] == null){
                                 comments+='<img src="https://bootdey.com/img/Content/user_1.jpg" width="70px" height="70px" alt="" class="img-circle">';
                                       }else{
                             comments+='<img src="/'+data[i]['profile_picture']+'" width="70px" height="70px" alt="" class="img-circle">';
                            } 
                            comments+='</a><div class="media-body">'+
                                '<strong class="text-success">'+data[i]['full_name']+'</strong>'+
                                '<br><span class="text-muted"><small class="text-muted">'+ formatDate(new Date(data[i]['date']))+'</small>'+
                                '</span><br> <div class="question">'+data[i]['comment']+
                                '</div></div><hr></div>';
                             window.lastcommentID=data[i]['comment_id'];
                            //alert(lastcommentID);
                            window.listshowen.push(data[i]['comment_id']); //showen added
                            $("#output").append(comments);                           
                                    }//alraeady showen
                            } ///for loop end

                            if(scrolto ==1){scrolltocomment()};

                    }
                });
            }

            
        </script>

            </div>
        </section>
        <div class="container"><hr></div>

        <!-- end block-->
    </div>




