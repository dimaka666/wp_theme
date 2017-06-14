		
jQuery(document).ready(function(){

		jQuery(document).on('scroll',function(){
			if($(window).scrollTop() > 200) {
				$('header').addClass('inverted');
			} else {
				$('header').removeClass('inverted');
			}
		});

		jQuery('.hmb_menu').on('click', function(){
			$('.nav_links').toggle();
		})

});


