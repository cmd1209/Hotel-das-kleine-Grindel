(function ($, root, undefined) {

	$(function () {
		'use strict';

		// DOM ready, take it away
		$('#servicenav a').addClass('textprimarycolor');

		$('.nav-activator').click(function(){
			$('#header').toggleClass('whitebackground primarybackground');
			$('#bars').toggleClass('whitefill primaryfill');
			$('#mainnav').fadeToggle();
				$('#servicenav a').toggleClass('textwhite textprimarycolor');
		});

		var owl = $('.owl-carousel');
		owl.owlCarousel({
		    items:1,
		    loop:true,
		    margin:10,
		    autoplay:true,
				animateOut: 'fadeOut',
		    autoplayTimeout:7000,
		    autoplayHoverPause:true,
				dots: false,
		});
	});

})(jQuery, this);
