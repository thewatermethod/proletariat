jQuery(function() {
	jQuery("#menu-toggle-on i").click( function(){
		if (!jQuery(".main-navigation").hasClass("toggled")){
			jQuery(".main-navigation").addClass("toggled");
		} else{
			jQuery(".main-navigation").removeClass("toggled");
		}
	});

	jQuery("nav.main-navigation span#close-menu").click( function(){
		if (!jQuery(".main-navigation").hasClass("toggled")){
			jQuery(".main-navigation").addClass("toggled");
		} else{
			jQuery(".main-navigation").removeClass("toggled");
		}
	});

});