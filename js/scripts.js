(function ($, root, undefined) {

	$(function () {

		'use strict';

		// DOM ready, take it away
		$("document").ready(function(){
			$(".menu-toggle").on("click", function(ev){
				ev.preventDefault();
				$("body").toggleClass("menu-open");
			});
			$(".menu-close a").on("click", function(ev){
				ev.preventDefault();
				$("body").toggleClass("menu-open");
			});
			$(".deeper-toggle").on("click", function(ev){
				ev.preventDefault();
				$(".deeper-look").fadeToggle();
			});
			$(".video-toggle").on("click", function(ev){
        ev.preventDefault();
				var url = $(this).attr("data-url");
        $(".video-frame .youtube-video").html('<iframe width="100%" height="100%" src="' + url + '" frameborder="0" allowfullscreen autoplay></iframe>');
				$("body").toggleClass("playing");
	    });
			$(".video-close").on("click", function(ev){
        ev.preventDefault();
				$("body").toggleClass("playing");
				setTimeout(function(){
					$(".video-frame .youtube-video").html('');
				}, 320);
	    });
		});

		$(window).load(function(){
			setTimeout(function(){
				$(".one").removeClass("start");
				setTimeout(function(){
					$(".two").removeClass("start");
					setTimeout(function(){
						$(".three").removeClass("start");
					}, 620);
				}, 320);
			}, 320);
		});

		$(window).resize(function(){
			$(".home .intro").height($(window).height());
			$(".lego-robotics .intro, .jr-leaders-of-innovation .intro, .apple-swift-coding .intro, .fellowship-program .intro").height($(window).height());
			$(".about .intro").height($(window).height()*.7);
			$(".get-involved .intro").height($(window).height()*.6);
		}).resize();

	});

})(jQuery, this);
