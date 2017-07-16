var mobileMenu,cartSummary;
$(document).ready(function($) {

	if (isMobile) {
		mobileMenu = new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) )
		
		
	}

	$(".dropdown").hover(
        function() { $('.dropdown-menu', this).fadeIn("fast");
        },
        function() { $('.dropdown-menu', this).fadeOut("fast");
    });


	setSlideshow();
	
});


function setSlideshow () {

	$('#gallery').on('init',function () {
		//...
	}).slick({
		dots : true,
		infinite : true,
		pauseOnHover : false,
		pauseOnFocus : false,
		slide : ".slick-slide",
		speed : 800,
		autoplay: true,
  		autoplaySpeed: 5000,
  		arrows:false
	});

	$('#logo-carousel').on('init',function () {
		//...
	}).slick({
		dots : false,
		infinite : true,
		pauseOnHover : false,
		pauseOnFocus : false,
		slide : ".slick-slide",
		speed : 500,
		autoplay: true,
  		autoplaySpeed: 5000,
  		slidesToShow: 5,
  		slidesToScroll: 5,
  		prevArrow : $(".logo-arrows .arrow-prev"),
  		nextArrow : $(".logo-arrows .arrow-next")
	});


	$('#products-carousel').on('init',function () {
		//...
	}).slick({
		dots : false,
		infinite : true,
		pauseOnHover : false,
		pauseOnFocus : false,
		slide : ".slick-slide",
		speed : 800,
		autoplay: true,
  		autoplaySpeed: 5000,
  		slidesToShow: 4,
  		slidesToScroll: 4,
  		prevArrow : $(".products-arrows .arrow-prev"),
  		nextArrow : $(".products-arrows .arrow-next")
	});

	$('#guide-carousel').on('init',function () {
		//...
	}).slick({
		dots : false,
		infinite : true,
		pauseOnHover : false,
		pauseOnFocus : false,
		slide : ".slick-slide",
		speed : 800,
		autoplay: true,
  		autoplaySpeed: 5000,
  		slidesToShow: 3,
  		slidesToScroll: 3,
  		prevArrow : $(".guide-arrows .arrow-prev"),
  		nextArrow : $(".guide-arrows .arrow-next")
	});
}