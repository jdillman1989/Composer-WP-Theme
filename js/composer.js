jQuery(document).ready(function() {

	// Container Resizing

	var headerInfo = jQuery('.header-info');
	var footer = jQuery('.footer');
	var content = jQuery('.content');
	var container = jQuery('.container');
	var containerMargin = parseInt(container.css('marginLeft'));
	var logo = jQuery('.logo');

	function updateCrop() {

		var logoWidth = logo.outerWidth();

		headerInfo.css({
			'width': jQuery( window ).width() - logoWidth - containerMargin - 30
		});

		content.css({
			'width': jQuery( window ).width() - containerMargin
		});

		footer.css({
			'width': jQuery( window ).width() - containerMargin - 30
		});
	}

	if ( jQuery( window ).width() < 960 + containerMargin + 30 && jQuery( window ).width() > 670 ) {
		updateCrop();
	};

	jQuery(window).resize(function(){

		if ( jQuery( window ).width() < 960 + containerMargin + 30 && jQuery( window ).width() > 670 ) {
			updateCrop();
		}
		else{

			headerInfo.css({
				'width': 700
			});

			content.css({
				'width': 960
			});
		};
	});

	// Render Email

	jQuery('#email').html("kball" + "@" + "olivet.edu");

	// Accordion

	jQuery('p:empty').remove();

	hash = null;
	 
	jQuery('.accordionButton').click(function() {

		jQuery('.accordionButton').removeClass('on');
		  
	 	jQuery('.accordionContent').slideUp('normal');
   
		if(jQuery(this).next().is(':hidden') == true) {
			
			jQuery(this).addClass('on');
			  
			jQuery(this).next().slideDown('normal');
		} 
		  
	});
		
	jQuery('.accordionButton').mouseover(function() {
		jQuery(this).addClass('over');
		
	}).mouseout(function() {
		jQuery(this).removeClass('over');										
	});
	
	// If there's a # in the URL, open all toggles and scroll to corresponding
    if(location.hash){
        hash = location.hash.split('#')[1];
    } else {
    	jQuery('.accordionContent').hide();
    }

});


