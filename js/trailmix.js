$(document).ready(function(){
    $(window).scroll(function(){
        $(".splash-logo").css("opacity", 1 - $(window).scrollTop() / 250);
      });
    //makes splash logo fade as scroll goes down

    // Change navbar BG color on scroll to #learn-more
    /*var scroll_start = 0;
    var startchange = $("#learn-more");
    var offset = startchange.offset();

    if (startchange.length) {
        $(document).scroll(function () {
            scroll_start = $(this).scrollTop();
            if (scroll_start > offset.top) {
                $("nav").css('background-color', '#222');
            } else {
                $('nav').css('background-color', 'transparent');
            }
        });
    }*/

	"use strict";
	$.fn.scrollTo = function( options ) {

		var settings = {
			offset : 0,       //an integer allowing you to offset the position by a certain number of pixels. Can be negative or positive
			speed : 'medium',   //speed at which the scroll animates
			override : null,  //if you want to override the default way this plugin works, pass in the ID of the element you want to scroll through here
		};

		if (options) {
			if(options.override){
				//if they choose to override, make sure the hash is there
				options.override = (override('#') != -1)? options.override:'#' + options.override;
			}
			$.extend( settings, options );
		}

		return this.each(function(i, el){
			$(el).click(function(e){
				var idToLookAt;
				if ($(el).attr('href').match(/#/) !== null) {
					e.preventDefault();
					idToLookAt = (settings.override)? settings.override:$(el).attr('href');//see if the user is forcing an ID they want to use
					//if the browser supports it, we push the hash into the pushState for better linking later
					if(history.pushState){
						history.pushState(null, null, idToLookAt);
						$('html,body').stop().animate({scrollTop: $(idToLookAt).offset().top + settings.offset}, settings.speed, settings.easing);
					}else{
						//if the browser doesn't support pushState, we set the hash after the animation, which may cause issues if you use offset
						$('html,body').stop().animate({scrollTop: $(idToLookAt).offset().top + settings.offset}, settings.speed, settings.easing,function(e){
							//set the hash of the window for better linking
							window.location.hash = idToLookAt;
						});
					}
				
				}
			
			});
		
		});
	};
	
	//goes to with speed
	$('#GoToSplash,' + 
		'#GoToLearnMore')
		.scrollTo({ speed: 2500 });

	// seperate scroll to 
	// and with this we want to go 
	// straight to the scource
	// so the speed is 
	// one millisecond
	// straight to About US
	$('#GoToAboutUs')
	.scrollTo({ speed: 2500 });//changed speed to 2.5 sec..more pleaseing
	
	$('#GoToMission')
	.scrollTo({ speed: 2500 });
	$('#GoToVision')
	.scrollTo({ speed: 2500 });

     /*end scroll to*/
	/******************************
	
	new function
	
	*******************************/	

    //function to hide the footer
    //per student suggestion

    //hide your div initially

    /**********************************************
    // changed code to involve only index footerID

    ***********************************************/
	$("#footindex").hide(); 
	//set a variable to get the div you want to scroll past
    var topOfOthDiv = $("#scrollDiv")
    .offset().top;
    //make a function to show the footer at some point
    $(window).scroll(function() {
    	//scrolled past the other div?
        if($(window).scrollTop() > topOfOthDiv) { 
        	//reached the desired point -- show div
            $("#footindex").show(800); 
        }
        else{
        	/*if anything else then hide*/
        	$("#footindex").hide(500); 
        	/*up and down sho and hide*/
        }
    });
});
