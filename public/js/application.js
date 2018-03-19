$(document).ready(function() {
	var offset = 220;
	var duration = 500;

	$('.tips').tooltip();
	$( '.dropdown' ).hover (function(){$(this).children('.sub-menu').slideDown(200);},function(){$(this).children('.sub-menu').slideUp(200);});

	$('.topclick').click(function(event) {
		event.preventDefault();
		jQuery('html, body').animate({scrollTop: 0}, duration);
		return false;
	});

	if($("a[rel^='prettyPhoto']").length > 0) {
		$("a[rel^='prettyPhoto']").prettyPhoto({
			theme: 'facebook', 
			slideshow:5000,
			deeplinking: false, 
			social_tools: false,
			autoplay_slideshow:false
		});
	}

	if (window.matchMedia('(min-width: 320px)').matches) {

	}

	if (window.matchMedia('(min-width: 100px)').matches && window.matchMedia('(max-width: 1200px)').matches) {
		$(".navbar-toggle").click(function(event) {
			$("#navbar-collapse").addClass("collapse");
		});
	}

	if (window.matchMedia('(max-width: 480px)').matches) {
		
	}
	else if (window.matchMedia('(max-width: 767px)').matches) {
		$("#widget-submenu").insertAfter("#main-side > .panel");
	}
	else if (window.matchMedia('(max-width: 991px)').matches) {
		$("#widget-submenu").insertAfter("#main-side > .panel");
	}
	else if (window.matchMedia('(max-width: 1200px)').matches) {

	}
	else {

	}

	mainSlider();
	seclinkSlide();
	SetHArticles();
	SetHlpse();
	SetHGallery();
	callTabSlide();
	teamSlider_pimpinan();
	contentSlider();

	setVidH();
	autoPlayChannel();
});

function mainSlider(){
	var pauseTime = 6000; 
	var timeoutId;

	$('.main-bxslider').bxSlider({
		slideWidth: 2000,
		minSlides: 1,
		maxSlides: 1,
		mode: 'fade',
		auto: true,
		pause: pauseTime,
		speed: 1000,
		controls: false,
		infiniteLoop: true,
		pager: true
	});
}

function ExcerptListProduct() {
	$.each($('.widget_list.list_product .item'), function (index, value) { 
		var ETxtVar = $(this).find('.list_excerpt');
		var GetText = ETxtVar.text();
		if (ETxtVar.length > 0) {
			if (GetText.length > 130) {
				ETxtVar.text(GetText.substring(0, 129)+"...");
			}
		}
	});
}

function seclinkSlide() {
	$('#widget-sitelink ul').bxSlider({
		nextSelector: '.nav-next._1st',
		prevSelector: '.nav-prev._1st',
		prevText: '<i class="fa fa-chevron-left"></i>',
		nextText: '<i class="fa fa-chevron-right"></i>',
		slideWidth: 2000,
		minSlides: 4,
		maxSlides: 4,
		moveSlides: 1,
		auto: false,
		pause: 6000,
		speed: 300,
		infiniteLoop: true,
		pager: false
	});
}

function SetHArticles() {
	var list_h = new Array();
	var temp = 0;
	var max_h;

	$.each($('#main-container > .container > .row'), function (index, value) {
		$.each($(this).find('.col-md-6'), function (index, value) {
			$(this).find('.panel-theme > .panel-body').map(function() {
				list_h.push($(this).height());
			});
		});
		
		for (var i = 0; i < list_h.length; i++) {
			if(temp < list_h[i]) {
				temp = list_h[i];
			}
		}
		$(this).find('.col-md-6 .panel-theme > .panel-body').height(temp);
		// console.log("array = " + list_h + " temp = " + temp);
		
		list_h = [];
		temp = 0;
	});
}

function SetHlpse() {
	var getH = $('#widget-lpse .panel-body .col-md-6 > .list-info').height();
	$('#widget-lpse .panel-body .col-md-6 > .lpse-wrap').animate({
		height: getH-15
	}, 1500);

	$('#widget-lpse .panel-body .col-md-6 > .lpse-wrap > .lpse-mid > .fa').animate({
		fontSize: "5em"
	}, 1500);
}

function SetHGallery() {
	var listg_h = new Array();
	var tempg = 0;
	var maxg_h;

	$.each($('#block-gallery > .gallery_cover > li'), function (index, value) {
		$(this).map(function() {
			listg_h.push($(this).height());
		});
	});

	for (var i = 0; i < listg_h.length; i++) {
		if(tempg < listg_h[i]) {
			tempg = listg_h[i];
		}
	}

	$('#block-gallery > .gallery_cover > li').height(tempg);
}

function callTabSlide() {
	var tab = $('#section-2 .nav-tabs');

	$('a[href="#pimpinan"]').one('shown.bs.tab', function (e) {
		teamSlider_pimpinan();
	});

	$('a[href="#muspida"]').one('shown.bs.tab', function (e) {
		teamSlider_muspida();
	});

	$('a[href="#perangkat"]').one('shown.bs.tab', function (e) {
		teamSlider_perangkat();
	});

	$('a[href="#dpr"]').one('shown.bs.tab', function (e) {
		teamSlider_dpr();
	});

}

function teamSlider_pimpinan() {
	var vcontent = $('.widget_team_profile');
	if (vcontent.length > 0) {
		if (vcontent.find('#pimpinan ul.slide li').length > 1) {
			var team_pimpinan = $('.widget_team_profile #pimpinan ul.slide').bxSlider({
				nextSelector: '.nav-next._2nd',
				prevSelector: '.nav-prev._2nd',
				prevText: '<i class="fa fa-chevron-left"></i>',
				nextText: '<i class="fa fa-chevron-right"></i>',
				slideWidth: 2000,
				minSlides: 1,
				maxSlides: 1,
				moveSlides: 1,
				auto: false,
				pause: 6000,
				speed: 300,
				infiniteLoop: true,
				pager: true,
				mode: 'fade',
				onSlideAfter: function ($slideElement, oldIndex, newIndex) {
					if (newIndex === team_pimpinan.getSlideCount() - 1) {
						setTimeout(
							function () {
								team_pimpinan.goToSlide(0);
								team_pimpinan.startAuto();
							},
							6000
							);
					} else {
						team_pimpinan.startAuto(); 
					}
				}
			});

			// load slide
			team_pimpinan.destroySlider();
			team_pimpinan.reloadSlider();
		}
	}
}

function teamSlider_muspida() {
	var vcontent = $('.widget_team_profile');
	if (vcontent.length > 0) {
		if (vcontent.find('#muspida ul.slide li').length > 1) {
			var team_muspida = $('.widget_team_profile #muspida ul.slide').bxSlider({
				nextSelector: '.nav-next._3nd',
				prevSelector: '.nav-prev._3nd',
				prevText: '<i class="fa fa-chevron-left"></i>',
				nextText: '<i class="fa fa-chevron-right"></i>',
				slideWidth: 2000,
				minSlides: 1,
				maxSlides: 1,
				moveSlides: 1,
				auto: false,
				pause: 6000,
				speed: 300,
				infiniteLoop: true,
				pager: true,
				mode: 'fade',
				onSlideAfter: function ($slideElement, oldIndex, newIndex) {
					if (newIndex === team_muspida.getSlideCount() - 1) {
						setTimeout(
							function () {
								team_muspida.goToSlide(0);
								team_muspida.startAuto();
							},
							6000
							);
					} else {
						team_muspida.startAuto(); 
					}
				}
			});

			// load slide
			team_muspida.destroySlider();
			team_muspida.reloadSlider();
		}
	}
}

function teamSlider_prangkat() {
	var vcontent = $('.widget_team_profile');
	if (vcontent.length > 0) {
		if (vcontent.find('#perangkat ul.slide li').length > 1) {
			var team_perangkat = $('.widget_team_profile #perangkat ul.slide').bxSlider({
				nextSelector: '.nav-next._4nd',
				prevSelector: '.nav-prev._4nd',
				prevText: '<i class="fa fa-chevron-left"></i>',
				nextText: '<i class="fa fa-chevron-right"></i>',
				slideWidth: 2000,
				minSlides: 1,
				maxSlides: 1,
				moveSlides: 1,
				auto: false,
				pause: 6000,
				speed: 300,
				infiniteLoop: true,
				pager: true,
				mode: 'fade',
				onSlideAfter: function ($slideElement, oldIndex, newIndex) {
					if (newIndex === team_perangkat.getSlideCount() - 1) {
						setTimeout(
							function () {
								team_perangkat.goToSlide(0);
								team_perangkat.startAuto();
							},
							6000
							);
					} else {
						team_perangkat.startAuto(); 
					}
				}
			});

			// load slide
			team_perangkat.destroySlider();
			team_perangkat.reloadSlider();
		}
	}
}

function teamSlider_dpr() {
	var vcontent = $('.widget_team_profile');
	if (vcontent.length > 0) {
		if (vcontent.find('#dpr ul.slide li').length > 1) {
			var team_dpr = $('.widget_team_profile #dpr ul.slide').bxSlider({
				nextSelector: '.nav-next._5nd',
				prevSelector: '.nav-prev._5nd',
				prevText: '<i class="fa fa-chevron-left"></i>',
				nextText: '<i class="fa fa-chevron-right"></i>',
				slideWidth: 2000,
				minSlides: 1,
				maxSlides: 1,
				moveSlides: 1,
				auto: false,
				pause: 6000,
				speed: 300,
				infiniteLoop: true,
				pager: true,
				mode: 'fade',
				onSlideAfter: function ($slideElement, oldIndex, newIndex) {
					if (newIndex === team_dpr.getSlideCount() - 1) {
						setTimeout(
							function () {
								team_dpr.goToSlide(0);
								team_dpr.startAuto();
							},
							6000
							);
					} else {
						team_dpr.startAuto(); 
					}
				}
			});

			// load slide
			team_dpr.destroySlider();
			team_dpr.reloadSlider();
		}
	}
}

function contentSlider() {
	var vcontent = $('.content_slide');
	if (vcontent.length > 0) {
		$('.content_slide > ul').bxSlider({
			nextSelector: '.nav-next._3rd',
			prevSelector: '.nav-prev._3rd',
			prevText: '<i class="fa fa-chevron-left"></i>',
			nextText: '<i class="fa fa-chevron-right"></i>',
			slideWidth: 2000,
			minSlides: 1,
			maxSlides: 1,
			mode: 'fade',
			auto: true,
			pause: 6000,
			speed: 1000,
			infiniteLoop: true,
			pager: true
		});
	}
}

function setVidH() {
	$.each($('.video-list .list-info li'), function (index, value) {
		$(this).find('.vid-scr').height($(this).width()-60);
	});
}

function autoPlayChannel() {

	var obj 		= $('.video-list .list-info'); 
	var loading 	= loader('small');
	var auto 		= "?modestbranding=1&rel=0&controls=1&showinfo=0&html5=1&autoplay=1";
	var embed 		= "https://www.youtube.com/embed/";

	if (obj.length > 0) {
		$.each($('.video-list .list-info li'), function (index, value) { 

			var vThis = $(this);
			var theModal = vThis.find(".video").data("target"),
			videoSRC = vThis.find(".video").attr("data-video"),
			videoSRCauto;

			var get_video_id = getMediaID(videoSRC);
			videoSRCauto = embed + get_video_id + auto;

			if (get_video_id.length == 11) {
				var video_thumbnail = $('<img src="//img.youtube.com/vi/'+get_video_id+'/0.jpg">');

				vThis.find(".video .vid-scr").html(loading);
				setTimeout(function(){
					vThis.find(".video .vid-scr").append(video_thumbnail);
					vThis.find(".video .vid-scr .loader-wrap").remove();
				}, 2000);
			}

			$(this).find(".video").click(function () {
				$(theModal + ' iframe').attr('src', videoSRCauto);
				$(theModal).find('.modal-title').text(vThis.find('.video .headline-title').text());

				$(theModal + ' button.close').click(function () {
					$(theModal + ' iframe').find('#myModalLabel').text('');
					$(theModal + ' iframe').attr('src', '');
				});
			});
		});
	}

	$('#ViewChannel').on('hidden.bs.modal', function (e) {
		$('#ViewChannel').find('iframe .modal-title').text('');
		$('#ViewChannel').find('iframe').attr('src', '');
	});
}

function loader(type) {
	var bar = 10;
	var setbar = "<span></span>";
	if (type == "small") {
		bar = 6;
	}

	for (var i = 0; i < (bar-1); i++) {
		setbar = setbar + "<span></span>";
	}

	return '<div class="loader-wrap"><div class="loader '+type+'">'+setbar+'</div></div>';
}

function getMediaID(url) {
	var parseurl = url.split("/");
	return (parseurl[3].split("v="))[1];
}

function getEmbedMedia(mediaID) {
	var embedd		= "https://www.youtube.com/embed/";
	return embedd + mediaID;
}

// function teamSlider() {
// 	var vcontent = $('.widget_team_profile');
// 	if (vcontent.length > 0) {
// 		if (vcontent.find('#pimpinan ul.slide li').length > 1) {
// 			$('.widget_team_profile #pimpinan ul.slide').bxSlider({
// 				nextSelector: '.nav-next._2nd',
// 				prevSelector: '.nav-prev._2nd',
// 				prevText: '<i class="fa fa-chevron-left"></i>',
// 				nextText: '<i class="fa fa-chevron-right"></i>',
// 				slideWidth: 2000,
// 				minSlides: 1,
// 				maxSlides: 1,
// 				moveSlides: 1,
// 				auto: false,
// 				pause: 6000,
// 				speed: 300,
// 				infiniteLoop: true,
// 				pager: true,
// 				mode: 'fade'
// 			});
// 		}

// 		if (vcontent.find('#muspida ul.slide li').length > 1) {
// 			$('.widget_team_profile #muspida ul.slide').bxSlider({
// 				nextSelector: '.nav-next._3nd',
// 				prevSelector: '.nav-prev._3nd',
// 				prevText: '<i class="fa fa-chevron-left"></i>',
// 				nextText: '<i class="fa fa-chevron-right"></i>',
// 				slideWidth: 2000,
// 				minSlides: 1,
// 				maxSlides: 1,
// 				moveSlides: 1,
// 				auto: false,
// 				pause: 6000,
// 				speed: 300,
// 				infiniteLoop: true,
// 				pager: true,
// 				mode: 'fade'
// 			});
// 		}

// 		if (vcontent.find('#perangkat ul.slide li').length > 1) {
// 			$('.widget_team_profile #perangkat ul.slide').bxSlider({
// 				nextSelector: '.nav-next._4nd',
// 				prevSelector: '.nav-prev._4nd',
// 				prevText: '<i class="fa fa-chevron-left"></i>',
// 				nextText: '<i class="fa fa-chevron-right"></i>',
// 				slideWidth: 2000,
// 				minSlides: 1,
// 				maxSlides: 1,
// 				moveSlides: 1,
// 				auto: false,
// 				pause: 6000,
// 				speed: 300,
// 				infiniteLoop: true,
// 				pager: true,
// 				mode: 'fade'
// 			});
// 		}

// 		if (vcontent.find('#dpr ul.slide li').length > 1) {
// 			$('.widget_team_profile #dpr ul.slide').bxSlider({
// 				nextSelector: '.nav-next._5nd',
// 				prevSelector: '.nav-prev._5nd',
// 				prevText: '<i class="fa fa-chevron-left"></i>',
// 				nextText: '<i class="fa fa-chevron-right"></i>',
// 				slideWidth: 2000,
// 				minSlides: 1,
// 				maxSlides: 1,
// 				moveSlides: 1,
// 				auto: false,
// 				pause: 6000,
// 				speed: 300,
// 				infiniteLoop: true,
// 				pager: true,
// 				mode: 'fade'
// 			});
// 		}
// 	}
// }