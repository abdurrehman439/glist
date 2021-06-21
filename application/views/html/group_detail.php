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

.button_color{border:solid 1px #1f1f1f;
    color: #000;}

.replay_part{margin-left:9rem;}
.media-body{padding-left:2rem;}
.title-link {
    color: black;
    font-size: 19px;
    font-weight: bold;
}


/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
.member_detail{margin-top: 10px;}
 .member_div{}
 .member_image{    float: left;
    padding-right: 20px;}
  .grpbtn{
    padding: 15px;
  }

</style>

    <div id="page-content">

<div class="container">
    <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Group</li>
            </ol>
            <div class="row">
                
                    <div class="page-title" style="display: none;">
                        <h1><?= $group[0]['g_name'] ?></h1>
                    </div>



<!---------Discussion-------->
        <section class="block">

            <div class="row">
                      <div class="col-sm-8">
                        <img src="/<?= $group[0]['g_image'] ?>" style="height: 400px;width: 100%">
                      </div>
                      <div class="col-sm-4">
                      <h3><?= $group[0]['g_name'] ?></h3>
                      <h4><?= $group[0]['g_zipcode'] ?> <?= $group[0]['g_city'] ?></h4>
                      <h4>Members(<?= $group[0]['members'] ?>)</h4>

                      </div>    
            </div>

          <div class="row" style="padding:15px;">
              
              <div class="tab">
                  <button class="tablinks" onclick=" openCity(event, 'Discussion')" id="defaultOpen">Discussion</button>
                  <button class="tablinks" onclick=" openCity(event, 'Members')">Members</button>
                  <button class="tablinks" onclick=" openCity(event, 'Info')"  >Info</button>

                  <?php if ($group[0]['user_id'] == $this->session->userdata('user_id')){ ?>
                  <button class="tablinks" onclick=" openCity(event, 'Setting')">Settings</button>
                  <?php } ?>

                  <?php 
                  if($group[0]['isMember'] > 0){
                    echo '<div class="btn btn-danger pull-right grpbtn" id="gbtn_'.$group[0]['g_id'].'" onclick="leavjoin(\'id_'.$group[0]['g_id'].'\','.$group[0]['g_id'].',0)"> Leave Group</div>';

                  }else{
                    echo '<div class="btn btn-primary pull-right grpbtn" id="gbtn_'.$group[0]['g_id'].'" onclick="leavjoin(\'id_'.$group[0]['g_id'].'\','.$group[0]['g_id'].',1)"> Join Group</div>';

                  }
                ?>
              </div>

             <div id="Info" class="tabcontent">
              <?= $group[0]['g_description'] ?>
              </div>
              
      <?php if ($group[0]['user_id'] == $this->session->userdata('user_id')){ ?>
                        
                   <div id="Setting" class="tabcontent">
                   <div id="panel" style="">
                      <div class="row">
                        <div class="col-md-12"><a href="/discussion/DeleteGroup/<?= $group[0]['g_id']?>" onclick="return confirm('Are you sure?')" class="btn btn-warning btn-lg pull-right">Delete</a></div>
                        <form id="groupadd" action="/discussion/UpdateGroup">
                           
                           <div class="col-sm-6">
                        <div class="form-group">
                          <label for="usr"> Group Name:</label>
                          <input type="text" class="form-control" name="g_name" value="<?= $group[0]['g_name'] ?>" required="required">
                        </div>
                            
                          <div class="form-group">
                          <label for="usr">Upload Image (Max 2mb):</label>
                          <input type="file" accept="image/*" style="padding: 8px;box-shadow: 0px 0px 0px 2px rgba(0, 0, 0, 0.1), inset 1px 0 5px rgba(0, 0, 0, 0.03);" class="form-control" name="g_image" >
                        </div>   
                    
                        </div>

                        <div class="col-sm-6">
                         <div class="form-group">
                          <label for="comment">About Group:</label>
                          <textarea class="form-control" rows="5" name="g_description" required="required"><?= $group[0]['g_description'] ?></textarea>
                        </div>
                        </div>

                        <div class="col-md-12"> 
                        <div id="group-message"></div>
                          <button type="submit" class="btn btn-primary" id="g_submit">Submit</button>
        
                        </div>

                        </form>
                    </div>     

                  </div>

                    </div>
      <?php } ?>


             <div id="Members" class="tabcontent">

              <?php
                  if(count($groupMembers) ==0){
                    echo '<div class="alert alert-danger">No member found.</div>';
                  }
               ?>

              <?php foreach ($groupMembers as $member) { ?>

    <!------------------>
                  <div class="container" style="margin-top:15px;">
                   <div class="member_image">
                      <a href="#" class="pull-left"><img src="/<?=$member['profile_picture']?>" width="100px" 
                        height="100px" alt=""class="img-circle"></a>
                    </div>

                    <div class="member_detail">
                    <strong class="text-success"><?=$member['full_name']?></strong>
                      <br>
                      <span class="text-muted">
                       <small class="text-muted">Joining:  <?= date("M d-Y", strtotime($member['g_join_date'])) ?></small>
                      </span>
                    
                  </div>  

                    </div>
    <!-------------------->
                <?php  } ?>
                </div>
             <div id="Discussion" class="tabcontent">  
                        
        <div class="comment-wrapper">
            <div class="panel panel-info">
              
                <div class="panel-body">    
                  <?php if($group[0]['isMember']  == 0){ ?>
                    <div class="alert alert-danger"> Please join group to see/start discussion..!</div>
                 
                  <?php }else{ ?>
                    <textarea class="form-control" id="comment" placeholder="Share your thoughts?" rows="3"></textarea>
                    <br>
                    <button type="button" class="btn btn-lg btn-primary btn-rounded pull-right" id="submitButton">Post</button>
                    <div id="comment-message" class="alert col-md-12 alert-success" style="display: none;">Posted successfuly!</div>
                    <div class="clearfix"></div>
                    <hr>
                  <div id="output">

                                 <!--------Append coments here-------->
                  </div>

                  <?php } ?>
                    

                </div>
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

  function postReply(commentId) {
      $('#commentId').val(commentId);
      $("#name").focus();
  }


        var g_id= <?= $group[0]['g_id'] ?>;
        var lastcommentID=0;
        var listshowen=[]; 

    $(document).ready(function() {

          $('#groupadd').on('submit',(function(e) {
            $("#g_submit").attr("disabled","disabled");
                    e.preventDefault();
                    var formData = new FormData(this);
                    $("#group-message").html("");
                 $.ajax({
                    type:'POST',
                    url: "/discussion/UpdateGroup/<?=$group[0]['g_id']?>",
                    data:formData,
                    dataType : "json",
                    contentType: false,
                    enctype: 'multipart/form-data',
                    processData: false,
                    cache:false,
                    success:function(data){
                    $("#g_submit").removeAttr("disabled");

                    if (typeof data.success !== 'undefined') {
                    //$("html, body").animate({ scrollTop: 0 }, "slow");
                    //$("#groupadd").trigger("reset");
                   // listGroups();
                    $("#group-message").html("<div class=\"alert alert-success alert-dismissable\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a><strong>Success ! </strong>" + data.success + "</div>");
                    location.reload();

                }
                if (typeof data.validation_errors !== 'undefined') {
                //    $("html, body").animate({ scrollTop: 0 }, "slow");
                    $("#group-message").html("<div class=\"alert alert-danger alert-dismissable\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a><strong>Errors ! </strong>" + data.validation_errors + "</div>");
                }
                },
                error: function(data){
                    $("#g_submit").removeAttr("disabled");
              //  $("html, body").animate({ scrollTop: 0 }, "slow");
                $("#group-message").html("<div class=\"alert alert-danger alert-dismissable\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a><strong>Error ! </strong> Something went wrong.....!</div>");
                }
                });


            }));

            $("#submitButtonReply").click(function () {
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

            }); //add comment end


$("#submitButton").click(function () {
                   $("#comment-message").css('display', 'none');

                   var message=$("#comment").val();
                   $("#comment").val('');
                //var str = $("#frm-comment").serialize();
                if(message.trim() !=''){
               $.ajax({
                    url: "/discussion/Add_groupComment/"+window.g_id,
                    data: {comment:message},
                    type: 'post',
                    success: function (response)
                    {
                        //var result = eval('(' + response + ')');
                        if (response ==1)
                        {
                            $("#comment-message").css('display', 'inline-block');
                            $("#comment").val('');
                           listComment();
                        } else
                        {
                            alert("Failed.Please Try again!");
                            return false;
                        }
                    }
                }); ///ajax end
            }
            });
                


});
            
            $(document).ready(function () {
                  
                  listComment();
                   //getReplylistComment(commentId,0,1);
                   setInterval(function(){ listComment(); }, 1000*30);
            });


            function listComment() {

                $.post("/Discussion/GroupComments/"+window.g_id,
                        function (data) {
                               var data = JSON.parse(data);
                                $("#output").html('');

                if (data['error'] !== undefined){
                     $("#output").html('<div class="alert alert-warning">Please update Zip code/City <a href="/user/profile">click here</a>.</div>');  
                     return false; 
                }

                            for (var i = 0; (i < data.length); i++)
                            {
                                    var comments='<div class="parent">'+
                                        '<a href="#" class="pull-left">';
                                       if(data[i]['profile_picture'] == null){
                                        comments+='<img src="https://bootdey.com/img/Content/user_1.jpg" width="100px" height="100px" alt="" class="img-circle">';
                                       }else{
                                        comments+='<img src="/'+data[i]['profile_picture']+'" width="100px" height="100px" alt="" class="img-circle">';
                                       } 

                                        comments+='</a>'+
                                        '<div class="media-body">'+
                                        '<span class="text-muted pull-right">'+
                                       // '<small class="text-muted">30 min ago</small>'+
                                        '</span>'+
                                        '<strong class="text-success">'+data[i]['full_name']+'</strong><br>'+
                                        '<span class="text-muted">'+
                                        '<small class="text-muted">'+ formatDate(new Date(data[i]['gd_date']))+'</small>'+
                                        '</span><br><div class="question">'+
                                       
                                        '<a class="title-link">'+ data[i]['gd_message']+'</a></div>'+
                                        '</div><hr></div></div>';
                                     $("#output").append(comments);

                            }

                    


                        });
            }
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

           function ljaction(id,gid,type){
                             $.ajax({
                                type:'POST',
                                url: "/discussion/GroupLeaveJoin",
                                data:{gid:gid,type:type},
                                
                                success:function(data){
                                    data=JSON.parse(data);
                                   // alert(data.success);
                                if (typeof data.success !== 'undefined') {
                                   
                                    if(type == 0){
                                        $("#gbtn_"+gid).removeClass('btn-danger');
                                        $("#gbtn_"+gid).addClass('btn-primary');
                                        $("#gbtn_"+gid).attr('onclick',"leavjoin('id_"+gid+"',"+gid+",1)");
                                         $("#gbtn_"+gid).html('Join Group');
                                    }else{
                                        $("#gbtn_"+gid).html('Leave Group');
                                        $("#gbtn_"+gid).addClass('btn-danger');
                                        $("#gbtn_"+gid).removeClass('btn-primary');
                                        $("#gbtn_"+gid).attr('onclick',"leavjoin('id_"+gid+"',"+gid+",0)");

                                    }
                                   location.reload();
                                }

                                },
                                error: function(data){
                                    alert('Something went wrong!');
                                }
                            });
                }

                function leavjoin(id,gid,type){
                    
                    if(type ==0){
                     if (confirm('Are you sure?')) {
                           ljaction(id,gid,type);
                       }
                    }else{
                        ljaction(id,gid,type);
                    }
                }
        </script>

            </div>
        </section>
        <div class="container"><hr></div>

        <!-- end block-->
    </div>

<script>
function openCity(evt, cityName) {

  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";

}
document.getElementById("defaultOpen").click();
</script>


