;(function($) {
    "use strict";
    
    
    var navbar=$('.main_menu_area');
    /*-------------------------------------------------------------------------------
	  Navbar 
	-------------------------------------------------------------------------------*/
	navbar.affix({
	  offset: {
	    top: 1,
	  }
	});
	navbar.on('affix.bs.affix', function() {
		if (!navbar.hasClass('affix')){
			navbar.addClass('animated slideInDown');
		}
	});
	navbar.on('affixed-top.bs.affix', function() {
	  	navbar.removeClass('animated slideInDown');
	  	
	});
    /*----------------------------------------------------*/
    /*  Menu Click Function js
    /*----------------------------------------------------*/
    $('.main_menu_area .nav.navbar-nav li a, .side_menu li a[href^="#"]:not([href="#"]').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 100
        }, 1500);
        event.preventDefault();
    });
    /*----------------------------------------------------*/
    /*  Wow Animation Active js
    /*----------------------------------------------------*/
    function bodyScrollAnimation() {
        var scrollAnimate = $('body').data('scroll-animation');
        if (scrollAnimate === true) {
            new WOW({
                mobile: false
            }).init()
        }
    }
    bodyScrollAnimation();
    /*----------------------------------------------------*/
    /*  Home Slider js
    /*----------------------------------------------------*/
    function home_slider(){
        if ( $('#home-slider').length ){
            $("#home-slider").revolution({
                sliderType:"fullscreen",
                sliderLayout:"auto",
                delay:8000,
                disableProgressBar:"on",
                navigation: {
                    onHoverStop: 'off',
                    touch:{
                        touchenabled:"on"
                    },
                    arrows: {
                        style: "Gyges",
                        enable: false,
                        hide_onmobile: false,
                        hide_onleave: false,
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 17,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 17,
                            v_offset: 0
                        }
                    },
                },			
                responsiveLevels:[4096,1199,992,767,480],
                gridwidth:[1170,1000,750,450,290],
                gridheight:[857,857,750,500,480],
            })
        }
    }
    home_slider();
    /*----------------------------------------------------*/
    /*  Kenburns Slider js
    /*----------------------------------------------------*/
    function kenburns_slider(){
        if ( $('#kenburns_slider').length ){
            $("#kenburns_slider").revolution({
                sliderType:"fullscreen",
                sliderLayout:"auto",
                delay:8000,
                disableProgressBar:"on",
                navigation: {
                    onHoverStop: 'off',
                    touch:{
                        touchenabled:"on"
                    },
                    arrows: {
                        style: "Gyges",
                        enable: false,
                        hide_onmobile: false,
                        hide_onleave: false,
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 17,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 17,
                            v_offset: 0
                        }
                    },
                },			
                responsiveLevels:[4096,1199,992,768,480],
                gridwidth:[1170,1000,750,450,290],
                gridheight:[857,857,750,480,480],
            })
        }
    }
    kenburns_slider();
    /*----------------------------------------------------*/
    /*  Video slider js
    /*----------------------------------------------------*/
    function video_slider(){
        if ( $('#video_slider').length ){
            $("#video_slider").revolution({
                sliderType:"hero",
                sliderLayout:"auto",
                delay:8000,
                disableProgressBar:"on",
                navigation: {
                    onHoverStop: 'off',
                    touch:{
                        touchenabled:"on"
                    },
                    arrows: {
                        style: "Gyges",
                        enable: false,
                        hide_onmobile: false,
                        hide_onleave: false,
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 17,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 17,
                            v_offset: 0
                        }
                    },
                },			
                responsiveLevels:[4096,1199,992,768,480],
                gridwidth:[1170,1000,750,450,290],
                gridheight:[857,857,750,480,480],
            })
        }
    }
    video_slider();
    /*----------------------------------------------------*/
    /*  Video slider js
    /*----------------------------------------------------*/
    
        var tpj=jQuery;

        var revapi152;
        tpj(document).ready(function() {
            if(tpj("#coming").revolution == undefined){
                revslider_showDoubleJqueryError("#coming");
            }else{
                revapi152 = tpj("#coming").show().revolution({
                    sliderType:"hero",
                    sliderLayout:"fullscreen",
                    dottedOverlay:"none",
                    delay:9000,
                    navigation: {
                    },
                    responsiveLevels:[1240,1024,778,480],
                    visibilityLevels:[1240,1024,778,480],
                    gridwidth:[1240,1024,778,480],
                    gridheight:[868,768,960,720],
                    lazyType:"none",
                    shadow:0,
                    spinner:"off",
                    autoHeight:"off",
                    fullScreenAutoWidth:"off",
                    fullScreenAlignForce:"off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "",
                    disableProgressBar:"on",
                    hideThumbsOnMobile:"off",
                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    debugMode:false,
                    fallbacks: {
                        simplifyAll:"off",
                        disableFocusListener:false,
                    }
                });
            }

            // SET TARGET DATE TO START COUNT DOWN FROM
            // SET UNLIMITED TIME STAMPS TO JUMP TO OTHER SLIDES BASED ON THE REST TIME VIA slidechanges
            // SET THE JUMP AHEAD VIA THE QUICK JUMP  (15000 == 15 sec)
            // DONT FORGET TO DEFINE THE CONTAINER ID 

            var targetdate =  new Date().getTime() + 864000000, // i.e. '2015/12/31 24:00',
                slidechanges = [
                                { days:0, hours:0, minutes:0, seconds:12, slide:2},
                                { days:0, hours:0, minutes:0, seconds:0, slide:3}
                                ];

             tp_countdown(revapi152,targetdate,slidechanges);       

            RsTypewriterAddOn(tpj, revapi152);
    });	/*ready*/

    
    /*----------------------------------------------------*/
    /* Submenu js
    /*----------------------------------------------------*/
    var clickInit = $('.side_menu li').has('ul').children('a');

	clickInit.on('click',function(){
	
		$(this).closest('li').toggleClass('current');
		$(this).closest('li').children('ul').slideToggle(200);

		return false;
	});
    
    /*----------------------------------------------------*/
    /*  Screenshot Slider
    /*----------------------------------------------------*/
    function about_slider(){
        if ( $('.about_slider_active').length ){
            $('.about_slider_active').owlCarousel({
                loop:false,
                margin: 0,
                items: 1,
                nav:false,
                autoplay: true,
                smartSpeed: 1500,
            })
        }
    }
    about_slider();
    /*----------------------------------------------------*/
    /*  Clients Logo Slider
    /*----------------------------------------------------*/
    function clients_slider(){
        if ( $('.clients_logo_slider').length ){
            $('.clients_logo_slider').owlCarousel({
                loop:true,
                margin: 0,
                items: 5,
                nav:false,
                autoplay: true,
                smartSpeed: 1500,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    400: {
                        items: 2,
                    },
                    600 : {
                        items: 3,
                    },
                    991: {
                        items: 4,
                    },
                    1200: {
                        items: 5,
                    }
                }
            })
        }
    }
    clients_slider();
    /*----------------------------------------------------*/
    /*  Screenshot Slider
    /*----------------------------------------------------*/
    function user_review(){
        if ( $('.user_review_slider').length ){
            $('.user_review_slider').owlCarousel({
                loop:true,
                margin: 0,
                items: 1,
                nav:true,
                autoplay: true,
                smartSpeed: 1500,
                navContainer: '.user_review_slider',
                navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
            })
        }
    }
    user_review();
    /*----------------------------------------------------*/
    /*  Screenshot Slider
    /*----------------------------------------------------*/
    function user_review2(){
        if ( $('.user_review_slider2').length ){
            $('.user_review_slider2').owlCarousel({
                loop:true,
                margin: 30,
                items: 2,
                nav:true,
                autoplay: true,
                smartSpeed: 1500,
                navContainer: '.user_review_slider2',
                navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    700: {
                        items: 2,
                    }
                }
            })
        }
    }
    user_review2();
    /*----------------------------------------------------*/
    /*  Screenshot Slider
    /*----------------------------------------------------*/
    function screen_slider(){
        if ( $('.screen_slider_active').length ){
            $('.screen_slider_active').owlCarousel({
                loop:true,
                margin: 30,
                items: 3,
                nav:false,
                autoplay: true,
                dots: true,
                smartSpeed: 1500,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    992: {
                        items: 3,
                    }
                }
            })
        }
    }
    screen_slider();
    
    /*----------------------------------------------------*/
    /*  Team Slider
    /*----------------------------------------------------*/
    function Team_slider(){
        if ( $('.team_slider_active').length ){
            $('.team_slider_active').owlCarousel({
                loop:true,
                margin: 30,
                items: 4,
                nav:false,
                autoplay: true,
                dots: true,
                smartSpeed: 1500,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    480: {
                        items: 2,
                    },
                    700: {
                        items: 3,
                    },
                    992: {
                        items: 4,
                    }
                }
            })
        }
    }
    Team_slider();
    /*----------------------------------------------------*/
    /*  MagnificPopup js
    /*----------------------------------------------------*/
    // Inline popups
    $('.inline-popups').magnificPopup({
      delegate: 'a',
      removalDelay: 500, //delay removal by X to allow out-animation
      callbacks: {
        beforeOpen: function() {
           this.st.mainClass = this.st.el.attr('data-effect');
        }
      },
      midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
    });
    // Image popups
    $('#image-popups').magnificPopup({
      delegate: 'a',
      type: 'image',
      removalDelay: 500, //delay removal by X to allow out-animation
      callbacks: {
        beforeOpen: function() {
          // just a hack that adds mfp-anim class to markup 
           this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
           this.st.mainClass = this.st.el.attr('data-effect');
        }
      },
      closeOnContentClick: true,
      midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
    });
    // Hinge effect popup
    $('a.hinge').magnificPopup({
      mainClass: 'mfp-with-fade',
      removalDelay: 1000, //delay removal by X to allow out-animation
      callbacks: {
        beforeClose: function() {
            this.content.addClass('hinge');
        }, 
        close: function() {
            this.content.removeClass('hinge'); 
        }
      },
      midClick: true
    });
    /*----------------------------------------------------*/
    /*  Counter up js
    /*----------------------------------------------------*/
    $('.counter').counterUp({
        time: 1000
    });
    /*----------------------------------------------------*/
    /*  Sponsors Slider
    /*----------------------------------------------------*/
    $(".screenshot_slider_3d").flipster({
        scrollwheel: false,
        spacing: -0.45,
        style: 'coverflow',
        loop: true,
        start: 'center',
        touch: true,
    });
    /*----------------------------------------------------*/
    /*  Ripple Water js 
    /*----------------------------------------------------*/
    $('#ripples_bg').ripples({
        resolution: 712,
        dropRadius: 20,
        perturbance: 0.04,
    });
    /*----------------------------------------------------*/
    /*  Text Typed js
    /*----------------------------------------------------*/
    document.addEventListener('DOMContentLoaded', function(){

        Typed.new("#typed", {
            stringsElement: document.getElementById('typed-strings'),
            typeSpeed: 150,
            startDelay: 1200,
            backDelay: 1200,
            loop: true,
            contentType: 'html', // or text
        });

    });
    // MAILCHIMP
    if ($(".mailchimp").length > 0)
    {
        $(".mailchimp").ajaxChimp({
            callback: mailchimpCallback,
            url: "http://wethemez.us16.list-manage.com/subscribe/post?u=b6b3217322f92c77abf7e8601&id=8cdded5ddb" //Replace this with your own mailchimp post URL. Don't remove the "". Just paste the url inside "".  
        });
    }
    $(".memail").on("focus", function ()
    {
        $(".mchimp-errmessage").fadeOut();
        $(".mchimp-sucmessage").fadeOut();
    });
    $(".memail").on("keydown", function ()
    {
        $(".mchimp-errmessage").fadeOut();
        $(".mchimp-sucmessage").fadeOut();
    });
    $(".memail").on("click", function ()
    {
        $(".memail").val("");
    });
    function mailchimpCallback(resp)
    {
        if (resp.result === "success") {
            $(".mchimp-errmessage").html(resp.msg).fadeIn(1000);
            $(".mchimp-sucmessage").fadeOut(500);
        } else if (resp.result === "error") {
            $(".mchimp-errmessage").html(resp.msg).fadeIn(1000);
        }
    }
    /*----------------------------------------------------*/
    /*  Google map js
    /*----------------------------------------------------*/
    if ( $('#mapBox').length ){
        var $lat = $('#mapBox').data('lat');
        var $lon = $('#mapBox').data('lon');
        var $zoom = $('#mapBox').data('zoom');
        var $marker = $('#mapBox').data('marker');
        var $info = $('#mapBox').data('info');
        var $markerLat = $('#mapBox').data('mlat');
        var $markerLon = $('#mapBox').data('mlon');
        var map = new GMaps({
            el: '#mapBox',
            lat: $lat,
            lng: $lon,
            scrollwheel: false,
            scaleControl: true,
            streetViewControl: false,
            panControl: true,
            disableDoubleClickZoom: true,
            mapTypeControl: false,
            
            zoom: $zoom,
                styles: [
                 {"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},          
                 {"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},
                 {"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},
                 {"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},
                 {"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},
                 {"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},
                 {"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},
                 {"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},
                 {"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},
                 {"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},
                 {"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}
                ]
            });
        
            map.addMarker({
                lat: $markerLat,
                lng: $markerLon,
                icon: $marker, 
                infoWindow: {
                  content: $info
                }
            })
        }
    
    /*----------------------------------------------------*/
    /*  Preloader
    /*----------------------------------------------------*/
    $(window).on('load', function(){
        $('.preloader').addClass('complete');
        setTimeout(
            function(){
                $('.preloader').fadeOut('slow')    
            },2100
        );
    });
    
})(jQuery)