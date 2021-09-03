$(document).ready(function() {
	/*$('.flicker-example').flicker({
		dot_navigation: false
	});*/

	$('.t_menu').sidr({
		side: 'right'
	});

	$('.close_menu').click(function(){
		jQuery.sidr('toggle');
	});

	//$('#sidr').css('visibility','visible');

    $('.header_menu li').hover(
        function () {
            $('ul:first', this).css('display','block');
        }, 

        function () {
            $('ul:first', this).css('display','none');
        }
    );  
	
    if($('.container').width() == 300) {
		$('.home_feat_slider').bxSlider({
			minSlides: 1,
			maxSlides: 4,
			slideWidth: 280,
			slideMargin: 10,
			pager: false
		});        	
    } else if($('.container').width() == 748) {
		$('.home_feat_slider').bxSlider({
			minSlides: 1,
			maxSlides: 4,
			slideWidth: 239,
			slideMargin: 15,
			pager: false
		});    
    } else {
		$('.home_feat_slider').bxSlider({
			minSlides: 1,
			maxSlides: 4,
			slideWidth: 280,
			slideMargin: 15,
			pager: false
		});    
	}

	$('.header_spacing').css('height', $('#header').outerHeight() + 'px');

	//$('#big-video-wrap').css('margin-top', $('#header').outerHeight() + 'px');
	//$('#big-video-vid').css('top','0px');
	//$('#big-video-wrap').css('height','auto');

	$('.fullplate').css('height', ($(window).height() - $('#header').outerHeight()) + 'px');
	//$('#main_header_menu').slicknav();

	if($('#header').css('position') == 'absolute') 
		$('#header').css('top', $('.slicknav_menu').outerHeight() + 'px');
	else {
		$('#header').css('top', '0px');
		//$('#big-video-wrap').css('margin-top', '0px');
	}

	$('.home_blog_post').hover(
		function() {
			$(this).find('.home_blog_post_hover').css('display','block');
		},
		function() {
			$(this).find('.home_blog_post_hover').css('display','none');
		}
	);

	$('.home_blog_posts_small').hover(
		function() {
			$(this).find('.home_blog_posts_small_hover').css('display','block');
		},
		function() {
			$(this).find('.home_blog_posts_small_hover').css('display','none');
		}
	);

	function get_height(){
		var w = $('.home_post_thumb').width();
		var h = w * 0.72;
		$('.home_post_thumb').css('height',h);
	}

	get_height();

	$(window).resize(function(){
		get_height();
	});

	$('.home_box').hover(
		function() {
			$(this).find('.home_box_hover').css('display','block');
		},
		function() {
			$(this).find('.home_box_hover').css('display','none');
		}
	);

	$('.home_post_thumb a').hover(
        function () {
            $(this).children('.title').css('display','block');
        }, 
        function () {
            $(this).children('.title').css('display','none');
        }
    ); 

	$(".scroller").on("click",function(){
		//$(".webplate-content").animate({scrollTop:d},1e3,"easeInOutCubic");
		$("html, body").animate({ scrollTop: $('.fullplate').outerHeight() }, "slow");
		//alert('test');
	});	

	var demo1 = $("#demo1").slippry({
		adaptiveHeight: false,
		transition: 'fade',
		useCSS: true,
		speed: 1000,
		pause: 8000,
		auto: true
	});
});

$(window).load(function() {
	$('.header_spacing').css('height', $('#header').outerHeight() + 'px');
	//$('#big-video-wrap').css('margin-top', $('#header').outerHeight() + 'px');
	//$('#big-video-vid').css('top','0px');
	//$('#big-video-wrap').css('height','auto');
	$('.fullplate').css('height', ($(window).height() - $('#header').outerHeight()) + 'px');

	if($('#header').css('position') == 'absolute')
		$('#header').css('top', $('.slicknav_menu').outerHeight() + 'px');
	else {
		$('#header').css('top', '0px');
		//$('#big-video-wrap').css('margin-top', '0px');
	}
});

$(window).scroll(function() {
	$('.header_spacing').css('height', $('#header').outerHeight() + 'px');

	if($('#header').css('position') == 'absolute')
		$('#header').css('top', $('.slicknav_menu').outerHeight() + 'px');
	else {
		$('#header').css('top', '0px');
		//$('#big-video-wrap').css('margin-top', '0px');
	}
});

$(window).resize(function() {
	$('.header_spacing').css('height', $('#header').outerHeight() + 'px');
	if($('#header').css('position') == 'absolute')
		$('#header').css('top', $('.slicknav_menu').outerHeight() + 'px');
	else {
		$('#header').css('top', '0px');
		//$('#big-video-wrap').css('margin-top', '0px');
	}
});