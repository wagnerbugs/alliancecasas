/*===================================================
\ Template Name	: Classic Realtors | HTML5 & SCSS
\ Author			: JHK Infotech PVT. LTD.
\ Author URL		: https://www.jhkinfotech.com
\ Author Support	: support@jhkinfotech.com
===================================================*/

/*======================== back to top  ====================*/
$(document).ready(function(e) {
    function t(e) {
        var t = $("#to-top");
        t.removeClass("off on");
        if (e == "on") {
            t.addClass("on")
        } else {
            t.addClass("off")
        }
    }
    window.setInterval(function() {
        var e = $(this).scrollTop();
        var n = $(this).height();
        if (e > 0) {
            var r = e + n / 2
        } else {
            var r = 1
        }
        if (r < 1e3) {
            t("off")
        } else {
            t("on")
        }
    }, 300);
    $("#to-top").click(function(e) {
        e.preventDefault();
        $("body,html").animate({
            scrollTop: 0
        }, 1200)
    })
});

$(document).ready(function() {
	var owl = $('.owl-carousel-home');
	owl.owlCarousel({
		margin: 0,
		nav: true,
		navText: ["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
		dots: false,
		loop: true,
		items:1,
		smartSpeed:950,
	});
	AOS.init({
		easing: 'ease-in-out',
		duration: 400
	});
});

/*===================== home top carousel caption margin js ==========================*/
function carouselcaption2margin(){
	if($(window).width() > 1500){
		$('.custom-carousel-caption-2').css({"margin-left" : - $('.prop-holder-pic').outerWidth()});
	}
	else{
		$('.custom-carousel-caption-2').css({"margin-left" : 0});
	}
}
/*===================== home top carousel prop holder pic width js ==========================
function profilepicwidth(){
	if($(window).width() < 1510){
		
		var proppicwidth =  ($(window).width() - $('.container').width()) / 2;
		$('.prop-holder-pic').css({"width" : proppicwidth, "flex-basis" : proppicwidth});
	}
	else{
		$('.prop-holder-pic').css({"width" : 200, "flex-basis" : 200});
	}
}*/
/*===================== home top carousel nav js ==========================*/
function hoemcarouselnav(){
	if($(window).width() > 1500){
		var hoemcarouselnavleft =  ($(window).width() - $('.container').width()) / 2;
		var hoemcarouselnavbottom =  $(".custom-carousel-caption-2").height();
		$('.owl-carousel-home .owl-nav').css({"left" : hoemcarouselnavleft , "bottom" : hoemcarouselnavbottom , "opacity" : "1"});
	}
	else{
		$('.owl-carousel-home .owl-nav').css({"left" : (($(window).width() - $('.container').width()) / 2) + $('.prop-holder-pic').outerWidth() , "opacity" : "1"});
	}
}

$(window).bind( "load resize", function() {
	carouselcaption2margin();
	//profilepicwidth();
     hoemcarouselnav();
});
$(document).ready(function() {
     hoemcarouselnav();
});
/*===================== header js ==========================*/

$(window).bind( "load scroll", function() {   
    var scroll = $(window).scrollTop();

	//>=, not <=
    if (scroll >= 1) {
        //clearHeader, not clearheader - caps H
        $("body:not(.nav-open) .header").addClass("headerblack");
    }
    else{
        $("body:not(.nav-open) .header").removeClass("headerblack");
    }
});


$('.header-nav-link').click(function() {
     $(this).addClass('active');
});
/*===================== home features props slider js ==========================*/
$(function(){
	var owl1 = $('#sliderimg');
	var owl2 = $('#slidercaption');
	owl1.owlCarousel({
		autoplay: 3000,
		smartSpeed:850,
		loop:true,
		items:1,
		margin:0,
		nav:true,
		dots:false,
		navText: ["<img src='images/left-arrow-1.png'>","<img src='images/right-arrow-1.png'>"],
		onInitialized  : counter, //When the plugin has initialized.
		onTranslated : counter //When the translation of the stage has finished.
	});
	owl2.owlCarousel({
		loop:true,
		items:1,
		margin:0,
		nav:false,
		dots:false,
		smartSpeed:850,
	});
	
	
	owl2.on('changed.owl.carousel', function(event) {
	  if (event.namespace && event.property.name === 'position') {
	    var target = event.relatedTarget.relative(event.property.value, true);
	    owl1.owlCarousel('to', target, 300, true);
	  }
	})
	owl1.on('changed.owl.carousel', function(event) {
	  if (event.namespace && event.property.name === 'position') {
	    var target = event.relatedTarget.relative(event.property.value, true);
	    owl2.owlCarousel('to', target, 300, true);
	  }
	})
	function counter(event) {
		var element   = event.target;         // DOM element, in this example .owl-carousel
		var items     = event.item.count;     // Number of items
		var item      = event.item.index + 1;     // Position of the current item
		
		// it loop is true then reset counter from 1
		if(item > items) {
			item = item - items
		}
		
		var slidenumber = "";
		var i;
		for (i = 1; i <= items; i++) {
			if(i == (event.item.index - (event.relatedTarget._clones.length / 2) + 1)){
				var activevar = 'active';
			}
			else{
				var activevar = '';
			}
			if(i <= 9){
				slidenumber += "<li class='top-featured-home-slider-pagination-number text-white-50 " +activevar+ "'>0" + i + "</li>";
			}
			else{
				slidenumber += "<li class='top-featured-home-slider-pagination-number text-white-50 " +activevar+ "'>" + i + "</li>";
			}
		}
		$(".top-featured-home-slider-pagination-ul").html(slidenumber);
		
		
	}
	$(".top-featured-home-slider-img-owl .owl-nav .owl-prev").addClass('active');
});
//
//// Sync nav
//owl1.on('click', '.owl-next', function () {
//    owl2.trigger('next.owl.carousel')
//});
//owl1.on('click', '.owl-prev', function () {
//    owl2.trigger('prev.owl.carousel')
//});
$(document).ready(function() {
	$( ".top-featured-home-slider-img-owl .owl-nav [class*='owl-'],.nearbylocationswiper-nav-btn" )
	.mouseenter(function() {
		$(".top-featured-home-slider-img-owl .owl-nav [class*='owl-'],.nearbylocationswiper-nav-btn").removeClass("active");
		$(this).addClass("active");
	})
	.mouseleave(function() {
		$(".top-featured-home-slider-img-owl .owl-nav [class*='owl-'],.nearbylocationswiper-nav-btn").removeClass("active");
		$(".top-featured-home-slider-img-owl .owl-nav .owl-prev,.nearbylocationswiper-nav-next").addClass("active");
	});
});


/*===================== properties-slider-1 js ==========================*/
$(document).ready(function() {
	var owl_prop_slider_1 = $('.properties-slider-1');
	owl_prop_slider_1.owlCarousel({
		items: 3,
		loop: true,
		margin: 0,
		nav:false,
		dots:false,
		smartSpeed:850,
		navText: ["<img src='images/long-arrow-left-black.png'>","<img src='images/long-arrow-right-black.png'>"],
		responsive:{
			0:{
				items:1
			},
			575:{
				items:2
			},
			1024:{
				items:3
			}
		}
		
	});
	$('.properties-slider-1-prev').click(function() {
		owl_prop_slider_1.trigger('prev.owl.carousel');
	});
	$('.properties-slider-1-next').click(function() {
		owl_prop_slider_1.trigger('next.owl.carousel');
	});
});

function propslider1width(){
	if($(window).width() > 1200){
		$('.properties-slider-1-holder').css({"width" : $(window).width() - ($(window).width() - $('.container').outerWidth()) / 2 });
	}
	else{
		$('.properties-slider-1-holder').css({"width" : "100%"});
		
	}
}
$(window).bind( "load resize", function() {
	propslider1width();
});

/*============================ Page Loader JS =======================*/
$(window).on("load", function(){
     $('.loader').fadeOut(1000);
});
/*============================ // Page Loader JS // =======================*/

/*===================== logo slider js ==========================*/
$('.logos-slider').owlCarousel({
	loop:true,
	//autoplay: 2000,
	smartSpeed:850,
	margin:0,
	nav:false,
	dots: false,
	responsive:{
		0:{
			items:3
		},
		768:{
			items:4
		},
		992:{
			items:5
		}
	}
});

/*===================== testimonial js ==========================*/
$('.testimonial-player').click(function() {
	//var videoid = document.getElementById('my-video');
	var videoid = $(this).parents('.creative-testimonials-holder1-col').find('.testimonials-video-holder').children('video');
	
	if($(this).hasClass('active')){
		$(this).removeClass('active');
		
		$(this).parents('.creative-testimonials-holder1-col').find('.testimonials-video-holder.active > video').trigger('pause');
		$(this).parents('.creative-testimonials-holder1-col').find('.testimonials-video-holder').removeClass('active');

		//$('.testimonial-player > i').removeClass('fa-play');
		//$('.testimonial-player > i').addClass('fa-pause');
		$(this).children('i').addClass('fa-play');
		$(this).children('i').removeClass('fa-pause');
	}
	else{
		$('.testimonial-player').removeClass('active');
		$(this).addClass('active');
		
		$('.testimonial-player > i').removeClass('fa-pause');
		$('.testimonial-player > i').addClass('fa-play');
		$(this).children('i').addClass('fa-pause');
		$(this).children('i').removeClass('fa-play');
		
		$('.testimonials-video-holder.active > video').trigger('pause');
		$('.testimonials-video-holder').removeClass('active');
		
		$(this).parents('.creative-testimonials-holder1-col').find('.testimonials-video-holder').addClass('active');
		$(this).parents('.creative-testimonials-holder1-col').find('.testimonials-video-holder > video').trigger('play');

	}
});

/*===================== home top video js ==========================*/
$('.home-top-video-player-btn').click(function() {
	if($(this).hasClass('active')){
		$(this).removeClass('active');
		
		$(this).find('i').addClass('fa-play');
		$(this).find('i').removeClass('fa-pause');

		$(this).parents('.top-banner-item').find('.top-banner-video').trigger('pause');
	}
	else{
		$('.home-top-video-player-btn').removeClass('active');
		$(this).addClass('active');
		
		$('.home-top-video-player-btn i').removeClass('fa-pause');
		$('.home-top-video-player-btn i').addClass('fa-play');
		$(this).find('i').addClass('fa-pause');
		$(this).find('i').removeClass('fa-play');
		
		$('.top-banner-video').trigger('pause');
		$(this).parents('.top-banner-item').find('.top-banner-video').trigger('play');
	}
});
/*===================== navigation js ==========================*/
$('.navigation-opener').click(function() {
	var scroll = $(window).scrollTop();
	
	
	if($(this).hasClass('navigation-opener-active')){
		$(this).removeClass('navigation-opener-active');
		$('body').removeClass('nav-open');
		$('.navigation-holder').removeClass('active');
		if (scroll >= 1) {
			$('.header').addClass('headerblack');
		}
	}
	else{
		$(this).addClass('navigation-opener-active');
		$('body').addClass('nav-open');
		$('.navigation-holder').addClass('active');
		if (scroll >= 1) {
			$('.header').removeClass('headerblack');
		}		
	}
	
});
/*===================== AOS Animation Initialise ==========================*/

/*===================== Stories slider holder ==========================*/

$(document).ready(function() {
	var owl_stories_slider_1 = $('#stories-slider-1');
	
	owl_stories_slider_1.owlCarousel({
		items: 1,
		loop: false,
		margin: 15,
		nav:false,
		dots:true,
		smartSpeed:850,
	});
	
	$( ".stories-slider-holder-nav.owl-nav [class*='owl-']" )
	.mouseenter(function() {
		$(".stories-slider-holder-nav.owl-nav [class*='owl-']").removeClass("active");
		$(this).addClass("active");
	})
	.mouseleave(function() {
		$(".stories-slider-holder-nav.owl-nav [class*='owl-']").removeClass("active");
		$(".stories-slider-holder-nav.owl-nav .owl-next").addClass("active");
	});
	
	$('.stories-slider-holder-prev').click(function() {
		owl_stories_slider_1.trigger('prev.owl.carousel');
	});
	$('.stories-slider-holder-next').click(function() {
		owl_stories_slider_1.trigger('next.owl.carousel');
	});

});

/*===================== our team slider ==========================*/

$(document).ready(function() {
	var owl_our_team_1 = $('.our-team-slider-1');
	owl_our_team_1.owlCarousel({
		items: 3,
		loop: true,
		margin: 20,
		nav:false,
		dots:false,
		smartSpeed:850,
		navText: ["<img src='images/long-arrow-left-black.png'>","<img src='images/long-arrow-right-black.png'>"],
		responsive:{
			0:{
				items:1
			},
			650:{
				items:2
			},
			1000:{
				items:3
			}
			
		}
	});
	$('.our-team-slider-1-prev').click(function() {
		owl_our_team_1.trigger('prev.owl.carousel');
	});
	$('.our-team-slider-1-next').click(function() {
		owl_our_team_1.trigger('next.owl.carousel');
	});
});


/*========================== RANGE SLIDER ===========================*/
(function( $ ){
$( document ).ready( function() {
	$( '.input-range').each(function(){
		var value = $(this).attr('data-slider-value');
		var separator = value.indexOf(',');
		if( separator !== -1 ){
			value = value.split(',');
			value.forEach(function(item, i, arr) {
				arr[ i ] = parseFloat( item );
			});
		} else {
			value = parseFloat( value );
		}
		$( this ).slider({
			formatter: function(value) {
				return '$' + value;
			},
			min: parseFloat( $( this ).attr('data-slider-min') ),
			max: parseFloat( $( this ).attr('data-slider-max') ), 
			range: $( this ).attr('data-slider-range'),
			value: value,
			tooltip_split: $( this ).attr('data-slider-tooltip_split'),
			tooltip: $( this ).attr('data-slider-tooltip')
		});
	});
	
 } );
} )( jQuery );

/*========================== Bootstrap 4 tooltip ===========================*/
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});


