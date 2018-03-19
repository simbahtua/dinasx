$(document).ready(function() {
	// var offset = 220;
	// var duration = 500;

	// $('.topclick').click(function(event) {
	// 	event.preventDefault();
	// 	jQuery('html, body').animate({scrollTop: 0}, duration);
	// 	return false;
	// });

	mainSlider();
	autoPlayChannel();
	floating_menu();

});

function mainSlider(){
	$('.main-bxslider').bxSlider({
		minSlides: 1,
		maxSlides: 1,
		infiniteLoop: true,
		mode: 'fade',
		speed: 1000,
		controls: false,
		auto: false,
		pagerCustom: '#bx-pagers'
	});
}

function autoPlayChannel() {
	var obj = $('.main-bxslider li:first-child').find("iframe"); //.attr("data-video")
	var autoplay = "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1";

	if (obj.length > 0) {
		obj.attr("src", obj.attr("data-video") + autoplay);
	}

	$.each($('#bx-pagers a'), function (index, value) { 
		// var autoplay = "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1";
		var indexli;

		$(this).click(function () {
			indexli = $('.main-bxslider li:nth-child('+(index+1)+')');
			videoSRC = indexli.find("iframe").attr("data-video");
			var source = "";

			$.each($('.main-bxslider li'), function (index, value) {
				source = $(this).find("iframe").attr("data-video");
				$(this).find("iframe").attr("src", "");
				$(this).find("iframe").attr("src", source);
			});

			if (videoSRC != "" || videoSRC != undefined) {
				videoSRCauto = videoSRC + autoplay;

				indexli.find("iframe").attr("src", "");
				indexli.find("iframe").attr("src", videoSRCauto);
			}
		});
	});
}

function floating_menu(){
	var setFloat	= $('#widget_shortcut');
	var offset 		= $('#main-slider').height();

	$(window).on('scroll',function() {
		var scroll 	= $(window).scrollTop();
		if (scroll > offset-30) {
			if(setFloat.attr('class')!=='show') {
				setFloat.addClass('show');
			}
		} else {
			setFloat.removeClass('show');
		}
	});
}
