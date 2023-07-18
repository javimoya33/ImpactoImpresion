/***************************************************
==================== JS INDEX ======================
****************************************************
1. PreLoader Js
2. Mobile Menu Js
3. Sidebar Js
4. Search form Js
5. Sticky Header Js
6. Data Background Js
7. Nice Select Js
8. Banner Slider Js
9. Blog Slider Activation
10. Masonary Js
11. MagnificPopup Js
12. Wow Js
13. Counter Js
14. Testimonial Activation Js
15. Brand Activation Js
16. Case Activation Js

****************************************************/

(function ($) {
	("use strict");

	var windowOn = $(window);
	////////////////////////////////////////////////////
	// PreLoader Js
	windowOn.on("load", function () {
		$("#loading").fadeOut(500);
	});

	////////////////////////////////////////////////////
	// Mobile Menu Js
	$("#mobile-menu").meanmenu({
		meanMenuContainer: ".mobile-menu",
		meanScreenWidth: "991",
		meanExpand: ['<i class="fal fa-plus"></i>'],
	});

	////////////////////////////////////////////////////
	// Sidebar Js
	$(".sidebar-toggle-btn").on("click", function () {
		$(".sidebar__area").addClass("sidebar-opened");
		$(".body-overlay").addClass("opened");
	});
	$(".sidebar__close-btn").on("click", function () {
		$(".sidebar__area").removeClass("sidebar-opened");
		$(".body-overlay").removeClass("opened");
	});
	$(".body-overlay").on("click", function () {
		$(".sidebar__area").removeClass("sidebar-opened");
		$(".header__search-3").removeClass("search-opened");
		$(".body-overlay").removeClass("opened");
	});

	////////////////////////////////////////////////////
	// Search form Js
	$(".search-toggle").on("click", function () {
		$(".bd-search__box").toggleClass("search__open");
	});
	$("body > *:not(header)").on("click", function () {
		$(".bd-search__box").removeClass("search__open");
	});

	////////////////////////////////////////////////////
	// Sticky Header Js
	windowOn.on("scroll", function () {
		var scroll = $(window).scrollTop();
		if (scroll < 100) {
			$(".menu-sticky").removeClass("sticky");
		} else {
			$(".menu-sticky").addClass("sticky");
		}
	});

	////////////////////////////////////////////////////
	// Data Background Js
	$("[data-background").each(function () {
		$(this).css(
			"background-image",
			"url( " + $(this).attr("data-background") + "  )"
		);
	});

	////////////////////////////////////////////////////
	// Nice Select Js
	$("select").niceSelect();

	////////////////////////////////////////////////////
	// Banner Slider Js
	if (jQuery(".slider__active").length > 0) {
		let sliderActive1 = ".slider__active";
		let sliderInit1 = new Swiper(sliderActive1, {
			// Optional parameters
			slidesPerView: 1,
			slidesPerColumn: 1,
			paginationClickable: true,
			loop: true,
			effect: "fade",

			autoplay: {
				delay: 5000,
			},

			// If we need pagination
			pagination: {
				el: ".slider-pagination",
				// dynamicBullets: true,
				clickable: true,
			},

			// Navigation arrows
			navigation: {
				nextEl: ".slider-button-next",
				prevEl: ".slider-button-prev",
			},

			a11y: false,
		});

		function animated_swiper(selector, init) {
			let animated = function animated() {
				$(selector + " [data-animation]").each(function () {
					let anim = $(this).data("animation");
					let delay = $(this).data("delay");
					let duration = $(this).data("duration");

					$(this)
						.removeClass("anim" + anim)
						.addClass(anim + " animated")
						.css({
							webkitAnimationDelay: delay,
							animationDelay: delay,
							webkitAnimationDuration: duration,
							animationDuration: duration,
						})
						.one(
							"webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",
							function () {
								$(this).removeClass(anim + " animated");
							}
						);
				});
			};
			animated();
			// Make animated when slide change
			init.on("slideChange", function () {
				$(sliderActive1 + " [data-animation]").removeClass("animated");
			});
			init.on("slideChange", animated);
		}

		animated_swiper(sliderActive1, sliderInit1);
	}

	if (jQuery(".slider__active-2").length > 0) {
		let sliderActive1 = ".slider__active-2";
		let sliderInit1 = new Swiper(sliderActive1, {
			// Optional parameters
			slidesPerView: 1,
			slidesPerColumn: 1,
			paginationClickable: true,
			loop: true,
			effect: "fade",

			autoplay: {
				delay: 5000,
			},

			// If we need pagination
			pagination: {
				el: ".swiper-paginations",
				// dynamicBullets: true,
				clickable: true,
			},

			// Navigation arrows
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},

			a11y: false,
		});

		function animated_swiper(selector, init) {
			let animated = function animated() {
				$(selector + " [data-animation]").each(function () {
					let anim = $(this).data("animation");
					let delay = $(this).data("delay");
					let duration = $(this).data("duration");

					$(this)
						.removeClass("anim" + anim)
						.addClass(anim + " animated")
						.css({
							webkitAnimationDelay: delay,
							animationDelay: delay,
							webkitAnimationDuration: duration,
							animationDuration: duration,
						})
						.one(
							"webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",
							function () {
								$(this).removeClass(anim + " animated");
							}
						);
				});
			};
			animated();
			// Make animated when slide change
			init.on("slideChange", function () {
				$(sliderActive1 + " [data-animation]").removeClass("animated");
			});
			init.on("slideChange", animated);
		}

		animated_swiper(sliderActive1, sliderInit1);
	}


	// Blog Slider Activation 
	var blogSlider = new Swiper(".bd-blog__slider-active", {
		slidesPerView: 1,
		loop: true,
		pagination: {
			el: ".blog-pagination",
			clickable: true,
		},
		navigation: {
			nextEl: ".bd-blog-slider-button-prev",
			prevEl: ".bd-blog-slider-button-next",
		},
	});

	////////////////////////////////////////////////////
	// Masonary Js
	$(".grid").imagesLoaded(function () {
		// init Isotope
		var $grid = $(".grid").isotope({
			itemSelector: ".grid__item",
			percentPosition: true,
			masonry: {
				// use outer width of grid-sizer for columnWidth
				columnWidth: ".grid__item",
			},
		});

		// filter items on button click
		$(".bd-case-menu").on("click", "button", function () {
			var filterValue = $(this).attr("data-filter");
			$grid.isotope({ filter: filterValue });
		});

		//for menu active class
		$(".bd-case-menu button").on("click", function (event) {
			$(this).siblings(".active").removeClass("active");
			$(this).addClass("active");
			event.preventDefault();
		});
	});

	/* MagnificPopup img view */
	$(".image-popups").magnificPopup({
		type: "image",
		gallery: {
			enabled: true,
		},
	});

	/* magnificPopup video view */
	$(".popup-video").magnificPopup({
		type: "iframe",
	});

	////////////////////////////////////////////////////
	// Wow Js
	new WOW().init();

	////////////////////////////////////////////////////
	// Counter Js
	$(".counter").counterUp({
		delay: 10,
		time: 1000,
	});

	// Testimonial Activation Js
	const testimonial = new Swiper(".bd-tm__active", {
		// Default parameters
		slidesPerView: 3,
		spaceBetween: 40,
		loop: true,
		navigation: {
			nextEl: ".bd-tm__next",
			prevEl: ".bd-tm__prev",
		},
		// Responsive breakpoints
		breakpoints: {
			320: {
				slidesPerView: 1,
				spaceBetween: 30,
			},
			// when window width is >= 320px
			450: {
				slidesPerView: 1,
				spaceBetween: 30,
			},
			576: {
				slidesPerView: 1,
				spaceBetween: 30,
			},
			// when window width is >= 480px
			768: {
				slidesPerView: 2,
				spaceBetween: 30,
			},
			// when window width is >= 640px
			992: {
				slidesPerView: 3,
				spaceBetween: 43,
			},
			1400: {
				slidesPerView: 3,
				spaceBetween: 40,
			},
		},
	});


	// Brand Activation Js
	const brand = new Swiper(".bd-brand__active", {
		// Default parameters
		slidesPerView: 1,
		spaceBetween: 80,
		loop: true,
		autoplay: {
			delay: 3000,
			pauseOnMouseEnter:true,
		},
		// Responsive breakpoints
		breakpoints: {
			// when window width is >= 320px
			320: {
				slidesPerView: 1,
				spaceBetween: 10,
			},
			// when window width is >= 480px
			480: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
			// when window width is >= 640px
			640: {
				slidesPerView: 2,
				spaceBetween: 30,
			},
			991: {
				slidesPerView: 3,
				spaceBetween: 50,
			},
			1200: {
				slidesPerView: 4,
				spaceBetween: 70,
			},
			1400: {
				slidesPerView: 5,
				spaceBetween: 80,
			},
		},
	});

	const brand2 = new Swiper(".bd-brand__active2", {
		// Default parameters
		slidesPerView: 1,
		spaceBetween: 80,
		loop: true,

		autoplay: {
			delay: 3000,
			pauseOnMouseEnter:true,
		},
		// Responsive breakpoints
		breakpoints: {
			// when window width is >= 320px
			320: {
				slidesPerView: 1,
				spaceBetween: 5,
			},
			// when window width is >= 480px
			480: {
				slidesPerView: 2,
				spaceBetween: 10,
			},
			// when window width is >= 640px
			640: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
			991: {
				slidesPerView: 3,
				spaceBetween: 40,
			},
			1200: {
				slidesPerView: 4,
				spaceBetween: 50,
			},
			1400: {
				slidesPerView: 5,
				spaceBetween: 60,
			},
		},
	});


	// Case Activation Js
	const caseSlider = new Swiper(".bd-case__active", {
		// Default parameters
		slidesPerView: 4,
		spaceBetween:0,
		loop: true,
		// pagination: {
		// 	el: ".testimonial-pagination",
		// 	clickable: true,
		// },
		navigation: {
			nextEl: ".bd-tm__next",
			prevEl: ".bd-tm__prev",
		},
		// Responsive breakpoints
		breakpoints: {
			320: {
				slidesPerView: 1,
				spaceBetween:0,
			},
			// when window width is >= 320px
			450: {
				slidesPerView: 1,
				spaceBetween: 0,
			},
			576: {
				slidesPerView: 2,
				spaceBetween: 0,
			},
			// when window width is >= 480px
			768: {
				slidesPerView: 3,
				spaceBetween: 0,
			},
			// when window width is >= 640px
			992: {
				slidesPerView: 3,
				spaceBetween: 0,
			},
			1400: {
				slidesPerView: 4,
				spaceBetween: 0,
			},
		},
	});

	////////////////////////////////////////////////////
	// Case 2 Activation Js
	const portfolio = new Swiper('.bd-case2__active', {
		// Default parameters
		spaceBetween: 20,
		loop: true,
		observer: true,
		observeParents: true,
		centeredSlides: true,
		autoplay: {
			delay: 3000,
		},
		slidesPerView: 4,
		// Navigation arrows
		navigation: {
			nextEl: ".bd-case2-button-prev",
			prevEl: ".bd-case2-button-next",
		},
		pagination: {
			el: ".portfolio-pagination",
			// dynamicBullets: true,
			clickable: true,
		},

		// Responsive breakpoints
		breakpoints: {
			// when window width is >= 320px
			320: {
				slidesPerView: 1,
				spaceBetween: 20
			},
			// when window width is >= 480px
			480: {
				slidesPerView: 1,
				spaceBetween: 30
			},
			// when window width is >= 640px
			768: {
				slidesPerView: 2,
				spaceBetween: 20
			},
			// when window width is >= 640px
			991: {
				slidesPerView: 2,
				spaceBetween: 20
			},
			1200: {
				slidesPerView: 2,
				spaceBetween: 20
			},
			1400: {
				slidesPerView: 2,
				spaceBetween: 30
			},
			1600: {
				slidesPerView: 3,
				spaceBetween: 44
			},
		}
	});

	// testimonial-activation
	const bdDetaislSlider = new Swiper(".bd-details-slider-active", {
		// Default parameters
		slidesPerView: 2,
		spaceBetween: 20,
		loop: true,
		pagination: {
			el: ".bd-case-slider-pagination",
			clickable: true,
		},
		// Responsive breakpoints
		breakpoints: {
			320: {
				slidesPerView: 1,
			},
			// when window width is >= 320px
			450: {
				slidesPerView: 1,
			},
			576: {
				slidesPerView: 2,
			},
			// when window width is >= 480px
			768: {
				slidesPerView: 2,
			},
			// when window width is >= 640px
			992: {
				slidesPerView: 2,
			},
		},
	});



})(jQuery);