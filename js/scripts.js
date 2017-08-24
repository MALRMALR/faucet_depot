var mobileMenu,cartSummary;

$("body").removeClass('no-js');

$(document).ready(function($) {


	$(".dropdown").hover(
        function() { $('.dropdown-menu', this).fadeIn("fast");
        },
        function() { $('.dropdown-menu', this).fadeOut("fast");
    });


	setSlideshow();

	// product detail page
	// prod specs tabs - jquery ui
	$("#product-info").tabs();


	$("#account-page").tabs();
	
	// event handlers for grid / row toggle
	//$(".collapse").collapse();


	$(".img-hover .cart-btn").click(function (e) {
		// e.preventDefault();
		location.href = $(this).prev().attr("href");
	});
	$(".img-hover .cart-btn button").click(function (e) {
		e.stopPropagation();
		alert("added to cart")
	})


	$(".view-btns a").click(function (e) {
		e.preventDefault();
		$(this).siblings().toggleClass("selected");
		$(this).toggleClass("selected");
		$(".prod-cat-item").toggleClass("col-md-4").toggleClass("col-md-12").toggleClass("list-view");

	});

	$(".qty-holder a").click(function (e) {
		e.preventDefault();
		v = $(this).siblings("input#qty").val();
		if ($(this).hasClass("minus-qty")) {
			v--;
			if (v <= 1) v = 1;
		} else {
			v++;
		}

		$(this).siblings("input#qty").val(v);

		if ($(this).parent().parent().hasClass("cart-qty"))  {
			/* is Quanity in cart -> change price */
			var item = $(this).parent().parent();
			var ip = item.next().text().substr(1);
			var t = ip*v;

			item.next().next().text("$"+t.toFixed(2))
		}

	})


	/*// grid icon
	$("i.fa.fa-th").on('click', function(e){
		e.preventDefault();

		$(this).addClass("selected");
		$("i.fa.fa-list").removeClass("selected");

		$(".prod-cat-item").removeClass("col-md-12").addClass("col-md-3");
	});

	// list icon
	$("i.fa.fa-list").on('click', function(e){
		e.preventDefault();

		$(this).addClass("selected");
		$("i.fa.fa-th").removeClass("selected");

		$(".prod-cat-item").removeClass("col-md-3").addClass("col-md-12");
	});*/

});

if (!isMobile) {
	var stickyHeader = false;
	$(window).scroll(function(event) {
		// console.log($(window).scrollTop())
		var st = $(window).scrollTop();
		if (st >= 200 && stickyHeader == false) {
			stickyHeader = true;
			// $(".header-bar").addClass("hideMe");
			$("body").addClass("isSticky");
			$("header.main-header").addClass("sticky");
		} else if (st < 200 && stickyHeader == true) {
			stickyHeader = false;
			// $(".header-bar").removeClass("hideMe");
			$("body").removeClass("isSticky");
			$("header.main-header").removeClass("sticky");
		}

	});
}



function setSlideshow () {

	//PRODUCT DETAIL PAGE

	// top image
	$(".product-slider-image").slick({
		slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: false,
	  fade: true,
		slide: '.img-slide',
	  asNavFor: '.product-slider-nav'
	});
	// bottom nav
	$(".product-slider-nav").slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.product-slider-image',
		slide: '.nav-slide',
		dots: true,
		centerMode: true,
		focusOnSelect: true
	});



	// Featured Products Slider
	$('.feat-prod-slider').on('init',function () {
		//...
	}).slick({
		dots : false,
		infinite : true,
		pauseOnHover : true,
		pauseOnFocus : true,
		slide : ".featured-slide",
		speed : 800,
		autoplay: true,
		autoplaySpeed: 5000,
		slidesToShow: (!isMobile) ? 4 : 1,
		slidesToScroll: (!isMobile) ? 4 : 1,
		prevArrow : $(".products-arrows .arrow-prev"),
		nextArrow : $(".products-arrows .arrow-next")
	});

	// Featured Collection Slider
	$(".feat-coll-slider").slick({
		dots : false,
		infinite : true,
		pauseOnHover : true,
		pauseOnFocus : true,
		slide : ".slick-slide",
		speed : 800,
		autoplay: true,
		autoplaySpeed: 5000,
		slidesToShow: (!isMobile) ? 5 : 1,
		slidesToScroll: (!isMobile) ? 5 : 1,
		prevArrow : $(".feat-coll-arrows .arrow-prev"),
		nextArrow : $(".feat-coll-arrows .arrow-next")
	});

	// Popular Categories Slider
	$(".popular-cat-slider").slick({
		dots : false,
		infinite : true,
		pauseOnHover : true,
		pauseOnFocus : true,
		slide : ".slick-slide",
		speed : 800,
		autoplay: true,
		autoplaySpeed: 5000,
		slidesToShow: (!isMobile) ? 5 : 1,
		slidesToScroll: (!isMobile) ? 5 : 1,
		prevArrow : $(".popular-cat-arrows .arrow-prev"),
		nextArrow : $(".popular-cat-arrows .arrow-next")
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
