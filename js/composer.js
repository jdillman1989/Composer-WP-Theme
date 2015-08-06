jQuery(document).ready(function() {

	// Header Resizing

	var headerInfo = jQuery('.header-info');
	var container = jQuery('.container');
	var containerMargin = parseInt(container.css('marginLeft'));
	var logo = jQuery('.logo');
	var logoWidth = logo.outerWidth();

	function updateCrop() {

		headerInfo.css({
			'width': jQuery( window ).width() - logoWidth - containerMargin
		});
	}

	if ( jQuery( window ).width() < 960 + containerMargin ) {
		updateCrop();
	};

	jQuery(window).resize(function(){

		if ( jQuery( window ).width() < 960 + containerMargin ) {
			updateCrop();
		}
		else{

			headerInfo.css({
				'width': 700
			});
		};
	});

	// Accordion

	// Fix for a bug in WordPress that generates a bunch of empty <p>'s in the shortcode  
	jQuery('p:empty').remove();

	hash = null;
	 
	//ACCORDION BUTTON ACTION (ON CLICK DO THE FOLLOWING)
	jQuery('.accordionButton').click(function() {

		//REMOVE THE ON CLASS FROM ALL BUTTONS
		//Can be used to style an active state
		jQuery('.accordionButton').removeClass('on');
		  
		//NO MATTER WHAT WE CLOSE ALL OPEN SLIDES
	 	jQuery('.accordionContent').slideUp('normal');
   
		//IF THE NEXT SLIDE WASN'T OPEN THEN OPEN IT
		if(jQuery(this).next().is(':hidden') == true) {
			
			//ADD THE ON CLASS TO THE BUTTON
			jQuery(this).addClass('on');
			  
			//OPEN THE SLIDE
			jQuery(this).next().slideDown('normal');
		} 
		  
	});
	
	/*** REMOVE IF MOUSEOVER IS NOT REQUIRED ***/
	
	//ADDS THE .OVER CLASS FROM THE STYLESHEET ON MOUSEOVER 
	jQuery('.accordionButton').mouseover(function() {
		jQuery(this).addClass('over');
		
	//ON MOUSEOUT REMOVE THE OVER CLASS
	}).mouseout(function() {
		jQuery(this).removeClass('over');										
	});
	
	/*** END REMOVE IF MOUSEOVER IS NOT REQUIRED ***/
	
	// deep link into accordion
	// If there's a # in the URL, open all toggles and scroll to corresponding
    if(location.hash){
    	// hash variable can be used to maintian nav function on the same page
        hash = location.hash.split('#')[1];
    } else {
    	//If there's no hash, load the page as normal with all toggles closed
    	jQuery('.accordionContent').hide();
    }

});


