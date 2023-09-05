$(document).ready(function() {
   	// scroll function for header background on scroll //
	$(window).scroll(function () {
		var scroll = $(window).scrollTop();
		if (scroll > 100) {
			$("body").addClass("scrolled");
		} else {
			$("body").removeClass("scrolled");
		}
	});
  // Restaurant Love Slider
	$('#restaurants-love-friday').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
         margin:20,
		arrows: false,
		dots: true,
		autoplay: false,
		autoplaySpeed: 3000,
		speed: 1000,
		responsive: [
			{
			  breakpoint: 1600,
			  settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
			  }
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				}
			  },
			  {
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			  },
		]
	});
	// Restaurant Love Slider
	$('#clients-slider').slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		autoplay: false,
	});
	$('#payments-slider').slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		autoplay: false,
	});
	$('#data-driven-slider').slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		autoplay: false,
	});
	$('.accordion-button').on('click', function() {
        const accordionItem = $(this).closest('.accordion-item');
        const otherAccordionItems = $('.accordion-item').not(accordionItem);

        otherAccordionItems.removeClass('active');
        accordionItem.addClass('active');
      });
	  
	// WOW JS
	new WOW().init();


	// menu toggle button
	$('#collapse-btn').click(function () {
		$(".right-sidebar").addClass("activesidebar");
	});
	$('#sidebar-close-btn').click(function () {
		$(".right-sidebar").removeClass("activesidebar");
	});
	var hoverDelay;

  });

  document.addEventListener('DOMContentLoaded', function() {
	// Get all play buttons with the common class
	var playButtons = document.querySelectorAll(".video-auto-play-btn");
  
	// Add click event listener to each play button
	playButtons.forEach(function(playButton) {
	  playButton.addEventListener("click", function() {
		// Get the data-video-id attribute to know which video to play
		var videoId = this.getAttribute("data-video-id");
		var videoPlayer = videojs(videoId);
  
		// Play the video
		if (videoPlayer) {
		  videoPlayer.play();
		}
	  });
	});
  
	// Get all close buttons with the common class
	var closeButtons = document.querySelectorAll(".close-btn");
  
	// Add click event listener to each close button
	closeButtons.forEach(function(closeButton) {
	  closeButton.addEventListener("click", function(event) {
		event.preventDefault(); // Prevent the default anchor behavior (navigation)
  
		// Get the data-video-id attribute to know which video to pause
		var videoId = this.getAttribute("data-video-id");
		var videoPlayer = videojs(videoId);
  
		// Pause the video
		if (videoPlayer) {
		  videoPlayer.currentTime(0);
		  videoPlayer.pause();
		}
	  });
	});
  });

  