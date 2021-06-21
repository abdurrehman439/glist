var base_url = "https://glokallist.com/";

$(document).on('ready', function() {
"use strict";
// preloader
$(window).on('load', function(){ 
            $('#status').fadeOut();
            $('#preloader').delay(350).fadeOut('slow');
            $('body').delay(350).css({'overflow':'visible'});
});

//background slider
    if($('.bg-slide').length > 0){
      $("body.bg-slide").vegas({
          preload: true,
          overlay: base_url + 'assets/landing/images/overlays/07.png',
          transitionDuration: 8000,
          delay: 10000, 
          animation: 'kenburnsUp',
          slides: [
              { src: base_url + "assets/landing/images/slider/slide-1.jpg" },
              { src: base_url + "assets/landing/images/slider/slide-2.jpg" },
              { src: base_url + "assets/landing/images/slider/slide-3.jpg" },
              { src: base_url + "assets/landing/images/slider/slide-4.jpg" }
          ]
      });    
  }

//YT background 
    if($('.player').length > 0){
        var ytplayer = jQuery(".player").YTPlayer(); 
        $('.player').on("YTPTime",function(e){
           var currentTime = e.time;
        });
    }
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        $(".mbYTP_wrapper").hide();
    }



 

//Countdown
$(function(){
    $('#countdown').countdown('2020/01/20', function(event) {
    var $this = $(this).html(event.strftime(''
         + '<span>%D<small>Days</small></span>'
         + '<span>%H<small>Hours</small></span>'
         + '<span>%M<small>Minutes</small></span>'
         + '<span>%S<small>Second</small></span>'));
    });
    $('#subscribeMail').ajaxChimp();
});


// Menu 
    var triggerBttn = document.getElementById( 'trigger-overlay' ),
        overlay = document.querySelector( 'div.menu-overlay' ),
        closeBttn = overlay.querySelector( '.overlay-close' ),
        transEndEventNames = {
            'WebkitTransition': 'webkitTransitionEnd',
            'MozTransition': 'transitionend',
            'OTransition': 'oTransitionEnd',
            'msTransition': 'MSTransitionEnd',
            'transition': 'transitionend'
        },
        transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
        support = { transitions : Modernizr.csstransitions };

    function toggleOverlay() {
        if( classie.has( overlay, 'open' ) ) {
            classie.remove( overlay, 'open' );
            classie.add( overlay, 'close' );
            var onEndTransitionFn = function( ev ) {
                if( support.transitions ) {
                    if( ev.propertyName !== 'visibility' ) return;
                    this.removeEventListener( transEndEventName, onEndTransitionFn );
                }
                classie.remove( overlay, 'close' );
            };
            if( support.transitions ) {
                overlay.addEventListener( transEndEventName, onEndTransitionFn );
            }
            else {
                onEndTransitionFn();
            }
        }
        else if( !classie.has( overlay, 'close' ) ) {
            classie.add( overlay, 'open' );
        }
    }

    triggerBttn.addEventListener( 'click', toggleOverlay );
    closeBttn.addEventListener( 'click', toggleOverlay );
    $('.menu-overlay a').on('click', toggleOverlay);
    $('#trigger-overlay').on('click', function (){$(this).hide();});
    $('.overlay-close, .menu-overlay a').on('click', function (){
        $('#trigger-overlay').show();
    });

    var contentWidth = $(".contact, .about").width();

    $('#about').on('click', function (){
        $('.about').animate({right:0});
    });
    $('#contact').on('click', function (){
        $('.contact').animate({right:0});
    });
    $('.close-panel, .about .btn').on('click', function (){
        $('.about, .contact').animate({right:-contentWidth});
    });
    $('.about .btn').on('click', function (){
        $('.about').animate({right:-contentWidth});
        $('.contact').animate({right:0});
    });




// Validate Contact

    $("#contactForm").validate({
        messages: {
            name: {
                required: "Please enter your name",
                minlength: "Minimum 2 characters",
                lettersonly: "Only letters please!"
            },
            email: {
                required: "Please enter your email address",
                minlength: "Minimum 6 characters",
                email: "That's an invalid email"
            }, 
            message: {
                required: "Please enter your message",
                minlength: "Minimum 6 characters"
            }
        },
        submitHandler: function(form) { 
                var formMessages = $('#form-messages'); 
                var formData = $(form).serialize();
                $.ajax({
                    type: 'POST',
                    url: $(form).attr('action'),
                    data: formData
                })
                .done(function(response) {
                    $(formMessages).fadeIn();
                    $(formMessages).removeClass('alert-danger');
                    $(formMessages).addClass('alert-success');
                    $(formMessages).text(response);
                    $('#inputName').val('');
                    $('#inputEmail').val('');
                    $('#inputMessage').val('');
                    setTimeout(function(){ $(formMessages).fadeOut(); }, 2000);
                })
                .fail(function(data) {
                    $(formMessages).fadeIn();
                    $(formMessages).removeClass('alert-success');
                    $(formMessages).addClass('alert-danger');
                    if (data.responseText !== '') {
                        $(formMessages).text(data.responseText);
                    } else {
                        $(formMessages).text('Oops! An error occured and your message could not be sent.');
                    }
                    setTimeout(function(){ $(formMessages).fadeOut(); }, 2000);
                });  
        }
    });
    

// Countdown
    

$('.countdown').countdown('2020/10/10').on('update.countdown', function(event) {
    

	var $this = $(this).html(event.strftime(''+ 
    

		'<span>%-w</span> <i>week%!w</i> '
    

		+'<span>%-d</span> <i>day%!d</i> '
    

		+'<span>%H</span> <i>hr</i> '
    

		+'<span>%M</span> <i>min</i> '
    

		+'<span>%S</span> <i>sec</i>'));
    

});

});
