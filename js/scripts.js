var mobileMenu,cartSummary;
$(document).ready(function($) {


	$(".dropdown").hover(
        function() { $('.dropdown-menu', this).fadeIn("fast");
        },
        function() { $('.dropdown-menu', this).fadeOut("fast");
    });


	setSlideshow();

});


function setSlideshow () {

	//PRODUCT DETAIL PAGE

	// top image
	$(".product-slider-image").slick({
		slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: false,
	  fade: true,
	  asNavFor: '.product-slider-nav'
	});

	// bottom nav
	$(".product-slider-nav").slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.product-slider-image',
		dots: true,
		centerMode: true,
		focusOnSelect: true
	});

	$("#product-information").tabs();

	$("i.fa.fa-th").on('click', function(e){
		e.preventDefault();
		// if ($(this).hasClass("selected") == true) {
			$(this).addClass("selected");
			$("i.fa.fa-list").removeClass("selected");
		// }
		$(".prod-cat-item").removeClass("col-md-9").addClass("col-md-3")
	});

	$("i.fa.fa-list").on('click', function(e){
		e.preventDefault();
		$(".prod-cat-item").removeClass("col-md-3").addClass("col-md-9")
		$(this).addClass("selected");
		$("i.fa.fa-th").removeClass("selected");
	});


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
  		slidesToShow: (!isMobile) ? 5 : 1,
  		slidesToScroll: (!isMobile) ? 5 : 1,
  		prevArrow : $(".side-arrows .arrow-prev"),
  		nextArrow : $(".side-arrows .arrow-next")
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
  		slidesToShow: (!isMobile) ? 4 : 1,
  		slidesToScroll: (!isMobile) ? 4 : 1,
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
  		slidesToShow: (!isMobile) ? 3 : 1,
  		slidesToScroll: (!isMobile) ? 3 : 1,
  		prevArrow : $(".guide-arrows .arrow-prev"),
  		nextArrow : $(".guide-arrows .arrow-next")
	});


	if (isMobile) {
		$('#categories .slider').on('init',function () {
			//...
		}).slick({
			dots : false,
			infinite : true,
			pauseOnHover : false,
			pauseOnFocus : false,
			slide : ".cat-item",
			speed : 800,
			autoplay: true,
	  		autoplaySpeed: 5000,
	  		slidesToShow: 1,
	  		slidesToScroll: 1,
	  		prevArrow : $(".side-arrows .arrow-prev"),
	  		nextArrow : $(".side-arrows .arrow-next")
		});

		$(".feat-prods .side-arrows").appendTo('#products-carousel');
		//$(".guide-carousel-holder .side-arrows").appendTo('#guide-carousel');
	}
}
