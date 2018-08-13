(function ($, root, undefined) {

	$(function () {
		'use strict';

		// DOM ready, take it away
		$('#servicenav a').addClass('textprimarycolor');

		$('.nav-activator').click(function(){
			$(this).toggleClass('open');
			$('#header').toggleClass('whitebackground primarybackground');
			$('#bars').toggleClass('whitefill primaryfill');
			$('#fillpath').toggleClass('whitefill primaryfill');
			$('#mainnav').fadeToggle();
			$('#servicenav a').toggleClass('textwhite textprimarycolor');
		});


		var owl = $('.owl-carousel');
		owl.owlCarousel({
		    items:1,
		    loop:true,
		    autoplay:true,
				animateOut: 'fadeOut',
				autoplayTimeout:2500,
		    autoplayHoverPause:false,
				dots: false,
		});
	});

	$('#menu-icon').click(function(){
		

	});

})(jQuery, this);