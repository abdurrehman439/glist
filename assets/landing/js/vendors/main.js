// preloader
$(window).load(function() { 
            $('#status').fadeOut();
            $('#preloader').delay(350).fadeOut('slow');
            $('body').delay(350).css({'overflow':'visible'});
});



//background slider
$(function(){
      $("body.bg-slide").vegas({
          preload: true,
          overlay: 'css/overlays/10.png',
          transitionDuration: 4000,
          delay: 7000, 
          animation: 'kenburnsUp',
          slides: [
              { src: "images/slide-1.jpg" },
              { src: "images/slide-2.jpg" },
              { src: "images/slide-3.jpg" },
              { src: "images/slide-4.jpg" }
          ]
      });  
});

//YT background
$(function(){
    if($('.player').length > 0){
        var ytplayer = jQuery(".player").YTPlayer(); 
        $('.player').on("YTPTime",function(e){
           var currentTime = e.time;
        });
    }
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        $(".mbYTP_wrapper").hide();
    }
});




//Geometric Background
$(function(){
      var pattern = Trianglify({
        width: window.innerWidth,
        height: window.innerHeight,
        variance: "0.88", 
        cell_size: 75, 
        seed: '7um33', 
        x_colors: 'YlGnBu'
      });
      $('.background-hero').append(pattern.canvas());
});

//Countdown
$(function(){
    $('#countdown').countdown('2017/01/20', function(event) {
    var $this = $(this).html(event.strftime(''
         + '<span>%D<small>Days</small></span>'
         + '<span>%H<small>Hours</small></span>'
         + '<span>%M<small>Minutes</small></span>'
         + '<span>%S<small>Second</small></span>'));
    });
    $('#subscribeMail').ajaxChimp();
});


// Menu
(function() {
    var triggerBttn = document.getElementById( 'trigger-overlay' ),
        overlay = document.querySelector( 'div.menu-overlay' ),
        closeBttn = overlay.querySelector( '.overlay-close' );
        homeBttn = overlay.querySelector( '#home' );
        aboutBttn = overlay.querySelector( '#about' );
        contactBttn = overlay.querySelector( '#contact' );
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

    homeBttn.addEventListener( 'click', toggleOverlay );
    aboutBttn.addEventListener( 'click', toggleOverlay );
    contactBttn.addEventListener( 'click', toggleOverlay );



    $('#trigger-overlay').click(function(){
        $(this).hide();
    });
    $('.overlay-close, #about, #contact, #home').click(function(){
        $('#trigger-overlay').show();
    });

    var contentWidth = $(".contact, .about").width();

    $('#about').click(function(){
        $('.about').animate({right:0});
    });
    $('#contact').click(function(){
        $('.contact').animate({right:0});
    });
    $('.close-panel, .about .btn').click(function(){
        $('.about, .contact').animate({right:-contentWidth});
    });
    $('.about .btn').click(function(){
        $('.about').animate({right:-contentWidth});
        $('.contact').animate({right:0});
    });

})();




// Contact form
$(function() {
    // validate contact form on keyup and submit
    $("#contactForm").validate({
        rules: {
            name: {
                required: true,
                minlength: 2,
                lettersonly: true
            },
            email: {
                required: true,
                minlength: 6,
                email: true
            }, 
            message: {
                required: true,
                minlength: 6
            }
        },
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
        success: function(label) {
            label.addClass("valid").text("Perfect!");
        },
        submitHandler: function(element) {

            var ajaxform = $(element),
                url = ajaxform.attr('action'),
                type = ajaxform.attr('method'),
                data = {};

            $(ajaxform).find('[name="submit"]').html('<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Sending...');

            ajaxform.find('[name]').each(function(index, value) {
                var field = $(this),
                    name = field.attr('name'),
                    value = field.val();
                    data[name] = value;
            });

            $.ajax({
                url: url,
                type: type,
                data: data,
                success: function(response) {
                    if (response.type == 'success') {
                        $("#contactForm").before("<div class='alert alert-success' role='alert'><a href='#' class='close' data-dismiss='alert'>&times;</a>" + response.text + "</div>");
                        $(ajaxform).each(function() {
                            this.reset();
                            $(this).find('[name="submit"]').html('<i class="fa fa-paper-plane fa-fw"></i> Send');
                        }).find('.valid').each(function() {
                            $(this).remove('label.valid');
                        })
                    } else if (response.type == 'error') {
                        $("#contactForm").before("<div class='alert alert-danger' role='alert'><a href='#' class='close' data-dismiss='alert'>&times;</a>" + response.text + "</div>");
                        $(ajaxform).find('[name="submit"]').html('<i class="fa fa-paper-plane fa-fw"></i> Send');
                    }
                }
            });

            return false;
        }
    });
    $("#subscribeForm").validate();
});

 