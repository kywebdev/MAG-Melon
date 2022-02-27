$(document).ready(function() {

    // back to top smooth scrolling
	function smoothScroll(width) {
        if (width <= 635) {
            $('a[href^="#"]').on('click', function(e) {
				e.preventDefault();
		
				var target = this.hash;
				var $target = $(target);
		
				$('html, body').stop().animate({
					'scrollTop': 0 + $target.offset().top - 103
				}, 1000, 'swing', function() {});
			});
        } else {
            $('a[href^="#"]').on('click', function(e) {
				e.preventDefault();
		
				var target = this.hash;
				var $target = $(target);
		
				$('html, body').stop().animate({
					'scrollTop': 0 + $target.offset().top
				}, 1000, 'swing', function() {});
			});
        }
    }
    smoothScroll( $(window).width() );
    $(window).on('resize', function() {
        smoothScroll( $(this).width() );
	});
	
	// open the search field
	$('.search button').on('click', function() {
		$('.search').toggleClass('search-open');
		$('#search').focus();

		if ($(window).width() > 485) {  
			$('#searchModal').modal('hide');
		}
		if ($(window).width() <= 485) {
			$('#searchModal').modal('show');
		}
	});
	$('.wtb-search').on('click', function(e) {
		e.preventDefault();
		
		var target = this.hash;
		var $target = $(target);

		$('html, body').stop().animate({
			'scrollTop': 0 + $target.offset().top - 90
		}, 1000, 'swing', function() {});
	});

	// toggle the mobile nav
	$('.mobile-nav-toggle').on('click', function(e) {
		e.preventDefault();
		$('body').toggleClass('nav-open');
	});

	// move the nav
    function moveNav(width) {
        if (width <= 985) {
            $('.navbar').prependTo('.mobile-nav-container');
        } else {
            $('.navbar').insertAfter('.mobile-nav-toggle');
        }
    }
    moveNav( $(window).width() );
    $(window).on('resize', function() {
        moveNav( $(this).width() );
	});

	// recipes slider
	$('.recipes-slider').slick({
		arrows: false,
		fade: true,
		cssEase: 'linear',
		swipe: false,
		touchMove: false,
		adaptiveHeight: true
	});

	// recipe slider custom next button
	$('.next').on('click', function() {
		$('.recipes-slider').slick('slickNext');
	});

	// instagram image marquee
	function instagramImageMarquee() {
		// Variables
		// Play with this value to change the speed
		let tickerSpeed = 1;

		let flickity = null;
		let isPaused = false;
		const slideshowEl = document.querySelector('.instagram-marquee.js-slideshow');

		// Functions
		const update = () => {
			if (isPaused) return;
			if (flickity.slides) {
				flickity.x = (flickity.x + tickerSpeed) % flickity.slideableWidth;
				flickity.selectedIndex = flickity.dragEndRestingSelect();
				flickity.updateSelectedSlide();
				flickity.settle(flickity.x);
			}
			window.requestAnimationFrame(update);
		};

		const pause = () => {
			isPaused = true;
		};

		const play = () => {
			if (isPaused) {
				isPaused = false;
				window.requestAnimationFrame(update);
			}
		};

		// Create Flickity
		flickity = new Flickity(slideshowEl, {
			autoPlay: false,
			prevNextButtons: false,
			pageDots: false,
			wrapAround: true,
			cellAlign: 'left',
			imagesLoaded: true
		});
		flickity.x = 0;

		// Add Event Listeners
		slideshowEl.addEventListener('mouseenter', pause, false);
		slideshowEl.addEventListener('focusin', pause, false);
		slideshowEl.addEventListener('mouseleave', play, false);
		slideshowEl.addEventListener('focusout', play, false);

		flickity.on('dragStart', () => {
			isPaused = true;
		});

		// Start Ticker
		update();
	}
	if ($('.instagram-marquee.js-slideshow').length > 0) {
		instagramImageMarquee();
	}

	// recipe video
    $('#recipe-video .video__poster').on('click', function() {
		$(this).fadeOut();
	});

	// hide the view more button after it's been clicked
	$('.recipes-view-more').on('click', function() {
		$('.recipes-text p').addClass('hide');
		$('.recipes-button .recipes-view-more').addClass('hide');
		$('.recipe-circles__inner').addClass('show');
	});

	// set cookies
	$('.recipe-circles__circle').on('click', function() {
		localStorage.setItem('recipeCircleClicked', 'true');
	});
	setTimeout(function() {
		localStorage.setItem('recipeCircleClicked', 'false');
	}, 2000);

	// if cookie value is true, show recipe circles
	var state=localStorage.getItem('recipeCircleClicked');

	if (state=='true') {
		$('.recipe-circles__inner').addClass('show');
		$('.recipes-view-more').addClass('hide');
		$('.homepage-scroll-desktop .recipes .recipes-text p').addClass('hide');
		$('.recipes-fullpage__container .recipes-text p').addClass('hide');
	}
	if (state=='false') {
		$('.recipe-circles__inner').removeClass('show');
		$('.recipes-view-more').removeClass('hide');
		$('.homepage-scroll-desktop .recipes .recipes-text p').removeClass('hide');
		$('.recipes-fullpage__container .recipes-text p').removeClass('hide');
		deleteCookies();
	}

	// delete cookies
	function deleteCookies() {
		var theCookies = document.cookie.split(';');
		for (var i = 0 ; i < theCookies.length; i++) {
			document.cookie = theCookies[i].split('=')[0] + '=; path=/; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
		}
	}

	// when the download button is clicked, hide the coupon modal and show the form modal
	$('.download-btn .btn-green').on('click', function() {
		$('#couponModal').modal('hide');
		$('#couponModal').on('hidden.bs.modal', function () {
			$('#formModal').modal('show')
		});
	});

	// get the viewport height for ScrollMagic offsets
	var viewportHeight = $(window).height();
	var viewportHeightSixtyPercent = $(window).height() * .7;

	// ScrollMagic - homepage scroll pinning
	var controllerHome = new ScrollMagic.Controller();

	// pin the cantaloupe image
	new ScrollMagic.Scene({
		triggerElement: ".homepage-scroll-desktop",
		triggerHook: 0,
		//duration: "575%"
		duration: "395%"
	})
	.setPin('.homepage-scroll-desktop .cantaloupe-img', { pushFollowers: false })
	.addTo(controllerHome);

	// fade out the melon illustration
	new ScrollMagic.Scene({
		triggerElement: ".magnificent .fade-trigger",
		triggerHook: 0
	})
	.setClassToggle(".homepage-scroll-desktop .magnificent .melon-illustration__img", "fadeout")
	.addTo(controllerHome);

	// pin the about mag melon section
	new ScrollMagic.Scene({
		triggerElement: ".about-mag-melon",
		triggerHook: 0,
		duration: "100%"
	})
	.setPin('.about-mag-melon', { pushFollowers: false })
	.addTo(controllerHome);

	// fade out the nutrition facts
	new ScrollMagic.Scene({
		triggerElement: ".hide-nutrition-trigger",
		triggerHook: 1
	})
	.setClassToggle(".homepage-scroll-desktop .about-mag-melon__nutrition", "fadeout")
	.addTo(controllerHome);

	// fade in the about icons
	new ScrollMagic.Scene({
		triggerElement: ".hide-nutrition-trigger",
		triggerHook: 1
	})
	.setClassToggle(".homepage-scroll-desktop .about-mag-melon__icons", "fadein")
	.addTo(controllerHome);

	// remove cantaloupe image at tablet size, in the about section only
	new ScrollMagic.Scene({
		triggerElement: ".hide-melon-trigger",
		triggerHook: .5
	})
	.setClassToggle("body", "hide-melon")
	.addTo(controllerHome);

	// show cantaloupe image at tablet size, after the about section
	new ScrollMagic.Scene({
		triggerElement: ".homepage-scroll-desktop .recipes",
		triggerHook: .5
	})
	.setClassToggle("body", "show-melon")
	.addTo(controllerHome);

	// pin the orange background
	new ScrollMagic.Scene({
		triggerElement: ".homepage-scroll-desktop .recipes",
		triggerHook: 0,
		//duration: "250%"
		duration: "70%"
	})
	.setPin('.homepage-scroll-desktop .orange-bg', { pushFollowers: false })
	.addTo(controllerHome);

	// pin the recipe circles
	new ScrollMagic.Scene({
		triggerElement: ".homepage-scroll-desktop .recipes",
		triggerHook: 0,
		//duration: "35%"
		duration: "70%"
	})
	.setPin('.homepage-scroll-desktop .recipe-circles', { pushFollowers: false })
	.addTo(controllerHome);

	// pin the recipe text
	new ScrollMagic.Scene({
		triggerElement: ".homepage-scroll-desktop .recipes",
		triggerHook: 0,
		duration: "70%"
	})
	.setPin('.homepage-scroll-desktop .recipes-text', { pushFollowers: false })
	.addTo(controllerHome);

	// pin the recipe button
	new ScrollMagic.Scene({
		triggerElement: ".homepage-scroll-desktop .recipes",
		triggerHook: 0,
		duration: "70%"
	})
	.setPin('.homepage-scroll-desktop .recipes-button', { pushFollowers: false })
	.addTo(controllerHome);

	// pin the discover more button
	new ScrollMagic.Scene({
		triggerElement: ".homepage-scroll-desktop .recipes",
		triggerHook: 0,
		duration: "70%"
	})
	.setPin('.homepage-scroll-desktop .discover-more', { pushFollowers: false })
	.addTo(controllerHome);

	// animate the orange circle background
	/*new ScrollMagic.Scene({
		triggerElement: ".homepage-scroll-desktop .circle-trigger",
		triggerHook: 1
	})
	.setClassToggle(".homepage-scroll-desktop .orange-bg .circle", "circle-fadeout", )
	.addTo(controllerHome);*/

	// fade out the view more button
	/*new ScrollMagic.Scene({
		triggerElement: ".homepage-scroll-desktop .circle-trigger",
		triggerHook: 1
	})
	.setClassToggle(".homepage-scroll-desktop .recipes-view-more", "fadeout")
	.addTo(controllerHome);*/


	// ScrollMagic - recipes fullpage scroll pinning
	var controllerRecipes = new ScrollMagic.Controller();

	// pin the orange background
	new ScrollMagic.Scene({
		triggerElement: ".recipes-fullpage",
		triggerHook: 0,
		//duration: "320%"
		duration: "140%"
	})
	.setPin('.recipes-fullpage .orange-bg', { pushFollowers: false })
	.addTo(controllerRecipes);

	// pin the cantaloupe image
	new ScrollMagic.Scene({
		triggerElement: ".recipes-fullpage",
		triggerHook: 0,
		//duration: "320%"
		duration: "140%"
	})
	.setPin('.recipes-fullpage .cantaloupe-img', { pushFollowers: false })
	.addTo(controllerRecipes);

	// pin the recipe circles
	new ScrollMagic.Scene({
		triggerElement: ".recipes-fullpage",
		triggerHook: 0,
		duration: "140%"
	})
	.setPin('.recipes-fullpage .recipe-circles', { pushFollowers: false })
	.addTo(controllerRecipes);

	// pin the recipe text
	new ScrollMagic.Scene({
		triggerElement: ".recipes-fullpage",
		triggerHook: 0,
		offset: viewportHeightSixtyPercent,
		duration: "70%"
	})
	.setPin('.recipes-fullpage .recipes-text', { pushFollowers: false })
	.addTo(controllerRecipes);

	// pin the recipe button
	new ScrollMagic.Scene({
		triggerElement: ".recipes-fullpage",
		triggerHook: 0,
		offset: viewportHeightSixtyPercent,
		duration: "70%"
	})
	.setPin('.recipes-fullpage .recipes-button', { pushFollowers: false })
	.addTo(controllerRecipes);

	// animate the orange circle background
	/*new ScrollMagic.Scene({
		triggerElement: ".recipes-fullpage .circle-trigger",
		triggerHook: 1
	})
	.setClassToggle(".recipes-fullpage .orange-bg .circle", "circle-fadeout", )
	.addTo(controllerRecipes);*/

	// fade out the view more button
	/*new ScrollMagic.Scene({
		triggerElement: ".recipes-fullpage .circle-trigger",
		triggerHook: 1
	})
	.setClassToggle(".recipes-fullpage .recipes-view-more", "fadeout")
	.addTo(controllerRecipes);*/

});