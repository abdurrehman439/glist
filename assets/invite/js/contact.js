$(function() {
	'use strict';
	// Main contact form
    $('#contact').validate({
        rules: {
            sender_name: {
                required: true,
                minlength: 2
            },
            sender_email: {
                required: true,
                email: true
            },
            receiver_email: {
                required: true,
                email: true
            },
            message: {
                required: true
            }
        },
        messages: {
            sender_name: {
                required: "Please enter Sender Name",
                minlength: "Sender Name must consist of at least 2 characters"
            },
            sender_email: {
                required: "Please enter Sender Email Address"
            },
            receiver_email: {
                required: "Please enter Receiver Email Address"
            },
            message: {
                required: "Please enter your message",
                minlength: "Your message must consist of at least 2 characters"
            }
        }
    });
    
    // Signup form
    $('#signup').validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            name: {
                required: "Please enter your name",
                minlength: "Your name must consist of at least 2 characters"
            },
            email: {
                required: "Please enter your email address"
            }
        },
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                type:"POST",
                data: $(form).serialize(),
                url:"inc/signup.php",
                success: function() {
                    $('#signup :input').attr('disabled', 'disabled');
                    $('#signup').fadeTo( "slow", 0.15, function() {
                        $(this).find(':input').attr('disabled', 'disabled');
                        $(this).find('label').css('cursor','default');
                        $('#success').fadeIn();
                    });
                },
                error: function() {
                    $('#signup').fadeTo( "slow", 0.15, function() {
                        $('#error').fadeIn();
                    });
                }
            });
        }
    });
	
	// Subscription form
   	$('#subscribe').validate({
        rules: {
            subscribe_email: {
                required: true,
                email: true
            } 
        },
        messages: {
            subscribe_email: {
                required: "Please enter your email address"
            } 
        },
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                type:"POST",
                data: $(form).serialize(),
                url:"inc/subscribe.php",
                success: function() {
                    $('#subscribe :input').attr('disabled', 'disabled');
                    $('#subscribe').fadeTo( "slow", 0.15, function() {
                        $(this).find(':input').attr('disabled', 'disabled');
                        $(this).find('label').css('cursor','default');
                        $('#success').fadeIn();
                    });
                },
                error: function() {
                    $('#subscribe').fadeTo( "slow", 0.15, function() {
                        $('#error').fadeIn();
                    });
                }
            });
        }
    });

});