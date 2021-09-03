// Check useragent to see if is mobile.  Also, check for windows NT and ability
// to use touchevents.  If both are true, then it is a mobile version of
// Windows (i.e., Surface, old resistive touch screen devices, etc)
window.isMobile = (
	navigator.userAgent.toLowerCase().match(/android/)
	|| navigator.userAgent.toLowerCase().match(/webos/i)
	|| navigator.userAgent.toLowerCase().match(/iphone/i)
	|| navigator.userAgent.toLowerCase().match(/ipad/i)
	|| navigator.userAgent.toLowerCase().match(/ipod/i)
	|| navigator.userAgent.toLowerCase().match(/blackberry/i)
	|| navigator.userAgent.toLowerCase().match(/windows phone/i))
		// It's a phone (or tablet)
		? true
		// Not a mobile device on initial look.  Time to make sure it
		// isn't a sneaky windows tablet
		: (
		(navigator.userAgent.toLowerCase().indexOf("windows nt") != -1 && navigator.userAgent.toLowerCase().indexOf("touch") != -1) && ((window.ontouchstart !== 'undefined') || (navigator.msMaxTouchPoints > 0)))
			// You cheeky fellow!  It's mobile!
			? true
			// Nope, boring, no touchy touchy, machine.
			: false;

$(document).ready(function() {
	// Marketing text collapse click bindings
	$('.marketing__collapse-heading').click(function(e) {
		$(e.target).closest('.marketing__collapse-heading').find('.fa').toggleClass('fa-chevron-circle-down fa-chevron-circle-up');
	});
	
	// Scroll to Top buttons
	$('a[href="#top"]').on('click', function(){
		$('body,html').animate({ scrollTop: 0 }, 'fast');
	});

	$('.contact-form--disclaimer-link').on('click', function(e) {
		e.preventDefault();
		e.stopPropagation();
		$('.contact-form--disclaimer').slideToggle();
	});
	$('.contact-form--disclaimer > .close').on('click', function(e) {
		e.preventDefault();
		e.stopPropagation();
		$('.contact-form--disclaimer').slideUp();
	});
});