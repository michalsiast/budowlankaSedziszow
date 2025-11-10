/*
|-----------------------------------------------------
| Template Name: Concoct - Professional Construction & Building Company HTML Template
| Author: Themesfamily
| Developer: Themesfamily
| Version: 1.0.0
|-----------------------------------------------------
|-----------------------------------------------------
*/
/***************************************************
==================== JS ======================
****************************************************
01. PRELOADER JS
02. ATTACHMENT IMAGE JS
03.	STICKY HEADER JS
04. MOBILE MENU 
05. SCROLL MENU
06. BACK TO TOP
07. WOW SCROLL
08. START COUNTER
09. LIGHTCASE JS
10. GSAP JS
11. MAILCHAMP JS
12. START CLIENT JS 
13. START PARTNER JS 
14. START INDUSTRIAL JS
15. START CATEGORIES JS
16. MARQUEE JS 
17. START HOME SLIDER
18. START GALLERY JS 
19. START BLOG GALLERY JS 
20. START NICE SELECT JS
****************************************************/

(function ($) {
    "use strict";
	
    /*--------------------------------------------------------------
	01.	PRELOADER JS
	--------------------------------------------------------------*/
	$(window).on('load', function () {
		const tl = gsap.timeline();
		const svg = $("#loader");

		// Step 1: Text fade out
		tl.to(".loader-inner .loaded", {
			delay: 1,
			y: -50,
			opacity: 0,
			duration: 0.5
		})

		// Step 2: SVG morph animation
		.to(svg, {
			duration: 0.6,
			attr: { d: "M0 502S175 272 500 272s500 230 500 230V0H0Z" },
			ease: "power1.inOut"
		})
		.to(svg, {
			duration: 0.6,
			attr: { d: "M0 2S175 1 500 1s500 1 500 1V0H0Z" },
			ease: "power1.inOut"
		})

		// Step 3: Preloader slide down (Up ? Down)
		.to(".preloader", {
			y: window.innerHeight, // move full height down
			duration: 1,
			ease: "power2.inOut",
		})

		// Step 4: Hide after animation complete
		.to(".preloader", {
			display: "none",
			zIndex: -1
		});
	});

    /*--------------------------------------------------------------
	PRELOADER JS
	--------------------------------------------------------------*/
	/*--------------------------------------------------------------
	Header Search js
	--------------------------------------------------------------*/
	$('.atf-searching-btn').on('click', function(){
		$('.atf-searching-area').addClass('active');
	});

	 $('.atf-searching-close-btn').on('click', function(){
		$('.atf-searching-area').removeClass('active');
	  });
	/*--------------------------------------------------------------
	02.	ATTACHMENT IMAGE JS
	--------------------------------------------------------------*/
    var bg = $(".atf_attach_bg");
    bg.css("background-image", function () {
        var attach = "url(" + $(this).data("background") + ")";
        return attach;
    });
    /*--------------------------------------------------------------
	03.	STICKY HEADER JS
	--------------------------------------------------------------*/
    $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();
        if (scroll < 100) {
				$(".atf-sticky-header").removeClass("atf-sticky-active");
			} else {
				$('.atf-sticky-header').addClass('atf-sticky-active');
			}
    });
    /*--------------------------------------------------------------
	04.	MOBILE MENU 
	--------------------------------------------------------------*/
    var atfHamburger = $(".atf-mobile-menu-active > ul").clone();
    var atfHamburgerMenu = $(".atf-hamburger-menu nav");
    atfHamburgerMenu.append(atfHamburger);
    if ($(atfHamburgerMenu).find(".sub-menu").length != 0) {
        $(atfHamburgerMenu).find(".sub-menu").parent().append('<button class="atf-menu-close"><i class="fas fa-chevron-right"></i></button>');
    }

    var atfSidebarMenu = $(".atf-hamburger-menu nav > ul > li button.atf-menu-close, .atf-hamburger-menu nav > ul li.menu-item-children > a, .atf-hamburger-menu nav > ul > li.atf-nav-item > a");
    $(atfSidebarMenu).on("click", function (e) {
        console.log(e);
        e.preventDefault();
        if (!$(this).parent().hasClass("active")) {
            $(this).parent().addClass("active");
            $(this).siblings(".sub-menu").slideDown();
        } else {
            $(this).siblings(".sub-menu").slideUp();
            $(this).parent().removeClass("active");
        }
    });
	

    // Hamburger Js
    $(".atf-hamburger-toogle").on("click", function () {
        $(".atf-hamburger").addClass("atf-hamburger-open");
        $(".atf-hamburger-overlay").addClass("atf-hamburger-overlay-open");
    });
		
    $(".atf-hamburger-close-toggle,.atf-hamburger-overlay").on("click", function () {
        $(".atf-hamburger").removeClass("atf-hamburger-open");
        $(".atf-hamburger-overlay").removeClass("atf-hamburger-overlay-open");
    });
	$(".atf-hamburger-menu nav > ul.atf-onepage-menu li a").on("click", function () {
        $(".atf-hamburger").removeClass("atf-hamburger-open");
        $(".atf-hamburger-overlay").removeClass("atf-hamburger-overlay-open");
    });


    /*--------------------------------------------------------------
	05.	SCROLL MENU
	--------------------------------------------------------------*/
    function scrollPage() {
        $(".atf-onepage-menu li a").on('click',function () {
            $(".atf-onepage-menu li a.active").removeClass("active");
            $(this).addClass("active");

            $("html, body")
                .stop()
                .animate(
                    {
                        scrollTop: $($(this).attr("href")).offset().top - 100,
                    },
                    300
                );
            return false;
        });
    }
    scrollPage();
	
    /*--------------------------------------------------------------
	06.	BACK TO TOP
	--------------------------------------------------------------*/
	$(window).scroll(function() {
		if ($(this).scrollTop() >= 100) {
			$('#back_to_top').addClass('active');
			$('.back_to_top').addClass('affix');
		} else {
			$('#back_to_top').removeClass('active');
			$('.back_to_top').removeClass('affix');
		}
	});
	
    /* --------------------------------------------------------
	07.	WOW SCROLL
	--------------------------------------------------------- */
    var wow = new WOW({
        //disabled for mobile
        mobile: false,
    });

    wow.init();

	/* --------------------------------------------------------
	08. START COUNTER
	--------------------------------------------------------- */
	$('.counter-number').counterUp({
		delay: 15,
		time: 2000
	});
    /* --------------------------------------------------------
	09.	LIGHTCASE JS
	--------------------------------------------------------- */
    const $lightcaseLinks = $("a[data-rel^=lightcase]");

    // Unbind any previous click events to avoid double trigger
    $lightcaseLinks.off('click.lightcase');

    // Initialize Lightcase once
    $lightcaseLinks.lightcase({
        transition: "elastic", // none, fade, fadeInline, elastic, scrollTop, etc.
        swipe: true,
        maxWidth: 1170,
        maxHeight: 600,
    });
   
	/* --------------------------------------------------------
	10.	GSAP JS
	--------------------------------------------------------- */

    // Wait for the DOM to be fully loaded before running all scripts
	document.addEventListener('DOMContentLoaded', () => {
	
	
    // ===============================================
    // TEAM Socil icon Cursor Implementation
    // ===============================================
	const toggleButtons = document.querySelectorAll('.social-toggle-btn');
	toggleButtons.forEach(button => {
		button.addEventListener('click', function() {
			this.classList.toggle('active');
			const socialIconsWrapper = this.nextElementSibling;
			if (socialIconsWrapper && socialIconsWrapper.classList.contains('social-icons-wrapper')) {
			  socialIconsWrapper.classList.toggle('active');
			}
		});
	});

    // ===============================================
    // GSAP Custom Cursor Implementation
    // ===============================================
    
		const cIn = document.querySelector('.cursor-in'),
		cOut = document.querySelector('.cursor-out');

		document.addEventListener('mousemove', e => {
		  gsap.to([cIn, cOut], {
			x: e.clientX,
			y: e.clientY,
			stagger: { each: 0.03 },
			duration: 0.25,
			ease: "power2.out"
		  });
		});

		// Hover animation on links and buttons
		document.querySelectorAll('a, button').forEach(el => {
		  el.addEventListener('mouseenter', () => {
			// outer ring bounce + fade
			gsap.to(cOut, { scale: 1.5, opacity: 0, duration: 0.4, ease: "power2.out" });
			gsap.to(cIn, { scale: 0.6, duration: 0.2, ease: "power1.out" });
		  });

		  el.addEventListener('mouseleave', () => {
			// reset smoothly
			gsap.to(cOut, { scale: 1, opacity: 0.5, duration: 0.3, ease: "power2.inOut" });
			gsap.to(cIn, { scale: 1, duration: 0.3, ease: "power1.inOut" });
		  });
		});

		
    // Note: The original code uses jQuery ($(".split-content").length > 0) 
    // and assumes SplitText and ScrollTrigger are loaded.
    
	if (typeof jQuery !== 'undefined' && typeof gsap !== 'undefined') {

		// --- Split Content animation ---
		if ($(".split-content").length > 0) {
			let st = $(".split-content");
			
			// Check again in case a previous selector was too broad
			if (st.length > 0) { 
				gsap.registerPlugin(SplitText, ScrollTrigger); // Register both plugins
				
				st.each(function (index, el) {
					el.split = new SplitText(el, {
						type: "lines,words,chars",
						linesClass: "atf-split-line",
					});
					
					gsap.set(el, {
						perspective: 400,
					});
					
					// Initial GSAP set for different animation directions
					if ($(el).hasClass("end")) {
						gsap.set(el.split.chars, { opacity: 0, x: "50", ease: "Back.easeOut" });
					}
					if ($(el).hasClass("start")) {
						gsap.set(el.split.chars, { opacity: 0, x: "-50", ease: "circ.out" });
					}
					if ($(el).hasClass("up")) {
						gsap.set(el.split.chars, { opacity: 0, y: "80", ease: "circ.out" });
					}
					if ($(el).hasClass("down")) {
						gsap.set(el.split.chars, { opacity: 0, y: "-80", ease: "circ.out" });
					}
					
					// Animation timeline
					el.anim = gsap.to(el.split.chars, {
						scrollTrigger: {
							trigger: el,
							start: "top 90%",
						},
						x: "0",
						y: "0",
						rotateX: "0",
						scale: 1,
						opacity: 1,
						duration: 0.6,
						stagger: 0.04,
					});
				});
			}
		}
		
		// --- Image Spread Animation ---
		let revealContainers = document.querySelectorAll(".spread");
		revealContainers.forEach((container) => {
			let image = container.querySelector("img");
			let tl = gsap.timeline({
				scrollTrigger: {
					trigger: container,
					toggleActions: "play none none none",
				},
			});

			tl.set(container, { autoAlpha: 1 });

			if (container.classList.contains("zoom-out")) {
				// Zoom-out effect
				tl.from(image, {
					duration: 1.5,
					scale: 1.4,
					ease: Power2.out,
				});
			} else if (container.classList.contains("start") || container.classList.contains("end")) {
				let xPercent = container.classList.contains("start") ? -100 : 100;
				tl.from(container, {
					duration: 1.5,
					xPercent,
					ease: Power2.out,
				});
				tl.from(image, {
					duration: 1.5,
					xPercent: -xPercent,
					scale: 1,
					delay: -1.5,
					ease: Power2.out,
				});
			}
		});
	} else {
		console.error("GSAP, jQuery, or required GSAP plugins are not loaded. Animations may not work.");
	}

	});
		
   /* --------------------------------------------------------
	11. MAILCHAMP JS
	--------------------------------------------------------- */
	$("#mc-form").ajaxChimp({
		url: "https://themesfamily.us22.list-manage.com/subscribe/post?u=e056d9c3aeb53b20aff997467&amp;id=e307d7e1b8&amp;f_id=0012cee1f0",
		/* Replace Your AjaxChimp Subscription Link */
	});
	
	/* --------------------------------------------------------
	12. START CLIENT JS 
		--------------------------------------------------------- */
	$('.testimonial-slider').slick({
		arrows: true,
		dots: false,
		autoplay:false,
		infinite: true,
		speed: 300,
		slidesToShow:3,
		slidesToScroll: 3,
		prevArrow: '<a class="slick-prev"><i class="fa-light fa-arrow-left" alt=" Icon"></i></a>',
		nextArrow: '<a class="slick-next"><i class="fa-light fa-arrow-right" alt="Icon"></i></a>',
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
					dots: true,
				}
			},
			{
				breakpoint: 580,
				settings: {
					arrows: false,
					dots: true,
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});
	/* --------------------------------------------------------
	END CLIENT JS 
	--------------------------------------------------------- */	
	/* --------------------------------------------------------
	13. START PARTNER JS 
		--------------------------------------------------------- */
	$('.atf__partner_slider_active').slick({
		arrows: false,
		dots: false,
		autoplay:true,
		infinite: true,
		speed: 300,
		slidesToShow:5,
		slidesToScroll: 1,
		prevArrow: '<a class="slick-prev"><i class="fa-light fa-arrow-left" alt=" Icon"></i></a>',
		nextArrow: '<a class="slick-next"><i class="fa-light fa-arrow-right" alt="Icon"></i></a>',
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 5,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					arrows: false,
					dots: false,
				}
			},
			{
				breakpoint: 580,
				settings: {
					arrows: false,
					dots: false,
					slidesToShow: 2,
					slidesToScroll: 1
				}
			}
		]
	});
	/* --------------------------------------------------------
	END PARTNER JS 
	--------------------------------------------------------- */

	/* --------------------------------------------------------
	14. START INDUSTRIAL JS 
		--------------------------------------------------------- */
	$('.atf__industrial_slider_active').slick({
		arrows: false,
		dots: false,
		autoplay:true,
		infinite: true,
		speed: 300,
		slidesToShow:3,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 1399,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					arrows: false,
					dots: false,
				}
			},
			{
				breakpoint: 580,
				settings: {
					arrows: false,
					dots: false,
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});
	/* --------------------------------------------------------
	END INDUSTRIAL JS 
	--------------------------------------------------------- */
	/* --------------------------------------------------------
	15. START CATEGORIES JS 
		--------------------------------------------------------- */
	$('.atf__categories_slider_active').slick({
		arrows: false,
		dots: false,
		autoplay:true,
		infinite: true,
		speed: 300,
		slidesToShow:4,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 1399,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					arrows: false,
					dots: false,
				}
			},
			{
				breakpoint: 580,
				settings: {
					arrows: false,
					dots: false,
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});
	/* --------------------------------------------------------
	END INDUSTRIAL JS 
	--------------------------------------------------------- */
	/* --------------------------------------------------------
	16. MARQUEE JS 
	--------------------------------------------------------- */	
	$('#marqueeLeft').marquee({
		speed: 70,     
		gap: 50,
		delayBeforeStart: 0,
		direction: 'left',
		duplicated: true,
		pauseOnHover: true
	});

	/* --------------------------------------------------------
	17.	START HOME SLIDER
	--------------------------------------------------------- */

	/* --------------------------------------------------------
	18. START GALLERY JS 
		--------------------------------------------------------- */
	$('.gallery-carousel').slick({
		dots: true,
		infinite: true,
		speed: 500,
		slidesToShow: 4, 
		slidesToScroll: 1,
		autoplay: false,
		arrows: false,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
					dots: true
				}
			}
		]
	});
	
	/* --------------------------------------------------------
	19. START BLOG GALLERY JS 
		--------------------------------------------------------- */
	$('.atf__blog_slider_active').slick({
		arrows: true,
		dots: false,
		autoplay:false,
		infinite: true,
		speed: 300,
		slidesToShow:1,
		slidesToScroll: 1,
		prevArrow: '<a class="slick-prev"><i class="fa-light fa-arrow-left" alt=" Icon"></i></a>',
		nextArrow: '<a class="slick-next"><i class="fa-light fa-arrow-right" alt="Icon"></i></a>',
	});
	/* --------------------------------------------------------
	END BLOG GALLERY JS 
	--------------------------------------------------------- */
	/* --------------------------------------------------------
	20.	START NICE SELECT JS
	--------------------------------------------------------- */
		$('select').niceSelect();	

	
})(jQuery);
